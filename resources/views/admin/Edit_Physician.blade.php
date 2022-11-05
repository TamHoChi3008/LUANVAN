@extends('admin.admin_layout')
@section('main')
<div class="main-content container-fluid main1">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ADD MORE PATIENT</h4>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('physician.update',[$physician->physician_id])}}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Physician Name</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" class="form-control" name="physician_name" value="{{$physician->physician_name}}">
                                        </div>

                                        <div class="col-md-3">
                                            <label>Physician Phone Number</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="number" class="form-control" name="physician_numb" value="{{$physician->physician_numb}}">
                                        </div>

                                        <div class="col-md-3">
                                            <label>Physician Address</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" class="form-control" name="physician_address" value="{{$physician->physician_address}}">
                                        </div>
                                        <div class="col-md-3 ">
                                            <label>Physician Gender</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <select class="form-select" name="physician_gender">
                                                @if($physician->physician_gender == 1)
                                                <option value="0">Male</option>
                                                <option selected value="1">Female</option>
                                                @else
                                                <option selected value="0">Male</option>
                                                <option value="1">Female</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Physician Date of Birth</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="date" class="form-control" name="physician_dob" value="{{$physician->physician_dob}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Physician Email</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="email" class="form-control" name="physician_email" value="{{$physician->physician_email}}">
                                        </div>
                                        <div class="col-md-3 ">
                                            <label>Physician Department</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <select class="form-select" name="physician_department_id">
                                                @foreach($Department as $key => $department)
                                                @if($department->department_id == $physician->physician_department_id)
                                                <option selected value="{{$department->department_id}}">{{$department->department_name}}</option>
                                                @else
                                                <option value="{{$department->department_id}}">{{$department->department_name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-sm-7 d-flex justify-content-end" style="margin-top: 20px;">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->
</div>
@endsection