<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{   
    protected $table = 'game_result';
    protected $fillable = ['user_name','moves', 'time', 'mode','created_at','updated_at'];
}
