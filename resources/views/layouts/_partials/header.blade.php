<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-panel"></i>
        <p>Stats</p>
                    </a>
                </li>
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                            <p class="notification">5</p>
          <p>Notifications</p>
          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>
                        <li><a href="#">Notification 3</a></li>
                        <li><a href="#">Notification 4</a></li>
                        <li><a href="#">Another notification</a></li>
                      </ul>
                </li>
    <li>
                    <a href="#">
        <i class="ti-settings"></i>
        <p>Settings</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>



    {{--<!-- Right Side Of Navbar -->--}}
    {{--<ul class="nav navbar-nav navbar-right">--}}
        {{--<!-- Authentication Links -->--}}
        {{--@if (Auth::guest())--}}
            {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
        {{--@else--}}
            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                {{--</a>--}}

                {{--<ul class="dropdown-menu" role="menu">--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/logout') }}"--}}
                            {{--onclick="event.preventDefault();--}}
                                     {{--document.getElementById('logout-form').submit();">--}}
                            {{--Logout--}}
                        {{--</a>--}}

                        {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
                            {{--{{ csrf_field() }}--}}
                        {{--</form>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--@endif--}}
    {{--</ul>--}}
</nav>
