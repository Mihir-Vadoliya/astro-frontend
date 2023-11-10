@php($asset_path = '/landers/landingpages/268012/')
@php($srcImg = "/landers/sets/set32/")
@include('/landers/terms/dynamic/dynamic')
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- required meta tag -->
    <meta name="author" content="Astrology Lotus">
    <meta name="title" content="Astrology Lotus">
    <meta name="keyword" content="Astrology Lotus">
    <meta name="description" content="Astrology Lotus">

    <meta property="og:title" content="Astrology Lotus" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="astro.astrology-lotus.com" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="104" />
    <meta property="og:image:height" content="87" />
    <meta property="og:site_name" content="Astrology Lotus" />
    <meta property="og:description" content="Astrology Lotus" />

    <!-- Bootstrap CSS -->
    <link href="{{$asset_path}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{$asset_path}}assets/css/style.css" rel="stylesheet">
    <!-- favicon -->
    <link rel='shortcut icon' href='{{$asset_path}}assets/images/favicon.png'>
    <title>Astrology Lotus</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Jost:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{$asset_path}}assets/js/jquery-3.6.3.min.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>

    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif

    @include('scripts.pushnamisubs.astro_astrology_lotus')
</head>

<body class="main_bg">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- header start -->
    <header class="header pt-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-2 mt-lg-5 mt-sm-1 mb-3 text-center">
                    <a class="" href="https://astro.astrology-lotus.com"><img src="{{$asset_path}}assets/images/logo.png"></a>
                </div>
                <div class="col-12 col-md-10">
                    <h1 class="Mersad fw-normal text-center font-60 text-white main-title px-4"><span class="text-B5815E">Clarté, orientation</span>
                        Et <span class="text-B5815E">Tranquillité d'esprit</span></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- select sign start -->
    <section class="main_banner">
        <form class="container main_form position-relative sign_show" name="g" id="nameForm" method="post" action="{{request()->url()}}/insertlead">
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

            <!-- choose sign -->
            <div class="choose_sign_section" id="step_1">
                <h2 class="text-white text-center Mersad text-uppercase subtitle fw-normal font-20">Choisissez votre <span class="text-B5815E">signe du Zodiaque</span></h2>
                <div class="row mx-0 w-100 justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="row mx-0 w-100 gtm-screen-zodiac">
                            <div class="col-4 col-md-3 col-lg-2" data-sign="aries">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="aries">
                                    <img src="{{$srcImg}}aries-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="aries">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Bélier</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Mar 21 - Avr 20</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="taurus">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="taurus">
                                    <img src="{{$srcImg}}Taurus-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="taurus">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Taureau</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Avr 21 - Mai 20</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="gemini">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="gemini">
                                    <img src="{{$srcImg}}gemini-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="gemini">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Gémeaux</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Mai 21 - Jui 20</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="cancer">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="cancer">
                                    <img src="{{$srcImg}}Cancer-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="cancer">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Cancer</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Jui 21 - Juil 22</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="leo">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="leo">
                                    <img src="{{$srcImg}}Leo-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="leo">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Lion</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Juil 23 - Aou 20</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2" data-sign="virgo">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="virgo">
                                    <img src="{{$srcImg}}Virgo-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="virgo">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Vierge</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Aou 23 - Sep 21</p>
                            </div>

                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="libra">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="libra">
                                    <img src="{{$srcImg}}Libra-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="libra">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Balance</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Sep 22 - Oct 20</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="scorpio">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="scorpio">
                                    <img src="{{$srcImg}}Scorpio-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="scorpio">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Scorpion</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Oct 21 - Nov 20</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="sagittarius">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="sagittarius">
                                    <img src="{{$srcImg}}Sagittarius-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="sagittarius">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Sagittaire</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Nov 21 - Déc 20</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="capricorn">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="capricorn">
                                    <img src="{{$srcImg}}Capricorn-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="capricorn">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Capricorne</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Déc 22 - Jan 21</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="aquarius">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="aquarius">
                                    <img src="{{$srcImg}}Aquarius-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="aquarius">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Verseau</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Jan 22 - Fév 18</p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 pt-30" data-sign="pisces">
                                <label class="radio_cus_button gtm-zodiac" data-gtm-value="pisces">
                                    <img src="{{$srcImg}}Pisces-icon.png" class=""><br>
                                    <input type="radio" name="astro" value="pisces">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="mb-0 position-relative text-center z-index-1 sign_style">Poissons</p>
                                <p class="mb-0 position-relative text-center z-index-1  sign_sub_text">Fév 09 - Mar 20</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- choose sign end -->

            <!-- step2 start -->
            <div class="select_gender gtm-screen-gender d-none" id="step_2">
                <div class="container-fluid">
                    <h1 class="text-white fw-light Mersad mb-0 main_title text-center text-uppercase mb-5"><span class="text-white fw-500">Quel est votre genre ?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/male-icon.png" class="text-center me-3 position-relative mb-2 pt-1 z-index-1">
                                        <span class=" position-relative z-index-1 Mersad color-c6dee8 fw-bold medium font24">Homme</span><br>
                                        <input type="radio" name="gender" value="M" checked data-gtm-value="male">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/female-icon.png" class="me-2 position-relative mb-2 z-index-1 ">
                                        <span class=" position-relative z-index-1 Mersad color-c6dee8 fw-bold medium font24">Femme</span><br>
                                        <input type="radio" name="gender" value="F" data-gtm-value="female">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <span class="error" id="step_2_error"></span>
                                <div class="col-12 pt-50 text-start-step-2">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item px-lg-3">
                                            <a href="javascript:void(0);" class="bck_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-white step_2_prev" onclick="back(1,2);">Retour</a>
                                        </li>
                                        <li class="list-inline-item px-lg-2">
                                            <a href="javascript:void(0);" class="continue_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-black step_2_next">CONTINUER</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step2 end -->

            <!-- step3 start -->
            <div class="select_gender gtm-screen-birthdate d-none" id="step_3">
                <div class="container-fluid">
                    <h1 class="text-black fw-light Mersad mb-0 main_title text-center text-uppercase mb-5"><span class="text-white fw-500">Quelle est votre date de naissance ?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <select class="form-select born_input_field font24 medium Mersad color-c6dee8 day" aria-label="Default select example " name="day">
                                        <option value="" selected="selected">Jour</option>
                                        @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select born_input_field font24 medium Mersad color-c6dee8 month" aria-label="Default select example " name="month">
                                        <option value="" selected="selected">Mois</option>
                                        @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select born_input_field font24 medium Mersad color-c6dee8 year" aria-label="Default select example " name="year">
                                        <option value="" selected="selected">Année</option>
                                        @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <span class="error d-none" id="step_3_error">Veuillez indiquer la date complète</span>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-white step_3_prev" onclick="back(2,3);">Retour</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-black step_3_next">CONTINUER</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step3 end -->

            <!-- step4 start -->
            <div class="select_gender gtm-screen-city d-none" id="step_4">
                <div class="container-fluid">
                    <h1 class="text-white fw-light Mersad mb-0 main_title text-center text-uppercase mb-5"><span class="text-white fw-500">Dans quelle ville êtes-vous né ?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <input type="text" placeholder="Dans quelle ville êtes-vous né ?" name="city" class="born_input_field font24 medium Mersad text-center color-c6dee8">
                                    <span class="error d-none" id="step_4_error">Cela vous aidera à rendre votre voyance plus précise.</span>

                                </div>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-white step_4_prev" onclick="back(3,4);">Retour</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-black step_4_next">CONTINUER</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step4 end -->

            <!-- step5 start -->
            <div class="select_gender gtm-screen-birthtimeknown d-none" id="step_5">
                <div class="container-fluid">
                    <h1 class="text-black fw-light Mersad mb-0 main_title text-center text-uppercase mb-5"><span class="text-white fw-500">Savez-vous à quelle heure vous êtes né ?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <ul class="list-inline list-unstyled mb-xxl-5">
                                        <li class="list-inline-item know-birth-time-yes">
                                            <label class="choose_yesno_btn">
                                                <span class="position-relative z-index-1 text-uppercase Mersad color-c6dee8  medium font24">Oui</span><br>
                                                <input type="radio" name="birth_time_know" value="yes" data-gtm-value="yes">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li class="list-inline-item know-birth-time-no">
                                            <label class="choose_yesno_btn">
                                                <span class=" position-relative z-index-1 text-uppercase Mersad color-c6dee8  medium font24">Non</span><br>
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
                                            <a href="javascript:void(0);" class="bck_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-white step_5_prev" onclick="back(4,5);">Retour</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-black step_5_next">CONTINUER</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step5 end -->

            <!-- step6 start -->
            <div class="select_gender gtm-screen-birthtime d-none" id="step_6">
                <div class="container-fluid">
                    <h1 class="text-white fw-light Mersad mb-0 main_title text-center text-uppercase mb-5"><span class="text-black fw-500">Veuillez saisir les heures et les minutes le plus précisément possible</span>
                    </h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <select class="form-select born_input_field font24 medium Mersad color-c6dee8 hour" aria-label="Default select example " name="tobhr">
                                        <option value="" selected="selected">Heure</option>
                                        @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-select born_input_field font24 medium Mersad color-c6dee8 min" aria-label="Default select example" name="tobmin">
                                        <option value="" selected="selected">Minutes</option>
                                        @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <span class="error" id="step_6_error"></span>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-white step_6_prev" onclick="back(5,6);">Retour</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-black step_6_next">CONTINUER</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step6 end -->

            <!-- step7 start -->
            <div class="select_gender gtm-screen-concern d-none" id="step_7">
                <div class="container-fluid">
                    <h1 class="text-white fw-light Mersad mb-0 main_title text-center text-uppercase mb-5"><span class="text-white fw-500">Quelles sont vos préoccupations ?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  Mersad color-c6dee8  medium font22">Travail</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="1" checked data-gtm-value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  Mersad color-c6dee8  medium font22">Finance</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="2" data-gtm-value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class="position-relative z-index-1  Mersad color-c6dee8 medium font22">Amour</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="3" data-gtm-value="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class="position-relative z-index-1  Mersad color-c6dee8 medium font22">Général</span><br>
                                        <input class="gtm-concern" type="radio" name="concerns" value="4" data-gtm-value="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-white step_7_prev">Retour</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-black step_7_next">CONTINUER</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step7 end -->

            <!-- step8 start -->
            <div class="select_gender gtm-screen-name d-none" id="step_8">
                <div class="container-fluid">
                    <h1 class="text-black fw-light Mersad mb-0 main_title text-center text-uppercase mb-5"><span class="text-white fw-500">Quel est votre nom ?</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-6">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input type="text" placeholder="Prénom" name="first_name" class="born_input_field font24 medium Mersad color-c6dee8">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Nom" name="last_name" class="born_input_field font24 medium Mersad color-c6dee8">
                                </div>
                                <span class="error d-none" id="step_8_error">Indiquez votre nom s'il vous plait</span>
                                <div class="col-12 pt-50 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-white step_8_prev" onclick="back(7,8);">Retour</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn Mersad medium font18 text-decoration-none text-center d-inline-block text-black step_8_next">CONTINUER</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step8 end -->

            <!-- step9 start -->
            <div class="select_gender gtm-screen-email d-none" id="step_9">
                <div class="container-fluid">
                    <h1 class="text-white fw-light Mersad mb-0 main_title text-center text-uppercase mb-5"><span class="text-white fw-500">Quel est votre email pour recevoir votre voyance personnalisée ?</span>
                    </h1>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <input type="email" placeholder="E-mail" name="email" class="born_input_field text-center font24 medium Mersad color-c6dee8 input-email gtm-email" required>
                                    <!-- <span class="error" id="step_9_error d-none">Gelieve dit veld in te vullen</span> -->
                                </div>
                                
                                <div class="col-12 pt-3 text-center">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item me-0 w-100">
                                            <button type="submit" class="gtm-email-continue continue_btn Mersad medium font20  text-decoration-none text-center d-inline-block w-100 continue_btn-border px-lg-2 px-xxl-3  text-black step_9_next">
                                                <i class="fa fa-hand-o-right px-2"></i>
                                                <b>Obtenez votre voyance complète GRATUITE</b>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step9 end -->

            <!-- step11 pending screen start -->
            <div class="main_banner gtm-screen-pending d-none mb-5 mt-5" id="step_11">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 pe-xxl-5 text-center text-white">
                            @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')

                        </div>
                    </div>
                </div>
            </div>
            <!-- step10 end -->

            <!-- step10 start -->
            <style>
                .gtm-screen-thankyou li:before {
                    background-color: white;
                    top: 6px;
                }

                .gtm-screen-thankyou ul {
                    margin-left: 12px;
                    list-style-type: none;
                    padding-left: 0rem;
                }

                .gtm-screen-thankyou p {
                    margin-left: 6px;
                }
            </style>
            <div class="main_banner gtm-screen-thankyou mb-5 mt-5 d-none" id="step_10">
                @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
            </div>
            <!-- step10 end -->
        </form>
    </section>
    <!-- select sign end -->

    <!-- disclaimer start -->
    <section class="disclaimer" style="margin-top: 300px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-10">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3 class="dis_title"><?= print_dynamic_variable('disclaimer_title_fr') ?></h3>
                                <p class="dis_text fw-normal">
                                    <?= print_dynamic_variable('disclaimer_text_fr') ?> <?= print_dynamic_variable('address') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- disclaimer end -->

    <footer class="">
        <div class="container">
            <div class="text-center">
                <ul class="list-unstyled list-inline footer_link mb-0">
                    <li class="list-inline-item">
                        <a href="https://astro.astrology-lotus.com">HOME</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0)" class="tos_modal_open">CONDITIONS D'UTILISATION</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0)" class="cnt_pp_open text-uppercase">Politique de confidentialité</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0)" class="help_pp_open">RÈGLES ÉTHIQUES</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0)" class="terms_pp_open">GDPR</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0)" class="cookie_policy_btn">POLITIQUE EN MATIÈRE DE COOKIES</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- terms of services modal -->
    @include('/landers/terms/astrology-lotus/fr/terms')
    <!-- privacy policy modal -->
    @include('/landers/terms/astrology-lotus/fr/privacy-policy')
    <!-- privacy policy modal 2-->
    @include('/landers/terms/astrology-lotus/fr/privacy-policy-2')
    <!-- rules modal -->
    @include('/landers/terms/astrology-lotus/fr/rules')
    <!-- gdpr modal -->
    @include('/landers/terms/astrology-lotus/fr/gdpr')
    <!-- cookie policy modal -->
    @include('/landers/terms/astrology-lotus/fr/cookies')



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
    <!-- Astrology offerpage custom js -->
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js "></script>
    <script>


    </script>
</body>

</html>
