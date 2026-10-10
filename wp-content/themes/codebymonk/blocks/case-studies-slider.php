<?php
/**
 * Block: Case Studies Slider - Interactive Carousel for Homepage
 */
$block_attrs = cbm_block_attributes($block, 'py-14 sm:py-20 md:py-28 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] border-t border-[#e2e2dc] dark:border-[#222222] transition-colors duration-300 overflow-hidden');

$cs_query = new WP_Query([
	'post_type'      => 'case_study',
	'posts_per_page' => 8,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC'
]);

$archive_url = get_post_type_archive_link('case_study') ?: home_url('/casos-de-estudio/');
?>

<section id="casos-de-estudio-home" <?= $block_attrs; ?>>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Section Header -->
		<div class="flex flex-col md:flex-row md:items-end justify-between mb-8 sm:mb-12 pb-4 sm:pb-6 border-b border-[#e2e2dc] dark:border-[#222222] gap-4 sm:gap-6">
			<div>
				<div class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] mb-2 sm:mb-3">
					// CASOS DE ESTUDIO DESTACADOS
				</div>
				<h2 class="font-display font-black text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-[#111111] dark:text-white uppercase tracking-tight leading-tight">
					HISTORIAS DE <span class="font-serif-italic font-normal lowercase tracking-normal text-[#111111] dark:text-[#e0e0e0] text-3xl sm:text-5xl md:text-6xl lg:text-7xl">éxito real.</span>
				</h2>
			</div>

			<!-- Header Actions (Archive link & Slider Navigation) -->
			<div class="flex items-center gap-5 sm:gap-6">
				<a href="<?= esc_url($archive_url); ?>" class="whitespace-nowrap text-[11px] sm:text-xs font-mono font-bold uppercase tracking-wider text-[#555555] dark:text-[#999999] hover:text-[#eb3a24] dark:hover:text-[#eb3a24] transition-colors py-2">
					<span>Ver todos los casos</span>
				</a>

				<!-- Vertical Separator Divider -->
				<div class="h-6 w-px bg-[#d8d8d0] dark:bg-[#282834] hidden sm:block"></div>

				<!-- Slider Navigation Arrows -->
				<div class="flex items-center gap-2.5">
					<button id="cs-prev" aria-label="Anterior caso de estudio" class="w-10 h-10 rounded-full bg-[#eaeae4] dark:bg-[#1a1a20] border border-[#d8d8d0] dark:border-[#33333e] flex items-center justify-center text-xs text-[#111111] dark:text-white hover:bg-[#deded6] dark:hover:bg-[#282832] active:scale-95 transition-all shadow-xs">
						<i class="fa-solid fa-arrow-left"></i>
					</button>
					<button id="cs-next" aria-label="Siguiente caso de estudio" class="w-10 h-10 rounded-full bg-[#111111] dark:bg-white text-white dark:text-[#111111] hover:bg-[#eb3a24] dark:hover:bg-[#eb3a24] dark:hover:text-white flex items-center justify-center text-xs active:scale-95 transition-all shadow-md">
						<i class="fa-solid fa-arrow-right"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Slider Container -->
		<?php if ($cs_query->have_posts()): ?>
			<div id="case-studies-slider" class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth gap-6 pb-6 -mx-4 px-4 scrollbar-none">
				<?php while ($cs_query->have_posts()): $cs_query->the_post();
					$cs_id       = get_the_ID();
					$what_was    = get_post_meta($cs_id, 'what_was_there', true);
					$what_did    = get_post_meta($cs_id, 'what_i_did', true);
					$how_did     = get_post_meta($cs_id, 'how_i_did_it', true);
					$results     = get_post_meta($cs_id, 'results_achieved', true);
					$client      = get_post_meta($cs_id, 'project_client', true);
					$year        = get_post_meta($cs_id, 'project_year', true) ?: '2026';
					$url         = get_post_meta($cs_id, 'project_url', true);
					$categories  = get_the_terms($cs_id, 'case_study_category');
				?>
					<div class="w-[90vw] sm:w-[540px] md:w-[620px] lg:w-[680px] flex-shrink-0 snap-center rounded-3xl bg-white/90 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] p-6 sm:p-8 flex flex-col justify-between shadow-md hover:shadow-2xl transition-all duration-300 group">
						<div>
							
							<!-- Top Metadata Pill -->
							<div class="flex items-center justify-between gap-3 mb-4 pb-3 border-b border-[#ecece6] dark:border-[#22222a]">
								<div class="flex items-center gap-2">
									<span class="w-2 h-2 rounded-full bg-[#eb3a24]"></span>
									<span class="text-xs font-mono font-bold uppercase tracking-wider text-[#111111] dark:text-white">
										<?= esc_html($client); ?>
									</span>
									<span class="text-xs font-mono text-[#737373]">• <?= esc_html($year); ?></span>
								</div>

								<?php if (!empty($categories) && !is_wp_error($categories)): ?>
									<span class="text-[10px] font-mono uppercase tracking-wider text-[#163be6] dark:text-cyan-400 font-bold">
										<?= esc_html($categories[0]->name); ?>
									</span>
								<?php endif; ?>
							</div>

							<!-- Case Study Title -->
							<h3 class="font-display font-black text-xl sm:text-2xl md:text-3xl text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] transition-colors leading-snug mb-5">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>

							<!-- 4-Phase Condensed Grid -->
							<div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
								<!-- 1. Qué Estaba -->
								<div class="p-3.5 rounded-xl bg-[#f5f5f0] dark:bg-[#1a1a22] border border-[#e5e5dc] dark:border-[#2a2a34]">
									<div class="text-[10px] font-mono font-bold uppercase text-[#eb3a24] mb-1 flex items-center gap-1.5">
										<i class="fa-solid fa-triangle-exclamation text-[9px]"></i>
										<span>1. Diagnóstico</span>
									</div>
									<p class="text-xs text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-3">
										<?= esc_html($what_was); ?>
									</p>
								</div>

								<!-- 2. Qué Hice -->
								<div class="p-3.5 rounded-xl bg-[#f5f5f0] dark:bg-[#1a1a22] border border-[#e5e5dc] dark:border-[#2a2a34]">
									<div class="text-[10px] font-mono font-bold uppercase text-[#163be6] dark:text-cyan-400 mb-1 flex items-center gap-1.5">
										<i class="fa-solid fa-compass-drafting text-[9px]"></i>
										<span>2. Estrategia</span>
									</div>
									<p class="text-xs text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-3">
										<?= esc_html($what_did); ?>
									</p>
								</div>

								<!-- 3. Cómo Lo Hice -->
								<div class="p-3.5 rounded-xl bg-[#f5f5f0] dark:bg-[#1a1a22] border border-[#e5e5dc] dark:border-[#2a2a34]">
									<div class="text-[10px] font-mono font-bold uppercase text-[#7c3aed] mb-1 flex items-center gap-1.5">
										<i class="fa-solid fa-code text-[9px]"></i>
										<span>3. Implementación</span>
									</div>
									<p class="text-xs text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-3">
										<?= esc_html($how_did); ?>
									</p>
								</div>

								<!-- 4. Resultados -->
								<div class="p-3.5 rounded-xl bg-[#f5f5f0] dark:bg-[#1a1a22] border border-[#e5e5dc] dark:border-[#2a2a34]">
									<div class="text-[10px] font-mono font-bold uppercase text-[#059669] dark:text-emerald-400 mb-1 flex items-center gap-1.5">
										<i class="fa-solid fa-chart-line text-[9px]"></i>
										<span>4. Impacto / Métricas</span>
									</div>
									<p class="text-xs text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-3">
										<?= esc_html($results); ?>
									</p>
								</div>
							</div>

						</div>

						<!-- Action Footer -->
						<div class="pt-4 border-t border-[#ecece6] dark:border-[#22222a] flex items-center justify-between">
							<a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#111111] dark:bg-white text-white dark:text-[#111111] text-xs font-mono font-bold uppercase tracking-wider group-hover:bg-[#eb3a24] dark:group-hover:bg-[#eb3a24] dark:group-hover:text-white transition-all">
								<span>Ver Caso Completo</span>
								<i class="fa-solid fa-arrow-right text-[10px]"></i>
							</a>

							<?php if (!empty($url)): ?>
								<a href="<?= esc_url($url); ?>" target="_blank" rel="noopener" class="text-xs font-mono text-[#737373] hover:text-[#eb3a24] inline-flex items-center gap-1 transition-colors">
									<span>Sitio en vivo</span>
									<i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
								</a>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		<?php endif; ?>

	</div>
</section>
