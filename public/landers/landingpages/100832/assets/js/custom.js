
function nextstep(current_step, next_step) {
    $(current_step).addClass('d-none');
    $(next_step).removeClass('d-none');
}

function backstep(prev_step, current_step) {
    $(current_step + '_title').addClass('d-none');
    $(prev_step + '_title').removeClass('d-none');

    $(current_step).addClass('d-none');
    $(prev_step).removeClass('d-none');
}

function sign(HideData, ShowData , signame='') {
    console.log(signame);

    if(signame != '')
        nextstep(HideData,ShowData);
}

function getgendercheck(HideData, Showdata) {
    // nextstep(HideData, Showdata);
    var step_3 = $('.gender').val()
    console.log(step_3);
    if ($('input[name="gender"]:checked').length === 0) {
        $(".step_2_error").removeClass('d-none');
    } else {
        nextstep(HideData, Showdata);
        //nextstep('.step_3', '.step_4');
    
    }
}
function getdatestep(HideData, Showdata)
{

    if ($('.day').val() == '' || $('.month').val() == '' || $('.year').val() == '') {
        $(".step_3_error").removeClass('d-none');
    } else {
        nextstep(HideData, Showdata);
     //  nextstep('.step_2', '.step_3');
    }
}
function getcountry(HideData, Showdata) 
{
    if ($('.city').val() == '') {
        $(".step_4_error").removeClass('d-none');
    } else {
         nextstep(HideData, Showdata);

    }
}

function getnamecheck(HideData, Showdata) 
{   

     var fname = $("input[name='name']").val();
    if (fname == '') {
        $(".step_4_error").removeClass('d-none');
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
        $(".step_6_error").removeClass('d-none');
    }
    else if (mail != true) {
        $(".step_6_error").removeClass('d-none');
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


