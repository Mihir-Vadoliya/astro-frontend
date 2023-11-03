@php($asset_path = '/landers/landingpages/241971/')
@php($srcImg = "/landers/sets/set25/")
@include('/landers/terms/dynamic/dynamic')

<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Astrology offerpage Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Astro Answers 2020">
    <meta name="keywords" content="Astro Answers 2020">
    <meta name="title" content="Astro Answers 2020">
    <meta name="description" content="Astro Answers 2020">

    <meta property="og:title" content="Astro Answers 2020"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="Astro Answers 2020"/>
    <meta property="og:image" content="{{$asset_path}}assets/images/hero_bg.jpg"/>
    <meta property="og:image:width" content="37"/>
    <meta property="og:image:height" content="37"/>
    <meta property="og:site_name" content="Astro Answers 2020"/>
    <meta property="og:description" content="Astro Answers 2020"/>
    <!-- Astrology offerpage favicon -->
    <link rel="shortcut icon" href="{{$asset_path}}assets/images/astrology-offer-favicon.png"/>

    <!-- Astrology offerpage all CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{$asset_path}}assets/css/stye.css" rel="stylesheet">

    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>

    @if($gtmContainerId)
        @include('google.gtmcontainer')
    @endif

    <!-- notify script -->
    <script> (function (document, window) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://trk-keingent.com/scripts/push/script/57dkplvgw8?url=" + encodeURI(self.location.hostname) + "&alturl=" + encodeURI(self.location.pathname);
            script.onload = function () {
                push_init();
                push_subscribe();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window); </script>

    <title>Asto Answers 2022</title>
    <style>
        .error {
            color: red;
        }

        .error2 {
            color: red;
        }
    </style>
</head>

<body class="main_bg">
<div class="astrology-offerpage-main  position-relative">
    <!-- Astrology offerpage header -->
    <header class="astrology_offerpage_head header pt-2">
        <div class="container">
            <div class="row justify-content-center mx-0 w-100">
                <div class="col-12 text-center main_lg_logo order-1 my-auto">
                    <a href="https://astro-answers-2020.com"><img src="{{$asset_path}}assets/images/astrology-offer-logo.png" class="img-fluid mb-0"></a>
                </div>

            </div>
        </div>
    </header>
    <!-- Astrology offerpage all steps -->
    <form name="g" id="nameForm" class="row justify-content-center main_form" method="post"
          action="{{request()->url()}}/insertlead">
        <input name="uuid" type="hidden" value="{{$uuid}}">
        <input name="design_id" type="hidden" value="{{$design_id}}">
        <input name="placement" type="hidden" value="{{$placement}}">
        <input name="country" type="hidden" value="{{$country}}">
        <input name="language" type="hidden" value="{{$language}}">
        <input name="visit" type="hidden" value="{{$visit_id}}">
        <input name="binom_click_id" type="hidden" value="{{$binom_click_id}}">
        <input name="sign" type="hidden" value="sign">

        <!-- Astrology offerpage step 1 -->
        <section class="gtm-screen-zodiac astrology-offerpage-step-1 step_1_content common_cls_display1" id="step_1">
            <div class="container">
                <h1 class="popipns fw-bold font30 text-center text-uppercase color-3d3b3b mb-3 mb-md-2 pb-0">Insights &
                    clarity through powerful readings</h1>
                <h3 class="popipns fw-bold font22 sky-color  text-center mb-3 mb-md-3 mb-xxl-4 pb-0">Pick Your Sign</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-7 col-xxl-8">
                        <div class="d-flex flex-wrap justify-content-center justify-md-content-between mb-5">
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="aries">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="aries">
                                        <img src="{{$srcImg}}aries.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Aries</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">21/3 - 20/4</span>
                                        <input type="radio" name="astro" value="aries">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="taurus">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="taurus">
                                        <img src="{{$srcImg}}taurus.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Taurus</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">21/4 - 20/5</span>
                                        <input type="radio" name="astro" value="taurus">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                <label class="radio_cus_button" data-sign="gemini">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="gemini">
                                        <img src="{{$srcImg}}gemini.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Gemini</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">21/5 - 20/6</span>
                                        <input type="radio" name="astro" value="gemini">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                <label class="radio_cus_button" data-sign="cancer">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="cancer">
                                        <img src="{{$srcImg}}cancer.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Cancer</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">21/6 - 22/7</span>
                                        <input type="radio" name="astro" value="cancer">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="leo">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="leo">
                                        <img src="{{$srcImg}}leo.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Leo</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">23/7 - 22/8</span>
                                        <input type="radio" name="astro" value="leo">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                <label class="radio_cus_button" data-sign="virgo">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="virgo">
                                        <img src="{{$srcImg}}virgo.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Virgo</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1"> 23/8 - 21/9</span>
                                        <input type="radio" name="astro" value="virgo">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="libra">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="libra">
                                        <img src="{{$srcImg}}libra.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Libra</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">22/9 - 20/10</span>
                                        <input type="radio" name="astro" value="libra">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                <label class="radio_cus_button" data-sign="scorpio">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="scorpio">
                                        <img src="{{$srcImg}}scorpio.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Scorpio</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">21/10 - 20/11</span>
                                        <input type="radio" name="astro" value="scorpio">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                <label class="radio_cus_button" data-sign="sagittarius">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="sagittarius">
                                        <img src="{{$srcImg}}sagittarius.png"
                                             class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Sagittarius</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">21/11 - 21/12</span>
                                        <input type="radio" name="astro" value="sagittarius">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="capricorn">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="capricorn">
                                        <img src="{{$srcImg}}capricorn.png"
                                             class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Capricorn</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">22/12 - 21/1</span>
                                        <input type="radio" name="astro" value="capricorn">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="aquarius">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="aquarius">
                                        <img src="{{$srcImg}}aquarius.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Aquarius</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">22/1 - 18/2</span>
                                        <input type="radio" name="astro" value="aquarius">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                            <div class="mb-3 me-0 me-lg-0 me-xl-0">
                                <label class="radio_cus_button" data-sign="pisces">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="pisces">
                                        <img src="{{$srcImg}}pisces.png" class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center sky-color times fw-bold font26 position-relative z-index-1"><i>Pisces</i></span><br>
                                        <span
                                            class="text-center sky-color times fw-bold font-20 position-relative z-index-1">19/2 - 20/3</span>
                                        <input type="radio" name="astro" value="pisces">
                                        <span class="checkmark"></span>
                                    </a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- new step 2 -->
        <section class="gtm-screen-gender select_gender" id="step_2" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="popipns fw-bold font30 text-center text-uppercase color-3d3b3b text-center mb-4 pb-0">What is
                    your gender?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row">
                            <div class="col-6 text-center">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/images/male-icon.png"
                                         class="position-relative z-index-1 me-1 me-xxl-3">
                                    <span
                                        class=" position-relative z-index-1 montserrat text-white  medium font24">Male</span><br>
                                    <input type="radio" name="gender" class="gtm-gender" checked="" value="M"
                                           data-gtm-value="male">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/images/female-icon.png"
                                         class="position-relative z-index-1 me-1 me-xxl-3">
                                    <span
                                        class=" position-relative z-index-1 montserrat text-white medium font24">Woman</span><br>
                                    <input type="radio" name="gender" class="gtm-gender" value="F"
                                           data-gtm-value="female">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-12 text-center pt-4">
                                <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block"
                                        onclick="back(1,2);">
                                    < Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 3 -->
        <section class="gtm-screen-birthdate select_born_date" id="step_3" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="popipns fw-bold font30 text-center text-uppercase color-3d3b3b mb-4 pb-0">Well! When were you
                    born?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row">
                            <div class="col-4">
                                <select name="day"
                                        class="form-select born_input_field font24 medium montserrat text-black day"
                                        aria-label="Default select example ">
                                    <option value="" selected="selected">Day</option>
                                    @for ($i = 1; $i < 32; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="month"
                                        class="form-select born_input_field font24 medium montserrat text-black month"
                                        aria-label="Default select example ">
                                    <option value="" selected="selected">Month</option>
                                    @for ($i = 1; $i < 13; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="year"
                                        class="form-select born_input_field font24 medium montserrat text-black year"
                                        aria-label="Default select example ">
                                    <option value="" selected="selected">Year</option>
                                    @for ($i = 1940; $i < 2003; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <span class="error" style="display:none;">Please indicate the full date</span>
                            <div class="col-12 ">
                                <div class="text-center">
                                    <p class="sky-color-2 font-16 times pt-3"> This will help make your clairvoyance
                                        more precise. </p>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="button"
                                        class="gtm-birthdate-continue all_continue_btn font-20 text-center text-white d-inline-block">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 4 -->
        <section class="gtm-screen-city select_city" id="step_4" style="display:none;">
            <div class="conatiner">
                <div class="height-50"></div>
                <h3 class="popipns fw-bold font30 text-center text-uppercase color-3d3b3b mb-4 pb-0">In which town/city
                    are you born?</h3>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12 col-xxl-10">
                                <input type="text" name="city" placeholder="Please enter your city"
                                       class="enter_city font24 medium montserrat text-center text-white">
                            </div>
                            <div class="col-12 ">
                                <div class="text-center">
                                    <p class="sky-color-2 font-16 times pt-3"> This will help make your clairvoyance
                                        more precise. </p>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block">Continue
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 5 -->
        <section class="gtm-screen-birthtimeknown you_know_born_time" id="step_5" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="popipns fw-bold font30 text-center text-uppercase color-3d3b3b mb-4 pb-0">Do you know what
                    time you were born?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-xl-10 col-xxl-12">
                        <ul class="list-inline list-unstyled text-center">
                            <li class="list-inline-item know-birth-time-yes">
                                <label class="choose_yesno_btn">
                                    <span
                                        class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Yes</span><br>
                                    <input class="gtm-birthtime" type="radio" name="bitth_time_know" value="yes"
                                           checked="" data-gtm-value="yes">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li class="list-inline-item know-birth-time-no">
                                <label class="choose_yesno_btn">
                                    <span
                                        class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">No</span><br>
                                    <input class="gtm-birthtime" type="radio" name="bitth_time_know" value="no"
                                           data-gtm-value="no">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 ">
                        <div class="text-center">
                            <p class="sky-color-2 font-16 times pt-3"> This will help make your clairvoyance more
                                precise. </p>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 6 -->
        <section class="gtm-screen-birthtime select_hour_minutes" id="step_6" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="popipns fw-bold font30 text-center text-uppercase color-3d3b3b mb-4 pb-0">Please enter the
                    hours and minutes as accurately as possible</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-6">
                        <div class="row justify-content-center py-50">
                            <div class="col-6">
                                <select name="tobhr"
                                        class="form-select born_input_field font24 medium montserrat text-black hour"
                                        aria-label="Default select example">
                                    <option value="" selected="selected">Hour</option>
                                    @for ($i = 0; $i < 24; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="tobmin"
                                        class="form-select born_input_field font24 medium montserrat text-black min"
                                        aria-label="Default select example">
                                    <option value="" selected="selected">Minite</option>
                                    @for ($i = 0; $i < 60; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-12 text-center pt-4">
                                <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block">Continue
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new steps 7 -->
        <section class="gtm-screen-concern select_your_concerns" id="step_7" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="popipns fw-bold font30 text-center text-uppercase color-3d3b3b mb-4 pb-0">What are your
                    concerns?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-6">
                        <div class="row justify-content-center py-50">
                            <div class="col-6 col-md-3  mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Work</span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="1" value="1"
                                           checked="">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3  mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Finance</span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="2"
                                           value="2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Love</span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="3"
                                           value="3">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3  mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">General</span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="4"
                                           value="4">
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
        <section class="gtm-screen-name enter_name_det" id="step_8" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="fw-bold font30 text-center text-uppercase color-3d3b3b mb-4 pb-0">What is your name?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-6">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <input type="text" placeholder="First name" name="first_name"
                                       class="enter_name_det_field font24 medium montserrat text-white">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="Last name" name="last_name"
                                       class="enter_name_det_field font24 medium montserrat text-white">
                            </div>
                            <span class="error2" style="display:none;">Please enter your name</span>
                            <div class="col-12 text-center pt-4">
                                <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block">Continue
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 9 -->
        <section class="gtm-screen-email enter_email_field" id="step_9" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="fw-bold font30 text-center text-uppercase color-3d3b3b mb-4 pb-0">Where do you want to get
                    your personalized clairvoyance?</h3>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-7">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12  col-xxl-11">
                                <input type="email" placeholder="E-mail" name="email" required
                                       class="gtm-email enter_city font24 medium montserrat text-center text-white">
                            </div>
                            <div class="col-12 col-lg-10 col-xxl-11 pt-4 text-center">
                                <fieldset class="step_mail__white-box">
                                    <legend class="legend fw-bold color-3d3b3b">Free optional gift</legend>

                                    <label class="check_text color-3d3b3b"><input type="checkbox" name="coreg"
                                                                                  value="true"
                                                                                  style="    margin-right: 11px;">Connect
                                        with your Guardian Angel through Ava and receive your free angel
                                        reading.</label>
                                </fieldset>
                                <br>
                                <button type="submit"
                                        class="gtm-email-continue all_continue_btn font-20 text-uppercase text-center w-100 text-white d-inline-block">
                                    Get my complete clairvoyance for FREE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 10 -->
        <style>
            .gtm-screen-thankyou li:before {
                background-color: #000;
                top: 9px;
            }
            .gtm-screen-thankyou ul{
                margin-left: 15px;
                list-style-type: none;
                padding-left: 0rem;
            }
            .gtm-screen-thankyou p{
                margin-left: 6px;
            }
            .gtm-screen-thankyou h3, .gtm-screen-thankyou p, .gtm-screen-thankyou li{
                color: #000 !important;
            }
        </style>
        <section class="gtm-screen-thankyou last_step_content" id="step_10" style="display:none;">
            @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
        </section>
        <!-- step 11 - pending -->
        <section class="last_step_content" id="step_11" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-7">
                        <h3 class="times fw-normal font-68 text-center mb-4 pb-0">
                            Please wait a moment, while I am connecting you with your<br/>Guard Angel...
                        </h3>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
    </form>

    <!-- new section reviews start -->
    <section class="add_review pt-4 pt-md-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <p class="text-center font20 color-3d3b3b">Your information is used confidentiality to create
                        personalized clairvoyance.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-6 col-xl-7">
                    <div class="review_sliders">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="review_slide">
                                        <h5 class="per_name text-center times">Olivia</h5>
                                        <p class="text-center per_review_text popipns">Great and insightful reading.
                                            Really spot on and it was exactly what I needed in this rough patch in my
                                            life. I really feel renewed</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="review_slide">
                                        <h5 class="per_name text-center times">Emma</h5>
                                        <p class="text-center per_review_text popipns">Many thanks! I’ve tried
                                            many type of different readings before, but they all just didn’t get me. You
                                            did and showed me the path! Love Emma!</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="review_slide">
                                        <h5 class="per_name text-center times">Charlotte</h5>
                                        <p class="text-center per_review_text popipns">Really did it for me! I
                                            was very sceptical, but a friend of my recommended me as she was
                                            right! She knew all my doubts and problems and how to take them away. Really you’ve changed my life! I can’t thank you enough!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new section reviews end -->
    <div class="row justify-content-center pt-5">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6">
            <h3 class="text-center fw-bold pb-2"><?= print_dynamic_variable('disclaimer_title_en') ?></h3>
            <p class="text-center pb-2">
                <?= print_dynamic_variable('disclaimer_text_en') ?>
                <?= print_dynamic_variable('address') ?>
            </p>
        </div>
    </div>
    <!-- Astrology offerpage footer -->
    <footer class=" footer position-unset">
        <div class=" container">
            <div id="footer">
                <ul class="footer_menu text-center list-inline list-unstyled">
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1  pe-xxl-1">
                        <a href="https://astro-answers-2020.com"
                           class="sky-color-2 text-uppercase text-decoration-none home_modal_open times font-20 fw-bold">Home</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1  pe-xxl-1">
                        <a href="javascript:void(0);"
                           class="sky-color-2 text-uppercase text-decoration-none tos_modal_open times font-20 fw-bold">Terms
                            of service</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                        <a href="javascript:void(0);"
                           class="text-decoration-none text-uppercase cnt_pp_open  sky-color-2 times font-20 fw-bold">Privacy
                            policy</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                        <a href="javascript:void(0);"
                           class="text-decoration-none text-uppercase gdpr_pp_open  sky-color-2 times font-20 fw-bold">GDPR</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1  pe-xxl-1">
                        <a href="https://astro-answers-2020.com/faq.php"
                           class="sky-color-2 text-uppercase text-decoration-none help_pp_open times font-20 fw-bold">FAQ</a>
                    </li>
                </ul>
            </div>
            <div id="step_6_footer" style="display: none;">
                <p class="step_6_footer font-22 arial fw-normal colorfff text-center">Astrovizor is the first page
                    through which the user gets the horoscopes of all zodiac signs, available only to us! By clicking
                    the button, you confirm that you are 18 years old. Activation of Astrovizor, price for customers
                    6,00 BGN including VAT. The service provider is Vassabi Limited, Unit 1603, 16th floor, The L. Plaza
                    367 - 375 Queen's Road Central Sheung Wan, Hong Kong.<br>
                    <a href="tel:+359 24928370" class="colorfff text-decoration-none">Phone: +359 24928370</a><br>
                    <a href="mailto:dpo@astro-answers-2020.com" class="colorfff text-decoration-none">E-mail:
                        dpo@astro-answers-2020.com</a>
                </p>
                <ul class="list-inline list-unstyled pt-4 mb-5 text-center">
                    <li class="d-block d-md-inline-block list-inline-item mb-4 mb-md-0 pe-0 pe-md-2 pe-xxl-3 me-0 me-md-2 me-xxl-3">
                        <a href="javascript:void(0);"
                           class="text-white text-center text-uppercase font-22 text-decoration-none button_one_btn d-inline-block">PRIVACY
                            POLICY </a>
                    </li>
                    <li class="d-block d-md-inline-block list-inline-item mb-4 mb-md-0 pe-0 pe-md-2 pe-xxl-3 me-0 me-md-2 me-xxl-3">
                        <a href="javascript:void(0);"
                           class="text-white text-center text-uppercase font-22 text-decoration-none button_two_btn d-inline-block">ETHICAL
                            RULES </a>
                    </li>
                    <li class="d-block d-md-inline-block list-inline-item mb-4 mb-md-0">
                        <a href="javascript:void(0);"
                           class="text-white text-center text-uppercase font-22 text-decoration-none button_three_btn d-inline-block">GDPR </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>


<!-- terms of services modal -->
<div class="astrology-offerpage-cntpopup modal fade contact_us_popup" id="contact_us1" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0 border-0">
            <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Terms &
                Conditions</h5>
            <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                @include('landers.terms.astroanswers2020.en.terms')
            </div>
        </div>
    </div>
</div>
<!-- privacy policy modal -->
<div class="astrology-offerpage-hlp-pop modal fade contact_us_popup privacy-1" id="help_pp" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0 border-0">
            <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Privacy
                policy</h5>
            <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                @include('landers.terms.astroanswers2020.en.privacy')
            </div>
        </div>
    </div>
</div>
<!-- privacy policy 2 modal -->
<div class="astrology-offerpage-hlp-pop modal fade contact_us_popup privacy-2" id="help_pp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0 border-0">
            <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Privacy policy</h5>
            <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                @include('landers.terms.astroanswers2020.en.privacy-2')
            </div>
        </div>
    </div>
</div>
<!-- GDPR modal -->
<div class="astrology-offerpage-hlp-pop modal fade contact_us_popup" id="gdpr_pp" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0 border-0">
            <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">GDPR</h5>
            <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                @include('landers.terms.astroanswers2020.en.gdpr')
            </div>
        </div>
    </div>
</div>

<!-- Astrology offerpage Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Astrology offerpage custom js -->
<script src="{{$asset_path}}assets/js/slick.js"></script>
<script src="{{$asset_path}}assets/js/functions.js"></script>
<script src="{{$asset_path}}assets/js/custom.js "></script>

</body>

</html>
