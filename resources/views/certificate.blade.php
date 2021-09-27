@extends('layouts.master')

@section('content')

    <!-- Hero area Start-->
    <div class="slider-area">
        <div class="slider-height2 slider-bg4 hero-overly d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="hero-caption hero-caption2">
                            <h2>專利證書</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Hero area End -->
    <div class="whole-wrap my-3">
        <div class="container box_1170">
            <div class="section-top-border">
                {{-- <h3></h3> --}}
                <div class="row gallery-item">
                    <div class="col-md-4">

                        <a href="assets/img/certificate/S__91537419.jpg" class="img-pop-up">
                            <h3 class="text-center" style="background: #fde943;">定財金金磚專利</h3>
                            <img class="img-fluid img-thumbnail single-gallery-image" src="assets/img/certificate/S__91537419.jpg" alt="">
                            {{-- <div class="single-gallery-image" style="background: url(assets/img/certificate/S__91537419.jpg);">
                            </div> --}}
                        </a>
                    </div>
                    <div class="col-md-4">

                        <a href="assets/img/certificate/S__91537420.jpg" class="img-pop-up">
                            <h3 class="text-center" style="background: #fde943;">定財金金元寶專利</h3>
                            <img class="img-fluid img-thumbnail single-gallery-image" src="assets/img/certificate/S__91537420.jpg" alt="">
                            {{-- <div class="single-gallery-image" style="background: url(assets/img/certificate/S__91537420.jpg);">
                            </div> --}}
                        </a>
                    </div>
                    <div class="col-md-4">

                        <a href="assets/img/certificate/S__91537421.jpg" class="img-pop-up">
                            <h3 class="text-center" style="background: #fde943;">定財金專利</h3>
                            <img class="img-fluid img-thumbnail single-gallery-image" src="assets/img/certificate/S__91537421.jpg" alt="">
                            {{-- <div class="single-gallery-image" style="background: url(assets/img/certificate/S__91537421.jpg);">
                            </div> --}}
                        </a>
                    </div>

                    <div class="col-md-6 mt-5">

                        <a href="assets/img/certificate/S__91537423.jpg" class="img-pop-up">
                            <h3 class="text-center" style="background: #fde943;">定財燈專利</h3>
                            <img class="img-fluid img-thumbnail single-gallery-image" src="assets/img/certificate/S__91537423.jpg" alt="">
                            {{-- <div class="single-gallery-image" style="background: url(assets/img/certificate/S__91537423.jpg);">
                            </div> --}}
                        </a>
                    </div>
                    <div class="col-md-6 mt-5">

                        <a href="assets/img/certificate/S__91537424.jpg" class="img-pop-up">
                            <h3 class="text-center" style="background: #fde943;">定財香專利</h3>
                            <img class="img-fluid img-thumbnail single-gallery-image" src="assets/img/certificate/S__91537424.jpg" alt="">
                            {{-- <div class="single-gallery-image" style="background: url(assets/img/certificate/S__91537424.jpg);">
                            </div> --}}
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <script>
        $('.carousel').carousel()
    </script>

@endsection
