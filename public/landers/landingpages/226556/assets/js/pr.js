//Zoom text function
$(document).ready(function () {
    let min = 15;
    let max = 20;
    let reset = $('body').css('fontSize');
    let elm = $('.success_info p');
    let size = str_replace(reset, 'px', '');
    let size_reset = size;

    $('.fontSizePlus').click(function() {
        if (size<=max) {
            size++;
            elm.css({'fontSize' : size});
        }
        return false;
    });

    $('.fontSizeMinus').click(function() {
        if (size>=min) {
            size--;
            elm.css({'fontSize' : size});
        }
        return false;
    });

    $('.fontReset').click(function () {
        size = size_reset;
        elm.css({'fontSize' : reset});
    });

});

//Slick Slider
$('.slider_slick').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 2000,
    dots: true,
});

function str_replace(haystack, needle, replacement) {
    let  temp = haystack.split(needle);
    return temp.join(replacement);
}

// Date

let thisMonth = new Date().toLocaleDateString('en-US', {
   /* day : 'numeric',*/
    month : 'long',
    year : 'numeric'
}).split(' ').join(' ');
$('.monthYear').text(thisMonth);

let  nextMonth = new Date().toLocaleDateString('en-US',{
    month: 'long',
    year: 'numeric'
})

