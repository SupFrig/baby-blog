//global configuration
var config = {
	blinkDelay: 250,
	fallDelay: 2000,
	fadeInDelay: 250
}

jQuery(document).ready(function(){
	init();
});

var init = function(){
	babyFall();
	var lock = false;
	jQuery('#body,#teeth,#bib,#hand').fadeIn(config.fadeInDelay,function(){
		if(!lock){
			blinkCallback(jQuery('#bib'));
			lock = true;
		}
	});
}

var babyFall = function(){
	var isFallingDown = false;
	var baby = jQuery('#anim-viewport');
	var hand = jQuery('#hand');
	var i = window.setInterval(function(){
		if(isFallingDown){
			isFallingDown = false;
			baby.stop().animate({
				marginTop: '10%'
			},config.fallDelay,'linear');
			console.log(hand);
			hand.css({
				'-webkit-transform': 'rotate(7deg)',
				'transform': 'rotate(7deg)'
			});
		}else{
			isFallingDown = true;
			baby.stop().animate({
				marginTop: '20%'
			},config.fallDelay,'linear');
			hand.css({
				'-webkit-transform': 'rotate(0deg)',
				'transform': 'rotate(0deg)'
			});
		}
	},config.fallDelay);
}

var blinkCallback = function($block){console.log('blinkCallback');
	$block.find('> * > *').removeClass('active');
	$block.find('> * > *:first-child').addClass('active');
	
	var i = window.setInterval(function(){
	console.log('blink');
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