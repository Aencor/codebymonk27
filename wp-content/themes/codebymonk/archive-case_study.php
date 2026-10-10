<?php
/**
 * Case Study Archive Template (archive-case_study.php)
 */
get_header();
?>

<div class="py-16 md:py-24 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] min-h-screen transition-colors duration-300">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Header -->
		<div class="max-w-3xl mb-12 sm:mb-16">
			<span class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] block mb-2">
				// ANÁLISIS & RESULTADOS
			</span>
			<h1 class="font-display font-black text-4xl sm:text-5xl md:text-6xl text-[#111111] dark:text-white uppercase tracking-tight leading-tight mb-4">
				CASOS DE <span class="font-serif-italic font-normal lowercase tracking-normal text-[#111111] dark:text-[#e0e0e0] text-5xl sm:text-6xl md:text-7xl">estudio.</span>
			</h1>
			<p class="text-sm sm:text-base text-[#555555] dark:text-[#a1a1aa] leading-relaxed font-light">
				Desglose paso a paso de proyectos reales: el diagnóstico inicial, la estrategia de diseño, la implementación técnica y el impacto medible en el negocio.
			</p>
		</div>

		<!-- Case Studies List -->
		<?php if (have_posts()): ?>
			<div class="space-y-12 md:space-y-16">
				<?php while (have_posts()): the_post();
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
					<article class="p-6 sm:p-10 rounded-3xl bg-white/80 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] hover:border-[#111111] dark:hover:border-[#44444e] transition-all duration-300 shadow-xs hover:shadow-xl group">
						
						<!-- Top Meta & Category -->
						<div class="flex flex-wrap items-center justify-between gap-4 mb-4 pb-4 border-b border-[#ecece6] dark:border-[#22222a]">
							<div class="flex items-center gap-3">
								<span class="w-2 h-2 rounded-full bg-[#eb3a24]"></span>
								<span class="text-xs font-mono font-bold uppercase tracking-wider text-[#111111] dark:text-white">
									<?= esc_html($client); ?>
								</span>
								<span class="text-xs font-mono text-[#737373]">• <?= esc_html($year); ?></span>
							</div>

							<?php if (!empty($categories) && !is_wp_error($categories)): ?>
								<span class="text-[11px] font-mono uppercase tracking-wider text-[#163be6] dark:text-cyan-400 font-bold">
									<?= esc_html($categories[0]->name); ?>
								</span>
							<?php endif; ?>
						</div>

						<!-- Title -->
						<h2 class="font-display font-black text-2xl sm:text-3xl md:text-4xl text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] transition-colors leading-tight mb-8">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>

						<!-- 4-Phase Grid Summary -->
						<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
							<!-- 1. Qué Estaba -->
							<div class="p-4 rounded-xl bg-[#f5f5f0] dark:bg-[#1a1a22] border border-[#e5e5dc] dark:border-[#2a2a34]">
								<div class="flex items-center gap-2 text-[11px] font-mono font-bold text-[#eb3a24] uppercase mb-1.5">
									<i class="fa-solid fa-triangle-exclamation text-[10px]"></i>
									<span>1. Qué Estaba</span>
								</div>
								<p class="text-xs text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-4">
									<?= esc_html($what_was); ?>
								</p>
							</div>

							<!-- 2. Qué Hice -->
							<div class="p-4 rounded-xl bg-[#f5f5f0] dark:bg-[#1a1a22] border border-[#e5e5dc] dark:border-[#2a2a34]">
								<div class="flex items-center gap-2 text-[11px] font-mono font-bold text-[#163be6] dark:text-cyan-400 uppercase mb-1.5">
									<i class="fa-solid fa-compass-drafting text-[10px]"></i>
									<span>2. Qué Hice</span>
								</div>
								<p class="text-xs text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-4">
									<?= esc_html($what_did); ?>
								</p>
							</div>

							<!-- 3. Cómo Lo Hice -->
							<div class="p-4 rounded-xl bg-[#f5f5f0] dark:bg-[#1a1a22] border border-[#e5e5dc] dark:border-[#2a2a34]">
								<div class="flex items-center gap-2 text-[11px] font-mono font-bold text-[#7c3aed] uppercase mb-1.5">
									<i class="fa-solid fa-code text-[10px]"></i>
									<span>3. Cómo Lo Hice</span>
								</div>
								<p class="text-xs text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-4">
									<?= esc_html($how_did); ?>
								</p>
							</div>

							<!-- 4. Qué Resultados Dieron -->
							<div class="p-4 rounded-xl bg-[#f5f5f0] dark:bg-[#1a1a22] border border-[#e5e5dc] dark:border-[#2a2a34]">
								<div class="flex items-center gap-2 text-[11px] font-mono font-bold text-[#059669] dark:text-emerald-400 uppercase mb-1.5">
									<i class="fa-solid fa-chart-line text-[10px]"></i>
									<span>4. Resultados</span>
								</div>
								<p class="text-xs text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-4">
									<?= esc_html($results); ?>
								</p>
							</div>
						</div>

						<!-- Bottom Action Links -->
						<div class="pt-6 border-t border-[#ecece6] dark:border-[#22222a] flex items-center justify-between">
							<a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#111111] dark:bg-white text-white dark:text-[#111111] text-xs font-mono font-bold uppercase tracking-wider group-hover:bg-[#eb3a24] dark:group-hover:bg-[#eb3a24] dark:group-hover:text-white transition-all">
								<span>Ver Caso de Estudio Completo</span>
								<i class="fa-solid fa-arrow-right text-[10px]"></i>
							</a>

							<?php if (!empty($url)): ?>
								<a href="<?= esc_url($url); ?>" target="_blank" rel="noopener" class="text-xs font-mono text-[#737373] hover:text-[#eb3a24] inline-flex items-center gap-1 transition-colors">
									<span>Visitar Sitio en Vivo</span>
									<i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
								</a>
							<?php endif; ?>
						</div>

					</article>
				<?php endwhile; ?>
			</div>
		<?php else: ?>
			<div class="text-center py-20 bg-white dark:bg-[#141418] rounded-2xl border border-[#e2e2dc] dark:border-[#222222]">
				<p class="text-sm font-mono text-[#737373]">No hay casos de estudio publicados todavía.</p>
			</div>
		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
