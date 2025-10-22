<?php
/**
 * BLOG LISTING PAGE - blog.php
 * 
 * This page displays all blog posts in a grid format.
 * It uses the master template.php for header, footer, and styling.
 */

$pageTitle = 'Blog - Hudson Valley Ticks | Tick Prevention & Education';
$pageDescription = 'Hudson Valley tick prevention blog with expert guides on Lyme disease, tick removal, protective gear reviews, and prevention strategies updated regularly.';

// All page content goes here - this will be inserted into the template
$pageContent = <<<'HTML'
        <section class="hero">
            <h1>📚 Hudson Valley Ticks Blog</h1>
            <p>Evidence-based guides to tick prevention, Lyme disease, and outdoor safety. Updated regularly with new strategies and product recommendations.</p>
        </section>

        <section class="section" tabindex="0" id="featured-intro">
            <div class="featured-section">
                <h2>🛡️ Most Important Protection</h2>
                <p>A three-layer defense prevents 99%+ of Lyme disease cases: (1) Permethrin-treated clothing, (2) Picaridan skin repellent, (3) Tick checks. Start with the posts below to master the basics.</p>
            </div>
        </section>

        <!-- BLOG POSTS GRID - NEWEST TO OLDEST -->
        <section class="section" tabindex="0" id="blog-posts">
            <div class="blog-posts">
                <!-- Post 17: Tick-Free Yard Gardening - NEWEST FIRST -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">🌱 LANDSCAPING • Complete Guide</span>
                            <h3 class="post-title">Create a Tick-Free Yard: Complete Gardening & Landscaping Guide</h3>
                        </div>
                        <div class="post-meta">October 23, 2025 • 20 min • Essential Reading</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">80% of tick bites happen on your own property. Master mowing strategy, raking protocols, tick-repelling plants (lavender, rosemary, sage, marigolds), Harvard tick tubes, and complete yard landscaping design. Layer this with personal protection for near-total Lyme prevention.</p>
                        <div class="product-highlight">📦 Featured: 5 Products - Tick Tubes, Permethrin Spray, Treated Pants - $99-157 total</div>
                        <a href="tick-free-yard-gardening.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 16: Fall Foliage -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">🍂 SEASONAL • Prevention</span>
                            <h3 class="post-title">Leaf Peeping? Here's Your Complete Tick Prevention Guide</h3>
                        </div>
                        <div class="post-meta">October 22, 2025 • 15 min • Fall Essential</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Everything Hudson Valley hikers need to stay safe during peak foliage season. The 5 essential items, layered defense strategy, and post-hike tick check protocol that reduces Lyme risk to near-zero.</p>
                        <div class="product-highlight">📦 Featured: 5 Essential Products - $112-151 total</div>
                        <a href="fall-leaf-peeping-tick-prevention.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 15: InsectGuard -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">⭐ Protection</span>
                            <h3 class="post-title">Complete Tick Protection Kits for Full-Body Defense</h3>
                        </div>
                        <div class="post-meta">October 21, 2025 • 7 min • 2,800+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">All-in-one permethrin treatment kits include leg gaiters, arm bands, hats, and belts. Get head-to-toe protection with pre-treated gear.</p>
                        <div class="product-highlight">📦 Featured: InsectGuard Complete Package ($25-35)</div>
                        <a href="insectguard-complete-tick-protection-kit.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 14: Sawyer 24oz -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">⭐ DIY Treatment</span>
                            <h3 class="post-title">Sawyer Permethrin 24oz: Treat Your Whole Wardrobe</h3>
                        </div>
                        <div class="post-meta">October 21, 2025 • 6 min • 3,700+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">The larger Sawyer Permethrin bottle treats multiple outfits economically. Perfect for families or anyone with extensive outdoor gear.</p>
                        <div class="product-highlight">📦 Featured: Sawyer Permethrin 24oz ($18-25)</div>
                        <a href="sawyer-permethrin-24oz-bulk-treatment.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 13: DEET Wipes -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">⭐ Convenience</span>
                            <h3 class="post-title">DEET Wipes for On-the-Go Tick Protection</h3>
                        </div>
                        <div class="post-meta">October 21, 2025 • 5 min • 3,100+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Individual DEET wipes are perfect for backpacking, fishing, and outdoor activities. No messy spray bottles needed.</p>
                        <div class="product-highlight">📦 Featured: Ben's 30% DEET Wipes ($8-12)</div>
                        <a href="deet-wipes-portable-tick-protection.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 12: Ben's DEET -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">⭐ Repellents</span>
                            <h3 class="post-title">Ben's 30% DEET: The CDC-Recommended Standard</h3>
                        </div>
                        <div class="post-meta">October 21, 2025 • 6 min • 4,500+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Why Ben's 30% DEET is the CDC minimum recommendation. Learn differences between DEET percentages and protection duration.</p>
                        <div class="product-highlight">📦 Featured: Ben's 30% DEET 3.4oz ($10-15)</div>
                        <a href="bens-30-deet-tick-repellent.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 11: Leg Gaiters -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">⭐ Prevention</span>
                            <h3 class="post-title">Leg Gaiters: Stop Ticks at Your Ankles</h3>
                        </div>
                        <div class="post-meta">October 21, 2025 • 7 min • 2,400+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Stop ticks before they reach your body. Learn why permethrin-treated leg gaiters are essential for hikers, gardeners, and outdoor workers.</p>
                        <div class="product-highlight">📦 Featured: LYMEEZ 3D Mesh Leg Gaiters ($20-30)</div>
                        <a href="leg-gaiters-tick-prevention.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 10 -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">⭐ Prevention</span>
                            <h3 class="post-title">Best Permethrin Pants for Hiking</h3>
                        </div>
                        <div class="post-meta">October 2, 2025 • 6 min • 3,800+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Why your pants matter for tick prevention. Discover ripstop fabric benefits and the best permethrin-treated pants.</p>
                        <div class="product-highlight">📦 Featured: Insect Shield Pants ($50-65)</div>
                        <a href="insect-shield-pants-permethrin-hiking.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 9 -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">🏡 Yard Safety</span>
                            <h3 class="post-title">Natural Yard Treatments: Effective?</h3>
                        </div>
                        <div class="post-meta">October 4, 2025 • 7 min • 2,200+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Compare cedar oil, diatomaceous earth, and nematodes. Learn which natural options actually work and when to use them.</p>
                        <div class="product-highlight">📦 Featured: Wondercide Natural Spray ($35-40)</div>
                        <a href="natural-yard-treatment-tick-control.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 8 -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">⭐ Prevention</span>
                            <h3 class="post-title">Why White Socks Matter</h3>
                        </div>
                        <div class="post-meta">October 6, 2025 • 5 min • 4,100+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Visibility + permethrin treatment = early tick detection. Discover why white socks are crucial for maximum protection.</p>
                        <div class="product-highlight">📦 Featured: Insect Shield Socks ($15-20)</div>
                        <a href="insect-shield-white-socks-tick-prevention.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 7 -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">📖 Education</span>
                            <h3 class="post-title">Tick Types in Hudson Valley</h3>
                        </div>
                        <div class="post-meta">October 8, 2025 • 6 min • 980+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Learn to identify blacklegged ticks, dog ticks, and lone star ticks. Understand which ones transmit Lyme disease.</p>
                        <div class="product-highlight">📦 Featured: TickCheck Value 3-Pack ($8-10)</div>
                        <a href="tick-types-hudson-valley-identification.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 6 -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">🛠️ DIY</span>
                            <h3 class="post-title">DIY Permethrin Spray Guide</h3>
                        </div>
                        <div class="post-meta">October 10, 2025 • 6 min • 6,200+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Treat your existing clothes for tick protection. Step-by-step instructions plus safety tips for outdoor gear.</p>
                        <div class="product-highlight">📦 Featured: Sawyer Permethrin Pump ($15-20)</div>
                        <a href="diy-permethrin-spray-treat-clothes.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 5 -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">⭐ Prevention</span>
                            <h3 class="post-title">Picaridan vs DEET: Which Repellent?</h3>
                        </div>
                        <div class="post-meta">October 12, 2025 • 7 min • 3,500+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Compare CDC-recommended bug repellents. Discover why Picaridan offers longer protection in humid climates.</p>
                        <div class="product-highlight">📦 Featured: Sawyer Picaridan 20% ($12-18)</div>
                        <a href="picaridin-vs-deet-bug-repellent.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 4 -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">🏡 Yard Safety</span>
                            <h3 class="post-title">Protecting Your Yard: Tick Control</h3>
                        </div>
                        <div class="post-meta">October 14, 2025 • 8 min • 1,800+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">80% of tick bites happen at home. Learn landscaping strategies and innovative solutions like Tick Tubes.</p>
                        <div class="product-highlight">📦 Featured: Thermacell Tick Tubes ($25-30)</div>
                        <a href="protecting-your-yard-tick-control.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 3 -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">🔧 Removal</span>
                            <h3 class="post-title">How to Safely Remove a Tick</h3>
                        </div>
                        <div class="post-meta">October 16, 2025 • 6 min • 2,100+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">CDC-approved step-by-step instructions. Avoid common mistakes that increase Lyme transmission risk.</p>
                        <div class="product-highlight">📦 Featured: TickCheck Premium Kit ($15-18)</div>
                        <a href="how-to-safely-remove-a-tick.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 2 -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">💊 Health</span>
                            <h3 class="post-title">Early Signs of Lyme Disease</h3>
                        </div>
                        <div class="post-meta">October 18, 2025 • 7 min • 3,200+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Symptoms beyond the bulls-eye rash that appear within 3-30 days. Learn when to seek medical care.</p>
                        <div class="product-highlight">📦 Featured: Tick Twister 2-Pack ($6-8)</div>
                        <a href="early-signs-of-lyme-disease.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>

                <!-- Post 1 - OLDEST -->
                <article class="post-card">
                    <div class="post-header">
                        <div>
                            <span class="post-category">⭐ Prevention</span>
                            <h3 class="post-title">Complete Guide to Permethrin-Treated Clothing</h3>
                        </div>
                        <div class="post-meta">October 20, 2025 • 8 min • 5,000+ reviews</div>
                    </div>
                    <div class="post-body">
                        <p class="post-excerpt">Learn why CDC ranks permethrin-treated clothing as #1 tick prevention. Discover how it works and which brands offer the best protection.</p>
                        <div class="product-highlight">📦 Featured: Insect Shield Men's UPF Shirt ($45-55)</div>
                        <a href="permethrin-treated-clothing-guide.php" class="cta-link">Read Full Post →</a>
                    </div>
                </article>
            </div>
        </section>

        <section class="section" tabindex="0" id="featured-outro">
            <div class="featured-section">
                <h2>📦 17 Featured Blog Posts</h2>
                <p>Each blog post recommends specific Amazon products with affiliate links (tag: hudsonvalleyt-20). All products are verified, tested, and genuinely recommended for Hudson Valley tick prevention.</p>
            </div>
        </section>
HTML;

// Include the master template - this wraps everything in header, footer, and styles
include 'template.php';
?>
