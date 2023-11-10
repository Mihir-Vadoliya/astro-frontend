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
        border-radius: 50% !important;
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

    #defaultThankYouPage .d-none, #dynamicThankYouPage .d-none{
        display: none;
    }
    #defaultThankYouPage li:before{
        display: none;
    }
    #defaultThankYouPage li{
        padding-left: 0px;
    }

</style>

<div class="container d-none" id="dynamicThankYouPage">
    <div class="row justify-content-center mx-0 w-100">
        <div class="col-12 col-md-6 col-xxl-7">
            <div class="d-flex justify-content-start align-items-center">
                <img src="/landers/sets/brandface/Christin.png" class="img-fluid brandImg">
                <h3 class="times fw-normal text-dark text-center mb-4 pb-0">
                    Your trust touches me deeply <span class="configName">[Name]</span>,
                </h3>
            </div>
            <p class="font-16 fw-normal text-dark text-start">
                I will immediately get work for you! In the next few hours you will receive my free gift as
                promised,
                <span class="configProductName">[ProductName]</span> in your inbox.
                <br><br>
                First I will send you an email just to confirm I have to right email address <span
                    class="configName">[Name]</span>. Please confirm your email address according to the
                instructions in
                this email. After that I will prepare the <span
                    class="configProductName">[ProductName]</span> for you!
                It might take up to 24 hours to prepare the <span
                    class="configProductName">[ProductName]</span> <span
                    class="configName">[Name]</span>.
                <br><br>
                To make sure you receive my free gift please follow the steps below!
            </p>
            <ul class="text-start text-dark list-inline list-unstyled mb-3 mt-3">
                <li>Open your inbox</li>
                <li>Confirm your email address</li>
                <li>Receive your free gift: <span class="configProductName">[ProductName]</span></li>
                <li>Follow me on social media for more gifts</li>
            </ul>
            <p class="font-16 fw-normal text-dark text-start">
                Please keep an eye on your inbox. I’m sure you will love the <span
                    class="configProductName">[ProductName]</span>.
                <br><br>
                Love,
                <br><br>
                <span class="brandName">Astrology</span>
            </p>
        </div>
    </div>
</div>

<div class="container d-none" id="defaultThankYouPage">
    <div class="row justify-content-center mx-0 w-100">
        <div class="col-12 col-md-6 col-xxl-7">
            <div class="justify-content-start align-items-center">
                <h3 class="times fw-normal text-dark text-center mb-4 pb-0">
                    I immediately go to work for you. My answer will reach you in the next few hours.
                </h3>
            </div>
            <p class="font-16 fw-normal text-dark text-start">
                Go to your inbox now and discover the gifts I promised you: - Your positive energy balance sheet - Your 7 Days of Absolution Protection Talisman.
            </p>
            <ul class="text-start text-dark list-inline list-unstyled mb-3 mt-3">
                <li>1. Access your inbox</li>
                <li>2. Check your inbox or spam</li>
                <li>3. Open my email and access your gifts from welcome.</li>
            </ul>
            <p class="font-16 fw-normal text-dark text-start">
                P.S. So that your trust in me is deserved, I want you to know that I respect the regulations in terms of confidentiality and access to your personal data. It's all there, in my policy of privacy.
            </p>
        </div>
    </div>
</div>
{!! $script ?? '' !!}
