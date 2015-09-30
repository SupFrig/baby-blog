//global configuration
var config = {
	vignettesAnimationsDelay: 1
}

jQuery(document).ready(function(){
	init();
	uiBinds();
	keyboardBinds();
});

var init = function(){
	jQuery('#comic-viewport .vignette').css('opacity',0);
	
	//set first image of first panel as active
	jQuery('#comic-viewport .panel.active .vignette:first-child').addClass('active').animate({
		opacity: 1
	},config.vignettesAnimationsDelay);
	
	//resize 
}

var uiBinds = function(){
	jQuery('#comic-prev').on('click',function(){
		btnPrev();
		return false;
	});
	
	jQuery('#comic-next').on('click',function(){
		btnNext();
		return false;
	});
}

var btnNext = function(){
	var activePanel = jQuery('#comic-viewport .panel.active');
	var activeCase = activePanel.find('.vignette.active');
	var switchPanel = activeCase.next('.vignette').length < 1;
	
	if(switchPanel){
		if(activePanel.next('.panel').length > 0){
			activePanel.hide().removeClass('active');
			activePanel.next('.panel').show().addClass('active').find('.vignette:first-child').addClass('active').animate({
				opacity: 1
			},config.vignettesAnimationsDelay);
		}else{
			alert('fin de la BD');
		}
	}else{
		activeCase.next('.vignette').animate({
			opacity: 1
		},config.vignettesAnimationsDelay,function(){
			activeCase.removeClass('active');
			jQuery(this).addClass('active');
		});
	}
}

var btnPrev = function(){
	var activePanel = jQuery('#comic-viewport .panel.active');
	var activeCase = activePanel.find('.vignette.active');
	var switchPanel = activeCase.prev('.vignette').length < 1;
	
	if(switchPanel){
		if(activePanel.prev('.panel').length > 0){
			activePanel.hide().removeClass('active');
			activePanel.prev('.panel').show().addClass('active').find('.vignette:last-child').addClass('active').animate({
				opacity: 0
			},config.vignettesAnimationsDelay);
		}else{
			alert('début de la BD');
		}
	}else{
		activeCase.animate({
			opacity: 0
		},config.vignettesAnimationsDelay,function(){
			activeCase.removeClass('active');
			jQuery(this).prev('.vignette').addClass('active');
		});
	}
}
