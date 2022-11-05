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
                            <form class="form form-horizontal" action="{{route('patient.store')}}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Patient Name</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" class="form-control" name="patient_name" placeholder="">
                                        </div>

                                        <div class="col-md-3">
                                            <label>Patient Phone Number</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="number" class="form-control" name="patient_numb" placeholder="">
                                        </div>

                                        <div class="col-md-3">
                                            <label>Patient Address</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" class="form-control" name="patient_address" placeholder="">
                                        </div>
                                        <div class="col-md-3 ">
                                            <label>Patient Gender</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <select class="form-select" name="patient_gender">
                                                <option selected>Choose...</option>
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Patient Date of Birth</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="date" class="form-control" name="patient_dob" placeholder="">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Patient Diagnoses</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" class="form-control" name="patient_diagnoses" placeholder="">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Patient Status</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input type="text" class="form-control" name="patient_status" placeholder="">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Patient Notes</label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                        <textarea type="text" class="form-control" name="patient_notes"></textarea>
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