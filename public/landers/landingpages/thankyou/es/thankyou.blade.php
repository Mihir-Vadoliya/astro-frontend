<style>
    .thankyou-inner li {
        position: relative;
        text-align: left;
        padding-left: 12px;
    }

    .thankyou-inner .p-5 {
        padding-top: 5px !important;
    }

    .thankyou-inner li:before {
        position: absolute;
        content: '';
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

    .thankyou-inner ul {
        margin-left: 15px;
    }

    .configProductName {
        font-family: cursive;
    }

    .m-20 {
        margin-top: 20px;
    }

    .brandImg {
        width: 100px;
      
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

    .thankyou-inner ul {
        list-style-type: none;
        padding-left: 0rem;
        margin-left: 6px;
    }

    .thankyou-inner li:before {
        background-color: white;
        top: 5px;
    }

    .thankyou-inner p {
        margin-top: 12px;
    }

    #defaultThankYouPage .d-none,
    #dynamicThankYouPage .d-none {
        display: none;
    }

    #defaultThankYouPage .font-40 {
        font-size: 40px;
    }

    .px-3 {
        padding-left: 2rem !important;
    }

    .social-div {
        margin: 10px -3px;
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
        margin-left: 20px;
    }

</style>

<div class="container thankyou-inner d-none" id="dynamicThankYouPage">
    <!-- Celeste -->
    <div class="row justify-content-center d-none" id="Celeste">
        <div class="col-12">
            <div class="m-20">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg ">
                   <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">

                    <h3 class="step_8__title text-center px-2 pt-2">
                        Estoy profundamente conmovida por tu confianza, <span class="configName">[Name]</span>,
                    </h3>
                </div>
                <p class="p-10 text-white text-start">
                    ¡Me pondré a trabajar para ti de inmediato! En las próximas horas, recibirás tu regalo: <span class="configProductName">[ProductName]</span>
                    <br><br>
                    Para asegurarte de que recibes mi regalo gratuito, sigue los pasos que se indican a continuación:
                </p>
                <ul class="text-white text-start mt-3 mb-1">
                    <li class="">Abre tu bandeja de entrada</li>
                    <li class="">Confirma tu dirección de correo electrónico con el correo de validación que acabo de enviarte</li>
                    <li class="">Recibe tu regalo : <span class="configProductName">[ProductName]</span></li>
                    <li class="">Sígueme en las redes sociales para recibir otros regalos</li>
                </ul>
                <br>
                <p class="p-10 text-white text-start">
                    No pierdas de vista tu bandeja de entrada. Estoy segura de que te encantará <span class="configProductName">[ProductName]</span> gratuita.
                    <br><br>
                    Con cariño,
                    <br>
                    <span class="brandName">[BrandName]</span>
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

    <!-- MARIE et CHRISTIAN -->
    <div class="row justify-content-center d-none" id="MC">
        <div class="col-12">
            <div class="m-20">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg ">
                   <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">

                    <h3 class="step_8__title text-center px-2 pt-2">
                        Estamos profundamente conmovidos por tu confianza <span class="configName">[Name]</span>,
                    </h3>
                </div>
                <p class="p-10 text-white text-start">
                    Nos pondremos inmediatamente a trabajar para ti. En las próximas horas, recibirás nuestro regalo: una <span class="configProductName">[ProductName]</span>
                    <br><br>
                    Para asegurarte de recibir nuestro regalo gratuito, sigue los pasos que se indican a continuación:
                </p>
                <ul class="text-white text-start mt-3 mb-1">
                    <li class="">Abre tu bandeja de entrada</li>
                    <li class="">Confirma tu dirección de correo electrónico con el correo de validación que acabamos de enviarte</li>
                    <li class="">Recibe tu regalo: <span class="configProductName">[ProductName]</span></li>
                    <li class="">Síguenos en las redes sociales para recibir otros regalos</li>
                </ul>
                <br>
                <p class="p-10 text-white text-start">
                    No pierdas de vista tu bandeja de entrada. Estamos seguros de que te encantará tu <span class="configProductName">[ProductName]</span>.
                    <br><br>
                    Con cariño,
                    <br>
                    <span class="brandName">[BrandName]</span>
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

    <!-- MAGELLAN -->
    <div class="row justify-content-center d-none" id="Magellan">
        <div class="col-12">
            <div class="m-20">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg ">
                   <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">

                    <h3 class="step_8__title text-center px-2 pt-2">
                        Tu confianza me conmueve profundamente <span class="configName">[Name]</span>,
                    </h3>
                </div>
                <p class="p-10 text-white text-start">
                    ¡Me pondré inmediatamente a trabajar para ti! En las próximas horas, recibirás mi regalo: <span class="configProductName">[ProductName]</span>
                    <br><br>
                    Para tener la seguridad de recibir mi regalo gratuito, ten a bien seguir los pasos a continuación:
                </p>
                <ul class="text-white text-start mt-3 mb-1">
                    <li class="">Abre tu bandeja de entrada</li>
                    <li class="">Confirma tu dirección de correo electrónico con el correo de validación que acabamos de enviarte</li>
                    <li class="">Recibe tu regalo: <span class="configProductName">[ProductName]</span></li>
                    <li class="">Sígueme en las redes sociales para recibir otros regalos</li>
                </ul>
                <br>
                <p class="p-10 text-white text-start">
                    No pierdas de vista tu bandeja de entrada. Estoy seguro de que te encantará <span class="configProductName">[ProductName]</span> gratuita.
                    <br><br>
                    Cariñosamente,
                    <br>
                    <span class="brandName">[BrandName]</span>
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

    <!-- MARIA & SARAH -->
    <div class="row justify-content-center d-none" id="SM">
        <div class="col-12">
            <div class="m-20">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg ">
                   <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">

                    <h3 class="step_8__title text-center px-2 pt-2">
                        Estamos profundamente conmovidas por tu confianza <span class="configName">[Name]</span>,
                    </h3>
                </div>
                <p class="p-10 text-white text-start">
                    Nos pondremos inmediatamente a trabajar para ti. En las próximas horas, recibirás nuestro regalo: una <span class="configProductName">[ProductName]</span> gratuita.
                    <br><br>
                    Para asegurarte de recibir nuestro regalo gratuito, sigue los pasos que se indican a continuación:
                </p>
                <ul class="text-white text-start mt-3 mb-1">
                    <li class="">Abre tu bandeja de entrada</li>
                    <li class="">Confirma tu dirección de correo electrónico con el correo de validación que acabamos de enviarte</li>
                    <li class="">Recibe tu regalo: <span class="configProductName">[ProductName]</span></li>
                    <li class="">Síguenos en las redes sociales para recibir otros regalos</li>
                </ul>
                <br>
                <p class="p-10 text-white text-start">
                    No pierdas de vista tu bandeja de entrada. Estamos seguras de que te encantará  <span class="configProductName">[ProductName]</span> gratuita.
                    <br><br>
                    Con cariño,
                    <br>
                    <span class="brandName">[BrandName]</span>
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

    <!-- VICTORIA -->
    <div class="row justify-content-center d-none" id="Viktoria">
        <div class="col-12">
            <div class="m-20">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="/landers/sets/brandface/blank.png" class="img-fluid brandImg ">
                   <img src="/landers/sets/brandlogo/blank.png" class="img-fluid brandLogo">

                    <h3 class="step_8__title text-center px-2 pt-2">
                        Estoy profundamente conmovida por su confianza, <span class="configName">[Name]</span>,
                    </h3>
                </div>
                <p class="p-10 text-white text-start">
                    ¡Me pondré a trabajar para usted de inmediato! En las próximas horas, recibirá su regalo: <span class="configProductName">[ProductName]</span>
                    <br><br>
                    Para asegurarse de recibir mi regalo gratuito, sigua los pasos que se indican a continuación:
                </p>
                <ul class="text-white text-start mt-3 mb-1">
                    <li class="">Abra su bandeja de entrada</li>
                    <li class="">Confirme su dirección de correo electrónico con el correo de validación que acabo de enviarle</li>
                    <li class="">Reciba su regalo: <span class="configProductName">[ProductName]</span></li>
                    <li class="">Sígame en las redes sociales para recibir otros regalos</li>
                </ul>
                <br>
                <p class="p-10 text-white text-start">
                    No pierda de vista su bandeja de entrada. Estoy segura de que le encantará <span class="configProductName">[ProductName]</span>.
                    <br><br>
                    Con cariño,
                    <br>
                    <span class="brandName">[BrandName]</span>
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
</div>

<div class="container thankyou-inner d-none" id="defaultThankYouPage">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="m-20">
                <div class="d-flex justify-content-start align-items-center">
                    <h3 class="step_8__title text-center px-2 pt-2">
                        Su confianza me conmueve  <span class="configName">[Name]</span>,
                    </h3>
                </div>
                <p class="p-10 text-white text-start">
                    ¡me pondré inmediatamente a trabajar para ti! En las próximas horas recibirás mi regalo.
                    <br><br>
                    Para asegurarte de que recibes mi regalo gratuito, sigue los pasos que se indican a continuación:
                </p>
                <ul class="text-white text-start mt-3 mb-1">
                    <li class="">Abre tu bandeja de entrada</li>
                    <li class="">Confirma tu dirección de correo electrónico en el email de validación que acabo de enviarte</li>
                    <li class="">Recibe tu regalo</li>
                    <li class="">Sígueme en las redes sociales para recibir más regalos </li>
                </ul>
                <br>
                <p class="p-10 text-white text-start">
                    No pierdas de vista tu bandeja de entrada. ¡Seguro que te encantará!
                    <br><br>
                    Me encanta,
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
