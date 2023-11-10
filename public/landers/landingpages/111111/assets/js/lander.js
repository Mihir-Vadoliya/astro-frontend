export default class Lander {
    customerId = null;
    customerUUID = null;
    pollingIntervalId = null;
    pollingIntervalTime = 3000; // miliseconds

    statusPending = "pending";
    statusNotSold = "not_sold";
    statusSold = "sold";
    statusTimeout = "timeout";

    init() {
        $("#nameForm").on("submit", (e) => {
            e.preventDefault();
            this.getFullNameFinalStep();
            this.showPendingScreen();
            this.getGoogleClientId();
            this.sendRequest();

            this.pollingIntervalId = setInterval(() => {
                this.checkState();
            }, this.pollingIntervalTime);
        });
    }

    /**
     *
     */
    sendRequest() {
        let form = $("#nameForm");
        let data = form.serialize();

        $.ajax({
            type: "POST",
            url: form.attr("action"),
            cache: false,
            data: data,
            processData: false,
            dataType: "json",
        })
            .done((response) => {
                console.log(response);
                if (response != "") {
                    response.success
                        ? (this.customerId = response.data.customer_id)
                        : this.showThankyouScreen();
                } else {
                    this.showDefaultThankyouScreen();
                }
            })
            .fail((error) => {
                console.log("error:", error);
            });
    }

    /**
     *
     */
    checkState() {
        if (this.customerId) {
            $.ajax({
                method: "GET",
                url: `/checkStatus/${this.customerId}`,
                dataType: "json",
            })
                .done((response) => {
                    if (response.status) {
                        switch (response.status) {
                            case this.statusSold:
                                this.thankyouScreenDynamicValue(response);
                                this.stopPolling();
                                break;
                            case this.statusNotSold:
                                this.handleResponse(response);
                                this.stopPolling();
                                break;
                            case this.statusTimeout:
                                this.showDefaultThankyouScreen();
                                this.stopPolling();
                                break;
                        }
                    }else{
                        this.handleResponse(response);
                        this.stopPolling();
                    }
                })
                .fail((error) => {
                    console.log("error", error);
                })
                .always(() => {
                    //
                });
        }
    }

    /**
     *
     */
    showPendingScreen() {
        gotoNextStep(".gtm-screen-email", ".gtm-screen-pending");
        $("body").css("overflow", "visible");
    }

    /**
     *
     */
    showThankyouScreen() {
        this.thankyouScreenWasSeen();
        gotoNextStep(".gtm-screen-pending", ".gtm-screen-thankyou");
        $("#dynamicThankYouPage").removeClass("d-none");
        $("body").css("overflow", "visible");
    }

    showDefaultThankyouScreen() {
        this.thankyouScreenWasSeen();
        gotoNextStep(".gtm-screen-pending", ".gtm-screen-thankyou");

        $("#defaultThankYouPage").removeClass("d-none");

        $("body").css("overflow", "visible");
    }

    /**
     *
     */
    thankyouScreenWasSeen() {
        if (this.customerId) {
            $.ajax({
                method: "GET",
                url: `/updateThankyou/${this.customerId}`,
                dataType: "json",
            })
                .done((response) => {
                    //
                })
                .fail((error) => {
                    console.log("error", error);
                })
                .always(() => {
                    //
                });
        }
    }

    /**
     *
     */
    handleResponse(response) {
        switch (response.type) {
            case "page":
                this.showDefaultThankyouScreen(response);
                break;
            case "redirect":
                window.location.href = response.url;
                break;
        }
    }

    /**
     * Push custom events to GTM
     */
    sendGtmData(status, events) {
        if (status === this.statusPending) {
            return;
        }

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            event: "sell_status",
            gtm_status: status,
        });

        for (let key in events) {
            let value = events[key];
            let dataObject = {
                event: `sell_event_${value["event"]}`,
                bid: value["bid"],
            };
            window.dataLayer.push(dataObject);
        }
    }

    /**
     *
     */
    stopPolling() {
        clearInterval(this.pollingIntervalId);
    }

    /**
     * Get Google Client ID from _ga cookie and assign it to the input
     */
    getGoogleClientId() {
        let googleClientId = "";
        let $element = $('input[name="googleClientId"]');
        let cookieMatch = document.cookie.match(/_ga=(.+?);/);
        if (cookieMatch) {
            let googleClientId = cookieMatch[1].split(".").slice(-2).join(".");

            if (
                $element.length &&
                $element.val() === "" &&
                googleClientId !== ""
            ) {
                $element.val(googleClientId);
            }
        }
    }

    thankyouScreenDynamicValue(response) {
        if (response.buyer != null) {
            var language = $("input[name='language']").val().toLowerCase();

            if (response.buyer.config.picture == "Celeste" && language == "fr") {
                var brandImg =
                    "/landers/sets/brandface/" +
                    (response.buyer.config.picture ?? "Celeste") +
                    "_fr.png";
            } else {
                var brandImg =
                    "/landers/sets/brandface/" +
                    (response.buyer.config.picture ?? "blank") +
                    ".png";
            }

            const productName = response.buyer.config.product?.[language] ?? "";
            var brandName = response.buyer.config.name ?? "Christin";

            if(language == 'es' && brandName == 'Marie & Christian'){
                brandName = "Maria & Christian";
            }
            else if(language == 'fr' && brandName == 'Marie & Christian'){
                brandName = "Marie & Christian";
            }else if(language == 'en' && brandName == 'Marie & Christian'){
                brandName = "Mary & Christian";                
            }else if(language == 'de' && brandName == 'Marie & Christian'){
                brandName = "Mary & Christian";                
            }else if(language == 'pt' && brandName == 'Marie & Christian'){
                brandName = "Mary & Christian";                
            }else{
               brandName = response.buyer.config.name ?? "Christin"; 
            }

            $(".brandName").html(brandName);
            $(".brandImg").attr("src", brandImg);
            $(".configProductName").html(productName);

            var availableLogo = ["Celeste", "Magellan", "MC", "Viktoria", "SM"];

            if(language == "fr" || language == "es"){
                if (availableLogo.includes(response.buyer.config.picture)) {
                    var ShowTempId = "#"+response.buyer.config.picture;
                    $(ShowTempId).removeClass('d-none');
                }else{
                    $("#Celeste").removeClass('d-none');
                }

            }else{
                var multi_lang = ["MC", "SM"];

                var pronounce = {
                    en: [
                        { multi_lang: " our " },
                        { multi_me: " us " },
                        { multi_i: "We " },
                        { multi_iam: " We're " },
                        { multi_ive: " we've " },
                    ]
                };

                if (multi_lang.includes(response.picture) && language =='en') {
                    $(".multi_lang").html(pronounce?.[language][0].multi_lang);
                    $(".multi_me").html(pronounce?.[language][1].multi_me);
                    $(".multi_i").html(pronounce?.[language][2].multi_i);
                    $(".multi_iam").html(pronounce?.[language][3].multi_iam);
                    $(".multi_ive").html(pronounce?.[language][4].multi_ive);
                }

            }
            

            if (availableLogo.includes(response.buyer.config.picture)) {
                var brandLogo = "/landers/sets/brandlogo/" +language +"/" +response.buyer.config.picture +".png";

                $.ajax({
                    type: "HEAD",
                    async: true,
                    url: brandLogo,
                }).done(function () {
                        $(".brandLogo").attr("src", brandLogo);
                    })
                    .fail(function () {
                        $(".brandLogo").addClass("d-none");
                    });
            } else {
                $(".brandLogo").addClass("d-none");
            }

            this.showThankyouScreen();
            $("#defaultThankYouPage").hide();
        }
    }
    getFullNameFinalStep() {
        let firstName = $("input[name=first_name]").val();
        let lastName = $("input[name=last_name]").val();
        $(".configName").html(firstName + " " + lastName);
    }
}

window.lander = new Lander();
window.lander.init();
