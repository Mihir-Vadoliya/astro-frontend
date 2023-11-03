@php($asset_path = '/landers/landingpages/100831/')
@php($srcImg = "/landers/sets/set45/")
@include('/landers/terms/dynamic/dynamic')
<!doctype html>
<html lang="en">

<head>
    <meta property="og:title" content="Moon Pion" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="Moon Pion" />
    <meta property="og:image" content="Moon Pion" />
    <meta property="og:image:width" content="37" />
    <meta property="og:image:height" content="37" />
    <meta property="og:site_name" content="Moon Pion" />
    <meta property="og:description" content="Moon Pion" />
    <meta name="author" content="Moon Pion">
    <meta name="keywords" content="Moon Pion">
    <meta name="title" content="Moon Pion">
    <meta name="description" content="Moon Pion">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Astrology Reading</title>
    <link rel='shortcut icon' href='assets/images/icon.png' type='image/x-icon'>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JS -->
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
    <!-- custom css -->

    <link href="{{ $asset_path }}assets/css/style.css" rel="stylesheet">

</head>


<!-- Hotjar Tracking Code for https://groceries-to-get.com -->
<script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 1457813,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>

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

@if($gtmContainerId)
@include('google.gtmcontainer')
@endif

<body>
    <div class="top-logo text-center">
        <div class="">
            <a href="https://starsandthemoon-2020.com"><img src="{{ $asset_path }}/assets/images/logo.png" alt="Astrology">
            </a>
        </div>
    </div>

    <div class="mid-cirle">
        <div class="container">

            <div class="row">
                <div class="step__form">
                    <div class="sign-box__yourSign d-none">
                        <img id="yourSign" alt="" title="">
                    </div>
                    <div class="step__count">
                        passo <span id="step__count">1</span> de 10
                    </div>
                </div>
            </div>



            <form name="g" id="nameForm" class="row justify-content-center main_form" method="post" action="{{request()->url()}}/insertlead">
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


                <div class="mid-main-box">
                    <!---step-1-->
                    <div class=" step__1 step_1 " id="step_1">
                        <div class="step_1_head align-items-center mb-2   ">

                            <h2 class="text-center">seleccione o seu signo do Zodíaco</h2>
                        </div>

                        <div class="button-box begtm-zodic v" data-bevent="1">
                            <div class="sign-box " data-gtm-value="aries" onclick="sign('#step_1','#step_2','aries')">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/aries.png" alt="aries" title="aries"></span>
                                    <span>Áries<span class="button-box__span-name">Mar 21 - Abr 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="2" data-sign="taurus">
                            <div class="sign-box    " data-sign="taurus" onclick="sign('#step_1','#step_2','taurus')">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/taurus.png" alt="taurus" title="taurus"></span>
                                    <span>Touro<span class="button-box__span-name">Abr 21 - Mai 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="3" data-sign="gemini">
                            <div class="sign-box   " data-sign="gemini" onclick="sign('#step_1','#step_2','gemini')">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/gemini.png" alt="gemini" title="gemini"></span>
                                    <span>Gêmeos<span class="button-box__span-name">Mai 21 - Jun 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="4" data-sign="cancer">
                            <div class="sign-box   " data-sign="cancer" onclick="sign('#step_1','#step_2','cancer')">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/cancer.png" alt="cancer" title="cancer"></span>
                                    <span>Câncer<span class="button-box__span-name">Jun 21 - Jul 22</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="5" data-sign="leo">
                            <div class="sign-box   " data-sign="leo" onclick="sign('#step_1','#step_2','leo')">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/leo.png" alt="leo" title="leo"></span>
                                    <span>Leão<span class="button-box__span-name">Jul 23 - Ago 22</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="6" data-sign="virgo">
                            <div class="sign-box   " data-sign="virgo" onclick="sign('#step_1','#step_2','virgo')">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/virgo.png" alt="virgo" title="virgo"></span>
                                    <span>Virgem<span class="button-box__span-name">Ago 23 - Set 21</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="7" data-sign="libra">
                            <div class="sign-box   " data-sign="libra" onclick="sign('#step_1','#step_2','libra')">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/libra.png" alt="libra" title="libra"></span>
                                    <span>Libra<span class="button-box__span-name">Set 22 - Out 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="8" data-sign="scorpio" onclick="sign('#step_1','#step_2','scorpio')">
                            <div class="sign-box">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/scorpio.png" alt="scorpio" title="scorpio"></span>
                                    <span>Escorpião<span class="button-box__span-name">Out 21 - Nov 20</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="9" data-sign="sagittarius" onclick="sign('#step_1','#step_2','sagittarius')">
                            <div class="sign-box   ">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/sagittarius.png" alt="sagittarius" title="sagittarius"></span>
                                    <span>Sagitário<span class="button-box__span-name">Nov 21 - Dez 21</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="10" data-sign="capricorn">
                            <div class="sign-box   " data-sign="capricorn" onclick="sign('#step_1','#step_2','capricorn')">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/capricorn.png" alt="capricorn" title="capricorn"></span>
                                    <span>Capricórnio<span class="button-box__span-name">Dez 22 - Jan 21</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic " data-bevent="11" data-sign="aquarius" onclick="sign('#step_1','#step_2','aquarius')">
                            <div class="sign-box ">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/aquarius.png" alt="aquarius" title="aquarius"></span>
                                    <span>Aquário<span class="button-box__span-name">Jan 22 - Fev 18</span></span>
                                </a>
                            </div>
                        </div>

                        <div class="button-box bev gtm-zodic  " data-bevent="12" data-sign="pisces" onclick="sign('#step_1','#step_2','pisces')">
                            <div class="sign-box  ">
                                <a href="#">
                                    <span class="sign-box__img"><img src="{{$srcImg}}/pisces.png" alt="pisces" title="pisces"></span>
                                    <span>Peixes<span class="button-box__span-name">Fev 19 - Mar 20</span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <!---step-2-->
                    <div class="gtm-screen-gender step__2 text-center custom_step_2 d-none " id="step_2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="font-36 color-e33afc">Qual é o seu sexo?</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">

                                        <div class="col-6 text-center">
                                            <label class="choose_gender_btn">
                                                <img src="{{$asset_path}}assets/images/male.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                <span class=" position-relative z-index-1 montserrat text-white  medium font24">Homem</span><br>
                                                <input type="radio" name="gender" value="M">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="choose_gender_btn">
                                                <img src="{{$asset_path}}assets/images/woman.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                <span class=" position-relative z-index-1 montserrat text-white  medium font24">Mulher</span><br>
                                                <input type="radio" name="gender" value="F">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <span class="step_2_error error d-none col-12 pt-20 text-center" style="color: red; font-weight: bold;">Por favor, escolha qualquer um</span>
                                    </div>
                                    <button class=" btn_1 btn_1__scip step_2_next " type="button" onclick="getgendercheck('#step_2', '#step_3')">Próxima pregunta >></button>
                                    <div class="control_btn">'
                                        <div class="pre_btn step_1_prev " onclick="backstep('.step_1','.step_2');"><img alt="" src="{{$asset_path}}assets/images/pre_btn.png"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---step-2-end--->
                    <!--step-3-->
                    <div class=" gtm-screen-birthdate step__3 text-center custom_step_3 d-none " id="step_3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="font-36 color-e33afc">Bem! Quando nasceu?</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-12">
                                            <div class="row justify-content-center">
                                                <div class="col-4">
                                                    <select name="day" class="form-select born_input_field font24 medium montserrat text-black day" aria-label="Default select example ">
                                                        <option value="" selected="selected">Dia</option>
                                                        @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <select name="month" class="form-select born_input_field font24 medium montserrat text-black month" aria-label="Default select example ">
                                                        <option value="" selected="selected">Mês</option>
                                                        @for ($i = 1; $i < 12; $i++) <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <select name="year" class="form-select born_input_field font24 medium montserrat text-black year" aria-label="Default select example ">
                                                        <option value="" selected="selected">Ano</option>
                                                        @for ($i = 1940; $i < 2002; $i++) <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                    </select>
                                                </div>

                                            </div>
                                            <p class="date_text color-e33afc font-16">Isso irá ajudar a fazer a leitura mais precisa. </p>
                                            <span class="step_3_error error d-none col-12 pt-20 text-center" style="color: red; font-weight: bold;">Indique a data completa</span>
                                        </div>
                                    </div>
                                    <button class="btn_1 btn_1__scip step_3_next" type="button" onclick="checkDateAndProceed('#step_3', '#step_4')">Próxima pregunta >></button>
                                    <!-- <button class=" btn_1 btn_1__scip step_3_next  " type="button" onclick="getdatestep('#step_3, #step_4')">Próxima pregunta >></button> -->
                                    <div class="control_btn">
                                        <div class="pre_btn step_2_prev" onclick="backstep('.step_2','.step_3');"><img alt="" src="{{$asset_path}}assets/images/pre_btn.png"></div>
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
                                    <h6 class="font-36 color-e33afc">Em que cidade você nasceu?</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-12 text-center">
                                            <input type="text" placeholder="Por favor, introduza a sua cidade" name="city" class="city_filed font24 medium montserrat text-center text-black">
                                            <span class="error" id="step_4_error"></span>
                                        </div>
                                        <p class="date_text color-e33afc font-16">Isto irá ajudar a tornar a sua clarividência mais precisa.</p>
                                        <span class="step_4_error error d-none col-12 pt-20 text-center" style="color: red; font-weight: bold;">Por favor, escolha qualquer um em</span>

                                    </div>
                                    <button class="btn_1 btn_1__scip step_4_next " type="button" onclick="getcountry('#step_4', '#step_5')">Próxima pregunta ></button>
                                    <div class="control_btn">
                                        <div class="pre_btn step_3_prev" onclick="backstep('.step_3','.step_4');"><img alt="" src="{{$asset_path}}assets/images/pre_btn.png"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---step-4-end--->
                    <!---step-5-->
                    <div class="gtm-screen-birthtimeknown  step__5 text-center custom_step_5 d-none " id="step_5">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="font-36 color-e33afc">Sabe que horas nasceu?</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-12 text-center">
                                            <ul class="list-inline list-unstyled flex-columb">
                                                <li class="list-inline-item know-birth-time-yes">
                                                    <label class="choose_yesno_btn">
                                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Sim</span><br>
                                                        <input type="radio" name="birth_time_know" value="yes" data-gtm-value="yes" class="gtm-birthtime">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li class="list-inline-item know-birth-time-no ">
                                                    <label class="choose_yesno_btn">
                                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Não</span><br>
                                                        <input type="radio" name="birth_time_know" value="no" data-gtm-value="no" class="gtm-birthtime">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <p class="date_text color-e33afc font-16">Isto irá ajudar a tornar a sua clarividência mais precisa.</p>
                                            <span class="step_5_error error d-none col-12 pt-20 text-center" style="color: red; font-weight: bold;">Por favor, escolha qualquer um em</span>

                                        </div>
                                        <button class="btn_1 btn_1__scip step_5_next " type="button" onclick="onTimeKnown('#step_5', '#step_6')">Próxima pregunta ></button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_5_prev" onclick="backstep('.step_4','.step_5');"><img alt="" src="{{$asset_path}}assets/images/pre_btn.png"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---step-5-end--->

                    <!---step-6-->
                    <div class="gtm-screen-birthtime step__6 text-center custom_step_6  d-none " id="step_6">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="font-36 color-e33afc">Por favor, introduza horas e minutos o mais exatos possível</h6>
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
                                        <button class="btn_1 btn_1__scip step_6_next" type="button" onclick="onTimeSelect('#step_6', '#step_7')">Próxima pregunta >></button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_6_prev" onclick="backstep('.step_5','.step_6');"><img alt="" src="{{$asset_path}}assets/images/pre_btn.png"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---step-6-end--->

                    <!---step-7-->
                    <div class="gtm-screen-concern step__7 text-center custom_step_7   step_7 d-none" id="step_7">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="font-36 color-e33afc">Quais são as suas preocupações?</h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row justify-content-center py-50">
                                        <div class="col-6  mb-10">
                                            <label class="choose_concerns_btn">
                                                <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Trabalho</span><br>
                                                <input type="radio" name="concerns" value="1" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6  mb-10">
                                            <label class="choose_concerns_btn">

                                                <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Finanças</span><br>
                                                <input type="radio" name="concerns" value="2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6 mb-10">
                                            <label class="choose_concerns_btn">
                                                <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Amor</span><br>
                                                <input type="radio" name="concerns" value="3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6  mb-10">
                                            <label class="choose_concerns_btn">

                                                <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Geral</span><br>
                                                <input type="radio" name="concerns" value="4">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <!-- <span class="step_7_error error d-none col-12 pt-20 text-center" style="color: red; font-weight: bold;" >Por favor, escolha qualquer um em</span> -->

                                        <button class="btn_1 btn_1__scip step_7_next" type="button" onclick="onConcernClick('#step_7','#step_8','concerns')">Próxima pregunta >></button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_7_prev" onclick="backstep('.step_6','.step_7');"><img alt="" src="{{$asset_path}}assets/images/pre_btn.png"></div>
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
                                    <h6 class="font-36 color-e33afc">Qual é o seu nome?</h6>
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
                                        <button class="btn_1 btn_1__scip step_8_next" type="button" onclick="getnamecheck('#step_8','#step_9')">Próxima pregunta >></button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_8_prev" onclick="backstep('.step_7','.step_8');"><img alt="" src="{{$asset_path}}assets/images/pre_btn.png"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---step-8-end--->
                    <!---step-9-->
                    <div class="gtm-screen-email step__9 text-center custom_step_9 d-none " id="step_9">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="font-36 color-e33afc">Onde quer obter a sua clarividência personalizada?</h6>
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
                                        <button type="submit" class="continue_btn btn_1  step_9_next" onclick="emailCheck('#step_9','#step_10')">Próxima pregunta ></button>
                                        <div class="control_btn">
                                            <div class="pre_btn step_9_prev" onclick="backstep('.step_8','.step_9');"><img alt="" src="{{$asset_path}}assets/images/pre_btn.png"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---step-9-end--->
                    <!---step-10-->
                    <div class="step__10 text-center custom_step_10 step_10 d-none" id="step_10">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row mb-4 mb-md-3 mb-xxl-5">

                                        <div class="heading_text text-center">
                                            <h4 class="text-md-center text-white font-18 mb-3 montserrat fw-normal">A sua confiança é admirável</h4>
                                            <h3 class="text-md-center  text-white font-20 fw-bold montserrat  mb-0">Irei imediatamente verificar suas informaçōes. A minha resposta irá ser enviada em algumas horas.</h3>
                                        </div>
                                    </div>
                                    <div class="bg-text-new1 mb-4 text-start">
                                        <p class="text-white font-16 montserrat fw-bold  text-md-start mb-4 ">Vá agora à sua caixa de entrada e descubra os presentes que te prometi: - O seu Checkup de Energia Positivo - O seu Talismã de 7 Dias de Absoluta-Proteção
                                        </p>
                                        <ul class="list-inline list-unstyled mb-0">
                                            <li class="text-white inbox-step-1 mb-2 font18 montserrat semibold">1. Vá para a sua caixa de entrada</li>
                                            <li class="text-white inbox-step-1 mb-2 font18 montserrat semibold">2. Verifique a sua caixa de entrada ou spam</li>
                                            <li class="text-white inbox-step-1 font18 montserrat semibold mb-2 ">3. Abra o meu e-mail e receba seus presentes de boas-vindas.</li>
                                            <li class="text-white inbox-step-1 font18 montserrat semibold">4. Siga nas mídias sociais</li>

                                        </ul>

                                    </div>

                                    <div class="bg-text-new1">
                                        <p class="text-white font18 montserrat fw-normal text-md-start">P.S. Para que a sua confiança em mim seja merecida, quero que saiba que respeito o regulamento relativo à privacidade e ao acesso aos seus dados pessoais. Tudo está aqui, na minha <a href="#privacy" class="cartonbox text-white" data-cb-type="inline" data-cb-hash="text">Política de Privacidade</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---step-10-end--->

                </div>
            </form>
        </div>

        <!-- step 11 - pending -->
        <section class="last_step_content d-none step_10" id="step_11">
            <div class="container">
                <div class="height-50"></div>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-7">
                        <h3 class="times fw-normal font-68 text-center mb-4 pb-0 text-white">
                            Por favor, esperem um momento, enquanto eu vos ponho em contacto com o vosso anjo da guarda...
                        </h3>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>

    </div>
    </div>
    <div class="footer">
        <ul class="footer-links">
            <li><a href="https://starsandthemoon-2020.com">Home</a></li>
            <li><a href="#terms" class="cartonbox" data-cb-type="inline" data-cb-hash="text">Termos de serviço</a></li>
            <li><a href="#privacy" class="cartonbox" data-cb-type="inline" data-cb-hash="text">Política de privacidade</a></li>
            <li><a href="#gdpr" class="cartonbox" data-cb-type="inline" data-cb-hash="text">GDPR</a></li>
            <li><a href="#faq" class="cartonbox" data-cb-type="inline" data-cb-hash="text">FAQ</a></li>
        </ul>
    </div>

    <div style="display: none;">
        <div id="terms">
            <div class="editor">
                <h2>Termos de serviço</h2>
                <p>
                    Esta isenção de responsabilidade (“Isenção de responsabilidade”) estabelece as diretrizes gerais, divulgações e termos de uso do site starsandthemoon-2020.com (“Site” ou “Serviço”) e qualquer um de seus produtos e serviços relacionados (coletivamente, “Serviços "). Esta isenção de responsabilidade é um acordo juridicamente vinculativo entre você (“Usuário”, “você” ou “seu”) e a starsandthemoon-2020 es una marca registrada de Astroveo B.V. (“starsandthemoon-2020 es una marca registrada de Astroveo B.V.”, “nós”, “nos” ou “nosso”). Se você estiver celebrando este contrato em nome de uma empresa ou outra entidade legal, você declara que tem autoridade para vincular tal entidade a este contrato, caso em que os termos “Usuário”, “você” ou “seu” devem se referir a tal entidade. Se você não tiver tal autoridade ou se não concordar com os termos deste contrato, não deverá aceitar este contrato e não poderá acessar e usar o Site e os Serviços. Ao acessar e usar o Site e os Serviços, você reconhece que leu, entendeu e concorda em ficar vinculado aos termos desta Isenção de Responsabilidade. Você reconhece que esta Isenção de Responsabilidade é um contrato entre você e a starsandthemoon-2020 es una marca registrada de Astroveo B.V., mesmo que seja eletrônico e não esteja fisicamente assinado por você, e rege o uso do Site e dos Serviços.
                </p>
                <br>
                <p>
                    <strong>Índice</strong>
                    <br><br>
                <ol class="wpembed-index">
                    <li>
                        <a href="#representation">Representação</a>
                    </li>
                    <li>
                        <a href="#content-and-postings">Conteúdo e postagens</a>
                    </li>
                    <li>
                        <a href="#compensation-and-sponsorship">Remuneração e patrocínio</a>
                    </li>
                    <li>
                        <a href="#reviews-and-testimonials">Comentários e depoimentos</a>
                    </li>
                    <li>
                        <a href="#indemnification-and-warranties">Indenização e garantias</a>
                    </li>
                    <li>
                        <a href="#changes-and-amendments">Alterações e emendas</a>
                    </li>
                    <li>
                        <a href="#acceptance-of-this-disclaimer">Aceitação desta isenção de responsabilidade</a>
                    </li>
                    <li>
                        <a href="#contacting-us">Entrando em contato conosco</a>
                    </li>
                </ol>
                <br><br>
                <strong id="representation">Representação</strong>
                <br><br>
                Quaisquer visões ou opiniões representadas no Site são pessoais e pertencem exclusivamente à starsandthemoon-2020 es una marca registrada de Astroveo B.V. e não representam as de pessoas, instituições ou organizações às quais a starsandthemoon-2020 es una marca registrada de Astroveo B.V. pode ou não estar associada em capacidade profissional ou pessoal, a menos que explicitamente declarado. Quaisquer pontos de vista ou opiniões não se destinam a difamar qualquer religião, grupo étnico, clube, organização, empresa ou indivíduo.
                <br><br>
                <strong id="content-and-postings">Conteúdo e postagens</strong>
                <br><br>
                Você não pode modificar, imprimir ou copiar qualquer parte do Site e dos Serviços. A inclusão de qualquer parte do Site e Serviços em outro trabalho, seja em formato impresso ou eletrônico ou de outra forma, ou inclusão de qualquer parte do Site e Serviços em outro recurso por incorporação, enquadramento ou de outra forma sem a permissão expressa da starsandthemoon-2020 es una marca registrada de Astroveo B.V. é proibida.
                <br><br>
                <strong id="compensation-and-sponsorship">Remuneração e patrocínio</strong>
                <br><br>
                Alguns dos links no site podem ser links afiliados. Isso significa que se você clicar no link e comprar um item, o starsandthemoon-2020 es una marca registrada de Astroveo B.V. receberá uma comissão de afiliado.
                <br><br>
                <strong id="reviews-and-testimonials">Comentários e depoimentos</strong>
                <br><br>
                Depoimentos são recebidos em várias formas através de uma variedade de métodos de envio. Os depoimentos não são necessariamente representativos de todos aqueles que usarão o Site e os Serviços, e a starsandthemoon-2020 es una marca registrada de Astroveo B.V. não se responsabiliza pelas opiniões ou comentários disponíveis no Site e não os compartilha necessariamente. Todas as opiniões expressas são estritamente as opiniões dos revisores.
                <br><br>
                Alguns depoimentos podem ter sido editados para maior clareza ou encurtados nos casos em que o depoimento original incluía informações irrelevantes sem relevância para o público em geral. Os depoimentos podem ser revisados quanto à autenticidade antes de serem disponibilizados para visualização pública.
                <br><br>
                <strong id="indemnification-and-warranties">Indenização e garantias</strong>
                <br><br>
                Embora tenhamos feito todos os esforços para garantir que as informações contidas no site estejam corretas, a starsandthemoon-2020 es una marca registrada de Astroveo B.V. não é responsável por quaisquer erros ou omissões ou pelos resultados obtidos com o uso dessas informações. Todas as informações no Site são fornecidas “como estão”, sem garantia de integridade, precisão, pontualidade ou dos resultados obtidos com o uso dessas informações, e sem garantia de qualquer tipo, expressa ou implícita. Em nenhum caso a starsandthemoon-2020 es una marca registrada de Astroveo B.V. será responsável perante você ou qualquer outra pessoa por qualquer decisão tomada ou ação tomada com base nas informações no site, ou por quaisquer danos consequenciais, especiais ou similares, mesmo se avisado da possibilidade de tais danos.
                <br><br>
                <strong id="changes-and-amendments">Alterações e emendas</strong>
                <br><br>
                Reservamo-nos o direito de modificar esta isenção de responsabilidade ou seus termos relacionados ao site e aos serviços a qualquer momento, a nosso critério. Quando o fizermos, enviaremos um e-mail para notificá-lo. Também podemos notificá-lo de outras maneiras a nosso critério, como por meio das informações de contato que você forneceu.
                <br><br>
                Uma versão atualizada desta isenção de responsabilidade entrará em vigor imediatamente após a publicação da isenção de responsabilidade revisada, a menos que especificado de outra forma. Seu uso continuado do Site e dos Serviços após a data efetiva da Isenção de Responsabilidade revisada (ou qualquer outro ato especificado naquele momento) constituirá seu consentimento para essas alterações.
                <br><br>
                <strong id="acceptance-of-this-disclaimer">Aceitação desta isenção de responsabilidade</strong>
                <br><br>
                Você reconhece que leu esta isenção de responsabilidade e concorda com todos os seus termos e condições. Ao acessar e usar o Site e os Serviços, você concorda em ficar vinculado a esta Isenção de responsabilidade. Se você não concordar em cumprir os termos desta Isenção de Responsabilidade, você não está autorizado a acessar ou usar o Site e os Serviços.
                <br><br>
                <strong id="contacting-us">Entrando em contato conosco</strong>
                <br><br>
                Se você tiver alguma dúvida, preocupação ou reclamação em relação a esta isenção de responsabilidade, recomendamos que você entre em contato conosco usando os detalhes abaixo:
                <br><br>
                <a href="https://starsandthemoon-2020.com/contact.php">https://starsandthemoon-2020.com/contact</a><br /><a href="mailto:support@starsandthemoon-2020.com">support@starsandthemoon-2020.com</a>
                <br><br>
                Este documento foi atualizado pela última vez em 6 de setembro de 2022
                </p>
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
                <h2>Política de Privacidade</h2>
                <p>
                    Damos grande importância à privacidade de seus usuários. Para garantir isso, criamos uma política que é inextricavelmente
                    vinculados aos Termos e Condições Gerais do Provedor. Você reconhece que o Provedor coleta
                    e processou as informações de registro e informações sobre seu uso do Serviço, incluindo o
                    informações identificáveis nele contidas para os fins detalhados na Política de Privacidade. Como um global
                    empresa, o Provedor ultrapassa cada vez mais as fronteiras de um país.</p><br>


                <p>O Serviço é fornecido como está (no estágio de desenvolvimento em que se encontra) e o Provedor aceita
                    não se responsabiliza nem emite quaisquer garantias ou garantias no caso de configurações pessoais,
                    informações ou mensagens não são salvas, ou não são salvas no devido tempo, ou se foram excluídas ou incorretamente
                    entregue. Para subscrever o Serviço, é necessário ter acesso à Internet e/ou
                    uma assinatura de comunicações móveis e pagar quaisquer taxas de serviço associadas a esse acesso. Você é obrigado
                    pagar todas as despesas incorridas na criação desse acesso. Você também é responsável por ver a conexão
                    de qualquer equipamento necessário, incluindo qualquer telefone celular ou computador pessoal ou quaisquer dispositivos que
                    podem ser necessários e estão em condições de funcionamento e adequados para uso em conexão com o Serviço.</p><br>

                <p>
                    <strong>Regras gerais</strong>
                    <br>
                    <br> Em relação ao uso do Serviço, você concorda com as regras gerais, regras de jogo, condições promocionais
                    e restrições estabelecidas pelo Provedor. O Prestador reserva-se o direito a todo o momento e à sua
                    próprio arbítrio, sem ser obrigado a emitir aviso prévio, para alterar estas regras gerais, regras de
                    jogar, condições promocionais e restrições. O Provedor tem o direito de anular contas que permaneceram
                    inativo por períodos consideráveis de tempo. Você concorda com o acordo pelo qual o Provedor assume
                    nenhuma responsabilidade ou obrigação para com você no caso de informações enviadas ou fornecidas por meio do
                    O serviço não foi salvo ou foi excluído por engano.
                </p><br>

                <p>
                    <strong>INFORMAÇÕES GERAIS.</strong>
                    <br>
                    <br> Estes Termos e Condições Gerais substituem todos os acordos anteriores entre você e o Provedor.
                    Se você usar qualquer serviço, material ou software adicional de terceiros, Termos Gerais adicionais
                    e Condições podem ser aplicáveis ​​a você. A lei europeia é aplicável à relação entre você e
                    o Provedor, independentemente de quaisquer disposições da lei internacional aplicável. As disputas serão apresentadas
                    ao seu tribunal nacional competente. Qualquer falha do Provedor em exercer ou invocar certos direitos ou
                    estipulações estabelecidas nos Termos e Condições Gerais não constituem de forma alguma uma renúncia ou renúncia
                    desses direitos ou estipulações. Se um tribunal de jurisdição competente for de opinião que qualquer estipulação
                    nos Termos e Condições Gerais não for aplicável, as partes concordam, no entanto, que o tribunal
                    deve tentar satisfazer os desejos das partes refletidos por essa estipulação, enquanto as outras estipulações
                    dos Termos e Condições Gerais permanecem inalterados.
                </p><br>

                <p>
                    <strong>SEGURANÇA E PROTEÇÃO.</strong>
                    <br>
                    <br> A infraestrutura e os programas são construídos e protegidos de forma que possam ser razoavelmente
                    assumiu que pessoas não autorizadas não podem ter acesso a qualquer informação sobre os usuários. Consulte
                    nossos Termos e Condições Gerais relativos à responsabilidade do Provedor.
                    <br>
                    <br> A aceitação desta política significa que o Provedor:
                    <br>
                    <br> - pode usar as informações ou uma combinação delas para executar o contrato entre você e o Provedor,
                    e para permitir o melhor uso possível do site do Provedor;
                    <br> - pode reutilizar as informações comunicadas por você no site ou via SMS;
                    <br> - pode informá-lo sobre ofertas, descontos, novos desenvolvimentos e serviços adicionais oferecidos pelo Provedor;
                    <br> - pode processar as informações em conexão com a formação ou manutenção de um relacionamento direto
                    entre o Provedor e/ou empresas selecionadas por ele e você para fins de recrutamento para
                    ou caridade. O Provedor pode anonimizar essa informação e usá-la ou oferecê-la a terceiros de forma anônima
                    Formato.
                    <br>
                    <br> Sua aceitação desta política
                    <br>
                    <br> Ao utilizar o Serviço do Provedor você concorda com esta Política de Privacidade e os Termos e Condições Gerais.
                    Se você não concordar com isso, não faça uso do nosso Serviço. Reservamo-nos o direito de alterar a qualquer momento,
                    modificar, estender ou limitar esta Política de Privacidade e os Termos e Condições Gerais. Aconselhamos por isso
                    que leia estas páginas regularmente.
                </p>
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
                <h2>GDPR</h2><br>
                <p>
                    <strong>Almirante de Ruijterweg 24 1056 GJ Amsterdam Holanda</strong>
                </p>

                <p>
                    Se você é um residente do Espaço Econômico Europeu ("EEE"), você tem certos direitos de proteção de dados e nos esforçaremos para tomar medidas razoáveis ​​para permitir que você corrija, altere, exclua ou restrinja o uso de seus Dados Pessoais. limite. Se você deseja saber quais informações pessoais mantemos sobre você e se deseja removê-las de nossos sistemas, entre em contato conosco. Em determinadas circunstâncias, você tem os seguintes direitos de proteção de dados:
                    <br><br>
                    (i) Você tem o direito de retirar seu consentimento quando tiver consentido anteriormente com o processamento de seus Dados Pessoais. Na medida em que a base legal para o processamento de seus Dados Pessoais seja o consentimento, você tem o direito de retirar esse consentimento a qualquer momento. A revogação não afeta a legalidade do processamento antes da revogação.
                    <br><br>
                    (ii) Você tem o direito de saber se seus Dados Pessoais estão sendo processados ​​por nós, obter informações sobre certos aspectos do processamento e obter uma cópia dos seus Dados Pessoais sendo processados.
                    <br><br>
                    (iii) Você tem o direito de verificar a exatidão de suas informações e solicitar que sejam atualizadas ou corrigidas. Você também tem o direito de solicitar que completemos quaisquer dados pessoais que acredite estarem incompletos.
                    <br><br>
                    (iv) Você tem o direito de se opor ao processamento de seus dados se o processamento for baseado em uma base legal que não seja o consentimento. Quando os dados pessoais forem processados ​​no interesse público, no exercício da autoridade oficial que nos é conferida ou por interesses legítimos por nós exercidos, você poderá se opor a tal processamento por motivos relacionados a uma situação específica para justificar a objeção. No entanto, você deve observar que, se seus Dados Pessoais forem processados ​​para fins de marketing direto, você poderá se opor a tal processamento a qualquer momento sem fornecer qualquer justificativa.
                    <br><br>
                    (v) Você tem o direito, em determinadas circunstâncias, de restringir o processamento de seus Dados Pessoais. Essas circunstâncias incluem: você contesta a exatidão de seus Dados Pessoais e precisamos verificar sua exatidão; o processamento é ilegal, mas você se opõe à exclusão de seus Dados Pessoais e solicita a restrição de seu uso; não precisamos mais de seus Dados Pessoais para fins de processamento, mas você precisa deles para estabelecer, exercer ou defender direitos legais; você se opôs ao processamento até que seja verificado se nossos motivos legítimos superam seus motivos legítimos. Quando o processamento é restrito,
                    <br><br>
                    (vi) Você tem o direito, em determinadas circunstâncias, de excluirmos suas informações pessoais. Essas circunstâncias incluem: os Dados Pessoais não são mais necessários em relação às finalidades para as quais foram coletados ou processados; retirar seu consentimento para processamento baseado em consentimento; você se opõe ao processamento sob certas regras da lei de proteção de dados aplicável; o processamento é para fins de marketing direto; e os dados pessoais foram processados ​​ilegalmente. No entanto, existem exceções ao direito de supressão, como quando o tratamento é necessário: para o exercício do direito à liberdade de expressão e informação; cumprir uma obrigação legal; ou para a determinação,
                    <br><br>
                    (vii) Você tem o direito de receber os Dados Pessoais que nos forneceu em um formato estruturado, comumente usado e legível por máquina e, quando tecnicamente viável, transferi-los para outro controlador sem impedimento nosso, desde que tal transferência não afeta negativamente os direitos e liberdades dos outros.
                    <br><br>
                    (viii) Você tem o direito de apresentar uma reclamação a uma autoridade de proteção de dados sobre nossa coleta e uso de suas informações pessoais. Se você não estiver satisfeito com o resultado de sua reclamação diretamente conosco, você tem o direito de apresentar uma reclamação à autoridade local de proteção de dados. Para obter mais informações, entre em contato com a autoridade local de proteção de dados no EEE. Esta disposição se aplica na medida em que seus Dados Pessoais sejam processados ​​por meios automatizados e que o processamento seja baseado em seu consentimento, em um contrato do qual você seja parte ou em obrigações pré-contratuais sob esse contrato.
                    <br><br>
                    Nota: Se você não receber o e-mail, verifique seu spam.
                    <br><br>
                    1) Envie sua mensagem para support@starsandthemoon-2020.com
                    <br><br>
                    2) Para nos ajudar a recuperar suas informações, inclua o seguinte:
                    Primeiro nome: :
                    Apelido: Data de
                    nascimento:(dd/mm/aaaa):
                    Correio eletrônico :
                    Telefone :
                    <br><br>
                    3) Envie sua solicitação com o motivo abaixo:
                    - Direito de acesso
                    - Direito de retirada
                    - Direito de exclusão ("direito a ser esquecido") (exemplo: exclusão de dados pessoais, encerramento de conta, etc.)
                    - Direito dos herdeiros
                    - Direito de oposição
                    - Outro pedido
                </p>
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
                <h2>FAQ</h2><br>
                <p>Adoraríamos ouvir de você. Confira nosso FAQ para perguntas e respostas rápidas e fáceis. Se você não encontrar o que está procurando, sinta-se à vontade para entrar em contato com nossa equipe de suporte ao cliente para obter assistência.</p>
                <br><br>
                <strong>O que é leitura de astrologia?</strong>
                <br><br>
                <p>Nosso serviço oferece os melhores trânsitos astrológicos e descrições do zodíaco. Nossos clientes desfrutam com orgulho da experiência mais incrível do mundo, descobrindo quem são a partir de suas descrições do zodíaco. Nada supera ter nosso próprio toque quando se trata de experiência pessoal. Descubra o poder inato de si mesmo.</p>
                <br>
                <strong>O que recebo com a Leitura de Astrologia?</strong><br><br>
                <p>Um acesso instantâneo às informações descritivas e instigantes, mas estimulantes, sobre você. Descubra quem você é exatamente e como você pode usar essas informações para descobrir sobre os outros e como eles valorizam você.</p><br>
                <strong>Como me inscrevi no Astrology Reading?</strong><br><br>
                <p>Ao se deparar com uma de nossas páginas promocionais e clicar no botão de inscrição. Confirmamos a sua inscrição nos nossos serviços enviando-lhe uma mensagem SMS para o seu telemóvel.</p><br>
                <strong>Há uma taxa para usar a leitura de astrologia?</strong><br><br>
                <p>Você é cobrado a taxa mencionada na página promocional que você visitou quando assinou o serviço. Você também pode encontrá-lo na mensagem de boas-vindas que você recebeu ao se inscrever e no lembrete mensal por SMS que você recebe de nós.</p><br>
                <strong>Como entro em contato com o Atendimento ao Cliente?</strong><br><br>
                <p>Nossa dedicada Equipe de Atendimento ao Cliente terá prazer em responder a todas as suas perguntas e resolver quaisquer problemas. Você pode nos enviar um e-mail <a href="mailto:support@starsandthemoon-2020.com">support@starsandthemoon-2020.com</a> Ou utilize o formulário de contato </p>
            </div>
        </div>
    </div>

    <!-- Social icon Model  -->

    <!-- Social icon Model  -->

    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!--Cartonbox popup-->
    <script src="{{$asset_path}}assets/js/cartonbox.min.js"></script>
    <script src="{{$asset_path}}assets/js/cartonbox-connect.js"></script>
    <link rel="stylesheet" href="{{$asset_path}}assets/css/cartonbox.min.css">
    <!--Cartonbox popup-->
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{$asset_path}}assets/js/custome.js"></script>




    <script type="text/javascript">
        $(document).ready(function() {
            $('.close').on('click', function() {
                $('#social_model').modal('hide');
            });
        });
    </script>

</body>

</html>