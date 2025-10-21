# Hudson Valley Ticks - Amazon Affiliate Page Builder SKILL

## Overview
This skill provides comprehensive guidance for building professional Amazon affiliate product pages for Hudson Valley Ticks (hudsonvalleyt-20). It covers HTML structure, CSS styling, product card formatting, affiliate link generation, and best practices for tick prevention product listings.

---

## Table of Contents
1. [Amazon Affiliate Link Format](#amazon-affiliate-link-format)
2. [Product Data Structure](#product-data-structure)
3. [HTML Page Structure](#html-page-structure)
4. [CSS Styling Guide](#css-styling-guide)
5. [Product Card Components](#product-card-components)
6. [Best Practices](#best-practices)
7. [Category Organization](#category-organization)
8. [Verification Checklist](#verification-checklist)

---

## Amazon Affiliate Link Format

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

### Examples

**Insect Shield Men's UPF Long Sleeve Shirt**
```
https://www.amazon.com/Insect-Shield-Dri-Balance-Repellent-Clothing/dp/B0755CG8H1?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

**Insect Shield Performance Ripstop Pants**
```
https://www.amazon.com/Insect-Shield-Performance-Lightweight-Breathable/dp/B0C36HGF4C?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

**Insect Shield Midweight Hiking Socks**
```
https://www.amazon.com/Insect-Shield-Midweight-Comfortable-Protection/dp/B09T2KCBZ3?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

**Insect Shield Bug Repellent Bandana**
```
https://www.amazon.com/Insect-Shield-Bug-Repellant-Bandana/dp/B0B8B54YHB?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

---

## Product Data Structure

### Product Information Template
Each product should include:

```javascript
{
  "category": "Pre-Treated Clothing | Permethrin Spray | Body Repellents | Removal Tools | Yard Treatment",
  "name": "Product Name",
  "asin": "B0000000000",
  "badges": ["BESTSELLER", "ESSENTIAL", "RECOMMENDED", "UPF 30+", "VERSATILE"],
  "rating": "★★★★★ 4.6 (5,000+ reviews)",
  "price": "$45-55",
  "description": "Clear, benefit-focused description (1-2 sentences)",
  "key_features": ["Feature 1", "Feature 2", "Feature 3"],
  "amazon_url": "https://www.amazon.com/..."
}
```

### Verified Product List (Updated)

#### Pre-Treated Clothing
| Product | ASIN | Price | Link |
|---------|------|-------|------|
| Insect Shield Men's UPF Long Sleeve Shirt | B0755CG8H1 | $45-55 | `/dp/B0755CG8H1` |
| Insect Shield Performance Ripstop Pants | B0C36HGF4C | $50-65 | `/dp/B0C36HGF4C` |
| Insect Shield Midweight Hiking Socks | B09T2KCBZ3 | $15-20 | `/dp/B09T2KCBZ3` |
| Insect Shield Bug Repellent Bandana | B0B8B54YHB | $8-12 | `/dp/B0B8B54YHB` |

#### Permethrin Spray
| Product | ASIN | Price | Link |
|---------|------|-------|------|
| Sawyer Premium Permethrin Pump Spray | B001ANQVYU | $15-20 | `/dp/B001ANQVYU` |
| Sawyer Permethrin Aerosol Can | B0F29L8XXJ | $12-15 | `/dp/B0F29L8XXJ` |

#### Body Repellents
| Product | ASIN | Price | Link |
|---------|------|-------|------|
| Sawyer Picaridin 20% 2-Pack | B0D5QRXBS4 | $12-18 | `/dp/B0D5QRXBS4` |
| Repel 100 Max DEET | Varies | $8-12 | Search on Amazon |

#### Tick Removal Tools
| Product | ASIN | Price | Link |
|---------|------|-------|------|
| Tick Twister 2-Pack | B01BECRHEO | $6-8 | `/dp/B01BECRHEO` |
| TickCheck Value 3-Pack | B07D6J52JJ | $8-10 | `/dp/B07D6J52JJ` |
| TickCheck Premium Kit | B075DKL3Z6 | $15-18 | `/dp/B075DKL3Z6` |

#### Yard Treatment
| Product | ASIN | Price | Link |
|---------|------|-------|------|
| Cutter Backyard Bug Control | B00ARKSABO | $10-12 | `/dp/B00ARKSABO` |
| Thermacell Tick Tubes | B098MV9T8L | $25-30 | `/dp/B098MV9T8L` |
| Wondercide Natural Yard Spray | B01FWRX2NM | $35-40 | `/dp/B01FWRX2NM` |

---

## HTML Page Structure

### Complete HTML Template

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tick Prevention Gear & Products | Hudson Valley Ticks</title>
    <meta name="description" content="Evidence-based tick prevention products and gear. Shop Insect Shield clothing, Sawyer repellents, and removal tools. All Amazon affiliate links use hudsonvalleyt-20.">
    <style>
        /* CSS styling goes here */
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="/" class="logo">🌿 Hudson Valley Ticks</a>
            <button class="mobile-menu-toggle" onclick="document.querySelector('.nav-menu').classList.toggle('active')">☰</button>
            <ul class="nav-menu">
                <li><a href="/">Tick Bite Info</a></li>
                <li><a href="/tick-prevention-gear.html" class="active">Prevention Gear</a></li>
                <li><a href="/lyme-fluent-doctors.html">Lyme-Fluent Doctors</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Main Container -->
    <div class="container">
        <!-- Header -->
        <header>
            <h1>🛡️ Tick Prevention Gear</h1>
            <p class="subtitle">Evidence-based products to protect against ticks in the Hudson Valley</p>
        </header>

        <!-- Quick Navigation -->
        <div class="quick-nav">
            <a href="#clothing">Clothing</a>
            <a href="#permethrin">Spray</a>
            <a href="#repellents">Repellents</a>
            <a href="#removal">Removal</a>
            <a href="#yard">Yard</a>
            <a href="#kits">Kits</a>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Info Boxes -->
            <div class="intro-box">
                <strong>💡 Most Effective Protection Strategy:</strong><br>
                Layer your defenses: Permethrin-treated clothing + Picaridin repellent on exposed skin + tick checks. This provides 95%+ protection.
            </div>

            <div class="affiliate-disclosure">
                <strong>🔍 Affiliate Disclosure:</strong> This page contains Amazon affiliate links with tag <code>hudsonvalleyt-20</code>. Purchases support HudsonValleyTicks.com at no extra cost to you.
            </div>

            <!-- Product Section -->
            <div class="category-section" id="clothing">
                <h2>Pre-Treated Protective Clothing</h2>
                <p><strong>Why this works:</strong> Permethrin-treated clothing kills ticks on contact. Lasts 70+ washes.</p>
                
                <div class="product-grid">
                    <!-- Product cards go here -->
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <p><strong>HudsonValleyTicks.com</strong></p>
            <p>Evidence-based tick prevention and education for the Hudson Valley region</p>
            <p style="margin-top: 0.5rem; font-size: 0.8rem;">Affiliate: hudsonvalleyt-20</p>
        </footer>
    </div>
</body>
</html>
```

---

## CSS Styling Guide

### Color Scheme
```css
/* Primary Colors */
--primary-green: #2c5f2d;
--accent-green: #4a8b4d;
--light-green: #97bc62;
--bg-light: #f8f9fa;

/* Badge Colors */
--badge-orange: #ff9800;     /* BESTSELLER */
--badge-red: #d32f2f;        /* ESSENTIAL */
--badge-blue: #2196f3;       /* RECOMMENDED */

/* Text Colors */
--text-dark: #333;
--text-light: #666;
```

### Essential CSS Classes

#### Navigation
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

.nav-menu {
    display: flex;
    list-style: none;
    gap: 2rem;
}

.nav-menu a {
    color: #333;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
}

.nav-menu a.active::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    right: 0;
    height: 3px;
    background: #2c5f2d;
}
```

#### Header
```css
header {
    background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
    color: white;
    padding: 2rem;
    text-align: center;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

.subtitle {
    font-size: 1.1rem;
    opacity: 0.95;
}
```

#### Product Cards
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

.product-rating {
    color: #ff9800;
    margin-bottom: 0.25rem;
}

.product-price {
    font-weight: 600;
    color: #388e3c;
    margin-bottom: 0.75rem;
}
```

#### Badges
```css
.badge {
    background: #4caf50;
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.badge.bestseller {
    background: #ff9800;
}

.badge.essential {
    background: #d32f2f;
}

.badge.recommended {
    background: #2196f3;
}
```

#### Buttons
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
}

.amazon-button:hover {
    background: linear-gradient(to bottom, #f5d78e 0%, #eeb933 100%);
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}
```

---

## Product Card Components

### Standard Product Card HTML
```html
<div class="product-card">
    <div class="product-name">Product Name</div>
    <div class="product-badges">
        <span class="badge bestseller">BESTSELLER</span>
        <span class="badge">FEATURE</span>
    </div>
    <div class="product-rating">★★★★★ 4.6 (5,000+ reviews)</div>
    <div class="product-price">$45-55</div>
    <div class="product-description">
        Clear, benefit-focused description. Explain why this product is effective for tick prevention.
    </div>
    <a href="https://www.amazon.com/[PRODUCT]/dp/[ASIN]?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl" 
       class="amazon-button" target="_blank">
        View on Amazon →
    </a>
</div>
```

### Badge Guidelines
- **BESTSELLER**: Orange badge for top-selling products
- **ESSENTIAL**: Red badge for must-have items
- **RECOMMENDED**: Blue badge for highly recommended products
- **Additional Badges**: UPF 30+, VERSATILE, INNOVATIVE, SPOT TICKS, etc.

### Description Best Practices
1. **Keep it concise** (1-2 sentences)
2. **Lead with benefits** (what problem does it solve?)
3. **Include key features** (material, durability, protection duration)
4. **Use CDC/scientific backing** when available
5. **Emphasize tick prevention** specifically

#### Good Description Examples
```
✓ "Lightweight Dri-Balance™ shirt with sun protection. Factory-treated with EPA-registered permethrin. Breathable and quick-drying. The gold standard for tick-bite prevention."

✓ "WHITE color makes embedded ticks VISIBLE for easy removal! Midweight cushioned crew socks with permethrin protection. Long-lasting, machine washable."

✗ "Nice socks" (too vague)
✗ "Socks that repel insects" (doesn't emphasize visibility/benefit)
```

---

## Best Practices

### Link Verification
1. **Always verify ASIN before linking**
   - Search Amazon for exact product
   - Copy ASIN from URL (/dp/[ASIN])
   - Test link works and loads correct product

2. **Check for 404 errors**
   - Periodically audit all product links
   - Replace dead links with updated ASINs
   - Test on desktop and mobile

3. **Ensure affiliate tag is present**
   - Every link MUST include: `tag=hudsonvalleyt-20`
   - Links without tag = no commission earned
   - Do not omit this parameter

### Content Organization
1. **Logical category flow**
   - Clothing (personal protection)
   - Sprays (treat your own gear)
   - Repellents (apply to skin)
   - Removal (for when tick bites occur)
   - Yard treatment (environmental control)
   - Kits (pre-assembled bundles)

2. **Section headers**
   - Clear category name
   - Brief explanation of why products matter
   - Price range expectations

3. **Quick navigation**
   - Sticky nav bar with category links
   - Anchors for each section (id="clothing", etc.)
   - Mobile-responsive menu

### Mobile Responsiveness
```css
@media (max-width: 768px) {
    .product-grid {
        grid-template-columns: 1fr;
    }
    
    .nav-menu {
        position: absolute;
        top: 100%;
        right: 0;
        display: none;
    }
    
    h1 {
        font-size: 2rem;
    }
}
```

### Performance Optimization
- Minimize CSS (no external stylesheets if possible)
- Use web-safe fonts (system fonts)
- Optimize images (use emojis instead when possible)
- Keep HTML structure clean and semantic

---

## Category Organization

### 1. Pre-Treated Clothing (Most Important)
**Key Message**: "CDC-Rated #1 Most Effective"
- Shirts
- Pants
- Socks (emphasis on WHITE color)
- Accessories (bandanas, buffs)

### 2. Permethrin Spray
**Key Message**: "Treat your existing clothes and gear"
- Pump spray (professional)
- Aerosol spray (convenient)
- Application tips

### 3. Body Repellents
**Key Message**: "Apply to exposed skin for immediate protection"
- Picaridin products
- DEET products
- Duration/effectiveness comparison

### 4. Tick Removal Tools
**Key Message**: "Proper removal is critical for preventing Lyme"
- Tick Twister
- TickCheck removers
- Multiple price points

### 5. Yard Treatment
**Key Message**: "Most tick bites happen in your own yard"
- Chemical sprays
- Natural alternatives
- Innovative solutions (Tick Tubes)

### 6. Starter Kits
**Key Message**: "Complete protection bundles"
- Budget Kit
- Complete Protection Kit
- Homeowner/Yard Kit

---

## Verification Checklist

### Before Publishing
- [ ] All affiliate links include `tag=hudsonvalleyt-20`
- [ ] All ASINs verified as correct (match product title)
- [ ] No duplicate product listings
- [ ] All links tested and working (no 404s)
- [ ] Descriptions are accurate and benefit-focused
- [ ] Pricing is current (within $5 variance is OK)
- [ ] Star ratings and review counts are visible
- [ ] Badges are appropriate and not excessive
- [ ] Mobile responsiveness tested
- [ ] Navigation works on all sections

### Link Testing Template
```
Product: [NAME]
ASIN: [ASIN]
Expected: [PRODUCT DESCRIPTION]
URL: https://www.amazon.com/[PRODUCT]/dp/[ASIN]?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
Test Result: ✓ PASS / ✗ FAIL
Notes: [Any issues found]
```

### Content Quality Checklist
- [ ] Category introduction written clearly
- [ ] Product names match exactly with Amazon
- [ ] Descriptions emphasize tick prevention benefit
- [ ] Price ranges are reasonable
- [ ] Ratings appear accurate (4+ stars recommended)
- [ ] Call-to-action buttons are clear
- [ ] Affiliate disclosure is prominent
- [ ] Footer contains proper credit/disclosure

---

## Common Pitfalls to Avoid

### ❌ Mistakes
1. **Missing affiliate tag** - No commission earned
2. **Wrong ASIN** - Links to wrong product
3. **Broken links** - Product no longer available
4. **Vague descriptions** - Doesn't explain tick prevention benefit
5. **Too many products** - Overwhelms user
6. **Poor organization** - Hard to find relevant items
7. **No mobile optimization** - Bad experience on phones
8. **Outdated pricing** - Users see different price on Amazon
9. **Duplicate listings** - Same product in multiple categories
10. **Misleading badges** - Too many badges reduces credibility

### ✓ Best Practices
1. **Always include affiliate tag**
2. **Verify ASIN accuracy**
3. **Test links regularly**
4. **Write benefit-focused descriptions**
5. **Organize logically by category**
6. **Mobile-first design**
7. **Update prices quarterly**
8. **Limit to one product per brand variation**
9. **Use badges sparingly (2-3 per product max)**
10. **Transparent affiliate disclosure**

---

## Quick Reference: Key ASINs

```
CLOTHING:
- Insect Shield Men's UPF Shirt: B0755CG8H1
- Insect Shield Ripstop Pants: B0C36HGF4C
- Insect Shield Midweight Socks: B09T2KCBZ3
- Insect Shield Bandana: B0B8B54YHB

SPRAY:
- Sawyer Permethrin Pump: B001ANQVYU
- Sawyer Permethrin Aerosol: B0F29L8XXJ

REPELLENTS:
- Sawyer Picaridin 2-Pack: B0D5QRXBS4

REMOVAL:
- Tick Twister 2-Pack: B01BECRHEO
- TickCheck Value 3-Pack: B07D6J52JJ
- TickCheck Premium: B075DKL3Z6

YARD:
- Cutter Backyard Bug Control: B00ARKSABO
- Thermacell Tick Tubes: B098MV9T8L
- Wondercide Natural Spray: B01FWRX2NM
```

---

## Support & Updates

**Last Updated**: October 2025
**Affiliate ID**: hudsonvalleyt-20
**Contact**: HudsonValleyTicks.com

For updates to product listings, ASINs, or best practices, refer to Amazon Associates dashboard and CDC tick prevention guidelines.

---

## Appendix: Full Affiliate Link Template

Use this template for any new product:

```
https://www.amazon.com/[PRODUCT-NAME]/dp/[ASIN]?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

**Replacement Instructions**:
1. Replace `[PRODUCT-NAME]` with URL-encoded product name (spaces = hyphens)
2. Replace `[ASIN]` with 10-character Amazon Standard Identification Number
3. Keep all other parameters exactly as shown
4. Test link works and shows correct product

**Example Construction**:
```
Base: https://www.amazon.com/dp/B0755CG8H1
Add product name: https://www.amazon.com/Insect-Shield-Dri-Balance-Repellent-Clothing/dp/B0755CG8H1
Add parameters: https://www.amazon.com/Insect-Shield-Dri-Balance-Repellent-Clothing/dp/B0755CG8H1?linkCode=ll1&tag=hudsonvalleyt-20&linkId=&language=en_US&ref_=as_li_ss_tl
```

---

**End of SKILL.md**
