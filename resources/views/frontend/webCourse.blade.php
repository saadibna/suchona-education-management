@extends('frontend.layout.master')
@section('title')
    Suchona:Web design & development course
@endsection
@section('content')
    
    <!--Carousel slider-->
    <section class="slider">
        <div class="row">
            <div class="col-auto pre">
                <a class="indicator" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span >&lt;</span></a>
            </div>
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row align-items-center">
                                <div class="col column_title">
                                    <p class="animated fadeInRight">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                    <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                    <a class="btn animated fadeInUp" href="#">Enroll now!</a>
                                </div>
                                <div class="col animated fadeInRight column_image">
                                    <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-3.jpg')}}" alt="First slide">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col column_title">
                                    <p class="animated fadeInRight">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
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
                                    <p class="animated fadeInRight">সূচনা এখন এক্সসাইটিং কোর্স নিয়ে... </p>
                                    <h1 class="animated fadeInLeft">এখন ঘরে বসেই স্কিল ডেভেলপ করুন আরো সহজে</h1>
                                    <a class="btn animated fadeInUp" href="#">Enroll now!</a>
                                </div>
                                <div class="col animated fadeInRight column_image">
                                    <img class="d-block img-fluid" src="{{asset('frontend/assets/images/banner_slider-2.jpg')}}" alt="3rd slide">
                                </div>
                            </div>
                        </div>
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

    <!-- Notice Start -->
    <section class="notice" style="margin-top:-40px;">
        <div class="container">
            <div class="col-md-10 mx-auto notice-wrapper py-4 pb-3 py-sm-5 p-md-5">
                <h4 class="notice-title text-center" style="color: tomato;">Upcoming</h4>
                <h2 class="notice-title text-center">Web Development batch</h2>
                <div class="row py-4">
                    <div class="col-lg-6">
                        <h5>
                            <i class="far fa-calendar-alt one"></i>
                            Registration opens: June 10, 2021 (Thursday)
                        </h5>
                        <h5>
                            <i class="far fa-bookmark two"></i>
                            Registration Closed: June 24, 2021 (Thursday)
                        </h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>
                            <i class="far fa-bell three"></i>
                            Batch Orientation: June 28, 2021 (Monday)
                        </h5>
                        <h5>
                            <i class="fas fa-tv four"></i>
                            Classes start: July 1, 2021 (Thursday)
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Notice  End -->

    
    

    <!--Course Learning Start -->
    <div class="container">
        <h2 class="text-center p-5">Things you learn from this course</h2>
        <div class="row p-2">
            <div class="col-md-6 p-3 webcourseImg">
                <img src="{{asset('frontend/assets/images/web_course.png')}}" alt="" />
                <div class="p-4 ">
                    <div class="video-icon">
                        <a href="https://www.youtube.com/embed/DWRcNpR6Kdc" target="_blank"><i class="far fa-play-circle"></i>
                        </a>
                    </div>
                </div>

                <div>
                                <!-- Button trigger modal -->
                                <div class="d-flex align-items-center justify-content-center">
                                    <button type="button" id="enroll"  data-toggle="modal" data-target="#exampleModal">Enroll Now</button>
                                </div>


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
                                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
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


                

                <div class="row course_enroll pt-2 pb-2">
                    <div class="col-md-5 col-sm-4 text-center">
                        <p><i class="far fa-calendar-alt"></i></p>
                        <h6>4 Months</h6>
                        <strong>Course Duration</strong>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p><i class="fas fa-users"></i></p>
                        <h6>1287</h6>
                        <strong>Total Enrolled</strong>
                    </div>
                    <div class="col-md-3 col-sm-4 text-center">
                        <p><i class="fas fa-star-half-alt"></i></p>
                        <h6>887</h6>
                        <strong>Total Confirm</strong>
                    </div>
                </div>
                <div class="row course_videos col-sm-12 pt-2 pb-2">
                    <div class="col-md-4 col-sm-4 text-center">
                        <strong><i class="fas fa-play-circle"></i> 492 Videos</strong>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <strong><i class="fas fa-question-circle"></i> 152 Quizes</strong>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <strong><i class="fas fa-pen-square"></i> 75 Assignment</strong>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 whtLearn">
                        <p class="text-justify"><i class="fas fa-check-square"></i> Yorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                    </div>
                    <div class="col-md-6 whtLearn">
                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

                        <p class="text-justify"><i class="fas fa-check-square"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Course Learning End -->

    <!--Course Speciality Start-->
    <div class="speciality mt-5 mb-2">
        <div class="row border">
            <div class="col-md-6 p-3" id="btn_1">
                <div class="commonButton first-border mb-2 text-center col-sm-6" id="first-border-bottom">
                    <div class="icon-star">
                        <i class="fas fa-star"></i>
                    </div>
                    <div>
                        <h4>Speciality of this course ?</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 p-3" id="btn_2">
                <div class="commonButton mb-2 text-center col-sm-6" id="second-border-bottom">
                    <div class="icon-pen">
                        <i class="fas fa-pen-square"></i>
                    </div>
                    <div>
                        <h4>How perform this course ?</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="sp_1" class="col-md-12 col-sm-6">
                <div class="row speciality_icon text-justify">
                    <div class="text-justify col-md-6 p-3">
                        <p><i class="fas fa-laptop-code"></i> Morem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p><i class="fas fa-hands-helping"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="text-justify col-md-6 p-3">
                        <p><i class="fas fa-users"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p><i class="fas fa-laptop-code"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
            <div class="next-Sp col-md-12 col-sm-6" id="sp_2">
                <div class="row speciality_icon text-justify">
                    <div class=" text-justify col-md-6 p-3">
                        <p>
                            <strong>1. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            <strong>2. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            <strong>3. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>

                    <div class=" text-justify col-md-6 p-3">
                        <p>
                            <strong>4. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            <strong>5. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            <strong>6. </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Course Speciality End-->



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
                        <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                            <div >
                                <img src="{{asset('frontend/assets/images/module-banner.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                            <div>
                                <a class="btn" id="enroll" href="#">Enroll now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div id="accordion-2">
                        <div class="card wow fadeInRight" data-wow-delay="0.05s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                    Module-1: HTML
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.10s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.15s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.20s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.25s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.30s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.35s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.40s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.45s">
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
                        <div class="card wow fadeInRight" data-wow-delay=".5s">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Module End -->




    <!--Prospectus of Trainer Start-->
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-md-4 col-sm-12 p-3 trainerImgWeb">
                <img src="{{asset('frontend/assets/images/instructor1.jpg')}}" alt="" class="trainerProspects" />
                <h6 class="pt-1"><em>Senior Web Developer</em></h6>
            </div>
            <div class="col-md-8 col-sm-12 p-3">
                <h2>MD Ariful Islam</h2>
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>
    <!--Prospectus of Trainer End-->


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
                        <div class="card wow fadeInLeft" data-wow-delay="0.1s">
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
                        <div class="card wow fadeInLeft" data-wow-delay="0.2s">
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
                        <div class="card wow fadeInLeft" data-wow-delay="0.3s">
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
                        <div class="card wow fadeInLeft" data-wow-delay="0.4s">
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
                        <div class="card wow fadeInLeft" data-wow-delay="0.5s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.1s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.2s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.3s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.4s">
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
                        <div class="card wow fadeInRight" data-wow-delay="0.5s">
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
                    <div class="testimonial-slider-nav">
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-1.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-2.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-3.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-4.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-1.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-2.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-3.jpg')}}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{asset('frontend/assets/images/testimonial-4.jpg')}}" alt="Testimonial"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="slider-item">
                            <h3>Jarin</h3>
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
                        </div>
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
                <p>Latest Blog</p>
                <h2>Latest From Our Blog</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-1.jpg')}}" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Digital Marketing</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-2.jpg')}}" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Graphics Design</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-3.jpg')}}" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Web development</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->



@endsection

