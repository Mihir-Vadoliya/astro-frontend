@php ($asset_path = '/landers/offers/705-v2/athena/')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{$texts->top_title}}</title>
    <link rel='shortcut icon' href='{{ $asset_path }}assets/images/icon.png' type='image/x-icon'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" href="{{ asset('assets') }}/css/bootstrap.min.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ $asset_path }}assets/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{ $asset_path }}assets/slick-theme.css"/>
    <link href="{{ $asset_path }}assets/style.css" rel="stylesheet">
    <link href="{{ $asset_path }}assets/css.css" rel="stylesheet">
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>

</head>
<body data-event="responsive-landing-page-r001-orig-desktop-pageview" cz-shortcut-listen="true">

<div class="top-logo">
    <a href="index.php"><img src="{{$asset_path}}assets/images/astro-logo.png" alt="Astrology"></a>
</div>

<div class="mid-cirle">
    <div class="container">


            <!-- End Hidden Fields, there is more input fields in the code below -->
            <div class="row">
                <div class="mid-main-box">
                    <div class="step-lidiya">
                        <img src="{{ $asset_path }}assets/images/lida2.png" alt="maria-woman" class="maria">
                        <h1 class="title-main">{{$texts->h1}}</h1>
                        <!--<hr class="line">-->
                    </div>

                    <div id="loadImg">
                        <div class="loader"></div>
                    </div>


                    <div id="final" class="final">
                        <div class="sign_sec">
                            <div class="m_box m_box_group">
                                <h2 class="final_text">
                                    Your reading is here  {{$customer->fullname}}

                                </h2>

                                <hr>

                                <!-- Button trigger reading modal -->
                                <button type="button" class="btn btn-lg btn-change" style="background-color: #EBDDD2" data-toggle="modal" data-target="#readingModal">
                                   Show personal reading
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <p class="personal-date">
                        <img src="{{ $asset_path }}assets/images/lock.png" alt="lock">
                        {{$texts->confidentality}}
                    </p>

                    <div class="slider">
                        <div class="slider_slick">
                            <div class="slider_info">
                                <img src="{{ $asset_path }}assets/images/women2.png" alt="women">
                                <h3 class="slider_title">Milana</h3>
                                <img src="{{ $asset_path }}assets/images/stars.png" alt="stars" class="start">
                                <p class="slider_text">
                                    {{$texts->fback}}
                                </p>
                            </div>
                            <div class="slider_info">
                                <img src="{{ $asset_path }}assets/images/women.png" alt="women">
                                <h3 class="slider_title">{{$texts->user_fb}}</h3>
                                <img src="{{ $asset_path }}assets/images/stars.png" alt="stars" class="start">
                                <p class="slider_text">
                                    {{$texts->fback}}
                                </p>
                            </div>
                            <div class="slider_info">
                                <img src="{{ $asset_path }}assets/images/women3.png" alt="women">
                                <h3 class="slider_title">Christina</h3>
                                <img src="{{ $asset_path }}assets/images/stars.png" alt="stars" class="start">
                                <p class="slider_text">
                                    {{$texts->fback}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!-- Button trigger modal -->


        <!-- Modal Terms -->
        <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termsModalLabel">{{$texts->terms}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('lander::offers.705-v2.athena.terms')

                    </div>

                </div>
            </div>
        </div>
        <!-- Modal Privacy -->
        <div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="privacyModalLabel">{{$texts->privacy}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('lander::offers.705-v2.athena.privacy')

                    </div>

                </div>
            </div>
        </div>
        <!-- Modal FAQ -->
        <div class="modal fade" id="faqModal" tabindex="-1" role="dialog" aria-labelledby="faqModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="faqModalLabel">{{$texts->faq}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('lander::offers.705-v2.athena.faq')

                    </div>

                </div>
            </div>
        </div>
        <!-- Modal Reading -->
        <div class="modal fade" id="readingModal" tabindex="-1" role="dialog" aria-labelledby="readingModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="readingModalLabel">{{$texts->reading}} {{$customer->fullname}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('lander::offers.705-v2.athena.readingf')

                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <ul class="footer-links">
                    <li><a href="../index.php?">HOME</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#termsModal" data-cb-type="inline"
                           data-cb-hash="text">{{$texts->terms}}</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#privacyModal" data-cb-type="inline"
                           data-cb-hash="text">{{$texts->privacy}}</a></li>
                </ul>
            </div>
        </footer>


        <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
        <script src="{{$asset_path}}assets/js/text.js"></script>
        <script src="{{$asset_path}}assets/js/slick.js"></script>
        <script src="{{$asset_path}}assets/js/functions.js"></script>

    </div>
</div>
</body>
</html>
