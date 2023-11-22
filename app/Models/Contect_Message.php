<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contect_Message extends Model
{
    protected $table = 'contect_message';
    protected $fillable = ['name','contect_email','message'];
}

