
function nextstep(current_step, next_step) {
    console.log(current_step);
    console.log(next_step);

    $(current_step).addClass('d-none');
    $(next_step).removeClass('d-none');
}

function backstep(prev_step, current_step) {
    $(current_step + '_title').addClass('d-none');
    $(prev_step + '_title').removeClass('d-none');

    $(current_step).addClass('d-none');
    $(prev_step).removeClass('d-none');
}


// step_1 
function sign(HideData, ShowData , signame='') {
    console.log(signame);

    if(signame != ''){
       nextstep(HideData,ShowData);
    }
}


// step_2 

function getgendercheck(HideData, Showdata) {
    // nextstep(HideData, Showdata);
    var step_2 = $('.gender').val()
    console.log(step_2);
    if ($('input[name="gender"]:checked').length === 0) {
        $(".step_2_error").removeClass('d-none');
    } else {
     nextstep(HideData, Showdata);
       // nextstep('.step_3', '.step_4');
    
    }
}

// step_3 

function checkDateAndProceed(HideData, Showdata)
{

    if ($('.day').val() == '' || $('.month').val() == '' || $('.year').val() == '') {
        $(".step_3_error").removeClass('d-none');
    } else {
        nextstep(HideData, Showdata);
      //nextstep('.step_3', '.step_4');
    }
}

// step_4 

function getcountry(HideData, Showdata) {
    if ($('.city').val() == '') {  
        $(".step_4_error").removeClass('d-none');  
    } else {
   
        nextstep(HideData, Showdata);

    }
}
// step_5 

function onTimeKnown(HideData,Showdata,)
{
    console.log(getValue);
    if(getValue != ''){
        var getValue = $("input[name='birth_time_know']:checked").val();
    }

    if(getValue == 'yes'){

        nextstep(HideData, Showdata);

    }
    else if(getValue == 'no'){
        $('.step_5_error').addClass('d-none');
       // nextstep(HideData, Showdata);
    }else{
        $(".step_6_error").removeClass('d-none');  
    }

}
// step_6 

function onTimeSelect(HideData, Showdata){
    var step_6 = $('.hour').val()
    var step_6 = $('.min').val()

    console.log(step_6);
    if($('.hour').val() == '' || $('.min').val() == ''){
        $('.step_6_error').removeClass('d-none');
    }else{
        $('.step_6_error').addClass('d-none');
        nextstep(HideData, Showdata);
    }
}

function onConcernClick(HideData, Showdata,){

    var test = $("input[name='concerns']:checked").val();

    if(test){
        nextstep(HideData, Showdata);
       
       // $('.step_7_error').addClass('d-none');
    }else{
        $('.step_7_error').removeClass('d-none');
    }
}
function getnamecheck(HideData, Showdata) 
{   

     var first_name = $("input[name='first_name']").val();
     var last_name = $("input[name='last_name']").val();
    console.log(first_name);
    console.log(last_name);

    if (first_name == ''|| last_name == '' ) {
        
        $(".step_8_error").removeClass('d-none');
    } else {
       nextstep(HideData, Showdata);
        //nextstep('.step_4', '.step_5');
    }
}




function emailCheck(HideData, Showdata) {
    var email = $("input[name='email']").val();
    var mail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(email);
    console.log(email);
    if (email == '') {
        $(".step_9_error").removeClass('d-none');
    }
    else if (mail != true) {
        $(".step_9_error").removeClass('d-none');
    }
    else {
        nextstep(HideData, Showdata);
        //nextstep('.step_6', '.step_7');
    }
}


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


