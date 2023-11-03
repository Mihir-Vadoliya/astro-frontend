<style>
    li {
        position: relative;
        text-align: left;
        padding-left: 12px;
    }

    .p-5 {
        padding-top: 5px !important;
    }

    li:before {
        position: absolute;
        content: '';
        top: 9px;
        transform: translatex(-50%);
        left: 0;
        display: block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .top-0:before {
        top: 27% !important;
    }

    ul {
        margin-left: 6px;
    }

    .configProductName {
        font-family: cursive;
    }

    .m-20 {
        margin-top: 20px;
    }

    .brandImg {
        width: 110px;

    }

    .d-flex {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    .align-items-center {
        align-items: center;
    }

    #defaultThankYouPage .d-none,
    #dynamicThankYouPage .d-none {
        display: none;
    }

    #defaultThankYouPage ul {
        margin-left: 6px;
    }

    #dynamicThankYouPage p:first-of-type {
        margin-top: 20px;
    }

    .px-3 {
        padding-left: 2rem !important;
    }

    .social-div {
        margin: 10px 0px;
    }

    .social_icon {
        width: 60px;
        border-radius: 0%;
        border: 0px;
        margin-right: 20px;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .brandLogo {
        width: 110px;
        margin-left: 50px;
    }
</style>

<div class="container d-none" id="dynamicThankYouPage">
    <!-- Celeste -->
    <div class="row justify-content-center mx-0 w-100 d-none" id="Celeste">
        <div class="col-12 col-md-6 col-xxl-7">
            <div class="d-flex justify-content-start align-items-center">
                <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg">
                <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">
                <h3 class="times fw-normal text-white text-center mb-4 pb-0">
                    Votre confiance me touche profondément <span class="configName">[Name]</span>,
                </h3>
            </div>
            <p class="font-16 fw-normal text-white text-start">

                Je me mets immédiatement au travail pour vous ! Dans les prochaines heures, vous recevrez votre cadeau :  <span class="configProductName"> [product name]</span>.
                <br><br>
                Pour être sûr de recevoir mon cadeau gratuit, veuillez suivre les étapes ci-dessous :
            </p>
            <ul class="text-start text-white list-inline list-unstyled">
                <li>Ouvrez votre boîte de réception</li>
                <li>Confirmez votre adresse email avec l'email de validation que je viens de vous envoyer</li>
                <li>Recevez votre cadeau : <span class="configProductName">[ProductName]</span></li>
                <li>Suivez-moi sur les réseaux sociaux pour d'autres cadeaux</li>
            </ul>
            <p class="font-16 fw-normal text-white text-start">
                Gardez un œil sur votre boîte de réception. Je suis sûre que vous allez adorer <span class="configProductName">[ProductName]</span> gratuit.
                <br><br>
                Avec Tendresse,
                <br>
                <span class="brandName">[Brand name]</span>
            </p>
            <div class="d-flex justify-content-start text-start social-div">
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="instagram">
                    <img src="/landers/sets/socialMedia/instagram.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="facebook">
                    <img src="/landers/sets/socialMedia/facebook.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="youtube">
                    <img src="/landers/sets/socialMedia/youtube.png" class="social_icon">
                </a>
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="tictock">
                    <img src="/landers/sets/socialMedia/tictock.png" class="social_icon">
                </a>
            </div>
        </div>
    </div>

    <!-- MAGELLAN -->
    <div class="row justify-content-center mx-0 w-100 d-none" id="Magellan">
        <div class="col-12 col-md-6 col-xxl-7">
            <div class="d-flex justify-content-start align-items-center">
                <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg">
                <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">
                <h3 class="times fw-normal text-white text-center mb-4 pb-0">
                    Votre confiance me touche profondément <span class="configName">[Name]</span>,
                </h3>
            </div>
            <p class="font-16 fw-normal text-white text-start">

                Je me mets immédiatement au travail pour vous ! Dans les prochaines heures, vous recevrez mon cadeau : <span class="configProductName">[product name]</span>.
                <br><br>
                Pour être sûr de recevoir mon cadeau gratuit, veuillez suivre les étapes ci-dessous :
            </p>
            <ul class="text-start text-white list-inline list-unstyled">
                <li>Ouvrez votre boîte de réception</li>
                <li>Confirmez votre adresse email grâce à l'email de validation que je viens de vous envoyer</li>
                <li>Recevez votre cadeau : <span class="configProductName">[ProductName]</span></li>
                <li>Suivez-moi sur les réseaux sociaux pour d'autres cadeaux</li>
            </ul>
            <p class="font-16 fw-normal text-white text-start">
                Gardez un œil sur votre boîte de réception. Je suis sûr que vous allez adorer <span class="configProductName">[ProductName]</span>.
                <br><br>
                Tendrement,
                <br>
                <span class="brandName">[Brand name]</span>
            </p>
            <div class="d-flex justify-content-start text-start social-div">
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="instagram">
                    <img src="/landers/sets/socialMedia/instagram.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="facebook">
                    <img src="/landers/sets/socialMedia/facebook.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="youtube">
                    <img src="/landers/sets/socialMedia/youtube.png" class="social_icon">
                </a>
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="tictock">
                    <img src="/landers/sets/socialMedia/tictock.png" class="social_icon">
                </a>
            </div>
        </div>
    </div>

    <!-- VICTORIA -->
    <div class="row justify-content-center mx-0 w-100 d-none" id="Viktoria">
        <div class="col-12 col-md-6 col-xxl-7">
            <div class="d-flex justify-content-start align-items-center">
                <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg">
                <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">
                <h3 class="times fw-normal text-white text-center mb-4 pb-0">
                    Votre confiance me touche profondément <span class="configName">[Name]</span>,
                </h3>
            </div>
            <p class="font-16 fw-normal text-white text-start">

                Je vais immédiatement me mettre au travail pour vous ! Dans les prochaines heures, vous recevrez mon cadeau ; <span class="configProductName">[product name]</span>
                <br><br>
                Pour être sûr de recevoir mon cadeau gratuit, veuillez suivre les étapes ci-dessous :
            </p>
            <ul class="text-start text-white list-inline list-unstyled">
                <li>Ouvrez votre boîte de réception</li>
                <li>Confirmez votre adresse email dans l'email de validation que je viens de vous envoyer</li>
                <li>Recevez votre cadeau : <span class="configProductName">[ProductName]</span></li>
                <li>Suivez-moi sur les réseaux sociaux pour plus de cadeaux</li>
            </ul>
            <p class="font-16 fw-normal text-white text-start">
                Gardez un œil sur votre boîte de réception. Je suis sûre que vous allez adorer <span class="configProductName">[ProductName]</span>.
                <br><br>
                Avec Tendresse,
                <br>
                <span class="brandName">[Brand name]</span>
            </p>
            <div class="d-flex justify-content-start text-start social-div">
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="instagram">
                    <img src="/landers/sets/socialMedia/instagram.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="facebook">
                    <img src="/landers/sets/socialMedia/facebook.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="youtube">
                    <img src="/landers/sets/socialMedia/youtube.png" class="social_icon">
                </a>
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="tictock">
                    <img src="/landers/sets/socialMedia/tictock.png" class="social_icon">
                </a>
            </div>
        </div>
    </div>

    <!-- MARIE et CHRISTIAN -->
    <div class="row justify-content-center mx-0 w-100 d-none" id="MC">
        <div class="col-12 col-md-6 col-xxl-7">
            <div class="d-flex justify-content-start align-items-center">
                <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg">
                <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">
                <h3 class="times fw-normal text-white text-center mb-4 pb-0">
                    Votre confiance nous touche profondément <span class="configName">[Name]</span>,
                </h3>
            </div>
            <p class="font-16 fw-normal text-white text-start">

                Nous allons immédiatement nous mettre au travail pour vous ! Dans les prochaines heures, vous recevrez notre cadeau : <span class="configProductName">[product name]</span>
                <br><br>
                Pour être sûr de recevoir notre cadeau gratuit, veuillez suivre les étapes ci-dessous :
            </p>
            <ul class="text-start text-white list-inline list-unstyled">
                <li>Ouvrez votre boîte de réception</li>
                <li>Confirmez votre adresse e-mail avec l'e-mail de validation que je viens de vous envoyer.</li>
                <li>Recevez votre cadeau : <span class="configProductName">[ProductName]</span></li>
                <li>Suivez-nous sur les réseaux sociaux pour d'autres cadeaux</li>
            </ul>
            <p class="font-16 fw-normal text-white text-start">
                Gardez un œil sur votre boîte de réception. Nous sommes sûrs que vous allez adorer <span class="configProductName">[ProductName]</span>.
                <br><br>
                Avec Tendresse,
                <br>
                <span class="brandName">[Brand name]</span>
            </p>
            <div class="d-flex justify-content-start text-start social-div">
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="instagram">
                    <img src="/landers/sets/socialMedia/instagram.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="facebook">
                    <img src="/landers/sets/socialMedia/facebook.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="youtube">
                    <img src="/landers/sets/socialMedia/youtube.png" class="social_icon">
                </a>
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="tictock">
                    <img src="/landers/sets/socialMedia/tictock.png" class="social_icon">
                </a>
            </div>
        </div>
    </div>

    <!-- MARIA & SARAH-->
    <div class="row justify-content-center mx-0 w-100 d-none" id="SM">
        <div class="col-12 col-md-6 col-xxl-7">
            <div class="d-flex justify-content-start align-items-center">
                <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg">
                <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">
                <h3 class="times fw-normal text-white text-center mb-4 pb-0">
                    Votre confiance nous touche profondément <span class="configName">[Name]</span>,
                </h3>
            </div>
            <p class="font-16 fw-normal text-white text-start">

                Nous nous mettons immédiatement au travail pour vous ! Dans les prochaines heures, vous recevrez notre cadeau : <span class="configProductName">[product name]</span>
                <br><br>
                Pour être sûr de recevoir notre cadeau gratuit, veuillez suivre les étapes ci-dessous :
            </p>
            <ul class="text-start text-white list-inline list-unstyled">
                <li>Ouvrez votre boîte de réception</li>
                <li>Confirmez votre adresse e-mail dans l'e-mail de validation que je viens de vous envoyer.</li>
                <li>Recevez votre cadeau : <span class="configProductName">[ProductName]</span></li>
                <li>Suivez-nous sur les réseaux sociaux pour d'autres cadeaux</li>
            </ul>
            <p class="font-16 fw-normal text-white text-start">
                Gardez un œil sur votre boîte de réception. Nous sommes sûrs que vous allez adorer <span class="configProductName">[ProductName]</span>.
                <br><br>
                Avec Tendresse,
                <br>
                <span class="brandName">[Brand name]</span>
            </p>
            <div class="d-flex justify-content-start text-start social-div">
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="instagram">
                    <img src="/landers/sets/socialMedia/instagram.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="facebook">
                    <img src="/landers/sets/socialMedia/facebook.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="youtube">
                    <img src="/landers/sets/socialMedia/youtube.png" class="social_icon">
                </a>
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="tictock">
                    <img src="/landers/sets/socialMedia/tictock.png" class="social_icon">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container d-none" id="defaultThankYouPage">
    <div class="row justify-content-center mx-0 w-100">
        <div class="col-12 col-md-6 col-xxl-7">
            <div class="d-flex justify-content-start align-items-center">
                <h3 class="times fw-normal text-white text-center mb-4 pb-0">
                    Votre confiance me touche <span class="configName">[Name]</span>,
                </h3>
            </div>
            <p class="font-16 fw-normal text-white text-start">

                Je me mets immédiatement au travail pour vous ! Dans les prochaines heures, vous recevrez mon cadeau.
                <br><br>
                Pour être sûr de recevoir mon cadeau, veuillez suivre les étapes ci-dessous :
            </p>
            <ul class="text-start text-white list-inline list-unstyled">
                <li>Ouvrez votre boîte de réception</li>
                <li>Confirmez votre adresse email dans l'email de validation que je viens de vous envoyer</li>
                <li>Recevez votre cadeau</li>
                <li>Suivez-moi sur les médias sociaux pour d'autres cadeaux </li>
            </ul>
            <p class="font-16 fw-normal text-white text-start">
                Gardez un œil sur votre boîte de réception. Je suis sûre que vous allez l'adorer !
                <br><br>
                L'amour,
            </p>
            <div class="d-flex justify-content-start text-start social-div">
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="instagram">
                    <img src="/landers/sets/socialMedia/instagram.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="facebook">
                    <img src="/landers/sets/socialMedia/facebook.png" class="social_icon">
                </a>

                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="youtube">
                    <img src="/landers/sets/socialMedia/youtube.png" class="social_icon">
                </a>
                <a href="javascript:void(0);" class="text-decoration-none social_icon_link" data-id="tictock">
                    <img src="/landers/sets/socialMedia/tictock.png" class="social_icon">
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    $('.social_icon_link').on('click', function() {
        var instagram_url = 'https://www.instagram.com/athena_clairvoyance';
        var facebook_url = 'https://web.facebook.com/profile.php?id=100088480225214';
        var youtube_url = 'https://www.youtube.com/@athena_clairvoyance';
        var tiktok_url = 'https://www.tiktok.com/@athena.clairvoyance';

        var clickURL = $(this).attr('data-id');

        var linksArray = [];

        if (clickURL == 'facebook') {
            linksArray = [facebook_url, instagram_url, youtube_url, tiktok_url];
        } else if (clickURL == 'youtube') {
            linksArray = [youtube_url, instagram_url, facebook_url, tiktok_url];
        } else if (clickURL == 'tictock') {

            linksArray = [tiktok_url, instagram_url, facebook_url, youtube_url];
        } else {
            linksArray = [instagram_url, facebook_url, youtube_url, tiktok_url];
        }
        var i;

        for (i = 0; linksArray.length > i; i++) {

            window.open(linksArray[i], '_blank');
        }
    });
</script>
{!! $script ?? '' !!}
