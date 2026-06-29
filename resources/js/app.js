import.meta.glob([
    '../images/**',
    '../fonts/**'
]);

import { gsap } from "gsap";

import { Draggable } from "gsap/Draggable";
import { InertiaPlugin } from "gsap/InertiaPlugin";

gsap.registerPlugin(Draggable, InertiaPlugin);

const sliderCont = document.querySelector('.x-slider-cont');
const slider = document.querySelector('.x-slider');

const getMinX = () => Math.min(0, sliderCont.offsetWidth - slider.offsetWidth);

let dragInstance = Draggable.create(slider, {
    type: "x",
    bounds: {
        minX: getMinX(),
        maxX: 0
    },
    edgeResistance: 0.65,
    inertia: true,
    overshootTolerance: 1,

    // Recalculate limits mid-flight if bounds shift
    onThrowUpdate: function () {
        const minX = getMinX();
        this.vars.bounds.minX = minX;
    }
})[0];

window.addEventListener('resize', () => {
    if (dragInstance) {
        dragInstance.applyBounds({
            minX: getMinX(),
            maxX: 0
        });
    }
});