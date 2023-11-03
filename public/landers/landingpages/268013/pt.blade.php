@php($asset_path = '/landers/landingpages/268013/')
@php($srcImg = "/landers/sets/set40/")
@include('/landers/terms/dynamic/dynamic')
    <!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- required meta tag -->
    <meta name="author" content="Starsandthemoon-2020">
    <meta name="title" content="Starsandthemoon-2020">
    <meta name="keyword" content="Starsandthemoon-2020">
    <meta name="description" content="Starsandthemoon-2020">

    <meta property="og:title" content="Starsandthemoon-2020"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="starsandthemoon-2020.com"/>
    <meta property="og:image" content=""/>
    <meta property="og:image:width" content="104"/>
    <meta property="og:image:height" content="87"/>
    <meta property="og:site_name" content="Starsandthemoon-2020"/>
    <meta property="og:description" content="Starsandthemoon-2020"/>

    <!-- Bootstrap CSS -->
    <link href="{{$asset_path}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{$asset_path}}assets/css/style.css" rel="stylesheet">
    <!-- favicon -->
    <link rel='shortcut icon' href='{{$asset_path}}assets/images/favicon.png'>
    <title>Astrology Reading</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Livvic:wght@300;400;700&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{$asset_path}}assets/js/jquery-3.6.3.min.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>

    @if($gtmContainerId)
        @include('google.gtmcontainer')
    @endif
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMLWT7W"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="main_bg">
    <!-- header start -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="pt-3">
                        <a href="https://starsandthemoon-2020.com"><img src="{{$asset_path}}assets/images/logo.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <form name="g" id="nameForm" class="main_form position-relative sign_show" method="post"
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

        <!-- banner start -->
        <section class="main_banner" id="step_1_banner">
            <div class="container">
                <div class="row mx-0 w-100">
                    <div class="col-12 col-md-12 col-lg-3">
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 my-auto">
                        <div class="text-center">
                            <h1 class="text-white fw-light Livvic mb-0 main_title">SELECCIONE O SEU<span
                                    class="text-EDF57E fw-500"> SIGNO DO ZODÍACO</span></h1>
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
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="aries">
                            <img src="{{$srcImg}}aries-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="taurus">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="taurus"><img
                                src="{{$srcImg}}Taurus-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="gemini">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="gemini"><img
                                src="{{$srcImg}}gemini-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="cancer">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="cancer"><img
                                src="{{$srcImg}}Cancer-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="leo">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="leo"><img
                                src="{{$srcImg}}Leo-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="virgo">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="virgo"><img
                                src="{{$srcImg}}Virgo-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="libra">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="libra"><img
                                src="{{$srcImg}}Libra-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="scorpio">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="scorpio"><img
                                src="{{$srcImg}}Scorpio-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="sagittarius">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="sagittarius"><img
                                src="{{$srcImg}}Sagittarius-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="capricorn">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="capricorn"><img
                                src="{{$srcImg}}Capricorn-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="aquarius">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="aquarius"><img
                                src="{{$srcImg}}Aquarius-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-lg-1" data-sign="pisces">
                        <a href="#" class="choose_sign_1 gtm-zodiac" data-gtm-value="pisces"><img
                                src="{{$srcImg}}Pisces-icon.webp" class="w-100">
                            <div class="next_arrow text-center mt-3">
                                <img src="{{$asset_path}}assets/images/next-arrow.png">
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Qual é o seu sexo?</span>
                </h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-4">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/images/male-icon.png"
                                         class="text-center me-3 position-relative mb-2 pt-1 z-index-1">
                                    <span
                                        class=" position-relative z-index-1 Livvic color-c6dee8 fw-bold medium font24">Homem</span><br>
                                    <input type="radio" name="gender" value="M" checked data-gtm-value="male">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/images/female-icon.png"
                                         class="me-2 position-relative mb-2 z-index-1 ">
                                    <span
                                        class=" position-relative z-index-1 Livvic color-c6dee8 fw-bold medium font24">Mulher</span><br>
                                    <input type="radio" name="gender" value="F" data-gtm-value="female">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <span class="error" id="step_2_error"></span>
                            <div class="col-12 pt-50 text-start-step-2">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item px-lg-3">
                                        <a href="javascript:void(0);"
                                           class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_2_prev"
                                           onclick="back(1,2);">Voltar</a>
                                    </li>
                                    <li class="list-inline-item px-lg-2">
                                        <a href="javascript:void(0);"
                                           class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_2_next">Próxima
                                            pregunta</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Bem! Quando nasceu?</span>
                </h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 day"
                                        aria-label="Default select example " name="day">
                                    <option value="" selected="selected">Dia</option>
                                    @for ($i = 1; $i < 32; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 month"
                                        aria-label="Default select example " name="month">
                                    <option value="" selected="selected">Mês</option>
                                    @for ($i = 1; $i < 13; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 year"
                                        aria-label="Default select example " name="year">
                                    <option value="" selected="selected">Ano</option>
                                    @for ($i = 1940; $i < 2003; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <span class="error d-none" id="step_3_error">Favor indicar a data completa</span>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_3_prev"
                                           onclick="back(2,3);">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_3_next">Próxima
                                            pregunta</a>
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
                <h1 class="text-white fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Em que cidade você nasceu?</span>
                </h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <input type="text" placeholder="Por favor, introduza a sua cidade" name="city"
                                       class="born_input_field font24 medium Livvic text-center color-c6dee8">
                                <span class="error d-none" id="step_4_error">Por favor, preencha este campo</span>

                            </div>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_4_prev"
                                           onclick="back(3,4);">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_4_next">Próxima
                                            pregunta</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Sabe que horas nasceu?</span>
                </h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <ul class="list-inline list-unstyled mb-xxl-5">
                                    <li class="list-inline-item know-birth-time-yes">
                                        <label class="choose_yesno_btn">
                                            <span
                                                class="position-relative z-index-1 text-uppercase Livvic color-c6dee8  medium font24">Sim</span><br>
                                            <input type="radio" name="birth_time_know" value="yes" data-gtm-value="yes">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li class="list-inline-item know-birth-time-no">
                                        <label class="choose_yesno_btn">
                                            <span
                                                class=" position-relative z-index-1 text-uppercase Livvic color-c6dee8  medium font24">Não</span><br>
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
                                        <a href="javascript:void(0);"
                                           class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_5_prev"
                                           onclick="back(4,5);">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_5_next">Próxima
                                            pregunta</a>
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
                <h1 class="text-white fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Por favor, introduza horas e minutos o mais exatos possível</span>
                </h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 hour"
                                        aria-label="Default select example " name="tobhr">
                                    <option value="" selected="selected">Hora</option>
                                    @for ($i = 0; $i < 24; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-select born_input_field font24 medium Livvic color-c6dee8 min"
                                        aria-label="Default select example" name="tobmin">
                                    <option value="" selected="selected">Minuto</option>
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
                                           class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_6_prev"
                                           onclick="back(5,6);">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_6_next">Próxima
                                            pregunta</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Quais são as suas preocupações?</span>
                </h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  Livvic color-c6dee8  medium font22">Trabalho</span><br>
                                    <input class="gtm-concern" type="radio" name="concerns" value="1" checked
                                           data-gtm-value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  Livvic color-c6dee8  medium font22">Finanças</span><br>
                                    <input class="gtm-concern" type="radio" name="concerns" value="2"
                                           data-gtm-value="2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span
                                        class="position-relative z-index-1  Livvic color-c6dee8 medium font22">Amor</span><br>
                                    <input class="gtm-concern" type="radio" name="concerns" value="3"
                                           data-gtm-value="3">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span
                                        class="position-relative z-index-1  Livvic color-c6dee8 medium font22">Geral</span><br>
                                    <input class="gtm-concern" type="radio" name="concerns" value="4"
                                           data-gtm-value="4">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_7_prev">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_7_next">Próxima
                                            pregunta</a>
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
                <h1 class="text-black fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Qual é o seu nome?</span>
                </h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-6">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <input type="text" placeholder="Primeiro nome" name="first_name"
                                       class="born_input_field font24 medium Livvic color-c6dee8">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="Sobrenome" name="last_name"
                                       class="born_input_field font24 medium Livvic color-c6dee8">
                            </div>
                            <span class="error d-none" id="step_8_error">Por favor preencha este campo</span>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_8_prev"
                                           onclick="back(7,8);">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn Livvic medium font18 text-decoration-none text-center d-inline-block text-white step_8_next">Próxima
                                            pregunta</a>
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
                <h1 class="text-white fw-light Livvic mb-0 main_title text-center mb-5"><span class="text-white fw-500">Onde quer obter a sua <br><span
                            class="text-EDF57E fw-500">clarividência personalizada?</span></h1>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <input type="email" placeholder="E-mail" name="email"
                                       class="born_input_field text-center font24 medium Livvic color-c6dee8 input-email gtm-email"
                                       required>
                                <!-- <span class="error" id="step_9_error d-none">Gelieve dit veld in te vullen</span> -->
                            </div>
                            <div class="col-12">
                                <fieldset class="step_mail__white-box mt-3">
                                    <legend class="legend fw-bold text-white">Presente opcional gratuito</legend>
                                    <label class="check_text text-white"><input type="checkbox" name="coreg"
                                                                                value="true">
                                        Conecte-se com o seu <b>Anjo da Guarda</b> graças à Angela e receba a sua <b>vidência
                                            dos anjos gratuita.</b></label>
                                </fieldset>
                            </div>
                            <div class="col-12 pt-3 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item me-0 w-100">
                                        <button type="submit"
                                                class="gtm-email-continue continue_btn Livvic medium font20  text-decoration-none text-center d-inline-block w-100 px-lg-2 px-xxl-3  text-EDF57E step_9_next continue_btn-border">
                                            <i class="fa fa-hand-o-right px-2"></i>
                                            <!-- Verstuur mijn persoonlijke horoscope gratis -->
                                            <b>Próxima pregunta</b>
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
                        <h4 class="text-center text-white font18  mb-3 Livvic semibold">A sua confiança é admirável</h4>
                        <h3 class="text-center font32 text-white Livvic mb-5">Irei imediatamente verificar suas
                            informaçōes. A minha resposta irá ser enviada em algumas horas.</h3>
                        <p class="text-061629 font18 Livvic semibold text-center text-white">Vá agora à sua caixa de
                            entrada e descubra os presentes que te prometi: - O seu Checkup de Energia Positivo - O seu
                            Talismã de 7 Dias de Absoluta-Proteção
                        </p>

                        <div class="bg-text-new1 text-center">
                            <p class=" font18 Livvic fw-normal text-white">P.S. Para que a sua confiança em mim seja
                                merecida, quero que saiba que respeito o regulamento relativo à privacidade e ao acesso
                                aos seus dados pessoais. Tudo está aqui, na minha <a href="javascript:void(0)"
                                                                                     class="text-white privacy_modal_open">Política
                                    de Privacidade</a>
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
            .gtm-screen-thankyou h3{
                color: #fff;
            }
        </style>
        <section class="main_banner gtm-screen-thankyou mb-5 mt-2 d-none" id="step_10">
            @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
        </section>
        <!-- step10 end -->
    </form>

    <!-- Disclaimer start -->
    <div class="container-fluid pb-5 border-bottom-D9D9D9">
        <div class="row mx-0 w-100 pt-5" style="margin-top: 300px;">
            <div class="col-12">
                <div class="text-center">
                    <h3 class="text-white fw-light Livvic mb-0 font-25 text-center text-uppercase mb-3"><span
                            class="text-white fw-500"><?= print_dynamic_variable('disclaimer_title_pt') ?></span></h3>
                    <p class="text-uppercase fw-normal text-white mb-0 font-15 Lato line-height-23">
                        <?= print_dynamic_variable('disclaimer_text_pt') ?> <?= print_dynamic_variable('address') ?>
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
                            <a href="https://starsandthemoon-2020.com"
                               class="Lato fw-normal font-16 text-decoration-none text-white">HOME</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0)"
                               class="Lato fw-normal font-16 text-decoration-none text-white terms_modal_open">TERMOS E
                                CONDIÇÕES</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0)"
                               class="Lato fw-normal font-16 text-decoration-none text-white privacy_modal_open text-uppercase">Política
                                de Privacidade</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0)"
                               class="Lato fw-normal font-16 text-decoration-none text-white gdpr_modal_open">GDPR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0)"
                               class="Lato fw-normal font-16 text-decoration-none text-white faq_modal_open">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- terms of services modal -->
    <div class="astrology-offerpage-cntpopup modal fade contact_us_popup" id="terms_modal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                @include('/landers/terms/star-moon/pt/terms-modal')
            </div>
        </div>
    </div>

    <!-- privacy of services modal -->
    <div class="astrology-offerpage-cntpopup modal fade contact_us_popup" id="privacy_modal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                @include('/landers/terms/star-moon/pt/privacy-modal')
            </div>
        </div>
    </div>

    <!-- privacy 2 of services modal -->
    <div class="astrology-offerpage-cntpopup modal fade contact_us_popup" id="privacy_modal_2" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                @include('/landers/terms/star-moon/pt/privacy-2-modal')
            </div>
        </div>
    </div>

    <!-- GDPR of services modal -->
    <div class="astrology-offerpage-cntpopup modal fade contact_us_popup" id="gdpr_modal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                @include('/landers/terms/star-moon/pt/gdpr-modal')
            </div>
        </div>
    </div>

    <!-- FAQ of services modal -->
    <div class="astrology-offerpage-cntpopup modal fade contact_us_popup" id="faq_modal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                @include('/landers/terms/star-moon/pt/faq-modal')
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
    <!-- Astrology offerpage custom js -->
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js "></script>
    <script type="text/javascript">
        if ($(window).width() <= 991) {
            $('.next_arrow').remove();
        }

    </script>
</body>

</html>
