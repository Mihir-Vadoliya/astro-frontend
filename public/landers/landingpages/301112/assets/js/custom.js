$(document).ready(function () {


    $('.select_your_sign').on('click',function(){
        $('#select_your_sign_model').modal('show');
    });

    $('.select_part_sign').on('click',function(){
        $('#select_Partner_sign_model').modal('show');
    });

    // open step 11 compatibility
    $(".your_sign").on("click", function () {
        var sign = $(this).attr('data-gtm-value');
        var signImage = '/landers/sets/set41/'+sign+'.png';

        $("#your_choose_sign").attr("src",signImage);
        $("#compatible_your_sign").attr("src",signImage);
        $('#select_your_sign_model').modal('hide');
        $('input[name=sign]').val(sign);
        $('.signA').html(sign);
    });

    $(".partner_sign").on("click", function () {
        var sign = $(this).attr('data-gtm-value');
        var signImage = '/landers/sets/set41/'+sign+'.png';

        $("#partner_choose_sign").attr("src",signImage);
        $("#compatible_partner_sign").attr("src",signImage);
        $('#select_Partner_sign_model').modal('hide');
        $('input[name=partner_sign]').val(sign);
        $('.signB').html(sign);
    });

    $(".step_1_next").on("click", function () {
         var partner_sign_checked = $('input[name=sign]').val();
         var your_sign_checked = $('input[name=partner_sign]').val();

         if(partner_sign_checked != '' && your_sign_checked != ''){
             $("#step_1").addClass('d-none');
             $("#step_11").removeClass('d-none');
         }
    });

    $(".step_11_next").on("click", function () {
        $("#step_11").addClass('d-none');
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
            $("#step_3_error").html('Please indicate the full date');

        } else {
            $("#step_3_error").addClass('d-none');
            $("#step_3").addClass('d-none');
            $("#step_4").removeClass('d-none');
        }
    });
    $(".step_4_next").on("click", function () {
        var step_4 = $("input[name='city']").val();
        if (step_4 == '') {
            $("#step_4_error").html('Please fill this field');
        } else {
            $("#step_4_error").addClass('d-none');
            $("#step_4").addClass('d-none');
            $("#step_5").removeClass('d-none');
        }
    });

    $("input[name='bitth_time_know']").on("click", function () {
        if ($("input[name='bitth_time_know'][value=no]").is(":checked")) {
            $("#step_5").addClass('d-none');
            $("#step_8").removeClass('d-none');
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
        $("#step_8").removeClass('d-none');
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
            $("#step_8_error").html('Please fill this field');
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
            $("#step_9_error").html('Please fill this field');
        }
        else if (mail != true) {
            $("#step_9_error").html('Please Enter Valid email address');
        }
        else {
            // $("#step_9").addClass('d-none');
        }
        $('.configName').html(getFullName());
        var step_1 = $("input[name='astofysica']").val();
        var step_2 = $("input[name='gender']").val();
        var step_3 = $('.day').val() + '-' + $('.month').val() + '-' + $('.year').val();
        var step_4 = $("input[name='city']").val();
        var step_5 = $("input[name='yesno']").val();
        var step_6 = $(".hour").val() + ':' + $(".min").val();
        var step_7 = $("input[name='concerns']").val();
        var step_8 = $("input[name='first_name']").val() + ' ' + $("input[name='last_name']").val();
        var step_9 = $("input[name='email']").val();
    });


    // back btn script
    $(".step_8_prev").on("click", function () {
        $("#step_7").removeClass('d-none');
        $("#step_8").addClass('d-none');
    });
    $(".step_7_prev").on("click", function () {
        if ($("input[name='yesno'][value=2]").is(":checked")) {
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
        if ($("input[name='yesno'][value=2]").is(":checked")) {
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

})
