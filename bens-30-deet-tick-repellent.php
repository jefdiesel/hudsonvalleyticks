<?php
/**
 * BEN'S 30% DEET TICK REPELLENT PAGE
 *
 * Product review and guide for Ben's 30% DEET spray repellent
 */

require_once 'jsonld-helpers.php';

// PAGE TITLE - Shows in browser tab and Google search
$pageTitle = 'Ben\'s 30% DEET: CDC-Recommended Tick Repellent | Hudson Valley Ticks';

// PAGE DESCRIPTION - Shows under title in Google search results (keep under 160 characters)
$pageDescription = 'Ben\'s 30% DEET is the CDC-recommended minimum for effective tick protection. Water-based formula provides 12 hours of strong protection. Trusted by professionals.';

// JSON-LD structured data for product review
$jsonLdSchemas = [
    // Product schema
    generateProductSchema(
        'Ben\'s 30% DEET 3.4oz Pump Spray',
        'Water-based tick and insect repellent with 30% DEET. CDC-recommended minimum concentration for effective tick protection. Provides up to 12 hours of protection.',
        10,
        15,
        4.4,
        6200,
        'https://www.amazon.com/Bens-Mosquito-Insect-Repellent-Ounce/dp/B0CDG6KS9J?tag=hudsonvalleyt-20',
        null,
        'Ben\'s'
    ),
    // Review schema
    generateReviewSchema(
        'Ben\'s 30% DEET 3.4oz Pump Spray',
        'Ben\'s 30% DEET stands out as the gold standard for tick protection. The water-based formula provides 12 hours of effective protection without the greasy feel of alcohol-based alternatives. Ideal for Hudson Valley hikers and outdoor enthusiasts.',
        4.5,
        'Hudson Valley Ticks',
        '2025-10-21'
    ),
    // Article schema
    generateArticleSchema(
        'Ben\'s 30% DEET: CDC-Recommended Tick Repellent',
        'Complete review of Ben\'s 30% DEET tick repellent. Water-based formula provides 12 hours of protection.',
        '2025-10-21',
        '2025-10-21'
    ),
    // Breadcrumb
    generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Tick Prevention Gear', 'url' => '/tick-prevention-gear.php'],
        ['name' => 'Ben\'s 30% DEET Review', 'url' => '/bens-30-deet-tick-repellent.php']
    ])
];

// PAGE CONTENT - Everything between the hero section and footer
$pageContent = <<<'HTML'
    <!-- HERO SECTION -->
    <section class="hero">
        <h1>💧 Ben's 30% DEET: CDC-Recommended Tick Repellent</h1>
        <p>October 21, 2025 • 6 min read • 6,200+ reviews</p>
    </section>

    <!-- INTRO SECTION -->
    <section class="section" tabindex="0" id="intro">
        <div class="intro-box">
            <strong>🎯 Key Fact:</strong> The CDC recommends 30% DEET as the minimum concentration for effective tick protection. Not all DEET repellents are created equal.
        </div>

        <p>Ben's 30% DEET stands out as the gold standard—water-based, long-lasting, and proven effective in the field. This guide explains why 30% DEET works, how to use it safely, and why Ben's is the top choice for Hudson Valley hikers and outdoor enthusiasts.</p>
    </section>

    <!-- WHY 30% DEET -->
    <section class="section" tabindex="0" id="why-deet">
        <h2>Why 30% DEET?</h2>
        <p>The percentage of DEET in a repellent doesn't determine how well it works—it determines how long it works. The CDC recommends:</p>
        <ul>
            <li><strong>20-30% DEET:</strong> For light tick exposure (1-3 hours outdoors)</li>
            <li><strong>30-100% DEET:</strong> For extended exposure (all-day outdoor activities)</li>
        </ul>

        <p>30% DEET represents the sweet spot: effective for 12 hours, comfortable to apply, and doesn't require reapplication during most outdoor activities. Unlike 100% DEET, which can be overly strong and potentially irritating, 30% DEET provides serious protection without the drawbacks.</p>
    </section>

    <!-- BENS 30% PRODUCT -->
    <section class="section" tabindex="0" id="bens-product">
        <h2>Ben's 30% DEET: What Makes It Different?</h2>

        <div class="product-card">
            <h3 class="product-name">Ben's 30% DEET 3.4oz Pump Spray</h3>
            <div class="product-rating">★★★★★ 4.4/5 (6,200+ reviews)</div>
            <div class="product-price">$10–$15</div>
            
            <div class="product-specs">
                <div class="spec-item">
                    <div class="spec-label">Duration</div>
                    <div class="spec-value">12 Hours</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Size</div>
                    <div class="spec-value">3.4oz TSA OK</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Type</div>
                    <div class="spec-value">Water-Based</div>
                </div>
                <div class="spec-item">
                    <div class="spec-label">Origin</div>
                    <div class="spec-value">New Hampshire</div>
                </div>
            </div>

            <p class="product-description"><strong>Key Features:</strong></p>
            <ul>
                <li>30% DEET (CDC minimum recommendation)</li>
                <li>Water-based formula (not greasy alcohol)</li>
                <li>Evaporates slowly for prolonged protection</li>
                <li>Up to 12 hours effective protection</li>
                <li>3.4oz TSA-compliant travel size</li>
                <li>Fragrance-free formula</li>
                <li>Won't damage plastics or synthetic coatings</li>
                <li>Made in New Hampshire</li>
                <li>Protects against Lyme disease, West Nile, Zika</li>
            </ul>

            <a href="https://www.amazon.com/Bens-Mosquito-Insect-Repellent-Ounce/dp/B0CDG6KS9J?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon →</a>
        </div>
    </section>

    <!-- WATER VS ALCOHOL -->
    <section class="section" tabindex="0" id="water-vs-alcohol">
        <h2>Water-Based vs. Alcohol-Based DEET</h2>
        <p>Most traditional DEET repellents are alcohol-based. Ben's uses a water-based formula, which offers several advantages:</p>

        <table class="comparison-table">
            <tr>
                <th>Feature</th>
                <th>Water-Based (Ben's)</th>
                <th>Alcohol-Based</th>
            </tr>
            <tr>
                <td>Greasiness</td>
                <td>Non-greasy</td>
                <td>Greasy/oily</td>
            </tr>
            <tr>
                <td>Evaporation</td>
                <td>Slow (12 hours)</td>
                <td>Fast (requires reapplication)</td>
            </tr>
            <tr>
                <td>Smell</td>
                <td>Minimal</td>
                <td>Strong chemical odor</td>
            </tr>
            <tr>
                <td>Application</td>
                <td>Dries quickly</td>
                <td>Leaves residue</td>
            </tr>
            <tr>
                <td>Skin Feel</td>
                <td>Light & comfortable</td>
                <td>Heavy & sticky</td>
            </tr>
        </table>

        <div class="highlight">
            <strong>💡 Pro Tip:</strong> Water-based DEET is ideal for Hudson Valley's humid summers. Apply it before putting on your shirt and let it dry for 2-3 minutes.
        </div>
    </section>

    <!-- HOW TO APPLY -->
    <section class="section" tabindex="0" id="how-to-apply">
        <h2>How to Apply Ben's 30% DEET</h2>
        <ol>
            <li><strong>Read the label:</strong> Follow instructions carefully</li>
            <li><strong>Hold bottle 4-6 inches from skin:</strong> This ensures even coverage</li>
            <li><strong>Spray exposed areas:</strong> Arms, legs, neck, and ears</li>
            <li><strong>Avoid face and eyes:</strong> Spray on hands first, then rub on face if needed</li>
            <li><strong>Do NOT apply to children's hands:</strong> They may put hands in their mouths</li>
            <li><strong>Allow to dry:</strong> Wait 2-3 minutes before getting dressed</li>
            <li><strong>Reapply as needed:</strong> After swimming or if protection wears off</li>
        </ol>

        <div class="highlight">
            <strong>💡 Pro Tip:</strong> Apply DEET after applying sunscreen. The order matters: sunscreen first, then DEET repellent. This allows both products to work effectively.
        </div>
    </section>

    <!-- SAFETY -->
    <section class="section" tabindex="0" id="safety">
        <h2>DEET Safety for Families</h2>
        <p>The EPA, CDC, and pediatricians agree that DEET is safe for all family members when used as directed:</p>
        <ul>
            <li><strong>Adults:</strong> Use 30% DEET freely</li>
            <li><strong>Children 3 months+:</strong> 10-30% DEET is safe (less frequent application)</li>
            <li><strong>Under 3 months:</strong> Use other protections (permethrin-treated clothing, netting)</li>
            <li><strong>Pregnant/Nursing:</strong> 30% DEET is considered safe by CDC and WHO</li>
        </ul>
    </section>

    <!-- COMPARISON -->
    <section class="section" tabindex="0" id="comparison">
        <h2>Ben's 30% vs. Other DEET Options</h2>
        <p><strong>Why choose Ben's over other 30% DEET products?</strong></p>
        <ul>
            <li><strong>Water-based formula:</strong> Compared to alcohol-based competitors that are greasy and smelly</li>
            <li><strong>Recommended by Consumer Reports:</strong> Rated as top bug repellent option</li>
            <li><strong>Tested in the field:</strong> Made in New Hampshire, the heart of tick country</li>
            <li><strong>Travel-friendly:</strong> 3.4oz TSA size fits in carry-on luggage</li>
            <li><strong>Professional endorsement:</strong> Widely used by outdoor guides, hunters, and field researchers</li>
        </ul>
    </section>

    <!-- DURATION -->
    <section class="section" tabindex="0" id="duration">
        <h2>Duration: How Long Does It Last?</h2>
        <p>Ben's 30% DEET provides 12 hours of effective protection against ticks and mosquitoes. In practical terms:</p>
        <ul>
            <li><strong>Morning hike (6 AM-12 PM):</strong> One application = full coverage</li>
            <li><strong>All-day outdoor activity (sunrise to sunset):</strong> May need reapplication mid-day</li>
            <li><strong>Evening activities (6 PM-10 PM):</strong> Apply in late afternoon for full evening coverage</li>
            <li><strong>After swimming:</strong> Reapply immediately for continued protection</li>
        </ul>
    </section>

    <!-- HUDSON VALLEY CONTEXT -->
    <section class="section" tabindex="0" id="hudson-valley">
        <h2>Ben's 30% DEET in Hudson Valley Context</h2>
        <p>Hudson Valley's warm, humid climate during tick season (May-September) means ticks are everywhere—in yards, on trails, in parks. Ben's 30% DEET is ideal because:</p>
        <ul>
            <li><strong>Humidity compatibility:</strong> Water-based formula handles Hudson Valley's humid summers</li>
            <li><strong>Sweat resistant:</strong> Works even if you're perspiring during outdoor activities</li>
            <li><strong>Extended protection:</strong> 12-hour duration covers most outdoor adventures</li>
            <li><strong>Disease prevention:</strong> Protects against Lyme disease, Anaplasmosis, and Babesiosis transmitted by local ticks</li>
        </ul>
    </section>

    <!-- LAYERED DEFENSE -->
    <section class="section" tabindex="0" id="layered-defense">
        <h2>Combining with Other Protections</h2>
        <p>Ben's 30% DEET works best as part of a layered defense:</p>
        <ol>
            <li><strong>Clothing Layer:</strong> Wear permethrin-treated clothes that kill ticks on contact</li>
            <li><strong>Leg Protection:</strong> Wear permethrin-treated leg gaiters or socks</li>
            <li><strong>Skin Protection:</strong> Apply Ben's 30% DEET to exposed skin</li>
            <li><strong>Habit Layer:</strong> Do full-body tick checks after outdoor activities</li>
        </ol>

        <p>This combination prevents virtually all tick-borne illness exposure.</p>
    </section>

    <!-- CONCLUSION -->
    <section class="section" tabindex="0" id="conclusion">
        <h2>Conclusion</h2>
        <p>Ben's 30% DEET represents the CDC recommendation in its ideal form: water-based, long-lasting, effective, and comfortable. At $10-15, it's an affordable investment in tick prevention that actually works as advertised.</p>

        <div class="highlight">
            <strong>🛡️ Bottom Line:</strong> When planning outdoor activities in Hudson Valley during tick season, Ben's 30% DEET should be in your pack. Apply it to exposed skin, combine with permethrin-treated clothing, and you'll have comprehensive protection against Lyme disease and other tick-borne illnesses.
        </div>
    </section>
HTML;

// ============================================
// DO NOT EDIT BELOW THIS LINE
// ============================================
// This includes the master template that wraps your content
include 'template.php';
?>
