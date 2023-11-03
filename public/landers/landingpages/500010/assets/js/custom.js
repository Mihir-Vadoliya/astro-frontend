function gotoNextStep(current_step, next_step) {
	$(current_step).addClass('d-none');
	$(next_step).removeClass('d-none');
}

function back(show, hide) {
	$(hide).addClass('d-none');
	$(show).removeClass('d-none');
}

$('.stat').css('cursor', 'pointer');

$(document).ready(function () {	
	if ($(window).width() <= 991) {
		$('.step_1').removeClass('d-none');
		$('.step_1').removeClass('d-md-none');
		$('.step_1_sign').addClass('d-md-none');
		$('.step_1_title').removeClass('d-none');

	}
	$('.step_1').addClass('d-none');
	$('.step_1_sign').removeClass('d-none');
	$(".stat").on('click',function () {
		if ($(window).width() <= 991) {
			$('.step_1').addClass('d-none');
			$('.step_1').addClass('d-md-none');
			$('.step_2').removeClass('d-none');
			$('.step_1_sign').removeClass('d-md-block');
			$('.step_1_sign').addClass('d-none');
			$('.all_steps').addClass('d-none');
			$('.step_1_sign').addClass('d-none');

			$('.step_1_full').removeClass('circle');
			$('.step_1_full').addClass('circle_disable');
			$('.sign_show').removeClass('col-12 col-md-12 pt-3 col-lg-12 col-xl-12 col-xxl-12 position-relative main_form');
			$('.sign_show').addClass('col-12 col-md-9 pt-3 col-lg-9 col-xl-9 col-xxl-9 position-relative main_form');
			$('.sign-icon-div').removeClass('d-none');
			$('.center_content').removeClass('center_div');
			$('.center_content').addClass('center_div_1');

			var sign = $(this).attr('data-sign');
			var signpath = '/landers/sets/set47/'+sign+'.png';
			$('.select-sign').attr('src',signpath);
			$('.sign-text').html(sign);
		}else{
			if (!$('.all_steps').hasClass("selected")) {
				$('.step_1').addClass('d-none');
				$('.step_1_sign').removeClass('d-md-block');
				$('.step_1_sign').addClass('d-none');
				$('.step_2').removeClass('d-none');
				$('.all_steps').addClass('selected');
				$('.stat').addClass('d-none');
				$('.step_1_full').removeClass('circle');
				$('.step_1_full').addClass('circle_disable');
				$('.sign_show').removeClass('col-12 col-md-12 pt-3 col-lg-12 col-xl-12 col-xxl-12 position-relative main_form');
				$('.sign_show').addClass('col-12 col-md-9 pt-3 col-lg-9 col-xl-9 col-xxl-9 position-relative main_form');
				$('.sign-icon-div').removeClass('d-none');
				$('.center_content').removeClass('center_div');
				$('.center_content').addClass('center_div_1');

				var sign = $(this).attr('data-sign');
				var signpath = '/landers/sets/set47/'+sign+'.png';
				$('.select-sign').attr('src',signpath);
				$('.sign-text').html(sign);
			}	
		}
		
	});

	// step 3 show
	// $(".choose_gender_btn, .step_2_next").on('click',function () {
	// 	var test = $("input[name='gender']:checked").val();
	// 	if(test){
	// 		gotoNextStep('.step_2', '.step_3');
	// 		$('.step_2_error').addClass('d-none');
	// 	}else{
	// 		$('.step_2_error').removeClass('d-none');
	// 	}
	// });

	// step 4 show
	$(".step_2_next").on('click',function () {
		if ($('.day').val() == '' || $('.month').val() == '' || $('.year').val() == '') {
			$('.step_2_error').removeClass('d-none');
		}else{
			gotoNextStep('.step_2', '.step_3');
			$('.step_2_error').addClass('d-none');
		}
	});

	// step 5 show
	$(".step_3_next").on('click',function () {
		var test = $("input[name='city']").val();
		if(test){
			gotoNextStep('.step_3', '.step_4');
			$('.step_3_error').addClass('d-none');
		}else{
			$('.step_3_error').removeClass('d-none');
		}
	});
	// step 10 show
	$(".email_btn").on('click', function () {
		var email = $("input[name='email']").val();
        var mail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(email);
        if (email == '') {
            $(".email_error").removeClass('d-none');
        }
        else if (mail != true) {
            $(".email_error_2").removeClass('d-none');
        }
		else {
			!function (f, b, e, v, n, t, s) {
			    if (f.fbq) return;
			    n = f.fbq = function () {
			        n.callMethod ?
			            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			    };
			    if (!f._fbq) f._fbq = n;
			    n.push = n;
			    n.loaded = !0;
			    n.version = '2.0';
			    n.queue = [];
			    t = b.createElement(e);
			    t.async = !0;
			    t.src = v;
			    s = b.getElementsByTagName(e)[0];
			    s.parentNode.insertBefore(t, s)
			}(window, document, 'script',
			    'https://connect.facebook.net/en_US/fbevents.js');

			fbq('track', 'AddToCart' );
			
			var loader = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only sr-only px-3">Redirecting... </span>"'
			$('.email_btn').html(loader);
            $(".email_error_2").addClass('d-none');
            $(".email_error").addClass('d-none');

            var email = $("input[name='email']").val();
            var job_title = '{job_title}';
            var first_name = $("input[name='first_name']").val();
            var last_name = $("input[name='last_name']").val();
            var phone = '{phone}';
            var address_1 = '{address_1}';
            var address_2 = '{address_2}';
            var city_name = $("input[name='city']").val();
            var state = '{state}';
            var zip = '{zip}';
            var dob_m = $('.day').val() 
            var dob_d = $('.month').val() 
            var dob_y = $('.year').val() 
            var age = '{age}';
            let b_click_id = $("input[name='binom_click_id']").val();
			
			var redirect_url = 'https://go.whatifoffers.com/4SB3MC5/6H52ND/?sub1=subID&sub2=transID&sub5='+email+'&job='+job_title+'&first_name='+first_name+'&last_name='+last_name+'&phone='+phone+'&address_1='+address_1+'&address_2='+address_2+'&city='+city_name+'&state='+state+'&zip='+zip+'&dob_m='+dob_m+'&dob_d='+dob_d+'&dob_y='+dob_y+'&age='+age+'&conversion_id='+b_click_id;

            window.location.href = redirect_url;

            $('.email_btn').html('Redirecting...');
	
		}
	});
	
	// back steps
	$(".step_2_prev").on('click',function () {
		if ($(window).width() <= 991) {
			$('.step_1').removeClass('d-none');
			$('.step_1').removeClass('d-md-none');
			$('.step_2').addClass('d-none');
			$('.step_1').addClass('d-none');
			$('.all_steps').removeClass('d-none');
			$('.step_1_sign').removeClass('d-none');

			$('.step_1_full').addClass('circle');
			$('.step_1_full').removeClass('circle_disable');

			$('.sign-icon-div').addClass('d-none');
			$('.sign_show').addClass('col-12 col-md-12 pt-3 col-lg-12 col-xl-12 col-xxl-12 position-relative main_form');
			$('.sign_show').removeClass('col-12 col-md-9 pt-3 col-lg-9 col-xl-9 col-xxl-9 position-relative main_form');
			$('.center_content').addClass('center_div');
			$('.center_content').removeClass('center_div_1');
		}else{
			$('.all_steps').removeClass('selected');
			$('.step_1_sign').addClass('d-md-block');
			$('.step_1_sign').removeClass('d-none');
			$('.step_2').addClass('d-none');
			$('.stat').removeClass('d-none');
			$('.step_1_full').addClass('circle');
			$('.step_1_full').removeClass('circle_disable');

			$('.sign-icon-div').addClass('d-none');
			$('.sign_show').addClass('col-12 col-md-12 pt-3 col-lg-12 col-xl-12 col-xxl-12 position-relative main_form');
			$('.sign_show').removeClass('col-12 col-md-9 pt-3 col-lg-9 col-xl-9 col-xxl-9 position-relative main_form');
			$('.center_content').addClass('center_div');
			$('.center_content').removeClass('center_div_1');
		}
	});
	$(".step_3_prev").on('click',function () {
		back('.step_2', '.step_3');
	});
	$(".step_4_prev").on('click',function () {
		back('.step_3', '.step_4');
	});
	$(".step_5_prev").on('click',function () {
		back('.step_4', '.step_5');
	});
	$(".step_6_prev").on('click',function () {
		back('.step_5', '.step_6');
	});
	$(".step_7_prev").on('click',function () {
		var choose_yesno_btn_value = $("input[name='birth_time_know']:checked").val();
		if(choose_yesno_btn_value == 'yes'){
			back('.step_6', '.step_7');
		}else{
			back('.step_5', '.step_7');
		}
	});
	$(".step_8_prev").on('click',function () {
		back('.step_7', '.step_8');
	});
});