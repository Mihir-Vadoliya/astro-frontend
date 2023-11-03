@php($asset_path = '/landers/landingpages/268015/')
@php($srcImg = "/landers/sets/set33/")
@include('/landers/terms/dynamic/dynamic')

    <!doctype html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="All Universe">
    <meta name="title" content="All Universe">
    <meta name="keyword" content="All Universe">
    <meta name="description" content="All Universe">

    <meta property="og:title" content="All Universe"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="all-universe.com"/>
    <meta property="og:image" content=""/>
    <meta property="og:image:width" content="104"/>
    <meta property="og:image:height" content="87"/>
    <meta property="og:site_name" content="All Universe"/>
    <meta property="og:description" content="All Universe"/>

    <link href="{{$asset_path}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{$asset_path}}assets/css/style.css" rel="stylesheet">
    <link rel='shortcut icon' href='{{$asset_path}}assets/images/favicon.png'>
    <title>ASTROFYSICA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Jost:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600;700&family=ZCOOL+XiaoWei&display=swap"
          rel="stylesheet">
    <script src="{{$asset_path}}assets/js/jquery-3.6.3.min.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
    @if($gtmContainerId)
        @include('google.gtmcontainer')
    @endif
</head>

<body class="">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="main_bg_1">
    <header class="header pt-4">
        <div class="container">
            <div class="row">
                <div class="col-2 col-md-2">
                    <div class="pt-3">
                        <a href="https://all-universe.com" class="text-center mx-auto d-table"><img
                                src="{{$asset_path}}assets/images/logo.webp"></a>
                    </div>
                </div>
                <div class="col-10 col-md-10">
                    <div class="text-center">
                        <h1 class="ZCOOL fw-normal text-center font-55 text-white main-title">Get <span
                                class="text-E8E2B1">Clarity, Guidance</span> <span class="text-E8E2B1"> And Peace Of
                                </span>Mind</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="main_banner">
        <form class="container main_form position-relative sign_show" name="g" id="nameForm" method="post"
              action="{{request()->url()}}/insertlead">
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
            <div class="choose_sign_section" id="step_1">
                <div class="row mx-0 w-100 justify-content-center">
                    <div class="col-12 col-md-10 col-lg-10">
                        <div class="row mx-0 w-100 gtm-screen-zodiac">
                            <div class="col-4 col-md-3 col-lg-2" data-sign="aries">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="aries">
                                    <img src="{{$srcImg}}aries-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="aries">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Aries</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="taurus">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="taurus">
                                    <img src="{{$srcImg}}Taurus-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="taurus">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Taurus</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="gemini">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="gemini">
                                    <img src="{{$srcImg}}gemini-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="gemini">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Gemini</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="cancer">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="cancer">
                                    <img src="{{$srcImg}}Cancer-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="cancer">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Cancer</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="leo">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="leo">
                                    <img src="{{$srcImg}}Leo-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="leo">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Leo</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="virgo">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="virgo">
                                    <img src="{{$srcImg}}Virgo-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="virgo">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Virgo</p>
                            </div>

                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="libra">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="libra">
                                    <img src="{{$srcImg}}Libra-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="libra">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Libra</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="scorpio">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="scorpio">
                                    <img src="{{$srcImg}}Scorpio-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="scorpio">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Scorpio</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="sagittarius">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="sagittarius">
                                    <img src="{{$srcImg}}Sagittarius-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="sagittarius">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Sagittarius</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="capricorn">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="capricorn">
                                    <img src="{{$srcImg}}Capricorn-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="capricorn">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Capricorn</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="aquarius">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="aquarius">
                                    <img src="{{$srcImg}}Aquarius-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="aquarius">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Aquarius</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="pisces">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="pisces">
                                    <img src="{{$srcImg}}Pisces-icon.webp" class=""><br>
                                    <input type="radio" name="astro" value="pisces">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Pisces</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="select_gender gtm-screen-gender d-none" id="step_2">
                <div class="container-fluid">
                    <h1 class="text-white fw-light ZCOOL mb-0 main_title text-center mb-5"><span
                            class="text-white fw-500">What is your gender?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/male-icon.png"
                                             class="text-center me-3 position-relative mb-2 pt-1 z-index-1">
                                        <span
                                            class=" position-relative z-index-1 ZCOOL color-c6dee8 fw-bold medium font24">Male</span><br>
                                        <input type="radio" name="gender" value="M" checked data-gtm-value="male">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/female-icon.png"
                                             class="me-2 position-relative mb-2 z-index-1 ">
                                        <span
                                            class=" position-relative z-index-1 ZCOOL color-c6dee8 fw-bold medium font24">Woman</span><br>
                                        <input type="radio" name="gender" value="F" data-gtm-value="female">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <span class="error" id="step_2_error"></span>
                                <div class="col-12 pt-50 text-start">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item px-lg-3 mx_sm">
                                            <a href="javascript:void(0);"
                                               class="bck_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_2_prev"
                                               onclick="back(1,2);">Back</a>
                                        </li>
                                        <li class="list-inline-item px-lg-2">
                                            <a href="javascript:void(0);"
                                               class="continue_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_2_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="select_gender gtm-screen-birthdate d-none" id="step_3">
                <div class="container-fluid">
                    <h1 class="text-black fw-light ZCOOL mb-0 main_title text-center mb-5"><span
                            class="text-white fw-500">What is your date of birth?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <select
                                        class="form-select born_input_field font24 medium ZCOOL color-c6dee8 day"
                                        aria-label="Default select example " name="day">
                                        <option value="" selected="selected">Day</option>
                                        @for ($i = 1; $i < 32; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select
                                        class="form-select born_input_field font24 medium ZCOOL color-c6dee8 month"
                                        aria-label="Default select example " name="month">
                                        <option value="" selected="selected">Month</option>
                                        @for ($i = 1; $i < 13; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select
                                        class="form-select born_input_field font24 medium ZCOOL color-c6dee8 year"
                                        aria-label="Default select example " name="year">
                                        <option value="" selected="selected">Year</option>
                                        @for ($i = 1940; $i < 2003; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <span class="error d-none" id="step_3_error">Please indicate the complete
                                        date</span>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="bck_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_3_prev"
                                               onclick="back(2,3);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="continue_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_3_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="select_gender gtm-screen-city d-none" id="step_4">
                <div class="container-fluid">
                    <h1 class="text-white fw-light ZCOOL mb-0 main_title text-center mb-5"><span
                            class="text-white fw-500">In which city were you born?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <input type="text" placeholder="In which city were you born?" name="city"
                                           class="born_input_field font24 medium ZCOOL text-center color-c6dee8">
                                    <span class="error d-none" id="step_4_error">This will help you to make your
                                            fortune telling more accurate.</span>

                                </div>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="bck_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_4_prev"
                                               onclick="back(3,4);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="continue_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_4_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="select_gender gtm-screen-birthtimeknown d-none" id="step_5">
                <div class="container-fluid">
                    <h1 class="text-black fw-light ZCOOL mb-0 main_title text-center mb-5"><span
                            class="text-white fw-500">Do you know what time you were born?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <ul class="list-inline list-unstyled mb-xxl-5">
                                        <li class="list-inline-item know-birth-time-yes">
                                            <label class="choose_yesno_btn">
                                                    <span
                                                        class="position-relative z-index-1 text-uppercase ZCOOL color-c6dee8  medium font24">Yes</span><br>
                                                <input type="radio" name="birth_time_know" value="yes"
                                                       data-gtm-value="yes">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li class="list-inline-item know-birth-time-no">
                                            <label class="choose_yesno_btn">
                                                    <span
                                                        class=" position-relative z-index-1 text-uppercase ZCOOL color-c6dee8  medium font24">No</span><br>
                                                <input type="radio" name="birth_time_know" value="no"
                                                       data-gtm-value="no">
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
                                            <a href="javascript:void(0);"
                                               class="bck_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_5_prev"
                                               onclick="back(4,5);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="continue_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_5_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="select_gender gtm-screen-birthtime d-none" id="step_6">
                <div class="container-fluid">
                    <h1 class="text-black fw-light ZCOOL mb-0 main_title text-center mb-5"><span
                            class="text-white fw-500">Please enter the hours and minutes as accurately as
                                possible</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <select
                                        class="form-select born_input_field font24 medium ZCOOL color-c6dee8 hour"
                                        aria-label="Default select example " name="tobhr">
                                        <option value="" selected="selected">Hour</option>
                                        @for ($i = 0; $i < 24; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select
                                        class="form-select born_input_field font24 medium ZCOOL color-c6dee8 min"
                                        aria-label="Default select example" name="tobmin">
                                        <option value="" selected="selected">Minute</option>
                                        @for ($i = 0; $i < 60; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <span class="error" id="step_6_error"></span>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="bck_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_6_prev"
                                               onclick="back(5,6);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="continue_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_6_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="select_gender gtm-screen-concern d-none" id="step_7">
                <div class="container-fluid">
                    <h1 class="text-white fw-light ZCOOL mb-0 main_title text-center mb-5"><span
                            class="text-white fw-500">What are your concerns?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                            <span
                                                class=" position-relative z-index-1  ZCOOL color-c6dee8  medium font22">Work</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="1" checked
                                               data-gtm-value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                            <span
                                                class=" position-relative z-index-1  ZCOOL color-c6dee8  medium font22">Finance</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="2"
                                               data-gtm-value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                            <span
                                                class="position-relative z-index-1  ZCOOL color-c6dee8 medium font22">Love</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="3"
                                               data-gtm-value="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                            <span
                                                class="position-relative z-index-1  ZCOOL color-c6dee8 medium font22">General</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="4"
                                               data-gtm-value="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="bck_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_7_prev">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="continue_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_7_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="select_gender gtm-screen-name d-none" id="step_8">
                <div class="container-fluid">
                    <h1 class="text-black fw-light ZCOOL mb-0 main_title text-center mb-5"><span
                            class="text-white fw-500">What is your name?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-6">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input type="text" placeholder="First name" name="first_name"
                                           class="born_input_field font24 medium ZCOOL color-c6dee8">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Last Name" name="last_name"
                                           class="born_input_field font24 medium ZCOOL color-c6dee8">
                                </div>
                                <span class="error d-none" id="step_8_error">Please enter your name</span>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="bck_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_8_prev"
                                               onclick="back(7,8);">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"
                                               class="continue_btn ZCOOL medium font18 text-decoration-none text-center d-inline-block text-white step_8_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="select_gender gtm-screen-email d-none" id="step_9">
                <div class="container-fluid">
                    <h1 class="text-white fw-light ZCOOL mb-0 main_title text-center mb-5"><span
                            class="text-white fw-500">Where do you want to receive your Free Reading and
                                Gifts?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <input type="email" placeholder="E-mail" name="email"
                                           class="born_input_field text-center font24 medium ZCOOL color-c6dee8 input-email gtm-email"
                                           required>
                                    <!-- <span class="error" id="step_9_error d-none">Gelieve dit veld in te vullen</span> -->
                                </div>
                                <div class="col-12 pt-2 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item me-0 w-100">
                                            <button type="submit"
                                                    class="gtm-email-continue continue_btn ZCOOL medium font20  text-decoration-none text-center d-inline-block w-100 px-lg-2 px-xxl-3 text-E8E2B1 step_9_next continue_btn-border">
                                                <i
                                                    class="fa fa-hand-o-right px-2"></i>
                                                <b>GET YOUR FREE READING</b>
                                            </button>
                                            <style>
                                                .special-gift{
                                                    text-align: center;
                                                    color: #fff;
                                                    padding-top: 20px;
                                                }
                                                .special-gift h3{
                                                    font-weight: bold;
                                                }
                                                .special-gift p{
                                                    font-size: 15px;
                                                    padding-top: 10px;
                                                }
                                            </style>
                                            <div class="special-gift">
                                                <h3 class="fw-bold ZCOOL">
                                                    Special Gift for you
                                                </h3>
                                                <p class="ZCOOL">
                                                    By signing up, you will receive the fresh daily horoscope news in my inbox from AskAstrology, and the most relevant esoteric offers from their experts.
                                                </p>    
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main_banner gtm-screen-pending d-none mb-5 mt-5" id="step_11">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 pe-xxl-5">
                            <h4 class="text-center text-white font18  mb-3 ZCOOL semibold">Your confidence touches
                                me deeply.</h4>
                            <h3 class="text-center font32 text-white ZCOOL  mb-5">I immediately go to work for you.
                                My answer will reach you in the next few hours.</h3>
                            <div class="bg-text-new1 text-center">
                                <p class=" font18 ZCOOL fw-normal text-white">P.S. So that your trust in me is
                                    deserved, I want you to know that I respect the regulations in terms of
                                    confidentiality and access to your personal data. It's all there, in my policy
                                    of privacy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
            <div class="main_banner gtm-screen-thankyou mb-5 mt-5 d-none" id="step_10">
                @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
            </div>
        </form>
    </section>

</div>


<section class="review_slider">
    <div class="container">
        <div class="review_slider_slide">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators m-0">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12 col-md-10 col-lg-6 col-xxl-4 px-0">
                                <div class="row mx-0 w-100">
                                    <div class="col-12 col-md-12 col-lg-12 px-0 my-auto">
                                        <div class="slider_cnt text-center">
                                            <h4 class="text-white jost fw-500 font-16 mb-4 ZCOOL">Milana</h4>
                                            <p class="text-white fw-500 font-18 jost line-height-30 mb-4 ZCOOL">
                                                Thank you so much for my reading, it really opened my eyes I didn’t
                                                expect it to be so clear!</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12 px-0">
                                        <div class="slider_persone text-center">
                                            <img src="{{$asset_path}}assets/images/women.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12 col-md-10 col-lg-6 col-xxl-4 px-0">
                                <div class="row mx-0 w-100">
                                    <div class="col-12 col-md-12 col-lg-12 px-0 my-auto">
                                        <div class="slider_cnt text-center">
                                            <h4 class="text-white jost fw-500 font-16 mb-4 ZCOOL">Jennifer</h4>
                                            <p class="text-white fw-500 font-18 jost line-height-30 mb-4 ZCOOL">I
                                                just wanted to say thank you, I only asked for information about my
                                                love life but you gave me so much more that everything just became
                                                much more clear.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12 px-0">
                                        <div class="slider_persone text-center">
                                            <img src="{{$asset_path}}assets/images/women2.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12 col-md-10 col-lg-6 col-xxl-4 px-0">
                                <div class="row mx-0 w-100">
                                    <div class="col-12 col-md-12 col-lg-12 px-0 my-auto">
                                        <div class="slider_cnt text-center">
                                            <h4 class="text-white jost fw-500 font-16 mb-4 ZCOOL">Christina</h4>
                                            <p class="text-white fw-500 font-18 jost line-height-30 mb-4 ZCOOL">
                                                Thank you, You have made a new person out of me, thank you very much
                                                again for everything!</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12 px-0">
                                        <div class="slider_persone text-center">
                                            <img src="{{$asset_path}}assets/images/women3.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="disclaimer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="dis_title ZCOOL text-E8E2B1">
                                <?= print_dynamic_variable('disclaimer_title_en') ?>
                            </h3>
                            <p class="dis_text fw-normal ZCOOL pt-2 mb-0">
                                <?= print_dynamic_variable('disclaimer_text_en') ?>
                                <?= print_dynamic_variable('address') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="text-center">
            <ul class="list-unstyled list-inline footer_link mb-0">
                <li class="list-inline-item">
                    <a href="https://all-universe.com" class="text-uppercase">Home</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://all-universe.com/terms.php">TERMS OF SERVICE</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://all-universe.com/privacy.php">PRIVACY POLICY</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://all-universe.com/gdpr.php">GDPR</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://all-universe.com/ethical.php">ETHICAL RULES</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://all-universe.com/cookie_policy.php">COOKIE POLICY</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
<!-- Astrology offerpage custom js -->
<script src="{{$asset_path}}assets/js/slick.js"></script>
<script src="{{$asset_path}}assets/js/functions.js"></script>
<script src="{{$asset_path}}assets/js/custom.js "></script>

</body>

</html>