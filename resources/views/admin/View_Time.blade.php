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
</style>
<div class="main-content container-fluid main1">
    <div class="page-title">
        <h3>Dashboard</h3>
    </div>
    <!-- Basic Horizontal form layout section start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Time schedule Datatable
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Time as $key => $time)
                        <tr>
                            <td >{{$time->time_id}}</td>
                            <td >{{$time->time_pick}}</td>
                            <td >
                                <div class="d-flex align-items-center">
                                    <a href="{{route('time.edit',[$time->time_id])}}" ui-toggle-class=""><i style="font-size: 25px; color:#39DA8A !important" class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{route('time.destroy',[$time->time_id])}}" method="POST" id="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <!-- <button type="button" data-id="<?php echo ($time->time_id); ?>" id="buttonEdit" class="active deleteButton"><i style="font-size: 20px; color:#39DA8A !important" class="fa-solid fa-circle-xmark"></i></button> -->
                                        <button type="submit" onclick=" return confirm('Are you sure you want to delete this time?')" id="buttonDelete" class="active"><i style="font-size: 20px; color:red !important" class="fa-solid fa-circle-xmark"></i></button>
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
<!-- <div class="modal" id="myModal" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this Time?</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="accept-delete" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->
<script>
    //     $(".deleteButton").click(function() {
    //         // alert("ádadasdasda");
    //         $("#myModal").show();
    //         // $("#accept-delete").click(function() {
    //         //     $("#delete-form").submit();
    //         // });
    //     });
    //     $.ajax({
    //     url: '/script.cgi',
    //     type: 'DELETE',
    //     success: function(result) {
    //         // Do something with the result
    //     }
    // });
</script>
@endsection