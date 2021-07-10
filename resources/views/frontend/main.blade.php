@extends('frontend.layout.master')

@section('title')
    Suchona
@endsection

@section('content')

<!-- Carousel Start -->
<section class="slider">
    <div class="row">
        <div class="col-auto pre">
            <a class="indicator" href="#carouselExampleControls" role="button" data-slide="prev">
                <span >&lt;</span></a>
        </div>
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($slider->take(4) as $items) 
                    <div class="carousel-item @if($loop->first) active @endif">
                        <div class="row align-items-center">
                            <div class="col column_title">
                                <p class="animated fadeInRight text-light">{{$items->heading}} </p>
                                <h1 class="animated fadeInLeft">{{$items->paragraph}}</h1>
                                <a class="btn animated fadeInUp" href="">Enroll now!</a>
                            </div>
                            <div class="col animated fadeInRight column_image">
                                <img class="d-block img-fluid" src="{{$items->image}}" alt="First slide">
                            </div>
                        </div>
                    </div>
                    @endforeach
                  <!--<div class="carousel-item active">
                        <div class="row align-items-center">
                            <div class="col column_title">
                                <p class="animated fadeInRight text-light">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                <a class="btn animated fadeInUp" href="">Enroll now!</a>
                            </div>
                            <div class="col animated fadeInRight column_image">
                                <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-1.jpg')}}" alt="First slide">
                            </div>
                        </div>
                    </div> -->
               <!-- <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col column_title">
                                <p class="animated fadeInRight text-light">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                <a class="btn animated fadeInUp" href="#">Enroll now!</a>
                            </div>
                            <div class="col animated fadeInRight column_image">
                                <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-2.jpg')}}" alt="2nd slide">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col column_title">
                                <p class="animated fadeInRight text-light">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                <a class="btn animated fadeInUp" href="#">Enroll now!</a>
                            </div>
                            <div class="col animated fadeInRight column_image">
                                <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-3.jpg')}}" alt="2nd slide">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col column_title">
                                <p class="animated fadeInRight text-light">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                <a class="btn animated fadeInUp" href="#">Enroll now!</a>
                            </div>
                            <div class="col animated fadeInRight column_image">
                                <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-4.jpg')}}" alt="3rd slide">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-auto pre">
            <a class="indicator" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="pre">&gt;</span>
            </a>
        </div>
    </div>

</section>
<!-- Carousel End -->

    <!-- Upcoming Notice Start -->
    <section class="notice" style="margin-top:-40px;">
        <div class="container">
            <div class="col-md-10 mx-auto notice-wrapper py-4 pb-3 py-sm-5 p-md-5">
            @foreach($upcoming as $items)
                <h4 class="notice-title text-center" style="color: tomato;">Upcoming</h4>
                <h2 class="notice-title text-center">{{$items->name}}</h2>
                <div class="row py-4">
                    <div class="col-lg-6">
                        <h5>
                            <i class="far fa-calendar-alt one"></i>
                            Registration opens: {{$items->registrationOpens}}
                        </h5>
                        <h5>
                            <i class="far fa-bookmark two"></i>
                            Registration Closed: {{$items->registrationClosed}}
                        </h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>
                            <i class="far fa-bell three"></i>
                            Batch Orientation: {{$items->batchOrientation}}
                        </h5>
                        <h5>
                            <i class="fas fa-tv four"></i>
                            Classes start: {{$items->classesStart}}
                        </h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Notice  End -->

    <!-- Module Start -->
    <div class="module">
        <div class="container">
            <div class="section-header text-center">
                <p>Course module</p>
                <h2>Web Design & Development Course</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="accordion-1">
                        <div class="card wow ">
                            <div >
                                <img src="{{asset('frontend/assets/images/module-banner.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="card wow ">



                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" id="enroll" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Enroll Now</button>


                                                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h4 class="text-light" id="exampleModalLabel">Enroll Form</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        
                                        <form method="POST" action="{{route('enroll')}}">
                                            @csrf


                                 @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong class="text-primary">{{session('success')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                     </button>
                                    </div>
                                 @endif


                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label>Course</label>
                                                <input type="text" name="course" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" >
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>

                                            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                                        </form>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div id="accordion-2">
                        @foreach($modules as $items)
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                    {{$items->heading}}
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion-2">
                                <div class="card-body">
                                   {{$items->paragraph}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                       <!--  <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                    Module-2: CSS
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                    Module-3: Bootstrap
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                    Module-4: JavaScript
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                    Module-5: jQuery
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow " >
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                    Module-6: Wordpress
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                    Module-7: Theme customization
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                    Module-8: Framework
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow ">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                    Module-9: Laravel
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                    Module-10: Marketplace
                                </a>
                            </div>
                            <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Module End -->

    
    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
          @foreach($about as $items) 
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{$items-> image}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                
                    <div class="section-header text-left">
                        <h2>{{$items->heading}}</h2>
                        <p>{{$items->title}}</p>
                    </div>
                    <div class="about-text">
                        <p>
                            {{$items->description}}
                        </p>
                        <p>
                        {{$items->description}}
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                 @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Counter Fact Start -->
    <div class="fact">
        <div class="container-fluid">
            <div class="row counters">
                <div class="col-md-6 fact-left wow slideInLeft">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fas fa-chalkboard-teacher fa-4x "></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">19</h2>
                                <p>Expert Trainers</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fas fa-user-friends fa-4x"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">485</h2>
                                <p>Running students</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 fact-right wow slideInRight">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fas fa-tasks fa-4x"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">8</h2>
                                <p>Running courses</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fab fa-angellist fa-4x"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">10</h2>
                                <p>Completed Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- (Our courses) Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Courses</h2>
                <h4>We Provide courses on</h4>
            </div>
            <div class="row">
                @foreach($course as $items) 
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{$items->image}}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                   {{$items->description}}
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>{{$items->title}}</h3>

                            <!--
                            <a href="#" class="btn">More...</a>-->
                            <a class="btn" href="{{asset($items->image)}}" data-lightbox="service">
                                <i class="fas fa-chevron-right"></i>
                            </a>

                        </div>
                    </div>
                </div>
               @endforeach
            </div>
            <div class="row">
                <div class="d-flex justify-content-center align-items-center col-md-12">
                <a class="btn" id="courses" href="">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Video Start -->
    <div class="video wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                <span></span>
            </button>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->

    <!-- Trainer Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                <h2>Meet Our Trainers</h2>
            </div>
            <div class="row">
                @foreach($trainer as $items)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{$items->image}}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>{{$items->name}}</h2>
                            <p>{{$items->description}}</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div> 
                    </div>
                </div>
                @endforeach 
                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/images/instructor2.jpg')}}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Afia Naoshin</h2>
                            <p>Spoken English expert</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/images/instructor3.jpg')}}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Anowar Hossain</h2>
                            <p>Web developer</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/images/instructor1.jpg')}}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Ariful Islam Arif</h2>
                            <p>Web developer</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- FAQs Start -->
    <div class="faqs">
        <div class="container">
            <div class="section-header text-center">
                <p>Frequently Asked Question</p>
                <h2>You May Ask</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="accordion-1">
                        <div class="card wow fadeInLeft" data-wow-delay="0.05s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.10s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.15s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.20s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.25s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="accordion-2">
                        <div class="card wow fadeInRight" data-wow-delay="0.05s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.10s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.15s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.20s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.25s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Testimonial Start -->
    <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-12"> 
                    <div class="testimonial-slider-nav ">
                        @foreach($testimonial as $items)
                        <div class="slider-nav {{$items['id'] == 1 ? 'active' : '' }}">
                            <img src="{{$items->image}}" alt="Testimonial"></div>
                        <!-- <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-2.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-3.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-4.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-1.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-2.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-3.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-4.jpg')}}" alt="Testimonial"></div> -->
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        @foreach($testimonial as $items)
                        <div class="slider-item">
                            <h3>{{$items->name}}</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>{{$items->description}}</p>
                        </div>
                        @endforeach
                        <!-- <div class="slider-item">
                            <h3>Tasnim</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Oroni</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Maisha</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Mueed</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Abid</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Ayan</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Farhan</h3>
                            <h4 class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div> -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start-->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Latest Blogs</h2>
            </div>
            <div class="row">
                @foreach($blog as $items)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">              
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{$items->image}}" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>{{$items->title}}</h3>
                            <a class="btn" href="">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="blog-meta text-dark">
                            <p>By<a href="">{{$items->postedBy}}</a></p>
                           <!--  <p>In<a href="">Digital Marketing</a></p> -->
                        </div>
                        <div class="blog-text">
                            <p>
                            {{$items->paragraph}}
                            </p>
                        </div>
                    </div>
                    
                </div>
               @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->



@endsection
