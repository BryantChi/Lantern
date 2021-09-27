<header>
    <div class="header-area">
        <div class="main-header ">
            {{-- <div class="header-top d-none d-sm-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><i class="fas fa-phone-alt"></i> +10 (78) 564 4568</li>
                                        <li>info.90@chariter.com</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                {{-- <a href="{{ url('/') }}"><img src="assets/img/logo/logo.png" alt=""></a> --}}
                                <a href="{{ url('/') }}"><h4 style="color: #fdfdfd;">定財金燈</h4></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ url('/') }}">首頁</a></li>
                                        <li><a href="{{ url('/about') }}">關於我們</a></li>
                                        <li style="{{ request()->is('/') ? '' : 'display: none;' }}"><a href="#lunar-area">農民曆</a></li>
                                        {{-- <li><a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ url('/certificate') }}">專利證書</a></li>
                                        <li><a href="{{ url('/temple') }}">廟宇介紹</a></li>
                                        <li><a href="{{ url('/contact') }}">聯絡我們</a></li>
                                        {{-- <li>
                                            <div class="header-right-btn f-right  ml-15">
                                                <a href="login.html" class="header-btn">Donate Now</a>
                                            </div>
                                        </li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
