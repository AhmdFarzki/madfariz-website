@extends('layouts.app')

@section('title', 'MadFariz | About')


@section('content')
<!-- Header Area Start -->
<div class="half-screen center-items ">
    <div class="container">
        <div class="slider-text position-relative text-center">
            <h1>ABOUT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Header Area End -->
<!-- End Header -->

<!-- About -->
<section class="about" id="about">
    <div class="container py-5 my-5">
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
@endsection
