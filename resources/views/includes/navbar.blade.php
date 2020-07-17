<nav class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="#index"><img src="{{ url('img/logo.png')}} " alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link-nav" href="{{ route('home')}} ">Home</a>
                        </li>
                        <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link-nav " href="{{ route('about')}} ">About</a>
                        </li>
                        <li class="nav-item {{ Request::is('skills') ? 'active' : '' }}">
                            <a class="nav-link-nav" href="{{ route('skills')}}">Skills</a>
                        </li>
                        <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
                            <a class="nav-link-nav" href="{{ route('services')}}">Services</a>
                        </li>
                        <li class="nav-item {{ Request::is('portfolio') ? 'active' : '' }}">
                            <a class="nav-link-nav" href="{{ route('portfolio')}}">Portfolio</a>
                        </li>
                        <li class="nav-item {{ Request::is('achievement') ? 'active' : '' }}">
                            <a class="nav-link-nav" href="{{ route('achievement')}}">Achievement</a>
                        </li>
                        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                            <a class="nav-link-nav" href="{{ route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</nav>
