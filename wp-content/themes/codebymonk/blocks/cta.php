<?php
/**
 * Block: CTA - Cobalt Blue "HAGÁMOSLA real." with Responsive Typography
 */
$block_attrs = cbm_block_attributes($block, 'py-16 sm:py-24 md:py-32 bg-[#163be6] text-white relative overflow-hidden');
?>

<section id="contacto" <?= $block_attrs; ?>>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
		
		<div class="max-w-4xl">
			<!-- Top Tag -->
			<div class="text-[10px] sm:text-xs font-mono font-bold uppercase tracking-widest text-cyan-300 mb-4 sm:mb-8">
				// ¿TRABAJAMOS JUNTOS?
			</div>

			<!-- Giant Headline (Responsive) -->
			<h2 class="font-display font-black text-4xl sm:text-6xl md:text-8xl lg:text-[105px] tracking-tight sm:tracking-tighter text-white uppercase leading-[0.92] sm:leading-[0.88] mb-8 sm:mb-12 select-none">
				HAGÁMOSLA<br>
				<span class="font-serif-italic font-normal lowercase tracking-tight text-[#eb3a24] text-5xl sm:text-7xl md:text-9xl lg:text-[118px] block mt-1">
					real.
				</span>
			</h2>

			<!-- Contact Action & Social Badges -->
			<div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6 pt-2 sm:pt-4">
				<a href="https://wa.me/5215619956812?text=Hola%20Kike,%20me%20gustar%C3%ADa%20cotizar%20un%20proyecto%20web" target="_blank" rel="noopener" class="inline-flex items-center gap-2.5 px-6 sm:px-8 py-3.5 sm:py-4 rounded-full bg-[#25d366] text-[#072412] hover:bg-[#20bd5a] font-display font-black text-xs sm:text-sm tracking-wide uppercase shadow-xl transition-all duration-300 transform hover:-translate-y-0.5">
					<i class="fa-brands fa-whatsapp text-base"></i>
					<span>Escribir por WhatsApp</span>
				</a>

				<a href="mailto:contacto@codebymonk.com" class="inline-flex items-center gap-2.5 px-6 sm:px-8 py-3.5 sm:py-4 rounded-full bg-white/10 hover:bg-white text-white hover:text-[#111111] border border-white/30 font-display font-bold text-xs sm:text-sm tracking-wide uppercase transition-all duration-300">
					<i class="fa-solid fa-envelope text-xs"></i>
					<span>contacto@codebymonk.com</span>
				</a>
			</div>

			<!-- Quick Social Links -->
			<div class="flex flex-wrap items-center gap-4 pt-6 text-xs font-mono text-white/80">
				<span>Redes:</span>
				<a href="https://github.com/aencor" target="_blank" rel="noopener" class="hover:text-white inline-flex items-center gap-1.5 transition-colors underline underline-offset-4">
					<i class="fa-brands fa-github"></i>
					<span>github/aencor</span>
				</a>
				<span>•</span>
				<a href="https://facebook.com/kikemonk" target="_blank" rel="noopener" class="hover:text-white inline-flex items-center gap-1.5 transition-colors underline underline-offset-4">
					<i class="fa-brands fa-facebook"></i>
					<span>fb/kikemonk</span>
				</a>
				<span>•</span>
				<a href="https://tiktok.com/@kikemonk" target="_blank" rel="noopener" class="hover:text-white inline-flex items-center gap-1.5 transition-colors underline underline-offset-4">
					<i class="fa-brands fa-tiktok"></i>
					<span>tiktok/kikemonk</span>
				</a>
			</div>
		</div>

	</div>
</section>
