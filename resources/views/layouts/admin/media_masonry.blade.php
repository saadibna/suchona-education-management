@extends('layouts.admin.layout.master')
@section('titleKey','Media-Masonry')
@section('content')

<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Masonry</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Masonry</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">What is Masonry?</h4>
                <p>Masonry is a JavaScript grid layout library. It works by placing elements in optimal position
                    based on available vertical space, sort of like a mason fitting stones in a wall. You've
                    probably seen it in use all over the Internet. You can find examples and documentation about
                    Masonry here: <a target="_blank" href="https://masonry.desandro.com/">Masonry
                        documentation</a></p>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-image"></i> Example box</h3>
                        </div>

                        <div class="card-body">

                            <div class="grid">
                                <div class="grid-sizer"></div>
                                <div class="grid-item">
                                    <img alt="image" src="https://via.placeholder.com/800x350" />
                                </div>
                                <div class="grid-item">
                                    <img alt="image" src="https://via.placeholder.com/600x500" />
                                </div>
                                <div class="grid-item">
                                    <img alt="image" src="https://via.placeholder.com/800x350" />
                                </div>
                                <div class="grid-item">
                                    <img alt="image" src="https://via.placeholder.com/700x400" />
                                </div>
                                <div class="grid-item">
                                    <img alt="image" src="https://via.placeholder.com/800x350" />
                                </div>
                                <div class="grid-item">
                                    <img alt="image" src="https://via.placeholder.com/700x400" />
                                </div>
                                <div class="grid-item">
                                    <img alt="image" src="https://via.placeholder.com/300x300" />
                                </div>
                                <div class="grid-item">
                                    <img alt="image" src="https://via.placeholder.com/800x350" />
                                </div>
                                <div class="grid-item">
                                    <img alt="image" src="https://via.placeholder.com/600x500" />
                                </div>
                            </div>

                        </div>
                    </div><!-- end card-->
                </div>

            </div>

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection