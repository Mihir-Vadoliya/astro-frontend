@php($asset_path = '/landers/landingpages/252448/')
@php($srcImg = "/landers/sets/set26/")
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
          <div class="col-9 col-md-10 col-lg-10 my-auto">
            <p class="font-18 text-white montserrat fw-regular text-center text-md-center">Money... Luck... Happiness...</p>
            <h2 class="font-40 montserrat fw-bold text-white text-center text-md-center">What does 2023 hold for you?</h2>
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
            <p class="montserrat font-24 text-white fw-regular text-center text-md-start mt-3 mt-xxl-5">SELECT YOUR ZODIAC SIGN</p>
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
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Pisces</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="pisces" value="pisces">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}gemini-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Gemini</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="gemini" value="gemini">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}scorpio-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Scorpio</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="scorpio" value="scorpio">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}sagittarius-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Sagittarius</span><br>
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
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Taurus</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="taurus" value="taurus">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}capricorn-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Capricorn</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="capricorn" value="capricorn">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}cancer-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Cancer</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="cancer" value="cancer">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                <label class="choose_your_sign">
                  <img src="{{$srcImg}}aquarius-icon.png" class="position-relative z-index-1 w-100">
                  <span class=" position-relative z-index-1 text-uppercase montserrat">Aquarius</span><br>
                  <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="aquarius" value="aquarius">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>

          <!-- step 2 -->
          <div class="col-12 col-sm-12 col-md-10  step_2_title d-none">
            <p class="montserrat font-24 text-white fw-regular text-center text-md-start mt-3 mt-xxl-5">When were you born?</p>
          </div>
          <div class="gtm-screen-birthdate col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_2 d-none">
            <div class="row">
              <div class="col-4 col-md-4 col-lg-4">
                <select class="form-select montserrat font-18 select_box_field text-black day"
                  aria-label="Default select example" name="day">
                  <option value="" selected>Day</option>
                  @for ($i = 1; $i < 32; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                  @endfor

                </select>
              </div>
              <div class="col-4 col-md-4 col-lg-4">
                <select class="form-select montserrat font-18 select_box_field text-black month"
                  aria-label="Default select example" name="month">
                  <option value="" selected>Month</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
              </div>
              <div class="col-4 col-md-4 col-lg-4">
              <select class="form-select montserrat font-18 select_box_field text-black year"
                  aria-label="Default select example" name="year">
                  <option value="" selected>Year</option>
                  @for ($i = 2004; $i > 1906; $i--)
                      <option value="{{$i}}">{{$i}}</option>
                  @endfor
                </select>
              </div>
                <span class="step_2_error error d-none">Enter the complete date</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_2_next">Next question >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="gtm-birthdate-continue font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_1','.step_2');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Step 1/5</p>
              </div>
            </div>
          </div>

          <!-- step 3 -->
          <div class="col-12 col-sm-12 col-md-8 col-xl-8 pt-3 step_3_title d-none">
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">What is your gender?
            </p>
          </div>
          <div class="gtm-screen-gender col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_3 d-none">
            <div class="row justify-content-start">
              <div class="col-6 col-md-6 col-lg-3">
                <label class="gender_options">
                  <!-- <img src="{{$asset_path}}assets/images/sign-1.png" class="position-relative z-index-1 w-100"> -->
                  <span class=" position-relative text-black z-index-1 montserrat">Male</span>
                  <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" value="male">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-6 col-md-6 col-lg-3">
                <label class="gender_options">
                  <!-- <img src="{{$asset_path}}assets/images/sign-1.png" class="position-relative z-index-1 w-100"> -->
                  <span class="position-relative z-index-1 color-061629 montserrat">Women</span>
                  <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="female">
                  <span class="checkmark"></span>
                </label>
              </div>
              <span class="error step_3_error d-none">Please complete this field</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_3_next">Next question >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_2','.step_3');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Step 2/5</p>
              </div>
            </div>
          </div>

          <!-- step 4 -->
          <div class="col-12 col-sm-12 col-md-10 step_4_title d-none">
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">What is your name?
            </p>
          </div>
          <div class="gtm-screen-name col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_4 d-none">
            <div class="row justify-content-start">
              <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <label class="montserrat font-20 text-white d-block fw-regular mb-2">First Name:</label>
                <input type="text" placeholder="First Name" class="first_name_field" name="first_name">
              </div>
              <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-3 mt-md-0">
                <label class="montserrat font-20 text-white d-block fw-regular mb-2">Last Name:</label>
                <input type="text" placeholder="Last Name" class="first_name_field" name="last_name">
              </div>
              <span class="step_4_error error d-none">Please complete this field</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_4_next">Next question >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_3','.step_4');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Step 3/5</p>
              </div>
            </div>
          </div>

          <!-- step 5 -->
          <div class="col-12 col-sm-12 col-md-10 step_5_title d-none">
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">In which city were you born?
            </p>
          </div>
          <div class="gtm-screen-city col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_5 d-none">
            <div class="row justify-content-start">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8">
                <!-- <label class="montserrat font-18 text-white d-block fw-regular">¿En qué ciudad nació?</label> -->
                <input type="text" placeholder="Please enter your city" name="city" class="first_name_field">
              </div>
              <span class="error step_5_error d-none">Please complete this field</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_5_next">Next question >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_4','.step_5');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Step 4/5</p>
              </div>
            </div>
          </div>

          <!-- step 6 -->
          <div class="col-12 col-sm-12 col-md-10 step_6_title gtm-screen-email d-none">
            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">Where would you like to receive your personalized clairvoyance?</p>
          </div>
          <div class="gtm-screen-email col-12 col-sm-12 col-md-10 col-xl-10 pt-3 gtm-screen-email step_6 d-none">
            <div class="row justify-content-start">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8">
                <!-- <label class="montserrat font-18 text-white d-block fw-regular mb-2">Email</label> -->
                <input type="email" placeholder="Email" name="email" class="gtm-email first_name_field" required>
              </div>
              <span class="step_6_error error d-none">Please complete this field</span>
              <div class="col-12 text-center text-md-start mt-5">
                <button type="submit" class="continue_btn font-16 text-white text-uppercase montserrat step_6_next" id="get_clarification">Receive my clairvoyance >></button>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="gtm-email-continue font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                    onclick="back_step('.step_5','.step_6');"></i>
                </p>
              </div>
              <div class="col-6 pt-5 mt-3">
                <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">Step 5/5</p>
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
          <div class="col-12 col-sm-12 col-md-12 gtm-screen-thankyou text-start d-none">
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
                      <p class="text-646464 font-20 montserrat mt-4">I knew these principles but I did not put them into practice because I did not know where to...</p>
                      <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Fanny</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                    <div class="testimonial_content text-center text-md-start">
                      <img src="{{$asset_path}}assets/images/quote-image.png" class="mb-4">
                      <div class="fix_testimonial_image">
                        <img src="{{$asset_path}}assets/images/testi-man-1.jpg" class="">
                      </div>
                      <p class="text-646464 font-18 montserrat mt-4">I have been listening to the track every night before. bed for the last 10 days. My nightmares have...</p>
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
                      <p class="text-646464 font-18 montserrat mt-4">Very good guide. Well detailed. Easy to put into practice once you've cleared all your doubts.</p>
                      <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Amy</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6">
                    <div class="testimonial_content text-center text-md-start">
                      <img src="{{$asset_path}}assets/images/quote-image.png" class="mb-4">
                      <div class="fix_testimonial_image">
                        <img src="{{$asset_path}}assets/images/testi-man-2.jpg">
                      </div>
                      <p class="text-646464 font-18 montserrat mt-4">This guide really met my expectations. Thank you Jennifer for offering it online.</p>
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
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <section class="our_testimonial py-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h2 class="font-40 montserrat fw-bold text-center text-061629 pb-3">
                DISCLAIMER</h2>
        </div>
        <div class="col-12 text-center mt-auto">
            <p class=" text-565149 text-center montserrat font16">
                RESPONSIBILITY: THE INFORMATION PROVIDED SHOULD NOT BE CONSIDERED AS ADVICE ON PSYCHOLOGICAL, MEDICAL, ECONOMIC-FINANCIAL, REAL ESTATE, LEGAL OR OTHER MATTERS AND UNDER NO CIRCUMSTANCES SHOULD IT BE USED AS A BASIS FOR DECISION MAKING, BUT ONLY FOR ENTERTAINMENT PURPOSES, WHETHER FREE OR PAID.
            </p>
            <p class=" text-565149 text-center montserrat font16">
                TESTIMONIOS, RESEÑAS Y APROBACIONES SON OPINIONES INDIVIDUALES GRATUITAS QUE NO IMPLICAN RESULTADOS SIMILARES PARA TODOS. POR FAVOR LEA LOS TÉRMINOS DE CONDICIONES.<br><br> @include('/landers/terms/dynamic/dynamic') {{ print_dynamic_variable('address') }}
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
            class="text-black montserrat fw-regular font-16 text-decoration-none privacy_modal">Privacy Policy</a>
        </li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="text-black montserrat fw-regular font-16 text-decoration-none terms_modal">Terms of Service</a></li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="text-black montserrat fw-regular font-16 text-decoration-none gdpr_modal">GDPR</a></li>
        <li class="list-inline-item"><a href="https://moon-pion.com/contact.php?lang=MX"
            class="text-black montserrat fw-regular font-16 text-decoration-none contact_modal">Contact</a></li>
      </ul>
    </div>
  </footer>
  <!-- footer end -->

  <!-- Pivacy Modals -->
  <div class="modal fade" tabindex="-1" id="privacy_policy">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Privacy Policy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">We respect your privacy and are committed to protecting it through our compliance with this Privacy Policy ("Policy"). This Policy describes the types of information we may collect from you or that you may provide ("Personal Information") on the moon-pion.com website ("Website" or "Service") and any of its related products and services ("Services"), and our practices for collecting, using, maintaining, protecting and disclosing that Personal Information. It also describes the choices available to you regarding our use of your Personal Information and how you can access and update it.</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">This policy is a legally binding agreement between you ("User", "you" or "your") and moon-pion is a registered trademark of Astroveo B.V. ("moon-pion is a registered trademark of Astroveo B.V.", "we", "us", "us" or "our"). If you are entering into this agreement on behalf of a company or other legal entity, you represent that you have the authority to bind such entity to this agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree to the terms of this agreement, you must not accept this agreement and may not access or use the website and services. By accessing and using the Website and Services, you acknowledge that you have read, understand and agree to be bound by the terms of this Policy. This Policy does not apply to the practices of companies we do not own or control, or to persons we do not employ or manage.</p>
          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Automatic collection of information</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">When you access the Website, our servers automatically record information sent by your browser. This data may include information such as the IP address of your device, the type and version of your browser, the type and version of your operating system, language preferences or the web page you visited before accessing the Website and Services, the pages of the Website and Services you visit, the time you spend on those pages, the information you search for on the Website, the times and dates of access, and other statistics.<br><br>
              Automatically collected information is only used to identify potential abuse and to compile statistical information about the use and traffic of the website and services. This statistical information is not otherwise aggregated to identify any particular User of the system.</p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Collection of personal information</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              You can access and use the website and services without telling us who you are or providing any information that would allow anyone to identify you as a specific, identifiable individual. However, if you wish to take advantage of some of the features offered on the website, you may be asked to provide certain personal information (e.g., your name and email address).<br><br>
              We receive and store any information you knowingly provide to us when you make a purchase or complete forms on the website. This information may include, if necessary:

               - Contact information (such as e-mail address, telephone number, etc.)
               - Basic personal information (such as name, country of residence, etc.)
               - Geolocation data of your device (such as latitude and longitude)<br><br>

              You may choose not to provide us with your personal information, but you may not be able to use some features of the website. Users who are unsure what information is required may contact us.
          </p>
          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Children's privacy</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">We do not knowingly collect personal information from children under the age of 18. If you are under 18, please do not provide Personal Information through the Website and Services. If you have reason to believe that a child under the age of 18 has provided us with Personal Information through the Website and Services, please contact us to request that we remove that child's Personal Information from our Services.<br><br>
              We encourage parents and legal guardians to monitor their children's Internet use and help enforce this Policy by instructing their children never to provide personal information through the website and services without their consent. We also request that all parents and legal guardians who supervise the care of children take the necessary precautions to ensure that their children are instructed never to provide personal information when online without their consent.                        </p>
          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Use and processing of collected information                        </p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">We act as data controller and data processor within the meaning of the GDPR when handling Personal Data, unless we have a data processing agreement with you, in which case you are the data controller and we are the data processor.<br><br>
              Our role may also differ depending on the specific situation involving Personal Information. We act as a data controller when we ask you to submit Personal Data necessary to ensure your access to and use of the Website and Services. In such cases, we are a data controller because we determine the purposes and means of the processing of Personal Data and comply with the obligations of data controllers as set out in the GDPR.                            <br><br>
              We act as a data processor in situations where you provide Personal Data through the Website and Services. We do not own, control or make any decisions about the Personal Data submitted, and such Personal Data will only be processed in accordance with your instructions. In such cases, the User providing Personal Data acts as a data controller within the meaning of the GDPR.<br><br>
              In order to make the website and services available to you, or to comply with a legal obligation, we may need to collect and use certain personal information. If you do not provide the information we request, we may not be able to provide you with the requested products or services. Any information we collect from you may be used for the following purposes:<br><br>
              - Fulfill and manage orders.
               - Offer products or services.
               - Sending administrative information
               - Answering questions and providing support.
               - Improve user experience
               - Post customer testimonials.
               - Manage and operate the website and services.<br><br>
              The processing of your Personal Data will depend on how you interact with the Website and the Services, where in the world you are located and whether any of the following apply: (i) you have given your consent for one or more specific purposes; however, this does not apply where the processing of Personal Data is subject to the California Consumer Privacy Act or European data protection law; (ii) the provision of information is necessary for the performance of an agreement with you and/or for any pre-contractual obligations thereunder; (iii) the processing is necessary for compliance with a legal obligation to which you are subject; (iv) the processing is in connection with a task carried out in the public interest or in the exercise of official authority vested in us; (v) the processing is necessary for the purposes of legitimate interests pursued by us or a third party.<br><br>
              We rely on the following legal bases, as defined in the GDPR, on which we collect and process your Personal Data:
          </p>
          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">- User consent</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">Please note that, under some laws, we are permitted to process information until you object to such processing by opting out, without having to rely on consent or any other prior legal basis. In any event, we will be happy to explain to you what specific legal basis applies to the processing and, in particular, whether the provision of Personal Data is a legal or contractual requirement, or a necessary requirement to enter into a contract.

          </p>
          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Processing payment                        </p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">For Services that require payment, you may be required to provide your credit card or other payment account information, which will be used solely for payment processing. We use third party payment processors ("Payment Processors") to help us process your payment information securely.<br><br>
              Payment processors comply with the latest security standards administered by the PCI Security Standards Council, a joint effort of brands such as Visa, MasterCard, American Express and Discover. Sensitive and private data exchange is conducted over a secure SSL communication channel and is encrypted and protected with digital signatures, and the website and services also meet strict vulnerability standards to create the safest environment for users. We will only share payment information with Payment Processors to the extent necessary to process your payments, refund such payments, and handle complaints and inquiries about such payments and refunds.<br><br>
              Please note that Payment Processors may collect certain Personal Information from you, which enables them to process your payments (e.g., your email address, address, credit card details, and bank account number) and complete all steps of the payment process through their systems, including data collection and processing. Payment Processors' use of your Personal Information is governed by their respective privacy policies, which may or may not include privacy protections as protective as this Policy. We recommend that you consult their respective privacy policies.<br><br>
          </p>
          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Disclosure of information                        </p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify"> Depending on the Services requested or as necessary to complete a transaction or provide a Service you have requested, we may share your information with our trusted subsidiaries and joint venture partners, affiliates, contracted companies and service providers (collectively, "Service Providers"). we rely on to assist in the operation of the website and services available to you whose privacy policies are consistent with ours or who agree to comply with our policies regarding personal information. We will not share information with unaffiliated third parties.<br><br>

              Service providers are not authorized to use or disclose your information, except as necessary to perform services on our behalf or to comply with legal requirements. Service providers receive the information they need only to perform their designated functions, and we do not authorize them to use or disclose the information provided for their own marketing or other purposes. We will only share and disclose your information with the following categories of service providers:<br><br>
              - Affiliate programs<br>
              - Payment processors
          </p>
          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Retention of information
          </p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">We will retain and use your personal information for the period necessary to comply with our legal obligations, enforce our agreements, resolve disputes and, unless a longer retention period is required or permitted by law.<br><br>
              We may use aggregated data derived from or in which your Personal Data has been processed after you update or delete it, but not in a manner that personally identifies you. Once the retention period has expired, the Personal Data will be deleted. Therefore, the right of access, the right to erasure, the right to rectification and the right to data portability cannot be asserted after the expiration of the retention period..<br><br>

          </p>
          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Transfer of information                        </p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">Depending on your location, data transfer may involve the transfer and storage of your information in a country other than your own. However, countries outside the European Union and the European Economic Area are not covered. If such a transfer occurs, you can obtain more information by referring to the relevant sections of this policy or by contacting us using the information provided in the Contact Us section.                        </p>
          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Data protection rights under the GDPR</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              If you are a resident of the European Economic Area ("EEA"), you have certain data protection rights and we will endeavor to take reasonable steps to allow you to correct, amend, delete or restrict the use of your Personal Data. . If you would like to know what personal information we hold about you and whether you would like it removed from our systems, please contact us. In certain circumstances, you have the following data protection rights:<br><br>
              (i) You have the right to withdraw your consent where you have previously given your consent to the processing of your Personal Data. To the extent that the lawful basis for our processing of your Personal Data is consent, you have the right to withdraw that consent at any time. Revocation does not affect the lawfulness of the processing prior to revocation.<br><br>
              (ii) You have the right to know whether your Personal Data is being processed by us, to obtain information about certain aspects of the processing and to obtain a copy of your Personal Data during the processing.<br><br>
              (iii) You have the right to verify the accuracy of your data and request that it be updated or corrected. You also have the right to request that we complete any personal data that you believe is incomplete.<br><br>
              (iv) You have the right to object to the processing of your data if the processing is based on a lawful basis other than consent. Where the Personal Data is processed in the public interest, in the exercise of official authority vested in us, or for legitimate interests pursued by us, you may object to such processing on grounds relating to a specific situation to justify the objection. However, you should be aware that if your Personal Data is processed for direct marketing purposes, you may object to such processing at any time without providing a justification. To find out whether we process Personal Data for direct marketing purposes, please refer to the relevant sections of this Policy.<br><br>
              (v) You have the right, in certain circumstances, to restrict the processing of your Personal Data. These circumstances include: you contest the accuracy of your Personal Data and we need to verify its accuracy; the processing is unlawful, but you object to the deletion of your Personal Data and request instead to restrict its use; we no longer need your Personal Data for processing purposes, but you need it to establish, exercise or defend your legal rights; you have objected to the processing pending verification of whether our legitimate grounds override your legitimate grounds. Where processing is restricted, such Personal Information will be marked accordingly and, with the exception of storage, will only be processed with your consent or for the establishment, exercise or defense of legal claims, for the protection of the rights of another natural or legal person. person or for reasons of substantial public interest.<br><br>
              (vi) You have the right, in certain circumstances, to have us delete your Personal Data. These circumstances include: the Personal Data is no longer necessary in relation to the purposes for which it was collected or processed; you withdraw your consent to consent-based processing; you object to the processing under certain rules of applicable data protection law; the processing is for direct marketing purposes; and the Personal Data has been unlawfully processed. However, there are exceptions to the right to erasure, such as where the processing is necessary: for the exercise of the right to freedom of expression and information; to comply with a legal obligation; or for the establishment, exercise or defense of legal claims.<br><br>
              (vii) You have the right to receive the Personal Data you have provided to us in a structured, commonly used and machine-readable format and, where technically feasible, to have it transferred to another controller without any impediment from us, provided that such transfer does not adversely affect the rights and freedoms of others.<br><br>
              (viii) You have the right to lodge a complaint with a data protection authority about our collection and use of your personal information. If you are not satisfied with the outcome of your complaint directly with us, you have the right to lodge a complaint with your local data protection authority. For more information, please contact your local data protection authority in the EEA. This provision applies whenever your Personal Data is processed by automated means and the processing is based on your consent, a contract to which you are a party or pre-contractual obligations thereunder.
          </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">California Privacy Rights</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              Consumers who reside in California have certain additional rights with respect to their personal information under the California Consumer Privacy Act ("CCPA"). If you are a California resident, this section applies to you.<br><br>
              In addition to the rights explained in this Policy, California residents who provide Personal Information as defined by law to obtain Services for personal, family or household use have the right to request and obtain information from us once per calendar year about the categories and pieces of Personal Information we have collected and disclosed.<br><br>
              In addition, California residents have the right to request deletion of their Personal Information or to opt out of the sale of their Personal Information, any sale, disclosure or transfer of Personal Information to another company or third party for money or other valuable compensation. To do so, please contact us. We will not discriminate against you when you exercise your rights under the CCPA.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">How can you exercise your rights?</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              All requests to exercise your rights may be directed to us using the contact details provided in this document. Please note that we may ask you to verify your identity before responding to such requests. Your request must contain sufficient information to allow us to verify that you are the person you claim to be or that you are the authorized representative of such person. If we receive your request from an authorized representative, we may ask you to provide proof that you have given such authorized representative power of attorney or that the authorized representative has valid written authority to make requests on your behalf.<br><br>
              You must provide sufficient detail to enable us to understand and respond appropriately to the request. We will not be able to comply with your request or provide you with Personal Data unless we have first verified your identity or authority to make such request and confirmed that the Personal Data relates to you.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Cookies</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              Our website and services use "cookies" to help personalize your online experience. A cookie is a text file that is placed on your hard drive by a Web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you. If you choose to decline cookies, you may not be able to fully experience the website features and services. You can learn more about cookies and how they work here.<br><br>
              We may use cookies to collect, store and track information for security and personalization, to make the website and services work, and for statistical purposes. For more information about the cookies we collect and their purpose, please see our cookie policy. You have the option to accept or decline cookies. Most web browsers accept cookies by default, but you can change your browser setting to decline cookies if you prefer.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Data analysis</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              Our website and services may use third-party analytics tools that use cookies, web beacons or other similar information gathering technologies to collect standard information about Internet activity and usage. The information collected is used to compile statistical reports on user activities, such as how often users visit our website and services, which pages they visit and for how long, etc. We use the information obtained from these analytics tools to measure performance, monitor and improve our website and services.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Do not track signals</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              Some browsers come with a Do Not Track feature that allows you to tell websites you visit that you do not want your online activities tracked. Tracking is not the same as using or collecting information in connection with a website. For these purposes, tracking refers to the collection of personally identifiable information from consumers who use or access a website or online service as they browse different websites over time. The way in which browsers transmit the Do Not Track signal is not yet uniform. As a result, the website and services are not yet configured to interpret or respond to Do Not Track signals transmitted by your browser. However, as described in more detail in this Policy, we limit our use and collection of your Personal Information.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Announcements</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              We may authorize certain third party companies to help us customize advertisements that we believe may be of interest to users and to collect and use other data about user activity on the website. These companies may provide advertisements that may place cookies and track User behavior.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">E-mail marketing</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              We offer electronic newsletters to which you may voluntarily subscribe at any time. We are committed to maintaining the confidentiality of your e-mail address and will not pass your e-mail address to any third party, except as permitted in the Use and Processing of Information section. We will retain information sent by e-mail in accordance with applicable laws and regulations.<br><br>
              In accordance with the CAN-SPAM Act, all emails sent by us will clearly indicate who the email is from and how to contact the sender. You may opt out of receiving our newsletter or marketing emails by following the unsubscribe instructions in those emails or by contacting us. However, you will continue to receive essential transactional emails.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Push the message</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              We offer push notifications that you can also voluntarily subscribe to at any time. To ensure that push notifications reach the correct devices, we use a third-party push notification provider that relies on a device token that is unique to your device and issued by your device's operating system. While a list of device tokens may be accessible, they will not reveal your identity, unique device ID or contact information to us or our third-party push notification provider. We will retain information sent via email in accordance with applicable laws and regulations. If at any time you no longer wish to receive push notifications, simply adjust your device settings.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Affiliate links</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              We may engage in affiliate marketing and have affiliate links on the website and services to provide you with related or additional products and services. If you click on an affiliate link, a cookie is placed on your browser to track any sales for the purpose of collecting commissions.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Links to other resources</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              The website and services contain links to other resources that are not owned or controlled by us. Please be aware that we are not responsible for the privacy practices of such other sources or third parties. We encourage you to be aware when you leave the Website and Services and to read the privacy statements of any source that may collect personal information.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Information security</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              We safeguard the information you provide to us on computer servers in a controlled, secure environment, protected from unauthorized access, use or disclosure. We maintain reasonable administrative, technical and physical safeguards in an effort to protect against unauthorized access, use, alteration and disclosure of Personal Information under our control and custody. However, transmission of data over the Internet or a wireless network cannot be guaranteed.<br><br>
              Therefore, while we strive to protect your personal information, you acknowledge that (i) there are security and privacy restrictions on the Internet that are beyond our control; (ii) the security, integrity and privacy of all information and data exchanged between you and the Website and the Services cannot be guaranteed; and (iii) such information and data may be viewed or tampered with in transit by any third party, despite all efforts.<br><br>
              Because the security of Personal Information depends in part on the security of the device you use to communicate with us and the security you use to protect your login information, please take appropriate steps to protect this information.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Data filtering</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              If we learn that the security of the Website and Services has been compromised or that Users' personal information has been disclosed to unrelated third parties as a result of outside activity, including but not limited to security attacks or fraud, we reserve the right to take reasonably appropriate action, including but not limited to investigations and complaints, as well as notification of and cooperation with law enforcement authorities. In the event of a data breach, we will make all reasonable efforts to notify affected individuals if we believe there is a reasonable risk of harm to the User as a result of the breach or if notification is required by law. When we do this, we will post a notice on the Website.                        </p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Changes and Adjustments</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              We reserve the right to change this Policy or the terms and conditions relating to the Website and the Services at any time in our sole discretion. When we do so, we will revise the updated date at the bottom of this page. We may also notify you in other ways at our discretion, such as through the contact information you have provided.<br><br>
              An updated version of this Policy will be effective immediately upon posting of the revised Policy, unless otherwise noted. Your continued use of the Website and Services after the effective date of the revised Policy (or any other action noted at that time) constitutes your acceptance of those changes. However, we will not use your Personal Information in a manner materially different from that stated at the time your Personal Information was collected without your consent.</p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">Acceptance of this policy</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              You acknowledge that you have read this Policy and agree to all of its terms and conditions. By accessing and using the Website and Services and submitting your information, you agree to be bound by this Policy. If you do not agree to the terms of this Policy, you are not authorized to access or use the Website and Services.</p>

          <p class="fw-normal color-323232 montserrat fw-bold font24 line-height-28 pt-2">To contact us</p>
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
              If you have any questions, concerns or complaints regarding this policy, the information we have about you or if you wish to exercise your rights, we encourage you to contact us using the details below:<br><br>
              <a href="https://moon-pion.com/contact.php?lang=MX">https://moon-pion.com/contact</a><br><br>
              We will endeavor to resolve complaints and disputes and will make reasonable efforts to comply with your wish to exercise your rights as soon as possible and, in any event, within the time limits prescribed by applicable data protection law.<br><br>
              This document was last updated on April 26, 2022.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Terms Modals -->
  <div class="modal fade term_popup" tabindex="-1" id="terms">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Terms of Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
           <p>
              This disclaimer ("Disclaimer") sets forth the general guidelines, disclosures and terms of use for the moon-pion.com website ("Site" or "Service") and any of its related products and services (collectively, "Services"). This disclaimer is a legally binding agreement between you ("User", "you" or "your") and moon-pion is a registered trademark of Astroveo B.V. ("moon-pion is a registered trademark of Astroveo B.V.", "we", "us", "us" or "our"). If you are entering into this agreement on behalf of a company or other legal entity, you represent that you have the authority to bind such entity to this agreement, in which case the terms "User", "you" or "your" shall refer to such entity. If you do not have such authority or if you do not agree to the terms of this agreement, you must not accept this agreement and you may not access or use the Site and Services. By accessing and using the Site and Services, you acknowledge that you have read, understand and agree to be bound by the terms of this Disclaimer. You acknowledge that this disclaimer is a contract between you and moon-pion is a registered trademark of Astroveo B.V., even if electronic and not physically signed by you, and governs your use of the Site and Services.</p>
          <br>
          <p>
              <strong>Index</strong>
              <br><br>
              <ol class="">
                  <li>
                      <a href="#representation">Representation</a>
                  </li>
                  <li>
                      <a href="#content-and-postings">Content and publications</a>
                  </li>
                  <li>
                      <a href="#compensation-and-sponsorship">Compensation and sponsorship</a>
                  </li>
                  <li>
                      <a href="#reviews-and-testimonials">Comments and testimonials</a>
                  </li>
                  <li>
                      <a href="#indemnification-and-warranties">Indemnification and guarantees</a>
                  </li>
                  <li>
                      <a href="#changes-and-amendments">Changes and amendments</a>
                  </li>
                  <li>
                      <a href="#acceptance-of-this-disclaimer">Acceptance of this disclaimer</a>
                  </li>
                  <li>
                      <a href="#contacting-us">Get in touch with us</a>
                  </li>
              </ol>
              <br><br>
              <strong id="representation">Representation</strong>
              <br><br>
              Any views or opinions represented on the Site are personal and belong exclusively to moon-pion is a registered trademark of Astroveo B.V. and do not represent persons, institutions or organizations with which moon-pion is a registered trademark of Astroveo B.V. may or may not be associated in a professional or personal capacity, unless explicitly stated. Any views or opinions are not intended to defame any religion, ethnic group, club, organization, company or individual.<br><br>
              <strong id="content-and-postings">Content and publications</strong>
              <br><br>
              You may not modify, print or copy any part of the Site and Services. The inclusion of any portion of the Site and Services in any other work, whether printed, electronic or otherwise, or the inclusion of any portion of the Site and Services in any other resource by embedding, framing or otherwise without the express permission of "moon-pion is a registered trademark of Astroveo B.V. is prohibited.<br><br>
              <strong id="compensation-and-sponsorship">Compensation and sponsorship</strong>
              <br><br>
              Some of the links on the site may be affiliate links. This means that if you click on the link and purchase an item, "moon-pion is a registered trademark of Astroveo B.V. you will receive an affiliate commission.<br><br>
              <strong id="reviews-and-testimonials">Comments and testimonials</strong>
              <br><br>
              Testimonials are received in various forms through a variety of delivery methods. Testimonials are not necessarily representative of all those who will use the Site and Services, and "A moon-pion is a registered trademark of Astroveo B.V. is not responsible for, and does not necessarily share, the opinions or comments available on the Site. All opinions expressed are strictly the opinions of the reviewers.<br><br>
              Some testimony may have been edited for clarity or abbreviated in cases where the original testimony included irrelevant information that is not relevant to the general public. Testimonials may be reviewed for authenticity before being made available for public viewing.<br><br>
              <strong id="indemnification-and-warranties">Indemnification and guarantees</strong>
              <br><br>
              While we have made every effort to ensure that the information contained in the Site is correct, "A moon-pion is a registered trademark of Astroveo B.V. is not responsible for any errors or omissions, or for the results obtained from the use of this information. All information on the Site is provided "as is", without warranty of completeness, accuracy, timeliness or the results obtained from the use of such information, and without warranty of any kind, express or implied. In no event shall moon-pion is a registered trademark of Astroveo B.V. be liable to you or anyone else for any decision made or action taken in reliance on the information on the website, or for any consequential, special or similar damages, even if advised of the possibility of such damages.<br><br>
              <strong id="changes-and-amendments">Changes and amendments</strong>
              <br><br>
              We reserve the right to modify this disclaimer or its terms relating to the website and services at any time in our sole discretion. When we do so, we will send you an email to notify you. We may also notify you in other ways at our discretion, such as through the contact information you have provided.<br><br>
              An updated version of this disclaimer will be effective immediately upon posting of the revised disclaimer, unless otherwise specified. Your continued use of the Site and Services after the effective date of the revised Disclaimer (or any other act specified at that time) will constitute your consent to such changes.<br><br>
              <strong id="acceptance-of-this-disclaimer">Acceptance of this disclaimer</strong>
              <br><br>
              You acknowledge that you have read this disclaimer and agree to all of its terms and conditions. By accessing and using the Site and Services, you agree to be bound by this Disclaimer. If you do not agree to comply with the terms of this Disclaimer, you are not authorized to access or use the Site and Services.<br><br>
              <strong id="contacting-us">Get in touch with us</strong>
              <br><br>
              If you have any questions, concerns or complaints regarding this disclaimer, we encourage you to contact us using the details below:<br><br>
              <a href="https://moon-pion.com/contact.php?lang=MX">https://moon-pion.com/contact</a><br/><a href="mailto:dpo@moon-pion.com">dpo@moon-pion.com</a>
              <br><br>
              This document was last updated on September 6, 2022.</p>
        </div>
      </div>
    </div>
  </div>


  <!-- GDPR Modals -->
  <div class="modal fade gdpr_popup" tabindex="-1" id="gdpr">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">GDPR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
          <p>{{ print_dynamic_variable('address') }}</p>
          <p>

              If you are a resident of the European Economic Area ("EEA"), you have certain data protection rights and we will endeavor to take reasonable steps to allow you to correct, amend, delete or restrict the use of your Personal Data. . If you would like to know what personal information we hold about you and whether you would like it removed from our systems, please contact us. In certain circumstances, you have the following data protection rights:<br><br>
              (i) You have the right to withdraw your consent where you have previously given your consent to the processing of your Personal Data. To the extent that the lawful basis for our processing of your Personal Data is consent, you have the right to withdraw that consent at any time. The revocation does not affect the lawfulness of the processing prior to the revocation.<br><br>
              (ii) You have the right to know whether your Personal Data is being processed by us, to obtain information about certain aspects of the processing and to obtain a copy of your Personal Data that is being processed.<br><br>
              (iii) You have the right to verify the accuracy of your information and request that it be updated or corrected. You also have the right to request that we complete any personal information that you believe is incomplete.<br><br>
              (iv) You have the right to object to the processing of your data if the processing is based on a lawful basis other than consent. Where the Personal Data is processed in the public interest, in the exercise of official authority vested in us, or for legitimate interests pursued by us, you may object to such processing on grounds relating to a specific situation to justify the objection. However, you should note that if your Personal Data is processed for direct marketing purposes, you may object to such processing at any time without providing any justification. To find out whether we process Personal Data for direct marketing purposes, please refer to the relevant sections of this Policy.<br><br>
              (v) You have the right, in certain circumstances, to restrict the processing of your Personal Data. These circumstances include: you contest the accuracy of your Personal Data and we need to verify its accuracy; the processing is unlawful, but you object to the deletion of your Personal Data and request instead to restrict its use; we no longer need your Personal Data for processing purposes, but you need it to establish, exercise or defend your legal rights; you have objected to the processing pending verification of whether our legitimate grounds override your legitimate grounds. Where processing is restricted, this Personal Information will be marked accordingly and, with the exception of storage, will only be processed with your consent or for the establishment, exercise or defense of legal claims, for the protection of the rights of another natural or legal person or for reasons of substantial public interest.<br><br>
              (vi) You have the right, in certain circumstances, to have us delete your Personal Data. These circumstances include: the Personal Data is no longer necessary in relation to the purposes for which it was collected or processed; you withdraw your consent to consent-based processing; you object to the processing under certain rules of applicable data protection law; the processing is for direct marketing purposes; and the Personal Data has been unlawfully processed. However, there are exceptions to the right to erasure, such as where the processing is necessary: for the exercise of the right to freedom of expression and information; to comply with a legal obligation; or for the establishment, exercise or defense of a legal claim.<br><br>
              (vii) You have the right to receive the Personal Data you have provided to us in a structured, commonly used and machine-readable format and, where technically feasible, to have it transferred to another controller without any hindrance from us, provided that such transfer does not adversely affect the rights and freedoms of others.<br><br>
              (viii) You have the right to lodge a complaint with a data protection authority about our collection and use of your personal information. If you are not satisfied with the outcome of your complaint directly with us, you have the right to lodge a complaint with your local data protection authority. For more information, please contact your local data protection authority in the EEA. This provision applies whenever your Personal Data is processed by automated means and the processing is based on your consent, a contract to which you are a party or pre-contractual obligations thereof.<br><br>
              Note: If you do not receive the e-mail, please check your junk mail.<br><br>
              1) Send your message to <a href="mailto:dpo@moon-pion.com">dpo@moon-pion.com</a> <br><br>
              2) To help us locate your information, please include the following:<br>
              &emsp;Name: :<br>
              &emsp;Last name:<br>
              &emsp;Date of birth:(dd/mm/yyyy) :<br>
              &emsp;E-mail address:<br>
              &emsp;Phone:<br><br>
              3) Submit your request with the reason below:<br>

              &emsp;- Right of access<br>
              &emsp;- Right of withdrawal<br>
              &emsp;- Right of deletion ("right to be forgotten") (e.g. deletion of personal data, account closure, etc.)<br>
              &emsp;- Right of heirs<br>
              &emsp;- Right of opposition<br>
              &emsp;- Other request<br>

                                  </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{$asset_path}}assets/js/custom.js"></script>
  <script src="{{$asset_path}}assets/js/slick.js"></script>
  <script src="{{$asset_path}}assets/js/functions.js"></script>

</body>

</html>
