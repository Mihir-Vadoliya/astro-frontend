<?php
require('../../../apbinom_click_api.php');
if (isset($_GET['key'])) {
    $campaignKey = $_GET['key'];
} else {
    $campaignKey = "17e4tw4heg86r4fhz49a"; // test campaign if key is missing.
}
if ($campaignKey) {
    $tracking = new apGetClick($campaignKey);
    $trackingDetails = $tracking->getDataClick(); // get all clickdata
    if (isset($trackingDetails['clickid']) && !empty($trackingDetails['clickid'])) {
        $binom_click_id = $trackingDetails['clickid'];
    } else {
        $binom_click_id = "";
    }
}
$placement = $_GET['placement'] ?? null;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Astrology Reading</title>
        <link rel='shortcut icon' href='assets/images/icon.png' type='image/x-icon'>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/css.css" rel="stylesheet">

        <script src="https://api.pushnami.com/scripts/v1/push/628c76e624a10a0014231eba"></script>
        <link rel="manifest" href="/manifest.json">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-N8T952D2TZ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-N8T952D2TZ');
        </script>
        <style>
            .error{
                padding-top: 15px;
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="top-logo text-center">

            <div class="">
                <a href="https://starsandthemoon-2020.com/v2/sk-astro/home/index.php"><img src="assets/images/logo.png" alt="Astrology">
                </a>
            </div>

        </div>

        <div class="mid-cirle">
            <div class="container">
                <form action="javascript:void(0);" method="post" id="nameForm">

                    <input name="Contact0_roiCountry" type="hidden" value="">
                    <input type="hidden" name="signname" id="signname" value="">

                    <input name="country" type="hidden" value="BR">
                    <input name="language" type="hidden" value="PT">
                    <input name="binom_click_id" type="hidden" value="<?= $binom_click_id; ?>">
                    <input name="placement" type="hidden" value="<?= $placement; ?>">
                    <input name="queryString" type="hidden" value="<?=$_SERVER['REQUEST_URI']; ?>">
                    <input name="visit" type="hidden" value="">


                    <!-- End Hidden Fields, there is more input fields in the code below -->
                    <div class="row">
                        <div class="step__form">
                            <div class="sign-box__yourSign d-none">
                                <img id="yourSign"  alt="" title="">
                            </div>
                            <div class="step__count">
                                passo  <span id="step__count">1</span> de 10
                            </div>
                        </div>
                        <div class="mid-main-box">
                            <!---step-1-->
                            <div class="step__1 step_1">
                                <div class="step_1_head d-flex align-items-center mb-2  mb-lg-4 ">
                                    <div class="res_width">
                                        <img src="assets/images/Blanche.jpg" alt="Blanche" class="img-fluid rounded-circle">
                                    </div>
                                    <h2 class="text-start">seleccione o seu signo do Zodíaco</h2>
                                </div>

                                <!-- <p>Esta NÃO é uma leitura vaga e genérica que está habituado a ver em revistas e jornais. Essas são
                                    <br><span>previsões surpreendentemente GRATUITAS,</span> que podem..</p> -->

                                <div class="button-box bev" data-bevent="1" data-sign="aries">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/aries.png" alt="aries" title="aries"></span>
                                            <span>Áries<span class="button-box__span-name">Mar 21 - Abr 20</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="2" data-sign="taurus">
                                    <div class="sign-box">
                                        <a href="#">
                                            <a href="#">
                                                <span class="sign-box__img"><img src="assets/images/taurus.png" alt="taurus" title="taurus"></span>
                                                <span>Touro<span class="button-box__span-name">Abr 21 - Mai 20</span></span>
                                            </a>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="3" data-sign="gemini">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/gemini.png" alt="gemini" title="gemini"></span>
                                            <span>Gêmeos<span class="button-box__span-name">Mai 21 - Jun 20</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="4" data-sign="cancer">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/cancer.png" alt="cancer" title="cancer"></span>
                                            <span>Câncer<span class="button-box__span-name">Jun 21 - Jul 22</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="5" data-sign="leo">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/leo.png" alt="leo" title="leo"></span>
                                            <span>Leão<span class="button-box__span-name">Jul 23 - Ago 22</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="6" data-sign="virgo">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/virgo.png" alt="virgo" title="virgo"></span>
                                            <span>Virgem<span class="button-box__span-name">Ago 23 - Set 21</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="7" data-sign="libra">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/libra.png" alt="libra" title="libra"></span>
                                            <span>Libra<span class="button-box__span-name">Set 22 - Out 20</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="8" data-sign="scorpio">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/scorpio.png" alt="scorpio" title="scorpio"></span>
                                            <span>Escorpião<span class="button-box__span-name">Out 21 - Nov 20</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="9" data-sign="sagittarius">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/sagittarius.png" alt="sagittarius" title="sagittarius"></span>
                                            <span>Sagitário<span class="button-box__span-name">Nov 21 - Dez 21</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="10" data-sign="capricorn">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/capricorn.png" alt="capricorn" title="capricorn"></span>
                                            <span>Capricórnio<span class="button-box__span-name">Dez 22 - Jan 21</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="11" data-sign="aquarius">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/aquarius.png" alt="aquarius" title="aquarius"></span>
                                            <span>Aquário<span class="button-box__span-name">Jan 22 - Fev 18</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="12" data-sign="pisces">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/pisces.png" alt="pisces" title="pisces"></span>
                                            <span>Peixes<span class="button-box__span-name">Fev 19 - Mar 20</span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <!---step-2-->
                            <div class="step__2 text-center custom_step_2 d-none" id="step_2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-36 color-e33afc">Qual é o seu sexo?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">

                                                <div class="col-6 text-center">
                                                    <label class="choose_gender_btn">
                                                        <img src="assets/images/male.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                        <span class=" position-relative z-index-1 montserrat text-white  medium font24">Homem</span><br>
                                                        <input type="radio" name="gender" value="M" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6">
                                                    <label class="choose_gender_btn">
                                                        <img src="assets/images/woman.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                        <span class=" position-relative z-index-1 montserrat text-white  medium font24">Mulher</span><br>
                                                        <input type="radio" name="gender" value="F">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <span class="error" id="step_2_error"></span>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_2_btn" type="button">Próxima pregunta >></button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_2_prev" onclick='back("1", "2")'><img alt="" src="assets/images/pre_btn.png"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-2-end--->
                            <!--step-3-->
                            <div class="step__3 text-center custom_step_3 d-none" id="step_3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-36 color-e33afc">Bem! Quando nasceu?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12">
                                                    <div class="row justify-content-center">
                                                        <div class="col-4">
                                                            <select name="day" class="form-select born_input_field font24 medium montserrat text-black day" aria-label="Default select example ">
                                                                <option value="" selected="selected">Dia</option>
                                                                <?php
                                                                for($i=1;$i<=31;$i++):
                                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                                endfor;
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <select name="month" class="form-select born_input_field font24 medium montserrat text-black month" aria-label="Default select example ">
                                                                <option value="" selected="selected">Mês</option>
                                                                <?php
                                                                for($i=1;$i<=12;$i++):
                                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                                endfor;
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <select name="year" class="form-select born_input_field font24 medium montserrat text-black year" aria-label="Default select example ">
                                                                <option value="" selected="selected">Ano</option>
                                                                <?php
                                                                for($i=1940;$i<=2002;$i++):
                                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                                endfor;
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <span class="error" id="step_3_error"></span>
                                                    </div>
                                                    <p class="date_text color-e33afc font-16">Isso irá ajudar a fazer a leitura mais precisa. </p>
                                                </div>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_3_btn" type="button">Próxima pregunta >></button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_3_prev" onclick='back("2", "3")'><img alt="" src="assets/images/pre_btn.png"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----stwp-3-end--->
                            <!---step-4-->
                            <div class="step__4 text-center custom_step_4 d-none" id='step_4'>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-36 color-e33afc">Em que cidade você nasceu?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12 text-center">
                                                    <input type="text" placeholder="Por favor, introduza a sua cidade" name="city" class="city_filed font24 medium montserrat text-center text-black">
                                                    <span class="error" id="step_4_error"></span>
                                                </div>
                                                <p class="date_text color-e33afc font-16">Isto irá ajudar a tornar a sua clarividência mais precisa.</p>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_4_btn" type="button">Próxima pregunta >></button>
                                            <div class="control_btn">
                                                <div class="pre_btn step_4_prev" onclick='back("3", "4")'><img alt="" src="assets/images/pre_btn.png"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-4-end--->
                            <!---step-5-->
                            <div class="step__5 text-center custom_step_5 d-none" id="step_5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-36 color-e33afc">Sabe  que horas nasceu?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12 text-center">
                                                    <ul class="list-inline list-unstyled flex-columb">
                                                        <li class="list-inline-item">
                                                            <label class="choose_yesno_btn">
                                                                <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Sim</span><br>
                                                                <input type="radio" name="yesno" value="1" checked >
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <label class="choose_yesno_btn">
                                                                <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Não</span><br>
                                                                <input type="radio" name="yesno" value="2">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <p class="date_text color-e33afc font-16">Isto irá ajudar a tornar a sua clarividência mais precisa.</p>
                                                </div>
                                                <button class="btn_1 btn_1__scip step_5_btn" type="button">Próxima pregunta >></button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_5_prev" onclick='back("4", "5")'><img alt="" src="assets/images/pre_btn.png"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-5-end--->
                            <!---step-6-->
                            <div class="step__6 text-center custom_step_6 d-none" id="step_6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-36 color-e33afc">Por favor, introduza horas e minutos o mais exatos  possível</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-6">
                                                    <select name="tobhr" class="form-select born_input_field font24 medium montserrat text-black hour" aria-label="Default select example ">
                                                        <option value="" selected="selected">Hora</option>
                                                        <?php
                                                        for($i=0;$i<=23;$i++):
                                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                                        endfor;
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <!-- <input type="text" placeholder="Month" class="born_input_field font24 medium montserrat text-black"> -->
                                                    <select name="tobmin" class="form-select born_input_field font24 medium montserrat text-black min" aria-label="Default select example">
                                                        <option value="" selected="selected">Minuto</option>
                                                        <?php
                                                        for($i=0;$i<=59;$i++):
                                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                                        endfor;
                                                        ?>
                                                    </select>
                                                </div>
                                                <span class="error" id="step_6_error"></span>
                                                <button class="btn_1 btn_1__scip step_6_btn" type="button">Próxima pregunta >></button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_6_prev" onclick='back("5", "6")'><img alt="" src="assets/images/pre_btn.png"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-6-end--->
                            <!---step-7-->
                            <div class="step__7 text-center custom_step_8 d-none" id="step_7">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-36 color-e33afc">Quais são as suas preocupações?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-6  mb-10">
                                                    <label class="choose_concerns_btn">
                                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Trabalho</span><br>
                                                        <input type="radio" name="concerns" value="1"  checked >
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6  mb-10">
                                                    <label class="choose_concerns_btn">

                                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Finanças</span><br>
                                                        <input type="radio" name="concerns" value="2">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6 mb-10">
                                                    <label class="choose_concerns_btn">
                                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Amor</span><br>
                                                        <input type="radio" name="concerns" value="3">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6  mb-10">
                                                    <label class="choose_concerns_btn">

                                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Geral</span><br>
                                                        <input type="radio" name="concerns" value="4">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <button class="btn_1 btn_1__scip step_7_btn" type="button">Próxima pregunta >></button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_7_prev" onclick='back("6", "7")'><img alt="" src="assets/images/pre_btn.png"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-7-end--->
                            <!---step-8-->
                            <div class="step__8 text-center custom_step_8 d-none" id="step_8">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-36 color-e33afc">Qual é o seu nome?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-6">
                                                    <input type="text" placeholder="Primeiro nome" name="first_name" class="born_input_field font24 medium montserrat text-white">
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" placeholder="Sobrenome" name="last_name" class="born_input_field font24 medium montserrat text-white">
                                                </div>
                                                <span class="error" id="step_8_error"></span>
                                                <button class="btn_1 btn_1__scip step_8_btn" type="button">Próxima pregunta >></button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_8_prev" onclick='back("7", "8")'><img alt="" src="assets/images/pre_btn.png"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-8-end--->
                            <!---step-9-->
                            <div class="step__9 text-center custom_step_9 d-none" id="step_9">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-36 color-e33afc">Onde quer obter a sua clarividência personalizada?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12 col-md-10">
                                                    <input type="email" placeholder="E-mail" name="email" class="born_input_field font24 medium montserrat text-black input-email" required="">
                                                    <span class="error" id="step_9_error"></span>
                                                </div>
                                                <div class="col-12 pt-50 text-center">
                                                    <!-- <a  href="javascript:void(0);" class="continue_btn montserrat medium font20  text-decoration-none text-center d-inline-block w-100  px-5 text-white step_9_next step_9_btn">
                                                         Obtenha a minha clarividência
                                                    </a> -->
                                                </div>
                                                <!--  <p class="date_text color-e33afc font-16">Isto irá ajudar a tornar a sua clarividência mais precisa.</p> -->
                                                <button class="btn_1 btn_1__scip step_9_btn" type="submit">Próxima pregunta >></button>
                                                <div class="control_btn">
                                                    <div class="pre_btn step_9_prev" onclick='back("8", "9")'><img alt="" src="assets/images/pre_btn.png"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-9-end--->
                            <!---step-10-->
                            <div class="step__10 text-center custom_step_9 step_10 d-none" id="step_10">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row mb-4 mb-md-3 mb-xxl-5">
                                                <div class="left_img col-12 col-md-3">
                                                    <img src="assets/images/Blanche.jpg" alt="Blanche" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="heading_text col-12 col-md-9 my-auto">
                                                    <h4 class="text-md-start text-white font-18  mb-3 montserrat fw-normal">A sua confiança é admirável</h4>
                                                    <h3 class="text-md-start  text-white font-20 fw-bold montserrat  mb-0">Irei imediatamente verificar suas informaçōes. A minha resposta irá ser enviada em algumas horas.</h3>
                                                </div>
                                            </div>
                                            <div class="bg-text-new1 mb-4 text-start">
                                                <p class="text-white font-16 montserrat fw-bold  text-md-start mb-4 ">Vá agora à sua caixa de entrada e descubra os presentes que te prometi: - O seu Checkup de Energia Positivo - O seu Talismã de 7 Dias de Absoluta-Proteção
                                                </p>
                                                <ul class="list-inline list-unstyled mb-0">
                                                    <li class="text-white inbox-step-1 mb-2 font18 montserrat semibold">1. Vá para a sua caixa de entrada</li>
                                                    <li class="text-white inbox-step-1 mb-2 font18 montserrat semibold">2. Verifique a sua caixa de entrada ou spam</li>
                                                    <li class="text-white inbox-step-1 font18 montserrat semibold">3. Abra o meu e-mail e receba seus presentes de boas-vindas.</li>
                                                </ul>

                                            </div>
                                            <p class="montserrat font18 text-white mb-1 pt-4 semibold text-md-start mb-4 ">O seu amigo dedicado,</p>
                                            <p class="montserrat font18 text-white semibold text-md-start mb-4 pb-2">Blanche</p>
                                            <div class="bg-text-new1">
                                                <p class="text-white font18 montserrat fw-normal text-md-start">P.S. Para que a sua confiança em mim seja merecida, quero que saiba que respeito o regulamento relativo à privacidade e ao acesso aos seus dados pessoais. Tudo está aqui, na minha <a href="#privacy" class="cartonbox text-white" data-cb-type="inline" data-cb-hash="text">Política de Privacidade</a>.
                                                </p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---step-9-end--->


                            <div class="clearfix"></div>


                        </div>
                    </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <ul class="footer-links">
            <li><a href="https://starsandthemoon-2020.com/v2/sk-astro/home/index.php">Home</a></li>
            <li><a href="#terms" class="cartonbox" data-cb-type="inline" data-cb-hash="text">Termos de serviço</a></li>
            <li><a href="#privacy" class="cartonbox" data-cb-type="inline" data-cb-hash="text">Política de privacidade</a></li>
            <li><a href="#faq" class="cartonbox" data-cb-type="inline" data-cb-hash="text">FAQ</a></li>
        </ul>
    </div>

    <div style="display: none;">
        <div id="terms">
            <div class="editor">
                <h2>Termos e Condições</h2>
                <p>
                    <strong>TERMOS E CONDIÇÕES GERAIS E POLÍTICA DE PRIVACIDADE</strong>&nbsp;</p>
                <br>
                <p>Os seguintes Termos e Condições Gerais são aplicáveis aos produtos e serviços fornecidos via WAP,
                    SMS, GPRS e 3G pela Sam Media Ltd., ou empresas a ela filiadas, (doravante a ser referido
                    como "o Provedor"). O Prestador está autorizado a alterar estes Termos e Condições Gerais a partir de
                    de vez em quando sem aviso prévio. Para além dos Termos e Condições Gerais, quaisquer aplicáveis e publicitados
                    regras, condições promocionais, orientações e disposições relativas aos serviços também se aplicam a
                    o cliente e o Prestador, aquando da utilização dos Serviços (tal como aqui definidos) do Prestador. Todos aqueles
                    orientações, regras, condições e disposições promocionais serão consideradas uma parte indissociável
                    dos presentes Termos e Condições Gerais. Ao recorrer aos Serviços do Prestador,
                    aceita estar vinculado a estes Termos e Condições Gerais e às directrizes, regras e promoções
                    condições.
                    <br><br>
                    <strong>DESCRIÇÃO DO FORNECEDOR.</strong>
                    <br><br>
                    Através dos serviços WAP, SMS, GPRS e 3G, o Provedor fornece ao seu utilizador o acesso a uma rede
                    de fontes on-line, incluindo jogos on-line, mensagens de texto, conteúdo rico e informação on-line
                    material que pode ser descarregado para telemóveis ou qualquer outro dispositivo ("Serviços"). O General
                    Os Termos e Condições são sempre aplicáveis a todas as novas instalações, incluindo as instalações que
                    o Provedor pode implementar como parte da expansão, extensão ou melhoria do presente do Provedor
                    Serviços, incluindo qualquer extensão a novas funções acrescentadas pelo Prestador.
                </p>
                <br>
                <p>
                    <strong>DISPONIBILIDADE.</strong>
                    <br><br>
                    O Serviço é fornecido tal como está (na fase de desenvolvimento em que se encontra) e o Prestador
                    não aceita qualquer responsabilidade nem emite quaisquer garantias ou garantias no caso de configurações pessoais,
                    as informações ou mensagens não são guardadas, ou não são guardadas no devido tempo, ou se são apagadas ou incorrectamente
                    entregue. Para subscrever o Serviço, é necessário ter acesso à Internet
                    e/ou uma assinatura de comunicações móveis e pagar quaisquer taxas de serviço associadas a tal acesso.
                    O utilizador é obrigado a pagar todas as despesas incorridas com a criação de tal acesso. O utilizador é também responsável por
                    assegurar a ligação de qualquer equipamento necessário, incluindo qualquer telefone móvel ou computador pessoal
                    ou quaisquer dispositivos que possam ser necessários e que se encontrem em condições de funcionamento e adequados para utilização em
                    ligação com o Serviço.
                    <br><br>
                    <strong>PAGAMENTO.</strong>
                    <br><br>
                    Tem acesso gratuito aos nossos serviços on-line. No que diz respeito aos Serviços e à utilização
                    do mesmo, pagará o montante correspondente às taxas aplicáveis do Provedor em vigor a
                    esse tempo e de acordo com as tarifas cobradas pelo seu operador móvel. As tarifas serão facturadas
                    através do seu operador móvel através da conta móvel que recebe do operador móvel do seu
                    rede. Paga ao Provedor todos os impostos nacionais e locais ou outros impostos, incluindo mas não limitados
                    ao IVA, quaisquer impostos ou taxas impostas em seu lugar, cujos impostos se baseiam nos custos devidos ao
                    utilização dos Serviços, independentemente de esses impostos serem cobrados, agora ou no futuro, por
                    Autoridades europeias, nacionais ou locais ou por qualquer outro organismo ou organismos autorizados a cobrar impostos.
                    O Prestador reserva-se o direito de alterar as taxas do Serviço mediante a afixação de detalhes de tais alterações.
                    no seu sítio web.
                    <br><br>
                    <strong>OBRIGAÇÃO DE REGISTO.</strong>
                    <br><br>
                    A fim de garantir uma utilização segura e protegida do Serviço, garante ainda o seguinte
                    ao pagamento das taxas aplicáveis: (a) As suas informações pessoais (a seguir designadas por
                    a "Informação Registada") fornecida no formulário de registo é correcta, verdadeira, exacta e completa
                    e (b) concorda em assegurar que as Informações Registadas estão sempre correctas, actualizadas e actualizadas,
                    verdadeiro, preciso e completo. Se o Provedor tiver uma suspeita razoável de que a Informação Registada
                    não reflecte um verdadeiro estado de coisas, ou não é exacto ou completo, então o Provedor tem direito
                    suspender ou encerrar a sua conta e reter tanto a utilização actual como futura do Serviço,
                    ou qualquer componente do mesmo. O utilizador é responsável por manter o sigilo de qualquer palavra-passe
                    e/ou contas que lhe tenham sido emitidas pelo Provedor, e é totalmente responsável por todas as acções realizadas
                    envolvendo a utilização da sua palavra-passe ou conta. Compromete-se, no final de cada sessão, a encerrar
                    a sua conta (fechando o seu navegador) e para contactar o Provedor se notar ou suspeitar que
                    foi feita uma utilização não autorizada da sua senha ou conta, ou que a segurança ou protecção não é
                    mais tempo garantido, por qualquer outro motivo. O Provedor não pode e não será responsável por qualquer dano
                    decorrentes da sua inobservância das estipulações deste artigo.
                    <br><br>
                    <strong>DIREITOS DE PROPRIEDADE DO FORNECEDOR.</strong>
                    <br><br>
                    Está ciente e concorda que o Serviço e o software utilizado em ligação com o Serviço, (doravante
                    a ser referido como o "Software"), contém informações confidenciais que pertencem ao Provedor
                    é protegido pela legislação válida e aplicável em matéria de direitos de propriedade intelectual e industrial e
                    outra legislação. Também está ciente e concorda que os direitos de autor, marcas registadas, marcas de serviço, patentes
                    ou outros direitos de propriedade e leis são aplicáveis à Informação publicada nos anúncios dos patrocinadores
                    ou informação que lhe é oferecida através do Serviço. O cliente compromete-se, parcial ou totalmente, a não
                    alterar, alugar, emprestar, emprestar, emprestar, vender, distribuir ou criar produtos derivados do Serviço
                    ou o Software, excepto no caso de o Provedor lhe ter dado permissão explícita por escrito para
                    fazê-lo. O Provedor concede-lhe um direito e autorização pessoal, intransmissível e não exclusivo.
                    para utilizar o código de trabalho do seu Software, desde que não copie ou altere qualquer código fonte,
                    ou criar um produto derivado do mesmo, ou realizar qualquer engenharia inversa ou montagem inversa em
                    tentar encontrar um código fonte (ou permitir a terceiros que o façam) (excepto se
                    e na medida em que tais actos sejam permitidos pelas disposições de qualquer lei obrigatória que possa estar em vigor),
                    e concorda em não vender, codificar, sublicenciar, onerar com direitos de segurança ou transferir em qualquer outro
                    de qualquer forma quaisquer direitos relacionados com o Software a qualquer pessoa ou entidade. Compromete-se a não alterar o
                    Software de qualquer forma ou para utilizar qualquer versão alterada do Software com o objectivo de obter
                    acesso não autorizado ao Serviço ou por qualquer outro motivo. Ao obter o acesso ao Serviço, o utilizador
                    comprometem-se apenas a fazer uso da interface fornecida para esse efeito pelo Provedor. O Provedor
                    concede-lhe autorização para fazer apenas uma cópia da Informação sobre o equipamento que utiliza para
                    ter acesso ao Serviço, e utilizar e exibir a cópia da Informação feita sobre esse equipamento
                    para fins privados.</p>
            </div>
        </div>
        <div id="privacy">
            <style>
                .footer {margin-top: 400px;}
                @media (max-width: 375px) {
                    .footer {margin-top: 400px;
                    }
                }
            </style>
            <div class="editor">
                <h2>Política de Privacidade</h2>
                <p>Atribuímos grande importância à privacidade dos seus utilizadores. Para garantir isto, criámos uma política que é inextricavelmente
                    ligado aos Termos e Condições Gerais do Provedor. Reconhece que o Prestador recolhe
                    e processou as Informações de Registo e informações sobre a sua utilização do Serviço, incluindo o pessoal
                    informações identificáveis aí contidas para os efeitos detalhados na Política de Privacidade. Como um
                    empresa, o Provedor vai cada vez mais além das fronteiras de um país.</p>


                <p>O Serviço é fornecido tal como está (na fase de desenvolvimento em que se encontra) e o Prestador aceita
                    não se responsabiliza nem emite quaisquer garantias ou garantias no caso de configurações pessoais,
                    as informações ou mensagens não são guardadas, ou não são guardadas no devido tempo, ou se são apagadas ou incorrectamente
                    entregue. Para subscrever o Serviço, é necessário ter acesso à Internet e/ou
                    uma assinatura de comunicações móveis e pagar quaisquer taxas de serviço associadas a tal acesso. É-lhe exigido
                    para pagar todas as despesas incorridas na criação desse acesso. É também responsável por assegurar a ligação
                    de qualquer equipamento necessário, incluindo qualquer telefone móvel ou computador pessoal ou quaisquer dispositivos que
                    pode ser necessário e estar em condições de funcionamento e ser adequado para utilização em ligação com o Serviço.</p>
                <br>
                <p>
                    <strong>Regras gerais</strong>
                    <br>
                    <br> Em relação à utilização do Serviço concorda com as regras gerais, regras de jogo, condições promocionais
                    e restrições estabelecidas pelo Prestador. O Provedor reserva-se o direito de, em qualquer altura e no seu
                    própria discrição, sem necessidade de notificação prévia, para alterar estas regras gerais, regras de
                    jogo, condições promocionais e restrições. O Provedor tem o direito de anular contas que tenham permanecido
                    inactivos durante períodos de tempo consideráveis. Concorda com o acordo pelo qual o Prestador suporta
                    nenhuma responsabilidade ou obrigação para consigo no caso de informações enviadas ou fornecidas através do
                    O serviço não é guardado ou é apagado por engano.</p>
                <br>
                <p>
                    <strong>INFORMAÇÕES GERAIS.</strong>
                    <br>
                    <br> Estes Termos e Condições Gerais tomam o lugar de todos os acordos anteriores entre si e o Prestador.
                    Se utilizar qualquer serviço, material ou software adicional de terceiros, Termos Gerais adicionais
                    e Condições podem ser-lhe aplicáveis. O direito europeu é aplicável à relação entre o cliente e
                    o Prestador, independentemente de quaisquer disposições de direito internacional aplicável. Os litígios serão submetidos
                    ao seu tribunal nacional competente. Qualquer falha por parte do Provedor em exercer ou invocar certos direitos ou
                    as estipulações estabelecidas nos Termos e Condições Gerais não constituem de modo algum uma renúncia ou renúncia
                    desses direitos ou estipulações. Se um tribunal de jurisdição competente for de opinião que qualquer estipulação
                    nos Termos e Condições Gerais não é aplicável, as partes concordam no entanto que o tribunal
                    deve tentar satisfazer os desejos das partes reflectidos por essa estipulação, enquanto as outras estipulações
                    dos Termos e Condições Gerais permanecem inalterados.</p>
                <br>
                <p>
                    <strong>SEGURANÇA E PROTECÇÃO.</strong>
                    <br>
                    <br> As infra-estruturas e programas são construídos e protegidos de tal forma que podem ser razoavelmente
                    presume-se que pessoas não autorizadas não podem ter acesso a qualquer informação sobre os utilizadores. Consulte por favor
                    os nossos Termos e Condições Gerais relativos à responsabilidade do Prestador.
                    <br>
                    <br> A aceitação desta política significa o Provedor:
                    <br>
                    <br> - pode utilizar as informações ou uma combinação das mesmas para executar o acordo entre si e o Provedor,
                    e para lhe permitir a melhor utilização possível do website do Provedor;
                    <br> - pode reutilizar as informações por si comunicadas no sítio ou via SMS;
                    <br> - pode informá-lo sobre ofertas, descontos, novos desenvolvimentos e serviços adicionais oferecidos pelo Prestador;
                    <br> - pode processar a informação relacionada com a formação ou manutenção de uma relação directa
                    entre o Provedor e/ou as empresas por ele seleccionadas e você para efeitos de recrutamento para fins comerciais
                    ou caridade. O Provedor pode anonimizar essa informação e utilizá-la ou oferecê-la a terceiros de forma anónima.
                    forma.
                    <br>
                    <br> A sua aceitação desta política
                    <br>
                    <br> Ao utilizar o Serviço do Provedor concorda com a presente Política de Privacidade e com os Termos e Condições Gerais.
                    Se não concordar com isto, não faça uso do nosso Serviço. Reservamo-nos o direito de, a qualquer momento, mudar,
                    modificar, alargar ou limitar esta Política de Privacidade e os Termos e Condições Gerais. Por conseguinte, aconselhamos
                    para ler estas páginas regularmente.</p>
            </div>            </div>


        <div id="faq">
            <style>
                .footer {margin-top: 400px;}
                @media (max-width: 375px) {
                    .footer {margin-top: 400px;
                    }
                }
            </style>
            <div class="editor">
                <h2>FAQ</h2><br>
                <strong>Qual é sua política de reembolso?</strong>
                <br><br>
                <p>Caso você não esteja satisfeito com o produto/serviço adquirido ou por qualquer outro motivo queira solicitar um reembolso, utilize o formulário de contato (hiperlink para formulário de contato) com uma solicitação de reembolso e procederemos de acordo.</p>
                <br>
                <strong>Seus produtos/serviços estão disponíveis em meu país?</strong><br><br>
                <p>Nossos produtos e serviços estão disponíveis globalmente, porém somente em alguns idiomas. Neste momento oferecemos nossos produtos em inglês, espanhol, francês, alemão e português.</p><br>
                <strong>Como posso cancelar a assinatura de seus serviços?</strong><br><br>
                <p>Você pode cancelar sua inscrição diretamente clicando no link no final de cada e-mail ou entrando em contato conosco através do formulário de contato com a solicitação de cancelamento de inscrição. Por favor, forneça o endereço de e-mail em questão. Você poderá ser solicitado a confirmar se este é o seu e-mail.</p><br>
                <strong>Quais são os custos de seus produtos/serviços?</strong><br><br>
                <p>Isto depende do produto. Por favor, verifique nossa loja para ver a visão geral dos produtos e os preços</p><br>
                <strong>Os depoimentos são reais?</strong><br><br>
                <p>Os testemunhos são reais e dados por clientes satisfeitos, mas não garantem que você terá a mesma experiência. </p>

            </div>       </div>
    </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!--Cartonbox popup-->
<script src="assets/js/cartonbox.min.js"></script>
<script src="assets/js/cartonbox-connect.js"></script>
<link rel="stylesheet" href="assets/css/cartonbox.min.css">
<!--Cartonbox popup-->

    <script type="text/javascript">
        var pageCount = 1;
        var pageCount_el_arr = $('.step__count span');
        var pageCount_el = pageCount_el_arr[0];
        pageCount_el.innerText = pageCount;

        $(".button-box").on("click", function () {
            var strsign = zodiacsignvar = $(this).data('sign');
            var yourSign = $('#yourSign');
            var path_to_yourSign = "assets/images/" + strsign + '.png';
            yourSign.attr('src', path_to_yourSign);
            yourSign.attr('alt', strsign);
            yourSign.attr('title', strsign);

            $('.sign-box__yourSign').removeClass('d-none');

            document.getElementById('yourSign').src = path_to_yourSign;

            $(".step_1").addClass('d-none');
            $("#step_2").removeClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;
        });
        /*********************** Step 2 ***********************/
        $("input[name='gender']").on("click", function () {
            var step_2 = $(this).val();
            $("#step_2").addClass('d-none');
            $("#step_3").removeClass('d-none');
            $("#step_2_error").addClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;

        });
        /*********************** Step 3 ***********************/
        $(".step_3_btn").on("click", function () {
            var step_3 = $('.day').val() + '-' + $('.month').val() + '-' + $('.year').val();
            if ($('.day').val() == '' || $('.month').val() == '' || $('.year').val() == '') {
                $("#step_3_error").html('Favor indicar a data completa');

            } else {
                $("#step_3_error").addClass('d-none');
                $("#step_3").addClass('d-none');
                $("#step_4").removeClass('d-none');
                pageCount++;
                pageCount_el.innerText = pageCount;
            }
        });
        /*********************** Step 4 ***********************/
        $(".step_4_btn").on("click", function () {
            var step_4 = $("input[name='city']").val();
            if (step_4 == '') {
                $("#step_4_error").html('Por favor preencha este campo');
            } else {
                $("#step_4_error").addClass('d-none');
                $("#step_4").addClass('d-none');
                $("#step_5").removeClass('d-none');
                pageCount++;
                pageCount_el.innerText = pageCount;
            }
        });
        /*********************** Step 5 ***********************/
        $("input[name='yesno']").on("click", function () {
            if ($("input[name='yesno'][value=2]").is(":checked")) {
                $("#step_5").addClass('d-none');
                $("#step_7").removeClass('d-none');
                $("#step_5_error").addClass('d-none');
                pageCount = pageCount + 2;
                pageCount_el.innerText = pageCount;
            } else {
                $("#step_5").addClass('d-none');
                $("#step_6").removeClass('d-none');
                $("#step_5_error").addClass('d-none');
                pageCount++;
                pageCount_el.innerText = pageCount;
            }
        });
        /*********************** Step 6 ***********************/
        $(".step_6_btn").on("click", function () {
            var step_6 = $(".hour").val() + ':' + $(".min").val();
            $("#step_6").addClass('d-none');
            $("#step_7").removeClass('d-none');
            $("#step_6_error").addClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;
        });
        /*********************** Step 7 ***********************/
        $("input[name='concerns']").on("click", function () {
            var step_7 = $("input[name='concerns']").val();
            $("#step_7").addClass('d-none');
            $("#step_8").removeClass('d-none');
            $("#step_7_error").addClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;
        });
        /*********************** Step 8 ***********************/
        $(".step_8_btn").on("click", function () {
            var fname = $("input[name='fname']").val();
            var lname = $("input[name='lname']").val();
            if (fname == '' || lname == '') {
                $("#step_8_error").html('Por favor preencha este campo');
            } else {
                $("#step_8").addClass('d-none');
                $("#step_9").removeClass('d-none');
                $("#step_8_error").addClass('d-none');
                pageCount++;
                pageCount_el.innerText = pageCount;
            }
        });
        /*********************** Step 9 ***********************/
        $(".step_9_btn").on("click", function () {
            var email = $("input[name='email']").val();
            var mail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(email);
            if (email == '') {
                $("#step_9_error").html('Por favor preencha este campo');
            } else if (mail != true) {
                $("#step_9_error").html('Por favor introduza um endereço de correio electrónico válido');
            } else {
                $("#step_9").addClass('d-none');
                $("#step_10").removeClass('d-none');
                pageCount++;
                pageCount_el.innerText = pageCount;
            }
            var step_1 = $('button-box').data('sign');
            var step_2 = $("input[name='gender']").val();
            var step_3 = $('.day').val() + '-' + $('.month').val() + '-' + $('.year').val();
            var step_4 = $("input[name='city']").val();
            var step_5 = $("input[name='yesno']").val();
            var step_6 = $(".hour").val() + ':' + $(".min").val();
            var step_7 = $("input[name='concerns']").val();
            var step_8 = $("input[name='fname']").val() + ' ' + $("input[name='lname']").val();
            var step_9 = $("input[name='email']").val();
        });

        // back btn script
        $(".step_9_prev").on("click", function () {
            $("#step_8").removeClass('d-none');
            $("#step_9").addClass('d-none');
            pageCount--;
            pageCount_el.innerText = pageCount;
        });
        $(".step_8_prev").on("click", function () {
            $("#step_7").removeClass('d-none');
            $("#step_8").addClass('d-none');
            pageCount--;
            pageCount_el.innerText = pageCount;
        });
        $(".step_7_prev").on("click", function () {
            if ($("input[name='yesno'][value=2]").is(":checked")) {
                $("#step_5").removeClass('d-none');
                $("#step_7").addClass('d-none');
                pageCount = pageCount - 2;
                pageCount_el.innerText = pageCount;
            } else {
                $("#step_6").removeClass('d-none');
                $("#step_7").addClass('d-none');
                pageCount--;
                pageCount_el.innerText = pageCount;
            }
        });
        $(".step_6_prev").on("click", function () {
            $("#step_5").removeClass('d-none');
            $("#step_6").addClass('d-none');
            pageCount--;
            pageCount_el.innerText = pageCount;
        });
        $(".step_5_prev").on("click", function () {
            $("#step_4").removeClass('d-none');
            $("#step_5").addClass('d-none');
            pageCount--;
            pageCount_el.innerText = pageCount;
        });
        $(".step_4_prev").on("click", function () {
            $("#step_3").removeClass('d-none');
            $("#step_4").addClass('d-none');
            pageCount--;
            pageCount_el.innerText = pageCount;
        });
        $(".step_3_prev").on("click", function () {
            $("#step_2").removeClass('d-none');
            $("#step_3").addClass('d-none');
            pageCount--;
            pageCount_el.innerText = pageCount;
        });
        $(".step_2_prev").on("click", function () {
            $(".step_1").removeClass('d-none');
            $("#step_2").addClass('d-none');
            pageCount--;
            pageCount_el.innerText = pageCount;
        });

        $(".step_2_btn").on("click", function () {
            $("#step_2").addClass('d-none');
            $("#step_3").removeClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;
        })

        $(".step_5_btn").on("click", function () {
            if ($("input[name='yesno'][value=2]").is(":checked")) {
                $("#step_5").addClass('d-none');
                $("#step_7").removeClass('d-none');
                pageCount= pageCount+2;
                pageCount_el.innerText = pageCount;
            } else {
                $("#step_5").addClass('d-none');
                $("#step_6").removeClass('d-none');
                pageCount++;
                pageCount_el.innerText = pageCount;
            }
        });
        $(".step_7_btn").on("click", function () {
            $("#step_7").addClass('d-none');
            $("#step_8").removeClass('d-none');
            pageCount++;
                pageCount_el.innerText = pageCount;
        });

        $("#nameForm").on("submit", function (e) {
            e.preventDefault();
            let json = {};
            $.each($('#nameForm').serializeArray(), function(i, field) {
                json[field.name] = field.value;
            });
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "signup.php",
                async: true,
                data: json,
                success: function (response) {
                     console.log(response);
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });

    </script>
    </body>
</html>
