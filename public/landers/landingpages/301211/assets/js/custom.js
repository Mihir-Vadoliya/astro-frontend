let href = '';
$(document).ready(function() {
    $(".tos_modal_open").click(function() {
        $('#include_terms').modal('show');
    });
    $(".privacy-modal-open").click(function() {
        $('#include_privacy_policy').modal('show');
    });
    $(".button_one_btn").click(function() {
        $('#contact_us1').modal('show');
    });
    $(".cnt_pp_open").click(function() {
        $('#help_pp').modal('show');
    });
    $(".button_two_btn").click(function() {
        $('#help_pp').modal('show');
    });
    $(".help_pp_open").click(function() {
        $('#terms_pp').modal('show');
    });
    $(".button_three_btn").click(function() {
        $('#terms_pp').modal('show');
    });
    $(".terms_pp_open").click(function() {
        $('#gdpr_popup').modal('show');
    });
    $(".cookie_policy_btn").click(function() {
        $('#cookie_policy').modal('show');
    });
    $("input[name='astro']").click(function() {
        var test = $(this).val();
        $("section.common_cls_display1").hide();
        $("section.common_cls_display").hide();
        $("#step_2" + test).show();
        $("#step_2_np").show();
    });
    $(".step_2_next").click(function() {
        // var test = $(this).val();
        $("section.common_cls_display").hide();
        $("#step_3").show();
    });
    $(".step_2_prev").click(function() {
        $("section.common_cls_display").hide();
        $("section.common_cls_display1").show();
    });
    $("#step_3_next").click(function() {
        var test = $("input[name='radio_step3']:checked").val();
        $("#step_3").hide();
        $("#step_4" + test).show();
    });
    $("#step_3_prev").click(function() {
        var test = $("input[name='astro']:checked").val();
        $("#step_3").hide();
        $("#step_2" + test).show();
    });

    $(".step_4_next").click(function() {
        var test = $("input[name='radio_step3']:checked").val();
        $("#step_4" + test).hide();
        $("#step_5").show();
    });
    $(".step_4_prev").click(function() {
        var test = $("input[name='radio_step3']:checked").val();
        $("#step_4" + test).hide();
        $("#step_3").show();
    });

    $("#step_5_next").click(function() {
        // var test = $(this).val();
        $("#step_5").hide();
        $("#step_6").show();
        $("#step_6_footer").show();
        $("#footer").hide();

    });
    $("#step_5_prev").click(function() {
        var test = $("input[name='radio_step3']:checked").val();
        $("#step_5").hide();
        $("#step_4" + test).show();
    });

    // Select input then next
    $(".step_2_input_next").click(function() {
        // var test = $(this).val();
        $("section.common_cls_display").hide();
        $("#step_3").show();
    });

    $(".step_3_next_input").click(function() {
        var test = $("input[name='radio_step3']:checked").val();
        $("#step_3").hide();
        $("#step_4"+test).show();
    });
    $(".step_4_next_input").click(function() {
        var test = $("input[name='radio_step3']:checked").val();
        $("#step_4"+test).hide();
        $("#step_5").show();
    });
    $(".step_5_next_input").click(function() {
        // var test = $(this).val();
        $("#step_5").hide();
        $("#step_6").show();
        $("#step_6_footer").show();
        $("#footer").hide();

    });
// Select input then next
});
function gotoNextStep(current_step, next_step) {
    $(current_step).hide();
    $(next_step).fadeIn('slow');
    // $(next_step).css('visibility', 'visible').hide().fadeIn('slow');
    $('body,html').animate({scrollTop: 0}, 700); //scroll up

    if(next_step == '#step_11'){
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
$('#step_1 label.radio_cus_button').on('click', function(){
    let sign = $(this).data('sign');
    $("input[name='sign']").attr('value', sign);
    gotoNextStep('#step_1', '#step_2');
});
/*********************** Step 2 ***********************/
$('#step_2 label.choose_gender_btn').on('click', function(){
    gotoNextStep('#step_2', '#step_3');
});
/*********************** Step 3 ***********************/
$('#step_3 button').on('click', function(){
    if (completedTime()) {
        gotoNextStep('#step_3', '#step_4');
    }
});
/*********************** Step 3 ***********************/
$('#step_4 button').on('click', function(){
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

$(".gtm-email-continue").click(function () {
    gotoNextStep('#step_9', '#step_11');
});
