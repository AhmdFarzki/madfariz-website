@extends('layouts.app')

@section('title', 'MadFariz | Portfolio')


@section('content')
<!-- Header Area Start -->
<div class="half-screen center-items ">
    <div class="container">
        <div class="slider-text position-relative text-center">
            <h1>PORTFOLIO</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Header Area End -->

<!-- Portfolio -->
<section class="portfolio" id="portfolio" style="background-color: #fff;">
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
                @foreach($items as $item)
                @if ($item->category == 'Website')
                <div class="single-work col-md-4 mt-2 item" id="website">
                    <a href="#" data-target="#modals{{ $item->id }} " data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img alt="Card image cap" class="card-img-top" src="{{ Storage::url($item->photo)}} " />
                            </div>
                            <div class="middle">
                                <i class="fas fa-search-plus"></i>
                            </div>

                        </div>
                    </a>
                </div>
                @elseif($item->category == 'Design')
                <div class="single-work col-md-4 mt-2 item" id="design">
                    <a href="#" data-target="#modals{{ $item->id }} " data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img alt="Card image cap" class="card-img-top" src="{{ Storage::url($item->photo)}} " />
                            </div>
                            <div class="middle">
                                <i class="fas fa-search-plus"></i>
                            </div>

                        </div>
                    </a>
                </div>
                @else
                <div class="single-work col-md-4 mt-2 item" id="app">
                    <a href="#" data-target="#modals{{ $item->id }} " data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img alt="Card image cap" class="card-img-top" src="{{ Storage::url($item->photo)}} " />
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


    </div>
    @foreach($items as $item)
    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modals{{ $item->id}}" role="dialog"
        tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="cus-modal-thumb mb-sm-40">
                                <img src="{{ Storage::url($item->photo)}}" style="width: 100%;" alt="modal thumb">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="cus-modal-content ">
                                <h2 class="cus-modal-title">{{ $item->name}}</h2>
                                <p style="color: #000">{{ $item->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <p class="text-muted">{{ $item->teknologi}}</p>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
<!-- End Portfolio -->
@endsection
