@extends('layouts.admin.layout.master')
@section('titleKey','Table-Datatable')
@section('content')

<div class="content-page">

    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">DataTables</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>Our Enrolled Student</h3>
                            <h6 class="float-right">Total Enrolled: <span class="badge badge-danger">{{count($allEnroll)}}</span></h6>

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SL No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Course</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Created_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allEnroll as $enroll)
                                      <tr>
                                        <td>{{$enroll->id}}</td>
                                        <td>{{$enroll->name}}</td>
                                        <td>{{$enroll->email}}</td>
                                        <td>{{$enroll->course}}</td>
                                        <td>{{$enroll->address}}</td>
                                        <td>{{$enroll->phone}}</td>
                                        <td>
                                            @if($enroll->created_at==Null)
                                                <span>Time Not Set</span>
                                            @else
                                            
                                            {{$enroll->created_at->diffForHumans()}}
                                        
                                        @endif
                                        </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive-->

                        </div>
                        <!-- end card-body-->

                    </div>
                    <!-- end card-->

                </div>

            </div>
            <!-- end row-->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection