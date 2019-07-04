$(document).ready(function() {


	setTimeout(function(){
		$('.overflow').addClass('show');
		$('.alert').addClass('show');
	}, 300);


	$(document).on('click', '.alert button', function(event) {
		event.preventDefault();
		$('.overflow').removeClass('show');
		$('.alert').removeClass('show');

		setTimeout(function(){
			$('.overflow').remove();
			$('.alert').remove();
		},300)

	});
});