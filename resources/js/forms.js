$(document).ready(function() {

	isEmpty();

	$(document).on('change', '.textfield input, .textfield textarea', function(){
		isEmpty()
	});	
	
	
});

export function isEmpty(){
	var inputs = $('input');

	$.each(inputs, function(index, val) {
		if($(this).val().trim()!=''){
			$(this).siblings('label').addClass('notEmpty');
		}else{
			$(this).siblings('label').removeClass('notEmpty');
			$(this).val('');
		}
	});
	
}