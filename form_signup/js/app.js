$(document).ready(function(){
	var uri = location.search;
	var uri_dec = decodeURIComponent(uri);
	var uri_cut = uri_dec.slice(1);
	var uri_arr = uri_cut.split("&");
	
	// Cắt và lấy ra các thông tin người dùng đã nhập
	var arr_rs = [];
	for (i=0; i<uri_arr.length; i++){
		var name=uri_arr[i];
		var name_cut = name.split("=");
		var str = name_cut[1];
		var str_cut = str.split('+').join(' ');
		arr_rs.push(str_cut);

	}
	// In ra kết quả
	$('.rs_name').text(arr_rs[0]);
	$('.rs_pass').text(arr_rs[1]);
	$('.rs_born').text(arr_rs[2]);
	$('.rs_gender').text(arr_rs[3]);
	$('.rs_email').text(arr_rs[4]);
	$('.rs_address').text(arr_rs[5]);
	$('.rs_phone').text(arr_rs[6]);

})
// var content = '';
// $.each(uri_arr, function(key, value){
// content+= '<p>' + value + '</p>';
// })
// $('.rs_name').html(content);