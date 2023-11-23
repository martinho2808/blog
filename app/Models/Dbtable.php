<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dbtable extends Model
{   
    /* on/off timestamps */
    public $timestamps = false;
    /* since to much field name, and to much table, so set all can be change */
    protected $guarded = [];
    /* get db */
    protected $db;

    /* get db name */
    public function getTable()
    {
        return $this->selectedTable;
    }
   /* get select table */
    public function setSelectedTable($table)
    {
        $this->selectedTable = $table;
    }
    /* for updata */
    public function updateData($id, $db,$data)
    {
        return $this->newQuery()->from($db)->where('id', $id)->update($data);
    }
}

