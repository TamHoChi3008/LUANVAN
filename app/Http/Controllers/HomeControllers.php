<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Physician;
use App\Models\Time;
use App\Models\Appointment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Arr;

class HomeControllers extends Controller
{
    public function index()
    {
        $Department = Department::all();
        $Time = Time::all();
        $Physician = Physician::all();

        return view('Home')->with(compact('Department','Time','Physician'));
    }
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
    public function check_patient()
    {
        Session::flush();
        return redirect('/');
    }
    public function handle_add_doctor()
    {
        $department_id = $_GET['appointment_department_id'];
        $doctor = Physician::where('physician_department_id',$department_id)->get();
        return $doctor;
    }
    public function make_appointment(Request $request)
    {
        // $data = $request->all();
        $data = $request->validate([
            'appointment_name' => 'required',
            'appointment_user_id' => 'required',
            'appointment_physician_id' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'appointment_phone' => 'required'
        ]);
        $Appointment = new Appointment();
        $Appointment->appointment_name = $data['appointment_name'];
        $Appointment->appointment_user_id = $data['appointment_user_id'];
        $Appointment->appointment_physician_id = $data['appointment_physician_id'];
        $Appointment->appointment_notes = $data['appointment_notes'];
        $Appointment->appointment_phone = $data['appointment_phone'];
        $Appointment->appointment_email = $data['appointment_email'];
        $Appointment->appointment_date = $data['appointment_date'];
        $Appointment->appointment_time = $data['appointment_time'];
        $Appointment->save();
        Toastr::success('Add Appointment successfully', 'Successfully');
        return redirect('/');
    }
}
