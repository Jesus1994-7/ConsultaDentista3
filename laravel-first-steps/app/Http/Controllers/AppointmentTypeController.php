<?php

namespace App\Http\Controllers;

use App\AppointmentType;
use Illuminate\Http\Request;

class AppointmentTypeController extends Controller
{
    public function getAll()
    {
        return AppointmentType::all();
    }
}
