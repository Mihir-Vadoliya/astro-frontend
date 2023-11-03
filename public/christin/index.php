<?php
error_reporting(0);
session_start();
require('../apbinom_click_api.php');
if (isset($_GET['key'])) {
    $campaignKey = $_GET['key'];
} else {
    $campaignKey = "17e4tw4heg86r4fhz49a"; // test campaign if key is missing.
}
if ($campaignKey) {
    $tracking = new apGetClick($campaignKey);
    $trackingDetails = $tracking->getDataClick(); // get all clickdata
    $deviceBrandName = $trackingDetails['device']['brand_name'] ?? "Mobile";

    if (isset($trackingDetails['clickid']) && !empty($trackingDetails['clickid'])) {
        $binom_click_id = $trackingDetails['clickid'];
    } else {
        $binom_click_id = "";
    }
}
if (in_array($campaignKey, ['vu84y0rx2henantxm4mu', '59tei6hxqvpf1anyr6yc'])) {
    $country = 'CA';
    $language = 'FR';
    $offer_id = '894';
} else {
    $country = 'FR';
    $language = 'FR';
    $offer_id = '866';
}
$_SESSION['offer_id'] = $offer_id;
$placement = $_GET['placement'] ?? null;
$gclid = $_GET['gclid'] ?? null;

$uuid = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );


include('config.php');
?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Astrology offerpage Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Astrology Lotus">
    <meta name="keywords" content="Astrology Lotus">
    <meta name="title" content="Astrology Lotus">
    <meta name="description" content="Astrology Lotus">

    <meta property="og:title" content="Astrology Lotus"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="Astrology Lotus"/>
    <meta property="og:image" content="assets/images/hero_bg.jpg"/>
    <meta property="og:image:width" content="37"/>
    <meta property="og:image:height" content="37"/>
    <meta property="og:site_name" content="Astrology Lotus"/>
    <meta property="og:description" content="Astrology Lotus"/>
    <!-- Astrology offerpage favicon -->
    <link rel="shortcut icon" href="assets/images/astrology-offer-favicon.png"/>

    <!-- Astrology offerpage all CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/stye.css" rel="stylesheet">
    <!-- Astrology offerpage title -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PFPKM94');</script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <?php if($_GET['aff_sub'] == "Facebook") : ?>
    <script>
        var pixel = "<?php echo $_GET['aff_sub']??null ?>";
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
        fbq('init', '<?php echo $_GET['pixel'] ?>');
        fbq('track', 'PageView');

        function fbLeadEvent() {
            window._fbq.push('track', 'Lead');
        }
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=<?php echo $_GET['pixel'] ?>&ev=PageView&noscript=1"/>
    </noscript>
    <?php endif; ?>
    <!-- End Facebook Pixel Code -->

    <script src="assets/js/lander.js" type="module"></script>
    <title><?= $title; ?></title>
    <style>
        .error {
            color: red;
        }

        .error2 {
            color: red;
        }
    </style>

    <!--  pushnami script --->
    <link rel="manifest" href="manifest.json">
    <script type="text/javascript">
        (function(document, window){
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://api.pushnami.com/scripts/v1/pushnami-adv/628e169b792d285d2a28d0a4";
            script.onload = function() {
                Pushnami
                    .update()
                    .prompt();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window);
    </script>
</head>

<body class="main_bg">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFPKM94"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="astrology-offerpage-main  position-relative">
    <!-- Astrology offerpage header -->
    <header class="astrology_offerpage_head header pt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <a href="index.php"><img src="assets/images/astrology-offer-logo.png" class="img-fluid mb-3"></a>
                </div>
                <div class="col-6 col-md-3 text-end">
                    <img src="assets/images/christin-per-img.png" class="img-fluid mb-3">
                </div>
            </div>
        </div>
    </header>
    <!-- Astrology offerpage all steps -->
    <form action="javascript:void(0);" method="post" id="nameForm">

        <input name="design_id" type="hidden" value="101348">
        <input name="country" type="hidden" value="<?= $country; ?>">
        <input name="offer_id" type="hidden" value="<?= $offer_id; ?>">
        <input name="language" type="hidden" value="<?= $language; ?>">
        <input name="binom_click_id" type="hidden" value="<?= $binom_click_id; ?>">
        <input name="placement" type="hidden" value="<?= $placement; ?>">
        <input name="gclid" type="hidden" value="<?= $gclid; ?>">
        <input name="queryString" type="hidden" value="<?= $_SERVER['REQUEST_URI']; ?>">
        <input name="visit" type="hidden" value="">
        <input name="sign" type="hidden" value="sign">
        <input name="device" type="hidden" value="<?= $deviceBrandName; ?>">
        <input name="uuid" type="hidden" value="<?= $uuid ?>">

        <!-- Astrology offerpage step 1 -->
        <section class="gtm-screen-zodiac astrology-offerpage-step-1 step_1_content common_cls_display1" id="step_1">
            <div class="container">
                <h1 class="times fw-bold font-100 text-center sky-color mb-0 pb-0"><?= $choose; ?></h1>
                <h3 class="times fw-bold font-62 text-white text-center mb-4 pb-0"><?= $sign; ?></h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-7">
                        <div class="d-flex flex-wrap justify-content-center justify-md-content-between mb-5">
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="aries">
                                    <img src="assets/images/astro-img1.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $aries; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $aries_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="aries" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="taurus">
                                    <img src="assets/images/astro-img2.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $taurus; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $taurus_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="taurus" value="2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                <label class="radio_cus_button" data-sign="gemini">
                                    <img src="assets/images/astro-img3.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $gemini; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $gemini_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="gemini" value="3">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                <label class="radio_cus_button" data-sign="cancer">
                                    <img src="assets/images/astro-img4.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $crab; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $crab_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="cancer" value="4">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="leo">
                                    <img src="assets/images/astro-img5.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $leo; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $leo_date ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="leo" value="5">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                <label class="radio_cus_button" data-sign="virgo">
                                    <img src="assets/images/astro-img6.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $virgo; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"> <?= $virgo_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="virgo" value="6">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="libra">
                                    <img src="assets/images/astro-img7.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $libra; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $libra_date ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="libra" value="7">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                <label class="radio_cus_button" data-sign="scorpio">
                                    <img src="assets/images/astro-img8.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $scorpion ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $scorpion_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="scorpio" value="8">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                <label class="radio_cus_button" data-sign="sagittarius">
                                    <img src="assets/images/astro-img9.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $sagittarius; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $sagittarius_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="sagittarius" value="9">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="capricorn">
                                    <img src="assets/images/astro-img10.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $capricorn; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $capricorn_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="capricorn" value="10">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                <label class="radio_cus_button" data-sign="aquarius">
                                    <img src="assets/images/astro-img11.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $aquarius; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $aquarius_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="aquarius" value="11">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb-3 me-0 me-lg-0 me-xl-0">
                                <label class="radio_cus_button" data-sign="pisces">
                                    <img src="assets/images/astro-img12.png"
                                         class="position-relative z-index-1 pb-3"><br>
                                    <span class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i><?= $fish; ?></i></span><br>
                                    <span class="text-center text-white times fw-bold font-20 position-relative z-index-1"><?= $fish_date; ?></span>
                                    <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="pisces" value="12">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- new step 2 -->
        <section class="gtm-screen-gender select_gender" id="step_2" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">Quel est votre genre ?</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row">
                            <div class="col-6 text-center">
                                <label class="choose_gender_btn">
                                    <img src="assets/images/male-icon.png"
                                         class="position-relative z-index-1 me-1 me-xxl-3">
                                    <span class=" position-relative z-index-1 montserrat text-white  medium font24"><?= $male; ?></span><br>
                                    <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male" checked="" value="M">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="choose_gender_btn">
                                    <img src="assets/images/female-icon.png"
                                         class="position-relative z-index-1 me-1 me-xxl-3">
                                    <span class=" position-relative z-index-1 montserrat text-white medium font24"><?= $female; ?></span><br>
                                    <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female" value="F">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-12 text-center pt-4">
                                <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block"
                                        onclick="back(1,2);">< <?= $back; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 3 -->
        <section class="gtm-screen-birthdate select_born_date" id="step_3" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0"><?php echo $when_you_born; ?></h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row">
                            <div class="col-4">
                                <select name="day"
                                        class="form-select born_input_field font24 medium montserrat text-black day"
                                        aria-label="Default select example ">
                                    <option value="" selected="selected"><?= $day; ?></option>
                                    <?php
                                    for ($i = 1; $i <= 31; $i++):
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    endfor;
                                    ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="month"
                                        class="form-select born_input_field font24 medium montserrat text-black month"
                                        aria-label="Default select example ">
                                    <option value="" selected="selected"><?= $month; ?></option>
                                    <?php
                                    for ($i = 1; $i <= 12; $i++):
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    endfor;
                                    ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="year"
                                        class="form-select born_input_field font24 medium montserrat text-black year"
                                        aria-label="Default select example ">
                                    <option value="" selected="selected"><?= $year; ?></option>
                                    <?php
                                    for ($i = 1940; $i <= 2002; $i++):
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    endfor;
                                    ?>
                                </select>
                            </div>
                            <span class="error" style="display:none;"><?php echo $error1; ?></span>
                            <div class="col-12 ">
                                <div class="text-center">
                                    <p class="text-white font-16 times pt-3"><?php echo $bdate_help; ?></p>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="button"
                                        class="gtm-birthdate-continue all_continue_btn font-20 text-center text-white d-inline-block"><?= $continue; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 4 -->
        <section class="gtm-screen-city select_city" id="step_4" style="display:none;">
            <div class="conatiner">
                <div class="height-50"></div>
                <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0"><?php echo $city_in_which; ?></h3>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-5">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12 col-xxl-10">
                                <input type="text" name="city" placeholder="<?php echo $city_in_which; ?>"
                                       class="enter_city font24 medium montserrat text-center text-white">
                            </div>
                            <div class="col-12 ">
                                <div class="text-center">
                                    <p class="text-white font-16 times pt-3"><?php echo $city_in_which2; ?></p>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block"><?= $continue; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 5 -->
        <section class="gtm-screen-birthtimeknown you_know_born_time" id="step_5" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0"><?php echo $b_date_time_know; ?></h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-xl-10 col-xxl-6">
                        <ul class="list-inline list-unstyled text-center">
                            <li class="list-inline-item know-birth-time-yes">
                                <label class="choose_yesno_btn">
                                    <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white"><?php echo $yes; ?></span><br>
                                    <input type="radio" name="bitth_time_know" class="gtm-birthtime" data-gtm-value="yes" value="yes" checked="">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li class="list-inline-item know-birth-time-no">
                                <label class="choose_yesno_btn">
                                    <span class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white"><?= $no; ?></span><br>
                                    <input type="radio" name="bitth_time_know" class="gtm-birthtime" data-gtm-value="no" value="no">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 ">
                        <div class="text-center">
                            <p class="text-white font-16 times pt-3"><?php echo $this_you_tell_more; ?></p>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 6 -->
        <section class="gtm-screen-birthtime select_hour_minutes" id="step_6" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0"><?php echo $accurate_minit; ?></h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-6">
                        <div class="row justify-content-center py-50">
                            <div class="col-6">
                                <select name="tobhr"
                                        class="form-select born_input_field font24 medium montserrat text-black hour"
                                        aria-label="Default select example">
                                    <option value="" selected="selected"><?php echo $hour ?></option>
                                    <?php
                                    for ($i = 0; $i <= 23; $i++):
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    endfor;
                                    ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="tobmin"
                                        class="form-select born_input_field font24 medium montserrat text-black min"
                                        aria-label="Default select example">
                                    <option value="" selected="selected"><?php echo $minit; ?></option>
                                    <?php
                                    for ($i = 0; $i <= 59; $i++):
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    endfor;
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 text-center pt-4">
                                <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block"><?= $continue; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new steps 7 -->
        <section class="gtm-screen-concern select_your_concerns" id="step_7" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0"><?= $your_consorn; ?></h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-6">
                        <div class="row justify-content-center py-50">
                            <div class="col-6 col-md-3  mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white"><?= $work; ?></span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="work" value="<?= $work; ?>" checked="">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3  mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white"><?= $finance; ?></span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="money" value="<?= $finance; ?>">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3 mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white"><?= $love; ?></span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="love" value="<?= $love; ?>">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-6 col-md-3  mb-10">
                                <label class="choose_concerns_btn">
                                    <span class=" position-relative z-index-1  montserrat  medium font24 text-white"><?= $general; ?></span><br>
                                    <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="general" value="<?= $general; ?>">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new steps 8 -->
        <section class="gtm-screen-name enter_name_det" id="step_8" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0"><?php echo $what_your_name; ?></h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-xxl-6">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <input type="text" placeholder="<?php echo $first_name; ?>" name="fname"
                                       class="enter_name_det_field font24 medium montserrat text-white">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="<?php echo $last_name; ?>" name="lname"
                                       class="enter_name_det_field font24 medium montserrat text-white">
                            </div>
                            <span class="error2" style="display:none;"><?php echo $error2; ?></span>
                            <div class="col-12 text-center pt-4">
                                <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block"><?= $continue; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 9 -->
        <section class="gtm-screen-email enter_email_field" id="step_9" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0"><?php echo $email_section_desc; ?></h3>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-7">
                        <div class="row justify-content-center mx-0 w-100">
                            <div class="col-12  col-xxl-11">
                                <input type="email" placeholder="Courriel" name="email" required
                                       class="gtm-email enter_city font24 medium montserrat text-center text-white">
                            </div>
                            <div class="col-12 col-lg-10 col-xxl-11 pt-4 text-center">
                                <fieldset class="step_mail__white-box text-white font-14">
                                    <legend class="legend fw-bold sky-color-2">Cadeau optionnel gratuit</legend>
                                    <label class="check_text"><input type="checkbox" name="coreg" value="true">
                                        <b>Argent – Amour – Bonheur –</b> Laissez Athena, la voyante des stars vous
                                        transmettre le <b>pouvoir de la chance</b> et recevez votre <b>voyance
                                            gratuite.</b></label>
                                </fieldset>
                                <button type="submit"
                                        class="gtm-email-continue all_continue_btn font-20 text-uppercase text-center w-100 text-white d-inline-block"><?php echo $reading_free; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
        <!-- new step 10 -->
        <section class="gtm-screen-thankyou last_step_content" id="step_10" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-7">
                        <h6 class="fw-normal  text-white text-center mb-0 font-18 pb-0">Votre confiance me touche
                            profondément.</h6>
                        <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">Je me mets immédiatement au
                            travail pour vous. Ma réponse vous parviendra dans les prochaines heures.</h3>
                        <p class="font-16 fw-normal text-white text-center">Allez dans votre boîte de réception
                            maintenant et découvrez les cadeaux que je vous ai promis : - Votre bilan d'énergie positive
                            - Votre talisman de protection des 7 jours d'absolution.</p>
                        <ul class="text-center list-inline list-unstyled">
                            <li class="font-16 fw-normal text-white">- Accéder à votre boîte de réception</li>
                            <li class="font-16 fw-normal text-white">- Vérifiez votre boîte de réception ou vos spams
                            </li>
                            <li class="font-16 fw-normal text-white">- Ouvrez mon e-mail et accédez à vos cadeaux de
                                bienvenue.
                            </li>
                        </ul>
                        <p class="font-16 fw-normal text-white mb-0 text-center"><b>Votre ami dévoué,</b></p>
                        <p class="font-16 fw-normal text-white text-center">Christin</p>
                        <p class="font-16 fw-normal text-white text-center">P.S. Pour que votre confiance en moi soit
                            méritée, je veux que vous sachiez que je respecte la réglementation en matière de
                            confidentialité et d'accès à vos données personnelles. Tout est là, dans ma politique de
                            confidentialité.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- step 11 - pending -->
        <section class="last_step_content" id="step_11" style="display:none;">
            <div class="container">
                <div class="height-50"></div>
                <div class="row justify-content-center mx-0 w-100">
                    <div class="col-12 col-md-6 col-xxl-7">
                        <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                            Veuillez patienter un moment, pendant que je vous connecte avec votre<br/>Ange Gardien...
                        </h3>
                    </div>
                </div>
                <div class="h-150"></div>
            </div>
        </section>
    </form>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="times fw-normal font-68 text-white text-center pt-3 pb-2">DISCLAIMER</h2>
                <p class="times fw-normal text-white">
                    CLAUSE DE NON-RESPONSABILITÉ : LES INFORMATIONS FOURNIES NE DOIVENT PAS ÊTRE CONSIDÉRÉES COMME DES CONSEILS DANS LE DOMAINE DE LA PSYCHOLOGIE, DE LA MÉDECINE, DE L'ÉCONOMIE-FINANCE, DE L'IMMOBILIER, DES QUESTIONS JURIDIQUES OU AUTRES ET NE DOIVENT EN AUCUN CAS ÊTRE UTILISÉES COMME BASE DE DÉCISION, MAIS UNIQUEMENT POUR DES RAISONS DE DIVERTISSEMENT, QU'ELLES SOIENT GRATUITES OU PAYANTES.<br><br>
                    LES TÉMOIGNAGES, CRITIQUES ET AVALS SONT DES OPINIONS INDIVIDUELLES LIBRES QUI N'IMPLIQUENT PAS DES RÉSULTATS SIMILAIRES POUR TOUT LE MONDE. VEUILLEZ LIRE LES TERMES ET CONDITIONS.<br><br>
                    Admiraal de Ruijterweg 24 1056 GJ Amsterdam Pays-Bas.
                </p>
            </div>
        </div>
    </div>
    <!-- Astrology offerpage footer -->
    <footer class=" footer position-unset">
        <div class=" container">
            <div id="footer">
                <ul class="footer_menu text-center list-inline list-unstyled">
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1  pe-xxl-1">
                        <a href="javascript:void(0);"
                           class="text-white text-uppercase text-decoration-none tos_modal_open times font-20"><?= $home; ?></a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                        <a href="javascript:void(0);"
                           class="text-decoration-none text-uppercase cnt_pp_open text-white times font-20"><?= $contact; ?></a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                        <a href="javascript:void(0);"
                           class="text-decoration-none text-uppercase help_pp_open text-white times font-20">RÈGLES
                            ÉTHIQUES</a>
                    </li>
                    <li class="list-inline-item me-0 me-md-3 me-xxl-5 pe-1 pe-xxl-1">
                        <a href="javascript:void(0);"
                           class="text-decoration-none text-uppercase terms_pp_open  text-white times font-20">GDPR</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0);"
                           class="text-decoration-none text-uppercase cookie_policy_btn   text-white times font-20">Politique
                            en matière de cookies</a>
                    </li>
                </ul>
            </div>
            <div id="step_6_footer" style="display: none;">
                <p class="step_6_footer font-22 arial fw-normal colorfff text-center"><?= $address; ?><br>
                    <a href="tel:+359 24928370" class="colorfff text-decoration-none"><?= $phone; ?></a><br>
                    <a href="mailto:support@astrology-lotus.com" class="colorfff text-decoration-none">support@astrology-lotus.com</a>
                </p>
                <ul class="list-inline list-unstyled pt-4 mb-5 text-center">
                    <li class="d-block d-md-inline-block list-inline-item mb-4 mb-md-0 pe-0 pe-md-2 pe-xxl-3 me-0 me-md-2 me-xxl-3">
                        <a href="javascript:void(0);"
                           class="text-white text-center text-uppercase font-22 text-decoration-none button_one_btn d-inline-block"><?= $contact; ?> </a>
                    </li>
                    <li class="d-block d-md-inline-block list-inline-item mb-4 mb-md-0 pe-0 pe-md-2 pe-xxl-3 me-0 me-md-2 me-xxl-3">
                        <a href="javascript:void(0);"
                           class="text-white text-center text-uppercase font-22 text-decoration-none button_two_btn d-inline-block"><?= $help; ?> </a>
                    </li>
                    <li class="d-block d-md-inline-block list-inline-item mb-4 mb-md-0">
                        <a href="javascript:void(0);"
                           class="text-white text-center text-uppercase font-22 text-decoration-none button_three_btn d-inline-block"><?= $tc; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<!-- terms of services modal -->
<div class="astrology-offerpage-cntpopup modal fade contact_us_popup" id="contact_us1" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0 border-0">
            <h5 class="modal-title text-center arial text-white fw-bold font-26"
                id="exampleModalLabel"><?= $home; ?></h5>
            <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <p class="arial fw-light mb-4 text-black font-16 line-height-24 pt-3">
                    Les présentes conditions générales ("accord") définissent les conditions générales d'utilisation du
                    site web https://astrology-lotus.com ("site web" ou "service") et de tous ses produits et services
                    connexes (collectivement, "services"). Cet accord est juridiquement contraignant entre vous
                    ("utilisateur", "vous" ou "votre") et astrology-lotus est une marque commerciale Astroveo B.V.
                    ("astrology-lotus est une marque commerciale Astroveo B.V.", "nous", "notre" ou
                    "nos"). Si vous concluez cet accord au nom d'une entreprise ou d'une autre entité légale, vous
                    déclarez que vous avez le pouvoir de lier cette entité à cet accord, auquel cas les termes
                    "utilisateur", "vous" ou "votre" feront référence à cette entité. Si vous n'avez pas ce pouvoir ou
                    si vous n'êtes pas d'accord avec les conditions du présent accord, vous ne devez pas accepter cet
                    accord et ne pouvez pas accéder au site Web et aux services ni les utiliser. En accédant au site Web
                    et aux services et en les utilisant, vous reconnaissez avoir lu, compris et accepté d'être lié par
                    les conditions du présent accord. Vous reconnaissez que cet accord est un contrat entre vous et
                    astrology-lotus est une marque commerciale Astroveo B.V., même s'il est électronique et n'est pas
                    physiquement signé par vous, et qu'il
                    régit votre utilisation du site Web et des services.<br>


                    <b class="py-1 mt-2 d-block">Âge requis</b>

                    Vous devez être âgé d'au moins 18 ans pour utiliser le site Web et les services. En utilisant le
                    site Web et les services et en acceptant le présent accord, vous garantissez et déclarez que vous
                    avez au moins 18 ans.<br>


                    <b class="py-1 d-block mt-2">Facturation et paiements</b>

                    Vous devez payer tous les frais ou charges sur votre compte conformément aux frais, charges et
                    conditions de facturation en vigueur au moment où les frais ou charges sont dus et payables. Lorsque
                    les Services sont offerts à titre d'essai gratuit, le paiement peut être exigé après la fin de la
                    période d'essai gratuit, et non lorsque vous saisissez vos coordonnées de facturation (qui peuvent
                    être requises avant le début de la période d'essai gratuit). Si, à notre avis, votre achat constitue
                    une transaction à haut risque, nous vous demanderons de nous fournir une copie d'une pièce
                    d'identité valide avec photo émise par un gouvernement, et éventuellement une copie d'un relevé
                    bancaire récent pour la carte de crédit ou de débit utilisée pour l'achat. Nous nous réservons le
                    droit de modifier les produits et leurs prix à tout moment. Nous nous réservons également le droit
                    de refuser toute commande que vous nous confiez. Nous pouvons, à notre seule discrétion, limiter ou
                    annuler les quantités achetées par personne, par foyer ou par commande. Ces restrictions peuvent
                    inclure les commandes passées par ou sous le même compte client, la même carte de crédit, et/ou les
                    commandes utilisant la même adresse de facturation et/ou de livraison. Si nous modifions ou annulons
                    une commande, nous pouvons tenter de vous en informer en contactant l'adresse électronique et/ou
                    l'adresse de facturation/le numéro de téléphone fournis au moment de la commande.<br>


                    <b class="py-1 d-block mt-2">Exactitude de l'information</b>

                    Il peut arriver que des informations sur le site Web contiennent des erreurs typographiques, des
                    inexactitudes ou des omissions qui peuvent concerner les descriptions de produits, les prix, les
                    promotions et les offres. Nous nous réservons le droit de corriger toute erreur, inexactitude ou
                    omission, et de modifier ou mettre à jour les informations ou d'annuler les commandes si des
                    informations sur le site Web ou les services sont inexactes, à tout moment et sans préavis (y
                    compris après que vous ayez soumis votre commande). Nous ne nous engageons pas à mettre à jour,
                    modifier ou clarifier les informations sur le site Web, y compris, sans s'y limiter, les
                    informations sur les prix, sauf si la loi l'exige. Aucune date de mise à jour ou d'actualisation
                    spécifiée appliquée sur le site Web ne doit être considérée comme indiquant que toutes les
                    informations sur le site Web ou les services ont été modifiées ou mises à jour.<br>


                    <b class="py-1 d-block mt-2">Services de tiers</b>

                    Si vous décidez d'activer, d'accéder ou d'utiliser des services tiers, sachez que votre accès et
                    votre utilisation de ces autres services sont régis uniquement par les conditions générales de ces
                    autres services, et que nous n'approuvons pas, ne sommes pas responsables et ne faisons aucune
                    déclaration quant à tout aspect de ces autres services, y compris, sans s'y limiter, leur contenu ou
                    la manière dont ils traitent les données (y compris vos données) ou toute interaction entre vous et
                    le fournisseur de ces autres services. Vous renoncez irrévocablement à toute réclamation contre
                    astrology-lotus est une marque commerciale Astroveo B.V. en ce qui concerne ces autres services.
                    astrology-lotus est une marque commerciale Astroveo B.V. n'est pas
                    responsable de tout dommage ou perte causé ou supposé être causé par ou en relation avec votre
                    activation, accès ou utilisation de ces autres services, ou votre confiance dans les pratiques de
                    confidentialité, les processus de sécurité des données ou autres politiques de ces autres services.
                    Il peut vous être demandé de vous inscrire ou de vous connecter à ces autres services sur leurs
                    plateformes respectives. En activant tout autre service, vous autorisez expressément Astroveo
                    B.V. à divulguer vos données si nécessaire pour faciliter l'utilisation ou l'activation de cet autre
                    service.<br>


                    <b class="py-1 d-block mt-2">Garantie de disponibilité</b>

                    Nous offrons une garantie de disponibilité du service de 99 % du temps disponible par mois. Si nous
                    ne parvenons pas à respecter cette garantie de disponibilité du service au cours d'un mois donné
                    (selon notre seule appréciation), vous pouvez nous contacter et demander un crédit sur vos frais de
                    service pour ce mois. Le crédit ne peut être utilisé que pour l'achat d'autres produits et services
                    auprès de nous, et ne comprend pas les taxes applicables. La garantie de temps de fonctionnement du
                    service ne s'applique pas aux interruptions de service causées par : (1) une maintenance ou des
                    réparations périodiques programmées que nous pouvons entreprendre de temps à autre ; (2) des
                    interruptions causées par vous ou vos activités ; (3) des pannes qui n'affectent pas les
                    fonctionnalités de base du Service ; (4) des causes indépendantes de notre volonté ou qui ne sont
                    pas raisonnablement prévisibles ; et (5) des pannes liées à la fiabilité de certains environnements
                    de programmation.<br>


                    <b class="py-1 d-block mt-2">Liens vers d'autres ressources</b>

                    Bien que le site Web et les services puissent être liés à d'autres ressources (telles que des sites
                    Web, des applications mobiles, etc.), nous n'impliquons pas, directement ou indirectement, une
                    approbation, une association, un parrainage, une approbation ou une affiliation avec toute ressource
                    liée, sauf indication spécifique dans les présentes. Certains des liens figurant sur le site Web
                    peuvent être des "liens affiliés". Cela signifie que si vous cliquez sur le lien et achetez un
                    article, astrology-lotus est une marque commerciale Astroveo B.V. recevra une commission
                    d'affiliation. Nous ne sommes pas responsables
                    de l'examen ou de l'évaluation, et nous ne garantissons pas les offres de toute entreprise ou de
                    tout individu, ni le contenu de leurs ressources. Nous n'assumons aucune responsabilité pour les
                    actions, les produits, les services et le contenu de tout autre tiers. Vous devez examiner
                    attentivement les déclarations juridiques et autres conditions d'utilisation de toute ressource à
                    laquelle vous accédez par un lien sur le site Web. Votre connexion à toute autre ressource hors site
                    est à vos propres risques.<br>


                    <b class="py-1 d-block mt-2">Exclusion de garantie</b>
                    Vous convenez que ce service est fourni "tel quel" et "tel que disponible" et que vous utilisez le
                    site Web et les services à vos propres risques. Nous déclinons expressément toute garantie de
                    quelque nature que ce soit, expresse ou implicite, y compris, mais sans s'y limiter, les garanties
                    implicites de qualité marchande, d'adéquation à un usage particulier et d'absence de contrefaçon.
                    Nous ne garantissons pas que les services répondront à vos besoins, ni que le service sera
                    ininterrompu, opportun, sûr ou exempt d'erreurs ; nous ne garantissons pas non plus les résultats
                    qui peuvent être obtenus par l'utilisation du service, ni l'exactitude ou la fiabilité de toute
                    information obtenue par le biais du service, ni que les défauts du service seront corrigés. Vous
                    comprenez et acceptez que tout matériel et/ou toute donnée téléchargée ou autrement obtenue par
                    l'utilisation du Service l'est à votre propre discrétion et à vos propres risques et que vous serez
                    seul responsable de tout dommage ou perte de données résultant du téléchargement de ce matériel
                    et/ou de ces données. Nous ne donnons aucune garantie concernant les biens ou services achetés ou
                    obtenus par le biais du Service ou les transactions effectuées par le biais du Service, sauf
                    indication contraire. Aucun conseil ni aucune information, qu'ils soient oraux ou écrits, obtenus
                    par vous auprès de nous ou par le biais du Service ne sauraient créer de garantie non expressément
                    formulée dans les présentes.<br>


                    <b class="py-1 d-block mt-2">Changements et modifications</b>

                    Nous nous réservons le droit de modifier le présent accord ou ses conditions relatives au site Web
                    et aux services à tout moment et à notre discrétion. Lorsque nous le ferons, nous réviserons la date
                    de mise à jour au bas de cette page. Nous pouvons également vous informer par d'autres moyens, à
                    notre discrétion, notamment par le biais des informations de contact que vous avez fournies.<br>

                    Une version mise à jour du présent accord entrera en vigueur immédiatement après la publication de
                    l'accord révisé, sauf indication contraire. Votre utilisation continue du site Web et des services
                    après la date d'entrée en vigueur de l'accord révisé (ou tout autre acte spécifié à ce moment-là)
                    constituera votre consentement à ces modifications.<br>


                    <b class="py-1 d-block mt-2">Acceptation des présentes conditions</b>

                    Vous reconnaissez avoir lu le présent accord et en accepter tous les termes et conditions. En
                    accédant et en utilisant le site Web et les services, vous acceptez d'être lié par le présent
                    accord. Si vous n'acceptez pas de respecter les termes de cet accord, vous n'êtes pas autorisé à
                    accéder ou à utiliser le site Web et les services.<br>


                    <b class="py-1 d-block mt-2">Nous contacter</b><br>

                    Si vous avez des questions, des préoccupations ou des plaintes concernant le présent accord, nous
                    vous encourageons à nous contacter en utilisant les coordonnées ci-dessous :<br>


                    https://astrology-lotus.com/<br>

                    Ce document a été mis à jour le 8 avril 2022.<br>

                    CLAUSE DE NON-RESPONSABILITÉ
                </p>

            </div>
        </div>
    </div>
</div>
<!-- privacy policy modal -->
<div class="astrology-offerpage-hlp-pop modal fade contact_us_popup" id="help_pp" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0 border-0">
            <h5 class="modal-title text-center arial text-white fw-bold font-26"
                id="exampleModalLabel"><?= $contact; ?></h5>
            <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <p class="arial fw-light mb-4 text-black font-16 line-height-24 pt-3">
                    Nous respectons votre vie privée et nous nous engageons à la protéger en nous conformant à la
                    présente politique de confidentialité ("Politique"). La présente politique décrit les types
                    d'informations que nous pouvons recueillir auprès de vous ou que vous pouvez fournir ("Informations
                    personnelles") sur le site Web astrology-lotus.com ("Site Web" ou "Service") et l'un de ses produits
                    et services connexes (collectivement, "Services"), ainsi que nos pratiques en matière de collecte,
                    d'utilisation, de conservation, de protection et de divulgation de ces Informations personnelles.
                    Elle décrit également les choix qui s'offrent à vous concernant l'utilisation de vos informations
                    personnelles et la manière dont vous pouvez y accéder et les mettre à jour.<br>
                    Cette politique est un accord juridiquement contraignant entre vous ("utilisateur", "vous" ou
                    "votre") et astrology-lotus est une marque commerciale Astroveo B.V. ("astrology-lotus est une
                    marque commerciale Astroveo B.V.", "nous", "notre" ou "nos"). Si vous concluez
                    cet accord au nom d'une entreprise ou d'une autre entité légale, vous déclarez que vous avez le
                    pouvoir de lier cette entité à cet accord, auquel cas les termes "utilisateur", "vous" ou "votre"
                    feront référence à cette entité. Si vous n'avez pas ce pouvoir ou si vous n'êtes pas d'accord avec
                    les conditions du présent accord, vous ne devez pas accepter cet accord et ne pouvez pas accéder au
                    site Web et aux services ni les utiliser. En accédant au site Web et aux services et en les
                    utilisant, vous reconnaissez avoir lu, compris et accepté d'être lié par les conditions de la
                    présente politique. La présente politique ne s'applique pas aux pratiques des sociétés que nous ne
                    possédons pas ou ne contrôlons pas, ni aux personnes que nous n'employons pas ou ne gérons pas.<br>

                    <b class="mt-2 d-block py-1">Collecte automatique d'informations</b>

                    Lorsque vous ouvrez le site Web, nos serveurs enregistrent automatiquement les informations que
                    votre navigateur envoie. Ces données peuvent inclure des informations telles que l'adresse IP de
                    votre appareil, le type et la version de votre navigateur, le type et la version de votre système
                    d'exploitation, vos préférences linguistiques ou la page web que vous visitiez avant d'arriver sur
                    le site web et les services, les pages du site web et des services que vous visitez, le temps passé
                    sur ces pages, les informations que vous recherchez sur le site web, les heures et les dates d'accès
                    et d'autres statistiques.<br>

                    Les informations recueillies automatiquement sont utilisées uniquement pour identifier les cas
                    potentiels d'abus et établir des informations statistiques concernant l'utilisation et le trafic du
                    site Web et des services. Ces informations statistiques ne sont pas autrement agrégées de manière à
                    identifier un utilisateur particulier du système.<br>

                    <b class="mt-2 d-block py-1">Collecte d'informations personnelles</b>

                    Vous pouvez accéder au site Web et aux services et les utiliser sans nous dire qui vous êtes ni
                    révéler d'informations permettant à quelqu'un de vous identifier en tant qu'individu spécifique et
                    identifiable. Toutefois, si vous souhaitez utiliser certaines des fonctions proposées sur le site
                    Web, il peut vous être demandé de fournir certaines informations personnelles (par exemple, votre
                    nom et votre adresse électronique).<br>

                    Nous recevons et stockons toute information que vous nous fournissez sciemment lorsque vous
                    effectuez un achat ou remplissez un formulaire sur le site Web. Lorsque cela est nécessaire, ces
                    informations peuvent inclure les éléments suivants :<br>

                    - Informations de contact (adresse électronique, numéro de téléphone, etc.)<br>
                    - Informations personnelles de base (telles que le nom, le pays de résidence, etc.)<br>
                    - les données de géolocalisation de votre appareil (telles que la latitude et la longitude).<br>

                    Vous pouvez choisir de ne pas nous fournir vos informations personnelles, mais il se peut alors que
                    vous ne puissiez pas profiter de certaines fonctionnalités du site Web. Les utilisateurs qui ne
                    savent pas quelles informations sont obligatoires sont invités à nous contacter.<br>

                    <b class="mt-2 d-block py-1">Vie privée des enfants</b>

                    Nous ne recueillons pas sciemment de renseignements personnels auprès d'enfants âgés de moins de 18
                    ans. Si vous êtes âgé de moins de 18 ans, veuillez ne pas soumettre d'informations personnelles par
                    le biais du site Web et des services. Si vous avez des raisons de croire qu'un enfant de moins de 18
                    ans nous a fourni des informations personnelles par le biais du site Web et des services, veuillez
                    nous contacter pour nous demander de supprimer les informations personnelles de cet enfant de nos
                    services.<br>

                    We encourage parents and legal guardians to monitor their children’s Internet usage and to help
                    enforce this Policy by instructing their children never to provide Personal Information through the
                    Website and Services without their permission. We also ask that all parents and legal guardians
                    overseeing the care of children take the necessary precautions to ensure that their children are
                    instructed to never give out Personal Information when online without their permission.<br>

                    <b class="mt-2 d-block py-1">Utilisation et traitement des informations collectées</b>

                    Nous agissons en tant que contrôleur de données et processeur de données en termes de GDPR lors du
                    traitement des Informations personnelles, sauf si nous avons conclu un accord de traitement des
                    données avec vous, auquel cas vous seriez le contrôleur de données et nous serions le processeur de
                    données.<br>

                    Notre rôle peut également différer en fonction de la situation spécifique impliquant des
                    Informations personnelles. Nous agissons en qualité de contrôleur de données lorsque nous vous
                    demandons de soumettre vos Informations personnelles qui sont nécessaires pour assurer votre accès
                    et votre utilisation du Site Internet et des Services. Dans de tels cas, nous sommes un contrôleur
                    de données car nous déterminons les objectifs et les moyens du traitement des Informations
                    personnelles et nous nous conformons aux obligations des contrôleurs de données énoncées dans le
                    GDPR.<br>

                    Nous agissons en qualité de processeur de données dans les situations où vous soumettez des
                    Informations personnelles par le biais du Site Internet et des Services. Nous ne possédons pas, ne
                    contrôlons pas et ne prenons pas de décisions concernant les Informations personnelles soumises, et
                    ces Informations personnelles sont traitées uniquement conformément à vos instructions. Dans de tels
                    cas, l'Utilisateur qui fournit des Informations personnelles agit en tant que contrôleur de données
                    au sens du GDPR.<br>

                    Afin de mettre le Site Internet et les Services à votre disposition, ou pour répondre à une
                    obligation légale, nous pouvons avoir besoin de collecter et d'utiliser certaines Informations
                    personnelles. Si vous ne fournissez pas les informations<br>

                    que nous demandons, nous pourrions ne pas être en mesure de vous fournir les produits ou services
                    demandés. Toutes les informations que nous recueillons auprès de vous peuvent être utilisées aux
                    fins suivantes :<br>

                    - Accomplir et gérer les commandes<br>
                    - Fournir des produits ou des services<br>
                    - envoyer des informations administratives<br>
                    - répondre aux demandes de renseignements et offrir une assistance<br>
                    - améliorer l'expérience utilisateur<br>
                    - publier des témoignages de clients<br>
                    - gérer et exploiter le site Web et les services.<br>

                    Le traitement de vos informations personnelles dépend de la manière dont vous interagissez avec le
                    site Web et les services, de l'endroit où vous vous trouvez dans le monde et si l'un des cas
                    suivants s'applique : (i) vous avez donné votre consentement pour un ou plusieurs objectifs
                    spécifiques ; ceci ne s'applique toutefois pas, lorsque le traitement des Informations personnelles
                    est soumis à la loi californienne sur la protection de la vie privée des consommateurs ou à la loi
                    européenne sur la protection des données ; (ii) la fourniture d'informations est nécessaire à
                    l'exécution d'un accord avec vous et/ou à toute obligation précontractuelle de celui-ci ; (iii) le
                    traitement est nécessaire au respect d'une obligation légale à laquelle vous êtes soumis ; (iv) le
                    traitement est lié à une tâche effectuée dans l'intérêt public ou dans l'exercice de l'autorité
                    officielle dont nous sommes investis ; (v) le traitement est nécessaire aux fins des intérêts
                    légitimes poursuivis par nous ou par un tiers.<br>

                    Nous nous appuyons sur les bases juridiques suivantes, telles que définies dans le GDPR, sur
                    lesquelles nous collectons et traitons vos Informations personnelles :<br>

                    <b class="mt-2 d-block py-1">- Consentement de l'utilisateur</b>

                    Notez qu'en vertu de certaines législations, nous pouvons être autorisés à traiter des informations
                    jusqu'à ce que vous vous opposiez à ce traitement en vous désinscrivant, sans avoir à invoquer le
                    consentement ou une autre des bases juridiques ci-dessus. Dans tous les cas, nous serons heureux de
                    clarifier la base juridique spécifique qui s'applique au traitement, et en particulier si la
                    fourniture d'informations personnelles est une exigence légale ou contractuelle, ou une exigence
                    nécessaire pour conclure un contrat.<br>

                    <b class="mt-2 d-block py-1">Traitement des paiements</b>

                    Dans le cas de services nécessitant un paiement, vous devrez peut-être fournir les détails de votre
                    carte de crédit ou d'autres informations relatives à votre compte de paiement, qui ne seront
                    utilisées que pour le traitement des paiements. Nous utilisons des processeurs de paiement tiers
                    ("Processeurs de paiement") pour nous aider à traiter vos informations de paiement en toute
                    sécurité.<br>

                    Les processeurs de paiement adhèrent aux dernières normes de sécurité gérées par le Conseil des
                    normes de sécurité PCI, qui est un effort conjoint de marques comme Visa, MasterCard, American
                    Express et Discover. L'échange de données sensibles et privées s'effectue par le biais d'un canal de
                    communication sécurisé SSL et est crypté et protégé par des signatures numériques. Le site Web et
                    les services sont également conformes à des normes strictes en matière de vulnérabilité afin de
                    créer un environnement aussi sûr que possible pour les utilisateurs. Nous ne partagerons les données
                    de paiement avec les Processeurs de paiement que dans la mesure nécessaire au traitement de vos
                    paiements, au remboursement de ces paiements et au traitement des plaintes et des demandes liées à
                    ces paiements et remboursements.<br>

                    Veuillez noter que les Traitements de paiement peuvent recueillir certaines de vos Données
                    personnelles, qui leur permettent de traiter vos paiements (par exemple, votre adresse électronique,
                    votre adresse, les détails de votre carte de crédit et votre numéro de compte bancaire) et de gérer
                    toutes les étapes du processus de paiement par le biais de leurs systèmes, y compris la collecte et
                    le traitement des données. L'utilisation de vos Informations personnelles par les Processeurs de
                    paiement est régie par leurs politiques de confidentialité respectives qui peuvent ou non contenir
                    des protections de la vie privée aussi protectrices que la présente Politique. Nous vous suggérons
                    de consulter leurs politiques de confidentialité respectives.<br>

                    <b class="mt-2 d-block py-1">Divulgation d'informations</b>

                    En fonction des services demandés ou si cela s'avère nécessaire pour effectuer une transaction ou
                    fournir un service que vous avez demandé, nous pouvons partager vos informations avec nos filiales
                    et partenaires de coentreprise de confiance, nos sociétés affiliées, nos sociétés sous contrat et
                    nos prestataires de services (collectivement, les "prestataires de services") auxquels nous faisons
                    appel pour nous aider à exploiter le site Web et les services mis à votre disposition et dont les
                    politiques de confidentialité sont conformes aux nôtres ou qui acceptent de respecter nos politiques
                    en matière de renseignements personnels. Nous ne partagerons aucune information avec des tiers non
                    affiliés.<br>

                    Les fournisseurs de services ne sont pas autorisés à utiliser ou à divulguer vos informations, sauf
                    si cela est nécessaire pour fournir des services en notre nom ou pour se conformer aux exigences
                    légales. Les fournisseurs de services reçoivent les informations dont ils ont besoin uniquement pour
                    remplir leurs fonctions désignées, et nous ne les autorisons pas à utiliser ou à divulguer les
                    informations fournies pour leur propre marketing ou à d'autres fins. Nous ne partagerons et ne
                    divulguerons vos informations qu'avec les catégories suivantes de prestataires de services :<br>
                    - Programmes d'affiliation<br>
                    - processeurs de paiement<br>

                    <b class="mt-2 d-block py-1">Conservation de l'information</b>

                    Nous conserverons et utiliserons vos informations personnelles pendant la période nécessaire pour
                    nous conformer à nos obligations légales, pour faire appliquer nos accords, pour résoudre les
                    litiges, et à moins qu'une période de conservation plus longue ne soit requise ou autorisée par la
                    loi.<br>

                    Nous pouvons utiliser toute donnée agrégée dérivée de ou incorporant vos Informations personnelles
                    après que vous les ayez mises à jour ou supprimées, mais pas d'une manière qui vous identifierait
                    personnellement. Une fois la période de conservation expirée, les renseignements personnels seront
                    supprimés. Par conséquent, le droit d'accès, le droit d'effacement, le droit de rectification et le
                    droit à la portabilité des données ne peuvent être appliqués après l'expiration de la période de
                    conservation.<br>

                    <b class="mt-2 d-block py-1">Transfert d'informations</b>

                    En fonction de votre localisation, les transferts de données peuvent impliquer le transfert et le
                    stockage de vos informations dans un pays autre que le vôtre. Toutefois, cela n'inclut pas les pays
                    situés en dehors de l'Union européenne et de l'Espace économique européen. Si un tel transfert a
                    lieu, vous pouvez en savoir plus en consultant les sections pertinentes de la présente politique ou
                    vous renseigner auprès de nous en utilisant les informations fournies dans la section contact.<br>

                    <b class="mt-2 d-block py-1">Droits de protection des données en vertu du GDPR</b>

                    Si vous êtes un résident de l'Espace économique européen ("EEE"), vous disposez de certains droits
                    en matière de protection des données et nous nous efforçons de prendre des mesures raisonnables pour
                    vous permettre de corriger, modifier, supprimer ou limiter l'utilisation de vos Informations
                    personnelles. Si vous souhaitez être informé des informations personnelles que nous détenons à votre
                    sujet et si vous voulez qu'elles soient supprimées de nos systèmes, veuillez nous contacter. Dans
                    certaines circonstances, vous disposez des droits suivants en matière de protection des données
                    :<br>

                    (i) Vous avez le droit de retirer votre consentement lorsque vous avez précédemment donné votre
                    consentement au traitement de vos Informations personnelles. Dans la mesure où la base juridique de
                    notre traitement de vos Informations personnelles est le consentement, vous avez le droit de retirer
                    ce consentement à tout moment. Le retrait n'affectera pas la légalité du traitement avant le
                    retrait.<br>

                    (ii) Vous avez le droit de savoir si nous traitons vos informations personnelles, d'obtenir des
                    informations sur certains aspects du traitement et d'obtenir une copie de vos informations
                    personnelles en cours de traitement.<br>

                    (iii) Vous avez le droit de vérifier l'exactitude de vos informations et de demander qu'elles soient
                    mises à jour ou corrigées. Vous avez également le droit de nous demander de compléter les
                    informations personnelles qui, selon vous, sont incomplètes.<br>

                    (iv) Vous avez le droit de vous opposer au traitement de vos informations si le traitement est
                    effectué sur une base juridique autre que le consentement. Lorsque les Informations personnelles
                    sont traitées dans l'intérêt public, dans l'exercice d'une autorité officielle dont nous sommes
                    investis, ou aux fins des intérêts légitimes que nous poursuivons, vous pouvez vous opposer à ce
                    traitement en fournissant un motif lié à votre situation particulière pour justifier l'objection.
                    Sachez toutefois que si vos Informations personnelles sont traitées à des fins de marketing direct,
                    vous pouvez vous opposer à ce traitement à tout moment sans fournir de justification. Pour savoir si
                    nous traitons des Informations personnelles à des fins de marketing direct, vous pouvez vous référer
                    aux sections pertinentes de la présente Politique.<br>
                    (v) Vous avez le droit, dans certaines circonstances, de restreindre le traitement de vos
                    informations personnelles. Ces circonstances sont les suivantes : vous contestez l'exactitude de vos
                    informations personnelles et nous devons vérifier leur exactitude ; le traitement est illégal, mais
                    vous vous opposez à l'effacement de vos informations personnelles et demandez plutôt la restriction
                    de leur utilisation ; nous n'avons plus besoin de vos informations personnelles aux fins du
                    traitement, mais vous en avez besoin pour établir, exercer ou défendre vos revendications légales ;
                    vous vous êtes opposé au traitement en attendant de vérifier si nos motifs légitimes prévalent sur
                    les vôtres. Lorsque le traitement a été limité, ces informations personnelles seront marquées en
                    conséquence et, à l'exception du stockage, ne seront traitées qu'avec votre consentement ou pour la
                    constatation, l'exercice ou la défense de droits en justice, pour la protection des droits d'une
                    autre personne physique ou morale ou pour des raisons d'intérêt public important.<br>

                    (vi) Vous avez le droit, dans certaines circonstances, d'obtenir de nous l'effacement de vos
                    informations personnelles. Ces circonstances sont les suivantes : les Informations personnelles ne
                    sont plus nécessaires au regard des finalités pour lesquelles elles ont été collectées ou autrement
                    traitées ; vous retirez votre consentement à un traitement basé sur le consentement ; vous vous
                    opposez au traitement en vertu de certaines règles de la législation applicable en matière de
                    protection des données ; le traitement est effectué à des fins de marketing direct ; et les données
                    personnelles ont été traitées illégalement. Toutefois, il existe des exclusions du droit à
                    l'effacement, comme lorsque le traitement est nécessaire : pour l'exercice du droit à la liberté
                    d'expression et d'information ; pour le respect d'une obligation légale ; ou pour la constatation,
                    l'exercice ou la défense de droits en justice.<br>

                    (vii) Vous avez le droit de recevoir les Données Personnelles que vous nous avez fournies dans un
                    format structuré, couramment utilisé et lisible par machine et, si cela est techniquement possible,
                    de les faire transmettre à un autre contrôleur sans aucune entrave de notre part, à condition que
                    cette transmission ne porte pas atteinte aux droits et libertés d'autrui.<br>

                    (viii) Vous avez le droit de vous plaindre auprès d'une autorité de protection des données au sujet
                    de notre collecte et de notre utilisation de vos informations personnelles. Si vous n'êtes pas
                    satisfait de l'issue de votre plainte directement auprès de nous, vous avez le droit de déposer une
                    plainte auprès de votre autorité locale de protection des données. Pour plus d'informations,
                    veuillez contacter votre autorité locale de protection des données dans l'EEE. Cette disposition est
                    applicable à condition que vos Informations personnelles soient traitées par des moyens automatisés
                    et que le traitement soit fondé sur votre consentement, sur un contrat auquel vous participez ou sur
                    des obligations précontractuelles de celui-ci.<br>

                    <b class="mt-2 d-block py-1">Droit à la vie privée en Californie</b>

                    Les consommateurs résidant en Californie bénéficient de certains droits supplémentaires concernant
                    leurs informations personnelles en vertu de la loi californienne sur la protection de la vie privée
                    des consommateurs ("CCPA"). Si vous êtes un résident de Californie, cette section s'applique à vous.<br>

                    Outre les droits expliqués dans la présente politique, les résidents de Californie qui fournissent
                    des informations personnelles telles que définies dans la loi pour obtenir des services à des fins
                    personnelles, familiales ou domestiques ont le droit de demander et d'obtenir de notre part, une
                    fois par année civile, des informations sur les catégories et les éléments spécifiques des
                    informations personnelles que nous avons collectées et divulguées.<br>

                    En outre, les résidents de Californie ont le droit de demander la suppression de leurs informations
                    personnelles ou de refuser la vente de leurs informations personnelles, ce qui peut inclure la
                    vente, la divulgation ou le transfert d'informations personnelles à une autre entreprise ou à un
                    tiers en échange d'une contrepartie monétaire ou d'une autre valeur. Pour ce faire, il suffit de
                    nous contacter. Nous ne ferons aucune discrimination à votre encontre si vous exercez vos droits en
                    vertu de la CCPA.<br>

                    <b class="mt-2 d-block py-1">Comment exercer vos droits</b>


                    Toute demande d'exercice de vos droits peut nous être adressée par le biais des coordonnées fournies
                    dans ce document. Veuillez noter que nous pouvons vous demander de vérifier votre identité avant de
                    répondre à ces demandes. Votre demande doit fournir des informations suffisantes pour nous permettre
                    de vérifier que vous êtes la personne que vous prétendez être ou que vous êtes le représentant
                    autorisé de cette personne. Si nous recevons votre demande de la part d'un représentant autorisé,
                    nous pouvons demander la preuve que vous avez fourni à ce représentant autorisé une procuration ou
                    que le représentant autorisé a autrement une autorité écrite valide pour soumettre des demandes en
                    votre nom.<br>

                    Vous devez inclure suffisamment de détails pour nous permettre de comprendre correctement la demande
                    et d'y répondre. Nous ne pouvons pas répondre à votre demande ou vous fournir des informations
                    personnelles si nous n'avons pas d'abord vérifié votre identité ou votre autorité pour faire une
                    telle demande et confirmé que les informations personnelles vous concernent.<br>

                    <b class="mt-2 d-block py-1">Cookies</b>


                    Notre site Web et nos services utilisent des "cookies" pour aider à personnaliser votre expérience
                    en ligne. Un cookie est un fichier texte qui est placé sur votre disque dur par un serveur de pages
                    Web. Les cookies ne peuvent pas être utilisés pour exécuter des programmes ou transmettre des virus
                    à votre ordinateur. Les cookies vous sont attribués de manière unique et ne peuvent être lus que par
                    un serveur web du domaine qui a émis le cookie à votre intention. Si vous choisissez de refuser les
                    cookies, il se peut que vous ne puissiez pas profiter pleinement des fonctionnalités du site web et
                    des services. Vous pouvez en savoir plus sur les cookies et leur fonctionnement ici.<br>

                    Nous pouvons utiliser des cookies pour collecter, stocker et suivre des informations à des fins de
                    sécurité et de personnalisation, pour faire fonctionner le site Web et les services, et à des fins
                    statistiques. Pour plus d'informations sur les cookies que nous collectons et leur objectif,
                    consultez notre politique en matière de cookies. Veuillez noter que vous avez la possibilité
                    d'accepter ou de refuser les cookies. La plupart des navigateurs web acceptent automatiquement les
                    cookies par défaut, mais vous pouvez modifier les paramètres de votre navigateur pour refuser les
                    cookies si vous le préférez.<br>

                    <b class="mt-2 d-block py-1">Analyse des données</b>

                    Notre site Web et nos services peuvent utiliser des outils d'analyse tiers qui utilisent des
                    cookies, des balises Web ou d'autres technologies similaires de collecte d'informations pour
                    recueillir des informations standard sur l'activité et l'utilisation d'Internet. Les informations
                    recueillies sont utilisées pour compiler des rapports statistiques sur l'activité des utilisateurs,
                    comme la fréquence à laquelle ils visitent notre site web et nos services, les pages qu'ils visitent
                    et leur durée, etc. Nous utilisons les informations obtenues à partir de ces outils d'analyse pour
                    surveiller les performances et améliorer notre site Web et nos services.<br>

                    <b class="mt-2 d-block py-1">Signaux de non-traçage</b>

                    Certains navigateurs intègrent une fonction "Ne pas suivre" qui signale aux sites Web que vous
                    visitez que vous ne souhaitez pas que votre activité en ligne soit suivie. Le suivi n'est pas la
                    même chose que l'utilisation ou la collecte d'informations en rapport avec un site web. À ces fins,
                    le suivi désigne la collecte d'informations personnellement identifiables auprès des consommateurs
                    qui utilisent ou visitent un site web ou un service en ligne lorsqu'ils se déplacent sur différents
                    sites web au fil du temps. La manière dont les navigateurs communiquent le signal "Do Not Track"
                    n'est pas encore uniforme. Par conséquent, le site Web et les services ne sont pas encore configurés
                    pour interpréter ou répondre aux signaux Do Not Track communiqués par votre navigateur. Malgré cela,
                    comme décrit plus en détail dans la présente politique, nous limitons notre utilisation et notre
                    collecte de vos informations personnelles.<br>

                    <b class="mt-2 py-1 d-block">Annonces</b>

                    Nous pouvons autoriser certaines sociétés tierces à nous aider à adapter la publicité que nous
                    pensons pouvoir intéresser les utilisateurs et à recueillir et utiliser d'autres données sur les
                    activités des utilisateurs sur le site web. Ces sociétés peuvent diffuser des publicités
                    susceptibles de placer des cookies et de suivre le comportement des utilisateurs.<br>

                    <b class="mt-2 py-1 d-block">Marketing par courriel</b>

                    Nous proposons des bulletins d'information électroniques auxquels vous pouvez vous abonner
                    volontairement à tout moment. Nous nous engageons à garder votre adresse électronique confidentielle
                    et ne la divulguerons pas à des tiers, sauf dans les cas autorisés dans la section sur l'utilisation
                    et le traitement des informations. Nous conserverons les informations envoyées par e-mail
                    conformément aux lois et réglementations applicables.<br>

                    Conformément à la loi CAN-SPAM, tous les courriers électroniques envoyés par nous indiqueront
                    clairement l'identité de l'expéditeur et fourniront des informations claires sur la manière de le
                    contacter. Vous pouvez choisir de ne plus recevoir notre bulletin d'information ou nos courriels de
                    marketing en suivant les instructions de désabonnement incluses dans ces courriels ou en nous
                    contactant. Toutefois, vous continuerez à recevoir les courriels transactionnels essentiels.<br>

                    <b class="mt-2 py-1 d-block">Notifications push</b>

                    Nous proposons des notifications push auxquelles vous pouvez également vous abonner volontairement à
                    tout moment. Pour nous assurer que les notifications push atteignent les bons appareils, nous
                    utilisons un fournisseur tiers de notifications push qui s'appuie sur un jeton d'appareil unique
                    pour votre appareil, émis par le système d'exploitation de votre appareil. Bien qu'il soit possible
                    d'accéder à une liste de jetons d'appareil, ceux-ci ne révèleront pas votre identité, l'identifiant
                    unique de votre appareil ou vos coordonnées à nous ou à notre fournisseur tiers de notifications
                    push. Nous conserverons les informations envoyées par e-mail conformément aux lois et
                    réglementations applicables. Si, à tout moment, vous souhaitez ne plus recevoir de notifications
                    push, il vous suffit de régler les paramètres de votre appareil en conséquence.<br>

                    <b class="mt-2 py-1 d-block">Liens d'affiliation</b>

                    Nous pouvons nous engager dans le marketing d'affiliation et avoir des liens d'affiliation présents
                    sur le site Web et les services dans le but de pouvoir vous offrir des produits et services connexes
                    ou supplémentaires. Si vous cliquez sur un lien d'affiliation, un cookie sera placé sur votre
                    navigateur pour suivre les ventes à des fins de commissions.<br>

                    <b class="mt-2 py-1 d-block">Liens vers d'autres ressources</b>

                    Le site Web et les services contiennent des liens vers d'autres ressources qui ne sont pas détenues
                    ou contrôlées par nous. Sachez que nous ne sommes pas responsables des pratiques de confidentialité
                    de ces autres ressources ou tiers. Nous vous encourageons à être attentif lorsque vous quittez le
                    site Web et les services et à lire les déclarations de confidentialité de chaque ressource
                    susceptible de recueillir des informations personnelles.<br>

                    <b class="mt-2 py-1 d-block">Sécurité de l'information</b>

                    Nous sécurisons les informations que vous fournissez sur des serveurs informatiques dans un
                    environnement contrôlé et sécurisé, protégé contre tout accès, utilisation ou divulgation non
                    autorisés. Nous maintenons des mesures de protection administratives, techniques et physiques
                    raisonnables afin de nous protéger contre l'accès, l'utilisation, la modification et la divulgation
                    non autorisés des informations personnelles sous notre contrôle et notre garde. Toutefois, aucune
                    transmission de données sur Internet ou sur un réseau sans fil ne peut être garantie.<br>

                    Par conséquent, bien que nous nous efforcions de protéger vos Informations personnelles, vous
                    reconnaissez (i) qu'il existe des limites de sécurité et de confidentialité sur Internet qui
                    échappent à notre contrôle ; (ii) que la sécurité, l'intégrité et la confidentialité de toutes les
                    informations et données échangées entre vous et le site Web et les Services ne peuvent être
                    garanties ; et (iii) que ces informations et données peuvent être consultées ou altérées en transit
                    par un tiers, malgré tous les efforts déployés.<br>

                    Étant donné que la sécurité des informations personnelles dépend en partie de la sécurité de
                    l'appareil que vous utilisez pour communiquer avec nous et de la sécurité que vous utilisez pour
                    protéger vos informations d'identification, veuillez prendre les mesures appropriées pour protéger
                    ces informations.<br>

                    <b class="mt-2 py-1 d-block">Violation de données</b>

                    Si nous apprenons que la sécurité du site Web et des services a été compromise ou que les
                    informations personnelles des utilisateurs ont été divulguées à des tiers non liés en raison d'une
                    activité externe, y compris, mais sans s'y limiter, des attaques de sécurité ou une fraude, nous
                    nous réservons le droit de prendre des mesures raisonnablement appropriées, y compris, mais sans s'y
                    limiter, une enquête et un rapport, ainsi que la notification aux autorités chargées de
                    l'application de la loi et la coopération avec celles-ci. En cas de violation de données, nous
                    ferons des efforts raisonnables pour notifier les personnes concernées si nous pensons qu'il existe
                    un risque raisonnable de préjudice pour l'utilisateur en raison de la violation ou si la
                    notification est autrement requise par la loi. Dans ce cas, nous publierons un avis sur le site web.<br>

                    <b class="mt-2 py-1 d-block">Changements et modifications</b>

                    Nous nous réservons le droit de modifier la présente politique ou ses conditions relatives au site
                    Web et aux services à tout moment et à notre discrétion. Lorsque nous le ferons, nous réviserons la
                    date de mise à jour au bas de cette page. Nous pouvons également vous informer par d'autres moyens,
                    à notre discrétion, notamment par le biais des informations de contact que vous avez fournies.<br>

                    Une version mise à jour de la présente Politique entrera en vigueur immédiatement après la
                    publication de la Politique révisée, sauf indication contraire. Votre utilisation continue du site
                    Web et des services après la date d'entrée en vigueur de la politique révisée (ou tout autre acte
                    spécifié à ce moment-là) constituera votre consentement à ces changements. Toutefois, nous
                    n'utiliserons pas, sans votre consentement, vos informations personnelles d'une manière
                    matériellement différente de ce qui était indiqué au moment de la collecte de vos informations
                    personnelles.<br>

                    <b class="mt-2 py-1 d-block">Acceptation de la présente politique</b>


                    Vous reconnaissez avoir lu la présente politique et en accepter tous les termes et conditions. En
                    accédant et en utilisant le site Web et les services et en soumettant vos informations, vous
                    acceptez d'être lié par la présente politique. Si vous n'acceptez pas de respecter les conditions de
                    la présente politique, vous n'êtes pas autorisé à accéder au site Web et aux services ni à les
                    utiliser.<br>

                    <b class="mt-2 py-1 d-block">Nous contacter</b>


                    Si vous avez des questions, des préoccupations ou des plaintes concernant la présente Politique, les
                    informations que nous détenons à votre sujet, ou si vous souhaitez exercer vos droits, nous vous
                    encourageons à nous contacter en utilisant les coordonnées ci-dessous :<br>

                    https://astrology-lotus.com/<br>

                    Nous tenterons de résoudre les plaintes et les litiges et ferons tous les efforts raisonnables pour
                    honorer votre souhait d'exercer vos droits aussi rapidement que possible et, en tout état de cause,
                    dans les délais prévus par les lois applicables en matière de protection des données.<br>

                    Ce document a été mis à jour le 11 avril 2022.

                </p>
            </div>
        </div>
    </div>
</div>
<!-- rules modal -->
<div class="astrology-offerpage-tc-popup modal fade contact_us_popup" id="terms_pp" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0 border-0">
            <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">RÈGLES
                ÉTHIQUES</h5>
            <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <p class="arial fw-light mb-4 text-black font-16 line-height-24 pt-3">
                    <b class="mt-2 py-2 d-block">Principe 1 : Respect de la personne</b>

                    Les produits et services fournis par Astrology Lotus ne sont pas destinés aux personnes :<br>

                    - En difficulté financière<br>
                    - Mineurs<br>
                    - Qui ne sont pas en pleine possession de leurs facultés mentales<br>

                    <b class="mt-2 py-2 d-block">Principe 2 : Honnêteté, intégrité et équité</b>

                    Astrology Lotus et son personnel s'engagent pleinement à respecter les principes d'honnêteté,
                    d'intégrité et d'équité dans la fourniture de leurs produits et services à leurs clients.<br>

                    Tous les employés de la société veillent à ce que les transactions commerciales, les demandes de
                    services, les achats ou le recrutement de personnel soient traités de manière ouverte, équitable et
                    impartiale.<br>

                    La présente Charte définit les normes de conduite attendues de l'ensemble du personnel ainsi que la
                    politique de la Société en matière d'acceptation d'avantages et de gestion des conflits d'intérêts
                    dans le cadre des fonctions officielles.<br>

                    La présente charte s'applique également au personnel temporaire et à temps partiel employé par la
                    société.<br>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- gdpr modal -->
<div class="astrology-offerpage-tc-popup modal fade contact_us_popup" id="gdpr_popup" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0 border-0">
            <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">GDPR</h5>
            <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <p class="arial fw-light mb-4 text-black font-16 line-height-24 pt-3">Amiral de Ruijterweg 24 1056 GJ
                    Amsterdam Pays-Bas</p>
                <p class="arial fw-light mb-4 text-black font-16 line-height-24 pt-3">
                    Si vous résidez dans l'Espace économique européen ("EEE"), vous disposez de certains droits en
                    matière de protection des données et nous nous efforcerons de prendre des mesures raisonnables pour
                    vous permettre de corriger, modifier, supprimer ou restreindre l'utilisation de vos données
                    personnelles. . Si vous souhaitez savoir quelles informations personnelles nous détenons à votre
                    sujet et si vous souhaitez qu'elles soient supprimées de nos systèmes, veuillez nous contacter. Dans
                    certaines circonstances, vous disposez des droits suivants en matière de protection des
                    données :<br><br>
                    (i) Vous avez le droit de retirer votre consentement si vous avez précédemment consenti au
                    traitement de vos Données personnelles. Dans la mesure où la base juridique de notre traitement de
                    vos données personnelles est le consentement, vous avez le droit de retirer ce consentement à tout
                    moment. La révocation n'affecte pas la légalité du traitement avant la révocation.<br><br>
                    (ii) Vous avez le droit de savoir si vos données personnelles sont traitées par nous, d'obtenir des
                    informations sur certains aspects du traitement et d'obtenir une copie de vos données personnelles
                    en cours de traitement.<br><br>
                    (iii) Vous avez le droit de vérifier l'exactitude de vos informations et de demander qu'elles soient
                    mises à jour ou corrigées. Vous avez également le droit de nous demander de compléter toute donnée
                    personnelle que vous jugez incomplète.<br><br>
                    (iv) Vous avez le droit de vous opposer au traitement de vos données si le traitement est fondé sur
                    une base légale autre que le consentement. Lorsque les données personnelles sont traitées dans
                    l'intérêt public, dans l'exercice d'une autorité publique dont nous sommes investis, ou pour les
                    intérêts légitimes que nous poursuivons, vous pouvez vous opposer à ce traitement par un motif
                    spécifique lié à la situation pour justifier l'objection. Cependant, vous devez savoir que si vos
                    données personnelles sont traitées à des fins de marketing direct, vous pouvez vous opposer à ce
                    traitement à tout moment sans fournir de justification. Pour savoir si nous traitons des données
                    personnelles à des fins de marketing direct, veuillez vous référer aux sections correspondantes de
                    cette politique.<br><br>
                    (v) Vous avez le droit, dans certaines circonstances, de restreindre le traitement de vos données
                    personnelles. Ces circonstances incluent : l'exactitude de vos données personnelles est contestée
                    par vous et nous devons vérifier leur exactitude ; le traitement est illégal, mais vous vous opposez
                    à l'effacement de vos données personnelles et demandez plutôt la restriction de leur utilisation ;
                    nous n'avons plus besoin de vos Données Personnelles pour les finalités du traitement, mais vous en
                    avez besoin pour établir, exercer ou défendre vos droits légaux ; vous vous êtes opposé au
                    traitement en attendant de vérifier si nos motifs légitimes prévalent sur vos motifs légitimes.
                    Lorsque le traitement est limité, ces informations personnelles seront marquées en conséquence et, à
                    l'exception du stockage, traitées uniquement avec votre consentement ou pour la constatation,
                    l'exercice ou la défense de droits en justice, pour la protection des droits d'une autre personne
                    physique ou morale ou pour des raisons de grand intérêt public.<br><br>
                    (vi) Vous avez le droit, dans certaines circonstances, de nous faire supprimer vos informations
                    personnelles. Ces circonstances incluent : les données personnelles ne sont plus nécessaires au
                    regard des finalités pour lesquelles elles ont été collectées ou autrement traitées ; vous retirez
                    votre consentement au traitement fondé sur le consentement ; vous vous opposez au traitement en
                    vertu de certaines règles de la législation applicable en matière de protection des données ; le
                    traitement est à des fins de marketing direct ; et les données personnelles ont été traitées
                    illégalement. Toutefois, il existe des exceptions au droit à l'effacement, par exemple lorsque le
                    traitement est nécessaire : pour l'exercice du droit à la liberté d'expression et d'information ; se
                    conformer à une obligation légale; ou pour la constatation, l'exercice ou la défense d'un droit en
                    justice.<br><br>
                    (vii) Vous avez le droit de recevoir vos données personnelles que vous nous avez fournies dans un
                    format structuré, couramment utilisé et lisible par machine et, lorsque cela est techniquement
                    possible, de les faire transférer à un autre responsable du traitement sans aucune entrave de notre
                    part, à condition que que ce transfert ne porte pas atteinte aux droits et libertés
                    d'autrui.<br><br>
                    (viii) Vous avez le droit de déposer une plainte auprès d'une autorité de protection des données
                    concernant notre collecte et notre utilisation de vos informations personnelles. Si vous n'êtes pas
                    satisfait du résultat de votre plainte directement auprès de nous, vous avez le droit de déposer une
                    plainte auprès de votre autorité locale de protection des données. Pour plus d'informations,
                    veuillez contacter votre autorité locale de protection des données dans l'EEE. Cette disposition
                    s'applique à condition que vos données personnelles soient traitées par des moyens automatisés et
                    que le traitement soit fondé sur votre consentement, sur un contrat auquel vous êtes partie ou sur
                    des obligations précontractuelles de celui-ci.<br><br>
                    Remarque: Si vous ne recevez pas l'e-mail, veuillez vérifier vos spams.<br><br>
                    1) Envoyez votre message à support@astrology-lotus.com <br><br>
                    2)Pour nous aider à localiser vos informations, veuillez inclure les éléments suivants:<br>
                    &emsp;Prénom:<br>
                    &emsp;Nom:<br>
                    &emsp;Date de naissance:(dd/mm/yyyy):<br>
                    &emsp;Courriel :<br>
                    &emsp;Téléphone :<br><br>
                    3)Veuillez soumettre votre demande en indiquant la raison ci-dessous:<br>

                    &emsp;- Droit d'accès<br>
                    &emsp;- Droit de rétractation<br>
                    &emsp;- Droit à l'effacement ("droit à l'oubli") (exemple : effacement des données personnelles,
                    fermeture de compte, etc.)<br>
                    &emsp;- Droit des héritiers<br>
                    &emsp;- Droit d'opposition<br>
                    &emsp;- Autre demande<br>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- cookie policy modal -->
<div class="astrology-offerpage-tc-popup modal fade contact_us_popup" id="cookie_policy" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0 border-0">
            <h5 class="modal-title text-center arial text-white fw-bold font-26" id="exampleModalLabel">Politique en
                matière de cookies</h5>
            <button type="button" class="btn-close p-0 rounded-0" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <p class="arial fw-light mb-4 text-black font-16 line-height-24 pt-3">
                    Cette politique en matière de cookies ("politique") décrit ce que sont les cookies et comment ils
                    sont utilisés par le site web https://astrology-lotus.com ("site web" ou "service") et tous ses
                    produits et services connexes (collectivement, "services"). Cette politique est un accord
                    juridiquement contraignant entre vous ("utilisateur", "vous" ou "votre") et astrology-lotus est une
                    marque commerciale Astroveo B.V.
                    ("astrology-lotus est une marque commerciale Astroveo B.V.", "nous", "notre" ou "nos"). Si vous
                    concluez cet accord au nom d'une
                    entreprise ou d'une autre entité légale, vous déclarez que vous avez le pouvoir de lier cette entité
                    à cet accord, auquel cas les termes "utilisateur", "vous" ou "votre" feront référence à cette
                    entité. Si vous n'avez pas cette autorité, ou si vous n'acceptez pas les termes de cet accord, vous
                    ne devez pas accepter cet accord et ne pouvez pas accéder et utiliser le site web et les services.
                    Vous devez lire cette politique afin de comprendre les types de cookies que nous utilisons, les
                    informations que nous recueillons à l'aide des cookies et la manière dont ces informations sont
                    utilisées. Elle décrit également les choix qui s'offrent à vous pour accepter ou refuser
                    l'utilisation des cookies. Pour plus d'informations sur la manière dont nous utilisons, stockons et
                    sécurisons vos données personnelles, consultez notre politique de confidentialité.<br>

                    <b class="mt-2 py-2 d-block">Que sont les cookies ?</b>

                    Les cookies sont de petits éléments de données stockés dans des fichiers texte qui sont enregistrés
                    sur votre ordinateur ou d'autres appareils lorsque des sites web sont chargés dans un navigateur.
                    Ils sont largement utilisés pour se souvenir de vous et de vos préférences, soit pour une seule
                    visite (par le biais d'un "cookie de session"), soit pour plusieurs visites répétées (à l'aide d'un
                    "cookie persistant").<br>


                    Les cookies de session sont des cookies temporaires qui sont utilisés au cours de votre visite sur
                    le site web, et ils expirent lorsque vous fermez le navigateur web.<br>


                    Les cookies persistants sont utilisés pour mémoriser vos préférences sur notre site Web et restent
                    sur votre ordinateur de bureau ou votre appareil mobile même après la fermeture du navigateur ou le
                    redémarrage de votre ordinateur. Ils vous garantissent une expérience cohérente et efficace lorsque
                    vous visitez le site web et les services.<br>


                    Les cookies peuvent être définis par le Site Internet (" cookies de première partie "), ou par des
                    tiers, tels que ceux qui servent du contenu ou fournissent des services de publicité ou d'analyse
                    sur le Site Internet (" cookies de tiers "). Ces tiers peuvent vous reconnaître lorsque vous visitez
                    notre site web et également lorsque vous visitez certains autres sites web. Vous pouvez en savoir
                    plus sur les cookies et leur fonctionnement ici.<br>


                    <b class="mt-2 py-2 d-block">Quel type de cookies utilisons-nous ?</b>


                    <b class="mt-2 py-2 d-block">- Cookies de fonctionnalité</b>


                    Les cookies de fonctionnalité nous permettent de faire fonctionner le site Web et les services
                    conformément aux choix que vous faites. Par exemple, nous reconnaîtrons votre nom d'utilisateur et
                    nous nous souviendrons de la façon dont vous avez personnalisé le site Web et les services lors de
                    vos prochaines visites.<br>


                    <b class="mt-2 py-2 d-block">Quelles sont vos options en matière de cookies ?</b>


                    Si vous n'aimez pas l'idée des cookies ou de certains types de cookies, vous pouvez modifier les
                    paramètres de votre navigateur pour supprimer les cookies déjà installés et ne pas accepter de
                    nouveaux cookies. Pour en savoir plus sur la manière de procéder, consultez le site
                    internetcookies.com.<br>


                    Veuillez toutefois noter que si vous supprimez les cookies ou ne les acceptez pas, il se peut que
                    vous ne puissiez pas utiliser toutes les fonctionnalités offertes par le site Web et les
                    services.<br>


                    <b class="mt-2 py-2 d-block">Changements et modifications</b>


                    Nous nous réservons le droit de modifier la présente politique ou ses conditions relatives au site
                    web et aux services à tout moment et à notre discrétion. Lorsque nous le ferons, nous réviserons la
                    date de mise à jour au bas de cette page. Nous pouvons également vous informer par d'autres moyens,
                    à notre discrétion, notamment par le biais des coordonnées que vous avez fournies.<br>


                    Une version mise à jour de la présente politique entrera en vigueur immédiatement après la
                    publication de la politique révisée, sauf indication contraire. Votre utilisation continue du site
                    Web et des services après la date d'entrée en vigueur de la politique révisée (ou tout autre acte
                    spécifié à ce moment-là) constituera votre consentement à ces changements.<br>


                    <b class="mt-2 py-2 d-block">Acceptation de la présente politique</b>


                    Vous reconnaissez avoir lu la présente Politique et en accepter tous les termes et conditions. En
                    accédant au site Web et aux services et en les utilisant, vous acceptez d'être lié par la présente
                    politique. Si vous n'acceptez pas de respecter les conditions de la présente politique, vous n'êtes
                    pas autorisé à accéder au site Web et aux services ni à les utiliser.<br>


                    <b class="mt-2 py-2 d-block">Nous contacter</b>


                    Si vous avez des questions, des préoccupations ou des plaintes concernant la présente Politique ou
                    l'utilisation des cookies, nous vous encourageons à nous contacter en utilisant les coordonnées
                    ci-dessous :<br>


                    https://astrology-lotus.com<br>


                    Ce document a été mis à jour pour la dernière fois le 11 avril 2022.
                </p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Astrology offerpage Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<!-- Astrology offerpage custom js -->
<script src="assets/js/custom.js "></script>
</body>

</html>
