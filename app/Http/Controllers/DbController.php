<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dbtable;
use Illuminate\Support\Facades\Schema;
use views;

class DbController extends Controller
{
    public function db_display()
    {
        $selectedTable = request('table') ?? 'events_register'; // 

        $model = new Dbtable();
        $model->setSelectedTable($selectedTable);
    
        $tableData = $model->get(); // 
        $tableName = $tableData->first()->getTable();
        return view('admin.manager', ['tableData' => $tableData, 'title' => 'Management']);
    }
}
