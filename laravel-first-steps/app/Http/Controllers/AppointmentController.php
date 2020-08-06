<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AppointmentController extends Controller
{
    public function getAll()
    {
        return Appointment::with('user')->get();
    }

    public function myAppointments()
    {

    }

    public function create(Request $request)
    {
        $body = $request->all();
        $validator = Validator::make($body, [
            'DateAndHour' => 'required|date',
            'AppointmentType' => 'required|string'
        ]);
        if($validator->fails()) {
            return response()->json([
                'message' => 'There was a problem trying to create the appointment',
                'errors' => $validator->errors(),
            ], 400);
        }
        $body['user_id'] = Auth::id();
        //Devuelve el id del usuario y hace la request a traves del Bearer token
        $appointment = Appointment::create($body);
        return $appointment;
    }

    public function update(Request $request, $id)
    {
        $body = $request->all();
        $validator = Validator::make($body, [
            'date' => 'required|date',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'There was a problem trying update the appointment',
                'errors' => $validator->errors()
            ], 400);
        }
        $appointment = Appointment::find($id);
        $appointment->update($body);
    }
    public function delete($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return response()->json(['message' => 'Appointment successfully deleted', 'appointment' => $appointment]);
    }

}
