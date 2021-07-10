@extends('layouts.admin.layout.master')
@section('titleKey','Upcoming courses')
@section('content')

<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-check-square"></i> Upcoming form</h3>
                        </div>

                        <div class="card-body">

                            <form method="post" action="{{route('admin.upcomingSave')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Course name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Registration opens</label>
                                    <input type="date" name="registrationOpens" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Registration closed</label>
                                    <input type="date" name="registrationClosed" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Batch Orientation</label>
                                    <input type="date" name="batchOrientation" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Classes start</label>
                                    <input type="date" name="classesStart" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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