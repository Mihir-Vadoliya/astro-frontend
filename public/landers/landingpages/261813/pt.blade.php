@php($asset_path = '/landers/landingpages/261813/')
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

    <meta property="og:title" content="Astrofysica"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="Astrofysica.com"/>
    <meta property="og:image" content="{{$asset_path}}assets/images/astro-logo-seo.png"/>
    <meta property="og:image:width" content="104"/>
    <meta property="og:image:height" content="87"/>
    <meta property="og:site_name" content="Astrofysica"/>
    <meta property="og:description" content="Astrofysica"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css -->
    <link href="{{$asset_path}}assets/css/style.css" rel="stylesheet">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>

    @if($gtmContainerId)
        @include('google.gtmcontainer')
    @endif

    <!-- favicon -->
    <link rel='shortcut icon' href='{{$asset_path}}assets/images/favicon.png'>

    <title>ASTROFYSICA</title>
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
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
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
                    <p class="fw-bold mb-0 text-white font-38">Receba o seu HORÓSCOPOPO pessoal GRATUITO 2023</p>
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
            <div
                class="col-12 col-md-12 col-lg-2 my-auto col-xl-2 col-xxl-2 position-relative pt-3 sign-icon-div d-none">
                <div class="banner_right_content mt-5 mt-md-5 pt-md-3 ps-xl-5 ms-xxl-5">
                    <div class="right_cnt_onebox">
                        <img src="{{$srcImg}}taurus.png" class="img-fluid select-sign">
                    </div>
                    <span class="font-18 fw-bold text-white mx-auto d-table mb-0 text-capitalize sign-text"></span>
                </div>
            </div>
            <!-- selected sign End-->

            <form name="g" id="nameForm"
                  class="main_form col-12 col-md-12 pt-3 col-lg-12 col-xl-12 col-xxl-12 position-relative sign_show"
                  method="post" action="{{request()->url()}}/insertlead">
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
                <div class="all_steps pt-4 mt-5 row d-block d-md-block ">
                    <div class="circle mx-auto step_1_full gtm-screen-zodiac" style="--total: 12">
                        <div class="stat arie" style="--i:1" data-sign="aries">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}aries.png" class="img-fluid">
                                </div>
                                <span class="font15 fw-bold color-10212b  mb-0">Áries</span>
                            </a>
                        </div>
                        <div class="stat" style="--i:2" data-sign="taurus">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none ">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}taurus.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 color-10212b fw-bold  mb-0">Touro</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="stat" style="--i:3" data-sign="gemini">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}gemini.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 color-10212b fw-bold mb-0">Gêmeos</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="stat" style="--i:4" data-sign="cancer">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}cancer.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 color-10212b fw-bold mb-0">Câncer</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="stat" style="--i:5" data-sign="leo">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}leo.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 color-10212b fw-bold mb-0">Leão</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="stat" style="--i:6" data-sign="virgo">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}virgo.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 color-10212b fw-bold mb-0">Virgem</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="stat" style="--i:7" data-sign="libra">
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
                        <div class="stat" style="--i:8" data-sign="scorpio">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}scorpio.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 color-10212b fw-bold mb-0">Escorpião</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="stat" style="--i:9" data-sign="sagittarius">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}sagittarius.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 color-10212b fw-bold mb-0">Sagitário</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="stat" style="--i:10" data-sign="capricorn">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}capricorn.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 color-10212b fw-bold mb-0">Capricórnio</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="stat" style="--i:11" data-sign="aquarius">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}aquarius.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 color-10212b fw-bold mb-0">Aquário</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                        <div class="stat" style="--i:12" data-sign="pisces">
                            <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                <div class="fix_image_icon">
                                    <img src="{{$srcImg}}pisces.png" class="img-fluid">
                                </div>
                                <div class="text-position">
                                    <p class="font15 fw-bold color-10212b fw-bold mb-0">Peixes</p>
                                    <!-- <p class="font-8">Mar 21 - Apr 20</p> -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- step 1 signs End -->
                <div class="center_div center_content">
                    <!-- step 1 -->
                    <div class="step_1 d-block step_1_sign">
                        <h3 class="text-center fw-bold font-28 text-uppercase text-white step_1_title">Escolha o seu
                            signo do zodíaco</h3>
                    </div>
                    <!-- step 1 for responsive -->
                    <div class="step_1 d-none d-md-none gtm-screen-zodiac">
                        <h3 class="fw-bold font-28 text-uppercase text-white">Escolha o seu signo do zodíaco</h3>
                        <div class="responsive_sign_div ">
                            <ul class="list-inline list-unstyled row justify-content-center">
                                <li class="list-inline-item stat col-3" data-sign="aries">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}aries.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Áries</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-3" data-sign="taurus">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}taurus.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Touro</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-3" data-sign="gemini">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}gemini.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Gêmeos</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-3" data-sign="cancer">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}cancer.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Câncer</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-2" data-sign="leo">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}leo.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Leão</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-2" data-sign="virgo">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}virgo.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Virgem</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-2" data-sign="libra">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}libra.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Libra</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-2" data-sign="scorpio">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}scorpio.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Escorpião</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-2" data-sign="sagittarius">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}sagittarius.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Sagitário</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-2" data-sign="capricorn">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}capricorn.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Capricórnio</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-2" data-sign="aquarius">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}aquarius.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Aquário</span>
                                    </a>
                                </li>
                                <li class="list-inline-item stat col-2" data-sign="pisces">
                                    <a class="d-table-cell text-center align-middle sign_box text-decoration-none">
                                        <div class="fix_image_icon">
                                            <img src="{{$srcImg}}pisces.png" class="img-fluid">
                                        </div>
                                        <span class="font15 fw-bold color-10212b  mb-0">Peixes</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- step 2 -->
                    <div class="step_2 d-none gtm-screen-gender">
                        <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Qual é o seu
                            sexo?</h3>
                        <div class="row justify-content-center">
                            <div class="d-flex justify-content-center">
                                <div class=" text-md-end">
                                    <label class="choose_gender_btn">
                                        <img src="{{ $asset_path }}assets/images/male-icon.png"
                                             class="text-center me-3 position-relative mb-2 pt-1 z-index-1">
                                        <span
                                            class=" position-relative z-index-1 montserrat color-10212b fw-bold medium font24">Homem</span><br>
                                        <input type="radio" name="gender" value="M">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="ms-5">
                                    <label class="choose_gender_btn">
                                        <img src="{{ $asset_path }}assets/images/female-icon.png"
                                             class="me-2 position-relative mb-2 z-index-1 ">
                                        <span
                                            class=" position-relative z-index-1 montserrat color-10212b fw-bold medium font24">Mulher</span><br>
                                        <input type="radio" name="gender" value="F">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="col-12 pt-20 text-center">
                                <p class="error step_2_error d-none">Por favor escolha o sexo</p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn montserrat medium font-18 text-decoration-none text-center d-inline-block text-white step_2_prev">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn montserrat medium font-18 text-decoration-none text-center d-inline-block text-white step_2_next">Continuar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- step 3 -->
                    <div class="step_3 d-none gtm-screen-birthdate">
                        <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Bem! Quando
                            nasceu?
                        </h3>
                        <div class="row justify-content-center">
                            <div class="col-0 col-md-1">

                            </div>
                            <div class="col-4 col-md-3">
                                <select class="form-select born_input_field font-18  fw-normal color-10212b day"
                                        aria-label="Default select example " name="day">
                                    <option value="" selected="selected">Dia</option>
                                    @for ($i = 1; $i < 32; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4 col-md-4">
                                <select class="form-select born_input_field font-18  fw-normal color-10212b month"
                                        aria-label="Default select example " name="month">
                                    <option value="" selected="selected">Mês</option>
                                    @for ($i = 1; $i < 13; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4 col-md-3">
                                <select class="form-select born_input_field font-18 fw-normal  color-10212b year"
                                        aria-label="Default select example " name="year">
                                    <option value="" selected="selected">Ano</option>
                                    @for ($i = 1940; $i < 2003; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-0 col-md-1">

                            </div>
                            <div class="col-12 pt-20 text-center">
                                <p class="error step_3_error d-none">Favor indicar a data completa</p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn   font-18 text-decoration-none text-center d-inline-block text-white step_3_prev">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn font-18 text-decoration-none text-center d-inline-block text-white step_3_next">Continuar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- step 4 -->
                    <div class="step_4 d-none gtm-screen-city">
                        <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Em que cidade
                            você nasceu?</h3>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <input type="text" placeholder="Por favor, introduza a sua cidade" name="city"
                                       class="born_input_field font24 medium montserrat text-center color-c6dee8">
                                <span class="error" id="step_4_error"></span>

                            </div>
                            <div class="col-12 pt-20 text-center">
                                <p class="error step_4_error d-none">Por favor, introduza a sua cidade</p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn   font-18 text-decoration-none text-center d-inline-block text-white step_4_prev">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn   font-18 text-decoration-none text-center d-inline-block text-white step_4_next">Continuar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- step 5 -->
                    <div class="gtm-screen-birthtimeknown step_5 d-none">
                        <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Sabe que horas
                            nasceu?
                        </h3>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <ul class="list-inline list-unstyled mb-xxl-5">
                                    <li class="list-inline-item">
                                        <label class="choose_yesno_btn choose_yesno_btn_yes">
                            <span
                                class=" position-relative z-index-1 text-uppercase fw-bold color-10212b font-18">Sim</span><br>
                                            <input type="radio" name="birth_time_know" value="yes" data-gtm-value="yes"
                                                   class="gtm-birthtime">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li class="list-inline-item">
                                        <label class="choose_yesno_btn choose_yesno_btn_no">
                            <span
                                class=" position-relative z-index-1 text-uppercase fw-bold color-10212b  font-18">NÃO</span><br>
                                            <input type="radio" name="birth_time_know" value="no" data-gtm-value="no"
                                                   class="gtm-birthtime">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 text-center">
                                <p class="error step_5_error d-none">Por favor escolha qualquer um</p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn montserrat medium font-18 text-decoration-none text-center d-inline-block text-white step_5_prev">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn montserrat medium font-18 text-decoration-none text-center d-inline-block text-white step_5_next">Continuar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- step 6 -->
                    <div class="step_6 d-none gtm-screen-birthtime">
                        <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Por favor,
                            introduza horas e minutos tão exactos quanto possível
                        </h3>
                        <div class="row justify-content-center">
                            <div class="1">

                            </div>
                            <div class="col-5">

                                <select class="form-select born_input_field font24 medium montserrat color-c6dee8 hour"
                                        aria-label="Default select example " name="tobhr">
                                    <option value="" selected="selected">Hora</option>
                                    @for ($i = 0; $i < 24; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-5">

                                <select class="form-select born_input_field font24 medium montserrat color-c6dee8 min"
                                        aria-label="Default select example" name="tobmin">
                                    <option value="" selected="selected">Min</option>
                                    @for ($i = 0; $i < 60; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="1">

                            </div>

                            <div class="col-12 pt-20 text-center">
                                <p class="error step_6_error d-none">Por favor escolha qualquer um</p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn font-18 text-decoration-none text-center d-inline-block text-white step_6_prev">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn   font-18 text-decoration-none text-center d-inline-block text-white step_6_next">Continuar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- step 7 -->
                    <div class="step_7 d-none gtm-screen-concern">
                        <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Quais são as
                            suas preocupações?
                        </h3>
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-3 col-md-3 mb-10 px-0">
                                <label class="choose_concerns_btn">
                                    <span
                                        class=" position-relative z-index-1   color-10212b   font-18">Trabalho</span><br>
                                    <input type="radio" name="concerns" value="1" checked="" class="gtm-concern"
                                           data-gtm-value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-3 mb-10 px-0">
                                <label class="choose_concerns_btn">
                                    <span
                                        class=" position-relative z-index-1   color-10212b   font-18">Finanças</span><br>
                                    <input type="radio" name="concerns" value="2" class="gtm-concern"
                                           data-gtm-value="2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-3 mb-10 px-0">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1   color-10212b  font-18">Amor</span><br>
                                    <input type="radio" name="concerns" value="3" class="gtm-concern"
                                           data-gtm-value="3">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-3 mb-10 px-0">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1   color-10212b  font-18">Geral</span><br>
                                    <input type="radio" name="concerns" value="4" class="gtm-concern"
                                           data-gtm-value="4">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-12 pt-20 text-center">
                                <p class="error step_7_error d-none">Por favor escolha qualquer um</p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn   font-18 text-decoration-none text-center d-inline-block text-white step_7_prev">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn font-18 text-decoration-none text-center d-inline-block text-white step_7_next">Continuar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- step_8 -->
                    <div class="step_8 d-none gtm-screen-nam">
                        <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Qual é o seu
                            nome?
                        </h3>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <input type="text" placeholder="Primeiro nome" name="first_name"
                                       class="born_input_field font-18 color-10212b">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="Sobrenome" name="last_name"
                                       class="born_input_field font-18 color-10212b">
                            </div>
                            <div class="col-12 pt-20 text-center">
                                <p class="error step_8_error d-none">Por favor preencha estes campos </p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="bck_btn font-18 text-decoration-none text-center d-inline-block text-white step_8_prev">Voltar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn font-18 text-decoration-none text-center d-inline-block text-white step_8_next">Continuar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- step 9 -->
                    <div class="step_9 d-none gtm-screen-email">
                        <h3 class="fw-bold font-28 text-uppercase text-white text-center heading_steps">Onde quer obter
                            a sua clarividência personalizada?
                        </h3>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-7 col-xl-11 col-xxl-12">

                                <div class="col-12">
                                    <input type="email" placeholder="E-mail" name="email"
                                           class="born_input_field text-center font24 medium montserrat color-c6dee8 input-email gtm-email"
                                           required="">
                                </div>
                                <div class="col-12 pt-20 text-center">
                                    <p class="error step_9_error d-none">Por favor preencha estes campos </p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item me-0 w-100">
                                            <button type="submit"
                                                    class="continue_btn   font-18  text-decoration-none text-center d-inline-block w-100 continue_btn-border px-lg-2 px-xxl-3  text-white step_9_next">
                                                <i class="fa fa-hand-o-right px-2"></i>
                                                <b>Obtenha a sua leitura gratuita</b>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- pendding screen -->
                    <div class="step_11 d-none gtm-screen-pending">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-12 text-white text-center">
                                @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')
                            </div>
                        </div>
                    </div>

                    <!-- step 10 -->
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
                        .gtm-screen-thankyou h3{
                            color: #fff;
                        }
                    </style>

                    <div class="step_10  pt-5 gtm-screen-thankyou d-none">
                        @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 my-auto  px-3 px-md-0">
                <div class="disclaimer_cnt mt-5 mt-md-0 ps-xl-5 ms-xxl-5 ">
                    <div class="right_cnt_onebox" style="margin-top: 350px;">
                        <h3 class="text-white font-18 fw-bold mb-4 text-uppercase text-center"><?= print_dynamic_variable('disclaimer_title_pt') ?></h3>
                        <p class="text-white font-16 fw-normal text-justify text-uppercase text-center">
                            <?= print_dynamic_variable('disclaimer_text_pt') ?> <?= print_dynamic_variable('address') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- <section class="disclamer">

</section> -->
<!-- main banner end -->

<!-- footer start -->
<footer class="">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 my-auto  px-3 px-md-0">
                <div class="footer_link pt-3 pt-xxl-5">
                    <ul class="footer_menus list-unstyled mb-0 d-flex justify-content-center">
                        <li class="list-inline-item  me-4 mb-3  "><a href="https://lp.all-universe.com"
                                                                     class="text-black fw-bold text-decoration-none font-16 text-uppercase">Início</a>
                        </li>
                        <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);"
                                                                    class="text-black fw-bold text-decoration-none font-16 text-uppercase privacy_btn_open">Política
                                de privacidade</a></li>
                        <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);"
                                                                    class="text-black fw-bold text-decoration-none font-16 text-uppercase rules_btn_open">Regras
                                éticas</a></li>
                        <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);"
                                                                    class="text-black fw-bold text-decoration-none font-16 text-uppercase gdpr_btn_open">GDPR</a>
                        </li>
                        <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);"
                                                                    class="text-black fw-bold text-decoration-none font-16 text-uppercase cookie_btn_open">Política
                                de bolachas</a></li>
                        <li class="list-inline-item4 me-0 "><a href="javascript:void(0);"
                                                               class="text-black fw-bold text-decoration-none font-16 text-uppercase terms_btn_open">TERMOS
                                E CONDIÇÕES</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- all popup -->
<!-- privacy policy -->
<div class="modal fade" id="privacy_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            @include('/landers/terms/all-universe/pt/privacy')
        </div>
    </div>
</div>

<!-- privacy policy -->
<div class="modal fade" id="privacy_modal_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            @include('/landers/terms/all-universe/pt/privacy-2')
        </div>
    </div>
</div>

<!-- rules -->
<div class="modal fade" id="rules_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            @include('/landers/terms/all-universe/pt/rules')
        </div>
    </div>
</div>

<!-- gdpr -->
<div class="modal fade" id="gdpr_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            @include('/landers/terms/all-universe/pt/gdpr')
        </div>
    </div>
</div>

<!-- Cookie policy -->
<div class="modal fade" id="cookie_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            @include('/landers/terms/all-universe/pt/cookies')
        </div>
    </div>
</div>

<!-- Terms of service -->
<div class="modal fade" id="terms_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            @include('/landers/terms/all-universe/pt/terms')
        </div>
    </div>
</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="{{$asset_path}}assets/js/slick.js"></script>
<script src="{{$asset_path}}assets/js/functions.js"></script>
<script type="text/javascript" src="{{$asset_path}}assets/js/custom.js"></script>

<!-- pop up -->
<script>
    $(document).ready(function () {
        $(".privacy_btn_open").click(function () {
            $('#privacy_modal').modal('show');
        });
        $(".rules_btn_open").click(function () {
            $('#rules_modal').modal('show');
        });
        $(".gdpr_btn_open").click(function () {
            $('#gdpr_modal').modal('show');
        });
        $(".cookie_btn_open").click(function () {
            $('#cookie_modal').modal('show');
        });
        $(".terms_btn_open").click(function () {
            $('#terms_modal').modal('show');
        });
    });
</script>

</body>

</html>
