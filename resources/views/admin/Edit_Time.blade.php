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
                        <h4 class="card-title">EDIT MORE TIME</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('time.update',[$time->time_id])}}" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Time Name</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="time" id="first-name" class="form-control" name="time_pick" value="{{$time->time_pick}}">
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