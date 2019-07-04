$(document).ready(function() {
	
	$(document).on('click', '.register-flip-button', function(event) {
		if($('.register-form').hasClass('back')){
			$('.register-form').removeClass('back');
			$('.register-form').find('input').first().focus();
			$('.login-form').addClass('back');	
			setTimeout(function(){
				$('.error-message').remove();
			}, 800);
			
		}
	});

	$(document).on('click', '.login-flip-button', function(event) {
		if($('.login-form').hasClass('back')){
			$('.login-form').removeClass('back');
			$('.login-form').find('input').first().focus();
			$('.register-form').addClass('back');
			setTimeout(function(){
				$('.error-message').remove();
			}, 800);			
		}
	});

});