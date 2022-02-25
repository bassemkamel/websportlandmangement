<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.php">
            <img src="{{asset('vendors/images/logo.png')}}" alt="" class="dark-logo">
            <img src="{{asset('vendors/images/logo.png')}}" alt="" class="light-logo" style="margin-top: 30px;margin-left: 32px;">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                    <ul class="submenu">
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('calendars.index')}}">Calendar</a></li>
                    <li><a href="{{route('getcalendarbycityorcountry')}}">Calendar By Search</a></li>

                        
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user1"></span><span class="mtext">Sports</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('sports.index')}}">Sports List</a></li>
                        <li><a href="{{route('sports.create')}}">Add Sports</a></li>


                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-position"></span><span class="mtext">Locations</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('locations.index')}}">Locations List</a></li>
                        <li><a href="{{route('locations.create')}}">Add Locations</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-position"></span><span class="mtext">Trainers</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('trainers.index')}}">Trainers List</a></li>
                        <li><a href="{{route('trainers.create')}}">Add Trainers</a></li>

                    </ul>
                </li>


                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-position"></span><span class="mtext">Programs</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('programs.index')}}">Programs List</a></li>
                        <li><a href="{{route('programs.create')}}">Add Programs</a></li>

                    </ul>
                </li>



                <li class="dropdown" hidden>
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-position"></span><span class="mtext">Session</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('seances.index')}}">Sessions List</a></li>
                        <li><a href="{{route('seances.create')}}">Add Sessions</a></li>

                    </ul>
                </li>



                <li class="dropdown" >
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-position"></span><span class="mtext">Client</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('clients.index')}}">Clients List</a></li>
                        <li><a href="{{route('clients.create')}}">Add Clients</a></li>

                    </ul>
                </li>




                <li>
                    <div class="sidebar-small-cap" hidden>Extra</div>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle" hidden>
                        <span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.php">Introduction</a></li>
                        <li><a href="invoice.php">Invoice</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle no-arrow" hidden>
                        <span class="micon dw dw-paper-plane1"></span>
                        <span class="mtext">Landing Page <img src="vendors/images/coming-soon.png" alt=""
                                width="25"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>