//Add the mask to the number input part of contact form
jQuery(function($){
   $("#number").mask("(999) 999-9999");
});

$(document).ready(function(){
	//Save div height for h1 to refer to
	var divheight = $('.mainpics').height();
	var indexheight = $('#mainpicdiv').height();
	//If height = 400, make top static
	if (divheight == 400){
		$('#restmaintext').css('top','180px');
		$('#restmaintext').css('display','block');
	}
	//Otherwise, make top a percentage
	else{
		$('#restmaintext').css('top','22%');
		$('#restmaintext').css('display','block');
	}
	if(indexheight <= 300){
		$('#maintext').css('-webkit-transform','none');
		$('#maintext').css('transform','none');
		$('#maintext').css('top','84px');
	}
	else{
		$('#maintext').css('top','45%');
		$('#maintext').css('-webkit-transform','translateY(-45%)');
		$('#maintext').css('transform','translateY(-45%)');
	}


});

$(window).resize(function(){
	//On resize, do the same as on document ready
	var divheight = $('.mainpics').height();
	var indexheight = $('#mainpicdiv').height();
	if (divheight == 400){
		$('#restmaintext').css('top','180px');
	}
	else{
		$('#restmaintext').css('top','22%');
	}
	if(indexheight <= 300){
		$('#maintext').css('-webkit-transform','none');
		$('#maintext').css('transform','none');
		$('#maintext').css('top','84px');
	}
	else{
		$('#maintext').css('top','45%');
		$('#maintext').css('-webkit-transform','translateY(-45%)');
		$('#maintext').css('transform','translateY(-45%)');
	}


});






