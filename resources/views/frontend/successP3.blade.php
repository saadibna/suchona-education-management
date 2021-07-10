@extends('frontend.layout.master')

@section('title')
    Success
@endsection

@section('content')
    <!-- Success Start -->
    <div class="success">
        <div class="container">
            <div class="section-header text-center success-header">
                <h2>Successfull Students</h2>
                <p>আমাদের কোর্স থেকে শিখে যারা বিভিন্ন জায়গায় চাকরি/ইন্টার্ন পেয়েছে তাদের মধ্যে কয়েকজন এর প্রোফাইল নিচে দেয়া হলো</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="accordion-1">
                        <div class="card wow fadeInLeft" data-wow-delay="0.1s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beard-man.jpg')}}" alt="" style="width: 100%; ">
                            </div>
                            <div class="card-body" >
                                <h3>Mamunur Rashid</h3>
                                <h6>Sr. web developer, Samsung R&D</h6>

                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur,vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                                  Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, vitae.
                                            </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.2s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beautiful-woman.jpg')}}" alt="" style="width: 100%;">
                            </div>
                            <div class="card-body" >
                                <h3>Tasnim Rahman</h3>
                                <h6>Jr. web developer, ABC IT</h6>
                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                                  Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id.
                                            </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.1s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beard-man.jpg')}}" alt="" style="width: 100%; ">
                            </div>
                            <div class="card-body" >
                                <h3>Mamunur Rashid</h3>
                                <h6>Sr. web developer, Samsung R&D</h6>

                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                              Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, vitae.
                                        </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.2s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beautiful-woman.jpg')}}" alt="" style="width: 100%;">
                            </div>
                            <div class="card-body" >
                                <h3>Tasnim Rahman</h3>
                                <h6>Jr. web developer, ABC IT</h6>
                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                              Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id.
                                        </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.1s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beard-man.jpg')}}" alt="" style="width: 100%; ">
                            </div>
                            <div class="card-body" >
                                <h3>Mamunur Rashid</h3>
                                <h6>Sr. web developer, Samsung R&D</h6>

                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                          Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, vitae.
                                    </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.2s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beautiful-woman.jpg')}}" alt="" style="width: 100%;">
                            </div>
                            <div class="card-body" >
                                <h3>Tasnim Rahman</h3>
                                <h6>Jr. web developer, ABC IT</h6>
                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                          Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id.
                                    </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="accordion-2">
                        <div class="card wow fadeInRight" data-wow-delay="0.1s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beautiful-woman.jpg')}}" alt="" style="width: 100%; ">
                            </div>
                            <div class="card-body" >
                                <h3>Tasnim rahman</h3>
                                <h6>Jr. web developer, ABC IT</h6>

                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                              Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, vitae.
                                        </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.2s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beard-man.jpg')}}" alt="" style="width: 100%;">
                            </div>
                            <div class="card-body" >
                                <h3>Mamunur Rashid</h3>
                                <h6>Sr. web developer, Samsung R&D</h6>
                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                              Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id.
                                        </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.1s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beautiful-woman.jpg')}}" alt="" style="width: 100%; ">
                            </div>
                            <div class="card-body" >
                                <h3>Tasnim Rahman</h3>
                                <h6>Sr. web developer, Samsung R&D</h6>

                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                          Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, vitae.
                                    </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.2s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beard-man.jpg')}}" alt="" style="width: 100%;">
                            </div>
                            <div class="card-body" >
                                <h3>Mamunur Rashid</h3>
                                <h6>Jr. web developer, ABC IT</h6>
                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                          Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id.
                                    </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.1s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beautiful-woman.jpg')}}" alt="" style="width: 100%; ">
                            </div>
                            <div class="card-body" >
                                <h3>Tasnim rahman</h3>
                                <h6>Sr. web developer, Samsung R&D</h6>

                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur,vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                      Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, vitae.
                                </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.2s" style="flex-direction: row;">
                            <div>
                                <img src="{{asset('frontend/assets/images/beard-man.jpg')}}" alt="" style="width: 100%;">
                            </div>
                            <div class="card-body" >
                                <h3>Mamunur Rashid</h3>
                                <h6>Jr. web developer, ABC IT</h6>
                                Lorem ipsum dolor sit amet, ne sed idque quidam. Vim assum corpora an Pro ut erat consetetur, vocent expetendissit at. Posse populo no usu
                                <span class="dots">...</span>
                                <span class="more">
                                      Pro ut erat consetetur, vocent expetendis sit at. Posse populo no usu, nam elit postea nusquam id.
                                </span>
                                <button class="read">read more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <!--Success ends-->

<!--Pagination starts-->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="{{route('success')}}">1</a></li>
    <li class="page-item"><a class="page-link" href="{{route('successP2')}}">2</a></li>
    <li class="page-item active"><a class="page-link" href="{{route('successP3')}}">3</a></li>
    <li class="page-item">
      <a class="page-link" href="{{route('success')}}">Next</a>
    </li>
  </ul>
</nav>

  <!--pagination ends-->

@endsection
