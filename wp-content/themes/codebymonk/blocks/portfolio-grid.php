<?php
/**
 * Block: Portfolio Grid & Mobile Slider - Exact Match to Mockup with Dark Mode & GSAP
 */
$block_attrs = cbm_block_attributes($block, 'py-16 md:py-24 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] border-t border-[#e2e2dc] dark:border-[#222222] transition-colors duration-300');

$query = new WP_Query([
	'post_type'      => 'portfolio',
	'posts_per_page' => 12,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
]);

// Color themes for visual mockup cards
$card_colors = [
	'bg-[#eb3a24]', // Red
	'bg-[#163be6]', // Cobalt Blue
	'bg-[#111111] dark:bg-[#1c1c22]', // Black
	'bg-[#0d9488]', // Teal/Emerald
	'bg-[#7c3aed]', // Purple
	'bg-[#d97706]', // Amber
	'bg-[#2563eb]', // Royal Blue
];
?>

<section id="portafolio" <?= $block_attrs; ?>>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Section Header (Mobile indicator & Navigation) -->
		<div class="flex items-center justify-between mb-8 lg:hidden">
			<div class="text-xs font-mono font-bold uppercase tracking-widest text-[#737373] dark:text-[#888888]">
				// PORTAFOLIO [SLIDER]
			</div>
			
			<!-- Mobile Slider Arrows -->
			<div class="flex items-center gap-2">
				<button id="portfolio-prev" aria-label="Anterior" class="w-9 h-9 rounded-full bg-[#eaeae4] dark:bg-[#1a1a20] border border-[#d8d8d0] dark:border-[#33333e] flex items-center justify-center text-xs text-[#111111] dark:text-white active:scale-95 transition-all">
					<i class="fa-solid fa-arrow-left"></i>
				</button>
				<button id="portfolio-next" aria-label="Siguiente" class="w-9 h-9 rounded-full bg-[#111111] dark:bg-white text-white dark:text-[#111111] flex items-center justify-center text-xs active:scale-95 transition-all shadow-sm">
					<i class="fa-solid fa-arrow-right"></i>
				</button>
			</div>
		</div>

		<?php if ($query->have_posts()): ?>
			
			<!-- ==========================================
			     1. MOBILE SLIDER VIEW (Hidden on Desktop)
			     ========================================== -->
			<div id="portfolio-mobile-slider" class="flex lg:hidden overflow-x-auto snap-x snap-mandatory scroll-smooth gap-5 pb-6 -mx-4 px-4 scrollbar-none">
				<?php 
				$m_index = 0;
				while ($query->have_posts()): $query->the_post();
					$project_id   = get_the_ID();
					$url          = get_post_meta($project_id, 'project_url', true) ?: (function_exists('get_field') ? get_field('project_url') : '');
					$description  = get_post_meta($project_id, 'project_description', true) ?: (function_exists('get_field') ? get_field('project_description') : get_the_excerpt());
					$challenge    = get_post_meta($project_id, 'project_challenge', true) ?: (function_exists('get_field') ? get_field('project_challenge') : '');
					$result       = get_post_meta($project_id, 'project_result', true) ?: (function_exists('get_field') ? get_field('project_result') : '');
					$client       = get_post_meta($project_id, 'project_client', true) ?: (function_exists('get_field') ? get_field('project_client') : '');
					$year         = get_post_meta($project_id, 'project_year', true) ?: '2026';

					$categories = get_the_terms($project_id, 'portfolio_category');
					$tags       = get_the_terms($project_id, 'portfolio_tag');
					$bg_color   = $card_colors[$m_index % count($card_colors)];
					$m_index++;
				?>
					<div class="w-[86vw] sm:w-[75vw] flex-shrink-0 snap-center rounded-2xl bg-white/90 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] p-5 flex flex-col justify-between shadow-md">
						<div>
							<!-- Visual Mockup -->
							<div class="w-full aspect-[16/10] <?= $bg_color; ?> rounded-xl p-4 mb-4 relative overflow-hidden flex items-center justify-center shadow-inner">
								<div class="w-full h-full rounded-lg overflow-hidden border border-white/20 bg-white/10 flex items-center justify-center">
									<?php if (has_post_thumbnail()): ?>
										<?php the_post_thumbnail('medium_large', [
											'class' => 'w-full h-full object-cover object-top'
										]); ?>
									<?php else: ?>
										<span class="text-white font-display font-bold text-lg uppercase"><?php the_title(); ?></span>
									<?php endif; ?>
								</div>
								<?php if (!empty($url)): ?>
									<a href="<?= esc_url($url); ?>" target="_blank" rel="noopener" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white text-[#111111] flex items-center justify-center shadow-md">
										<i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
									</a>
								<?php endif; ?>
							</div>

							<!-- Category ABOVE Title -->
							<?php if (!empty($categories) && !is_wp_error($categories)): ?>
								<div class="text-[11px] font-mono font-semibold uppercase tracking-widest text-[#737373] dark:text-[#999999] mb-1">
									<?= esc_html($categories[0]->name); ?>
								</div>
							<?php endif; ?>

							<!-- Title -->
							<h3 class="font-display font-black text-2xl text-[#111111] dark:text-white tracking-tight mb-2">
								<a href="<?= !empty($url) ? esc_url($url) : get_permalink(); ?>" target="<?= !empty($url) ? '_blank' : '_self'; ?>" rel="noopener">
									<?php the_title(); ?>
								</a>
							</h3>

							<!-- Tags as BOXES below title -->
							<?php if (!empty($tags) && !is_wp_error($tags)): ?>
								<div class="flex flex-wrap gap-1.5 mb-3">
									<?php foreach ($tags as $tag): ?>
										<span class="px-2 py-0.5 text-[10px] font-mono font-medium rounded bg-[#e8e8e2] dark:bg-[#1c1c24] text-[#333333] dark:text-[#d1d5db] border border-[#d8d8d0] dark:border-[#2e2e38]">
											<?= esc_html($tag->name); ?>
										</span>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>

							<!-- Short Description -->
							<?php if (!empty($description)): ?>
								<p class="text-xs text-[#555555] dark:text-[#a1a1aa] leading-relaxed line-clamp-3 mb-4">
									<?= esc_html($description); ?>
								</p>
							<?php endif; ?>

							<!-- Challenge & Result -->
							<?php if (!empty($challenge) || !empty($result)): ?>
								<div class="space-y-2 mb-4 pt-2 border-t border-[#ecece6] dark:border-[#22222a]">
									<?php if (!empty($challenge)): ?>
										<div class="text-[11px] text-[#444444] dark:text-[#b4b4be] leading-tight">
											<strong class="font-mono text-[#eb3a24] uppercase">Reto:</strong> <?= esc_html($challenge); ?>
										</div>
									<?php endif; ?>
									<?php if (!empty($result)): ?>
										<div class="text-[11px] text-[#444444] dark:text-[#b4b4be] leading-tight">
											<strong class="font-mono text-[#163be6] dark:text-cyan-400 uppercase">Resultado:</strong> <?= esc_html($result); ?>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>

						<!-- Action Link -->
						<div class="pt-3 border-t border-[#ecece6] dark:border-[#22222a] flex items-center justify-between">
							<span class="text-[11px] font-mono text-[#737373]"><?= esc_html($year); ?></span>
							<a href="<?= !empty($url) ? esc_url($url) : get_permalink(); ?>" target="<?= !empty($url) ? '_blank' : '_self'; ?>" rel="noopener" class="text-xs font-mono font-bold uppercase text-[#eb3a24] inline-flex items-center gap-1">
								<span>Ver Proyecto</span>
								<i class="fa-solid fa-arrow-right text-[10px]"></i>
							</a>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>


			<!-- ==========================================
			     2. DESKTOP STACK VIEW (Hidden on Mobile)
			     ========================================== -->
			<div class="hidden lg:block space-y-24">
				<?php 
				$d_index = 0;
				while ($query->have_posts()): $query->the_post();
					$project_id   = get_the_ID();
					$url          = get_post_meta($project_id, 'project_url', true) ?: (function_exists('get_field') ? get_field('project_url') : '');
					$description  = get_post_meta($project_id, 'project_description', true) ?: (function_exists('get_field') ? get_field('project_description') : get_the_excerpt());
					$challenge    = get_post_meta($project_id, 'project_challenge', true) ?: (function_exists('get_field') ? get_field('project_challenge') : '');
					$result       = get_post_meta($project_id, 'project_result', true) ?: (function_exists('get_field') ? get_field('project_result') : '');
					$client       = get_post_meta($project_id, 'project_client', true) ?: (function_exists('get_field') ? get_field('project_client') : '');
					$year         = get_post_meta($project_id, 'project_year', true) ?: '2026';

					$categories = get_the_terms($project_id, 'portfolio_category');
					$tags       = get_the_terms($project_id, 'portfolio_tag');
					$bg_color   = $card_colors[$d_index % count($card_colors)];
					$d_index++;
				?>
					<article class="grid grid-cols-12 gap-14 items-center group">
						
						<!-- Left Column: High-Impact Visual Card -->
						<div class="col-span-7">
							<a href="<?= !empty($url) ? esc_url($url) : get_permalink(); ?>" target="<?= !empty($url) ? '_blank' : '_self'; ?>" rel="noopener" class="block relative w-full aspect-[16/10] <?= $bg_color; ?> rounded-3xl p-10 overflow-hidden shadow-md group-hover:shadow-2xl transition-all duration-300">
								
								<!-- Top-right circular arrow button -->
								<div class="absolute top-6 right-6 w-10 h-10 rounded-full bg-white/95 text-[#111111] flex items-center justify-center font-bold shadow-md transform group-hover:scale-110 group-hover:bg-white transition-all z-20">
									<i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
								</div>

								<!-- Mockup / Screenshot inside canvas -->
								<div class="w-full h-full rounded-xl overflow-hidden shadow-2xl border border-white/20 transform group-hover:-translate-y-1 transition-transform duration-500 bg-white/10 backdrop-blur-xs flex items-center justify-center">
									<?php if (has_post_thumbnail()): ?>
										<?php the_post_thumbnail('large', [
											'class' => 'w-full h-full object-cover object-top'
										]); ?>
									<?php else: ?>
										<div class="text-white font-display font-black text-2xl uppercase tracking-wider">
											<?php the_title(); ?>
										</div>
									<?php endif; ?>
								</div>
							</a>
						</div>

						<!-- Right Column: Editorial Information & Metadata -->
						<div class="col-span-5 flex flex-col justify-center space-y-4">
							
							<!-- 1. Category ABOVE the title -->
							<?php if (!empty($categories) && !is_wp_error($categories)): ?>
								<div class="text-xs font-mono font-semibold uppercase tracking-widest text-[#737373] dark:text-[#999999]">
									<?= esc_html($categories[0]->name); ?>
								</div>
							<?php endif; ?>

							<!-- 2. Title -->
							<h3 class="font-display font-black text-4xl text-[#111111] dark:text-white tracking-tight group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] transition-colors leading-tight">
								<a href="<?= !empty($url) ? esc_url($url) : get_permalink(); ?>" target="<?= !empty($url) ? '_blank' : '_self'; ?>" rel="noopener">
									<?php the_title(); ?>
								</a>
							</h3>

							<!-- 3. Tags as BOXES / BADGES below the title -->
							<?php if (!empty($tags) && !is_wp_error($tags)): ?>
								<div class="flex flex-wrap gap-2 pt-1">
									<?php foreach ($tags as $tag): ?>
										<span class="px-2.5 py-1 text-xs font-mono font-medium rounded bg-[#e8e8e2] dark:bg-[#1c1c24] text-[#333333] dark:text-[#d1d5db] border border-[#d8d8d0] dark:border-[#2e2e38]">
											<?= esc_html($tag->name); ?>
										</span>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>

							<!-- 4. Description -->
							<?php if (!empty($description)): ?>
								<p class="text-base text-[#555555] dark:text-[#a1a1aa] leading-relaxed pt-2 font-light">
									<?= esc_html($description); ?>
								</p>
							<?php endif; ?>

							<!-- 5. Reto & Resultado highlights -->
							<?php if (!empty($challenge) || !empty($result)): ?>
								<div class="grid grid-cols-2 gap-3 pt-3">
									<?php if (!empty($challenge)): ?>
										<div class="p-3 rounded-lg bg-[#eaeae4] dark:bg-[#14141a] border border-[#dcdcd4] dark:border-[#282834]">
											<div class="text-[11px] font-mono font-bold uppercase text-[#eb3a24] mb-0.5">El Reto</div>
											<p class="text-xs text-[#444444] dark:text-[#b4b4be] leading-snug line-clamp-2"><?= esc_html($challenge); ?></p>
										</div>
									<?php endif; ?>
									<?php if (!empty($result)): ?>
										<div class="p-3 rounded-lg bg-[#eaeae4] dark:bg-[#14141a] border border-[#dcdcd4] dark:border-[#282834]">
											<div class="text-[11px] font-mono font-bold uppercase text-[#163be6] dark:text-cyan-400 mb-0.5">El Resultado</div>
											<p class="text-xs text-[#444444] dark:text-[#b4b4be] leading-snug line-clamp-2"><?= esc_html($result); ?></p>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>

							<!-- 6. Divider & Action Link -->
							<div class="pt-4 border-t border-[#e2e2dc] dark:border-[#222222] flex items-center justify-between">
								<span class="text-xs font-mono text-[#737373] dark:text-[#888888]">
									<?= !empty($client) ? esc_html($client) . ' • ' : ''; ?><?= esc_html($year); ?>
								</span>
								<a href="<?= !empty($url) ? esc_url($url) : get_permalink(); ?>" target="<?= !empty($url) ? '_blank' : '_self'; ?>" rel="noopener" class="text-xs font-mono font-bold uppercase tracking-wider text-[#111111] dark:text-white hover:text-[#eb3a24] dark:hover:text-[#eb3a24] inline-flex items-center gap-1.5 transition-colors">
									<span>Ver Proyecto</span>
									<i class="fa-solid fa-arrow-right text-[10px]"></i>
								</a>
							</div>

						</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>

		<?php endif; ?>

	</div>
</section>
