<?php
/**
 * Generic Archive Template
 */
get_header();

$archive_title = get_the_archive_title();
$archive_desc  = get_the_archive_description();
?>

<div class="py-16 md:py-24 bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] min-h-screen transition-colors duration-300">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Archive Header -->
		<div class="max-w-3xl mb-12 sm:mb-16">
			<a href="<?php echo esc_url(home_url('/#taller')); ?>" class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] inline-flex items-center gap-1.5 mb-3 hover:text-[#eb3a24] transition-colors">
				<i class="fa-solid fa-arrow-left text-[9px]"></i>
				<span>Volver al Taller</span>
			</a>
			<h1 class="font-display font-black text-3xl sm:text-4xl md:text-5xl text-[#111111] dark:text-white uppercase tracking-tight leading-tight mb-3">
				<?= wp_kses_post($archive_title); ?>
			</h1>
			<?php if (!empty($archive_desc)): ?>
				<p class="text-sm sm:text-base text-[#555555] dark:text-[#a1a1aa] leading-relaxed font-light">
					<?= wp_kses_post($archive_desc); ?>
				</p>
			<?php endif; ?>
		</div>

		<!-- Articles Grid -->
		<?php if (have_posts()): ?>
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
				<?php while (have_posts()): the_post();
					$cats = get_the_category();
					$tags = get_the_tags();
				?>
					<article class="flex flex-col justify-between p-6 sm:p-8 rounded-2xl bg-white/80 dark:bg-[#141418] border border-[#e2e2dc] dark:border-[#26262e] hover:border-[#111111] dark:hover:border-[#44444e] transition-all duration-300 group shadow-xs hover:shadow-lg">
						<div>
							<!-- Meta Header -->
							<div class="flex items-center justify-between text-xs font-mono text-[#737373] dark:text-[#888888] mb-5 pb-3 border-b border-[#ecece6] dark:border-[#22222a]">
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
							<p class="text-xs sm:text-sm text-[#555555] dark:text-[#9ca3af] leading-relaxed line-clamp-3 mb-6 font-light">
								<?= get_the_excerpt(); ?>
							</p>
						</div>

						<!-- Bottom Link -->
						<div class="pt-4 border-t border-[#ecece6] dark:border-[#22222a]">
							<a href="<?php the_permalink(); ?>" class="text-xs font-mono font-bold uppercase tracking-wider text-[#111111] dark:text-white group-hover:text-[#eb3a24] dark:group-hover:text-[#eb3a24] inline-flex items-center gap-1.5 transition-colors">
								<span>Leer Artículo</span>
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
					'class'     => 'pagination flex gap-2'
				]);
				?>
			</div>
		<?php else: ?>
			<div class="text-center py-20 bg-white dark:bg-[#141418] rounded-2xl border border-[#e2e2dc] dark:border-[#222222]">
				<p class="text-sm font-mono text-[#737373]">No hay publicaciones en esta categoría todavía.</p>
			</div>
		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
