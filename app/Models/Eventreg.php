<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events_register'; // 指定表名为 'events_register'
    protected $fillable = ['fname', 'lnane','event','mobile','email','date','created_at','updated_at	
    '];
}