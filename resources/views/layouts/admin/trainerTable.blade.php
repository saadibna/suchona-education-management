@extends('layouts.admin.layout.master')
@section('titleKey','Trainer')
@section('content')

<div class="content-page">

    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>Trainer Table</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SL No</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Images</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php($x=1)
                                        @foreach($trainer as $items)
                                      <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$items->name}}</td>
                                        <td>{{$items->description}}</td>
                                        <td style="text-align: center;">
                                            <img src="{{asset($items->image)}}"  alt=""  style=" height:50px; width:90px;"></td>
                                        <td>
                                            <a href="{{route('admin.trainerEdit',$items->id)}}">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.trainerDelete',$items->id)}}">Delete</a>
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