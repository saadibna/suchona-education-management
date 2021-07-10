@extends('layouts.admin.layout.master')
@section('titleKey','Our Course')
@section('content')

<div class="content-page">

    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>Course Table</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SL No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Images</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php($x=1)
                                        @foreach($course as $items)
                                      <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$items->title}}</td>
                                        <td>{{$items->description}}</td>
                                        <td><img src="{{asset($items->image)}}" alt="" height="50" width="90"></td>
                                        <td><a href="{{route('admin.courseEdit',$items->id)}}">Edit</a></td>
                                        <td><a href="{{route('admin.courseDelete',$items->id)}}">Delete</a></td>
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