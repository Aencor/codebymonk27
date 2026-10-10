<?php
/**
 * Import Portfolio Items and Articles for CodeByMonk
 */

require_once('/var/www/html/wp-load.php');
require_once('/var/www/html/wp-admin/includes/image.php');
require_once('/var/www/html/wp-admin/includes/file.php');
require_once('/var/www/html/wp-admin/includes/media.php');

echo "=== Iniciando Importación para CodeByMonk ===\n";

// 1. Proyectos del Portafolio
$projects = [
    [
        'title'        => 'Nathalie Les Bâches',
        'slug'         => 'nathalie-les-baches',
        'url'          => 'https://nathalielesbaches.com',
        'category'     => 'E-Commerce & Branding',
        'tags'         => ['WordPress', 'WooCommerce', 'TailwindCSS', 'Custom Theme', 'UX/UI'],
        'description'  => 'Diseño y desarrollo de plataforma e-commerce a medida y catálogo digital especializado en fabricación y confección de lonas y estructuras de protección industrial y residencial.',
        'challenge'    => 'Crear una experiencia de usuario rápida, intuitiva y moderna para la cotización y compra personalizada de lonas a medida con cálculo dinámico de dimensiones y materiales.',
        'result'       => 'Aumento del 45% en conversiones digitales, reducción de fricción en pedidos y un rendimiento de carga optimizado inferior a 1.2 segundos.',
        'client'       => 'Nathalie Les Bâches',
        'year'         => '2026'
    ],
    [
        'title'        => 'Zones of Life App',
        'slug'         => 'zones-of-life-app',
        'url'          => 'https://app.zonesoflife.com',
        'category'     => 'Web Application & SaaS',
        'tags'         => ['React', 'Web App', 'SaaS', 'API REST', 'TailwindCSS', 'GSAP'],
        'description'  => 'Plataforma web interactiva para gestión personal, coaching, bienestar y desarrollo humano con dashboards interactivos y seguimiento de metas en tiempo real.',
        'challenge'    => 'Construir una interfaz de usuario fluida, altamente interactiva y responsiva con visualización de datos complejos, sincronización en tiempo real y arquitectura de componentes desacoplada.',
        'result'       => 'Plataforma SaaS con alta retención de usuarios, animaciones fluidas a 60fps y un sistema de diseño modular escalable.',
        'client'       => 'Zones of Life Inc.',
        'year'         => '2026'
    ],
    [
        'title'        => 'Accelity Marketing',
        'slug'         => 'accelity-marketing',
        'url'          => 'https://accelitymarketing.com',
        'category'     => 'B2B Tech Marketing',
        'tags'         => ['HubSpot', 'WordPress', 'B2B', 'Lead Gen', 'SASS', 'Webpack'],
        'description'  => 'Sitio web corporativo y máquina de generación de demanda para agencia de marketing B2B especializada en startups SaaS y empresas tecnológicas.',
        'challenge'    => 'Rediseñar por completo la arquitectura de información para comunicar con claridad la propuesta de valor, integrando formularios avanzados y seguimiento de conversiones multicanal.',
        'result'       => 'Incremento del 70% en solicitudes de auditoría B2B y tiempo de permanencia duplicado en páginas de casos de estudio.',
        'client'       => 'Accelity',
        'year'         => '2025'
    ],
    [
        'title'        => 'ThreatX Cybersecurity',
        'slug'         => 'threatx-cybersecurity',
        'url'          => 'https://threatx.com',
        'category'     => 'Cybersecurity & Enterprise',
        'tags'         => ['Enterprise Web', 'Cybersecurity', 'Dark UI', 'GSAP', 'NextGen Design'],
        'description'  => 'Portal corporativo de ciberseguridad enfocado en protección de APIs y aplicaciones web críticas para clientes empresariales globales.',
        'challenge'    => 'Transmitir autoridad, seguridad avanzada e innovación tecnológica a través de una identidad visual dark-mode moderna con micro-interacciones de alto rendimiento.',
        'result'       => 'Posicionamiento líder en el sector, aumento en el engagement de decisores de TI (CISO / CTO) y reducción de tiempos de rebote.',
        'client'       => 'ThreatX Inc.',
        'year'         => '2025'
    ],
    [
        'title'        => 'AJ Tutoring',
        'slug'         => 'aj-tutoring',
        'url'          => 'https://ajtutoring.com',
        'category'     => 'Education & Booking',
        'tags'         => ['WordPress', 'Custom Gutenberg', 'Booking Flow', 'SEO', 'Mobile First'],
        'description'  => 'Sitio web educativo y plataforma de reserva de tutorías personalizadas para estudiantes y familias en Silicon Valley y el área de la bahía.',
        'challenge'    => 'Facilitar la navegación para padres de familia y estudiantes con un flujo de reserva intuitivo para decenas de materias, exámenes estandarizados y programas personalizados.',
        'result'       => 'Mejora sustancial en la tasa de conversión del embudo de agendamiento y liderazgo en posicionamiento orgánico local.',
        'client'       => 'AJ Tutoring',
        'year'         => '2025'
    ],
    [
        'title'        => 'Morrisser',
        'slug'         => 'morrisser',
        'url'          => 'https://morrisser.com',
        'category'     => 'Corporate & Engineering',
        'tags'         => ['Industrial Design', 'Clean UI', 'Performance', 'Multilingual', 'PHP'],
        'description'  => 'Sitio web industrial y corporativo de servicios electromecánicos, mantenimiento y proyectos de infraestructura energética.',
        'challenge'    => 'Estructurar un catálogo extenso de servicios técnicos especializados con alta legibilidad, fichas técnicas descargables y rapidez de carga en conexiones móviles.',
        'result'       => 'Presencia corporativa sólida, tiempo de carga inferior a 1 segundo y tasa de contacto comercial incrementada.',
        'client'       => 'Morrisser Ingeniería',
        'year'         => '2024'
    ],
    [
        'title'        => 'Tunas Craft',
        'slug'         => 'tunas-craft',
        'url'          => 'https://tunascraft.com',
        'category'     => 'Craft & E-Commerce',
        'tags'         => ['Craft Beer', 'Branding', 'Storytelling', 'TailwindCSS', 'Modern Web'],
        'description'  => 'Experiencia digital de marca y tienda online enfocada en storytelling visual, productos artesanales premium y cultura gastronómica.',
        'challenge'    => 'Diseñar una estética vibrante y artesanal que transmita la pasión del producto mediante fotografía inmersiva y tipografía de alto impacto con checkout ágil.',
        'result'       => 'Ventas directas aumentadas significativamente y reconocimientos de diseño en portales de inspiración web.',
        'client'       => 'Tunas Craft Brewery',
        'year'         => '2024'
    ]
];

function download_screenshot_and_attach($url, $title, $post_id) {
    echo "  > Obteniendo screenshot para: {$url}...\n";
    $apiUrl = "https://api.microlink.io?url=" . urlencode($url) . "&screenshot=true&embed=screenshot.url&viewport.width=1920&viewport.height=1080";
    
    $tmp_file = download_url($apiUrl, 30);
    
    if (is_wp_error($tmp_file)) {
        echo "    ! Error descargando via microlink ({$tmp_file->get_error_message()}), intentando thum.io...\n";
        $fallbackUrl = "https://image.thum.io/get/width/1200/crop/800/noanimate/{$url}";
        $tmp_file = download_url($fallbackUrl, 30);
    }
    
    if (is_wp_error($tmp_file)) {
        echo "    ! Fallo descarga de screenshot: " . $tmp_file->get_error_message() . "\n";
        return false;
    }

    $file_array = [
        'name'     => sanitize_title($title) . '-screenshot.png',
        'tmp_name' => $tmp_file
    ];

    $attachment_id = media_handle_sideload($file_array, $post_id, $title);

    if (is_wp_error($attachment_id)) {
        @unlink($tmp_file);
        echo "    ! Error guardando imagen en WP: " . $attachment_id->get_error_message() . "\n";
        return false;
    }

    set_post_thumbnail($post_id, $attachment_id);
    echo "    ✓ Screenshot asignado como imagen destacada (ID: {$attachment_id})\n";
    return $attachment_id;
}

foreach ($projects as $item) {
    echo "\nProcesando Proyecto: {$item['title']}...\n";
    
    $existing = get_page_by_path($item['slug'], OBJECT, 'portfolio');
    
    $post_data = [
        'post_title'   => $item['title'],
        'post_name'    => $item['slug'],
        'post_type'    => 'portfolio',
        'post_status'  => 'publish',
        'post_excerpt' => $item['description'],
        'post_content' => "<!-- wp:paragraph -->\n<p>{$item['description']}</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">El Reto</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>{$item['challenge']}</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">El Resultado</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>{$item['result']}</p>\n<!-- /wp:paragraph -->"
    ];

    if ($existing) {
        $post_data['ID'] = $existing->ID;
        $post_id = wp_update_post($post_data);
        echo "  - Actualizado Proyecto ID: {$post_id}\n";
    } else {
        $post_id = wp_insert_post($post_data);
        echo "  - Creado Proyecto ID: {$post_id}\n";
    }

    if (is_wp_error($post_id)) {
        echo "  ! Error guardando post: " . $post_id->get_error_message() . "\n";
        continue;
    }

    // 1. Guardar Metadatos & ACF
    update_post_meta($post_id, 'project_url', $item['url']);
    update_post_meta($post_id, 'project_description', $item['description']);
    update_post_meta($post_id, 'project_challenge', $item['challenge']);
    update_post_meta($post_id, 'project_result', $item['result']);
    update_post_meta($post_id, 'project_client', $item['client']);
    update_post_meta($post_id, 'project_year', $item['year']);

    if (function_exists('update_field')) {
        update_field('project_url', $item['url'], $post_id);
        update_field('project_description', $item['description'], $post_id);
        update_field('project_challenge', $item['challenge'], $post_id);
        update_field('project_result', $item['result'], $post_id);
        update_field('project_client', $item['client'], $post_id);
        update_field('project_year', $item['year'], $post_id);
    }

    // 2. Asignar Categoría
    if (!empty($item['category'])) {
        $cat = wp_insert_term($item['category'], 'portfolio_category');
        $cat_id = is_wp_error($cat) ? (int)$cat->error_data['term_exists'] : (int)$cat['term_id'];
        wp_set_object_terms($post_id, [$cat_id], 'portfolio_category');
    }

    // 3. Asignar Tags
    if (!empty($item['tags'])) {
        wp_set_object_terms($post_id, $item['tags'], 'portfolio_tag');
    }

    // 4. Descargar screenshot si no tiene imagen destacada
    if (!has_post_thumbnail($post_id)) {
        download_screenshot_and_attach($item['url'], $item['title'], $post_id);
    } else {
        echo "  ✓ Ya tiene imagen destacada.\n";
    }
}

// 2. Artículos del Blog de CodeByMonk
echo "\n=== Importando Artículos de CodeByMonk ===\n";

$articles = [
    [
        'title'    => 'Estrategias de Diseño Web Moderno: Rendimiento, Estética y Conversión en 2026',
        'slug'     => 'estrategias-diseno-web-moderno-2026',
        'category' => 'Diseño Web & UX',
        'tags'     => ['Diseño Web', 'UX/UI', 'Conversión', 'Tendencias 2026'],
        'excerpt'  => 'Descubre las claves para crear sitios web de alto impacto que no solo sorprendan visualmente, sino que carguen al instante y maximicen la tasa de conversión.',
        'content'  => "<!-- wp:paragraph -->\n<p>En el panorama digital actual, un sitio web exitoso debe conjugar tres pilares fundamentales: identidad visual premium, arquitectura de rendimiento ultrarrápido y una experiencia de usuario orientada a la conversión.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">1. Estética que Genera Confianza Inmediata</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p>Las primeras impresiones se forman en menos de 50 milisegundos. Tipografías con personalidad, paletas de colores armoniosas, modo oscuro refinado y micro-animaciones fluidas con GSAP marcan la diferencia entre un sitio genérico y una marca líder.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">2. Core Web Vitals y Rendimiento</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p>La velocidad ya no es un lujo, es un factor de ranking crítico en Google y un catalizador de ventas. La optimización de assets, CSS moderno con Tailwind y carga diferida garantizan tiempos de respuesta instantáneos.</p>\n<!-- /wp:paragraph -->"
    ],
    [
        'title'    => 'Desarrollo de Temas WordPress con Bloques Gutenberg y ACF: Guía Definitiva',
        'slug'     => 'desarrollo-temas-wordpress-bloques-gutenberg-acf',
        'category' => 'Desarrollo WordPress',
        'tags'     => ['WordPress', 'Gutenberg', 'ACF Pro', 'Full Site Editing'],
        'excerpt'  => 'Aprende a estructurar un tema de WordPress moderno basado en bloques personalizados con ACF, permitiendo total autonomía editorial sin sacrificar velocidad ni código limpio.',
        'content'  => "<!-- wp:paragraph -->\n<p>El desarrollo con Gutenberg y Advanced Custom Fields (ACF Pro) representa el estándar de oro en la creación de temas profesionales a medida para WordPress.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Ventajas de la Arquitectura Modular por Bloques</h2>\n<!-- /wp:heading -->\n<!-- wp:list -->\n<ul><li><strong>Reutilización total:</strong> Cada sección (Hero, Grid, Testimonios, CTA) es un componente encapsulado.</li><li><strong>Edición visual fluida:</strong> Los clientes pueden reordenar y configurar sus páginas sin tocar código.</li><li><strong>Carga selectiva de assets:</strong> Solo se cargan los estilos y scripts de los bloques presentes en cada página.</li></ul>\n<!-- /wp:list -->"
    ],
    [
        'title'    => 'Tailwind CSS v4 en WordPress: Flujo de Trabajo y Optimización de Estilos',
        'slug'     => 'tailwind-css-v4-en-wordpress',
        'category' => 'Frontend & Herramientas',
        'tags'     => ['Tailwind CSS', 'Laravel Mix', 'PostCSS', 'Frontend'],
        'excerpt'  => 'Cómo integrar Tailwind CSS v4 con Sass y Laravel Mix para lograr compilaciones ultrarrápidas y hojas de estilo optimizadas en proyectos de WordPress.',
        'content'  => "<!-- wp:paragraph -->\n<p>Tailwind CSS v4 introduce un motor CSS nativo más ligero, variables de tema fluidas y compatibilidad total con PostCSS moderno, facilitando el diseño de interfaces consistentes y mantenibles.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Mejores Prácticas de Estilizado</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p>Al combinar la directiva @theme de Tailwind con componentes SCSS modulares, obtenemos un sistema de tokens escalable para colores, fuentes, espaciados y animaciones.</p>\n<!-- /wp:paragraph -->"
    ],
    [
        'title'    => 'Optimización de Landing Pages B2B: De Clics a Clientes Calificados',
        'slug'     => 'optimizacion-landing-pages-b2b',
        'category' => 'Conversión & Marketing',
        'tags'     => ['Landing Pages', 'B2B', 'CRO', 'Copywriting'],
        'excerpt'  => 'Estructuras de diseño probadas, micro-copys persuasivos y jerarquía visual para convertir visitantes en clientes de alto valor en entornos B2B.',
        'content'  => "<!-- wp:paragraph -->\n<p>El diseño de una landing page B2B exitosa requiere claridad quirúrgica: propuesta de valor contundente en el primer scroll, prueba social estratégica y formularios optimizados sin fricciones.</p>\n<!-- /wp:paragraph -->"
    ]
];

foreach ($articles as $art) {
    echo "Procesando Artículo: {$art['title']}...\n";
    $existing = get_page_by_path($art['slug'], OBJECT, 'post');
    
    $post_data = [
        'post_title'   => $art['title'],
        'post_name'    => $art['slug'],
        'post_type'    => 'post',
        'post_status'  => 'publish',
        'post_excerpt' => $art['excerpt'],
        'post_content' => $art['content']
    ];

    if ($existing) {
        $post_data['ID'] = $existing->ID;
        $post_id = wp_update_post($post_data);
        echo "  - Actualizado Artículo ID: {$post_id}\n";
    } else {
        $post_id = wp_insert_post($post_data);
        echo "  - Creado Artículo ID: {$post_id}\n";
    }

    if (is_wp_error($post_id)) {
        echo "  ! Error: " . $post_id->get_error_message() . "\n";
        continue;
    }

    // Categoría
    if (!empty($art['category'])) {
        $cat = wp_insert_term($art['category'], 'category');
        $cat_id = is_wp_error($cat) ? (int)$cat->error_data['term_exists'] : (int)$cat['term_id'];
        wp_set_post_categories($post_id, [$cat_id]);
    }

    // Tags
    if (!empty($art['tags'])) {
        wp_set_post_tags($post_id, $art['tags']);
    }
}

echo "\n=== Proceso Finalizado Exitosamente ===\n";
