@extends('layouts.app')

@section('title', 'MadFariz | Services')


@section('content')
<!-- Header Area Start -->
<div class="half-screen center-items ">
    <div class="container">
        <div class="slider-text position-relative text-center">
            <h1>SERVICES</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Header Area End -->

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
@endsection
