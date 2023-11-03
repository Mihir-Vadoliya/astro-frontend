
@php($asset_path = '/landers/landingpages/233146/')
@php($srcImg = "/landers/sets/set8/")

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
    <link type="text/css" href="{{$asset_path}}assets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="{{ $asset_path }}assets/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{ $asset_path }}assets/slick-theme.css"/>
    <link href="{{ $asset_path }}assets/style.css" rel="stylesheet">
    <link href="{{ $asset_path }}assets/css.css" rel="stylesheet">
    <link rel="manifest" href="{{ $asset_path }}manifest.json">
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>

{{--@if(\Settings::get('google_analytics_id'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id={{ \Settings::get('google_analytics_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', "{{ \Settings::get('google_analytics_id') }}");
        </script>
@endif--}}

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-209174864-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-209174864-1');
    </script>
    <!-- Hotjar Tracking Code for https://groceries-to-get.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1457813,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
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
    <a href="https://all-universe.com"><img src="{{$asset_path}}assets/images/astro-logo.png" alt="Astrology"></a>
</div>

<div class="mid-cirle">
    <div class="container">
        <form name="g" id="nameForm" class="main_form" method="post" action="{{request()->url()}}/insertlead">
            @csrf
            <input name="uuid" type="hidden" value="{{$uuid}}">
            <input name="design_id" type="hidden" value="{{$design_id}}">
            <input name="country" type="hidden" value="{{$country}}">
            <input name="visit" type="hidden" value="{{$visit_id}}">
            <input name="language" type="hidden" value="{{$language}}">
            <input name="lpid" type="hidden" value="{{$design_id}}">
            <input name="sign" type="hidden" value="sign">

            <!-- End Hidden Fields, there is more input fields in the code below -->
            <div class="row">
                <div class="mid-main-box">
                    <div class="step-lidiya">
                        <img src="{{ $asset_path }}assets/images/lida.png" alt="maria-woman" class="maria" style="border-radius: 50%;" >
                        <h1 class="title-main">{{$texts->h1}}</h1>
                        <!--<hr class="line">-->
                    </div>
                    <div class="step_1">
                        <p>{{$texts->p_head}}</p>
                        <div class="box-sign">
                            <div class="button-box button-box_fire bev" data-bevent="2" data-sign="aries">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}aries.png"
                                                    alt="aries" title="aries"></span>
                                        <span>{{$texts->aries}}<span class="button-box__span-name">{{$texts->March}} 21 - {{$texts->April}} 20</span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="button-box button-box_earth bev" data-bevent="2" data-sign="taurus">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}taurus.png"
                                                    alt="taurus" title="taurus"></span>
                                        <span>{{$texts->taurus}}<span class="button-box__span-name"> {{$texts->April}} 21 - {{$texts->May}} 20</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box button-box_air bev" data-bevent="2" data-sign="gemini">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}gemini.png"
                                                    alt="gemini" title="gemini"></span>
                                        <span>{{$texts->gemini}}<span class="button-box__span-name">{{$texts->May}} 21 - {{$texts->June}} 20</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box button-box_water bev" data-bevent="2" data-sign="cancer">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}cancer.png"
                                                    alt="cancer" title="cancer"></span>
                                        <span>{{$texts->cancer}}<span class="button-box__span-name">{{$texts->June}} 21 - {{$texts->July}} 22</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box button-box_fire bev" data-bevent="2" data-sign="leo">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}leo.png"
                                                    alt="leo" title="leo"></span>
                                        <span>{{$texts->leo}}<span class="button-box__span-name">{{$texts->July}} 23 - {{$texts->August}} 22</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box button-box_earth bev" data-bevent="2" data-sign="virgo">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}virgo.png"
                                                    alt="virgo" title="virgo"></span>
                                        <span>{{$texts->virgo}}<span class="button-box__span-name">{{$texts->August}} 23 - {{$texts->September}} 21</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box button-box_air bev" data-bevent="2" data-sign="libra">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}libra.png"
                                                    alt="libra" title="libra"></span>
                                        <span>{{$texts->libra}}<span class="button-box__span-name">{{$texts->September}} 22 - {{$texts->October}} 20</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box  button-box_water bev" data-bevent="2" data-sign="scorpio">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}scorpio.png"
                                                    alt="scorpio" title="scorpio"></span>
                                        <span>{{$texts->scorpio}}<span class="button-box__span-name">{{$texts->October}} 21 - {{$texts->November}} 20</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box button-box_fire bev" data-bevent="2" data-sign="sagittarius">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}sagittarius.png"
                                                    alt="sagittarius" title="sagittarius"></span>
                                        <span>{{$texts->sagitar}}<span class="button-box__span-name">{{$texts->November}} 21 - {{$texts->December}} 21</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box button-box_earth bev" data-bevent="2" data-sign="capricorn">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}capricorn.png"
                                                    alt="capricorn" title="capricorn"></span>
                                        <span>{{$texts->capricorn}}<span class="button-box__span-name">{{$texts->December}} 22 - {{$texts->January}} 21</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box button-box_air bev" data-bevent="2" data-sign="aquarius">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}aquarius.png"
                                                    alt="aquarius" title="aquarius"></span>
                                        <span>{{$texts->aquarius}}<span class="button-box__span-name">{{$texts->January}} 22 - {{$texts->February}} 18</span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="button-box button-box_water bev" data-bevent="2" data-sign="pisces">
                                <div class="sign-box">
                                    <a href="#">
                                        <span class="sign-box__img"><img
                                                    src="{{$srcImg}}pisces.png"
                                                    alt="pisces" title="pisces"></span>
                                        <span>{{$texts->pisces}}<span class="button-box__span-name">{{$texts->February}} 19 - {{$texts->March}} 20</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="step_2 slide">
                        <h2>{{$texts->h2_gender}}</h2>
                        <div class="pre_btn back" onclick='back("1","2")'>< {{$texts->back}}</div>
                        <div class=" sign_sec">
                            <div class="m_box">
                                <input type="radio" name="gender" class="sr-only" id="male" value="male">
                                <label for="male">
                                    <div class="bx_in btn_chose bev" data-bevent="3">
                                        <img src="{{ $asset_path }}assets/images/male-symbol.png" alt="man">
                                        <span>{{$texts->man}}</span>
                                    </div>
                                </label>
                                <input type="radio" name="gender" class="sr-only" id="female" value="female">
                                <label for="female">
                                    <div class="bx_in btn_chose bev" data-bevent="3">
                                        <img src="{{ $asset_path }}assets/images/female-symbol.png" alt="woman">
                                        <span>{{$texts->woman}}</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="step_3 slide">
                        <h2>{{$texts->h2_born}}</h2>
                        <div class="sign_sec">
                            <div class="m_box m_box_group">
                                <div class="m_box_date">
                                    <select class="time_d" name="day" required>
                                        <option value="" selected="selected">{{$texts->day_born}}</option>
                                        @for ($i = 1; $i < 32; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                    <select class="time_d" name="month" required>
                                        <option value="" selected="selected">{{$texts->month_born}}</option>
                                        @for ($i = 1; $i < 13; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                    <select class="time_d" name="year" required>
                                        <option value="" selected="selected">{{$texts->year_born}}</option>

                                        @for ($i = 1940; $i < 2003; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor

                                    </select>
                                </div>
                                <span class="error">{{$texts->error}}</span>
                                <p class="date_text">
                                    {{$texts->p_help}}
                                </p>
                                <div class="col-md-12 text-center" id="relation-submit-btn">
                                    <button title="CONTINUE" type="button" class="btn_1 bev continue"
                                            data-bevent="4">{{$texts->continue}}</button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Steps CITY-->
                    <div class="step_city slide">
                        <h2>{{$texts->city_question}}</h2>
                        <div class="sign_sec">
                            <div class="m_box m_box_group">
                                <input type="text" class="input-text" name="city" id="city"
                                       placeholder="{{$texts->city}}">
                                <div class="clearfix"></div>
                                <p class="date_text">
                                    {{$texts->p_help}}
                                </p>
                                <div class="col-md-12 text-center" id="city-submit-btn">
                                    <button title="CONTINUE" type="button" class="btn_1 bev go_time"
                                            data-bevent="5">{{$texts->continue}}</button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <!--  Steps TIME-->
                    <div class="step_time slide">
                        <h2>{{$texts->time_question}}</h2>
                        <div class=" sign_sec">
                            <div class="m_box">
                                <div class="know-birth-time-yes btn_time">
                                    <span>{{$texts->yes}}</span>
                                </div>
                                <div class="know-birth-time-no btn_time">
                                    <span>{{$texts->no}}</span>
                                </div>
                            </div>
                            <p class="date_text">
                                {{$texts->p_help}}
                            </p>
                        </div>
                    </div>

                    <div class="step_time-enter slide">
                        <h2>{{$texts->time}}</h2>
                        <div class="sign_sec">
                            <div class="m_box m_box_date">
                                <select class="time_dd" name="tobhr">
                                    <option value="" selected="selected">{{$texts->hour}}</option>
                                    @for ($i = 0; $i < 24; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                <select class="time_dd" name="tobmin">
                                    <option value="" selected="selected">{{$texts->mins}}</option>
                                    @for ($i = 0; $i < 60; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor

                                </select>
                            </div>
                            <div class="col-md-12 text-center">
                                <button title="CONTINUE" type="button" class="btn_1 bev go_four"
                                        data-bevent="7">{{$texts->continue}}</button>
                            </div>
                        </div>
                    </div>

                    <!--Step Concerns-->
                    <div class="step_4 slide">
                        <h2>{{$texts->h2_consern}}</h2>
                        <div class="sign_sec">
                            <div class="m_box m_box_group check-material">
                                <input id="toggle-1" class="toggle" type="radio" name="concerns"
                                       value="{{$texts->work}}">
                                <label for="toggle-1" class="concerns_label">{{$texts->work}}</label>
                                <input id="toggle-2" class="toggle" type="radio" name="concerns"
                                       value="{{$texts->money}}">
                                <label for="toggle-2" class="concerns_label">{{$texts->money}}</label>
                                <input id="toggle-3" class="toggle" type="radio" name="concerns"
                                       value="{{$texts->love}}">
                                <label for="toggle-3" class="concerns_label">{{$texts->love}}</label>
                                <input id="toggle-4" class="toggle" type="radio" name="concerns"
                                       value="{{$texts->general}}">
                                <label for="toggle-4" class="concerns_label">{{$texts->general}}</label>
                                <div class="clearfix"></div>
                            </div><?php /*?>
                            <div class="col-md-12 text-center" id="relation-submit-btn">
                                <button title="CONTINUE" type="button" class="btn_1 bev"
                                        data-bevent="8">{{$texts->continue}}</button>
                            </div><?php */?>
                        </div>
                    </div>

                    <!--Step First/Last name-->
                    <div class="step_5 slide">
                        <h2>{{$texts->h2_name}}</h2>
                        <div class="sign_sec">
                            <div class="m_box m_box_group">
                                <div class="m_box_date">
                                    <input type="text" name="first_name" required id="first_name"
                                           placeholder="First name" data-validate>
                                    <input type="text" name="last_name" required id="last_name"
                                           placeholder="Last name" data-validate>
                                    <div class="col-md-12 text-center" id="relation-submit-btn">
                                        <button title="CONTINUE" type="submit" id="checkName" value="CONTINUE"
                                                class="btn_1 bev continue"
                                                data-bevent="9">{{$texts->continue}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Step Email/Tel-->
                    <div class="step_6 slide">
                        <h2>{{$texts->h2_personal}}</h2>
                        <div class="sign_sec">
                            <div class="m_box m_box_group">
                                <p class="bad-response"><span></span><br>{{$texts->mail_error}}</p>
                                <input type="email" class="input-email" name="email" id="email" required
                                       placeholder="{{$texts->mail}}">



                                <div class="col-md-12 text-center" id="relation-submit-btn">
                                    <button title="CONTINUE" type="submit" id="get_clarification"
                                            class="btn_1 bev button-email-next" data-bevent="10">
                                        {{$texts->button_free}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="loadImg">
                        <div class="loader"></div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="step_8">
                        <div>
                            <div class="text-center step_8__thanks">{{$texts->thank_p}} </div>
                            <div>
                                <h3 class="step_8__title text-center">
                                    {{$texts->receive_data}}
                                </h3>
                                <div class="step_8__white-box">
                                    <p>
                                        {{$texts->check_text}}
                                    </p>
                                    <ul class="step_8__list">
                                        <li>{{$texts->check_text_list1}}</li>
                                        <li>{{$texts->check_text_list2}}</li>
                                        <li>{{$texts->check_text_list3}}</li>
                                    </ul>
                                </div>

                                <p>
                                    <br/>
                                    Your devoted friend,
                                    <br/>
                                      <br/>
                                    Lydia
                                    <br/>
                                    <br/>
                                </p>
                                <p  class="step_8__white-box">
                                    {{$texts->tip_text}}
                                </p>
                                <br/>
                                <br/>

                            </div>
                        </div>
                    </div>

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
                                    {!! $texts->fback !!}
                                </p>
                            </div>
                            <div class="slider_info">
                                <img src="{{ $asset_path }}assets/images/women.png" alt="women">
                                <h3 class="slider_title">{{$texts->user_fb}}</h3>
                                <img src="{{ $asset_path }}assets/images/stars.png" alt="stars" class="start">
                                <p class="slider_text">
                                    {!!  $texts->fback2 !!}
                                </p>
                            </div>
                            <div class="slider_info">
                                <img src="{{ $asset_path }}assets/images/women3.png" alt="women">
                                <h3 class="slider_title">Christina</h3>
                                <img src="{{ $asset_path }}assets/images/stars.png" alt="stars" class="start">
                                <p class="slider_text">
                                    {!!  $texts->fback3 !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <h2 class="secrets-title">DISCLAIMER</h2>
                    <p class="personal-date">
                        DISCLAIMER: THE INFORMATION PROVIDED, WHETHER FREE OR PAID, MUST NOT BE CONSIDERED AS INDICATING AN OPINION IN THE REALMS OF PSYCHOLOGY, ECONOMY-FINANCE, MEDICINE, LEGAL MATTERS, REAL ESTATE OR OTHERS AND MUST IN NO CASE BE USED AS A BASIS FOR DECISION MAKING. TESTIMONIALS, REVIEWS AND ENDORSEMENTS ARE FREE INDIVIDUAL OPINIONS THAT IN NO CASE IMPLY IDENTICAL RESULTS FOR EVERYBODY. PLEASE ALSO READ THE TERMS OF USE.<br><br>
                        Futurastro, 1 Ward Bingleystraat 1065 TJ Amsterdam.
                    </p>
                </div>
            </div>
        </form>

    </div>
    <footer class="footer">
        <div class="container">
            <ul class="footer-links">
                <li><a href="https://all-universe.com">Home</a></li>
                <li><a href="https://all-universe.com/terms.php">{{$texts->terms}}</a></li>
                <li><a href="https://all-universe.com/privacy.php">Privacy policy</a></li>
                <li><a href="https://all-universe.com/ethical.php">Ethical rules</a></li>
                <li><a href="https://all-universe.com/gdpr.php">GDPR</a></li>
                <li><a href="https://all-universe.com/cookie_policy.php">Cookie policy</a></li>
            </ul>
        </div>
    </footer>
</div>
<script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- {{--<script src="{{$asset_path}}assets/js/text.js"></script>--}} -->
<script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
<script src="{{$asset_path}}assets/js/slick.js"></script>
<script src="{{$asset_path}}assets/js/functions.js"></script>

<script>
    $(document).ready(function () {

        /* Google analytic function */
        function gaSend(event_category, event_action, event_label, value) {
            window.gtag('event','page_view',  {
                page_title: event_category,
                page_location: event_category.split(' ').join('_') ,
                page_path: event_category.split(' ').join('_') ,
            });
        };

        function showActualData(n, data) {
            let clarification_block = '.clarification__block_' + n;
            let h4 = '.h4_fixed_' + n;
            let fixed_data = '.fixed_data_' + n;

            $(clarification_block).slideUp(600);
            $(fixed_data).html(data);
            $(h4).slideDown(600);
        }

        $(".step_1 .button-box").on("click", function () {
            let sign = $(this).data('sign');
            $("input[name='sign']").attr('value', sign);
            gaSend('select zodiac', 'button click', sign, 1);
            gotoNextStep('.step_1', '.step_2');
        });

        /*********************** Step 2 ***********************/
        $(".btn_chose").on("click", function () {
            gaSend('select gender', 'button click', 'gender', 1);
            gotoNextStep('.step_2', '.step_3');
        });

        /*********************** Step 3 ***********************/
        $(".step_3 .continue").on("click", function () {
            if (completedTime()) {
                gaSend('select birthday', 'button click', 'birthday', 1);
                gotoNextStep('.step_3', '.step_city');
            }
        });

        /*********************** Step_city ***********************/
        $(".go_time").on("click", function () {
            gaSend('select city', 'button click', 'city', 1);
            gotoNextStep('.step_city', '.step_time');

        });

        /*********************** step_time Y/N ***********************/
        // BIRTH TIME NO
        $(".know-birth-time-no").click(function () {
            gaSend('select birthtime', 'button click', 'no', 1);
            gotoNextStep('.step_time', '.step_4');
        });

        // BIRTH TIME YES
        $(".know-birth-time-yes").click(function () {
            gaSend('select birthtime', 'button click', 'yes', 1);
            gotoNextStep('.step_time', '.step_time-enter');
        });

        /*********************** step_time-enter ***********************/
        $(".go_four").on("click", function () {
            gaSend('enter birthtime', 'button click', 'enter time', 1);
            gotoNextStep('.step_time-enter', '.step_4');
        });

        /*********************** Step 4 ***********************/
        $(".step_4 .concerns_label").on("click", function () {
            gaSend('select concern', 'button click', 'concern', 1);
            gotoNextStep('.step_4', '.step_5');
        });

        /*********************** Step 5 ***********************/

        $("#checkName").on("click", function () {
            gaSend('enter name', 'button click', 'name', 1);
            if (!checkParamsName()) {
                gotoNextStep('.step_5', '.step_6');
            }
        });

        $("#nameForm").on("submit", function (e) {
            gaSend('submit form', 'button click', 'get my reading', 1);
            e.preventDefault();
            getAjax();
            gotoNextStep('.step_6', '.step_8');
            $('body').css('overflow', 'visible');
            gaSend('final screen', 'end of flow', 'end', 1);
        });
    });
</script>
</body>
</html>
