@php($asset_path = '/landers/landingpages/252420/')
@php($srcImg = "/landers/sets/set26/")
@include('/landers/terms/dynamic/dynamic')
<!doctype html>
<html lang="pt">

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
    <meta property="og:description" content="Moon Pion" />
    <meta name="author" content="Moon Pion">
    <meta name="keywords" content="Moon Pion">
    <meta name="title" content="Moon Pion">
    <meta name="description" content="Moon Pion">

    <!-- all CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{$asset_path}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{$asset_path}}assets/css/styles.css" rel="stylesheet">

    <style>
        .error {
            color: red;
        }
    </style>
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
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
                            <a href="https://moon-pion.com/index.php?lang=BR">
                                <img src="{{$asset_path}}assets/images/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-9 col-md-10 col-lg-10 mt-md-4 mt-lg-4">
                        <p class="font-18 text-white montserrat fw-regular text-center text-md-center">Dinheiro... Sorte...
                            Felicidade...</p>
                        <h2 class="font-40 montserrat fw-bold text-white text-center text-md-center">O que 2022 reserva para
                            voce?</h2>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- steps start -->
        <section class="gtm-screen-zodiac main_banner">
            <div class="container">
                <div class="row justify-content-center mx-0 w-100">
                    <form name="g" id="nameForm" class="main_form" method="post" action="{{request()->url()}}/insertlead">
                        @csrf
                        <input name="uuid" type="hidden" value="{{$uuid}}">
                        {{--<input name="design_id" type="hidden" value="{{$design_id}}">--}}
                        <input name="country" type="hidden" value="{{$country}}">
                        <input name="language" type="hidden" value="{{$language}}">
                        <input name="visit" type="hidden" value="{{$visit_id}}">
                        <input name="binom_click_id" type="hidden" value="{{$binom_click_id}}">
                        <input name="queryString" type="hidden" value="{{$querystring}}">
                        <input name="googleClientId" type="hidden" value="">
                        <input name="sign" type="hidden" value="sign">
                        <!-- step 1 -->
                        <div class="col-12 col-sm-12 col-md-10 step_1_title">
                            <p class="montserrat font-24 text-white fw-regular text-center text-md-start mt-3 mt-xxl-5">
                                SELECCIONE O SEU SIGNO DO ZODÍACO</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-10 pt-3 step_1 px-0 px-md-3">
                            <div class="row mx-0 w-100 justify-content-start">
                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}aries-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Áries</span><br>
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
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Leão</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="leo" value="leo">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}pisces-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Peixes</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="pisces" value="pisces">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}gemini-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Gêmeos</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="gemini" value="gemini">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}scorpio-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Escorpião</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="scorpio" value="scorpio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}sagittarius-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Sagitário</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="sagittarius" value="sagittarius">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}virgo-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Virgem</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="virgo" value="virgo">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}taurus-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Touro</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="taurus" value="taurus">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}capricorn-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Capricórnio</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="capricorn" value="capricorn">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}cancer-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Câncer</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="cancer" value="cancer">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-md-3 col-lg-1 px-1 px-md-0">
                                    <label class="choose_your_sign">
                                        <img src="{{$srcImg}}aquarius-icon.png" class="position-relative z-index-1 w-100">
                                        <span class=" position-relative z-index-1 text-uppercase montserrat">Aquário</span><br>
                                        <input type="radio" name="astofysica" class="gtm-zodiac" data-gtm-value="aquarius" value="aquarius">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- step 2 -->
                        <div class="col-12 col-sm-12 col-md-10  step_2_title d-none">
                            <p class="montserrat font-24 text-white fw-regular text-center text-md-start mt-3 mt-xxl-5">Bem!
                                Quando nasceu?</p>
                        </div>
                        <div class="gtm-screen-birthdate col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_2 d-none">
                            <div class="row">
                                <div class="col-4 col-md-4 col-lg-4">
                                    <select class="form-select montserrat font-18 select_box_field text-black day" aria-label="Default select example" name="day">
                                        <option value="" selected>Dia</option>
                                        @for ($i = 1; $i < 32; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor

                                    </select>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4">
                                    <select class="form-select montserrat font-18 select_box_field text-black month" aria-label="Default select example" name="month">
                                        <option value="" selected>Mês</option>
                                        <option value="01">Janeiro</option>
                                        <option value="02">Fevereiro</option>
                                        <option value="03">Marchar</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Poderia</option>
                                        <option value="06">Junho</option>
                                        <option value="07">Julho</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Setembro</option>
                                        <option value="10">Outubro</option>
                                        <option value="11">Novembro</option>
                                        <option value="12">Dezembro</option>
                                    </select>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4">
                                    <select class="form-select montserrat font-18 select_box_field text-black year" aria-label="Default select example" name="year">
                                        <option value="" selected>Ano</option>
                                        @for ($i = 2004; $i > 1906; $i--)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <span class="step_2_error error d-none">Indique a data completa</span>
                                <div class="col-12 text-center text-md-start mt-5">
                                    <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_2_next">
                                        Continuar
                                    </button>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="gtm-birthdate-continue font-20 montserrat text-white fw-bold text-uppercase">
                                        <i class="fa-solid fa-arrow-left" onclick="back_step('.step_1','.step_2');"></i>
                                    </p>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">ETAPA 1/5</p>
                                </div>
                            </div>
                        </div>

                        <!-- step 3 -->
                        <div class="col-12 col-sm-12 col-md-10 step_3_title d-none">
                            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">
                                Qual é o seu gênero?
                            </p>
                        </div>
                        <div class="gtm-screen-gender col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_3 d-none">
                            <div class="row justify-content-start">
                                <div class="col-6 col-md-6 col-lg-3">
                                    <label class="gender_options">
                                        <!-- <img src="{{$asset_path}}assets/images/sign-1.png" class="position-relative z-index-1 w-100"> -->
                                        <span class=" position-relative text-black z-index-1 montserrat">Homem</span>
                                        <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" value="male">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-6 col-lg-3">
                                    <label class="gender_options">
                                        <!-- <img src="{{$asset_path}}assets/images/sign-1.png" class="position-relative z-index-1 w-100"> -->
                                        <span class="position-relative z-index-1 color-061629 montserrat">Mulher</span>
                                        <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="female">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <span class="error step_3_error d-none">Por favor complete este campo</span>
                                <div class="col-12 text-center text-md-start mt-5">
                                    <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_3_next">
                                        Continuar
                                    </button>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left" onclick="back_step('.step_2','.step_3');"></i>
                                    </p>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">ETAPA 2/5</p>
                                </div>
                            </div>
                        </div>

                        <!-- step 4 -->
                        <div class="col-12 col-sm-12 col-md-10 step_4_title d-none">
                            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">
                                Qual é o seu nome?
                            </p>
                        </div>
                        <div class="gtm-screen-name col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_4 d-none">
                            <div class="row justify-content-start">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <label class="montserrat font-20 text-white d-block fw-regular mb-2">Primeiro
                                        nome:</label>
                                    <input type="text" placeholder="Primeiro nome" class="first_name_field" name="first_name">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-3 mt-md-0">
                                    <label class="montserrat font-20 text-white d-block fw-regular mb-2">Sobrenome:</label>
                                    <input type="text" placeholder="Sobrenome" class="first_name_field" name="last_name">
                                </div>
                                <span class="step_4_error error d-none">Por favor complete este campo</span>
                                <div class="col-12 text-center text-md-start mt-5">
                                    <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_4_next">
                                        Continuar
                                    </button>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left" onclick="back_step('.step_3','.step_4');"></i>
                                    </p>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">ETAPA 3/5</p>
                                </div>
                            </div>
                        </div>

                        <!-- step 5 -->
                        <div class="col-12 col-sm-12 col-md-10 step_5_title d-none">
                            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">
                                Em que cidade você nasceu?
                            </p>
                        </div>
                        <div class="gtm-screen-city col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_5 d-none">
                            <div class="row justify-content-start">
                                <div class="col-12 col-md-12 col-lg-3 col-xl-8">
                                    <!-- <label class="montserrat font-18 text-white d-block fw-regular">País:</label> -->
                                    <input type="text" placeholder="Por favor, introduza a sua cidade" name="city" class="first_name_field">
                                </div>
                                <span class="error step_5_error d-none">Por favor complete este campo</span>
                                <div class="col-12 text-center text-md-start mt-5">
                                    <button type="button" class="continue_btn font-16 text-white text-uppercase montserrat step_5_next">
                                        Continuar
                                    </button>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left" onclick="back_step('.step_4','.step_5');"></i>
                                    </p>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">ETAPA 4/5</p>
                                </div>
                            </div>
                        </div>

                        <!-- step 6 -->
                        <div class="col-12 col-sm-12 col-md-10 step_6_title gtm-screen-email d-none">
                            <p class="montserrat font-24 fw-regular text-white text-uppercase text-center text-md-start mt-5">
                                Onde quer obter a sua clarividência personalizada?</p>
                        </div>
                        <div class="gtm-screen-email col-12 col-sm-12 col-md-10 col-xl-10 pt-3 step_6 d-none">
                            <div class="row justify-content-start">
                                <div class="col-12 col-md-12 col-lg-3 col-xl-8">
                                    <label class="montserrat font-18 text-white d-block fw-regular mb-2">E-mail:</label>
                                    <input type="email" placeholder="Email" name="email" class="first_name_field" required>
                                </div>
                                <span class="step_6_error error d-none">Por favor complete este campo</span>
                                <div class="col-12 text-center text-md-start mt-5">
                                    <button type="submit" class="continue_btn font-16 text-white text-uppercase montserrat step_6_next" id="get_clarification">Obtenha meu horóscopo pessoal gratuito para 2022
                                    </button>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="gtm-email-continue font-20 montserrat text-white fw-bold text-uppercase"><i class="fa-solid fa-arrow-left" onclick="back_step('.step_5','.step_6');"></i>
                                    </p>
                                </div>
                                <div class="col-6 pt-5 mt-3">
                                    <p class="font-20 montserrat text-white text-end fw-bold text-uppercase">ETAPA 5/5</p>
                                </div>
                            </div>
                        </div>

                        <!-- pendding step -->
                        <div class="col-12 col-sm-12 col-md-10 step_6_title gtm-screen-pending_title d-none">
                        </div>
                        <div class="col-12 col-sm-12 col-md-10 col-xl-10 pt-3 gtm-screen-pending d-none">
                            <div class="row justify-content-start">
                                <div class="col-12 col-md-12 col-lg-3 col-xl-8">
                                    <h3 class="step_8__title text-center text-white text-md-start">
                                        Aguarde um momento, enquanto estou conectando você com seu<br />anjo da guarda...
                                    </h3>
                                    <p class="step_8__white-box text-white text-center text-md-start">
                                        P.S. Para que a sua confiança em mim seja merecida, quero que saiba que respeito o
                                        regulamento relativo à privacidade e ao acesso aos seus dados pessoais. Tudo está
                                        aqui, na minha Política de Privacidade
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

                            .gtm-screen-thankyou ul {
                                margin-left: 9px;
                                list-style-type: none;
                                padding-left: 0rem;
                            }

                            .gtm-screen-thankyou p {
                                margin-left: 6px;
                            }

                            .gtm-screen-thankyou h3 {
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
                                            <p class="text-646464 font-20 montserrat mt-4">Eu conhecia esses princípios, mas
                                                não coloquei colocá-los em prática porque eu não sabia onde...</p>
                                            <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Fanny</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="testimonial_content text-center text-md-start">
                                            <img src="{{$asset_path}}assets/images/quote-image.png" class="mb-4">
                                            <div class="fix_testimonial_image">
                                                <img src="{{$asset_path}}assets/images/testi-man-1.jpg" class="">
                                            </div>
                                            <p class="text-646464 font-18 montserrat mt-4">Eu tenho ouvido a faixa todas as
                                                noites antes indo para a cama nos últimos 10 dias. Meus pesadelos têm...</p>
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
                                            <p class="text-646464 font-18 montserrat mt-4">Muito bom guia. Bem detalhado.
                                                Fácil de colocar em pratique depois de tirar todas as suas dúvidas.</p>
                                            <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Amy</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="testimonial_content text-center text-md-start">
                                            <img src="{{$asset_path}}assets/images/quote-image.png" class="mb-4">
                                            <div class="fix_testimonial_image">
                                                <img src="{{$asset_path}}assets/images/testi-man-2.jpg">
                                            </div>
                                            <p class="text-646464 font-18 montserrat mt-4">Este guia realmente atendeu às
                                                minhas expectativas. Obrigado Jennifer para oferecendo on-line.</p>
                                            <p class="font-24 text-f2bea0 text-uppercase montserrat fw-bold">Sam B.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
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
                        <?= print_dynamic_variable('disclaimer_title_pt') ?></h2>
                </div>
                <div class="col-12 text-center mt-auto">
                    <p class=" text-565149 text-center montserrat font16">
                        <?= print_dynamic_variable('disclaimer_text_pt') ?> <?= print_dynamic_variable('address') ?>
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
                <li class="list-inline-item me-3"><a href="javascript:void(0);" class="text-black montserrat fw-regular font-16 text-decoration-none privacy_modal">PRIVACIDADE
                        POLÍTICA</a>
                </li>
                <li class="list-inline-item me-3"><a href="javascript:void(0);" class="text-black montserrat fw-regular font-16 text-decoration-none terms_modal">TERMOS
                        E CONDIÇÕES DA ASTROVEO</a></li>
                <li class="list-inline-item me-3"><a href="javascript:void(0);" class="text-black montserrat fw-regular font-16 text-decoration-none gdpr_modal">GDPR</a>
                </li>
                <li class="list-inline-item"><a href="https://moon-pion.com/contact.php?lang=BR" class="text-black montserrat fw-regular font-16 text-decoration-none contact_modal text-uppercase">Contato</a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- footer end -->

    <!-- Pivacy Modals -->
    @include('/landers/terms/moon-pion/pt/privacy')

    <!-- Terms Modals -->
    @include('/landers/terms/moon-pion/pt/terms')

    <!-- GDPR Modals -->
    @include('/landers/terms/moon-pion/pt/gdpr')

    <!-- Social icon Model  -->

    <!-- Social icon Model  -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{$asset_path}}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{$asset_path}}assets/js/custom.js"></script>
    <script src="{{$asset_path}}assets/js/slick.js"></script>
    <script src="{{$asset_path}}assets/js/functions.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.close').on('click', function() {
                $('#social_model').modal('hide');
            });
        });
    </script>

</body>

</html>
