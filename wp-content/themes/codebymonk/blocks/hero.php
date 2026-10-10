<?php
/**
 * Block: Hero - CodeByMonk Exact Mockup Match with Responsive Mobile Typography
 */
$block_attrs = cbm_block_attributes($block, 'relative pt-8 sm:pt-12 md:pt-20 pb-12 sm:pb-16 md:pb-24 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] overflow-hidden transition-colors duration-300');
?>

<section <?= $block_attrs; ?>>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Top Meta Tag -->
		<div class="flex items-center justify-between mb-6 sm:mb-8 pb-3 sm:pb-4 border-b border-[#e2e2dc]/80 dark:border-[#222222] text-[10px] sm:text-xs font-mono font-semibold uppercase tracking-widest text-[#737373] dark:text-[#888888]">
			<span>ESTUDIO DIGITAL // 2026</span>
			<span>CDMX / REMOTO GLOBAL</span>
		</div>

		<!-- Main Hero Grid -->
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-end mb-12 sm:mb-16 md:mb-24">
			
			<!-- Left: Giant Typography Lockup (Fluid Scaled) -->
			<div class="lg:col-span-8 hero-title-lockup">
				<h1 class="font-display font-black text-4xl sm:text-6xl md:text-7xl lg:text-[90px] xl:text-[102px] tracking-tight sm:tracking-tighter text-[#111111] dark:text-white leading-[0.92] sm:leading-[0.88] uppercase select-none">
					IDEAS CON<br>
					<span class="text-[#eb3a24] inline-flex items-baseline gap-1.5 sm:gap-2">
						FORMA
						<span class="text-[9px] sm:text-xs font-mono font-bold tracking-normal bg-[#163be6] text-white px-1.5 sm:px-2 py-0.5 rounded align-super">.01</span>
					</span><br>
					<span class="font-serif-italic font-normal lowercase tracking-tight text-[#111111] dark:text-[#e0e0e0] block mt-1 sm:mt-2 text-4xl sm:text-6xl md:text-7xl lg:text-[85px] xl:text-[95px]">
						y función.
					</span>
				</h1>
			</div>

			<!-- Right: Rotating Badge & Intro Subtitle -->
			<div class="lg:col-span-4 flex flex-col justify-between items-start lg:items-end space-y-6 sm:space-y-8">
				<!-- Rotating circular badge -->
				<div class="relative w-20 h-20 sm:w-28 sm:h-28 flex items-center justify-center">
					<svg class="w-full h-full animate-spin-slow text-[#111111] dark:text-white" viewBox="0 0 100 100">
						<path id="circlePath" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="transparent" />
						<text class="text-[9.5px] font-mono uppercase tracking-[2.5px] fill-current">
							<textPath href="#circlePath">
								• DISPONIBLE • 2026 • PROYECTOS •
							</textPath>
						</text>
					</svg>
					<div class="absolute inset-0 m-auto w-8 h-8 sm:w-10 sm:h-10 rounded-full border border-dashed border-[#111111] dark:border-white flex items-center justify-center text-[10px] sm:text-xs font-mono font-bold text-[#111111] dark:text-white">
						(••)
					</div>
				</div>

				<!-- Explanatory paragraph -->
				<p class="text-sm sm:text-base md:text-lg text-[#444444] dark:text-[#b0b0b0] font-normal leading-relaxed lg:text-right max-w-sm">
					Ayudo a marcas y empresas a comunicar con claridad y vender más a través de experiencias digitales memorables y funcionales.
				</p>
			</div>
		</div>

	</div>

	<!-- Full-Width Cobalt Blue Marquee Strip -->
	<div class="w-full bg-[#163be6] py-2.5 sm:py-3.5 overflow-hidden text-white font-display font-black text-xs sm:text-sm tracking-wider uppercase shadow-inner">
		<div class="animate-marquee flex items-center whitespace-nowrap">
			<span class="mx-3 sm:mx-4">DISEÑO WEB</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">WORDPRESS EN BLOQUES</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">FRONTEND MODERNO</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">TAILWIND CSS V4</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">GSAP ANIMACIONES</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">WOOCOMMERCE</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">UI/UX PRODUCT DESIGN</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">CORE WEB VITALS 100</span>
			<span class="text-cyan-300">•</span>
			<!-- Loop duplicate -->
			<span class="mx-3 sm:mx-4">DISEÑO WEB</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">WORDPRESS EN BLOQUES</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">FRONTEND MODERNO</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">TAILWIND CSS V4</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">GSAP ANIMACIONES</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">WOOCOMMERCE</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">UI/UX PRODUCT DESIGN</span>
			<span class="text-cyan-300">•</span>
			<span class="mx-3 sm:mx-4">CORE WEB VITALS 100</span>
			<span class="text-cyan-300">•</span>
		</div>
	</div>

	<!-- Philosophy Statement -->
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 sm:pt-16 md:pt-24">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-6 items-start">
			<div class="lg:col-span-3 text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] pt-1 sm:pt-2">
				// FILOSOFÍA DE TRABAJO
			</div>
			<div class="lg:col-span-9">
				<h2 class="font-display font-black text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-[#111111] dark:text-white uppercase tracking-tight leading-tight">
					NO HAGO RELLENO.<br>
					<span class="font-serif-italic font-normal tracking-normal text-[#111111] dark:text-[#e0e0e0] capitalize text-2xl sm:text-4xl md:text-5xl lg:text-6xl">
						Hago trabajo que funciona.
					</span>
				</h2>
			</div>
		</div>
	</div>
</section>
