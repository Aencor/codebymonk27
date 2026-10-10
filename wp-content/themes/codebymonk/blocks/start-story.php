<?php
/**
 * Block: Start Story - "Todos iniciamos un día así..." with start.jpg photo
 */
$block_attrs = cbm_block_attributes($block, 'py-14 sm:py-20 md:py-28 bg-[#eaeae4] dark:bg-[#0e0e12] text-[#111111] dark:text-[#f3f4f6] border-t border-[#dcdcd4] dark:border-[#22222a] transition-colors duration-300 overflow-hidden');

$start_img_url = get_template_directory_uri() . '/assets/img/start.jpg';
?>

<section id="origen" <?= $block_attrs; ?>>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-10 sm:gap-14 lg:gap-16 items-center">
			
			<!-- Left: Photographic Feature with start.jpg -->
			<div class="lg:col-span-5 flex flex-col items-center justify-center">
				<div class="relative group w-full max-w-sm sm:max-w-md">
					
					<!-- Glow Backdrop -->
					<div class="absolute -inset-2 bg-gradient-to-tr from-[#eb3a24] via-[#163be6] to-amber-500 rounded-3xl blur-xl opacity-25 group-hover:opacity-50 transition duration-700"></div>

					<!-- Vintage Editorial Frame -->
					<div class="relative bg-white dark:bg-[#15151c] p-4 sm:p-5 pb-8 sm:pb-10 rounded-2xl md:rounded-3xl shadow-2xl border border-[#d8d8d0] dark:border-[#262634] transform group-hover:-rotate-1 transition-all duration-500">
						
						<!-- Photo Stamp / Tape Indicator -->
						<div class="absolute -top-3 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full bg-[#111111] text-white dark:bg-white dark:text-[#111111] text-[10px] font-mono font-bold uppercase tracking-widest shadow-md z-20">
							// EL COMIENZO • ORIGEN
						</div>

						<div class="w-full aspect-[4/3] sm:aspect-[4/3] rounded-xl overflow-hidden bg-[#222222] relative mb-4">
							<img src="<?= esc_url($start_img_url); ?>" alt="El comienzo - CodeByMonk" width="450" height="338" loading="lazy" decoding="async" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out" />
							<div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
						</div>

						<!-- Photo Caption -->
						<div class="flex items-center justify-between text-[11px] font-mono text-[#737373] dark:text-[#999999] px-1">
							<span>Pura curiosidad & código</span>
							<span class="text-[#eb3a24] font-bold">20+ Años Después</span>
						</div>
					</div>

				</div>
			</div>

			<!-- Right: Narrative & Emotional Manifesto -->
			<div class="lg:col-span-7 space-y-6">
				
				<div class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888]">
					// HISTORIA & VISIÓN
				</div>

				<h2 class="font-display font-black text-2xl sm:text-4xl md:text-5xl lg:text-[52px] text-[#111111] dark:text-white uppercase tracking-tight leading-[1.05]">
					TODOS INICIAMOS UN DÍA ASÍ.<br>
					<span class="font-serif-italic font-normal lowercase tracking-normal text-[#eb3a24] text-3xl sm:text-5xl md:text-6xl lg:text-[62px]">
						déjame llevarte hasta donde quieras.
					</span>
				</h2>

				<p class="text-sm sm:text-base md:text-lg text-[#444444] dark:text-[#b8b8c2] leading-relaxed font-light">
					De desarmar computadoras y escribir las primeras líneas de código por pura fascinación, a liderar la arquitectura y el diseño de más de 50 plataformas digitales para marcas de talla mundial.
				</p>

				<p class="text-xs sm:text-sm text-[#555555] dark:text-[#9999a4] leading-relaxed font-light">
					El tamaño o la complejidad de tu proyecto no importan: lo que importa es la visión. Ya sea una startup dando su primer paso o una empresa consolidada buscando renovar su presencia digital, pongo toda mi experiencia y criterio técnico a tu servicio.
				</p>

				<!-- Highlight badges & CTA -->
				<div class="pt-4 border-t border-[#d8d8d0] dark:border-[#22222a] flex flex-wrap items-center gap-4">
					<a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-[#111111] dark:bg-white hover:bg-[#eb3a24] dark:hover:bg-[#eb3a24] text-white dark:text-[#111111] dark:hover:text-white font-mono font-bold text-xs uppercase tracking-wider shadow-lg transition-all">
						<span>Empecemos Tu Proyecto</span>
						<i class="fa-solid fa-arrow-right text-[10px]"></i>
					</a>

					<a href="<?php echo esc_url(home_url('/casos-de-estudio/')); ?>" class="text-xs font-mono font-bold uppercase tracking-wider text-[#555555] dark:text-[#999999] hover:text-[#eb3a24] dark:hover:text-[#eb3a24] inline-flex items-center gap-1.5 transition-colors">
						<span>Ver resultados de clientes</span>
						<i class="fa-solid fa-arrow-right text-[10px]"></i>
					</a>
				</div>

			</div>

		</div>

	</div>
</section>
