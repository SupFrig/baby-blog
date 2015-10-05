//global configuration
var config = {
	blinkDelay: 250
}

jQuery(document).ready(function(){
	init();
});

var init = function(){
	//recursive fade in
	(function fadeItem(elem){
		
		elem.fadeIn(250,function(){
			jQuery(this).next().length && fadeItem($(this).next());
			
			if(elem.hasClass('blink')){
				blinkCallback(elem);
			}
		});
		
	})(jQuery("#anim-viewport > *:first-child"));
	
	//translation up/down
	jQuery('#anim-viewport').animate({
		top: 1000
	},10000);
}

var blinkCallback = function($block){
	$block.find('> * > *').removeClass('active');
	$block.find('> * > *:first-child').addClass('active');
	
	var i = window.setInterval(function(){
		var activeItem = $block.find('.active');
		var nextItem;
		if(activeItem.next().length){
			nextItem = activeItem.next();
		}else{
			nextItem = $block.find('> * > *:first-child');
		}

		activeItem.removeClass('active');
		nextItem.addClass('active');
	},config.blinkDelay);
}