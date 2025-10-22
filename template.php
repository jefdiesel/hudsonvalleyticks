<?php
/**
 * MASTER TEMPLATE - template.php
 * 
 * Every page includes this file at the bottom.
 * Set $pageTitle, $pageDescription, and $pageContent before including this file.
 * 
 * Usage in your content pages:
 * 
 * <?php
 * $pageTitle = 'Your Page Title';
 * $pageDescription = 'Your page description';
 * $pageContent = <<<'HTML'
 *     <section class="hero">
 *         <h1>Your Heading</h1>
 *     </section>
 *     ...more HTML...
 * HTML;
 * include 'template.php';
 * ?>
 */

// Set defaults if not provided by content page
$pageTitle = $pageTitle ?? 'Hudson Valley Ticks | Tick Prevention & Education';
$pageDescription = $pageDescription ?? 'Evidence-based tick prevention and Lyme disease information for Hudson Valley residents.';
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="ticks, Lyme disease, Hudson Valley, prevention, blog, education">
    <meta name="google-site-verification" content="EdTiTb32BQdG10T38Ag4P7LuN-MymFb4k1G71GaUad0" />
    <style>
        /* ============================================
           WCAG 2.1 AA COMPLIANT STYLES
           ============================================ */
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-green: #2c5f2d;
            --light-green: #97bc62;
            --text-dark: #1a1a1a;
            --text-light: #ffffff;
            --bg-light: #f8f9fa;
            --border-color: #ddd;
        }
        
        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--bg-light);
        }
        
        /* ============================================
           WCAG: SKIP LINK
           ============================================ */
        .skip-to-main {
            position: fixed;
            top: 0;
            left: 0;
            background-color: var(--primary-green);
            color: var(--text-light);
            padding: 0.75rem 1rem;
            text-decoration: none;
            z-index: 10001;
            transform: translateY(-100%);
            transition: transform 0.3s ease;
            border-radius: 0 0 4px 0;
            font-weight: 600;
        }
        
        .skip-to-main:focus {
            transform: translateY(0);
            outline: 3px solid #ffa500;
            outline-offset: 2px;
            color: var(--text-light);
        }
        
        .skip-to-main:visited {
            color: var(--text-light);
        }
        
        /* ============================================
           HEADER & NAVIGATION
           ============================================ */
        header {
            background-color: white;
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .nav-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .logo {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary-green);
            text-decoration: none;
            white-space: nowrap;
        }
        
        .logo:focus {
            outline: 3px solid #ffa500;
            outline-offset: 2px;
            border-radius: 2px;
        }
        
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--primary-green);
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            min-height: 44px;
            min-width: 44px;
        }
        
        .mobile-menu-toggle:focus {
            outline: 3px solid #ffa500;
            outline-offset: 2px;
        }
        
        .nav-menu {
            list-style: none;
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
        }
        
        .nav-menu a {
            color: var(--text-dark);
            text-decoration: none;
            padding: 0.5rem 0.75rem;
            border-radius: 4px;
            transition: background-color 0.2s, color 0.2s;
            display: inline-block;
            font-weight: 500;
        }
        
        .nav-menu a:hover,
        .nav-menu a:focus {
            background-color: rgba(44, 95, 45, 0.1);
            color: var(--primary-green);
            outline: 2px solid #ffa500;
            outline-offset: -2px;
        }
        
        .nav-menu a.active {
            background-color: #ffa500;
            color: var(--text-dark);
        }
        
        .nav-menu a:visited {
            color: #6600cc;
        }
        
        /* ============================================
           MAIN CONTENT
           ============================================ */
        main {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0;
            background-color: var(--text-light);
            min-height: calc(100vh - 300px);
        }
        
        .hero {
            background: var(--primary-green);
            color: var(--text-light);
            padding: 2rem;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--text-light);
        }
        
        .hero p {
            font-size: 1.1rem;
            color: var(--text-light);
            font-weight: 400;
        }
        
        .section {
            padding: 2rem;
            border-bottom: 1px solid #eee;
        }
        
        .section:focus {
            outline: 3px solid #ffa500;
            outline-offset: 2px;
        }
        
        .section:last-child {
            border-bottom: none;
        }
        
        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 0.5rem;
        }
        
        h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-top: 1.5rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid var(--light-green);
            padding-bottom: 0.5rem;
        }
        
        h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-green);
            margin-top: 1rem;
            margin-bottom: 0.75rem;
        }
        
        p {
            margin-bottom: 1rem;
            line-height: 1.7;
        }
        
        a {
            color: #0066cc;
            text-decoration: underline;
        }
        
        a:hover,
        a:focus {
            color: #004499;
        }
        
        a:visited {
            color: #6600cc;
        }
        
        a:focus {
            outline: 2px solid #ffa500;
            outline-offset: 2px;
        }
        
        strong {
            color: var(--primary-green);
        }
        
        /* ============================================
           BLOG CARDS & CONTENT
           ============================================ */
        .featured-section {
            background: #e8f5e9;
            border-left: 4px solid var(--light-green);
            padding: 1.5rem;
            margin: 1rem 0;
            border-radius: 4px;
        }
        
        .featured-section h2 {
            color: var(--primary-green);
            margin-top: 0;
            margin-bottom: 1rem;
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .blog-posts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        
        .post-card {
            border: 1px solid var(--border-color);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            transition: box-shadow 0.3s ease;
        }
        
        .post-card:hover,
        .post-card:focus-within {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .post-header {
            background: linear-gradient(135deg, var(--primary-green), #1f4620);
            color: var(--text-light);
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .post-category {
            display: inline-block;
            background: rgba(255,255,255,0.25);
            padding: 0.3rem 0.8rem;
            border-radius: 3px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            width: fit-content;
        }
        
        .post-title {
            font-size: 1.2rem;
            margin-bottom: 0.75rem;
            color: var(--text-light);
            line-height: 1.4;
            font-weight: 600;
        }
        
        .post-meta {
            font-size: 0.9rem;
            opacity: 0.95;
            color: var(--text-light);
        }
        
        .post-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .post-excerpt {
            color: var(--text-dark);
            margin-bottom: 1rem;
            line-height: 1.6;
            font-size: 0.95rem;
            flex-grow: 1;
        }
        
        .product-highlight {
            background: #f5f5f5;
            border-left: 4px solid var(--primary-green);
            padding: 0.75rem;
            font-size: 0.9rem;
            border-radius: 3px;
            margin-bottom: 1rem;
        }
        
        .cta-link {
            display: inline-block;
            color: var(--primary-green);
            text-decoration: underline;
            font-weight: 600;
            transition: color 0.2s ease;
        }
        
        .cta-link:hover,
        .cta-link:focus {
            color: #1f4620;
            outline: 2px solid #ffa500;
            outline-offset: 2px;
        }
        
        /* ============================================
           CONTENT BOXES (for article pages)
           ============================================ */
        .intro-box {
            background-color: #e8f5e9;
            border-left: 4px solid var(--light-green);
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 4px;
        }
        
        .highlight {
            background: #e8f5e9;
            border-left: 4px solid var(--light-green);
            padding: 1rem;
            margin: 1.5rem 0;
            border-radius: 4px;
        }
        
        .warning {
            background: #fff3e0;
            border-left: 4px solid #ff9800;
            padding: 1rem;
            margin: 1.5rem 0;
            border-radius: 4px;
        }
        
        .strategy-box {
            background: #f0f8f0;
            border-left: 4px solid var(--light-green);
            padding: 1rem;
            margin: 1.5rem 0;
            border-radius: 4px;
        }
        
        /* ============================================
           PRODUCT CARDS & BUTTONS
           ============================================ */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        
        .product-card {
            background-color: var(--bg-light);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            padding: 1.5rem;
            transition: box-shadow 0.3s ease;
        }
        
        .product-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        .product-number {
            display: inline-block;
            background: var(--primary-green);
            color: white;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            text-align: center;
            line-height: 36px;
            font-weight: bold;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .product-name {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 0.5rem;
        }
        
        .product-rating {
            color: #f05b16;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        
        .product-price {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 0.75rem;
        }
        
        .product-description {
            color: var(--text-dark);
            margin-bottom: 1rem;
            line-height: 1.5;
            font-size: 0.95rem;
        }
        
        .product-features {
            list-style: none;
            padding-left: 0;
            margin-bottom: 1rem;
            color: var(--text-dark);
            font-size: 0.9rem;
        }
        
        .product-features li {
            padding-left: 1.5rem;
            margin-bottom: 0.4rem;
            position: relative;
        }
        
        .product-features li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--primary-green);
            font-weight: bold;
        }
        
        .amazon-button {
            background: var(--primary-green);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
            cursor: pointer;
            min-height: 44px;
            font-size: 0.95rem;
        }
        
        .amazon-button:hover,
        .amazon-button:focus {
            background: #1f4620;
            outline: 3px solid #ffa500;
            outline-offset: 2px;
            text-decoration: none;
            color: white;
        }
        
        .amazon-button:visited {
            color: white;
        }
        
        ul, ol {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }
        
        li {
            margin-bottom: 0.5rem;
        }
        
        /* ============================================
           FOOTER
           ============================================ */
        footer {
            background-color: var(--primary-green);
            color: var(--text-light);
            padding: 2rem 1rem;
            margin-top: 2rem;
        }
        
        .footer-container {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            color: var(--text-light);
            font-size: 1rem;
            margin-bottom: 0.75rem;
        }
        
        .footer-section ul {
            list-style: none;
            margin: 0;
        }
        
        .footer-section li {
            margin-bottom: 0.5rem;
        }
        
        .footer-section a {
            color: var(--text-light);
            text-decoration: underline;
        }
        
        .footer-section a:hover,
        .footer-section a:focus {
            color: #ffa500;
        }
        
        .footer-section p {
            margin-bottom: 0.5rem;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 1rem;
            text-align: center;
            font-size: 0.9rem;
        }
        
        .footer-bottom a {
            color: var(--text-light);
            text-decoration: underline;
            font-weight: 700;
        }
        
        .footer-bottom a:hover,
        .footer-bottom a:focus {
            color: var(--text-light);
        }
        
        /* ============================================
           RESPONSIVE DESIGN
           ============================================ */
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }
            
            .nav-menu {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                gap: 0;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                display: none;
                width: 100%;
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .nav-menu a {
                padding: 1rem;
                border-bottom: 1px solid #eee;
            }
            
            .section {
                padding: 1.5rem;
            }
            
            .hero h1 {
                font-size: 1.5rem;
            }
            
            h2 {
                font-size: 1.25rem;
            }
            
            .blog-posts {
                grid-template-columns: 1fr;
            }
            
            .product-grid {
                grid-template-columns: 1fr;
            }

	    .quick-nav {
   		padding: 1rem 2rem;
   		display: flex;
   		gap: 1rem;
    		flex-wrap: wrap;
    		background: white;
	    }

	    .quick-nav a {
		color: var(--primary-green);
   		text-decoration: none;
 		font-weight: 500;
 		padding: 0.5rem 1rem;
   		border-radius: 4px;
   		transition: background 0.3s;
	    }

	    .quick-nav a:hover,
	    .quick-nav a:focus {
	 	background: rgba(44, 95, 45, 0.1);
    		color: var(--primary-green);
    		outline: 2px solid #ffa500;
    		outline-offset: -2px;
           }

        }
    </style>
</head>
<body>
    <!-- SKIP LINK FOR ACCESSIBILITY -->
    <a href="#main-content" class="skip-to-main">Skip to main content</a>
    
    <!-- HEADER WITH NAVIGATION -->
    <header role="banner">
        <nav class="nav-container" role="navigation" aria-label="Main navigation">
            <a href="index.php" class="logo">🌿 Hudson Valley Ticks</a>
            <button class="mobile-menu-toggle" aria-label="Toggle navigation menu" 
                    onclick="this.parentElement.querySelector('.nav-menu').classList.toggle('active')">☰</button>
            <ul class="nav-menu">
                <li><a href="index.php" <?php if($currentPage === 'index') echo 'class="active"'; ?>>Tick Bite Information</a></li>
                <li><a href="tick-prevention-gear.php" <?php if($currentPage === 'tick-prevention-gear') echo 'class="active"'; ?>>Tick Prevention Gear</a></li>
                <li><a href="blog.php" <?php if($currentPage === 'blog') echo 'class="active"'; ?>>HV Tick Blog</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- MAIN CONTENT AREA -->
    <main id="main-content" role="main">
        <?php echo $pageContent ?? ''; ?>
    </main>
    
    <!-- FOOTER -->
    <footer role="contentinfo">
        <div class="footer-container">
            <!-- About Section -->
            <section class="footer-section">
                <h3>About</h3>
                <p>Hudson Valley Ticks provides evidence-based tick prevention and Lyme disease information.</p>
            </section>
            
            <!-- Quick Links -->
            <section class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Tick Bite Information</a></li>
                    <li><a href="tick-prevention-gear.php">Tick Prevention Gear</a></li>
                    <li><a href="blog.php">Blog</a></li>
                </ul>
            </section>
            
            <!-- Resources -->
            <section class="footer-section">
                <h3>Resources</h3>
                <ul>
                    <li><a href="https://www.health.ny.gov/diseases/communicable/lyme/" target="_blank">NY Health Dept</a></li>
                    <li><a href="https://www.cdc.gov/lyme/" target="_blank">CDC Lyme Info</a></li>
                </ul>
            </section>
            
            <!-- Contact -->
            <section class="footer-section">
                <h3>Contact</h3>
                <p>Email: <a href="mailto:info@hudsonvalleyticks.com">info@hudsonvalleyticks.com</a></p>
            </section>
            
            <!-- Affiliate Disclosure -->
            <section class="footer-section">
                <h3>Disclosure</h3>
                <p>Affiliate Disclosure: This page contains Amazon affiliate links.</p>
            </section>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; 2025 Hudson Valley Ticks. All rights reserved. | <a href="accessibility.php">Accessibility</a></p>
            <p style="margin-top: 0.5rem; font-size: 0.85rem;">WCAG 2.1 AA Compliant | Designed for accessibility</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.nav-menu');
            const button = document.querySelector('.mobile-menu-toggle');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
