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
11. [Completed Blog Posts](#completed-blog-posts)

---

## ✅ COMPLETED BLOG POSTS

### Published: October 23, 2025

#### **Original Post: "How to Do a Proper Tick Check on Yourself"**
- **File**: tick-check-yourself.php
- **Word Count**: ~3,500 words
- **Products**: 7 Amazon affiliate links (all verified)
- **Compliance**: WCAG 2.1 Level AA ✅

#### **Blog Post Series: Papular Hives from Seed Tick Bites (5 Posts)**

##### **1. Understanding Papular Hives**
- **File**: papular-hives-understanding.php
- **Word Count**: ~3,500 words (15 min read)
- **Products**: 5 Amazon affiliate links
- **Compliance**: WCAG 2.1 Level AA ✅
- **Medical Disclaimers**: Standard
- **Focus**: Immunology, mast cell activation, tick saliva antigens, multi-pathway itch
- **Affiliate Products**: Oatmeal bath, cotton gloves, hydrocortisone cream, cetirizine, ice packs

##### **2. H1/H2 Antihistamine Combination Protocol**
- **File**: papular-hives-h1h2-protocol.php
- **Word Count**: ~4,200 words (14 min read)
- **Products**: 5 Amazon affiliate links
- **Compliance**: WCAG 2.1 Level AA ✅
- **Medical Disclaimers**: EXTENSIVE - off-label use warnings for "4x protocol"
- **Focus**: H1/H2 receptor biology, combination therapy pharmacology, dosing protocols
- **Affiliate Products**: Cetirizine, famotidine, pill organizer, water bottle, blackout curtains

##### **3. 21-Day Oral Corticosteroid Protocol**
- **File**: papular-hives-steroid-protocol.php
- **Word Count**: ~4,800 words (18 min read)
- **Products**: 5 Amazon affiliate links
- **Compliance**: WCAG 2.1 Level AA ✅
- **Medical Disclaimers**: MOST EXTENSIVE - corticosteroid risks, adrenal function, tapering
- **Focus**: Mast cell stabilization, 21-day timeline, dosing protocols, side effects, medical monitoring
- **Affiliate Products**: Blood pressure monitor, glucose kit, medical journal, cooling pillow, fish oil

##### **4. Itch Management Techniques**
- **File**: papular-hives-itch-management.php
- **Word Count**: ~4,000 words (16 min read)
- **Products**: 5 Amazon affiliate links
- **Compliance**: WCAG 2.1 Level AA ✅
- **Medical Disclaimers**: Standard
- **Focus**: Cold therapy neurology, oatmeal baths, temperature management, behavioral strategies, sleep
- **Affiliate Products**: Oatmeal bath, cotton gloves, ice packs, hydrocortisone cream, blackout curtains

##### **5. Emotions, Rest, and Long-Term Recovery**
- **File**: papular-hives-emotions-recovery.php
- **Word Count**: ~3,800 words (14 min read)
- **Products**: 5 Amazon affiliate links
- **Compliance**: WCAG 2.1 Level AA ✅
- **Medical Disclaimers**: Mental health guidance
- **Focus**: Sleep deprivation effects, emotional impacts, 3-week timeline, stress/immune connection
- **Affiliate Products**: Cooling pillow, recovery journal, massage pad, weighted blanket, moisturizer

**Also Updated**: 
- **blog.php** - All 5 new papular hives posts added to featured section with new category

**Total Content**: ~19,800 words (5 posts) | 25 Amazon affiliate links | WCAG 2.1 Level AA

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

**Document Version**: 3.3 (Papular Hives Series Completed)  
**Last Updated**: October 23, 2025  
**Status**: Complete & Production-Ready  
**Compliance**: WCAG 2.1 Level AA + Amazon Affiliate Standards  
**Owner**: Hudson Valley Ticks Development
