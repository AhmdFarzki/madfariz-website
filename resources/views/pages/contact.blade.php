@extends('layouts.app')

@section('title', 'MadFariz | Contact')


@section('content')
<!-- Header Area Start -->
<div class="half-screen center-items ">
    <div class="container">
        <div class="slider-text position-relative text-center">
            <h1>CONTACT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Header Area End -->

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
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
</section>
<!-- End Contact -->
@endsection
