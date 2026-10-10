
import Animations from '../modules/animations';
import { initCustomCursor } from '../modules/custom-cursor';

function setupLazyThreeModules() {
  // Hero 3D background canvas
  const heroCanvas = document.getElementById('hero-three-canvas');
  if (heroCanvas) {
    if ('IntersectionObserver' in window) {
      const heroObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            obs.disconnect();
            import(/* webpackChunkName: "hero-three" */ '../modules/hero-three')
              .then((m) => m.initHeroThree())
              .catch((err) => console.debug('Hero 3D lazy load notice:', err));
          }
        });
      }, { rootMargin: '200px' });
      heroObserver.observe(heroCanvas);
    } else {
      import(/* webpackChunkName: "hero-three" */ '../modules/hero-three').then((m) => m.initHeroThree());
    }
  }

  // About 3D background canvas
  const aboutCanvas = document.getElementById('about-three-canvas');
  if (aboutCanvas) {
    if ('IntersectionObserver' in window) {
      const aboutObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            obs.disconnect();
            import(/* webpackChunkName: "about-three" */ '../modules/about-three')
              .then((m) => m.initAboutThree())
              .catch((err) => console.debug('About 3D lazy load notice:', err));
          }
        });
      }, { rootMargin: '300px' });
      aboutObserver.observe(aboutCanvas);
    } else {
      import(/* webpackChunkName: "about-three" */ '../modules/about-three').then((m) => m.initAboutThree());
    }
  }
}

export default {
  init() {
    Animations.init();
    initCustomCursor();
    setupLazyThreeModules();
  },
  finalize() {},
};