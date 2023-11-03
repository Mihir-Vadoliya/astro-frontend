function validatorMethods(){
	const { reactive } = Vue

	const data = reactive({
		genderValid : false,
		signvalid : false,
		showGender : false,
		showSign : true
	});

	function onSignClick(signValue){
		if (!$('.all_steps').hasClass("selected")) {
			data.signvalid = true;
			data.showSign = false;
			data.showGender = true;

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

			var signpath = '/landers/sets/set30/'+signValue+'.png';
			$('.select-sign').attr('src',signpath);
			$('.sign-text').html(signValue);
		}
	}

	function onGenderClick(){
		var test = $("input[name='gender']:checked").val();
		if(test){
			gotoNextStep('.step_2', '.step_3');
			$('.step_2_error').addClass('d-none');
		}else{
			data.gendervalid = true;
			$('.step_2_error').removeClass('d-none');
		}
	}

	function onDateClick(){
		if ($('.day').val() == '' || $('.month').val() == '' || $('.year').val() == '') {
			$('.step_3_error').removeClass('d-none');
		}else{
			gotoNextStep('.step_3', '.step_4');
			$('.step_3_error').addClass('d-none');
		}
	}

	function onCityClick(){
		var test = $("input[name='city']").val();
		if(test){
			gotoNextStep('.step_4', '.step_5');
			$('.step_4_error').addClass('d-none');
		}else{
			$('.step_4_error').removeClass('d-none');
		}
	}

	function onTimeKnown(getValue = ''){
		if(!getValue){
			var getValue = $("input[name='birth_time_know']:checked").val();
		}

		if(getValue == 'no'){
			$('.step_5_error').addClass('d-none');
			gotoNextStep('.step_5', '.step_7');
		}
		else if(getValue == 'yes'){
			$('.step_6_error').addClass('d-none');
			gotoNextStep('.step_5', '.step_6');
		}else{
			$('.step_5_error').removeClass('d-none');
		}
	}

	function onTimeSelect(){
		if($('.hour').val() == '' || $('.min').val() == ''){
			$('.step_6_error').removeClass('d-none');
		}else{
			$('.step_6_error').addClass('d-none');
			gotoNextStep('.step_6', '.step_7');
		}
	}

	function onConcernClick(){
		var test = $("input[name='concerns']:checked").val();
		if(test){
			gotoNextStep('.step_7', '.step_8');
			$('.step_7_error').addClass('d-none');
		}else{
			$('.step_7_error').removeClass('d-none');
		}
	}

	function onFullnameClick(){
		var first_name = $("input[name='first_name']").val();
		var last_name = $("input[name='last_name']").val();

		if(first_name == '' || last_name == ''){
			$('.step_8_error').removeClass('d-none');
		}else{
			gotoNextStep('.step_8', '.step_9');
			$('.step_8_error').addClass('d-none');
		}
	}

	function onEmailClick() {
		var email = $("input[name='email']").val();
		var mail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(email);
		if(email==''){
			$('.step_9_error').removeClass('d-none');
		}else if(mail != true){
			$('.step_9_error').removeClass('d-none');
		}else{
			$('.step_9_error').addClass('d-none');
			gotoNextStep('.step_9', '.step_10');
		}
	}

	function pageMounted() {
		$('#app').removeClass('d-none');
	}

	function openModal(modalName) {
		console.log(modalName);
		$(modalName).modal('show');
	}

	return {
		pageMounted,
		openModal,
        onSignClick,
        onGenderClick,
        onDateClick,
        onCityClick,
        onTimeKnown,
        onTimeSelect,
        onConcernClick,
        onFullnameClick,
        onEmailClick,
        data
    };
}
