<?php
/**
 * Single Portfolio Template
 */
get_header();

while (have_posts()) : the_post();
	$project_id   = get_the_ID();
	$url          = get_post_meta($project_id, 'project_url', true) ?: (function_exists('get_field') ? get_field('project_url') : '');
	$description  = get_post_meta($project_id, 'project_description', true) ?: (function_exists('get_field') ? get_field('project_description') : get_the_excerpt());
	$challenge    = get_post_meta($project_id, 'project_challenge', true) ?: (function_exists('get_field') ? get_field('project_challenge') : '');
	$result       = get_post_meta($project_id, 'project_result', true) ?: (function_exists('get_field') ? get_field('project_result') : '');
	$client       = get_post_meta($project_id, 'project_client', true) ?: (function_exists('get_field') ? get_field('project_client') : '');
	$year         = get_post_meta($project_id, 'project_year', true) ?: '2026';

	$categories = get_the_terms($project_id, 'portfolio_category');
	$tags       = get_the_terms($project_id, 'portfolio_tag');
?>

<article class="py-16 md:py-24 bg-slate-950 text-white">
	<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Breadcrumb / Back Link -->
		<div class="mb-8">
			<a href="<?= esc_url(home_url('/#portafolio')); ?>" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-400 hover:text-cyan-400 transition-colors uppercase tracking-wider">
				<i class="fa-solid fa-arrow-left"></i>
				<span>Volver al Portafolio</span>
			</a>
		</div>

		<!-- Category ABOVE the title -->
		<?php if (!empty($categories) && !is_wp_error($categories)): ?>
			<div class="mb-3">
				<span class="inline-block px-3.5 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs sm:text-sm font-bold uppercase tracking-wider">
					<?= esc_html($categories[0]->name); ?>
				</span>
			</div>
		<?php endif; ?>

		<!-- Title -->
		<h1 class="text-3xl sm:text-4xl md:text-6xl font-extrabold text-white tracking-tight mb-4 leading-tight">
			<?php the_title(); ?>
		</h1>

		<!-- Tags as BOXES / BADGES below the title -->
		<?php if (!empty($tags) && !is_wp_error($tags)): ?>
			<div class="flex flex-wrap gap-2 mb-8">
				<?php foreach ($tags as $tag): ?>
					<span class="px-3 py-1 text-xs sm:text-sm font-medium rounded-lg bg-slate-800 text-slate-200 border border-slate-700">
						<?= esc_html($tag->name); ?>
					</span>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<!-- Featured Screenshot / Image -->
		<?php if (has_post_thumbnail()): ?>
			<div class="rounded-3xl overflow-hidden border border-slate-800 shadow-2xl mb-12 bg-slate-900">
				<?php the_post_thumbnail('full', ['class' => 'w-full h-auto object-cover']); ?>
			</div>
		<?php endif; ?>

		<!-- Project Details Grid -->
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
			<!-- Main Content -->
			<div class="lg:col-span-2 space-y-8">
				<?php if (!empty($description)): ?>
					<div>
						<h2 class="text-xl font-bold text-white mb-3 flex items-center gap-2">
							<i class="fa-solid fa-circle-info text-cyan-400 text-sm"></i>
							<span>Visión General</span>
						</h2>
						<p class="text-slate-300 text-base sm:text-lg leading-relaxed font-light">
							<?= esc_html($description); ?>
						</p>
					</div>
				<?php endif; ?>

				<?php if (!empty($challenge)): ?>
					<div class="p-6 rounded-2xl bg-slate-900/80 border border-amber-500/20">
						<h3 class="text-lg font-bold text-amber-400 mb-2 flex items-center gap-2">
							<i class="fa-solid fa-crosshairs"></i>
							<span>El Reto</span>
						</h3>
						<p class="text-slate-300 text-sm sm:text-base leading-relaxed">
							<?= esc_html($challenge); ?>
						</p>
					</div>
				<?php endif; ?>

				<?php if (!empty($result)): ?>
					<div class="p-6 rounded-2xl bg-slate-900/80 border border-emerald-500/20">
						<h3 class="text-lg font-bold text-emerald-400 mb-2 flex items-center gap-2">
							<i class="fa-solid fa-chart-line"></i>
							<span>El Resultado</span>
						</h3>
						<p class="text-slate-300 text-sm sm:text-base leading-relaxed">
							<?= esc_html($result); ?>
						</p>
					</div>
				<?php endif; ?>
			</div>

			<!-- Sidebar Meta & Link -->
			<div class="lg:col-span-1">
				<div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800 space-y-6 sticky top-28">
					<h3 class="text-base font-bold text-white uppercase tracking-wider border-b border-slate-800 pb-3">
						Ficha del Proyecto
					</h3>

					<?php if (!empty($client)): ?>
						<div>
							<span class="text-xs text-slate-500 block uppercase">Cliente</span>
							<span class="text-sm font-semibold text-slate-200"><?= esc_html($client); ?></span>
						</div>
					<?php endif; ?>

					<div>
						<span class="text-xs text-slate-500 block uppercase">Año</span>
						<span class="text-sm font-semibold text-slate-200"><?= esc_html($year); ?></span>
					</div>

					<?php if (!empty($url)): ?>
						<div class="pt-4 border-t border-slate-800">
							<a href="<?= esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl bg-gradient-to-r from-cyan-400 to-indigo-500 hover:from-cyan-300 hover:to-indigo-400 text-slate-950 font-bold shadow-lg transition-all">
								<span>Visitar Proyecto</span>
								<i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

	</div>
</article>

<?php
endwhile;
get_footer();
