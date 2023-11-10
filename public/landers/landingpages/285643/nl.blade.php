@php($asset_path = '/landers/landingpages/285643/')
@php($srcImg = "/landers/sets/set31/")
@include('/landers/terms/dynamic/dynamic')
<!DOCTYPE html>
<html lang="nl">

<head>

    <!-- required meta tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="function-tool">
    <meta name="title" content="function-tool">
    <meta name="keyword" content="function-tool">
    <meta name="description" content="function-tool">

    <meta property="og:title" content="function-tool" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="function-tool.com" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="104" />
    <meta property="og:image:height" content="87" />
    <meta property="og:site_name" content="function-tool" />
    <meta property="og:description" content="function-tool" />


    <!-- favicon -->
    <link rel='shortcut icon' href='{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/favicon.png'>

    <!-- Astrology offerpage all CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Livvic:wght@300;400;700&display=swap" rel="stylesheet">


    <!-- CSS Dependencies -->
    <link href="{{$asset_path}}assets/uicommon/css/libs/bootstrap.min.css" rel="stylesheet">
    <link href="{{$asset_path}}assets/uicommon/css/libs/jquery/plugins/jdealcards/5.3.0/jDealCards.min.css" rel="stylesheet" type="text/css" />
    <link href="{{$asset_path}}assets/uicommon/landing/chris/message_video111/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif

    <!-- Facebook Pixel Code -->
    <!-- End Facebook Pixel Code -->

    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
    <title>Function Tool | KIES UW STERRENBEELD</title>
    <style>
        .error {
            color: red;
        }

        .error2 {
            color: red;
        }
    </style>

    <!--  pushnami script --->
    <link rel="manifest" href="manifest.json">
    <script type="text/javascript">
        (function(document, window) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://api.pushnami.com/scripts/v1/pushnami-adv/628e169b792d285d2a28d0a4";
            script.onload = function() {
                Pushnami
                    .update()
                    .prompt();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window);
    </script>

</head>

<body class="background my_new_bg main_bg">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager -->

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
        <!-- header -->
        <section class="header py-3">
            <div class="container">
                <div class="row header_custom_class">
                    <div class="col-6 col-sm-12 col-md-2 my-auto order-0 order-md-0 ">
                        <div class="text-start text-md-start">
                            <a href="https://lp.all-universe.com" class="text-decoration-none">
                                <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/logo.png" class="for_responsive_img">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 my-auto order-2 order-md-1">
                        <div class="text-center pt-3 pt-md-0">
                            <!-- <p class="fw-bold mb-0 text-white font-38">Get Your Personal FREE 2023 HOROSCOPE</p> -->
                            <h1 class="text-black  mt-40 Livvic ">Uw persoonlijke tarot lezing volledig gratis</h1>
                        </div>
                    </div>
                    <div class="col-6 col-sm-12 col-md-2 my-auto order-1 order-md-2">
                        <div class="text-center text-md-end">
                            <div class="text-end">
                                <a href="https://function-tool.com" class="atsro_btn text-black text-decoration-none">ASTRO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Steps -->


        <!---step-1-card-div---->
        <div class="main_content">
            <div class="container">
                <div id="main_section" class="card_div">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-md-8 col-lg-6  mt15">
                            <div class="row">
                                <h3 class="ribbon">
                                    <strong id="header_pick_step" class="step-text ribbon-content Livvic  " data-content="Kies 3 kaarten"></strong>
                                </h3>
                            </div>

                        </div>

                        <div id="card-holder" class="col-xs-12 col-sm-7  mt-4" style="position: static;"></div>

                    </div>
                    <div class="text-center d-none">
                        <a href="javascript:void(0);" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_1_next">Ga
                            door</a>
                    </div>

                </div>
            </div>
        </div>


        <!-- step2 start -->
        <section class="select_gender gtm-screen-gender d-none" id="step_2">
            <div class="container-fluid">
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center text-uppercase mb-5"><span class="text-black fw-500">Wat is uw geslacht?</span></h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-4">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/male-icon.png" class="text-center me-3 position-relative mb-2 pt-1 z-index-1">
                                    <span class=" position-relative z-index-1 Livvic color-c6dee8 fw-bold medium font24">Man</span><br>
                                    <input type="radio" name="gender" value="M" checked data-gtm-value="male">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/female-icon.png" class="me-2 position-relative mb-2 z-index-1 ">
                                    <span class=" position-relative z-index-1 Livvic color-c6dee8 fw-bold medium font24">Vrouw</span><br>
                                    <input type="radio" name="gender" value="F" data-gtm-value="female">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <span class="error" id="step_2_error"></span>
                            <div class="col-12 pt-50 text-start-step-2">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item px-lg-3">
                                        <a href="javascript:void(0);" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_2_prev" onclick="back(1,2);">Terug</a>
                                    </li>
                                    <li class="list-inline-item px-lg-2">
                                        <a href="javascript:void(0);" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_2_next">Ga
                                            door</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center text-uppercase mb-5"><span class="text-black fw-500">Wat is je geboortedatum?</span></h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 day" aria-label="Default select example " name="day">
                                    <option value="" selected="selected">Dag</option>
                                    @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 month" aria-label="Default select example " name="month">
                                    <option value="" selected="selected">Maand</option>
                                    @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 year" aria-label="Default select example " name="year">
                                    <option value="" selected="selected">Jaar</option>
                                    @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <span class="error d-none" id="step_3_error">Gelieve de volledige datum te vermelden</span>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_3_prev" onclick="back(2,3);">Terug</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_3_next">Ga
                                            door</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center text-uppercase mb-5"><span class="text-black fw-500">In welke stad bent u geboren?</span></h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <input type="text" placeholder="Voer uw stad in" name="city" class="born_input_field font24 medium Livvic text-center color-c6dee8">
                                <span class="error d-none" id="step_4_error">Gelieve dit veld in te vullen</span>

                            </div>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_4_prev" onclick="back(3,4);">Terug</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_4_next">Ga
                                            door</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center text-uppercase mb-5"><span class="text-black fw-500">Weet je hoe laat je geboren bent?</span></h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <ul class="list-inline list-unstyled mb-xxl-5">
                                    <li class="list-inline-item know-birth-time-yes">
                                        <label class="choose_yesno_btn">
                                            <span class="position-relative z-index-1 text-uppercase Livvic color-c6dee8  medium font24">Ja</span><br>
                                            <input type="radio" name="birth_time_know" value="yes" data-gtm-value="yes">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li class="list-inline-item know-birth-time-no">
                                        <label class="choose_yesno_btn">
                                            <span class=" position-relative z-index-1 text-uppercase Livvic color-c6dee8  medium font24">NEE</span><br>
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
                                        <a href="javascript:void(0);" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_5_prev" onclick="back(4,5);">Terug</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_5_next">Ga
                                            door</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center text-uppercase mb-5"><span class="text-black fw-500">Voer het tijdstip<br>zo nauwkeurig mogelijk</span></h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 hour" aria-label="Default select example " name="tobhr">
                                    <option value="" selected="selected">Uur</option>
                                    @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 min" aria-label="Default select example" name="tobmin">
                                    <option value="" selected="selected">Min</option>
                                    @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <span class="error" id="step_6_error"></span>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_6_prev" onclick="back(5,6);">Terug</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_6_next">Ga
                                            door</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center text-uppercase mb-5"><span class="text-black fw-500">Wat zijn je zorgen?</span></h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  Livvic color-c6dee8  medium font22">Werk</span><br>
                                    <input class="gtm-concern" type="radio" name="concerns" value="1" checked data-gtm-value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  Livvic color-c6dee8  medium font22">Financiën</span><br>
                                    <input class="gtm-concern" type="radio" name="concerns" value="2" data-gtm-value="2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span class="position-relative z-index-1  Livvic color-c6dee8 medium font22">Liefde</span><br>
                                    <input class="gtm-concern" type="radio" name="concerns" value="3" data-gtm-value="3">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span class="position-relative z-index-1  Livvic color-c6dee8 medium font22">Algemeen</span><br>
                                    <input class="gtm-concern" type="radio" name="concerns" value="4" data-gtm-value="4">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_7_prev">Terug</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_7_next">Ga
                                            door</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center text-uppercase mb-5"><span class="text-black fw-500">Hoe heet je?</span></h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-6">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <input type="text" placeholder="Voornaam" name="first_name" class="born_input_field font24 medium Livvic color-c6dee8">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="Achternaam" name="last_name" class="born_input_field font24 medium Livvic color-c6dee8">
                            </div>
                            <span class="error d-none" id="step_8_error">Gelieve dit veld in te vullen</span>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_8_prev" onclick="back(7,8);">Terug</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-black step_8_next">Ga
                                            door</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center text-uppercase mb-5"><span class="text-black fw-500">Waar wil je jouw persoonlijke<br>tarot lezing ontvangen?</span></h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <input type="email" placeholder="E-mail" name="email" class="born_input_field text-center font24 medium Livvic color-c6dee8 input-email gtm-email" required="required">
                                <!-- <span class="error" id="step_9_error d-none">Gelieve dit veld in te vullen</span> -->
                            </div>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item me-0 w-100">
                                        <button type="submit" class="gtm-email-continue continue_btn Livvic medium font20  text-decoration-none text-center d-inline-block w-100 continue_btn-border px-lg-2 px-xxl-3  text-black step_9_next">
                                            <i class="fa fa-hand-o-right px-2"></i>
                                            Verstuur mijn persoonlijke tarot lezing gratis
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
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 pe-xxl-5 text-center">
                        @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')

                    </div>
                </div>
            </div>
        </section>
        <!-- step10 end -->

        <!-- step10 start -->
        <section class="main_banner gtm-screen-thankyou mb-5 mt-2 d-none" id="step_10">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 pe-xxl-5">
                        <h4 class="text-center color-646464 font18  mb-3 Livvic semibold">Uw vertrouwen
                            raakt me diep.</h4>
                        <h3 class="text-center font32 font-black Livvic  mb-5">Ik ga onmiddel voor u aan de slag. U krijgt
                            uw persoonlijke lezing binnen een paar uur.</h3>
                        <p class="text-061629 font18 Livvic semibold text-center">Als u nu naar uw inbox gaat zult u de
                            belofte cadeautjes aantreffen. Ik beloofde u: - Jouw Positieve Energie Checkup - Je
                            7-dagen-Absolute-Beschermings Talisman
                        </p>
                        <div class="bg-text-new1">
                            <ul class="list-inline list-unstyled mb-0 text-center">
                                <li class="mb-2 font18 Livvic semibold">1. Ga naar je inbox
                                </li>
                                <li class="mb-2 font18 Livvic semibold">2. Controleer uw inbox of
                                    spam
                                </li>
                                <li class="border-0 font18 Livvic semibold">3. Open uw e-mail en lees uw welkomstcadeau</li>
                            </ul>
                        </div>
                        <div class="bg-text-new1 text-center">
                            <p class=" font18 Livvic fw-normal">P.S. Om er zeker van te zijn dat je vertrouwen in mij
                                verdiend is, wil ik dat u weet dat ik de regelgeving respecteer betreffende privacy en
                                toegang tot uw persoonlijke gegevens. Alles staat hier, in mijn Privacy Beleid.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- step10 end -->


        <section class="disclimber_section">
            <div class="container-fluid pb-5 border-bottom-D9D9D9">
                <div class="row mx-0 w-100 pt-5">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="text-black fw-light Livvic mb-0 font-25 text-center text-uppercase mb-3"><span class="text-black fw-500"><?= print_dynamic_variable('disclaimer_title_nl') ?></span>
                            </h3>
                            <p class="text-uppercase fw-normal text-black mb-0 font-15 Lato line-height-23">
                                <?= print_dynamic_variable('disclaimer_text_nl') ?>
                            </p>
                            <p class="fw-normal text-black mb-0 font-15 Lato line-height-23 mt-2">
                                {{ print_dynamic_variable('address') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--f804-LU-new-astrology-final-footer -->
        <footer class="f804-LU-new-astrology-final footer position-unset pt-5">
            <div class="container-fluid pb-5 border-bottom-D9D9D9">
                <div class="row mx-0 w-100 pt-5">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="menu_links text-center">
                                <ul class="list-unstyled list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="https://function-tool.com/terms-of-service.html" class="Lato fw-normal font-16 text-decoration-none text-black">Voorwaarden van
                                            dienst</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://function-tool.com/privacy-policy.html" class="Lato fw-normal font-16 text-decoration-none text-black">Privacy beleid</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://function-tool.com/ethical-rules.html" class="Lato fw-normal font-16 text-decoration-none text-black">Ethisch regels</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://function-tool.com/gdpr.html" class="Lato fw-normal font-16 text-decoration-none text-black">GDPR</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://function-tool.com/cookie-policy.html" class="Lato fw-normal font-16 text-decoration-none text-black">Cookie beleid</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </form>

    <!-- all popup -->


    <!-- Pop-up -->
    <!-- Social icon Model  -->

    <!-- Social icon Model  -->

    <!-- new terms popup -->
    <div class="f804-LU-new-astrology-final-conditon modal fade terms_modal" id="terms_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <h5 class="f804-LU-new-astrology-final-con-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">NUTZUNGSBEDINGUNGEN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="t_c_text">
                        <!-----1------------------------------------------------------------------------------------->

                        <p class="roboto regular font-18 color-787878 lh-32">
                            Diese Allgemeinen Geschäftsbedingungen ("Vereinbarung") legen die Bedingungen für die Nutzung
                            der Website https://astrology-prism.com ("Website" oder "Dienst") und aller damit verbundenen
                            Produkte und Dienstleistungen (zusammen "Dienste") fest. Diese Vereinbarung ist
                            rechtsverbindlich zwischen Ihnen ("Nutzer", "Sie" oder "Ihr") und Astrology-Prism ist eine Marke
                            von Astroveo B.V. ("Astrology-Prism ist eine Marke von Astroveo B.V.", "wir", "uns" oder
                            "unser"). Wenn Sie diese Vereinbarung im Namen eines Unternehmens oder einer anderen
                            juristischen Person abschließen, erklären Sie, dass Sie die Befugnis haben, diese juristische
                            Person an diese Vereinbarung zu binden, und in diesem Fall beziehen sich die Begriffe "Nutzer",
                            "Sie" oder "Ihr" auf diese juristische Person. Wenn Sie nicht über diese Befugnis verfügen oder
                            mit den Bedingungen dieser Vereinbarung nicht einverstanden sind, dürfen Sie diese Vereinbarung
                            nicht akzeptieren und nicht auf die Website und die Dienste zugreifen oder diese nutzen. Indem
                            Sie auf die Website und die Dienste zugreifen und diese nutzen, bestätigen Sie, dass Sie die
                            Bedingungen dieser Vereinbarung gelesen und verstanden haben und sich damit einverstanden
                            erklären, an diese gebunden zu sein. Sie erkennen an, dass diese Vereinbarung ein Vertrag
                            zwischen Ihnen und Astrology-Prism ist eine Marke von Astroveo B.V. ist, auch wenn sie
                            elektronisch ist und nicht physisch von Ihnen unterzeichnet wurde, und dass sie Ihre Nutzung der
                            Website und der Dienste regelt.<br>

                            <b class="py-1 mt-2 d-block">Erforderliches Alter</b>

                            Sie müssen mindestens 18 Jahre alt sein, um die Website und die Dienste nutzen zu können. Durch
                            die Nutzung der Website und der Dienste und die Annahme dieser Vereinbarung gewährleisten und
                            erklären Sie, dass Sie mindestens 18 Jahre alt sind.<br>

                            <b class="py-1 mt-2 d-block">Rechnungsstellung und Zahlungen</b>

                            Sie müssen alle Gebühren oder Entgelte auf Ihr Konto gemäß den Gebühren, Entgelten und
                            Rechnungsbedingungen zahlen, die zu dem Zeitpunkt gelten, an dem die Gebühren oder Entgelte
                            fällig und zahlbar sind. Wenn die Dienste als kostenlose Testversion angeboten werden, kann die
                            Zahlung nach Ablauf des kostenlosen Testzeitraums verlangt werden, und nicht, wenn Sie Ihre
                            Rechnungsdaten eingeben (die möglicherweise vor Beginn des kostenlosen Testzeitraums
                            erforderlich sind). Wenn wir der Meinung sind, dass Ihr Kauf eine Transaktion mit hohem Risiko
                            darstellt, werden wir Sie bitten, uns eine Kopie eines gültigen, von einer Regierung
                            ausgestellten Lichtbildausweises und eventuell eine Kopie eines aktuellen Kontoauszugs für die
                            Kredit- oder Debitkarte, die Sie für den Kauf verwendet haben, zur Verfügung zu stellen. Wir
                            behalten uns das Recht vor, die Produkte und ihre Preise jederzeit zu ändern. Wir behalten uns
                            außerdem das Recht vor, jede Bestellung abzulehnen, die Sie uns erteilen. Wir können nach
                            eigenem Ermessen die pro Person, pro Haushalt oder pro Bestellung gekauften Mengen beschränken
                            oder stornieren. Solche Beschränkungen können Bestellungen umfassen, die von oder unter
                            demselben Kundenkonto, derselben Kreditkarte und/oder unter Verwendung derselben Rechnungs-
                            und/oder Lieferadresse aufgegeben werden. Wenn wir eine Bestellung ändern oder stornieren,
                            können wir versuchen, Sie darüber zu informieren, indem wir die zum Zeitpunkt der Bestellung
                            angegebene E-Mail-Adresse und/oder Rechnungsadresse/Telefonnummer kontaktieren.<br>

                            <b class="py-1 mt-2 d-block">Richtigkeit der Informationen</b>

                            Es kann vorkommen, dass Informationen auf der Website typografische Fehler, Ungenauigkeiten oder
                            Auslassungen enthalten, die sich auf Produktbeschreibungen, Preise, Werbeaktionen und Angebote
                            beziehen können. Wir behalten uns das Recht vor, Fehler, Ungenauigkeiten oder Auslassungen zu
                            korrigieren und Informationen zu ändern oder zu aktualisieren oder Bestellungen zu stornieren,
                            wenn Informationen auf der Website oder in den Diensten unrichtig sind, und zwar jederzeit und
                            ohne Vorankündigung (auch nachdem Sie Ihre Bestellung eingereicht haben). Wir verpflichten uns
                            nicht, die Informationen auf der Website, einschließlich, aber nicht beschränkt auf
                            Preisinformationen, zu aktualisieren, zu ändern oder zu verdeutlichen, sofern dies nicht
                            gesetzlich vorgeschrieben ist. Kein angegebenes Aktualisierungs- oder Update-Datum, das auf der
                            Website angewandt wird, sollte als Hinweis darauf verstanden werden, dass alle Informationen auf
                            der Website oder die Dienstleistungen geändert oder aktualisiert wurden.<br>

                            <b class="py-1 mt-2 d-block">Dienste von Drittanbietern</b>

                            Wenn Sie sich entscheiden, Dienste Dritter zu aktivieren, auf diese zuzugreifen oder sie zu
                            nutzen, sollten Sie wissen, dass Ihr Zugang zu und Ihre Nutzung dieser anderen Dienste
                            ausschließlich den Geschäftsbedingungen dieser anderen Dienste unterliegt und dass wir keinen
                            Aspekt dieser anderen Dienste billigen, nicht dafür verantwortlich sind und keine Erklärungen
                            dazu abgeben, einschließlich, aber nicht beschränkt auf deren Inhalt oder die Art und Weise, wie
                            sie Daten (einschließlich Ihrer Daten) verarbeiten, oder jegliche Interaktion zwischen Ihnen und
                            dem Anbieter dieser anderen Dienste. Sie verzichten unwiderruflich auf alle Ansprüche gegen
                            Astrology-Prism ist eine Marke von Astroveo B.V. in Bezug auf diese anderen Dienste.
                            Astrology-Prism ist eine Marke von Astroveo B.V. haftet nicht für Schäden oder Verluste, die
                            durch oder in Verbindung mit Ihrer Aktivierung, Ihrem Zugang oder Ihrer Nutzung dieser anderen
                            Dienste oder Ihrem Vertrauen auf die Datenschutzpraktiken, Datensicherheitsprozesse oder andere
                            Richtlinien dieser anderen Dienste verursacht werden oder angeblich verursacht werden. Sie
                            können aufgefordert werden, sich für diese anderen Dienste auf deren jeweiligen Plattformen zu
                            registrieren oder anzumelden. Durch die Aktivierung eines anderen Dienstes ermächtigen Sie
                            Astrology-Prism ist eine Marke von Astroveo B.V. ausdrücklich, Ihre Daten offenzulegen, wenn
                            dies notwendig ist, um die Nutzung oder Aktivierung dieses anderen Dienstes zu erleichtern.<br>

                            <b class="py-1 mt-2 d-block">Garantie der Verfügbarkeit</b>

                            Wir bieten eine Garantie für die Verfügbarkeit des Dienstes von 99 % der verfügbaren Zeit pro
                            Monat. Wenn wir diese Garantie für die Verfügbarkeit des Dienstes in einem bestimmten Monat
                            (nach unserem alleinigen Ermessen) nicht einhalten können, können Sie sich mit uns in Verbindung
                            setzen und eine Gutschrift auf Ihre Dienstgebühren für diesen Monat beantragen. Die Gutschrift
                            kann nur für den Kauf anderer Produkte und Dienstleistungen von uns verwendet werden und umfasst
                            nicht die anfallenden Steuern. Die Garantie für die Betriebszeit des Dienstes gilt nicht für
                            Unterbrechungen des Dienstes, die verursacht werden durch: (1) regelmäßige planmäßige Wartungs-
                            oder Reparaturarbeiten, die wir von Zeit zu Zeit durchführen können; (2) Unterbrechungen, die
                            von Ihnen oder Ihren Aktivitäten verursacht werden; (3) Ausfälle, die die Grundfunktionalität
                            des Dienstes nicht beeinträchtigen; (4) Ursachen, die außerhalb unserer Kontrolle liegen oder
                            die nicht vernünftigerweise vorhersehbar sind; und (5) Ausfälle, die mit der Zuverlässigkeit
                            bestimmter Programmierumgebungen zusammenhängen.<br>

                            <b class="py-1 mt-2 d-block">Links zu anderen Ressourcen</b>

                            Obwohl die Website und die Dienste mit anderen Ressourcen (wie Websites, mobilen Anwendungen
                            usw.) verlinkt sein können, implizieren wir weder direkt noch indirekt eine Billigung,
                            Verbindung, Sponsoring, Genehmigung oder Zugehörigkeit zu einer verlinkten Ressource, es sei
                            denn, dies ist hier ausdrücklich angegeben. Einige der Links auf der Website können sogenannte
                            "Affiliate-Links" sein. Das bedeutet, dass Astrology-Prism ist eine Marke von Astroveo B.V. eine
                            Affiliate-Provision erhält, wenn Sie auf den Link klicken und einen Artikel kaufen. Wir sind
                            nicht für die Prüfung oder Bewertung verantwortlich und übernehmen keine Garantie für die
                            Angebote eines Unternehmens oder einer Einzelperson oder für den Inhalt ihrer Ressourcen. Wir
                            übernehmen keine Verantwortung für die Handlungen, Produkte, Dienstleistungen oder Inhalte
                            anderer Dritter. Sie sollten die rechtlichen Erklärungen und sonstigen Nutzungsbedingungen jeder
                            Ressource, auf die Sie über einen Link auf der Website zugreifen, sorgfältig prüfen. Ihre
                            Verbindung zu einer anderen Ressource außerhalb der Website erfolgt auf Ihr eigenes Risiko.<br>

                            <b class="py-1 mt-2 d-block">Ausschluss von Gewährleistungen</b>

                            Sie erklären sich damit einverstanden, dass dieser Dienst "wie besehen" und "wie verfügbar"
                            bereitgestellt wird und dass Sie die Website und die Dienste auf eigenes Risiko nutzen. Wir
                            lehnen ausdrücklich alle ausdrücklichen oder stillschweigenden Garantien jeglicher Art ab,
                            einschließlich, aber nicht beschränkt auf die stillschweigenden Garantien der Marktgängigkeit,
                            der Eignung für einen bestimmten Zweck und der Nichtverletzung von Rechten Dritter. Wir
                            garantieren nicht, dass die Dienste Ihren Anforderungen entsprechen oder dass der Dienst
                            ununterbrochen, zeitnah, sicher oder fehlerfrei ist; wir garantieren auch nicht die Ergebnisse,
                            die durch die Nutzung des Dienstes erzielt werden können, oder die Genauigkeit oder
                            Zuverlässigkeit jeglicher Informationen, die über den Dienst erhalten werden, oder dass Mängel
                            des Dienstes behoben werden. Sie verstehen und stimmen zu, dass alle Materialien und/oder Daten,
                            die Sie herunterladen oder anderweitig durch die Nutzung des Dienstes erhalten, nach Ihrem
                            eigenen Ermessen und auf Ihr eigenes Risiko heruntergeladen werden und dass Sie allein für alle
                            Schäden oder Datenverluste verantwortlich sind, die durch das Herunterladen dieser Materialien
                            und/oder Daten entstehen. Wir geben keine Garantien in Bezug auf Waren oder Dienstleistungen,
                            die über den Dienst gekauft oder erhalten werden, oder in Bezug auf Transaktionen, die über den
                            Dienst abgewickelt werden, sofern nicht anders angegeben. Keine Ratschläge oder Informationen,
                            ob mündlich oder schriftlich, die Sie von uns oder über den Dienst erhalten, begründen eine
                            Garantie, die hier nicht ausdrücklich formuliert ist.<br>

                            <b class="py-1 mt-2 d-block">Änderungen und Modifikationen</b>

                            Wir behalten uns das Recht vor, diese Vereinbarung oder ihre Bedingungen in Bezug auf die
                            Website und die Dienstleistungen jederzeit und nach eigenem Ermessen zu ändern. Wenn wir dies
                            tun, werden wir das Aktualisierungsdatum am Ende dieser Seite überarbeiten. Wir können Sie auch
                            auf andere Weise nach unserem Ermessen informieren, insbesondere über die von Ihnen angegebenen
                            Kontaktinformationen.
                            Eine aktualisierte Version dieser Vereinbarung tritt unmittelbar nach der Veröffentlichung der
                            überarbeiteten Vereinbarung in Kraft, sofern nicht anders angegeben. Ihre fortgesetzte Nutzung
                            der Website und der Dienste nach dem Datum des Inkrafttretens der überarbeiteten Vereinbarung
                            (oder einer anderen zu diesem Zeitpunkt angegebenen Handlung) stellt Ihre Zustimmung zu diesen
                            Änderungen dar.<br>

                            <b class="py-1 mt-2 d-block">Annahme dieser Bedingungen</b>

                            Sie bestätigen, dass Sie diese Vereinbarung gelesen haben und mit allen Bedingungen
                            einverstanden sind. Durch den Zugriff auf und die Nutzung der Website und der Dienste stimmen
                            Sie zu, an diese Vereinbarung gebunden zu sein. Wenn Sie den Bedingungen dieser Vereinbarung
                            nicht zustimmen, ist es Ihnen nicht gestattet, auf die Website und die Dienste zuzugreifen oder
                            sie zu nutzen.<br>

                            <b class="py-1 mt-2 d-block">Kontaktieren Sie uns</b>

                            Wenn Sie Fragen, Bedenken oder Beschwerden in Bezug auf diese Vereinbarung haben, empfehlen wir
                            Ihnen, uns über die folgenden Kontaktdaten zu kontaktieren:<br>
                            https://astrology-prism.com<br>
                            Dieses Dokument wurde am 8. April 2022 aktualisiert.<br>
                            HAFTUNGSAUSSCHLUSS
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Privacy Policy -->
    <div class="f804-LU-new-astrology-final-pp modal fade privacy_modal" id="privacy_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="f804-LU-new-astrology-final-modal modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <h5 class="f804-LU-new-astrology-final-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">
                    DATENSCHUTZRICHTLINIE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <p class="roboto regular font-18 color-787878 lh-32">
                        Wir respektieren Ihre Privatsphäre und verpflichten uns, diese durch die Einhaltung dieser
                        Datenschutzrichtlinie ("Richtlinie") zu schützen. Diese Richtlinie beschreibt die Arten von
                        Informationen, die wir von Ihnen sammeln oder die Sie uns auf der Website astrology-prism.com
                        ("Website" oder "Service") und einem ihrer zugehörigen Produkte und Dienstleistungen (zusammen
                        "Services") zur Verfügung stellen können ("Persönliche Informationen"), sowie unsere Praktiken in
                        Bezug auf die Sammlung, Nutzung, Aufbewahrung, den Schutz und die Offenlegung dieser Persönlichen
                        Informationen. Sie beschreibt außerdem, welche Wahlmöglichkeiten Sie hinsichtlich der Verwendung
                        Ihrer personenbezogenen Daten haben und wie Sie auf diese Daten zugreifen und sie aktualisieren
                        können.<br>

                        Diese Richtlinie ist eine rechtlich bindende Vereinbarung zwischen Ihnen ("Nutzer", "Sie" oder
                        "Ihr") und Astrology-Prism ist eine Marke von Astroveo B.V. ("Astrology-Prism ist eine Marke von
                        Astroveo B.V.", "wir", "uns" oder "unser"). Wenn Sie diese Vereinbarung im Namen eines Unternehmens
                        oder einer anderen juristischen Person abschließen, erklären Sie, dass Sie die Befugnis haben, diese
                        juristische Person an diese Vereinbarung zu binden, und in diesem Fall beziehen sich die Begriffe
                        "Nutzer", "Sie" oder "Ihr" auf diese juristische Person. Wenn Sie nicht über diese Befugnis verfügen
                        oder mit den Bedingungen dieser Vereinbarung nicht einverstanden sind, dürfen Sie diese Vereinbarung
                        nicht akzeptieren und nicht auf die Website und die Dienste zugreifen oder diese nutzen. Indem Sie
                        auf die Website und die Dienste zugreifen und diese nutzen, bestätigen Sie, dass Sie die Bedingungen
                        dieser Richtlinie gelesen und verstanden haben und damit einverstanden sind, an diese gebunden zu
                        sein. Diese Richtlinie gilt nicht für die Praktiken von Unternehmen, die sich nicht in unserem
                        Besitz befinden oder von uns kontrolliert werden, oder für Personen, die wir nicht beschäftigen oder
                        verwalten.<br>

                        <b class="py-1 mt-2 d-block">Automatisches Sammeln von Informationen</b>

                        Wenn Sie die Website öffnen, zeichnen unsere Server automatisch die Informationen auf, die Ihr
                        Browser sendet. Dazu gehören Informationen wie die IP-Adresse Ihres Geräts, der Typ und die Version
                        Ihres Browsers, der Typ und die Version Ihres Betriebssystems, Ihre Spracheinstellungen oder die
                        Webseite, die Sie besucht haben, bevor Sie auf die Webseite und die Dienste gelangt sind, die Seiten
                        der Webseite und der Dienste, die Sie besuchen, die Zeit, die Sie auf diesen Seiten verbringen, die
                        Informationen, die Sie auf der Webseite suchen, die Zeiten und Daten, zu denen Sie auf die Webseite
                        zugreifen, und andere Statistiken.<br>
                        Die automatisch gesammelten Informationen werden ausschließlich dazu verwendet, potenzielle
                        Missbrauchsfälle zu identifizieren und statistische Informationen über die Nutzung und den Verkehr
                        auf der Website und den Diensten zu erstellen. Diese statistischen Informationen werden nicht
                        anderweitig so zusammengefasst, dass ein bestimmter Nutzer des Systems identifiziert werden
                        kann.<br>

                        <b class="py-1 mt-2 d-block">Erhebung von persönlichen Informationen</b>

                        Sie können auf die Website und die Dienste zugreifen und diese nutzen, ohne uns mitzuteilen, wer Sie
                        sind, oder Informationen preiszugeben, die es jemandem ermöglichen, Sie als eine bestimmte und
                        identifizierbare Person zu identifizieren. Wenn Sie jedoch einige der auf der Website angebotenen
                        Funktionen nutzen möchten, werden Sie möglicherweise aufgefordert, bestimmte persönliche
                        Informationen (z. B. Ihren Namen und Ihre E-Mail-Adresse) anzugeben.<br>
                        Wir erhalten und speichern alle Informationen, die Sie uns wissentlich zur Verfügung stellen, wenn
                        Sie auf der Website einen Kauf tätigen oder ein Formular ausfüllen. Sofern erforderlich, können
                        diese Informationen Folgendes umfassen:<br>
                        - Kontaktinformationen (E-Mail-Adresse, Telefonnummer usw.).<br>
                        - grundlegende persönliche Informationen (wie Name, Land des Wohnsitzes usw.)<br>
                        - Geolokalisierungsdaten Ihres Geräts (wie z. B. Breiten- und Längengrad).<br>
                        Sie können sich dafür entscheiden, uns Ihre persönlichen Informationen nicht zur Verfügung zu
                        stellen, aber es kann sein, dass Sie dann bestimmte Funktionen der Website nicht nutzen können.
                        Nutzer, die nicht wissen, welche Informationen obligatorisch sind, sollten sich mit uns in
                        Verbindung setzen.<br>

                        <b class="py-1 mt-2 d-block">Privatsphäre von Kindern</b>

                        Wir sammeln nicht wissentlich persönliche Informationen von Kindern unter 18 Jahren. Wenn Sie unter
                        18 Jahre alt sind, übermitteln Sie bitte keine personenbezogenen Daten über die Website und die
                        Dienste. Wenn Sie Grund zu der Annahme haben, dass ein Kind unter 18 Jahren uns über die Website und
                        die Dienste personenbezogene Daten übermittelt hat, wenden Sie sich bitte an uns und bitten Sie uns,
                        die personenbezogenen Daten dieses Kindes aus unseren Diensten zu entfernen.<br>
                        We encourage parents and legal guardians to monitor the Internet usage of their children and to help
                        enforce this Policy by instructing their children not to provide Personal Information through the
                        Website and Services without their permission. Wir fordern außerdem, dass alle Eltern und
                        Erziehungsberechtigten, die für die Betreuung von Kindern zuständig sind, die notwendigen
                        Vorsichtsmaßnahmen ergreifen, um sicherzustellen, dass ihre Kinder angewiesen werden, niemals ohne
                        ihre Erlaubnis persönliche Informationen online weiterzugeben.<br>

                        <b class="py-1 mt-2 d-block">Nutzung und Verarbeitung der gesammelten Informationen</b>

                        Wir fungieren bei der Verarbeitung personenbezogener Informationen als Datencontroller und
                        Datenverarbeiter im Sinne der GDPR, es sei denn, wir haben eine Datenverarbeitungsvereinbarung mit
                        Ihnen abgeschlossen, in welchem Fall Sie der Datencontroller und wir der Datenverarbeiter sind.<br>
                        Unsere Rolle kann sich auch je nach der spezifischen Situation, in der personenbezogene Daten
                        involviert sind, unterscheiden. Wir fungieren als Datenverantwortlicher, wenn wir Sie um die
                        Übermittlung Ihrer personenbezogenen Daten bitten, die notwendig sind, um Ihren Zugriff auf und Ihre
                        Nutzung der Website und der Dienste zu gewährleisten. In solchen Fällen sind wir ein
                        Datenverantwortlicher, weil wir die Zwecke und Mittel der Verarbeitung personenbezogener Daten
                        festlegen und die in der GDPR festgelegten Pflichten von Datenverantwortlichen erfüllen.
                        Wir fungieren als Datenverarbeiter in Situationen, in denen Sie personenbezogene Daten über die
                        Website und die Dienste einreichen. Wir besitzen, kontrollieren oder entscheiden nicht über die
                        eingereichten personenbezogenen Daten, und diese personenbezogenen Daten werden nur gemäß Ihren
                        Anweisungen verarbeitet. In solchen Fällen handelt der Nutzer, der die Persönlichen Informationen
                        zur Verfügung stellt, als Datenverantwortlicher im Sinne der GDPR.<br>
                        Um Ihnen die Website und die Dienste zur Verfügung zu stellen oder um einer gesetzlichen
                        Verpflichtung nachzukommen, müssen wir möglicherweise bestimmte Persönliche Informationen sammeln
                        und verwenden. Wenn Sie die Informationen nicht bereitstellen
                        die wir anfordern, sind wir möglicherweise nicht in der Lage, Ihnen die angeforderten Produkte oder
                        Dienstleistungen zur Verfügung zu stellen. Alle Informationen, die wir von Ihnen erfassen, können
                        für die folgenden Zwecke verwendet werden:<br>
                        - Erledigung und Verwaltung von Bestellungen<br>
                        - Bereitstellung von Produkten oder Dienstleistungen<br>
                        - Versenden von Verwaltungsinformationen<br>
                        - Beantwortung von Anfragen und Bereitstellung von Unterstützung<br>
                        - die Nutzererfahrung zu verbessern<br>
                        - Erfahrungsberichte von Kunden veröffentlichen<br>
                        - die Website und die Dienste zu verwalten und zu betreiben.<br>
                        Die Verarbeitung Ihrer personenbezogenen Daten hängt davon ab, wie Sie mit der Website und den
                        Diensten interagieren, wo auf der Welt Sie sich befinden und ob einer der folgenden Fälle zutrifft:
                        <br>(i) Sie haben Ihre Einwilligung für einen oder mehrere bestimmte Zwecke erteilt; dies gilt
                        jedoch nicht, wenn die Verarbeitung der Persönlichen Informationen dem kalifornischen
                        Verbraucherdatenschutzgesetz oder dem europäischen Datenschutzgesetz unterliegt; <br>(ii) die
                        Bereitstellung von Informationen ist für die Erfüllung einer Vereinbarung mit Ihnen und/oder
                        jeglicher vorvertraglicher Verpflichtungen aus dieser Vereinbarung erforderlich ;<br> (iii) die
                        Verarbeitung ist für die Erfüllung einer rechtlichen Verpflichtung erforderlich, der Sie
                        unterliegen;<br> (iv) die Verarbeitung erfolgt im Zusammenhang mit einer Aufgabe, die im
                        öffentlichen Interesse liegt oder in Ausübung der uns übertragenen amtlichen Befugnisse erfolgt;<br>
                        (v) die Verarbeitung ist für die von uns oder einem Dritten verfolgten berechtigten Interessen
                        erforderlich.<br>
                        Wir stützen uns auf die folgenden Rechtsgrundlagen, wie sie in der GDPR definiert sind, auf deren
                        Grundlage wir Ihre Persönlichen Informationen sammeln und verarbeiten:<br>

                        <b class="py-1 mt-2 d-block">- Zustimmung des Nutzers</b>

                        Bitte beachten Sie, dass wir nach bestimmten Gesetzen berechtigt sein können, Informationen zu
                        verarbeiten, bis Sie dieser Verarbeitung widersprechen, indem Sie sich abmelden, ohne sich auf die
                        Einwilligung oder eine andere der oben genannten Rechtsgrundlagen berufen zu müssen. In jedem Fall
                        klären wir gerne die spezifische Rechtsgrundlage, die für die Verarbeitung gilt, und insbesondere,
                        ob die Bereitstellung personenbezogener Informationen eine gesetzliche oder vertragliche Anforderung
                        ist oder eine Anforderung, die für den Abschluss eines Vertrags erforderlich ist.<br>

                        <b class="py-1 mt-2 d-block">Bearbeitung von Zahlungen</b>

                        Bei Dienstleistungen, die eine Zahlung erfordern, müssen Sie möglicherweise Ihre Kreditkartendaten
                        oder andere Informationen über Ihr Zahlungskonto angeben, die nur zur Zahlungsabwicklung verwendet
                        werden. Wir verwenden Zahlungsprozessoren von Drittanbietern ("Zahlungsprozessoren"), die uns dabei
                        helfen, Ihre Zahlungsinformationen sicher zu verarbeiten.<br>
                        Die Zahlungsprozessoren halten sich an die neuesten Sicherheitsstandards, die vom PCI Security
                        Standards Council verwaltet werden, das eine gemeinsame Anstrengung von Marken wie Visa, MasterCard,
                        American Express und Discover ist. Der Austausch sensibler und privater Daten erfolgt über einen
                        sicheren SSL-Kommunikationskanal und ist verschlüsselt und durch digitale Signaturen geschützt. Die
                        Website und die Dienste erfüllen außerdem strenge Standards für Schwachstellen, um eine möglichst
                        sichere Umgebung für die Nutzer zu schaffen. Wir werden Zahlungsdaten nur in dem Maße an die
                        Zahlungsverarbeiter weitergeben, wie es für die Bearbeitung Ihrer Zahlungen, die Rückerstattung
                        dieser Zahlungen und die Bearbeitung von Beschwerden und Anfragen im Zusammenhang mit diesen
                        Zahlungen und Rückerstattungen erforderlich ist.
                        Bitte beachten Sie, dass die Zahlungsabwickler einige Ihrer Persönlichen Daten erfassen können, die
                        es ihnen ermöglichen, Ihre Zahlungen zu bearbeiten (z. B. Ihre E-Mail-Adresse, Ihre Anschrift, Ihre
                        Kreditkartendaten und Ihre Bankkontonummer) und alle Schritte des Zahlungsvorgangs über ihre Systeme
                        zu verwalten, einschließlich der Datenerfassung und -verarbeitung. Die Nutzung Ihrer Persönlichen
                        Informationen durch die Zahlungsprozessoren unterliegt ihren jeweiligen Datenschutzrichtlinien, die
                        unter Umständen einen Datenschutz enthalten, der ebenso schützend ist wie diese Richtlinie. Wir
                        empfehlen Ihnen, ihre jeweiligen Datenschutzrichtlinien zu überprüfen.<br>

                        <b class="py-1 mt-2 d-block">Weitergabe von Informationen</b>

                        Je nach den angeforderten Dienstleistungen oder wenn es notwendig ist, um eine Transaktion
                        durchzuführen oder eine von Ihnen angeforderte Dienstleistung zu erbringen, können wir Ihre
                        Informationen an unsere vertrauenswürdigen Tochtergesellschaften und Joint-Venture-Partner,
                        verbundenen Unternehmen, Vertragsunternehmen und Dienstleister (zusammen die "Dienstleister")
                        weitergeben, auf die wir zurückgreifen, um uns beim Betrieb der Website und der Ihnen zur Verfügung
                        gestellten Dienstleistungen zu unterstützen, und deren Datenschutzrichtlinien mit unseren
                        übereinstimmen oder die sich bereit erklären, unsere Datenschutzrichtlinien einzuhalten. Wir werden
                        keine Informationen an nicht angeschlossene Dritte weitergeben.<br>
                        Dienstleistern ist es nicht gestattet, Ihre Informationen zu nutzen oder offenzulegen, es sei denn,
                        dies ist notwendig, um Dienstleistungen in unserem Auftrag zu erbringen oder um gesetzliche
                        Anforderungen zu erfüllen. Die Dienstleister erhalten die Informationen, die sie benötigen,
                        ausschließlich zur Erfüllung ihrer bezeichneten Aufgaben, und wir gestatten ihnen nicht, die
                        bereitgestellten Informationen für ihr eigenes Marketing oder andere Zwecke zu nutzen oder
                        offenzulegen. Wir werden Ihre Informationen nur mit den folgenden Kategorien von Dienstleistern
                        teilen und offenlegen :<br>
                        - Partnerprogramme<br>
                        - Zahlungsabwickler<br>

                        <b class="py-1 mt-2 d-block">Aufbewahrung von Informationen</b>

                        Wir werden Ihre Persönlichen Informationen nur so lange aufbewahren und verwenden, wie es notwendig
                        ist, um unseren gesetzlichen Verpflichtungen nachzukommen, unsere Vereinbarungen durchzusetzen,
                        Streitigkeiten beizulegen, und sofern nicht eine längere Aufbewahrungsfrist gesetzlich
                        vorgeschrieben oder zulässig ist.<br>
                        Wir können alle aggregierten Daten verwenden, die aus Ihren Persönlichen Informationen abgeleitet
                        wurden oder diese beinhalten, nachdem Sie diese aktualisiert oder gelöscht haben, jedoch nicht auf
                        eine Weise, die Sie persönlich identifiziert. Nach Ablauf der Aufbewahrungsfrist werden die
                        persönlichen Informationen gelöscht. Daher können das Recht auf Zugang, das Recht auf Löschung, das
                        Recht auf Berichtigung und das Recht auf Datenübertragbarkeit nach Ablauf der Aufbewahrungsfrist
                        nicht mehr angewendet werden.<br>

                        <b class="py-1 mt-2 d-block">Übertragung von Informationen</b>

                        Je nach Ihrem Standort kann die Datenübertragung die Übertragung und Speicherung Ihrer Informationen
                        in einem anderen Land als dem Ihren beinhalten. Dies schließt jedoch keine Länder außerhalb der
                        Europäischen Union und des Europäischen Wirtschaftsraums ein. Wenn eine solche Übertragung
                        stattfindet, können Sie mehr darüber in den entsprechenden Abschnitten dieser Richtlinie erfahren
                        oder sich mithilfe der im Abschnitt Kontakt angegebenen Informationen bei uns erkundigen.<br>

                        <b class="py-1 mt-2 d-block">Datenschutzrechte nach der GDPR</b>

                        Wenn Sie im Europäischen Wirtschaftsraum ("EWR") ansässig sind, haben Sie bestimmte
                        Datenschutzrechte, und wir bemühen uns, angemessene Maßnahmen zu ergreifen, um Ihnen die Möglichkeit
                        zu geben, Ihre Persönlichen Informationen zu korrigieren, zu ändern, zu löschen oder deren Nutzung
                        einzuschränken. Wenn Sie darüber informiert werden möchten, welche personenbezogenen Daten wir über
                        Sie gespeichert haben, und wenn Sie möchten, dass diese aus unseren Systemen gelöscht werden, setzen
                        Sie sich bitte mit uns in Verbindung. Unter bestimmten Umständen haben Sie die folgenden
                        Datenschutzrechte:<br>
                        (i) Sie haben das Recht, Ihre Zustimmung zu widerrufen, wenn Sie zuvor Ihre Zustimmung zur
                        Verarbeitung Ihrer Persönlichen Informationen gegeben haben. Soweit die Rechtsgrundlage für unsere
                        Verarbeitung Ihrer personenbezogenen Daten die Einwilligung ist, haben Sie das Recht, diese
                        Einwilligung jederzeit zu widerrufen. Der Widerruf hat keinen Einfluss auf die Rechtmäßigkeit der
                        Verarbeitung vor dem Widerruf.<br>
                        (ii) Sie haben das Recht, zu erfahren, ob wir Ihre personenbezogenen Daten verarbeiten,
                        Informationen über bestimmte Aspekte der Verarbeitung zu erhalten und eine Kopie Ihrer
                        personenbezogenen Daten während der Verarbeitung zu erhalten.<br>
                        (iii) Sie haben das Recht, die Richtigkeit Ihrer Informationen zu überprüfen und zu verlangen, dass
                        sie aktualisiert oder berichtigt werden. Sie haben auch das Recht, uns aufzufordern,
                        personenbezogene Daten zu vervollständigen, die Ihrer Meinung nach unvollständig sind.<br>
                        (iv) Sie haben das Recht, der Verarbeitung Ihrer Informationen zu widersprechen, wenn die
                        Verarbeitung auf einer anderen Rechtsgrundlage als der Einwilligung erfolgt. Wenn die
                        personenbezogenen Daten im öffentlichen Interesse, in Ausübung einer uns übertragenen amtlichen
                        Befugnis oder für die Zwecke unserer berechtigten Interessen verarbeitet werden, können Sie der
                        Verarbeitung widersprechen, indem Sie einen Grund angeben, der sich auf Ihre besondere Situation
                        bezieht, um den Widerspruch zu rechtfertigen. Sie sollten jedoch wissen, dass Sie, wenn Ihre
                        personenbezogenen Daten für Direktmarketingzwecke verarbeitet werden, dieser Verarbeitung jederzeit
                        ohne Angabe von Gründen widersprechen können. Informationen darüber, ob wir personenbezogene Daten
                        für Direktmarketingzwecke verarbeiten, finden Sie in den entsprechenden Abschnitten dieser
                        Richtlinie.<br>
                        (v) Unter bestimmten Umständen haben Sie das Recht, die Verarbeitung Ihrer Persönlichen
                        Informationen zu beschränken. Diese Umstände sind: Sie bestreiten die Richtigkeit Ihrer
                        personenbezogenen Daten und wir müssen die Richtigkeit überprüfen; die Verarbeitung ist
                        rechtswidrig, aber Sie lehnen die Löschung Ihrer personenbezogenen Daten ab und verlangen
                        stattdessen die Einschränkung ihrer Nutzung; wir benötigen Ihre personenbezogenen Daten für die
                        Zwecke der Verarbeitung nicht mehr, aber Sie benötigen sie, um Rechtsansprüche zu begründen,
                        auszuüben oder zu verteidigen; Sie haben sich der Verarbeitung widersetzt, bis wir überprüft haben,
                        ob unsere legitimen Gründe gegenüber den Ihren überwiegen. Wenn die Verarbeitung eingeschränkt
                        wurde, werden diese personenbezogenen Daten entsprechend gekennzeichnet und mit Ausnahme der
                        Speicherung nur mit Ihrer Einwilligung oder zur Feststellung, Ausübung oder Verteidigung von
                        Rechtsansprüchen, zum Schutz der Rechte einer anderen natürlichen oder juristischen Person oder aus
                        Gründen eines wichtigen öffentlichen Interesses verarbeitet.<br>

                        (vi) Sie haben unter bestimmten Umständen das Recht, von uns die Löschung Ihrer Persönlichen
                        Informationen zu verlangen. Diese Umstände sind: die Persönlichen Informationen sind für die Zwecke,
                        für die sie erhoben oder anderweitig verarbeitet wurden, nicht mehr erforderlich; Sie widerrufen
                        Ihre Zustimmung zu einer auf der Zustimmung beruhenden Verarbeitung; Sie widersetzen sich der
                        Verarbeitung aufgrund bestimmter Vorschriften des geltenden Datenschutzrechts; die Verarbeitung
                        erfolgt zu Direktmarketingzwecken; und die Persönlichen Informationen wurden unrechtmäßig
                        verarbeitet. Es gibt jedoch Ausnahmen vom Recht auf Löschung, etwa wenn die Verarbeitung
                        erforderlich ist: zur Ausübung des Rechts auf freie Meinungsäußerung und Information; zur Erfüllung
                        einer rechtlichen Verpflichtung; oder zur Feststellung, Ausübung oder Verteidigung von
                        Rechtsansprüchen vor Gericht.<br>
                        (vii) Sie haben das Recht, die personenbezogenen Daten, die Sie uns zur Verfügung gestellt haben, in
                        einem strukturierten, gängigen und maschinenlesbaren Format zu erhalten und, wenn dies technisch
                        möglich ist, ohne Behinderung durch uns an einen anderen Controller übermitteln zu lassen,
                        vorausgesetzt, dass diese Übermittlung nicht die Rechte und Freiheiten anderer Personen
                        beeinträchtigt.<br>
                        (viii) Sie haben das Recht, sich bei einer Datenschutzbehörde über unsere Erhebung und Verwendung
                        Ihrer personenbezogenen Daten zu beschweren. Wenn Sie mit dem Ergebnis Ihrer Beschwerde direkt bei
                        uns nicht zufrieden sind, haben Sie das Recht, eine Beschwerde bei Ihrer örtlichen
                        Datenschutzbehörde einzureichen. Für weitere Informationen wenden Sie sich bitte an Ihre lokale
                        Datenschutzbehörde im EWR. Dies gilt unter der Voraussetzung, dass Ihre Persönlichen Informationen
                        mit automatisierten Mitteln verarbeitet werden und die Verarbeitung auf Ihrer Einwilligung, auf
                        einem Vertrag, an dem Sie beteiligt sind, oder auf vorvertraglichen Verpflichtungen daraus
                        beruht.<br>

                        <b class="py-1 mt-2 d-block">Recht auf Privatsphäre in Kalifornien</b>

                        Verbraucher mit Wohnsitz in Kalifornien haben nach dem kalifornischen Gesetz zum Schutz der
                        Privatsphäre von Verbrauchern ("CCPA") bestimmte zusätzliche Rechte in Bezug auf ihre persönlichen
                        Daten. Wenn Sie in Kalifornien ansässig sind, gilt dieser Abschnitt für Sie.
                        Zusätzlich zu den in dieser Richtlinie erläuterten Rechten haben in Kalifornien ansässige Personen,
                        die persönliche Informationen im Sinne des Gesetzes bereitstellen, um Dienstleistungen für
                        persönliche, familiäre oder häusliche Zwecke zu erhalten, das Recht, einmal pro Kalenderjahr von uns
                        Informationen über die spezifischen Kategorien und Elemente der persönlichen Informationen, die wir
                        gesammelt und offengelegt haben, anzufordern und zu erhalten.<br>
                        Darüber hinaus haben Einwohner Kaliforniens das Recht, die Löschung ihrer personenbezogenen Daten zu
                        verlangen oder den Verkauf ihrer personenbezogenen Daten abzulehnen, was den Verkauf, die
                        Offenlegung oder die Übertragung von personenbezogenen Daten an ein anderes Unternehmen oder einen
                        Dritten gegen eine monetäre Gegenleistung oder einen anderen Wert einschließen kann. Um dies zu tun,
                        müssen Sie sich nur mit uns in Verbindung setzen. Wir werden Sie nicht diskriminieren, wenn Sie Ihre
                        Rechte nach dem CCPA ausüben.<br>

                        <b class="py-1 mt-2 d-block">Wie Sie Ihre Rechte ausüben können</b>

                        Anfragen zur Ausübung Ihrer Rechte können über die in diesem Dokument angegebenen Kontaktdaten an
                        uns gerichtet werden. Bitte beachten Sie, dass wir Sie möglicherweise bitten, Ihre Identität zu
                        überprüfen, bevor wir auf solche Anfragen reagieren. Ihre Anfrage muss ausreichende Informationen
                        enthalten, damit wir überprüfen können, ob Sie die Person sind, für die Sie sich ausgeben, oder ob
                        Sie der bevollmächtigte Vertreter dieser Person sind. Wenn wir Ihre Anfrage von einem
                        bevollmächtigten Vertreter erhalten, können wir einen Nachweis darüber verlangen, dass Sie diesem
                        bevollmächtigten Vertreter eine Vollmacht erteilt haben oder dass der bevollmächtigte Vertreter auf
                        andere Weise eine gültige schriftliche Vollmacht hat, Anfragen in Ihrem Namen zu stellen.<br>
                        Sie müssen genügend Details angeben, damit wir die Anfrage richtig verstehen und sie beantworten
                        können. Wir können Ihre Anfrage nicht beantworten oder Ihnen personenbezogene Daten zur Verfügung
                        stellen, wenn wir nicht zuerst Ihre Identität oder Ihre Befugnis, eine solche Anfrage zu stellen,
                        überprüft und bestätigt haben, dass die personenbezogenen Daten für Sie relevant sind.<br>

                        <b class="py-1 mt-2 d-block">Cookies</b>

                        Unsere Website und unsere Dienste verwenden "Cookies", um dabei zu helfen, Ihre Online-Erfahrung zu
                        personalisieren. Ein Cookie ist eine Textdatei, die von einem Webseitenserver auf Ihrer Festplatte
                        abgelegt wird. Cookies können nicht dazu verwendet werden, Programme auszuführen oder Viren auf
                        Ihren Computer zu übertragen. Cookies werden Ihnen eindeutig zugewiesen und können nur von einem
                        Webserver der Domain gelesen werden, die das Cookie an Sie ausgegeben hat. Wenn Sie sich dafür
                        entscheiden, Cookies abzulehnen, können Sie die Funktionen der Website und der Dienste
                        möglicherweise nicht in vollem Umfang nutzen. Hier können Sie mehr über Cookies und ihre
                        Funktionsweise erfahren.
                        Wir können Cookies verwenden, um Informationen zu Sicherheits- und Personalisierungszwecken zu
                        sammeln, zu speichern und zu verfolgen, um die Website und die Dienste zu betreiben und für
                        statistische Zwecke. Weitere Informationen zu den von uns gesammelten Cookies und ihrem Zweck finden
                        Sie in unserer Cookie-Richtlinie. Bitte beachten Sie, dass Sie die Möglichkeit haben, Cookies zu
                        akzeptieren oder abzulehnen. Die meisten Webbrowser akzeptieren Cookies standardmäßig automatisch,
                        aber Sie können die Einstellungen Ihres Browsers ändern, um Cookies abzulehnen, wenn Sie dies
                        bevorzugen.<br>

                        <b class="py-1 mt-2 d-block">Analyse von Daten</b>

                        Unsere Website und unsere Dienste können Analysetools von Drittanbietern verwenden, die Cookies,
                        Web-Beacons oder ähnliche Technologien zur Informationssammlung einsetzen, um Standardinformationen
                        über die Internetaktivität und -nutzung zu sammeln. Die gesammelten Informationen werden verwendet,
                        um statistische Berichte über die Aktivitäten der Nutzer zusammenzustellen, z. B. wie oft sie unsere
                        Website und unsere Dienste besuchen, welche Seiten sie besuchen und wie lange sie dort verweilen.
                        Wir verwenden die aus diesen Analysetools gewonnenen Informationen, um die Leistung zu überwachen
                        und unsere Website und unsere Dienste zu verbessern.<br>

                        <b class="py-1 mt-2 d-block">Signale für das Nicht-Tracking</b>

                        Einige Browser haben eine "Nicht verfolgen"-Funktion integriert, die den von Ihnen besuchten
                        Websites signalisiert, dass Sie nicht möchten, dass Ihre Online-Aktivitäten verfolgt werden.
                        Tracking ist nicht dasselbe wie die Verwendung oder Sammlung von Informationen im Zusammenhang mit
                        einer Website. Für diese Zwecke bedeutet Tracking das Sammeln persönlich identifizierbarer
                        Informationen von Verbrauchern, die eine Website oder einen Online-Dienst nutzen oder besuchen, wenn
                        sie sich im Laufe der Zeit auf verschiedenen Websites bewegen. Die Art und Weise, wie Browser das
                        "Do Not Track"-Signal kommunizieren, ist noch nicht einheitlich. Daher sind die Website und die
                        Dienste noch nicht so konfiguriert, dass sie die von Ihrem Browser übermittelten Do Not
                        Track-Signale interpretieren oder darauf reagieren. Trotzdem beschränken wir, wie in dieser
                        Richtlinie ausführlicher beschrieben, unsere Nutzung und Sammlung Ihrer personenbezogenen Daten.<br>

                        <b class="py-1 mt-2 d-block">Anzeigen</b>

                        Wir können bestimmten Drittunternehmen gestatten, uns bei der Anpassung der Werbung, von der wir
                        glauben, dass sie für die Nutzer interessant sein könnte, zu unterstützen und andere Daten über die
                        Aktivitäten der Nutzer auf der Website zu sammeln und zu verwenden. Diese Unternehmen können
                        Werbeanzeigen schalten, die möglicherweise Cookies setzen und das Verhalten der Nutzer
                        verfolgen.<br>

                        <b class="py-1 mt-2 d-block">Marketing per E-Mail</b>

                        Wir bieten elektronische Newsletter an, die Sie jederzeit freiwillig abonnieren können. Wir
                        verpflichten uns, Ihre E-Mail-Adresse vertraulich zu behandeln, und werden sie nicht an Dritte
                        weitergeben, außer in den Fällen, die im Abschnitt über die Nutzung und Verarbeitung von
                        Informationen erlaubt sind. Wir werden die per E-Mail gesendeten Informationen gemäß den geltenden
                        Gesetzen und Vorschriften aufbewahren.
                        Gemäß dem CAN-SPAM-Gesetz werden alle von uns versandten E-Mails die Identität des Absenders
                        deutlich angeben und klare Informationen darüber enthalten, wie Sie den Absender kontaktieren
                        können. Sie können sich dafür entscheiden, unseren Newsletter oder unsere Marketing-E-Mails nicht
                        mehr zu erhalten, indem Sie den in diesen E-Mails enthaltenen Anweisungen zur Abmeldung folgen oder
                        uns kontaktieren. Sie werden jedoch weiterhin wesentliche Transaktions-E-Mails erhalten.<br>

                        <b class="py-1 mt-2 d-block">Push-Benachrichtigungen</b>

                        Wir bieten Push-Benachrichtigungen an, die Sie jederzeit auch freiwillig abonnieren können. Um
                        sicherzustellen, dass die Push-Benachrichtigungen die richtigen Geräte erreichen, verwenden wir
                        einen Drittanbieter für Push-Benachrichtigungen, der sich auf ein eindeutiges Geräte-Token für Ihr
                        Gerät stützt, das vom Betriebssystem Ihres Geräts ausgestellt wird. Obwohl es möglich ist, auf eine
                        Liste von Geräte-Token zuzugreifen, werden diese Ihre Identität, die eindeutige Geräte-ID oder Ihre
                        Kontaktinformationen nicht an uns oder unseren Drittanbieter für Push-Benachrichtigungen
                        weitergeben. Wir werden die per E-Mail gesendeten Informationen gemäß den geltenden Gesetzen und
                        Vorschriften aufbewahren. Wenn Sie zu irgendeinem Zeitpunkt keine Push-Benachrichtigungen mehr
                        erhalten möchten, müssen Sie lediglich die Einstellungen Ihres Geräts entsprechend anpassen.<br>

                        <b class="py-1 mt-2 d-block">Affiliate-Links</b>

                        Wir können uns am Affiliate-Marketing beteiligen und Affiliate-Links auf der Website und den
                        Diensten haben, um Ihnen verwandte oder zusätzliche Produkte und Dienstleistungen anbieten zu
                        können. Wenn Sie auf einen Affiliate-Link klicken, wird ein Cookie in Ihrem Browser abgelegt, um die
                        Verkäufe zu Provisionszwecken zu verfolgen.<br>

                        <b class="py-1 mt-2 d-block">Links zu anderen Ressourcen</b>

                        Die Website und die Dienste enthalten Links zu anderen Ressourcen, die sich nicht in unserem Besitz
                        befinden oder von uns kontrolliert werden. Bitte beachten Sie, dass wir nicht für die
                        Datenschutzpraktiken dieser anderen Ressourcen oder Dritten verantwortlich sind. Wir empfehlen
                        Ihnen, beim Verlassen der Website und der Dienste aufmerksam zu sein und die Datenschutzerklärungen
                        jeder Ressource zu lesen, die möglicherweise personenbezogene Daten sammelt.<br>

                        <b class="py-1 mt-2 d-block">Sicherheit der Informationen</b>

                        Wir sichern die von Ihnen bereitgestellten Informationen auf Computerservern in einer kontrollierten
                        und sicheren Umgebung, die vor unbefugtem Zugriff, unbefugter Nutzung oder Offenlegung geschützt
                        ist. Wir unterhalten angemessene administrative, technische und physische Schutzmaßnahmen, um uns
                        vor unbefugtem Zugriff, unbefugter Nutzung, Änderung und Offenlegung der personenbezogenen Daten
                        unter unserer Kontrolle und in unserer Obhut zu schützen. Allerdings kann keine Datenübertragung
                        über das Internet oder ein drahtloses Netzwerk garantiert werden.<br>
                        Obwohl wir uns bemühen, Ihre persönlichen Informationen zu schützen, erkennen Sie daher an, (i) dass
                        es im Internet Sicherheits- und Datenschutzgrenzen gibt, die außerhalb unserer Kontrolle liegen;
                        (ii) dass die Sicherheit, Integrität und Vertraulichkeit aller Informationen und Daten, die zwischen
                        Ihnen und der Website und den Diensten ausgetauscht werden, nicht garantiert werden kann; und (iii)
                        dass diese Informationen und Daten trotz aller Bemühungen während der Übertragung von Dritten
                        eingesehen oder verändert werden können.
                        Da die Sicherheit personenbezogener Daten teilweise von der Sicherheit des Geräts abhängt, das Sie
                        zur Kommunikation mit uns verwenden, und von der Sicherheit, die Sie zum Schutz Ihrer
                        Identifikationsdaten verwenden, ergreifen Sie bitte geeignete Maßnahmen zum Schutz dieser Daten.<br>

                        <b class="py-1 mt-2 d-block">Verletzung von Daten</b>

                        Wenn wir erfahren, dass die Sicherheit der Website und der Dienste beeinträchtigt wurde oder dass
                        die personenbezogenen Daten der Nutzer aufgrund externer Aktivitäten, einschließlich, aber nicht
                        beschränkt auf Sicherheitsangriffe oder Betrug, an nicht verbundene Dritte weitergegeben wurden,
                        behalten wir uns das Recht vor, angemessen angemessene Maßnahmen zu ergreifen, einschließlich, aber
                        nicht beschränkt auf eine Untersuchung und Berichterstattung sowie die Benachrichtigung der
                        Strafverfolgungsbehörden und die Zusammenarbeit mit diesen Behörden. Im Falle einer Datenverletzung
                        werden wir angemessene Anstrengungen unternehmen, um die betroffenen Personen zu benachrichtigen,
                        wenn wir der Meinung sind, dass ein angemessenes Risiko besteht, dass der Nutzer aufgrund der
                        Verletzung Schaden erleidet, oder wenn die Benachrichtigung auf andere Weise gesetzlich
                        vorgeschrieben ist. In diesem Fall werden wir eine entsprechende Mitteilung auf der Website
                        veröffentlichen.<br>

                        <b class="py-1 mt-2 d-block">Änderungen und Modifikationen</b>

                        Wir behalten uns das Recht vor, diese Richtlinie oder ihre Bedingungen in Bezug auf die Website und
                        die Dienste jederzeit und nach eigenem Ermessen zu ändern. Wenn wir dies tun, werden wir das
                        Aktualisierungsdatum am Ende dieser Seite überarbeiten. Wir können Sie auch auf andere Weise nach
                        unserem Ermessen informieren, insbesondere über die von Ihnen angegebenen Kontaktinformationen.
                        Eine aktualisierte Version dieser Richtlinie tritt unmittelbar nach der Veröffentlichung der
                        überarbeiteten Richtlinie in Kraft, sofern nicht anders angegeben. Ihre fortgesetzte Nutzung der
                        Website und der Dienste nach dem Datum des Inkrafttretens der überarbeiteten Richtlinie (oder einer
                        anderen zu diesem Zeitpunkt angegebenen Handlung) stellt Ihre Zustimmung zu diesen Änderungen dar.
                        Ohne Ihre Zustimmung werden wir Ihre personenbezogenen Daten jedoch nicht in einer Weise verwenden,
                        die sich materiell von dem unterscheidet, was zum Zeitpunkt der Erfassung Ihrer personenbezogenen
                        Daten angegeben wurde.<br>

                        <b class="py-1 mt-2 d-block">Annahme dieser Richtlinie</b>

                        Sie bestätigen, dass Sie diese Richtlinie gelesen haben und alle Bedingungen und Konditionen
                        akzeptieren. Indem Sie auf die Website und die Dienste zugreifen und diese nutzen und Ihre
                        Informationen einreichen, erklären Sie sich damit einverstanden, an diese Richtlinie gebunden zu
                        sein. Wenn Sie den Bedingungen dieser Richtlinie nicht zustimmen, ist es Ihnen nicht gestattet, auf
                        die Website und die Dienste zuzugreifen oder sie zu nutzen.<br>

                        <b class="py-1 mt-2 d-block">Kontaktieren Sie uns</b>

                        Wenn Sie Fragen, Bedenken oder Beschwerden bezüglich dieser Richtlinie oder der Informationen, die
                        wir über Sie gespeichert haben, haben oder Ihre Rechte ausüben möchten, ermutigen wir Sie, uns über
                        die folgenden Kontaktdaten zu kontaktieren:
                        https://astrology-prism.com.<br>
                        Wir werden versuchen, Beschwerden und Streitigkeiten beizulegen, und werden alle angemessenen
                        Anstrengungen unternehmen, um Ihrem Wunsch nach Ausübung Ihrer Rechte so schnell wie möglich und auf
                        jeden Fall innerhalb der von den geltenden Datenschutzgesetzen vorgeschriebenen Fristen
                        nachzukommen.<br>
                        Dieses Dokument wurde am 11. April 2022 aktualisiert.
                    </p>

                </div>

            </div>
        </div>
    </div>

    <!-- new ETHISCHE REGELN--->
    <div class="f804-LU-new-astrology-final-uc modal fade user_tc_modal" id="user_tc_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="f804-LU-new-astrology-final-modal modal-content">

                <h5 class="modal-title text-white font-26 mx-auto" id="exampleModalLabel">ETHISCHE REGELN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <p class="roboto regular font-18 color-787878 lh-32">
                        <b class="mt-2 py-2 d-block">Prinzip 1: Respekt für die Person</b>
                        Die von Astrology Prism angebotenen Produkte und Dienstleistungen sind nicht für Personen bestimmt,
                        die :<br>
                        - In finanziellen Schwierigkeiten<br>
                        - Minderjährige<br>
                        - Die nicht im Vollbesitz ihrer geistigen Kräfte sind.<br>

                        <b class="mt-2 py-2 d-block">Prinzip 2: Ehrlichkeit, Integrität und Fairness</b>
                        Astrology Prism und seine Mitarbeiter verpflichten sich voll und ganz, bei der Bereitstellung ihrer
                        Produkte und Dienstleistungen für ihre Kunden die Grundsätze der Ehrlichkeit, Integrität und
                        Fairness einzuhalten.<br>
                        Alle Mitarbeiter des Unternehmens sorgen dafür, dass Geschäftsvorgänge, Dienstleistungsanfragen,
                        Einkäufe oder die Einstellung von Mitarbeitern offen, fair und unparteiisch behandelt werden.<br>
                        Diese Charta legt die Verhaltensstandards fest, die von allen Mitarbeitern erwartet werden, sowie
                        die Politik des Unternehmens in Bezug auf die Annahme von Vorteilen und den Umgang mit
                        Interessenkonflikten bei der Ausübung offizieller Funktionen.<br>
                        Diese Charta gilt auch für Zeit- und Teilzeitkräfte, die von der Gesellschaft beschäftigt werden.
                    </p>


                </div>

            </div>
        </div>
    </div>

    <!-- GDPR modal --->
    <div class="f804-LU-new-astrology-final-tell modal fade contact_modal" id="contact_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="f804-LU-new-astrology-final-tell-div modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <h5 class="f804-LU-new-astrology-final-tell-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">GDPR</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <p class="roboto regular font-18 color-787878 lh-32"></p>{{ print_dynamic_variable('address') }}<br><br>

                    <p class="roboto regular font-18 color-787878 lh-32">
                        Wenn Sie im Europäischen Wirtschaftsraum („EWR“) ansässig sind, haben Sie bestimmte
                        Datenschutzrechte und wir werden uns bemühen, angemessene Schritte zu unternehmen, damit Sie die
                        Nutzung Ihrer personenbezogenen Daten korrigieren, ändern, löschen oder einschränken können . Wenn
                        Sie wissen möchten, welche personenbezogenen Daten wir über Sie gespeichert haben, und wenn Sie
                        möchten, dass diese aus unseren Systemen entfernt werden, kontaktieren Sie uns bitte. Ihnen stehen
                        unter Umständen folgende Datenschutzrechte zu:<br><br>
                        (i) Sie haben das Recht, Ihre Einwilligung zu widerrufen, wenn Sie zuvor der Verarbeitung Ihrer
                        personenbezogenen Daten zugestimmt haben. Soweit die Rechtsgrundlage für unsere Verarbeitung Ihrer
                        personenbezogenen Daten die Einwilligung ist, haben Sie das Recht, diese Einwilligung jederzeit zu
                        widerrufen. Der Widerruf berührt nicht die Rechtmäßigkeit der bis zum Widerruf erfolgten
                        Verarbeitung.<br><br>
                        (ii) Sie haben das Recht zu erfahren, ob Ihre personenbezogenen Daten von uns verarbeitet werden,
                        Informationen über bestimmte Aspekte der Verarbeitung zu erhalten und eine Kopie Ihrer verarbeiteten
                        personenbezogenen Daten zu erhalten.<br><br>
                        (iii) Sie haben das Recht, die Richtigkeit Ihrer Informationen zu überprüfen und zu verlangen, dass
                        sie aktualisiert oder korrigiert werden. Sie haben auch das Recht zu verlangen, dass wir alle
                        personenbezogenen Daten vervollständigen, die Sie für unvollständig halten.<br><br>
                        (iv) Sie haben das Recht, der Verarbeitung Ihrer Daten zu widersprechen, wenn die Verarbeitung auf
                        einer anderen Rechtsgrundlage als der Einwilligung beruht. Wenn personenbezogene Daten im
                        öffentlichen Interesse, in Ausübung einer uns übertragenen behördlichen Befugnis oder für die von
                        uns verfolgten berechtigten Interessen verarbeitet werden, können Sie dieser Verarbeitung aus einem
                        bestimmten situationsbezogenen Grund widersprechen, um den Widerspruch zu rechtfertigen. Sie sollten
                        jedoch wissen, dass Sie, wenn Ihre personenbezogenen Daten für Direktmarketingzwecke verarbeitet
                        werden, dieser Verarbeitung jederzeit ohne Angabe von Gründen widersprechen können. Um
                        herauszufinden, ob wir personenbezogene Daten für Direktmarketingzwecke verarbeiten, lesen Sie bitte
                        die entsprechenden Abschnitte dieser Richtlinie.<br><br>
                        (v) Sie haben unter bestimmten Umständen das Recht, die Verarbeitung Ihrer personenbezogenen Daten
                        einzuschränken. Zu diesen Umständen gehören: Die Richtigkeit Ihrer personenbezogenen Daten wird von
                        Ihnen bestritten und wir müssen ihre Richtigkeit überprüfen; die Verarbeitung unrechtmäßig ist, Sie
                        aber die Löschung Ihrer personenbezogenen Daten ablehnen und stattdessen die Einschränkung ihrer
                        Verwendung verlangen; Wir benötigen Ihre personenbezogenen Daten für die Zwecke der Verarbeitung
                        nicht mehr, Sie benötigen sie jedoch zur Geltendmachung, Ausübung oder Verteidigung Ihrer
                        Rechtsansprüche; Sie haben der Verarbeitung widersprochen, bis überprüft wurde, ob unsere
                        berechtigten Gründe Vorrang vor Ihren berechtigten Gründen haben. Wenn die Verarbeitung
                        eingeschränkt ist, werden diese personenbezogenen Daten entsprechend gekennzeichnet und mit Ausnahme
                        der Speicherung nur mit Ihrer Einwilligung oder zur Geltendmachung, Ausübung oder Verteidigung von
                        Rechtsansprüchen, zum Schutz der Rechte einer anderen natürlichen oder juristischen Person oder
                        verarbeitet aus Gründen des großen öffentlichen Interesses.<br><br>
                        (vi) Sie haben unter bestimmten Umständen das Recht, Ihre personenbezogenen Daten von uns löschen zu
                        lassen. Zu diesen Umständen gehören: Die personenbezogenen Daten sind für die Zwecke, für die sie
                        erhoben oder anderweitig verarbeitet wurden, nicht mehr erforderlich; Sie widerrufen Ihre
                        Einwilligung zur einwilligungsbasierten Verarbeitung; Sie widersprechen der Verarbeitung nach
                        bestimmten Regeln des anwendbaren Datenschutzrechts; die Verarbeitung dient Direktmarketingzwecken;
                        und die personenbezogenen Daten unrechtmäßig verarbeitet wurden. Es gibt jedoch Ausnahmen vom Recht
                        auf Löschung, etwa wenn die Verarbeitung erforderlich ist: zur Ausübung des Rechts auf freie
                        Meinungsäußerung und Information; um einer gesetzlichen Verpflichtung nachzukommen; oder zur
                        Geltendmachung, Ausübung oder Verteidigung eines Rechtsanspruchs.<br><br>
                        (vii) Sie haben das Recht, Ihre personenbezogenen Daten, die Sie uns bereitgestellt haben, in einem
                        strukturierten, gängigen und maschinenlesbaren Format zu erhalten und, sofern technisch machbar,
                        ohne Behinderung unsererseits an einen anderen Verantwortlichen übertragen zu lassen dass eine
                        solche Übertragung die Rechte und Freiheiten anderer Personen nicht beeinträchtigt.<br><br>
                        (viii) Sie haben das Recht, bei einer Datenschutzbehörde eine Beschwerde über unsere Erfassung und
                        Verwendung Ihrer personenbezogenen Daten einzureichen. Wenn Sie mit dem Ergebnis Ihrer Beschwerde
                        direkt bei uns nicht zufrieden sind, haben Sie das Recht, eine Beschwerde bei Ihrer örtlichen
                        Datenschutzbehörde einzureichen. Für weitere Informationen wenden Sie sich bitte an Ihre lokale
                        Datenschutzbehörde im EWR. Diese Bestimmung gilt unter der Voraussetzung, dass Ihre
                        personenbezogenen Daten automatisiert verarbeitet werden und die Verarbeitung auf Ihrer
                        Einwilligung, auf einem Vertrag, an dem Sie beteiligt sind, oder auf vorvertraglichen
                        Verpflichtungen davon beruht.<br><br>
                        Hinweis: Wenn Sie die E-Mail nicht erhalten, überprüfen Sie bitte Ihren Spam.<br><br>
                        1) Senden Sie Ihre Nachricht an <a href="mailto:dpo@astrology-prism.com">dpo@astrology-prism.com</a>
                        <br><br>
                        2) Damit wir Ihre Informationen finden können, geben Sie bitte Folgendes an:<br>
                        &emsp;Vorname: :<br>
                        &emsp;Nachname:<br>
                        &emsp;Geburtsdatum:(dd/mm/yyyy):<br>
                        &emsp;E-Mail :<br>
                        &emsp;Telefon :<br><br>
                        3) Bitte reichen Sie Ihre Anfrage mit folgendem Grund ein:<br>

                        &emsp;- Auskunftsrecht<br>
                        &emsp;- Widerrufsrecht<br>
                        &emsp;- Recht auf Löschung („Recht auf Vergessenwerden“) (Beispiel: Löschung personenbezogener
                        Daten, Kontoschließung etc.)<br>
                        &emsp;- Erbrecht<br>
                        &emsp;- Widerspruchsrecht<br>
                        &emsp;- Andere Anfrage<br>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Cookie-Richtlinie modal -->
    <div class="f804-LU-new-astrology-final-tell modal fade " id="cookie_policy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="f804-LU-new-astrology-final-tell-div modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <h5 class="f804-LU-new-astrology-final-tell-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">Cookie-Richtlinie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <p class="roboto regular font-18 color-787878 lh-32">
                        Diese Cookie-Richtlinie ("Richtlinie") beschreibt, was Cookies sind und wie sie von der Website
                        https://astrology-prism.com ("Website" oder "Dienst") und allen damit verbundenen Produkten und
                        Dienstleistungen (zusammen "Dienste") verwendet werden. Diese Richtlinie ist eine rechtlich bindende
                        Vereinbarung zwischen Ihnen ("Nutzer", "Sie" oder "Ihr") und Astrology-Prism ist eine Marke von
                        Astroveo B.V. ("Astrology-Prism ist eine Marke von Astroveo B.V.", "wir", "uns" oder "unser"). Wenn
                        Sie diese Vereinbarung im Namen eines Unternehmens oder einer anderen juristischen Person
                        abschließen, erklären Sie, dass Sie die Befugnis haben, diese juristische Person an diese
                        Vereinbarung zu binden; in diesem Fall beziehen sich die Begriffe "Nutzer", "Sie" oder "Ihr" auf
                        diese juristische Person. Wenn Sie nicht über diese Befugnis verfügen oder den Bedingungen dieser
                        Vereinbarung nicht zustimmen, dürfen Sie diese Vereinbarung nicht akzeptieren und nicht auf die
                        Website und die Dienste zugreifen und sie nutzen. Sie sollten diese Richtlinie lesen, um zu
                        verstehen, welche Arten von Cookies wir verwenden, welche Informationen wir mithilfe von Cookies
                        sammeln und wie diese Informationen verwendet werden. Sie beschreibt außerdem, welche
                        Wahlmöglichkeiten Sie haben, um die Verwendung von Cookies zu akzeptieren oder abzulehnen. Weitere
                        Informationen darüber, wie wir Ihre personenbezogenen Daten verwenden, speichern und sichern, finden
                        Sie in unserer Datenschutzrichtlinie.<br>

                        <b class="mt-2 py-2 d-block">Was sind Cookies?</b>

                        Cookies sind kleine, in Textdateien gespeicherte Datenelemente, die auf Ihrem Computer oder anderen
                        Geräten gespeichert werden, wenn Webseiten in einem Browser geladen werden. Sie werden häufig
                        verwendet, um sich an Sie und Ihre Vorlieben zu erinnern, entweder für einen einzigen Besuch
                        (mithilfe eines "Sitzungscookies") oder für mehrere wiederholte Besuche (mithilfe eines "dauerhaften
                        Cookies").
                        Sitzungscookies sind temporäre Cookies, die während Ihres Besuchs auf der Website verwendet werden,
                        und sie verfallen, wenn Sie den Webbrowser schließen.<br>
                        Dauerhafte Cookies werden verwendet, um sich Ihre Präferenzen auf unserer Website zu merken, und
                        bleiben auf Ihrem Desktop-Computer oder Mobilgerät, auch nachdem Sie den Browser geschlossen oder
                        Ihren Computer neu gestartet haben. Sie sorgen dafür, dass Sie beim Besuch der Website und der
                        Dienste eine einheitliche und effektive Erfahrung machen.<br>
                        Cookies können von der Website gesetzt werden ("Erstanbieter-Cookies") oder von Dritten, z. B.
                        solchen, die Inhalte servieren oder Werbe- oder Analysedienste auf der Website bereitstellen
                        ("Drittanbieter-Cookies"). Diese Dritten können Sie erkennen, wenn Sie unsere Website besuchen und
                        auch, wenn Sie bestimmte andere Websites besuchen. Hier können Sie mehr über Cookies und ihre
                        Funktionsweise erfahren.<br>

                        <b class="mt-2 py-2 d-block">Welche Art von Cookies verwenden wir?</b>
                        - Cookies für die Funktionalität<br>
                        Funktions-Cookies ermöglichen es uns, die Website und die Dienste gemäß Ihren Entscheidungen zu
                        betreiben. Beispielsweise erkennen wir Ihren Benutzernamen und erinnern uns bei Ihren nächsten
                        Besuchen daran, wie Sie die Website und die Dienste angepasst haben.<br>

                        <b class="mt-2 py-2 d-block">Welche Möglichkeiten haben Sie in Bezug auf Cookies?</b>
                        Wenn Ihnen die Idee von Cookies oder bestimmten Arten von Cookies nicht gefällt, können Sie die
                        Einstellungen Ihres Browsers so ändern, dass bereits gesetzte Cookies gelöscht und keine neuen
                        Cookies akzeptiert werden. Wie Sie das tun, erfahren Sie unter internetcookies.com.
                        Beachten Sie jedoch, dass Sie, wenn Sie Cookies löschen oder nicht akzeptieren, möglicherweise nicht
                        alle von der Website und den Diensten angebotenen Funktionen nutzen können.<br>

                        <b class="mt-2 py-2 d-block">Änderungen und Modifikationen</b>

                        Wir behalten uns das Recht vor, diese Richtlinie oder ihre Bedingungen in Bezug auf die Website und
                        die Dienstleistungen jederzeit und nach eigenem Ermessen zu ändern. Wenn wir dies tun, werden wir
                        das Aktualisierungsdatum am Ende dieser Seite überarbeiten. Wir können Sie auch auf andere Weise
                        nach unserem Ermessen informieren, insbesondere über die von Ihnen angegebenen Kontaktdaten.<br>
                        Eine aktualisierte Version dieser Richtlinie tritt unmittelbar nach der Veröffentlichung der
                        überarbeiteten Richtlinie in Kraft, sofern nicht anders angegeben. Ihre fortgesetzte Nutzung der
                        Website und der Dienste nach dem Datum des Inkrafttretens der überarbeiteten Richtlinie (oder einer
                        anderen zu diesem Zeitpunkt angegebenen Handlung) stellt Ihre Zustimmung zu diesen Änderungen
                        dar.<br>

                        <b class="mt-2 py-2 d-block">Zustimmung zu dieser Richtlinie</b>

                        Sie bestätigen, dass Sie diese Richtlinie gelesen haben und alle Bedingungen und Konditionen
                        akzeptieren. Indem Sie auf die Website und die Dienste zugreifen und diese nutzen, erklären Sie sich
                        damit einverstanden, an diese Richtlinie gebunden zu sein. Wenn Sie den Bedingungen dieser
                        Richtlinie nicht zustimmen, ist es Ihnen nicht gestattet, auf die Website und die Dienste
                        zuzugreifen oder sie zu nutzen.<br>

                        <b class="mt-2 py-2 d-block">Kontaktieren Sie uns</b>

                        Wenn Sie Fragen, Bedenken oder Beschwerden bezüglich dieser Richtlinie oder der Verwendung von
                        Cookies haben, empfehlen wir Ihnen, uns über
                        die folgenden Kontaktdaten zu kontaktieren:<br>
                        https://astrology-prism.com<br>
                        Dieses Dokument wurde zuletzt am 11. April 2022 aktualisiert.
                    </p>
                </div>

            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js "></script>
    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/custom.js"></script>

    <!-- pop up -->
    <script>
        $(document).ready(function() {
            $(".step_2_prev").click(function() {
                $("#step_2").hide();
                $("#main_section").removeClass('d-none');
            });
            $(".privacy_btn_open").click(function() {
                $('#privacy_modal').modal('show');
            });
            $(".rules_btn_open").click(function() {
                $('#rules_modal').modal('show');
            });
            $(".gdpr_btn_open").click(function() {
                $('#gdpr_modal').modal('show');
            });
            $(".cookie_btn_open").click(function() {
                $('#cookie_modal').modal('show');
            });
            $(".terms_btn_open").click(function() {
                $('#terms_modal').modal('show');
            });



        });
    </script>
    <script>
        function resizeIframe(obj) {
            var iheight = Math.round($(window).innerHeight() / 2);
            if (obj.contentWindow.document.body.scrollHeight > iheight) {
                iheight = obj.contentWindow.document.body.scrollHeight;
                $('#legal_modal_body div')[0].style.overflowY = 'scroll';
            } else {
                $('#legal_modal_body div')[0].style.overflowY = 'hidden';
            }
            obj.style.height = iheight + 'px';
            obj.contentWindow.document.body.style.margin = 0;
            obj.contentWindow.document.body.style.padding = 0;
        }

        function launchModal(el) {

            var url = el.attr('href');
            var title = el.html();
            var height = Math.round($(window).innerHeight() / 2);

            $('#legal_modal_title').html(title);
            $('#legal_modal_body').html('<div style="-webkit-overflow-scrolling: touch;overflow-y: scroll;height:' + height + 'px"><iframe onload="resizeIframe(this)" width="100%" frameborder="0" style="overflow:hidden;" src="' + url + '"></iframe></div>');
            $('#legal_modal').modal('show');

        }

        $(function() {

            var modal_exists = typeof $().modal === 'function';

            // Check if jQuery supports $().on() function
            if (typeof $().on === 'function') {

                $('[data-target="info_modal"], .impressumLink, .conditionsLink, .privacyLink, .cookieLink').on('click', function(e) {

                    if (modal_exists) {
                        e.preventDefault();
                        return launchModal($(this));
                    }
                });

                return false;
            } else {

                $('[data-target="info_modal"], .impressumLink, .conditionsLink, .privacyLink, .cookieLink').click(function(e) {

                    if (modal_exists) {
                        e.preventDefault();
                        return launchModal($(this));
                    }
                });

                return false;
            }
        });
    </script>


    <script type="text/javascript">
        var BASE_URL = "https://airprojects.pro/bram/cards/";
        var DEFAULT_PATH_CARDS = BASE_URL + "{{$asset_path}}assets/uicommon/images/tarot/cartas1/en/";

        var is_japan = false;

        $(function() {

            init_live_validation($('form'));
            steps.init();

            // Reversed name
            if (is_japan) $('#first_name_container').insertAfter('#last_name_container');

            $('#card-holder').jDealCards({
                cardBackStyle: 'blue',
                cardDeck: 'angels',
                excludeCards: '13,15',
                totalCards: mobileAndTabletcheck() ? 9 : 9,
                totalResults: 3,
                holderColor: 'rgb(255 255 255 / 100%)',
                dealSpeed: 100,
                cardPerspective: true,
                axisFlip: 'x',
                perspectiveSettings: {
                    perspective: '500px',
                    rotation: 'x',
                    degrees: '45',
                },
                resultName: 1,
                callback: function() {

                    $('.card_div').addClass('d-none');
                    $('#step_2').removeClass('d-none');

                }
            });
        });

        function sendDataLayer(e, c, a, l) {
            return false;

            if (typeof dataLayer !== 'undefined') {

                dataLayer.push({
                    'event': e,
                    'category': c,
                    'action': a,
                    'label': l,
                });
            }
        }

        function validateStep(step, callback) {

            if (validate_gender(step) && validate_date(step) && validateRequiredInput(step)) {

                return callback();
            }
        }
    </script>

    <script>
        //window.dataLayer = window.dataLayer || [];
        //dataLayer.push({ 'event': 'landing_page', 'c_origin': 'ORGANIC' });
    </script> <!-- Modal -->


    <script>
        var modalEmailObject = undefined;
        var modalEmailEmail = "";
        var modalEmailCallback = undefined;
        var reCaptchaCallback = undefined;
        var emailChecked = false;
        var formOk = false;
        var insist = false;
        var flag = true;
        var ajaxFlag = true; //This will control that there's only one subcription call at a

        function startReCaptchaValidation(callback) {
            reCaptchaCallback = callback;
            grecaptcha.execute();
        }

        function endReCaptchaValidation(form) {
            checkFormAndMail(form);
        }

        function isValidReCaptcha() {
            if (typeof grecaptcha !== "undefined" && $('.g-recaptcha').length > 0) {
                if (grecaptcha.getResponse() == '') {
                    return false;
                } else {
                    return true;
                }
            } else return true; //ReCaptcha not loaded, skip ReCaptcha validation flow
        }

        //Will be called by reCaptcha once validation finishes
        function runReCaptchaCallback(reCaptchaToken) {
            if (reCaptchaToken != '') {
                reCaptchaCallback();
            }
        }


        function getTrackingData() {
            var tracking_data = '';
            var inputTrackingData = $('input[name="tracking_data"]');
            if (inputTrackingData.length > 0) {
                tracking_data = inputTrackingData.val();
            }
            return tracking_data;
        }
    </script>


    <!-- JS Dependencies -->
    <script defer type="text/javascript" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/steps_manager.min.js?v=1.0.56"></script>
    <script src="{{$asset_path}}assets/uicommon/js/libs/jquery/plugins/jdealcards/5.3.0/jDealCards.min.js?v=1.0.56"></script>
    <!-- <script type="text/javascript" src="{{$asset_path}}assets/uicommon/js/libs/bootstrap/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/js/libs/jquery/plugins/mailcheck/1.1/mailcheck.min.js"></script>
    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/js/libs/internal/lib.min.js?v=1.0.56"></script>
    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/js/libs/internal/form_validation/2.0.0/form_validation.min.js?v=1.0.56"></script>
    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/js/libs/respond/1.4.2/respond.min.js"></script>
</body>

</html>