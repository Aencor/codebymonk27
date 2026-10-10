import gsap from 'gsap';

/**
 * High-Performance Animated Custom Cursor with GSAP quickSetter
 */
export function initCustomCursor() {
  // Only enable on desktop with mouse pointer
  if (window.matchMedia('(hover: none) or (pointer: coarse)').matches) {
    return;
  }

  // Create cursor DOM elements if not already present
  let dot = document.querySelector('.custom-cursor-dot');
  let ring = document.querySelector('.custom-cursor-ring');

  if (!dot) {
    dot = document.createElement('div');
    dot.className = 'custom-cursor-dot';
    document.body.appendChild(dot);
  }

  if (!ring) {
    ring = document.createElement('div');
    ring.className = 'custom-cursor-ring';
    document.body.appendChild(ring);
  }

  // Set initial invisible state until first mouse move
  gsap.set([dot, ring], { opacity: 0, xPercent: -50, yPercent: -50 });

  // Use quickSetter for high-frequency performance
  const setDotX = gsap.quickSetter(dot, 'x', 'px');
  const setDotY = gsap.quickSetter(dot, 'y', 'px');
  const setRingX = gsap.quickSetter(ring, 'x', 'px');
  const setRingY = gsap.quickSetter(ring, 'y', 'px');

  const mouse = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
  const ringPos = { x: mouse.x, y: mouse.y };
  let isVisible = false;

  window.addEventListener('mousemove', (e) => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;

    if (!isVisible) {
      isVisible = true;
      gsap.to([dot, ring], { opacity: 1, duration: 0.3 });
    }

    setDotX(mouse.x);
    setDotY(mouse.y);
  }, { passive: true });

  window.addEventListener('mouseleave', () => {
    isVisible = false;
    gsap.to([dot, ring], { opacity: 0, duration: 0.3 });
  });

  window.addEventListener('mouseenter', () => {
    isVisible = true;
    gsap.to([dot, ring], { opacity: 1, duration: 0.3 });
  });

  // Smooth lerp loop for the outer trailing ring
  gsap.ticker.add(() => {
    const dt = 1.0 - Math.pow(1.0 - 0.22, gsap.ticker.deltaRatio());
    ringPos.x += (mouse.x - ringPos.x) * dt;
    ringPos.y += (mouse.y - ringPos.y) * dt;
    setRingX(ringPos.x);
    setRingY(ringPos.y);
  });

  // High-performance event delegation for hover states (No DOM querying loops)
  const interactiveSelector = 'a, button, [role="button"], input[type="submit"], input[type="button"], .group, #theme-toggle';

  document.addEventListener('mouseover', (e) => {
    const target = e.target.closest ? e.target.closest(interactiveSelector) : null;
    if (target) {
      ring.classList.add('cursor-hover');
      gsap.to(dot, { scale: 1.5, duration: 0.2 });
    }
  }, { passive: true });

  document.addEventListener('mouseout', (e) => {
    const target = e.target.closest ? e.target.closest(interactiveSelector) : null;
    if (target) {
      ring.classList.remove('cursor-hover');
      gsap.to(dot, { scale: 1, duration: 0.2 });
    }
  }, { passive: true });

  // Click pulse animation
  window.addEventListener('mousedown', () => {
    ring.classList.add('cursor-click');
    gsap.to(dot, { scale: 0.7, duration: 0.1 });
  }, { passive: true });

  window.addEventListener('mouseup', () => {
    ring.classList.remove('cursor-click');
    gsap.to(dot, { scale: 1, duration: 0.15 });
  }, { passive: true });
}

export default {
  init: initCustomCursor
};
