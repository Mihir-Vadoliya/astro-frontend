<?php
require('../../../../../apbinom_click_api.php');
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
        
        <script src="https://api.pushnami.com/scripts/v1/push/628e169b792d285d2a28d0a4"></script>
        <link rel="manifest" href="/manifest.json">
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
                <a href=""><img src="assets/images/logo.png" alt="Astrology">
                </a>
            </div> 

        </div>

        <div class="mid-cirle">
            <div class="container">
                <form action="javascript:void(0);" method="post" id="nameForm">
                    
                    <input name="Contact0_roiCountry" type="hidden" value="">
                    <input type="hidden" name="signname" id="signname" value="">
                    
                    <input name="country" type="hidden" value="SP">
                    <input name="language" type="hidden" value="SP">
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
                                paso  <span id="step__count">1</span> de 10
                            </div>
                        </div>
                        <div class="mid-main-box">
                            <!---step-1-->
                            <div class="step__1 step_1">
                                <div class="step_1_head d-flex align-items-center mb-2  mb-lg-4 ">
                                    <div class="res_width">
                                        <img src="assets/images/Blanche.jpg" alt="Blanche" class="img-fluid rounded-circle">
                                    </div>
                                    <h2 class="text-start">seleccione su signo zodiacal</h2>
                                </div>

                                <p>Esta no es la lectura vaga y genérica que está acostumbrado a ver en las revistas y periódicos. Estos son
                                    <br><span>previsiones sorprendentes y gratuitas,</span> ¡que puede cambiar tu vida!</p>

                                <div class="button-box bev" data-bevent="1" data-sign="aries">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/aries.png" alt="aries" title="aries"></span>
                                            <span>Aries<span class="button-box__span-name">Mar 21 - Abr 20</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="2" data-sign="taurus">
                                    <div class="sign-box">
                                        <a href="#">
                                            <a href="#">
                                                <span class="sign-box__img"><img src="assets/images/taurus.png" alt="taurus" title="taurus"></span>
                                                <span>Touro<span class="button-box__span-name">Abr 21 - May 20</span></span>
                                            </a>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="3" data-sign="gemini">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/gemini.png" alt="gemini" title="gemini"></span>
                                            <span>Mellizos<span class="button-box__span-name">May 21 - Jun 20</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="4" data-sign="cancer">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/cancer.png" alt="cancer" title="cancer"></span>
                                            <span>Cáncer<span class="button-box__span-name">Jun 21 - Jul 22</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="5" data-sign="leo">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/leo.png" alt="leo" title="leo"></span>
                                            <span>León<span class="button-box__span-name">Jul 23 - Ago 22</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="6" data-sign="virgo">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/virgo.png" alt="virgo" title="virgo"></span>
                                            <span>Virgem<span class="button-box__span-name">Ago 23 - Sep 21</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="7" data-sign="libra">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/libra.png" alt="libra" title="libra"></span>
                                            <span>Báscula<span class="button-box__span-name">Sep 22 - Oct 20</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="8" data-sign="scorpio">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/scorpio.png" alt="scorpio" title="scorpio"></span>
                                            <span>Escorpión<span class="button-box__span-name">Oct 21 - Nov 20</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="9" data-sign="sagittarius">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/sagittarius.png" alt="sagittarius" title="sagittarius"></span>
                                            <span>Sagitario<span class="button-box__span-name">Nov 21 - Dic 21</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="10" data-sign="capricorn">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/capricorn.png" alt="capricorn" title="capricorn"></span>
                                            <span>Capricornio<span class="button-box__span-name">Dic 22 - ene 21</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="11" data-sign="aquarius">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/aquarius.png" alt="aquarius" title="aquarius"></span>
                                            <span>Acuario<span class="button-box__span-name">ene 22 - Feb 18</span></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="button-box bev" data-bevent="12" data-sign="pisces">
                                    <div class="sign-box">
                                        <a href="#">
                                            <span class="sign-box__img"><img src="assets/images/pisces.png" alt="pisces" title="pisces"></span>
                                            <span>Peces<span class="button-box__span-name">Feb 19 - Mar 20</span></span>
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
                                            <h6 class="font-36 color-e33afc">Cuál es su género?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">

                                                <div class="col-6 text-center">
                                                    <label class="choose_gender_btn">
                                                        <img src="assets/images/male.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                        <span class=" position-relative z-index-1 montserrat text-white  medium font24">Hombre</span><br>
                                                        <input type="radio" name="gender" value="M" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6">
                                                    <label class="choose_gender_btn">
                                                        <img src="assets/images/woman.png" class="position-relative z-index-1 me-1 me-lg-3">
                                                        <span class=" position-relative z-index-1 montserrat text-white  medium font24">Mujeres</span><br>
                                                        <input type="radio" name="gender" value="F">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <span class="error" id="step_2_error"></span>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_2_btn" type="button">Continuar  >></button>
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
                                            <h6 class="font-36 color-e33afc">Bien! Cuando nacio?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12">
                                                    <div class="row justify-content-center">
                                                        <div class="col-4">
                                                            <select name="day" class="form-select born_input_field font24 medium montserrat text-black day" aria-label="Default select example ">
                                                                <option value="" selected="selected">diámetro</option>
                                                                <?php 
                                                                for($i=1;$i<=31;$i++):
                                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                                endfor;
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <select name="month" class="form-select born_input_field font24 medium montserrat text-black month" aria-label="Default select example ">
                                                                <option value="" selected="selected">Mes</option>
                                                                <?php 
                                                                for($i=1;$i<=12;$i++):
                                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                                endfor;
                                                                ?>                                        
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <select name="year" class="form-select born_input_field font24 medium montserrat text-black year" aria-label="Default select example ">
                                                                <option value="" selected="selected">Sí</option>
                                                                <?php 
                                                                for($i=1940;$i<=2002;$i++):
                                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                                endfor;
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <span class="error" id="step_3_error"></span>
                                                    </div>
                                                    <p class="date_text color-e33afc font-16">Esto ayudará a que su clarividencia sea más precisa.</p>
                                                </div>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_3_btn" type="button">Continuar  >></button>
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
                                            <h6 class="font-36 color-e33afc">En qué ciudad/ciudad naciste?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12 text-center">
                                                    <input type="text" placeholder="Por favor ingrese su ciudad" name="city" class="city_filed font24 medium montserrat text-center text-black">
                                                    <span class="error" id="step_4_error"></span>
                                                </div>
                                                <p class="date_text color-e33afc font-16">Esto ayudará a que su clarividencia sea más precisa.</p>
                                            </div>
                                            <button class="btn_1 btn_1__scip step_4_btn" type="button">Continuar  >></button>
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
                                            <h6 class="font-36 color-e33afc">Sabes a qué hora naciste?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12 text-center">
                                                    <ul class="list-inline list-unstyled flex-columb">
                                                        <li class="list-inline-item">
                                                            <label class="choose_yesno_btn">
                                                                <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">Sí</span><br>
                                                                <input type="radio" name="yesno" value="1" checked >
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <label class="choose_yesno_btn">
                                                                <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">No</span><br>
                                                                <input type="radio" name="yesno" value="2">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <p class="date_text color-e33afc font-16">Esto ayudará a que su clarividencia sea más precisa.</p>
                                                </div>
                                                <button class="btn_1 btn_1__scip step_5_btn" type="button">Continuar  >></button>
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
                                            <h6 class="font-36 color-e33afc">Introduzca las horas y los minutos de la forma más exacta posible.</h6>
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
                                                <button class="btn_1 btn_1__scip step_6_btn" type="button">Continuar  >></button>
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
                                            <h6 class="font-36 color-e33afc">Cuáles son tus preocupaciones?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-6  mb-10">
                                                    <label class="choose_concerns_btn">
                                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Trabajo</span><br>
                                                        <input type="radio" name="concerns" value="1"  checked >
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6  mb-10">
                                                    <label class="choose_concerns_btn">

                                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">Finanzas</span><br>
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

                                                        <span class=" position-relative z-index-1  montserrat  medium font24 text-white">General</span><br>
                                                        <input type="radio" name="concerns" value="4">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <button class="btn_1 btn_1__scip step_7_btn" type="button">Continuar  >></button>
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
                                            <h6 class="font-36 color-e33afc">Cual es tu nombre?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-6">
                                                    <input type="text" placeholder="Primer nombre" name="fname" class="born_input_field font24 medium montserrat text-white">
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" placeholder="Apellido" name="lname" class="born_input_field font24 medium montserrat text-white">
                                                </div>
                                                <span class="error" id="step_8_error"></span>
                                                <button class="btn_1 btn_1__scip step_8_btn" type="button">Continuar  >></button>
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
                                            <h6 class="font-36 color-e33afc">Dónde quieres conseguir tu videncia personalizada?</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="row justify-content-center py-50">
                                                <div class="col-12 col-md-10">
                                                    <input type="email" placeholder="correo electrónico" name="email" class="born_input_field font24 medium montserrat text-black input-email" required="">
                                                    <span class="error" id="step_9_error"></span>
                                                </div>
                                                <div class="col-12 pt-50 text-center">
                                                    <!-- <a  href="javascript:void(0);" class="continue_btn montserrat medium font20  text-decoration-none text-center d-inline-block w-100  px-5 text-white step_9_next step_9_btn">
                                                         Obtenha a minha clarividência
                                                    </a> -->
                                                </div>
                                                <!--  <p class="date_text color-e33afc font-16">Isto irá ajudar a tornar a sua clarividência mais precisa.</p> -->
                                                <button class="btn_1 btn_1__scip step_9_btn" type="submit">Continuar  >></button>
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
                                                    <h4 class="text-md-start text-white font-18  mb-3 montserrat fw-normal">Tu confianza me toca profundamente.</h4>
                                                    <h3 class="text-md-start  text-white font-20 fw-bold montserrat  mb-0">Iré directamente a trabajar para ti.
                                                        Mi respuesta te llegará en las próximas horas.</h3>
                                                </div>
                                            </div>
                                            <div class="bg-text-new1 mb-4 text-start">
                                                <p class="text-white font-16 montserrat fw-bold  text-md-start mb-4 ">Entra ahora a tu bandeja de entrada y descubre los regalos que te prometí: - Tu Chequeo de Energía Positiva - Tu Talismán de Protección Absoluta de 7 días
                                                </p>
                                                <ul class="list-inline list-unstyled mb-0">
                                                    <li class="text-white inbox-step-1 mb-2 font18 montserrat semibold">1. Ve a tu bandeja de entrada</li>
                                                    <li class="text-white inbox-step-1 mb-2 font18 montserrat semibold">2. Revisa tu bandeja de entrada o spam</li>
                                                    <li class="text-white inbox-step-1 font18 montserrat semibold">3.Abre mi correo electrónico y accede a tus regalos de bienvenida.</li>
                                                </ul>

                                            </div>
                                            <p class="montserrat font18 text-white mb-1 pt-4 semibold text-md-start mb-4 ">Tu devoto amigo,</p>
                                            <p class="montserrat font18 text-white semibold text-md-start mb-4 pb-2">Blanche</p>
                                            <div class="bg-text-new1">
                                                <p class="text-white font18 montserrat fw-normal text-md-start">PD Para que tu confianza en mí sea merecida, quiero que sepas que respeto la normativa sobre privacidad y acceso a tus datos personales. Está todo aquí, en mi Política de Privacidad.
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
            <li><a href="">Home</a></li>
            <li><a href="#terms" class="cartonbox" data-cb-type="inline" data-cb-hash="text">Condiciones del servicio</a></li>
            <li><a href="#privacy" class="cartonbox" data-cb-type="inline" data-cb-hash="text">Política de privacidad</a></li>
            <li><a href="#gdpr" class="cartonbox" data-cb-type="inline" data-cb-hash="text">GDPR</a></li>
            <li><a href="#faq" class="cartonbox" data-cb-type="inline" data-cb-hash="text">FAQ</a></li>
        </ul>
    </div>

    <div style="display: none;">
        <div id="terms">
            <div class="editor">	
                <h2>Términos y Condiciones</h2>
                
                <p>
                    Estos términos y condiciones ("Acuerdo") establecen los términos y condiciones que rigen el uso del sitio web astrology-lotus.com ("Sitio web" o "Servicio") y cualquiera de sus productos y servicios relacionados (colectivamente, "Servicios") . Este acuerdo es legalmente vinculante entre usted ("Usuario", "usted" o "su") y astrology-lotus es una marca comercial de Astroveo B.V. ("astrology-lotus es una marca comercial de Astroveo B.V.", "nosotros", "nos" o "nuestro"). Si está celebrando este acuerdo en nombre de una empresa u otra entidad legal, declara que tiene la autoridad para obligar a dicha entidad a este acuerdo, en cuyo caso los términos "Usuario", "usted" o "su" se referirán a tal entidad. Si no tiene dicha autoridad, o si no está de acuerdo con los términos de este acuerdo, no debe aceptar este acuerdo y no puede acceder ni utilizar el sitio web y los servicios. Al acceder y utilizar el sitio web y los servicios, usted reconoce que ha leído, entendido y acepta estar sujeto a los términos de este Acuerdo. Usted reconoce que este Acuerdo es un contrato entre usted y astrology-lotus es una marca comercial de Astroveo B.V., incluso si es electrónico y no está firmado físicamente por usted, y rige su uso del sitio web y los servicios. no debe aceptar este acuerdo y no debe acceder ni utilizar el sitio web y los servicios. Al acceder y utilizar el sitio web y los servicios, usted reconoce que ha leído, entendido y acepta estar sujeto a los términos de este Acuerdo. Usted reconoce que este Acuerdo es un contrato entre usted y astrology-lotus es una marca comercial de Astroveo B.V., incluso si es electrónico y no está firmado físicamente por usted, y rige su uso del sitio web y los servicios. no debe aceptar este acuerdo y no debe acceder ni utilizar el sitio web y los servicios. Al acceder y utilizar el sitio web y los servicios, usted reconoce que ha leído, entendido y acepta estar sujeto a los términos de este Acuerdo. Usted reconoce que este Acuerdo es un contrato entre usted y astrology-lotus es una marca comercial de Astroveo B.V., incluso si es electrónico y no está firmado físicamente por usted, y rige su uso del sitio web y los servicios.
                </p><br>
                <p>
                   <strong>Edad requerida</strong>&nbsp;<br><br>
                    Debe tener al menos 18 años para utilizar el sitio web y los servicios. Al usar el sitio web y los servicios y al aceptar este Acuerdo, usted garantiza y declara que tiene al menos 18 años de edad.<br><br>
                    <strong>Facturación y pagos</strong>&nbsp;<br><br>
                    Debe pagar todas las tarifas o cargos en su cuenta de acuerdo con las tarifas, cargos y términos de facturación vigentes en el momento en que una tarifa o cargo vence y es pagadero. Cuando los Servicios se ofrecen en un período de prueba gratuito, es posible que se requiera el pago después de que finalice el período de prueba gratuito, y no cuando ingrese su información de facturación (que puede ser necesaria antes del inicio del período de prueba gratuito). Si, en nuestra opinión, su compra constituye una transacción de alto riesgo, le pediremos que nos proporcione una copia de su identificación con foto válida emitida por el gobierno y, opcionalmente, una copia de un extracto bancario reciente de la tarjeta de crédito o débito utilizada. para la compra ha sido utilizado. Nos reservamos el derecho de cambiar los productos y los precios de los productos en cualquier momento. También nos reservamos el derecho de rechazar cualquier pedido que realice con nosotros. Podemos, a nuestro exclusivo criterio, limitar o cancelar las cantidades compradas por persona, por hogar o por pedido. Estas restricciones pueden aplicarse a pedidos realizados por o bajo la misma cuenta de cliente, tarjeta de crédito y/o pedidos utilizando la misma dirección de facturación y/o envío. En el caso de que cambiemos o cancelemos un pedido, podemos intentar notificarlo poniéndonos en contacto con la dirección de correo electrónico y/o la dirección de facturación/número de teléfono que proporcionó en el momento del pedido. También nos reservamos el derecho de rechazar cualquier pedido que realice con nosotros. Podemos, a nuestro exclusivo criterio, limitar o cancelar las cantidades compradas por persona, por hogar o por pedido. Estas restricciones pueden aplicarse a pedidos realizados por o bajo la misma cuenta de cliente, tarjeta de crédito y/o pedidos utilizando la misma dirección de facturación y/o envío. En el caso de que cambiemos o cancelemos un pedido, podemos intentar notificarlo poniéndonos en contacto con la dirección de correo electrónico y/o la dirección de facturación/número de teléfono que proporcionó en el momento del pedido. También nos reservamos el derecho de rechazar cualquier pedido que realice con nosotros. Podemos, a nuestro exclusivo criterio, limitar o cancelar las cantidades compradas por persona, por hogar o por pedido. Estas restricciones pueden aplicarse a pedidos realizados por o bajo la misma cuenta de cliente, tarjeta de crédito y/o pedidos utilizando la misma dirección de facturación y/o envío. En el caso de que cambiemos o cancelemos un pedido, podemos intentar notificarlo poniéndonos en contacto con la dirección de correo electrónico y/o la dirección de facturación/número de teléfono que proporcionó en el momento del pedido. Estas restricciones pueden aplicarse a pedidos realizados por o bajo la misma cuenta de cliente, tarjeta de crédito y/o pedidos utilizando la misma dirección de facturación y/o envío. En el caso de que cambiemos o cancelemos un pedido, podemos intentar notificarlo poniéndonos en contacto con la dirección de correo electrónico y/o la dirección de facturación/número de teléfono que proporcionó en el momento del pedido. Estas restricciones pueden aplicarse a pedidos realizados por o bajo la misma cuenta de cliente, tarjeta de crédito y/o pedidos utilizando la misma dirección de facturación y/o envío. En el caso de que cambiemos o cancelemos un pedido, podemos intentar notificarlo poniéndonos en contacto con la dirección de correo electrónico y/o la dirección de facturación/número de teléfono que proporcionó en el momento del pedido.<br><br>
                    <strong>Exactitud de la información</strong>&nbsp;<br><br>
                    De vez en cuando, puede haber información en el sitio web que contenga errores tipográficos, inexactitudes u omisiones que puedan estar relacionadas con descripciones de productos, precios, promociones y ofertas. Nos reservamos el derecho de corregir cualquier error, inexactitud u omisión y de cambiar o actualizar la información o cancelar pedidos si alguna información en el sitio web o los servicios es incorrecta en cualquier momento y sin previo aviso (incluso después de enviar su pedido). No asumimos ninguna obligación de actualizar, cambiar o aclarar la información en el sitio web, incluida, entre otras, la información de precios, excepto según lo exija la ley.<br><br>
                    <strong>Servicios de terceros</strong>&nbsp;<br><br>
                    Si decide habilitar, acceder o utilizar servicios de terceros, se le informa que su acceso y uso de dichos otros servicios se rigen únicamente por los términos y condiciones de dichos otros servicios, y no respaldamos, no somos responsables de , y no hace representaciones ni representaciones sobre ningún aspecto de dichos otros servicios, incluidos, entre otros, su contenido o la forma en que manejan los datos (incluidos sus datos) o cualquier interacción entre usted y el proveedor de tales otros servicios. Usted renuncia irrevocablemente a cualquier reclamo contra astrology-lotus es una marca comercial de Astroveo B.V. con respecto a dichos otros servicios. astrology-lotus es una marca comercial de Astroveo B.V. no es responsable de ningún daño o pérdida causado o supuestamente causado por o en relación con su compromiso, acceso o uso de tales otros servicios, o su confianza en las prácticas de privacidad, procesos de seguridad de datos u otras políticas de tales otros servicios. Es posible que deba registrarse o iniciar sesión en otros servicios en sus respectivas plataformas. Al habilitar otros servicios, usted autoriza expresamente a astrology-lotus es una marca comercial de Astroveo B.V. a divulgar su información según sea necesario para facilitar el uso o la habilitación de dicho otro servicio. o su confianza en las prácticas de privacidad, los procesos de seguridad de datos u otras políticas de dichos otros servicios. Es posible que deba registrarse o iniciar sesión en otros servicios en sus respectivas plataformas. Al habilitar otros servicios, usted autoriza expresamente a astrology-lotus es una marca comercial de Astroveo B.V. a divulgar su información según sea necesario para facilitar el uso o la habilitación de dicho otro servicio. o su confianza en las prácticas de privacidad, los procesos de seguridad de datos u otras políticas de dichos otros servicios. Es posible que deba registrarse o iniciar sesión en otros servicios en sus respectivas plataformas. Al habilitar otros servicios, usted autoriza expresamente a astrology-lotus es una marca comercial de Astroveo B.V. a divulgar su información según sea necesario para facilitar el uso o la habilitación de dicho otro servicio.<br><br>
                    <strong>Garantía de disponibilidad</strong>&nbsp;<br><br>
                    Ofrecemos una garantía de tiempo de actividad del Servicio del 99% del tiempo disponible por mes. Si no podemos mantener esta garantía de tiempo de actividad del servicio en un mes determinado (según lo determinemos a nuestro exclusivo criterio), puede comunicarse con nosotros y solicitar un crédito en sus tarifas de servicio para ese mes. El crédito solo se puede utilizar para la compra de otros productos y servicios de nosotros, y no incluye ningún impuesto aplicable. La garantía de tiempo de actividad del servicio no se aplica a las interrupciones del servicio causadas por: (1) reparaciones o mantenimiento programado periódico que podemos realizar de vez en cuando; (2) interrupciones causadas por usted o sus actividades; (3) interrupciones que no afectan la funcionalidad principal del Servicio; (4) causas fuera de nuestro control o que no son razonablemente previsibles; y (5) interrupciones relacionadas con la confiabilidad de ciertos entornos de programación.<br><br>
                    <strong>Enlaces a otros recursos</strong>&nbsp;<br><br>
                    Aunque el sitio web y los servicios pueden vincularse a otros recursos (como sitios web, aplicaciones móviles, etc.), no implicamos, directa o indirectamente, ningún respaldo, asociación, patrocinio, respaldo o afiliación con ningún recurso vinculado, excepto como expresamente declarado en este documento. Algunos de los enlaces del Sitio Web pueden ser "enlaces de afiliados". Esto significa que si hace clic en el enlace y compra un artículo, astrology-lotus es una marca registrada de Astroveo B.V. recibirá una comisión de afiliado. No somos responsables de investigar o evaluar, y no garantizamos las ofertas de empresas o individuos ni el contenido de sus recursos. No aceptamos ninguna responsabilidad por las acciones, productos, servicios y contenido de otros terceros. Debe revisar cuidadosamente las declaraciones legales y otros términos de uso de cualquier fuente a la que acceda a través de un enlace en el sitio web. La vinculación a otros recursos fuera del sitio es bajo su propio riesgo.<br><br>
                    <strong>Renuncia de garantía</strong>&nbsp;<br><br>
                    Usted acepta que este Servicio se proporciona "tal cual" y "según disponibilidad" y que su uso del Sitio web y los Servicios es bajo su propio riesgo. Renunciamos expresamente a todas las garantías de cualquier tipo, ya sean expresas o implícitas, incluidas, entre otras, las garantías implícitas de comerciabilidad, idoneidad para un propósito particular y no infracción. No garantizamos que los Servicios cumplan con sus requisitos, o que el Servicio sea ininterrumpido, oportuno, seguro o libre de errores; ni ofrecemos ninguna garantía en cuanto a los resultados que se pueden obtener del uso del Servicio o en cuanto a la precisión o confiabilidad de cualquier información obtenida a través del Servicio o que se corregirán los defectos en el Servicio. Usted comprende y acepta que cualquier material y/o datos que descargue u obtenga de otro modo a través del uso del Servicio es bajo su exclusivo criterio y riesgo y que usted es el único responsable de cualquier daño o pérdida de datos que surja de la descarga de dicho material y/ o datos. No ofrecemos ninguna garantía con respecto a los bienes o servicios comprados u obtenidos a través del Servicio o cualquier transacción realizada a través del Servicio, a menos que se indique lo contrario. Sin consejos ni información,<br><br>
                    <strong>Cambios y Ajustes</strong>&nbsp;<br><br>
                    Nos reservamos el derecho de cambiar este Acuerdo o los términos y condiciones relacionados con el Sitio web y los Servicios en cualquier momento a nuestro exclusivo criterio. Cuando lo hagamos, revisaremos la fecha actualizada en la parte inferior de esta página. También podemos notificarle de otras maneras a nuestra discreción, como a través de la información de contacto que ha proporcionado. Una versión actualizada de este Acuerdo entrará en vigencia inmediatamente después de la publicación del Acuerdo revisado, a menos que se indique lo contrario. Su uso continuado del sitio web y los servicios después de la fecha de vigencia del Acuerdo revisado (u otra acción indicada en ese momento) constituye su aceptación de esos cambios.<br><br>
                    <strong>Aceptación de estos términos</strong>&nbsp;<br><br>
                    Usted reconoce que ha leído este Acuerdo y acepta todos sus términos y condiciones. Al acceder y utilizar el sitio web y los servicios, usted acepta estar sujeto a este Acuerdo. Si no está de acuerdo con los términos de este Acuerdo, no está autorizado para acceder o utilizar el sitio web y los servicios.<br><br>
                    <strong>Para contactarnos</strong>&nbsp;<br><br>
                    Si tiene alguna pregunta, inquietud o queja con respecto a este Acuerdo, comuníquese con nosotros utilizando los detalles a continuación:<br>
                    https://astrology-lotus.com/contac<br>
                    Este documento fue actualizado por última vez el 26 de abril de 2022
                </p>
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
                <h2>Política de privacidad</h2>
                <p>Respetamos su privacidad y nos comprometemos a protegerla mediante el cumplimiento de esta Política de privacidad ("Política"). Esta política describe los tipos de información que podemos recopilar de usted o que usted puede proporcionar ("Información personal") en el sitio web astrology-lotus.com ("Sitio web" o "Servicio") y cualquiera de sus productos y servicios relacionados ( colectivamente, "Servicios"), y nuestras prácticas para recopilar, usar, mantener, proteger y divulgar esa Información personal. También describe las opciones disponibles para usted con respecto a nuestro uso de su información personal y cómo puede acceder a ella y actualizarla.</p><br>

                <p>Esta política es un acuerdo legalmente vinculante entre usted ("Usuario", "usted" o "su") y astrology-lotus es una marca registrada de Astroveo B.V. ("astrology-lotus es una marca registrada de Astroveo B.V.", "nosotros ", "nosotros" o "nuestro"). Si está celebrando este acuerdo en nombre de una empresa u otra entidad legal, declara que tiene la autoridad para obligar a dicha entidad a este acuerdo, en cuyo caso los términos "Usuario", "usted" o "su" se referirán a tal entidad. Si no tiene dicha autoridad, o si no está de acuerdo con los términos de este acuerdo, no debe aceptar este acuerdo y no puede acceder ni utilizar el sitio web y los servicios. Al acceder y utilizar el sitio web y los servicios, usted reconoce que ha leído, entendido y acepta estar sujeto a los términos de esta Política. Esta Política no se aplica a las prácticas de las empresas que no poseemos ni controlamos, ni a las personas que no empleamos ni administramos.</p><br>

                <p>
                    <br><strong>Recopilación automática de información</strong>
                    <br>
                    <br> Cuando accede al Sitio Web, nuestros servidores registran automáticamente la información que envía su navegador. Estos datos pueden incluir información como la dirección IP de su dispositivo, el tipo y la versión de su navegador, el tipo y la versión de su sistema operativo, las preferencias de idioma o la página web que visitó antes de ingresar al Sitio web y los Servicios, las páginas del El sitio web y los servicios que visita, el tiempo que pasa en esas páginas, la información que busca en el sitio web, las horas y fechas de acceso y otras estadísticas.
                </p>

                <p>
                    <br><strong>Recopilación de información personal</strong>
                    <br>
                    <br> Puede acceder y utilizar el sitio web y los servicios sin decirnos quién es ni proporcionar ninguna información que permita que alguien lo identifique como un individuo específico e identificable. Sin embargo, si desea aprovechar algunas de las funciones que se ofrecen en el sitio web, se le puede solicitar que proporcione cierta información personal (por ejemplo, su nombre y dirección de correo electrónico).
                    <br>
                    Recibimos y almacenamos cualquier información que nos proporcione a sabiendas cuando realiza una compra o completa formularios en el sitio web. Esta información puede incluir, si es necesario: - Información de contacto (como dirección de correo electrónico, número de teléfono, etc.) - Información personal básica (como nombre, país de residencia, etc.) - Datos de geolocalización de su dispositivo (como latitud y longitud)
                    <br>
                    Puede optar por no proporcionarnos su información personal, pero es posible que no pueda utilizar algunas funciones del sitio web. Los usuarios que no estén seguros de qué información se requiere pueden contactarnos.

                    </p>

                <p>
                    <br><strong>Privacidad infantil</strong>
                    <br>
                    <br> No recopilamos a sabiendas información personal de niños menores de 18 años. Si es menor de 18 años, no proporcione información personal a través del sitio web y los servicios. Si tiene motivos para creer que un niño menor de 18 años nos ha proporcionado Información personal a través del sitio web y los Servicios, comuníquese con nosotros para solicitar que eliminemos la Información personal de ese niño de nuestros Servicios.
                    <br>
                    Alentamos a los padres y tutores legales a controlar el uso de Internet de sus hijos y ayudar a hacer cumplir esta Política instruyendo a sus hijos para que nunca proporcionen información personal a través del sitio web y los servicios sin su consentimiento. También solicitamos que todos los padres y tutores legales que supervisan el cuidado de los niños tomen las precauciones necesarias para garantizar que se les indique a sus hijos que nunca proporcionen información personal cuando estén en línea sin su consentimiento.
                </p>
                <p>
                    <br><strong>Uso y procesamiento de la información recopilada</strong>
                    <br><br>
                    Actuamos como controlador de datos y procesador de datos en el sentido del RGPD cuando manejamos Datos personales, a menos que tengamos un acuerdo de procesamiento de datos con usted, en cuyo caso usted es el controlador de datos y nosotros somos el procesador de datos.
                    <br>
                    Nuestro papel también puede diferir dependiendo de la situación específica que involucre la Información personal. Actuamos como controlador de datos cuando le solicitamos que envíe sus Datos personales necesarios para garantizar su acceso y uso del sitio web y los servicios. En tales casos, somos un controlador de datos porque determinamos los propósitos y medios del procesamiento de Datos personales y cumplimos con las obligaciones de los controladores de datos según lo establecido en el RGPD.
                    <br>
                    Actuamos como un procesador de datos en situaciones en las que proporciona datos personales a través del sitio web y los servicios. No poseemos, controlamos ni tomamos ninguna decisión sobre los Datos personales enviados, y dichos Datos personales solo se procesarán de acuerdo con sus instrucciones. En tales casos, el Usuario que proporciona Datos personales actúa como controlador de datos en el sentido del RGPD.
                    <br>
                    Para que el sitio web y los servicios estén disponibles para usted, o para cumplir con una obligación legal, es posible que debamos recopilar y utilizar cierta información personal. Si no proporciona la información que solicitamos, es posible que no podamos brindarle los productos o servicios solicitados. Cualquier información que recopilamos de usted puede ser utilizada para los siguientes propósitos:
                    <br>
                    - Cumplir y administrar pedidos - Entregar productos o servicios - Enviar información administrativa - Responder preguntas y brindar soporte - Mejorar la experiencia del usuario - Publicar testimonios de clientes - Administrar y operar el sitio web y los servicios
                    <br>
                    El procesamiento de sus Datos personales dependerá de cómo interactúe con el Sitio web y los Servicios, en qué lugar del mundo se encuentre y si se aplica alguno de los siguientes: (i) ha dado su consentimiento para uno o más propósitos específicos; sin embargo, esto no se aplica cuando el procesamiento de Datos Personales está sujeto a la Ley de Privacidad del Consumidor de California o la ley europea de protección de datos; (ii) el suministro de información es necesario para la ejecución de un contrato con usted y/o para cualquier obligación precontractual del mismo; (iii) el procesamiento es necesario para el cumplimiento de una obligación legal a la que está sujeto; (iv) el procesamiento está relacionado con una tarea realizada en interés público o en el ejercicio de la autoridad oficial que se nos ha conferido; (v) el procesamiento es necesario para los fines de los intereses legítimos perseguidos por nosotros o por un tercero.
                    <br>
                    Nos basamos en las siguientes bases legales, tal como se definen en el RGPD, en las que recopilamos y procesamos sus Datos personales:
                </p>
                <p>
                    <br><strong>- Consentimiento del usuario</strong>
                    <br><br>
                    Tenga en cuenta que, según algunas leyes, se nos permite procesar información hasta que se oponga a dicho procesamiento al optar por no participar, sin tener que depender del consentimiento o cualquier otra base legal anterior. En cualquier caso, estaremos encantados de explicarle qué base legal específica se aplica al procesamiento y, en particular, si el suministro de Datos personales es un requisito legal o contractual, o un requisito necesario para celebrar un contrato.
                </p>
                <p>
                    <br><strong>Procesamiento de pagos</strong>
                    <br><br>
                    En el caso de los Servicios que requieren pago, es posible que deba proporcionar la información de su tarjeta de crédito u otra información de la cuenta de pago, que se utilizará únicamente para el procesamiento de pagos. Utilizamos procesadores de pago de terceros ("Procesadores de pago") para ayudarnos a procesar su información de pago de forma segura.
                    <br>
                    Los procesadores de pago cumplen con los últimos estándares de seguridad administrados por el PCI Security Standards Council, un esfuerzo conjunto de marcas como Visa, MasterCard, American Express y Discover. El intercambio de datos confidenciales y privados se lleva a cabo a través de un canal de comunicación seguro SSL y está encriptado y protegido con firmas digitales, y el sitio web y los servicios también cumplen con estrictos estándares de vulnerabilidad para crear el entorno más seguro para los usuarios. Solo compartiremos información de pago con los Procesadores de pago en la medida necesaria para procesar sus pagos, reembolsar dichos pagos y manejar quejas y consultas sobre dichos pagos y reembolsos.
                    <br>
                    Tenga en cuenta que los Procesadores de pago pueden recopilar ciertos Datos personales de usted, lo que les permite procesar sus pagos (por ejemplo, su dirección de correo electrónico, dirección, detalles de la tarjeta de crédito y número de cuenta bancaria) y completar todos los pasos del proceso de pago a través de sus sistemas, incluidos recopilación y procesamiento de datos. El uso que los Procesadores de pago hacen de su Información personal se rige por sus respectivas políticas de privacidad, que pueden o no incluir protecciones de privacidad tan protectoras como esta Política. Le recomendamos que consulte sus respectivas políticas de privacidad.
                </p>
                <p>
                    <br><strong>Divulgación de información</strong>
                    <br><br>
                    Dependiendo de los Servicios solicitados o según sea necesario para completar una transacción o proporcionar un Servicio que haya solicitado, podemos compartir su información con nuestras subsidiarias de confianza y socios de empresas conjuntas, afiliados, empresas contratadas y proveedores de servicios (colectivamente, "Proveedores de servicios"). en el que confiamos para ayudar en el funcionamiento del sitio web y los servicios disponibles para usted cuyas políticas de privacidad son consistentes con las nuestras o que aceptan cumplir con nuestras políticas con respecto a la información personal. No compartiremos información con terceros no afiliados.
                    <br>
                    Los proveedores de servicios no están autorizados a usar o divulgar su información, excepto cuando sea necesario para realizar servicios en nuestro nombre o para cumplir con los requisitos legales. Los proveedores de servicios reciben la información que necesitan solo para realizar sus funciones designadas, y no los autorizamos a usar o divulgar la información proporcionada para su propio marketing u otros fines. Solo compartiremos y divulgaremos su información con las siguientes categorías de proveedores de servicios:
                    <br>
                    - Programas de afiliados<br>
                    - Procesadores de pago
                </p>
                <p>
                    <br><strong>Retención de información</strong>
                    <br><br>
                    Retendremos y utilizaremos su información personal durante el tiempo que sea necesario para cumplir con nuestras obligaciones legales, hacer cumplir nuestros acuerdos, resolver disputas y, a menos que la ley exija o permita un período de retención más largo.
                    <br>
                    Podemos utilizar datos agregados derivados de o en los que se hayan procesado sus Datos personales después de que los actualice o elimine, pero no de una manera que lo identifique personalmente. Una vez que haya expirado el período de retención, los Datos personales se eliminarán. Por lo tanto, el derecho de acceso, el derecho a la supresión, el derecho a la rectificación y el derecho a la portabilidad de los datos no se pueden hacer valer después de la expiración del plazo de conservación.
                </p>
                <p>
                    <br><strong>Transferencia de información</strong>
                    <br><br>
                    Dependiendo de su ubicación, la transferencia de datos puede implicar la transferencia y el almacenamiento de su información en un país que no sea el suyo. Sin embargo, los países fuera de la Unión Europea y el Espacio Económico Europeo no están cubiertos. Si se produce dicha transferencia, puede obtener más información consultando las secciones correspondientes de esta política o comunicarse con nosotros utilizando la información proporcionada en la sección de contacto.
                    
                </p>
                <p>
                    <br><strong>Derechos de protección de datos bajo el RGPD</strong>
                    <br><br>
                      Si es residente del Espacio Económico Europeo ("EEE"), tiene ciertos derechos de protección de datos y nos esforzaremos por tomar las medidas razonables para permitirle corregir, modificar, eliminar o restringir el uso de sus Datos personales. limitar. Si desea saber qué información personal tenemos sobre usted y si desea que se elimine de nuestros sistemas, comuníquese con nosotros. En determinadas circunstancias, usted tiene los siguientes derechos de protección de datos:
                      <br>
                      (i) Tiene derecho a retirar su consentimiento cuando haya dado previamente su consentimiento para el procesamiento de sus Datos personales. En la medida en que la base legal para nuestro procesamiento de sus Datos personales sea el consentimiento, tiene derecho a retirar ese consentimiento en cualquier momento. La revocación no afecta la legalidad del procesamiento antes de la revocación.
                      <br>
                      (ii) Tiene derecho a saber si sus Datos personales están siendo procesados ​​por nosotros, a obtener información sobre ciertos aspectos del procesamiento y a obtener una copia de sus Datos personales durante el procesamiento.
                      <br>
                      (iii) Tiene derecho a verificar la exactitud de sus datos y a solicitar que se actualicen o corrijan. También tiene derecho a solicitar que completemos cualquier dato personal que crea que está incompleto.<br>

                      (iv) Tiene derecho a oponerse al procesamiento de sus datos si el procesamiento se basa en una base legal distinta del consentimiento. Cuando los datos personales se procesen en interés público, en el ejercicio de una autoridad oficial que se nos haya conferido, o para los intereses legítimos que perseguimos, puede oponerse a dicho procesamiento por motivos relacionados con una situación específica para justificar la objeción. Sin embargo, debe saber que si sus Datos personales se procesan con fines de marketing directo, puede oponerse a ese procesamiento en cualquier momento sin proporcionar una justificación.<br>

                      (v) Tiene derecho, en determinadas circunstancias, a restringir el procesamiento de sus Datos personales. Estas circunstancias incluyen: usted impugna la exactitud de sus Datos personales y necesitamos verificar su exactitud; el procesamiento es ilegal, pero usted se opone a la eliminación de sus Datos Personales y solicita en su lugar la restricción de su uso; ya no necesitamos sus Datos personales para fines de procesamiento, pero usted los necesita para establecer, ejercer o defender sus derechos legales; se ha opuesto al procesamiento hasta que se verifique si nuestros motivos legítimos prevalecen sobre sus motivos legítimos. Cuando el procesamiento está restringido,<br>

                      (vi) Tiene derecho, en determinadas circunstancias, a que eliminemos su información personal. Estas circunstancias incluyen: los Datos personales ya no son necesarios en relación con los fines para los que fueron recopilados o procesados; retira su consentimiento para el procesamiento basado en el consentimiento; usted se opone al procesamiento bajo ciertas reglas de la ley de protección de datos aplicable; el procesamiento es para fines de marketing directo; y los datos personales han sido tratados ilícitamente. No obstante, existen excepciones al derecho de supresión, como cuando el tratamiento es necesario: para el ejercicio del derecho a la libertad de expresión e información; para cumplir con una obligación legal; o para la determinación,<br>

                      (vii) Tiene derecho a recibir los Datos personales que nos ha proporcionado en un formato estructurado, de uso común y legible por máquina y, cuando sea técnicamente factible, a que se transfieran a otro controlador sin ningún impedimento por nuestra parte, siempre que que dicha transferencia no afecte negativamente los derechos y libertades de otros.<br>

                      (viii) Tiene derecho a presentar una queja ante una autoridad de protección de datos sobre nuestra recopilación y uso de su información personal. Si no está satisfecho con el resultado de su queja directamente con nosotros, tiene derecho a presentar una queja ante la autoridad local de protección de datos. Para obtener más información, comuníquese con su autoridad local de protección de datos en el EEE. Esta disposición se aplica siempre que sus Datos personales se procesen por medios automatizados y que el procesamiento se base en su consentimiento, en un contrato del que forma parte o en obligaciones precontractuales del mismo.
                </p>
                <p>
                    <br><strong>Derechos de privacidad de California</strong>
                    <br><br>
                    Los consumidores que residen en California tienen ciertos derechos adicionales con respecto a su información personal en virtud de la Ley de Privacidad del Consumidor de California ("CCPA"). Si es residente de California, esta sección se aplica a usted.<br>

                    Además de los derechos explicados en esta Política, los residentes de California que brindan Información personal según lo define la ley para obtener Servicios para uso personal, familiar o doméstico tienen derecho a solicitar y obtener información de nosotros una vez por año calendario sobre las categorías y piezas de información personal que hemos recopilado y divulgado.<br>

                    Además, los residentes de California tienen derecho a solicitar el borrado de su Información personal o optar por no participar en la venta de su Información personal, cualquier venta, divulgación o transferencia de Información personal a otra empresa o a un tercero a cambio de dinero o de otro tipo. compensación valiosa. Para ello, póngase en contacto con nosotros. No lo discriminaremos cuando ejerza sus derechos en virtud de la CCPA.
                </p>
                <p>
                    <br><strong>¿Cómo puede ejercer sus derechos?</strong>
                    <br><br>
                    Todas las solicitudes para ejercer sus derechos pueden dirigirse a nosotros utilizando los datos de contacto proporcionados en este documento. Tenga en cuenta que podemos pedirle que verifique su identidad antes de responder a dichas solicitudes. Su solicitud debe contener suficiente información para permitirnos verificar que usted es la persona que dice ser o que es el representante autorizado de dicha persona. Si recibimos su solicitud de un representante autorizado, es posible que le pidamos que proporcione prueba de que le ha otorgado un poder notarial a dicho representante autorizado o que el representante autorizado tiene una autoridad válida por escrito para realizar solicitudes en su nombre.<br>

                    Debe proporcionar detalles suficientes para permitirnos comprender y responder adecuadamente a la solicitud. No podremos cumplir con su solicitud ni proporcionarle Datos personales a menos que primero hayamos verificado su identidad o autoridad para realizar dicha solicitud y confirmado que los Datos personales se relacionan con usted.
                </p>
                <p>
                    <br><strong>Cookies</strong>
                    <br><br>
                    Nuestro sitio web y nuestros servicios utilizan "cookies" para ayudar a personalizar su experiencia en línea. Una cookie es un archivo de texto que un servidor de páginas web coloca en su disco duro. Las cookies no se pueden utilizar para ejecutar programas o enviar virus a su computadora. Las cookies se le asignan de forma única y solo puede leerlas un servidor web en el dominio que le emitió la cookie. Si elige rechazar las cookies, es posible que no pueda experimentar completamente las características del sitio web y los servicios. Puede obtener más información sobre las cookies y cómo funcionan aquí.<br>

                    Podemos usar cookies para recopilar, almacenar y rastrear información para seguridad y personalización, para que el sitio web y los servicios funcionen, y con fines estadísticos. Para obtener más información sobre las cookies que recopilamos y su propósito, consulte nuestra política de cookies. Tiene la opción de aceptar o rechazar las cookies. La mayoría de los navegadores web aceptan cookies de forma predeterminada, pero puede cambiar la configuración de su navegador para rechazar las cookies si lo prefiere.
                </p>
                <p>
                    <br><strong>Análisis de datos</strong>
                    <br><br>
                    Nuestro sitio web y nuestros servicios pueden usar herramientas de análisis de terceros que usan cookies, balizas web u otras tecnologías similares de recopilación de información para recopilar información estándar sobre la actividad y el uso de Internet. La información recopilada se usa para compilar informes estadísticos sobre las actividades de los usuarios, como la frecuencia con la que los usuarios visitan nuestro sitio web y nuestros servicios, qué páginas visitan y durante cuánto tiempo, etc. Usamos la información obtenida de estas herramientas de análisis para medir el rendimiento. monitorear y mejorar nuestro sitio web y servicios.
                </p>
                <p>
                    <br><strong>No rastrear señales</strong>
                    <br><br>
                    Algunos navegadores vienen con una función No rastrear que le permite decirle a los sitios web que visita que no desea que se rastreen sus actividades en línea. El seguimiento no es lo mismo que usar o recopilar información en relación con un sitio web. Para estos fines, el seguimiento se refiere a la recopilación de información de identificación personal de los consumidores que usan o acceden a un sitio web o servicio en línea a medida que navegan por diferentes sitios web a lo largo del tiempo. La forma en que los navegadores transmiten la señal Do Not Track aún no es uniforme. Como resultado, el sitio web y los servicios aún no están configurados para interpretar o responder a las señales de No rastrear transmitidas por su navegador. Sin embargo, como se describe con más detalle en esta Política,
                </p>
                <p>
                    <br><strong>Anuncios</strong>
                    <br><br>
                    Podemos autorizar a ciertas empresas de terceros para que nos ayuden a personalizar los anuncios que creemos que pueden ser de interés para los usuarios y para recopilar y utilizar otros datos sobre la actividad del usuario en el sitio web. Estas empresas pueden proporcionar anuncios que pueden colocar cookies y rastrear el comportamiento del Usuario.
                </p>
                <p>
                    <br><strong>Marketing por correo electrónico</strong>
                    <br><br>
                    Ofrecemos boletines electrónicos a los que puede suscribirse voluntariamente en cualquier momento. Nos comprometemos a mantener la confidencialidad de su dirección de correo electrónico y no pasaremos su dirección de correo electrónico a ningún tercero, excepto según lo permitido en la sección Uso y procesamiento de la información. Conservaremos la información enviada por correo electrónico de acuerdo con las leyes y regulaciones aplicables.<br>

                    De acuerdo con la Ley CAN-SPAM, todos los correos electrónicos enviados por nosotros indicarán claramente de quién es el correo electrónico y cómo contactar al remitente. Puede optar por no recibir nuestro boletín o correos electrónicos de marketing siguiendo las instrucciones para darse de baja en esos correos electrónicos o comunicándose con nosotros. Sin embargo, seguirá recibiendo correos electrónicos de transacciones esenciales.

                </p>
                <p>
                    <br><strong>Notificaciones automáticas</strong>
                    <br><br>
                    Ofrecemos notificaciones automáticas a las que también puede suscribirse voluntariamente en cualquier momento. Para garantizar que las notificaciones automáticas lleguen a los dispositivos correctos, utilizamos un proveedor de notificaciones automáticas de terceros que se basa en un token de dispositivo que es exclusivo de su dispositivo y emitido por el sistema operativo de su dispositivo. Si bien es posible acceder a una lista de tokens de dispositivos, no revelarán su identidad, su ID de dispositivo único o su información de contacto ni a nosotros ni a nuestro proveedor externo de notificaciones automáticas. Retendremos la información enviada por correo electrónico de acuerdo con las leyes y regulaciones aplicables. Si en algún momento ya no desea recibir notificaciones automáticas, simplemente ajuste la configuración de su dispositivo.
                </p>
                <p>
                    <br><strong>Enlaces de afiliados</strong>
                    <br><br>
                    Podemos participar en marketing de afiliados y tener enlaces de afiliados en el sitio web y los servicios para brindarle productos y servicios relacionados o adicionales. Si hace clic en un enlace de afiliado, se coloca una cookie en su navegador para rastrear cualquier venta con el fin de cobrar comisiones.
                </p>
                <p>
                    <br><strong>Enlaces a otros recursos</strong>
                    <br><br>
                    El sitio web y los servicios contienen enlaces a otros recursos que no son de nuestra propiedad ni están controlados por nosotros. Tenga en cuenta que no somos responsables de las prácticas de privacidad de dichas fuentes o terceros. Le recomendamos que preste atención cuando abandone el sitio web y los servicios y que lea las declaraciones de privacidad de cualquier fuente que pueda recopilar información personal.
                </p>
                <p>
                    <br><strong>Seguridad de la información</strong>
                    <br><br>
                    Protegemos la información que nos proporciona en servidores informáticos en un entorno seguro y controlado, protegidos del acceso, uso o divulgación no autorizados. Mantenemos medidas de seguridad administrativas, técnicas y físicas razonables en un esfuerzo por proteger contra el acceso, uso, alteración y divulgación no autorizados de la Información personal bajo nuestro control y custodia. Sin embargo, no se puede garantizar la transmisión de datos a través de Internet o una red inalámbrica.<br>

                    Por lo tanto, mientras nos esforzamos por proteger su información personal, usted reconoce que (i) existen restricciones de seguridad y privacidad en Internet que están fuera de nuestro control; (ii) no se puede garantizar la seguridad, integridad y privacidad de toda la información y los datos intercambiados entre usted y el Sitio web y los Servicios; y (iii) dicha información y datos pueden ser vistos o manipulados en tránsito por cualquier tercero, a pesar de todos los esfuerzos.<br>

                    Dado que la seguridad de la información personal depende en parte de la seguridad del dispositivo que utiliza para comunicarse con nosotros y la seguridad que utiliza para proteger su información de inicio de sesión, tome las medidas adecuadas para proteger esta información.

                </p>
                <p>
                    <br><strong>Violación de datos</strong>
                    <br><br>
                    Si nos enteramos de que la seguridad del sitio web y los servicios se ha visto comprometida o que la información personal de los usuarios se ha divulgado a terceros no relacionados como resultado de una actividad externa, incluidos, entre otros, ataques de seguridad o fraude, nos reservamos la derecho a tomar medidas razonablemente apropiadas, incluidas, entre otras, investigaciones y denuncias, así como notificación y cooperación con las autoridades encargadas de hacer cumplir la ley. En el caso de una violación de datos, haremos todos los esfuerzos razonables para notificar a las personas afectadas si creemos que existe un riesgo razonable de daño para el Usuario como resultado de la violación o si la ley exige que se notifique.
                </p>
                <p>
                    <br><strong>Cambios y Ajustes</strong>
                    <br><br>
                    Nos reservamos el derecho de cambiar esta Política o los términos y condiciones relacionados con el Sitio web y los Servicios en cualquier momento a nuestro exclusivo criterio. Cuando lo hagamos, revisaremos la fecha actualizada en la parte inferior de esta página. También podemos notificarle de otras maneras a nuestra discreción, como a través de la información de contacto que ha proporcionado.<br>

                    Una versión actualizada de esta Política entrará en vigencia inmediatamente después de la publicación de la Política revisada, a menos que se indique lo contrario. Su uso continuado del sitio web y los servicios después de la fecha de vigencia de la Política revisada (u otra acción indicada en ese momento) constituye su aceptación de dichos cambios. Sin embargo, no utilizaremos su Información personal de una manera materialmente diferente de lo que se indicó en el momento en que se recopiló su Información personal sin su consentimiento.
                </p>
                <p>
                   <br><strong>Aceptación de esta política</strong>
                    <br><br>
                    Usted reconoce que ha leído esta Política y acepta todos sus términos y condiciones. Al acceder y utilizar el sitio web y los servicios y enviar su información, usted acepta estar sujeto a esta Política. Si no está de acuerdo con los términos de esta Política, no está autorizado para acceder o utilizar el Sitio web y los Servicios.
                </p>
                <p>
                    <br><strong>Para contactarnos</strong>
                    <br><br>
                    Si tiene alguna pregunta, inquietud o queja con respecto a esta política, la información que tenemos sobre usted o si desea ejercer sus derechos, lo alentamos a que se comunique con nosotros utilizando los detalles a continuación:<br>

                    https://astrology-lotus.com/contac<br>

                    Intentaremos resolver las quejas y disputas y haremos todos los esfuerzos razonables para cumplir con su deseo de ejercer sus derechos lo antes posible y, en cualquier caso, dentro de los plazos establecidos por la ley de protección de datos aplicable. se recetan.<br>

                    Este documento fue actualizado por última vez el 26 de abril de 2022
                </p>
            </div>            
        </div>

        <div id="gdpr">
            <style>
                .footer {margin-top: 400px;}
                @media (max-width: 375px) {
                    .footer {margin-top: 400px;
                    }
                }
            </style>
            <div class="editor">
                <h2>GDPR</h2><br>
                <p>
                    <strong>Admiral de Ruijterweg 24 1056 GJ Ámsterdam Países Bajos</strong>&nbsp;</p>

                <p>
                    Si es residente del Espacio Económico Europeo ("EEE"), tiene ciertos derechos de protección de datos y nos esforzaremos por tomar las medidas razonables para permitirle corregir, modificar, eliminar o restringir el uso de sus Datos personales. limitar. Si desea saber qué información personal tenemos sobre usted y si desea que se elimine de nuestros sistemas, comuníquese con nosotros. En determinadas circunstancias, usted tiene los siguientes derechos de protección de datos:
                    <br><br>
                    (i) Tiene derecho a retirar su consentimiento cuando haya dado previamente su consentimiento para el procesamiento de sus Datos personales. En la medida en que la base legal para nuestro procesamiento de sus Datos personales sea el consentimiento, tiene derecho a retirar ese consentimiento en cualquier momento. La revocación no afecta la legalidad del procesamiento antes de la revocación.
                    <br><br>
                    (ii) Tiene derecho a saber si sus Datos personales están siendo procesados ​​por nosotros, a obtener información sobre ciertos aspectos del procesamiento y a obtener una copia de sus Datos personales que están siendo procesados.
                    <br><br>
                    (iii) Tiene derecho a verificar la exactitud de su información y solicitar que se actualice o corrija. También tiene derecho a solicitar que completemos cualquier dato personal que crea que está incompleto.
                    <br><br>
                    (iv) Tiene derecho a oponerse al procesamiento de sus datos si el procesamiento se basa en una base legal distinta del consentimiento. Cuando los datos personales se procesen en interés público, en el ejercicio de una autoridad oficial que se nos haya conferido, o para los intereses legítimos que perseguimos, puede oponerse a dicho procesamiento por motivos relacionados con una situación específica para justificar la objeción. Sin embargo, debe tener en cuenta que si sus Datos personales se procesan con fines de marketing directo, puede oponerse a ese procesamiento en cualquier momento sin proporcionar ninguna justificación.
                    <br><br>
                    (v) Tiene derecho, en determinadas circunstancias, a restringir el procesamiento de sus Datos personales. Estas circunstancias incluyen: usted impugna la exactitud de sus Datos personales y necesitamos verificar su exactitud; el procesamiento es ilegal, pero usted se opone a la eliminación de sus Datos Personales y solicita en su lugar la restricción de su uso; ya no necesitamos sus Datos personales para fines de procesamiento, pero usted los necesita para establecer, ejercer o defender sus derechos legales; se ha opuesto al procesamiento hasta que se verifique si nuestros motivos legítimos prevalecen sobre sus motivos legítimos. Cuando el procesamiento está restringido,
                    <br><br>
                    (vi) Tiene derecho, en determinadas circunstancias, a que eliminemos su información personal. Estas circunstancias incluyen: los Datos personales ya no son necesarios en relación con los fines para los que fueron recopilados o procesados; retira su consentimiento para el procesamiento basado en el consentimiento; usted se opone al procesamiento bajo ciertas reglas de la ley de protección de datos aplicable; el procesamiento es para fines de marketing directo; y los datos personales han sido tratados ilícitamente. No obstante, existen excepciones al derecho de supresión, como cuando el tratamiento es necesario: para el ejercicio del derecho a la libertad de expresión e información; para cumplir con una obligación legal; o para la determinación,
                    <br><br>
                    (vii) Tiene derecho a recibir los Datos personales que nos ha proporcionado en un formato estructurado, de uso común y legible por máquina y, cuando sea técnicamente factible, a que se transfieran a otro controlador sin ningún impedimento por nuestra parte, siempre que que tal transferencia no afecte adversamente los derechos y libertades de otros.
                    <br><br>
                    (viii) Tiene derecho a presentar una queja ante una autoridad de protección de datos sobre nuestra recopilación y uso de su información personal. Si no está satisfecho con el resultado de su queja directamente con nosotros, tiene derecho a presentar una queja ante la autoridad local de protección de datos. Para obtener más información, comuníquese con su autoridad local de protección de datos en el EEE. Esta disposición se aplica siempre que sus Datos personales se procesen por medios automatizados y que el procesamiento se base en su consentimiento, en un contrato del que forma parte o en obligaciones precontractuales del mismo.
                    <br><br>
                    Nota: Si no recibe el correo electrónico, verifique su correo no deseado.
                    <br><br>
                    1) Envíe su mensaje a support@astrology-lotus.com
                    <br><br>
                    2) Para ayudarnos a recuperar su información, incluya lo siguiente:
                    Nombre de pila: :
                    Apellido : Fecha de
                    nacimiento:(dd/mm/aaaa) :
                    Correo electrónico :
                    Teléfono :
                    <br><br>
                    3) Envíe su solicitud con el motivo a continuación:
                    - Derecho de acceso
                    - Derecho a retirada
                    - Derecho de supresión ("derecho al olvido") (ejemplo: supresión de datos personales, cierre de cuenta, etc.)
                    - Derecho de herederos
                    - Derecho de oposición
                    - Otra solicitud
                </p>
            </div>
        </div>


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
                <strong>Cuál es su política de reembolso?</strong>
                <br><br>
                <p>Si no está satisfecho con el producto/servicio adquirido o por cualquier otro motivo desea solicitar un reembolso, utilice el formulario de contacto (hipervínculo al formulario de contacto) con una solicitud de reembolso y procederemos en consecuencia.</p>
                <br>
                <strong>Sus productos/servicios están disponibles en mi país?</strong><br><br>
                <p>Nuestros productos y servicios están disponibles globalmente, pero solo en ciertos idiomas. Actualmente ofrecemos nuestros productos en inglés, español, francés, alemán y portugués.</p><br>
                <strong>Cómo puedo darme de baja de sus servicios?</strong><br><br>
                <p>Puede darse de baja directamente haciendo clic en el enlace al final de cada correo electrónico o poniéndose en contacto con nosotros a través del formulario de contacto con su solicitud de baja. Proporcione la dirección de correo electrónico en cuestión. Es posible que se le solicite que confirme que esta es su dirección de correo electrónico.</p><br>
                <strong>Cuáles son los costos de sus productos/servicios?</strong><br><br>
                <p>Esto depende del producto. Consulte nuestra tienda para ver la descripción general y los precios de los productos.</p><br>
                <strong>Los testimonios son reales?</strong><br><br>
                <p>Los testimonios son reales y de clientes satisfechos, pero no garantizan que usted tendrá la misma experiencia. </p>

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
                $("#step_3_error").html('Indique la fecha completa');

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
                $("#step_4_error").html('Por favor complete este campo');
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
                $("#step_8_error").html('Por favor, rellene este campo');
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
                $("#step_9_error").html('Por favor, rellene este campo');
            } else if (mail != true) {
                $("#step_9_error").html('Por favor, introduzca una dirección de correo electrónico válida');
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
        })

        $(".step_5_btn").on("click", function () {
            if ($("input[name='yesno'][value=2]").is(":checked")) {
                $("#step_5").addClass('d-none');
                $("#step_7").removeClass('d-none');
            } else {
                $("#step_5").addClass('d-none');
                $("#step_6").removeClass('d-none');
            }
        });
        $(".step_7_btn").on("click", function () {
            $("#step_7").addClass('d-none');
            $("#step_8").removeClass('d-none');
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
