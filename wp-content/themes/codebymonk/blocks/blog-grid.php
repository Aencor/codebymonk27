<?php
/**
 * Block: Blog Grid - "DESDE EL taller." with Featured Images & High-Impact CTA Button
 */
$block_attrs = cbm_block_attributes($block, 'py-14 sm:py-20 md:py-28 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] border-t border-[#e2e2dc] dark:border-[#222222] transition-colors duration-300');

$posts_query = new WP_Query([
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC'
]);

$blog_archive_url = get_permalink(get_option('page_for_posts')) ?: home_url('/articulos/');
?>

<section id="taller" <?= $block_attrs; ?>>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Section Header -->
		<div class="flex flex-col md:flex-row md:items-end justify-between mb-10 sm:mb-16 pb-4 sm:pb-6 border-b border-[#e2e2dc] dark:border-[#222222] gap-4 sm:gap-6">
			<div>
				<div class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] mb-2 sm:mb-3">
					// PUBLICACIONES & BLOG
				</div>
				<h2 class="font-display font-black text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-[#111111] dark:text-white uppercase tracking-tight leading-tight">
					DESDE EL <span class="font-serif-italic font-normal lowercase tracking-normal text-[#111111] dark:text-[#e0e0e0] text-3xl sm:text-5xl md:text-6xl lg:text-7xl">taller.</span>
				</h2>
			</div>

			<div>
				<a href="<?= esc_url($blog_archive_url); ?>" class="text-[11px] sm:text-xs font-mono font-bold uppercase tracking-wider text-[#555555] dark:text-[#999999] hover:text-[#eb3a24] dark:hover:text-[#eb3a24] inline-flex items-center gap-1.5 sm:gap-2 transition-colors">
					<span>Ver todos los artículos</span>
					<i class="fa-solid fa-arrow-right text-[10px]"></i>
				</a>
			</div>
		</div>

		<!-- 3-Column Articles Grid with Featured Images -->
		<?php if ($posts_query->have_posts()): ?>
			<div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 lg:gap-10 mb-14 sm:mb-18">
				<?php while ($posts_query->have_posts()): $posts_query->the_post();
					$categories = get_the_category();
				?>
					<article class="flex flex-col justify-between rounded-3xl bg-white/90 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] hover:border-[#111111] dark:hover:border-[#44444e] transition-all duration-300 group shadow-xs hover:shadow-xl overflow-hidden">
						<div>
							<!-- Featured Image Preview -->
							<?php if (has_post_thumbnail()): ?>
								<a href="<?php the_permalink(); ?>" class="block w-full aspect-[16/10] overflow-hidden bg-[#e5e5dc] dark:bg-[#1f1f26] relative">
									<?php the_post_thumbnail('medium_large', [
										'class' => 'w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-500 ease-out'
									]); ?>
									<div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
								</a>
							<?php endif; ?>

							<div class="p-6 sm:p-7">
								<!-- Meta Header -->
								<div class="flex items-center justify-between text-[11px] sm:text-xs font-mono text-[#737373] dark:text-[#888888] mb-3 pb-2.5 border-b border-[#ecece6] dark:border-[#22222a]">
									<span><?= get_the_date('d M, Y'); ?></span>
									<?php if (!empty($categories)): ?>
										<span class="text-[#eb3a24] uppercase font-bold"><?= esc_html($categories[0]->name); ?></span>
									<?php endif; ?>
								</div>

								<!-- Title -->
								<h3 class="font-display font-bold text-lg sm:text-xl text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] transition-colors leading-snug mb-3">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>

								<!-- Excerpt -->
								<p class="text-xs sm:text-sm text-[#555555] dark:text-[#9ca3af] leading-relaxed line-clamp-3 font-light">
									<?= get_the_excerpt(); ?>
								</p>
							</div>
						</div>

						<!-- Action Link -->
						<div class="p-6 sm:p-7 pt-0">
							<div class="pt-3 border-t border-[#ecece6] dark:border-[#22222a]">
								<a href="<?php the_permalink(); ?>" class="text-[11px] sm:text-xs font-mono font-bold uppercase tracking-wider text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] inline-flex items-center gap-1.5 transition-colors">
									<span>Leer Artículo</span>
									<i class="fa-solid fa-arrow-right text-[10px]"></i>
								</a>
							</div>
						</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>

			<!-- High-Impact Vistoso CTA Button -->
			<div class="flex items-center justify-center">
				<a href="<?= esc_url($blog_archive_url); ?>" class="relative group/btn inline-flex items-center gap-3 px-8 sm:px-10 py-4 sm:py-4.5 rounded-full bg-gradient-to-r from-[#111111] via-[#1f1f28] to-[#111111] dark:from-white dark:via-[#f0f0f5] dark:to-white text-white dark:text-[#111111] font-display font-black text-xs sm:text-sm tracking-widest uppercase shadow-xl hover:shadow-2xl hover:shadow-[#eb3a24]/20 border border-[#33333e] dark:border-white transition-all duration-300 transform hover:-translate-y-1">
					<!-- Glow ring -->
					<span class="absolute -inset-0.5 bg-gradient-to-r from-[#eb3a24] to-[#163be6] rounded-full blur-xs opacity-40 group-hover/btn:opacity-100 transition duration-300"></span>
					
					<span class="relative z-10 flex items-center gap-2.5">
						<span>Leer Todos los Artículos</span>
						<span class="w-6 h-6 rounded-full bg-[#eb3a24] text-white flex items-center justify-center text-[10px] transform group-hover/btn:translate-x-1 transition-transform">
							<i class="fa-solid fa-arrow-right"></i>
						</span>
					</span>
				</a>
			</div>
		<?php endif; ?>

	</div>
</section>
