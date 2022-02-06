<!DOCTYPE html> 
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
    <div id="sb-site">
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-9">
            <div id="mobile-navigation">
                <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
                <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
            </div>
            <div id="header-logo" class="logo-bg">
                <a href="index.html" class="logo-content-big" title="MonarchUI">
                    Marine <i>Business</i>
                    <span>The perfect solution for user interfaces</span>
                </a>
                <a href="index.html" class="logo-content-small" title="MonarchUI">
                    Marine <i>UI</i>
                    <span>The perfect solution for user interfaces</span>
                </a>
                <a id="close-sidebar" href="#" title="Close sidebar">
                    <i class="glyph-icon icon-angle-left"></i>
                </a>
            </div>
            <div id="header-nav-left">
                <div class="user-account-btn dropdown">
                    <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                        <img width="28" src="{{URL::asset('images/avaco.png')}}" alt="Profile image">
                        <span>{{ Auth::user()->name }}</span>
                        <i class="glyph-icon icon-angle-down"></i>
                    </a>
                    <div class="dropdown-menu float-left">
                        <div class="box-sm">
                            <div class="login-box clearfix">
                                <div class="user-img">
                                    <a href="#" title="" class="change-img">Change photo</a>
                                    <img src="{{URL::asset('images/avaco.png')}}" alt="">
                                </div>
                                <div class="user-info">
                                    <span>
                                        {{ Auth::user()->name }}                                        
                                    </span>
                                    <a href="changePassword" title="Edit profile">Ganti Password</a>
                                    <!--<a href="#" title="View notifications">View notifications</a>-->
                                </div>
                            </div>
                            <div class="divider"></div>
                            
                            <div class="pad5A button-pane button-pane-alt text-center">
                                <a href="{{ url('/logout') }}" class="btn display-block font-normal btn-danger">
                                    <i class="glyph-icon icon-power-off"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #header-nav-left -->

            <div id="header-nav-right">
                <a href="#" class="hdr-btn popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
                    <i class="glyph-icon icon-search"></i>
                </a>
                <div class="hide" id="popover-search">
                    <div class="pad5A box-md">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search terms here ...">
                            <span class="input-group-btn">
                                <a class="btn btn-primary" href="#">Search</a>
                            </span>
                        </div>
                    </div>
                </div>
                <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
                    <i class="glyph-icon icon-arrows-alt"></i>
                </a>
  
               
                <div class="dropdown" id="dashnav-btn">
                    <a href="#" data-toggle="dropdown" data-placement="bottom" class="popover-button-header tooltip-button" title="Dashboard Quick Menu">
                        <i class="glyph-icon icon-linecons-cog"></i>
                    </a>
                    <div class="dropdown-menu float-right">
                        <div class="box-sm">
                            <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                                <a href="#" class="btn vertical-button hover-blue-alt" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                    </span>
                                    Dashboard
                                </a>
                                <a href="#" class="btn vertical-button hover-green" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                    </span>
                                    Widgets
                                </a>
                                <a href="#" class="btn vertical-button hover-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                                    </span>
                                    Tables
                                </a>
                                <a href="#" class="btn vertical-button hover-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                                    </span>
                                    Charts
                                </a>
                                <a href="#" class="btn vertical-button hover-purple" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                    </span>
                                    Buttons
                                </a>
                                <a href="#" class="btn vertical-button hover-azure" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                    </span>
                                    Panels
                                </a>
                            </div>
                            <div class="divider"></div>
                            <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                                <a href="#" class="btn vertical-button remove-border btn-info" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                    </span>
                                    Dashboard
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-danger" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                    </span>
                                    Widgets
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-purple" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                                    </span>
                                    Tables
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-azure" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                                    </span>
                                    Charts
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-yellow" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                    </span>
                                    Buttons
                                </a>
                                <a href="#" class="btn vertical-button remove-border btn-warning" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                    </span>
                                    Panels
                                </a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div><!-- #header-nav-right -->

        </div>
        <div id="page-sidebar">
            <div class="scroll-sidebar">        
                @include('includes.sidebar')  
            </div>
        </div>
        <div id="page-content-wrapper">
            <div id="page-content">                
                <div class="container">                    
                    @yield('content')
                </div>            
            </div>
        </div>
    </div>
@include('includes.script')
@yield('script')
</body>
</html>


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
 -->
