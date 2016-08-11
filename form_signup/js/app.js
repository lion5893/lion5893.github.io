$(document).ready(function(){
	var uri = location.search;
	var uri_dec = decodeURIComponent(uri);
	var uri_cut = uri_dec.slice(1);
	var uri_arr = uri_cut.split("&");
	//var name = uri_arr[0];
	// Lấy tên
	
	for (i=0; i<uri_arr.length; i++){
		var name=uri_arr[i];
		var name_cut = name.split("=");
		$('.rs_name').text(name_cut[1]);

	}
	
	//var name_cut = name.split("=")
	//$('.rs_name').text(name_cut[1]);

})