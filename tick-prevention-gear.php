<?php
require_once 'jsonld-helpers.php';

$pageTitle = 'Tick Prevention Gear & Products | Hudson Valley Ticks';
$pageDescription = 'Best tick prevention products reviewed and tested. From permethrin clothing to DEET repellent wipes. Find what works for Hudson Valley outdoor life.';

// JSON-LD structured data for product collection page
$jsonLdSchemas = [
    // Article schema for the collection page
    generateArticleSchema(
        'Tick Prevention Gear & Products',
        'Best tick prevention products reviewed and tested. From permethrin clothing to DEET repellent wipes for Hudson Valley outdoor life.',
        '2025-10-01',
        '2025-10-01'
    ),
    // Featured Product: Insect Shield Shirt
    generateProductSchema(
        'Insect Shield Men\'s UPF Long Sleeve Shirt',
        'Lightweight Dri-Balance shirt with UPF 30+ sun protection. Factory-treated with EPA-registered permethrin. The gold standard for tick-bite prevention.',
        45,
        55,
        4.6,
        5000,
        'https://www.amazon.com/Insect-Shield-Dri-Balance-Repellent-Clothing/dp/B0755CG8H1?tag=hudsonvalleyt-20',
        null,
        'Insect Shield'
    ),
    // Featured Product: Sawyer Permethrin
    generateProductSchema(
        'Sawyer Permethrin 24oz Aerosol',
        'The most popular permethrin spray for treating clothing. Easy aerosol application, odorless after drying. Treats 4 complete outfits and lasts 6 washes.',
        18,
        22,
        4.7,
        29000,
        'https://www.amazon.com/Sawyer-Products-SP657-Permethrin-Repellent/dp/B001ANQVYU?tag=hudsonvalleyt-20',
        null,
        'Sawyer'
    ),
    // Featured Product: TickCheck Premium Kit
    generateProductSchema(
        'TickCheck Premium Tick Removal Kit',
        'Stainless steel tick removal tools with leather case. Includes fine-tip tweezers, removal tool, and tick ID card. University tested.',
        15,
        18,
        4.7,
        2000,
        'https://www.amazon.com/TickCheck-Premium-Tick-Remover-Identification/dp/B075DKL3Z6?tag=hudsonvalleyt-20',
        null,
        'TickCheck'
    ),
    // FAQ schema
    generateFAQSchema([
        [
            'question' => 'What is the most effective tick prevention strategy?',
            'answer' => 'Layer your defenses: Permethrin-treated clothing combined with Picaridin repellent on exposed skin plus regular tick checks provides 95%+ protection.'
        ],
        [
            'question' => 'How long does permethrin treatment last on clothing?',
            'answer' => 'Pre-treated Insect Shield clothing maintains protection through 70 washes. DIY permethrin spray treatment lasts 6 washes or 6 weeks.'
        ],
        [
            'question' => 'Is permethrin safe for humans?',
            'answer' => 'Yes, permethrin is safe for humans when applied to clothing. It is toxic to cats when wet, so keep cats away during application. It is safe once dry.'
        ]
    ]),
    // Breadcrumb
    generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Tick Prevention Gear', 'url' => '/tick-prevention-gear.php']
    ])
];

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Tick Prevention Gear</h1>
    <p>Evidence-based products to protect against ticks in the Hudson Valley</p>
</section>

<nav class="quick-nav" aria-label="Page sections">
    <a href="#clothing">Clothing</a>
    <a href="#permethrin">Spray</a>
    <a href="#repellents">Repellents</a>
    <a href="#removal">Removal</a>
    <a href="#yard">Yard</a>
    <a href="#kits">Kits</a>
</nav>

<section class="section" tabindex="0">
    <div class="intro-box">
        <strong>💡 Most Effective Protection Strategy:</strong><br>
        Layer your defenses: Permethrin-treated clothing + Picarikin repellent on exposed skin + tick checks. This provides 95%+ protection.
    </div>

    <div class="alert">
        <strong>🔍 Affiliate Disclosure:</strong> This page contains Amazon affiliate links with tag <code>hudsonvalleyt-20</code>. Purchases through these links support HudsonValleyTicks.com at no extra cost to you. All recommendations are based on CDC guidelines and effectiveness.
    </div>
</section>

<section class="section" id="clothing" aria-labelledby="clothing-heading" tabindex="0">
    <h2 id="clothing-heading">Pre-Treated Permethrin Clothing</h2>
    <p><strong>Why this works:</strong> Permethrin-treated clothing kills ticks on contact. Studies show 73.6x reduction in tick bites when wearing treated shoes and socks. Lasts through 70 washes!</p>
    
    <div class="product-grid">
        <article class="product-card">
            <h3 class="product-name">Insect Shield Men's UPF Long Sleeve Shirt</h3>
            <div class="product-badges">
                <span class="badge bestseller">BESTSELLER</span>
                <span class="badge">UPF 30+</span>
            </div>
            <div class="product-rating">★★★★★ 4.6/5 (5,000+ reviews)</div>
            <div class="product-price">$45–$55</div>
            <p class="product-description">Lightweight Dri-Balance™ shirt with sun protection. Factory-treated with EPA-registered permethrin. Breathable and quick-drying. The gold standard for tick-bite prevention.</p>
            <a href="https://www.amazon.com/Insect-Shield-Dri-Balance-Repellent-Clothing/dp/B0755CG8H1?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Insect Shield Performance Ripstop Pants</h3>
            <div class="product-badges">
                <span class="badge bestseller">BESTSELLER</span>
            </div>
            <div class="product-rating">★★★★☆ 4.4/5 (3,000+ reviews)</div>
            <div class="product-price">$50–$65</div>
            <p class="product-description">Ripstop lightweight pants perfect for hiking and yard work. Durable 8-pocket cargo design with hammer loop. Full leg protection. Lasts 70 washes.</p>
            <a href="https://www.amazon.com/Insect-Shield-Performance-Lightweight-Breathable/dp/B0C36HGF4C?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Insect Shield Midweight Hiking Socks</h3>
            <div class="product-badges">
                <span class="badge essential">ESSENTIAL</span>
                <span class="badge">SPOT TICKS</span>
            </div>
            <div class="product-rating">★★★★☆ 4.3/5 (2,000+ reviews)</div>
            <div class="product-price">$15–$20</div>
            <p class="product-description"><strong>WHITE = EASY TICK SPOTTING!</strong> Midweight cushioned crew socks. Pre-treated with EPA permethrin. Pull over pant legs. The single most important item for tick country.</p>
            <a href="https://www.amazon.com/Insect-Shield-Midweight-Comfortable-Protection/dp/B09T2KCBZ3?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Insect Shield Bug Repellent Bandana</h3>
            <div class="product-badges">
                <span class="badge recommended">VERSATILE</span>
            </div>
            <div class="product-rating">★★★★☆ 4.3/5 (1,500+ reviews)</div>
            <div class="product-price">$8–$12</div>
            <p class="product-description">Camo paisley bandana for neck, shoulder, or head protection. Protects vulnerable areas where ticks climb. Wear as bandana, scarf, or wrap. 50/50 cotton-polyester blend.</p>
            <a href="https://www.amazon.com/Insect-Shield-Bug-Repellant-Bandana/dp/B0B8B54YHB?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
    </div>
</section>
    
<section class="section" id="permethrin" aria-labelledby="permethrin-heading" tabindex="0">
    <h2 id="permethrin-heading">Permethrin Spray (DIY Treatment)</h2>
    <p><strong>Save money:</strong> Treat your existing clothes, shoes, and gear. One bottle treats 4 complete outfits. Lasts 6 washes or 6 weeks. <strong>CLOTHING ONLY — never apply to skin!</strong></p>
    
    <div class="product-grid">
        <article class="product-card">
            <h3 class="product-name">Sawyer Permethrin 24oz Aerosol</h3>
            <div class="product-badges">
                <span class="badge bestseller">#1 BESTSELLER</span>
            </div>
            <div class="product-rating">★★★★★ 4.7/5 (29,000+ reviews)</div>
            <div class="product-price">$18–$22</div>
            <p class="product-description">The most popular permethrin spray. Easy aerosol application. Odorless after drying. Treats 4 complete outfits (shirts, pants, socks).</p>
            <a href="https://www.amazon.com/Sawyer-Products-SP657-Permethrin-Repellent/dp/B001ANQVYU?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Sawyer Permethrin 24oz Trigger Spray</h3>
            <div class="product-rating">★★★★★ 4.6/5 (15,000+ reviews)</div>
            <div class="product-price">$16–$20</div>
            <p class="product-description">Trigger spray version for precise application. Same formula as aerosol. Better for treating specific areas like cuffs and waistbands.</p>
            <a href="https://www.amazon.com/Sawyer-Products-Permethrin-Repellent-Clothing/dp/B0F29L8XXJ?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Sawyer Permethrin Twin Pack</h3>
            <div class="product-rating">★★★★★ 4.7/5 (5,000+ reviews)</div>
            <div class="product-price">$30–$35</div>
            <p class="product-description">Best value! Includes both aerosol and trigger spray versions. Treats 8+ outfits. Perfect for families or treating multiple gear sets.</p>
            <a href="https://www.amazon.com/Sawyer-Products-Permethrin-Clothing-Repellent/dp/B0C2VCYP2W?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
    </div>
</section>
    
<section class="section" id="repellents" aria-labelledby="repellents-heading" tabindex="0">
    <h2 id="repellents-heading">Skin Repellents (For Exposed Skin)</h2>
    <p><strong>Layer with permethrin clothing for best protection.</strong> Apply to exposed skin only. Picarikin is as effective as DEET but without the smell or gear damage.</p>
    
    <div class="product-grid">
        <article class="product-card">
            <h3 class="product-name">Sawyer Picarikin Lotion (2-Pack)</h3>
            <div class="product-badges">
                <span class="badge recommended">CDC RECOMMENDED</span>
            </div>
            <div class="product-rating">★★★★★ 4.5/5 (8,000+ reviews)</div>
            <div class="product-price">$15–$18</div>
            <p class="product-description">20% Picarikin — as effective as DEET. No smell, won't damage gear. 14-hour protection. Non-greasy lotion formula.</p>
            <a href="https://www.amazon.com/Sawyer-Products-Premium-Picaridan-Repellent/dp/B07GWJ3H6X?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Ranger Ready Picarikin Spray</h3>
            <div class="product-rating">★★★★★ 4.6/5 (3,000+ reviews)</div>
            <div class="product-price">$10–$12</div>
            <p class="product-description">20% Picarikin spray. Orange scent. 12-hour protection. Quick-dry formula perfect for active use.</p>
            <a href="https://www.amazon.com/Ranger-Ready-Repellent-Protection-Mosquitoes/dp/B07BFRVVRD?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Ben's 30% DEET Spray</h3>
            <div class="product-rating">★★★★★ 4.4/5 (2,500+ reviews)</div>
            <div class="product-price">$8–$10</div>
            <p class="product-description">Traditional DEET option. 30% concentration provides 8-hour protection. Proven effective but has strong smell.</p>
            <a href="https://www.amazon.com/Bens-Tick-Insect-Repellent-Ounce/dp/B00PG8Z4OA?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Ben's 100% DEET MAX</h3>
            <div class="product-badges">
                <span class="badge">MAXIMUM STRENGTH</span>
            </div>
            <div class="product-rating">★★★★★ 4.5/5 (4,000+ reviews)</div>
            <div class="product-price">$10–$12</div>
            <p class="product-description">100% DEET for extreme conditions. 10-hour protection. Only for serious outdoor work in heavily infested areas.</p>
            <a href="https://www.amazon.com/Bens-Tick-Insect-Repellent-Ounce/dp/B00E7Y4DDY?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
    </div>
</section>
    
<section class="section" id="removal" aria-labelledby="removal-heading" tabindex="0">
    <h2 id="removal-heading">Tick Removal Tools</h2>
    <p><strong>Remove ticks properly to prevent disease transmission.</strong> Never use matches, petroleum jelly, or squeeze the tick's body. Pull straight up with steady pressure.</p>
    
    <div class="product-grid">
        <article class="product-card">
            <h3 class="product-name">TickCheck Premium Removal Kit</h3>
            <div class="product-badges">
                <span class="badge recommended">BEST OVERALL</span>
            </div>
            <div class="product-rating">★★★★★ 4.7/5 (2,000+ reviews)</div>
            <div class="product-price">$15–$18</div>
            <p class="product-description">Stainless steel tools with leather case. Includes fine-tip tweezers and removal tool. Comes with tick ID card. University tested.</p>
            <a href="https://www.amazon.com/TickCheck-Premium-Tick-Remover-Identification/dp/B075DKL3Z6?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">TickCheck Value 3-Pack</h3>
            <div class="product-rating">★★★★★ 4.6/5 (1,500+ reviews)</div>
            <div class="product-price">$8–$10</div>
            <p class="product-description">3 lightweight plastic removers (small, medium, large). Perfect for backpacks and first aid kits. Includes tick ID card.</p>
            <a href="https://www.amazon.com/TickCheck-Tick-Remover-Value-Pack/dp/B07D6J52JJ?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Tick Twister (2 Pack)</h3>
            <div class="product-rating">★★★★★ 4.5/5 (8,000+ reviews)</div>
            <div class="product-price">$6–$8</div>
            <p class="product-description">French-designed twist removal method. Includes large and small tools. Works great on pets too. No squeezing risk.</p>
            <a href="https://www.amazon.com/Tick-Twister-Remover-Small-Large/dp/B01BECRHEO?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">TickCheck Remover Card</h3>
            <div class="product-rating">★★★★☆ 4.4/5 (800+ reviews)</div>
            <div class="product-price">$5–$7</div>
            <p class="product-description">Credit card sized for wallet. Multiple notch sizes for different tick sizes. Always have it with you!</p>
            <a href="https://www.amazon.com/TickCheck-Tick-Remover-Card-Removal/dp/B078SHZ795?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
    </div>
</section>
    
<section class="section" id="yard" aria-labelledby="yard-heading" tabindex="0">
    <h2 id="yard-heading">Yard Treatment</h2>
    <p><strong>Most tick bites happen in your own yard!</strong> Create a tick-safe zone around your home. Focus on yard perimeter, play areas, and anywhere near woods or tall grass.</p>
    
    <div class="product-grid">
        <article class="product-card">
            <h3 class="product-name">Cutter Backyard Bug Control</h3>
            <div class="product-badges">
                <span class="badge bestseller">BESTSELLER</span>
            </div>
            <div class="product-rating">★★★★☆ 4.3/5 (10,000+ reviews)</div>
            <div class="product-price">$10–$12</div>
            <p class="product-description">Hose-end spray treats 5,000 sq ft. Kills ticks, fleas, mosquitoes. Lasts up to 4 weeks. Quick-dry formula.</p>
            <a href="https://www.amazon.com/Cutter-Backyard-Control-Spray-Concentrate/dp/B00ARKSABO?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Wondercide Natural Yard Spray</h3>
            <div class="product-badges">
                <span class="badge">PET SAFE</span>
            </div>
            <div class="product-rating">★★★★☆ 4.2/5 (5,000+ reviews)</div>
            <div class="product-price">$35–$40</div>
            <p class="product-description">Cedar oil based, safe for pets & kids. Ready-to-use hose attachment. Treats 5,000 sq ft. Pleasant cedar scent.</p>
            <a href="https://www.amazon.com/Wondercide-Essential-Treatment-Repellent-Plant-Based/dp/B01FWRX2NM?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
        
        <article class="product-card">
            <h3 class="product-name">Thermacell Tick Control Tubes</h3>
            <div class="product-badges">
                <span class="badge recommended">INNOVATIVE</span>
            </div>
            <div class="product-rating">★★★★☆ 4.1/5 (1,500+ reviews)</div>
            <div class="product-price">$25–$30</div>
            <p class="product-description">Harvard-developed! Treats mice (tick carriers) with permethrin cotton. No spraying needed. 6 tubes treat 1/4 acre. Apply twice yearly.</p>
            <a href="https://www.amazon.com/Thermacell-Backyards-Properties-Environmentally-Alternative/dp/B098MV9T8L?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon</a>
        </article>
    </div>
</section>
    
<section class="section" id="kits" tabindex="0">
    <div class="kit-section">
        <h2>Recommended Starter Kits</h2>
        
        <article class="kit-option">
            <h2>Budget Kit</h2>
            <div class="kit-price">Total: ~$50–$60</div>
            <ul>
                <li><a href="https://www.amazon.com/Sawyer-Products-SP657-Permethrin-Repellent/dp/B001ANQVYU?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Sawyer Permethrin Spray</a> — Treat your existing clothes ($18)</li>
                <li><a href="https://www.amazon.com/Sawyer-Products-Premium-Picaridan-Repellent/dp/B07GWJ3H6X?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Sawyer Picarikin Lotion 2-Pack</a> — For exposed skin ($15)</li>
                <li><a href="https://www.amazon.com/TickCheck-Tick-Remover-Value-Pack/dp/B07D6J52JJ?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">TickCheck Value 3-Pack</a> — Removal tools ($8)</li>
                <li>White crew socks from any store — For easy tick spotting ($10)</li>
            </ul>
            <p>Perfect for occasional hikers or those new to tick prevention.</p>
        </article>
        
        <article class="kit-option">
            <h2>Complete Protection Kit</h2>
            <div class="kit-price">Total: ~$130–$160</div>
            <ul>
                <li><a href="https://www.amazon.com/Insect-Shield-Sleeve-Repellent-Graphite/dp/B07QRKF3V5?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Insect Shield Long Sleeve Shirt</a> ($45)</li>
                <li><a href="https://www.amazon.com/Insect-Shield-Repellent-Lightweight-Convertible/dp/B07QR9YFR4?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Insect Shield Pants</a> ($50)</li>
                <li><a href="https://www.amazon.com/Insect-Shield-Crew-Socks-White/dp/B07QRGK6NB?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Insect Shield White Socks 3-Pack</a> ($22)</li>
                <li><a href="https://www.amazon.com/Sawyer-Products-Premium-Picaridan-Repellent/dp/B07GWJ3H6X?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Sawyer Picarikin 2-Pack</a> ($15)</li>
                <li><a href="https://www.amazon.com/TickCheck-Premium-Tick-Remover-Identification/dp/B075DKL3Z6?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">TickCheck Premium Kit</a> ($15)</li>
            </ul>
            <p>For serious hikers, outdoor workers, or those in high-risk areas.</p>
        </article>
        
        <article class="kit-option">
            <h2>Homeowner Kit</h2>
            <div class="kit-price">Total: ~$70–$85</div>
            <ul>
                <li><a href="https://www.amazon.com/Cutter-Backyard-Control-Spray-Concentrate/dp/B00ARKSABO?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Cutter Backyard Bug Control</a> — Yard perimeter ($12)</li>
                <li><a href="https://www.amazon.com/Thermacell-Backyards-Properties-Environmentally-Alternative/dp/B098MV9T8L?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Thermacell Tick Tubes</a> — Mouse treatment ($28)</li>
                <li><a href="https://www.amazon.com/Sawyer-Products-SP657-Permethrin-Repellent/dp/B001ANQVYU?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Sawyer Permethrin Spray</a> — For yard work clothes ($18)</li>
                <li><a href="https://www.amazon.com/Tick-Twister-Remover-Small-Large/dp/B01BECRHEO?tag=hudsonvalleyt-20" target="_blank" rel="noopener noreferrer">Tick Twister 2-Pack</a> — Quick removal ($7)</li>
            </ul>
            <p>Protect your yard and family. Apply treatments in early spring and fall.</p>
        </article>
    </div>
</section>
    
<section class="section" tabindex="0">
    <div class="info-box">
        <h2>How to Use These Products Effectively</h2>
        
        <h3>The Layered Protection Strategy (Most Effective)</h3>
        <ol>
            <li><strong>Wear:</strong> Permethrin-treated long sleeves, pants, and WHITE socks</li>
            <li><strong>Tuck:</strong> Shirt into pants, pants into socks (yes, it looks dorky but works!)</li>
            <li><strong>Apply:</strong> Picarikin or DEET to exposed skin (face, neck, hands)</li>
            <li><strong>Check:</strong> Do tick checks every 2 hours and immediately after outdoor activities</li>
            <li><strong>Shower:</strong> Within 2 hours of coming indoors (helps wash off unattached ticks)</li>
        </ol>
        
        <h3>Permethrin Application Tips</h3>
        <ul>
            <li>Always spray outdoors or in well-ventilated area</li>
            <li>Treat clothing while OFF your body</li>
            <li>Apply until damp, not soaking wet</li>
            <li>Let dry completely (2–4 hours) before wearing</li>
            <li>Focus extra on: cuffs, waistband, shoe openings, socks</li>
            <li>Reapply after 6 washes or 6 weeks</li>
        </ul>
        
        <h3>Where Ticks Hide on Your Body</h3>
        <ul>
            <li>Behind knees and ears</li>
            <li>Groin and waistband area</li>
            <li>Armpits and hairline</li>
            <li>Belly button</li>
            <li>Between toes</li>
        </ul>
    </div>
</section>
    
<section class="section" tabindex="0">
    <div class="info-box">
        <h2>⚠️ Important Safety Notes</h2>
        <ul>
            <li><strong>Permethrin:</strong> TOXIC to cats when wet. Keep cats away during application. Safe once dry.</li>
            <li><strong>DEET:</strong> Can damage plastics, synthetic fabrics, and painted surfaces</li>
            <li><strong>Tick Removal:</strong> Save removed ticks in a sealed bag with date/location for testing if symptoms develop</li>
            <li><strong>Lyme Symptoms:</strong> Watch for bull's-eye rash, fever, fatigue, joint pain within 30 days of bite</li>
            <li><strong>See a Doctor:</strong> If you develop symptoms or can't remove entire tick</li>
        </ul>
    </div>
</section>
HTML;

include 'template.php';
?>
