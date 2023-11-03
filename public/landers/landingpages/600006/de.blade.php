@php($asset_path = '/landers/landingpages/600006/')
@php($srcImg = "/landers/sets/set34/")
@include('/landers/terms/dynamic/dynamic')
<!doctype html>
<html lang="de" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Astrology Prism">
    <meta name="keywords" content="Astrology Prism">
    <meta name="title" content="Astrology Prism">
    <meta name="description" content="Astrology Prism">

    <meta property="og:title" content="Astrology Prism" />
    <meta property="og:type" content="Astrology Prism" />
    <meta property="og:url" content="Astrology Prism" />
    <meta property="og:image" content="{{$asset_path}}assets/images/hero_bg.jpg" />
    <meta property="og:image:width" content="37" />
    <meta property="og:image:height" content="37" />
    <meta property="og:site_name" content="Astrology Prism" />
    <meta property="og:description" content="Astrology Prism" />
    <link rel='shortcut icon' href='{{$asset_path}}assets/images/favicon.png'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">

    <link href="{{$asset_path}}assets/css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>


    <style>
        .error {
            color: red
        }

        .error2 {
            color: red
        }
    </style>

    <title>Astrology Prism</title>
</head>

<body class="main_bg">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->

    <div class="804-LU-new-astrology main_bg position-relative">
        <!--804-LU-new-astrology-header -->
        <header class="header pt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <a href="https://astro.astrology-prism.com/index.php?lang=DE"><img src="{{$asset_path}}assets/images/logo.png" class="img-fluid mb-3"></a>
                    </div>
                </div>
            </div>
        </header>
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

            <!-- 1 step -->
            <section class="gtm-screen-zodiac 804-LU-new-astrology1st step_1_content common_cls_display1" id="step_1">
                <div class="container">
                    <h1 class="804-LU-new-astrology1sr-h1 elegante fw-normal font-100 text-center text-white mb-0 pb-0">Wählen Sie Ihr</h1>
                    <h3 class="elegante fw-normal font-62 text-white text-center mb-2 mb-lg-4 pb-2">Sternzeichen</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-7">
                            <div class="d-flex flex-wrap justify-content-center justify-md-content-between mb-md-5">
                                <div class="mb-2 mb-md-3 me-2 me-lg-3 me-xl-3">
                                    <label class="804-LU-new-astrology-radio radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="aries">
                                            <img src="{{$srcImg}}astro-img1.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Widder</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">21/3 - 20/4</span>
                                            <input type="radio" name="astro" value="1">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="mb-2 mb-md-3 me-2 me-lg-3 me-xl-3">
                                    <label class="804-LU-new-astrology radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="taurus">
                                            <img src="{{$srcImg}}astro-img2.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Stier</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">21/4 - 20/5</span>
                                            <input type="radio" name="astro" value="2">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="mb-2 mb-md-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="gemini">
                                            <img src="{{$srcImg}}astro-img3.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Zwillinge</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">21/5 - 20/6</span>
                                            <input type="radio" name="astro" value="3">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="mb-2 mb-md-3 me-2 me-lg-3 me-xl-0">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="cancer">
                                            <img src="{{$srcImg}}astro-img4.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Krebs</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">21/6 - 22/7</span>
                                            <input type="radio" name="astro" value="4">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="mb-2 mb-md-3 me-2 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="leo">
                                            <img src="{{$srcImg}}astro-img5.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Löwe</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">23/7 - 22/8</span>
                                            <input type="radio" name="astro" value="5">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="804-LU-new-astrology mb-2 mb-md-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="virgo">
                                            <img src="{{$srcImg}}astro-img6.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Jungfrau</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1"> 23/8 - 21/9</span>
                                            <input type="radio" name="astro" value="6">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="804-LU-new-astrology mb-2 mb-md-3 me-2 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="libra">
                                            <img src="{{$srcImg}}astro-img7.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Waage</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">22/9 - 20/10</span>
                                            <input type="radio" name="astro" value="7">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="804-LU-new-astrology mb-2 mb-md-3 me-2 me-lg-3 me-xl-0">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="scorpio">
                                            <img src="{{$srcImg}}astro-img8.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Skorpion</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">21/10 - 20/11</span>
                                            <input type="radio" name="astro" value="8">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="804-LU-new-astrology mb-2 mb-md-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="sagittarius">
                                            <img src="{{$srcImg}}astro-img9.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Schütze</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">21/11 - 21/12</span>
                                            <input type="radio" name="astro" value="9">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="804-LU-new-astrology mb-2 mb-md-3 me-2 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="capricorn">
                                            <img src="{{$srcImg}}astro-img10.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Steinbock</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">22/12 - 21/1</span>
                                            <input type="radio" name="astro" value="10">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="804-LU-new-astrology mb-2 mb-md-3 me-2 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="aquarius">
                                            <img src="{{$srcImg}}astro-img11.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Wassermann</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">22/1 - 18/2</span>
                                            <input type="radio" name="astro" value="11">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                                <div class="804-LU-new-astrology mb-2 mb-md-3 me-0 me-lg-0 me-xl-0">
                                    <label class="radio_cus_button">
                                        <a href="#" class="gtm-zodiac" data-gtm-value="pisces">
                                            <img src="{{$srcImg}}astro-img12.png" class="position-relative z-index-1 pb-0 pb-md-1 pb-lg-2 pb-xxl-3"><br>
                                            <span class="text-center text-white roboto fw-bold font-26 position-relative z-index-1">Fische</span><br>
                                            <span class="text-center text-white roboto medium font-20 position-relative z-index-1">19/2 - 20/3</span>
                                            <input type="radio" name="astro" value="12">
                                            <span class="checkmark"></span>
                                        </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 2 step -->
            <section class="gtm-screen-gender select_gender" id="step_2" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Welches Geschlecht haben Sie?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-6 text-center mx-auto d-table">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/male-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                        <span class=" position-relative z-index-1 montserrat text-white  medium font24">Mann</span><br>
                                        <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" value="M" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 mx-auto d-table">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/female-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                        <span class=" position-relative z-index-1 montserrat text-white medium font24">Frau</span><br>
                                        <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="F">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block" onclick="back(1,2);">&lt; Zurück</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- 3 step -->
            <section class="gtm-screen-birthdate select_born_date" id="step_3" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Wann wurden Sie geboren?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row">
                                <div class="col-4">
                                    <select name="day" class="form-select born_input_field font24 medium montserrat text-black day" aria-label="Default select example ">
                                        <option value="" selected="selected">Tag</option>
                                        @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select name="month" class="form-select born_input_field font24 medium montserrat text-black month" aria-label="Default select example ">
                                        <option value="" selected="selected">Monat</option>
                                        @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select name="year" class="form-select born_input_field font24 medium montserrat text-black year" aria-label="Default select example ">
                                        <option value="" selected="selected">Jahr</option>
                                        @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <span class="error" style="display:none;">Bitte geben Sie das vollständige Datum an</span>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="gtm-birthdate-continue all_continue_btn font-20 text-center text-white d-inline-block">WEITER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- 4 step -->
            <section class="gtm-screen-city select_city" id="step_4" style="display:none;">
                <div class="conatiner">
                    <div class="height-50"></div>
                    <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">In welcher Stadt wurden Sie geboren?</h3>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row justify-content-center mx-0 w-100">
                                <div class="col-12 col-xxl-10">
                                    <input type="text" name="city" placeholder="In welcher Stadt wurden Sie geboren?" class="enter_city font24 medium montserrat text-center text-white">
                                </div>
                                <div class="col-12 ">
                                    <div class="text-center">
                                        <p class="text-white font-16 times pt-3">Dies wird Ihnen helfen, Ihr Horoskop genauer zu machen.</p>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">WEITER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- 5 step -->
            <section class="gtm-screen-birthtimeknown you_know_born_time" id="step_5" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Wissen Sie, zu welcher Zeit Sie geboren wurden?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-xl-10 col-xxl-6">
                            <ul class="list-inline list-unstyled text-center">
                                <li class="list-inline-item know-birth-time-yes">
                                    <label class="choose_yesno_btn">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Ja</span><br>
                                        <input type="radio" name="bitth_time_know" class="gtm-birthtime" data-gtm-value="yes" value="yes" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item know-birth-time-no">
                                    <label class="choose_yesno_btn">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">NEIN</span><br>
                                        <input type="radio" name="bitth_time_know" class="gtm-birthtime" data-gtm-value="no" value="no">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 ">
                            <div class="text-center">
                                <p class="text-white font-16 times pt-3">Dies wird Ihnen helfen, Ihr Horoskop genauer zu machen.</p>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- 6 step -->
            <section class="select_hour_minutes" id="step_6" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Bitte geben Sie die Stunden und Minuten so genau wie möglich ein</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center py-50">
                                <div class="col-6">
                                    <select name="tobhr" class="form-select born_input_field font24 medium montserrat text-black hour" aria-label="Default select example">
                                        <option value="" selected="selected">Uhrzeit</option>
                                        @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select name="tobmin" class="form-select born_input_field font24 medium montserrat text-black min" aria-label="Default select example">
                                        <option value="" selected="selected">Minité</option>
                                        @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">WEITER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- 7 step -->
            <section class="gtm-screen-concern select_your_concerns" id="step_7" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Welcher Bereich interessiert Sie besonders?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center py-50">
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Arbeit</span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="work" value="Arbeit" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Finanzen</span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="money" value="Finanzen">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Liebe</span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="love" value="Liebe">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">General</span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="general" value="General">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- 8 step -->
            <section class="gtm-screen-name enter_name_det" id="step_8" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Wie ist Ihr Name?</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input type="text" placeholder="VORNAME" name="first_name" class="enter_name_det_field font24 medium montserrat text-white">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Nachname" name="last_name" class="enter_name_det_field font24 medium montserrat text-white">
                                </div>
                                <span class="error2" style="display:none;">Bitte geben Sie Ihren Namen ein</span>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">WEITER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- 9 step -->
            <section class="gtm-screen-email enter_email_field" id="step_9" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Wohin sollen wir Ihr persönliches Horoskop senden?</h3>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-7">
                            <div class="row justify-content-center mx-0 w-100">
                                <div class="col-12  col-xxl-11">
                                    <input type="email" placeholder="E-Mail" name="email" required class="gtm-email enter_city font24 medium montserrat text-center text-white">
                                </div>
                                <div class="col-12 col-lg-10 col-xxl-11 pt-4 text-center">
                                    <fieldset class="step_mail__white-box text-white font-14">
                                        <legend class="legend fw-bold sky-color-2">Kostenloses optionales Geschenk</legend>
                                        <label class="check_text"><input type="checkbox" name="coreg" value="true">
                                            <b>Verbinden Sie sich mit Ihrem Schutzengel</b> mit der Hilfe von Angela und erhalten Sie Ihre <b>kostenlose Engelszukunftsdeutung.</b><label class="check_text">
                                    </fieldset>
                                    <br>
                                    <button type="submit" class="gtm-email-continue all_continue_btn font-20 text-uppercase text-center w-100 text-white d-inline-block">Erhalten Sie meine komplette Hellseherei KOSTENLOS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- step 11 - pending -->
            <section class="last_step_content gtm-screen-pending" id="step_11" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-7">
                            <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                                Bitte warte einen Moment, während ich dich mit deinem<br />Schutzengel verbinde...
                            </h3>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- 10 step -->
            <style>
                .gtm-screen-thankyou li:before {
                    background-color: orange;
                    top: 6px;
                }

                .gtm-screen-thankyou li:before {
                    background-color: white;

                }

                .gtm-screen-thankyou ul {
                    margin-left: 13px;
                    list-style-type: none;
                    padding-left: 0rem;
                }

                .gtm-screen-thankyou li {
                    position: relative;
                    text-align: left;
                    padding-left: 24px;
                }

                .gtm-screen-thankyou p {
                    margin-left: 6px;
                }
            </style>
            <section class="gtm-screen-thankyou last_step_content" id="step_10" style="display:none;">
                @include('/landers/landingpages/thankyou/'.$language.'/thankyou')

            </section>
        </form>


        <div class="container" style="margin-top: 300px;">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="times fw-normal font-68 text-white text-center pt-3 pb-2">
                        <?= print_dynamic_variable('disclaimer_title_de') ?>
                    </h2>
                    <p class="times fw-normal text-white">
                        <?= print_dynamic_variable('disclaimer_text_de') ?> <?= print_dynamic_variable('address') ?>
                    </p>
                </div>
            </div>
        </div>

        <!--f804-LU-new-astrology-final-footer -->
        <footer class="f804-LU-new-astrology-final footer position-unset pt-5">
            <div class=" container">
                <div id="footer">
                    <ul class="f804-LU-new-astrology-final-menu footer_menu text-center list-inline list-unstyled">
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                            <a href="javascript:void(0);" class="tnc_btn_openmd text-white text-decoration-none roboto medium font-20">GESCHÄFTSBEDINGUNGEN</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                            <a href="javascript:void(0);" class="policy_btn_openmd text-decoration-none text-white roboto medium font-20"> DATENSCHUTZRICHTLINIE</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                            <a href="javascript:void(0);" class="utc_btn_openmd text-decoration-none text-white roboto medium font-20"> ETHISCHE REGELN</a>
                        </li>
                        <li class="list-inline-item me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                            <a href="javascript:void(0);" class="text-decoration-none  text-white roboto medium font-20 cnt_btn_openmd">GDPR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="text-decoration-none  text-white roboto medium font-20 cookie_open_btn">COOKIE-RICHTLINIE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <!-- Pop-up -->

    <!-- Social icon Model  -->

    <!-- Social icon Model  -->
    <!-- new terms popup -->
    <div class="f804-LU-new-astrology-final-conditon modal fade terms_modal" id="terms_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <h5 class="f804-LU-new-astrology-final-con-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">GESCHÄFTSBEDINGUNGEN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="t_c_text">
                        <p class="roboto regular font-18 color-787878 lh-32">
                            @include('landers.terms.astrology-prism.de.terms')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Privacy Policy -->
    <div class="f804-LU-new-astrology-final-pp modal fade privacy_modal privacy-1" id="privacy_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="f804-LU-new-astrology-final-modal modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <h5 class="f804-LU-new-astrology-final-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">DATENSCHUTZRICHTLINIE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    @include('landers.terms.astrology-prism.de.privacy')
                </div>
            </div>
        </div>
    </div>

    <!-- New Privacy Policy-2 -->
    <div class="f804-LU-new-astrology-final-pp modal fade privacy-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="f804-LU-new-astrology-final-modal modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <h5 class="f804-LU-new-astrology-final-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">DATENSCHUTZRICHTLINIE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    @include('landers.terms.astrology-prism.de.privacy-2')
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
                        @include('landers.terms.astrology-prism.de.ethical')
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
                    @include('landers.terms.astrology-prism.de.gdpr')
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
                    @include('landers.terms.astrology-prism.de.cookie-policy')
                </div>
            </div>
        </div>
    </div>

    <!-- f804-LU-new-astrology-Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Astrology offerpage custom js -->
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js "></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.close').on('click', function() {
                $('#social_model').modal('hide');
            });


        });
    </script>
</body>

</html>