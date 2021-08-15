@extends('layouts.master')


@section('content')


    @include('layouts.hero')


    <!-- Services Start 01 -->
    <div class="services-area1 section-padding">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-11">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-60">
                        <h2>Causes we are serving</h2>
                    </div>
                </div>
            </div> --}}
            <div class="services1-active">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Single -->
                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img" style="background-color: rgba(128, 128, 128, 0.3);">
                                <a href="#"><img class="mx-auto" src="assets/img/hero/001.jpg" style="height: 300px;width:auto;" alt=""></a>
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
                                    <h3><a href="#">定財金</a></h3>
                                    <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante.</p>
                                </div>
                                <div class="properties-footer d-flex justify-content-between align-items-center">
                                    <div class="class-day">
                                        <a href="#" class="btn">更多</a>
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
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Single -->
                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img" style="background-color: rgba(128, 128, 128, 0.3);">
                                <a href="#"><img class="mx-auto" src="assets/img/hero/002.jpg" style="height: 300px;width:auto;" alt=""></a>
                                <!-- Progress Bar -->
                                {{-- <div class="single-skill">
                                    <div class="bar-progress">
                                        <div id="bar2" class="barfiller">
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
                                    <h3><a href="#">定財金燈</a></h3>
                                    <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante.</p>
                                </div>
                                <div class="properties-footer d-flex justify-content-between align-items-center">
                                    <div class="class-day">
                                        <a href="#" class="btn">更多</a>
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
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Single -->
                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img" style="background-color: rgba(128, 128, 128, 0.3);">
                                <a href="#"><img class="mx-auto" src="assets/img/hero/003.jpg" style="height: 300px;width:auto;" alt=""></a>
                                <!-- Progress Bar -->
                                {{-- <div class="single-skill">
                                    <div class="bar-progress">
                                        <div id="bar2" class="barfiller">
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
                                    <h3><a href="#">寺廟</a></h3>
                                    <p>Sedac odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante.</p>
                                </div>
                                <div class="properties-footer d-flex justify-content-between align-items-center">
                                    <div class="class-day">
                                        <a href="#" class="btn">更多</a>
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
    <!-- About -->
    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
    <div class="support-company-area section-padding" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="support-location-img embed-container" >
                        {{-- <img src="assets/img/gallery/about.jpg" alt=""> --}}
                        <iframe src="https://www.youtube.com/embed/6bZBGrcZ0Ic" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle">
                            <h2>求平安？求財？</h2>
                        </div>
                        <div class="support-caption">
                            <p class="mb-10">由於疫情升溫蔓延，蔓延，瘟神肆虐，人們不知經濟嚴重受創，帶反應過來以帶反應過來已不知所措！？</p>
                            <p class="pera-top">心神不定，家庭、婚姻、事業、子女，全部大受影響，錢財快入流失，「財不定，心更不能定」俗語說得好：「會賺錢無效，要留得住才是真的」，就算是賺的錢能留住一兩成都好。總比到總比倒賠錢好！</p>
                            <a href="about.html" class="btn about-btn">更多</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End-->
    <!-- Count Down Start -->
    <div class="count-down-area pt-25 section-img-bg2" data-background="assets/img/gallery/section-bg1.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" >
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-counter d-flex align-items-center">
                                    <div class="counter-img">
                                        <img src="assets/img/icon/count-icon1.svg" alt="">
                                    </div>
                                    <div class="captions">
                                        <span class="counter">35</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Active Cases</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-counter d-flex align-items-center">
                                    <div class="counter-img">
                                        <img src="assets/img/icon/count-icon2.svg" alt="">
                                    </div>
                                    <div class="captions">
                                        <span class="counter">12</span>
                                        <span class="plus">m</span>
                                        <p class="color-green">People Joined</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-counter d-flex align-items-center">
                                    <div class="counter-img">
                                        <img src="assets/img/icon/count-icon3.svg" alt="">
                                    </div>
                                    <div class="captions">
                                        <span class="counter">200</span>
                                        <span class="plus">m</span>
                                        <p class="color-green">Cases every Year</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-counter d-flex align-items-center">
                                    <div class="counter-img">
                                        <img src="assets/img/icon/count-icon4.svg" alt="">
                                    </div>
                                    <div class="captions">
                                        <span class="counter">1200</span>
                                        <p class="color-green">People get help from us</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    <!-- Our Services Start -->
    <div class="our-services section-padding position-relative">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-xl-7 col-lg-8 col-md-11">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <h2>為人們的服務</h2>
                        {{-- <p>Sedac odio aliquet, fringilla odio eget, tincidunt  nunc duis aliquet <br>pulvinar ante.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <img src="assets/img/icon/services1.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Pure Food & Water</a></h5>
                            <p>Odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante employees and organizations to support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <img src="assets/img/icon/services2.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Health & Medicine</a></h5>
                            <p>Odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante employees and organizations to support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <img src="assets/img/icon/services1.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Education</a></h5>
                            <p>Odio aliquet, fringilla odio eget, tincidunt nunc duis aliquet pulvinar ante employees and organizations to support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
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
    <!-- Join with Us Start-->
    {{-- <div class="join-us-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 col-md-10">
                    <div class="joing-details">
                        <div class="section-tittle">
                            <h2>Join with Us</h2>
                        </div>
                        <p>The legal definition of a charitable organization (and of charity) varies between countries and in some instances regions of the country. The regulation, the tax treatment, and the way.</p>
                        <a href="about.html" class="btn about-btn">Join Now</a>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-4 col-lg-4 col-md-7 col-sm-7">
                    <div class="joning-img">
                        <img src="assets/img/gallery/joining1.jpg" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5">
                    <div class="joning-img">
                        <img src="assets/img/gallery/joining2.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Join with Us End-->


@endsection
