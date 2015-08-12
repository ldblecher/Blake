jQuery(function($){
   $("#number").mask("(999) 999-9999");
});

$(document).ready(function(){
	var divheight = $('.mainpics').height();
	if (divheight == 400){
		$('#restmaintext').css('top','163px');
	}
});

$(window).resize(function(){
	var divheight = $('.mainpics').height();
	if (divheight == 400){
		$('#restmaintext').css('top','162px');
	}
	else{
		$('#restmaintext').css('top','20%');
	}
});