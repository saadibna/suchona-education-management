<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>
                <li class="submenu">
                    <a class="active" href="{{url('admin/dashboard')}}">
                        <i class="fas fa-bars"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="{{url('admin/users')}}">
                        <i class="fas fa-user"></i>
                        <span> Users</span>
                    </a>
                </li>

                <li class="submenu">
                    <a id="tables" href="#">
                    <i class="fas fa-photo-video"></i>
                        <span> Slider </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('admin.slider')}}">Slider Form</a>
                        </li>
                        <li>
                            <a href="{{route('admin.sliderShow')}}">Slider Table</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a id="tables" href="#">
                    <i class="far fa-calendar-alt"></i>
                        <span> Upcoming course </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('admin.upcoming')}}">Upcoming Form</a>
                        </li>
                        <li>
                            <a href="{{route('admin.upcomingShow')}}">Upcoming Table</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a id="tables" href="#">
                    <i class="far fa-calendar-alt"></i>
                        <span>  Course </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('admin.course')}}">Course Form</a>
                        </li>
                        <li>
                            <a href="{{route('admin.courseShow')}}">Course Table</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a id="tables" href="#">
                    <i class="fas fa-stream"></i>
                        <span> Modules </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('admin.module')}}">Add Modules</a>
                        </li>
                        <li>
                            <a href="{{route('admin.moduleShow')}}">Show Modules</a>
                        </li>
                       
                    </ul>
                </li>

                
                <!-- <li class="submenu">
                    <a href="{{route('admin.aboutUs')}}">
                        <i class="fas fa-file-alt"></i>
                        <span> About Us </span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="{{route('admin.aboutShow')}}">
                        <i class="fas fa-file-alt"></i>
                        <span> About Us Table </span>
                    </a>
                </li> -->

                <li class="submenu">
                    <a id="tables" href="#">
                    <i class="fas fa-address-card"></i>
                        <span> About </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('admin.aboutUs')}}">About Form</a>
                        </li>
                        <li>
                            <a href="{{route('admin.aboutShow')}}">About Table</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a id="tables" href="#">
                    <i class="fas fa-chalkboard-teacher"></i>
                        <span> Trainer </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('admin.trainer')}}">Trainer Form</a>
                        </li>
                        <li>
                            <a href="{{route('admin.trainerShow')}}">Trainer Table</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a id="tables" href="#">
                    <i class="fas fa-star-half-alt"></i>
                        <span> Testimonial </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('admin.testimonial')}}">Testimonial Form</a>
                        </li>
                        <li>
                            <a href="{{route('admin.testimonialShow')}}">Testimonial Table</a>
                        </li>
                    </ul>
                </li>
                
                <li class="submenu">
                    <a id="tables" href="#">
                    <i class="fas fa-file-alt"></i>
                        <span> Blogs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('admin.blog')}}">Blog Form</a>
                        </li>
                        <li>
                            <a href="{{route('admin.blogShow')}}">Blog Table</a>
                        </li>
                    </ul>
                </li>

                

                <li class="submenu">
                    <a href="{{url('admin/mail')}}">
                        <span class="label radius-circle bg-danger float-right">18</span>
                        <i class="fas fa-envelope"></i>
                        <span> Mailbox </span>
                    </a>
                </li>

                <li class="submenu">
                    <a id="tables" href="{{url('admin/table_datatable')}}">
                    <i class="fas fa-users"></i>
                        <span> Enrollment list </span>
                    </a>
                </li>
                <li class="submenu">
                    <a id="tables" href="#">
                    <i class="fas fa-user-graduate"></i>
                        <span> Successful students </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('admin.successful_students')}}">Success Form</a>
                        </li>
                        <li>
                            <a href="{{route('admin.successful_studentsShow')}}">Success Table</a>
                        </li>
                    </ul>
                </li>
              
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>

</div>
<!-- End Sidebar -->