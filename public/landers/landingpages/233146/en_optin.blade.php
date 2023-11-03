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
    <link rel="manifest" href="{{ $asset_path }}manifest.json">

    <!-- Bootstrap -->
    <link type="text/css" href="{{$asset_path}}assets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ $asset_path }}assets/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{ $asset_path }}assets/slick-theme.css"/>
    <link href="{{ $asset_path }}assets/style.css" rel="stylesheet">
    <link href="{{ $asset_path }}assets/css.css" rel="stylesheet">
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>

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
        fbq('init', '{{$fbpixel}}');
        fbq('track', 'Lead');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id={{$fbpixel}}&ev=Lead&noscript=1"/>
    </noscript>
     <script type="text/javascript">
        (function(document, window){
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://api.pushnami.com/scripts/v1/pushnami-adv/60f83f7c3c088e3e554ac05d";
            script.onload = function() {
                Pushnami
                    .update()
                    .prompt();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window);
    </script>
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
                        <h1 class="title-main">{{$texts->thankyou_optin}} {{$customer->fullname}}</h1>
                        <!--<hr class="line">-->
                    </div>

                    <div id="loadImg">
                        <div class="loader"></div>
                    </div>

                    <div id="final" class="final">
                        <div class="sign_sec">
                            <div class="m_box m_box_group">
                                <h5>
                                    Now I know you are not a robot I will start by creating your unique and personal reading immediately. Because this takes time I can not tell you when it will be ready.
                                </h5>
                                <hr>
                                <h4 style=" padding: 10px; color: #FFD3C5;
    background-color: cornflowerblue;
    border-radius: 22px;" >
                                    <strong>I suggest you accept the popup in the top left corner so that you will get a notification when it's ready. </strong> </h4>
                                <hr>
                                <h5> Of course I will also send you an email. {{$customer->firstname}}.
                                </h5>
                                <hr>
                                <h3 class="text-left">Lots of love, Christin</h3>

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
