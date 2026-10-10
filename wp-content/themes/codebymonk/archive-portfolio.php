<?php
/**
 * Portfolio Archive Template (archive-portfolio.php)
 */
get_header();

$categories = get_terms([
	'taxonomy'   => 'portfolio_category',
	'hide_empty' => true,
]);

$card_colors = [
	'bg-[#eb3a24]',
	'bg-[#163be6]',
	'bg-[#111111] dark:bg-[#1c1c22]',
	'bg-[#0d9488]',
	'bg-[#7c3aed]',
	'bg-[#d97706]',
	'bg-[#2563eb]',
];
?>

<div class="py-16 md:py-24 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] min-h-screen transition-colors duration-300">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Header -->
		<div class="max-w-3xl mb-12 sm:mb-16">
			<span class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] block mb-2">
				// TRABAJOS SELECCIONADOS
			</span>
			<h1 class="font-display font-black text-4xl sm:text-5xl md:text-6xl text-[#111111] dark:text-white uppercase tracking-tight leading-tight mb-4">
				TODOS LOS <span class="font-serif-italic font-normal lowercase tracking-normal text-[#111111] dark:text-[#e0e0e0] text-5xl sm:text-6xl md:text-7xl">proyectos.</span>
			</h1>
			<p class="text-sm sm:text-base text-[#555555] dark:text-[#a1a1aa] leading-relaxed font-light">
				Catálogo completo de sitios web, tiendas e-commerce, aplicaciones web y plataformas digitales diseñadas y desarrolladas a medida.
			</p>
		</div>

		<!-- Category Filter Pills -->
		<?php if (!empty($categories) && !is_wp_error($categories)): ?>
			<div class="flex flex-wrap gap-2 sm:gap-3 mb-12 pb-6 border-b border-[#e2e2dc] dark:border-[#222222]">
				<a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>" class="px-3.5 py-1.5 rounded-full bg-[#111111] dark:bg-white text-white dark:text-[#111111] text-xs font-mono font-bold uppercase tracking-wider">
					Todos
				</a>
				<?php foreach ($categories as $cat): ?>
					<a href="<?php echo esc_url(get_term_link($cat)); ?>" class="px-3.5 py-1.5 rounded-full bg-[#e8e8e2] dark:bg-[#1a1a20] text-[#555555] dark:text-[#d1d5db] hover:bg-[#111111] hover:text-white dark:hover:bg-white dark:hover:text-[#111111] text-xs font-mono font-medium uppercase tracking-wider transition-colors border border-[#dcdcd4] dark:border-[#2a2a34]">
						<?= esc_html($cat->name); ?> (<?= esc_html($cat->count); ?>)
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<!-- Portfolio Grid -->
		<?php if (have_posts()): $index = 0; ?>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
				<?php while (have_posts()): the_post();
					$project_id   = get_the_ID();
					$url          = get_post_meta($project_id, 'project_url', true) ?: (function_exists('get_field') ? get_field('project_url') : '');
					$description  = get_post_meta($project_id, 'project_description', true) ?: (function_exists('get_field') ? get_field('project_description') : get_the_excerpt());
					$challenge    = get_post_meta($project_id, 'project_challenge', true) ?: (function_exists('get_field') ? get_field('project_challenge') : '');
					$result       = get_post_meta($project_id, 'project_result', true) ?: (function_exists('get_field') ? get_field('project_result') : '');
					$client       = get_post_meta($project_id, 'project_client', true) ?: (function_exists('get_field') ? get_field('project_client') : '');
					$year         = get_post_meta($project_id, 'project_year', true) ?: '2026';

					$cats = get_the_terms($project_id, 'portfolio_category');
					$tags = get_the_terms($project_id, 'portfolio_tag');
					$bg_color = $card_colors[$index % count($card_colors)];
					$index++;
				?>
					<article class="flex flex-col justify-between rounded-3xl bg-white/80 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] p-6 sm:p-8 shadow-xs hover:shadow-xl transition-all duration-300 group">
						<div>
							<!-- Visual Mockup Container -->
							<a href="<?= !empty($url) ? esc_url($url) : get_permalink(); ?>" target="<?= !empty($url) ? '_blank' : '_self'; ?>" rel="noopener" class="block w-full aspect-[16/10] <?= $bg_color; ?> rounded-2xl p-6 mb-6 relative overflow-hidden shadow-inner group-hover:scale-[1.01] transition-transform">
								<div class="w-full h-full rounded-lg overflow-hidden border border-white/20 bg-white/10 flex items-center justify-center">
									<?php if (has_post_thumbnail()): ?>
										<?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover object-top']); ?>
									<?php else: ?>
										<span class="text-white font-display font-bold text-xl uppercase"><?php the_title(); ?></span>
									<?php endif; ?>
								</div>
								<?php if (!empty($url)): ?>
									<div class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white text-[#111111] flex items-center justify-center shadow-md">
										<i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
									</div>
								<?php endif; ?>
							</a>

							<!-- Category ABOVE Title -->
							<?php if (!empty($cats) && !is_wp_error($cats)): ?>
								<div class="text-[11px] font-mono font-semibold uppercase tracking-widest text-[#737373] dark:text-[#999999] mb-1.5">
									<?= esc_html($cats[0]->name); ?>
								</div>
							<?php endif; ?>

							<!-- Title -->
							<h2 class="font-display font-black text-2xl sm:text-3xl text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] transition-colors leading-tight mb-3">
								<a href="<?= !empty($url) ? esc_url($url) : get_permalink(); ?>" target="<?= !empty($url) ? '_blank' : '_self'; ?>" rel="noopener">
									<?php the_title(); ?>
								</a>
							</h2>

							<!-- Tags as BOXES -->
							<?php if (!empty($tags) && !is_wp_error($tags)): ?>
								<div class="flex flex-wrap gap-1.5 mb-4">
									<?php foreach ($tags as $tag): ?>
										<span class="px-2 py-0.5 text-[10px] font-mono rounded bg-[#e8e8e2] dark:bg-[#1c1c24] text-[#333333] dark:text-[#d1d5db] border border-[#d8d8d0] dark:border-[#2e2e38]">
											<?= esc_html($tag->name); ?>
										</span>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>

							<!-- Description -->
							<?php if (!empty($description)): ?>
								<p class="text-xs sm:text-sm text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-3 mb-4 font-light">
									<?= esc_html($description); ?>
								</p>
							<?php endif; ?>

							<!-- Reto / Resultado -->
							<?php if (!empty($challenge) || !empty($result)): ?>
								<div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-3 border-t border-[#ecece6] dark:border-[#22222a] mb-4">
									<?php if (!empty($challenge)): ?>
										<div class="p-2.5 rounded-lg bg-[#f0f0eb] dark:bg-[#1a1a22]">
											<span class="text-[10px] font-mono font-bold uppercase text-[#eb3a24] block">Reto</span>
											<p class="text-[11px] text-[#444444] dark:text-[#b4b4be] line-clamp-2"><?= esc_html($challenge); ?></p>
										</div>
									<?php endif; ?>
									<?php if (!empty($result)): ?>
										<div class="p-2.5 rounded-lg bg-[#f0f0eb] dark:bg-[#1a1a22]">
											<span class="text-[10px] font-mono font-bold uppercase text-[#163be6] dark:text-cyan-400 block">Resultado</span>
											<p class="text-[11px] text-[#444444] dark:text-[#b4b4be] line-clamp-2"><?= esc_html($result); ?></p>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>

						<!-- Action Link -->
						<div class="pt-4 border-t border-[#ecece6] dark:border-[#22222a] flex items-center justify-between">
							<span class="text-xs font-mono text-[#737373]"><?= esc_html($year); ?></span>
							<a href="<?= !empty($url) ? esc_url($url) : get_permalink(); ?>" target="<?= !empty($url) ? '_blank' : '_self'; ?>" rel="noopener" class="text-xs font-mono font-bold uppercase tracking-wider text-[#111111] dark:text-white group-hover:text-[#eb3a24] inline-flex items-center gap-1.5 transition-colors">
								<span>Ver Proyecto</span>
								<i class="fa-solid fa-arrow-right text-[10px]"></i>
							</a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<!-- Pagination -->
			<div class="mt-16 pt-8 border-t border-[#e2e2dc] dark:border-[#222222] flex items-center justify-between text-xs font-mono">
				<?php
				the_posts_pagination([
					'prev_text' => '<i class="fa-solid fa-arrow-left mr-1"></i> Anteriores',
					'next_text' => 'Siguientes <i class="fa-solid fa-arrow-right ml-1"></i>',
				]);
				?>
			</div>
		<?php else: ?>
			<div class="text-center py-20 bg-white dark:bg-[#141418] rounded-2xl border border-[#e2e2dc] dark:border-[#222222]">
				<p class="text-sm font-mono text-[#737373]">No hay proyectos publicados en esta categoría.</p>
			</div>
		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
