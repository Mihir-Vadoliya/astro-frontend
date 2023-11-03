<?php
session_set_cookie_params(1800); //set time for session
session_start();
if ( !isset( $_SESSION["origURL"] ) )
    $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
?>
<!DOCTYPE html>
<html style="" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    $real_path = $_SERVER['DOCUMENT_ROOT'];
    $path_to_external_files = $real_path . "/v2/external_files/";
    $path_to_terms = $path_to_external_files . 'terms/';
    $path_to_common = '/v2/external_files/common/';

    $url_params = $_SERVER['QUERY_STRING'];
    $path_to_horoscope = ($_SESSION["origURL"]);

    ?>

    <title>Astrofysika</title>
    <link rel='shortcut icon' href='images/icon.png' type='image/x-icon'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--<link href="<?/*= $path_to_common */?>bootstrap.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="files/style.css" rel="stylesheet">
    <link href="files/css.css" rel="stylesheet">

</head>
<body data-event="responsive-landing-page-r001-orig-desktop-pageview" cz-shortcut-listen="true">
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="navigation">
                    <nav class="menu">
                        <ul class="menu_list">
                            <li><a href="../../../en/index.php?<?= $url_params ?>">Home</a></li>
                            <li><a href="faq.php?<?= $url_params ?>">faq</a></li>
                            <li><a href="contact.php?<?= $url_params ?>">contact us</a></li>
                        </ul>
                    </nav>
                    <div class="top-logo">
                        <a href="../../../en/index.php?<?= $url_params ?>"><img src="images/astro-logo.png" alt="Astrology"></a>
                    </div>
                    <a href="<?= $path_to_horoscope ?>" class="buts">Astro</a>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="form-astro">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-contact faq-info">
                    <form action="#" id="form" method="post" class="form faq-border">
                        <h2 class="contact-title">Contact us</h2>
                        <p class="contact-info">Our dedicated customer support team is ready to help you with quick fixes,
                            troubleshooting issues and feedback to enhance your Astrology Reading experience.
                        </p>
                        <div class="form__field">
                            <input type="text" name="name" placeholder="Name" required />
                        </div>
                        <div class="form__field">
                            <input type="email" name="name" placeholder="E-Mail" required/>
                            <span class="form__error">This field should contain an E-Mail in the format example@site.com</span>
                        </div>
                        <div class="form__field">
                            <input type="tel" name="phone" placeholder="Mobile" minlength="14" maxlength="18" />
                            <span class="form__error">This field must contain a phone number in the format + code (123) 456-78-90</span>
                        </div>
                        <div class="form__field">
                            <input type="text" name="message" class="message" placeholder="Message" />
                            <span class="form__error">This field must contain a URL in the format http://mysite.com</span>
                        </div>
                        <button type="submit" class="buts">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-info secrets">
                    <h2 class="secrets-title"><a href="contact.php">Contact us</a></h2>
                    <p class="footer-text secrets-text">
                        Got a question? Check our FAQ for quick answers to common questions.
                        Our reach is global. We can work with clients worldwide.
                        Please contact us through
                        <span class="support" ><a href="mailto:support@Astrofysica.com" class="link">support@Astrofysica.com</a></span>
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="footer-links">
                    <p class="athor">
                        2021 © Astrofysica All rights reserved
                    </p>
                    <div class="footer-privacy">
                        <a href="#terms" class="cartonbox" data-cb-type="inline" data-cb-hash="text">Terms of service</a></li>
                        <a href="#privacy" class="cartonbox" data-cb-type="inline" data-cb-hash="text">Privacy policy</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div style="display: none;">
    <div id="privacy">
        <?php require_once $path_to_terms.'privacy.php'; ?>
    </div>
    <div id="terms">
        <?php require_once $path_to_terms.'terms.php'; ?>
    </div>
</div>

<script src="<?= $path_to_common ?>js.js"></script>
<script src="<?= $path_to_common ?>jquery.js"></script>
<script src="<?= $path_to_common ?>bootstrap.js"></script>

<!--Cartonbox popup-->
<script src="<?= $path_to_common ?>cartonbox.min.js"></script>
<script src="<?= $path_to_common ?>cartonbox-connect.js"></script>
<link rel="stylesheet" href="<?= $path_to_common ?>cartonbox.min.css">
<!--Cartonbox popup-->

<script>
    $(document).on('click','.bev',function (e) {
        var src = "<?= $BINOM_DOMAIN ?>/click.php?"+'event'+$(this).data('bevent')+'=1';
        var o = document.createElement("img");
        o.src=src;
        console.log(src);
    });

</script>

<?php
if(isset($_POST['submit'])){

    $to = "tame@wp.com"; //Whom to come
    $from = "exempel@com.us"; // From site

    /* information from form */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "Form from site Astro";

    /* check email validate */
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
    {
        show_error("<br /> Е-mail is not true");
    }

    /* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
    $mail_to_myemail = "Hello!
     A message has been sent from the site!
    Name: $name
    E-mail: $email
    Message: $message
    ";

    $headers = "From: $from \r\n";
    /* Отправка сообщения, с помощью функции mail() */
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    echo "Wiadomość wysłana. Dzięki Ci " . $name . ", wkrótce się z Tobą skontaktujemy.";
    echo "<br /><br /><a href='https://astolfysica.com/'>Back to the site</a>";
}

?>

</body>
</html>
