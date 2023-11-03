/*********************** Step 1 ***********************/
$("#step_1 label.radio_cus_button").on("click", function () {
    let sign = $(this).data("sign");
    $("input[name='sign']").attr("value", sign);
    gotoNextStep("#step_1", "#step_2");
});
/*********************** Step 2 ***********************/
$("#step_2 label.choose_gender_btn").on("click", function () {
    gotoNextStep("#step_2", "#step_3");
});
/*********************** Step 3 ***********************/
$("#step_3 button").on("click", function () {
    if (completedTime()) {
        gotoNextStep("#step_3", "#step_4");
    }
});
/*********************** Step 3 ***********************/
$("#step_4 button").on("click", function () {
    gotoNextStep("#step_4", "#step_5");
});

/*********************** step_time Y/N ***********************/
// BIRTH TIME NO
$("#step_5 .know-birth-time-no").click(function () {
    gotoNextStep("#step_5", "#step_7");
});
// BIRTH TIME YES
$("#step_5 .know-birth-time-yes").click(function () {
    gotoNextStep("#step_5", "#step_6");
});
/*********************** step_time-enter ***********************/
$("#step_6 button").click(function () {
    gotoNextStep("#step_6", "#step_7");
});

/*********************** Step 7 ***********************/
$("#step_7 .choose_concerns_btn").click(function () {
    gotoNextStep("#step_7", "#step_8");
});
/*********************** Step 8 ***********************/
$("#step_8 button").click(function () {
    let fname = $("input[name='first_name']").val();
    let lname = $("input[name='last_name']").val();
    let error = $(".error2");
    $(".configName").html(getFullName());

    if (fname !== "" && lname !== "") {
        error.hide();
        gotoNextStep("#step_8", "#step_9");
    } else {
        error.show();
        error.slideDown();
    }
    return false;
});
$(".step_9").on("click", function () {
    var email = $("input[name='email']").val();
    var mail =
        /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(
            email
        );
    if (email == "") {
        $(".step_9_error").removeClass("d-none");
    } else if (mail != true) {
        $(".step_9_error").removeClass("d-none");
    } else {
        gotoNextSteps(".step_9", ".step_10");
    }
});

function back_step(show, hide) {
    var show = "#step_" + show;
    var hide = "#step_" + hide;
    $(hide).addClass("d-none");
    $(show).removeClass("d-none");
}
$(".tos_modal_open").click(function () {
    $("#contact_us1").modal("show");
});

$(".cnt_pp_open").click(function () {
    $("#help_pp").modal("show");
});
$(".gdpr_pp_open").click(function () {
    $("#gdpr_pp").modal("show");
});
