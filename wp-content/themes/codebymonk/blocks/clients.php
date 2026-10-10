<?php
/**
 * Block: Clients & Brands Marquee Slider - +20 Years Experience & 50+ Sites
 */
$block_attrs = cbm_block_attributes($block, 'py-14 sm:py-20 md:py-24 bg-[#eaeae4] dark:bg-[#0e0e12] text-[#111111] dark:text-[#f3f4f6] border-t border-[#dcdcd4] dark:border-[#22222a] overflow-hidden transition-colors duration-300');

$logo_base = get_template_directory_uri() . '/assets/img/clients/';

$clients_row_1 = [
	[
		'name'     => 'WARNER BROS.',
		'sub'      => 'Entertainment & Media',
		'svg'      => $logo_base . 'warner-bros.svg',
		'icon'     => 'fa-solid fa-shield-halved',
		'tag'      => 'Global Studio',
		'accent'   => 'hover:border-[#163be6] hover:text-[#163be6]'
	],
	[
		'name'     => 'DISNEY',
		'sub'      => 'Global Entertainment',
		'svg'      => $logo_base . 'disney.svg',
		'icon'     => 'fa-solid fa-wand-magic-sparkles',
		'tag'      => 'Media & Theme',
		'accent'   => 'hover:border-[#eb3a24] hover:text-[#eb3a24]'
	],
	[
		'name'     => 'RIOT GAMES',
		'sub'      => 'Gaming & Esports',
		'svg'      => $logo_base . 'riot-games.svg',
		'icon'     => 'fa-solid fa-hand-fist',
		'tag'      => 'Tech & Gaming',
		'accent'   => 'hover:border-[#eb3a24] hover:text-[#eb3a24]'
	],
	[
		'name'     => 'MORTAL KOMBAT',
		'sub'      => 'NetherRealm / WB Games',
		'svg'      => $logo_base . 'mortal-kombat.svg',
		'icon'     => 'fa-solid fa-dragon',
		'tag'      => 'Videogames',
		'accent'   => 'hover:border-amber-500 hover:text-amber-500'
	],
	[
		'name'     => 'INJUSTICE',
		'sub'      => 'Gods Among Us / DC',
		'svg'      => $logo_base . 'injustice.svg',
		'icon'     => 'fa-solid fa-bolt-lightning',
		'tag'      => 'WB Games',
		'accent'   => 'hover:border-cyan-500 hover:text-cyan-500'
	],
	[
		'name'     => 'LIVERPOOL',
		'sub'      => 'Retail & Department Stores',
		'svg'      => $logo_base . 'liverpool.svg',
		'icon'     => 'fa-solid fa-bag-shopping',
		'tag'      => 'E-Commerce',
		'accent'   => 'hover:border-pink-500 hover:text-pink-500'
	],
	[
		'name'     => 'SUNGLASS HUT',
		'sub'      => 'Luxottica Group',
		'svg'      => $logo_base . 'sunglass-hut.svg',
		'icon'     => 'fa-solid fa-glasses',
		'tag'      => 'Retail Global',
		'accent'   => 'hover:border-[#111111] dark:hover:border-white'
	],
	[
		'name'     => 'COLGATE',
		'sub'      => 'Consumer Goods & Health',
		'svg'      => $logo_base . 'colgate.svg',
		'icon'     => 'fa-solid fa-sparkles',
		'tag'      => 'Global Brand',
		'accent'   => 'hover:border-[#eb3a24] hover:text-[#eb3a24]'
	],
	[
		'name'     => 'LLORENTE & CUENCA',
		'sub'      => 'LLYC Strategic Communications',
		'svg'      => $logo_base . 'llyc.svg',
		'icon'     => 'fa-solid fa-chart-line',
		'tag'      => 'Corporate B2B',
		'accent'   => 'hover:border-[#163be6] hover:text-[#163be6]'
	],
	[
		'name'     => 'EGS MÉXICO',
		'sub'      => 'Electronic Game Show',
		'svg'      => $logo_base . 'egs-mexico.svg',
		'icon'     => 'fa-solid fa-gamepad',
		'tag'      => 'Gaming Expo',
		'accent'   => 'hover:border-purple-500 hover:text-purple-500'
	],
];

$clients_row_2 = [
	[
		'name'     => 'TELMEX',
		'sub'      => 'América Móvil Telecom',
		'svg'      => $logo_base . 'telmex.svg',
		'icon'     => 'fa-solid fa-tower-cell',
		'tag'      => 'Telecom',
		'accent'   => 'hover:border-[#163be6] hover:text-[#163be6]'
	],
	[
		'name'     => 'MOVISTAR',
		'sub'      => 'Telefónica Global',
		'svg'      => $logo_base . 'movistar.svg',
		'icon'     => 'fa-solid fa-mobile-screen-button',
		'tag'      => 'Telecom B2C',
		'accent'   => 'hover:border-emerald-500 hover:text-emerald-500'
	],
	[
		'name'     => 'PEMEX',
		'sub'      => 'Energía & Petróleos',
		'svg'      => $logo_base . 'pemex.svg',
		'icon'     => 'fa-solid fa-droplet',
		'tag'      => 'Energy & Infra',
		'accent'   => 'hover:border-emerald-600 hover:text-emerald-600'
	],
	[
		'name'     => 'GAS NATURAL FENOSA',
		'sub'      => 'Naturgy Energy Group',
		'svg'      => $logo_base . 'gas-natural-fenosa.svg',
		'icon'     => 'fa-solid fa-fire-flame-simple',
		'tag'      => 'Utilities',
		'accent'   => 'hover:border-amber-600 hover:text-amber-600'
	],
	[
		'name'     => 'LA MOLE COMIC CON',
		'sub'      => 'Pop Culture & Comic Expo',
		'svg'      => $logo_base . 'la-mole.svg',
		'icon'     => 'fa-solid fa-mask',
		'tag'      => 'Events & Fest',
		'accent'   => 'hover:border-[#eb3a24] hover:text-[#eb3a24]'
	],
	[
		'name'     => '4E MÉXICO',
		'sub'      => 'Higiene & Laboratorios',
		'svg'      => $logo_base . '4e-mexico.svg',
		'icon'     => 'fa-solid fa-cubes',
		'tag'      => 'Pharma & CPG',
		'accent'   => 'hover:border-cyan-500 hover:text-cyan-500'
	],
	[
		'name'     => 'NATHALIE LES BÂCHES',
		'sub'      => 'E-Commerce & Manufacturing',
		'svg'      => $logo_base . 'nathalie-les-baches.svg',
		'icon'     => 'fa-solid fa-shield',
		'tag'      => 'Francia / Digital',
		'accent'   => 'hover:border-[#163be6] hover:text-[#163be6]'
	],
	[
		'name'     => 'TUNAS CRAFT',
		'sub'      => 'Cervecería Artesanal',
		'svg'      => $logo_base . 'tunas-craft.svg',
		'icon'     => 'fa-solid fa-beer-mug-empty',
		'tag'      => 'Food & Beverage',
		'accent'   => 'hover:border-amber-500 hover:text-amber-500'
	],
	[
		'name'     => 'TIERRA DE IDEAS',
		'sub'      => 'Agencia Creativa & Contenido',
		'svg'      => $logo_base . 'tierra-de-ideas.svg',
		'icon'     => 'fa-solid fa-lightbulb',
		'tag'      => 'Creative Agency',
		'accent'   => 'hover:border-yellow-500 hover:text-yellow-500'
	],
	[
		'name'     => 'HUSL DIGITAL',
		'sub'      => 'Digital Studio & Marketing',
		'svg'      => $logo_base . 'husl-digital.svg',
		'icon'     => 'fa-solid fa-bolt',
		'tag'      => 'Tech Studio',
		'accent'   => 'hover:border-indigo-500 hover:text-indigo-500'
	],
];
?>

<section id="clientes" <?= $block_attrs; ?>>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 sm:mb-14">
		
		<!-- Section Header & Big Metric Badges -->
		<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 pb-6 border-b border-[#d8d8d0] dark:border-[#22222a]">
			<div>
				<div class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#737373] dark:text-[#888888] mb-2 sm:mb-3">
					// MARCAS & CLIENTES
				</div>
				<h2 class="font-display font-black text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-[#111111] dark:text-white uppercase tracking-tight leading-tight">
					CONFIANZA DE <span class="font-serif-italic font-normal lowercase tracking-normal text-[#111111] dark:text-[#e0e0e0] text-3xl sm:text-5xl md:text-6xl lg:text-7xl">alto calibre.</span>
				</h2>
			</div>

			<!-- Stats Pills -->
			<div class="flex flex-wrap items-center gap-3 sm:gap-4 font-mono">
				<div class="px-4 py-2.5 rounded-2xl bg-white/90 dark:bg-[#15151c] border border-[#d8d8d0] dark:border-[#262632] shadow-xs">
					<div class="text-xl sm:text-2xl font-black font-display text-[#eb3a24]">+20</div>
					<div class="text-[10px] uppercase tracking-wider text-[#737373] dark:text-[#999999]">Años de Experiencia</div>
				</div>
				<div class="px-4 py-2.5 rounded-2xl bg-white/90 dark:bg-[#15151c] border border-[#d8d8d0] dark:border-[#262632] shadow-xs">
					<div class="text-xl sm:text-2xl font-black font-display text-[#163be6] dark:text-cyan-400">+50</div>
					<div class="text-[10px] uppercase tracking-wider text-[#737373] dark:text-[#999999]">Sitios Desarrollados</div>
				</div>
				<div class="px-4 py-2.5 rounded-2xl bg-[#111111] dark:bg-white text-white dark:text-[#111111] border border-transparent shadow-xs">
					<div class="text-xl sm:text-2xl font-black font-display text-white dark:text-[#111111]">100%</div>
					<div class="text-[10px] uppercase tracking-wider text-[#a0a0a0] dark:text-[#555555]">Código a Medida</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Infinite Ticker Track 1 (Left Scrolling) -->
	<div class="relative w-full overflow-hidden mb-4 sm:mb-6">
		<div class="animate-marquee flex items-center gap-4 sm:gap-6 whitespace-nowrap will-change-transform">
			<?php for ($r = 0; $r < 2; $r++): ?>
				<?php foreach ($clients_row_1 as $c): ?>
					<div class="flex-shrink-0 inline-flex items-center gap-4 px-6 py-4 rounded-2xl bg-white/95 dark:bg-[#141418] border border-[#dcdcd4] dark:border-[#24242e] shadow-xs group hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300 <?= $c['accent']; ?>">
						<!-- Logo Vector Icon Container -->
						<div class="w-10 h-10 rounded-xl bg-[#f0f0ea] dark:bg-[#1c1c24] flex items-center justify-center p-2 text-[#111111] dark:text-white group-hover:scale-110 transition-transform">
							<img src="<?= esc_url($c['svg']); ?>" alt="<?= esc_attr($c['name']); ?>" class="w-full h-full object-contain dark:invert transition-all" />
						</div>
						<div class="flex flex-col">
							<span class="font-display font-black text-sm sm:text-base tracking-tight text-[#111111] dark:text-white group-hover:text-inherit uppercase">
								<?= esc_html($c['name']); ?>
							</span>
							<span class="text-[10px] font-mono text-[#737373] dark:text-[#888888]">
								<?= esc_html($c['sub']); ?>
							</span>
						</div>
						<span class="hidden sm:inline-block ml-2 px-2 py-0.5 rounded text-[9px] font-mono uppercase bg-[#eaeae4] dark:bg-[#202028] text-[#555555] dark:text-[#a0a0a0]">
							<?= esc_html($c['tag']); ?>
						</span>
					</div>
				<?php endforeach; ?>
			<?php endfor; ?>
		</div>
	</div>

	<!-- Infinite Ticker Track 2 (Right / Reverse Scrolling) -->
	<div class="relative w-full overflow-hidden">
		<div class="animate-marquee-reverse flex items-center gap-4 sm:gap-6 whitespace-nowrap will-change-transform">
			<?php for ($r = 0; $r < 2; $r++): ?>
				<?php foreach ($clients_row_2 as $c): ?>
					<div class="flex-shrink-0 inline-flex items-center gap-4 px-6 py-4 rounded-2xl bg-white/95 dark:bg-[#141418] border border-[#dcdcd4] dark:border-[#24242e] shadow-xs group hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300 <?= $c['accent']; ?>">
						<!-- Logo Vector Icon Container -->
						<div class="w-10 h-10 rounded-xl bg-[#f0f0ea] dark:bg-[#1c1c24] flex items-center justify-center p-2 text-[#111111] dark:text-white group-hover:scale-110 transition-transform">
							<img src="<?= esc_url($c['svg']); ?>" alt="<?= esc_attr($c['name']); ?>" class="w-full h-full object-contain dark:invert transition-all" />
						</div>
						<div class="flex flex-col">
							<span class="font-display font-black text-sm sm:text-base tracking-tight text-[#111111] dark:text-white group-hover:text-inherit uppercase">
								<?= esc_html($c['name']); ?>
							</span>
							<span class="text-[10px] font-mono text-[#737373] dark:text-[#888888]">
								<?= esc_html($c['sub']); ?>
							</span>
						</div>
						<span class="hidden sm:inline-block ml-2 px-2 py-0.5 rounded text-[9px] font-mono uppercase bg-[#eaeae4] dark:bg-[#202028] text-[#555555] dark:text-[#a0a0a0]">
							<?= esc_html($c['tag']); ?>
						</span>
					</div>
				<?php endforeach; ?>
			<?php endfor; ?>
		</div>
	</div>

</section>
