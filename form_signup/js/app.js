$(document).ready(function(){
	var uri = location.search;
	var uri_dec = decodeURIComponent(uri);
	var uri_cut = uri_dec.slice(1);
	var uri_arr = uri_cut.split("&");

})