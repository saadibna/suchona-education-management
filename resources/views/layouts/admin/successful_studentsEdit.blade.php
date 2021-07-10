@extends('layouts.admin.layout.master')
@section('titleKey','Successful students Edit')
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-check-square"></i> Successful students form Edit</h3>
                        </div>

                        <div class="card-body">

                            <form method="post" action="{{route('admin.successful_studentsUpdate',$successful_students->id)}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$successful_students-> name}}">
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control" value="{{$successful_students->designation}}">
                                </div>
                                <div class="form-group">
                                    <label>Comment</label>
                                    <input type="text" name="comment" class="form-control" value="{{$successful_students->comment}}">
                                </div>
                                <div class="form-group">
                                    <input type="file" id="myFile" name="image" value="{{$successful_students->image}}">
                                    <img src="{{asset($successful_students-> image)}}" alt="" height="80" width="80">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>

                        </div>
                    </div>
                    <!-- end card-->
                </div>
            </div>


        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection