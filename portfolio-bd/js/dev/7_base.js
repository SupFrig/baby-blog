var Tm = {};
Tm.imgSizesArray = [];

jQuery(document).ready(function(){
	Tm.setBodyScrollbar();
	Tm.isotope();
	Tm.popin();
});

jQuery(window).resize(function(){
	Tm.setBodyScrollbar();
	Tm.sizeGridItems(jQuery('.projects ul'));
	
});

Tm.setBodyScrollbar = function(){
	//force overflow scroll if needed to avoid the scrollbar compute bug
	if ( document.querySelector('body').offsetHeight > window.innerHeight ) {
	  document.documentElement.style.overflowY = 'scroll';
	}
}

Tm.isotope = function(){
	var grid = jQuery('.projects ul');
	
	grid.isotope({
		itemSelector: '.item',
		layoutMode: 'packery',
		isInitLayout: false,
        packery: {
          columnWidth: '.grid-sizer'
        }
	});
	
	

	grid.on('layoutComplete',function(){
	  jQuery('.projects').css('opacity',1);
	});
	
	Tm.sizeGridItems(grid);
	Tm.initSizes();
	
	//filters function
	jQuery('.filters').on('click','a',function(){
		var $this = jQuery(this);
		var generalFilter = '';
		
		Tm.setBodyScrollbar();
		
		$this.toggleClass('active');
		jQuery('.filters a.active').each(function(){
			generalFilter += jQuery(this).attr('data-filter')+',';
		});
		generalFilter = generalFilter.slice(0, -1);
		
		grid.isotope({filter: generalFilter});
		return false;
	});
}

Tm.initSizes = function(){
	jQuery('.projects ul li').each(function(){
		if(jQuery(this).find('img').length){
			var newImg = new Image();
			var height = 0;
			var width = 0;
			
			newImg.onload = function() {
			  height = newImg.height;
			  width = newImg.width;
			  Tm.imgSizesArray.push([width, height]);
			}
			
			newImg.src = jQuery(this).find('img').attr('src');
		}
	});
}

Tm.sizeGridItems = function(grid){
	grid.imagesLoaded( function() {
		//size grid items
		grid.find('li').each(function(){
			var $this = jQuery(this);
			var img = $this.find('img');
			
			if(img.length){
				var ratio = img.width() / img.height();
				
				if(ratio < 1){
					var newRatio = 29.7 / 21;
					var height = img.width() * (newRatio);
					$this.css('height',height);
				}else{
					var newRatio = 21 / 29.7;
					var height = img.width() * (newRatio);
					$this.css('height',height);
				}
			}
		});
		grid.isotope('layout');
	});	
}

Tm.getThumbnail = function(original, scale){
  var canvas = document.createElement("canvas");

  canvas.width = original.width * scale;
  canvas.height = original.height * scale;

  canvas.getContext("2d").drawImage(original, 0, 0, canvas.width, canvas.height)

  return canvas;
}

Tm.getPictureObject = function(url){
    jQuery.ajax({
		url: url, 
		success: function(data) {
			return jQuery(data).find('img');
		} 
    });
}

Tm.popin = function(){
	jQuery('.popin').each(function(){
		var $this = jQuery(this);
		if($this.hasClass('content')){
			//todo page popins
		}else{console.log($this.attr('href'));
			var img = $this.find('img');
			$this.featherlight(img,
			{
				afterOpen: function(){
					
					/* jQuery('body').css({
						'position':'fixed',
						'height':jQuery(document).height(),
						'overflow-y':'scroll'
					}); */
					
					var headerHeight = jQuery('header').height();
					var layerHeight = parseInt(jQuery(window).height()) - parseInt(headerHeight);
					jQuery('.featherlight-content').css('height',layerHeight);
					//open img in original res in a new tab
					jQuery(this.$instance).find('img').on('click',function(){
						var win=window.open($this.attr('href'), '_blank');
						win.focus();
					});
					
					//hotfix for closing also on content wrapper
					jQuery('.featherlight-content').on('click',function(){
						jQuery('.featherlight').trigger('click');
					});
				},
				beforeClose: function(){
					/* jQuery('body').css({
						'position':'static',
						'height':'auto',
						'overflow-y':'auto'
					}); */
				}
			});
		}
	});
}