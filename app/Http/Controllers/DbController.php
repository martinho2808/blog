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

class DbController extends Controller
{
    public function db_display()
    {
        $selectedTable = request('db_table');
        $selectedTable_name = request('db_table');
        $order = request('order');
        $selectedTable = $this->getSelectedTableName($selectedTable);
        $session_tableselect = $selectedTable;
        $perPage = 10;
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
        
        $tableDataCollection = collect($tableData); // Convert to collection
        
        $page_show_data = new LengthAwarePaginator(
            $tableDataCollection,
            $totalDataCount,
            $perPage,
            $currentPage,
            [
                'path' => url('admin/manager'),
                'query' => [
                    'db_table' => $selectedTable_name,
                    'search' => $search,
                    'page' => $currentPage
                ]
            ]
        );
        
        return view('admin.manager', [
            'db_table' => $selectedTable_name,
            'tableData' => $tableDataCollection, // Use the collection
            'order' => $order,
            'title' => 'Management',
            'noData' => $tableDataCollection->isEmpty(),
            'page_show_data' => $page_show_data,
            'editing' => $editing,
            'page' => $currentPage,
            'totalDataCount' => $totalDataCount
        ]);
    }
    
    private function getSelectedTableName($selectedTable)
    {
        switch ($selectedTable) {
            case 'DB1':
                return 'events_register';
            case 'DB2':
                return 'event_information';
            case 'DB3':
                return 'another_table';
            case 'DB4':
                return 'yet_another_table';
            default:
                return 'events_register';
        }
    }
    public function updateData(Request $request)
    {
        $db = request('db');
        $db = $this->getdbName($db);
        $data = $request->except('_token', '_method', 'db');
    
        $model = Dbtable::query()->from($db);
        $model->where('id', $data['id'])->update($data);
        return redirect()->back()->with('success', 'Data deleted successfully');
    }
    

public function deleteData($db, $id)
{
    $db = request('db');
    $db = $this->getdbName($db);

    DB::table($db)->where('id', $id)->delete();
    return redirect()->back()->with('success', 'Data deleted successfully');
}
private function getdbName($db)
{
switch ($db) {
case 'DB1':
return 'events_register';
case 'DB2':
return 'event_information';
case 'DB3':
return 'another_table';
case 'DB4':
return 'yet_another_table';
default:
return 'events_register';
}
}
}
