@extends('admin.admin_layout')
@section('main')
<div class="main-content container-fluid">
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
                        <h4 class="card-title">ADD MORE DEPARTMENT</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('department.update',[$department->department_id])}}" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Department Name</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="first-name" class="form-control" name="department_name" value="{{$department->department_name}}">
                                        </div>

                                        <div class="col-md-2">
                                            <label>Department Parent</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="email-id" class="form-control" name="department_parent" value="{{$department->department_parent}}">
                                        </div>

                                        <div class="col-md-2">
                                            <label>Department Description</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" id="contact-info" class="form-control" name="department_desc" value="{{$department->department_desc}}">
                                        </div>

                                        <div class="col-md-2">
                                            <label>Department Status</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <select class="form-select" id="inputGroupSelect01" name="department_status">
                                                @if($department->department_status == 1)
                                                <option value="0">Inactive</option>
                                                <option selected value="1">Active</option>
                                                @else 
                                                <option selected value="0">Inactive</option>
                                                <option value="1">Active</option>
                                                @endif
                                            </select>
                                        </div>


                                        <div class="col-sm-7 d-flex justify-content-end" style="margin-top: 20px;">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">Edit</button>
                                            
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