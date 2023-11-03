@php($asset_path = '/landers/landingpages/252421/')
@php($srcImg = "/landers/sets/set27/")
@include('/landers/terms/dynamic/dynamic')
<!doctype html>
<html lang="it">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="{{$asset_path}}assets/images/favicon.png">

  <meta property="og:title" content="Astro Rolla" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="Astro Rolla" />
  <meta property="og:image" content="Astro Rolla" />
  <meta property="og:image:width" content="37" />
  <meta property="og:image:height" content="37" />
  <meta property="og:site_name" content="Astro Rolla" />
  <meta property="og:description"
    content="Astro Rolla" />
  <meta name="author" content="Astro Rolla">
  <meta name="keywords" content="Astro Rolla">
  <meta name="title" content="Astro Rolla">
  <meta name="description" content="Astro Rolla">

  <!-- all CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{$asset_path}}assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{$asset_path}}assets/css/styles.css" rel="stylesheet">
    @if($gtmContainerId)
        @include('google.gtmcontainer')
    @endif

  <style>
    .error{color: red;}
  </style>
  <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
  <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>

  <title>Astro Rolla</title>
    <!-- notify script -->
    <script> (function (document, window) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://trk-keingent.com/scripts/push/script/57dkplvgw8?url=" + encodeURI(self.location.hostname) + "&alturl=" + encodeURI(self.location.pathname);
            script.onload = function () {
                push_init();
                push_subscribe();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window); </script>
</head>

<body>
  <div class="main_bg">
    <!-- header start -->
    <header class="header py-3">
      <div class="container">
        <div class="row">
          <div class="col-4 col-md-12 col-lg-2 my-auto">
            <div class="head_person_image text-right text-md-end border-0">
              <a href="https://astro-rolla.com/index.php">
              <img src="{{$asset_path}}assets/images/logo.png">
            </a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
  </div>

  <!-- steps start -->
  <section class="main_banner">
    <div class="container">
        <form name="g" id="nameForm" class="main_form row justify-content-center" method="post" action="{{request()->url()}}/insertlead">
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
          <p class="font-18 color-061629 montserrat fw-regular text-center">Soldi... Fortuna... Felicità...</p>
          <h2 class="font-40 pacifico color-061629 text-center">Cosa ti riserva il {{date("Y");}}?</h2>
          <p class="montserrat font-24 fw-bold text-uppercase text-center mt-3 mt-xxl-5">Scegli il tuo segno zodiacale:</p>
        </div>
        <div class="col-12 col-sm-12 col-md-10 pt-3 step_1">
          <div class="row mx-0 w-100">
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3
            ">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}aries-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Ariete</span><br>
                <input type="radio" name="astofysica" value="aries">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}libra-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Bilancia</span><br>
                <input type="radio" name="astofysica" value="libra">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}leo-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Leone</span><br>
                <input type="radio" name="astofysica" value="Leo">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}pisces-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Pesci</span><br>
                <input type="radio" name="astofysica" value="pisces">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}gemini-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Gemelli</span><br>
                <input type="radio" name="astofysica" value="gemini">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}scorpio-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Scorpione</span><br>
                <input type="radio" name="astofysica" value="scorpio">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}sagittarius-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Sagittario</span><br>
                <input type="radio" name="astofysica" value="sagittarius">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}virgo-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Vergine</span><br>
                <input type="radio" name="astofysica" value="virgo">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}taurus-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Toro</span><br>
                <input type="radio" name="astofysica" value="taurus">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}capricorn-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Capricorno</span><br>
                <input type="radio" name="astofysica" value="capricorn">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}cancer-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Cancro</span><br>
                <input type="radio" name="astofysica" value="cancer">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-3 col-md-3 col-lg-1 px-1 px-md-3">
              <label class="choose_your_sign">
                <img src="{{$srcImg}}aquarius-icon.png" class="position-relative z-index-1 w-100">
                <span class=" position-relative z-index-1 pacifico">Acquario</span><br>
                <input type="radio" name="astofysica" value="aquarius">
                <span class="checkmark"></span>
              </label>
            </div>

          </div>
        </div>

        <!-- step 2 -->
        <div class="col-12 col-sm-12 col-md-10  step_2_title d-none">
          <p class="font-18 color-061629 montserrat fw-regular text-center">Soldi... Fortuna... Felicità...</p>
          <h2 class="font-40 pacifico color-061629 text-center">Cosa ti riserva il {{date("Y");}}?</h2>
          <p class="montserrat font-24 fw-bold text-uppercase text-center mt-3 mt-xxl-5">Data di nascita:</p>
        </div>
        <div class="col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_2 d-none">
          <div class="row">
            <div class="col-4 col-md-4 col-lg-4">
              <select class="form-select montserrat font-18 select_box_field color-061629 day"
                aria-label="Default select example" name="day">
                <option value="" selected>Giorno</option>
                @for ($i = 1; $i < 32; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
            </div>
            <div class="col-4 col-md-4 col-lg-4">
              <select class="form-select montserrat font-18 select_box_field color-061629 month"
                aria-label="Default select example" name="month">
                <option value="" selected>Mese</option>
                <option value="01">Gennaio</option>
                <option value="02">Febbraio</option>
                <option value="03">Marzo</option>
                <option value="04">Aprile</option>
                <option value="05">Maggio</option>
                <option value="06">Giugno</option>
                <option value="07">Luglio</option>
                <option value="08">Agosto</option>
                <option value="09">Settembre</option>
                <option value="10">Ottobre</option>
                <option value="11">Novembre</option>
                <option value="12">Dicembre</option>
              </select>
            </div>
            <div class="col-4 col-md-4 col-lg-4">
              <select class="form-select montserrat font-18 select_box_field color-061629 year"
                aria-label="Default select example" name="year">
                <option value="" selected>Anno</option>
                @for ($i = 2004; $i > 1906; $i--)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
            </div>
            <span class="step_2_error error d-none">Si prega di indicare la data completa</span>
            <div class="col-12 text-center mt-5">
              <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_2_next">Continua</button>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                  onclick="back_step('.step_1','.step_2');"></i>
              </p>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Passo 1/5</p>
            </div>
          </div>
        </div>

        <!-- step 3 -->
        <div class="col-12 col-sm-12 col-md-10 step_3_title d-none">
          <p class="font-18 color-061629 montserrat fw-regular text-center">Soldi... Fortuna... Felicità...</p>
          <h2 class="font-40 pacifico color-061629 text-center">Cosa ti riserva il {{date("Y");}}?</h2>
          <p class="montserrat font-24 fw-bold text-uppercase text-center mt-5">Genere:</p>
        </div>
        <div class="col-10 col-md-10 col-xl-8 pt-3 step_3 d-none">
          <div class="row justify-content-center">
            <div class="col-6 col-md-6 col-lg-3">
              <label class="gender_options">
                <!-- <img src="{{$asset_path}}assets/images/sign-1.png" class="position-relative z-index-1 w-100"> -->
                <span class=" position-relative color-061629 z-index-1 montserrat">Donna</span>
                <input type="radio" name="gender" value="male">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-6 col-md-6 col-lg-3">
              <label class="gender_options">
                <!-- <img src="{{$asset_path}}assets/images/sign-1.png" class="position-relative z-index-1 w-100"> -->
                <span class=" position-relative z-index-1 color-061629 montserrat">Uomo</span>
                <input type="radio" name="gender" value="female">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-12 text-center mt-2">
              <span class="error step_3_error d-none">Si prega di compilare questo campo</span>
            </div>
            <div class="col-12 mt-5 text-center">
              <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_3_next">Continua</button>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                  onclick="back_step('.step_2','.step_3');"></i>
              </p>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Passo 2/5</p>
            </div>
          </div>
        </div>

        <!-- step 4 -->
        <div class="col-12 col-sm-12 col-md-10 step_4_title d-none">
          <p class="font-18 color-061629 montserrat fw-regular text-center">Soldi... Fortuna... Felicità...</p>
          <h2 class="font-40 pacifico color-061629 text-center">Cosa ti riserva il {{date("Y");}}?</h2>
        </div>
        <div class="col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_4 d-none">
          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
              <label class="montserrat font-20 text-061629 d-block fw-regular mb-2">Nome</label>
              <input type="text" placeholder="Nome di battesimo:" class="first_name_field" name="first_name">
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-3 mt-md-0">
              <label class="montserrat font-20 text-061629 d-block fw-regular mb-2">Cognome:</label>
              <input type="text" placeholder="Cognome:" class="first_name_field" name="last_name">
            </div>
            <span class="step_4_error error d-none">Si prega di compilare questo campo</span>
            <div class="col-12 text-center mt-5">
              <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_4_next">Continua</button>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                  onclick="back_step('.step_3','.step_4');"></i>
              </p>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Passo 3/5</p>
            </div>
          </div>
        </div>

        <!-- step 5 -->
        <div class="col-12 col-sm-12 step_5_title d-none">
          <p class="font-18 color-061629 montserrat fw-regular text-center">Soldi... Fortuna... Felicità...</p>
          <h2 class="font-40 pacifico color-061629 text-center">Cosa ti riserva il {{date("Y");}}?</h2>
        </div>
        <div class="col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_5 d-none">
          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-3 col-xl-8">
              <label class="montserrat font-18 text-061629 d-block fw-regular">Città:</label>
              <input type="text" placeholder="Per favore introduci la tua città" name="city" class="first_name_field">
              <span class="error step_5_error d-none">Si prega di selezionare il città</span>
            </div>
            <div class="col-12 text-center mt-5">
              <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_5_next">Continua</button>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                  onclick="back_step('.step_4','.step_5');"></i>
              </p>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Passo 4/5</p>
            </div>
          </div>
        </div>

        <!-- step 6 -->
        <div class="col-12 col-sm-12 col-md-10 step_6_title gtm-screen-email d-none">
          <p class="font-18 color-061629 montserrat fw-regular text-center">Soldi... Fortuna... Felicità...</p>
          <h2 class="font-40 pacifico color-061629 text-center">Cosa ti riserva il {{date("Y");}}?</h2>
        </div>
        <div class="col-12 col-sm-12 col-md-10 col-xl-8 pt-3 step_6 gtm-screen-email d-none">
          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-3 col-xl-8">
              <label class="montserrat font-18 text-061629 d-block fw-regular mb-2">E-mail:</label>
              <input type="email" placeholder="E-mail" class="first_name_field" name="email" required>
                
              <span class="step_6_error error d-none">Si prega di compilare questo campo</span>
               
            </div>
            <div class="col-12 text-center mt-5">
              <button type="submit" class="continue_btn font-16 text-white text-uppercase montserrat step_6_next"  id="get_clarification">Ottieni gratuitamente una chiaroveggenza completa
              </button>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 fw-bold text-uppercase"><i class="fa-solid fa-arrow-left"
                  onclick="back_step('.step_5','.step_6');"></i>
              </p>
            </div>
            <div class="col-6 pt-5 mt-3">
              <p class="font-20 montserrat color-061629 text-end fw-bold text-uppercase">Passo 5/5</p>
            </div>
          </div>
        </div>

        <!-- pendding step -->
          <div class="col-12 col-sm-12 col-md-10 step_6_title gtm-screen-pending_title d-none">
          </div>
          <div class="col-12 col-sm-12 col-md-10 col-xl-10 pt-3 gtm-screen-pending d-none">
            <div class="row justify-content-center">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8 text-center">
                  <h3 class="step_8__title text-center text-dark">
                    Per favore, aspetta un momento, mentre ti connetto con il tuo<br />Angelo custode...
                </h3>
                <p class="step_8__white-box text-dark">
                    PS Per assicurarmi che la tua fiducia in me sia meritata, voglio che tu sappia che rispetto le normative sulla privacy e sull'accesso ai tuoi dati personali. È tutto qui nella mia politica sulla privacy.
                </p>
              </div>
            </div>
          </div>

          <!-- final step -->
          <div class="col-12 col-sm-12 col-md-10 gtm-screen-thankyou d-none">
            <p class="font-18 text-dark montserrat fw-regular text-center text-md-center">La tua fiducia mi tocca profondamente.</p>
            <h2 class="font-40 montserrat fw-bold text-dark text-center text-md-center">Mi metterò subito al lavoro per te. La mia risposta ti arriverà nelle prossime ore.
            </h2>
            <div class="row justify-content-center">
              <div class="col-12 col-md-12 col-lg-3 col-xl-8 text-dark text-center">
                <p>
                    Vai subito nella tua casella di posta e scopri i regali che ti ho promesso: – La verifica della tua energia positiva – Il tuo talismano settimanale di protezione totale
                </p>
                <ul class="step_8__list text-dark">
                    <li>Vai alla tua casella di posta</li>
                    <li>Controlla la tua casella di posta o spam</li>
                    <li>Apri la mia e-mail e accedi ai tuoi regali di benvenuto.</li>
                </ul>
                <p class="step_8__white-box text-dark">
                    PS Per assicurarmi che la tua fiducia in me sia meritata, voglio che tu sappia che rispetto le normative sulla privacy e sull'accesso ai tuoi dati personali. È tutto qui nella mia politica sulla privacy.
                </p>
              </div>
            </div>
          </div>

      </form>
    </div>
  </section>
  <!-- steps end -->

  <!-- our testimonials start -->
  <section class="our_testimonial py-200">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial_content text-center">
              <i class="fa-solid fa-quote-left font-50 text-white mb-4"></i>
              <div class="fix_testimonial_image">
                <img src="{{$asset_path}}assets/images/testi-woman-1.jpg" class="">
              </div>
              <p class="text-white font-20 montserrat mt-4 px-5">Grazie mille per la tua lettura astrologica, mi ha davvero aperto gli occhi. Non mi aspettavo potesse essere cosí chiara!</p>
              <p class="font-24 text-white text-uppercase montserrat fw-bold">Fanny</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial_content text-center">
              <i class="fa-solid fa-quote-left font-50 text-white mb-4"></i>
              <div class="fix_testimonial_image">
                <img src="{{$asset_path}}assets/images/testi-woman-2.jpg" class="">
              </div>
              <p class="text-white font-20 montserrat mt-4 px-5">Volevo solo dirti grazie. Avevo chiesto informazioni sulla mia vita amorosa, ma mi hai chiarito molti altri aspetti della mia vita che hanno reso il tutto piú comprensibile.</p>
              <p class="font-24 text-white text-uppercase montserrat fw-bold">Amy</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial_content text-center">
              <i class="fa-solid fa-quote-left font-50 text-white mb-4"></i>
              <div class="fix_testimonial_image">
                <img src="{{$asset_path}}assets/images/testi-man-2.jpg">
              </div>
              <p class="text-white font-20 montserrat mt-4 px-5">Grazie, mi hai reso una nuova persona, grazie di cuore per tutto!</p>
              <p class="font-24 text-white text-uppercase montserrat fw-bold">Sam B.</p>
            </div>
          </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
    </div>
  </section>
  <!-- our testimonials end -->

  <section class="our_testimonial py-200">
      <div class="container">
          <div class="height-50"></div>
          <div class="row justify-content-center mx-0 w-100">
              <div class="col-12 col-md-6 col-xxl-7">
                  <h2 class="text-center text-white times"><?= print_dynamic_variable('disclaimer_title_it') ?></h2>
                      <p class="text-center text-white times">
                          <?= print_dynamic_variable('disclaimer_text_it') ?>
                          <?= print_dynamic_variable('address') ?>
                      </p>
              </div>
          </div>
      </div>
  </section>

  <!-- footer start -->
  <footer class="footer py-3">
    <div class="container">
      <ul class="text-center list-inline list-unstyled mb-0">
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="color-061629 montserrat fw-regular font-16 text-decoration-none text-uppercase privacy_modal">Informativa sulla privacy</a>
        </li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="color-061629 montserrat fw-regular font-16 text-decoration-none text-uppercase terms_modal">Termini di servizio</a></li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="color-061629 montserrat fw-regular font-16 text-decoration-none text-uppercase gdpr_modal">GDPR</a></li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="color-061629 montserrat fw-regular font-16 text-decoration-none text-uppercase ethical_modal">REGOLE ETICHE</a></li>
        <li class="list-inline-item me-3"><a href="javascript:void(0);"
            class="color-061629 montserrat fw-regular font-16 text-decoration-none text-uppercase cookie_modal"> BISCOTTO POLITICA</a></li>
        <li class="list-inline-item"><a href="https://astro-rolla.com/contact.php"
            class="color-061629 montserrat fw-regular font-16 text-decoration-none text-uppercase contact_modal">Contatto</a></li>
      </ul>
    </div>
  </footer>
  <!-- footer end -->

  <!-- Pivacy Modals -->
  <div class="modal fade privacy-1" tabindex="-1" id="privacy_policy">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">INFORMATIVA SULLA PRIVACY</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
            @include('/landers/terms/astro-rolla/it/privacy')
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Pivacy-2 Modals -->
  <div class="modal fade privacy-2" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">INFORMATIVA SULLA PRIVACY</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
          <p class="fw-normal color-323232 montserrat fw-normal font18 line-height-28 text-justify">
            @include('/landers/terms/astro-rolla/it/privacy-2')
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Terms Modals -->
  <div class="modal fade term_popup" tabindex="-1" id="terms">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Termini di servizio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
            <p>
              @include('/landers/terms/astro-rolla/it/terms')
            </p>
        </div>
      </div>
    </div>
  </div>

    <!-- GDPR Modals -->
  <div class="modal fade term_popup" tabindex="-1" id="gdpr">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
            <p>
              @include('/landers/terms/astro-rolla/it/gdpr')
            </p>
        </div>
      </div>
    </div>
  </div>

    <!-- Cookie policy Modals -->
  <div class="modal fade term_popup" tabindex="-1" id="cookie_modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> BISCOTTO POLITICA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
            <p>
              @include('/landers/terms/astro-rolla/it/cookie-policy')
            </p>
        </div>
      </div>
    </div>
  </div>

    <!-- ethical Modals -->
  <div class="modal fade term_popup" tabindex="-1" id="ethical_modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> REGOLE ETICHE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_content_styl">
            <p>
              @include('/landers/terms/astro-rolla/it/ethical')
            </p>
        </div>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{$asset_path}}assets/js/custom.js"></script>
  <script src="{{$asset_path}}assets/js/slick.js"></script>
  <script src="{{$asset_path}}assets/js/functions.js"></script>

</body>

</html>