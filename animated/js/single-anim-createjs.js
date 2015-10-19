// Initialisation
window.onload = function(){
    init();
};
 
this.init = function() {
    prepareStage(); // initialiser le stage
	startTicker(40);
	this.isBabyFalling = true;
	
	//draw bitmaps
	this.background_one = easelJsUtils.createBitmap('img/background.jpg',0,450,{scale: [0.5,0.5]});
	this.background_two = easelJsUtils.createBitmap('img/background.jpg',0,0,{scale: [0.5,0.5]});
	this.babyBody = easelJsUtils.createBitmap('img/baby-body.png',200,0,{scale: [0.5,0.5]});
	this.babyTeeth = easelJsUtils.createBitmap('img/baby-teeth.png',244,111,{scale: [0.5,0.5]});
	this.babyHand = easelJsUtils.createBitmap('img/baby-hand.png',220,171,{scale: [0.5,0.5]});
	this.puke = easelJsUtils.createBitmap('img/puke.png',247,140,{scale: [0.5,0.5]});
	
	this.puke.regX = 0;
	this.puke.regY = 465;
	var bibAnimation = new createjs.SpriteSheet({
		framerate: 40,
		images: ['img/bib.png','img/bib-frame-two.png'],
		frames: {
			regX: 0,
			regY: 0,
			count: 2,
			width: 378,
			height: 220
		},
		animations: {
			up: {
				frames: 0,
				next: "down",
				speed: 0.1
			},
			down: {
				frames: 1,
				next: "up",
				speed: 0.1
			},
		}
	});
	
	this.bib = new createjs.Sprite(bibAnimation);
	this.bib.scaleX = 0.5;
	this.bib.scaleY = 0.5;
	this.bib.x = 250;
	this.bib.y = 115;
	stage.addChild(this.bib);
	this.bib.gotoAndPlay("up");
	//layer indexes
	stage.setChildIndex( this.background_one,1);
	stage.setChildIndex( this.background_two,1);
	stage.setChildIndex( this.babyBody,2);
	stage.setChildIndex( this.babyTeeth,4);
	stage.setChildIndex( this.babyHand,4);
	stage.setChildIndex( this.puke,3);
	stage.setChildIndex( this.bib,5);
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
		this.babyTeeth.y += 1;
		this.babyHand.y += 1;
		this.bib.y += 1;
		this.puke.y += 1;
		this.puke.rotation += 0.1;
	}else{
		this.babyBody.y -= 1;
		this.babyTeeth.y -= 1;
		this.babyHand.y -= 1;
		this.bib.y -= 1;
		this.puke.y -= 1;
		this.puke.rotation -= 0.1;
	}
	
	//sky animation
	this.background_one.y -= 10;
	this.background_two.y -= 10;
	
	if(this.background_one.y < 0){
		stage.removeChild(this.background_two);
		this.background_two = this.background_one;
		this.background_one = easelJsUtils.createBitmap('img/background.jpg',0,450,{scale: [0.5,0.5]});
		stage.setChildIndex( this.background_one,1);
	}
}