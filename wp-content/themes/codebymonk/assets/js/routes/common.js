
import Animations from '../modules/animations';
import { initHeroThree } from '../modules/hero-three';
import { initAboutThree } from '../modules/about-three';
import { initCustomCursor } from '../modules/custom-cursor';

export default {
  init() {
    Animations.init();
    initHeroThree();
    initAboutThree();
    initCustomCursor();
  },
  finalize() {},
};