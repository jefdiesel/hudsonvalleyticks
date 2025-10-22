<?php
/**
 * NEW PAGE TEMPLATE - Rename this to your-page-name.php
 * 
 * Quick start template for creating new pages.
 * Just follow these steps:
 * 
 * 1. Save this file as: your-page-name.php
 * 2. Update $pageTitle (for browser tab and Google)
 * 3. Update $pageDescription (for Google search results)
 * 4. Replace CONTENT HERE with your page HTML
 * 5. Upload to DreamHost
 * 
 * That's it! The template.php handles everything else.
 */

// PAGE TITLE - Shows in browser tab and Google search
$pageTitle = 'Your Page Title | Hudson Valley Ticks';

// PAGE DESCRIPTION - Shows under title in Google search results (keep under 160 characters)
$pageDescription = 'A brief description of this page for search engines and social media preview.';

// PAGE CONTENT - Everything between the hero section and footer
$pageContent = <<<'HTML'
    <!-- HERO SECTION (optional) -->
    <section class="hero">
        <h1>🌿 Your Page Title</h1>
        <p>Your subtitle or tagline goes here</p>
    </section>

    <!-- INTRO SECTION -->
    <section class="section" tabindex="0" id="intro">
        <h2>Introduction</h2>
        <p>Start your content here. You can use standard HTML:</p>
        <ul>
            <li>Bullet points work great</li>
            <li>Links work too: <a href="blog.php">Link to Blog</a></li>
            <li><strong>Bold text</strong> shows up in green</li>
        </ul>
    </section>

    <!-- SPECIAL BOXES -->
    <section class="section" tabindex="0" id="special-boxes">
        <h2>Using Special Content Boxes</h2>
        
        <div class="intro-box">
            <strong>ℹ️ Info Box:</strong> Use this for important introductory info at the top of a page.
        </div>

        <div class="highlight">
            <strong>✓ Highlight Box:</strong> Use this to call attention to key takeaways and important points.
        </div>

        <div class="warning">
            <strong>⚠️ Warning Box:</strong> Use this for warnings, critical information, or important cautions.
        </div>

        <div class="strategy-box">
            <strong>📋 Strategy Box:</strong> Use this for step-by-step strategies, tips, and actionable advice.
        </div>
    </section>

    <!-- PRODUCT GRID SECTION (optional) -->
    <section class="section" tabindex="0" id="products">
        <h2>Product Recommendations</h2>
        
        <div class="product-grid">
            <div class="product-card">
                <div class="product-number">1</div>
                <div class="product-name">Product Name</div>
                <div class="product-rating">★★★★★ 4.8/5 (2,300+ reviews)</div>
                <div class="product-price">$49–$65</div>
                <div class="product-description">A clear, compelling description of why this product matters for tick prevention.</div>
                <ul class="product-features">
                    <li>Key feature 1</li>
                    <li>Key feature 2</li>
                    <li>Key feature 3</li>
                    <li>Key feature 4</li>
                </ul>
                <p><strong>Why this matters:</strong> Explain why you recommend this specific product.</p>
                <a href="https://www.amazon.com/your-product-link?tag=hudsonvalleyt-20" class="amazon-button" target="_blank" rel="noopener noreferrer">View on Amazon →</a>
            </div>
        </div>
    </section>

    <!-- ANOTHER SECTION -->
    <section class="section" tabindex="0" id="section-name">
        <h2>Another Section Heading</h2>
        
        <h3>Subsection Heading (optional)</h3>
        <p>More detailed content goes here. You can add multiple sections with different headings.</p>
        
        <ol>
            <li>Numbered lists also work</li>
            <li>Great for step-by-step instructions</li>
            <li>Use h3 for subheadings within sections</li>
        </ol>
    </section>

    <!-- CLOSING SECTION -->
    <section class="section" tabindex="0" id="conclusion">
        <h2>Conclusion</h2>
        <p>Wrap up your content with key takeaways and any final recommendations.</p>
        
        <div class="highlight">
            <strong>Key Takeaway:</strong> Summarize the most important point readers should remember.
        </div>
    </section>
HTML;

// ============================================
// DO NOT EDIT BELOW THIS LINE
// ============================================
// This includes the master template that wraps your content
include 'template.php';
?>
