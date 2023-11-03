function gotoNextStep(current_step, next_step) {
    $(current_step).addClass('d-none');
    $(next_step).removeClass('d-none');
    // $(next_step).css('visibility', 'visible').hide().fadeIn('slow');
    $('body,html').animate({scrollTop: 0}, 700); //scroll up
}
function back(show, hide) {
    if(show == 1){
        $('#step_1_banner').removeClass('d-none');
    }
    var show = "#step_" + show;
    var hide = "#step_" + hide;
    $(hide).addClass('d-none');
    $(show).removeClass('d-none');
}

function completedTime() {
    let day = $("select[name='day']").val();
    let month = $("select[name='month']").val();
    let year = $("select[name='year']").val();
    if (day !== "" && month !== "" && year !== "") {
        return true;
    } else {
        return false;   
    }
    return false;
}

/*********************** Step 1 ***********************/
$('#step_1 .radio_cus_button').on('click', function(){
    let sign = $(this).data('sign');
    $("input[name='sign']").attr('value', sign);
    $('#step_1_banner').addClass('d-none');
    gotoNextStep('#step_1', '#step_2');
});        
/*********************** Step 2 ***********************/
$('#step_2 label.choose_gender_btn, .step_2_next').on('click', function(){
    console.log('come');
    gotoNextStep('#step_2', '#step_3');
});
/*********************** Step 3 ***********************/
$('#step_3 button, .step_3_next').on('click', function(){
    if (completedTime()) {
        gotoNextStep('#step_3', '#step_4');
        $('#step_3_error').addClass('d-none');
    }
    else{
        $('#step_3_error').removeClass('d-none');
    }    
});
/*********************** Step 3 ***********************/
$('#step_4 button, .step_4_next').on('click', function(){
    var test = $("input[name='city']").val();
    console.log(test);
    if(test != ''){
        gotoNextStep('#step_4', '#step_5'); 
        $('#step_4_error').addClass('d-none');               
    }else{
        console.log('error');
        $('#step_4_error').removeClass('d-none');
    }
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
$("#step_6 button, .step_6_next").click(function () {
    gotoNextStep('#step_6', '#step_7');
});

/*********************** Step 7 ***********************/
$("#step_7 .choose_concerns_btn, .step_7_next").click(function () {
    gotoNextStep('#step_7', '#step_8');
});
/*********************** Step 8 ***********************/        
$("#step_8 button, .step_8_next").click(function () {            
    let fname = $("input[name='first_name']").val();
    let lname = $("input[name='last_name']").val();            
    if (fname != "" && lname != "") {
        $('#step_8_error').removeClass('d-none');
        gotoNextStep('#step_8', '#step_9');
    } else {
        $('#step_8_error').removeClass('d-none');
    }
});

/*********************** Step 7 prev ***********************/  
$(".step_7_prev").click(function(){
    var choose_yesno_btn_value = $("input[name='birth_time_know']:checked").val();
    if(choose_yesno_btn_value == 'yes'){
        back(6, 7);
    }else{
        back(5, 7);
    }
});

/*********************** Step 5 next ***********************/  
$(".step_5_next").click(function(){
    var choose_yesno_btn_value = $("input[name='birth_time_know']:checked").val();
    if(choose_yesno_btn_value == 'yes'){
        gotoNextStep('#step_5', '#step_6');
    }else{
        gotoNextStep('#step_5', '#step_7');
    }
});

$(document).ready(function() {
    $(".tos_modal_open").click(function() {
        $('#contact_us1').modal('show');
    });
    $(".cnt_pp_open").click(function() {
        $('#help_pp').modal('show');
    });
    $(".help_pp_open").click(function() {
        $('#terms_pp').modal('show');
    });
    $(".terms_pp_open").click(function() {
        $('#gdpr_popup').modal('show');
    });
    $(".cookie_policy_btn").click(function() {
        $('#cookie_policy').modal('show');
    });
});
