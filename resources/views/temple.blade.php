@extends('layouts.master')

<style>
    .nice-select {
        width: 40% !important;
        clear: none !important;
    }

    .selecter>div.nice-select{
        display: none;
    }

    select {
        display: initial !important;
        font-size: 1.3rem;
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

                    <div class="col-lg-8 col-md-10 col-sm-11">
                        <div class="input-inline mb-5 selecter">
                            <select name="" id="city" class="nice-select form-control mx-1">
                                <option value="">選擇縣市</option>
                                @foreach ($typeInfo as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            <select name="" id="district" class="nice-select form-control mx-1">
                                <option value="">選擇區/鄉鎮</option>
                            </select>
                            <div class="mx-1 py-1">
                                <input type="button" class="btn" value="搜索" onclick="conditionSelect('{{ Route('TempleSelectSearch') }}')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"  id="temple-items">
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

    <script>

        $(function(){
            $("#city").change(function(){
                var src = "{{ Route('GetTempleDistrict', ['city' => ':city']) }}";
                src = src.replace(':city', $(this).val());
                $.ajax({
                    url: src,
                    type: 'POST',
                    data: {
                        _token: '{{csrf_token()}}'
                    },
                    success: function (res) {
                        var obj = $.parseJSON(res);
                        console.log('aaa0'+obj);
                        if(obj.status == "success"){
                            $("#district option").remove();
                            $("#district ul.list").remove();
                            $("#district").append($("<option></option>").attr("value", "").text("選擇區/鄉鎮"));
                            $("#district ul.list").append($("<li></li>").attr("data-value", "").addClass('option').addClass('selected').addClass('focus').text("選擇區/鄉鎮"));
                            console.log('aa0'+obj.res);
                            $.each(obj.res, function (key, value) {
                                console.log('aa'+value);
                                $("#district").append($("<option></option>").attr("value", value).text(value));
                                $("#district ul.list").append($("<li></li>").attr("data-value", value).addClass('option').text(value));
                            });
                        }

                    }
                })
            });
        });

        var city = "";
        var district = "";

        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else {
                    var query = "";
                    query = "&city=" + city + "&district=" + district;
                    getPosts(page, query);
                }
            }
        });
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function (e) {
                var query = "";
                query = "&city=" + city + "&district=" + district;
                getPosts($(this).attr('href').split('page=')[1], query);
                e.preventDefault();
            });
        });
        function getPosts(page, query = null) {
            var src = "{{ Route('TempleSelectSearch') }}";
            $.ajax({
                url : src + '?page=' + page + query,
                dataType: 'json',
            }).done(function (data) {
                $('#temple-items').html(data);
                location.hash = page;
            }).fail(function () {
                alert('temple-items could not be loaded.');
            });
        }

        function conditionSelect(src) {
            city = $('#city').val();
            district = $('#district').val();

            if (city == "" && district == "") {
                // swal("注意！", "至少選一個！", "wranning");
                alert("注意！至少選一個！");
                return;
            }

            $.ajax({
                url: src,
                type: 'POST',
                data: {
                    city: city,
                    district: district,
                    _token: '{{csrf_token()}}'
                },
                success: function (res) {
                    // var obj = $.parseJSON(res);
                    // console.log(res);
                    $("#temple-items").empty();
                    $("#temple-items").html(res);
                    if (res.indexOf('temple-item') == -1) {
                        $("#temple-container").append('<div class="w-100 text-center text-secondary"><h3>查無資料</h3></div>');
                    }
                }
            });
        }

        function detail(src) {
            window.location.href = src;
        }

    </script>

@endsection
