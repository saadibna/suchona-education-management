<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Suchona Company Website Template" name="keywords">
    <meta content="Suchona Company Website Template" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/assets/images/letter-s-logo.jpg')}}" type="image/gif" sizes="20x20">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/slick/slick-theme.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="wrapper">

@include('frontend.layout.header')

@yield('content')

@include('frontend.layout.footer')

</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/slick/slick.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>



<!--success js-->
<script>
    $(document).ready(function(){
        $(".read").click(function(){
            $(this).prev().toggle();
            $(this).siblings('.dots').toggle();

            if($(this).text()=='read more'){
                $(this).text('read less');
            }
            else{
                $(this).text('read more');
            }
        });
    });
</script>
<!----------------------- js link end ------------------------->

</body>
</html>