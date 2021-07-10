<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titleKey')</title>
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

    <!-- Bootstrap CSS -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="{{asset('admin/assets/font-awesome/css/all.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/chart.js/Chart.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/datatables/datatables.min.css')}}" />
    <!-- END CSS for this page -->




</head>
<body class="adminbody">
    <div id="main">


        @include('user.user.layout.menu')
        @yield('content')

        @include('user.user.layout.sidebar')
        @include('user.user.layout.footer')





        <script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/moment.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/detect.js')}}"></script>
        <script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/admin.js')}}"></script>

    </div>
    <!-- END main -->

        <!-- BEGIN Java Script for this page -->
        <script src="{{asset('admin/assets/plugins/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/datatables.min.js')}}"></script>

        <!-- Counter-Up-->
        <script src="{{asset('admin/assets/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

        <!-- dataTabled data -->
        <script src="{{asset('admin/assets/data/data_datatables.js')}}"></script>

        <!-- Charts data -->
        <script src="{{asset('admin/assets/data/data_charts_dashboard.js')}}"></script>
        <script>
            $(document).on('ready', function() {
                // data-tables
                $('#dataTable').DataTable({
                    data: dataSet,
                    columns: [{
                        title: "Name"
                    }, {
                        title: "Position"
                    }, {
                        title: "Office"
                    }, {
                        title: "Extn."
                    }, {
                        title: "Date"
                    }, {
                        title: "Salary"
                    }]
                });

                // counter-up
                $('.counter').counterUp({
                    delay: 10,
                    time: 600
                });
            });
        </script>
        <!-- END Java Script for this page -->
</body>
</html>
