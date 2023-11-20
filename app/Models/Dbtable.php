<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dbtable extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $db;

    public function getTable()
    {
        return $this->selectedTable;
    }

    public function setSelectedTable($table)
    {
        $this->selectedTable = $table;
    }

    public function updateData($id, $db,$data)
    {
        return $this->newQuery()->from($db)->where('id', $id)->update($data);
    }
}

