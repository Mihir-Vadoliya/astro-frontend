@php($asset_path = '/landers/landingpages/285647/')
@php($srcImg = "/landers/sets/set31/")
@include('/landers/terms/dynamic/dynamic')
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Astrology offerpage Required meta tags -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/favicon.png" />

    <!-- Astrology offerpage all CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Dependencies -->
    <link href="{{$asset_path}}assets/uicommon/css/libs/bootstrap.min.css" rel="stylesheet" />
    <link href="{{$asset_path}}assets/uicommon/css/libs/jquery/plugins/jdealcards/5.3.0/jDealCards.min.css" rel="stylesheet" type="text/css" />
    <link href="{{$asset_path}}assets/uicommon/landing/chris/message_video111/css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif

    <!-- Facebook Pixel Code -->
    <!-- End Facebook Pixel Code -->
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
    <title>Astrology Reading</title>
    <style>
        .error {
            color: red;
        }

        .error2 {
            color: red;
        }
    </style>

    <!--  pushnami script --->
    <link rel="manifest" href="manifest.json" />
    <script type="text/javascript">
        (function(document, window) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://api.pushnami.com/scripts/v1/pushnami-adv/628e169b792d285d2a28d0a4";
            script.onload = function() {
                Pushnami.update().prompt();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window);
    </script>
</head>

<body class="background my_new_bg main_bg">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMLWT7W" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
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
        <section class="header py-3 py-xl-1 py-xxl-3">
            <div class="container">
                <div class="top-logo text-center">
                    <div class="">
                        <a href="https://starsandthemoon-2020.com"><img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/logo.png" alt="Astrology" /> </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Steps -->

        <div class="mid-cirle">
            <div class="container">
                <div class="main_form">
                    <div class="row">
                        <div class="step__form">
                            <div class="sign-box__yourSign d-none">
                                <img id="yourSign" alt="" title="" />
                            </div>
                            <div class="step__count">Paso <span id="step__count">1</span> de 10</div>
                        </div>

                        <!---step-1-->
                        <div class="gtm-screen-zodiac step__1 step_1 card_div">
                            <div class="step_1_head d-flex align-items-center mb-0 mb-lg-2 w-700 mx-auto">
                                <div class="res_width">

                                </div>
                                <h1 class="text-start">Su lectura de tarot personal totalmente gratis</h1>
                            </div>

                            <!-- <p>Esta NÃO é uma leitura vaga e genérica que está habituado a ver em revistas e jornais. Essas são
                        <br><span>previsões surpreendentemente GRATUITAS,</span> que podem..</p> -->

                            <div id="main_section" class="">
                                <div class="row justify-content-center">
                                    <div class="col-xs-12 col-md-8 col-lg-6 mt15">
                                        <div class="row">
                                            <h3 class="ribbon">
                                                <strong id="header_pick_step" class="step-text ribbon-content elegante" data-content="Elija 3 cartas"></strong>
                                            </h3>
                                        </div>
                                    </div>

                                    <div id="card-holder" class="col-xs-12 col-sm-7 mt-0" style="position: static;"></div>
                                </div>
                                <div class="text-center d-none">
                                    <button class="btn_1 btn_1__scip step_1_btn" type="button">Siguiente pregunta &gt;&gt;
                                    </button>
                                </div>
                            </div>


                        </div>

                        <div class="clearfix"></div>


                        <div class="mid-main-box">

                            <!---step-2-->
                            <div class="gtm-screen-gender step__2 text-center custom_step_2 d-none" id="step_2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-36 color-e33afc">¿Cuál es su sexo?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-6 text-center">
                                                    <label class="choose_gender_btn">
                                                        <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/male.png" class="position-relative z-index-1 me-1 me-lg-3" />
                                                        <span class="position-relative z-index-1 montserrat text-white medium font24">Hombres</span><br />
                                                        <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" value="M" checked />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6">
                                                    <label class="choose_gender_btn">
                                                        <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/woman.png" class="position-relative z-index-1 me-1 me-lg-3" />
                                                        <span class="position-relative z-index-1 montserrat text-white medium font24">Mujeres</span><br />
                                                        <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="F" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <span class="error" id="step_2_error"></span>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_2_btn" type="button">Siguiente pregunta
                                                &gt;&gt;
                                            </button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_2_prev" onclick='back("1", "2")'><img alt="" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/pre_btn.png" />
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
                                            <h6 class="font-36 color-e33afc">¡Vaya! ¿Cuándo naciste?</h6>
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
                                                    <p class="date_text color-e33afc font-16">Esto ayudará a que la lectura
                                                        sea más precisa.</p>
                                                </div>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_3_btn" type="button">Siguiente pregunta
                                                &gt;&gt;
                                            </button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_3_prev" onclick='back("2", "3")'><img alt="" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/pre_btn.png" />
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----stwp-3-end--->
                            <!---step-4-->
                            <div class="gtm-screen-city step__4 text-center custom_step_4 d-none" id="step_4">
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
                                                    <input type="text" placeholder="Introduzca su ciudad" name="city" class="city_filed font24 medium montserrat text-center text-black" />
                                                    <span class="error" id="step_4_error"></span>
                                                </div>
                                                <p class="date_text color-e33afc font-16">Esto ayudará a que la lectura sea
                                                    más precisa.</p>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_4_btn" type="button">Siguiente pregunta
                                                &gt;&gt;
                                            </button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_4_prev" onclick='back("3", "4")'><img alt="" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/pre_btn.png" />
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
                                            <h6 class="font-36 color-e33afc">¿Sabes a qué hora naciste?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12 text-center">
                                                    <ul class="list-inline list-unstyled flex-columb">
                                                        <li class="list-inline-item">
                                                            <label class="choose_yesno_btn">
                                                                <span class="position-relative z-index-1 text-uppercase montserrat medium font24 text-white">Sí</span><br />
                                                                <input type="radio" name="yesno" class="gtm-birthtime" data-gtm-value="yes" value="1" checked />
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <label class="choose_yesno_btn">
                                                                <span class="position-relative z-index-1 text-uppercase montserrat medium font24 text-white">No</span><br />
                                                                <input type="radio" name="yesno" class="gtm-birthtime" data-gtm-value="no" value="2" />
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <p class="date_text color-e33afc font-16">Esto ayudará a que la lectura
                                                        sea más precisa.</p>
                                                </div>
                                                <button class="btn_1 btn_1__scip step_5_btn" type="button">Siguiente
                                                    pregunta &gt;&gt;
                                                </button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_5_prev" onclick='back("4", "5")'><img alt="" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/pre_btn.png" />
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
                                            <h6 class="font-36 color-e33afc">Introduzca las horas y los minutos con la mayor
                                                precisión posible</h6>
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
                                                <button class="btn_1 btn_1__scip step_6_btn" type="button">Siguiente
                                                    pregunta &gt;&gt;
                                                </button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_6_prev" onclick='back("5", "6")'><img alt="" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/pre_btn.png" />
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
                                            <h6 class="font-36 color-e33afc">¿Qué le preocupa?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-6 mb-10">
                                                    <label class="choose_concerns_btn">
                                                        <span class="position-relative z-index-1 montserrat medium font24 text-white">Trabajo</span><br />
                                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="work" value="work" checked />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6 mb-10">
                                                    <label class="choose_concerns_btn">
                                                        <span class="position-relative z-index-1 montserrat medium font24 text-white">Finanzas</span><br />
                                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="money" value="money" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6 mb-10">
                                                    <label class="choose_concerns_btn">
                                                        <span class="position-relative z-index-1 montserrat medium font24 text-white">Amor</span><br />
                                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="love" value="love" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6 mb-10">
                                                    <label class="choose_concerns_btn">
                                                        <span class="position-relative z-index-1 montserrat medium font24 text-white">General</span><br />
                                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="general" value="general" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <button class="btn_1 btn_1__scip step_7_btn" type="button">Siguiente
                                                    pregunta &gt;&gt;
                                                </button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_7_prev" onclick='back("6", "7")'><img alt="" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/pre_btn.png" />
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
                                            <h6 class="font-36 color-e33afc">¿Cómo te llamas?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-6">
                                                    <input type="text" placeholder="Nombre" name="first_name" class="born_input_field font24 medium montserrat text-white" />
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" placeholder="Apellido" name="last_name" class="born_input_field font24 medium montserrat text-white" />
                                                </div>
                                                <span class="error" id="step_8_error"></span>
                                                <button class="btn_1 btn_1__scip step_8_btn" type="button">Siguiente
                                                    pregunta &gt;&gt;
                                                </button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_8_prev" onclick='back("7", "8")'><img alt="" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/pre_btn.png" />
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
                                            <h6 class="font-36 color-e33afc">¿Dónde quieres conseguir tu videncia
                                                personalizada?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12 col-md-10">
                                                    <input type="email" placeholder="E-mail" name="email" class="gtm-email born_input_field font24 medium montserrat text-black input-email" required="" />
                                                    <span class="error" id="step_9_error"></span>

                                                </div>
                                                <div class="col-12 pt-50 text-center"></div>

                                                <button class="btn_1 btn_1__scip step_9_btn" type="submit">Siguiente
                                                    pregunta &gt;&gt;
                                                </button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_9_prev" onclick='back("8", "9")'><img alt="" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/pre_btn.png" />
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-9-end--->
                            <div id="loadImg">
                                <div class="loader"></div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="gtm-screen-pending step__10 text-center custom_step_9 step_10 d-none">
                                <div>
                                    <div>
                                        <h3 class="step_8__title text-center">
                                            Por favor, espere un momento, mientras le conecto con su<br />
                                            Angel Guard...
                                        </h3>

                                        <div class="bg-text-new1">
                                            <p class="text-white font18 montserrat fw-normal text-md-start">
                                                P.D. Para que tu confianza en mí sea merecida, quiero que sepas que respeto
                                                la normativa sobre privacidad y acceso a tus datos personales. Todo está
                                                aquí, en mi
                                                <a href="#privacy" class="cartonbox text-white" data-cb-type="inline" data-cb-hash="text">Política de Privacidad</a>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-10-->
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
                            <div class="gtm-screen-thankyou d-none text-center step_10">
                                @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer row mid-main-box">
            <div class="col-12">
                <h2 class="text-center"><?= print_dynamic_variable('disclaimer_title_es') ?></h2>
                <p class="text-center text-white"><?= print_dynamic_variable('disclaimer_text_es') ?> <?= print_dynamic_variable('address') ?></p>
            </div>
        </div>

        <!--f804-LU-new-astrology-final-footer -->
        <div class="text-center">
            <ul class="footer-links list-inline">
                <li class="px-3 px-md-4 px-xxl-5 list-inline-item"><a class="text-uppercase" href="https://starsandthemoon-2020.com">Home</a></li>
                <li class="px-3 px-md-4 px-xxl-5 list-inline-item"><a href="#terms" class="cartonbox text-uppercase" data-cb-type="inline" data-cb-hash="text">TÉRMINOS Y
                        CONDICIONES</a></li>
                <li class="px-3 px-md-4 px-xxl-5 list-inline-item"><a href="#privacy" class="cartonbox" data-cb-type="inline" data-cb-hash="text">Política de
                        privacidad</a></li>
                <li class="px-3 px-md-4 px-xxl-5 list-inline-item"><a href="#gdpr" class="cartonbox" data-cb-type="inline" data-cb-hash="text">GDPR</a></li>
                <li class="px-3 px-md-4 px-xxl-5 list-inline-item"><a href="#faq" class="cartonbox" data-cb-type="inline" data-cb-hash="text">FAQ</a></li>
            </ul>
        </div>
    </form>

    <!-- all popup -->


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

    <!-- Social icon Model  -->

    <!-- Social icon Model  -->

    <!--Cartonbox popup-->
    <script src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/cartonbox.min.js"></script>
    <script src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/cartonbox-connect.js"></script>
    <link rel="stylesheet" href="{{$asset_path}}assets/uicommon/landing/chris/message_video111/css/cartonbox.min.css">
    <!--Cartonbox popup-->

    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <!--<script src="{{$asset_path}}assets/js/custom.js "></script>-->
    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/custom.js"></script>

    <!-- pop up -->
    <script>
        $(document).ready(function() {
            $(".close-btn").click(function() {
                $("#social_model").modal("hide");
            });
            $(".step_2_prev").click(function() {
                $("#step_2").hide();
                $("#main_section").removeClass('d-none');
            });
            $(".privacy_btn_open").click(function() {
                $("#privacy_modal").modal("show");
            });
            $(".rules_btn_open").click(function() {
                $("#rules_modal").modal("show");
            });
            $(".gdpr_btn_open").click(function() {
                $("#gdpr_modal").modal("show");
            });
            $(".cookie_btn_open").click(function() {
                $("#cookie_modal").modal("show");
            });
            $(".terms_btn_open").click(function() {
                $("#terms_modal").modal("show");
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
                    degrees: '45'
                },
                resultName: 1,
                callback: function() {

                    $('.card_div').addClass('d-none');
                    $('#step_2').removeClass('d-none');

                    pageCount++;
                    pageCount_el.innerText = pageCount;
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