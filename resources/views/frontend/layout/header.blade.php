<!--TopBar Start Here-->
    <section class="topBar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-5 float-left topbar-phone">
                    <i class="fas fa-phone-alt"></i>
                    <a href="#">+880 163 0008 000</a>
                </div>
                <div class="col-md-8 col-sm-7 topbar-login">
                    <div class="float-right">
                        <a class="" href="{{route('login')}}">Login &nbsp; </a>  <span> |  </span>
                        <a class="" href="{{route('register')}}"> &nbsp; <span>Registration</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--TopBar End Here-->

<!--Nav Start-->
    <div class="navbar navbar-expand-md mb-0 nav-wrapper" role="navigation">
        <a class="navbar-brand ml-3 mr-5" href="{{route('main')}}">Suchona</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" text-white bg-dark"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto p-2">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('main')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active" style="cursor:pointer">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item" ><a href="{{route('graphicCourse')}}">Graphic Design</a></li>
                        <li class="dropdown-item" ><a href="{{route('webCourse')}}">Web Design & Web Development</a></li>
                        <li class="dropdown-item" ><a href="{{route('digitalMarketCourse')}}">Digital Marketing</a></li>
                    </ul>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('success')}}">Success</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('contact')}}" target="_blank">Contact</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('blogs')}}">Blog</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search">
                <button class="btn my-2 my-sm-0 bg-white text-dark" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
<!--Navbar End here-->
