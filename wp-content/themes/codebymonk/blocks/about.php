<?php
/**
 * Block: About - With Real Profile Photo, Fullstack Developer Copy & 3D Three.js Background
 */
$block_attrs = cbm_block_attributes($block, 'relative py-12 sm:py-16 md:py-24 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] border-t border-[#e2e2dc] dark:border-[#222222] transition-colors duration-300 overflow-hidden');

$profile_img_url = get_template_directory_uri() . '/assets/img/profile.jpg';
?>

<section <?= $block_attrs; ?>>
	<!-- 3D Three.js Developer Background Canvas (AST / Plexus / Code Nodes) -->
	<div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
		<canvas id="about-three-canvas" class="w-full h-full block opacity-70 dark:opacity-85"></canvas>
	</div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10 lg:gap-12 items-center">
			
			<!-- Left: Real Profile Photo Showcase -->
			<div class="lg:col-span-4 flex flex-col items-center lg:items-start gap-4">
				<span class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] self-start">
					// SOBRE MÍ
				</span>

				<div class="relative group w-44 h-44 sm:w-56 sm:h-56 md:w-64 md:h-64">
					<!-- Glow Backdrop -->
					<div class="absolute -inset-1 bg-gradient-to-r from-[#eb3a24] to-[#163be6] rounded-3xl blur-md opacity-30 group-hover:opacity-60 transition duration-500"></div>

					<!-- Image Container -->
					<div class="relative w-full h-full rounded-2xl md:rounded-3xl overflow-hidden border-2 border-white dark:border-[#22222a] shadow-xl bg-white dark:bg-[#141418]">
						<img src="<?= esc_url($profile_img_url); ?>" alt="Kike - CodeByMonk" class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-500 ease-out" />
					</div>

					<!-- Monk Emoji Badge -->
					<div class="absolute -bottom-3 -right-3 w-10 h-10 rounded-full bg-[#163be6] text-white flex items-center justify-center font-mono font-bold text-xs shadow-lg border-2 border-white dark:border-[#0a0a0c]">
						(••)
					</div>
				</div>
			</div>

			<!-- Center: Headline & Narrative (Clean Proportional Typography) -->
			<div class="lg:col-span-5 space-y-4">
				<h2 class="font-display font-black text-lg sm:text-xl md:text-2xl lg:text-[24px] xl:text-[26px] text-[#111111] dark:text-white uppercase tracking-tight leading-[1.2]">
					DISEÑADOR DE PRODUCTO.<br>
					DESARROLLADOR FULLSTACK.<br>
					<span class="font-serif-italic font-normal tracking-normal lowercase text-[#163be6] dark:text-cyan-400 text-xl sm:text-2xl md:text-[28px] leading-tight inline-block mt-1">
						Curioso profesional.
					</span>
				</h2>

				<p class="text-xs sm:text-sm md:text-base text-[#444444] dark:text-[#b0b0b8] leading-relaxed font-light">
					Con más de 20 años de experiencia creando experiencias digitales y más de 50 sitios web y plataformas desarrolladas, combino el rigor técnico del desarrollo fullstack moderno con la sensibilidad visual del diseño de producto. Mi enfoque está en construir sitios rápidos, memorables y con identidad propia.
				</p>

				<div class="pt-4 border-t border-[#e2e2dc] dark:border-[#222222] flex flex-wrap items-center gap-3 sm:gap-4 text-[10px] sm:text-xs font-mono font-semibold uppercase tracking-wider text-[#555555] dark:text-[#888888]">
					<span class="text-[#eb3a24] font-bold">+20 AÑOS DE EXPERIENCIA</span>
					<span>•</span>
					<span class="text-[#163be6] dark:text-cyan-400 font-bold">+50 SITIOS DESARROLLADOS</span>
				</div>
			</div>

			<!-- Right: Timeline / Experience List -->
			<div class="lg:col-span-3 pt-2 lg:pl-4 lg:border-l lg:border-[#e2e2dc] dark:lg:border-[#222222]">
				<div class="text-[10px] sm:text-xs font-mono font-bold uppercase tracking-widest text-[#737373] dark:text-[#888888] mb-4 pb-2 border-b border-[#e2e2dc] dark:border-[#222222]">
					TRAYECTORIA
				</div>
				<div class="space-y-4">
					<div>
						<span class="text-[10px] font-mono text-[#eb3a24] block mb-0.5">2020 - PRESENTE</span>
						<h4 class="text-xs sm:text-sm font-bold text-[#111111] dark:text-white">Founder & Lead Fullstack Dev</h4>
						<p class="text-[11px] text-[#666666] dark:text-[#888888]">CodeByMonk Studio</p>
					</div>
					<div>
						<span class="text-[10px] font-mono text-[#737373] dark:text-[#666666] block mb-0.5">2012 - 2020</span>
						<h4 class="text-xs sm:text-sm font-bold text-[#111111] dark:text-white">Senior Fullstack & Creative Tech</h4>
						<p class="text-[11px] text-[#666666] dark:text-[#888888]">Proyectos Globales & Agencias</p>
					</div>
					<div>
						<span class="text-[10px] font-mono text-[#737373] dark:text-[#666666] block mb-0.5">2004 - 2012</span>
						<h4 class="text-xs sm:text-sm font-bold text-[#111111] dark:text-white">Web & Multimedia Developer</h4>
						<p class="text-[11px] text-[#666666] dark:text-[#888888]">Pionero Digital & Producción Web</p>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>
