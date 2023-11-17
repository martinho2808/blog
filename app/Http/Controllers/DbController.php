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
        $selectedTable_name =request('db_table');
        $order = request('asc');
        $selectedTable = $this->getSelectedTableName($selectedTable);
        $session_tableselect = $selectedTable;
        $perPage = 5;

        $tableData = DB::table($selectedTable);
        
        if ($order === '' || $order === null) {
            $tableData = $tableData->get();
        } else {
            $tableData = $tableData->orderBy('id', $order)->get();
        }
        
        $currentPage = request()->input('page', 1);
        $offset = ($currentPage - 1) * $perPage;
        $pageItems = $tableData->slice($offset, $perPage);
        
        $page_show_data = new LengthAwarePaginator(
            $pageItems,
            $tableData->count(),
            $perPage,
            $currentPage,
            [
                'path' => url('admin/manager?db_table'),
                'query' => [
                    'db_table' => $selectedTable_name,
                    'asc' => $order
                ]
            ]
        );

        if ($tableData->isEmpty()) {
            return view('admin.manager', [
                'tableData' => $tableData,
                'order' => $order,
                'title' => 'Management',
                'noData' => true,
                'page_show_data' => $page_show_data
            ]);
        }
        
        return view('admin.manager', [
            'tableData' => $tableData,
            'order' => $order,
            'title' => 'Management',
            'noData' => $tableData->isEmpty(),
            'page_show_data' => $page_show_data
        ]);
    }

    private function getSelectedTableName($selectedTable)
    {
        // 根据需要进行动态表格名称的映射
        // 例如：
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
}