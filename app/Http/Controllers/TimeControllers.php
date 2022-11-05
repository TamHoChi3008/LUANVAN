<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Time;
use Brian2694\Toastr\Facades\Toastr;
class TimeControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Time = Time::all();
        return view('admin.View_Time')->with(compact('Time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Add_Time');
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
            'time_pick' => 'required',
        ]);
        $Time = new Time();
        $Time->time_pick = $data['time_pick'];
        $Time->save();
        Toastr::success('Add Time successfully', 'Successfully');
        return redirect('/admin/time');
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
        $time = Time::find($id);
        return view('admin.Edit_Time')->with(compact('time'));
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
            'time_pick' => 'required|max:255',
        ]);
        $time = Time::find($id);
        $time->time_pick = $data['time_pick'];
        $time->save();
        Toastr::success('Update Time successfully', 'Successfully');
        return redirect('/admin/time');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Time::find($id)->delete();
        Toastr::success('Delete Department successfully', 'Successfully');
        return redirect()->back();
    }
}
