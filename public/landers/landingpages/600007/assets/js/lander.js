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
                        case this.statusNotSold:
                            this.handleResponse(response)
                            this.stopPolling();
                            break;
                        case this.statusTimeout:
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
        console.log(response);
        switch (response.type) {
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


}

window.lander = new Lander();
window.lander.init();
