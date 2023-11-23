<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/* Control the link table and limit the input filedame */
class Eventreg extends Model
{
    protected $table = 'events_register';
    protected $fillable = ['user_name','fname', 'lnane','event_id','mobile','email','date','created_at','updated_at'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_name', 'user_name');
    }

    public function event()
    {
        return $this->belongsTo(EventInformation::class, 'event_id', 'event_id');
    }


}
