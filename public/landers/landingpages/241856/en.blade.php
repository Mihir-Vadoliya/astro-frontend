@php($asset_path = '/landers/landingpages/241856/')
@php($srcImg = "/landers/sets/set7/")
@include('/landers/terms/dynamic/dynamic')

<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Astrology offerpage Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="astro-answers-2020">
    <meta name="keywords" content="astro-answers-2020">
    <meta name="title" content="astro-answers-2020">
    <meta name="description" content="astro-answers-2020">

    <meta property="og:title" content="astro-answers-2020" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="astro-answers-2020" />
    <meta property="og:image" content="{{$asset_path}}assets/images/hero_bg.jpg" />
    <meta property="og:image:width" content="37" />
    <meta property="og:image:height" content="37" />
    <meta property="og:site_name" content="astro-answers-2020" />
    <meta property="og:description" content="astro-answers-2020" />
    <!-- Astrology offerpage favicon -->
    <link rel="shortcut icon" href="{{$asset_path}}assets/images/astrology-offer-favicon.png" />

    <!-- Astrology offerpage all CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{$asset_path}}assets/css/stye.css" rel="stylesheet">

    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>

    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N8T952D2TZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-N8T952D2TZ');
    </script>

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

    <title>{{$texts->top_title}}</title>
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
        <header class="astrology_offerpage_head header pt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 text-center">
                        <a href="https://astro-answers-2020.com"><img src="{{$asset_path}}assets/images/astrology-offer-logo.png" class="img-fluid mb-3"></a>
                    </div>

                </div>
            </div>
        </header>
        <!-- Astrology offerpage all steps -->
        <form name="g" id="nameForm" class="row justify-content-center main_form" method="post" action="{{request()->url()}}/insertlead">
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

            <!-- Astrology offerpage step 1 -->
            <section class="astrology-offerpage-step-1 step_1_content common_cls_display1" id="step_1">
                <div class="container">
                    <h1 class="times fw-bold font-100 text-center sky-color mb-0 pb-0">{{$texts->h1}}</h1>
                    <h3 class="times fw-bold font-62 text-white text-center mb-4 pb-0">{{$texts->h1_1}}</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-7">
                            <div class="d-flex flex-wrap justify-content-center justify-md-content-between mb-5">
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="aries">
                                        <img src="{{$srcImg}}aries.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->aries}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/3 - 20/4</span>
                                        <input type="radio" name="astro" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="taurus">
                                        <img src="{{$srcImg}}taurus.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->taurus}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/4 - 20/5</span>
                                        <input type="radio" name="astro" value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button" data-sign="gemini">
                                        <img src="{{$srcImg}}gemini.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->gemini}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/5 - 20/6</span>
                                        <input type="radio" name="astro" value="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                    <label class="radio_cus_button" data-sign="cancer">
                                        <img src="{{$srcImg}}cancer.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->cancer}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/6 - 22/7</span>
                                        <input type="radio" name="astro" value="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="leo">
                                        <img src="{{$srcImg}}leo.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->leo}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">23/7 - 22/8</span>
                                        <input type="radio" name="astro" value="5">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button" data-sign="virgo">
                                        <img src="{{$srcImg}}virgo.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->virgo}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"> 23/8 - 21/9</span>
                                        <input type="radio" name="astro" value="6">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="libra">
                                        <img src="{{$srcImg}}libra.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->libra}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">22/9 - 20/10</span>
                                        <input type="radio" name="astro" value="7">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                    <label class="radio_cus_button" data-sign="scorpio">
                                        <img src="{{$srcImg}}scorpio.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->scorpio}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/10 - 20/11</span>
                                        <input type="radio" name="astro" value="8">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button" data-sign="sagittarius">
                                        <img src="{{$srcImg}}sagittarius.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->sagitar}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">21/11 - 21/12</span>
                                        <input type="radio" name="astro" value="9">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="capricorn">
                                        <img src="{{$srcImg}}capricorn.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->capricorn}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">22/12 - 21/1</span>
                                        <input type="radio" name="astro" value="10">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="aquarius">
                                        <img src="{{$srcImg}}aquarius.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->aquarius}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">22/1 - 18/2</span>
                                        <input type="radio" name="astro" value="11">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-0">
                                    <label class="radio_cus_button" data-sign="pisces">
                                        <img src="{{$srcImg}}pisces.png" class="position-relative z-index-1 pb-3"><br>
                                        <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>{{$texts->pisces}}</i></span><br>
                                        <span class="text-center text-white times fw-bold font-20 position-relative z-index-1">19/2 - 20/3</span>
                                        <input type="radio" name="astro" value="12">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new step 2 -->
            <section class="select_gender d-none" id="step_2">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->h2_gender}}</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/male-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                        <span class=" position-relative z-index-1 montserrat text-white  medium font24">{{$texts->man}}</span><br>
                                        <input type="radio" name="gender" checked="" value="M">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="choose_gender_btn">
                                        <img src="{{$asset_path}}assets/images/female-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                        <span class=" position-relative z-index-1 montserrat text-white medium font24">{{$texts->woman}}</span><br>
                                        <input type="radio" name="gender" value="F">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block" onclick="back(1,2);">{{$texts->back}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 3 -->
            <section class="select_born_date d-none" id="step_3">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->h2_born}}</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row">
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
                                <span class="error" style="display:none;">{{$texts->error_date}}</span>
                                <div class="col-12 ">
                                    <div class="text-center">
                                        <p class="text-white font-16 times pt-3">{{$texts->p_help}}</p>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">{{$texts->next}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 4 -->
            <section class="select_city d-none" id="step_4">
                <div class="conatiner">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->city_question}}</h3>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row justify-content-center mx-0 w-100">
                                <div class="col-12 col-xxl-10">
                                    <input type="text" name="city" placeholder="city" class="enter_city font24 medium montserrat text-center text-white">
                                </div>
                                <div class="col-12 ">
                                    <div class="text-center">
                                        <p class="text-white font-16 times pt-3">{{$texts->p_help}}</p>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">{{$texts->next}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 5 -->
            <section class="you_know_born_time d-none" id="step_5">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->time_question}}</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-xl-10 col-xxl-12">
                            <ul class="list-inline list-unstyled text-center">
                                <li class="list-inline-item know-birth-time-yes">
                                    <label class="choose_yesno_btn">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">{{$texts->yes}}</span><br>
                                        <input type="radio" name="birth_time_know" value="yes" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item know-birth-time-no">
                                    <label class="choose_yesno_btn">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">{{$texts->no}}</span><br>
                                        <input type="radio" name="birth_time_know" value="no">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 ">
                            <div class="text-center">
                                <p class="text-white font-16 times pt-3">{{$texts->p_help}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 6 -->
            <section class="select_hour_minutes d-none" id="step_6">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->time}}</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center py-50">
                                <div class="col-6">
                                    <select name="tobhr" class="form-select born_input_field font24 medium montserrat text-black hour" aria-label="Default select example">
                                        <option value="" selected="selected">{{$texts->hour}}</option>
                                        @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select name="tobmin" class="form-select born_input_field font24 medium montserrat text-black min" aria-label="Default select example">
                                        <option value="" selected="selected">{{$texts->mins}}</option>
                                        @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">{{$texts->next}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new steps 7 -->
            <section class="select_your_concerns d-none" id="step_7">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->h2_consern}}</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center py-50">
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">{{$texts->work}}</span><br>
                                        <input type="radio" name="concerns" value="1" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">{{$texts->money}}</span><br>
                                        <input type="radio" name="concerns" value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">{{$texts->love}}</span><br>
                                        <input type="radio" name="concerns" value="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">{{$texts->general}}</span><br>
                                        <input type="radio" name="concerns" value="4">
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
            <section class="enter_name_det d-none" id="step_8">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->h2_name}}</h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input type="text" placeholder="First name" name="first_name" class="enter_name_det_field font24 medium montserrat text-white">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Last name" name="last_name" class="enter_name_det_field font24 medium montserrat text-white">
                                </div>
                                <span class="error2" style="display:none;">{{$texts->name_error}}</span>
                                <div class="col-12 text-center pt-4">
                                    <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">{{$texts->next}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <!-- new step 9 -->
            <section class="gtm-screen-email enter_email_field d-none" id="step_9">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->h2_personal}}</h3>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-7">
                            <div class="row justify-content-center mx-0 w-100">
                                <div class="col-12  col-xxl-11">
                                    <input type="email" placeholder="E-mail" name="email" required class="enter_city font24 medium montserrat text-center text-white">
                                    <fieldset class="step_mail__white-box mt-3">
                                        <legend class="legend fw-bold">Free optional gift</legend>
                                        <label class="check_text"><input type="checkbox" name="coreg" value="true">
                                            My friend Ava can help you detect your POTENTIAL for WEALTH and GOOD FORTUNE! Get her Free Reading Now!</label>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-lg-10 col-xxl-11 pt-4 text-center">

                                    <button type="submit" class="all_continue_btn font-20 text-uppercase text-center w-100 text-white d-inline-block">{{$texts->button_free}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>

            <section class="last_step_content gtm-screen-pending d-none">
                <div class="container">
                    <div class="height-50"></div>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-7">
                            <h6 class="fw-normal  text-white text-center mb-0 font-18 pb-0">{{$texts->check_text}}</h6>
                            <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->wait_while_i_am_connecting_you}}</h3>
                            <p class="font-16 fw-normal text-white mb-0 text-center"><b>{{$texts->your_devoted_friend}}</b></p>
                            <p class="font-16 fw-normal text-white text-center">{{$texts->blanche}}</p>
                            <p class="font-16 fw-normal text-white text-center">{{$texts->tip_text}}</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- new step 10 -->
            <style>
                .gtm-screen-thankyou li:before {
                    background-color: white;
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
            </style>
            <section class="last_step_content gtm-screen-thankyou d-none" id="step_10">
                @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
            </section>


      


            <!--<div class="container">
                <div class="height-50"></div>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-7">
                            <h6 class="fw-normal  text-white text-center mb-0 font-18 pb-0">{{$texts->check_text}}</h6>
                            <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">{{$texts->check_text_1}}</h3>
                            <p class="font-16 fw-normal text-white text-center">{{$texts->check_text_2}}</p>
                            <ul class="text-center list-inline list-unstyled">
                                <li class="font-16 fw-normal text-white">{{$texts->check_text_list1}}</li>
                                <li class="font-16 fw-normal text-white">{{$texts->check_text_list2}}</li>
                                <li class="font-16 fw-normal text-white">{{$texts->check_text_list3}}</li>
                            </ul>
                            <p class="font-16 fw-normal text-white mb-0 text-center"><b>{{$texts->your_devoted_friend}}</b></p>
                            <p class="font-16 fw-normal text-white text-center">{{$texts->blanche}}</p>
                            <p class="font-16 fw-normal text-white text-center">{{$texts->tip_text}}</p>
                        </div>
                    </div>
                </div> -->
    </div>
        </form>
        <!-- Astrology offerpage footer -->

        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                <h3 class="text-center text-white fw-bold pb-2"><?= print_dynamic_variable('disclaimer_title_en') ?></h3>
                <p class="text-center text-white pb-2">
                    <?= print_dynamic_variable('disclaimer_text_en') ?>
                    <?= print_dynamic_variable('address') ?>
                </p>
            </div>
        </div>

        <footer class=" footer position-unset">
            <div class=" container">
                <div id="footer">
                    <ul class="footer_menu text-center list-inline list-unstyled">
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1  pe-xxl-1">
                            <a href="https://astro-answers-2020.com" class="text-white text-uppercase text-decoration-none home_modal_open times font-20">{{$texts->home}}</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1  pe-xxl-1">
                            <a href="javascript:void(0);" class="text-white text-uppercase text-decoration-none tos_modal_open times font-20">{{$texts->terms}}</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                            <a href="javascript:void(0);" class="text-decoration-none text-uppercase cnt_pp_open  text-white times font-20">{{$texts->privacy}}</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                            <a href="javascript:void(0);" class="text-decoration-none text-uppercase gdpr_pp_open  text-white times font-20">GDPR</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1  pe-xxl-1">
                            <a href="https://astro-answers-2020.com/faq.php" class="text-white text-uppercase text-decoration-none help_pp_open times font-20">{{$texts->faq}}</a>
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
                <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Terms & Conditions</h5>
                <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    @include('landers.terms.astroanswers2020.en.terms')
                </div>
            </div>
        </div>
    </div>
    <!-- privacy policy modal -->
    <div class="astrology-offerpage-hlp-pop modal fade contact_us_popup privacy-1" id="help_pp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0 border-0">
                <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Privacy policy</h5>
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
    <!-- GDPR    modal -->
    <div class="astrology-offerpage-hlp-pop modal fade contact_us_popup" id="gdpr_pp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Astrology offerpage custom js -->
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js "></script>

</body>

</html>
