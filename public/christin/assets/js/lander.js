export default class Lander {

    customerId = null;
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
            url: "signup.php",
            cache: false,
            data: data,
            processData: false,
            dataType: 'json'
        }).done((response) => {
            if (response.success) {
                this.customerId = response.data.customer_id;
            }
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
                method: "POST",
                url: `status.php`,
                data: {
                    customerId: this.customerId,
                },
                dataType: 'json',
            }).done((response) => {
                if (response.status) {
                    switch (response.status){
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
        gotoNextStep('#step_9', '#step_11');
        $('body').css('overflow', 'visible');
    }

    /**
     *
     */
    showThankyouScreen(){
        $('#step_11').hide();
        gotoNextStep('#step_9', '#step_10');
        $('body').css('overflow', 'visible');
        if(pixel != ''){
            fbq('track', 'Lead', {
                content_name: 'Astrologist',
                content_category: 'Astrology',
                content_ids: ['1'],
                content_type: 'product',
                currency: 'USD',
                value: 1.00,
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
                window.location.href = response.data.url;
                break;
        }
    }

    /**
     *
     */
    stopPolling() {
        clearInterval(this.pollingIntervalId);
    }

}

window.lander = new Lander();
window.lander.init();
