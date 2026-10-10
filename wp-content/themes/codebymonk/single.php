<?php
/**
 * Single Post Template (Blog Articles)
 */
get_header();

while (have_posts()) : the_post();
	$categories = get_the_category();
	$tags       = get_the_tags();
?>

<article class="py-14 sm:py-20 md:py-28 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] min-h-screen transition-colors duration-300">
	<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Back link -->
		<div class="mb-8">
			<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/articulos/')); ?>" class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] inline-flex items-center gap-2 hover:text-[#eb3a24] transition-colors">
				<i class="fa-solid fa-arrow-left text-[9px]"></i>
				<span>Volver a los Artículos</span>
			</a>
		</div>

		<!-- Category -->
		<?php if (!empty($categories)): ?>
			<div class="mb-3">
				<span class="inline-block px-3.5 py-1 rounded-full bg-[#eb3a24]/10 border border-[#eb3a24]/30 text-[#eb3a24] text-xs font-mono font-bold uppercase tracking-wider">
					<?= esc_html($categories[0]->name); ?>
				</span>
			</div>
		<?php endif; ?>

		<!-- Title -->
		<h1 class="font-display font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-[#111111] dark:text-white uppercase tracking-tight leading-[0.95] mb-6">
			<?php the_title(); ?>
		</h1>

		<!-- Meta info & Tags -->
		<div class="flex flex-wrap items-center justify-between gap-4 pb-6 mb-8 border-b border-[#e2e2dc] dark:border-[#222222] text-xs font-mono text-[#737373] dark:text-[#888888]">
			<div class="flex items-center gap-2">
				<i class="fa-regular fa-calendar text-xs"></i>
				<span>Publicado el <?= get_the_date('j \d\e F, Y'); ?></span>
			</div>
			
			<?php if (!empty($tags)): ?>
				<div class="flex flex-wrap gap-1.5">
					<?php foreach ($tags as $tag): ?>
						<span class="px-2.5 py-0.5 text-[10px] font-mono rounded bg-[#e8e8e2] dark:bg-[#1a1a20] text-[#333333] dark:text-[#d1d5db]">
							<?= esc_html($tag->name); ?>
						</span>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>

		<!-- Featured Image -->
		<?php if (has_post_thumbnail()): ?>
			<div class="rounded-3xl overflow-hidden border border-[#e2e2dc] dark:border-[#26262e] shadow-2xl mb-12 bg-white dark:bg-[#141418]">
				<?php the_post_thumbnail('full', ['class' => 'w-full h-auto object-cover']); ?>
			</div>
		<?php endif; ?>

		<!-- Article Content -->
		<div class="prose prose-lg dark:prose-invert max-w-none text-[#333333] dark:text-[#c4c4cc] leading-relaxed space-y-6 font-light">
			<?php the_content(); ?>
		</div>

		<!-- Bottom Share / CTA -->
		<div class="mt-16 pt-8 border-t border-[#e2e2dc] dark:border-[#222222] flex flex-col sm:flex-row items-center justify-between gap-6">
			<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/articulos/')); ?>" class="inline-flex items-center gap-2 text-xs font-mono font-bold uppercase tracking-wider text-[#111111] dark:text-white hover:text-[#eb3a24] transition-colors">
				<i class="fa-solid fa-arrow-left text-[10px]"></i>
				<span>Ver todos los artículos</span>
			</a>

			<a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#111111] dark:bg-white text-white dark:text-[#111111] hover:bg-[#eb3a24] dark:hover:bg-[#eb3a24] dark:hover:text-white text-xs font-mono font-bold uppercase tracking-wider shadow-md transition-all">
				<span>Iniciar Proyecto</span>
				<i class="fa-solid fa-arrow-right text-[10px]"></i>
			</a>
		</div>

	</div>
</article>

<?php
// Related Articles Query (Exclude current post)
$current_id   = get_the_ID();
$cat_ids      = !empty($categories) ? wp_list_pluck($categories, 'term_id') : [];

$related_args = [
	'post_type'      => 'post',
	'posts_per_page' => 6,
	'post_status'    => 'publish',
	'post__not_in'   => [$current_id],
	'orderby'        => 'rand',
];

if (!empty($cat_ids)) {
	$related_args['category__in'] = $cat_ids;
}

$related_query = new WP_Query($related_args);

// Fallback if no category matches
if (!$related_query->have_posts()) {
	unset($related_args['category__in']);
	$related_args['orderby'] = 'date';
	$related_query = new WP_Query($related_args);
}
?>

<?php if ($related_query->have_posts()): ?>
	<section class="py-16 md:py-24 bg-[#eaeae4] dark:bg-[#0e0e12] text-[#111111] dark:text-[#f3f4f6] border-t border-[#dcdcd4] dark:border-[#22222a] transition-colors duration-300 overflow-hidden">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			
			<!-- Section Header -->
			<div class="flex flex-col md:flex-row md:items-end justify-between mb-8 sm:mb-12 pb-4 sm:pb-6 border-b border-[#d8d8d0] dark:border-[#24242e] gap-4 sm:gap-6">
				<div>
					<div class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] mb-2">
						// LECTURAS SUGERIDAS
					</div>
					<h2 class="font-display font-black text-2xl sm:text-4xl md:text-5xl text-[#111111] dark:text-white uppercase tracking-tight leading-tight">
						ARTÍCULOS <span class="font-serif-italic font-normal lowercase tracking-normal text-[#111111] dark:text-[#e0e0e0] text-3xl sm:text-5xl md:text-6xl">relacionados.</span>
					</h2>
				</div>

				<div class="flex items-center gap-4">
					<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/articulos/')); ?>" class="whitespace-nowrap text-[11px] sm:text-xs font-mono font-bold uppercase tracking-wider text-[#555555] dark:text-[#999999] hover:text-[#eb3a24] dark:hover:text-[#eb3a24] transition-colors">
						<span>Ver todos</span>
					</a>

					<div class="h-5 w-px bg-[#d8d8d0] dark:bg-[#282834] hidden sm:block"></div>

					<!-- Navigation Buttons -->
					<div class="flex items-center gap-2">
						<button id="related-prev" aria-label="Anterior artículo" class="w-9 h-9 rounded-full bg-[#f4f4f0] dark:bg-[#1a1a20] border border-[#d8d8d0] dark:border-[#33333e] flex items-center justify-center text-xs text-[#111111] dark:text-white hover:bg-[#e0e0d8] dark:hover:bg-[#282832] active:scale-95 transition-all shadow-xs">
							<i class="fa-solid fa-arrow-left"></i>
						</button>
						<button id="related-next" aria-label="Siguiente artículo" class="w-9 h-9 rounded-full bg-[#111111] dark:bg-white text-white dark:text-[#111111] hover:bg-[#eb3a24] dark:hover:bg-[#eb3a24] dark:hover:text-white flex items-center justify-center text-xs active:scale-95 transition-all shadow-sm">
							<i class="fa-solid fa-arrow-right"></i>
						</button>
					</div>
				</div>
			</div>

			<!-- Horizontal Related Articles Slider -->
			<div id="related-articles-slider" class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth gap-6 pb-6 -mx-4 px-4 scrollbar-none">
				<?php while ($related_query->have_posts()): $related_query->the_post();
					$rel_cats = get_the_category();
				?>
					<article class="w-[85vw] sm:w-[360px] md:w-[400px] flex-shrink-0 snap-center rounded-3xl bg-white/90 dark:bg-[#141418] border border-[#dcdcd4] dark:border-[#24242e] flex flex-col justify-between shadow-xs hover:shadow-xl transition-all duration-300 group overflow-hidden">
						<div>
							<!-- Thumbnail -->
							<?php if (has_post_thumbnail()): ?>
								<a href="<?php the_permalink(); ?>" class="block w-full aspect-[16/10] overflow-hidden bg-[#e5e5dc] dark:bg-[#1f1f26] relative">
									<?php the_post_thumbnail('medium_large', [
										'class' => 'w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-500 ease-out'
									]); ?>
									<div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
								</a>
							<?php endif; ?>

							<div class="p-5 sm:p-6">
								<!-- Meta Header -->
								<div class="flex items-center justify-between text-[11px] font-mono text-[#737373] dark:text-[#888888] mb-2.5 pb-2 border-b border-[#ecece6] dark:border-[#22222a]">
									<span><?= get_the_date('d M, Y'); ?></span>
									<?php if (!empty($rel_cats)): ?>
										<span class="text-[#eb3a24] uppercase font-bold"><?= esc_html($rel_cats[0]->name); ?></span>
									<?php endif; ?>
								</div>

								<!-- Title -->
								<h3 class="font-display font-bold text-lg text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] transition-colors leading-snug mb-2.5">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>

								<!-- Excerpt -->
								<p class="text-xs text-[#555555] dark:text-[#9ca3af] leading-relaxed line-clamp-3 font-light">
									<?= get_the_excerpt(); ?>
								</p>
							</div>
						</div>

						<!-- Action Link -->
						<div class="p-5 sm:p-6 pt-0">
							<div class="pt-3 border-t border-[#ecece6] dark:border-[#22222a]">
								<a href="<?php the_permalink(); ?>" class="text-xs font-mono font-bold uppercase tracking-wider text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] inline-flex items-center gap-1.5 transition-colors">
									<span>Leer Artículo</span>
									<i class="fa-solid fa-arrow-right text-[10px]"></i>
								</a>
							</div>
						</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>

		</div>
	</section>
<?php endif; ?>


<?php
endwhile;
get_footer();
