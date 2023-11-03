$(document).ready(function() {
    $(".privacy_modal").click(function() {
        $('#privacy_policy').modal('show');
    });
    $(".terms_modal").click(function() {
        $('#terms').modal('show');
    });
    $(".gdpr_modal").click(function() {
        $('#gdpr').modal('show');
    });
});

function gotoNextSteps(current_step, next_step) {
    $(current_step+'_title').addClass('d-none');
    $(next_step+'_title').removeClass('d-none');

    $(current_step).addClass('d-none');
    $(next_step).removeClass('d-none');
}
function back_step(prev_step, current_step) {
    $(current_step+'_title').addClass('d-none');
    $(prev_step+'_title').removeClass('d-none');

    $(current_step).addClass('d-none');
    $(prev_step).removeClass('d-none');
}

$(document).ready(function () {

    $("input[name='astofysica']").on("click", function () {
        gotoNextSteps('.step_1', '.step_2');
    });

    /*********************** Step Gender ***********************/
    $("input[name='gender']").on("click", function () {
        gotoNextSteps('.step_3', '.step_4');
    });

    $(".step_2_next").on("click", function () {
        var step_3 = $('.day').val() + '-' + $('.month').val() + '-' + $('.year').val();
        if ($('.day').val() == '' || $('.month').val() == '' || $('.year').val() == '') {
            $(".step_2_error").removeClass('d-none');
        } else {
            gotoNextSteps('.step_2', '.step_3');
        }
    });

    $(".step_4_next").on("click", function () {
        var fname = $("input[name='first_name']").val();
        var lname = $("input[name='last_name']").val();
        if (fname == '' || lname == '') {
            $(".step_4_error").removeClass('d-none');
        } else {
            gotoNextSteps('.step_4', '.step_5');
        }
    });

    $(".step_5_next").on("click", function () {
        var step_5 = $("input[name='city']").val();
        if (step_5 == '') {
            $(".step_5_error").removeClass('d-none');
        } else {
            gotoNextSteps('.step_5', '.step_6');
        }
    });

     $(".step_6_next").on("click", function () {
        var email = $("input[name='email']").val();
        var mail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(email);
        if (email == '') {
            $(".step_6_error").removeClass('d-none');
        }
        else if (mail != true) {
            $(".step_6_error").removeClass('d-none');
        }
        else {
            gotoNextSteps('.step_6', '.gtm-screen-pending');
        }
    });

     $(".step_3_next").on("click",function(){        
        if ($('input[name="gender"]:checked').length == 0) {
            $(".step_3_error").removeClass('d-none');
        }
        else{
            gotoNextSteps('.step_3', '.step_4');
        }   
     });

});
