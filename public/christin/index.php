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
$uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));
$gtmContainerId = 'GTM-WLVK5X7';

include('config.php');
include('../landers/terms/dynamic/dynamic.php');
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Astrology Lotus">
    <meta name="keywords" content="Astrology Lotus">
    <meta name="title" content="Astrology Lotus">
    <meta name="description" content="Astrology Lotus">
    <meta property="og:title" content="Astrology Lotus" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="Astrology Lotus" />
    <meta property="og:image" content="assets/images/hero_bg.jpg" />
    <meta property="og:image:width" content="37" />
    <meta property="og:image:height" content="37" />
    <meta property="og:site_name" content="Astrology Lotus" />
    <meta property="og:description" content="Astrology Lotus" />
    <link rel="shortcut icon" href="assets/images/astrology-offer-favicon.png" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/css/stye.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '<?= $gtmContainerId; ?>');
    </script>
    <!-- End Google Tag Manager -->
    <script>
        var pixel = '';
    </script>
    <?php if ($_GET['aff_sub'] == "Facebook") : ?>
    <script>
        var pixel = "<?php echo $_GET['aff_sub'] ?? null ?>";
        ! function (f, b, e, v, n, t, s) {
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
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=<?php echo $_GET['pixel'] ?>&ev=PageView&noscript=1" />
    </noscript>
    <?php endif; ?>
    <script src="assets/js/lander.js" type="module"></script>
    <title>
        <?= $title; ?>
    </title>
    <style>
        .error {
            color: red;
        }

        .error2 {
            color: red;
        }
    </style>
    <link rel="manifest" href="manifest.json">
    <script type="text/javascript">
        (function (document, window) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://api.pushnami.com/scripts/v1/pushnami-adv/628c77b56e51211c231e3913";
            script.onload = function () {
                Pushnami
                    .update()
                    .prompt();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window);
    </script>
</head>

<body class="main_bg">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtmContainerId; ?>" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div class="astrology-offerpage-main  position-relative">
        <header class="astrology_offerpage_head header pt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <a href="index.php"><img src="assets/images/astrology-offer-logo.png"
                                class="img-fluid mb-3"></a>
                    </div>
                </div>
            </div>
        </header>
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
            <input name="googleClientId" type="hidden" value="">
            <input name="sign" type="hidden" value="sign">
            <input name="device" type="hidden" value="<?= $deviceBrandName; ?>">
            <input name="uuid" type="hidden" value="<?= $uuid ?>">
            <section class="gtm-screen-zodiac astrology-offerpage-step-1 step_1_content common_cls_display1"
                id="step_1">
                <div class="container">
                    <h1 class="times fw-bold font-100 text-center sky-color mb-0 pb-0">
                        <?= $choose; ?>
                    </h1>
                    <h3 class="times fw-bold font-62 text-white text-center mb-4 pb-0">
                        <?= $sign; ?>
                    </h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-7">
                            <div class="d-flex flex-wrap justify-content-center justify-md-content-between mb-5">
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="aries">
                                        <img src="assets/images/astro-img1.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $aries; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $aries_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="aries"
                                            value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="taurus">
                                        <img src="assets/images/astro-img2.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $taurus; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $taurus_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="taurus"
                                            value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button" data-sign="gemini">
                                        <img src="assets/images/astro-img3.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $gemini; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $gemini_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="gemini"
                                            value="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                    <label class="radio_cus_button" data-sign="cancer">
                                        <img src="assets/images/astro-img4.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $crab; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $crab_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="cancer"
                                            value="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="leo">
                                        <img src="assets/images/astro-img5.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $leo; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $leo_date ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="leo"
                                            value="5">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button" data-sign="virgo">
                                        <img src="assets/images/astro-img6.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $virgo; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $virgo_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="virgo"
                                            value="6">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="libra">
                                        <img src="assets/images/astro-img7.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $libra; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $libra_date ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="libra"
                                            value="7">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-0">
                                    <label class="radio_cus_button" data-sign="scorpio">
                                        <img src="assets/images/astro-img8.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $scorpion ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $scorpion_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="scorpio"
                                            value="8">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-3">
                                    <label class="radio_cus_button" data-sign="sagittarius">
                                        <img src="assets/images/astro-img9.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $sagittarius; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $sagittarius_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="sagittarius"
                                            value="9">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="capricorn">
                                        <img src="assets/images/astro-img10.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $capricorn; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $capricorn_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="capricorn"
                                            value="10">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-3 me-lg-3 me-xl-3">
                                    <label class="radio_cus_button" data-sign="aquarius">
                                        <img src="assets/images/astro-img11.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $aquarius; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $aquarius_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="aquarius"
                                            value="11">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="mb-3 me-0 me-lg-0 me-xl-0">
                                    <label class="radio_cus_button" data-sign="pisces">
                                        <img src="assets/images/astro-img12.png"
                                            class="position-relative z-index-1 pb-3"><br>
                                        <span
                                            class="text-center text-white times fw-bold font-26 position-relative z-index-1"><i>
                                                <?= $fish; ?>
                                            </i></span><br>
                                        <span
                                            class="text-center text-white times fw-bold font-20 position-relative z-index-1">
                                            <?= $fish_date; ?>
                                        </span>
                                        <input type="radio" name="astro" class="gtm-zodiac" data-gtm-value="pisces"
                                            value="12">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                                        <span class=" position-relative z-index-1 montserrat text-white  medium font24">
                                            <?= $male; ?>
                                        </span><br>
                                        <input type="radio" name="gender" class="gtm-gender" data-gtm-value="male"
                                            checked="" value="M">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="choose_gender_btn">
                                        <img src="assets/images/female-icon.png"
                                            class="position-relative z-index-1 me-1 me-xxl-3">
                                        <span class=" position-relative z-index-1 montserrat text-white medium font24">
                                            <?= $female; ?>
                                        </span><br>
                                        <input type="radio" name="gender" class="gtm-gender" data-gtm-value="female"
                                            value="F">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 text-center pt-4">
                                    <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block"
                                        onclick="back(1,2);">
                                        < <?=$back; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <section class="gtm-screen-birthdate select_born_date" id="step_3" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                        <?php echo $when_you_born; ?>
                    </h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row">
                                <div class="col-4">
                                    <select name="day"
                                        class="form-select born_input_field font24 medium montserrat text-black day"
                                        aria-label="Default select example ">
                                        <option value="" selected="selected">
                                            <?= $day; ?>
                                        </option>
                                        <?php
                                        for ($i = 1; $i <= 31; $i++) :
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        endfor;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select name="month"
                                        class="form-select born_input_field font24 medium montserrat text-black month"
                                        aria-label="Default select example ">
                                        <option value="" selected="selected">
                                            <?= $month; ?>
                                        </option>
                                        <?php
                                        for ($i = 1; $i <= 12; $i++) :
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        endfor;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select name="year"
                                        class="form-select born_input_field font24 medium montserrat text-black year"
                                        aria-label="Default select example ">
                                        <option value="" selected="selected">
                                            <?= $year; ?>
                                        </option>
                                        <?php
                                        for ($i = 1940; $i <= 2002; $i++) :
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        endfor;
                                        ?>
                                    </select>
                                </div>
                                <span class="error" style="display:none;">
                                    <?php echo $error1; ?>
                                </span>
                                <div class="col-12 ">
                                    <div class="text-center">
                                        <p class="text-white font-16 times pt-3">
                                            <?php echo $bdate_help; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button"
                                        class="gtm-birthdate-continue all_continue_btn font-20 text-center text-white d-inline-block">
                                        <?= $continue; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <section class="gtm-screen-city select_city" id="step_4" style="display:none;">
                <div class="conatiner">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                        <?php echo $city_in_which; ?>
                    </h3>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-5">
                            <div class="row justify-content-center mx-0 w-100">
                                <div class="col-12 col-xxl-10">
                                    <input type="text" name="city" placeholder="<?php echo $city_in_which; ?>"
                                        class="enter_city font24 medium montserrat text-center text-white">
                                </div>
                                <div class="col-12 ">
                                    <div class="text-center">
                                        <p class="text-white font-16 times pt-3">
                                            <?php echo $city_in_which2; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block">
                                        <?= $continue; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <section class="gtm-screen-birthtimeknown you_know_born_time" id="step_5" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                        <?php echo $b_date_time_know; ?>
                    </h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-xl-10 col-xxl-6">
                            <ul class="list-inline list-unstyled text-center">
                                <li class="list-inline-item know-birth-time-yes">
                                    <label class="choose_yesno_btn">
                                        <span
                                            class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">
                                            <?php echo $yes; ?>
                                        </span><br>
                                        <input type="radio" name="bitth_time_know" class="gtm-birthtime"
                                            data-gtm-value="yes" value="yes" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="list-inline-item know-birth-time-no">
                                    <label class="choose_yesno_btn">
                                        <span
                                            class=" position-relative z-index-1 text-uppercase montserrat  medium font24 text-white">
                                            <?= $no; ?>
                                        </span><br>
                                        <input type="radio" name="bitth_time_know" class="gtm-birthtime"
                                            data-gtm-value="no" value="no">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 ">
                            <div class="text-center">
                                <p class="text-white font-16 times pt-3">
                                    <?php echo $this_you_tell_more; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <section class="gtm-screen-birthtime select_hour_minutes" id="step_6" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                        <?php echo $accurate_minit; ?>
                    </h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center py-50">
                                <div class="col-6">
                                    <select name="tobhr"
                                        class="form-select born_input_field font24 medium montserrat text-black hour"
                                        aria-label="Default select example">
                                        <option value="" selected="selected">
                                            <?php echo $hour ?>
                                        </option>
                                        <?php
                                        for ($i = 0; $i <= 23; $i++) :
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        endfor;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select name="tobmin"
                                        class="form-select born_input_field font24 medium montserrat text-black min"
                                        aria-label="Default select example">
                                        <option value="" selected="selected">
                                            <?php echo $minit; ?>
                                        </option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) :
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        endfor;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12 text-center pt-4">
                                    <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block">
                                        <?= $continue; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <section class="gtm-screen-concern select_your_concerns" id="step_7" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                        <?= $your_consorn; ?>
                    </h3>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-6">
                            <div class="row justify-content-center py-50">
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span
                                            class=" position-relative z-index-1  montserrat  medium font24 text-white">
                                            <?= $work; ?>
                                        </span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="work"
                                            value="<?= $work; ?>" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span
                                            class=" position-relative z-index-1  montserrat  medium font24 text-white">
                                            <?= $finance; ?>
                                        </span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="money"
                                            value="<?= $finance; ?>">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3 mb-10">
                                    <label class="choose_concerns_btn">
                                        <span
                                            class=" position-relative z-index-1  montserrat  medium font24 text-white">
                                            <?= $love; ?>
                                        </span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="love"
                                            value="<?= $love; ?>">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6 col-md-3  mb-10">
                                    <label class="choose_concerns_btn">
                                        <span
                                            class=" position-relative z-index-1  montserrat  medium font24 text-white">
                                            <?= $general; ?>
                                        </span><br>
                                        <input type="radio" name="concerns" class="gtm-concern" data-gtm-value="general"
                                            value="<?= $general; ?>">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <section class="gtm-screen-name enter_name_det" id="step_8" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                        <?php echo $what_your_name; ?>
                    </h3>
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
                                <span class="error2" style="display:none;">
                                    <?php echo $error2; ?>
                                </span>
                                <div class="col-12 text-center pt-4">
                                    <button type="button"
                                        class="all_continue_btn font-20 text-center text-white d-inline-block">
                                        <?= $continue; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
            <section class="gtm-screen-email enter_email_field" id="step_9" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                        <?php echo $email_section_desc; ?>
                    </h3>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-7">
                            <div class="row justify-content-center mx-0 w-100">
                                <div class="col-12  col-xxl-11">
                                    <input type="email" placeholder="Courriel" name="email" required
                                        class="gtm-email enter_city font24 medium montserrat text-center text-white">
                                </div>
                                <div class="col-12 col-lg-10 col-xxl-11 pt-4 text-center">
                                    <button type="submit"
                                        class="gtm-email-continue all_continue_btn font-20 text-uppercase text-center w-100 text-white d-inline-block">
                                        <?php echo $reading_free; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
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
                            <li class="font-16 fw-normal text-white">- Suivez sur les réseaux sociaux</li>
                            <div class="d-flex pt-3 justify-content-center">
                                <a href="javascript:void(0);" class="text-decoration-none social_icon_link text-center" data-id="instagram">
                                    <i class="fa-brands fa-instagram text-white font-40 px-3"></i>
                                </a>
                                <a href="javascript:void(0);" class="text-decoration-none social_icon_link text-center" data-id="facebook">
                                    <i class="fa-brands fa-facebook text-white font-40 px-3"></i>
                                </a>
                                <a href="javascript:void(0);" class="text-decoration-none social_icon_link text-center" data-id="youtube">
                                    <i class="fa-brands fa-youtube text-white font-40 px-3"></i>
                                </a>
                                <a href="javascript:void(0);" class="text-decoration-none social_icon_link text-center" data-id="tictock">
                                    <i class="fa-brands fa-tiktok text-white font-40 px-3"></i>
                                </a>
                            </div>
                        </ul>
                        <p class="font-16 fw-normal text-white text-center">P.S. Pour que votre confiance en moi soit
                            méritée, je veux que vous sachiez que je respecte la réglementation en matière de
                            confidentialité et d'accès à vos données personnelles. Tout est là, dans ma politique de
                            confidentialité.</p>
                    </div>
                </div>
            </div>
        </section>
            <section class="last_step_content" id="step_11" style="display:none;">
                <div class="container">
                    <div class="height-50"></div>
                    <div class="row justify-content-center mx-0 w-100">
                        <div class="col-12 col-md-6 col-xxl-7">
                            <h3 class="times fw-normal font-68 text-white text-center mb-4 pb-0">
                                Veuillez patienter un moment, pendant que je vous connecte avec votre<br />Ange
                                Gardien...
                            </h3>
                        </div>
                    </div>
                    <div class="h-150"></div>
                </div>
            </section>
        </form>
        <div class="container" style="margin-top: 300px;">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="times fw-normal font-68 text-white text-center pt-3 pb-2">
                        <?= print_dynamic_variable('disclaimer_title_fr') ?>
                    </h2>
                    <p class="times fw-normal text-white">
                        <?= print_dynamic_variable('disclaimer_text_fr') ?>
                        <?= print_dynamic_variable('address') ?>
                    </p>
                </div>
            </div>
        </div>
        <footer class=" footer position-unset">
            <div class=" container">
                <div id="footer">
                    <ul class="footer_menu text-center list-inline list-unstyled">
                        <li class="list-inline-item me-0 me-md-3 pe-1  pe-xxl-1">
                            <a href="javascript:void(0);"
                                class="text-white text-uppercase text-decoration-none tos_modal_open times font-20">
                                <?= $home; ?>
                            </a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 pe-1  pe-xxl-1">
                            <a href="javascript:void(0);"
                                class="text-white text-uppercase text-decoration-none privacy-modal-open times font-20">
                                <?= $privacy_policy; ?>
                            </a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 pe-1 pe-xxl-1">
                            <a href="javascript:void(0);"
                                class="text-decoration-none text-uppercase cnt_pp_open text-white times font-20">
                                <?= $contact; ?>
                            </a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 pe-1 pe-xxl-1">
                            <a href="javascript:void(0);"
                                class="text-decoration-none text-uppercase help_pp_open text-white times font-20">RÈGLES
                                ÉTHIQUES</a>
                        </li>
                        <li class="list-inline-item me-0 me-md-3 pe-1 pe-xxl-1">
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
                    <p class="step_6_footer font-22 arial fw-normal colorfff text-center">
                        <?= $address; ?><br>
                        <a href="tel:+359 24928370" class="colorfff text-decoration-none">
                            <?= $phone; ?>
                        </a><br>
                        <a href="mailto:dpo@mg.astrology-lotus.com"
                            class="colorfff text-decoration-none">dpo@mg.astrology-lotus.com</a>
                    </p>
                    <ul class="list-inline list-unstyled pt-4 mb-5 text-center">
                        <li
                            class="d-block d-md-inline-block list-inline-item mb-4 mb-md-0 pe-0 pe-md-2 pe-xxl-3 me-0 me-md-2 me-xxl-3">
                            <a href="javascript:void(0);"
                                class="text-white text-center text-uppercase font-22 text-decoration-none button_one_btn d-inline-block">
                                <?= $contact; ?>
                            </a>
                        </li>
                        <li
                            class="d-block d-md-inline-block list-inline-item mb-4 mb-md-0 pe-0 pe-md-2 pe-xxl-3 me-0 me-md-2 me-xxl-3">
                            <a href="javascript:void(0);"
                                class="text-white text-center text-uppercase font-22 text-decoration-none button_two_btn d-inline-block">
                                <?= $help; ?>
                            </a>
                        </li>
                        <li class="d-block d-md-inline-block list-inline-item mb-4 mb-md-0">
                            <a href="javascript:void(0);"
                                class="text-white text-center text-uppercase font-22 text-decoration-none button_three_btn d-inline-block">
                                <?= $tc; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    
    <style>
        .modal-body p {
            font-family: Arial;
            font-size: 16px;
        }
    </style>
    <?php
    include('../landers/terms/astrology-lotus/fr/terms.php');
    include('../landers/terms/astrology-lotus/fr/privacy-policy.php');
    include('../landers/terms/astrology-lotus/fr/privacy-policy-2.php');
    include('../landers/terms/astrology-lotus/fr/contact-us.php');
    include('../landers/terms/astrology-lotus/fr/rules.php');
    include('../landers/terms/astrology-lotus/fr/cookies.php');
    include('../landers/terms/astrology-lotus/fr/gdpr.php');
    ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js "></script>

</body>

</html>
