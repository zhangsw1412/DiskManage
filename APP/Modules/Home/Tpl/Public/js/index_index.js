$(function(){
	resize_window();
	$(window).resize(function(){
		resize_window();
	})
});

function resize_window(){
	// $("#left").height($(window).height()-102);
	$("#iframepage").height($(window).height()-120);//正常是减掉191
}