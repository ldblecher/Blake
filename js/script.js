//Add the mask to the number input part of contact form
jQuery(function($){
   $("#number").mask("(999) 999-9999");
});

$(document).ready(function(){
	//Save div height for h1 to refer to
	var divheight = $('.mainpics').height();
	var indexheight = $('#mainpicdiv').height();
	//If height = 400, make top static
	// if (divheight == 400){
	// 	$('#restmaintext').css('top','180px');
	// 	$('#restmaintext').css('display','block');
	// }
	// //Otherwise, make top a percentage
	// else{
	// 	$('#restmaintext').css('top','22%');
	// 	$('#restmaintext').css('display','block');
	// }
	if(divheight == 400){
		$('#restmaintext').css('-webkit-transform','none');
		$('#restmaintext').css('transform','none');
		$('#restmaintext').css('top','163px');
	}
	else{
		$('#restmaintext').css('top','22%');
		$('#restmaintext').css('-webkit-transform','translateY(-22%)');
		$('#restmaintext').css('transform','translateY(-22%)');
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
	// if (divheight == 400){
	// 	$('#restmaintext').css('top','180px');
	// }
	// else{
	// 	$('#restmaintext').css('top','22%');
	// }
	if(divheight == 400){
		$('#restmaintext').css('-webkit-transform','none');
		$('#restmaintext').css('transform','none');
		$('#restmaintext').css('top','163px');
	}
	else{
		$('#restmaintext').css('top','22%');
		$('#restmaintext').css('-webkit-transform','translateY(-22%)');
		$('#restmaintext').css('transform','translateY(-22%)');
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

$(function(){
    var scroller = $('#scroller div.innerScrollArea');
    var scrollerContent = scroller.children('ul');
    scrollerContent.children().clone().appendTo(scrollerContent);
    var curX = 0;
    scrollerContent.children().each(function(){
        var $this = $(this);
        $this.css('left', curX);
        curX += $this.outerWidth();
    });
    var fullW = curX / 2;
    var viewportW = scroller.width();

    // Scrolling speed management
    var controller = {curSpeed:0, fullSpeed:2};
    var $controller = $(controller);
    var tweenToNewSpeed = function(newSpeed, duration)
    {
        if (duration === undefined)
            duration = 600;
        $controller.stop(true).animate({curSpeed:newSpeed}, duration);
    };

    // Pause on hover
    scroller.hover(function(){
        tweenToNewSpeed(0);
    }, function(){
        tweenToNewSpeed(controller.fullSpeed);
    });

    // Scrolling management; start the automatical scrolling
    var doScroll = function()
    {
        var curX = scroller.scrollLeft();
        var newX = curX + controller.curSpeed;
        if (newX > fullW*2 - viewportW)
            newX -= fullW;
        scroller.scrollLeft(newX);
    };
    setInterval(doScroll, 20);
    tweenToNewSpeed(controller.fullSpeed);
});






