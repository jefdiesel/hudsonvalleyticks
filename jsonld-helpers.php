<?php
/**
 * JSON-LD STRUCTURED DATA HELPER FUNCTIONS
 *
 * This file provides helper functions to generate JSON-LD structured data
 * for various schema types used across the Hudson Valley Ticks website.
 *
 * Usage:
 * 1. Include this file in your page: require_once 'jsonld-helpers.php';
 * 2. Build your schema array using the helper functions
 * 3. Set the $jsonLdSchemas array before including template.php
 *
 * Example:
 * $jsonLdSchemas = [
 *     generateArticleSchema('Title', 'Description', '2025-10-01', '2025-10-15'),
 *     generateBreadcrumbSchema([['name' => 'Home', 'url' => '/'], ['name' => 'Blog', 'url' => '/blog.php']])
 * ];
 * include 'template.php';
 */

// Base URL for the site
define('SITE_URL', 'https://www.hudsonvalleyticks.com');
define('SITE_NAME', 'Hudson Valley Ticks');
define('SITE_LOGO', SITE_URL . '/images/logo.png');

/**
 * Generate Organization Schema
 * Use on homepage and important pages
 *
 * @return array Organization schema
 */
function generateOrganizationSchema() {
    return [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'url' => SITE_URL,
        'logo' => SITE_LOGO,
        'description' => 'Evidence-based tick prevention and Lyme disease information for Hudson Valley residents.',
        'email' => 'info@hudsonvalleyticks.com',
        'areaServed' => [
            '@type' => 'Place',
            'name' => 'Hudson Valley, New York'
        ],
        'sameAs' => [
            // Add social media profiles here when available
        ]
    ];
}

/**
 * Generate WebSite Schema with SearchAction
 * Use on homepage
 *
 * @return array WebSite schema
 */
function generateWebSiteSchema() {
    return [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => SITE_NAME,
        'url' => SITE_URL,
        'description' => 'Evidence-based tick prevention and Lyme disease information for Hudson Valley residents.',
        'publisher' => [
            '@type' => 'Organization',
            'name' => SITE_NAME,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => SITE_LOGO
            ]
        ],
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => SITE_URL . '/search?q={search_term_string}'
            ],
            'query-input' => 'required name=search_term_string'
        ]
    ];
}

/**
 * Generate LocalBusiness Schema
 * For the Hudson Valley area focus
 *
 * @return array LocalBusiness schema
 */
function generateLocalBusinessSchema() {
    return [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        '@id' => SITE_URL . '/#localbusiness',
        'name' => SITE_NAME,
        'description' => 'Evidence-based tick prevention resources and Lyme disease education serving the Hudson Valley region of New York.',
        'url' => SITE_URL,
        'logo' => SITE_LOGO,
        'email' => 'info@hudsonvalleyticks.com',
        'areaServed' => [
            '@type' => 'GeoCircle',
            'geoMidpoint' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 41.7004,
                'longitude' => -73.9215
            ],
            'geoRadius' => '100000'
        ],
        'serviceArea' => [
            '@type' => 'AdministrativeArea',
            'name' => 'Hudson Valley, New York',
            'containsPlace' => [
                ['@type' => 'AdministrativeArea', 'name' => 'Putnam County, NY'],
                ['@type' => 'AdministrativeArea', 'name' => 'Dutchess County, NY'],
                ['@type' => 'AdministrativeArea', 'name' => 'Ulster County, NY'],
                ['@type' => 'AdministrativeArea', 'name' => 'Orange County, NY'],
                ['@type' => 'AdministrativeArea', 'name' => 'Rockland County, NY'],
                ['@type' => 'AdministrativeArea', 'name' => 'Westchester County, NY'],
                ['@type' => 'AdministrativeArea', 'name' => 'Columbia County, NY']
            ]
        ],
        'knowsAbout' => [
            'Tick Prevention',
            'Lyme Disease',
            'Tick-Borne Diseases',
            'Hudson Valley Hiking Safety',
            'Permethrin Treatment',
            'DEET Repellents'
        ]
    ];
}

/**
 * Generate Article Schema
 * For blog posts and informational articles
 *
 * @param string $title Article title
 * @param string $description Article description
 * @param string $datePublished Publication date (YYYY-MM-DD format)
 * @param string $dateModified Last modified date (YYYY-MM-DD format, optional)
 * @param string $image Featured image URL (optional)
 * @param string $author Author name (optional, defaults to site name)
 * @return array Article schema
 */
function generateArticleSchema($title, $description, $datePublished, $dateModified = null, $image = null, $author = null) {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $title,
        'description' => $description,
        'datePublished' => $datePublished,
        'dateModified' => $dateModified ?? $datePublished,
        'author' => [
            '@type' => 'Organization',
            'name' => $author ?? SITE_NAME,
            'url' => SITE_URL
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => SITE_NAME,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => SITE_LOGO
            ]
        ],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => SITE_URL . '/' . basename($_SERVER['PHP_SELF'])
        ]
    ];

    if ($image) {
        $schema['image'] = [
            '@type' => 'ImageObject',
            'url' => $image
        ];
    }

    return $schema;
}

/**
 * Generate MedicalWebPage Schema
 * For health-related articles about Lyme disease, symptoms, treatments
 *
 * @param string $title Page title
 * @param string $description Page description
 * @param string $datePublished Publication date (YYYY-MM-DD format)
 * @param string $dateModified Last modified date (optional)
 * @param array $about Array of medical topics covered
 * @return array MedicalWebPage schema
 */
function generateMedicalWebPageSchema($title, $description, $datePublished, $dateModified = null, $about = []) {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'MedicalWebPage',
        'name' => $title,
        'description' => $description,
        'datePublished' => $datePublished,
        'dateModified' => $dateModified ?? $datePublished,
        'lastReviewed' => $dateModified ?? $datePublished,
        'publisher' => [
            '@type' => 'Organization',
            'name' => SITE_NAME
        ],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => SITE_URL . '/' . basename($_SERVER['PHP_SELF'])
        ],
        'specialty' => 'Infectious Disease',
        'medicalAudience' => [
            '@type' => 'MedicalAudience',
            'audienceType' => 'Patient'
        ]
    ];

    if (!empty($about)) {
        $schema['about'] = array_map(function($topic) {
            return [
                '@type' => 'MedicalCondition',
                'name' => $topic
            ];
        }, $about);
    }

    return $schema;
}

/**
 * Generate FAQ Schema
 * For pages with Q&A content
 *
 * @param array $faqs Array of FAQ items [['question' => '...', 'answer' => '...'], ...]
 * @return array FAQPage schema
 */
function generateFAQSchema($faqs) {
    $mainEntity = array_map(function($faq) {
        return [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer']
            ]
        ];
    }, $faqs);

    return [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $mainEntity
    ];
}

/**
 * Generate Product Schema
 * For product review pages (tick prevention gear, repellents, etc.)
 *
 * @param string $name Product name
 * @param string $description Product description
 * @param float $price Product price (low end of range)
 * @param float $priceHigh Product price (high end, optional)
 * @param float $rating Average rating (1-5)
 * @param int $reviewCount Number of reviews
 * @param string $url Product URL (Amazon link)
 * @param string $image Product image URL (optional)
 * @param string $brand Brand name (optional)
 * @param string $sku Product SKU/ASIN (optional)
 * @return array Product schema
 */
function generateProductSchema($name, $description, $price, $priceHigh = null, $rating = null, $reviewCount = null, $url = null, $image = null, $brand = null, $sku = null) {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'name' => $name,
        'description' => $description,
        'offers' => [
            '@type' => 'AggregateOffer',
            'lowPrice' => $price,
            'highPrice' => $priceHigh ?? $price,
            'priceCurrency' => 'USD',
            'availability' => 'https://schema.org/InStock',
            'url' => $url
        ]
    ];

    if ($rating !== null && $reviewCount !== null) {
        $schema['aggregateRating'] = [
            '@type' => 'AggregateRating',
            'ratingValue' => $rating,
            'bestRating' => 5,
            'worstRating' => 1,
            'reviewCount' => $reviewCount
        ];
    }

    if ($image) {
        $schema['image'] = $image;
    }

    if ($brand) {
        $schema['brand'] = [
            '@type' => 'Brand',
            'name' => $brand
        ];
    }

    if ($sku) {
        $schema['sku'] = $sku;
    }

    return $schema;
}

/**
 * Generate Review Schema
 * For individual product reviews
 *
 * @param string $productName Name of reviewed product
 * @param string $reviewBody Review text
 * @param float $ratingValue Rating given (1-5)
 * @param string $author Reviewer name
 * @param string $datePublished Review date
 * @return array Review schema
 */
function generateReviewSchema($productName, $reviewBody, $ratingValue, $author = null, $datePublished = null) {
    return [
        '@context' => 'https://schema.org',
        '@type' => 'Review',
        'itemReviewed' => [
            '@type' => 'Product',
            'name' => $productName
        ],
        'reviewBody' => $reviewBody,
        'reviewRating' => [
            '@type' => 'Rating',
            'ratingValue' => $ratingValue,
            'bestRating' => 5,
            'worstRating' => 1
        ],
        'author' => [
            '@type' => 'Organization',
            'name' => $author ?? SITE_NAME
        ],
        'datePublished' => $datePublished ?? date('Y-m-d'),
        'publisher' => [
            '@type' => 'Organization',
            'name' => SITE_NAME
        ]
    ];
}

/**
 * Generate TouristAttraction Schema
 * For hiking guide pages
 *
 * @param string $name Trail/attraction name
 * @param string $description Description
 * @param float $latitude GPS latitude
 * @param float $longitude GPS longitude
 * @param string $address Address or location description
 * @param string $image Image URL (optional)
 * @return array TouristAttraction schema
 */
function generateTouristAttractionSchema($name, $description, $latitude, $longitude, $address = null, $image = null) {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'TouristAttraction',
        'name' => $name,
        'description' => $description,
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => $latitude,
            'longitude' => $longitude
        ],
        'isAccessibleForFree' => true,
        'publicAccess' => true
    ];

    if ($address) {
        $schema['address'] = [
            '@type' => 'PostalAddress',
            'addressLocality' => $address,
            'addressRegion' => 'NY',
            'addressCountry' => 'US'
        ];
    }

    if ($image) {
        $schema['image'] = $image;
    }

    return $schema;
}

/**
 * Generate Place Schema with geo coordinates
 * For location-specific pages
 *
 * @param string $name Place name
 * @param string $description Description
 * @param float $latitude GPS latitude
 * @param float $longitude GPS longitude
 * @param string $address Full address (optional)
 * @return array Place schema
 */
function generatePlaceSchema($name, $description, $latitude, $longitude, $address = null) {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Place',
        'name' => $name,
        'description' => $description,
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => $latitude,
            'longitude' => $longitude
        ]
    ];

    if ($address) {
        $schema['address'] = $address;
    }

    return $schema;
}

/**
 * Generate Breadcrumb Schema
 * For page navigation structure
 *
 * @param array $items Array of breadcrumb items [['name' => 'Home', 'url' => '/'], ['name' => 'Blog', 'url' => '/blog.php']]
 * @return array BreadcrumbList schema
 */
function generateBreadcrumbSchema($items) {
    $itemListElement = [];
    $position = 1;

    foreach ($items as $item) {
        $itemListElement[] = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $item['name'],
            'item' => strpos($item['url'], 'http') === 0 ? $item['url'] : SITE_URL . $item['url']
        ];
        $position++;
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $itemListElement
    ];
}

/**
 * Generate HowTo Schema
 * For step-by-step instruction pages
 *
 * @param string $name Title of the how-to
 * @param string $description Description
 * @param array $steps Array of step descriptions
 * @param string $totalTime ISO 8601 duration (e.g., 'PT5M' for 5 minutes)
 * @return array HowTo schema
 */
function generateHowToSchema($name, $description, $steps, $totalTime = null) {
    $stepElements = [];
    $position = 1;

    foreach ($steps as $stepText) {
        $stepElements[] = [
            '@type' => 'HowToStep',
            'position' => $position,
            'text' => $stepText
        ];
        $position++;
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => $name,
        'description' => $description,
        'step' => $stepElements
    ];

    if ($totalTime) {
        $schema['totalTime'] = $totalTime;
    }

    return $schema;
}

/**
 * Render all JSON-LD schemas as script tags
 * Called by template.php to inject schemas into the page
 *
 * @param array $schemas Array of schema arrays
 * @return string HTML script tags with JSON-LD
 */
function renderJsonLdSchemas($schemas) {
    $output = '';
    foreach ($schemas as $schema) {
        if (!empty($schema)) {
            $output .= '<script type="application/ld+json">' . "\n";
            $output .= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            $output .= "\n</script>\n";
        }
    }
    return $output;
}
