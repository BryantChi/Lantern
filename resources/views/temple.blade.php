@extends('layouts.master')


@section('content')

<main>
    <!-- Hero area Start-->
    <div class="slider-area">
        <div class="slider-height2 slider-bg4 hero-overly d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="hero-caption hero-caption2">
                            <h2>廟宇介紹</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Hero area End -->
    <!-- Services Start 01 -->
    <div class="services-area1 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-11">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-60">
                        <h2>各大廟宇介紹</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('temple-item')
            </div>
        </div>
    </div>
    <!-- Services End -->
    <!-- Emergency care start -->
    {{-- <div class="emargency-care section-img-bg2" data-background="assets/img/gallery/section-bg2.jpg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-8 col-md-9 col-sm-12">
                    <div class="single-emargency">
                        <div class="emargency-cap">
                            <h5><a href="#">They need your help</a></h5>
                            <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc. Duis aliquet pulvinar ante tempor etiam lacus eros</p>
                            <p class="emargenc-cap">Sedac odio aliquet, fringilla odio eget, tincidunt nunc. Duis aliquet pulvinar ante tempor etiam lacus eros</p>
                            <a href="#" class="btn loan-btn">Donate in a Case</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Emergency care End -->
</main>

@endsection
