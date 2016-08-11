
$('#my_button').click(function(){
	// $('#my_messeage').val('giá trị #');
	$('#my_messeage').attr('data-init', 'Dữ liệu ban đầu');

	var value = $('#my_messeage').attr('data-init');
	$('div').html(value);

})
