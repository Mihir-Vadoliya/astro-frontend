@php($asset_path = '/landers/landingpages/100833/')
@php($srcImg = "/landers/sets/set43/")
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

    <!-- Astrology offerpage favicon -->
    <link rel="shortcut icon" href="{{$asset_path}}assets/images/astrology-offer-favicon.png" />


    <link rel='shortcut icon' href='{{ $asset_path }}assets/images/logo.png' type='image/x-icon'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="manifest" href="{{ $asset_path }}manifest.json">

    <!-- Bootstrap CSS  -->
    <link type="text/css" href="{{$asset_path}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ $asset_path }}assets/css/slick.css" rel="stylesheet">
    <link href="{{ $asset_path }}assets/css/slick-theme.css" rel="stylesheet">
    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <!-- custom css -->
    <link href="{{ $asset_path }}assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
   
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

    <title>ASTROFYSICA</title>
</head>


<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="main_bg">
        <!-- header start -->
        <header class="header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-6">
                        <div class="head_person_image">
                            <img src="{{ $asset_path }}assets/images/person-image.png">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-10 col-lg-6 my-auto">
                        <div class="head_person_name text-end">
                            <h1 class="pacifico font-50 text-white">Christin</h1>
                            <p class="montserrat font-20 text-white">Illuminate Your Life!</p>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
    </div>

    <!-- banner start -->
    <section class="main_banner my-5  ">
        <div class="container gtm-screen-zodiac">
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

                <!-- step 1 -->
                <div class="col-12 col-sm-12 col-md-20 step_1_title ">
                    <p class="font-18 color-061629 montserrat fw-regular text-center">Money… Luck… Happiness…</p>
                    <h2 class="font-40 pacifico color-061629 text-center">What does 2023 hold for you?</h2>

                </div>

                <div class="col-12 col-sm-12 col-md-10 pt-3 step_1 px-0 px-md-3" id="step_1">
                    <p class=" montserrat font-24 fw-bold text-uppercase text-center mt-5">Choose your zodiac sign:</p>
                    <div class="row">

                        <div class="col-2 col-md-2 col-lg-1 " onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-1.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Aries</span><br>
                                <input type="radio" name="astofysica" value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-2.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Libra</span><br>
                                <input type="radio" name="astofysica" value="2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-3.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Leo</span><br>
                                <input type="radio" name="astofysica" value="3">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-4.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Pisces</span><br>
                                <input type="radio" name="astofysica" value="4">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-5.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Gemini</span><br>
                                <input type="radio" name="astofysica" value="5">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-6.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Scorpio</span><br>
                                <input type="radio" name="astofysica" value="6">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-7.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Sagittarius</span><br>
                                <input type="radio" name="astofysica" value="7">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-8.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Virgo</span><br>
                                <input type="radio" name="astofysica" value="8">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-9.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Taurus</span><br>
                                <input type="radio" name="astofysica" value="9">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-10.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Capricorn</span><br>
                                <input type="radio" name="astofysica" value="10">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-11.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Cancer</span><br>
                                <input type="radio" name="astofysica" value="11">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-5 col-lg-1" onclick="sign('#step_1','#step_2')">
                            <label class="choose_your_sign">
                                <img src="{{$srcImg}}sign-12.png" class="position-relative z-index-1 w-100">
                                <span class=" position-relative z-index-1 pacifico">Aquarius</span><br>
                                <input type="radio" name="astofysica" value="12">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                </div>
                <p class="br"></p>


                <!-- step 2 -->

                <div class=" gtm-screen-birthdate col-12 col-sm-12 col-md-10 mt-5 pt-2 step_2_title d-none">
                    <p class="font-18 color-061629 montserrat fw-regular text-center">Money… Luck… Happiness…</p>
                    <h2 class="font-40 pacifico color-061629 text-center">What does 2022 hold for you?</h2>

                </div>
                <div class="col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_2 d-none " id="step_2">
                    <p class="montserrat font-24 fw-bold  text-center mt-50">Birthdate:</p>
                    <div class="row">
                        <div class="col-2 col-md-2 col-lg-4">
                            <select class="form-select montserrat font-18 select_box_field color-061629 day" aria-label="Default select example" name="day" data-gtm-form-interact-field-id="1" required>
                                <option value="" selected="selected">Day</option>
                                @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-2 col-md-2 col-lg-4">
                            <select aria-required="true" class="form-select montserrat font-18 select_box_field color-061629 month " aria-label="Default select example" name="month" required>
                                <option value="" selected="selected">Month</option>
                                @for($i=1;$i<=12; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-2 col-md-2 col-lg-4">
                            <select class="form-select montserrat font-18 select_box_field color-061629 year" aria-label="Default select example" name="year" required>
                                <option value="" selected>Year</option>
                                @for($i=1960;$i<=2001;$i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <span class="step_2_error error d-none col-12 pt-20 text-center" style="color: red; font-weight: bold;">Please indicate the full date</span>
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat  step_2_next" onclick="getdatestep('#step_2', '#step_3')">Continue</button>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 fw-bold text-uppercase">
                                <i class="fa-solid fa-arrow-left" onclick="backstep('.step_1','.step_2');"></i>
                            </p>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Step 1/5</p>
                        </div>
                    </div>
                </div>


                <!-- step 3 -->

                <div class=" gtm-screen-gender col-12 col-sm-12 col-md-10 mt-5  pt-2 step_3_title d-none">
                    <p class="font-18 color-061629 montserrat fw-regular text-center">Money… Luck… Happiness…</p>
                    <h2 class="font-40 pacifico color-061629 text-center">What does 2023 hold for you?</h2>
                    <!-- <p class="montserrat font-24 fw-bold text-uppercase text-center mt-5 ">Gender:</p> -->
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_3 d-none" id="step_3">
                    <p class="montserrat font-24 fw-bold  text-center mt-50 ">Gender:</p>

                    <div class="row justify-content-center">

                        <div class="col-6 col-md-2 col-lg-3">

                            <label class="gender_options">
                                <span class=" position-relative text-black z-index-1 montserrat">Male</span>
                                <input type="radio" class="gtm-gender gender " name="gender" value="male">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-3">
                            <label class="gender_options">
                                <span class=" position-relative text-black z-index-1 montserrat">Female</span>
                                <input type="radio" class="gtm-gender gender" name="gender" value="female">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <span class=" error step_3_error d-none col-12 pt-20 text-center " style="color: red; font-weight: bold;">Please choose any one</span>
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat  step3Title" onclick="getgendercheck('#step_3','#step_4')">Continue</button>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 fw-bold text-uppercase">
                                <i class="fa-solid fa-arrow-left" onclick="backstep('.step_2','.step_3');"> </i>
                            </p>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Step 2/5</p>
                        </div>
                    </div>
                </div>

                <!-- step 4 -->


                <div class="col-12 col-sm-12 col-md-10 mt-5  pt-2 step_4_title d-none">
                </div>
                <div class="gtm-screen-frist_name col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_4 d-none" id="step_4">
                    <div class="row justify-content-center">
                        <div class="col-2 col-md-2 col-lg-3 col-xl-8">
                            <p class="montserrat font-24 fw-bold  text-center mt-50">First name:</p>
                            <input type="text" placeholder="Name" id="name" class="first_name_field  name " name="name" require data-validate>
                        </div>
                        <span class="error step_4_error  d-none col-12 pt-20 text-center" style="color: red; font-weight: bold;">Please fill out this fields </span>
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_4_next" onclick="getnamecheck('#step_4','#step_5')">Continue</button>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 fw-bold text-uppercase">
                                <i class="fa-solid fa-arrow-left" onclick="backstep('.step_3','.step_4');" _mstvisible="4"></i>
                            </p>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Step 3/5</p>
                        </div>
                    </div>
                </div>


                <!-- step 5 -->
                <div class=" gtm-screen-city col-12 col-sm-12 col-md-10 mt-5 pt-2 step_5_title d-none">
                    <p class="font-18 color-061629 montserrat fw-regular text-center">Money… Luck… Happiness…</p>
                    <h2 class="font-40 pacifico color-061629 text-center">What does 2022 hold for you?</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_5 d-none" id="step_5">
                    <div class="row justify-content-center">
                        <div class="col-2 col-md-2 col-lg-3 col-xl-8">
                            <p class="montserrat font-24 fw-bold  text-center mt-50">Country:</p>
                            <select class="form-select montserrat font-18 select_box_field color-061629 city" aria-label="Default select example" name="city" required>
                                <option value="" selected>Country</option>
                                <option value="ind">india</option>
                                <option value="us">Us</option>
                                <option value="japan">Japan</option>
                            </select>
                        </div>
                        <span class=" error step_5_error  d-none col-12 pt-20 text-center" style="color: red; font-weight: bold;">Please choose any on</span>
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_5_next" onclick="getcountry('#step_5','#step_6')">Continue</button>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 fw-bold text-uppercase">
                                <i class="fa-solid fa-arrow-left" onclick="backstep('.step_4','.step_5');"></i>
                            </p>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Step 4/5</p>
                        </div>
                    </div>
                </div>

                <!-- step 6 -->
                <div class=" gtm-screen-email col-12 col-sm-12 col-md-10 mt-5 pt-2 step_6_title d-none">
                    <p class="font-18 color-061629 montserrat fw-regular text-center">Money… Luck… Happiness…</p>
                    <h2 class="font-40 pacifico color-061629 text-center">What does 2022 hold for you?</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_6 d-none" id="step_6">
                    <div class="row justify-content-center">
                        <div class="col-2 col-md-2 col-lg-3 col-xl-8">
                            <p class="montserrat font-24 fw-bold  text-center mt-50 ">Email:</p>
                            <input type="email" placeholder="Email" name="email" class="gtm-email first_name_field email" required>
                            <fieldset class="step_mail__white-box">
                                <legend class="legend fw-bold">Free optional gift</legend>
                                <input type="checkbox" name="coreg" value="true">
                                <label class="check_text">Connect with your Guardian Angel through Angela and receive your free angel reading.</label>
                            </fieldset>
                        </div>
                        <span class="step_6_error error d-none col-12 pt-20 text-center" style="color: red; font-weight: bold;">Please fill out this fields</span>
                        <div class="col-12 text-center mt-5">
                            <button type="submit" class="continue_btn font-16 text-white text-uppercase montserrat  step_6_next" onclick="emailCheck('#step_6','#step_7')">Continue</button>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 fw-bold text-uppercase">
                                <i class="fa-solid fa-arrow-left" onclick="backstep('.step_5','.step_6');"></i>
                            </p>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Step 5/5</p>
                        </div>

                    </div>

                </div>
                <!-- step 7 -->
                <div class="col-12 col-sm-12 col-md-10 mt-5 pt-2 step_7_title d-none" id="step_7">
                    <div id="loadImg">
                        <div class="loader"></div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="step_7">
                        <div>
                            <div class="text-center step_8__thanks">Your trust touches me deeply. </div>
                            <div>
                                <h3 class="step_7__title text-center">
                                    I will immediately get down to work for you. My answer will reach you in the next hours.
                                </h3>
                                <div class="step_7__black-box">
                                    <p>
                                        Go to your inbox now and discover the gifts I promised you: – Your Positive Energy Checkup – Your 7-Days-of-Absolute-Protection Talisman
                                    </p>
                                    <ul class="step_7__list">
                                        <li>Go to your inbox</li>
                                        <li> Check your inbox or spam</li>
                                        <li>Open my email and access to your welcome gifts.</li>
                                    </ul>
                                </div>

                                <p class="step_7__black-box">
                                    P.S. To make sure your trust in me is merited, I want you to know that I respect the regulation regarding privacy and access to your personal data. Everything is here, in my Privacy Policy.
                                </p>
                                <p class="br"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="testimonial">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-7">
                                <p class="personal-date">
                                    <img src="{{$asset_path}}assets/images/lock.png" alt="lock">
                                    Your information is used confidentiality to create personalized clairvoyance.
                                </p>

                                <div class="slider">
                                    <div class="slider_slick">
                                        <div class="slider_info">
                                            <div class="slider_info-img">
                                                <img src="{{$asset_path}}assets/images/women2.png" alt="women">
                                            </div>
                                            <h3 class="slider_title">Milana</h3>
                                            <img src="{{$asset_path}}assets/images/stars.png" alt="stars" class="start">
                                            <p class="slider_text">
                                                Thank you so much for my reading, it really opened my eyes I didn't expect it to
                                                be so clear!
                                            </p>
                                        </div>
                                        <div class="slider_info">
                                            <div class="slider_info-img">
                                                <img src="{{$asset_path}}assets/images/women.png" alt="women">
                                            </div>
                                            <h3 class="slider_title">Jennifer</h3>
                                            <img src="{{$asset_path}}assets/images/stars.png" alt="stars" class="start">
                                            <p class="slider_text">
                                                I just wanted to say thank you, I only asked for information about my love life
                                                but you gave me so much more that everything just became much more clear.
                                            </p>
                                        </div>
                                        <div class="slider_info">
                                            <div class="slider_info-img">
                                                <img src="{{$asset_path}}assets/images/women3.png" alt="women">
                                            </div>
                                            <h3 class="slider_title">Christina</h3>
                                            <img src="{{$asset_path}}assets/images/stars.png" alt="stars" class="start">
                                            <p class="slider_text">
                                                Thank you </br> you have made a new person out of me, thank you very much again
                                                for everything!
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>






                <!-- <div class="col-12 col-sm-12 col-md-10 mt-5 pt-2 step_7_title d-none" id="step_7">

                    <h2 class="font-40 pacifico color-061629 text-center">Thank You For Submit</h2>
                    <p class="br"></p>
                
         -->

                <div class="container" width="100%">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 my-auto  px-3 px-md-0">
                            <div class="font-40 montserrat fw-bold text-center text-061629 pb-3">
                                <div class="right_cnt_onebox ">
                                    <h3 class="text-black font-18 fw-bold mb-4 text-uppercase text-center" style="color: black;"><?= print_dynamic_variable('disclaimer_title_en') ?></h3>
                                    <p class="text-black font-16 color-061629 montserrat fw-regular  text-uppercase text-center ">
                                        <?= print_dynamic_variable('disclaimer_text_en') ?>
                                        <?= print_dynamic_variable('address') ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <!--f804-LU-new-astrology-final-footer -->
    <footer class="f804-LU-new-astrology-final footer position-unset pt-5">
        <div class=" container">
            <div id="footer">
                <ul class="f804-LU-new-astrology-final-menu footer_menu text-center list-inline list-unstyled">
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                        <a href="http://127.0.0.1:8000/100833/UK" class=" text-white text-decoration-none roboto medium font-20"> HOME</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                        <a href="javascript:void(0);" class="tnc_btn_openmd text-white text-decoration-none roboto medium font-20"> CONDITIONS</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                        <a href="javascript:void(0);" class="policy_btn_openmd text-decoration-none text-white roboto medium font-20"> PRIVACY POLICY </a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                        <a href="javascript:void(0);" class="utc_btn_openmd text-decoration-none text-white roboto medium font-20"> GDPR</a>
                    </li>
                    <li class="list-inline-item me-md-3 me-xxl-5 pe-2 pe-lg-3 pe-xxl-5">
                        <a href="javascript:void(0);" class="text-decoration-none  text-white roboto medium font-20 cnt_btn_openmd"> ETHICAL RULES</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0);" class="text-decoration-none  text-white roboto medium font-20 cookie_open_btn">COOKIE POLICY</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    </div>

    <!-- Pop-up -->
    <!-- new terms popup -->
    <div class="f804-LU-new-astrology-final-conditon modal fade terms_modal" id="terms_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <h5 class="f804-LU-new-astrology-final-con-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">CONDITIONS</h5>
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
                <h5 class="f804-LU-new-astrology-final-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">PRIVACY POLICY</h5>
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
                <h5 class="f804-LU-new-astrology-final-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">GDPR</h5>
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
                <h5 class="modal-title text-white font-26 mx-auto" id="exampleModalLabel">ETHICAL RULES</h5>
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
                <h5 class="f804-LU-new-astrology-final-tell-h5 modal-title text-white font-26 mx-auto" id="exampleModalLabel">COOKIE POLICY</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    @include('landers.terms.astrology-prism.de.cookie-policy')
                </div>
            </div>
        </div>
    </div>

    <!-- Astrology offerpage custom js -->
    <script src="{{$asset_path}}assets/js/functions.js"></script>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="{{$asset_path}}assets/js/jquery-3.6.0.min.js"></script>
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js"></script>

    

</body>

</html>