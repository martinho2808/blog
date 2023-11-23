<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dbtable;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use views;
use \PDF;

class DbController extends Controller
{
    /* get database tableinformation, display in website, support user soft and search the table data */
    public function db_display()
    {
        /* connect the db get all table names for manager page gen the table name */
        $tableNames = DB::connection('laravel')->getDoctrineSchemaManager()->listTableNames();
        /* for test */
        //dd($tableNames);

        /* get the user input , if have not seletct table, default show the first table */
        $selectedTable = request()->input('db_table') ?? $tableNames[0];

        /* get soft / search input , and set limit/offest default  */
        $order = request('order');
        $perPage = 5;
        $currentPage = request('page', 1);
        $offset = ($currentPage - 1) * $perPage;
        $editing = request('editing') ?? false;
        $search = request('search');

        /* use got talbe name select * get data */
        $query = DB::table($selectedTable);
        /* if search / order not null , modify the sql code (e.g. select * form tablename where xx like xx offset limit....) */
        if ($search) {
            $query->where(function ($q) use ($search, $selectedTable) {
                $columns = Schema::getColumnListing($selectedTable);
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', '%' . $search . '%');
                }
            });
        }
        
        /* for test */ 
        //dd($query);
        
        /* for download_pdf function use. PDF data need to get all data, so that not need to offset */
        $this->download_tabledata = $query->get();
        
        /* count the number of data for display find total data   */
        $totalDataCount = $query->count();
        
        if ($order === '' || $order === null) {
            $tableData = $query->offset($offset)
                ->limit($perPage)
                ->get();
        } else {
            $tableData = $query->offset($offset)
                ->limit($perPage)
                ->orderBy($order)
                ->get();
        }
        
        /* change result to collect, it is laravel funstion for data processing */
        $tableDataCollection = collect($tableData);
        
        /* save key thing to url */
        $page_show_data = new LengthAwarePaginator(
            $tableDataCollection,
            $totalDataCount,
            $perPage,
            $currentPage,
            [
                'path' => url('admin/manager'),
                'query' => [
                    'db_table' => $selectedTable,
                    'search' => $search,
                    'page' => $currentPage
                ]
            ]
        );
        /* return required data to manager page */
        return view('admin.manager', [
            'title' => 'Management',
            'tableNames' => $tableNames,
            'db_table' => $selectedTable,
            'tableData' => $tableDataCollection,
            'order' => $order,
            'search' => $search,
            /*use in if cant find the data will display nodata */
            'noData' => $tableDataCollection->isEmpty(),
            'page_show_data' => $page_show_data,
            'editing' => $editing,
            'page' => $currentPage,
            'totalDataCount' => $totalDataCount
        ]);
    }
    
    /* sql updata funtion */
    public function updateData(Request $request)
    {   
        /* get select db */
        $db = request('db');
        /* except not use data , if you use dd($db) will see it*/
        $data = $request->except('_token', '_method', 'db');
        $model = Dbtable::query()->from($db);
        /*sql code like updata xx form tablename where id="xx" */
        $model->where('id', $data['id'])->update($data);
        /* for display success meassges */
        session()->flash('Data_updata_successfully');
        return redirect()->back()->with('success');
    }
    
    public function deleteData($db, $id)
    {
        /* get select db */
        $db = request('db');
        /*sql code like delete xx form tablename where id="xx" */
        DB::table($db)->where('id', $id)->delete();
        /* for display success meassges */
        session()->flash('Data_deleted_successfully');
        return redirect()->back()->with('success');
    }
    
    /* download selected table data */
    public function downloadPdf($db, $order, $search)
    {
        /* get currently selected data */
        $selectedTable = $db;
        $order = $order;
        $search = $search;
        
        $query = DB::table($selectedTable);
        /* search and order sql */
        if ($search !== "null") {
            $query->where(function ($q) use ($search, $selectedTable) {
                /* get table all columnname */
                $columns = Schema::getColumnListing($selectedTable);
                /* use loop to make search all columname sql*/
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', '%' . $search . '%');
                }
            });
        }
        
        if ($order !== "null") {
            $tableData = $query->orderBy($order)
                ->get();
        } else {
            $tableData = $query->get();
        }
        
        /* send the data to pdf table */
        $pdf = PDF::loadView('pdf.table', ['tableData' => $tableData]);
        /* download pdf */
        return $pdf->download('table.pdf');
    }


    public function downloadAllTables()
    {
        /* report requested table */
        $tableNames = ['events_register', 'event_information', 'game_result', 'users'];
        /* Set array */
        $data = [];
        
        /* use loop to make search requested table sql*/
        foreach ($tableNames as $tableName) {
            $query = DB::table($tableName)->get();
            $data[$tableName] = $query;
        }
        
        /* send the data to pdf table */
        $pdf = PDF::loadView('pdf.all-tables', ['data' => $data]);
        /* download pdf */
        return $pdf->download('report.pdf');
    }
}