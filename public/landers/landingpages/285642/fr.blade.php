@php($asset_path = '/landers/landingpages/285642/')
@php($srcImg = "/landers/sets/set31/")
@include('/landers/terms/dynamic/dynamic')

<!DOCTYPE html>
<html lang="fr">

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
    <link rel='shortcut icon' href='{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/favicon.png'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link href="{{$asset_path}}assets/uicommon/css/libs/bootstrap.min.css" rel="stylesheet">
    <link href="{{$asset_path}}assets/uicommon/css/libs/jquery/plugins/jdealcards/5.3.0/jDealCards.min.css" rel="stylesheet" type="text/css" />
    <link href="{{$asset_path}}assets/uicommon/landing/chris/message_video111/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
    <title>Astrology Prism</title>
    <style>
        .error {
            color: red;
        }

        .error2 {
            color: red;
        }
    </style>
    @include('scripts.pushnamisubs.astro_astrology_lotus')
    <script type="text/javascript">
        var fbq_pixel = '<?= $facebook; ?>';
    </script>
    @if($facebook)
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{$pixel}}');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{$pixel}}&ev=PageView&noscript=1" />
    </noscript>
    @endif
</head>

<body class="background my_new_bg main_bg">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
        <section class="header py-3">
            <div class="container">
                <div class="row header_custom_class">
                    <div class="col-12 col-lg-3 col-md-3 my-auto order-0 order-md-0 ">
                        <div class="text-center text-lg-start text-md-start">
                            <a href="https://lp.all-universe.com" class="text-decoration-none">
                                <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/astrology-offer-logo.png" class="for_responsive_img">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9 my-auto order-2 order-md-1">
                        <div class="text-center pt-3 pt-md-0">
                            <h1 class="sky-color  mt-40 times ">Votre tirage de tarot personnel est entièrement gratuit</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="main_content">
            <div class="container">
                <div id="main_section" class="card_div">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-md-8 col-lg-6  mt15">
                            <div class="row">
                                <h3 class="ribbon">
                                    <strong id="header_pick_step" class="step-text ribbon-content elegante  " data-content="Choisir 3 cartes"></strong>
                                </h3>
                            </div>
                        </div>
                        <div id="card-holder" class="col-xs-12 col-sm-7  mt-2" style="position: static;"></div>
                    </div>
                    <div class=" text-center d-none">
                        <button type="button" class="step-1-continue all_continue_btn font-20 text-center text-white d-inline-block">CONTINUER</button>
                    </div>
                </div>
            </div>
        </div>
        <section class="gtm-screen-gender select_gender d-none" id="step_2">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Quel est votre genre ?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row justify-content-center">
                            <div class="col-6 text-center mx-auto d-table">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/male-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                    <span class=" position-relative z-index-1 montserrat text-white  medium font24">Homme</span><br>
                                    <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" value="M" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 mx-auto d-table">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/female-icon.png" class="position-relative z-index-1 me-1 me-xxl-3">
                                    <span class=" position-relative z-index-1 montserrat text-white medium font24">Femme</span><br>
                                    <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="F">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-12 text-center pt-4">
                                <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block" id="step_2_btn">&lt; Retour</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <section class="gtm-screen-birthdate select_born_date" id="step_3" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Quelle est votre date de naissance ?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row">
                            <div class="col-4">
                                <select name="day" class="form-select born_input_field font24 medium montserrat text-black day" aria-label="Default select example ">
                                    <option value="" selected="selected">Jour</option>
                                    @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="month" class="form-select born_input_field font24 medium montserrat text-black month" aria-label="Default select example ">
                                    <option value="" selected="selected">Mois</option>
                                    @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="year" class="form-select born_input_field font24 medium montserrat text-black year" aria-label="Default select example ">
                                    <option value="" selected="selected">Année</option>
                                    @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <span class="error" style="display:none;">Veuillez indiquer la date complète</span>
                            <div class="col-12 text-center pt-4">
                                <button type="button" class="gtm-birthdate-continue all_continue_btn font-20 text-center text-white d-inline-block">CONTINUER</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <section class="gtm-screen-city select_city" id="step_4" style="display:none;">
            <div class="conatiner">
                <div class="height-50"></div>
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Dans quelle ville êtes-vous né ?</h3>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12 col-xxl-10">
                                <input type="text" name="city" placeholder="Dans quelle ville êtes-vous né ?" class="enter_city font24 medium montserrat text-center text-white">
                            </div>
                            <div class="col-12 ">
                                <div class="text-center">
                                    <p class="text-white font-16 times pt-3">Cela vous aidera à rendre votre voyance plus précise.</p>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">CONTINUER</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <section class="gtm-screen-birthtimeknown you_know_born_time" id="step_5" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Savez-vous à quelle heure vous êtes né ?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-xl-10 col-xxl-6">
                        <ul class="list-inline list-unstyled text-center">
                            <li class="list-inline-item know-birth-time-yes">
                                <label class="choose_yesno_btn">
                                    <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Oui</span><br>
                                    <input type="radio" name="bitth_time_know" class="gtm-birthtime" data-gtm-value="yes" value="yes" checked="">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li class="list-inline-item know-birth-time-no">
                                <label class="choose_yesno_btn">
                                    <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Non</span><br>
                                    <input type="radio" name="bitth_time_know" class="gtm-birthtime" data-gtm-value="no" value="no">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 ">
                        <div class="text-center">
                            <p class="text-white font-16 times pt-3">Cela vous aidera à rendre votre voyance plus précise.</p>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <section class="select_hour_minutes" id="step_6" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Veuillez saisir les heures et les minutes le plus précisément possible</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-6">
                        <div class="row justify-content-center py-50">
                            <div class="col-6">
                                <select name="tobhr" class="form-select born_input_field font24 medium montserrat text-black hour" aria-label="Default select example">
                                    <option value="" selected="selected">Heure</option>
                                    @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="tobmin" class="form-select born_input_field font24 medium montserrat text-black min" aria-label="Default select example">
                                    <option value="" selected="selected">Minutes</option>
                                    @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <div class="col-12 text-center pt-4">
                                <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">CONTINUER</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <section class="gtm-screen-concern select_your_concerns" id="step_7" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Quelles sont vos préoccupations ?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-6">
                        <div class="row justify-content-center py-50">
                            <div class="col-6 col-md-3  mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Travail</span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="work" value="Travail" checked="">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3  mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Finance</span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="money" value="Finance">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Amour</span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="love" value="Amour">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3  mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Général</span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="general" value="Général">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <section class="gtm-screen-name enter_name_det" id="step_8" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Quel est votre nom ?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-6">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <input type="text" placeholder="Prénom" name="first_name" class="enter_name_det_field font24 medium montserrat text-white">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="Nom" name="last_name" class="enter_name_det_field font24 medium montserrat text-white">
                            </div>
                            <span class="error2" style="display:none;">Indiquez votre nom s'il vous plait</span>
                            <div class="col-12 text-center pt-4">
                                <button type="button" class="all_continue_btn font-20 text-center text-white d-inline-block">CONTINUER</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <section class="gtm-screen-email enter_email_field" id="step_9" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="elegante fw-normal font-68 text-white text-center mb-4 pb-0">Quel est votre email pour recevoir votre voyance personnalisée ?</h3>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-7">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12  col-xxl-11">
                                <input type="email" placeholder="E-Mail" name="email" class="gtm-email enter_city font24 medium montserrat text-center text-white" required="required">
                            </div>
                            <div class="col-12 col-lg-10 col-xxl-11 pt-4 text-center">
                                <button type="submit" class="gtm-email-continue all_continue_btn font-20 text-uppercase text-center w-100 text-white d-inline-block">Obtenez votre voyance complète GRATUITE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>

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
        <section class="gtm-screen-thankyou last_step_content" id="step_10" style="display:none;">
            @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
        </section>

        <section class="last_step_content gtm-screen-pending" id="step_11" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-7 text-white text-center">
                        @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <section class="" style="margin-top: 300px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="times fw-normal font-68 text-white text-center pt-3 pb-2"><?= print_dynamic_variable('disclaimer_title_fr') ?></h2>
                        <p class="times fw-normal text-white">
                            <?= print_dynamic_variable('disclaimer_text_fr') ?> <?= print_dynamic_variable('address') ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="f804-LU-new-astrology-final footer position-unset pt-3">
            <div class=" container">
                <div id="footer">
                    <ul class="footer_menu text-center list-inline list-unstyled">
                        <li class="list-inline-item me-0 me-md-3 pe-1  pe-xxl-1">
                            <a href="javascript:void(0);" class="text-white text-uppercase text-decoration-none tos_modal_open times font-20">Conditions d'utilisation</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 pe-1  pe-xxl-1">
                            <a href="javascript:void(0);" class="text-white text-uppercase text-decoration-none privacy-modal-open times font-20">Politique de Confidentialité</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 pe-1 pe-xxl-1">
                            <a href="javascript:void(0);" class="text-decoration-none text-uppercase cnt_pp_open text-white times font-20">CONTACT</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 pe-1 pe-xxl-1">
                            <a href="javascript:void(0);" class="text-decoration-none text-uppercase help_pp_open text-white times font-20">RÈGLES
                                ÉTHIQUES</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 pe-1 pe-xxl-1">
                            <a href="javascript:void(0);" class="text-decoration-none text-uppercase terms_pp_open  text-white times font-20">GDPR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="text-decoration-none text-uppercase cookie_policy_btn   text-white times font-20">Politique
                                en matière de cookies</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </form>

    <style>
        .modal-body p {
            font-family: Arial;
            font-size: 16px;
        }
    </style>
    <!-- terms of services modal -->
    @include('/landers/terms/astrology-lotus/fr/terms')
    <!-- privacy policy modal -->
    @include('/landers/terms/astrology-lotus/fr/privacy-policy')
    <!-- privacy policy modal 2-->
    @include('/landers/terms/astrology-lotus/fr/privacy-policy-2')
    <!-- contact-us -->
    @include('/landers/terms/astrology-lotus/fr/contact-us')
    <!-- rules modal -->
    @include('/landers/terms/astrology-lotus/fr/rules')
    <!-- gdpr modal -->
    @include('/landers/terms/astrology-lotus/fr/gdpr')
    <!-- cookie policy modal -->
    @include('/landers/terms/astrology-lotus/fr/cookies')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js "></script>
    <!-- <script type="text/javascript" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/custom.js"></script> -->
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
    </script>

    <!-- JS Dependencies -->
    <script defer type="text/javascript" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/steps_manager.min.js?v=1.0.56"></script>
    <script src="{{$asset_path}}assets/uicommon/js/libs/jquery/plugins/jdealcards/5.3.0/jDealCards.min.js?v=1.0.56"></script>
    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/js/libs/respond/1.4.2/respond.min.js"></script>
</body>

</html>
