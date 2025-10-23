# Hudson Valley Ticks - Complete HTML & Affiliate Page Builder SKILL

Complete standards for creating accessible, SEO-optimized Amazon affiliate product pages for hudsonvalleyticks.com with WCAG 2.1 Level AA compliance.

---

## Table of Contents

1. [WCAG 2.1 Compliance Standards](#wcag-21-compliance-standards)
2. [HTML Structure Requirements](#html-structure-requirements)
3. [Amazon Affiliate Link Format](#amazon-affiliate-link-format)
4. [Product Data Structure](#product-data-structure)
5. [CSS Styling Guide](#css-styling-guide)
6. [Product Card Components](#product-card-components)
7. [Accessibility Requirements](#accessibility-requirements)
8. [Best Practices](#best-practices)
9. [Category Organization](#category-organization)
10. [Verification Checklist](#verification-checklist)

---

## 🎯 WCAG 2.1 Compliance Standards

All Hudson Valley Ticks pages must meet **WCAG 2.1 Level AA** compliance.

### Key WCAG Success Criteria

#### **1.4.3 Contrast (Minimum)** - Level AA ✅
- **Normal text:** 4.5:1 contrast ratio
- **Large text (18pt+):** 3:1 contrast ratio
- **UI components:** 3:1 contrast ratio

**Approved Color Palette:**
```
✅ APPROVED COLORS (Good Contrast)

Dark backgrounds (#1a3a1a, #2d5a2d, #2c5f2d):
  - Text: white (#ffffff) = 12.63:1 ✅
  - Text: #b8e986 (light green) = 8.2:1 ✅
  - Accent: #d4af37 (gold) = 7.1:1 ✅

White backgrounds (#ffffff):
  - Text: #1a1a1a (dark) = 18.54:1 ✅
  - Text: #2d5a2d (dark green) = 8.5:1 ✅
  - Links: #1a5f1a (darker green) = 11:1 ✅

❌ COLORS TO AVOID
  - #4a8b4d (old accent-green) on white = 3.8:1 ❌
  - #97bc62 (old light-green) on white = 2.1:1 ❌
```

#### **1.4.1 Use of Color** - Level A ✅
- Information is NOT conveyed by color alone
- Links are distinguishable from surrounding text
- **MUST include text-decoration: underline for links**

#### **1.3.1 Info and Relationships** - Level A ✅
- Proper heading hierarchy (h1, h2, h3)
- Semantic HTML landmarks (`<nav>`, `<main>`, `<footer>`)
- Lists use proper `<ul>` and `<li>` tags

#### **2.4.3 Focus Order** - Level A ✅
- Tab order is logical (left to right, top to bottom)
- Focus indicators are visible on all interactive elements

---

## 📄 HTML Structure Requirements

### Required Page Structure (WCAG Compliant)

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title | Hudson Valley Ticks</title>
    <meta name="description" content="[60-160 characters]">
    <meta name="google-site-verification" content="EdTiTb32BQdG10T38Ag4P7LuN-MymFb4k1G71GaUad0" />
    <style>
        /* CSS goes here */
    </style>
</head>
<body>
    <!-- 1. NAVIGATION LANDMARK (REQUIRED) -->
    <nav aria-label="Main navigation">
        <div class="nav-container">
            <a href="/" class="logo">🌿 Hudson Valley Ticks</a>
            <button class="mobile-menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false">☰</button>
            <ul class="nav-menu">
                <li><a href="/">Tick Bite Info</a></li>
                <li><a href="/tick-prevention-gear.html">Tick Prevention Gear</a></li>
                <li><a href="/blog.html">HV Tick Blog</a></li>
            </ul>
        </div>
    </nav>

    <!-- 2. MAIN CONTENT LANDMARK (REQUIRED) -->
    <main>
        <!-- 3. HEADER SECTION (Use ONE h1 per page) -->
        <header>
            <h1>Page Title Goes Here</h1>
            <p class="subtitle">Supporting description</p>
        </header>

        <!-- 4. QUICK NAVIGATION (Optional for product pages) -->
        <div class="quick-nav">
            <a href="#section1">Category 1</a>
            <a href="#section2">Category 2</a>
        </div>

        <!-- 5. INFO BOXES -->
        <div class="intro-box">
            <strong>Key Information:</strong> Essential message here.
        </div>

        <div class="affiliate-disclosure">
            <strong>🔍 Affiliate Disclosure:</strong> This page contains Amazon affiliate links with tag 
            <code>hudsonvalleyt-20</code>. Purchases support HudsonValleyTicks.com at no extra cost to you.
        </div>

        <!-- 6. ARTICLE CONTENT -->
        <article>
            <section id="section1">
                <h2>Category Section Title</h2>
                <p>Why this category matters...</p>
                
                <div class="product-grid">
                    <!-- Product cards go here -->
                </div>
            </section>

            <section id="section2">
                <h2>Another Category</h2>
                <p>Description...</p>
                
                <div class="product-grid">
                    <!-- More product cards -->
                </div>
            </section>
        </article>
    </main>

    <!-- 7. FOOTER LANDMARK (REQUIRED) -->
    <footer>
        <p><strong>HudsonValleyTicks.com</strong></p>
        <p>Evidence-based tick prevention and education for the Hudson Valley region</p>
        <p style="margin-top: 2rem;">
            <a href="/accessibility.html" style="color: #b8e986; text-decoration: underline; font-weight: 600;">
                Accessibility Statement
            </a>
        </p>
        <p style="margin-top: 0.5rem; font-size: 0.8rem;">Affiliate: hudsonvalleyt-20</p>
    </footer>
</body>
</html>
```

### Heading Hierarchy Rules
```html
<!-- ✅ CORRECT: Logical hierarchy -->
<h1>Page Title (ONE per page)</h1>
<h2>Major section</h2>
<h3>Subsection if needed</h3>

<!-- ❌ WRONG: Skipping levels -->
<h1>Title</h1>
<h4>This skips h2 and h3 ❌</h4>

<!-- ❌ WRONG: Multiple h1s -->
<h1>Title</h1>
<h1>Another h1 ❌</h1>
```

---

## 🔗 Amazon Affiliate Link Format

### Standard Affiliate Link Structure
```
https://www.amazon.com/[PRODUCT-NAME]/dp/[ASIN]?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

### Components Breakdown
- **Base URL**: `https://www.amazon.com/`
- **Product Name**: URL-encoded product name (optional but recommended)
- **ASIN**: 10-character Amazon Standard Identification Number (e.g., B0755CG8H1)
- **linkCode**: `ll1` (standard Amazon link)
- **tag**: `hudsonvalleyt-20` (Hudson Valley Ticks affiliate ID - ALWAYS USE THIS)
- **language**: `en_US`
- **ref_**: `as_li_ss_tl` (reference parameter)

### Verified Product Link Examples

**Insect Shield Men's UPF Long Sleeve Shirt**
```
https://www.amazon.com/Insect-Shield-Dri-Balance-Repellent-Clothing/dp/B0755CG8H1?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

**Insect Shield Performance Ripstop Pants**
```
https://www.amazon.com/Insect-Shield-Performance-Lightweight-Breathable/dp/B0C36HGF4C?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

**Sawyer Premium Permethrin Pump Spray**
```
https://www.amazon.com/Sawyer-Permethrin-Clothing-Effective-Repellent/dp/B001ANQVYU?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

**Tick Twister 2-Pack Remover**
```
https://www.amazon.com/Tick-Twister-Remover-Safe-Tools/dp/B01BECRHEO?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

### Link Verification Checklist
- [ ] ASIN is 10 characters (e.g., B0755CG8H1)
- [ ] ASIN is correct for the product
- [ ] `tag=hudsonvalleyt-20` is present (CRITICAL - no commission without this)
- [ ] Link tested and loads correct product
- [ ] Link works on mobile devices
- [ ] No typos in URL

---

## 📦 Product Data Structure

### Product Information Template
```javascript
{
  "category": "Pre-Treated Clothing | Permethrin Spray | Body Repellents | Removal Tools | Yard Treatment",
  "name": "Product Name",
  "asin": "B0000000000",
  "badges": ["BESTSELLER", "ESSENTIAL", "RECOMMENDED"],
  "rating": "★★★★★ 4.6 (5,000+ reviews)",
  "price": "$45-55",
  "description": "Clear, benefit-focused description (1-2 sentences)",
  "key_features": ["Feature 1", "Feature 2", "Feature 3"],
  "amazon_url": "https://www.amazon.com/..."
}
```

### Verified Product List (With ASINs)

#### Pre-Treated Clothing (Most Important)
| Product | ASIN | Price | Category |
|---------|------|-------|----------|
| Insect Shield Men's UPF Long Sleeve Shirt | B0755CG8H1 | $45-55 | Shirt |
| Insect Shield Performance Ripstop Pants | B0C36HGF4C | $50-65 | Pants |
| Insect Shield Midweight Hiking Socks | B09T2KCBZ3 | $15-20 | Socks |
| Insect Shield Bug Repellent Bandana | B0B8B54YHB | $8-12 | Accessories |

#### Permethrin Spray
| Product | ASIN | Price | Notes |
|---------|------|-------|-------|
| Sawyer Premium Permethrin Pump Spray | B001ANQVYU | $15-20 | Professional grade |
| Sawyer Permethrin Aerosol Can | B0F29L8XXJ | $12-15 | Convenient |

#### Body Repellents
| Product | ASIN | Price | Notes |
|---------|------|-------|-------|
| Sawyer Picaridin 20% 2-Pack | B0D5QRXBS4 | $12-18 | Long-lasting |
| Repel 100 Max DEET | Varies | $8-12 | Traditional |

#### Tick Removal Tools
| Product | ASIN | Price | Notes |
|---------|------|-------|-------|
| Tick Twister 2-Pack | B01BECRHEO | $6-8 | CDC Recommended |
| TickCheck Value 3-Pack | B07D6J52JJ | $8-10 | Budget option |
| TickCheck Premium Kit | B075DKL3Z6 | $15-18 | Complete kit |

#### Yard Treatment
| Product | ASIN | Price | Notes |
|---------|------|-------|-------|
| Cutter Backyard Bug Control | B00ARKSABO | $10-12 | Chemical |
| Thermacell Tick Tubes | B098MV9T8L | $25-30 | Innovative |
| Wondercide Natural Yard Spray | B01FWRX2NM | $35-40 | Natural |

---

## 🎨 CSS Styling Guide (WCAG Compliant)

### Color Variables
```css
:root {
    /* Primary Colors - WCAG AA Safe */
    --primary-green: #2c5f2d;        /* Very dark green */
    --secondary-green: #2d5a2d;      /* Dark green accent */
    --light-green: #b8e986;          /* Bright green (contrast safe) */
    --accent-gold: #d4af37;          /* Gold accent */
    
    /* Background Colors */
    --bg-light: #f8f9fa;
    --bg-dark: #1a3a1a;
    
    /* Text Colors */
    --text-dark: #1a1a1a;            /* Very dark gray */
    --text-light: #ffffff;           /* White */
    --text-muted: #666666;           /* Medium gray */
    
    /* Badge Colors (WCAG Compliant) */
    --badge-orange: #ff9800;
    --badge-red: #d32f2f;
    --badge-blue: #2196f3;
}
```

### Navigation (WCAG Compliant)
```css
nav {
    background: white;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.nav-container {
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
}

.logo {
    font-size: 1.3rem;
    font-weight: bold;
    color: #2c5f2d;
    text-decoration: none;
}

.nav-menu {
    display: flex;
    list-style: none;
    gap: 2rem;
}

nav a {
    color: #1a1a1a;
    text-decoration: none;
    font-weight: 500;
    padding-bottom: 0.25rem;
    border-bottom: 2px solid transparent;
    transition: all 0.3s;
}

nav a:hover {
    color: #2c5f2d;
    border-bottom-color: #2c5f2d;
}

nav a.active {
    color: #2c5f2d;
    border-bottom-color: #2c5f2d;
    text-decoration: underline;
}
```

### Header & Typography
```css
header {
    background: linear-gradient(135deg, #2c5f2d 0%, #2d5a2d 100%);
    color: white;
    padding: 2rem;
    text-align: center;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
    color: white;
}

h2 {
    font-size: 1.8rem;
    color: #2c5f2d;
    margin: 2rem 0 1rem 0;
    border-bottom: 2px solid #b8e986;
    padding-bottom: 0.5rem;
}

h3 {
    font-size: 1.3rem;
    color: #2d5a2d;
    margin: 1.5rem 0 0.75rem 0;
}

p {
    line-height: 1.6;
    color: #1a1a1a;
    margin-bottom: 1rem;
}

.subtitle {
    font-size: 1.1rem;
    opacity: 0.95;
    color: #b8e986;
}
```

### Link Styling (WCAG 1.4.1 Compliant)
```css
/* ALL links MUST have underline + color */
a {
    color: #1a5f1a;
    text-decoration: underline;
    font-weight: 500;
    transition: all 0.3s;
}

a:hover {
    color: #0f3a0f;
    text-decoration: underline;
    text-decoration-thickness: 2px;
}

a:visited {
    color: #1a3a1a;
    text-decoration: underline;
}

/* Navigation links exception (obvious they're clickable) */
nav a {
    text-decoration: none;
}

nav a:hover,
nav a.active {
    text-decoration: underline;
}

/* Footer links */
footer a {
    color: #b8e986;
    text-decoration: underline;
    font-weight: 600;
}
```

### Product Grid & Cards
```css
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.product-card {
    background: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 1.5rem;
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
}

.product-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.product-name {
    font-size: 1.2rem;
    font-weight: 600;
    color: #2c5f2d;
    margin-bottom: 0.5rem;
}

.product-badges {
    margin-bottom: 0.5rem;
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.badge {
    background: #4caf50;
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.badge.bestseller { background: #ff9800; }
.badge.essential { background: #d32f2f; }
.badge.recommended { background: #2196f3; }

.product-rating {
    color: #ff9800;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.product-price {
    font-weight: 700;
    color: #2c5f2d;
    font-size: 1.2rem;
    margin-bottom: 0.75rem;
}

.product-description {
    color: #666666;
    margin-bottom: 1rem;
    flex-grow: 1;
}

.product-features {
    list-style: none;
    padding-left: 0;
    margin-bottom: 1rem;
    color: #666666;
}

.product-features li:before {
    content: "✓ ";
    color: #2c5f2d;
    font-weight: bold;
    margin-right: 0.5rem;
}
```

### Buttons (Amazon-Style)
```css
.amazon-button {
    background: linear-gradient(to bottom, #f7dfa5 0%, #f0c14b 100%);
    color: #111;
    border: 1px solid #a88734;
    padding: 0.75rem 1.5rem;
    text-decoration: none;
    border-radius: 4px;
    font-weight: 600;
    display: inline-block;
    transition: all 0.3s ease;
    text-align: center;
    cursor: pointer;
    font-size: 1rem;
}

.amazon-button:hover {
    background: linear-gradient(to bottom, #f5d78e 0%, #eeb933 100%);
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.amazon-button:active {
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.2);
}

.amazon-button:focus {
    outline: 2px solid #1a5f1a;
    outline-offset: 2px;
}
```

### Info Boxes
```css
.intro-box {
    background: #e8f5e9;
    border-left: 4px solid #2c5f2d;
    padding: 1rem;
    margin: 1.5rem 0;
    border-radius: 4px;
}

.affiliate-disclosure {
    background: #fff3e0;
    border-left: 4px solid #ff9800;
    padding: 1rem;
    margin: 1.5rem 0;
    border-radius: 4px;
    font-size: 0.95rem;
}

.affiliate-disclosure code {
    background: #ffe0b2;
    padding: 0.2rem 0.4rem;
    border-radius: 2px;
    font-family: monospace;
}
```

### Responsive Design
```css
@media (max-width: 768px) {
    .product-grid {
        grid-template-columns: 1fr;
    }
    
    h1 {
        font-size: 1.8rem;
    }
    
    h2 {
        font-size: 1.4rem;
    }
    
    .nav-menu {
        position: absolute;
        top: 100%;
        right: 0;
        display: none;
        flex-direction: column;
        background: white;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        width: 100%;
    }
    
    .nav-menu.active {
        display: flex;
    }
}
```

### Footer
```css
footer {
    background: #1a3a1a;
    color: white;
    padding: 2rem;
    text-align: center;
    margin-top: 3rem;
}

footer p {
    color: #b8e986;
    margin-bottom: 0.5rem;
}

footer a {
    color: #b8e986;
    text-decoration: underline;
    font-weight: 600;
}

footer a:hover {
    color: #ffffff;
}
```

---

## 🛍️ Product Card Components

### Standard Product Card HTML (WCAG Compliant)
```html
<div class="product-card">
    <div class="product-name">Product Name</div>
    
    <div class="product-badges">
        <span class="badge bestseller">BESTSELLER</span>
        <span class="badge">KEY FEATURE</span>
    </div>
    
    <div class="product-rating">★★★★★ 4.6 (5,000+ reviews)</div>
    
    <div class="product-price">$45-55</div>
    
    <div class="product-description">
        Clear, benefit-focused description. Explain why this product is effective for tick prevention in 1-2 sentences.
    </div>
    
    <ul class="product-features">
        <li>Key feature or benefit #1</li>
        <li>Key feature or benefit #2</li>
        <li>Key feature or benefit #3</li>
    </ul>
    
    <a href="https://www.amazon.com/[PRODUCT]/dp/[ASIN]?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl" 
       class="amazon-button" 
       target="_blank"
       rel="noopener noreferrer">
        View on Amazon →
    </a>
</div>
```

### Badge Guidelines
- **BESTSELLER** (Orange): Top-selling products, high review counts
- **ESSENTIAL** (Red): Must-have items for complete protection
- **RECOMMENDED** (Blue): Highly praised by users
- Additional: UPF 30+, VERSATILE, INNOVATIVE, SPOT TICKS, etc.
- **Limit 2-3 badges per product** (more = less credible)

### Description Best Practices

**✓ Good Examples:**
```
"Lightweight Dri-Balance™ shirt with UPF 30+ sun protection. Factory-treated with 
EPA-registered permethrin that lasts 70+ washes. Quick-drying and breathable—the gold 
standard for tick-bite prevention."

"WHITE color makes embedded ticks VISIBLE for easy removal! Midweight cushioned crew 
socks with permethrin protection. Long-lasting, machine washable (70+ washes)."

"CDC-recommended method for safe tick removal. Two-prong design extracts the entire 
tick without crushing. Works on any tick size."
```

**✗ Bad Examples:**
```
"Nice socks" (too vague)
"Repels insects" (doesn't emphasize tick prevention)
"Good product" (no benefit information)
```

---

## ♿ Accessibility Requirements (WCAG 2.1 Level AA)

### Required Landmarks
- [ ] `<nav>` with `aria-label="Main navigation"`
- [ ] `<main>` wrapper around all primary content
- [ ] `<footer>` with accessibility link

### Link Requirements
- [ ] All links have underline + color (WCAG 1.4.1)
- [ ] Link text is descriptive (not "click here")
- [ ] Affiliate links open in new tab with `rel="noopener noreferrer"`

### Image & Content Requirements
- [ ] All images have `alt=""` attributes (use empty for decorative)
- [ ] Page uses ONE `<h1>` per page only
- [ ] Heading hierarchy is logical (no skipped levels)
- [ ] Color contrast passes WAVE checker (4.5:1 minimum)

### Footer Accessibility Link (REQUIRED)
```html
<footer>
    <p><strong>HudsonValleyTicks.com</strong></p>
    <p>Evidence-based tick prevention and education</p>
    
    <!-- ACCESSIBILITY LINK - REQUIRED ON EVERY PAGE -->
    <p style="margin-top: 2rem;">
        <a href="/accessibility.html" 
           style="color: #b8e986; text-decoration: underline; font-weight: 600;">
            Accessibility Statement
        </a>
    </p>
</footer>
```

### Testing for Accessibility
- [ ] Page validates at https://validator.w3.org/
- [ ] WAVE shows 0 errors at https://wave.webaim.org/
- [ ] Contrast passes at https://webaim.org/resources/contrastchecker/
- [ ] Page is navigable with keyboard only (Tab through)
- [ ] Focus indicators are visible
- [ ] Works on mobile (320px width minimum)

---

## ✅ Best Practices

### Link Verification Protocol
1. **Always verify ASIN**
   - Search Amazon for exact product
   - Copy ASIN from URL (/dp/[ASIN])
   - Verify ASIN matches product exactly

2. **Test all links**
   - Click every link before publishing
   - Verify loads correct Amazon product
   - Test on desktop AND mobile
   - Check no 404 errors

3. **Affiliate tag compliance**
   - EVERY link MUST include: `tag=hudsonvalleyt-20`
   - Links without tag = $0 commission earned
   - Double-check this parameter

4. **Regular audits**
   - Monthly: Check for dead links
   - Quarterly: Verify prices still reasonable
   - Annually: Replace obsolete products

### Content Organization
1. **Category flow**
   - Clothing (personal layer protection)
   - Spray (treat your gear)
   - Repellents (apply to skin)
   - Removal (for when bites happen)
   - Yard (environmental control)
   - Kits (bundles)

2. **Section structure**
   - Clear category name
   - "Why this matters" explanation
   - Price range expectations
   - 3-6 products per category

3. **Quick navigation**
   - Anchor links for each section (`id="clothing"`)
   - Quick-nav buttons at top
   - Mobile-responsive menu

### Mobile Optimization
- Grid adapts to single column on mobile
- Text is readable (16px minimum)
- Touch targets are 44x44px minimum
- No horizontal scrolling
- Navigation collapses into menu on small screens

### Performance
- Minimal CSS (no external stylesheets if possible)
- Web-safe fonts (system fonts preferred)
- Use emojis instead of images where possible
- Clean, semantic HTML
- Images optimized (if used)

---

## 📂 Category Organization Guide

### 1. Pre-Treated Clothing (Most Important)
**Section Title**: "Pre-Treated Protective Clothing"
**Key Message**: "CDC-Rated #1 Most Effective"
**Why Important**: Kills ticks on contact, lasts 70+ washes

**Products**:
- Shirts (UPF protection + permethrin)
- Pants (ripstop material)
- Socks (white for visibility)
- Accessories (bandanas, buffs)

### 2. Permethrin Spray
**Section Title**: "Treat Your Own Clothes & Gear"
**Key Message**: "Apply to existing clothing for tick protection"
**Why Important**: Extends protection to clothes you already own

**Products**:
- Pump spray (professional)
- Aerosol spray (convenient)
- Include: Application tips

### 3. Body Repellents
**Section Title**: "Skin Repellents & Protection"
**Key Message**: "Apply to exposed skin for immediate protection"
**Why Important**: Complements clothing protection

**Products**:
- Picaridin 20% (long-lasting)
- DEET products (traditional)
- Include: Duration comparison

### 4. Tick Removal Tools
**Section Title**: "Proper Tick Removal is Critical"
**Key Message**: "Correct removal prevents Lyme disease transmission"
**Why Important**: Most tick bites become Lyme when removed incorrectly

**Products**:
- Tick Twister (easiest to use)
- TickCheck removers (multiple price points)
- Include: CDC-approved method

### 5. Yard Treatment
**Section Title**: "Most Tick Bites Happen in Your Own Yard"
**Key Message**: "Reduce ticks where you live and play"
**Why Important**: Environmental control + personal protection = best results

**Products**:
- Chemical sprays
- Natural alternatives
- Innovative solutions (Tick Tubes)

### 6. Starter Kits (Optional)
**Section Title**: "Complete Protection Bundles"
**Key Message**: "Everything you need for complete tick protection"

**Products**:
- Budget Kit
- Complete Protection Kit
- Homeowner Yard Kit

---

## ✓ Verification Checklist

### Before Publishing (WCAG + Affiliate)

**Accessibility Compliance**
- [ ] Page validates at https://validator.w3.org/ (0 errors)
- [ ] WAVE checker shows 0 errors
- [ ] Color contrast passes 4.5:1 minimum
- [ ] Only ONE `<h1>` per page
- [ ] Heading hierarchy is logical (no skips)
- [ ] All links have underline + color
- [ ] Footer accessibility link present and working
- [ ] `<main>`, `<nav>`, `<footer>` landmarks present
- [ ] Page works with keyboard only (Tab navigation)

**Affiliate Link Quality**
- [ ] All ASINs verified as correct
- [ ] All links include `tag=hudsonvalleyt-20`
- [ ] All links tested and working (no 404s)
- [ ] All links tested on mobile
- [ ] Amazon button styling consistent
- [ ] Affiliate disclosure prominent and clear

**Content Quality**
- [ ] Descriptions are accurate and benefit-focused
- [ ] Pricing is current (within $5 variance OK)
- [ ] Star ratings are visible and accurate
- [ ] Badges are appropriate (max 2-3 per product)
- [ ] No duplicate product listings
- [ ] Category organization is logical
- [ ] Quick navigation works

**Mobile Responsiveness**
- [ ] Product grid adapts to 1 column
- [ ] Text is readable (not too small)
- [ ] Buttons are clickable (touch-friendly)
- [ ] Navigation collapses into menu
- [ ] No horizontal scrolling
- [ ] Images scale properly

### Link Testing Template
```
Product: [NAME]
ASIN: [ASIN]
Expected: [PRODUCT DESCRIPTION]
URL: https://www.amazon.com/[PRODUCT]/dp/[ASIN]?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
Test Result: ✓ PASS / ✗ FAIL
Affiliate Tag Present: ✓ YES / ✗ NO
Mobile Test: ✓ PASS / ✗ FAIL
Notes: [Any issues found]
```

---

## ❌ Common Mistakes to Avoid

### Affiliate-Related
1. **Missing affiliate tag** - No commission earned! 💸
2. **Wrong ASIN** - Links to wrong product
3. **Broken links** - Product no longer available
4. **Outdated pricing** - Users see different price on Amazon
5. **Duplicate listings** - Same product in multiple categories

### Accessibility-Related
6. **No `<main>` tag** - Fails landmark requirement
7. **Multiple `<h1>` elements** - WCAG violation
8. **Links without underline** - Only colored links fail WCAG 1.4.1
9. **No footer accessibility link** - Missing required element
10. **Poor color contrast** - Text unreadable for many users

### Content-Related
11. **Vague descriptions** - Doesn't explain tick prevention benefit
12. **Too many products** - Overwhelms users, reduces conversions
13. **Too many badges** - Reduces credibility
14. **Poor organization** - Hard to find relevant items
15. **No affiliate disclosure** - Violates FTC guidelines

---

## 📋 Quick Reference: All ASINs

**CLOTHING:**
- Insect Shield Men's UPF Shirt: B0755CG8H1
- Insect Shield Ripstop Pants: B0C36HGF4C
- Insect Shield Midweight Socks: B09T2KCBZ3
- Insect Shield Bandana: B0B8B54YHB

**SPRAY:**
- Sawyer Permethrin Pump: B001ANQVYU
- Sawyer Permethrin Aerosol: B0F29L8XXJ

**REPELLENTS:**
- Sawyer Picaridin 2-Pack: B0D5QRXBS4

**REMOVAL:**
- Tick Twister 2-Pack: B01BECRHEO
- TickCheck Value 3-Pack: B07D6J52JJ
- TickCheck Premium: B075DKL3Z6

**YARD:**
- Cutter Backyard Bug: B00ARKSABO
- Thermacell Tick Tubes: B098MV9T8L
- Wondercide Natural: B01FWRX2NM

---

## 📞 Support & Updates

**Last Updated**: October 21, 2025
**Affiliate ID**: hudsonvalleyt-20
**Compliance**: WCAG 2.1 Level AA
**Owner**: Hudson Valley Ticks Development Team

**For updates**:
- WCAG Questions: https://www.w3.org/WAI/WCAG21/quickref/
- Contrast Checking: https://webaim.org/resources/contrastchecker/
- Amazon Updates: Check Associates dashboard
- CDC Info: https://www.cdc.gov/ticks/

---

---

## ⚠️ CRITICAL PRODUCT NAMING & SPELLING RULES

**EXACT PRODUCT NAME SPELLINGS (MUST MATCH - NO EXCEPTIONS):**

```
✅ CORRECT SPELLINGS:
- Picaridin 20% (NOT "Picarikin", NOT "Picaridan")
- Permethrin (NOT "Permithrin", NOT "Permetrin")
- DEET (NOT "deet", NOT "Deet")
- Insect Shield (NOT "InsectShield")
- Sawyer (NOT "Sayer")
- Tick Twister (NOT "TickTwister", NOT "Tick-Twister")
- Simparica (NOT "Simparica Plus", generic)
- Seresto (NOT "Seresto Plus")
- Bravecto (NOT "Bravecto Plus" unless Plus is specified)
- Wondercide (NOT "Wonder-cide")
- Thermacell (NOT "Thermal-cell")
```

**VERIFICATION PROTOCOL:**

1. **Before creating ANY content:** Reference this spelling list
2. **During content creation:** Cross-reference product names against this list EVERY TIME a product name is used
3. **After completing content:** Do a final quality check:
   - Search document for each product name
   - Verify spelling matches list exactly
   - Flag any discrepancies BEFORE finalizing
4. **If uncertainty:** Check the ASIN or product URL on Amazon—never guess spelling

**Why This Matters:**
- Incorrect spellings reduce credibility
- Users searching for products won't find misspelled versions
- Affiliate links may break if product names are wrong in descriptions
- Hudson Valley Ticks brand reputation depends on accuracy

---

## 📑 Full Affiliate Link Template

Use this template for any new product:

```
https://www.amazon.com/[PRODUCT-NAME]/dp/[ASIN]?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

**Step-by-step**:
1. Find product on Amazon
2. Copy ASIN from URL (/dp/[ASIN])
3. Get product name from Amazon page
4. Replace `[PRODUCT-NAME]` with URL-encoded name (spaces = hyphens)
5. Replace `[ASIN]` with ASIN
6. Keep all other parameters exactly as shown
7. Test link works

**Example**:
```
Base: https://www.amazon.com/dp/B0755CG8H1
Product name: Insect-Shield-Dri-Balance-Repellent-Clothing
Final: https://www.amazon.com/Insect-Shield-Dri-Balance-Repellent-Clothing/dp/B0755CG8H1?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

---

**Document Version**: 3.0 (Merged)  
**Last Updated**: October 21, 2025  
**Status**: Complete & Production-Ready  
**Compliance**: WCAG 2.1 Level AA + Amazon Affiliate Standards  
**Owner**: Hudson Valley Ticks Development

---

## 📋 FUTURE BLOG TOPICS - CONTENT ROADMAP

### **Medical/Health Topics**
- Lyme Disease Long-Term Effects: Chronic pain, neurological symptoms, Post-Treatment Lyme Disease Syndrome (PTLDS)
- When to Get Tested After a Tick Bite: Timeline, what tests to ask for, false negatives
- Antibiotics for Lyme: Doxycycline protocols, early treatment window, effectiveness rates
- Tick-Borne Co-Infections: Anaplasmosis, babesiosis, Ehrlichiosis symptoms (many people have multiple infections)
- Pregnancy & Lyme Disease: Risks, transmission, safe prevention during pregnancy
- Lyme Arthritis: Joint pain progression, treatment options, when it becomes chronic

### **Lifestyle/Activity-Specific**
- Golf Course Tick Prevention: Specific to Hudson Valley courses, prevention while golfing
- Camping & Backpacking Tick Prevention: Gear, campsite selection, post-camp tick checks
- Dog Parks & Tick Risk: How to protect dogs at social venues, checking after visits
- School & Youth Sports: Tick prevention for coaches, athletic programs, summer camps
- Gardening in Tick Season: Planting tick-repelling plants beyond the basics, garden design
- Running Trails in Hudson Valley: Specific trail recommendations and tick risks by location

### **Seasonal/Timing**
- Winter Ticks: Are ticks active in snow? Hudson Valley winter prevention
- Spring Tick Explosion: Why April-May sees population surge, early prevention
- Post-Winter Tick Checks: Spring cleanup and what to look for
- Fall Second Wave: Why late October through November sees another spike

### **Location-Specific (Great for Local SEO)**
- Tick Risk by Hudson Valley Town: Dutchess County breakdown, Westchester County specifics
- Hudson Valley Parks Most Dangerous for Ticks: State parks, hiking areas, tick hotspots
- Tick Prevention by Town: Beacon, Cold Spring, Rhinebeck, etc. (individual towns)
- Waterfront Living & Ticks: Riverside properties, river access areas

### **Demographics**
- Tick Prevention for Babies & Toddlers: Safe products, what to avoid, special considerations
- Seniors & Tick Prevention: Age-appropriate strategies, arthritis-friendly gear
- People with Allergies: Safe alternatives, non-chemical prevention
- Immunocompromised People: Extra precautions needed

### **Product Deep-Dives**
- Permethrin vs. Pre-Treated Clothing: Cost analysis, effectiveness comparison
- Tick Prevention Clothing Brands Ranked: Beyond Insect Shield
- Natural/Organic Tick Prevention: Essential oils, citronella, effectiveness (honest review)
- Tick Prevention for Pets: Beyond dogs - cats, rabbits, horses
- Homemade vs. Store-Bought: DIY tick prevention effectiveness

### **Gear/Equipment**
- Tick Checking Tools Ranked: Different removal methods, which work best
- Travel with Tick Prevention: Packing lists, TSA rules for repellents
- Tick Prevention for Different Body Types: Gear sizing, fit considerations
- Clothing Materials for Tick Prevention: Which fabrics work best with permethrin

### **Workplace/Professional**
- Tick Prevention for Construction Workers: Site-specific risks
- Park Rangers & Tick Prevention: Professional outdoor worker insights
- Agricultural Workers & Ticks: Farm/orchard tick prevention
- Tick Prevention Policies: What employers should implement

### **Myths & Misinformation**
- Tick Myths Debunked: Burning ticks, vaseline, rumor vs. reality
- Common Misconceptions About Lyme: "I'm immune after one bite," etc.
- Tick Prevention Myths: What doesn't work, why people believe them

### **Post-Bite/Treatment**
- What to Do Immediately After Finding a Tick: First 24 hours protocol
- Tick Identification After Removal: How to tell what bit you
- Monitoring After Tick Removal: Symptom timeline, what to watch for
- Travel with Lyme Disease: Can you still hike/outdoor after diagnosis?

### **Prevention Strategy Guides**
- Zero-Tick Lifestyle: Complete isolation approach (for extremely high-risk people)
- Tick Prevention on a Budget: Cheapest effective methods
- Tick Prevention Without Chemicals: Chemical-free complete strategy
- Family Tick Prevention Plan: Multiple ages, multiple activities

### **Hudson Valley Specific**
- Tick History in Hudson Valley: How populations changed, why it's worse now
- Local Lyme Disease Statistics: Hudson Valley rates, county data
- Hudson Valley Vets Who Test for Lyme: Vet recommendations, testing services
- Hudson Valley Outdoor Events & Tick Risk: Farm festivals, corn mazes, orchards

### **Trending/Timely**
- New Lyme Vaccine: Updates, effectiveness, availability
- Tick Population Predictions: Seasonal forecasting for upcoming year
- Climate Change & Ticks: Why Hudson Valley getting worse, expansion predictions
- New Products Review: As new prevention gear launches

### **TOP 10 PRIORITY TOPICS (Highest Traffic/Impact)**

1. **Lyme Disease Long-Term Effects** - People searching for chronic post-Lyme issues
2. **Tick Prevention on a Budget** - High search volume, cost-conscious audience
3. **Pregnancy & Lyme Disease** - Specific demographic, worried parents searching
4. **Hudson Valley Specific Tick Hotspots** - Local SEO gold
5. **Tick Myths Debunked** - Viral potential, shareable content
6. **Post-Lyme Arthritis Guide** - Long-tail keywords, desperate audience
7. **Natural/Organic Tick Prevention** - Growing interest in non-chemical options
8. **Camping & Backpacking Tick Prevention** - Seasonal topic, adventure demographic
9. **School & Youth Sports Tick Prevention** - Coaches and parents as audience
10. **Winter Ticks Myth** - Common misconception, high search volume

---

**Document Version**: 3.1 (Updated with Future Topics)  
**Last Updated**: October 23, 2025  
**Status**: Complete & Production-Ready  
**Compliance**: WCAG 2.1 Level AA + Amazon Affiliate Standards  
**Owner**: Hudson Valley Ticks Development
