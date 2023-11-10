@php($asset_path = '/landers/landingpages/600003/')
@php($srcImg = "/landers/sets/set38/")
@include('/landers/terms/dynamic/dynamic')
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Astrology Reading</title>
    <link rel='shortcut icon' href='{{ $asset_path }}assets/images/icon.png' type='image/x-icon'>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ $asset_path }}assets/css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif
    <!-- notify script -->
    <script>
        (function(document, window) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://trk-keingent.com/scripts/push/script/57dkplvgw8?url=" + encodeURI(self.location.hostname) + "&alturl=" + encodeURI(self.location.pathname);
            script.onload = function() {
                push_init();
                push_subscribe();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window);
    </script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDDSKJP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="top-logo text-center">
        <div class="">
            <a href="https://starsandthemoon-2020.com"><img src="{{ $asset_path }}assets/images/logo.png" alt="Astrology">
            </a>
        </div>
    </div>

    <div class="mid-cirle">
        <div class="container">
            <form name="g" id="nameForm" class="main_form" method="post" action="{{request()->url()}}/insertlead">
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


                <!-- End Hidden Fields, there is more input fields in the code below -->
                <div class="row">
                    <div class="step__form">
                        <div class="sign-box__yourSign d-none">
                            <img id="yourSign" alt="" title="">
                        </div>
                        <div class="step__count">
                            paso <span id="step__count">1</span> de 10
                        </div>
                    </div>
                    <div class="mid-main-box">
                        <!---step-1-->
                        <div class="gtm-screen-zodiac step__1 step_1">
                            <div class="step_1_head align-items-center mb-2">

                                <h2 class="text-center">seleccione su signo zodiacal</h2>
                            </div>

                            <div class="button-box bev" data-bevent="1" data-sign="aries">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="aries">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}aries.png" alt="aries" title="aries"></span>
                                        <span>Aries<span class="button-box__span-name">Mar 21 - Abr 20</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="2" data-sign="taurus">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="taurus">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}taurus.png" alt="taurus" title="taurus"></span>
                                        <span>Tauro<span class="button-box__span-name">Abr 21 - May 20</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="3" data-sign="gemini">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="gemini">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}gemini.png" alt="gemini" title="gemini"></span>
                                        <span>Géminis<span class="button-box__span-name">Maiy 21 - Jun 20</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="4" data-sign="cancer">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="cancer">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}cancer.png" alt="cancer" title="cancer"></span>
                                        <span>Cáncer<span class="button-box__span-name">Jun 21 - Jul 22</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="5" data-sign="leo">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="leo">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}leo.png" alt="leo" title="leo"></span>
                                        <span>Leo<span class="button-box__span-name">Jul 23 - Ago 22</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="6" data-sign="virgo">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="virgo">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}virgo.png" alt="virgo" title="virgo"></span>
                                        <span>Virgo<span class="button-box__span-name">Ago 23 - Sep 21</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="7" data-sign="libra">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="libra">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}libra.png" alt="libra" title="libra"></span>
                                        <span>Libra<span class="button-box__span-name">Sep 22 - Oct 20</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="8" data-sign="scorpio">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="scorpio">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}scorpio.png" alt="scorpio" title="scorpio"></span>
                                        <span>Escorpión<span class="button-box__span-name">Oct 21 - Nov 20</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="9" data-sign="sagittarius">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="sagittarius">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}sagittarius.png" alt="sagittarius" title="sagittarius"></span>
                                        <span>Sagitario<span class="button-box__span-name">Nov 21 - Dic 21</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="10" data-sign="capricorn">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="capricorn">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}capricorn.png" alt="capricorn" title="capricorn"></span>
                                        <span>Capricornio<span class="button-box__span-name">Dic 22 - Ene 21</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="11" data-sign="aquarius">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="aquarius">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}aquarius.png" alt="aquarius" title="aquarius"></span>
                                        <span>Acuario<span class="button-box__span-name">Ene 22 - Feb 18</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box bev" data-bevent="12" data-sign="pisces">
                                <div class="sign-box">
                                    <a href="#" class="gtm-zodiac" data-gtm-value="pisces">
                                        <span class="sign-box__img"><img src="{{ $srcImg }}pisces.png" alt="pisces" title="pisces"></span>
                                        <span>Piscis<span class="button-box__span-name">Feb 19 - Mar 20</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <!---step-2-->
                        <div class="gtm-screen-gender step__2 text-center custom_step_2 d-none" id="step_2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="font-36 color-e33afc">¿Cuál es su género?</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center py-50">

                                            <div class="col-6 text-center">
                                                <label class="choose_gender_btn">
                                                    <img src="{{ $asset_path }}assets/images/male.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                    <span class=" position-relative z-index-1 montserrat text-white  medium font24">Hombre</span><br>
                                                    <input type="radio" name="gender" class="gtm-gender" value="M" data-gtm-value="male" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label class="choose_gender_btn">
                                                    <img src="{{ $asset_path }}assets/images/woman.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                    <span class=" position-relative z-index-1 montserrat text-white  medium font24">Mujeres</span><br>
                                                    <input type="radio" name="gender" class="gtm-gender" value="F" data-gtm-value="female">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <span class="error" id="step_2_error"></span>
                                        </div>
                                        <button class="btn_1 btn_1__scip step_2_btn" type="button">Próxima pregunta >>
                                        </button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_2_prev" onclick='back("1", "2")'><img alt="" src="{{ $asset_path }}assets/images/pre_btn.png">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---step-2-end--->
                        <!--step-3-->
                        <div class="gtm-screen-birthdate step__3 text-center custom_step_3 d-none" id="step_3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="font-36 color-e33afc">¿Cuándo nació?</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center py-50">
                                            <div class="col-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-4">
                                                        <select name="day" class="form-select born_input_field font24 medium montserrat text-black day" aria-label="Default select example ">
                                                            <option value="" selected="selected">Día</option>
                                                            @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                    <div class="col-4">
                                                        <select name="month" class="form-select born_input_field font24 medium montserrat text-black month" aria-label="Default select example ">
                                                            <option value="" selected="selected">Mes</option>
                                                            @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                    <div class="col-4">
                                                        <select name="year" class="form-select born_input_field font24 medium montserrat text-black year" aria-label="Default select example ">
                                                            <option value="" selected="selected">Año</option>
                                                            @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                    <span class="error" id="step_3_error"></span>
                                                </div>
                                                <p class="date_text color-e33afc font-16">Esto ayudará a que la lectura sea
                                                    más precisa. </p>
                                            </div>
                                        </div>
                                        <button class="gtm-birthdate-continue btn_1 btn_1__scip step_3_btn" type="button">
                                            Próxima pregunta >>
                                        </button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_3_prev" onclick='back("2", "3")'><img alt="" src="{{ $asset_path }}assets/images/pre_btn.png">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----stwp-3-end--->
                        <!---step-4-->
                        <div class="gtm-screen-city step__4 text-center custom_step_4 d-none" id='step_4'>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="font-36 color-e33afc">¿En qué ciudad nació?</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center py-50">
                                            <div class="col-12 text-center">
                                                <input type="text" placeholder="Por favor ingrese su ciudad" name="city" class="city_filed font24 medium montserrat text-center text-black">
                                                <span class="error" id="step_4_error"></span>
                                            </div>
                                            <p class="date_text color-e33afc font-16">Esto ayudará a que su clarividencia
                                                sea más precisa.</p>
                                        </div>
                                        <button class="btn_1 btn_1__scip step_4_btn" type="button">Próxima pregunta >>
                                        </button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_4_prev" onclick='back("3", "4")'><img alt="" src="{{ $asset_path }}assets/images/pre_btn.png">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---step-4-end--->
                        <!---step-5-->
                        <div class="gtm-screen-birthtimeknown step__5 text-center custom_step_5 d-none" id="step_5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="font-36 color-e33afc">¿Sabe a qué hora nació?</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center py-50">
                                            <div class="col-12 text-center">
                                                <ul class="list-inline list-unstyled flex-columb">
                                                    <li class="list-inline-item">
                                                        <label class="choose_yesno_btn">
                                                            <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Sí</span><br>
                                                            <input type="radio" name="yesno" value="1" class="gtm-birthtime" data-gtm-value="yes" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <label class="choose_yesno_btn">
                                                            <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">No</span><br>
                                                            <input type="radio" name="yesno" value="2" class="gtm-birthtime" data-gtm-value="no">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                                <p class="date_text color-e33afc font-16">Esto ayudará a que su
                                                    clarividencia sea más precisa.</p>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_5_btn" type="button">Próxima pregunta >>
                                            </button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_5_prev" onclick='back("4", "5")'><img alt="" src="{{ $asset_path }}assets/images/pre_btn.png">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---step-5-end--->
                        <!---step-6-->
                        <div class="gtm-screen-birthtime step__6 text-center custom_step_6 d-none" id="step_6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="font-36 color-e33afc">Introduzca las horas y los minutos de la forma más
                                            exacta posible.</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center py-50">
                                            <div class="col-6">
                                                <select name="tobhr" class="form-select born_input_field font24 medium montserrat text-black hour" aria-label="Default select example ">
                                                    <option value="" selected="selected">Hora</option>
                                                    @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <select name="tobmin" class="form-select born_input_field font24 medium montserrat text-black min" aria-label="Default select example">
                                                    <option value="" selected="selected">Minuto</option>
                                                    @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                </select>
                                            </div>
                                            <span class="error" id="step_6_error"></span>
                                            <button class="btn_1 btn_1__scip step_6_btn" type="button">Próxima pregunta >>
                                            </button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_6_prev" onclick='back("5", "6")'><img alt="" src="{{ $asset_path }}assets/images/pre_btn.png">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---step-6-end--->
                        <!---step-7-->
                        <div class="gtm-screen-concern step__7 text-center custom_step_8 d-none" id="step_7">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="font-36 color-e33afc">¿Cuáles son sus preocupaciones?</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center py-50">
                                            <div class="col-6  mb-10">
                                                <label class="choose_concerns_btn">
                                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Trabajo</span><br>
                                                    <input type="radio" class="gtm-concern" data-gtm-value="work" name="concerns" value="1" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-6  mb-10">
                                                <label class="choose_concerns_btn">

                                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Finanzas</span><br>
                                                    <input type="radio" class="gtm-concern" data-gtm-value="money" name="concerns" value="2">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-6 mb-10">
                                                <label class="choose_concerns_btn">
                                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Amor</span><br>
                                                    <input type="radio" class="gtm-concern" data-gtm-value="love" name="concerns" value="3">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-6  mb-10">
                                                <label class="choose_concerns_btn">

                                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">General</span><br>
                                                    <input type="radio" class="gtm-concern" data-gtm-value="general" name="concerns" value="4">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_7_btn" type="button">Próxima pregunta >>
                                            </button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_7_prev" onclick='back("6", "7")'><img alt="" src="{{ $asset_path }}assets/images/pre_btn.png">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---step-7-end--->
                        <!---step-8-->
                        <div class="gtm-screen-name step__8 text-center custom_step_8 d-none" id="step_8">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="font-36 color-e33afc">¿Cuál es su nombre?</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center py-50">
                                            <div class="col-6">
                                                <input type="text" placeholder="Nombre" name="first_name" class="born_input_field font24 medium montserrat text-white">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" placeholder="Apellido" name="last_name" class="born_input_field font24 medium montserrat text-white">
                                            </div>
                                            <span class="error" id="step_8_error"></span>
                                            <button class="btn_1 btn_1__scip step_8_btn" type="button">Próxima pregunta >>
                                            </button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_8_prev" onclick='back("7", "8")'><img alt="" src="{{ $asset_path }}assets/images/pre_btn.png">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---step-8-end--->
                        <!---step-9-->
                        <div class="gtm-screen-email step__9 text-center custom_step_9 d-none" id="step_9">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="font-36 color-e33afc">¿Dónde quiere recibir su videncia
                                            personalizada?</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center py-50">
                                            <div class="col-12 col-md-10">
                                                <input type="email" placeholder="E-mail" name="email" class="gtm-email born_input_field font24 medium montserrat text-black input-email" required="">
                                                <span class="error" id="step_9_error"></span>

                                            </div>
                                            <div class="col-12 pt-50 text-center">
                                            </div>
                                            <button class="gtm-email-continue btn_1 btn_1__scip step_9_btn" type="submit">
                                                Recibir mi videncia >>
                                            </button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_9_prev" onclick='back("8", "9")'><img alt="" src="{{ $asset_path }}assets/images/pre_btn.png">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---step-9-end--->
                        <!---step-10-->
                        <style>
                            .gtm-screen-thankyou li:before {
                                background-color: orange;
                                top: 6px;
                            }

                            .gtm-screen-thankyou li:before {
                                background-color: orange;

                            }

                            .gtm-screen-thankyou ul {
                                margin-left: 10px !important;
                                list-style-type: none;
                                padding-left: 0rem;
                            }

                            .gtm-screen-thankyou li {
                                position: relative;
                                text-align: left;
                                padding-left: 15px;
                            }

                            .gtm-screen-thankyou p {
                                margin-left: 6px;
                                margin-top: 12px;
                            }
                        </style>
                        <div class="gtm-screen-thankyou step__10 text-center custom_step_9 step_10 d-none" id="step_10">
                            @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
                        </div>
                        <!---step-9-end--->
                        <div class="clearfix"></div>
                    </div>
                </div>

                <!-- step 11 - pending -->
                <section class="last_step_content d-none gtm-screen-pending step_10" id="step_11">
                    <div class="container">
                        <div class="height-50"></div>
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12 col-md-6 col-xxl-7 text-center">
                                @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')
                            </div>
                        </div>
                        <div class="h-150"></div>
                    </div>
                </section>
            </form>
        </div>
    </div>
    <div class="footer row mid-main-box">
        <div class="col-12">
            <h2 class="text-center"><?= print_dynamic_variable('disclaimer_title_es') ?></h2>
            <p class="text-center text-white"><?= print_dynamic_variable('disclaimer_text_es') ?> <?= print_dynamic_variable('address') ?></p>
        </div>
    </div>
    <div class="">
        <ul class="footer-links">
            <li><a class="text-uppercase" href="https://starsandthemoon-2020.com">Home</a></li>
            <li><a href="#terms" class="cartonbox" data-cb-type="inline" data-cb-hash="text">TÉRMINOS Y CONDICIONES</a></li>
            <li><a href="#privacy" class="cartonbox text-uppercase" data-cb-type="inline" data-cb-hash="text">Política de
                    privacidad</a></li>
            <li><a href="#gdpr" class="cartonbox" data-cb-type="inline" data-cb-hash="text">GDPR</a></li>
            <li><a href="#faq" class="cartonbox" data-cb-type="inline" data-cb-hash="text">FAQ</a></li>
        </ul>
    </div>

    <div style="display: none;">
        <div id="terms">
            <div class="editor">
                @include('/landers/terms/star-moon/es/terms')
            </div>
        </div>

        <div id="privacy">
            <style>
                .footer {
                    margin-top: 400px;
                }

                @media (max-width: 375px) {
                    .footer {
                        margin-top: 400px;
                    }
                }
            </style>
            <div class="editor">
                @include('/landers/terms/star-moon/es/privacy')
            </div>
        </div>

        <div id="gdpr">
            <style>
                .footer {
                    margin-top: 400px;
                }

                @media (max-width: 375px) {
                    .footer {
                        margin-top: 400px;
                    }
                }
            </style>
            <div class="editor">
                @include('/landers/terms/star-moon/es/gdpr')
            </div>
        </div>

        <div id="faq">
            <style>
                .footer {
                    margin-top: 400px;
                }

                @media (max-width: 375px) {
                    .footer {
                        margin-top: 400px;
                    }
                }
            </style>
            <div class="editor">
                @include('/landers/terms/star-moon/es/faq')
            </div>
        </div>

        <div id="privacy-2">
            <div class="editor">
                @include('/landers/terms/star-moon/es/privacy-2')
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    
    <!--Cartonbox popup-->
    <script src="{{ $asset_path }}assets/js/cartonbox.min.js"></script>
    <script src="{{ $asset_path }}assets/js/cartonbox-connect.js"></script>
    <link rel="stylesheet" href="{{ $asset_path }}assets/css/cartonbox.min.css">
    <!--Cartonbox popup-->
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script type="text/javascript" src="{{ $asset_path }}assets/js/custom.js"></script>
</body>

</html>
