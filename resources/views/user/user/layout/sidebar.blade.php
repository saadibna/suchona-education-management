<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>
                <li class="submenu">
                    <a class="active" href="{{route('user.dashboard')}}">
                        <i class="fas fa-bars"></i>
                        <span> Dashboard</span>
                    </a>
                </li>


                <li class="submenu">
                    <a id="tables" href="{{route('user.profile')}}">
                        <i class="fas fa-table"></i>
                        <span>Profile </span>

                    </a>
                </li>
                <li class="submenu">
                    <a id="tables" href="{{route('main')}}">
                        <i class="fas fa-table"></i>
                        <span>Main Site </span>

                    </a>
                </li>
                <li class="submenu">
                    <a id="tables" href="#">
                        <i class="fas fa-table"></i>
                        <span> My Cource </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('user.webDevelopment')}}">Webdevelopment</a>
                        </li>
                        <li>
                            <a href="{{route('user.digitalmerketing')}}">Digital Marketing</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a id="tables" href="#">
                        <i class="fas fa-table"></i>
                        <span>File </span>

                    </a>
                </li>
                <li class="submenu">
                    <a id="tables" href="#">
                        <i class="fas fa-table"></i>
                        <span>Messages </span>

                    </a>
                </li>

            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!-- End Sidebar -->
