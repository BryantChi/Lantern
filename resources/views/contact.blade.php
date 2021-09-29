@extends('layouts.master')

<style>
    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        max-width: 100%;
        radius: 10px;
    }

    .embed-container iframe,
    .embed-container object,
    .embed-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

@section('content')

    <main>
        <!-- Hero area Start-->
        <div class="slider-area">
            <div class="slider-height2 slider-bg4 hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6 col-md-6">
                            <div class="hero-caption hero-caption2">
                                <h2>聯絡我們</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Hero area End -->
        <!-- Hero Area End-->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title px-5">聯絡我們</h2>
                    </div>
                    <div class="col-lg-12 px-5">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <a href="https://goo.gl/maps/JEYARupAZgVmLAro7" target="_blank"><h3>臺中市東區東門里旱溪西路一段172號</h3></a>
                                {{-- <p>旱溪西路一段172號</p> --}}
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <a href="tel:0923595793"><h3>0923595793</h3></a>
                                {{-- <p>Mon to Fri 9am to 6pm</p> --}}
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>營業時間: 9:00 ~ 21:00</h3>
                                {{-- <p>Send us your query anytime!</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-block mb-5 pb-4">
                    <div class="mapouter">
                        <div class="iframe-rwd"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.1942203184426!2d120.69683171498858!3d24.1298164844037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d3a6000a46f%3A0x9a73be22021b3a04!2zNDAx5Y-w5Lit5biC5p2x5Y2A5pex5rqq6KW_6Lev5LiA5q61MTcy6Jmf!5e0!3m2!1szh-TW!2stw!4v1632838553908!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy"></iframe><a
                                href="https://123movies-to.org"></a><br>
                            <style>
                                .iframe-rwd {
                                    position: relative;
                                    padding-bottom: 50%;
                                    padding-top: 30px;
                                    height: 0;
                                    overflow: hidden;
                                }
                                .iframe-rwd iframe {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    max-height: 600px;
                                }

                            </style><a href="https://www.embedgooglemap.net">create google map for website</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>

@endsection
