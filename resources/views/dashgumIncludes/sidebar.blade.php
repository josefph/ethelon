<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                <h5 class="centered">{{ \Auth::user()->name }}</h5>

                <li class="mt">
                    <a href="{{ url('/') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>HOME</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{ url('/activity') }}" >
                        <i class="fa fa-desktop"></i>
                        <span>ACTIVITY</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-cogs"></i>
                        <span>VOLUNTEERS</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-book"></i>
                        <span>PROFILE</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>SETTINGS</span>
                    </a>
                </li>
                <li class="mt">
                    <a onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>LOGOUT</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
