<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="512x512" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/apple-touch-icon.png">
  <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/site.webmanifest">
  <meta name="theme-color" content="#0a0a0c">

  <!-- Optimized Google Fonts Loading -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Syne:wght@700;800&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Syne:wght@700;800&display=swap" media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Syne:wght@700;800&display=swap">
  </noscript>
  
  <!-- Prevent Dark Mode FOUC -->
  <script>
    if (localStorage.getItem('cbm_theme') === 'dark' || (!('cbm_theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#f4f4f0] text-[#111111] dark:bg-[#0a0a0c] dark:text-[#f3f4f6] font-sans antialiased selection:bg-[#eb3a24] selection:text-white transition-colors duration-300'); ?>>

<!-- Header Navbar -->
<header class="sticky top-0 z-50 w-full bg-[#f4f4f0]/90 dark:bg-[#0a0a0c]/90 backdrop-blur-md border-b border-[#e2e2dc] dark:border-[#222222] transition-colors duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 flex items-center justify-between">
    <!-- Brand Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 sm:gap-2.5 group flex-shrink-0">
      <div class="w-8 h-8 rounded-lg bg-[#111111] dark:bg-white text-white dark:text-[#111111] flex items-center justify-center font-mono font-bold text-xs group-hover:bg-[#eb3a24] dark:group-hover:bg-[#eb3a24] dark:group-hover:text-white transition-colors">
        (••)
      </div>
      <span class="font-display font-black text-base sm:text-xl tracking-tight text-[#111111] dark:text-white uppercase group-hover:text-[#eb3a24] transition-colors">
        <span class="inline sm:hidden">CBM</span>
        <span class="hidden sm:inline">CODEBYMONK</span>
      </span>
    </a>

    <!-- Navigation Links -->
    <nav class="hidden md:flex items-center gap-6 lg:gap-7 text-xs sm:text-sm font-bold tracking-tight text-[#555555] dark:text-[#a0a0a0]">
      <a href="<?php echo esc_url(home_url('/#servicios')); ?>" class="hover:text-[#111111] dark:hover:text-white transition-colors">Servicios</a>
      <a href="<?php echo esc_url(home_url('/portafolio/')); ?>" class="hover:text-[#111111] dark:hover:text-white transition-colors">Portafolio</a>
      <a href="<?php echo esc_url(home_url('/casos-de-estudio/')); ?>" class="hover:text-[#111111] dark:hover:text-white transition-colors">Casos de Estudio</a>
      <a href="<?php echo esc_url(home_url('/#sobre-mi')); ?>" class="hover:text-[#111111] dark:hover:text-white transition-colors">Sobre mí</a>
      <a href="<?php echo esc_url(home_url('/cv/')); ?>" class="text-[#eb3a24] hover:text-[#111111] dark:hover:text-white font-mono transition-colors">Mi CV</a>
      <a href="<?php echo esc_url(home_url('/articulos/')); ?>" class="hover:text-[#111111] dark:hover:text-white transition-colors">Taller</a>
      <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="hover:text-[#111111] dark:hover:text-white transition-colors">Contacto</a>
    </nav>

    <!-- Header Actions (Dark Mode Toggle, CTA & Mobile Hamburger) -->
    <div class="flex items-center gap-2 sm:gap-3">
      <!-- Dark Mode Toggle Button -->
      <button id="theme-toggle" type="button" aria-label="Cambiar tema" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center bg-[#eaeae4] dark:bg-[#1a1a1f] text-[#111111] dark:text-[#f3f4f6] hover:bg-[#deded6] dark:hover:bg-[#282830] transition-colors border border-[#dcdcd4] dark:border-[#333333]">
        <i id="theme-toggle-moon" class="fa-solid fa-moon text-xs sm:text-sm"></i>
        <i id="theme-toggle-sun" class="fa-solid fa-sun text-xs sm:text-sm hidden text-amber-400"></i>
      </button>

      <!-- CTA Button (Compact on XS, full on larger) -->
      <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#111111] dark:bg-white hover:bg-[#eb3a24] dark:hover:bg-[#eb3a24] text-white dark:text-[#111111] dark:hover:text-white text-xs font-bold tracking-wide uppercase shadow-sm transition-all duration-200">
        <span>Hablemos</span>
        <i class="fa-solid fa-arrow-right text-[10px]"></i>
      </a>

      <!-- Mobile Menu Toggle Button -->
      <button id="mobile-menu-toggle" type="button" aria-label="Abrir menú" aria-expanded="false" class="md:hidden w-9 h-9 rounded-full flex items-center justify-center bg-[#eaeae4] dark:bg-[#1a1a1f] text-[#111111] dark:text-[#f3f4f6] hover:bg-[#deded6] dark:hover:bg-[#282830] transition-colors border border-[#dcdcd4] dark:border-[#333333] focus:outline-none">
        <i id="mobile-menu-icon-open" class="fa-solid fa-bars text-sm"></i>
        <i id="mobile-menu-icon-close" class="fa-solid fa-xmark text-base hidden text-[#eb3a24]"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Navigation Drawer Overlay -->
  <div id="mobile-menu" class="fixed inset-x-0 top-16 bottom-0 z-40 bg-[#f4f4f0]/98 dark:bg-[#0a0a0c]/98 backdrop-blur-xl md:hidden opacity-0 pointer-events-none transition-all duration-300 flex flex-col justify-between py-6 px-6 overflow-y-auto border-t border-[#e2e2dc] dark:border-[#222222]">
    <div class="space-y-4">
      <span class="text-[10px] font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] block border-b border-[#e2e2dc] dark:border-[#222222] pb-2">
        // MENÚ DE NAVEGACIÓN
      </span>
      
      <nav class="flex flex-col space-y-1">
        <a href="<?php echo esc_url(home_url('/#servicios')); ?>" class="mobile-nav-link group flex items-center justify-between py-3 border-b border-[#e8e8e2] dark:border-[#1a1a22] text-lg font-display font-black uppercase text-[#111111] dark:text-white hover:text-[#eb3a24] dark:hover:text-[#eb3a24] transition-colors">
          <span>Servicios</span>
          <span class="text-xs font-mono text-[#737373] dark:text-[#666666] group-hover:text-[#eb3a24]">01</span>
        </a>
        <a href="<?php echo esc_url(home_url('/portafolio/')); ?>" class="mobile-nav-link group flex items-center justify-between py-3 border-b border-[#e8e8e2] dark:border-[#1a1a22] text-lg font-display font-black uppercase text-[#111111] dark:text-white hover:text-[#eb3a24] dark:hover:text-[#eb3a24] transition-colors">
          <span>Portafolio</span>
          <span class="text-xs font-mono text-[#737373] dark:text-[#666666] group-hover:text-[#eb3a24]">02</span>
        </a>
        <a href="<?php echo esc_url(home_url('/casos-de-estudio/')); ?>" class="mobile-nav-link group flex items-center justify-between py-3 border-b border-[#e8e8e2] dark:border-[#1a1a22] text-lg font-display font-black uppercase text-[#111111] dark:text-white hover:text-[#eb3a24] dark:hover:text-[#eb3a24] transition-colors">
          <span>Casos de Estudio</span>
          <span class="text-xs font-mono text-[#737373] dark:text-[#666666] group-hover:text-[#eb3a24]">03</span>
        </a>
        <a href="<?php echo esc_url(home_url('/#sobre-mi')); ?>" class="mobile-nav-link group flex items-center justify-between py-3 border-b border-[#e8e8e2] dark:border-[#1a1a22] text-lg font-display font-black uppercase text-[#111111] dark:text-white hover:text-[#eb3a24] dark:hover:text-[#eb3a24] transition-colors">
          <span>Sobre mí</span>
          <span class="text-xs font-mono text-[#737373] dark:text-[#666666] group-hover:text-[#eb3a24]">04</span>
        </a>
        <a href="<?php echo esc_url(home_url('/cv/')); ?>" class="mobile-nav-link group flex items-center justify-between py-3 border-b border-[#e8e8e2] dark:border-[#1a1a22] text-lg font-display font-black uppercase text-[#eb3a24] hover:text-[#111111] dark:hover:text-white transition-colors">
          <span>Mi CV</span>
          <span class="text-xs font-mono text-[#eb3a24]">05</span>
        </a>
        <a href="<?php echo esc_url(home_url('/articulos/')); ?>" class="mobile-nav-link group flex items-center justify-between py-3 border-b border-[#e8e8e2] dark:border-[#1a1a22] text-lg font-display font-black uppercase text-[#111111] dark:text-white hover:text-[#eb3a24] dark:hover:text-[#eb3a24] transition-colors">
          <span>Taller / Blog</span>
          <span class="text-xs font-mono text-[#737373] dark:text-[#666666] group-hover:text-[#eb3a24]">06</span>
        </a>
        <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="mobile-nav-link group flex items-center justify-between py-3 text-lg font-display font-black uppercase text-[#111111] dark:text-white hover:text-[#eb3a24] dark:hover:text-[#eb3a24] transition-colors">
          <span>Contacto</span>
          <span class="text-xs font-mono text-[#737373] dark:text-[#666666] group-hover:text-[#eb3a24]">07</span>
        </a>
      </nav>
    </div>

    <!-- Bottom Direct Contact Actions -->
    <div class="pt-6 border-t border-[#e2e2dc] dark:border-[#222222] space-y-4">
      <div class="grid grid-cols-2 gap-3">
        <a href="https://wa.me/5215619956812?text=Hola%20Kike,%20me%20gustar%C3%ADa%20cotizar%20un%20proyecto%20web" target="_blank" rel="noopener" class="py-3 rounded-xl bg-[#25d366] text-[#072412] font-display font-bold text-xs uppercase tracking-wider text-center flex items-center justify-center gap-2 shadow-sm">
          <i class="fa-brands fa-whatsapp text-sm"></i>
          <span>WhatsApp</span>
        </a>
        <a href="mailto:enrique@codebymonk.com" class="py-3 rounded-xl bg-[#111111] dark:bg-white text-white dark:text-[#111111] font-display font-bold text-xs uppercase tracking-wider text-center flex items-center justify-center gap-2 shadow-sm">
          <i class="fa-solid fa-envelope text-xs"></i>
          <span>Email</span>
        </a>
      </div>
      <div class="flex items-center justify-between text-[10px] font-mono text-[#737373] dark:text-[#888888]">
        <span>CODEBYMONK &copy; <?php echo date('Y'); ?></span>
        <span>CDMX / REMOTO</span>
      </div>
    </div>
  </div>
</header>
<main class="min-h-screen">