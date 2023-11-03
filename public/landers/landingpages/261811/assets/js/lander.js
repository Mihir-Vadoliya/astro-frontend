export default class Lander {

    customerId = null;
    customerUUID = null;
    pollingIntervalId = null;
    pollingIntervalTime = 3000; // miliseconds

    statusPending = 'pending';
    statusNotSold = 'not_sold';
    statusSold = 'sold';
    statusTimeout = 'timeout';

    init() {
        $("#nameForm").on("submit", (e) => {
            e.preventDefault();
            this.showPendingScreen();
            this.getGoogleClientId();
            this.sendRequest();

            this.pollingIntervalId = setInterval(() => {
                this.checkState();
            }, this.pollingIntervalTime)
        });
    }

    /**
     *
     */
    sendRequest() {
        let form = $('#nameForm');
        let data = form.serialize();

        $.ajax({
            type: "POST",
            url: form.attr('action'),
            cache: false,
            data: data,
            processData: false,
            dataType: 'json'
        }).done((response) => {
            response.success ? this.customerId = response.data.customer_id : this.showThankyouScreen();
        }).fail((error) => {
            console.log('error:', error);
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
                dataType: 'json',
            }).done((response) => {
                //console.log('response: ',response)
                if (response.status) {
                    // this.sendGtmData( Removed by HJT  @6-9-2023
                    //     response.status,
                    //     response.events ? response.events:null,
                    // );
                    switch (response.status) {
                        case this.statusSold:
                            this.thankyouScreenDynamicValue(response)
                        case this.statusNotSold:
                            this.thankyouScreenDynamicValue(response)
                            this.handleResponse(response)
                            this.stopPolling();
                            break;
                        case this.statusTimeout:
                            this.thankyouScreenDynamicValue(response)
                            this.stopPolling();
                            break;
                    }
                }
            }).fail((error) => {
                console.log("error", error);
            }).always(() => {
                //
            });
        }
    }

    /**
     *
     */
    showPendingScreen(){
        gotoNextStep('.gtm-screen-email', '.gtm-screen-pending');
        $('body').css('overflow', 'visible');
        setTimeout(function () {
             $("#overlay").fadeIn(300);
         }, 1000);
    }

    /**
     *
     */
    showThankyouScreen(){
        // $('.gtm-screen-pending').hide();
        // gotoNextStep('.gtm-screen-email', '.gtm-screen-thankyou');
        this.thankyouScreenWasSeen()
        gotoNextStep('.gtm-screen-pending', '.gtm-screen-thankyou');
        $('body').css('overflow', 'visible');
        $("#overlay").fadeOut(300);
    }

    /**
     *
     */
    thankyouScreenWasSeen(){
        if (this.customerId) {
            $.ajax({
                method: "GET",
                url: `/updateThankyou/${this.customerId}`,
                dataType: 'json',
            }).done((response) => {
                //
            }).fail((error) => {
                console.log("error", error);
            }).always(() => {
                //
            });
        }
    }

    /**
     *
     */
    handleResponse(response) {
        switch (response.data.type) {
            case 'page':
                //$('#end-content').html(data.html);
                this.showThankyouScreen();
                break;
            case 'redirect':
                //console.log('redirecting to: ', response.data.url);
                window.location.href = response.data.url;
                break;
        }
    }

    /**
     * Push custom events to GTM
     */
    sendGtmData(status, events) {
        if (status === this.statusPending){
            return
        }

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'sell_status',
            'gtm_status': status,
        });

        for (let key in events) {
            let value = events[key];
            let dataObject = {
                'event': `sell_event_${value['event']}`,
                'bid': value['bid'],
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
        let googleClientId = '';
        let $element = $('input[name="googleClientId"]');
        let cookieMatch = document.cookie.match(/_ga=(.+?);/);
        if (cookieMatch) {
            let googleClientId = cookieMatch[1].split('.').slice(-2).join(".");

            if ($element.length && $element.val() === '' && googleClientId !== '') {
                $element.val(googleClientId);
            }
        }
    }


    thankyouScreenDynamicValue(response){
        if(response.buyer != null){
            var brandImg = '/landers/sets/brandface/'+response.buyer.config.picture+'.png';

            var language = $("input[name='language']").val().toLowerCase();
            var productName;
            switch (language) {
                case 'en':
                    productName = response.buyer.config.product.en;
                    break;
                case 'fr':
                    productName = response.buyer.config.product.fr;
                    break;
                case 'de':
                    productName = response.buyer.config.product.de;
                    break;
                case 'pt':
                    productName = response.buyer.config.product.pt;
                    break;
                case 'es':
                    productName = response.buyer.config.product.es;
                    break;
                case 'it':
                    productName = response.buyer.config.product.it;
                    break;
                    
            }
            console.log(productName);
            $('.brandImg').attr('src',brandImg);
            $('.configProductName').html(productName);
            $('.brandName').html(response.buyer.config.name);
        }   
    }

}

window.lander = new Lander();
window.lander.init();
