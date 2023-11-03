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
			var signpath = '/landers/sets/set37/'+sign+'.png';
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
				var signpath = '/landers/sets/set37/'+sign+'.png';
				$('.select-sign').attr('src',signpath);
				$('.sign-text').html(sign);
			}	
		}
		
	});

	// step 3 show
	$(".choose_gender_btn, .step_2_next").on('click',function () {
		var test = $("input[name='gender']:checked").val();
		if(test){
			gotoNextStep('.step_2', '.step_3');
			$('.step_2_error').addClass('d-none');
		}else{
			$('.step_2_error').removeClass('d-none');
		}
	});

	// step 4 show
	$(".step_3_next").on('click',function () {
		if ($('.day').val() == '' || $('.month').val() == '' || $('.year').val() == '') {
			$('.step_3_error').removeClass('d-none');
		}else{
			gotoNextStep('.step_3', '.step_4');
			$('.step_3_error').addClass('d-none');
		}
	});

	// step 5 show
	$(".step_4_next").on('click',function () {
		var test = $("input[name='city']").val();
		if(test){
			gotoNextStep('.step_4', '.step_5');
			$('.step_4_error').addClass('d-none');
		}else{
			$('.step_4_error').removeClass('d-none');
		}
	});

	// step 6 show
	$(".choose_yesno_btn_yes").on('click',function () {
		gotoNextStep('.step_5', '.step_6');
	});

	// step 7 show
	$(".choose_yesno_btn_no").on('click',function () {
		gotoNextStep('.step_5', '.step_7');
	});

	// step 6 or 7 show
	$(".step_5_next").on('click',function () {
		var choose_yesno_btn_value = $("input[name='birth_time_know']:checked").val();
		if(choose_yesno_btn_value == 'no'){
			$('.step_5_error').addClass('d-none');
			gotoNextStep('.step_5', '.step_7');
		}
		else if(choose_yesno_btn_value == 'yes'){
			$('.step_6_error').addClass('d-none');
			gotoNextStep('.step_5', '.step_6');
		}else{
			$('.step_5_error').removeClass('d-none');
		}
	});

	// step 7 show after step 6
	$(".step_6_next").on('click',function () {
		if($('.hour').val() == '' || $('.min').val() == ''){
			$('.step_6_error').removeClass('d-none');
		}else{
			$('.step_6_error').addClass('d-none');
			gotoNextStep('.step_6', '.step_7');
		}
	});

	// step 8 show
	$(".choose_concerns_btn").on('click',function () {
		var test = $("input[name='concerns']:checked").val();
		if(test){
			gotoNextStep('.step_7', '.step_8');
			$('.step_7_error').addClass('d-none');
		}else{
			$('.step_7_error').removeClass('d-none');
		}
	});

	// step 7 next step 8 show 
	$(".step_7_next").on('click',function () {
		gotoNextStep('.step_7', '.step_8');
	});

	// step 9 show
	$(".step_8_next").on('click',function () {
		var first_name = $("input[name='first_name']").val();
		var last_name = $("input[name='last_name']").val();

		if(first_name == '' || last_name == ''){
			$('.step_8_error').removeClass('d-none');
		}else{
			gotoNextStep('.step_8', '.step_9');
			$('.step_8_error').addClass('d-none');
		}
	});

	// step 10 show
	$(".step_9_next").on('click',function () {
		var email = $("input[name='email']").val();
		var mail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(email);
		if(email==''){
			$('.step_9_error').removeClass('d-none');
		}else if(mail != true){
			$('.step_9_error').removeClass('d-none');
		}else{
			gotoNextStep('.step_9', '.step_11');
			$('.step_9_error').addClass('d-none');
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
