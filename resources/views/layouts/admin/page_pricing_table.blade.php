@extends('layouts.admin.layout.master')
@section('titleKey','Pricing-Table')
@section('content')

<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Pricing Tables</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Pricing Tables</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-12">

                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>
                                <i class="fas fa-table"></i> Pricing table example 1</h3>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                            <table class="table table-condensed table-hover table-bordered table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th class="tabco1" style="min-width:200px">PLAN</th>
                                        <th class="tabco2" style="min-width:200px">Starter</th>
                                        <th class="tabco3" style="min-width:200px">Plus</th>
                                        <th class="tabco4" style="min-width:200px">Pro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tabco1">100% Uniqueness</td>
                                        <td class="tabco2">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco4">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1">Proof Checking</td>
                                        <td class="tabco2">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco4">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1">Keyword Optimization</td>
                                        <td class="tabco2">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco4">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1">LSI Keyword Optimization</td>
                                        <td class="tabco2">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco4">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1">Grammarly Premium Checking</td>
                                        <td class="tabco2">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco4">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1"> Copyscape Premium Checking</td>
                                        <td class="tabco2">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco4">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1">On-Page Optimization</td>
                                        <td class="tabco2">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco4">
                                            <i class="fas fa-check rightSign" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1">Bonus Content</td>
                                        <td class="tabco2">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco4">500 Word Content Free</td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1">Modification After Submission</td>
                                        <td class="tabco2">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">1 Times</td>
                                        <td class="tabco4">2 Times</td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1">Delivery Time</td>
                                        <td class="tabco2">3-4 Working Days</td>
                                        <td class="tabco3">2-3 Working Days</td>
                                        <td class="tabco4">1-2 Working Days</td>
                                    </tr>
                                    <tr>
                                        <td class="tabco1">WordPress Posting</td>
                                        <td class="tabco2">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco3">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                        <td class="tabco4">
                                            <i class="fas fa-times crossSign" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            
                        </div>
                        <!-- end card body -->

                    </div>
                    <!-- end card-->

                </div>
                <!-- end col-->


                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>
                                <i class="fas fa-table"></i> Pricing Table Example 2</h3>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">

                                    <!-- Price Table Item -->
                                    <div class="price-table text-center">
                                        <div class="price-table-heading">
                                            <h4 class="title">PLAN A</h4>
                                        </div>
                                        <div class="price-table-body">
                                            <p class="value">FREE</p>
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> Personal use</li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> Unlimited projects</li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> 27/7 support</li>
                                        </ul>
                                        <div class="price-table-footer">
                                            <a class="btn btn-lg btn-success" href="#">BUY NOW!</a>
                                        </div>
                                    </div>
                                    <!-- END Price Table Item -->

                                    <div class="col-xs-12 col-sm-12 mb-5"></div>

                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <!-- Price Table Item -->
                                    <div class="price-table text-center">
                                        <div class="price-table-heading">
                                            <h4 class="title">FREE PLAN - A</h4>
                                        </div>
                                        <div class="price-table-body">
                                            <p class="value">$25
                                                <small>/month</small>
                                            </p>
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> Personal use</li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> Unlimited projects</li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> 27/7 support</li>
                                        </ul>
                                        <div class="price-table-footer">
                                            <a class="btn btn-lg btn-success" href="#">BUY NOW!</a>
                                        </div>
                                    </div>
                                    <!-- END Price Table Item -->

                                    <!-- START: Will be visible in tablet and mobile devices to make gap between tow price items -->
                                    <div class="col-xs-12 col-sm-12 mb-5"></div>
                                    <!-- END: Will be visible in tablet and mobile devices to make gap between tow price items -->
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <!-- Price Table Item -->
                                    <div class="price-table text-center">
                                        <div class="price-table-heading">
                                            <h4 class="title">FREE PLAN - A</h4>
                                        </div>
                                        <div class="price-table-body">
                                            <p class="value">$50
                                                <small>/month</small>
                                            </p>
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> Personal use</li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> Unlimited projects</li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> 27/7 support</li>
                                        </ul>
                                        <div class="price-table-footer">
                                            <a class="btn btn-lg btn-success" href="#">BUY NOW!</a>
                                        </div>
                                    </div>
                                    <!-- END Price Table Item -->

                                    <!-- START: Will be visible in tablet and mobile devices to make gap between tow price items -->
                                    <div class="col-xs-12 col-sm-12 mb-5"></div>
                                    <!-- END: Will be visible in tablet and mobile devices to make gap between tow price items -->
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                    <!-- Price Table Item -->
                                    <div class="price-table text-center">
                                        <div class="price-table-heading">
                                            <h4 class="title">FREE PLAN - A</h4>
                                        </div>
                                        <div class="price-table-body">
                                            <p class="value">$100
                                                <small>/month</small>
                                            </p>
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> Personal use</li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> Unlimited projects</li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> 27/7 support</li>
                                        </ul>
                                        <div class="price-table-footer">
                                            <a class="btn btn-lg btn-success" href="#">BUY NOW!</a>
                                        </div>
                                    </div>
                                    <!-- END Price Table Item -->

                                    <!-- START: Will be visible in tablet and mobile devices to make gap between tow price items -->
                                    <div class="col-xs-12 col-sm-12 mb-5"></div>
                                    <!-- END: Will be visible in tablet and mobile devices to make gap between tow price items -->
                                </div>

                            </div>
                            <!-- end row-->

                        </div>
                        <!-- end card body-->

                    </div>
                    <!-- end card-->

                </div>
                <!-- end col-->

            </div>
            <!-- end row-->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection