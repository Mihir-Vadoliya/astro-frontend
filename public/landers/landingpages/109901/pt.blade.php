@php($asset_path = '/landers/landingpages/109901/')
@php($srcImg = "/landers/sets/set21/")
@include('/landers/terms/dynamic/dynamic')
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$texts->top_title}}</title>
    <link rel='shortcut icon' href='{{ $asset_path }}assets/images/icon.png' type='image/x-icon'>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ $asset_path }}assets/css/style.css" rel="stylesheet">
    <link href="{{ $asset_path }}assets/css/css.css" rel="stylesheet">

    {{-- <script src="https://api.pushnami.com/scripts/v1/push/628c76e624a10a0014231eba"></script>--}}
    {{-- <link rel="manifest" href="{{ $asset_path }}manifest.json">--}}
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif

    <style>
        .error {
            padding-top: 15px;
            color: red;
        }
    </style>
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
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMLWT7W" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="top-logo text-center">
        <div class="">
            <a href="https://starsandthemoon-2020.com"><img src="{{$asset_path}}assets/images/logo.png" alt="Astrology">
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
                            passo <span id="step__count">1</span> de 10
                        </div>
                    </div>
                    <div class="mid-main-box">
                        <!---step-1-->
                        <div class="gtm-screen-zodiac step__1 step_1">
                            <div class="step_1_head align-items-center mb-2  mb-lg-4 ">
                                {{--<div class="res_width">
                                <img src="{{$asset_path}}assets/images/Christin.jpg" alt="Christin" class="img-fluid rounded-circle">
                            </div>--}}
                            <h2 class="text-center">{{$texts->p_head}}</h2>
                        </div>

                        <!-- <p>Esta NÃO é uma leitura vaga e genérica que está habituado a ver em revistas e jornais. Essas são
                            <br><span>previsões surpreendentemente GRATUITAS,</span> que podem..</p> -->

                        <div class="button-box bev" data-bevent="1" data-sign="aries">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="aries">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/aries.png" alt="aries" title="aries"></span>
                                    <span>{{$texts->aries}}<span class="button-box__span-name">{{$texts->March}} 21 - {{$texts->April}} 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="2" data-sign="taurus">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="taurus">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/taurus.png" alt="taurus" title="taurus"></span>
                                    <span>{{$texts->taurus}}<span class="button-box__span-name">{{$texts->April}} 21 - {{$texts->May}} 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="3" data-sign="gemini">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="gemini">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/gemini.png" alt="gemini" title="gemini"></span>
                                    <span>{{$texts->gemini}}<span class="button-box__span-name">{{$texts->May}} 21 - {{$texts->June}} 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="4" data-sign="cancer">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="cancer">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/cancer.png" alt="cancer" title="cancer"></span>
                                    <span>{{$texts->cancer}}<span class="button-box__span-name">{{$texts->June}} 21 - {{$texts->July}} 22</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="5" data-sign="leo">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="leo">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/leo.png" alt="leo" title="leo"></span>
                                    <span>{{$texts->leo}}<span class="button-box__span-name">{{$texts->July}} 23 - {{$texts->August}} 22</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="6" data-sign="virgo">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="virgo">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/virgo.png" alt="virgo" title="virgo"></span>
                                    <span>{{$texts->virgo}}<span class="button-box__span-name">{{$texts->August}} 23 - {{$texts->September}} 21</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="7" data-sign="libra">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="libra">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/libra.png" alt="libra" title="libra"></span>
                                    <span>{{$texts->libra}}<span class="button-box__span-name">{{$texts->September}} 22 - {{$texts->October}} 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="8" data-sign="scorpio">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="scorpio">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/scorpio.png" alt="scorpio" title="scorpio"></span>
                                    <span>{{$texts->scorpio}}<span class="button-box__span-name">{{$texts->October}} 21 - {{$texts->November}} 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="9" data-sign="sagittarius">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="sagittarius">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/sagittarius.png" alt="sagittarius" title="sagittarius"></span>
                                    <span>{{$texts->sagitar}}<span class="button-box__span-name">{{$texts->November}} 21 - {{$texts->December}} 21</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="10" data-sign="capricorn">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="capricorn">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/capricorn.png" alt="capricorn" title="capricorn"></span>
                                    <span>{{$texts->capricorn}}<span class="button-box__span-name">{{$texts->December}} 22 - {{$texts->January}} 21</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="11" data-sign="aquarius">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="aquarius">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/aquarius.png" alt="aquarius" title="aquarius"></span>
                                    <span>{{$texts->aquarius}}<span class="button-box__span-name">{{$texts->January}} 22 - {{$texts->February}} 18</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev" data-bevent="12" data-sign="pisces">
                            <div class="sign-box">
                                <a href="#" class="gtm-zodiac" data-gtm-value="pisces">
                                    <span class="sign-box__img"><img src="{{$asset_path}}assets/images/pisces.png" alt="pisces" title="pisces"></span>
                                    <span>{{$texts->pisces}}<span class="button-box__span-name">{{$texts->February}} 19 - {{$texts->March}} 20</span></span>
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
                                    <h6 class="font-36 color-e33afc">{{$texts->h2_gender}}</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">

                                        <div class="col-6 text-center">
                                            <label class="choose_gender_btn">
                                                <img src="{{$asset_path}}assets/images/male.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                <span class=" position-relative z-index-1 montserrat text-white  medium font24">{{$texts->man}}</span><br>
                                                <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" value="M" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="choose_gender_btn">
                                                <img src="{{$asset_path}}assets/images/woman.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                <span class=" position-relative z-index-1 montserrat text-white  medium font24">{{$texts->woman}}</span><br>
                                                <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="F">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <span class="error" id="step_2_error"></span>
                                    </div>
                                    <button class="btn_1 btn_1__scip step_2_btn" type="button">{{$texts->continue}}</button>
                                    <div class="control_btn">
                                        <div class="pre_btn step_2_prev" onclick='back("1", "2")'><img alt="" src="{{$asset_path}}assets/images/pre_btn.png">
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
                                    <h6 class="font-36 color-e33afc">{{$texts->h2_born}}</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-12">
                                            <div class="row justify-content-center">
                                                <div class="col-4">
                                                    <select name="day" class="form-select born_input_field font24 medium montserrat text-black day" aria-label="Default select example ">
                                                        <option value="" selected="selected">{{$texts->day_born}}</option>
                                                        @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <select name="month" class="form-select born_input_field font24 medium montserrat text-black month" aria-label="Default select example ">
                                                        <option value="" selected="selected">{{$texts->month_born}}</option>
                                                        @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <select name="year" class="form-select born_input_field font24 medium montserrat text-black year" aria-label="Default select example ">
                                                        <option value="" selected="selected">{{$texts->year_born}}</option>
                                                        @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                    </select>
                                                </div>
                                                <span class="error" id="step_3_error"></span>
                                            </div>
                                            <p class="date_text color-e33afc font-16">{{$texts->p_help}} </p>
                                        </div>
                                    </div>
                                    <button class="btn_1 btn_1__scip step_3_btn" type="button">{{$texts->continue}}</button>
                                    <div class="control_btn">
                                        <div class="pre_btn step_3_prev" onclick='back("2", "3")'><img alt="" src="{{$asset_path}}assets/images/pre_btn.png">
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
                                    <h6 class="font-36 color-e33afc">{{$texts->h2_city}}</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-12 text-center">
                                            <input type="text" placeholder="Por favor, introduza a sua cidade" name="city" class="city_filed font24 medium montserrat text-center text-black">
                                            <span class="error" id="step_4_error"></span>
                                        </div>
                                        <p class="date_text color-e33afc font-16">{{$texts->p_help}}</p>
                                    </div>
                                    <button class="btn_1 btn_1__scip step_4_btn" type="button">{{$texts->continue}}</button>
                                    <div class="control_btn">
                                        <div class="pre_btn step_4_prev" onclick='back("3", "4")'><img alt="" src="{{$asset_path}}assets/images/pre_btn.png">
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
                                    <h6 class="font-36 color-e33afc">{{$texts->h2_time}}</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-12 text-center">
                                            <ul class="list-inline list-unstyled flex-columb">
                                                <li class="list-inline-item">
                                                    <label class="choose_yesno_btn">
                                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">{{$texts->time_yes}}</span><br>
                                                        <input type="radio" name="yesno" class="gtm-birthtime" data-gtm-value="yes" value="1" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li class="list-inline-item">
                                                    <label class="choose_yesno_btn">
                                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">{{$texts->time_no}}</span><br>
                                                        <input type="radio" name="yesno" class="gtm-birthtime" data-gtm-value="no" value="2">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <p class="date_text color-e33afc font-16">{{$texts->p_help}}</p>
                                        </div>
                                        <button class="btn_1 btn_1__scip step_5_btn" type="button">{{$texts->continue}}</button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_5_prev" onclick='back("4", "5")'><img alt="" src="{{$asset_path}}assets/images/pre_btn.png">
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
                                    <h6 class="font-36 color-e33afc">{{$texts->h2_minit}}</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-6">
                                            <select name="tobhr" class="form-select born_input_field font24 medium montserrat text-black hour" aria-label="Default select example ">
                                                <option value="" selected="selected">{{$texts->hour}}</option>
                                                @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <select name="tobmin" class="form-select born_input_field font24 medium montserrat text-black min" aria-label="Default select example">
                                                <option value="" selected="selected">{{$texts->minit}}</option>
                                                @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                            </select>
                                        </div>
                                        <span class="error" id="step_6_error"></span>
                                        <button class="btn_1 btn_1__scip step_6_btn" type="button">{{$texts->continue}}</button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_6_prev" onclick='back("5", "6")'><img alt="" src="{{$asset_path}}assets/images/pre_btn.png">
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
                                    <h6 class="font-36 color-e33afc">{{$texts->h2_consern}}</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-6  mb-10">
                                            <label class="choose_concerns_btn">
                                                <span class=" position-relative z-index-1  montserrat  medium font24 text-white">{{$texts->work}}</span><br>
                                                <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="work" value="work" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6  mb-10">
                                            <label class="choose_concerns_btn">

                                                <span class=" position-relative z-index-1  montserrat  medium font24 text-white">{{$texts->money}}</span><br>
                                                <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="money" value="money">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6 mb-10">
                                            <label class="choose_concerns_btn">
                                                <span class=" position-relative z-index-1  montserrat  medium font24 text-white">{{$texts->happy}}</span><br>
                                                <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="love" value="love">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6  mb-10">
                                            <label class="choose_concerns_btn">

                                                <span class=" position-relative z-index-1  montserrat  medium font24 text-white">{{$texts->general}}</span><br>
                                                <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="general" value="general">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <button class="btn_1 btn_1__scip step_7_btn" type="button">{{$texts->continue}}</button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_7_prev" onclick='back("6", "7")'><img alt="" src="{{$asset_path}}assets/images/pre_btn.png">
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
                                    <h6 class="font-36 color-e33afc">{{$texts->h2_name}}</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-6">
                                            <input type="text" placeholder="Primeiro nome" name="first_name" class="born_input_field font24 medium montserrat text-white">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" placeholder="Sobrenome" name="last_name" class="born_input_field font24 medium montserrat text-white">
                                        </div>
                                        <span class="error" id="step_8_error"></span>
                                        <button class="btn_1 btn_1__scip step_8_btn" type="button">{{$texts->continue}}</button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_8_prev" onclick='back("7", "8")'><img alt="" src="{{$asset_path}}assets/images/pre_btn.png">
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
                                    <h6 class="font-36 color-e33afc">{{$texts->h2_personal}}</h6>
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

                                        <button class="btn_1 btn_1__scip step_9_btn" type="submit">{{$texts->continue}}</button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_9_prev" onclick='back("8", "9")'><img alt="" src="{{$asset_path}}assets/images/pre_btn.png">
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
                                @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')

                            </div>
                        </div>
                    </div>
                    <!---step-10-->
                    <style type="text/css">
                        .gtm-screen-thankyou li:before {
                            background-color: white;
                        }
                    </style>
                    <div class="gtm-screen-thankyou text-center step_10 d-none">
                        @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
                    </div>
                    <!---step-9-end--->


                    <div class="clearfix"></div>


                </div>
        </div>
        </form>
    </div>
    </div>
    <div class="footer row mid-main-box">
        <div class="col-12">
            <h2 class="text-center"><?= print_dynamic_variable('disclaimer_title_pt') ?></h2>
            <p class="text-center text-white"><?= print_dynamic_variable('disclaimer_text_pt') ?> <?= print_dynamic_variable('address') ?></p>
        </div>
    </div>
    <div class="">
        <ul class="footer-links">
            <li><a href="https://starsandthemoon-2020.com">{{$texts->home}}</a></li>
            <li><a href="#terms" class="cartonbox" data-cb-type="inline" data-cb-hash="text">{{$texts->terms}}</a></li>
            <li><a href="#privacy" class="cartonbox" data-cb-type="inline" data-cb-hash="text">{{$texts->privacy}}</a></li>
            <li><a href="#gdpr" class="cartonbox" data-cb-type="inline" data-cb-hash="text">GDPR</a></li>
            <li><a href="#faq" class="cartonbox" data-cb-type="inline" data-cb-hash="text">{{$texts->faq}}</a></li>
        </ul>
    </div>

    <div style="display: none;">
        <div id="terms">
            <div class="editor">
                @include('/landers/terms/star-moon/pt/terms')
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
                @include('/landers/terms/star-moon/pt/privacy')
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
                @include('/landers/terms/star-moon/pt/gdpr')
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
                @include('/landers/terms/star-moon/pt/faq')
            </div>
        </div>

        <div id="privacy-2">
            <div class="editor">
                @include('/landers/terms/star-moon/pt/privacy-2')
            </div>
        </div>
    </div>
    <!-- Social icon Model  -->

    <!-- Social icon Model  -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!--Cartonbox popup-->
    <script src="{{$asset_path}}assets/js/cartonbox.min.js"></script>
    <script src="{{$asset_path}}assets/js/cartonbox-connect.js"></script>
    <link rel="stylesheet" href="{{$asset_path}}assets/css/cartonbox.min.css">
    <!--Cartonbox popup-->
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.close').on('click', function() {
                $('#social_model').modal('hide');
            });
        });
    </script>
</body>

</html>
