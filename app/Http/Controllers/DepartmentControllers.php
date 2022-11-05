<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Brian2694\Toastr\Facades\Toastr;
class DepartmentControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Department = Department::all();
        return view('admin.View_Department')->with(compact('Department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Add_Department');
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
            'department_name' => 'required|max:255',
            'department_parent' => 'required',
            'department_desc' => 'nullable',
            'department_status' => 'required'
        ]);
        $Department = new Department();
        $Department->department_name = $data['department_name'];
        $Department->department_parent = $data['department_parent'];
        $Department->department_desc = $data['department_desc'];
        $Department->department_status = $data['department_status'];
        $Department->save();
        Toastr::success('Add Department successfully', 'Successfully');
        return redirect('/admin/department');
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
        $department = Department::find($id);
        return view('admin.Edit_Department')->with(compact('department'));
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
            'department_name' => 'required|max:255',
            'department_parent' => 'required',
            'department_desc' => 'nullable',
            'department_status' => 'required'
        ]);
        $department = Department::find($id);
        $department->department_name = $data['department_name'];
        $department->department_parent = $data['department_parent'];
        $department->department_desc = $data['department_desc'];
        $department->department_status = $data['department_status'];
        $department->save();
        Toastr::success('Update Department successfully', 'Successfully');
        return redirect('/admin/department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::find($id)->delete();
        Toastr::success('Delete Department successfully', 'Successfully');
        return redirect()->back();
    }
}
