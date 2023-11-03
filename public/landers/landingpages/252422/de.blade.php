@php($asset_path = '/landers/landingpages/252422/')
@php($srcImg = "/landers/sets/set28/")
@include('/landers/terms/dynamic/dynamic')

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="{{$asset_path}}assets/images_2/favicon.png">

  <meta property="og:title" content="Astrology Prism" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="Astrology Prism" />
  <meta property="og:image" content="Astrology Prism" />
  <meta property="og:image:width" content="37" />
  <meta property="og:image:height" content="37" />
  <meta property="og:site_name" content="Astrology Prism" />
  <meta property="og:description"
    content="Astrology Prism" />
  <meta name="author" content="Astrology Prism">
  <meta name="keywords" content="Astrology Prism">
  <meta name="title" content="Astrology Prism">
  <meta name="description" content="Astrology Prism">

  <!-- all CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
{{--    <script src="https://api.pushnami.com/scripts/v1/push/628c76e624a10a0014231eba"></script>--}}
{{--    <link rel="manifest" href="{{ $asset_path }}manifest.json">--}}
  <link href="{{$asset_path}}assets/css/de_bootstrap.min.css" rel="stylesheet">
  <link href="{{$asset_path}}assets/css/de_styles.css" rel="stylesheet">

  <style>
    .error{color: red;}
    .modal-title{
        font-size: 30px;
        font-weight: 700;
        color: #fff;
    }
    .modal-header{
      background: #173357;
      padding: 15px 10px;
    }
  </style>
  <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
  <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>
    @if($gtmContainerId)
        @include('google.gtmcontainer')
    @endif
    <script> (function(document, window) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://trk-keingent.com/scripts/push/script/57dkplvgw8?url=" + encodeURI(self.location.hostname) + "&alturl=" + encodeURI(self.location.pathname);
            script.onload = function() {
                push_init();
                push_subscribe();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window); </script>
  <title>Astrology Prism | Astrology</title>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <div class="main_bg">
    <!-- header start -->
    <header class="header py-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-4 col-md-12 my-auto">
            <div class="head_person_image mx-auto d-table">
              <img src="{{$asset_path}}assets/images_2/agatha.png">
            </div>
          </div>
          <div class="col-8 col-md-10 col-lg-5 mt-4">
            <div class="head_person_name text-end text-md-center">
              <h1 class="montserrat font-40 text-uppercase fw-bold text-white">Agatha</h1>
              <p class="montserrat font-20 text-white">Beleuchten Sie Ihr Leben!</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
    <!-- steps start -->
    <section class="main_banner">
      <div class="container">
        <form name="g" id="nameForm" class="row justify-content-center mx-0 w-100 main_form" method="post" action="{{request()->url()}}/insertlead">
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
          <div class="col-12 col-sm-12 col-md-10 step_1_title">
            <p class="font-18 text-white montserrat fw-regular text-center text-md-center">Geld … Glück … Glück …</p>
            <h2 class="font-40 montserrat title_border fw-bold text-white text-center text-md-center">Was hält 2023 für Sie bereit?</h2>
              <p class="montserrat font-24 text-white fw-regular text-center text-md-center mt-1 mt-xxl-3">Wähle dein Sternzeichen</p>
          </div>
          <div class="col-12 col-sm-12 col-md-10 px-0 px-md-3 pt-3 step_1">
            <div class="row mx-0 w-100">
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}aries-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Widder</span><br>
                  <input type="radio" name="astofysica" value="aries">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}libra-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Waage</span><br>
                  <input type="radio" name="astofysica" value="libra">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}leo-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Löwe</span><br>
                  <input type="radio" name="astofysica" value="leo">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}pisces-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Fische</span><br>
                  <input type="radio" name="astofysica" value="pisces">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}gemini-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Zwillinge</span><br>
                  <input type="radio" name="astofysica" value="gemini">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}scorpio-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Skorpion</span><br>
                  <input type="radio" name="astofysica" value="scorpio">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}sagittarius-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Schütze</span><br>
                  <input type="radio" name="astofysica" value="sagittarius">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}virgo-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Jungfrau</span><br>
                  <input type="radio" name="astofysica" value="virgo">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}taurus-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Stier</span><br>
                  <input type="radio" name="astofysica" value="taurus">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}capricorn-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Steinbock</span><br>
                  <input type="radio" name="astofysica" value="capricorn">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}cancer-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Krebs</span><br>
                  <input type="radio" name="astofysica" value="cancer">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}aquarius-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Wassermann</span><br>
                  <input type="radio" name="astofysica" value="aquarius">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>

          <!-- step 2 -->
          <div class="col-12 col-sm-12 col-md-10  step_2_title d-none">
            <p class="font-18 text-white montserrat fw-regular text-center">Geld … Glück … Glück …</p>
            <h2 class="font-40 montserrat title_border fw-bold text-white text-center">What does 2023 hold
              for you?</h2>
              <!-- <h2 class="font-40 montserrat fw-bold text-white text-center">Also! Wann wurdest du geboren?</h2> -->
            <p class="montserrat font-24 text-white fw-regular text-center mt-3 mt-xxl-5">Also! Wann wurdest du geboren?:</p>
          </div>
          <div class="col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_2 d-none">
            <div class="row">
              <div class="col-4 col-md-4 col-lg-4">
                <select class="form-select montserrat font-18 select_box_field text-black day"
                  aria-label="Default select example" name="day">
                  <option value="" selected>Tag</option>
                  @for ($i = 1; $i < 32; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
              </div>
              <div class="col-4 col-md-4 col-lg-4">
                <select class="form-select montserrat font-18 select_box_field text-black month"
                  aria-label="Default select example" name="month">
                  <option value="" selected>Monat</option>
                <option value="01">Januar</option>
                <option value="02">Februar</option>
                <option value="03">März</option>
                <option value="04">April</option>
                <option value="05">Mai</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Dezember</option>
                </select>
              </div>
              <div class="col-4 col-md-4 col-lg-4">
                <select class="form-select montserrat font-18 select_box_field text-black year"
                  aria-label="Default select example" name="year">
                  <option selected>Jahr</option>
                    @for ($i = 2004; $i > 1906; $i--)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
              </div>
              <span class="step_2_error error d-none">Bitte geben Sie das vollständige Datum an</span>
              <div class="col-12 text-center mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_2_next">Fortsetzen</button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_1','.step_2');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Schritt 1/5</p>
              </div>
            </div>
          </div>

          <!-- step 3 -->
          <div class="col-12 col-sm-12 col-md-10 col-xl-9 step_3_title d-none">
            <p class="font-18 text-white montserrat fw-regular text-center text-md-center">Geld … Glück … Glück …</p>
            <h2 class="font-40 montserrat fw-bold title_border text-white text-center text-md-center">Was hält 2023 für Sie bereit?</h2>
            <!-- <h2 class="font-40 montserrat fw-bold text-white text-center">Welches Geschlecht bist du?</h2> -->
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-center mt-5">Was ist dein Geschlecht?</p>
          </div>
          <div class="col-12 col-sm-12 col-md-10 col-xl-9 pt-3 step_3 d-none">
            <div class="row justify-content-center">
              <div class="col-6 col-md-6 col-lg-3">
                <label class="gender_options">
                  <!-- <img src="{{$asset_path}}assets/images_2/sign-1.png" class="position-relative z-index-1 w-100"> -->
                  <span class=" position-relative text-black z-index-1 montserrat">Männlich</span>
                  <input type="radio" name="gender" value="male">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-6 col-md-6 col-lg-3">
                <label class="gender_options">
                  <!-- <img src="{{$asset_path}}assets/images_2/sign-1.png" class="position-relative z-index-1 w-100"> -->
                  <span class=" position-relative z-index-1 color-061629 montserrat">Weiblich</span>
                  <input type="radio" name="gender" value="female">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-12 text-center mt-2">
                <span class="error step_3_error d-none">Bitte füllen Sie dieses Feld aus</span>
              </div>
              <div class="col-12 text-center mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_3_next">Fortsetzen</button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_2','.step_3');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Schritt 2/5</p>
              </div>
            </div>
          </div>

          <!-- step 4 -->
          <div class="col-12 col-sm-12 col-md-10 step_4_title d-none">
            <p class="font-18 text-white montserrat fw-regular text-center text-md-center">Geld … Glück … Glück …</p>
            <h2 class="font-40 montserrat title_border fw-bold text-white text-center text-md-center">What does 2022
              hold for you?</h2>
            <!-- <h2 class="font-40 montserrat fw-bold text-white text-center">Wie Heissen Sie?</h2> -->
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-center mt-5">Wie heißen Sie?</p>
          </div>
          <div class="col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_4 d-none">
            <div class="row justify-content-center">
              <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <label class="montserrat font-20 text-white text-center d-block fw-regular mb-2">Vorname</label>
                <input type="text" placeholder="Bitte Vornamen eingeben" class="first_name_field" name="firstname">
              </div>
              <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <label class="montserrat font-20 text-white text-center d-block fw-regular mb-2">Nachnamen</label>
                <input type="text" placeholder="Nachnamen eingeben" class="first_name_field" name="lastname">
              </div>
              <span class="step_4_error error d-none">Bitte füllen Sie dieses Feld aus</span>
              <div class="col-12 text-center mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_4_next">Fortsetzen</button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back('.step_3','.step_4');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Schritt 3/5</p>
              </div>
            </div>
          </div>

          <!-- step 5 -->
          <div class="col-12 col-sm-12 col-md-10 step_5_title d-none">
            <p class="font-18 text-white montserrat fw-regular text-center text-md-center">Geld … Glück … Glück …</p>
            <h2 class="font-40 montserrat fw-bold text-white text-center text-md-center">Was hält 2023 für Sie bereit?
            </h2>
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-center mt-5">In welcher Stadt bist du geboren?</p>
          </div>
          <div class="col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_5 d-none">
            <div class="row justify-content-center">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8">
                <input type="text" placeholder="Bitte geben Sie Ihre Stadt ein" name="city" class="first_name_field">
                <span class="error step_5_error d-none">Bitte füllen Sie dieses Feld aus</span>
              </div>
              <div class="col-12 text-center mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_5_next">Continue</button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_4','.step_5');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Schritt 4/5</p>
              </div>
            </div>
          </div>

          <!-- step 6 -->
          <div class="col-12 col-sm-12 col-md-10 step_6_title gtm-screen-email d-none">
            <p class="font-18 text-white montserrat fw-regular text-center text-md-center">Geld … Glück … Glück …</p>
            <h2 class="font-40 montserrat fw-bold text-white text-center text-md-center">Was hält 2023 für Sie bereit?
            </h2>
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-center mt-5">Wo möchten Sie Ihre persönliche Hellsichtigkeit erhalten?</p>
          </div>
          <div class="col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_6 gtm-screen-email d-none">
            <div class="row justify-content-center">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8">
                <input type="text" placeholder="Email" class="first_name_field" name="email" required>
              </div>

              <div class="col-12 text-center mt-5">
                <button type="submit" class="continue_btn font-16 text-white text-uppercase montserrat step_6_next" id="get_clarification">Holen Sie sich kostenlos mein persönliches Horoskop für 2022</button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_5','.step_6');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Schritt 5/5</p>
              </div>
            </div>
          </div>

          <!-- pendding step -->
          <div class="col-12 col-sm-12 col-md-10 step_6_title gtm-screen-pending_title d-none">
          </div>
          <div class="col-12 col-sm-12 col-md-10 col-xl-10 pt-3 gtm-screen-pending d-none">
            <div class="row justify-content-center">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8 text-center">
                  <h3 class="step_8__title text-center text-white">
                    Bitte warte einen Moment, während ich dich mit deinem <br />ángel guardián...
                </h3>
                <p class="text-white">
                    <br/>
                    Ihr treuer Freund,
                    <br/>
                    <br/>
                    Agatha
                    <br/>
                    <br/>
                </p>
                <p class="step_8__white-box text-white">
                    P.S. Um sicherzustellen, dass Ihr Vertrauen in mich verdient ist, möchte ich, dass Sie wissen, dass ich die Datenschutzbestimmungen und den Zugang zu Ihren personenbezogenen Daten einhalte. Alles hier in meiner Datenschutzerklärung.
                </p>
              </div>
            </div>
          </div>

          <!-- final step -->
          <style>
              .gtm-screen-thankyou li:before {
                  background-color: white;
                  top: 6px;
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
          <div class="col-12 col-sm-12 col-md-10 gtm-screen-thankyou d-none">
            @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
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
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="fix_testimonial_image">
                          <img src="{{$asset_path}}assets/images_2/testi-woman-1.jpg" class="">
                        </div>
                        <div class="me-4">
                          <img src="{{$asset_path}}assets/images_2/quote-image.png" class="mb-4">
                        </div>
                      </div>
                      <p class="text-646464 font-20 montserrat mt-4">Ich wusste von diesen Prinzipien, aber ich habe sie nicht formuliert sie in die Praxis umzusetzen, weil ich nicht wusste, wohin mit...</p>
                      <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Fanny</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                    <div class="testimonial_content text-center text-md-start">
                      <div class="d-flex justify-content-between align-items-center">

                        <div class="fix_testimonial_image">
                          <img src="{{$asset_path}}assets/images_2/testi-man-1.jpg" class="">
                        </div>
                        <div class="me-4">
                          <img src="{{$asset_path}}assets/images_2/quote-image.png" class="mb-4">
                        </div>
                      </div>


                      <p class="text-646464 font-18 montserrat mt-4">Ich habe mir den Track bisher jeden Abend angehört in den letzten 10 Tagen ins Bett gegangen. Meine Alpträume haben...</p>
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
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="fix_testimonial_image">
                          <img src="{{$asset_path}}assets/images_2/testi-woman-2.jpg" class="">
                        </div>
                        <div class="">
                          <img src="{{$asset_path}}assets/images_2/quote-image.png" class="mb-4">
                        </div>

                      </div>


                      <p class="text-646464 font-18 montserrat mt-4">Sehr gute Anleitung. Gut detailliert. Einfach einzulegen üben, sobald Sie alle Ihre Zweifel ausgeräumt haben.</p>
                      <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Amy</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                    <div class="testimonial_content text-center text-md-start">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="fix_testimonial_image">
                          <img src="{{$asset_path}}assets/images_2/testi-man-2.jpg">
                        </div>
                        <div class="">
                          <img src="{{$asset_path}}assets/images_2/quote-image.png" class="mb-4">
                        </div>
                      </div>
                      <p class="text-646464 font-18 montserrat mt-4">Diese Anleitung hat meine Erwartungen wirklich erfüllt. Vielen Dank Agatha für online anbieten.</p>
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
          <span class="visually-hidden">Vorherige</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Nächste</span>
        </button>
      </div>
    </form>
    </div>
  </section>
  <!-- our testimonials end -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="font-22 montserrat fw-bold text-center text-646464 pb-2"><?= print_dynamic_variable('disclaimer_title_de') ?></h2>
            <p class="font20 text-646464 font-18 montserrat text-center">
            <?= print_dynamic_variable('disclaimer_text_de') ?> <?= print_dynamic_variable('address') ?><br><br>
        </div>
    </div>
</div>

  <!-- footer start -->
  <footer class="footer py-3">
    <div class="container">
      <ul class="text-center list-inline list-unstyled mb-0">
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="text-black montserrat fw-regular font-16 text-decoration-none privacy_modal text-uppercase">DATENSCHUTZRICHTLINIE<span
              class="ps-4">|</span></a>
        </li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="text-black montserrat fw-regular font-16 text-decoration-none terms_modal text-uppercase"> Geschäftsbedingungen<span
              class="ps-4">|</span></a></li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="text-black montserrat fw-regular font-16 text-decoration-none ethical_modal text-uppercase">  ETHISCHE REGELN<span
              class="ps-4">|</span></a></li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="text-black montserrat fw-regular font-16 text-decoration-none gdpr_pp_open text-uppercase">  GDPR<span
              class="ps-4">|</span></a></li>
        <li class="list-inline-item"><a href="#"
            class="text-black montserrat fw-regular font-16 text-decoration-none cookie_modal text-uppercase"> COOKIE-RICHTLINIE</a></li>
      </ul>
    </div>
  </footer>
  <!-- footer end -->
    
  <!-- Pivacy Modals -->
  <div class="modal fade privacy-1" tabindex="-1" id="privacy_policy">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0">
        <div class="modal-header">
          <h5 class="modal-title">DATENSCHUTZRICHTLINIE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
            @include('landers.terms.astrology-prism.de.privacy')
        </div>
      </div>
    </div>
  </div>
  <!-- Pivacy Modals -->
  <div class="modal fade privacy-2" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0">
        <div class="modal-header">
          <h5 class="modal-title">DATENSCHUTZRICHTLINIE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
            @include('landers.terms.astrology-prism.de.privacy-2')
        </div>
      </div>
    </div>
  </div>

  <!-- Terms Modals -->
  <div class="modal fade term_popup" tabindex="-1" id="terms">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0">
        <div class="modal-header">
          <h5 class="modal-title text-uppercase">Geschäftsbedingungen</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
          <div class="modal-body">
            <p class="roboto regular font-18 color-787878 lh-32">
              @include('landers.terms.astrology-prism.de.terms')
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- GDPR Modals -->
  <div class="modal fade term_popup" tabindex="-1" id="gdpr">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0">
        <div class="modal-header">
          <h5 class="modal-title">GDPR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
          <div class="modal-body">
            @include('landers.terms.astrology-prism.de.gdpr')
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ehical Modals -->
  <div class="modal fade" tabindex="-1" id="ethical_modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0">
        <div class="modal-header">
          <h5 class="modal-title">ETHISCHE REGELN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
           @include('landers.terms.astrology-prism.de.ethical')
      </div>
    </div>
  </div>
</div>

  <!-- Cookie Modals -->
  <div class="modal fade" tabindex="-1" id="cookie_modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0">
        <div class="modal-header">
          <h5 class="modal-title"> COOKIE-RICHTLINIE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
           @include('landers.terms.astrology-prism.de.cookie-policy')
      </div>
    </div>
  </div>
</div>


  <!-- Optional JavaScript; choose one of the two! -->
  <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{$asset_path}}assets/js/custom.js"></script>
  <script src="{{$asset_path}}assets/js/slick.js"></script>
  <script src="{{$asset_path}}assets/js/functions.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $(".privacy_modal").click(function() {
            $('#privacy_policy').modal('show');
        });
        $(".terms_modal").click(function() {
            $('#terms').modal('show');
        });
        $(".user_terms_modal").click(function() {
            $('#user_terms').modal('show');
        });
        $(".gdpr_pp_open").click(function() {
          $('#gdpr').modal('show');
        });

        $('.ethical_modal').on('click',function(){
              $('#ethical_modal').modal('show');
         });
         $('.cookie_modal').on('click',function(){
              $('#cookie_modal').modal('show');
         });
    });
  </script>

</body>

</html>
