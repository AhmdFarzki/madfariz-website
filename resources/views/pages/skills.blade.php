@extends('layouts.app')

@section('title', 'MadFariz | Skills')


@section('content')
<!-- Header Area Start -->
<div class="half-screen center-items ">
    <div class="container ">
        <div class="slider-text position-relative text-center ">
            <h1>SKILLS</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Skills</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Header Area End -->

<!-- Skills -->
<section class="skills" id="skills" style="background-color: #fff;">
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
@endsection
