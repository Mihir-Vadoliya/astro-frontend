@php($asset_path = '/landers/landingpages/301112/')
@php($srcImg = "/landers/sets/set41/")
@include('/landers/terms/dynamic/dynamic')

<!doctype html>
<html lang="en">
<head>
    <!-- AstroVeo Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta -->
    <meta name="author" content="AstroVeo">
    <meta name="keywords" content="AstroVeo ">
    <meta name="title" content="AstroVeo">
    <meta name="description" content="AstroVeo">
    <meta property="og:title" content="AstroVeo"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="AstroVeo"/>
    <meta property="og:image" content="{{ $asset_path }}assets/images/seo-image.png"/>
    <meta property="og:image:width" content="571"/>
    <meta property="og:image:height" content="466"/>
    <meta property="og:site_name" content="AstroVeo"/>
    <meta property="og:description" content="AstroVeo"/>
    <!--AstroVeo -favicon -->
    <link rel="shortcut icon" href="{{ $asset_path }}assets/images/favicon.png"/>

    <!-- AstroVeo Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ $asset_path }}assets/css/style.css" rel="stylesheet">
    <link href="{{ $asset_path }}assets/css/slick.css" rel="stylesheet">
    <link href="{{ $asset_path }}assets/css/slick-theme.css" rel="stylesheet">

    <script src="{{ $asset_path }}assets/js/jquery-3.6.3.min.js"></script>
    <script src="{{ asset('assets') }}/js/lander.js" type="module"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&family=Josefin+Sans:wght@100;300;400;500;600;700&family=Josefin+Slab:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    @if($gtmContainerId)
        @include('google.gtmcontainer')
    @endif

    <title>AstroVeo | Choose your zodiac sign</title>
</head>

<body>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id={{$gtmContainerId}}" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>

<div class="main_bg">
    <form name="g" id="nameForm" method="post" action="{{request()->url()}}/insertlead">
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
        <input name="sign" type="hidden" value="">
        <input name="partner_sign" type="hidden" value="">

        <!-- AstroVeo main banner start -->
        <section class="steps_page_banner position-relative ">
            <div class="container">
                <div class="steps_banner_text">
                    <div class="row justify-content-between">
                        <div class="col-3 col-md-3 col-lg-3 col-xl-2 col-xxl-2 my-auto">
                            <div class="per_image2 text-center">
                                <a href="#" class="inner_logo1"><img
                                        src="{{$asset_path}}assets/images/astroveo-logo.png" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-3 col-md-3 col-lg-3 col-xl-2 col-xxl-2 my-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-end mb-0">
                                    <li class="breadcrumb-item"><a href="#"
                                                                   class="inter semi font22 text-white text-uppercase text-decoration-none">Home</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- AstroVeo main banner end -->

        <!-- step 1  -->
        <section class="gtm-screen-zodiac choose_zodiac py-60 mt-100" id="step_1">
            <div class="container">
                <h3 class="text-center text-white font36 semi josefin mb-5 lh-70 text-capitalize">Choose your and
                    yours's partner <br><span class="fw-bold font56">Zodiac Sign</span></h3>
                <div class="row justify-content-center">
                    <div class="col-5 col-md-2 text-center text-md-start">
                        <h6 class="josefin semi font24 text-white">Yours</h6>
                        <a href="javascript:void(0);" class="d-inline-block text-decoration-none select_your_sign">
                            <div class="select_sign">
                                <img src="{{$asset_path}}assets/images/question-mark.png" class="img-fluid main_sign" alt="question-mark " id="your_choose_sign">
                                <div class="sign_dropdown_div">
                                    <p class="josefin medium font24 text-white text-center text-capitalize signA" style="margin-bottom: 5px;"></p>
                                    <img src="{{$asset_path}}assets/images/sign_selectorVector.png" class="img-fluid"
                                         alt="sign_selectorVector.png">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-2 col-md-1 align-self-center text-center text-xxl-start">
                        <p class="josefin fw-normal text-white font-70 mb-0">&</p>
                    </div>
                    <div class="col-5 col-md-2 text-center text-md-start">
                        <h6 class="josefin semi font24 text-white">Partner’s</h6>
                        <a href="javascript:void(0);" class="d-inline-block text-decoration-none select_part_sign">
                            <div class="select_sign">
                                <img src="{{$asset_path}}assets/images/question-mark.png" class="img-fluid main_sign" alt="question-mark" id="partner_choose_sign">
                                <div class="sign_dropdown_div">
                                    <p class="josefin medium font24 text-white text-center text-capitalize signB" style="margin-bottom: 5px;"></p>
                                    <img src="{{$asset_path}}assets/images/sign_selectorVector.png" class="img-fluid"
                                         alt="sign_selectorVector.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 pt-50 text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="javascript:void(0);"
                               class="continue_btn josefin medium text-decoration-none text-center d-inline-block text-white step_1_next">Continue</a>
                        </li>
                    </ul>
                </div>

                <!-- select your sign model -->

                <div class="modal fade choose_sign_model" id="select_your_sign_model" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-center mx-0 w-100">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-9">
                                        <div class="row justify-content-center" name="zodiac_sign">
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="aries">
                                                    <img src="{{$srcImg}}aries.png" class="position-relative z-index-1"><br>
                                                    <span
                                                        class="position-relative z-index-1 poetsenoneregular font20 color-824456">aries</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Mar
                                                        21 - Apr 20</span>
                                                    <input type="radio" name="astofysica" value="aries">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="taurus">
                                                    <img src="{{$srcImg}}taurus.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">taurus</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Apr
                                                        21 - May 20</span>

                                                    <input type="radio" name="astofysica" value="taurus">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="gemini">
                                                    <img src="{{$srcImg}}gemini.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">gemini</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">May
                                                        21 - Jun 20</span>
                                                    <input type="radio" name="astofysica" value="gemini">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="cancer">
                                                    <img src="{{$srcImg}}cancer.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">cancer</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Jun
                                                        21 - Jul 22</span>
                                                    <input type="radio" name="astofysica" value="cancer">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="leo">
                                                    <img src="{{$srcImg}}leo.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">Leo</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Jul
                                                        23 - Aug 22</span>
                                                    <input type="radio" name="astofysica" value="leo">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="virgo">
                                                    <img src="{{$srcImg}}virgo.png" class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">virgo</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Aug
                                                        23 - Sep 21</span>

                                                    <input type="radio" name="astofysica" value="virgo">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="libra">
                                                    <img src="{{$srcImg}}libra.png" class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">libra</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Sep
                                                        22 - Oct 20</span>
                                                    <input type="radio" name="astofysica" value="libra">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="scorpio">
                                                    <img src="{{$srcImg}}scorpio.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">scorpio</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Oct
                                                        21 - Nov 20</span>
                                                    <input type="radio" name="astofysica" value="scorpio">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="sagittarius">
                                                    <img src="{{$srcImg}}sagittarius.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">sagittarius</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Nov
                                                        21 - Dec 21</span>
                                                    <input type="radio" name="astofysica" value="sagittarius">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="capricorn">
                                                    <img src="{{$srcImg}}capricorn.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">capricorn</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Dec
                                                        22 - Jan 21</span>

                                                    <input type="radio" name="astofysica" value="capricorn">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="aquarius">
                                                    <img src="{{$srcImg}}aquarius.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">aquarius</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Jan
                                                        22 - Feb 18</span>
                                                    <input type="radio" name="astofysica" value="aquarius">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn your_sign" data-gtm-value="pisces">
                                                    <img src="{{$srcImg}}pisces.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">pisces</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Feb
                                                        19 - Mar 20</span>
                                                    <input type="radio" name="astofysica" value="pisces">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- select your sign model end-->

                <!-- select Partner’s sign model -->

                <div class="modal fade choose_sign_model" id="select_Partner_sign_model" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-center mx-0 w-100">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-9">
                                        <div class="row justify-content-center" name="zodiac_sign">
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="aries">
                                                    <img src="{{$srcImg}}aries.png" class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">aries</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Mar
                                                        21 - Apr 20</span>
                                                    <input type="radio" name="astofysica" value="aries">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="taurus">
                                                    <img src="{{$srcImg}}taurus.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">taurus</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Apr
                                                        21 - May 20</span>

                                                    <input type="radio" name="astofysica" value="taurus">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="gemini">
                                                    <img src="{{$srcImg}}gemini.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">gemini</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">May
                                                        21 - Jun 20</span>
                                                    <input type="radio" name="astofysica" value="gemini">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="cancer">
                                                    <img src="{{$srcImg}}cancer.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">cancer</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Jun
                                                        21 - Jul 22</span>
                                                    <input type="radio" name="astofysica" value="cancer">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="leo">
                                                    <img src="{{$srcImg}}leo.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">Leo</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Jul
                                                        23 - Aug 22</span>
                                                    <input type="radio" name="astofysica" value="leo">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="virgo">
                                                    <img src="{{$srcImg}}virgo.png" class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">virgo</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Aug
                                                        23 - Sep 21</span>

                                                    <input type="radio" name="astofysica" value="virgo">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="libra">
                                                    <img src="{{$srcImg}}libra.png" class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">libra</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Sep
                                                        22 - Oct 20</span>
                                                    <input type="radio" name="astofysica" value="libra">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="scorpio">
                                                    <img src="{{$srcImg}}scorpio.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">scorpio</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Oct
                                                        21 - Nov 20</span>
                                                    <input type="radio" name="astofysica" value="scorpio">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign"
                                                       data-gtm-value="sagittarius">
                                                    <img src="{{$srcImg}}sagittarius.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">sagittarius</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Nov
                                                        21 - Dec 21</span>
                                                    <input type="radio" name="astofysica" value="sagittarius">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign"
                                                       data-gtm-value="capricorn">
                                                    <img src="{{$srcImg}}capricorn.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">capricorn</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Dec
                                                        22 - Jan 21</span>

                                                    <input type="radio" name="astofysica" value="capricorn">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="aquarius">
                                                    <img src="{{$srcImg}}aquarius.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">aquarius</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Jan
                                                        22 - Feb 18</span>
                                                    <input type="radio" name="astofysica" value="aquarius">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-3 col-lg-3 px-20 mb-30">
                                                <label class="choose_zodiac_btn partner_sign" data-gtm-value="pisces">
                                                    <img src="{{$srcImg}}pisces.png"
                                                         class="position-relative z-index-1"><br>
                                                    <span
                                                        class=" position-relative z-index-1 poetsenoneregular font20 color-824456">pisces</span><br>
                                                    <span
                                                        class="position-relative z-index-1  text-white josefin font16">Feb
                                                        19 - Mar 20</span>
                                                    <input type="radio" name="astofysica" value="pisces">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- select Partner’s sign model end-->
            </div>
        </section>

        <!-- step compatible  -->
        <section class="compatible_sec py-60 d-none" id="step_11">
            <div class="container">
                <div class="compatible_div">
                    <div class="row justify-content-center ">
                        <div class="col-12 col-md-12">
                            <div class=" text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item pe-xxl-3">
                                        <img src="{{$asset_path}}assets/images/OBJECT1.png" class="img-fluid"
                                             alt="OBJECT1.png" id="compatible_your_sign">
                                        <p class=" poetsenoneregular font20 color-824456 pt-3 mb-0"><span class="signA">Sign A</span>
                                        </p>
                                    </li>
                                    <li class="list-inline-item ps-3 ps-xxl-5 ">
                                        <img src="{{$asset_path}}assets/images/OBJECT2.png" class="img-fluid"
                                             alt="OBJECT2.png" id="compatible_partner_sign">
                                        <p class=" poetsenoneregular font20 color-824456 pt-3 mb-0"><span class="signB">Sign B</span>
                                        </p>
                                    </li>
                                </ul>
                                <div class="com_text mt-4 mt-lg-5">
                                    <p class="josefin medium font24 text-white text-center">Ah, <span class="signA">Sign A</span>
                                        and <span class="signB">Sign B</span> - a fiery and energetic pairing like no
                                        other. You're both social butterflies, but is there more than meets the eye?
                                        This combination can lead to a vibrant and energetic relationship, full of
                                        interesting adventures. But as an <span class="signA">Sign A</span>, you love to
                                        lead, and a <span class="signB">Sign B</span> loves their freedom - will this
                                        lead to a beautiful dance or a clash?</p>
                                    <p class="josefin medium font24 text-white text-center mb-0">Please continue with
                                        the next steps and I will send you my comprehensive report that dives deeper
                                        into the mysteries and complexities of this intriguing pairing</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-50 text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);"
                                       class="continue_btn josefin medium text-decoration-none text-center d-inline-block text-white step_11_next">Continue</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- step 2  -->
        <section class="gtm-screen-gender select_gender d-none" id="step_2">
            <div class="container">
                <h3 class="text-center text-white font36 semi josefin mb-5 lh-70 text-capitalize">What is your<br><span
                        class="fw-bold font56">Gender?</span></h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6">
                        <div class="row justify-content-center">
                            <div class="col-5 col-md-5">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/images/male-icon.png"
                                         class="img-fluid position-relative z-index-1">
                                    <input type="radio" name="gender" value="male" data-gtm-value="male" checked>
                                    <span class="checkmark josefin  medium font24">Man</span>
                                </label>
                            </div>
                            <div class="col-2 col-md-2 align-self-center text-center">
                                <p class="josefinslab semi text-white font-70">or</p>
                            </div>
                            <div class="col-5 col-md-5">
                                <label class="choose_gender_btn">
                                    <img src="{{$asset_path}}assets/images/female-icon.png"
                                         class="img-fluid position-relative z-index-1">
                                    <input type="radio" name="gender" value="female" data-gtm-value="female">
                                    <span class="checkmark josefin  medium font24">Woman</span>
                                </label>
                            </div>
                            <span class="error" id="step_2_error"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- step 3  -->
        <section class="gtm-screen-birthdate select_gender d-none" id="step_3">
            <div class="container">
                <h3 class="text-center text-white font36 semi josefin mb-5 lh-70 text-capitalize">Well! When were you
                    <br><span class="fw-bold font56">born?</span>
                </h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <select class="form-select born_input_field font24 semi inter text-white day"
                                        aria-label="Default select example " name="day">
                                    <option value="" selected="selected">Day</option>
                                    @for ($i = 1; $i < 32; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select born_input_field font24 semi inter text-white month"
                                        aria-label="Default select example " name="month">
                                    <option value="" selected="selected">Month</option>
                                    @for ($i = 1; $i < 13; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select born_input_field font24 semi inter text-white year"
                                        aria-label="Default select example " name="year">
                                    <option value="" selected="selected">Year</option>
                                    @for ($i = 1940; $i < 2003; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <span class="error" id="step_3_error"></span>
                            <div class="pt-83">
                                <p class="josefin medium font24 text-white text-center">This will help make your
                                    clairvoyance more precise.</p>
                            </div>

                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="gtm-birthdate-continue continue_btn josefin medium text-decoration-none text-center d-inline-block text-white step_3_next">Continue</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- step 4  -->
        <section class="gtm-screen-city select_gender d-none" id="step_4">
            <div class="container">
                <h3 class="text-center text-white font36 semi josefin mb-5 lh-70 text-capitalize">In which town/city are
                    you <br><span class="fw-bold font56">born?</span>
                </h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <input type="text" placeholder="Please enter your city" name="city"
                                       class="born_input_field font24 semi inter text-center text-white">
                                <span class="error" id="step_4_error"></span>
                                <div class="pt-83">
                                    <p class="josefin medium font24 text-white text-center">This will help make your
                                        clairvoyance more precise.</p>
                                </div>
                            </div>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn josefin medium text-decoration-none text-center d-inline-block text-white step_4_next">Continue</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- step 5 -->
        <section class="gtm-screen-birthtimeknown select_gender d-none" id="step_5">
            <div class="container">
                <h3 class="text-center text-white font36 semi josefin mb-5 lh-70 text-capitalize">Do you know what time
                    you were<br><span class="fw-bold font56">born?</span>
                </h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <ul class="list-inline list-unstyled mb-0">
                                    <li class="list-inline-item">
                                        <label class="choose_yesno_btn">
                                            <span
                                                class=" position-relative z-index-1 text-uppercase inter text-white semi font24">Yes</span><br>
                                            <input class="gtm-birthtime" type="radio" name="bitth_time_know" value="yes"
                                                   data-gtm-value="yes" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li class="list-inline-item">
                                        <label class="choose_yesno_btn">
                                            <span
                                                class=" position-relative z-index-1 text-uppercase inter text-white semi font24">No</span><br>
                                            <input type="radio" class="gtm-birthtime" name="bitth_time_know"
                                                   data-gtm-value="no" value="no">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-83">
                                <p class="josefin medium font24 text-white text-center">This will help make your
                                    clairvoyance more precise.</p>
                            </div>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- step 6 -->
        <section class="select_gender d-none" id="step_6">
            <div class="container">
                <h3 class="text-center text-white font36 semi josefin mb-5 lh-70 text-capitalize">Please enter hours and
                    minutes as<br><span class="fw-bold font56">Accurate As Possible</span>
                </h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-6">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <select
                                    class="form-select born_input_field font24 semi inter text-white hour text-center"
                                    aria-label="Default select example" name="tobhr">
                                    <option value="" selected="selected">Hour</option>
                                    @for ($i = 0; $i < 24; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-6">
                                <select
                                    class="form-select born_input_field font24 semi inter text-white min text-center"
                                    aria-label="Default select example" name="tobmin">
                                    <option value="" selected="selected">Minute</option>
                                    @for ($i = 0; $i <= 60; $i+=5)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <span class="error" id="step_6_error"></span>
                            <div class="pt-83">
                                <p class="josefin medium font24 text-white text-center">This will help make your
                                    clairvoyance more precise.</p>
                            </div>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn josefin medium text-decoration-none text-center d-inline-block text-white step_6_next">Continue</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- step 8 -->
        <section class="gtm-screen-name select_gender d-none" id="step_8">
            <div class="container">
                <h3 class="text-center text-white font36 semi josefin mb-5 lh-70 text-capitalize">What’s Your<br><span
                        class="fw-bold font56">Name?</span>
                </h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-6">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <input type="text" placeholder="First name" name="first_name"
                                       class="born_input_field font24 medium inter text-white text-center">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="Last name" name="last_name"
                                       class="born_input_field font24 medium inter text-white text-center">
                            </div>
                            <span class="error" id="step_8_error"></span>
                            <div class="pt-83">
                                <p class="josefin medium font24 text-white text-center">This will help make your
                                    clairvoyance more precise.</p>
                            </div>
                            <div class="col-12 pt-50 text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"
                                           class="continue_btn josefin medium text-decoration-none text-center d-inline-block text-white step_8_next">Continue</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- step 9  -->
        <section class="gtm-screen-email select_gender d-none" id="step_9">
            <div class="container">
                <h3 class="text-center text-white font36 semi josefin mb-4 mb-xl-4 mb-xxl-5 lh-70 text-capitalize">Where
                    Do You Want To Get Your comprehensive report for the compatibility of a<br><span
                        class="fw-bold font56 text-capitalize"> <span class="signA">Sign A</span> and  <span
                            class="signB">Sign B</span>?</span>
                </h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                        <form class="row justify-content-center">
                            <div class="col-12">
                                <input type="email" placeholder="enter your e-mail" name="email"
                                       class="gtm-email born_input_field font24 semi inter text-white input-email text-center text-capitalize"
                                       required>
                                <span class="error" id="step_9_error"></span>
                            </div>
                    </div>
                   
                    <div class="col-12 col-md-8 col-xl-4 pt-50 text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item me-0">
                                <button type="submit"
                                        class="gtm-email-continue continue_btn josefin medium font20  text-decoration-none text-center d-inline-block w-100  px-5 text-white step_9_next">
                                    Get my comprehensive report for free
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- step 12 -->
        <section class="gtm-screen-pending select_gender d-none" id="step_12">
                <div class="container text-center text-white">
                    @include('/landers/landingpages/thankyou/'.$language.'/pending-screen')
            </div>
        </section>

        <!-- step 10 -->
        <style>
            .gtm-screen-thankyou li:before {
                background-color: white;
                top: 12px;
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
        <section class="gtm-screen-thankyou step_10 select_gender d-none" id="step_10">
            @include('/landers/landingpages/thankyou/'.$language.'/thankyou')
        </section>

        <section class="testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <p class="personal-date">
                            <img src="{{$asset_path}}assets/images/lock.png" alt="lock">
                            Your information is used confidentiality to create personalized clairvoyance.
                        </p>

                        <div class="slider">
                            <div class="slider_slick">
                                <div class="slider_info">
                                    <div class="slider_info-img">
                                        <img src="{{$asset_path}}assets/images/women2.png" alt="women">
                                    </div>
                                    <h3 class="slider_title">Milana</h3>
                                    <img src="{{$asset_path}}assets/images/stars.png" alt="stars" class="start">
                                    <p class="slider_text">
                                        Thank you so much for my reading, it really opened my eyes I didn’t expect it to
                                        be so clear!
                                    </p>
                                </div>
                                <div class="slider_info">
                                    <div class="slider_info-img">
                                        <img src="{{$asset_path}}assets/images/women.png" alt="women">
                                    </div>
                                    <h3 class="slider_title">Jennifer</h3>
                                    <img src="{{$asset_path}}assets/images/stars.png" alt="stars" class="start">
                                    <p class="slider_text">
                                        I just wanted to say thank you, I only asked for information about my love life
                                        but you gave me so much more that everything just became much more clear.
                                    </p>
                                </div>
                                <div class="slider_info">
                                    <div class="slider_info-img">
                                        <img src="{{$asset_path}}assets/images/women3.png" alt="women">
                                    </div>
                                    <h3 class="slider_title">Christina</h3>
                                    <img src="{{$asset_path}}assets/images/stars.png" alt="stars" class="start">
                                    <p class="slider_text">
                                        Thank you </br> you have made a new person out of me, thank you very much again
                                        for everything!
                                    </p>
                                </div>
                            </div>
                            <h2 class="secrets-title"><?= print_dynamic_variable('disclaimer_title_en') ?></h2>
                            <p class="personal-date">
                                <?= print_dynamic_variable('disclaimer_text_en') ?>
                                <?= print_dynamic_variable('address') ?>
                            </p>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Choose your zodiac sign end -->

    </form>

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 my-auto  px-3 px-md-0">
                    <div class="footer_link pt-3 pt-xxl-5">
                        <ul class="footer_menus list-unstyled mb-0 d-flex justify-content-center">
                            <li class="list-inline-item  me-4 mb-3  "><a href="https://lp.all-universe.com"
                                                                         class="text-white fw-bold text-decoration-none font-16 text-uppercase josefin">Home</a>
                            </li>
                            <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);"
                                                                        class="text-white fw-bold text-decoration-none font-16 text-uppercase privacy_btn_open josefin">Privacy
                                    policy</a></li>
                            <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);"
                                                                        class="text-white fw-bold text-decoration-none font-16 text-uppercase rules_btn_open josefin">Ethical
                                    rules</a></li>
                            <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);"
                                                                        class="text-white fw-bold text-decoration-none font-16 text-uppercase gdpr_btn_open josefin">GDPR</a>
                            </li>
                            <li class="list-inline-item  me-4 mb-3 "><a href="javascript:void(0);"
                                                                        class="text-white fw-bold text-decoration-none font-16 text-uppercase cookie_btn_open josefin">Cookie
                                    policy</a></li>
                            <li class="list-inline-item4 me-0 "><a href="javascript:void(0);"
                                                                   class="text-white fw-bold text-decoration-none font-16 text-uppercase terms_btn_open josefin">Terms
                                    of
                                    service</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- footer end -->
</div>


<!-- all popup -->
<!-- privacy policy -->
<div class="modal fade privacy-1" id="privacy_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-3 bg-b2def3">
                <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Privacy policy
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="josefin fw-normal font16">
                    @include('/landers/terms/all-universe/en/privacy')
                </p>
            </div>
        </div>
    </div>
</div>

<!-- privacy policy-2 -->
<div class="modal fade privacy-2" id="privacy-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-3 bg-b2def3">
                <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Privacy policy
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="josefin fw-normal font16">
                    @include('/landers/terms/all-universe/en/privacy-2')
                </p>
            </div>
        </div>
    </div>
</div>

<!-- rules -->
<div class="modal fade" id="rules_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-3 bg-b2def3">
                <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Ethical rules
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="josefin fw-normal font16">

                    Principle 1: Respect for the person<br><br>

                    The products and services provide by Astrofysica are not directed at people:<br><br>

                    - In financial hardship<br>
                    - Minors<br>
                    - Who are not in full possession of their mental faculties<br><br>

                    Principle 2: Honesty, integrity and fairness<br><br>

                    Astrofysica and its staff are fully committed to the principles of honesty, integrity and fairness
                    in the
                    delivery of their products and services to their clients.<br>

                    All Company employees ensure that commercial transactions, requests for services, purchases or
                    hiring of
                    staff are handled in an open, fair and impartial manner.<br>

                    This Charter sets out the standards of conduct expected of all staff as well as the Company policy
                    on
                    accepting benefits and managing conflict of interest in the course of official duties.<br>

                    This Charter shall also apply to temporary and part-time staff employed by the Company.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- gdpr -->
<div class="modal fade" id="gdpr_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-3 bg-b2def3">
                <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">GDPR
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="josefin fw-normal font16">

                    {{ print_dynamic_variable('address') }}<br><br>

                    If you are a resident of the European Economic Area ("EEA"), you have certain data protection rights
                    and we
                    will endeavor to take reasonable steps to enable you to correct, amend, delete or restrict the use
                    of your
                    Personal Data. to limit. If you would like to know what Personal Information we hold about you and
                    if you
                    would like it removed from our systems, please contact us. In certain circumstances you have the
                    following
                    data protection rights:<br><br>

                    (i) You have the right to withdraw your consent where you have previously consented to the
                    processing of
                    your Personal Data. To the extent that the legal basis for our processing of your Personal Data is
                    consent,
                    you have the right to withdraw that consent at any time. The revocation does not affect the
                    lawfulness of
                    the processing before the revocation.<br><br>

                    (ii) You have the right to know whether your Personal Data is being processed by us, to obtain
                    information
                    about certain aspects of the processing, and to obtain a copy of your Personal Data being processed.<br><br>

                    (iii) You have the right to verify the accuracy of your information and to request that it be
                    updated or
                    corrected. You also have the right to request that we complete any Personal Data that you believe is
                    incomplete.<br><br>

                    (iv) You have the right to object to the processing of your data if the processing is based on a
                    legal basis
                    other than consent. Where Personal Data is processed in the public interest, in the exercise of an
                    official
                    authority vested in us, or for the legitimate interests pursued by us, you may object to such
                    processing by
                    specific situation-related ground to justify the objection. However, you should know that if your
                    Personal
                    Data is processed for direct marketing purposes, you can object to that processing at any time
                    without
                    providing a justification. To find out whether we process Personal Data for direct marketing
                    purposes,
                    please refer to the relevant sections of this Policy.<br><br>

                    (v) You have the right, under certain circumstances, to restrict the processing of your Personal
                    Data. These
                    circumstances include: the accuracy of your Personal Data is contested by you and we need to verify
                    its
                    accuracy; the processing is unlawful, but you oppose the erasure of your Personal Data and request
                    that its
                    use be restricted instead; we no longer need your Personal Data for the purposes of the processing,
                    but you
                    need it to establish, exercise or defend your legal claims; you have objected to the processing
                    pending
                    verification whether our legitimate grounds override your legitimate grounds. Where processing is
                    restricted, this Personal Information will be marked accordingly and, with the exception of storage,
                    only
                    processed with your consent or for the establishment, exercise or defense of legal claims, for the
                    protection of the rights of another natural or legal person or to reasons of great public
                    interest.<br><br>

                    (vi) You have the right, under certain circumstances, to have your Personal Information deleted from
                    us.
                    These circumstances include: the Personal Data is no longer necessary in connection with the
                    purposes for
                    which it was collected or otherwise processed; you withdraw your consent to consent-based
                    processing; you
                    object to the processing under certain rules of applicable data protection law; the processing is
                    for direct
                    marketing purposes; and the personal data has been unlawfully processed. However, there are
                    exceptions to
                    the right to erasure, such as when the processing is necessary: for the exercise of the right to
                    freedom of
                    expression and information; to comply with a legal obligation; or for the establishment, exercise or
                    defense
                    of a legal claim.<br><br>

                    (vii) You have the right to receive your Personal Data that you have provided to us in a structured,
                    commonly used and machine-readable format and, where technically feasible, to have it transferred to
                    another
                    controller without any hindrance on our part, provided that such transfer does not adversely affect
                    the
                    rights and freedoms of others.<br><br>

                    (viii) You have the right to lodge a complaint with a data protection authority about our collection
                    and use
                    of your Personal Information. If you are not satisfied with the outcome of your complaint directly
                    to us,
                    you have the right to lodge a complaint with your local data protection authority. For more
                    information,
                    please contact your local data protection authority in the EEA. This provision applies provided that
                    your
                    Personal Data is processed by automated means and that the processing is based on your consent, on a
                    contract to which you are a part, or on pre-contractual obligations thereof.<br><br>

                    Note: If you don't receive the email, please check your spam.<br><br>

                    1) Send your message to <a href="mailto:dpo@all-universe.com">dpo@all-universe.com</a><br><br>

                    2) To help us locate your information, please include the following:<br>
                    &emsp;First name: <br>
                    &emsp;Last Name :<br>
                    &emsp;Date of birth:(dd/mm/yyyy) :<br>
                    &emsp;Email :<br>
                    &emsp;Phone :<br><br>

                    3) Please submit your request with the reason below:<br>
                    &emsp;- Right of access<br>
                    &emsp;- Right of withdrawal<br>
                    &emsp;- Right to erasure ("right to be forgotten") (example: erasure of personal data, account
                    closure,
                    etc.)<br>
                    &emsp;- Right of heirs<br>
                    &emsp;- Right to object<br>
                    &emsp;- Other request<br>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Cookie policy -->
<div class="modal fade" id="cookie_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-3 bg-b2def3">
                <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Cookie policy
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="josefin fw-normal font16">

                    This cookie policy (“Policy”) describes what cookies are and how and they're being used by the
                    <a href="https://astro.all-universe.com"
                       class="text-decoration-none">https://astro.all-universe.com</a> website (“Website” or “Service”)
                    and any of its related products and services
                    (collectively, “Services”). This Policy is a legally binding agreement between you (“User”, “you” or
                    “your”)
                    and all-universe is a brand of AstroVeo B.V. (“all-universe is a brand of AstroVeo B.V.”,
                    “we”, “us”
                    or “our”). If you are entering into this agreement on behalf of a business or other legal entity,
                    you
                    represent that you have the authority to bind such entity to this agreement, in which case the terms
                    “User”,
                    “you” or “your” shall refer to such entity. If you do not have such authority, or if you do not
                    agree with
                    the terms of this agreement, you must not accept this agreement and may not access and use the
                    Website and
                    Services. You should read this Policy so you can understand the types of cookies we use, the
                    information we
                    collect using cookies and how that information is used. It also describes the choices available to
                    you
                    regarding accepting or declining the use of cookies. For further information on how we use, store
                    and keep
                    your personal data secure, see our privacy policy.<br><br>


                    <b>What are cookies?</b><br><br>

                    Cookies are small pieces of data stored in text files that are saved on your computer or other
                    devices when
                    websites are loaded in a browser. They are widely used to remember you and your preferences, either
                    for a
                    single visit (through a "session cookie") or for multiple repeat visits (using a "persistent
                    cookie").<br><br>


                    Session cookies are temporary cookies that are used during the course of your visit to the Website,
                    and they
                    expire when you close the web browser.<br><br>


                    Persistent cookies are used to remember your preferences within our Website and remain on your
                    desktop or
                    mobile device even after you close your browser or restart your computer. They ensure a consistent
                    and
                    efficient experience for you while visiting the Website and Services.<br><br>


                    Cookies may be set by the Website ("first-party cookies"), or by third parties, such as those who
                    serve
                    content or provide advertising or analytics services on the Website ("third party cookies"). These
                    third
                    parties can recognize you when you visit our website and also when you visit certain other websites.
                    You may
                    learn more about cookies and how they work here.<br><br>


                    <b>What type of cookies do we use?</b><br><br>


                    <b>- Functionality cookies</b><br><br>


                    Functionality cookies let us operate the Website and Services in accordance with the choices you
                    make. For
                    example, we will recognize your username and remember how you customized the Website and Services
                    during
                    future visits.<br><br>


                    <b>What are your cookie options?</b><br><br>


                    If you don’t like the idea of cookies or certain types of cookies, you can change your browser’s
                    settings to
                    delete cookies that have already been set and to not accept new cookies. To learn more about how to
                    do this,
                    visit internetcookies.com<br><br>


                    Please note, however, that if you delete cookies or do not accept them, you might not be able to use
                    all of
                    the features the Website and Services offer.<br><br>


                    <b>Changes and amendments</b><br><br>


                    We reserve the right to modify this Policy or its terms related to the Website and Services at any
                    time at
                    our discretion. When we do, we will revise the updated date at the bottom of this page. We may also
                    provide
                    notice to you in other ways at our discretion, such as through the contact information you have
                    provided.<br><br>


                    An updated version of this Policy will be effective immediately upon the posting of the revised
                    Policy
                    unless otherwise specified. Your continued use of the Website and Services after the effective date
                    of the
                    revised Policy (or such other act specified at that time) will constitute your consent to those
                    changes.<br><br>


                    <b>Acceptance of this policy</b><br><br>


                    You acknowledge that you have read this Policy and agree to all its terms and conditions. By
                    accessing and
                    using the Website and Services you agree to be bound by this Policy. If you do not agree to abide by
                    the
                    terms of this Policy, you are not authorized to access or use the Website and Services.<br><br>


                    <b>Contacting us</b><br><br>


                    If you have any questions, concerns, or complaints regarding this Policy or the use of cookies, we
                    encourage
                    you to contact us using the details below:<br><br>


                    <a href="https://all-universe.com/contact" class="text-decoration-none">https://astro.all-universe.com/contact</a><br>


                    This document was last updated on April 11, 2022
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Terms of service -->
<div class="modal fade" id="terms_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header py-3 bg-b2def3">
                <h5 class="modal-title text-black playfair fw-bold font36" id="exampleModalLabel">Terms of service
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="josefin fw-normal font16">
                    @include('/landers/terms/all-universe/en/terms')
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{$asset_path}}assets/js/functions.js"></script>
<script type="text/javascript" src="{{$asset_path}}assets/js/custom.js"></script>
<script type="text/javascript">
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

        $('.slider_slick').slick({
            arrows: false,
            dots: true,
            slidesToShow: 1,
            autoplay: false,
            infinite: false
        });
    });
</script>
</body>
</html>
