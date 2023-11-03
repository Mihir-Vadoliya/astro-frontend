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
    let fname = $("input[name='fname']").val();
    let lname = $("input[name='lname']").val();            
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

function back_step(show, hide) {
    var show = "#step_" + show;
    var hide = "#step_" + hide;
    $(hide).addClass('d-none');
    $(show).removeClass('d-none');
}

$(".cnt_pp_open").click(function() {
    $('#help_pp').modal('show');
});
$(".tos_modal_open").click(function() {
    $('#contact_us1').modal('show');
});
$(".faq_pp_open").click(function() {
    $('#faq_pp').modal('show');
});
$(".gdpr_pp_open").click(function() {
    $('#gdpr').modal('show');
});
