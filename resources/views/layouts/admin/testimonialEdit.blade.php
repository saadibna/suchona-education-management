@extends('layouts.admin.layout.master')
@section('titleKey','Testimonial Edit')
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-check-square"></i> Testimonial form Edit</h3>
                        </div>

                        <div class="card-body">

                            <form method="post" action="{{route('admin.testimonialUpdate',$testimonial->id)}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$testimonial-> name}}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control" value="{{$testimonial->description}}">
                                </div>
                                <div class="form-group">
                                    <label>Rating</label>
                                    <input type="text" name="rating" class="form-control" value="{{$testimonial->rating}}">
                                </div>
                                <div class="form-group">
                                    <input type="file" id="myFile" name="image" value="{{$testimonial->image}}">
                                    <img src="{{asset($testimonial-> image)}}" alt="" height="80" width="80">
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