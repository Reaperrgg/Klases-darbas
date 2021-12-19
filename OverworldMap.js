class OverworldMap {
    constructor(config) {
        this.gameObjects = config.gameObjects;

        this.lowerImage = new Image();
        this.lowerImage.Src = config.lowerSrc;

        this.upperImage = new Image();
        this.upperImage.Src = config.upperSrc;
    }
    drawLowerImage(ctx) {
        ctx.drawImage(this.lowerImage, 0, 0)
    }
    drawUpperImage(ctx) {
        ctx.drawImage(this.upperImage, 0, 0)
}
}
window.OverworldMaps = {
    DemoRoom: {
        lowerSrc: "/images/DemoLower.png",
        upperSrc: "/images/DemoUpper.png",
        gameObjects: {
            hero: new GameObject({
                x: 5,
                y: 6,
            }),
            npc1: new GameObject({
                x: 7,
                y: 9,
                src: "/images/npc1.png"
            })
        }
    },
    Kitchen: {
        lowerSrc: "/images/KitchenLower.png",
        upperSrc: "/images/KitchenUpper.png",
        gameObjects: {
            hero: new GameObject({
                x: 5,
                y: 6,
            }),
            npcA: new GameObject({
                x: 7,
                y: 9,
                src: "/images/npc2.png"
            }),
            npcB: new GameObject({
                x: 10,
                y: 4,
                    src: "/images/npc3.png"
                })
            }
        },
}


