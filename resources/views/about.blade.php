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
                            <h2>關於我們</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Hero area End -->
    <!-- About -->
    <div class="support-company-area section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="support-location-img embed-container">
                        {{-- <img src="assets/img/gallery/about.jpg" alt=""> --}}
                        <iframe src="https://www.youtube.com/embed/6bZBGrcZ0Ic" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle">
                            <h2>求平安？求財？</h2>
                        </div>
                        <div class="support-caption">
                            {{-- <p class="mb-10">Sedac odio aliquet, fringilla odio eget, tincidunt nunc. Duis aliquet
                                pulvinar ante tempor etiam lacus eros</p> --}}
                            <p class="pera-top">想要財運亨通、事業順利，當然要去靈驗的神明那裡過個火，點個燈，順便求個財啊。<br>
                                啥!你每年點燈求發財金都沒什麼靈驗!?<br>
                                許多人都會到宮廟求發財金，祈求新的一年財運亨通，每年都吸引大批信眾趨之若鶩。每年都有數十萬信徒祈福借發財金。根據統計原本是為了幫信徒周轉現金、度過難關，不過後來越來越多人因為借錢後生意變好甚至致富。<br>
                                「好景不常」辛苦賺得人生的第一桶金，要嘛碰到金融海嘯，不然就是通貨膨胀。<br>
                                好不容易挺過了，又來個 COVID-19 。店也開不了，房租要付，員工要發薪，這不是所謂的漏財嗎？<br>
                                所以財進就要定財。怎麼定，用「定財燈」，「定財金」來定，守住你的財，「定財燈」乞求神明幫你守財，焚燒「定財金」是給神明，家裡的祖先，當地福德正神的一點心意，錢進來能守住才是王者。<br>
                                配合口訣，定財疏文，祈求神明幫忙留住錢財，俗話說：也要人也要神，共生共存為天地間生存自然法則。<br>
                                </p>
                            {{-- <a href="about.html" class="btn about-btn">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End-->
</main>

@endsection
