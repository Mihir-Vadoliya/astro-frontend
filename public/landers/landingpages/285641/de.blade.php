@php($asset_path = '/landers/landingpages/285641/')
@php($srcImg = "/landers/sets/set31/")
@include('/landers/terms/dynamic/dynamic')
<!DOCTYPE html>
<html lang="de">

<head>
    <!-- Astrology offerpage Required meta tags -->
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

    <!-- favicon -->
    <link rel='shortcut icon' href='{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/favicon.png'>

    <!-- Astrology offerpage all CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>

    <!-- <script src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/lander.js" type="module"></script> -->
    <title>Astrology Prism</title>
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
                    <div class="col-12 col-sm-12 col-md-2 my-auto order-0 order-md-0 ">
                        <div class="text-center text-md-start">
                            <a href="https://lp.all-universe.com" class="text-decoration-none">
                                <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/astrology-offer-logo.png" class="for_responsive_img">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 my-auto order-2 order-md-1">
                        <div class="text-center pt-3 pt-md-0">
                            <!-- <p class="fw-bold mb-0 text-white font-38">Get Your Personal FREE 2023 HOROSCOPE</p> -->
                            <h1 class="text-white  mt-40 elegante ">Ihre persönliche Tarot-Lesung völlig kostenlos</h1>
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
                                    <strong id="header_pick_step" class="step-text ribbon-content elegante  " data-content="3 Karten auswählen"></strong>
                                </h3>
                            </div>

                        </div>

                        <div id="card-holder" class="col-xs-12 col-sm-7  mt-2" style="position: static;"></div>
                    </div>
                    <div class=" text-center d-none">
                        <button type="button" class="step-1-continue all_continue_btn font-20 text-center text-white d-inline-block">
                            WEITER
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- 2 step -->
        <section class="gtm-screen-gender select_gender d-none" id="step_2">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Welches Geschlecht haben Sie?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-6 text-center mx-auto d-table">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/male-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                    <span class=" position-relative z-index-1 montserrat text-white  medium font24">Mann</span><br>
                                    <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" value="M" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 mx-auto d-table">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/female-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                    <span class=" position-relative z-index-1 montserrat text-white medium font24">Frau</span><br>
                                    <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="F">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-12 text-center pt-4">
                                <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block" id="step_2_btn">&lt; Zurück
                                </button>
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
                                <button type="button" class="gtm-birthdate-continue all_continue_btn font-20 text-center text-white d-inline-block">
                                    WEITER
                                </button>
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
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">In welcher Stadt wurden Sie
                    geboren?</h3>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12 col-xxl-10">
                                <input type="text" name="city" placeholder="In welcher Stadt wurden Sie geboren?" class="enter_city font24 medium montserrat text-center text-white">
                            </div>
                            <div class="col-12 ">
                                <div class="text-center">
                                    <p class="text-white font-16 times pt-3">Dies wird Ihnen helfen, Ihr Tarot-Lesung
                                        genauer zu machen.</p>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">WEITER
                                </button>
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
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Wissen Sie, zu welcher Zeit Sie
                    geboren wurden?</h3>
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
                            <p class="text-white font-16 times pt-3">Dies wird Ihnen helfen, Ihr Tarot-Lesung genauer zu
                                machen.</p>
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
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Bitte geben Sie die Stunden und
                    Minuten so genau wie möglich ein</h3>
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
                                <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">WEITER
                                </button>
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
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Welcher Bereich interessiert Sie
                    besonders?</h3>
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
                                <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">WEITER
                                </button>
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
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Wohin sollen wir Ihre persönliche
                    Tarotdeutung schicken?</h3>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-7">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12  col-xxl-11">
                                <input type="email" placeholder="E-Mail" name="email" class="gtm-email enter_city font24 medium montserrat text-center text-white" required="required">
                            </div>
                            <div class="col-12 col-lg-10 col-xxl-11 pt-4 text-center">
                                <button type="submit" class="gtm-email-continue all_continue_btn font-20 text-uppercase text-center w-100 text-white d-inline-block">
                                    Erhalten Sie meine komplette Hellseherei KOSTENLOS
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- 10 step -->
        <style>
            .gtm-screen-thankyou li:before {
                background-color: white;
                top: 6px;
            }

            .gtm-screen-thankyou ul {
                margin-left: 20px;
                list-style-type: none;
                padding-left: 0rem;
            }

            .gtm-screen-thankyou p {
                margin-left: 6px;
            }
        </style>
        <section class="gtm-screen-thankyou step-10 last_step_content" id="step_10" style="display:none;">
            @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
        </section>

        <!-- step 11 - pending -->
        <section class="last_step_content" id="step_11" style="display:none;">
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


        <section class="disclimber_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="times fw-normal font-68 text-white text-center pt-3 pb-2"><?= print_dynamic_variable('disclaimer_title_de') ?></h2>
                        <p class="times fw-normal text-white">
                            <?= print_dynamic_variable('disclaimer_text_de') ?> <?= print_dynamic_variable('address') ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--f804-LU-new-astrology-final-footer -->
        <footer class="f804-LU-new-astrology-final footer position-unset pt-5">
            <div class=" container">
                <div id="footer">
                    <ul class="f804-LU-new-astrology-final-menu footer_menu text-center list-inline list-unstyled">
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                            <a href="javascript:void(0);" class="tnc_btn_openmd text-white text-decoration-none roboto medium font-20">GESCHÄFTSBEDINGUNGEN</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                            <a href="javascript:void(0);" class="policy_btn_openmd text-decoration-none text-white roboto medium font-20">
                                DATENSCHUTZRICHTLINIE</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                            <a href="javascript:void(0);" class="utc_btn_openmd text-decoration-none text-white roboto medium font-20"> ETHISCHE
                                REGELN</a>
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

    </form>

    <!-- all popup -->


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
                <h5 class="f804-LU-new-astrology-final-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">
                    DATENSCHUTZRICHTLINIE</h5>
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
                <h5 class="f804-LU-new-astrology-final-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">
                    DATENSCHUTZRICHTLINIE</h5>
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

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js "></script>
    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/custom.js"></script>

    <!-- pop up -->
    <script>
        $(document).ready(function() {
            $("#step_2_btn").click(function() {
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
                    degrees: '45'
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
    <script>
        $(function() {
            $('.gtm-email-continue').on('click', function() {
                $('.configName').html(getFullName());
            });
        });
    </script>
</body>

</html>