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
                        <h2>Causes we are serving</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Single -->
                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="#"><img src="assets/img/gallery/services-img1.jpg" alt=""></a>
                                <!-- Progress Bar -->
                                {{-- <div class="single-skill">
                                    <div class="bar-progress">
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="65"></span>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- / progress -->
                            </div>
                            <div class="wrap-wrapper">
                                <div class="properties-caption">
                                    <h3><a href="#">Help the ecosystems</a></h3>
                                    <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante.</p>
                                </div>
                                <div class="properties-footer d-flex justify-content-between align-items-center">
                                    <div class="class-day">
                                        <a href="#" class="btn">Donate</a>
                                    </div>
                                    {{-- <div class="class-day">
                                        <span class="color-font2">$67,845</span>
                                        <p>Goal</p>
                                    </div>
                                    <div class="class-day">
                                        <span class="color-font1">$48,845</span>
                                        <p>Raised</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





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
