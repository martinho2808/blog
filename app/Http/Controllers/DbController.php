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
    public function db_display()
    {
        $tableNames = DB::connection('laravel')->getDoctrineSchemaManager()->listTableNames();
        //dd($tableNames);

        $selectedTable = request()->input('db_table') ?? $tableNames[0];
        $order = request('order');
        $perPage = 5;
        $currentPage = request('page', 1);
        $offset = ($currentPage - 1) * $perPage;
        $editing = request('editing') ?? false;
        $search = request('search');

        $query = DB::table($selectedTable);

        if ($search) {
            $query->where(function ($q) use ($search, $selectedTable) {
                $columns = Schema::getColumnListing($selectedTable);
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', '%' . $search . '%');
                }
            });
        }
        
        //dd($query);
        
        $this->download_tabledata = $query->get();
        
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
        
        $tableDataCollection = collect($tableData);
        
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
        
        return view('admin.manager', [
            'title' => 'Management',
            'tableNames' => $tableNames,
            'db_table' => $selectedTable,
            'tableData' => ($selectedTable === "report") ? $report : $tableDataCollection,
            'order' => $order,
            'search' => $search,
            'noData' => ($selectedTable === "report") ? $report->isEmpty() : $tableDataCollection->isEmpty(),
            'page_show_data' => $page_show_data,
            'editing' => $editing,
            'page' => $currentPage,
            'totalDataCount' => $totalDataCount
        ]);
    }
    
    public function updateData(Request $request)
    {
        $db = request('db');
        $data = $request->except('_token', '_method', 'db');
        $model = Dbtable::query()->from($db);
        $model->where('id', $data['id'])->update($data);
        return redirect()->back()->with('success', 'Data updated successfully');
    }
    
    public function deleteData($db, $id)
    {
        $db = request('db');
        DB::table($db)->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data deleted successfully');
    }
    
    public function downloadPdf($db, $order, $search)
    {
        $selectedTable = $db;
        $order = $order;
        $search = $search;
        
        $query = DB::table($selectedTable);
        
        if ($search !== "null") {
            $query->where(function ($q) use ($search, $selectedTable) {
                $columns = Schema::getColumnListing($selectedTable);
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
        
        $pdf = PDF::loadView('pdf.table', ['tableData' => $tableData]);
        return $pdf->download('table.pdf');
    }
    public function downloadAllTables()
    {
        $tableNames = ['events_register', 'event_information', 'game_result', 'users'];
        $data = [];
    
        foreach ($tableNames as $tableName) {
            $query = DB::table($tableName)->get();
            $data[$tableName] = $query;
        }
    
        $pdf = PDF::loadView('pdf.all-tables', ['data' => $data]);
        return $pdf->download('report.pdf');
    }
}