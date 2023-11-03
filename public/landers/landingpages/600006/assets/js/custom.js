function gotoNextStep(current_step, next_step) {
    $(current_step).hide();
    $(next_step).fadeIn('slow');
    // $(next_step).css('visibility', 'visible').hide().fadeIn('slow');
    $('body,html').animate({scrollTop: 0}, 700); //scroll up
    if (next_step == '.gtm-screen-thankyou') {
        setTimeout(function (){
            $('#social_model').modal('show');
        },15000);
    }
}

function back(show, hide) {
    var show = "#step_" + show;
    var hide = "#step_" + hide;
    $(hide).hide();
    $(show).css('visibility', 'visible').hide().fadeIn('slow');
}

function completedTime() {
    let day = $("select[name='day']").val();
    let month = $("select[name='month']").val();
    let year = $("select[name='year']").val();
    let error = $(".error");
    if (day !== "" && month !== "" && year !== "") {
        error.hide();
        return true;
    } else {
        error.show();
        error.slideDown();
    }
    return false;
}

/*********************** Step 1 ***********************/
$('#step_1 label.radio_cus_button').on('click', function () {
    let sign = $(this).data('sign');
    $("input[name='sign']").attr('value', sign);
    gotoNextStep('#step_1', '#step_2');
});
/*********************** Step 2 ***********************/
$('#step_2 label.choose_gender_btn').on('click', function () {
    gotoNextStep('#step_2', '#step_3');
});
/*********************** Step 3 ***********************/
$('#step_3 button').on('click', function () {
    if (completedTime()) {
        gotoNextStep('#step_3', '#step_4');
    }
});
/*********************** Step 3 ***********************/
$('#step_4 button').on('click', function () {
    gotoNextStep('#step_4', '#step_5');
});

/*********************** step_time Y/N ***********************/
// BIRTH TIME NO
$("#step_5 .know-birth-time-no").click(function () {
    gotoNextStep('#step_5', '#step_7');
});
// BIRTH TIME YES
$("#step_5 .know-birth-time-yes").click(function () {
    gotoNextStep('#step_5', '#step_6');
});
/*********************** step_time-enter ***********************/
$("#step_6 button").click(function () {
    gotoNextStep('#step_6', '#step_7');
});

/*********************** Step 7 ***********************/
$("#step_7 .choose_concerns_btn").click(function () {
    gotoNextStep('#step_7', '#step_8');
});
/*********************** Step 8 ***********************/
$("#step_8 button").click(function () {
    let fname = $("input[name='first_name']").val();
    let lname = $("input[name='last_name']").val();
    let error = $(".error2");
    if (fname !== "" && lname !== "") {
        error.hide();
        gotoNextStep('#step_8', '#step_9');
    } else {
        error.show();
        error.slideDown();
    }
    return false;
});

// open popup js
$(document).ready(function () {

    $(".tnc_btn_openmd").click(function () {
        $('.terms_modal').modal('show');
    });
    $(".policy_btn_openmd").click(function () {
        $('.privacy_modal').modal('show');
    });
    $(".utc_btn_openmd").click(function () {
        $('.user_tc_modal').modal('show');
    });
    $(".cnt_btn_openmd").click(function () {
        $('.contact_modal').modal('show');
    });
    $(".cookie_open_btn").click(function () {
        $('#cookie_policy').modal('show');
    });


});
