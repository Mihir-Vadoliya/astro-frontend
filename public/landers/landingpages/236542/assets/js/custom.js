$(document).ready(function () {

    function gaSend(event_category, event_action, event_label, value) {

        window.gtag('event', 'page_view', {
            page_title: event_category,
            page_location: event_category.split(' ').join('_'),
            page_path: event_category.split(' ').join('_'),
        });
    };

    function showActualData(n, data) {
        let clarification_block = '.clarification__block_' + n;
        let h4 = '.h4_fixed_' + n;
        let fixed_data = '.fixed_data_' + n;

        $(clarification_block).slideUp(600);
        $(fixed_data).html(data);
        $(h4).slideDown(600);
    }

    $(".step_1 .button-box").on("click", function () {
        let $element = $('input[name="googleClientId"]');
        let cookieMatch = document.cookie.match(/_ga=(.+?);/);
        if (cookieMatch) {
            let googleClientId = cookieMatch[1].split('.').slice(-2).join(".");
            $element.val(googleClientId);
        }
        let sign = $(this).data('sign');
        $("input[name='sign']").attr('value', sign);
        gaSend('select zodiac', 'button click', sign, 1);
        gotoNextStep('.step_1', '.step_2');
    });

    $(".btn_chose").on("click", function () {
        gaSend('select gender', 'button click', 'gender', 1);
        gotoNextStep('.step_2', '.step_3');
    });

    $(".step_3 .continue").on("click", function () {
        if (completedTime()) {
            gaSend('select birthday', 'button click', 'birthday', 1);
            gotoNextStep('.step_3', '.step_city');
        }
    });

    $(".go_time").on("click", function () {
        gaSend('select city', 'button click', 'city', 1);
        gotoNextStep('.step_city', '.step_time');

    });

    $(".know-birth-time-no").click(function () {
        gaSend('select birthtime', 'button click', 'no', 1);
        gotoNextStep('.step_time', '.step_4');
    });

    $(".know-birth-time-yes").click(function () {
        gaSend('select birthtime', 'button click', 'yes', 1);
        gotoNextStep('.step_time', '.step_time-enter');
    });

    $(".go_four").on("click", function () {
        gaSend('enter birthtime', 'button click', 'enter time', 1);
        gotoNextStep('.step_time-enter', '.step_4');
    });

    $(".step_4 .concerns_label").on("click", function () {
        gaSend('select concern', 'button click', 'concern', 1);
        gotoNextStep('.step_4', '.step_5');
    });

    $("#checkName").on("click", function () {
        gaSend('enter name', 'button click', 'name', 1);
        if (!checkParamsName()) {
            gotoNextStep('.step_5', '.step_6');
        }
    });

});

$(document).ready(function(){
    $('.close').on('click',function(){
        $('#social_model').css('display','');
    });

    $('.social_icon_link').on('click',function(){
        var instagram_url = 'https://www.instagram.com/athena_clairvoyance';
        var facebook_url = 'https://web.facebook.com/profile.php?id=100088480225214';
        var youtube_url = 'https://www.youtube.com/@athena_clairvoyance';
        var tiktok_url = 'https://www.tiktok.com/@athena.clairvoyance';

        var clickURL = $(this).attr('data-id');

        var linksArray = [];

        if(clickURL == 'facebook'){
          linksArray =[facebook_url,instagram_url,youtube_url,tiktok_url];
        }else if(clickURL == 'youtube'){
          linksArray =[youtube_url,instagram_url,facebook_url,tiktok_url];
        }else if(clickURL == 'tictock'){

          linksArray =[tiktok_url,instagram_url,facebook_url,youtube_url];
        }
        else{
          linksArray =[instagram_url,facebook_url,youtube_url,tiktok_url];
        }

        var i;

        for( i=0; linksArray.length > i; i++){

        window.open(linksArray[i], '_blank');
        }
    });
})
