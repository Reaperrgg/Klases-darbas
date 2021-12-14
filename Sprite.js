class Sprite {
    constructor(config) {

        //setup image
        this.image = newImage();
        this.image.src = config.src;
        this.image.onload = () => {
            this.isLoaded = true;
        }


        //configure animation & ipital state
        this.animations = config.animations || {
            idleDow: [
                [0, 0]
            ]
        }
        this.currentAnimation = config.currentAnimation || "idleDown";
        this.currentAnimationFrame = 0;

        //reference the game object
        this.gameObject = config.gameObject;
    }
    draw(ctx){
      const x = this.gameObject.x * 16-8;
      const y = this.gameObject.y * 16-18;

      ctx.drawImage(this.image,
          0,0,
          32,32,
          x,y,
          32,32
    )
    }
}