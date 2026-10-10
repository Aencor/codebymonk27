<?php
/**
 * Template Name: Landing Page - Mi CV (Bilingual EN / ES)
 * Description: Interactive Curriculum Vitae & Professional Career Landing Page for Alberto Contreras
 */

get_header();

$pdf_en_url = get_template_directory_uri() . '/assets/docs/Alberto_Contreras_CV_2026_EN.pdf';
$pdf_es_url = get_template_directory_uri() . '/assets/docs/Alberto_Contreras_CV_2026_ES.pdf';
$profile_img_url = get_template_directory_uri() . '/assets/img/profile.jpg';
?>

<div id="cv-landing-app" class="relative bg-[#f4f4f0] dark:bg-[#0a0a0c] text-[#111111] dark:text-[#f3f4f6] transition-colors duration-300 min-h-screen pt-8 sm:pt-12 pb-24 overflow-hidden">
	
	<!-- Background Ambient Glow & Grid -->
	<div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-[600px] pointer-events-none z-0 overflow-hidden opacity-30 dark:opacity-40">
		<div class="absolute top-10 left-1/4 w-96 h-96 bg-[#163be6] rounded-full blur-[130px]"></div>
		<div class="absolute top-20 right-1/4 w-80 h-80 bg-[#eb3a24] rounded-full blur-[150px]"></div>
	</div>

	<div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16 sm:space-y-20">
		
		<!-- ========================================================================= -->
		<!-- LANGUAGE SWITCHER BAR -->
		<!-- ========================================================================= -->
		<div class="flex items-center justify-between gap-4 pb-4 border-b border-[#e2e2dc] dark:border-[#222222]">
			<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#e8e8e0] dark:bg-[#181820] border border-[#dcdcd4] dark:border-[#282834] text-[11px] font-mono uppercase tracking-wider text-[#eb3a24] font-bold">
				<span>// CURRICULUM VITAE</span>
				<span class="text-[#888888]">•</span>
				<span class="text-[#163be6] dark:text-cyan-400">2026 EDITION</span>
			</div>

			<!-- Bilingual Toggle Button [ EN | ES ] -->
			<div class="inline-flex items-center p-1 rounded-xl bg-white dark:bg-[#14141a] border border-[#dcdcd4] dark:border-[#282834] shadow-xs">
				<button type="button" id="btn-lang-en" class="cv-lang-btn px-3.5 py-1.5 rounded-lg text-xs font-mono font-bold transition-all bg-[#163be6] text-white shadow-sm" data-lang="en">
					EN (English)
				</button>
				<button type="button" id="btn-lang-es" class="cv-lang-btn px-3.5 py-1.5 rounded-lg text-xs font-mono font-bold text-[#666666] dark:text-[#a0a0aa] hover:text-[#111111] dark:hover:text-white transition-all" data-lang="es">
					ES (Español)
				</button>
			</div>
		</div>

		<!-- ========================================================================= -->
		<!-- 1. HERO / PROFILE HEADER -->
		<!-- ========================================================================= -->
		<section class="pt-2 sm:pt-4">
			<div class="flex flex-col md:flex-row items-center md:items-start gap-8 sm:gap-12 pb-12 border-b border-[#e2e2dc] dark:border-[#222222]">
				
				<!-- Avatar with Status Glow -->
				<div class="relative flex-shrink-0 group">
					<div class="absolute -inset-1.5 bg-gradient-to-tr from-[#eb3a24] via-[#163be6] to-cyan-400 rounded-3xl blur-md opacity-50 group-hover:opacity-80 transition duration-500"></div>
					<div class="relative w-36 h-36 sm:w-44 sm:h-44 rounded-2xl md:rounded-3xl overflow-hidden border-2 border-white dark:border-[#24242e] bg-white dark:bg-[#141418] shadow-2xl">
						<img src="<?= esc_url($profile_img_url); ?>" alt="Alberto Enrique Contreras Romero" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500" />
					</div>
					<div class="absolute -bottom-2.5 -right-2.5 bg-emerald-500 text-white text-[10px] font-mono font-bold px-2.5 py-1 rounded-full shadow-lg border-2 border-white dark:border-[#0a0a0c] flex items-center gap-1.5">
						<span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
						<span class="lang-en">AVAILABLE</span>
						<span class="lang-es hidden">DISPONIBLE</span>
					</div>
				</div>

				<!-- Header Bio & Actions -->
				<div class="flex-1 text-center md:text-left space-y-4">
					<h1 class="text-3xl sm:text-4xl md:text-5xl font-display font-black text-[#111111] dark:text-white uppercase tracking-tight leading-[1.08]">
						Alberto Enrique<br class="hidden sm:inline"> Contreras Romero
					</h1>

					<p class="text-base sm:text-lg font-mono text-[#163be6] dark:text-cyan-400 font-semibold">
						<span class="lang-en">Senior FullStack & WordPress Developer <span class="text-[#888888] font-normal">|</span> Web Architect <span class="text-[#888888] font-normal">|</span> CRM & Automation Specialist</span>
						<span class="lang-es hidden">Desarrollador FullStack Senior & WordPress <span class="text-[#888888] font-normal">|</span> Arquitecto Web <span class="text-[#888888] font-normal">|</span> Especialista en CRM y Automatizaciones</span>
					</p>

					<div class="flex flex-wrap items-center justify-center md:justify-start gap-4 pt-2 text-xs sm:text-sm font-mono text-[#555555] dark:text-[#a0a0aa]">
						<a href="mailto:kikemura07@gmail.com" class="inline-flex items-center gap-1.5 hover:text-[#eb3a24] transition-colors">
							<svg class="w-4 h-4 text-[#eb3a24]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
							kikemura07@gmail.com
						</a>
						<span>•</span>
						<a href="https://codebymonk.com" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 hover:text-[#163be6] dark:hover:text-cyan-400 transition-colors">
							<svg class="w-4 h-4 text-[#163be6] dark:text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
							codebymonk.com
						</a>
						<span>•</span>
						<a href="https://linkedin.com/in/alberto-enrique-contreras-romero" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 hover:text-blue-500 transition-colors">
							<svg class="w-4 h-4 text-blue-500 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
							LinkedIn
						</a>
					</div>

					<!-- Quick CTAs -->
					<div class="flex flex-wrap items-center justify-center md:justify-start gap-3 pt-4">
						<!-- Download English PDF -->
						<a href="<?= esc_url($pdf_en_url); ?>" download="Alberto_Contreras_CV_2026_EN.pdf" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-[#eb3a24] hover:bg-[#d42c18] text-white font-mono font-bold text-xs uppercase tracking-wider shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
							<span class="lang-en">DOWNLOAD CV (EN PDF)</span>
							<span class="lang-es hidden">DESCARGAR CV (EN PDF)</span>
						</a>

						<!-- Download Spanish PDF -->
						<a href="<?= esc_url($pdf_es_url); ?>" download="Alberto_Contreras_CV_2026_ES.pdf" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-[#163be6] hover:bg-[#1230c0] text-white font-mono font-bold text-xs uppercase tracking-wider shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
							<span class="lang-en">DOWNLOAD CV (ES PDF)</span>
							<span class="lang-es hidden">DESCARGAR CV (ES PDF)</span>
						</a>

						<a href="mailto:kikemura07@gmail.com?subject=Contacto%20desde%20CV%20Web" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-white dark:bg-[#16161c] border border-[#dcdcd4] dark:border-[#282834] hover:border-[#163be6] text-[#111111] dark:text-white font-mono font-semibold text-xs uppercase tracking-wider shadow-sm hover:shadow-md transition-all">
							<svg class="w-4 h-4 text-[#163be6] dark:text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
							<span class="lang-en">GET IN TOUCH</span>
							<span class="lang-es hidden">CONTACTAR AHORA</span>
						</a>
					</div>
				</div>

			</div>
		</section>

		<!-- ========================================================================= -->
		<!-- 2. PROFESSIONAL SUMMARY -->
		<!-- ========================================================================= -->
		<section class="space-y-4">
			<div class="flex items-center gap-3 text-xs font-mono font-bold uppercase tracking-widest text-[#eb3a24]">
				<span class="w-6 h-[2px] bg-[#eb3a24]"></span>
				<span class="lang-en">// PROFESSIONAL SUMMARY</span>
				<span class="lang-es hidden">// RESUMEN PROFESIONAL</span>
			</div>
			
			<div class="p-6 sm:p-8 rounded-2xl bg-white/90 dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] shadow-sm space-y-4">
				<div class="lang-en space-y-3">
					<p class="text-base sm:text-lg text-[#222222] dark:text-[#e0e0e6] leading-relaxed font-light">
						<strong class="font-bold text-[#111111] dark:text-white">Senior FullStack WordPress Developer and Web Architect</strong> with 20+ years of hands-on experience delivering high-performance digital platforms for agencies, enterprise clients, and global brands.
					</p>
					<p class="text-sm sm:text-base text-[#444444] dark:text-[#a0a0aa] leading-relaxed font-light">
						Self-taught and results-driven, with deep expertise in modular WordPress architecture (Gutenberg + ACF Pro), custom membership & user profile systems, advanced WooCommerce customization, scalable CRM integrations (HubSpot, Salesforce, Attio), and multi-platform business process automation (Zapier, Make). Proven track record working with clients including <strong class="text-[#163be6] dark:text-cyan-400 font-medium">Attikka, Warner Bros, Disney LATAM, and América Móvil</strong>.
					</p>
				</div>
				<div class="lang-es hidden space-y-3">
					<p class="text-base sm:text-lg text-[#222222] dark:text-[#e0e0e6] leading-relaxed font-light">
						<strong class="font-bold text-[#111111] dark:text-white">Desarrollador FullStack Senior de WordPress y Arquitecto Web</strong> con más de 20 años de experiencia creando plataformas digitales de alto rendimiento para agencias, empresas y marcas globales.
					</p>
					<p class="text-sm sm:text-base text-[#444444] dark:text-[#a0a0aa] leading-relaxed font-light">
						Autodidacta y orientado a resultados, con profunda experiencia en arquitectura modular de WordPress (Gutenberg + ACF Pro), desarrollo de sistemas de perfiles de usuario y membresías, personalización avanzada de WooCommerce, integraciones de CRM escalables (HubSpot, Salesforce, Attio) y automatización de procesos de negocio (Zapier, Make). Historial comprobado con clientes como <strong class="text-[#163be6] dark:text-cyan-400 font-medium">Attikka, Warner Bros, Disney LATAM y América Móvil</strong>.
					</p>
				</div>
			</div>
		</section>

		<!-- ========================================================================= -->
		<!-- 3. KEY ACHIEVEMENTS (BENTO HIGHLIGHTS) -->
		<!-- ========================================================================= -->
		<section class="space-y-6">
			<div class="flex items-center gap-3 text-xs font-mono font-bold uppercase tracking-widest text-[#163be6] dark:text-cyan-400">
				<span class="w-6 h-[2px] bg-[#163be6] dark:bg-cyan-400"></span>
				<span class="lang-en">// KEY ACHIEVEMENTS</span>
				<span class="lang-es hidden">// LOGROS CLAVE</span>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
				
				<!-- Item 1 -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] hover:border-[#163be6] transition-all duration-300 group shadow-xs hover:shadow-xl hover:-translate-y-1">
					<div class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-950/40 text-[#163be6] dark:text-cyan-400 flex items-center justify-center font-mono font-bold text-sm mb-4">01</div>
					<h3 class="text-sm font-bold text-[#111111] dark:text-white mb-2">
						<span class="lang-en">9-Site Enterprise Unification</span>
						<span class="lang-es hidden">Unificación Enterprise de 9 Sitios</span>
					</h3>
					<p class="text-xs text-[#555555] dark:text-[#a0a0aa] leading-relaxed">
						<span class="lang-en">Unified 9 company websites across WordPress, HubSpot, Webflow, and HTML into a single platform (<strong class="text-[#111111] dark:text-white">vectorsolutions.com</strong>) during a major multi-company merger.</span>
						<span class="lang-es hidden">Consolidación técnica de 9 sitios web corporativos en una sola plataforma unificada (<strong class="text-[#111111] dark:text-white">vectorsolutions.com</strong>) durante una fusión empresarial.</span>
					</p>
				</div>

				<!-- Item 2 -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] hover:border-[#eb3a24] transition-all duration-300 group shadow-xs hover:shadow-xl hover:-translate-y-1">
					<div class="w-10 h-10 rounded-xl bg-red-50 dark:bg-red-950/40 text-[#eb3a24] flex items-center justify-center font-mono font-bold text-sm mb-4">02</div>
					<h3 class="text-sm font-bold text-[#111111] dark:text-white mb-2">
						<span class="lang-en">Warner Bros Headless CMS</span>
						<span class="lang-es hidden">Warner Bros Headless CMS</span>
					</h3>
					<p class="text-xs text-[#555555] dark:text-[#a0a0aa] leading-relaxed">
						<span class="lang-en">Built Headless CMS platforms (WordPress + Angular) for Warner Bros Liga Latina Injustice 1 & 2 and Mortal Kombat 10 & 11 with real-time live tournament scoring.</span>
						<span class="lang-es hidden">Desarrollo de plataformas Headless CMS (WordPress + Angular) para torneos de Warner Bros Liga Latina Injustice y Mortal Kombat con marcadores en tiempo real.</span>
					</p>
				</div>

				<!-- Item 3 -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] hover:border-emerald-500 transition-all duration-300 group shadow-xs hover:shadow-xl hover:-translate-y-1">
					<div class="w-10 h-10 rounded-xl bg-emerald-50 dark:bg-emerald-950/40 text-emerald-500 flex items-center justify-center font-mono font-bold text-sm mb-4">03</div>
					<h3 class="text-sm font-bold text-[#111111] dark:text-white mb-2">
						<span class="lang-en">Movistar Nationwide App</span>
						<span class="lang-es hidden">App Nacional Movistar México</span>
					</h3>
					<p class="text-xs text-[#555555] dark:text-[#a0a0aa] leading-relaxed">
						<span class="lang-en">Developed Movistar Mexico's virtual device catalog app used nationwide by distributors, powered by WordPress REST API with real-time stock sync.</span>
						<span class="lang-es hidden">Creación del catálogo virtual nacional para toda la red de distribuidores de Movistar México, impulsado por WordPress REST API con sincronización de inventario.</span>
					</p>
				</div>

				<!-- Item 4 -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] hover:border-amber-500 transition-all duration-300 group shadow-xs hover:shadow-xl hover:-translate-y-1">
					<div class="w-10 h-10 rounded-xl bg-amber-50 dark:bg-amber-950/40 text-amber-500 flex items-center justify-center font-mono font-bold text-sm mb-4">04</div>
					<h3 class="text-sm font-bold text-[#111111] dark:text-white mb-2">
						<span class="lang-en">WE-X Remote Call Center SaaS</span>
						<span class="lang-es hidden">WE-X Call Center Remoto SaaS</span>
					</h3>
					<p class="text-xs text-[#555555] dark:text-[#a0a0aa] leading-relaxed">
						<span class="lang-en">Architected a pre-pandemic remote call center SaaS platform enabling executives to work from home, cutting commute and operational overhead.</span>
						<span class="lang-es hidden">Arquitectura de plataforma SaaS para call centers remotos previo a la pandemia, eliminando traslados y reduciendo costos operativos empresariales.</span>
					</p>
				</div>

				<!-- Item 5 -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] hover:border-purple-500 transition-all duration-300 group shadow-xs hover:shadow-xl hover:-translate-y-1">
					<div class="w-10 h-10 rounded-xl bg-purple-50 dark:bg-purple-950/40 text-purple-500 flex items-center justify-center font-mono font-bold text-sm mb-4">05</div>
					<h3 class="text-sm font-bold text-[#111111] dark:text-white mb-2">
						<span class="lang-en">~70% Quoting Speedup (3D Engine)</span>
						<span class="lang-es hidden">Motor de Cotización 3D (~70% más rápido)</span>
					</h3>
					<p class="text-xs text-[#555555] dark:text-[#a0a0aa] leading-relaxed">
						<span class="lang-en">Engineered a real-time 3D quoting engine and custom CRM for Tuna's Craft, reducing customer turnaround from days to hours.</span>
						<span class="lang-es hidden">Ingeniería de motor de cotización 3D en tiempo real y CRM propio para Tuna's Craft, reduciendo tiempos de respuesta de días a horas.</span>
					</p>
				</div>

				<!-- Item 6 -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] hover:border-cyan-500 transition-all duration-300 group shadow-xs hover:shadow-xl hover:-translate-y-1">
					<div class="w-10 h-10 rounded-xl bg-cyan-50 dark:bg-cyan-950/40 text-cyan-500 flex items-center justify-center font-mono font-bold text-sm mb-4">06</div>
					<h3 class="text-sm font-bold text-[#111111] dark:text-white mb-2">
						<span class="lang-en">50+ Custom Enterprise Themes</span>
						<span class="lang-es hidden">+50 Temas Custom Enterprise</span>
					</h3>
					<p class="text-xs text-[#555555] dark:text-[#a0a0aa] leading-relaxed">
						<span class="lang-en">Delivered 50+ custom WordPress theme projects for Disney LATAM, Bimbo, Coca-Cola, Colgate, Televisa, and Gas Natural Fenosa.</span>
						<span class="lang-es hidden">Entrega de más de 50 temas custom de WordPress para Disney LATAM, Bimbo, Coca-Cola, Colgate, Televisa y Gas Natural Fenosa.</span>
					</p>
				</div>

			</div>
		</section>

		<!-- ========================================================================= -->
		<!-- 4. PROFESSIONAL EXPERIENCE (INTERACTIVE TIMELINE) -->
		<!-- ========================================================================= -->
		<section class="space-y-8">
			<div class="flex items-center justify-between pb-2 border-b border-[#e2e2dc] dark:border-[#222222]">
				<div class="flex items-center gap-3 text-xs font-mono font-bold uppercase tracking-widest text-[#eb3a24]">
					<span class="w-6 h-[2px] bg-[#eb3a24]"></span>
					<span class="lang-en">// PROFESSIONAL EXPERIENCE</span>
					<span class="lang-es hidden">// EXPERIENCIA PROFESIONAL</span>
				</div>
				<span class="text-xs font-mono text-[#888888]">2004 — PRESENT (20+ YEARS)</span>
			</div>

			<div class="space-y-8 relative before:absolute before:inset-0 before:left-3 md:before:left-4 before:w-[2px] before:bg-gradient-to-b before:from-[#163be6] before:via-[#eb3a24] before:to-[#222222] pl-8 md:pl-12">
				
				<!-- Role 0: Nathalie Lesbaches (CURRENT - May 2025 - Present) -->
				<div class="relative group">
					<div class="absolute -left-8 md:-left-12 top-1.5 w-6 h-6 rounded-full bg-white dark:bg-[#0a0a0c] border-4 border-[#163be6] shadow-md group-hover:scale-125 transition-transform"></div>
					<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border-2 border-[#163be6]/50 dark:border-[#163be6]/60 shadow-lg space-y-3 hover:border-[#163be6] transition-colors">
						<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
							<h3 class="text-base sm:text-lg font-bold text-[#111111] dark:text-white flex items-center gap-2">
								Nathalie Lesbaches <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> Lead Developer
								<span class="px-2 py-0.5 rounded-md bg-[#163be6]/10 text-[#163be6] dark:text-cyan-400 text-[10px] font-mono font-bold uppercase">CURRENT</span>
							</h3>
							<span class="text-xs font-mono font-bold text-[#163be6] dark:text-cyan-400 px-2.5 py-0.5 rounded-full bg-blue-50 dark:bg-blue-950/50 w-fit">
								<span class="lang-en">May 2025 – Present</span>
								<span class="lang-es hidden">Mayo 2025 – Presente</span>
							</span>
						</div>
						
						<!-- English Description -->
						<ul class="lang-en space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Directing end-to-end technical architecture, fullstack development, and continuous maintenance for the Nathalie Lesbaches eCommerce platform.</li>
							<li>Engineering bespoke modular Gutenberg blocks and high-level WooCommerce core backend extensions and custom checkout flows.</li>
							<li>Architecting mission-critical third-party integrations and multi-step business workflow automations utilizing Zapier and Make.com.</li>
							<li>Implementing advanced tracking infrastructure, Google Tag Manager (GTM) data layers, and multi-channel marketing conversion pixels.</li>
							<li>Building custom sales and business intelligence reporting engines with automated data export and synchronization pipelines.</li>
							<li>Spearheading technical project management, sprint delivery, and product roadmap execution.</li>
						</ul>

						<!-- Spanish Description -->
						<ul class="lang-es hidden space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Liderazgo técnico, desarrollo fullstack y mantenimiento continuo de la plataforma eCommerce de Nathalie Lesbaches.</li>
							<li>Desarrollo de nuevos módulos y bloques personalizados para Gutenberg y extensión avanzada del backend y checkout de WooCommerce.</li>
							<li>Arquitectura de integraciones de terceros y flujos de automatización de procesos empresariales con Zapier y Make.</li>
							<li>Implementación de infraestructura de analítica y tracking con Google Tag Manager (GTM) y configuración de píxeles de conversión.</li>
							<li>Generación y customización de reportes avanzados de ventas y métricas de negocio con exportación automatizada de datos.</li>
							<li>Gestión integral del proyecto técnico, planeación de sprints y ejecución del roadmap de producto.</li>
						</ul>
					</div>
				</div>

				<!-- Role 1: Attikka (Jun 2026 - Present) -->
				<div class="relative group">
					<div class="absolute -left-8 md:-left-12 top-1.5 w-6 h-6 rounded-full bg-white dark:bg-[#0a0a0c] border-4 border-[#eb3a24] shadow-md group-hover:scale-125 transition-transform"></div>
					<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] shadow-sm space-y-3 hover:border-[#eb3a24] transition-colors">
						<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
							<h3 class="text-base sm:text-lg font-bold text-[#111111] dark:text-white flex items-center gap-2">
								Attikka <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> Lead FullStack Developer & Web Architect
							</h3>
							<span class="text-xs font-mono font-bold text-[#eb3a24] px-2.5 py-0.5 rounded-full bg-red-50 dark:bg-red-950/50 w-fit">
								<span class="lang-en">Jun 2026 – Present</span>
								<span class="lang-es hidden">Junio 2026 – Presente</span>
							</span>
						</div>
						
						<!-- English Description -->
						<ul class="lang-en space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Architected and developed the official digital platform and website for <strong class="text-[#111111] dark:text-white">Fundación Attikka</strong>.</li>
							<li>Engineered a custom member and user profile management system for ACLC, building their digital platforms at <strong class="text-[#111111] dark:text-white">aclc.us</strong>.</li>
							<li>Architected and launched high-performance eCommerce platforms for <strong class="text-[#111111] dark:text-white">Knowledgism (knowledgism.com)</strong> and <strong class="text-[#111111] dark:text-white">Zones of Life (zonesoflife.com)</strong>.</li>
							<li>Developed bespoke Gutenberg block architectures, secure user authentication workflows, and custom WooCommerce payment pipelines.</li>
						</ul>

						<!-- Spanish Description -->
						<ul class="lang-es hidden space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Arquitectura y desarrollo del sitio web y plataforma oficial para la <strong class="text-[#111111] dark:text-white">Fundación Attikka</strong>.</li>
							<li>Desarrollo del sistema integral de perfiles de usuario y membresías para ACLC, creando su plataforma digital oficial en <strong class="text-[#111111] dark:text-white">aclc.us</strong>.</li>
							<li>Desarrollo e implementación de las plataformas de eCommerce para <strong class="text-[#111111] dark:text-white">Knowledgism (knowledgism.com)</strong> y <strong class="text-[#111111] dark:text-white">Zones of Life (zonesoflife.com)</strong>.</li>
							<li>Creación de bloques modulares para Gutenberg, integraciones seguras de autenticación de usuarios y pasarelas de pago con WooCommerce.</li>
						</ul>
					</div>
				</div>

				<!-- Role 1: Tuna's Craft -->
				<div class="relative group">
					<div class="absolute -left-8 md:-left-12 top-1.5 w-6 h-6 rounded-full bg-white dark:bg-[#0a0a0c] border-4 border-[#eb3a24] shadow-md group-hover:scale-125 transition-transform"></div>
					<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] shadow-sm space-y-3 hover:border-[#eb3a24] transition-colors">
						<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
							<h3 class="text-base sm:text-lg font-bold text-[#111111] dark:text-white">
								Tuna's Craft <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> Founder & Lead Engineer
							</h3>
							<span class="text-xs font-mono font-bold text-[#eb3a24] px-2.5 py-0.5 rounded-full bg-red-50 dark:bg-red-950/50 w-fit">
								<span class="lang-en">2023 – Present</span>
								<span class="lang-es hidden">2023 – Presente</span>
							</span>
						</div>
						
						<ul class="lang-en space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Built a proprietary CRM and eCommerce system tailored to custom manufacturing workflows, replacing legacy spreadsheet operations.</li>
							<li>Developed a real-time 3D quoting engine that reduced quote turnaround time by ~70%, enabling faster client decisions.</li>
							<li>Implemented automated communication flows using WhatsApp API and Twilio, saving 5+ hours/week in manual follow-up.</li>
							<li>Designed order tracking and customer management systems that improved operational visibility end-to-end.</li>
						</ul>

						<ul class="lang-es hidden space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Desarrollo de CRM y sistema de eCommerce propio adaptado a flujos de manufactura a medida, sustituyendo hojas de cálculo tradicionales.</li>
							<li>Motor de cotización 3D en tiempo real que redujo el tiempo de cotización en ~70%, acelerando decisiones de compra de clientes.</li>
							<li>Automatización de comunicación con clientes mediante WhatsApp API y Twilio, ahorrando más de 5 horas/semana en seguimiento.</li>
							<li>Diseño de sistemas de rastreo de pedidos y gestión de clientes con visibilidad operativa de inicio a fin.</li>
						</ul>
					</div>
				</div>

				<!-- Role 2: Accelity Marketing -->
				<div class="relative group">
					<div class="absolute -left-8 md:-left-12 top-1.5 w-6 h-6 rounded-full bg-white dark:bg-[#0a0a0c] border-4 border-emerald-500 shadow-md group-hover:scale-125 transition-transform"></div>
					<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] shadow-sm space-y-3 hover:border-emerald-500 transition-colors">
						<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
							<h3 class="text-base sm:text-lg font-bold text-[#111111] dark:text-white">
								Accelity Marketing <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> Senior FullStack WordPress Developer
							</h3>
							<span class="text-xs font-mono font-bold text-emerald-500 px-2.5 py-0.5 rounded-full bg-emerald-50 dark:bg-emerald-950/50 w-fit">
								<span class="lang-en">Nov 2024 – Apr 2025</span>
								<span class="lang-es hidden">Nov 2024 – Abr 2025</span>
							</span>
						</div>
						
						<ul class="lang-en space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Built and maintained scalable WordPress platforms serving multiple agency clients with high traffic and complex content architecture.</li>
							<li>Developed a modular Gutenberg block system, reducing new page build time by ~40% and enabling non-technical editors to work independently.</li>
							<li>Integrated HubSpot and Salesforce to automate lead capture, segmentation, and nurturing workflows.</li>
							<li>Consistently delivered Google Lighthouse performance scores of 90+ across client sites.</li>
						</ul>

						<ul class="lang-es hidden space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Desarrollo y mantenimiento de plataformas WordPress escalables para clientes de agencia con alto tráfico y contenido complejo.</li>
							<li>Creación de sistema modular de bloques Gutenberg, reduciendo tiempos de creación de páginas en ~40% para editores no técnicos.</li>
							<li>Integración de HubSpot y Salesforce para automatizar captura, segmentación y nutrición de leads.</li>
							<li>Puntuaciones de rendimiento de Google Lighthouse de 90+ de manera consistente en todos los proyectos.</li>
						</ul>
					</div>
				</div>

				<!-- Role 3: Visita Chiapas -->
				<div class="relative group">
					<div class="absolute -left-8 md:-left-12 top-1.5 w-6 h-6 rounded-full bg-white dark:bg-[#0a0a0c] border-4 border-amber-500 shadow-md group-hover:scale-125 transition-transform"></div>
					<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] shadow-sm space-y-3 hover:border-amber-500 transition-colors">
						<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
							<h3 class="text-base sm:text-lg font-bold text-[#111111] dark:text-white">
								Visita Chiapas <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> Lead Web Architect
							</h3>
							<span class="text-xs font-mono font-bold text-amber-500 px-2.5 py-0.5 rounded-full bg-amber-50 dark:bg-amber-950/50 w-fit">
								<span class="lang-en">2025 – Present</span>
								<span class="lang-es hidden">2025 – Presente</span>
							</span>
						</div>
						
						<ul class="lang-en space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Architected a high-performance WordPress platform with Progressive Web App (PWA) capabilities for a destination tourism brand.</li>
							<li>Optimized for mobile-first and low-connectivity environments, improving accessibility for emerging-market travelers.</li>
							<li>Implemented advanced caching, lazy loading, and asset optimization strategies, achieving sub-3s load times on 3G networks.</li>
						</ul>

						<ul class="lang-es hidden space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Arquitectura de plataforma WordPress de alto rendimiento con capacidades PWA para marca de destino turístico.</li>
							<li>Optimización para dispositivos móviles y redes de baja conectividad, logrando tiempos de carga sub-3s en redes celulares 3G.</li>
							<li>Estrategias avanzadas de caché, lazy loading y compresión de assets.</li>
						</ul>
					</div>
				</div>

				<!-- Role 4: HUSL Digital -->
				<div class="relative group">
					<div class="absolute -left-8 md:-left-12 top-1.5 w-6 h-6 rounded-full bg-white dark:bg-[#0a0a0c] border-4 border-[#888888] shadow-md group-hover:scale-125 transition-transform"></div>
					<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] shadow-sm space-y-3 hover:border-white/40 transition-colors">
						<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
							<h3 class="text-base sm:text-lg font-bold text-[#111111] dark:text-white">
								HUSL Digital <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> WordPress Lead Developer
							</h3>
							<span class="text-xs font-mono text-[#777777] dark:text-[#999999] px-2.5 py-0.5 rounded-full bg-gray-100 dark:bg-[#1a1a20] w-fit">Mar 2021 – Sept 2024</span>
						</div>
						
						<ul class="lang-en space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Led WordPress development for enterprise-level marketing platforms across North American clients.</li>
							<li>Built reusable Gutenberg block libraries that reduced development time across projects and enabled design-system consistency.</li>
							<li>Integrated multilingual solutions using WPML, supporting English, Spanish, and French content markets.</li>
							<li>Collaborated directly with marketing strategists to optimize page structures for conversion, A/B testing, and lead generation.</li>
						</ul>

						<ul class="lang-es hidden space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Liderazgo en desarrollo WordPress para plataformas de marketing a nivel enterprise en Norteamérica.</li>
							<li>Creación de librerías de bloques Gutenberg reutilizables e integración multilingüe con WPML (EN, ES, FR).</li>
							<li>Colaboración con estrategas de marketing para optimizar estructuras orientadas a conversión, pruebas A/B y captación de leads.</li>
						</ul>
					</div>
				</div>

				<!-- Role 5: Inallmedia -->
				<div class="relative group">
					<div class="absolute -left-8 md:-left-12 top-1.5 w-6 h-6 rounded-full bg-white dark:bg-[#0a0a0c] border-4 border-[#888888] shadow-md group-hover:scale-125 transition-transform"></div>
					<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] shadow-sm space-y-3 hover:border-white/40 transition-colors">
						<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
							<h3 class="text-base sm:text-lg font-bold text-[#111111] dark:text-white">
								Inallmedia <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> Senior WordPress Developer
							</h3>
							<span class="text-xs font-mono text-[#777777] dark:text-[#999999] px-2.5 py-0.5 rounded-full bg-gray-100 dark:bg-[#1a1a20] w-fit">2019 – Mar 2021</span>
						</div>
						
						<ul class="lang-en space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Led the unification of 9 company websites — built on WordPress, HubSpot, Webflow, and raw HTML — into a single, cohesive enterprise platform: vectorsolutions.com.</li>
							<li>Architected a scalable WordPress system capable of handling the content volume, URL structure, and brand consistency requirements of a 9-company merger.</li>
							<li>Coordinated cross-platform content migration, redirects, and SEO preservation across all legacy domains.</li>
						</ul>

						<ul class="lang-es hidden space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li>Consolidación técnica de 9 sitios web corporativos (WordPress, HubSpot, Webflow y HTML) en la plataforma enterprise vectorsolutions.com.</li>
							<li>Gestión de migraciones de bases de datos masivas, mapeo de redirecciones 301 y preservación de autoridad SEO.</li>
						</ul>
					</div>
				</div>

				<!-- Role 6: Pugsarrollos -->
				<div class="relative group">
					<div class="absolute -left-8 md:-left-12 top-1.5 w-6 h-6 rounded-full bg-white dark:bg-[#0a0a0c] border-4 border-[#888888] shadow-md group-hover:scale-125 transition-transform"></div>
					<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] shadow-sm space-y-3 hover:border-white/40 transition-colors">
						<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
							<h3 class="text-base sm:text-lg font-bold text-[#111111] dark:text-white">
								Pugsarrollos <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> CTO & Lead Developer
							</h3>
							<span class="text-xs font-mono text-[#777777] dark:text-[#999999] px-2.5 py-0.5 rounded-full bg-gray-100 dark:bg-[#1a1a20] w-fit">2015 – 2019</span>
						</div>
						
						<ul class="lang-en space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li><strong class="text-[#111111] dark:text-white">Movistar Mexico:</strong> Virtual device catalog used nationwide by Movistar distributors — Headless CMS (WordPress backend + Angular frontend).</li>
							<li><strong class="text-[#111111] dark:text-white">Pemex:</strong> Web platform for publishing company statistics and operational progress reports.</li>
							<li><strong class="text-[#111111] dark:text-white">Warner Bros (Injustice & Mortal Kombat):</strong> Liga Latina Injustice 1 & 2 and Mortal Kombat 10 & 11 live tournament scoring platforms.</li>
							<li><strong class="text-[#111111] dark:text-white">Liverpool Mexico:</strong> Registration, news, and leaderboard site for Liverpool's nationwide Fifa inter-state tournament.</li>
							<li><strong class="text-[#111111] dark:text-white">La Mole Comic Con:</strong> Official website for one of Latin America's largest pop culture conventions.</li>
							<li><strong class="text-[#111111] dark:text-white">WE-X Platform:</strong> SaaS remote call center platform for enterprise operations.</li>
						</ul>

						<ul class="lang-es hidden space-y-2 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8] list-disc list-inside">
							<li><strong class="text-[#111111] dark:text-white">Movistar México:</strong> Catálogo virtual nacional para distribuidores (WordPress REST API + Angular).</li>
							<li><strong class="text-[#111111] dark:text-white">Pemex:</strong> Portal para estadísticas y reportes de avance operativo corporativo.</li>
							<li><strong class="text-[#111111] dark:text-white">Warner Bros:</strong> Plataformas de torneos Liga Latina Injustice y Mortal Kombat con marcadores en vivo.</li>
							<li><strong class="text-[#111111] dark:text-white">Liverpool México:</strong> Sitio de registro y leaderboards para torneo nacional de FIFA.</li>
							<li><strong class="text-[#111111] dark:text-white">La Mole Comic Con:</strong> Sitio oficial de la convención de cultura pop más grande de Latinoamérica.</li>
							<li><strong class="text-[#111111] dark:text-white">WE-X Platform:</strong> Plataforma SaaS para operación de call centers remotos.</li>
						</ul>
					</div>
				</div>

				<!-- Role 7: Freelance -->
				<div class="relative group">
					<div class="absolute -left-8 md:-left-12 top-1.5 w-6 h-6 rounded-full bg-white dark:bg-[#0a0a0c] border-4 border-[#888888] shadow-md group-hover:scale-125 transition-transform"></div>
					<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] shadow-sm space-y-3 hover:border-white/40 transition-colors">
						<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
							<h3 class="text-base sm:text-lg font-bold text-[#111111] dark:text-white">
								<span class="lang-en">Freelance WordPress Developer <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> Independent</span>
								<span class="lang-es hidden">Desarrollador WordPress Independiente <span class="font-normal text-[#666666] dark:text-[#999999]">|</span> Freelance</span>
							</h3>
							<span class="text-xs font-mono text-[#777777] dark:text-[#999999] px-2.5 py-0.5 rounded-full bg-gray-100 dark:bg-[#1a1a20] w-fit">2004 – 2015 • Mexico City</span>
						</div>
						
						<p class="text-xs text-[#555555] dark:text-[#a0a0aa]">
							<span class="lang-en">12+ years of independent development delivering 50+ fully custom themes (zero off-the-shelf templates) across Latin America:</span>
							<span class="lang-es hidden">12+ años de desarrollo independiente entregando más de 50 temas 100% custom a medida (cero plantillas prediseñadas):</span>
						</p>

						<div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-xs text-[#444444] dark:text-[#b0b0b8]">
							<div class="p-3 rounded-xl bg-[#f0f0ea] dark:bg-[#181820] space-y-1">
								<span class="font-mono font-bold text-[#eb3a24] block text-[11px]">HIGH TRAFFIC & MEDIA</span>
								<p><strong>elBigData.mx:</strong> Redesign & performance optimization for news site handling 4M+ daily visits, 30GB DB, 200GB+ media under zero downtime.</p>
							</div>
							<div class="p-3 rounded-xl bg-[#f0f0ea] dark:bg-[#181820] space-y-1">
								<span class="font-mono font-bold text-[#163be6] dark:text-cyan-400 block text-[11px]">ENTERPRISE & CORPORATE</span>
								<p>Gas Natural Fenosa, 4E México, Bimbo México, Coca-Cola (Sustainability), Colgate (Líderes Colgate 2 years).</p>
							</div>
							<div class="p-3 rounded-xl bg-[#f0f0ea] dark:bg-[#181820] space-y-1">
								<span class="font-mono font-bold text-purple-500 block text-[11px]">ENTERTAINMENT & GAMING</span>
								<p>Televisa Telenovelas campaigns, Pernod Ricard, Gamelta (LoL, Rocket League, Overcooked), Atomix Mag, Estudios Churubusco.</p>
							</div>
							<div class="p-3 rounded-xl bg-[#f0f0ea] dark:bg-[#181820] space-y-1">
								<span class="font-mono font-bold text-emerald-500 block text-[11px]">INTERNAL & PUBLIC SECTOR</span>
								<p>Disney LATAM (internal portal), Bonafont, ACT II, Mario Delgado campaign, Fondo Chiapas, Carlos Septién García.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- ========================================================================= -->
		<!-- 5. TECHNICAL SKILLS -->
		<!-- ========================================================================= -->
		<section class="space-y-6">
			<div class="flex items-center gap-3 text-xs font-mono font-bold uppercase tracking-widest text-[#163be6] dark:text-cyan-400">
				<span class="w-6 h-[2px] bg-[#163be6] dark:bg-cyan-400"></span>
				<span class="lang-en">// TECHNICAL SKILLS</span>
				<span class="lang-es hidden">// HABILIDADES TÉCNICAS</span>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
				
				<!-- Core Stack -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] space-y-3">
					<h3 class="text-xs font-mono font-bold uppercase tracking-wider text-[#eb3a24] flex items-center gap-2">
						<span class="w-2 h-2 rounded-full bg-[#eb3a24]"></span> Core Stack
					</h3>
					<div class="flex flex-wrap gap-2">
						<?php foreach (['PHP', 'JavaScript (ES6+)', 'HTML5', 'CSS3', 'SASS', 'SQL', 'MySQL', 'MariaDB'] as $skill): ?>
							<span class="px-2.5 py-1 rounded-lg bg-[#f0f0ea] dark:bg-[#181820] border border-[#dcdcd4] dark:border-[#282834] text-xs font-mono font-medium text-[#222222] dark:text-[#d0d0d8]"><?= $skill; ?></span>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- WordPress Ecosystem -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] space-y-3">
					<h3 class="text-xs font-mono font-bold uppercase tracking-wider text-[#163be6] dark:text-cyan-400 flex items-center gap-2">
						<span class="w-2 h-2 rounded-full bg-[#163be6] dark:bg-cyan-400"></span> WordPress Ecosystem
					</h3>
					<div class="flex flex-wrap gap-2">
						<?php foreach (['Gutenberg Custom Blocks', 'WooCommerce Backend', 'ACF Pro', 'WPML Multilingual', 'Plugin Architecture', 'Custom Themes', 'WP-CLI'] as $skill): ?>
							<span class="px-2.5 py-1 rounded-lg bg-[#f0f0ea] dark:bg-[#181820] border border-[#dcdcd4] dark:border-[#282834] text-xs font-mono font-medium text-[#222222] dark:text-[#d0d0d8]"><?= $skill; ?></span>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Frontend & Creative Tech -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] space-y-3">
					<h3 class="text-xs font-mono font-bold uppercase tracking-wider text-emerald-500 flex items-center gap-2">
						<span class="w-2 h-2 rounded-full bg-emerald-500"></span> Frontend & Creative Tech
					</h3>
					<div class="flex flex-wrap gap-2">
						<?php foreach (['React', 'GSAP Animation', 'Three.js 3D', 'Webflow', 'Webpack / Mix', 'Tailwind CSS', 'PWA', 'Mobile-First UI'] as $skill): ?>
							<span class="px-2.5 py-1 rounded-lg bg-[#f0f0ea] dark:bg-[#181820] border border-[#dcdcd4] dark:border-[#282834] text-xs font-mono font-medium text-[#222222] dark:text-[#d0d0d8]"><?= $skill; ?></span>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Automation & Integrations -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] space-y-3">
					<h3 class="text-xs font-mono font-bold uppercase tracking-wider text-amber-500 flex items-center gap-2">
						<span class="w-2 h-2 rounded-full bg-amber-500"></span> Automation & Integrations
					</h3>
					<div class="flex flex-wrap gap-2">
						<?php foreach (['Zapier', 'Make.com', 'Webhooks', 'REST API Design', 'Twilio', 'WhatsApp Business API', 'CRM Workflows'] as $skill): ?>
							<span class="px-2.5 py-1 rounded-lg bg-[#f0f0ea] dark:bg-[#181820] border border-[#dcdcd4] dark:border-[#282834] text-xs font-mono font-medium text-[#222222] dark:text-[#d0d0d8]"><?= $skill; ?></span>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- CRM & Enterprise Systems -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] space-y-3">
					<h3 class="text-xs font-mono font-bold uppercase tracking-wider text-purple-500 flex items-center gap-2">
						<span class="w-2 h-2 rounded-full bg-purple-500"></span> CRM & Enterprise
					</h3>
					<div class="flex flex-wrap gap-2">
						<?php foreach (['HubSpot', 'Salesforce', 'Attio', 'Custom Reporting', 'Sales Intelligence', 'Pipelines', 'Lead Routing'] as $skill): ?>
							<span class="px-2.5 py-1 rounded-lg bg-[#f0f0ea] dark:bg-[#181820] border border-[#dcdcd4] dark:border-[#282834] text-xs font-mono font-medium text-[#222222] dark:text-[#d0d0d8]"><?= $skill; ?></span>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Analytics, Tracking & DevOps -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] space-y-3">
					<h3 class="text-xs font-mono font-bold uppercase tracking-wider text-cyan-500 flex items-center gap-2">
						<span class="w-2 h-2 rounded-full bg-cyan-500"></span> Analytics & DevOps
					</h3>
					<div class="flex flex-wrap gap-2">
						<?php foreach (['Google Tag Manager (GTM)', 'Conversion Pixels', 'Core Web Vitals', 'Lighthouse 90+', 'Docker', 'Nginx & Linux', 'Git'] as $skill): ?>
							<span class="px-2.5 py-1 rounded-lg bg-[#f0f0ea] dark:bg-[#181820] border border-[#dcdcd4] dark:border-[#282834] text-xs font-mono font-medium text-[#222222] dark:text-[#d0d0d8]"><?= $skill; ?></span>
						<?php endforeach; ?>
					</div>
				</div>

			</div>
		</section>

		<!-- ========================================================================= -->
		<!-- 6. SPEAKING, TEACHING & COMMUNITY -->
		<!-- ========================================================================= -->
		<section class="space-y-6">
			<div class="flex items-center gap-3 text-xs font-mono font-bold uppercase tracking-widest text-[#eb3a24]">
				<span class="w-6 h-[2px] bg-[#eb3a24]"></span>
				<span class="lang-en">// SPEAKING, TEACHING & COMMUNITY</span>
				<span class="lang-es hidden">// CONFERENCIAS, DOCENCIA Y COMUNIDAD</span>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				
				<!-- Public Speaking -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] space-y-4">
					<h3 class="text-sm font-bold text-[#111111] dark:text-white uppercase font-mono tracking-wider text-[#163be6] dark:text-cyan-400">
						🎤 <span class="lang-en">Public Speaking & Workshops</span><span class="lang-es hidden">Conferencias y Talleres</span>
					</h3>
					<ul class="space-y-3 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8]">
						<li class="flex items-start gap-2">
							<span class="text-[#eb3a24] font-bold">›</span>
							<span><strong class="text-[#111111] dark:text-white">Campus Party México 4:</strong> Speaker ("WordPress para Negocios").</span>
						</li>
						<li class="flex items-start gap-2">
							<span class="text-[#eb3a24] font-bold">›</span>
							<span><strong class="text-[#111111] dark:text-white">Campus Party México 5:</strong> Workshop Instructor (Full-week intensive on custom WordPress theme development from scratch).</span>
						</li>
						<li class="flex items-start gap-2">
							<span class="text-[#eb3a24] font-bold">›</span>
							<span><strong class="text-[#111111] dark:text-white">WordCamp CDMX:</strong> Speaker in 2 editions ("Gestión de Bases de Datos de Gran Tamaño" & "Creación de Custom Plugins").</span>
						</li>
						<li class="flex items-start gap-2">
							<span class="text-[#eb3a24] font-bold">›</span>
							<span><strong class="text-[#111111] dark:text-white">FLISOL Querétaro & CDMX:</strong> WordPress workshop instructor for 4 consecutive years.</span>
						</li>
					</ul>
				</div>

				<!-- Teaching & Instruction -->
				<div class="p-6 rounded-2xl bg-white dark:bg-[#121216] border border-[#e2e2dc] dark:border-[#22222a] space-y-4">
					<h3 class="text-sm font-bold text-[#111111] dark:text-white uppercase font-mono tracking-wider text-[#eb3a24]">
						🎓 <span class="lang-en">Teaching & Instruction</span><span class="lang-es hidden">Docencia e Idiomas</span>
					</h3>
					<ul class="space-y-3 text-xs sm:text-sm text-[#444444] dark:text-[#b0b0b8]">
						<li class="flex items-start gap-2">
							<span class="text-[#163be6] dark:text-cyan-400 font-bold">›</span>
							<span><strong class="text-[#111111] dark:text-white">KMMX:</strong> Web development, WordPress, UI & UX Instructor for 3 years.</span>
						</li>
						<li class="flex items-start gap-2">
							<span class="text-[#163be6] dark:text-cyan-400 font-bold">›</span>
							<span><strong class="text-[#111111] dark:text-white">Universidad Tecnológica de México (Unitec) Campus Sur:</strong> UI/UX Professor (1 term).</span>
						</li>
						<li class="flex items-start gap-2">
							<span class="text-[#163be6] dark:text-cyan-400 font-bold">›</span>
							<span><strong class="text-[#111111] dark:text-white">Languages:</strong> Spanish (Native) • English (Fluent / Professional working proficiency).</span>
						</li>
						<li class="flex items-start gap-2">
							<span class="text-[#163be6] dark:text-cyan-400 font-bold">›</span>
							<span><strong class="text-[#111111] dark:text-white">Continuous Growth:</strong> 20+ years of self-taught learning, building, and delivering mission-critical systems.</span>
						</li>
					</ul>
				</div>

			</div>
		</section>

		<!-- ========================================================================= -->
		<!-- 7. DOWNLOAD PDF CTA BANNER (DUAL EN & ES) -->
		<!-- ========================================================================= -->
		<section class="relative overflow-hidden rounded-3xl p-8 sm:p-12 md:p-16 bg-gradient-to-br from-[#111115] via-[#161622] to-[#0a0a0e] text-white border border-[#242432] shadow-2xl">
			
			<!-- Glow backdrops -->
			<div class="absolute -right-20 -top-20 w-80 h-80 bg-[#163be6] rounded-full blur-[100px] opacity-40"></div>
			<div class="absolute -left-20 -bottom-20 w-80 h-80 bg-[#eb3a24] rounded-full blur-[100px] opacity-30"></div>

			<div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
				
				<div class="space-y-3 max-w-2xl">
					<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/15 text-[11px] font-mono uppercase tracking-wider text-cyan-300 font-semibold">
						<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
						<span class="lang-en">COMPLETE DOCUMENT • 2026 EDITION</span>
						<span class="lang-es hidden">DOCUMENTO COMPLETO • ACTUALIZADO 2026</span>
					</div>

					<h2 class="text-2xl sm:text-3xl md:text-4xl font-display font-black uppercase tracking-tight">
						<span class="lang-en">Download Curriculum Vitae</span>
						<span class="lang-es hidden">Descarga mi Curriculum Vitae</span>
					</h2>

					<p class="text-sm sm:text-base text-gray-300 font-light leading-relaxed">
						<span class="lang-en">Get the official PDF version in English or Spanish with complete professional experience, system architecture, enterprise client list, and tech stack details.</span>
						<span class="lang-es hidden">Obtén la versión oficial en PDF en Español o Inglés con toda la información detallada de trayectoria, arquitectura de sistemas, clientes enterprise y stack técnico.</span>
					</p>
				</div>

				<div class="flex flex-col sm:flex-row items-center gap-4 flex-shrink-0 w-full lg:w-auto">
					<!-- Download EN PDF -->
					<a href="<?= esc_url($pdf_en_url); ?>" download="Alberto_Contreras_CV_2026_EN.pdf" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-6 py-4 rounded-2xl bg-[#eb3a24] hover:bg-[#d42c18] text-white font-mono font-bold text-xs uppercase tracking-wider shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
						<svg class="w-4 h-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
						<span>PDF (ENGLISH)</span>
					</a>

					<!-- Download ES PDF -->
					<a href="<?= esc_url($pdf_es_url); ?>" download="Alberto_Contreras_CV_2026_ES.pdf" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-6 py-4 rounded-2xl bg-[#163be6] hover:bg-[#1230c0] text-white font-mono font-bold text-xs uppercase tracking-wider shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
						<svg class="w-4 h-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
						<span>PDF (ESPAÑOL)</span>
					</a>
				</div>

			</div>
		</section>

	</div>

</div>

<!-- Bilingual Interactive Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
	const btnEn = document.getElementById('btn-lang-en');
	const btnEs = document.getElementById('btn-lang-es');
	const enElements = document.querySelectorAll('.lang-en');
	const esElements = document.querySelectorAll('.lang-es');

	function setLanguage(lang) {
		if (lang === 'es') {
			enElements.forEach(el => el.classList.add('hidden'));
			esElements.forEach(el => el.classList.remove('hidden'));
			btnEs.classList.add('bg-[#163be6]', 'text-white', 'shadow-sm');
			btnEs.classList.remove('text-[#666666]', 'dark:text-[#a0a0aa]');
			btnEn.classList.remove('bg-[#163be6]', 'text-white', 'shadow-sm');
			btnEn.classList.add('text-[#666666]', 'dark:text-[#a0a0aa]');
			localStorage.setItem('cbm_cv_lang', 'es');
		} else {
			esElements.forEach(el => el.classList.add('hidden'));
			enElements.forEach(el => el.classList.remove('hidden'));
			btnEn.classList.add('bg-[#163be6]', 'text-white', 'shadow-sm');
			btnEn.classList.remove('text-[#666666]', 'dark:text-[#a0a0aa]');
			btnEs.classList.remove('bg-[#163be6]', 'text-white', 'shadow-sm');
			btnEs.classList.add('text-[#666666]', 'dark:text-[#a0a0aa]');
			localStorage.setItem('cbm_cv_lang', 'en');
		}
	}

	if (btnEn && btnEs) {
		btnEn.addEventListener('click', () => setLanguage('en'));
		btnEs.addEventListener('click', () => setLanguage('es'));
	}

	const savedLang = localStorage.getItem('cbm_cv_lang') || 'en';
	setLanguage(savedLang);
});
</script>

<?php
get_footer();
