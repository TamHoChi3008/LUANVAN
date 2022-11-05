@extends('admin.admin_layout')
@section('main')
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<style>
    #buttonDelete {
        font-size: 20px;
        color: #39DA8A !important;
        border: none;
        border-radius: 100%;
        margin-left: 10px;
    }

    #table1>tbody>tr>td {
        padding-left: 1rem;
    }

    #table1>thead>tr>th {
        padding-left: 1rem;
    }
</style>
<div class="main-content container-fluid main1">
    <div class="page-title">
        <h3>Dashboard</h3>
    </div>
    <!-- Basic Horizontal form layout section start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Patient Datatable
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1" style="padding: 0;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>DofB</th>
                            <th>Diagnoses</th>
                            <th>Status</th>
                            <th>Notes</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Patient as $key => $patient)
                        <tr>
                            <td>{{$patient->patient_id}}</td>
                            <td>{{$patient->patient_name}}</td>
                            <td>{{$patient->patient_numb}}</td>
                            <td style="max-width:120px">{{$patient->patient_address}}</td>
                            <td>{{$patient->patient_gender}}</td>
                            <td>{{$patient->patient_dob}}</td>
                            <td style="max-width:140px">{{$patient->patient_diagnoses}}</td>
                            <td style="max-width:140px">{{$patient->patient_status}}</td>

                            <td style="max-width:170px">{{$patient->patient_notes}}</td>
                            <td></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{route('patient.edit',[$patient->patient_id])}}" id=<?php echo ($patient->patient_id) ?> ui-toggle-class=""><i style="font-size: 25px; color:#39DA8A !important" class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{route('patient.destroy',[$patient->patient_id])}}" method="POST" id="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <!-- <button type="button" id="buttonEdit" data-id=<?php echo ($patient->patient_id) ?> data-toggle="modal" data-target="#myModal" class="active"><i style="font-size: 20px; color:#39DA8A !important" class="fa-solid fa-circle-xmark"></i></button> -->
                                        <button type="submit" onclick=" return confirm('Are you sure you want to delete this department?')" id="buttonDelete" class="active"><i style="font-size: 20px; color:#39DA8A !important" class="fa-solid fa-circle-xmark"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<script>
</script>
@endsection