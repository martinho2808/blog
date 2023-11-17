<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dbtable extends Model
{

    public function getTable()
    {
        return $this->selectedTable;
    }

    public function setSelectedTable($table)
    {
        $this->selectedTable = $table;
    }
    
}
