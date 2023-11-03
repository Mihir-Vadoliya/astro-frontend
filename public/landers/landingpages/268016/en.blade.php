@php($asset_path = 'https://lp.all-universe.com/landers/landingpages/268016/')
@php($srcImg = "/landers/sets/set31/")
@include('/landers/terms/dynamic/dynamic')

<!doctype html>
<html lang="nl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- required meta tag -->
    <meta name="author" content="All Universe">
    <meta name="title" content="All Universe">
    <meta name="keyword" content="All Universe">
    <meta name="description" content="All Universe">

    <meta property="og:title" content="All Universe" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="all-universe.com" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="104" />
    <meta property="og:image:height" content="87" />
    <meta property="og:site_name" content="All Universe" />
    <meta property="og:description" content="All Universe" />

    <!-- Bootstrap CSS -->
    <link href="{{$asset_path}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{$asset_path}}assets/css/style.css" rel="stylesheet">
    <!-- favicon -->
    <link rel='shortcut icon' href='{{$asset_path}}assets/images/favicon.png'>
    <title>ASTROFYSICA</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Livvic:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{$asset_path}}assets/css/font-awesome.min.css">
    <script src="{{$asset_path}}assets/js/jquery-3.6.3.min.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>

    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="main_bg">
        <!-- header start -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-3 col-lg-3 order-0 order-md-0">
                        <div class="">
                            <a href="https://all-universe.com"><img src="{{$asset_path}}assets/images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-8 col-md-9 col-lg-9 my-auto order-1 order-md-2">
                        <div class="text-start">
                            <h1 class="text-white fw-light Livvic mb-0 main_title">Get Clarity, <span class="text-EDF57E fw-500">Guidance</span> And <span class="text-EDF57E fw-500">Peace Of Mind</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <form name="g" id="nameForm" class="main_form position-relative sign_show" method="post" action="{{request()->url()}}/insertlead">
            @csrf
            <input name="uuid" type="hidden" value="{{$uuid}}">
            <input name="design_id" type="hidden" value="{{$design_id}}">
            <input name="placement" type="hidden" value="{{$placement}}">
            <input name="country" type="hidden" value="{{$country}}">
            <input name="language" type="hidden" value="{{$language}}">
            <input name="visit" type="hidden" value="{{$visit_id}}">
            <input name="binom_click_id" type="hidden" value="{{$binom_click_id}}">
            <input name="queryString" type="hidden" value="{{$querystring}}">
            <input name="googleClientId" type="hidden" value="">
            <input name="sign" type="hidden" value="sign">

            <!-- banner start -->
            <section class="main_banner d-none" id="step_1_banner">
                <div class="container">
                    <div class="row mx-0 w-100">
                        <div class="col-12 col-md-12 col-lg-12 my-auto">
                            <div class="text-center">
                                <h1 class="text-white fw-light Livvic mb-0 main_title">Get Clarity, <span class="text-EDF57E fw-500">Guidance</span> And<br> <span class="text-EDF57E fw-500">Peace Of Mind</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->
            <!-- choose sign start -->
            <section class="choose_sign" id="step_1">
                <div class="container-fluid">
                    <div class="row mx-0 w-100 gtm-screen-zodiac">
                        <div class="col-4 col-lg-1" data-sign="aries">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="aries" aria-label="">
                                <img src="{{$srcImg}}aries-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="taurus">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="taurus" aria-label=""><img src="{{$srcImg}}Taurus-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="gemini">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="gemini" aria-label=""><img src="{{$srcImg}}gemini-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="cancer">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="cancer" aria-label=""><img src="{{$srcImg}}Cancer-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="leo">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="leo" aria-label=""><img src="{{$srcImg}}Leo-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="virgo">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="virgo" aria-label=""><img src="{{$srcImg}}Virgo-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="libra">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="libra" aria-label=""><img src="{{$srcImg}}Libra-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="scorpio">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="scorpio" aria-label=""><img src="{{$srcImg}}Scorpio-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="sagittarius">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="sagittarius" aria-label=""><img src="{{$srcImg}}Sagittarius-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="capricorn">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="capricorn" aria-label=""><img src="{{$srcImg}}Capricorn-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="aquarius">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="aquarius" aria-label=""><img src="{{$srcImg}}Aquarius-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-sign="pisces">
                            <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="pisces" aria-label=""><img src="{{$srcImg}}Pisces-icon.webp" class="w-100" alt="">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- choose sign end -->

            <!-- step2 start -->
            <section class="select_gender gtm-screen-gender d-none" id="step_2">
                <div class="container-fluid">
                    <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">What is your gender?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-4">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/male-icon.png" class="text-center me-3 position-relative mb-2 pt-1 z-index-1" alt="">
                                        <span class=" position-relative z-index-1 Livvic color-c6dee8 fw-bold medium font24">Male</span><br>
                                        <input type="radio" name="gender" value="M" checked data-gtm-value="male">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/female-icon.png" class="me-2 position-relative mb-2 z-index-1 " alt="">
                                        <span class=" position-relative z-index-1 Livvic color-c6dee8 fw-bold medium font24">Woman</span><br>
                                        <input type="radio" name="gender" value="F" data-gtm-value="female">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <span class="error" id="step_2_error"></span>
                                <div class="col-12 pt-50 text-start">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item px-lg-3 mx_sm">
                                            <a href="javascript:void(0);" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_2_prev" aria-label="" onclick="back(1,2);">Back</a>
                                        </li>
                                        <li class="list-inline-item px-lg-2">
                                            <a href="javascript:void(0);" aria-label="" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_2_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- step2 end -->

            <!-- step3 start -->
            <section class="select_gender gtm-screen-birthdate d-none" id="step_3">
                <div class="container-fluid">
                    <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">What is your date of birth?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <select class="form-select born_input_field font24 medium Livvic color-c6dee8 day" aria-label="Default select example " name="day">
                                        <option value="" selected="selected">Day</option>
                                        @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select born_input_field font24 medium Livvic color-c6dee8 month" aria-label="Default select example " name="month">
                                        <option value="" selected="selected">Month</option>
                                        @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select born_input_field font24 medium Livvic color-c6dee8 year" aria-label="Default select example " name="year">
                                        <option value="" selected="selected">Year</option>
                                        @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <span class="error d-none" id="step_3_error">Please indicate the complete date</span>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_3_prev" onclick="back(2,3);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_3_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- step3 end -->

            <!-- step4 start -->
            <section class="select_gender gtm-screen-city d-none" id="step_4">
                <div class="container-fluid">
                    <h1 class="text-white fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">In which city were you born?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <input type="text" placeholder="In which city were you born?" name="city" class="born_input_field font24 medium Livvic text-center color-c6dee8">
                                    <span class="error d-none" id="step_4_error">This will help you to make your fortune telling more accurate.</span>

                                </div>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_4_prev" onclick="back(3,4);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_4_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- step4 end -->

            <!-- step5 start -->
            <section class="select_gender gtm-screen-birthtimeknown d-none" id="step_5">
                <div class="container-fluid">
                    <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Do you know what time you were born?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <ul class="list-inline list-unstyled mb-xxl-5">
                                        <li class="list-inline-item know-birth-time-yes">
                                            <label class="choose_yesno_btn">
                                                <span class="position-relative z-index-1 text-uppercase Livvic color-c6dee8  medium font24">Yes</span><br>
                                                <input type="radio" name="birth_time_know" value="yes" data-gtm-value="yes">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li class="list-inline-item know-birth-time-no">
                                            <label class="choose_yesno_btn">
                                                <span class=" position-relative z-index-1 text-uppercase Livvic color-c6dee8  medium font24">No</span><br>
                                                <input type="radio" name="birth_time_know" value="no" data-gtm-value="no">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 text-center">

                                </div>
                                <div class="col-12 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_5_prev" onclick="back(4,5);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_5_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- step5 end -->

            <!-- step6 start -->
            <section class="select_gender gtm-screen-birthtime d-none" id="step_6">
                <div class="container-fluid">
                    <h1 class="text-white fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Please enter the hours and minutes as accurately as possible</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <select class="form-select born_input_field font24 medium Livvic color-c6dee8 hour" aria-label="Default select example " name="tobhr">
                                        <option value="" selected="selected">Hour</option>
                                        @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-select born_input_field font24 medium Livvic color-c6dee8 min" aria-label="Default select example" name="tobmin">
                                        <option value="" selected="selected">Minute</option>
                                        @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <span class="error" id="step_6_error"></span>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_6_prev" onclick="back(5,6);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_6_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- step6 end -->

            <!-- step7 start -->
            <section class="select_gender gtm-screen-concern d-none" id="step_7">
                <div class="container-fluid">
                    <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">What are your concerns?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  Livvic color-c6dee8  medium font22">Work</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="1" checked data-gtm-value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  Livvic color-c6dee8  medium font22">Finance</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="2" data-gtm-value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class="position-relative z-index-1  Livvic color-c6dee8 medium font22">Love</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="3" data-gtm-value="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class="position-relative z-index-1  Livvic color-c6dee8 medium font22">General</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="4" data-gtm-value="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_7_prev">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_7_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- step7 end -->

            <!-- step8 start -->
            <section class="select_gender gtm-screen-name d-none" id="step_8">
                <div class="container-fluid">
                    <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">What is your name?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-6">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input type="text" placeholder="First name" name="first_name" class="born_input_field font24 medium Livvic color-c6dee8">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Last Name" name="last_name" class="born_input_field font24 medium Livvic color-c6dee8">
                                </div>
                                <span class="error d-none" id="step_8_error">Please enter your name</span>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_8_prev" onclick="back(7,8);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" aria-label="" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_8_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- step8 end -->

            <!-- step9 start -->
            <section class="select_gender gtm-screen-email d-none" id="step_9">
                <div class="container-fluid">
                    <h1 class="text-white fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Where do you want to receive your Free Reading and Gifts?</h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <input type="email" placeholder="E-mail" name="email" class="born_input_field text-center font24 medium Livvic color-c6dee8 input-email gtm-email" required>
                                    <!-- <span class="error" id="step_9_error d-none">Gelieve dit veld in te vullen</span> -->
                                </div>
                                <div class="col-12">
                                    <fieldset class="step_mail__white-box mt-3">
                                        <legend class="legend fw-bold text-white">Free optional gift</legend>
                                        <label class="check_text text-white"><input type="checkbox" name="coreg" value="true">
                                            <b>My friend Ava can help you detect your POTENTIAL for WEALTH and GOOD FORTUNE!
                                                Get her Free Reading Now!</b></label>
                                    </fieldset>
                                </div>
                                <div class="col-12 pt-3 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item me-0 w-100">
                                            <button type="submit" class="gtm-email-continue continue_btn Livvic medium font20  text-decoration-none text-center d-inline-block w-100 continue_btn-border px-lg-2 px-xxl-3  text-EDF57E step_9_next"><i class="fa fa-hand-o-right px-2"></i>
                                                <!-- Verstuur mijn persoonlijke horoscope gratis -->
                                                <b>GET YOUR FREE READING</b>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- step9 end -->

            <!-- step11 pending screen start -->
            <section class="main_banner gtm-screen-pending d-none mb-5 mt-2" id="step_11">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 pe-xxl-5">
                            <h4 class="text-center text-white font18  mb-3 Livvic semibold">Your confidence touches me deeply.</h4>
                            <h3 class="text-center font32 text-white Livvic mb-5">I immediately go to work for you. My answer will reach you in the next few hours.</h3>

                            <div class="bg-text-new1 text-center">
                                <p class=" font18 Livvic fw-normal text-white">P.S. So that your trust in me is deserved, I want you to know that I respect the regulations in terms of confidentiality and access to your personal data. It's all there, in my policy of privacy.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- step10 end -->
            <!-- step10 start -->
            <style>
                .gtm-screen-thankyou li:before {
                    background-color: white;
                    top: 6px;
                }
                .gtm-screen-thankyou ul{
                    margin-left: 15px;
                    list-style-type: none;
                    padding-left: 0rem;
                }
                .gtm-screen-thankyou p{
                    margin-left: 6px;
                }
            </style>
            <section class="main_banner gtm-screen-thankyou d-none mb-5 mt-2" id="step_10">
                @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
            </section>
            <!-- step10 end -->
        </form>

        <!-- Disclaimer start -->
        <div class="container-fluid pb-5 border-bottom-D9D9D9">
            <div class="row mx-0 w-100 pt-5">
                <div class="col-12">
                    <div class="text-center">
                        <h3 class="text-white fw-light Livvic mb-0 font-25 text-center text-uppercase mb-3"><span class="text-white fw-500"><?= print_dynamic_variable('disclaimer_title_en') ?></span></h3>
                        <p class="text-uppercase fw-normal text-white mb-0 font-15 Lato line-height-23">
                            <?= print_dynamic_variable('disclaimer_text_en') ?>
                            <?= print_dynamic_variable('address') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Disclaimer end -->
        <div class="container-fluid pb-5 border-bottom-D9D9D9">
            <div class="row mx-0 w-100 pt-5">
                <div class="col-12">
                    <div class="menu_links text-center">
                        <ul class="list-unstyled list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="https://all-universe.com" aria-label="" class="Lato fw-normal font-16 text-decoration-none text-white">HOME</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://all-universe.com/terms.php" aria-label="" class="Lato fw-normal font-16 text-decoration-none text-white">TERMS OF SERVICE</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://all-universe.com/privacy.php" aria-label="" class="Lato fw-normal font-16 text-decoration-none text-white">PRIVACY POLICY</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://all-universe.com/gdpr.php" aria-label="" class="Lato fw-normal font-16 text-decoration-none text-white">GDPR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://all-universe.com/ethical.php" aria-label="" class="Lato fw-normal font-16 text-decoration-none text-white">ETHICAL RULES</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://all-universe.com/cookie_policy.php" aria-label="" class="Lato fw-normal font-16 text-decoration-none text-white">COOKIE POLICY</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js "></script>
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script type="text/javascript">
        if ($(window).width() <= 991) {
            $('.next_arrow').remove();
            $('#step_1_banner').addClass('d-none');
        }
    </script>
</body>

</html>
