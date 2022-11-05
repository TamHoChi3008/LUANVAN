<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Physician;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class PhysicianControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Physician = Physician::with('department')->get();
        return view('admin.View_Physician')->with(compact('Physician'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Department = Department::where('department_status','1')->get();;
        return view('admin.Add_Physician')->with(compact('Department'));
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
            'physician_name' => 'required|max:255',
            'physician_numb' => 'required',
            'physician_address' => 'required|max:255',
            'physician_gender' => 'required|max:255',
            'physician_dob' => 'required',
            'physician_email' => 'nullable|max:255',
            'physician_department_id' => 'nullable',
            'physician_user_id' => 'nullable'
        ]);
        $Physician = new Physician();
        $Physician->physician_name = $data['physician_name'];
        $Physician->physician_numb = $data['physician_numb'];
        $Physician->physician_address = $data['physician_address'];
        $Physician->physician_gender = $data['physician_gender'];
        $Physician->physician_dob = $data['physician_dob'];
        $Physician->physician_email = $data['physician_email'];
        $Physician->physician_department_id = $data['physician_department_id'];
        $Physician->physician_user_id = "1";
        $Physician->save();
        Toastr::success('Add new Doctor successfully', 'Successfully');
        return redirect()->back();

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

        $Department = Department::all();
        $physician = Physician::find($id);
        return view('admin.Edit_Physician')->with(compact('physician','Department'));
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
            'physician_name' => 'required|max:255',
            'physician_numb' => 'required',
            'physician_address' => 'required|max:255',
            'physician_gender' => 'required|max:255',
            'physician_dob' => 'required',
            'physician_email' => 'nullable|max:255',
            'physician_department_id' => 'nullable|max:255',
            'physician_user_id' => 'nullable'
        ]);
        $Physician = Physician::find($id);
        $Physician->physician_name = $data['physician_name'];
        $Physician->physician_numb = $data['physician_numb'];
        $Physician->physician_address = $data['physician_address'];
        $Physician->physician_gender = $data['physician_gender'];
        $Physician->physician_dob = $data['physician_dob'];
        $Physician->physician_email = $data['physician_email'];
        $Physician->physician_department_id = $data['physician_department_id'];
        $Physician->save();
        Toastr::success('Update Doctor successfully', 'Successfully');
        return redirect('/admin/physician');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Physician::find($id)->delete();
        Toastr::success('Delete Doctor successfully', 'Successfully');
        return redirect()->back();
       
    }
}
