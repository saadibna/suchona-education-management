@extends('layouts.admin.layout.master')
@section('titleKey','Blogs Edit')
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-check-square"></i> Blogs form Edit</h3>
                        </div>

                        <div class="card-body">

                            <form method="post" action="{{route('admin.blogUpdate',$blog->id)}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$blog-> title}}">
                                </div>
                                <div class="form-group">
                                    <label>Posted By</label>
                                    <input type="text" name="postedBy" class="form-control" value="{{$blog->postedBy}}">
                                </div>
                                <div class="form-group">
                                    <label>Paragraph</label>
                                    <input type="text" name="paragraph" class="form-control" value="{{$blog->paragraph}}">
                                </div>
                                <div class="form-group">
                                    <input type="file" id="myFile" name="image" value="{{$blog->image}}">
                                    <img src="{{asset($blog-> image)}}" alt="" height="80" width="80">
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