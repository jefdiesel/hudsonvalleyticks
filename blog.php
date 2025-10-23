<?php
/**
 * BLOG MAIN PAGE: blog.php
 * 
 * Lists all blog posts about tick prevention and Lyme disease education
 * WCAG 2.1 AA compliant
 * UPDATED: Email signup now functional with Substack integration
 */

$pageTitle = 'Hudson Valley Tick Prevention Blog | Expert Guides & Education';
$pageDescription = 'Evidence-based blog covering tick prevention, Lyme disease, removal tools, personal protection strategies, and papular hives management for Hudson Valley residents.';
$pageContent = <<<'HTML'
<!-- HERO SECTION -->
<div class="hero">
    <h1>Hudson Valley Ticks Blog</h1>
    <p>Evidence-Based Guides, Prevention Strategies, and Lyme Disease Education</p>
</div>

<!-- MAIN BLOG CONTENT -->
<main class="section">
    <div class="intro-box">
        <strong>📚 About This Blog:</strong> We publish research-backed articles about tick prevention, Lyme disease, papular hives management, and outdoor safety for Hudson Valley residents. Our content is based on CDC guidelines, peer-reviewed research, and real-world experience protecting our community from ticks.
    </div>

    <h2>Featured Articles</h2>
    
    <div class="blog-posts">
        
        <!-- NEW: POST 1: Understanding Papular Hives -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Papular Hives</span>
                <h3 class="post-title">Understanding Papular Hives from Seed Tick Bites</h3>
                <p class="post-meta">Published: October 2025 | Read time: 15 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    What are papular hives? Why do hundreds of seed tick bites trigger such severe allergic reactions? Learn the immunology behind papular urticaria, why your body overreacts to seed ticks, and what's happening neurologically when you itch. Comprehensive guide to understanding the science behind the bumps.
                </p>
                <div class="product-highlight">
                    <strong>Topics Covered:</strong> Immunological response, mast cell activation, tick saliva antigens, histamine pathways, seed tick vs. adult tick reactions
                </div>
                <a href="papular-hives-understanding.php" class="cta-link">Read Full Guide →</a>
            </div>
        </article>

        <!-- NEW: POST 2: H1/H2 Protocol -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Papular Hives</span>
                <h3 class="post-title">The H1/H2 Antihistamine Combination Protocol</h3>
                <p class="post-meta">Published: October 2025 | Read time: 14 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    Why single antihistamines often fail for severe papular hives. Learn how combining H1 and H2 antihistamine blockers addresses multiple histamine pathways simultaneously. Includes explanation of the "4x protocol," pharmacological basis, and how to work with your doctor on appropriate dosing.
                </p>
                <div class="product-highlight">
                    <strong>Key Topics:</strong> H1 vs. H2 receptors, combination protocols, mast cell feedback loops, when combination therapy is most effective
                </div>
                <a href="papular-hives-h1h2-protocol.php" class="cta-link">Read Full Protocol →</a>
            </div>
        </article>

        <!-- NEW: POST 3: Steroid Protocol -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Papular Hives</span>
                <h3 class="post-title">Oral Corticosteroids for Severe Papular Hives: The 21-Day Protocol</h3>
                <p class="post-meta">Published: October 2025 | Read time: 18 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    When antihistamines alone aren't enough, oral corticosteroids can suppress the root cause of severe reactions. Evidence-based guide to why corticosteroids work for papular hives, typical 21-day treatment protocols, side effects, monitoring requirements, and how to taper safely. Includes medical references and resource links.
                </p>
                <div class="product-highlight">
                    <strong>Topics Covered:</strong> Corticosteroid mechanism, 21-day timeline, dosing protocols, side effects, medical monitoring, adrenal function, tapering schedules
                </div>
                <a href="papular-hives-steroid-protocol.php" class="cta-link">Read Complete Protocol →</a>
            </div>
        </article>

        <!-- NEW: POST 4: Itch Management -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Papular Hives</span>
                <h3 class="post-title">Itch Management Techniques: Breaking the Itch-Scratch Cycle</h3>
                <p class="post-meta">Published: October 2025 | Read time: 16 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    The most effective itch management prevents scratching rather than just treating individual hives. Comprehensive guide to cold therapy, cool environments, oatmeal baths, cotton gloves, short nails, behavioral strategies, and sleep optimization. Learn why preventing scratching is as important as medication.
                </p>
                <div class="product-highlight">
                    <strong>Physical Strategies:</strong> Cold therapy, temperature management, oatmeal baths, protective clothing, behavioral itch management, sleep strategies
                </div>
                <a href="papular-hives-itch-management.php" class="cta-link">Read Itch Management Guide →</a>
            </div>
        </article>

        <!-- NEW: POST 5: Emotions and Recovery -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Papular Hives</span>
                <h3 class="post-title">Emotions, Rest, and Long-Term Recovery from Papular Hives</h3>
                <p class="post-meta">Published: October 2025 | Read time: 14 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    Severe papular hives affect you emotionally and physically. Address sleep deprivation's mood effects, set realistic 3-week recovery expectations, understand why rest is medically important, manage appearance anxiety, and plan for long-term prevention. Includes strategies for supporting your whole-self recovery.
                </p>
                <div class="product-highlight">
                    <strong>Topics Covered:</strong> Sleep and mood, emotional impacts, realistic timeline, importance of rest, stress and immune function, social-emotional factors, recovery support
                </div>
                <a href="papular-hives-emotions-recovery.php" class="cta-link">Read Recovery Guide →</a>
            </div>
        </article>

        <!-- ORIGINAL: POST 6: How to Do a Proper Tick Check -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Tick Prevention</span>
                <h3 class="post-title">How to Do a Proper Tick Check on Yourself</h3>
                <p class="post-meta">Published: October 2025 | Read time: 12 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    The CDC-recommended step-by-step guide to checking yourself for ticks after outdoor activities. Learn which body areas ticks prefer, how to use removal tools correctly, and what to do if you find a tick. A thorough tick check within 24 hours can prevent Lyme disease transmission.
                </p>
                <div class="product-highlight">
                    <strong>Tools Recommended:</strong> Tick Twister 2-Pack, TickCheck Premium Kit, fine-pointed tweezers
                </div>
                <a href="tick-check-yourself.php" class="cta-link">Read Full Guide →</a>
            </div>
        </article>

        <!-- ORIGINAL: POST 7: Permethrin vs Pre-Treated Clothing -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Clothing Protection</span>
                <h3 class="post-title">Permethrin Spray vs. Pre-Treated Clothing: A Cost Analysis</h3>
                <p class="post-meta">Published: September 2025 | Read time: 8 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    Should you invest in factory-treated permethrin clothing or treat your existing wardrobe? We break down the cost, effectiveness, durability, and convenience of each approach. Spoiler: the best strategy combines both methods.
                </p>
                <div class="product-highlight">
                    <strong>Products Compared:</strong> Insect Shield clothing, Sawyer Permethrin Spray, coat treatments, outdoor gear
                </div>
                <a href="/blog-posts/permethrin-comparison.php" class="cta-link">Read Full Comparison →</a>
            </div>
        </article>

        <!-- ORIGINAL: POST 8: Tick Myths Debunked -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Myth Busting</span>
                <h3 class="post-title">7 Dangerous Tick Myths Debunked by Science</h3>
                <p class="post-meta">Published: August 2025 | Read time: 10 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    Burning a tick with a lighter. Applying vaseline. Squeezing to remove it. These old wives' tales are not only ineffective—they're dangerous. Learn what actually works (and doesn't) for tick prevention and removal, backed by CDC research.
                </p>
                <div class="product-highlight">
                    <strong>Topics Covered:</strong> Tick burning myths, vaseline ineffectiveness, incorrect removal techniques, natural repellents that don't work
                </div>
                <a href="/blog-posts/tick-myths-debunked.php" class="cta-link">Read Full Article →</a>
            </div>
        </article>

        <!-- ORIGINAL: POST 9: Lyme Disease Timeline -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Lyme Disease</span>
                <h3 class="post-title">What Happens After a Tick Bite: The Lyme Disease Timeline</h3>
                <p class="post-meta">Published: July 2025 | Read time: 9 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    Hours after a tick bite, bacteria begin migrating through your body. Days later, symptoms may appear. We explain the exact timeline of Lyme disease progression, when the bull's-eye rash appears, and when you should seek medical care.
                </p>
                <div class="product-highlight">
                    <strong>Key Milestones:</strong> 0-24 hours (transmission window), 3-7 days (rash development), 2-4 weeks (advanced symptoms)
                </div>
                <a href="/blog-posts/lyme-timeline.php" class="cta-link">Read Full Timeline →</a>
            </div>
        </article>

        <!-- ORIGINAL: POST 10: Hudson Valley Tick Hotspots -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Hudson Valley Specific</span>
                <h3 class="post-title">Tick Hotspots in Hudson Valley: Where to Be Most Careful</h3>
                <p class="post-meta">Published: June 2025 | Read time: 7 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    Not all Hudson Valley locations are equally risky for ticks. We analyze tick populations by county, identify the highest-risk parks and hiking trails, and explain why certain areas see more Lyme disease cases than others.
                </p>
                <div class="product-highlight">
                    <strong>Regions Covered:</strong> Dutchess County, Westchester County, Putnam County, popular state parks, local hiking trails
                </div>
                <a href="/blog-posts/tick-hotspots.php" class="cta-link">Read Regional Guide →</a>
            </div>
        </article>

        <!-- ORIGINAL: POST 11: Spring Tick Prevention Prep -->
        <article class="post-card">
            <div class="post-header">
                <span class="post-category">Seasonal</span>
                <h3 class="post-title">Spring Tick Season Starts Early: Here's Your April Preparation Guide</h3>
                <p class="post-meta">Published: March 2025 | Read time: 8 minutes</p>
            </div>
            <div class="post-body">
                <p class="post-excerpt">
                    April brings the highest density of nymphal ticks—the tiny, poppy-seed sized vectors that are hardest to spot. Prepare now with the right clothing, tools, and habits to protect yourself when tick season peaks.
                </p>
                <div class="product-highlight">
                    <strong>Preparation Checklist:</strong> Buy protective gear, treat clothes, stock removal tools, establish daily tick check routine
                </div>
                <a href="/blog-posts/spring-prep.php" class="cta-link">Read Spring Guide →</a>
            </div>
        </article>

    </div>

    <!-- CATEGORY SECTIONS -->
    <section style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid #ddd;">
        <h2>Articles by Category</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
            
            <!-- Papular Hives Category (NEW!) -->
            <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 4px; border-left: 4px solid #9c27b0;">
                <h3 style="margin-top: 0; color: #9c27b0;">Papular Hives Management</h3>
                <ul style="list-style: none; margin: 0; padding: 0;">
                    <li><a href="papular-hives-understanding.php">Understanding Papular Hives</a></li>
                    <li><a href="papular-hives-h1h2-protocol.php">H1/H2 Antihistamine Protocol</a></li>
                    <li><a href="papular-hives-steroid-protocol.php">21-Day Steroid Protocol</a></li>
                    <li><a href="papular-hives-itch-management.php">Itch Management Techniques</a></li>
                    <li><a href="papular-hives-emotions-recovery.php">Emotions & Long-Term Recovery</a></li>
                </ul>
            </div>

            <!-- Tick Prevention Category -->
            <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 4px; border-left: 4px solid #2c5f2d;">
                <h3 style="margin-top: 0; color: #2c5f2d;">Tick Prevention</h3>
                <ul style="list-style: none; margin: 0; padding: 0;">
                    <li><a href="tick-check-yourself.php">How to Do a Proper Tick Check</a></li>
                    <li><a href="/blog-posts/permethrin-comparison.php">Permethrin vs. Pre-Treated Clothing</a></li>
                    <li><a href="/tick-prevention-gear.php">Complete Gear Guide</a></li>
                </ul>
            </div>

            <!-- Lyme Disease Category -->
            <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 4px; border-left: 4px solid #d32f2f;">
                <h3 style="margin-top: 0; color: #d32f2f;">Lyme Disease</h3>
                <ul style="list-style: none; margin: 0; padding: 0;">
                    <li><a href="/blog-posts/lyme-timeline.php">Lyme Disease Timeline</a></li>
                    <li><a href="/blog-posts/long-term-effects.php">Long-Term Lyme Effects</a></li>
                    <li><a href="/blog-posts/testing-guide.php">When & How to Get Tested</a></li>
                </ul>
            </div>

            <!-- Education & Myths Category -->
            <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 4px; border-left: 4px solid #ff9800;">
                <h3 style="margin-top: 0; color: #ff9800;">Education & Myths</h3>
                <ul style="list-style: none; margin: 0; padding: 0;">
                    <li><a href="/blog-posts/tick-myths-debunked.php">7 Dangerous Tick Myths</a></li>
                    <li><a href="/blog-posts/tick-identification.php">Tick Species Guide</a></li>
                    <li><a href="/blog-posts/faq.php">Frequently Asked Questions</a></li>
                </ul>
            </div>

            <!-- Seasonal Category -->
            <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 4px; border-left: 4px solid #2196f3;">
                <h3 style="margin-top: 0; color: #2196f3;">Seasonal Guides</h3>
                <ul style="list-style: none; margin: 0; padding: 0;">
                    <li><a href="/blog-posts/spring-prep.php">Spring Preparation</a></li>
                    <li><a href="/blog-posts/summer-hiking.php">Summer Hiking Safety</a></li>
                    <li><a href="/blog-posts/fall-second-wave.php">Fall Second Wave</a></li>
                </ul>
            </div>

            <!-- Hudson Valley Specific Category -->
            <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 4px; border-left: 4px solid #4caf50;">
                <h3 style="margin-top: 0; color: #4caf50;">Hudson Valley</h3>
                <ul style="list-style: none; margin: 0; padding: 0;">
                    <li><a href="/blog-posts/tick-hotspots.php">Tick Hotspots & Risk Areas</a></li>
                    <li><a href="/blog-posts/local-statistics.php">Local Lyme Statistics</a></li>
                    <li><a href="/blog-posts/regional-resources.php">Local Resources & Vets</a></li>
                </ul>
            </div>

            <!-- Specific Situations Category -->
            <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 4px; border-left: 4px solid #00bcd4;">
                <h3 style="margin-top: 0; color: #00bcd4;">Special Situations</h3>
                <ul style="list-style: none; margin: 0; padding: 0;">
                    <li><a href="/blog-posts/pregnancy-ticks.php">Pregnancy & Ticks</a></li>
                    <li><a href="/blog-posts/kids-ticks.php">Protecting Children</a></li>
                    <li><a href="/blog-posts/pets-ticks.php">Tick Prevention for Pets</a></li>
                </ul>
            </div>

        </div>
    </section>

    <!-- NEWSLETTER SIGNUP - NOW FUNCTIONAL -->
    <section style="background: linear-gradient(135deg, #2c5f2d 0%, #1f4620 100%); color: white; padding: 2rem; margin-top: 3rem; border-radius: 4px; text-align: center;">
        <h2 style="color: white; margin-top: 0;">Stay Informed About Ticks</h2>
        <p style="font-size: 1.05rem; max-width: 600px; margin: 1rem auto;">
            Subscribe to our monthly newsletter for new articles, seasonal alerts, and Hudson Valley-specific tick prevention tips.
        </p>
        <form id="newsletter-form" style="max-width: 500px; margin: 1.5rem auto; display: flex; gap: 0.5rem; flex-wrap: wrap; justify-content: center;">
            <input type="email" id="newsletter-email" placeholder="Your email address" required style="flex: 1; min-width: 250px; padding: 0.75rem; border: none; border-radius: 4px; font-size: 1rem;">
            <button type="submit" id="newsletter-btn" class="amazon-button" style="background: #ff9800; margin-top: 0; cursor: pointer;">Subscribe</button>
        </form>
        <div id="newsletter-message" style="font-size: 0.95rem; margin-top: 1rem; min-height: 1.5rem;"></div>
        <p style="font-size: 0.9rem; margin-top: 1rem; opacity: 0.9;">We respect your privacy. Unsubscribe anytime.</p>
    </section>

    <script>
    document.getElementById('newsletter-form').addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const emailInput = document.getElementById('newsletter-email');
        const submitBtn = document.getElementById('newsletter-btn');
        const messageDiv = document.getElementById('newsletter-message');
        const email = emailInput.value.trim();
        
        // Disable button and show loading state
        submitBtn.disabled = true;
        submitBtn.textContent = 'Subscribing...';
        messageDiv.innerHTML = '';
        
        try {
            const response = await fetch('newsletter-signup.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ email: email })
            });
            
            const data = await response.json();
            
            if (response.ok && data.success) {
                messageDiv.style.color = '#4caf50';
                messageDiv.innerHTML = '✓ ' + data.message;
                emailInput.value = '';
            } else {
                messageDiv.style.color = '#ff9800';
                messageDiv.innerHTML = '⚠ ' + (data.error || 'An error occurred. Please try again.');
            }
        } catch (error) {
            messageDiv.style.color = '#ff9800';
            messageDiv.innerHTML = '⚠ Connection error. Please try again.';
            console.error('Signup error:', error);
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Subscribe';
        }
    });
    </script>

    <!-- CONTENT ROADMAP -->
    <section style="margin-top: 3rem; padding: 2rem; background: #f8f9fa; border-radius: 4px;">
        <h2>Coming Soon...</h2>
        <p>We're working on these articles to expand our tick education coverage:</p>
        <ul style="columns: 2; column-gap: 2rem;">
            <li>Post-Hives Skin Barrier Recovery</li>
            <li>Papular Hives in Children: Special Considerations</li>
            <li>When to Seek Emergency Care for Severe Reactions</li>
            <li>Preventing Future Papular Hives Episodes</li>
            <li>Lyme Disease Long-Term Effects & PTLDS</li>
            <li>When to Get Tested After a Tick Bite</li>
            <li>Tick-Borne Co-Infections Explained</li>
            <li>Pregnancy & Lyme Disease</li>
            <li>Natural Tick Prevention Methods</li>
            <li>Tick Prevention on a Budget</li>
            <li>School & Youth Sports Tick Prevention</li>
            <li>Camping & Backpacking Tick Prevention</li>
        </ul>
        <p><em>Have a topic you'd like us to cover? Email us at info@hudsonvalleyticks.com</em></p>
    </section>

</main>
HTML;

// Include the template
include 'template.php';
?>
