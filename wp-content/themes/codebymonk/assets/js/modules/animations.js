import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import Flip from 'gsap/Flip';
import ScrollToPlugin from 'gsap/ScrollToPlugin';
import TextPlugin from 'gsap/TextPlugin';
import Observer from 'gsap/Observer';

// Registrar plugins de GSAP
gsap.registerPlugin(ScrollTrigger, Flip, ScrollToPlugin, TextPlugin, Observer);

// Exponer en window
if (typeof window !== 'undefined') {
  window.gsap = gsap;
  window.ScrollTrigger = ScrollTrigger;
}

export { gsap, ScrollTrigger, Flip, ScrollToPlugin, TextPlugin, Observer };

/**
 * Dark Mode Controller
 */
function initDarkMode() {
  const toggleBtn = document.getElementById('theme-toggle');
  const html = document.documentElement;

  const savedTheme = localStorage.getItem('cbm_theme');
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const isDark = savedTheme ? savedTheme === 'dark' : prefersDark;

  if (isDark) {
    html.classList.add('dark');
  } else {
    html.classList.remove('dark');
  }
  updateToggleIcons(isDark);

  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      const willBeDark = !html.classList.contains('dark');
      
      gsap.to('body', {
        opacity: 0.95,
        duration: 0.1,
        yoyo: true,
        repeat: 1,
        onRepeat: () => {
          if (willBeDark) {
            html.classList.add('dark');
            localStorage.setItem('cbm_theme', 'dark');
          } else {
            html.classList.remove('dark');
            localStorage.setItem('cbm_theme', 'light');
          }
          updateToggleIcons(willBeDark);
          ScrollTrigger.refresh();
        }
      });
    });
  }
}

function updateToggleIcons(isDark) {
  const moonIcon = document.getElementById('theme-toggle-moon');
  const sunIcon = document.getElementById('theme-toggle-sun');
  if (moonIcon && sunIcon) {
    if (isDark) {
      moonIcon.classList.add('hidden');
      sunIcon.classList.remove('hidden');
    } else {
      moonIcon.classList.remove('hidden');
      sunIcon.classList.add('hidden');
    }
  }
}

/**
 * Mobile Portfolio Slider Controls
 */
function initMobilePortfolioSlider() {
  const slider = document.getElementById('portfolio-mobile-slider');
  const prevBtn = document.getElementById('portfolio-prev');
  const nextBtn = document.getElementById('portfolio-next');

  if (slider && prevBtn && nextBtn) {
    prevBtn.addEventListener('click', () => {
      const scrollAmount = slider.clientWidth * 0.85;
      slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
      const scrollAmount = slider.clientWidth * 0.85;
      slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
  }
}

/**
 * Case Studies Slider Controls
 */
function initCaseStudiesSlider() {
  const slider = document.getElementById('case-studies-slider');
  const prevBtn = document.getElementById('cs-prev');
  const nextBtn = document.getElementById('cs-next');

  if (slider && prevBtn && nextBtn) {
    prevBtn.addEventListener('click', () => {
      const scrollAmount = slider.clientWidth * 0.75;
      slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
      const scrollAmount = slider.clientWidth * 0.75;
      slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
  }
}

/**
 * Related Articles Slider Controls
 */
function initRelatedArticlesSlider() {
  const slider = document.getElementById('related-articles-slider');
  const prevBtn = document.getElementById('related-prev');
  const nextBtn = document.getElementById('related-next');

  if (slider && prevBtn && nextBtn) {
    prevBtn.addEventListener('click', () => {
      const scrollAmount = slider.clientWidth * 0.75;
      slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
      const scrollAmount = slider.clientWidth * 0.75;
      slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
  }
}

/**
 * GSAP Scroll & Entrance Animations
 */
function initGsapAnimations() {
  // 1. Hero Typographic Entrance
  const heroTitle = document.querySelector('.hero-title-lockup');
  if (heroTitle) {
    gsap.fromTo(
      heroTitle,
      { y: 50, opacity: 0 },
      { y: 0, opacity: 1, duration: 1.1, ease: 'power3.out', delay: 0.1 }
    );
  }

  // 2. Portfolio Items ScrollTrigger Reveal (Desktop)
  const portfolioItems = document.querySelectorAll('#portafolio article');
  if (portfolioItems.length > 0) {
    portfolioItems.forEach((card) => {
      gsap.fromTo(
        card,
        { opacity: 0, y: 40 },
        {
          opacity: 1,
          y: 0,
          duration: 0.8,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: card,
            start: 'top 85%',
            toggleActions: 'play none none none'
          }
        }
      );
    });
  }

  // 3. Services Cards Stagger Entrance
  const serviceCards = document.querySelectorAll('#servicios .grid > div');
  if (serviceCards.length > 0) {
    gsap.fromTo(
      serviceCards,
      { opacity: 0, y: 30 },
      {
        opacity: 1,
        y: 0,
        duration: 0.7,
        stagger: 0.15,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: '#servicios',
          start: 'top 75%'
        }
      }
    );
  }

  // 4. Mascot micro-interaction
  const mascotBox = document.querySelector('.monk-mascot-box');
  if (mascotBox) {
    mascotBox.addEventListener('mouseenter', () => {
      gsap.to(mascotBox, { scale: 1.08, rotate: -4, duration: 0.3, ease: 'back.out(2)' });
    });
    mascotBox.addEventListener('mouseleave', () => {
      gsap.to(mascotBox, { scale: 1, rotate: 0, duration: 0.3, ease: 'power2.out' });
    });
  }
}

/**
 * Mobile Navigation Drawer Toggle
 */
function initMobileMenu() {
  const toggleBtn = document.getElementById('mobile-menu-toggle');
  const menu = document.getElementById('mobile-menu');
  const iconOpen = document.getElementById('mobile-menu-icon-open');
  const iconClose = document.getElementById('mobile-menu-icon-close');
  const navLinks = document.querySelectorAll('.mobile-nav-link');

  if (!toggleBtn || !menu) return;

  let isOpen = false;

  function toggleMenu(forceState) {
    isOpen = typeof forceState === 'boolean' ? forceState : !isOpen;
    toggleBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    toggleBtn.setAttribute('aria-label', isOpen ? 'Cerrar menú' : 'Abrir menú');

    if (isOpen) {
      menu.classList.remove('opacity-0', 'pointer-events-none');
      menu.classList.add('opacity-100', 'pointer-events-auto');
      if (iconOpen && iconClose) {
        iconOpen.classList.add('hidden');
        iconClose.classList.remove('hidden');
      }
      document.body.style.overflow = 'hidden';
    } else {
      menu.classList.remove('opacity-100', 'pointer-events-auto');
      menu.classList.add('opacity-0', 'pointer-events-none');
      if (iconOpen && iconClose) {
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
      }
      document.body.style.overflow = '';
    }
  }

  toggleBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleMenu();
  });

  // Close menu when clicking any mobile navigation anchor link
  navLinks.forEach((link) => {
    link.addEventListener('click', () => {
      toggleMenu(false);
    });
  });

  // Close on Escape key
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && isOpen) {
      toggleMenu(false);
    }
  });
}

export default {
  init() {
    initDarkMode();
    initMobileMenu();
    initMobilePortfolioSlider();
    initCaseStudiesSlider();
    initRelatedArticlesSlider();
    initGsapAnimations();
  }
};

