// Initialisation
window.onload = function(){
    init();
};
 
this.init = function() {
    prepareStage(); // initialiser le stage
	startTicker(40);
	this.isBabyFalling = true;
	
	//draw bitmaps
	this.background_one = easelJsUtils.createBitmap('img/background.jpg',0,-450,{scale: [0.5,0.5]});
	this.background_two = easelJsUtils.createBitmap('img/background.jpg',0,0,{scale: [0.5,0.5]});
	this.babyBody = easelJsUtils.createBitmap('img/baby-body.png',200,0,{scale: [0.5,0.5]});
};
 
 this.startTicker = function(fps) {
    createjs.Ticker.setFPS(fps);
    createjs.Ticker.addEventListener("tick", function(){
		tickCallbacks();
        this.stage.update();
    });
};

// Préparer le stage et instancier EaselJsUtils
this.prepareStage = function() {
    this.canvas = document.getElementById('baby_canvas');

    this.stage = new createjs.Stage(this.canvas);
	easelJsUtils = new EaselJsUtils(this.stage);
};

this.tickCallbacks = function(){
	
	//baby animation
	if(this.babyBody.y > 100){
		this.isBabyFalling = false;
	}
	
	if(this.babyBody.y < 50){
		this.isBabyFalling = true;
	}
	
	if(this.isBabyFalling){
		this.babyBody.y += 1;
	}else{
		this.babyBody.y -= 1;
	}
	
	//sky animation
	this.background_one.y += 10;
	this.background_two.y += 10;
	
	if(this.background_one.y > 0){
		stage.removeChild(this.background_two);
		this.background_two = this.background_one;
		this.background_one = easelJsUtils.createBitmap('img/background.jpg',0,-450,{scale: [0.5,0.5]});
		stage.setChildIndex( this.babyBody, stage.getNumChildren()-1);
	}
}