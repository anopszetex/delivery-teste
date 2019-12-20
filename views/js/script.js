$(function(){
	$('select').change(function(){
		if($(this).val() == 'dinheiro') {
			$('.troco').show();
		} else {
			$('.troco').hide();
		}
	})
})