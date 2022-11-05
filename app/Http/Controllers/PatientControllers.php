<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use Brian2694\Toastr\Facades\Toastr;
class PatientControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Patient = Patient::all();
        return view('admin.View_Patient')->with(compact('Patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Add_Patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_name' => 'required|max:255',
            'patient_numb' => 'required',
            'patient_address' => 'required|max:255',
            'patient_gender' => 'required|max:255',
            'patient_dob' => 'required',
            'patient_diagnoses' => 'nullable|max:255',
            'patient_status' => 'nullable|max:255',
            'patient_notes' => 'nullable',
            'patient_user_id' => 'nullable'
        ]);
        $Patient = new Patient();
        $Patient->patient_name = $data['patient_name'];
        $Patient->patient_numb = $data['patient_numb'];
        $Patient->patient_address = $data['patient_address'];
        $Patient->patient_gender = $data['patient_gender'];
        $Patient->patient_dob = $data['patient_dob'];
        $Patient->patient_diagnoses = $data['patient_diagnoses'];
        $Patient->patient_status = $data['patient_status'];
        $Patient->patient_notes = $data['patient_notes'];
        $Patient->patient_user_id = "";
        $Patient->save();
        Toastr::success('Add Patient successfully', 'Successfully');
        return redirect('/admin/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('admin.Edit_Patient')->with(compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'patient_name' => 'required|max:255',
            'patient_numb' => 'required',
            'patient_address' => 'required|max:255',
            'patient_gender' => 'required|max:255',
            'patient_dob' => 'required',
            'patient_diagnoses' => 'nullable|max:255',
            'patient_status' => 'nullable|max:255',
            'patient_notes' => 'nullable',
            'patient_user_id' => 'nullable'
        ]);
        $patient = Patient::find($id);
        $patient->patient_name = $data['patient_name'];
        $patient->patient_numb = $data['patient_numb'];
        $patient->patient_address = $data['patient_address'];
        $patient->patient_gender = $data['patient_gender'];
        $patient->patient_dob = $data['patient_dob'];
        $patient->patient_diagnoses = $data['patient_diagnoses'];
        $patient->patient_status = $data['patient_status'];
        $patient->patient_notes = $data['patient_notes'];

        $patient->save();
        Toastr::success('Update Patient successfully', 'Successfully');
        return redirect('/admin/patient');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $a  = Patient::find($id);
        // print_r($a);die;
        Patient::find($id)->delete();
        Toastr::success('Delete Patient successfully', 'Successfully');
        return redirect()->back();
    }
}
