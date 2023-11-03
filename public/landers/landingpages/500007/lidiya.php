<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    $full_path = $_SERVER['DOCUMENT_ROOT'];
    $real_path = $full_path . '../';

    $path_to_external_files = $real_path . "external_files/";
    $path_to_terms = $path_to_external_files . 'terms/';

    $path_to_common = 'https://true-astro-answers.com/v2/external_files/common/';

    include 'language.php';

    /*===== GET UserData from DB =====*/
    $uid = isset($_GET['uid']) ? $_GET['uid'] : '';
    if ($uid !== '') {
        require_once('../getUserData.php');
    }
    ?>

    <title><?= $top_title ?></title>
    <link rel='shortcut icon' href='assets/images/icon.png' type='image/x-icon'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?= $path_to_common ?>bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/slick-theme.css"/>
    <link href="/assets/custom.css" rel="stylesheet">
    <link href="/assets/css.css" rel="stylesheet">
    <script>
        //redirect url
        let go_url = "<?php $url ?>";
    </script>

</head>
<body data-event="responsive-landing-page-r001-orig-desktop-pageview" cz-shortcut-listen="true">
<div class="mid-cirle">
    <div class="container">
        <!-- End Hidden Fields, there is more input fields in the code below -->
        <div class="row">
            <div class="top-logo">
                <a href="index.php"><img src="/assets/images/astro-logo.png" alt="Astrology"></a>
            </div>
            <div class="lending">
                <div class="success">
                    <h2>Thank you for your confidence</h2>
                    <div class="slide_user">
                        <img src="/assets/images/Athena.png" alt="Athena" class="lidiya" id="bayerFace">
                        <p class="success-answer"> Hello, <span class='users_name'> <?= $userData['fname']?></span>! <br>First of all, I want to say a few things about you. <br>
                            There are some things that you need to know.
                        </p>
                    </div>
                    <div class="success-inform">
                        <div class="success-dialog">
                            <div class="success-item">
                                <p><span class='users_name'> <?= $userData['fname']?></span>,</p>
                                <p>You may not be aware of this but you are actually a <span class='orange'> person of high moral standards </span> with <span class="orange">great potential</span> and some incredible abilities.
                                    I'm not just saying that to please you. It's the truth
                                </p>
                                <p class="text-test">
                                    After long hours of work on your case, I have seen unmistakable 'signs' that you are a very special person, quite different to all those I have managed to help so far.
                                    I really want you to know this because I know you have very little faith in yourself.
                                    That said, I invite you now to get to the heart of the matter with your <span class='orange'>Great Personal Guide.</span>
                                </p>
                                <p>So, I laid a FIRST THREE TAROT CARD SPREAD, focusing on your emotional and romantic situation because I felt this was a fundamental area, essential to your balance.</p>
                                <p>LET'S NOW MOVE ON THE SECOND CARD CONCERNING YOUR PRESENT SITUATION.</p>
                                <p>EMOTIONAL AND ROMANTIC SITUATION</p>
                            </div>

                            <h4 class="orange success_main">The first card is LUCK, positioned upside down. Luck</h4>

                            <div class="success_card">
                                <img src="/assets/images/Luck.jpg" alt="Luck">
                                <div class="success_info">

                                    <div class="success-zoom">
                                        <div class="fontSizePlus success-bold">Zoom+</div> |
                                        <div class="fontReset">Reset</div> |
                                        <div class="fontSizeMinus">Zoom-</div>
                                    </div>
                                    <p>
                                        It's the luckiest card in the game.
                                        However, when it is drawn upside down, its properties are reversed. In the place of light is darkness, instead of joy, sadness, instead of harmony and understanding, discord and conflict.
                                        <span class='users_name'> <?= $userData['fname']?></span>, there has been some kind of communication breakdown.
                                    </p>
                                    <p>
                                        You can no longer communicate, contact is difficult or impossible and you have chosen to shut yourself away.
                                        One failure follows another, none of your plans work out.
                                        The rupture also conceals lies, differences of opinion, misunderstandings.
                                    </p>
                                    <p>
                                        I'm being honest with you: I see a lot of obstacles and misunderstandings involved in your relationship. But that is not the only problem.
                                        As I look ever closer, I sense a great deal of disappointment.
                                        So far, the people you have loved have never lived up to your expectations.
                                        In fact, the feeling that you are not loved and appreciated as you deserve dogs you constantly.
                                    </p>
                                    <p>
                                        I also see an immense sorrow, the scars of which you still bear today, even if a lot of water has flowed under the bridge since then.
                                        <span class='orange'> Luck, </span>  the wrong way around, is a warning against possible poor sight!
                                        Your overall view is unclear and you have trouble making the right decisions.
                                    <p>
                                        BUT IT'S NOT ALL BAD NEWS!
                                        In love, I can tell you that great  <span class='orange'> and beautiful things are in store for you in the near future. </span> I will return to this point in a few moments.
                                    </p>
                                    </p>
                                </div>
                            </div>

                            <h4 class="orange success_main">The second card is COURAGE, upside down.</h4>

                            <div class="success_card success_card-revers ">
                                <div class="success_info success_text-right">

                                    <div class="success-zoom">
                                        <div class="fontSizePlus success-bold">Zoom+</div> |
                                        <div class="fontReset">Reset</div> |
                                        <div class="fontSizeMinus">Zoom-</div>
                                    </div>

                                    <p>
                                        That corroborates Luck upside down for your first card and also what I sensed about you!
                                    </p>
                                    <p><span class='users_name'><?= $userData['fname']?></span></p>
                                    <p>
                                        The fear of failure, the fear of taking risks is very strong in you, deep within you.
                                        It is as if you were drowning in a sea of conflicting emotions.
                                    </p>

                                    <p>
                                        THIS GENERATES A LOT OF <span class="orange"> CONFUSION</span> and, as a result, you have the greatest difficulty in making decisions.
                                        Are you clinging to a relationship that, today, seems to be on the wrong track?
                                        That seems to be the case.
                                    </p>
                                    <p>
                                        <span class='users_name'> <?= $userData['fname']?></span> all the efforts you're making right now are not going to change anything.
                                        The communication between you is scrambled, you do not understand each other.
                                    </p>
                                    <p>
                                        It feels as though you have thrown in the towel, you've given up.
                                        You feel as though you have already tried everything. And there you still are, without tenderness and without complicity.
                                        Yes, I believe that, deep in your heart, you still long for a soul mate, a love that binds and "unites".
                                    </p>
                                    <p>And now, the third Tarot card will tell us more about how your romantic relationships will evolve in the future.</p>
                                </div>
                                <img src="/assets/images/Courage.jpg" alt="Courage">
                            </div>

                            <h4 class="orange success_main">The third card is RENEWAL.</h4>

                            <div class="success_card success_card-last">
                                <img src="/assets/images/Renewal.jpg" alt="Renewal">
                                <div class="success_info">

                                    <div class="success-zoom">
                                        <div class="fontSizePlus success-bold">Zoom+</div> |
                                        <div class="fontReset">Reset</div> |
                                        <div class="fontSizeMinus">Zoom-</div>
                                    </div>

                                    <p>
                                        <span class='orange'>Renewal </span> always means a happy ending, the happy resolution of a difficult situation!
                                    </p>
                                    <p>
                                        <span class='users_name'> <?= $userData['fname']?></span> this would appear to indicate the start of a relationship that will bring you <span class='orange'>joy </span>, warmth and a great deal of <span class='orange'> tenderness. </span>
                                    </p>
                                    <p>
                                        I think I am not wrong in saying that this affair is already on its way!
                                        The Great Love that you have been hoping for so long is on the way and will very soon be knocking at your door.
                                        But at the same time, let me tell you again: RIGHT NOW, YOU ARE IN A PERIOD OF CONFUSION AND DISARRAY.
                                    </p>
                                    <p>
                                        Things do not seem very clear to you.
                                        Your state of confusion is such that there is a sort of "shield" in your mind that prevents me from now clearly discerning what is blocking you.
                                    </p>
                                    <p>
                                        However,  <span class='users_name'> <?= $userData['fname']?> </span> there are some indications and signs that cannot be mistaken.
                                    </p>
                                    <p>THE FACT THAT YOU ARE READING THESE LINES RIGHT NOW, IS DEFINITELY NOT JUST DOWN TO CHANCE! </p>
                                    <p>I can help you to free yourself from these blockages and thus guide you to the promised <span class='orange'> happiness </span>that is so clearly indicated by the card <span class='orange'> Renewal.</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="success-privacy">
                            <p>I reallly hope to hear back from you soon!</p>
                            <img src="/assets/images/lydiya_podpis.png" alt="Athena" class="signature" id="buyerSignature">
                            <div class="privacy">
                                <span class="success-bold">P.S.</span> <?= $confidence ?>
                                <a href="#privacy" class="cartonbox" data-cb-type="inline" data-cb-hash="text"><?= $privacy ?></a>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="success_btn">I REQUEST MY GREAT DEEP CLAIRVOYANCE SITTING</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <p class="personal-date">
                    <img src="/assets/images/lock.png" alt="lock">
                    <?= $confidentality ?>
                </p>
                <div class="slider">
                    <div class="slider_slick">
                        <div class="slider_info">
                            <img src="/assets/images/women2.png" alt="women">
                            <h3 class="slider_title">Milana</h3>
                            <img src="/assets/images/stars.png" alt="stars" class="start">
                            <p class="slider_text">
                                <?= $fback ?>
                            </p>
                        </div>
                        <div class="slider_info">
                            <img src="/assets/images/women.png" alt="women">
                            <h3 class="slider_title"><?= $user_fb ?></h3>
                            <img src="/assets/images/stars.png" alt="stars" class="start">
                            <p class="slider_text">
                                <?= $fback ?>
                            </p>
                        </div>
                        <div class="slider_info">
                            <img src="/assets/images/women3.png" alt="women">
                            <h3 class="slider_title">Christina</h3>
                            <img src="/assets/images/stars.png" alt="stars" class="start">
                            <p class="slider_text">
                                <?= $fback ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: none;">
            <div id="privacy">
                <?php require_once $path_to_terms . 'privacy.php'; ?>
            </div>
            <div id="terms">
                <?php require_once $path_to_terms . 'terms.php'; ?>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <ul class="footer-links lending-links">
            <li><a href="../../../en/index.php?<?= $url_params ?>"><?= $home ?></a></li>
            <li><a href="#terms" class="cartonbox" data-cb-type="inline" data-cb-hash="text"><?= $terms ?></a></li>
            <li><a href="#privacy" class="cartonbox" data-cb-type="inline" data-cb-hash="text"><?= $privacy ?></a></li>
            <li><a href="faq.php?<?= $url_params ?>"><?= $faq ?></a></li>
        </ul>
    </div>
</footer>

<script src="<?= $path_to_common ?>jquery.js"></script>
<script src="<?= $path_to_common ?>bootstrap.js"></script>
<script src="/assets/js/slick.js"></script>

<!--Cartonbox popup-->
<script src="<?= $path_to_common ?>cartonbox.min.js"></script>
<script src="<?= $path_to_common ?>cartonbox-connect.js"></script>
<link rel="stylesheet" href="<?= $path_to_common ?>cartonbox.min.css">
<!--Cartonbox popup-->

<script>
    //Slick Slider
    $('.slider_slick').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 2000,
        dots: true,
    });

    //Zoom text function
    $(document).ready(function () {
        let min = 15;
        let max = 20;
        let reset = $('body').css('fontSize');
        let elm = $('.success_info p');
        let size = str_replace(reset, 'px', '');
        let size_reset = size;

        $('.fontSizePlus').click(function() {
            if (size<=max) {
                size++;
                elm.css({'fontSize' : size});
            }
            return false;
        });

        $('.fontSizeMinus').click(function() {
            if (size>=min) {
                size--;
                elm.css({'fontSize' : size});
            }
            return false;
        });

        $('.fontReset').click(function () {
            size = size_reset;
            elm.css({'fontSize' : reset});
        });

    });

    function str_replace(haystack, needle, replacement) {
        let  temp = haystack.split(needle);
        return temp.join(replacement);
    }

</script>
</body>
</html>
