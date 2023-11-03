 $("input[name='astofysica']").on("click", function () {
    var step_1 = $(this).val();
    $("#step_1").addClass('d-none');
    $("#step_2").removeClass('d-none');
});
 $("input[name='gender']").on("click", function () {
    var step_2 = $(this).val();
    $("#step_2").addClass('d-none');
    $("#step_3").removeClass('d-none');
    $("#step_2_error").addClass('d-none');

});
 $(".step_3_next").on("click", function () {
    var step_3 = $('.day').val() + '-' + $('.month').val() + '-' + $('.year').val();
    if ($('.day').val() == '' || $('.month').val() == '' || $('.year').val() == '') {
        $("#step_3_error").html('Gelieve de volledige datum te vermelden');

    } else {
        $("#step_3_error").addClass('d-none');
        $("#step_3").addClass('d-none');
        $("#step_4").removeClass('d-none');
    }
});
 $(".step_4_next").on("click", function () {
    var step_4 = $("input[name='city']").val();
    if (step_4 == '') {
        $("#step_4_error").html('Gelieve dit veld in te vullen');
    } else {
        $("#step_4_error").addClass('d-none');
        $("#step_4").addClass('d-none');
        $("#step_5").removeClass('d-none');
    }
});

 $("input[name='birth_time_know']").on("click", function () {
    if ($("input[name='birth_time_know'][value=no]").is(":checked")) {
        $("#step_5").addClass('d-none');
        $("#step_7").removeClass('d-none');
        $("#step_5_error").addClass('d-none');
    } else {
        $("#step_5").addClass('d-none');
        $("#step_6").removeClass('d-none');
        $("#step_5_error").addClass('d-none');
    }
});

 $(".step_6_next").on("click", function () {
    var step_6 = $(".hour").val() + ':' + $(".min").val();
    $("#step_6").addClass('d-none');
    $("#step_7").removeClass('d-none');
    $("#step_6_error").addClass('d-none');
});

 $("input[name='concerns']").on("click", function () {
    var step_7 = $("input[name='concerns']").val();
    $("#step_7").addClass('d-none');
    $("#step_8").removeClass('d-none');
    $("#step_7_error").addClass('d-none');
});

 $(".step_8_next").on("click", function () {
    var fname = $("input[name='first_name']").val();
    var lname = $("input[name='last_name']").val();
    if (fname == '' || lname == '') {
        $("#step_8_error").html('Gelieve dit veld in te vullen');
    } else {
        $("#step_8").addClass('d-none');
        $("#step_9").removeClass('d-none');
        $("#step_8_error").addClass('d-none');
    }
});
 $(".step_9_next").on("click", function () {
    var email = $("input[name='email']").val();
    var mail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(email);
    if (email == '') {
        $("#step_9_error").html('Gelieve dit veld in te vullen');
    }
    else if (mail != true) {
        $("#step_9_error").html('Voer een geldig e-mail adres in');
    }
    else {
        $("#step_9").addClass('d-none');
        $(".gtm-screen-pending").removeClass('d-none');
    }
});


// Back btn script
$(".step_8_prev").on("click", function () {
    $("#step_7").removeClass('d-none');
    $("#step_8").addClass('d-none');
});
$(".step_7_prev").on("click", function () {
    if ($("input[name='birth_time_know'][value=no]").is(":checked")) {
        $("#step_5").removeClass('d-none');
        $("#step_7").addClass('d-none');
    } else {
        $("#step_6").removeClass('d-none');
        $("#step_7").addClass('d-none');
    }
});
$(".step_6_prev").on("click", function () {
    $("#step_5").removeClass('d-none');
    $("#step_6").addClass('d-none');
});
$(".step_5_prev").on("click", function () {
    $("#step_4").removeClass('d-none');
    $("#step_5").addClass('d-none');
});
$(".step_4_prev").on("click", function () {
    $("#step_3").removeClass('d-none');
    $("#step_4").addClass('d-none');
});
$(".step_3_prev").on("click", function () {
    $("#step_2").removeClass('d-none');
    $("#step_3").addClass('d-none');
});
$(".step_2_prev").on("click", function () {
    $("#step_1").removeClass('d-none');
    $("#step_2").addClass('d-none');
});

$(".step_2_next").on("click", function () {
    $("#step_2").addClass('d-none');
    $("#step_3").removeClass('d-none');
})

$(".step_5_next").on("click", function () {
    if ($("input[name='birth_time_know'][value=no]").is(":checked")) {
        $("#step_5").addClass('d-none');
        $("#step_7").removeClass('d-none');
    } else {
        $("#step_5").addClass('d-none');
        $("#step_6").removeClass('d-none');
    }
});
$(".step_7_next").on("click", function () {
    $("#step_7").addClass('d-none');
    $("#step_8").removeClass('d-none');
})

