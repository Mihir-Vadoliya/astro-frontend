@php($asset_path = '/landers/landingpages/252423/')
@php($srcImg = "/landers/sets/set26/")
@include('/landers/terms/dynamic/dynamic')

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="{{$asset_path}}assets/images/favicon.png">

  <meta property="og:title" content="Moon Pion" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="Moon Pion" />
  <meta property="og:image" content="Moon Pion" />
  <meta property="og:image:width" content="37" />
  <meta property="og:image:height" content="37" />
  <meta property="og:site_name" content="Moon Pion" />
  <meta property="og:description"
    content="Moon Pion" />
  <meta name="author" content="Moon Pion">
  <meta name="keywords" content="Moon Pion">
  <meta name="title" content="Moon Pion">
  <meta name="description" content="Moon Pion">

  <!-- all CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{$asset_path}}assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{$asset_path}}assets/css/styles.css" rel="stylesheet">

  <style>
    .error{color: red;}
  </style>
  <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
  <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>


    @if($gtmContainerId)
        @include('google.gtmcontainer')
    @endif
   <!-- notify script -->
    <script> (function(document, window) {
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
    @if($facebook)
        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
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
            <img height="1" width="1" style="display:none"
                 src="https://www.facebook.com/tr?id={{$pixel}}&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endif
    <!-- Start VWO Async SmartCode -->
    <link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com" />
    <script type='text/javascript' id='vwoCode'>
    window._vwo_code=window._vwo_code || (function() {
    var account_id=697729,
    version = 1.5,
    settings_tolerance=2000,
    library_tolerance=2500,
    use_existing_jquery=false,
    is_spa=1,
    hide_element='body',
    hide_element_style = 'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important',
    /* DO NOT EDIT BELOW THIS LINE */
    f=false,d=document,vwoCodeEl=d.querySelector('#vwoCode'),code={use_existing_jquery:function(){return use_existing_jquery},library_tolerance:function(){return library_tolerance},hide_element_style:function(){return'{'+hide_element_style+'}'},finish:function(){if(!f){f=true;var e=d.getElementById('_vis_opt_path_hides');if(e)e.parentNode.removeChild(e)}},finished:function(){return f},load:function(e){var t=d.createElement('script');t.fetchPriority='high';t.src=e;t.type='text/javascript';t.onerror=function(){_vwo_code.finish()};d.getElementsByTagName('head')[0].appendChild(t)},getVersion:function(){return version},getMatchedCookies:function(e){var t=[];if(document.cookie){t=document.cookie.match(e)||[]}return t},getCombinationCookie:function(){var e=code.getMatchedCookies(/(?:^|;)\s?(_vis_opt_exp_\d+_combi=[^;$]*)/gi);e=e.map(function(e){try{var t=decodeURIComponent(e);if(!/_vis_opt_exp_\d+_combi=(?:\d+,?)+\s*$/.test(t)){return''}return t}catch(e){return''}});var i=[];e.forEach(function(e){var t=e.match(/([\d,]+)/g);t&&i.push(t.join('-'))});return i.join('|')},init:function(){if(d.URL.indexOf('__vwo_disable__')>-1)return;window.settings_timer=setTimeout(function(){_vwo_code.finish()},settings_tolerance);var e=d.createElement('style'),t=hide_element?hide_element+'{'+hide_element_style+'}':'',i=d.getElementsByTagName('head')[0];e.setAttribute('id','_vis_opt_path_hides');vwoCodeEl&&e.setAttribute('nonce',vwoCodeEl.nonce);e.setAttribute('type','text/css');if(e.styleSheet)e.styleSheet.cssText=t;else e.appendChild(d.createTextNode(t));i.appendChild(e);var n=this.getCombinationCookie();this.load('https://dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&f='+ +is_spa+'&vn='+version+(n?'&c='+n:''));return settings_timer}};window._vwo_settings_timer = code.init();return code;}());
    </script>
    <!-- End VWO Async SmartCode -->

  <title>Moon Pion</title>
</head>

<body>


  <div class="main_bg">
    <!-- header start -->
    <header class="header py-3">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-3 col-md-2 col-lg-2">
            <div class="head_person_image text-right text-md-end border-0">
              <a href="https://moon-pion.com/index.php?lang=MX">
                <img src="{{$asset_path}}assets/images/logo.png">
              </a>
            </div>
          </div>
          <div class="col-9 col-md-10 col-lg-10 mx-auto">
            <p class="font-18 text-white montserrat fw-regular text-center text-md-center">Dinero… Suerte… Felicidad…</p>
            <h2 class="font-40 montserrat fw-bold text-white text-center text-md-center">Qué depara el 2023 para ti?</h2>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
    <!-- steps start -->
    <section class="gtm-screen-zodiac main_banner">
      <div class="container">
        <div class="row justify-content-start mx-0 w-100">
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
          <!-- step 1 -->
          <div class="col-12 col-sm-12 col-md-10 step_1_title ">
            <p class="montserrat font-24 text-white fw-regular text-center text-md-start mt-3 mt-xxl-5">SELECCIONE SU SIGNO ZODIACAL</p>
          </div>
          <div class="col-12 col-sm-12 col-md-10 pt-3 step_1 px-0 px-md-3">
            <div class="row mx-0 w-100 justify-content-start">
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}aries-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Aries</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="aries" value="aries">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}libra-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Libra</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="libra" value="libra">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}leo-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Leo</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="leo" value="leo">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}pisces-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Piscis</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="pisces" value="pisces">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}gemini-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Géminis</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="gemini" value="gemini">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}scorpio-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Escorpión</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="scorpio" value="scorpio">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}sagittarius-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Sagitario</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="sagittarius" value="sagittarius">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}virgo-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Virgo</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="virgo" value="virgo">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}taurus-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Tauro</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="taurus" value="taurus">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}capricorn-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Capricornio</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="capricorn" value="capricorn">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}cancer-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Cáncer</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="cancer" value="cancer">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}aquarius-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Acuario</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="aquarius" value="aquarius">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>

          <!-- step 2 -->
          <div class="col-12 col-sm-12 col-md-10  step_2_title d-none">
            <p class="montserrat font-24 text-white fw-regular text-center text-md-start mt-3 mt-xxl-5">¿Cuándo nació?</p>
          </div>
          <div class="gtm-screen-birthdate col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_2 d-none">
            <div class="row">
              <div class="col-4 col-md-4 col-lg-4">
                <select class="form-select montserrat font-18 select_box_field text-black day"
                  aria-label="Default select example" name="day">
                  <option value="" selected>Día</option>
                  @for ($i = 1; $i < 32; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                  @endfor

                </select>
              </div>
              <div class="col-4 col-md-4 col-lg-4">
                <select class="form-select montserrat font-18 select_box_field text-black month"
                  aria-label="Default select example" name="month">
                  <option value="" selected>Mes</option>
                  <option value="01">Enero</option>
                  <option value="02">Febrero</option>
                  <option value="03">Marzo</option>
                  <option value="04">Abril</option>
                  <option value="05">Mayo</option>
                  <option value="06">Junio</option>
                  <option value="07">Julio</option>
                  <option value="08">Agosto</option>
                  <option value="09">Septiembre</option>
                  <option value="10">Octubre</option>
                  <option value="11">Noviembre</option>
                  <option value="12">Diciembre</option>
                </select>
              </div>
              <div class="col-4 col-md-4 col-lg-4">
              <select class="form-select montserrat font-18 select_box_field text-black year"
                  aria-label="Default select example" name="year">
                  <option value="" selected>Año</option>
                  @for ($i = 2004; $i > 1906; $i--)
                      <option value="{{$i}}">{{$i}}</option>
                  @endfor
                </select>
              </div>
                <span class="step_2_error error d-none">Introduce la fecha completa</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_2_next">Próxima pregunta >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="gtm-birthdate-continue font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_1','.step_2');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Paso 1/5</p>
              </div>
            </div>
          </div>

          <!-- step 3 -->
          <div class="col-12 col-sm-12 col-md-8 col-xl-8 pt-3 step_3_title d-none">
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">¿Cuál es su género?
            </p>
          </div>
          <div class="gtm-screen-gender col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_3 d-none">
            <div class="row justify-content-start">
              <div class="col-6 col-md-6 col-lg-3">
                <label class="gender_options">
                  <!-- <img src="{{$asset_path}}assets/images/sign-1.png" class="position-relative z-index-1 w-100"> -->
                  <span class=" position-relative text-black z-index-1 montserrat">Hombre</span>
                  <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" value="male">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-6 col-md-6 col-lg-3">
                <label class="gender_options">
                  <!-- <img src="{{$asset_path}}assets/images/sign-1.png" class="position-relative z-index-1 w-100"> -->
                  <span class="position-relative z-index-1 color-061629 montserrat">Mujeres</span>
                  <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="female">
                  <span class="checkmark"></span>
                </label>
              </div>
              <span class="error step_3_error d-none">Por favor complete este campo</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_3_next">Próxima pregunta >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_2','.step_3');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Paso 2/5</p>
              </div>
            </div>
          </div>

          <!-- step 4 -->
          <div class="col-12 col-sm-12 col-md-10 step_4_title d-none">
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">¿Cuál es su nombre?
            </p>
          </div>
          <div class="gtm-screen-name col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_4 d-none">
            <div class="row justify-content-start">
              <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <label class="montserrat font-20 text-white d-block fw-regular mb-2">Nombre:</label>
                <input type="text" placeholder="Nombre" class="first_name_field" name="first_name">
              </div>
              <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-3 mt-md-0">
                <label class="montserrat font-20 text-white d-block fw-regular mb-2">Apellido:</label>
                <input type="text" placeholder="Apellido" class="first_name_field" name="last_name">
              </div>
              <span class="step_4_error error d-none">Por favor complete este campo</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_4_next">Próxima pregunta >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_3','.step_4');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Paso 3/5</p>
              </div>
            </div>
          </div>

          <!-- step 5 -->
          <div class="col-12 col-sm-12 col-md-10 step_5_title d-none">
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">¿En qué ciudad nació?
            </p>
          </div>
          <div class="gtm-screen-city col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_5 d-none">
            <div class="row justify-content-start">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8">
                <!-- <label class="montserrat font-18 text-white d-block fw-regular">¿En qué ciudad nació?</label> -->
                <input type="text" placeholder="Por favor ingrese su ciudad" name="city" class="first_name_field">
              </div>
              <span class="error step_5_error d-none">Por favor complete este campo</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_5_next">Próxima pregunta >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_4','.step_5');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Paso 4/5</p>
              </div>
            </div>
          </div>

          <!-- step 6 -->
          <div class="col-12 col-sm-12 col-md-10 step_6_title gtm-screen-email d-none">
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">¿Dónde quiere recibir su videncia personalizada?</p>
          </div>
          <div class="gtm-screen-email col-12 col-sm-12 col-md-10 col-xl-10 pt-3 gtm-screen-email step_6 d-none">
            <div class="row justify-content-start">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8">
                <!-- <label class="montserrat font-18 text-white d-block fw-regular mb-2">Email</label> -->
                <input type="email" placeholder="Email" name="email" class="gtm-email first_name_field" required>
              </div>
              <span class="step_6_error error d-none">Por favor complete este campo</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="submit" class="continue_btn font-16 text-white text-uppercase montserrat step_6_next" id="get_clarification">Recibir mi videncia >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="gtm-email-continue font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_5','.step_6');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Paso 5/5</p>
              </div>
            </div>
          </div>

          <!-- pendding step -->
          <div class="col-12 col-sm-12 col-md-10 step_6_title gtm-screen-pending_title d-none">
          </div>
          <div class="col-12 col-sm-12 col-md-10 col-xl-10 pt-3 gtm-screen-pending d-none">
            <div class="row justify-content-start">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8 text-white">
                  @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')
              </div>
            </div>
          </div>

          <!-- final step -->
          <style>
              .gtm-screen-thankyou li:before {
                  background-color: white;
                  top: 8px !important;
              }
              .gtm-screen-thankyou ul{
                  margin-left: 15px;
                  list-style-type: none;
                  padding-left: 0rem;
              }
              .gtm-screen-thankyou p{
                  margin-left: 6px;
              }
              .gtm-screen-thankyou h3{
                  color: #fff !important;
              }
          </style>
          <div class="col-12 col-sm-12 col-md-10 gtm-screen-thankyou text-center d-none">
            @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
          </div>

        </div>
      </div>
    </section>
  </div>
  <!-- steps end -->

  <!-- our testimonials start -->
  <section class="our_testimonial py-200">
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide testimonial_slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active col-10">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-6">
                    <div class="testimonial_content text-center text-md-start">
                      <img src="{{$asset_path}}assets/images/quote-image.png" class="mb-4">
                      <div class="fix_testimonial_image">
                        <img src="{{$asset_path}}assets/images/testi-woman-1.jpg" class="">
                      </div>
                      <p class="text-646464 font-20 montserrat mt-4">Conocía estos principios pero no los puse ponerlos en practica porque no sabia donde...</p>
                      <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Fanny</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                    <div class="testimonial_content text-center text-md-start">
                      <img src="{{$asset_path}}assets/images/quote-image.png" class="mb-4">
                      <div class="fix_testimonial_image">
                        <img src="{{$asset_path}}assets/images/testi-man-1.jpg" class="">
                      </div>
                      <p class="text-646464 font-18 montserrat mt-4">He estado escuchando la pista todas las noches antes. acostarse durante los últimos 10 días. Mis pesadillas tienen...</p>
                      <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">George</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-6">
                    <div class="testimonial_content text-center text-md-start">
                      <img src="{{$asset_path}}assets/images/quote-image.png" class="mb-4">
                      <div class="fix_testimonial_image">
                        <img src="{{$asset_path}}assets/images/testi-woman-2.jpg" class="">
                      </div>
                      <p class="text-646464 font-18 montserrat mt-4">Muy buena guia. Bien detallado. Fácil de poner practica una vez que hayas desechado todas tus dudas.</p>
                      <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Amy</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                    <div class="testimonial_content text-center text-md-start">
                      <img src="{{$asset_path}}assets/images/quote-image.png" class="mb-4">
                      <div class="fix_testimonial_image">
                        <img src="{{$asset_path}}assets/images/testi-man-2.jpg">
                      </div>
                      <p class="text-646464 font-18 montserrat mt-4">Esta guía realmente cumplió con mis expectativas. Gracias Jennifer por ofreciéndolo en línea.</p>
                      <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Sam B.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previa</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próxima</span>
        </button>
      </div>
    </div>
  </section>

  <section class="our_testimonial py-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h2 class="font-40 montserrat fw-bold text-center text-061629 pb-3">
                <?= print_dynamic_variable('disclaimer_title_es') ?></h2>
        </div>
        <div class="col-12 text-center mt-auto">
            <p class=" text-565149 text-center montserrat font16">
                <?= print_dynamic_variable('disclaimer_text_es') ?>
                <?= print_dynamic_variable('address') ?>
            </p>
        </div>
      </div>
    </div>
  </section>
</form>
  <!-- our testimonials end -->

  <!-- footer start -->
  <footer class="footer py-3">
    <div class="container">
      <ul class="text-center list-inline list-unstyled mb-0">
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="text-black montserrat fw-regular font-16 text-decoration-none privacy_modal">PRIVACIDAD POLÍTICA</a>
        </li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="text-black montserrat fw-regular font-16 text-decoration-none terms_modal">TÉRMINOS Y CONDICIONES DE ASTROVEO</a></li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="text-black montserrat fw-regular font-16 text-decoration-none gdpr_modal">GDPR</a></li>
        <li class="list-inline-item"><a href="https://moon-pion.com/contact.php?lang=MX"
            class="text-black montserrat fw-regular font-16 text-decoration-none contact_modal text-uppercase">Contacto</a></li>
      </ul>
    </div>
  </footer>
  <!-- footer end -->

  <!-- Pivacy Modals -->
  @include('/landers/terms/moon-pion/es/privacy')

  <!-- Terms Modals -->
  @include('/landers/terms/moon-pion/es/terms')

  <!-- GDPR Modals -->
  @include('/landers/terms/moon-pion/es/gdpr')

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{$asset_path}}assets/js/custom.js"></script>
  <script src="{{$asset_path}}assets/js/slick.js"></script>
  <script src="{{$asset_path}}assets/js/functions.js"></script>

</body>

</html>
