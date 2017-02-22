<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Abridge Corp, Japanese IT Company Assignment </title>
    <link href="{{asset('css/stylesheet.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>

<body>
    <div id="wrap">
        <div id="page-header">
            <div class="headerbar" role="banner">
                <div class="inner">
                    <div id="site-description">
                        <h1>Abridge Corp, Japanese IT Company Assignment </h1>
                    </div>
                </div>
            </div>
            <div class="navbar" role="navigation">
                <div class="inner">
                    <ul id="nav-main" class="linklist bulletin" role="menubar">                     
                        <li class="small-icon icon-search"><a href="{{url('search')}}">Search</a></li>
                        @if(Auth::check())<li><a href="">Welcome {{Auth::user()->name}}</a></li>
                        <li class="small-icon icon-logout rightside" data-skip-responsive="true"><a href="{{url('/logout')}}" role="menuitem">Logout</a>
                        </li> 
                        <li class="small-icon icon-team rightside" data-skip-responsive="true"><a href="{{url('avatar/edit/')}}" role="menuitem">Change Avatar</a>
                        </li>
                        @else
                        <li class="small-icon icon-logout rightside" data-skip-responsive="true"><a href="{{url('/login')}}" role="menuitem">Login</a>
                        </li> 
                        <li class="small-icon icon-register rightside" data-skip-responsive="true"><a href="{{url('/register')}}" role="menuitem">Register</a>
                        @endif
                        <li class="small-icon icon-home responsive-menu rightside" data-skip-responsive="true"><a href="{{url('/')}}" role="menuitem">Home</a>
                    </ul>
                    <ul id="nav-breadcrumbs" class="linklist navlinks" role="menubar">
                        <li class="small-icon breadcrumbs"> 
                        <span class="crumb"><a href="{{url('/thread')}}"><span>Write Thread</span></a>
                            </span>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>

        <div id="page-body" role="main">
            <p class="right responsive-center time">Today : {{date("d F Y")}}</p>

            @yield('content')

        </div>
    </div>
</body>

</html>