var Graphics = createjs.Graphics;
var Shape = createjs.Shape;

/**
 * Constructeur
 */
EaselJsUtils = function(stage) {
	this.stage = stage;
};

/**
 * Classe EaselJsUtils
 */
EaselJsUtils.prototype = {
	createRoundRect: function(x, y, w, h, rgb, options) {
		// Créer la forme
		var graphic = new Graphics();
		var opacity = 1;
		var radius = 90;
		if (options) {
			if (options.opacity) {
				opacity = options.opacity;
			}
			if (options.radius) {
				radius = options.radius;
			}
		}
		graphic.beginFill(Graphics.getRGB(rgb[0], rgb[1], rgb[2], opacity));
		graphic.drawRoundRect(x,  y,  w,  h,  radius);
		// Ajouter la forme au stage
		var shape = new Shape(graphic);
		this.stage.addChild(shape);
		return shape;
	},
	createCircle: function(x, y, radius, rgb, options) {
		// Créer la forme
		var graphic = new Graphics();
		var opacity = 1;
		if (options) {
			if (options.opacity) {
				opacity = options.opacity;
			}
		}
		graphic.beginFill(Graphics.getRGB(rgb[0], rgb[1], rgb[2], opacity));
		graphic.drawCircle(x, y, radius);
		// Ajouter la forme au stage
		var shape = new Shape(graphic);
		this.stage.addChild(shape);
		return shape;
	},
	createBitmap: function(src, x, y, options) {
		// Définir la source et la position du média
		var bitmap = new createjs.Bitmap(src);
		bitmap.x = x;
		bitmap.y = y;
		// Appliquer les options
		if (options) {
			// Mise à l'échelle
			if (options.scale) {
				bitmap.scaleX = options.scale[0];
				bitmap.scaleY = options.scale[1];
			}
		}
		// Ajouter le Bitmap au Stage et le retourner
		this.stage.addChild(bitmap);
		return bitmap;
	}
}