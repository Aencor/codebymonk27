<?php
/**
 * Blog Posts Index (Home / Artículos)
 */
get_header();

$categories = get_categories(['hide_empty' => true]);
?>

<div class="py-16 md:py-24 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] min-h-screen transition-colors duration-300">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Archive Header -->
		<div class="max-w-3xl mb-12 sm:mb-16">
			<span class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] block mb-2">
				// TALLER DIGITAL & APRENDIZAJES
			</span>
			<h1 class="font-display font-black text-4xl sm:text-5xl md:text-6xl text-[#111111] dark:text-white uppercase tracking-tight leading-tight mb-4">
				TODOS LOS <span class="font-serif-italic font-normal lowercase tracking-normal text-[#111111] dark:text-[#e0e0e0] text-5xl sm:text-6xl md:text-7xl">artículos.</span>
			</h1>
			<p class="text-sm sm:text-base text-[#555555] dark:text-[#a1a1aa] leading-relaxed font-light">
				Reflexiones, guías técnicas y aprendizajes sobre diseño de producto, desarrollo de temas modulares en WordPress, Tailwind CSS y arquitectura frontend.
			</p>
		</div>

		<!-- Category Filter Pills -->
		<?php if (!empty($categories)): ?>
			<div class="flex flex-wrap gap-2 sm:gap-3 mb-12 pb-6 border-b border-[#e2e2dc] dark:border-[#222222]">
				<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/articulos/')); ?>" class="px-3.5 py-1.5 rounded-full bg-[#111111] dark:bg-white text-white dark:text-[#111111] text-xs font-mono font-bold uppercase tracking-wider">
					Todos
				</a>
				<?php foreach ($categories as $cat): ?>
					<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="px-3.5 py-1.5 rounded-full bg-[#e8e8e2] dark:bg-[#1a1a20] text-[#555555] dark:text-[#d1d5db] hover:bg-[#111111] hover:text-white dark:hover:bg-white dark:hover:text-[#111111] text-xs font-mono font-medium uppercase tracking-wider transition-colors border border-[#dcdcd4] dark:border-[#2a2a34]">
						<?= esc_html($cat->name); ?> (<?= esc_html($cat->count); ?>)
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<!-- Articles Grid -->
		<?php if (have_posts()): ?>
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
				<?php while (have_posts()): the_post();
					$cats = get_the_category();
					$tags = get_the_tags();
				?>
					<article class="flex flex-col justify-between rounded-3xl bg-white/90 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] hover:border-[#111111] dark:hover:border-[#44444e] transition-all duration-300 group shadow-xs hover:shadow-xl overflow-hidden">
						<div>
							<!-- Featured Image -->
							<?php if (has_post_thumbnail()): ?>
								<a href="<?php the_permalink(); ?>" class="block w-full aspect-[16/10] overflow-hidden bg-[#e5e5dc] dark:bg-[#1f1f26] relative">
									<?php the_post_thumbnail('medium_large', [
										'class' => 'w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-500 ease-out'
									]); ?>
									<div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
								</a>
							<?php endif; ?>

							<div class="p-6 sm:p-8">
								<!-- Meta Header -->
								<div class="flex items-center justify-between text-xs font-mono text-[#737373] dark:text-[#888888] mb-4 pb-3 border-b border-[#ecece6] dark:border-[#22222a]">
									<span><?= get_the_date('d M, Y'); ?></span>
									<?php if (!empty($cats)): ?>
										<span class="text-[#eb3a24] uppercase font-bold"><?= esc_html($cats[0]->name); ?></span>
									<?php endif; ?>
								</div>

								<!-- Title -->
								<h2 class="font-display font-bold text-xl sm:text-2xl text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] transition-colors leading-snug mb-3">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h2>

								<!-- Tags -->
								<?php if (!empty($tags)): ?>
									<div class="flex flex-wrap gap-1.5 mb-4">
										<?php foreach ($tags as $tg): ?>
											<span class="px-2 py-0.5 text-[10px] font-mono rounded bg-[#f0f0eb] dark:bg-[#1c1c24] text-[#444444] dark:text-[#a1a1aa]">
												<?= esc_html($tg->name); ?>
											</span>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>

								<!-- Excerpt -->
								<p class="text-xs sm:text-sm text-[#555555] dark:text-[#9ca3af] leading-relaxed line-clamp-3 font-light">
									<?= get_the_excerpt(); ?>
								</p>
							</div>
						</div>

						<!-- Bottom Link -->
						<div class="p-6 sm:p-8 pt-0">
							<div class="pt-4 border-t border-[#ecece6] dark:border-[#22222a]">
								<a href="<?php the_permalink(); ?>" class="text-xs font-mono font-bold uppercase tracking-wider text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] inline-flex items-center gap-1.5 transition-colors">
									<span>Leer Artículo</span>
									<i class="fa-solid fa-arrow-right text-[10px]"></i>
								</a>
							</div>
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
					'class'     => 'pagination flex gap-2'
				]);
				?>
			</div>
		<?php else: ?>
			<div class="text-center py-20 bg-white dark:bg-[#141418] rounded-2xl border border-[#e2e2dc] dark:border-[#222222]">
				<p class="text-sm font-mono text-[#737373]">No hay artículos publicados todavía.</p>
			</div>
		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
