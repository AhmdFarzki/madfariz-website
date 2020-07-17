@extends('layouts.app')

@section('title', 'MadFariz | Web Developer')

@section('content')
<!-- Header -->
<header class="home" id="home">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-12 col-md-6 text-md-left">
                <div class="main-title mb-5">
                    <h5 class="mb-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">
                        HEY THERE !
                    </h5>
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
                        I AM AHMAD ALFARIZKI
                    </h1>
                    <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
                        WEB DEVELOPER
                    </h4>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#about" class="primary-btn mt-3 wow fadeInLeftBig" data-wow-duration="1s"
                            data-wow-delay="2.2s" data-text="Hire Me">
                            <span>H</span>
                            <span>i</span>
                            <span>r</span>
                            <span>e</span>
                            <span> </span>
                            <span>M</span>
                            <span>e</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hero col-12 col-md-6 mt-5">
                <img src=" img/hero.svg " alt=" Me " class="img-fluid img-hover rounded mx-auto d-block" />
            </div>
        </div>
        {{-- <div class='icon-scroll'>
            <div class="arrow d-md-none">
                <span></span>
                <span></span>
                <span></span>

            </div>
        </div> --}}

        <div class="mouse_scroll">

            <div class="icon-scroll">
                <div class="d-md-none ">
                    <span class="m_scroll_arrows unu"></span>
                    <span class="m_scroll_arrows doi"></span>
                    <span class="m_scroll_arrows trei"></span>
                </div>
            </div>
        </div>
</header>
<div class="icon-sos float-right d-none d-sm-block">
    <a href="https://facebook.com/ahmdfarzki" class="btn-floating btn-lg btn-fb" type="button" role="button"><i
            class="fab fa-facebook-f"></i></a>
    <!--Twitter-->
    <a href="https://twitter.com/MadFarizz" class="btn-floating btn-lg btn-tw" type="button" role="button"><i
            class="fab fa-twitter"></i></a>

    <!--Linkedin-->
    <a href="https://www.linkedin.com/in/ahmd-farzki/" class="btn-floating btn-lg btn-li" type="button" role="button"><i
            class="fab fa-linkedin-in"></i></a>
    <!--Instagram-->
    <a href="https://www.instagram.com/madfarizz/" class="btn-floating btn-lg btn-ins" type="button" role="button"><i
            class="fab fa-instagram"></i></a>

    <!--Github-->
    <a href="https://github.com/AhmdFarzki" class="btn-floating btn-lg btn-git" type="button" role="button"><i
            class="fab fa-github"></i></a>

    <!--WhatsApp-->
    <a href="https://bit.ly/2VOTBLV" class="btn-floating btn-lg btn-whatsapp" type="button" role="button"><i
            class="fab fa-whatsapp"></i></a>
</div>

{{-- <section class="panel wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-10 info-panel">
                    <div class="row">
                        <div class="col-lg">
                            <img src=" img/flower1.svg" alt=" " class="float-left" />
                            <h4>1 Years Job</h4>
                            <p>Experience</p>
                        </div>
                        <div class="panel col-lg">
                            <img src=" img/flower1.svg " alt=" " class="float-left" />
                            <h4>10+ Projects</h4>
                            <p>Completed</p>
                        </div>
                        <div class="panel col-lg">
                            <img src=" img/flower1.svg " alt=" " class="float-left" />
                            <h4>Support</h4>
                            <p>Online 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- End Header -->

<!-- About -->
<section class="about" id="about">
    <div class="container py-5">
        <div class="row align-items-lg-center">
            <div class="picme col-12 col-md-6">
                <img src="img/me3.svg" class="img-fluid img-hover mx-auto d-block" alt="" />
            </div>
            <div class="col-12 col-md-6 text-md-left">
                <div class="section-heading mb-3">
                    <h5>My Intro</h5>
                    <h1>About Me</h1>
                    <p>
                        I am very interested in Web Developers. My goal is to become a Fullstack Web Developer. Trying
                        to always be a positive person, can work well, learn new things, creative and conscientious.
                    </p>
                </div>
                <div class="inters mt-4">
                    <h5>My Interests</h5>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <i class="fa fa-code"> </i>
                            <p>Programming</p>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fa fa-paint-brush"> </i>
                            <p>Design</p>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fa fa-camera"> </i>
                            <p>Photography</p>
                        </div>
                    </div>

                    <a href="{{ route('contact')}} " class="primary-btn mt-3" data-text=" Contact">
                        <span>C</span>
                        <span>o</span>
                        <span>n</span>
                        <span>t</span>
                        <span>a</span>
                        <span>c</span>
                        <span>t</span>
                    </a>
                    <a href="file/CV.pdf" class="primary-btn white mt-3" data-text=" Get CV">
                        <span>G</span>
                        <span>e</span>
                        <span>t</span>
                        <span></span>
                        <span>C</span>
                        <span>V</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About -->

<!-- Skills -->
<section class="skills" id="skills">
    <div class="container py-5">
        <div class="section-heading text-center mb-3">
            <h5>My Skills</h5>
            <h1 class="mb-5">Know My Skills</h1>
        </div>

        <div class="tile d-flex justify-content-center" id="tile1">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item mr-4">
                    <a href="#step-1" id="step1-tab" class="nav-link active mb-3" aria-selected="true" data-toggle="tab"
                        role="tab">
                        Programming
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#step-2" id="step2-tab" class="nav-link white" aria-selected="true" data-toggle="tab"
                        role="tab">
                        Design
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="step-1" aria-labelledby="step1-tab" role="tabpanel">
                <div class="row mt-4">
                    @foreach($items as $item)
                    @if ($item->category == 'Programming')
                    <div class="col-6 col-md-2 mt-2 d-flex justify-content-center">
                        <div class="card" style="width: 10rem;">
                            <div class="card-body text-center">
                                <img src="{{ Storage::url($item->photo) }}   " alt="" class="img-fluid" />
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">
                                    {{ $item->level }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
            <div class="tab-pane fade show" id="step-2" aria-labelledby="des2-tab" role="tabpanel">
                <div class="row mt-4">
                    @foreach($items as $item)
                    @if ($item->category == 'Design')
                    <div class="col-6 col-md-2 mt-2 d-flex justify-content-center">
                        <div class="card" style="width: 10rem;">
                            <div class="card-body text-center">
                                <img src="{{ Storage::url($item->photo) }}   " alt="" class="img-fluid" />
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">
                                    {{ $item->level }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Skills -->

<!-- Services -->
<section class="services" id="services">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-heading mb-3 text-center">
                    <h5>My Sevices</h5>
                    <h1 class="mb-5">Services Offers</h1>
                </div>
            </div>
        </div>
        <div class="row feature-inner">
            <div class="col-lg-3 col-md-6">
                <div class="feature-item" style="height: 350px;">
                    <img src="img/dev.svg" alt="" />
                    <h4>Web Development</h4>
                    <p>
                        Full stack development includes Front-end and back-end website development.
                        {{-- Such as Information
                        Systems, E-Commerce, CMS (Custom Management System), etc.  --}}
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item" style="height: 350px;">
                    <img src="img/paint.svg" alt="" />
                    <h4>UI UX Design</h4>
                    <p>
                        I designed UI UX for your website, such as Landing Page, Dashboard Admin, Friendly
                        Responsiveness.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item" style="height: 350px;">
                    <img src="img/wordpress.svg" alt="" />
                    <h4>Wordpress Development</h4>
                    <p>
                        Design and Develop your website with WordPress & Custom website design with SEO Optimization.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item" style="height: 350px;">
                    <img src="img/responsive.svg" alt="" />
                    <h4>Responsive Design</h4>
                    <p>
                        Design and Develop a Website Fully Responsive, compatible with Desktops, Tablets, Mobile and
                        Devices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services -->

<!-- Portfolio -->
<section class="portfolio" id="portfolio">
    <div class="container py-5">
        <div class="section-heading text-center mb-3">
            <h5>My Portfolio</h5>
            <h1>Recent Works</h1>
        </div>
        <ul class="filters text-center">
            <li class="active" data-filter="*">
                <a href="#!" class="btn btn-outline-primary btn-rounded waves-effect">All
                </a>
            </li>
            <li data-filter="#website">
                <a href="#!" class="btn btn-outline-primary btn-rounded waves-effect">
                    Website
                </a>
            </li>
            <li data-filter="#app ">
                <a href="#!" class="btn btn-outline-primary btn-rounded waves-effect">
                    Application
                </a>
            </li>
            <li data-filter="#design ">
                <a href="#!" class="btn btn-outline-primary btn-rounded waves-effect">
                    Design
                </a>
            </li>
        </ul>

        <!-- Grid row -->
        <div class="projects">
            <div class="row">
                @foreach($ports as $port)
                @if ($port->category == 'Website')
                <div class="single-work col-md-4 mt-2 item app" id="website">
                    <a href="#" data-target="#modals{{ $port->id }} " data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img alt="Card image cap" class="card-img-top" src="{{ Storage::url($port->photo)}} " />
                            </div>
                            <div class="middle">
                                <i class="fas fa-search-plus"></i>
                            </div>

                        </div>
                    </a>
                </div>
                @elseif($port->category == 'Design')
                <div class="single-work col-md-4 mt-2 item app" id="design">
                    <a href="#" data-target="#modals{{ $port->id }} " data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img alt="Card image cap" class="card-img-top" src="{{ Storage::url($port->photo)}} " />
                            </div>
                            <div class="middle">
                                <i class="fas fa-search-plus"></i>
                            </div>

                        </div>
                    </a>
                </div>
                @else
                <div class="single-work col-md-4 mt-2 item app" id="app">
                    <a href="#" data-target="#modals{{ $port->id }} " data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img alt="Card image cap" class="card-img-top" src="{{ Storage::url($port->photo)}} " />
                            </div>
                            <div class="middle">
                                <i class="fas fa-search-plus"></i>
                            </div>

                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <!-- Grid row -->
        <div class="d-flex justify-content-center">

            <a href="{{ route('about')}} " class="primary-btn mt-3" data-text="Show All">
                <span>S</span>
                <span>h</span>
                <span>o</span>
                <span>w</span>
                <span> </span>
                <span>A</span>
                <span>l</span>
                <span>l</span>
            </a>
        </div>
    </div>
    @foreach($ports as $port)
    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modals{{ $port->id}}" role="dialog"
        tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="cus-modal-thumb mb-sm-40">
                                <img src="{{ Storage::url($port->photo)}}" style="width: 100%;" alt="modal thumb">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="cus-modal-content ">
                                <h2 class="cus-modal-title">{{ $port->name}}</h2>
                                <p style="color: #000">{{ $port->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <p class="text-muted">{{ $port->teknologi}}</p>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
<!-- End Portfolio -->

{{-- Achievement --}}
<section id="work" class="work_experience_area pt-115">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading text-center mb-3">
                    <h5>My Achievements</h5>
                    <h1>Achievement and Graduation</h1>
                </div>
            </div>
        </div>
        <div class="work_experience">
            @foreach($achiev as $ac)
            @if ($ac->id%2 == 1)
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_experience d-lg-flex align-items-center flex-wrap wow fadeIn"
                        data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="experience_title order-last">
                            <h3 class="title">{{ $ac->name }}</h3>
                            <p>{{ $ac->organizer }}</p>
                            <span class="date">{{ $ac->date_competition }}</span>
                        </div>
                        <div class="experience_number">
                            <span>{{ $ac->id }}</span>
                        </div>
                        <div class="experience_content order-first">
                            <div class="content">

                                <div class="content-overlay"></div>
                                <img src="{{ Storage::url($ac->photo) }} " class="img-fluid" alt="">
                                <div class="content-details fadeIn-top">
                                    <p>{{ $ac->description }}</p>
                                    <a href="{{ $ac->link }}" target="_blank"><i class="fas fa-eye fa-2x"></i></a>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_experience d-lg-flex align-items-center flex-wrap wow fadeIn"
                        data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="experience_title text-lg-right">
                            <h3 class="title">{{ $ac->name }}</h3>
                            <p>{{ $ac->organizer }}</p>
                            <span class="date">{{ $ac->date_competition }}</span>
                        </div>
                        <div class="experience_number">
                            <span>{{ $ac->id }}</span>
                        </div>
                        <div class="experience_content">
                            <div class="content">

                                <div class="content-overlay"></div>
                                <img src="{{ Storage::url($ac->photo) }} " class="img-fluid" alt="">
                                <div class="content-details fadeIn-top">
                                    <p>{{ $ac->description }}</p>
                                    <a href="{{ $ac->link }}" target="_blank"><i class="fas fa-eye fa-2x"></i></a>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif



            @endforeach
        </div>
    </div>
</section>
{{-- End Achievement --}}


<!-- Hire -->
<div class="container-fluid">
    <div class="parallax">
        <div class="container">
            <div class="text-body">
                <div class="row">
                    <div class="col">
                        <h6>Estimate your project!</h6>
                        <h1>Have Any Project On Mind?</h1>
                    </div>
                    <div class="col mt-3 float-right">
                        <div class="type-1">
                            <div>
                                <a href="{{ route('contact')}} " class="btn btn-1">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hire -->

<!-- Contact -->
<section class="contact" id="contact">
    <div class="container my-5">
        <div class="section-heading text-center mb-5">
            <h5>My Contact</h5>
            <h1>Get In Touch</h1>
        </div>
        <div class="row text-center mb-4">
            <div class="col-sm-4">
                <div class="contact-detail-box">
                    <i class="fa fa-phone-alt fa-3x text-colored mb-4"></i>
                    <h5>(+62) 821 1756 9494</h5>
                    <p class="text-muted">Online 24/7</p>
                </div>
            </div>
            <!-- end col -->

            <div class="col-sm-4">
                <div class="contact-detail-box">
                    <i class="fa fa-map-marked-alt fa-3x text-colored mb-4"></i>
                    <h5>West Java, Indonesia</h5>
                    <address class="text-muted">
                        Subang
                    </address>
                </div>
            </div>
            <!-- end col -->

            <div class="col-sm-4">
                <div class="contact-detail-box">
                    <i class="fa fa-envelope fa-3x text-colored mb-4"></i>
                    <h5>
                        <a href="mailto:ahmfariz24@gmail.com" style="color: #0d0a60;">ahmfariz24@gmail.com</a>
                    </h5>
                    <p class="text-muted">Send us your query anytime!</p>
                </div>
            </div>
            <!-- end col -->
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15854.773329769598!2d107.75529769542365!3d-6.560340499924834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693c919ece3ed5%3A0x630f121657291f0!2sSubang%2C%20Kec.%20Subang%2C%20Kabupaten%20Subang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1592451352354!5m2!1sid!2sid"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        style="width: 100%; height: 360px;"></iframe>
                </div>
            </div>
            <!-- end col -->

            <!-- Contact form -->
            <div class="col-sm-6">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <form class="row contact_form" action="{{ route('contact.store') }}" method="post" id="contactForm">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="name"
                                name="name" placeholder="Full Name">
                            <!-- Error -->
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}"
                                id="email" name="email" placeholder="Email">
                            @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" id="message"
                                name="message" rows="5" placeholder="Your Message"></textarea>
                            @if ($errors->has('message'))
                            <div class="error">
                                {{ $errors->first('message') }}
                            </div>
                            @endif
                        </div>
                        <button type="submit" value="submit" class="primary-btn" data-text="Send">
                            <span>S</span>
                            <span>e</span>
                            <span>n</span>
                            <span>d</span>
                        </button>
                </form>
            </div>

        </div>
        <!-- end row -->
    </div>
</section>
<!-- End Contact -->
@endsection
