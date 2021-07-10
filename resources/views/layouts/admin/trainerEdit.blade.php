@extends('layouts.admin.layout.master')
@section('titleKey','Trainer Edit')
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-check-square"></i> Trainer form Edit</h3>
                        </div>

                        <div class="card-body">

                            <form method="post" action="{{route('admin.trainerUpdate',$trainer->id)}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$trainer-> name}}">
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" name="description" class="form-control" value="{{$trainer->description}}">
                                </div>
                                <div class="form-group">
                                    <input type="file" id="myFile" name="image" value="{{$trainer->image}}">
                                    <img src="{{asset($trainer-> image)}}" alt="" height="80" width="80">
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