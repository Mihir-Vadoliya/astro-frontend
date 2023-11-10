@php($asset_path = '/landers/landingpages/777777/')
@php($srcImg = "/landers/sets/set30/")
@include('/landers/terms/dynamic/dynamic')

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- required meta tag -->
    <meta name="author" content="Astrofysica">
    <meta name="title" content="Astrofysica">
    <meta name="keyword" content="Astrofysica">
    <meta name="description" content="Astrofysica">

    <meta property="og:title" content="Astrofysica" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="Astrofysica.com" />
    <meta property="og:image" content="{{$asset_path}}assets/images/astro-logo-seo.png" />
    <meta property="og:image:width" content="104" />
    <meta property="og:image:height" content="87" />
    <meta property="og:site_name" content="Astrofysica" />
    <meta property="og:description" content="Astrofysica" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css -->
    <link href="{{$asset_path}}assets/css/style.css" rel="stylesheet">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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

        function fbLeadEvent() {
            window._fbq.push('track', 'Lead');
        }
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{$pixel}}&ev=PageView&noscript=1" />
    </noscript>
    @endif
    <!-- favicon -->
    <link rel='shortcut icon' href='{{$asset_path}}assets/images/favicon.png'>

    <script src="https://cdn.jsdelivr.net/npm/@babel/standalone@7.15.4/babel.min.js"></script>
    <title>ASTROFYSICA</title>
</head>

<body>
    <div id="app" class="d-none">
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- header start -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-12 col-md-2 my-auto order-0 order-md-0">
                        <div class="text-start text-md-start">
                            <a href="https://lp.all-universe.com" class="text-decoration-none">
                                <img src="{{$asset_path}}assets/images/astro-logo.png" class="for_responsive_img">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 my-auto order-2 order-md-1">
                        <div class="text-center pt-3 pt-md-0">
                            <p class="fw-bold mb-0 text-white font-38">Get Your Personal FREE 2023 HOROSCOPE</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- header end -->
        <!-- main banner start -->
        <section class="main_banner">
            <div class="container">
                <div class="row mx-0 w-100">

                    <!-- selected sign -->
                    <div class="col-12 col-md-12 col-lg-2 my-auto col-xl-2 col-xxl-2 position-relative pt-3 sign-icon-div d-none">
                        <div class="banner_right_content mt-5 mt-md-5 pt-md-3 ps-xl-5 ms-xxl-5">
                            <div class="right_cnt_onebox">
                                <img src="{{$srcImg}}taurus.png" class="img-fluid select-sign">
                            </div>
                            <span class="font-18 fw-bold text-white mx-auto d-table mb-0 text-capitalize sign-text"></span>
                        </div>
                    </div>
                    <!-- selected sign End-->

                    <form name="g" id="nameForm" class="main_form col-12 col-md-12 pt-3 col-lg-12 col-xl-12 col-xxl-12 position-relative sign_show" method="post" action="{{request()->url()}}/insertlead">
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
                        <!-- step 1 signs -->
                        <div class="all_steps pt-4 mt-5 row d-block d-md-block" v-if="validator.data.showSign">
                            <div class="circle mx-auto step_1_full gtm-screen-zodiac" style="--total: 12">
                                <div class="stat arie" style="--i:1" data-sign="aries" @click="validator.onSignClick('aries')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}aries.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Aries</span>
                                    </a>
                                </div>
                                <div class="stat" style="--i:2" data-sign="taurus" @click="validator.onSignClick('taurus')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none ">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}taurus.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold  mb-0">Taurus</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:3" data-sign="gemini" @click="validator.onSignClick('gemini')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}gemini.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold mb-0">Gemini</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:4" data-sign="cancer" @click="validator.onSignClick('cancer')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}cancer.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold mb-0">Cancer</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:5" data-sign="leo" @click="validator.onSignClick('leo')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}leo.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold mb-0">Leo</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:6" data-sign="virgo" @click="validator.onSignClick('virgo')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}virgo.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold mb-0">Virgo</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:7" data-sign="libra" @click="validator.onSignClick('libra')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}libra.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold mb-0">Libra</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:8" data-sign="scorpio" @click="validator.onSignClick('scorpio')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}scorpio.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold mb-0">Scorpio</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:9" data-sign="sagittarius" @click="validator.onSignClick('sagittarius')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}sagittarius.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold mb-0">Sagittarius</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:10" data-sign="capricorn" @click="validator.onSignClick('capricorn')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}capricorn.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold mb-0">Capricorn</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:11" data-sign="aquarius" @click="validator.onSignClick('aquarius')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}aquarius.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 color-10212b fw-bold mb-0">Aquarius</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="stat" style="--i:12" data-sign="pisces" @click="validator.onSignClick('pisces')">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}pisces.png" class="img-fluid">
                                        </div>
                                        <div class="text-position">
                                            <p class="font15 fw-bold color-10212b fw-bold mb-0">Pisces</p>
                                            <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- step 1 signs End -->

                        <div class="center_div center_content">
                            <!-- step 2 -->
                            <div class="step_2 gtm-screen-gender" v-if="validator.data.signvalid || validator.data.showGender">
                                <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">What is your gender?</h3>
                                <div class="row justify-content-center">
                                    <div class="d-flex justify-content-center">
                                        <div class=" text-md-end">
                                            <label class="choose_gender_btn" @click="validator.onGenderClick">
                                                <img src="{{ $asset_path }}assets/images/male-icon.png" class="text-center me-3 position-relative mb-2 pt-1 z-index-1">
                                                <span class=" position-relative z-index-1 montserrat color-10212b fw-bold medium font24">Man</span><br>
                                                <input type="radio" name="gender" value="M">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="ms-5">
                                            <label class="choose_gender_btn" @click="validator.onGenderClick">
                                                <img src="{{ $asset_path }}assets/images/female-icon.png" class="me-2 position-relative mb-2 z-index-1 ">
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
                            <!-- step 3 -->
                            <div class="step_3 d-none gtm-screen-birthdate">
                                <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Well! When were you born?
                                </h3>
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
                                            @for ($i = 0; $i < 13; $i++) <option value="{{$i}}">{{$i}}</option>
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
                                                <a href="javascript:void(0);" class="continue_btn font-18 text-decoration-none text-center d-inline-block text-white step_3_next" @click="validator.onDateClick">Continue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- step 4 -->
                            <div class="step_4 d-none gtm-screen-city">
                                <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">In which town/city are you
                                    born?</h3>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center">
                                        <input type="text" placeholder="Enter your city" name="city" class="born_input_field font24 medium montserrat text-center color-c6dee8">
                                    </div>
                                    <div class="col-12 pt-20 text-center">
                                        <p class="error step_4_error d-none">Please enter your city</p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="bck_btn   font-18 text-decoration-none text-center d-inline-block text-white step_4_prev">Back</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="continue_btn   font-18 text-decoration-none text-center d-inline-block text-white step_4_next" @click="validator.onCityClick">Continue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- step 5 -->
                            <div class="gtm-screen-birthtimeknown step_5 d-none">
                                <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Do you know what time you were born?
                                </h3>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center">
                                        <ul class="list-inline list-unstyled mb-xxl-5">
                                            <li class="list-inline-item">
                                                <label class="choose_yesno_btn choose_yesno_btn_yes" @click="validator.onTimeKnown('yes')">
                                                    <span class=" position-relative z-index-1 text-uppercase fw-bold color-10212b font-18">Yes</span><br>
                                                    <input type="radio" name="birth_time_know" value="yes" data-gtm-value="yes" class="gtm-birthtime">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li class="list-inline-item">
                                                <label class="choose_yesno_btn choose_yesno_btn_no" @click="validator.onTimeKnown('no')">
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
                                                <a href="javascript:void(0);" class="continue_btn montserrat medium font-18 text-decoration-none text-center d-inline-block text-white step_5_next" @click="validator.onTimeKnown()">Continue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- step 6 -->
                            <div class="step_6 d-none gtm-screen-birthtime">
                                <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Please enter hours and minutes as accurate as possible
                                </h3>
                                <div class="row justify-content-center">
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
                                    <div class="col-12 pt-20 text-center">
                                        <p class="error step_6_error d-none">Please choose any one</p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="bck_btn font-18 text-decoration-none text-center d-inline-block text-white step_6_prev">Back</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="continue_btn   font-18 text-decoration-none text-center d-inline-block text-white step_6_next" @click="validator.onTimeSelect">Continue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- step 7 -->
                            <div class="step_7 d-none gtm-screen-concern">
                                <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">What are your concerns?
                                </h3>
                                <div class="row justify-content-center mx-0 w-100">
                                    <div class="col-3 col-md-3 mb-10 px-0">
                                        <label class="choose_concerns_btn" @click="validator.onConcernClick">
                                            <span class=" position-relative z-index-1   color-10212b   font-18">Work</span><br>
                                            <input type="radio" name="concerns" value="1" checked="" class="gtm-concern" data-gtm-value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-3 mb-10 px-0">
                                        <label class="choose_concerns_btn" @click="validator.onConcernClick">
                                            <span class=" position-relative z-index-1   color-10212b   font-18">Finance</span><br>
                                            <input type="radio" name="concerns" value="2" class="gtm-concern" data-gtm-value="2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-3 mb-10 px-0">
                                        <label class="choose_concerns_btn" @click="validator.onConcernClick">
                                            <span class=" position-relative z-index-1   color-10212b  font-18">Love</span><br>
                                            <input type="radio" name="concerns" value="3" class="gtm-concern" data-gtm-value="3">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-md-3 mb-10 px-0">
                                        <label class="choose_concerns_btn" @click="validator.onConcernClick">
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
                                                <a href="javascript:void(0);" class="continue_btn font-18 text-decoration-none text-center d-inline-block text-white step_7_next" @click="validator.onConcernClick">Continue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- step_8 -->
                            <div class="step_8 d-none gtm-screen-name">
                                <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">What's your name?
                                </h3>
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <input type="text" placeholder="First name" name="first_name" class="born_input_field font-18 color-10212b">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" placeholder="Surname" name="last_name" class="born_input_field font-18 color-10212b">
                                    </div>
                                    <div class="col-12 pt-20 text-center">
                                        <p class="error step_8_error d-none">Please fill out this fields </p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="bck_btn font-18 text-decoration-none text-center d-inline-block text-white step_8_prev">Back</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="continue_btn font-18 text-decoration-none text-center d-inline-block text-white step_8_next" @click="validator.onFullnameClick">Continue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- step 9 -->
                            <div class="step_9 d-none gtm-screen-email">
                                <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Where do you want to get your personalized clairvoyance?
                                </h3>
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-7 col-xl-11 col-xxl-12">
                                        <div class="col-12">
                                            <input type="email" placeholder="E-mail" name="email" class="born_input_field text-center font24 medium montserrat color-c6dee8 input-email gtm-email" required="">
                                        </div>
                                        <div class="col-12 pt-20 text-center">
                                            <p class="error step_9_error d-none">Please fill out this fields </p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item me-0 w-100">
                                                    <button type="submit" class="continue_btn   font-18  text-decoration-none text-center d-inline-block w-100 continue_btn-border px-lg-2 px-xxl-3  text-white step_9_next">
                                                        <i class="fa fa-hand-o-right px-2"></i>
                                                        <b>Get your free reading</b>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- pendding screen -->
                            <div class="step_11 d-none gtm-screen-pending text-white text-center">

                                @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')
                                    </div>
                                </div>
                            </div>

                            <!-- step 10 -->
                            @include('/landers/landingpages/thankyou/'.$language.'/thankyou', ['thankyouScreen' => 8])
                        </div>
                    </form>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 my-auto  px-3 px-md-0">
                        <div class="disclaimer_cnt mt-5 mt-md-0 ps-xl-5 ms-xxl-5 ">
                            <div class="right_cnt_onebox ">
                                <h3 class="text-white font-18 fw-bold mb-4 text-uppercase text-center"><?= print_dynamic_variable('disclaimer_title_en') ?></h3>
                                <p class="text-white font-16 fw-normal text-justify text-uppercase text-center">
                                    <?= print_dynamic_variable('disclaimer_text_en') ?>
                                    <?= print_dynamic_variable('address') ?>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- main banner end -->

        <!-- footer start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 my-auto  px-3 px-md-0">
                        <div class="footer_link pt-3 pt-xxl-5">
                            <ul class="footer_menus list-unstyled mb-0 d-flex justify-content-center">
                                <li class="list-inline-item  me-4 mb-3  "><a href="https://lp.all-universe.com" class="text-black fw-bold text-decoration-none font-16 text-uppercase">Home</a></li>

                                <li class="list-inline-item  me-4 mb-3"><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase" @click="validator.openModal('#privacy_modal')">Privacy policy</a></li>

                                <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase" @click="validator.openModal('#rules_modal')">Ethical rules</a></li>

                                <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase" @click="validator.openModal('#gdpr_modal')">GDPR</a></li>

                                <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase" @click="validator.openModal('#cookie_modal')">Cookie policy</a></li>

                                <li class="list-inline-item4 me-0 "><a href="javascript:void(0);" class="text-black fw-bold text-decoration-none font-16 text-uppercase" @click="validator.openModal('#terms_modal')">Terms of service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <!-- all popup -->
        <!-- privacy policy -->
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

                            Astrofysica and its staff are fully committed to the principles of honesty, integrity and fairness in the
                            delivery of their products and services to their clients.<br>

                            All Company employees ensure that commercial transactions, requests for services, purchases or hiring of
                            staff are handled in an open, fair and impartial manner.<br>

                            This Charter sets out the standards of conduct expected of all staff as well as the Company policy on
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

                            If you are a resident of the European Economic Area ("EEA"), you have certain data protection rights and we
                            will endeavor to take reasonable steps to enable you to correct, amend, delete or restrict the use of your
                            Personal Data. to limit. If you would like to know what Personal Information we hold about you and if you
                            would like it removed from our systems, please contact us. In certain circumstances you have the following
                            data protection rights:<br><br>

                            (i) You have the right to withdraw your consent where you have previously consented to the processing of
                            your Personal Data. To the extent that the legal basis for our processing of your Personal Data is consent,
                            you have the right to withdraw that consent at any time. The revocation does not affect the lawfulness of
                            the processing before the revocation.<br><br>

                            (ii) You have the right to know whether your Personal Data is being processed by us, to obtain information
                            about certain aspects of the processing, and to obtain a copy of your Personal Data being processed.<br><br>

                            (iii) You have the right to verify the accuracy of your information and to request that it be updated or
                            corrected. You also have the right to request that we complete any Personal Data that you believe is
                            incomplete.<br><br>

                            (iv) You have the right to object to the processing of your data if the processing is based on a legal basis
                            other than consent. Where Personal Data is processed in the public interest, in the exercise of an official
                            authority vested in us, or for the legitimate interests pursued by us, you may object to such processing by
                            specific situation-related ground to justify the objection. However, you should know that if your Personal
                            Data is processed for direct marketing purposes, you can object to that processing at any time without
                            providing a justification. To find out whether we process Personal Data for direct marketing purposes,
                            please refer to the relevant sections of this Policy.<br><br>

                            (v) You have the right, under certain circumstances, to restrict the processing of your Personal Data. These
                            circumstances include: the accuracy of your Personal Data is contested by you and we need to verify its
                            accuracy; the processing is unlawful, but you oppose the erasure of your Personal Data and request that its
                            use be restricted instead; we no longer need your Personal Data for the purposes of the processing, but you
                            need it to establish, exercise or defend your legal claims; you have objected to the processing pending
                            verification whether our legitimate grounds override your legitimate grounds. Where processing is
                            restricted, this Personal Information will be marked accordingly and, with the exception of storage, only
                            processed with your consent or for the establishment, exercise or defense of legal claims, for the
                            protection of the rights of another natural or legal person or to reasons of great public interest.<br><br>

                            (vi) You have the right, under certain circumstances, to have your Personal Information deleted from us.
                            These circumstances include: the Personal Data is no longer necessary in connection with the purposes for
                            which it was collected or otherwise processed; you withdraw your consent to consent-based processing; you
                            object to the processing under certain rules of applicable data protection law; the processing is for direct
                            marketing purposes; and the personal data has been unlawfully processed. However, there are exceptions to
                            the right to erasure, such as when the processing is necessary: for the exercise of the right to freedom of
                            expression and information; to comply with a legal obligation; or for the establishment, exercise or defense
                            of a legal claim.<br><br>

                            (vii) You have the right to receive your Personal Data that you have provided to us in a structured,
                            commonly used and machine-readable format and, where technically feasible, to have it transferred to another
                            controller without any hindrance on our part, provided that such transfer does not adversely affect the
                            rights and freedoms of others.<br><br>

                            (viii) You have the right to lodge a complaint with a data protection authority about our collection and use
                            of your Personal Information. If you are not satisfied with the outcome of your complaint directly to us,
                            you have the right to lodge a complaint with your local data protection authority. For more information,
                            please contact your local data protection authority in the EEA. This provision applies provided that your
                            Personal Data is processed by automated means and that the processing is based on your consent, on a
                            contract to which you are a part, or on pre-contractual obligations thereof.<br><br>

                            Note: If you don't receive the email, please check your spam.<br><br>

                            1) Send your message to <a href="mailto:dpo@all-universe.com" class="text-decoration-none">dpo@all-universe.com</a><br><br>

                            2) To help us locate your information, please include the following:<br>
                            &emsp;First name: <br>
                            &emsp;Last Name :<br>
                            &emsp;Date of birth:(dd/mm/yyyy) :<br>
                            &emsp;Email :<br>
                            &emsp;Phone :<br><br>

                            3) Please submit your request with the reason below:<br>
                            &emsp;- Right of access<br>
                            &emsp;- Right of withdrawal<br>
                            &emsp;- Right to erasure ("right to be forgotten") (example: erasure of personal data, account closure,
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
                            <a href="https://astro.all-universe.com" class="text-decoration-none">https://astro.all-universe.com</a> website (“Website” or “Service”) and any of its related products and services
                            (collectively, “Services”). This Policy is a legally binding agreement between you (“User”, “you” or “your”)
                            and all-universe is a brand of AstroVeo B.V. (“all-universe is a brand of AstroVeo B.V.”, “we”, “us”
                            or “our”). If you are entering into this agreement on behalf of a business or other legal entity, you
                            represent that you have the authority to bind such entity to this agreement, in which case the terms “User”,
                            “you” or “your” shall refer to such entity. If you do not have such authority, or if you do not agree with
                            the terms of this agreement, you must not accept this agreement and may not access and use the Website and
                            Services. You should read this Policy so you can understand the types of cookies we use, the information we
                            collect using cookies and how that information is used. It also describes the choices available to you
                            regarding accepting or declining the use of cookies. For further information on how we use, store and keep
                            your personal data secure, see our privacy policy.<br><br>



                            <b>What are cookies?</b><br><br>

                            Cookies are small pieces of data stored in text files that are saved on your computer or other devices when
                            websites are loaded in a browser. They are widely used to remember you and your preferences, either for a
                            single visit (through a "session cookie") or for multiple repeat visits (using a "persistent
                            cookie").<br><br>


                            Session cookies are temporary cookies that are used during the course of your visit to the Website, and they
                            expire when you close the web browser.<br><br>


                            Persistent cookies are used to remember your preferences within our Website and remain on your desktop or
                            mobile device even after you close your browser or restart your computer. They ensure a consistent and
                            efficient experience for you while visiting the Website and Services.<br><br>


                            Cookies may be set by the Website ("first-party cookies"), or by third parties, such as those who serve
                            content or provide advertising or analytics services on the Website ("third party cookies"). These third
                            parties can recognize you when you visit our website and also when you visit certain other websites. You may
                            learn more about cookies and how they work here.<br><br>



                            <b>What type of cookies do we use?</b><br><br>


                            <b>- Functionality cookies</b><br><br>


                            Functionality cookies let us operate the Website and Services in accordance with the choices you make. For
                            example, we will recognize your username and remember how you customized the Website and Services during
                            future visits.<br><br>



                            <b>What are your cookie options?</b><br><br>


                            If you don’t like the idea of cookies or certain types of cookies, you can change your browser’s settings to
                            delete cookies that have already been set and to not accept new cookies. To learn more about how to do this,
                            visit internetcookies.com<br><br>


                            Please note, however, that if you delete cookies or do not accept them, you might not be able to use all of
                            the features the Website and Services offer.<br><br>



                            <b>Changes and amendments</b><br><br>


                            We reserve the right to modify this Policy or its terms related to the Website and Services at any time at
                            our discretion. When we do, we will revise the updated date at the bottom of this page. We may also provide
                            notice to you in other ways at our discretion, such as through the contact information you have
                            provided.<br><br>


                            An updated version of this Policy will be effective immediately upon the posting of the revised Policy
                            unless otherwise specified. Your continued use of the Website and Services after the effective date of the
                            revised Policy (or such other act specified at that time) will constitute your consent to those
                            changes.<br><br>



                            <b>Acceptance of this policy</b><br><br>


                            You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and
                            using the Website and Services you agree to be bound by this Policy. If you do not agree to abide by the
                            terms of this Policy, you are not authorized to access or use the Website and Services.<br><br>



                            <b>Contacting us</b><br><br>


                            If you have any questions, concerns, or complaints regarding this Policy or the use of cookies, we encourage
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
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>

    <!-- pop up -->
    <script>
        $(document).ready(function() {



        });
    </script>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/babel" src="{{$asset_path}}assets/js/custom.js"></script>

    <script type="text/babel">
        const { createApp, ref, computed, onMounted } = Vue;
    const validator = validatorMethods();
    
    createApp({
      setup() {
        onMounted (() => {
          validator.pageMounted();
        });
        return {
                validator
            }
        }
    }).mount('#app')
</script>

</body>

</html>
