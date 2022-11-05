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
    <div>
    <!-- Basic Horizontal form layout section start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Doctor Datatable
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
                            <th>Email</th>
                            <th>Department</th>
                            <th>User ID</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Physician as $key => $physician)
                        <tr>
                            <td>{{$physician->physician_id}}</td>
                            <td style="min-width:140px">{{$physician->physician_name}}</td>
                            <td>{{$physician->physician_numb}}</td>
                            <td style="min-width:140px">{{$physician->physician_address}}</td>
                            <td>{{$physician->physician_gender}}</td>
                            <td>{{$physician->physician_dob}}</td>
                            <td style="min-width:140px;max-width:200px">{{$physician->physician_email}}</td>
                            <td>{{$physician->department->department_name}}</td>
                            <td>{{$physician->physician_user_id}}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{route('physician.edit',[$physician->physician_id])}}" ui-toggle-class=""><i style="font-size: 25px; color:#39DA8A !important" class="fa-solid fa-pen-to-square"></i></a>
                                    <form id="delete-form" action="{{route('physician.destroy',[$physician->physician_id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
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
<!-- <div class="modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this Patient?</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="accept-delete" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->
<script>
    // $("#accept-delete").click(function() {
    //     $("#delete-form").submit();
    // });
</script>
@endsection