    var pageCount = 1;
    var pageCount_el_arr = $('.step__count span');
    var pageCount_el = pageCount_el_arr[0];
    pageCount_el.innerText = pageCount;

    $(".button-box").on("click", function () {
        var strsign = zodiacsignvar = $(this).data('sign');
        var yourSign = $('#yourSign');
        var path_to_yourSign = "/landers/landingpages/190456/assets/images/" + strsign + '.png';
        yourSign.attr('src', path_to_yourSign);
        yourSign.attr('alt', strsign);
        yourSign.attr('title', strsign);

        $('.sign-box__yourSign').removeClass('d-none');

        document.getElementById('yourSign').src = path_to_yourSign;

        $(".step_1").addClass('d-none');
        $("#step_2").removeClass('d-none');
        pageCount++;
        pageCount_el.innerText = pageCount;
    });
    /*********************** Step 2 ***********************/
    $("input[name='gender']").on("click", function () {
        var step_2 = $(this).val();
        $("#step_2").addClass('d-none');
        $("#step_3").removeClass('d-none');
        $("#step_2_error").addClass('d-none');
        pageCount++;
        pageCount_el.innerText = pageCount;

    });
    /*********************** Step 3 ***********************/
    $(".step_3_btn").on("click", function () {
        var step_3 = $('.day').val() + '-' + $('.month').val() + '-' + $('.year').val();
        if ($('.day').val() == '' || $('.month').val() == '' || $('.year').val() == '') {
            $("#step_3_error").html('Favor indicar a data completa');

        } else {
            $("#step_3_error").addClass('d-none');
            $("#step_3").addClass('d-none');
            $("#step_4").removeClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;
        }
    });
    /*********************** Step 4 ***********************/
    $(".step_4_btn").on("click", function () {
        var step_4 = $("input[name='city']").val();
        if (step_4 == '') {
            $("#step_4_error").html('Por favor preencha este campo');
        } else {
            $("#step_4_error").addClass('d-none');
            $("#step_4").addClass('d-none');
            $("#step_5").removeClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;
        }
    });
    /*********************** Step 5 ***********************/
    $("input[name='yesno']").on("click", function () {
        if ($("input[name='yesno'][value=2]").is(":checked")) {
            $("#step_5").addClass('d-none');
            $("#step_7").removeClass('d-none');
            $("#step_5_error").addClass('d-none');
            pageCount = pageCount + 2;
            pageCount_el.innerText = pageCount;
        } else {
            $("#step_5").addClass('d-none');
            $("#step_6").removeClass('d-none');
            $("#step_5_error").addClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;
        }
    });
    /*********************** Step 6 ***********************/
    $(".step_6_btn").on("click", function () {
        var step_6 = $(".hour").val() + ':' + $(".min").val();
        $("#step_6").addClass('d-none');
        $("#step_7").removeClass('d-none');
        $("#step_6_error").addClass('d-none');
        pageCount++;
        pageCount_el.innerText = pageCount;
    });
    /*********************** Step 7 ***********************/
    $("input[name='concerns']").on("click", function () {
        var step_7 = $("input[name='concerns']").val();
        $("#step_7").addClass('d-none');
        $("#step_8").removeClass('d-none');
        $("#step_7_error").addClass('d-none');
        pageCount++;
        pageCount_el.innerText = pageCount;
    });
    /*********************** Step 8 ***********************/
    $(".step_8_btn").on("click", function () {
        var fname = $("input[name='fname']").val();
        var lname = $("input[name='lname']").val();
        if (fname == '' || lname == '') {
            $("#step_8_error").html('Por favor, rellene este campo');
        } else {
            $("#step_8").addClass('d-none');
            $("#step_9").removeClass('d-none');
            $("#step_8_error").addClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;
        }
    });
    /*********************** Step 9 ***********************/
    $(".step_9_btn").on("click", function () {
        var email = $("input[name='email']").val();
        var mail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(email);
        if (email == '') {
            $("#step_9_error").html('Por favor, rellene este campo');
        } else if (mail != true) {
            $("#step_9_error").html('Por favor, introduzca una dirección de correo electrónico válida');
        } else {
            $("#step_9").addClass('d-none');
            $(".gtm-screen-pending").removeClass('d-none');
            if (!$('.gtm-screen-thankyou').hasClass("active")) {
                setTimeout(function (){
                    $('#social_model').css('display','block');
                },15000);
            }
            $('.gtm-screen-thankyou').addClass('active');
            pageCount++;
            pageCount_el.innerText = pageCount;
        }
    });

    // back btn script
    $(".step_9_prev").on("click", function () {
        $("#step_8").removeClass('d-none');
        $("#step_9").addClass('d-none');
        pageCount--;
        pageCount_el.innerText = pageCount;
    });
    $(".step_8_prev").on("click", function () {
        $("#step_7").removeClass('d-none');
        $("#step_8").addClass('d-none');
        pageCount--;
        pageCount_el.innerText = pageCount;
    });
    $(".step_7_prev").on("click", function () {
        if ($("input[name='yesno'][value=2]").is(":checked")) {
            $("#step_5").removeClass('d-none');
            $("#step_7").addClass('d-none');
            pageCount = pageCount - 2;
            pageCount_el.innerText = pageCount;
        } else {
            $("#step_6").removeClass('d-none');
            $("#step_7").addClass('d-none');
            pageCount--;
            pageCount_el.innerText = pageCount;
        }
    });
    $(".step_6_prev").on("click", function () {
        $("#step_5").removeClass('d-none');
        $("#step_6").addClass('d-none');
        pageCount--;
        pageCount_el.innerText = pageCount;
    });
    $(".step_5_prev").on("click", function () {
        $("#step_4").removeClass('d-none');
        $("#step_5").addClass('d-none');
        pageCount--;
        pageCount_el.innerText = pageCount;
    });
    $(".step_4_prev").on("click", function () {
        $("#step_3").removeClass('d-none');
        $("#step_4").addClass('d-none');
        pageCount--;
        pageCount_el.innerText = pageCount;
    });
    $(".step_3_prev").on("click", function () {
        $("#step_2").removeClass('d-none');
        $("#step_3").addClass('d-none');
        pageCount--;
        pageCount_el.innerText = pageCount;
    });
    $(".step_2_prev").on("click", function () {
        $(".step_1").removeClass('d-none');
        $("#step_2").addClass('d-none');
        pageCount--;
        pageCount_el.innerText = pageCount;
    });

    $(".step_2_btn").on("click", function () {
        $("#step_2").addClass('d-none');
        $("#step_3").removeClass('d-none');
        pageCount++;
        pageCount_el.innerText = pageCount;
    })

    $(".step_5_btn").on("click", function () {
        if ($("input[name='yesno'][value=2]").is(":checked")) {
            $("#step_5").addClass('d-none');
            $("#step_7").removeClass('d-none');
            pageCount= pageCount+2;
            pageCount_el.innerText = pageCount;
        } else {
            $("#step_5").addClass('d-none');
            $("#step_6").removeClass('d-none');
            pageCount++;
            pageCount_el.innerText = pageCount;
        }
    });
    $(".step_7_btn").on("click", function () {
        $("#step_7").addClass('d-none');
        $("#step_8").removeClass('d-none');
        pageCount++;
        pageCount_el.innerText = pageCount;
    });


