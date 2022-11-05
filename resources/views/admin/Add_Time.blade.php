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
                        <h4 class="card-title">ADD MORE TIME</h4>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('time.store')}}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Time</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="time" class="form-control" name="time_pick" placeholder="">
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