@php($asset_path = '/landers/landingpages/285645/')
@php($srcImg = "/landers/sets/set31/")
@include('/landers/terms/dynamic/dynamic')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{$asset_path}}assets/uicommon/css/libs/bootstrap.min.css" rel="stylesheet" />
    <link href="{{$asset_path}}assets/uicommon/css/libs/jquery/plugins/jdealcards/5.3.0/jDealCards.min.css" rel="stylesheet" type="text/css" />
    <link href="{{$asset_path}}assets/uicommon/landing/chris/message_video111/css/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    @if($gtmContainerId)
    @include('google.gtmcontainer')
    @endif
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
    <title>Astrology Reading</title>
    <style>
        .step_8 p {
            text-align: left;
            font-size: 16px;
        }

        .step_8__thanks {
            font-size: 20px;
            margin: 15px 0;
        }

        .step_8__list li {
            position: relative;
            text-align: left;
            padding-left: 12px;
        }

        .step_8__list li:before {
            position: absolute;
            content: '';
            top: 50%;
            left: 0;
            transform: translate(-50%, -50%);
            display: block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: white;
        }

        .step_8__list .top-0:before {
            top: 27% !important;
        }

        .step_8 ul {
            margin-left: 20px;
        }

        .configProductName {
            font-family: cursive;
        }

        .m-20 {
            margin-top: 20px;
        }

        .brandImg {
            width: 250px;
        }

        .error {
            color: red;
        }

        .error2 {
            color: red;
        }
    </style>
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
        <section class="header py_3">
            <div class="container">
                <div class="row header_custom_class">
                    <div class="col-6 col-sm-12 col-md-2 my-auto order-0 order-md-0 ">
                        <div class="text-start text-md-start">
                            <a href="https://lp.all-universe.com" class="text-decoration-none">
                                <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/astro-logo.png" class="for_responsive_img">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 my-auto order-2 order-md-1">
                        <div class="text-center pt-3 pt-md-0">
                            <h1 class="heading_color mt-40 papyrus">Your personal tarot reading completely free</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main_content">
            <div class="container">
                <div id="main_section" class="card_div">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-md-8 col-lg-6  mt15">
                            <div class="row">
                                <h3 class="ribbon">
                                    <strong id="header_pick_step" class="step-text ribbon-content" data-content="Pick 3 cards"></strong>
                                </h3>
                            </div>
                        </div>
                        <div id="card-holder" class="col-xs-12 col-sm-7  mt-4" style="position: static;"></div>
                    </div>
                </div>
                <div class="step_2 d-none gtm-screen-gender gender_div py-100">
                    <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">What is your
                        gender?</h3>
                    <div class="row justify-content-center">
                        <div class="d-flex justify-content-center">
                            <div class=" text-md-end">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/male-icon.png" class="text-center me-3 position-relative mb-2 pt-1 z-index-1">
                                    <span class=" position-relative z-index-1 montserrat color-10212b fw-bold medium font24">Man</span><br>
                                    <input type="radio" name="gender" value="M">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="ms-5">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/images/female-icon.png" class="me-2 position-relative mb-2 z-index-1 ">
                                    <span class=" position-relative z-index-1 montserrat color-10212b fw-bold medium font24">Woman</span><br>
                                    <input type="radio" name="gender" value="F">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 pt-20 text-center">
                            <p class="error step_2_error d-none">Please choose gender</p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="bck_btn montserrat medium font-18 text-decoration-none text-center d-inline-block text-white step_2_prev">Back</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);" class="continue_btn montserrat medium font-18 text-decoration-none text-center d-inline-block text-white step_2_next">Continue</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="step_3 d-none gtm-screen-birthdate py-100">
                    <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Well! When were you
                        born?
                    </h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row justify-content-center">
                                <div class="col-4 col-md-3">
                                    <select class="form-select born_input_field font-18  fw-normal color-10212b day" aria-label="Default select example " name="day">
                                        <option value="" selected="selected">Day</option>
                                        @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4 col-md-4">
                                    <select class="form-select born_input_field font-18  fw-normal color-10212b month" aria-label="Default select example " name="month">
                                        <option value="" selected="selected">Month</option>
                                        @for ($i = 1; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-4 col-md-3">
                                    <select class="form-select born_input_field font-18 fw-normal  color-10212b year" aria-label="Default select example " name="year">
                                        <option value="" selected="selected">Year</option>
                                        @for ($i = 1940; $i < 2003; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>

                                <div class="col-12 pt-20 text-center">
                                    <p class="error step_3_error d-none">Please indicate the full date</p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn   font-18 text-decoration-none text-center d-inline-block text-white step_3_prev">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn font-18 text-decoration-none text-center d-inline-block text-white step_3_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step_4 d-none gtm-screen-city py-100">
                    <div class="row   justify-content-center">
                        <div class="col-12 col-md-5">
                            <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">In which
                                town/city are you born?</h3>
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <input type="text" placeholder="Enter your city" name="city" class="born_input_field font24 medium montserrat text-center color-c6dee8">
                                    <span class="error" id="step_4_error"></span>
                                </div>
                                <div class="col-12 pt-20 text-center">
                                    <p class="error step_4_error d-none">Please enter your city</p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn   font-18 text-decoration-none text-center d-inline-block text-white step_4_prev">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn   font-18 text-decoration-none text-center d-inline-block text-white step_4_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gtm-screen-birthtimeknown d-none step_5 py-100 ">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5">
                            <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Do you know what
                                time you
                                were born?
                            </h3>
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <ul class="list-inline list-unstyled mb-xxl-5">
                                        <li class="list-inline-item">
                                            <label class="choose_yesno_btn choose_yesno_btn_yes">
                                                <span class=" position-relative z-index-1 text-uppercase fw-bold color-10212b font-18">Yes</span><br>
                                                <input type="radio" name="birth_time_know" value="yes" data-gtm-value="yes" class="gtm-birthtime">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li class="list-inline-item">
                                            <label class="choose_yesno_btn choose_yesno_btn_no">
                                                <span class=" position-relative z-index-1 text-uppercase fw-bold color-10212b  font-18">NO</span><br>
                                                <input type="radio" name="birth_time_know" value="no" data-gtm-value="no" class="gtm-birthtime">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-12 text-center">
                                    <p class="error step_5_error d-none">Please choose any one</p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn montserrat medium font-18 text-decoration-none text-center d-inline-block text-white step_5_prev">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn montserrat medium font-18 text-decoration-none text-center d-inline-block text-white step_5_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step_6 d-none gtm-screen-birthtime py-100">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5">
                            <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Please enter
                                hours and
                                minutes as accurate as possible
                            </h3>
                            <div class="row justify-content-center">
                                <div class="1">
                                </div>
                                <div class="col-5">
                                    <select class="form-select born_input_field font24 medium montserrat color-c6dee8 hour" aria-label="Default select example " name="tobhr">
                                        <option value="" selected="selected">Hour</option>
                                        @for ($i = 0; $i < 24; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-5">
                                    <select class="form-select born_input_field font24 medium montserrat color-c6dee8 min" aria-label="Default select example" name="tobmin">
                                        <option value="" selected="selected">Min</option>
                                        @for ($i = 0; $i < 60; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="1">
                                </div>
                                <div class="col-12 pt-20 text-center">
                                    <p class="error step_6_error d-none">Please choose any one</p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn font-18 text-decoration-none text-center d-inline-block text-white step_6_prev">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn   font-18 text-decoration-none text-center d-inline-block text-white step_6_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step_7 d-none gtm-screen-concern py-100">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5">
                            <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">What are your
                                concerns?
                            </h3>
                            <div class="row justify-content-center mx-0 w-100">
                                <div class="col-3 col-md-3 mb-10 px-0">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1   color-10212b   font-18">Work</span><br>
                                        <input type="radio" name="concerns" value="1" checked="" class="gtm-concern" data-gtm-value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 mb-10 px-0">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1   color-10212b   font-18">Finance</span><br>
                                        <input type="radio" name="concerns" value="2" class="gtm-concern" data-gtm-value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 mb-10 px-0">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1   color-10212b  font-18">Love</span><br>
                                        <input type="radio" name="concerns" value="3" class="gtm-concern" data-gtm-value="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 mb-10 px-0">
                                    <label class="choose_concerns_btn">
                                        <span class=" position-relative z-index-1   color-10212b  font-18">General</span><br>
                                        <input type="radio" name="concerns" value="4" class="gtm-concern" data-gtm-value="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 pt-20 text-center">
                                    <p class="error step_7_error d-none">Please choose any one</p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn   font-18 text-decoration-none text-center d-inline-block text-white step_7_prev">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn font-18 text-decoration-none text-center d-inline-block text-white step_7_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step_8 d-none gtm-screen-nam py-100">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5">
                            <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">What's your
                                name?
                            </h3>
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input type="text" placeholder="First name" name="first_name" class="born_input_field font-18 color-10212b">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Last name" name="last_name" class="born_input_field font-18 color-10212b">
                                </div>
                                <div class="col-12 pt-20 text-center">
                                    <p class="error step_8_error d-none">Please fill out this fields </p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="bck_btn font-18 text-decoration-none text-center d-inline-block text-white step_8_prev">Back</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);" class="continue_btn font-18 text-decoration-none text-center d-inline-block text-white step_8_next">Continue</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step_9 d-none gtm-screen-email py-100">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5 ">
                            <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Where do you
                                want to get
                                your personalized clairvoyance?
                            </h3>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-7 col-xl-11 col-xxl-11">
                                    <div class="col-12">
                                        <input type="email" placeholder="E-mail" name="email" class="born_input_field text-center font24 medium montserrat color-c6dee8 input-email gtm-email" required="">
                                    </div>
                                    <div class="col-12 pt-20 text-center">
                                        <p class="error step_9_error d-none">Please fill out this fields </p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item me-0 w-100">
                                        
                                                <button type="submit" class="continue_btn  font16  text-decoration-none text-center d-flex w-100 continue_btn-border px-lg-2 px-xxl-3  text-white step_9_next hvr-icon ">
                                                    <i class="fa fa-hand-o-right px-2"></i>
                                                    <b class="line_22">WHERE DO YOU WANT TO GET YOUR PERSONALIZED AND FREE
                                                        TAROT READING?</b>
                                                </button>
                                                <style>
                                                    .special-gift{
                                                        text-align: center;
                                                        color: #fff;
                                                        padding-top: 20px;
                                                    }
                                                    .special-gift h3{
                                                        font-weight: bold;
                                                    }
                                                    .special-gift p{
                                                        font-size: 15px;
                                                        padding-top: 10px;
                                                    }
                                                </style>
                                                <div class="special-gift">
                                                    <h3 class="fw-bold">
                                                        Special Gift for you
                                                    </h3>
                                                    <p>
                                                        By signing up, you will receive the fresh daily horoscope news in my inbox from AskAstrology, and the most relevant esoteric offers from their experts.
                                                    </p>    
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step_11 d-none gtm-screen-pending py-100">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5">
                            <h3 class="fw-bold font-18 mb-0 text-uppercase text-white text-center mb-0 heading_steps pt-xl-4">
                                I will
                                immediately
                                get down to work for you. My answer will reach you in the next hours.
                            </h3>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-12">
                                    <p class="text-white fw-normal font-14 text-center mb-2">Go to your inbox now and
                                        discover the gifts I
                                        promised you: – Your Positive Energy Checkup – Your 7-Days-of-Absolute-Protection
                                        Talisman</p>
                                    <p class="text-white fw-normal font-14 text-center mb-0">P.S. To make sure your trust in
                                        me is
                                        merited, I
                                        want you to know that I respect the regulation regarding privacy and access to your
                                        personal data.
                                        Everything is here, in my Privacy Policy.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                <div class="step_10 gtm-screen-thankyou py-100 d-none">
                    @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
                </div>

            </div>
        </section>
        <section class="disclimber_section">
            <div class="container">
                <div class="pt_50">
                    <div class="right_cnt_onebox ">
                        <h3 class="text-white font-18 fw-bold mb-4 text-uppercase text-center"><?= print_dynamic_variable('disclaimer_title_en') ?></h3>
                        <p class="text-white font-16 fw-normal text-justify text-uppercase text-center">
                            <?= print_dynamic_variable('disclaimer_text_en') ?>
                            <?= print_dynamic_variable('address') ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 my-auto  px-3 px-md-0">
                        <div class="footer_link pt-3 pt-xxl-5">
                            <ul class="footer_menus list-unstyled mb-0  ">
                                <li class="list-inline-item  me-4 mb-3  "><a href="https://lp.all-universe.com" class="text-black fw-bold text-decoration-none font-16 text-uppercase">Home</a>
                                </li>
                                <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase privacy_btn_open">Privacy
                                        policy</a></li>
                                <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase rules_btn_open">Ethical
                                        rules</a></li>
                                <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase gdpr_btn_open">GDPR</a>
                                </li>
                                <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase cookie_btn_open">Cookie
                                        policy</a></li>
                                <li class="list-inline-item  me-0 "><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase terms_btn_open">Terms
                                        of
                                        service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </form>

    <!-- privacy-policy -->
    <div class="modal fade privacy-1" id="privacy_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header py-3 bg-b2def3">
                    <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Privacy policy
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="opensans fw-normal font16">
                        @include('/landers/terms/all-universe/en/privacy')
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- privacy policy-2 -->
    <div class="modal fade privacy-2" id="privacy-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header py-3 bg-b2def3">
                    <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Privacy policy
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="opensans fw-normal font16">
                        @include('/landers/terms/all-universe/en/privacy-2')
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- rules -->
    <div class="modal fade" id="rules_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header py-3 bg-b2def3">
                    <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Ethical rules
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="opensans fw-normal font16">
                        Principle 1: Respect for the person<br><br>
                        The products and services provide by Astrofysica are not directed at people:<br><br>
                        - In financial hardship<br>
                        - Minors<br>
                        - Who are not in full possession of their mental faculties<br><br>
                        Principle 2: Honesty, integrity and fairness<br><br>
                        Astrofysica and its staff are fully committed to the principles of honesty, integrity and fairness
                        in the
                        delivery of their products and services to their clients.<br>
                        All Company employees ensure that commercial transactions, requests for services, purchases or
                        hiring of
                        staff are handled in an open, fair and impartial manner.<br>
                        This Charter sets out the standards of conduct expected of all staff as well as the Company policy
                        on
                        accepting benefits and managing conflict of interest in the course of official duties.<br>
                        This Charter shall also apply to temporary and part-time staff employed by the Company.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- gdpr -->
    <div class="modal fade" id="gdpr_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header py-3 bg-b2def3">
                    <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">GDPR
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="opensans fw-normal font16">
                        {{ print_dynamic_variable('address') }}<br><br>
                        If you are a resident of the European Economic Area ("EEA"), you have certain data protection rights
                        and we
                        will endeavor to take reasonable steps to enable you to correct, amend, delete or restrict the use
                        of your
                        Personal Data. to limit. If you would like to know what Personal Information we hold about you and
                        if you
                        would like it removed from our systems, please contact us. In certain circumstances you have the
                        following
                        data protection rights:<br><br>
                        (i) You have the right to withdraw your consent where you have previously consented to the
                        processing of
                        your Personal Data. To the extent that the legal basis for our processing of your Personal Data is
                        consent,
                        you have the right to withdraw that consent at any time. The revocation does not affect the
                        lawfulness of
                        the processing before the revocation.<br><br>
                        (ii) You have the right to know whether your Personal Data is being processed by us, to obtain
                        information
                        about certain aspects of the processing, and to obtain a copy of your Personal Data being processed.<br><br>
                        (iii) You have the right to verify the accuracy of your information and to request that it be
                        updated or
                        corrected. You also have the right to request that we complete any Personal Data that you believe is
                        incomplete.<br><br>
                        (iv) You have the right to object to the processing of your data if the processing is based on a
                        legal basis
                        other than consent. Where Personal Data is processed in the public interest, in the exercise of an
                        official
                        authority vested in us, or for the legitimate interests pursued by us, you may object to such
                        processing by
                        specific situation-related ground to justify the objection. However, you should know that if your
                        Personal
                        Data is processed for direct marketing purposes, you can object to that processing at any time
                        without
                        providing a justification. To find out whether we process Personal Data for direct marketing
                        purposes,
                        please refer to the relevant sections of this Policy.<br><br>
                        (v) You have the right, under certain circumstances, to restrict the processing of your Personal
                        Data. These
                        circumstances include: the accuracy of your Personal Data is contested by you and we need to verify
                        its
                        accuracy; the processing is unlawful, but you oppose the erasure of your Personal Data and request
                        that its
                        use be restricted instead; we no longer need your Personal Data for the purposes of the processing,
                        but you
                        need it to establish, exercise or defend your legal claims; you have objected to the processing
                        pending
                        verification whether our legitimate grounds override your legitimate grounds. Where processing is
                        restricted, this Personal Information will be marked accordingly and, with the exception of storage,
                        only
                        processed with your consent or for the establishment, exercise or defense of legal claims, for the
                        protection of the rights of another natural or legal person or to reasons of great public
                        interest.<br><br>
                        (vi) You have the right, under certain circumstances, to have your Personal Information deleted from
                        us.
                        These circumstances include: the Personal Data is no longer necessary in connection with the
                        purposes for
                        which it was collected or otherwise processed; you withdraw your consent to consent-based
                        processing; you
                        object to the processing under certain rules of applicable data protection law; the processing is
                        for direct
                        marketing purposes; and the personal data has been unlawfully processed. However, there are
                        exceptions to
                        the right to erasure, such as when the processing is necessary: for the exercise of the right to
                        freedom of
                        expression and information; to comply with a legal obligation; or for the establishment, exercise or
                        defense
                        of a legal claim.<br><br>
                        (vii) You have the right to receive your Personal Data that you have provided to us in a structured,
                        commonly used and machine-readable format and, where technically feasible, to have it transferred to
                        another
                        controller without any hindrance on our part, provided that such transfer does not adversely affect
                        the
                        rights and freedoms of others.<br><br>
                        (viii) You have the right to lodge a complaint with a data protection authority about our collection
                        and use
                        of your Personal Information. If you are not satisfied with the outcome of your complaint directly
                        to us,
                        you have the right to lodge a complaint with your local data protection authority. For more
                        information,
                        please contact your local data protection authority in the EEA. This provision applies provided that
                        your
                        Personal Data is processed by automated means and that the processing is based on your consent, on a
                        contract to which you are a part, or on pre-contractual obligations thereof.<br><br>
                        Note: If you don't receive the email, please check your spam.<br><br>
                        1) Send your message to <a href="mailto:dpo@all-universe.com">dpo@all-universe.com</a><br><br>
                        2) To help us locate your information, please include the following:<br>
                        &emsp;First name: <br>
                        &emsp;Last Name :<br>
                        &emsp;Date of birth:(dd/mm/yyyy) :<br>
                        &emsp;Email :<br>
                        &emsp;Phone :<br><br>
                        3) Please submit your request with the reason below:<br>
                        &emsp;- Right of access<br>
                        &emsp;- Right of withdrawal<br>
                        &emsp;- Right to erasure ("right to be forgotten") (example: erasure of personal data, account
                        closure,
                        etc.)<br>
                        &emsp;- Right of heirs<br>
                        &emsp;- Right to object<br>
                        &emsp;- Other request<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Cookie policy -->
    <div class="modal fade" id="cookie_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header py-3 bg-b2def3">
                    <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Cookie policy
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="opensans fw-normal font16">
                        This cookie policy (“Policy”) describes what cookies are and how and they're being used by the
                        <a href="https://astro.all-universe.com" class="text-decoration-none">https://astro.all-universe.com</a> website (“Website” or “Service”) and any of its related products and
                        services
                        (collectively, “Services”). This Policy is a legally binding agreement between you (“User”, “you” or
                        “your”)
                        and all-universe is a brand of AstroVeo B.V. (“all-universe is a brand of AstroVeo B.V.”,
                        “we”, “us”
                        or “our”). If you are entering into this agreement on behalf of a business or other legal entity,
                        you
                        represent that you have the authority to bind such entity to this agreement, in which case the terms
                        “User”,
                        “you” or “your” shall refer to such entity. If you do not have such authority, or if you do not
                        agree with
                        the terms of this agreement, you must not accept this agreement and may not access and use the
                        Website and
                        Services. You should read this Policy so you can understand the types of cookies we use, the
                        information we
                        collect using cookies and how that information is used. It also describes the choices available to
                        you
                        regarding accepting or declining the use of cookies. For further information on how we use, store
                        and keep
                        your personal data secure, see our privacy policy.<br><br>
                        <b>What are cookies?</b><br><br>
                        Cookies are small pieces of data stored in text files that are saved on your computer or other
                        devices when
                        websites are loaded in a browser. They are widely used to remember you and your preferences, either
                        for a
                        single visit (through a "session cookie") or for multiple repeat visits (using a "persistent
                        cookie").<br><br>
                        Session cookies are temporary cookies that are used during the course of your visit to the Website,
                        and they
                        expire when you close the web browser.<br><br>
                        Persistent cookies are used to remember your preferences within our Website and remain on your
                        desktop or
                        mobile device even after you close your browser or restart your computer. They ensure a consistent
                        and
                        efficient experience for you while visiting the Website and Services.<br><br>
                        Cookies may be set by the Website ("first-party cookies"), or by third parties, such as those who
                        serve
                        content or provide advertising or analytics services on the Website ("third party cookies"). These
                        third
                        parties can recognize you when you visit our website and also when you visit certain other websites.
                        You may
                        learn more about cookies and how they work here.<br><br>
                        <b>What type of cookies do we use?</b><br><br>
                        <b>- Functionality cookies</b><br><br>
                        Functionality cookies let us operate the Website and Services in accordance with the choices you
                        make. For
                        example, we will recognize your username and remember how you customized the Website and Services
                        during
                        future visits.<br><br>
                        <b>What are your cookie options?</b><br><br>
                        If you don’t like the idea of cookies or certain types of cookies, you can change your browser’s
                        settings to
                        delete cookies that have already been set and to not accept new cookies. To learn more about how to
                        do this,
                        visit internetcookies.com<br><br>
                        Please note, however, that if you delete cookies or do not accept them, you might not be able to use
                        all of
                        the features the Website and Services offer.<br><br>
                        <b>Changes and amendments</b><br><br>
                        We reserve the right to modify this Policy or its terms related to the Website and Services at any
                        time at
                        our discretion. When we do, we will revise the updated date at the bottom of this page. We may also
                        provide
                        notice to you in other ways at our discretion, such as through the contact information you have
                        provided.<br><br>
                        An updated version of this Policy will be effective immediately upon the posting of the revised
                        Policy
                        unless otherwise specified. Your continued use of the Website and Services after the effective date
                        of the
                        revised Policy (or such other act specified at that time) will constitute your consent to those
                        changes.<br><br>
                        <b>Acceptance of this policy</b><br><br>
                        You acknowledge that you have read this Policy and agree to all its terms and conditions. By
                        accessing and
                        using the Website and Services you agree to be bound by this Policy. If you do not agree to abide by
                        the
                        terms of this Policy, you are not authorized to access or use the Website and Services.<br><br>
                        <b>Contacting us</b><br><br>
                        If you have any questions, concerns, or complaints regarding this Policy or the use of cookies, we
                        encourage
                        you to contact us using the details below:<br><br>
                        <a href="https://all-universe.com/contact" class="text-decoration-none">https://astro.all-universe.com/contact</a><br>
                        This document was last updated on April 11, 2022
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Terms of service -->
    <div class="modal fade" id="terms_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header py-3 bg-b2def3">
                    <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Terms of service
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="opensans fw-normal font16">
                        @include('/landers/terms/all-universe/en/terms')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/bootstrap.bundle.min.js"></script>
    <script src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/slick.js"></script>
    <script src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/functions.js"></script>
    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/landing/chris/message_video111/js/custom.js"></script>

    <!-- pop up -->
    <script>
        $(document).ready(function() {
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
                holderColor: 'rgb(255 255 255 / 83%)',
                overlap: !2,
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
                    $('.gender_div').removeClass('d-none');
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
    </script>
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

    <script type="text/javascript" src="{{$asset_path}}assets/uicommon/js/libs/respond/1.4.2/respond.min.js"></script>
</body>

</html>