<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $fillable = ['AppointmentType','DateAndHour', 'user_id'];

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id', 'users');
    }
}
