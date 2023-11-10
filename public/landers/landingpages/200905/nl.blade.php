@php($asset_path = '/landers/landingpages/200905/')
@php($srcImg = "/landers/sets/set21/")
@include('/landers/terms/dynamic/dynamic')
<!doctype html>
<html lang="nl">

<head>
    <!-- function-tool Required meta tags -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--function-tool -favicon -->
    <link rel="shortcut icon" href="{{ $asset_path }}assets/images/favicon.png" />

    <!-- function-tool Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ $asset_path }}assets/css/style.css" rel="stylesheet">

    <script src="https://api.pushnami.com/scripts/v1/push/628c76e624a10a0014231eba"></script>
    <link rel="manifest" href="{{ $asset_path }}manifest.json">
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
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

    <style>
        .error {
            text-align: center;
            color: red;
            padding-top: 10px;
        }
    </style>
    <title>{{$texts->top_title}}</title>
</head>

<body>


    <!-- function-tool main banner start -->
    <section class="steps_page_banner position-relative">
        <div class="container">
            <div class="steps_banner_text">
                <div class="row">
                    <div class="col-3 col-md-3 col-lg-3 col-xl-2 col-xxl-2">

                    </div>

                    <div class="col-9 col-md-6 col-lg-6 col-xl-8 col-xxl-8 my-auto">
                        <div class="s_banner_right_cnt text-start text-md-center">
                        </div>
                    </div>

                    <div class="col-9 col-md-3 col-lg-3 col-xl-2 col-xxl-2 my-auto order-first order-md-last">
                        <div class="per_image2 text-start text-md-center">
                            <a href="https://function-tool.com" class="inner_logo1"><img src="{{ $asset_path }}assets/images/astroveo-step-page-logo.png" class="img-fluid"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- function-tool main banner end -->

    <!-- Choose your zodiac sign start -->
    <!-- step 1  -->
    <section class="gtm-screen-zodiac choose_zodiac py-60" id="step_1">
        <div class="container">
            <h2 class="swis721_blkcn_btblack font36 text-061629 text-uppercase text-center mb-25">{{$texts->h1}}
            </h2>
            <div class="row justify-content-center mx-0 w-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-7 col-xxl-8">
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

                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-1.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->aries}} </span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->March}}
                                    21 - {{$texts->April}} 20</span>
                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="aries" value="aries">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-2.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->taurus}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->April}}
                                    21 - {{$texts->May}} 20</span>

                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="taurus" value="taurus">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-3.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->gemini}} </span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->May}}
                                    21 - {{$texts->June}} 20</span>
                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="gemini" value="gemini">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-4.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->cancer}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->June}}
                                    21 - {{$texts->July}} 22</span>
                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="cancer" value="cancer">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-5.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->leo}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->July}}
                                    23 - {{$texts->August}} 22</span>
                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="leo" value="leo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-6.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->virgo}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->August}}
                                    23 - {{$texts->September}} 21</span>

                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="virgo" value="virgo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-7.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->libra}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->September}}
                                    22 - {{$texts->October}} 20</span>
                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="libra" value="libra">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-8.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->scorpio}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->October}}
                                    21 - {{$texts->November}} 20</span>
                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="scorpio" value="scorpio">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-9.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->sagitar}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->November}}
                                    21 - {{$texts->December}} 21</span>
                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="sagitar" value="sagitar">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-10.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->capricorn}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->December}}
                                    22 - {{$texts->January}} 21</span>

                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="capricorn" value="capricorn">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-11.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->aquarius}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->January}}
                                    22 - {{$texts->February}} 18</span>
                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="aquarius" value="aquarius">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3 col-lg-3 px-20 mb-30">
                            <label class="choose_zodiac_btn">
                                <img src="{{ $asset_path }}assets/images/sign-12.png" class="position-relative z-index-1"><br>
                                <span class=" position-relative z-index-1 text-uppercase swis721_blkcn_btblack font20 color-c6dee8">{{$texts->pisces}}</span><br>
                                <span class="position-relative z-index-1 text-uppercase color-c8c8c8 swis721_blkcn_btblack font16">{{$texts->February}}
                                    19 - {{$texts->March}} 20</span>
                                <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="pisces" value="pisces">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center mx-0 w-100">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1"><span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}
                </p>
            </div>
        </div>
        </div>
    </section>

    <!-- step 2  -->
    <section class="gtm-screen-gender select_gender d-none" id="step_2">
        <div class="container">
            <h3 class="text-center text-061629 font32 fw-bold montserrat text-uppercase mb-5">{{$texts->h2_gender}}</h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-4">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <label class="choose_gender_btn">
                                <img src="{{ $asset_path }}assets/images/male-icon.png" class="text-center me-3 position-relative mb-2 pt-1 z-index-1">
                                <span class=" position-relative z-index-1 montserrat color-c6dee8 fw-bold medium font24">{{$texts->man}}</span><br>
                                <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" value="M" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label class="choose_gender_btn">
                                <img src="{{ $asset_path }}assets/images/female-icon.png" class="me-2 position-relative mb-2 z-index-1 ">
                                <span class=" position-relative z-index-1 montserrat color-c6dee8 fw-bold medium font24">{{$texts->woman}}</span><br>
                                <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="F">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <span class="error" id="step_2_error"></span>
                        <div class="col-12 pt-50 text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="bck_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-black step_2_prev">{{$texts->back}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="continue_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-white step_2_next">{{$texts->next}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-100 mx-0 w-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                    <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1"><span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- step 3  -->
    <section class="gtm-screen-birthdate select_gender d-none" id="step_3">
        <div class="container">
            <h3 class="text-center text-061629 font32 fw-bold montserrat text-uppercase mb-5 ">{{$texts->h2_born}}
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="row justify-content-center">
                        <div class="col-4">

                            <select class="form-select born_input_field font24 medium montserrat color-c6dee8 day" aria-label="Default select example " name="day">
                                <option value="" selected="selected">{{$texts->day_born}}</option>
                                @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-4">
                            <select class="form-select born_input_field font24 medium montserrat color-c6dee8 month" aria-label="Default select example " name="month">
                                <option value="" selected="selected">{{$texts->month_born}}</option>
                                @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-4">
                            <select class="form-select born_input_field font24 medium montserrat color-c6dee8 year" aria-label="Default select example " name="year">
                                <option value="" selected="selected">{{$texts->year_born}}</option>
                                @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <span class="error" id="step_3_error"></span>
                        <div class="col-12 pt-50 text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="bck_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-black step_3_prev">{{$texts->back}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="gtm-birthdate-continue continue_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-white step_3_next">{{$texts->next}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                    <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1"><span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- step 4  -->
    <section class="gtm-screen-city select_gender d-none" id="step_4">
        <div class="container">
            <h3 class="text-center text-061629 font32 fw-bold montserrat text-uppercase mb-5">{{$texts->city_question}}

            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <input type="text" placeholder="Voer uw stad in" name="city" class="born_input_field font24 medium montserrat text-center color-c6dee8">
                            <span class="error" id="step_4_error"></span>

                        </div>
                        <div class="col-12 pt-50 text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="bck_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-black step_4_prev">{{$texts->back}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="continue_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-white step_4_next">{{$texts->next}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                    <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1"><span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- step 5 -->
    <section class="gtm-screen-birthtimeknown select_gender d-none" id="step_5">
        <div class="container">
            <h3 class="text-center text-061629 font32 fw-bold montserrat text-uppercase mb-5">{{$texts->time_question}}</h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <ul class="list-inline list-unstyled mb-xxl-5">
                                <li class="list-inline-item">
                                    <label class="choose_yesno_btn">

                                        <span class=" position-relative z-index-1 text-uppercase montserrat color-c6dee8  medium font24">{{$texts->yes}}</span><br>
                                        <input type="radio" name="birth_time_know" class="gtm-birthtime" data-gtm-value="yes" value="yes">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item">
                                    <label class="choose_yesno_btn">

                                        <span class=" position-relative z-index-1 text-uppercase montserrat color-c6dee8  medium font24">{{$texts->no}}</span><br>
                                        <input type="radio" name="birth_time_know" class="gtm-birthtime" data-gtm-value="no" value="no">
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
                                    <a href="javascript:void(0);" class="bck_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-black step_5_prev">{{$texts->back}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="continue_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-white step_5_next">{{$texts->next}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center pt-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                    <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1"><span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- step 6 -->
    <section class="gtm-screen-birthtime select_gender d-none" id="step_6">
        <div class="container">
            <h3 class="text-center text-061629 font32 fw-bold montserrat text-uppercase mb-5">{{$texts->time}}<br class="d-none d-md-block"> {{$texts->time2}}</h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <select class="form-select born_input_field font24 medium montserrat color-c6dee8 hour" aria-label="Default select example " name="tobhr">
                                <option value="" selected="selected">{{$texts->hour}}</option>
                                @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-6">
                            <select class="form-select born_input_field font24 medium montserrat color-c6dee8 min" aria-label="Default select example" name="tobmin">
                                <option value="" selected="selected">{{$texts->mins}}</option>
                                @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <span class="error" id="step_6_error"></span>
                        <div class="col-12 pt-50 text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="bck_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-black step_6_prev">{{$texts->back}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="continue_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-white step_6_next">{{$texts->next}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                    <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1"><span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- step 7  -->
    <section class="gtm-screen-concern select_gender d-none" id="step_7">
        <div class="container">
            <h3 class="text-center text-061629 font32 fw-bold montserrat text-uppercase mb-5">{{$texts->h2_consern}}
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-3 mb-10">
                            <label class="choose_concerns_btn">
                                <span class=" position-relative z-index-1  montserrat color-c6dee8  medium font22">{{$texts->work}}</span><br>
                                <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="work" value="1" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-6 col-md-3 mb-10">
                            <label class="choose_concerns_btn">
                                <span class=" position-relative z-index-1  montserrat color-c6dee8  medium font22">{{$texts->money}}</span><br>
                                <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="money" value="2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-6 col-md-3 mb-10">
                            <label class="choose_concerns_btn">
                                <span class=" position-relative z-index-1  montserrat color-c6dee8 medium font22">{{$texts->love}}</span><br>
                                <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="love" value="3">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-6 col-md-3 mb-10">
                            <label class="choose_concerns_btn">
                                <span class=" position-relative z-index-1  montserrat color-c6dee8 medium font22">{{$texts->general}}</span><br>
                                <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="general" value="4">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-12 pt-50 text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="bck_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-black step_7_prev">{{$texts->back}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="continue_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-white step_7_next">{{$texts->next}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                    <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1">
                        <span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- step 8 -->
    <section class="gtm-screen-name select_gender d-none" id="step_8">
        <div class="container">
            <h3 class="text-center text-061629 font32 fw-bold montserrat text-uppercase mb-5">{{$texts->h2_name}}</h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-6">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <input type="text" placeholder="Voornaam" name="first_name" class="born_input_field font24 medium montserrat color-c6dee8">
                        </div>
                        <div class="col-6">
                            <input type="text" placeholder="Achternaam" name="last_name" class="born_input_field font24 medium montserrat color-c6dee8">
                        </div>
                        <span class="error" id="step_8_error"></span>
                        <div class="col-12 pt-50 text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="bck_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-black step_8_prev">{{$texts->back}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="continue_btn montserrat medium font18 text-decoration-none text-center d-inline-block text-white step_8_next">{{$texts->next}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                    <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1"><span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- step 9  -->
    <section class="gtm-screen-email select_gender d-none" id="step_9">
        <div class="container">
            <h3 class="text-center text-061629 font32 fw-bold montserrat text-uppercase mb-5">{{$texts->h2_personal}}
                <br class="d-none d-md-block"> {{$texts->h2_personal_2}}
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                    <form class="row justify-content-center">
                        <div class="col-12">
                            <input type="email" placeholder="E-mail" name="email" class="gtm-email born_input_field text-center font24 medium montserrat color-c6dee8 input-email" required>
                            <span class="error" id="step_9_error"></span>
                        </div>
                        <div class="col-12 pt-50 text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item me-0 w-100">
                                    <button type="submit" class="gtm-email-continue continue_btn montserrat medium font20  text-decoration-none text-center d-inline-block w-100 continue_btn-border px-lg-2 px-xxl-3  text-white step_9_next">
                                        <i class="fa fa-hand-o-right px-2"></i>
                                        <b>{{$texts->button_free}}</b>
                                    </button>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>

            <div class="row justify-content-center pt-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                    <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1"><span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}</p>
                </div>
            </div>
        </div>
    </section>
    <!---step-9-end--->
    <div id="loadImg">
        <div class="loader"></div>
    </div>
    <div class="clearfix"></div>

    <section class="gtm-screen-pending select_gender d-none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                   @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')
                </div>
            </div>
        </div>
    </section>

    <!-- step 10 -->
    <section class="gtm-screen-thankyou select_gender d-none" id="step_10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 pe-xxl-5">
                    <h4 class="text-start color-646464 font18  mb-3 montserrat semibold">{{$texts->check_text}}</h4>
                    <h3 class="text-start  text-061629 font32 font-black montserrat  mb-5">{{$texts->check_text_1}}</h3>
                    <p class="text-061629 font18 montserrat semibold">{{$texts->check_text_2}}
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="bg-text-new1">
                        <ul class="list-inline list-unstyled mb-0">
                            <li class="text-061629 inbox-step-1 mb-2 font18 montserrat semibold">{{$texts->check_text_list1}}
                            </li>
                            <li class="text-061629 inbox-step-1 mb-2 font18 montserrat semibold">{{$texts->check_text_list2}}</li>
                            <li class="text-061629 inbox-step-1 font18 montserrat semibold">{{$texts->check_text_list3}}</li>
                            <li class="text-061629 inbox-step-1 border-0 font18 montserrat semibold">4. Volg mij op sociale
                                media
                            </li>

                        </ul>
                    </div>
                    <p class="montserrat font18 text-061629 mb-1 pt-4 fw-bold">{{$texts->your_devoted_friend}}</p>
                    <p class="montserrat font18 text-061629 fw-bold">{{$texts->blanche}}</p>
                    <div class="bg-text-new1">
                        <p class="text-061629 font18 montserrat fw-normal">{{$texts->tip_text}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                    <p class="montserrat fw-normal font18 color-807067 text-center letter-space-1"><span class="me-3"><img src="{{ $asset_path }}assets/images/lock-icon.png" class="img-fluid"></span>{{$texts->p_help}}</p>
                </div>
            </div>
        </div>
    </section>


    <!-- testimonial start -->
    <section class="testimonial step_page_testimonial">
        <div class="container">
            <!-- <h3 class="text-center text-uppercase font-black montserrat font56 mb-2 mb-lg-5 pb-3">TESTIMONIAL</h3> -->
            <div class="justify-content-center row">
                <div class="col-12 col-lg-8 col-xxl-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial_text text-center">
                                    <img src="{{ $asset_path }}assets/images/quote-image.png" class="mb-4">
                                    <h4 class="font24 fw-bold color-c6dee8 montserrat letter-space-5 text-uppercase">
                                        {{$texts->testimonia_1}}
                                    </h4>

                                    <p class="font18 color-c8c8c8 text-center montserrat line-height-30">{{$texts->testimonia_1_text}}</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial_text text-center">
                                    <img src="{{ $asset_path }}assets/images/quote-image.png" class="mb-4">
                                    <h4 class="font24 fw-bold color-c6dee8 montserrat letter-space-5 text-uppercase">
                                        {{$texts->testimonia_2}}
                                    </h4>
                                    <p class="font18 color-c8c8c8 text-center montserrat line-height-30">{{$texts->testimonia_2_text}}</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial_text text-center">
                                    <img src="{{ $asset_path }}assets/images/quote-image.png" class="mb-4">
                                    <h4 class="font24 fw-bold color-c6dee8 montserrat letter-space-5 text-uppercase">
                                        {{$texts->testimonia_3}}
                                    </h4>
                                    <p class="font18 color-c8c8c8 text-center montserrat line-height-30">{{$texts->testimonia_3_text}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->
    <!-- disclaimer start -->
    <section class="disclaimer_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h3 class="montserrat  mb-3 text-center font56 text-061629 extrabold ">
                        <?= print_dynamic_variable('disclaimer_title_nl') ?></h3>
                </div>
                <div class="col-12 text-center ">
                    <p class=" text-565149 text-center montserrat font16">
                        <?= print_dynamic_variable('disclaimer_text_nl') ?>
                    </p>
                    <p class="text-center text-565149 montserrat font16  mb-0">
                        {{ print_dynamic_variable('address') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- disclaimer end -->
    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="menu_links">
                        <ul class="list-unstyled list-inline mb-0">
                            <li class="list-inline-item me-2 me-xl-4 pe-0 pe-lg-2"><a href="https://function-tool.com/terms-of-service.html" class="text-uppercase font13 medium montserrat color-c8c8c8 text-decoration-none">{{$texts->terms}}</a>
                            </li>
                            <li class="list-inline-item me-2 me-xl-4 pe-0 pe-lg-2"><a href="https://function-tool.com/privacy-policy.html" class="text-uppercase font13 medium montserrat color-c8c8c8 text-decoration-none">{{$texts->privacy}}</a>
                            </li>
                            <li class="list-inline-item me-2 me-xl-4 pe-0 pe-lg-2"><a href="https://function-tool.com/ethical-rules.html" class="text-uppercase font13 medium montserrat color-c8c8c8 text-decoration-none">{{$texts->ethical}}</a>
                            </li>
                            <li class="list-inline-item me-2 me-xl-4 pe-0 pe-lg-2"><a href="https://function-tool.com/gdpr.html" class="text-uppercase font13 medium montserrat color-c8c8c8 text-decoration-none">{{$texts->gdpr}}</a>
                            </li>
                            <li class="list-inline-item"><a href="https://function-tool.com/cookie-policy.html" class="text-uppercase font13 medium montserrat color-c8c8c8 text-decoration-none">{{$texts->cookie_privacy}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4 mt-2 mt-md-0">
                    <div class="text-center text-md-end">
                        <p class="color-c8c8c8 text-uppercase medium montserrat font13 mb-0"><span class="fw-bold">{{$texts->copyright_1}} </span>{{$texts->copyright_2}}</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- Social icon Model  -->

    <!-- Social icon Model  -->
    <!-- footer end -->
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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