function getAjax() {
    let form = $('#nameForm');
    let data = form.serialize();
    let url = form.attr('action');
    console.log(data);
    $.ajax({
        type: "POST",
        url: url,
        cache: false,
        data: data,
        processData: false,
        dataType: 'json',
        beforeSend: function () {
        },
        success: function (response) {
            /*
            <!-- Add Pixel Event for facebook -->
            fbq('track', 'Lead', {
                content_name: 'Astrologist',
                content_category: 'Astrology',
                content_ids: ['1'],
                content_type: 'product',
                currency: 'USD'
            });*/
        },
        error: function (jqXHR, exception) {
            ajaxError(jqXHR, exception);
            /*stopLoadingAnimation();*/
        }
    });
}

function gotoNextStep(current_step, next_step) {
    $(current_step).hide();
    $(next_step).fadeIn('slow');
    // $(next_step).css('visibility', 'visible').hide().fadeIn('slow');
    $('body,html').animate({scrollTop: 0}, 700); //scroll up
}

// TextType text
let textType = (element, string, block = '') => {
    $(element).typeIt({
        strings: string,
        speed: 30,
        autoStart: false,
        callback: function () {
            if (string.length >= 0) {
                $('.ti-cursor').remove();
                showNext(block);
            }
        }
    });
};

//btnNext
let btnNext = (btn) => {
    btn.addClass('disabledLink');
};

//changeBlock
function   changeBlock (item){
    $(item).animate({
        margin: 10,
        top: -20,
        'font-size': 13
    }, 2000);
    $(item).addClass('clarification-finish');
}

// showNext block
function showNext(blockName){
    let block = '.clarification-' + blockName;
    if (blockName === '') {
        block = '.clari-btn';
    }
    setTimeout(function (){
        $(block).fadeIn('slow')
    },500);
}

// focus
function focusBlock (blockName) {
    let block = '.clarification-' + blockName;
    let mainBlock = $('.clarifications');

    if (mainBlock.height() !== $(block).height()){
        mainBlock.animate({scrollTop:mainBlock.height()}, 1000);
    }
}

function getFullName(fixedData = false) {
    let fix = fixedData ? 'fix_' : '';
    let firstName = $('input[name=' + fix + 'first_name]').val();
    let lastName = $('input[name=' + fix + 'last_name]').val();
    return firstName + ' ' + lastName;
}

function getDateOfBirthday(fixedData = false) {
    let fix = fixedData ? 'fix_' : '';
    let day = $('select[name=' + fix + 'day').val();
    let month = $('select[name=' + fix + 'month').val();
    let year = $('select[name=' + fix + 'year').val();
    return day + ' / ' + month + ' / ' + year;
}

/!* Validation Forms *!/
function completedTime() {
    let day = $("select[name='day']").val();
    let month = $("select[name='month']").val();
    let year = $("select[name='year']").val();
    let error = $(".error");

    if (day !== "" && month !== "" && year !== "") {
        return true;
    } else {
        error.slideDown();
    }
    return false;
}

function checkParamsName() {
    let first_name = $('#first_name').val().length;
    let last_name = $('#last_name').val().length;
    if (first_name !== 0 && last_name !== 0) {
        return false;
    } else {
        return true;
    }
}
/*Validation end*/

function back(show, hide) {
    var show = ".step_" + show;
    var hide = ".step_" + hide;
    $(hide).hide();
    $(show).css('visibility', 'visible').hide().fadeIn('slow');
}
/*
function is_agree() {
    let agreeCheck = $(".agree-check");
    if ($('#checkbox_1').is(':checked')) {
        agreeCheck.hide();
        return true;
    } else {
        agreeCheck.fadeIn('slow');
    }
    return false;
}
*/

//Popup
/*
function showWindow () {
    stopLoadingAnimation();
    $('.clarifications').show();
}
function hideWindow () {
    $('.clarifications').hide();
}

//Animation
function startLoadingAnimation() {
    let imgObj = $("#loadImg");
    imgObj.show();
}
function stopLoadingAnimation() {
    $("#loadImg").hide();
}
*/


//Slick Slider
$('.slider_slick').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 2000,
    dots: true,
});

function ajaxError(jqXHR, exception) {
    var msg = '';
    if (jqXHR.status === 0) {
        msg = 'Not connect.\n Verify Network.';
    } else if (jqXHR.status == 404) {
        msg = 'Requested page not found. [404]';
    } else if (jqXHR.status == 500) {
        msg = 'Internal Server Error [500].';
    } else if (exception === 'parsererror') {
        msg = 'Requested JSON parse failed.';
    } else if (exception === 'timeout') {
        msg = 'Time out error.';
    } else if (exception === 'abort') {
        msg = 'Ajax request aborted.';
    } else {
        msg = 'Uncaught Error.\n' + jqXHR.responseText;
    }
    console.log(msg);
}