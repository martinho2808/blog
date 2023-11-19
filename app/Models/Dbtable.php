<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dbtable extends Model
{
    public $timestamps = false;
    protected $guarded = []; // 允许所有字段进行批量赋值
    protected $db; // 添加一个属性用于存储选定的表名

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

