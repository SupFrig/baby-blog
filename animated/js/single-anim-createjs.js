// Initialisation
window.onload = function
    init();
});
 
this.init = function() {
    prepareStage(); // initialiser le stage
};
 
// Préparer le stage et instancier EaselJsUtils
this.prepareStage = function() {
    this.canvas = 'LOL';
    //this.stage = new createjs.Stage(this.canvas);
};





/*var stage = new createjs.Stage("babyCanvas");
var bib = {
    images: ["img/bib.png","img/bib-rfame-two.png"],
    frames: [
		[]
	]
    animations: {
        stand:0,
        run:[1,5],
        jump:[6,8,"run"]
    }
};
var spriteSheet = new createjs.SpriteSheet(bib);
var animation = new createjs.Sprite(spriteSheet, "run");
stage.addChild(animation);
createjs.Ticker.addEventListener("tick", tick);

createjs.Ticker.setInterval(25);
createjs.Ticker.setFPS(40);

function tick() {
	stage.update();
	console.log("TICK!!!");
}*/