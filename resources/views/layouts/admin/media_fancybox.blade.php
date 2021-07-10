@extends('layouts.admin.layout.master')
@section('titleKey','Media-Fancybox')
@section('content')

 <div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Fancybox</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Fancybox</li>
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
                            <h3><i class="far fa-file-image"></i> Image Gallery</h3>
                            Click on image
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <a data-fancybox="gallery" href="https://via.placeholder.com/300x250" class="col-sm-2 mb-2">
                                    <img alt="image" src="https://via.placeholder.com/300x250" class="img-fluid">
                                </a>

                                <a data-fancybox="gallery" href="https://via.placeholder.com/300x250" class="col-sm-2 mb-2">
                                    <img alt="image" src="https://via.placeholder.com/300x250" class="img-fluid">
                                </a>

                                <a data-fancybox="gallery" href="https://via.placeholder.com/300x250" class="col-sm-2 mb-2">
                                    <img alt="image" src="https://via.placeholder.com/300x250" class="img-fluid">
                                </a>

                                <a data-fancybox="gallery" href="https://via.placeholder.com/300x250" class="col-sm-2 mb-2">
                                    <img alt="image" src="https://via.placeholder.com/300x250" class="img-fluid">
                                </a>

                                <a data-fancybox="gallery" href="https://via.placeholder.com/300x250" class="col-sm-2 mb-2">
                                    <img alt="image" src="https://via.placeholder.com/300x250" class="img-fluid">
                                </a>

                                <a data-fancybox="gallery" href="https://via.placeholder.com/300x250" class="col-sm-2 mb-2">
                                    <img alt="image" src="https://via.placeholder.com/300x250" class="img-fluid">
                                </a>
                            </div>

                        </div>
                    </div><!-- end card-->
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-file-image"></i> Multimedia</h3>
                            Supported sites can be used with fancyBox by just providing the page URL. You can
                            mix images or videos content in each gallery.
                        </div>

                        <div class="card-body">
                            <a data-fancybox class="btn btn-danger mb-3" href="https://via.placeholder.com/500x350?text=Replace%20with%20video%20url" role="button">YouTube video</a>
                            <a data-fancybox class="btn btn-danger mb-3" href="https://via.placeholder.com/500x350?text=Replace%20with%20video%20url" role="button">Vimeo video</a>

                            <a data-fancybox class="btn btn-danger mb-3"
                                href="https://www.google.lv/maps/place/Googleplex/@37.4220041,-122.0833494,17z/data=!4m5!3m4!1s0x0:0x6c296c66619367e0!8m2!3d37.4219998!4d-122.0840572" role="button">Google Map</a>

                            <a data-fancybox class="btn btn-danger mb-3"
                                data-caption="Text here" href="https://via.placeholder.com/400x350" role="button">Instagram photo</a>
                        </div>
                    </div><!-- end card-->
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-file-image"></i> HTML Content</h3>
                            You can mix any HTML content in each gallery.
                        </div>

                        <div class="card-body">
                            <a data-fancybox="modal" data-src="#modal" class="btn btn-danger mb-3" role="button" href="javascript:;">Inline (HTML) Content</a>
                            <a data-fancybox="ajax" data-src="assets/plugins/fancybox/ajax.html" data-type="ajax" class="btn btn-danger mb-3" role="button" href="javascript:;">Ajax request</a>
                            <a data-fancybox="iframe" data-src="assets/plugins/fancybox/iframe.html" data-type="iframe" class="btn btn-danger mb-3" role="button" href="javascript:;">Iframed page</a>
                        </div>
                    </div><!-- end card-->
                </div>

            </div>


            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Documentation</h4>
                <p>You can find examples and documentation about Fancybox 3 here: <a target="_blank" href="https://fancyapps.com/fancybox/3/">Fancybox 3</a></p>
            </div>

            <div id="modal" style="display: none; padding: 50px 5vw; max-width: 800px;text-align: center;">
                <h3>Login to Join The Community</h3>

                <p>This is a sample login form, but you may put any HTML here. <br />For example, a link to <a href="https://mozilla.github.io/pdf.js/web/viewer.html" data-fancybox data-type="pdf">PDF file</a>
                    (rendering depends on the client environment).
                </p>

                <p>
                    <a data-fancybox-close class="btn btn-danger" role="button" href="#">Log in with twitter</a>
                    <a data-fancybox-close class="btn btn-info" role="button" href="#">Log in with facebook</a>
                </p>

                <p style="color: #aaa; font-size: 90%;">Clicking these buttons would simply close the form.</p>
            </div>


        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection