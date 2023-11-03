@php($asset_path = '/landers/landingpages/231944/')
@php($srcImg = "/landers/sets/set29/")
@include('/landers/terms/dynamic/dynamic')

<!doctype html>
<html lang="en">

<head>
    <!--  Astrology offerpage Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Abstract Astro">
    <meta name="keywords" content="Abstract Astro">
    <meta name="title" content="Abstract Astro">
    <meta name="description" content="Abstract Astro">

    <meta property="og:title" content="Abstract Astro" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="Abstract Astro" />
    <meta property="og:image" content="assets/images/hero_bg.jpg" />
    <meta property="og:image:width" content="37" />
    <meta property="og:image:height" content="37" />
    <meta property="og:site_name" content="Abstract Astro" />
    <meta property="og:description" content="Abstract Astro" />
    <!-- Astrology offerpage favicon -->
    <link rel="shortcut icon" href="{{$asset_path}}assets/images/astrology-offer-favicon.png" />

    <!-- Astrology offerpage all CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{$asset_path}}assets/css/stye.css" rel="stylesheet">
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- <script src="{{ asset('assets') }}/js/lander.js" type="module"></script> -->
    <!-- Astrology offerpage title -->
    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif
    @include('scripts.pushnamisubs.astro_abstract_astro')

    <style>
        .error {
            color: red;
        }

        .error2 {
            color: red;
        }
    </style>
</head>
<title>Free Horoscope</title>

<body class="main_bg">

    <div class="astrology-offerpage-main  position-relative">
        <!-- Astrology offerpage header -->
        <header class="astrology_offerpage_head header pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="https://abstract-astro.com"><img src="{{$asset_path}}assets/images/astrology-offer-logo.png" class="img-fluid mb-0"></a>
                    </div>
                </div>
            </div>
        </header>
        <section class="aleart_section">
            <h1 class="times fw-bold font-100 text-center text-white pb-1 pt-1">Free Personal Horoscope 2023</h1>
        </section>
        <!-- Astrology offerpage all steps -->
        <form name="g" id="nameForm" class="main_form" action="javascript:void(0);">
            @csrf
            <input name="uuid" type="hidden" value="{{$uuid}}">
            {{--<input name="design_id" type="hidden" value="{{$design_id}}">--}}
            <input name="country" type="hidden" value="{{$country}}">
            <input name="language" type="hidden" value="{{$language}}">
            <input name="visit" type="hidden" value="{{$visit_id}}">
            <input name="binom_click_id" type="hidden" value="{{$binom_click_id}}">
            <input name="queryString" type="hidden" value="{{$querystring}}">
            <input name="googleClientId" type="hidden" value="">
            <input name="sign" type="hidden" value="sign">
            <input name="bClickId" type="hidden" value="{{$binom_click_id}}">

            <!-- Astrology offerpage step 1 -->
            <section class="gtm-screen-zodiac astrology-offerpage-step-1 step_1_content common_cls_display1" id="step_1">
                <div class="container">
                    <p class="text-white font-16 times pt-3 text-center fw-bold">What do you wish most for 2023? Money, Luck or Love </p>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-7">
                            <div class="d-flex flex-wrap justify-content-center justify-md-content-between mb-5">
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="aries">
                                        <img src="{{$srcImg}}astro-img1.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Aries</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/3 - 20/4</span>
                                        <input type="radio" name="astro" value="aries">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="taurus">
                                        <img src="{{$srcImg}}astro-img2.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Taurus</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/4 - 20/5</span>
                                        <input type="radio" name="astro" value="taurus">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button" data-sign="gemini">
                                        <img src="{{$srcImg}}astro-img3.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Gemini</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/5 - 20/6</span>
                                        <input type="radio" name="astro" value="gemini">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                    <label class="radio_cus_button" data-sign="cancer">
                                        <img src="{{$srcImg}}astro-img4.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Cancer</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/6 - 22/7</span>
                                        <input type="radio" name="astro" value="crab">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="leo">
                                        <img src="{{$srcImg}}astro-img5.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Leo</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">23/7 - 22/8</span>
                                        <input type="radio" name="astro" value="leo">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button" data-sign="virgo">
                                        <img src="{{$srcImg}}astro-img6.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Virgo</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"> 23/8 - 21/9</span>
                                        <input type="radio" name="astro" value="virgo">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="libra">
                                        <img src="{{$srcImg}}astro-img7.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Libra</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">22/9 - 20/10</span>
                                        <input type="radio" name="astro" value="libra">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                    <label class="radio_cus_button" data-sign="scorpio">
                                        <img src="{{$srcImg}}astro-img8.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Scorpio</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/10 - 20/11</span>
                                        <input type="radio" name="astro" value="scorpion">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button" data-sign="sagittarius">
                                        <img src="{{$srcImg}}astro-img9.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Sagittarius</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/11 - 21/12</span>
                                        <input type="radio" name="astro" value="sagittarius">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="capricorn">
                                        <img src="{{$srcImg}}astro-img10.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Capricorn</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">22/12 - 21/1</span>
                                        <input type="radio" name="astro" value="capricorn">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="aquarius">
                                        <img src="{{$srcImg}}astro-img11.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Aquarius</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">22/1 - 18/2</span>
                                        <input type="radio" name="astro" value="aquarius">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-0">
                                    <label class="radio_cus_button" data-sign="pisces">
                                        <img src="{{$srcImg}}astro-img12.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>Pisces</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">19/2 - 20/3</span>
                                        <input type="radio" name="astro" value="fish">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new step 2 -->
            <section class="gtm-screen-gender select_gender mt-2" id="step_2" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">What is your gender?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/male-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                        <span class=" position-relative z-index-1 montserrat text-white  medium font24">Male</span><br>
                                        <input type="radio" name="gender" checked="" value="M">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/female-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                        <span class=" position-relative z-index-1 montserrat text-white medium font24">Female</span><br>
                                        <input type="radio" name="gender" value="F">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block" onclick="back(1,2);">
                                        < Back</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 3 -->
            <section class="gtm-screen-birthdate select_born_date mt-2" id="step_3" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">What is your date of birth?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row">
                                <div class="col-4">
                                    <select name="day" class="form-select born_input_field font24 medium montserrat text-black day" aria-label="Default select example ">
                                        <option value="" selected="selected">Day</option>
                                        @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select name="month" class="form-select born_input_field font24 medium montserrat text-black month" aria-label="Default select example ">
                                        <option value="" selected="selected">Month</option>
                                        @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select name="year" class="form-select born_input_field font24 medium montserrat text-black year" aria-label="Default select example ">
                                        <option value="" selected="selected">Year</option>
                                        @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <span class="error" style="display:none;">Please indicate the complete date</span>
                                <div class="col-12 ">
                                    <div class="text-center">
                                        <p class="text-white font-16 times pt-3">This will help you to make your fortune telling more accurate.</p>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 4 -->
            <section class="gtm-screen-city select_city mt-2" id="step_4" style="display:none;">
                <div class="conatiner">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">In which city were you born?</h3>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row justify-content-center mx-0 w-100">
                                <div class="col-12 col-xxl-10">
                                    <input type="text" name="city" placeholder="In which city were you born?" class="enter_city font24 medium montserrat text-center text-white">
                                </div>
                                <div class="col-12 ">
                                    <div class="text-center">
                                        <p class="text-white font-16 times pt-3">This will help you to make your fortune telling more accurate.</p>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 5 -->
            <section class="gtm-screen-birthtimeknown you_know_born_time mt-2" id="step_5" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">Do you know what time you were born?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-xl-10 col-xxl-6">
                            <ul class="list-inline list-unstyled text-center">
                                <li class="list-inline-item know-birth-time-yes">
                                    <label class="choose_yesno_btn">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Yes</span><br>
                                        <input type="radio" name="bitth_time_know" value="yes" checked="" class="gtm-birthtime" data-gtm-value="yes">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item know-birth-time-no">
                                    <label class="choose_yesno_btn">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">No</span><br>
                                        <input class="gtm-birthtime" type="radio" name="bitth_time_know" value="no" data-gtm-value="no">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 ">
                            <div class="text-center">
                                <p class="text-white font-16 times pt-3">This will help you to make your fortune telling more accurate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 6 -->
            <section class="gtm-screen-birthtime select_hour_minutes mt-2" id="step_6" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">Please enter the hours and minutes as accurately as possible</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center py-50">
                                <div class="col-6">
                                    <select name="tobhr" class="form-select born_input_field font24 medium montserrat text-black hour" aria-label="Default select example">
                                        <option value="" selected="selected">Hour</option>
                                        @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select name="tobmin" class="form-select born_input_field font24 medium montserrat text-black min" aria-label="Default select example">
                                        <option value="" selected="selected">Minute</option>
                                        @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new steps 7 -->
            <section class="gtm-screen-concern select_your_concerns mt-2" id="step_7" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">What are your concerns?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center py-50">
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Work</span><br>
                                        <input type="radio" name="concerns" value="1" checked="" class="gtm-concern" data-gtm-value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Finance</span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="2" value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Love</span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="3" value="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">General</span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="4" value="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new steps 8 -->
            <section class="gtm-screen-nam enter_name_det mt-2" id="step_8" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">What is your name?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input type="text" placeholder="First name" name="first_name" class="enter_name_det_field font24 medium montserrat text-white">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Last Name" name="last_name" class="enter_name_det_field font24 medium montserrat text-white">
                                </div>
                                <span class="error2" style="display:none;">Please enter your name</span>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">CONTINUE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 9 -->
            <section class="gtm-screen-email enter_email_field mt-2" id="step_9" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">Where do you want to receive your Free Reading and Gifts?</h3>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-7">
                            <div class="row justify-content-center mx-0 w-100">
                                <div class="col-12  col-xxl-11">
                                    <input type="email" placeholder="Email" name="email" required class="gtm-email enter_city font24 medium montserrat text-center text-white">
                                </div>
                                <span class="d-none email_error text-center" style="color:red;">Please enter valid email</span>
                                <div class="col-12 col-lg-10 col-xxl-11 pt-4 text-center">
                                    <button type="button" class="all_continue_btn font-20 text-uppercase text-center w-100 text-white d-inline-block continue_btn-border email_btn"><i class="fa fa-hand-o-right px-2"></i><b>GET YOUR FREE READING</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>

            <div class="gtm-screen-pending step__10 text-center mt-2" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-7">
                            <h6 class="fw-normal  text-white text-center mb-0 font-18 pb-0">Your confidence touches me
                                deeply.</h6>
                            <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">I immediately go to
                                work for you. My answer will reach you in the next few hours.</h3>

                            <p class="font-16 fw-normal text-white mb-0 text-center"><b>Your devoted friend,</b></p>
                            <p class="font-16 fw-normal text-white text-center">Padre</p>
                            <p class="font-16 fw-normal text-white text-center">P.S. So that your trust in me is
                                deserved, I want you to know that I respect the regulations in terms of
                                confidentiality and access to your personal data. It's all there, in my policy of
                                privacy.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- new step 10 -->
    <style>
        .gtm-screen-thankyou li:before {
            background-color: white;
            top: 6px;
        }

        .gtm-screen-thankyou ul {
            margin-left: 15px;
            list-style-type: none;
            padding-left: 0rem;
        }

        .gtm-screen-thankyou p {
            margin-left: 6px;
        }
    </style>
    <section class="gtm-screen-thankyou last_step_content mt-2" id="step_11" style="display:none;">
        @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
    </section>
    <section>
        <div class="container" style="margin-top: 300px;">
            <div class="height-50"></div>
            <div class="row justify-content-center mx-0 w-100">
                <div class="col-12 col-md-6 col-xxl-7">
                    <h2 class="text-center text-white times"><?= print_dynamic_variable('disclaimer_title_en') ?></h2>
                    <p class="text-center text-white times">
                        <?= print_dynamic_variable('disclaimer_text_en') ?>
                        <?= print_dynamic_variable('address') ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    </form>
    <!-- Astrology offerpage footer -->
    <footer class=" footer position-unset">
        <div class=" container">
            <div id="footer">
                <ul class="footer_menu text-center list-inline list-unstyled">
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1  pe-xxl-1">
                        <a href="javascript:void(0);" class="text-white text-uppercase text-decoration-none tos_modal_open times font-20">Terms and conditions</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                        <a href="javascript:void(0);" class="text-decoration-none text-uppercase privacy_pp_open  text-white times font-20">PRIVACY POLICY</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                        <a href="https://abstract-astro.com/contact.html" class="text-decoration-none text-uppercase  text-white times font-20">Contact</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                        <a href="javascript:void(0);" class="text-decoration-none text-uppercase help_pp_open text-white times font-20">ETHICS RULES</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                        <a href="javascript:void(0);" class="text-decoration-none text-uppercase terms_pp_open  text-white times font-20">GDPR</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0);" class="text-decoration-none text-uppercase cookie_policy_btn   text-white times font-20">
                            Cookie Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    </div>

    <!-- terms of services modal -->
    <div class="astrology-offerpage-cntpopup modal fade contact_us_popup" id="contact_us1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Terms and conditions of use</h5>
                <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <p class="montserrat  fw-light mb-0 text-black font-16 line-height-24 pt-0">
                        @include('/landers/terms/abstract-astro/en/terms')
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- privacy policy modal -->
    <div class="astrology-offerpage-hlp-pop modal fade contact_us_popup privacy-1" id="privacy_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Privacy Policy</h5>
                <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <p class="montserrat fw-light m-0 p-0  text-black font-16 line-height-24">
                        @include('/landers/terms/abstract-astro/en/privacy')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- privacy policy-2 modal -->
    <div class="astrology-offerpage-hlp-pop modal fade contact_us_popup privacy-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Privacy Policy</h5>
                <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <p class="montserrat fw-light m-0 p-0  text-black font-16 line-height-24">
                        @include('/landers/terms/abstract-astro/en/privacy-2')
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- rules modal -->
    <div class="astrology-offerpage-tc-popup modal fade contact_us_popup" id="terms_pp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">ETHICS RULES
                </h5>
                <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <p class="montserrat fw-light mb-0 p-0 text-black font-16 line-height-24">
                        @include('/landers/terms/abstract-astro/en/ethical')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- gdpr modal -->
    <div class="astrology-offerpage-tc-popup modal fade contact_us_popup" id="gdpr_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">GDPR</h5>
                <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">

                    <p class="montserrat fw-light mb-0 p-0 text-black font-16 line-height-24">
                        @include('/landers/terms/abstract-astro/en/gdpr')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- cookie policy modal -->
    <div class="astrology-offerpage-tc-popup modal fade contact_us_popup" id="cookie_policy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Cookies Policy</h5>
                <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <p class="montserrat fw-light mb-0 p-0 text-black font-16 line-height-24">
                        @include('/landers/terms/abstract-astro/en/cookie-policy')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Social icon Model  -->

    <!-- Social icon Model  -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Astrology offerpage Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Astrology offerpage custom js -->

    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js "></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.close').on('click', function() {
                $('#social_model').modal('hide');
            });
            $('.privacy_pp_open').on('click', function() {
                $('.privacy-1').modal('show');
            });


        });
    </script>
</body>

</html>
