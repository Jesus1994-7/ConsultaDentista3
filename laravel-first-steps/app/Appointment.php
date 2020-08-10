<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    

    protected $fillable = ['appointment_type_id','date_and_hour', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id', 'users');
    }

    public function appointmentType()
    {
        return $this->belongsTo('App\AppointmentType');
    }
}
