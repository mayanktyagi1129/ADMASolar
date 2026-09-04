<?php
/**
 * Centralized SEO Configuration & Metadata Engine
 * All page metadata, titles, descriptions, keywords, OpenGraph tags, and Schema.org settings are managed from this single file.
 */

if (!defined('SITE_URL')) {
    // Detect domain base URL dynamically or set default
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $script = $_SERVER['SCRIPT_NAME'] ?? '';
    $dir = dirname($script);
    $dir = ($dir === '/' || $dir === '\\') ? '' : $dir;
    define('SITE_URL', rtrim($protocol . $host . $dir, '/'));
}

// Global Site Defaults
$site_config = [
    'site_name'   => 'ADMA Solar Energy',
    'author'      => 'ADMA Solar Energy Ltd.',
    'phone'       => '+91 7303397790',
    'email'       => 'support@admasolar.in',
    'default_og_image' => SITE_URL . '/assets/icons/adma.webp',
    'twitter_handle'   => '@ADMASolar',
    'robots'      => 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',
];

// Per-Page SEO Metadata Central Database
$seo_pages = [
    'home' => [
        'title'       => "ADMA Solar | India's Most Trusted Solar Energy & Rooftop Solutions",
        'description' => "ADMA Solar - India's Premier Solar Energy Solutions Provider. Get Tier-1 Solar Rooftop Systems with PM Surya Ghar ₹78,000 Govt Subsidy, 25-Year Warranty, and Zero Down Payment EMI.",
        'keywords'    => "solar rooftop, solar energy india, pm surya ghar subsidy, solar panel price, residential solar system, solar calculator",
        'canonical'   => SITE_URL . '/',
        'og_type'     => 'website',
    ],
    'about' => [
        'title'       => "About Us | ADMA Solar Energy India",
        'description' => "About ADMA Solar - India's leading green energy transition partner. Discover our mission, 50MW+ installation footprint, leadership, and MNRE certifications.",
        'keywords'    => "about adma solar, solar energy company india, mnre certified solar installer, rooftop solar company",
        'canonical'   => SITE_URL . '/about.php',
        'og_type'     => 'website',
    ],
    'services' => [
        'title'       => "Solar Solutions & Services | ADMA Solar Energy",
        'description' => "Explore ADMA Solar's turnkey solar solutions: Residential Rooftop, Commercial MW Solar Plants, Off-Grid Battery Storage, and Solar Maintenance AMC across India.",
        'keywords'    => "residential solar rooftop, commercial solar installation, solar amc maintenance, hybrid solar solution",
        'canonical'   => SITE_URL . '/services.php',
        'og_type'     => 'website',
    ],
    'calculator' => [
        'title'       => "ADMA Solar Savings Calculator & Subsidy Estimator | ADMA Solar",
        'description' => "Solar Rooftop Calculator - Estimate recommended kW solar plant capacity, annual bill savings, PM Surya Ghar govt subsidy (up to ₹78,000), and 25-year ROI instantly.",
        'keywords'    => "solar calculator, solar rooftop savings estimator, pm surya ghar subsidy calculator, solar kw estimate",
        'canonical'   => SITE_URL . '/calculator.php',
        'og_type'     => 'website',
    ],
    'contact' => [
        'title'       => "Contact Us | ADMA Solar Energy",
        'description' => "Contact ADMA Solar Energy - Book a free 3D solar rooftop audit, inquire about PM Surya Ghar subsidy, or speak to our technical solar engineers.",
        'keywords'    => "contact adma solar, book solar audit, solar rooftop consultation, adma solar phone number",
        'canonical'   => SITE_URL . '/contact.php',
        'og_type'     => 'website',
    ],
    'grid-solar' => [
        'title'       => "On-Grid (Grid-Tied) Solar System Guide | ADMA Solar Knowledge Base",
        'description' => "Complete Guide to On-Grid (Grid-Tied) Solar Energy Systems in India. Learn how net metering works, PM Surya Ghar subsidy ₹78,000, components, cost, and 3-year payback ROI.",
        'keywords'    => "on grid solar, grid tied solar, solar net metering, pm surya ghar subsidy, solar rooftop cost, grid inverter, bi directional meter",
        'canonical'   => SITE_URL . '/grid-solar.php',
        'og_type'     => 'article',
    ],
    'hybrid-solar' => [
        'title'       => "Hybrid Solar System Guide | Net-Metering + Battery Backup | ADMA Solar",
        'description' => "Complete Guide to Hybrid Solar Systems with Net Metering & Battery Storage in India. Learn about intelligent energy management, uninterrupted UPS backup (<10ms), peak shaving, and zero power cuts.",
        'keywords'    => "hybrid solar system, hybrid inverter, solar battery wall, net metering battery backup, ups solar system, smart energy management, peak tariff shaving",
        'canonical'   => SITE_URL . '/hybrid-solar.php',
        'og_type'     => 'article',
    ],
    'off-grid-solar' => [
        'title'       => "Off-Grid Standalone Solar System Guide | ADMA Solar Knowledge Base",
        'description' => "Complete Guide to Off-Grid Standalone Solar Energy Systems in India. Learn about battery storage sizing (LiFePO4/Tubular), MPPT charge controllers, zero power cuts, and remote energy independence.",
        'keywords'    => "off grid solar, standalone solar system, solar battery storage, mppt charge controller, solar battery bank, off grid inverter, remote solar system",
        'canonical'   => SITE_URL . '/off-grid-solar.php',
        'og_type'     => 'article',
    ],
    'knowledge-base' => [
        'title'       => "Solar Knowledge Base | On-Grid, Off-Grid & Hybrid Solar Systems Explained",
        'description' => "ADMA Solar Knowledge Base - Comprehensive guide to On-Grid, Off-Grid, and Hybrid Solar Systems. Compare costs, battery backup, net metering, and government subsidies.",
        'keywords'    => "solar knowledge base, on-grid solar, off-grid solar, hybrid solar system, solar comparison, solar net metering, solar battery storage",
        'canonical'   => SITE_URL . '/knowledge-base.php',
        'og_type'     => 'website',
    ],
    'faq' => [
        'title'       => "Frequently Asked Questions (FAQ) | ADMA Solar Energy",
        'description' => "Find answers to all 57 frequently asked questions about rooftop solar installation, costs, savings, government subsidies, net metering, battery backup, and maintenance with ADMA Solar.",
        'keywords'    => "solar faqs, rooftop solar questions, adma solar faq, solar panel cost, pm surya ghar subsidy faq, net metering solar, solar installation questions",
        'canonical'   => SITE_URL . '/faq.php',
        'og_type'     => 'website',
    ],
];

/**
 * Returns merged SEO metadata for a given page key
 */
function get_seo_data($page_key = 'home') {
    global $site_config, $seo_pages;
    
    $page_seo = $seo_pages[$page_key] ?? $seo_pages['home'];
    
    return [
        'title'       => $page_seo['title'] ?? $site_config['site_name'],
        'description' => $page_seo['description'] ?? '',
        'keywords'    => $page_seo['keywords'] ?? '',
        'author'      => $site_config['author'],
        'robots'      => $site_config['robots'],
        'canonical'   => $page_seo['canonical'] ?? SITE_URL,
        'og_type'     => $page_seo['og_type'] ?? 'website',
        'og_image'    => $page_seo['og_image'] ?? $site_config['default_og_image'],
        'site_name'   => $site_config['site_name'],
    ];
}

/**
 * Outputs formatted SEO HTML header tags
 */
function render_seo_tags($page_key = 'home') {
    $seo = get_seo_data($page_key);
    
    $html = '  <title>' . htmlspecialchars($seo['title']) . '</title>' . "\n";
    $html .= '  <meta name="description" content="' . htmlspecialchars($seo['description']) . '">' . "\n";
    if (!empty($seo['keywords'])) {
        $html .= '  <meta name="keywords" content="' . htmlspecialchars($seo['keywords']) . '">' . "\n";
    }
    $html .= '  <meta name="author" content="' . htmlspecialchars($seo['author']) . '">' . "\n";
    $html .= '  <meta name="robots" content="' . htmlspecialchars($seo['robots']) . '">' . "\n";
    $html .= '  <link rel="canonical" href="' . htmlspecialchars($seo['canonical']) . '">' . "\n";
    
    // Open Graph Tags
    $html .= '  <meta property="og:locale" content="en_US">' . "\n";
    $html .= '  <meta property="og:type" content="' . htmlspecialchars($seo['og_type']) . '">' . "\n";
    $html .= '  <meta property="og:title" content="' . htmlspecialchars($seo['title']) . '">' . "\n";
    $html .= '  <meta property="og:description" content="' . htmlspecialchars($seo['description']) . '">' . "\n";
    $html .= '  <meta property="og:url" content="' . htmlspecialchars($seo['canonical']) . '">' . "\n";
    $html .= '  <meta property="og:site_name" content="' . htmlspecialchars($seo['site_name']) . '">' . "\n";
    $html .= '  <meta property="og:image" content="' . htmlspecialchars($seo['og_image']) . '">' . "\n";
    
    // Twitter Card Tags
    $html .= '  <meta name="twitter:card" content="summary_large_image">' . "\n";
    $html .= '  <meta name="twitter:title" content="' . htmlspecialchars($seo['title']) . '">' . "\n";
    $html .= '  <meta name="twitter:description" content="' . htmlspecialchars($seo['description']) . '">' . "\n";
    $html .= '  <meta name="twitter:image" content="' . htmlspecialchars($seo['og_image']) . '">' . "\n";

    // Structured Data (Schema.org JSON-LD)
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $seo['site_name'],
        'url' => SITE_URL,
        'logo' => $seo['og_image'],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+91-7303397790',
            'contactType' => 'customer service',
            'areaServed' => 'IN'
        ]
    ];
    $html .= '  <script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    
    return $html;
}
