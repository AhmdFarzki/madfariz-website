@extends('layouts.app')

@section('title', 'MadFariz | Achievement')


@section('content')
<!-- Header Area Start -->
<div class="half-screen center-items ">
    <div class="container">
        <div class="slider-text position-relative text-center">
            <h1>ACHIEVEMENT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Achievement</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Header Area End -->

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
            @foreach($items as $item)
            @if ($item->id%2 == 1)
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_experience d-lg-flex align-items-center flex-wrap wow fadeIn"
                        data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="experience_title order-last">
                            <h3 class="title">{{ $item->name }}</h3>
                            <p>{{ $item->organizer }}</p>
                            <span class="date">{{ $item->date_competition }}</span>
                        </div>
                        <div class="experience_number">
                            <span>{{ $item->id }}</span>
                        </div>
                        <div class="experience_content order-first">
                            <div class="content">

                                <div class="content-overlay"></div>
                                <img src="{{ Storage::url($item->photo) }} " class="img-fluid" alt="">
                                <div class="content-details fadeIn-top">
                                    <p>{{ $item->description }}</p>
                                    <a href="{{ $item->link }}" target="_blank"><i class="fas fa-eye fa-2x"></i></a>
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
                            <h3 class="title">{{ $item->name }}</h3>
                            <p>{{ $item->organizer }}</p>
                            <span class="date">{{ $item->date_competition }}</span>
                        </div>
                        <div class="experience_number">
                            <span>{{ $item->id }}</span>
                        </div>
                        <div class="experience_content">
                            <div class="content">

                                <div class="content-overlay"></div>
                                <img src="{{ Storage::url($item->photo) }} " class="img-fluid" alt="">
                                <div class="content-details fadeIn-top">
                                    <p>{{ $item->description }}</p>
                                    <a href="{{ $item->link }}" target="_blank"><i class="fas fa-eye fa-2x"></i></a>
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
    </div>
</section>
{{-- End Achievement --}}
@endsection
