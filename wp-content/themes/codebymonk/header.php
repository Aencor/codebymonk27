<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Syne:wght@700;800;900&display=swap" rel="stylesheet">
  
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
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
    <!-- Brand Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2.5 group">
      <div class="w-8 h-8 rounded-lg bg-[#111111] dark:bg-white text-white dark:text-[#111111] flex items-center justify-center font-mono font-bold text-xs group-hover:bg-[#eb3a24] dark:group-hover:bg-[#eb3a24] dark:group-hover:text-white transition-colors">
        (••)
      </div>
      <span class="font-display font-black text-lg sm:text-xl tracking-tight text-[#111111] dark:text-white uppercase group-hover:text-[#eb3a24] transition-colors">
        CODEBYMONK
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

    <!-- Header Actions (Dark Mode Toggle & CTA) -->
    <div class="flex items-center gap-3">
      <!-- Dark Mode Toggle Button -->
      <button id="theme-toggle" type="button" aria-label="Cambiar tema" class="w-10 h-10 rounded-full flex items-center justify-center bg-[#eaeae4] dark:bg-[#1a1a1f] text-[#111111] dark:text-[#f3f4f6] hover:bg-[#deded6] dark:hover:bg-[#282830] transition-colors border border-[#dcdcd4] dark:border-[#333333]">
        <i id="theme-toggle-moon" class="fa-solid fa-moon text-sm"></i>
        <i id="theme-toggle-sun" class="fa-solid fa-sun text-sm hidden text-amber-400"></i>
      </button>

      <!-- CTA Button -->
      <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#111111] dark:bg-white hover:bg-[#eb3a24] dark:hover:bg-[#eb3a24] text-white dark:text-[#111111] dark:hover:text-white text-xs font-bold tracking-wide uppercase shadow-sm transition-all duration-200">
        <span>Hablemos</span>
        <i class="fa-solid fa-arrow-right text-[10px]"></i>
      </a>
    </div>
  </div>
</header>
<main class="min-h-screen">