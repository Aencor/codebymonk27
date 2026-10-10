<?php
/**
 * Single Case Study Template (single-case_study.php)
 */
get_header();

while (have_posts()) : the_post();
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

<article class="py-14 sm:py-20 md:py-28 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] min-h-screen transition-colors duration-300">
	<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Back link -->
		<div class="mb-8">
			<a href="<?php echo esc_url(get_post_type_archive_link('case_study')); ?>" class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] inline-flex items-center gap-2 hover:text-[#eb3a24] transition-colors">
				<i class="fa-solid fa-arrow-left text-[9px]"></i>
				<span>Volver a Casos de Estudio</span>
			</a>
		</div>

		<!-- Category & Client Tag -->
		<div class="flex flex-wrap items-center gap-3 mb-4">
			<?php if (!empty($categories) && !is_wp_error($categories)): ?>
				<span class="px-3 py-1 rounded-full bg-[#163be6] text-white text-xs font-mono font-bold uppercase tracking-wider">
					<?= esc_html($categories[0]->name); ?>
				</span>
			<?php endif; ?>
			<span class="text-xs font-mono text-[#737373] dark:text-[#888888]">
				<?= esc_html($client); ?> • <?= esc_html($year); ?>
			</span>
		</div>

		<!-- Title -->
		<h1 class="font-display font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-[#111111] dark:text-white uppercase tracking-tight leading-[0.95] mb-8">
			<?php the_title(); ?>
		</h1>

		<!-- Featured Mockup / Image -->
		<?php if (has_post_thumbnail()): ?>
			<div class="rounded-3xl overflow-hidden border border-[#e2e2dc] dark:border-[#26262e] shadow-2xl mb-14 bg-white dark:bg-[#141418]">
				<?php the_post_thumbnail('full', ['class' => 'w-full h-auto object-cover']); ?>
			</div>
		<?php endif; ?>

		<!-- 4 Core Detailed Phases -->
		<div class="space-y-10 sm:space-y-12">
			
			<!-- Phase 1: Qué Estaba -->
			<?php if (!empty($what_was)): ?>
				<div class="p-6 sm:p-10 rounded-3xl bg-white/90 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] shadow-xs">
					<div class="flex items-center gap-3 text-xs font-mono font-bold text-[#eb3a24] uppercase tracking-widest mb-4">
						<span class="w-2.5 h-2.5 rounded-full bg-[#eb3a24]"></span>
						<span>Fase 01 // Diagnóstico</span>
					</div>
					<h2 class="font-display font-black text-2xl sm:text-3xl text-[#111111] dark:text-white uppercase tracking-tight mb-4">
						¿Qué Estaba? <span class="text-sm font-sans font-normal text-[#737373] lowercase block sm:inline sm:ml-2">Situación inicial y fricciones previas</span>
					</h2>
					<div class="text-sm sm:text-base text-[#444444] dark:text-[#b4b4be] leading-relaxed font-light space-y-4">
						<div class="whitespace-pre-line"><?= esc_html($what_was); ?></div>
					</div>
				</div>
			<?php endif; ?>

			<!-- Phase 2: Qué Hice -->
			<?php if (!empty($what_did)): ?>
				<div class="p-6 sm:p-10 rounded-3xl bg-white/90 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] shadow-xs">
					<div class="flex items-center gap-3 text-xs font-mono font-bold text-[#163be6] dark:text-cyan-400 uppercase tracking-widest mb-4">
						<span class="w-2.5 h-2.5 rounded-full bg-[#163be6]"></span>
						<span>Fase 02 // Estrategia</span>
					</div>
					<h2 class="font-display font-black text-2xl sm:text-3xl text-[#111111] dark:text-white uppercase tracking-tight mb-4">
						¿Qué Hice? <span class="text-sm font-sans font-normal text-[#737373] lowercase block sm:inline sm:ml-2">Propuesta de producto y arquitectura</span>
					</h2>
					<div class="text-sm sm:text-base text-[#444444] dark:text-[#b4b4be] leading-relaxed font-light space-y-4">
						<div class="whitespace-pre-line"><?= esc_html($what_did); ?></div>
					</div>
				</div>
			<?php endif; ?>

			<!-- Phase 3: Cómo Lo Hice -->
			<?php if (!empty($how_did)): ?>
				<div class="p-6 sm:p-10 rounded-3xl bg-white/90 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] shadow-xs">
					<div class="flex items-center gap-3 text-xs font-mono font-bold text-[#7c3aed] uppercase tracking-widest mb-4">
						<span class="w-2.5 h-2.5 rounded-full bg-[#7c3aed]"></span>
						<span>Fase 03 // Desarrollo</span>
					</div>
					<h2 class="font-display font-black text-2xl sm:text-3xl text-[#111111] dark:text-white uppercase tracking-tight mb-4">
						¿Cómo Lo Hice? <span class="text-sm font-sans font-normal text-[#737373] lowercase block sm:inline sm:ml-2">Implementación técnica y arquitectura</span>
					</h2>
					<div class="text-sm sm:text-base text-[#444444] dark:text-[#b4b4be] leading-relaxed font-light space-y-4">
						<div class="whitespace-pre-line"><?= esc_html($how_did); ?></div>
					</div>
				</div>
			<?php endif; ?>

			<!-- Phase 4: Qué Resultados Dieron -->
			<?php if (!empty($results)): ?>
				<div class="p-6 sm:p-10 rounded-3xl bg-[#111111] dark:bg-[#181820] text-white border border-[#222222] dark:border-[#33333e] shadow-xl">
					<div class="flex items-center gap-3 text-xs font-mono font-bold text-[#10b981] uppercase tracking-widest mb-4">
						<span class="w-2.5 h-2.5 rounded-full bg-[#10b981]"></span>
						<span>Fase 04 // Impacto & Métricas</span>
					</div>
					<h2 class="font-display font-black text-2xl sm:text-3xl text-white uppercase tracking-tight mb-4">
						¿Qué Resultados Dieron? <span class="text-sm font-sans font-normal text-[#888888] lowercase block sm:inline sm:ml-2">Métricas y valor comercial obtenido</span>
					</h2>
					<div class="text-sm sm:text-base text-[#d1d5db] leading-relaxed font-light space-y-4">
						<div class="whitespace-pre-line"><?= esc_html($results); ?></div>
					</div>
				</div>
			<?php endif; ?>

		</div>

		<!-- Footer Actions -->
		<div class="mt-14 pt-8 border-t border-[#e2e2dc] dark:border-[#222222] flex flex-col sm:flex-row items-center justify-between gap-6">
			<?php if (!empty($url)): ?>
				<a href="<?= esc_url($url); ?>" target="_blank" rel="noopener" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-full bg-[#111111] dark:bg-white text-white dark:text-[#111111] hover:bg-[#eb3a24] dark:hover:bg-[#eb3a24] dark:hover:text-white font-mono font-bold text-xs uppercase tracking-wider shadow-lg transition-all">
					<span>Visitar Sitio en Vivo</span>
					<i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
				</a>
			<?php endif; ?>

			<a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full bg-[#163be6] text-white hover:bg-indigo-700 font-mono font-bold text-xs uppercase tracking-wider shadow-lg transition-all">
				<span>Cotizar un Proyecto Similar</span>
				<i class="fa-solid fa-arrow-right text-xs"></i>
			</a>
		</div>

	</div>
</article>

<?php
endwhile;
get_footer();
