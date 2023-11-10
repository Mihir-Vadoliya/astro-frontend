@php($asset_path = '/landers/landingpages/100832/')
@php($srcImg = "/landers/sets/set44/")
@include('/landers/terms/dynamic/dynamic')

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Astrofysica">
    <meta name="title" content="Astrofysica">
    <meta name="keyword" content="Astrofysica">
    <meta name="description" content="Astrofysica">
    <meta property="og:title" content="Astrofysica" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="Astrofysica.com" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="104" />
    <meta property="og:image:height" content="87" />
    <meta property="og:site_name" content="Astrofysica" />
    <meta property="og:description" content="Astrofysica" />

    <!-- favicon -->
    <link rel='shortcut icon' href='assets/images/favicon.png'>
    <title>Astrofysica</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Livvic:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel='shortcut icon' href='{{ $asset_path }}assets/images/logo.png' type='image/x-icon'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="manifest" href="{{ $asset_path }}manifest.json">

    <!-- Bootstrap CSS  -->
    <link type="text/css" href="{{$asset_path}}assets/css/bootstrap.min.css" rel="stylesheet">
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
        <header class="header">
            <div class="container">
                <form action="http://127.0.0.1:8000/posts" method="post" class="row justify-content-center">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-3 order-0 order-md-0">
                            <div class="">
                                <a href="#"><img src="{{ $asset_path }}/assets/images/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 my-auto order-2 order-md-1">
                            <div class="menu_links text-center">
                                <ul class="list-unstyled list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="" class="Lato fw-normal font-16 text-decoration-none text-black">Home</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="Lato fw-normal font-16 text-decoration-none text-black">About us</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="Lato fw-normal font-16 text-decoration-none text-black">Services</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="Lato fw-normal font-16 text-decoration-none text-black">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 my-auto order-1 order-md-2">
                            <div class="text-end">
                                <a href="" class="atsro_btn text-black text-decoration-none">ASTRO</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </header>
        <!-- header end -->
        <!-- banner start -->
        <section class="main_banner">
            <div class="container">
                <div class="row mx-0 w-100 step_1_title">
                    <div class="col-12 col-md-12 col-lg-3">
                        <!-- <div class="main_banner_image">
                            <img src="assets/images/christin-image.png" class="w-100">
                        </div> -->
                    </div>
                    <div class="col-12 col-md-12 col-lg-7 my-auto">
                        <div class="text-center">
                            <h1 class="text-black fw-light Livvic mb-0 main_title">Get Clarity, <span class="text-black fw-500">Guidance</span> And<br> <span class="text-black fw-500">Peace Of Mind</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->
        <!-- choose sign start -->
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

            <section class="choose_sign ">
                <div class="container-fluid border-bottom-D9D9D9">
                    <!-- step 1 -->
                    <div class="row mx-0 w-100 step_1 " id="step_1">
                        <div class="col-4 col-lg-1 gtm-zodic" data-gtm-value="aries" onclick="sign('#step_1','#step_2','aries')">
                            <a href="javascript:void(0)" class="choose_sign_1">
                                <img src="{{$srcImg}}/aries-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1 gtm-zodic " data-gtm-value="Taurus" onclick="sign('#step_1','#step_2','Taurus')">
                            <a href="javascript:void(0)" class="choose_sign_1"><img src="{{$srcImg}}Taurus-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3" name="astofysica">

                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1 gtm-zodic" data-gtm-value="gemini" onclick="sign('#step_1','#step_2','gemini')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}gemini-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1 gtm-zodic " data-gtm-value="Cancer" onclick="sign('#step_1','#step_2','Cancer')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}Cancer-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1 gtm-zodic" data-gtm-value="Leo" onclick="sign('#step_1','#step_2','Leo')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}Leo-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1 gtm-zodic " data-gtm-value="Virgo" onclick="sign('#step_1','#step_2','Virgo')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}Virgo-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1 gtm-zodic" data-gtm-value="Libra" onclick="sign('#step_1','#step_2','Libra')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}Libra-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1 gtm-zodic " data-gtm-value="Scorpio" onclick="sign('#step_1','#step_2','Scorpio')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}Scorpio-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1 gtm-zodic " data-gtm-value="Sagittarius" onclick="sign('#step_1','#step_2','Sagittarius')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}Sagittarius-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1 gtm-zodic" data-gtm-value="Capricorn" onclick="sign('#step_1','#step_2','Capricorn')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}Capricorn-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-gtm-value="Aquarius" onclick="sign('#step_1','#step_2','Aquarius')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}Aquarius-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-lg-1" data-gtm-value="Pisces" onclick="sign('#step_1','#step_2','Pisces')">
                            <a href="#" class="choose_sign_1"><img src="{{$srcImg}}Pisces-icon.png" class="w-100">
                                <div class="next_arrow text-center mt-3">
                                    <img src="{{$asset_path}}assets/images/next-arrow.png">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- choose sign end -->

                <!-- step_2 -->
                <div class="row mx-0 w-100 step_2_title d-none ">
                    <div class="text-center">
                        <h1 class="text-black fw-light Livvic mb-0 main_title">Get Clarity, <span class="text-black fw-500">Guidance</span> And<br> <span class="text-black fw-500">Peace Of Mind</span></h1>
                </div>
                </div>
                <div class=" gtm-screen-birthdate col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_2 d-none" id="step_2">
                    <p class="montserrat font-24 fw-bold  text-center mt-50">Birthdate:</p>
                    <div class="row">
                        <div class="col-2 col-md-2 col-lg-4">
                            <select class="form-select montserrat font-18 select_box_field color-061629 day" aria-label="Default select example" name="day" data-gtm-form-interact-field-id="1" required>
                                <option value="" selected="selected">Day</option>
                                @for ($i = 1; $i < 32; $i++) 
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-2 col-md-2 col-lg-4">
                            <select aria-required="true" class="form-select montserrat font-18 select_box_field color-061629 month " aria-label="Default select example" name="month" required>
                                <option value="" selected="selected">Month</option>
                                @for($i=1;$i<=12; $i++) 
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-2 col-md-2 col-lg-4">
                            <select class="form-select montserrat font-18 select_box_field color-061629 year" aria-label="Default select example" name="year" required>
                                <option value="" selected>Year</option>
                                @for($i=1960;$i<=2001;$i++) 
                                    <option value="{{$i}}">{{$i}}</option>
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
         

                <!-- step_3  -->
                <div class="row mx-0 w-100 step_3_title d-none">
                </div>
                <div class=" gtm-screen-gender col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_3 d-none" id="step_3">
                    <p class="montserrat font-24 fw-bold text-uppercase text-center mt-5 ">Gender:</p>
                    <div class="  row justify-content-center">
                        <div class="col-6 col-md-2 col-lg-3">
                            <label class="gender_options">
                                <!-- <img src="assets/images/sign-1.png" class="position-relative z-index-1 w-100"> -->
                                <span class=" position-relative text-black z-index-1 montserrat">Male</span>
                                <input type="radio" name="gender" class="gtm-gender first_name_field gender" data-gtm-value="male" value="male">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 col-md-2 col-lg-3">
                            <label class="gender_options">

                                <span class=" position-relative text-black z-index-1 montserrat">Female</span>
                                <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="female">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <span class=" error step_3_error d-none text-center" style="color: red; font-weight: bold;"></span>
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat  step_3_next" onclick="getgendercheck('#step_3', '#step_4')">Continue</button>

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

                <!-- step_4  -->

                <div class="row mx-0 w-100 step_4_title d-none">
                </div>
                <div class=" gtm-screen-first_name col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_4 d-none " id="step_4">
                    <div class="row justify-content-center">

                        <div class="col-2 col-md-2 col-lg-3 col-xl-8">
                            <label class="montserrat font-18 text-061629 d-block fw-regular mb-2 frist_name ">First name:</label>
                            <input type="text" placeholder="Name" class="first_name_field  name " name="name" require>

                        </div>
                        <span class="error step_4_error  d-none text-center" style="color: red; font-weight: bold;">Please fill out this fields </span>
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat  step_4_next" onclick="getnamecheck('#step_4', '#step_5')">Continue</button>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 fw-bold text-uppercase">

                                <i class="fa-solid fa-arrow-left" onclick="backstep('.step_3','.step_4');" _mstvisible="4">
                                </i>
                            </p>
                        </div>
                        <div class="col-6 pt-5 mt-3">
                            <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Step 3/5</p>
                        </div>
                    </div>
                </div>

                <!-- step 5 -->
                <div class="row mx-0 w-100 step_5_title d-none ">
                </div>
              
                <div class=" gtm-screen-city col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_5 d-none" id="step_5">
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
                <div class="row mx-0 w-100 step_6_title d-none">
                </div>

                <div class=" gtm-screen-email col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_6 d-none" id="step_6">
                    <div class="row justify-content-center">
                        <div class="col-2 col-md-2 col-lg-3 col-xl-8">
                            <p class="montserrat font-24 fw-bold  text-center mt-50 ">Email:</p>
                            <input type="email" placeholder="Email" name="email" class="gtm-email first_name_field email" required>
                            
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
                
                <div class=" row mx-0 w-100 step_7_title d-none">
                </div>
                <div class=" gtm-screen-thankyou col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_7 d-none" id="step_7">
                    <h2 class="font-40 pacifico color-061629 text-center">Thank You For Submit</h2>
                </div>
                <div class="container-fluid pt-5">
                    <div class="row mx-0 w-100">
                        <div class="col-12">
                            <div class="text-center">
                                <p class="text-lowercase fw-normal text-black mb-0 font-15 Lato line-height-23">Disclaimer: THE INFORMATION PROVIDED, WHETHER FREE OR PAID, MUST NOT BE CONSIDERED AS INDICATING AN OPINION IN THE REALMS OF PSYCHOLOGY, ECONOMY-FINANCE, MEDICINE, LEGAL MATTERS, REAL ESTATE OR OTHERS AND MUST IN NO CASE BE
                                    USED AS A BASIS FOR DECISION MAKING. TESTIMONIALS, REVIEWS AND ENDORSEMENTS ARE FREE INDIVIDUAL OPINIONS THAT IN NO CASE IMPLY IDENTICAL RESULTS FOR EVERYBODY. PLEASE ALSO READ THE TERMS OF USE.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>

    
    <script src="{{$asset_path}}assets/js/functions.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="{{$asset_path}}assets/js/jquery-3.6.0.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js"></script>
</body>
</html>
