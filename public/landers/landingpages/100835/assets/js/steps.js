$(document).ready(function () {

    $(".step_1 .button-box").on("click", function () {
        let sign = $(this).data('sign');
        let $element = $('input[name="googleClientId"]');
        let cookieMatch = document.cookie.match(/_ga=(.+?);/);
        if (cookieMatch) {
            let googleClientId = cookieMatch[1].split('.').slice(-2).join(".");
            $element.val(googleClientId);
        }
        $("input[name='sign']").attr('value', sign);
        gotoNextStep('.step_1', '.step_2');
    });

    /*********************** Step 2 ***********************/
    $(".btn_chose").on("click", function () {
        gotoNextStep('.step_2', '.step_3');
    });

    /*********************** Step 3 ***********************/
    $(".step_3 .continue").on("click", function () {
        if (completedTime()) {
            gotoNextStep('.step_3', '.step_city');
        }
    });

    /*********************** Step_city ***********************/
    $(".go_time").on("click", function () {
        gotoNextStep('.step_city', '.step_time');

    });

    /*********************** step_time Y/N ***********************/
    // BIRTH TIME NO
    $(".know-birth-time-no").on("click", function () {
        gotoNextStep('.step_time', '.step_4');
    });

    // BIRTH TIME YES
    $(".know-birth-time-yes").on("click", function () {
        gotoNextStep('.step_time', '.step_time-enter');
    });

    /*********************** step_time-enter ***********************/
    $(".go_four").on("click", function () {
        gotoNextStep('.step_time-enter', '.step_4');
    });

    /*********************** Step 4 ***********************/
    $(".step_4 .concerns_label").on("click", function () {
        gotoNextStep('.step_4', '.step_5');
    });

    /*********************** Step 5 ***********************/

    $("#checkName").on("click", function () {
        if (!checkParamsName()) {
            gotoNextStep('.step_5', '.step_6');
        }
    });
});
