<?php
/**
 * Block: Services - Dark Section with Responsive Typography
 */
$block_attrs = cbm_block_attributes($block, 'py-14 sm:py-20 md:py-28 bg-[#0c0c0c] text-white relative overflow-hidden');

$services = [
	[
		'num'         => '01',
		'title'       => 'Estrategia & UX',
		'description' => 'Definición de objetivos, investigación de usuarios y estructura de contenido para asegurar que cada decisión tenga un propósito.',
		'items'       => ['Arquitectura de información', 'Wireframing & Flujos', 'Auditoría de Conversión', 'Investigación de usuarios']
	],
	[
		'num'         => '02',
		'title'       => 'Diseño Digital',
		'description' => 'Sistemas de diseño modernos, interfaces atractivas y dirección de arte orientada a construir identidades de marca memorables.',
		'items'       => ['Diseño UI / Interfaces', 'Sistemas de diseño (Figma)', 'Prototipos interactivos', 'Dirección de arte digital']
	],
	[
		'num'         => '03',
		'title'       => 'Desarrollo Web',
		'description' => 'Desarrollo en WordPress con bloques modulares Gutenberg, frontend moderno con Tailwind CSS y optimización de velocidad de clase mundial.',
		'items'       => ['Temas WordPress a Medida', 'Bloques Gutenberg & ACF', 'Tailwind CSS v4 & GSAP', 'Core Web Vitals & SEO']
	]
];
?>

<section id="servicios" <?= $block_attrs; ?>>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Section Header -->
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-8 items-start mb-12 sm:mb-16 md:mb-24 pb-8 sm:pb-12 border-b border-[#222222]">
			<div class="lg:col-span-3 text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] pt-1 sm:pt-2">
				// SERVICIOS & EXPERTISE
			</div>
			<div class="lg:col-span-9">
				<h2 class="font-display font-black text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-white uppercase tracking-tight leading-tight">
					DEL PRIMER BOCETO<br>
					AL ÚLTIMO <span class="font-serif-italic font-normal lowercase tracking-normal text-[#eb3a24] text-3xl sm:text-5xl md:text-6xl lg:text-7xl">detalle.</span>
				</h2>
			</div>
		</div>

		<!-- 3-Columns Grid -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 lg:gap-12">
			<?php foreach ($services as $srv): ?>
				<div class="flex flex-col justify-between p-5 sm:p-8 rounded-2xl bg-[#141414] border border-[#222222] hover:border-[#333333] transition-colors">
					<div>
						<!-- Red Accent Dot & Number -->
						<div class="flex items-center gap-2 mb-4 sm:mb-6">
							<span class="w-2 h-2 rounded-full bg-[#eb3a24]"></span>
							<span class="font-mono text-xs text-[#737373]"><?= esc_html($srv['num']); ?></span>
						</div>

						<!-- Title -->
						<h3 class="font-display font-bold text-lg sm:text-2xl text-white mb-3 sm:mb-4">
							<?= esc_html($srv['title']); ?>
						</h3>

						<!-- Description -->
						<p class="text-xs sm:text-sm text-[#888888] leading-relaxed mb-6 sm:mb-8">
							<?= esc_html($srv['description']); ?>
						</p>
					</div>

					<!-- Deliverables List -->
					<div class="pt-4 sm:pt-6 border-t border-[#222222]">
						<ul class="space-y-2 text-[11px] sm:text-xs font-mono text-[#aaaaaa]">
							<?php foreach ($srv['items'] as $item): ?>
								<li class="flex items-center gap-2">
									<span class="text-[#eb3a24]">•</span>
									<span><?= esc_html($item); ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
