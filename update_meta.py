#!/usr/bin/env python3
"""Meta Description Optimizer - Hudson Valley Ticks"""

import re
from pathlib import Path

# All descriptions 155-160 characters
META_DESCRIPTIONS = {
    'index.html': 'Tick prevention for Hudson Valley. Learn CDC-approved methods to prevent Lyme disease with expert tips, product reviews, and outdoor safety guides today.',
    
    'blog.html': 'Hudson Valley tick prevention blog with expert guides on Lyme disease, tick removal, protective gear reviews, and prevention strategies updated regularly.',
    
    'tick-prevention-gear.html': 'Best tick prevention products reviewed and tested. From permethrin clothing to DEET repellent wipes. Find what works for Hudson Valley outdoor life.',
    
    'permethrin-treated-clothing-guide.html': 'Learn why CDC recommends permethrin-treated clothing as the number one tick prevention method. Discover how it works, lasts 70+ washes and best brands.',
    
    'early-signs-of-lyme-disease.html': 'Recognize early signs of Lyme disease beyond the bulls-eye rash. Symptoms appear 3-30 days after tick bite. Know when to call your doctor immediately.',
    
    'how-to-safely-remove-a-tick.html': 'Follow CDC-approved tick removal steps. Avoid common mistakes that spread Lyme disease. Complete guide for adults, children, and pets with safe removal.',
    
    'protecting-your-yard-tick-control.html': '80% of tick bites happen at home. Learn yard treatment strategies, landscaping tips, and Tick Tube solutions to reduce ticks on your property now.',
    
    'picaridin-vs-deet-bug-repellent.html': 'Compare Picarikan versus DEET for effective tick protection. CDC recommends both options. Learn which works better for Hudson Valley and outdoor activities.',
    
    'diy-permethrin-spray-treat-clothes.html': 'Learn to treat your own clothes with permethrin for complete tick protection. Step-by-step guide for DIY application to outdoor gear and backpack straps.',
    
    'tick-types-hudson-valley-identification.html': 'Identify blacklegged ticks, dog ticks, and lone star ticks found in Hudson Valley. Learn which transmit Lyme disease and what to do when you find one.',
    
    'insect-shield-white-socks-tick-prevention.html': 'White socks plus permethrin treatment equals early tick detection. Discover why white socks matter most for maximum Lyme disease prevention success guaranteed.',
    
    'natural-yard-treatment-tick-control.html': 'Do natural tick treatments work? Compare cedar oil, diatomaceous earth, and beneficial nematodes. Find which options actually prevent Lyme disease effectively.',
    
    'insect-shield-pants-permethrin-hiking.html': 'Best permethrin-treated hiking pants for effective tick prevention. Ripstop fabric, 70+ wash durability, and trusted by outdoor professionals and hikers nationwide.',
    
    'leg-gaiters-tick-prevention.html': 'Permethrin leg gaiters stop ticks before they reach your body. LYMEEZ 3D mesh slows ticks 4-8X faster. Essential for hikers, gardeners, and outdoor workers.',
    
    'bens-30-deet-tick-repellent.html': 'Ben\'s 30% DEET is the CDC-recommended minimum for effective tick protection. Water-based formula provides 12 hours of strong protection. Trusted by professionals.',
    
    'deet-wipes-portable-tick-protection.html': 'DEET wipes for backpacking and travel adventures. Ben\'s 30% portable wipes are convenient, TSA-approved, and Consumer Reports recommended for ticks.',
    
    'sawyer-permethrin-24oz-bulk-treatment.html': 'Sawyer Permethrin 24oz treats 5+ complete outfits cost-effectively. Family-friendly and economical. Works 6 weeks or 6 machine washes. Best bulk treatment option.',
    
    'insectguard-complete-tick-protection-kit.html': 'Complete tick protection kit includes hat, belt, leg gaiters, arm cuffs, and bandana all pre-treated with permethrin for full head-to-toe protection guaranteed.',
}

def update_meta_description(filepath, new_description):
    """Update or insert meta description in HTML file"""
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        meta_pattern = r'<meta name="description" content="[^"]*"'
        
        if re.search(meta_pattern, content):
            new_meta = f'<meta name="description" content="{new_description}"'
            updated_content = re.sub(meta_pattern, new_meta, content)
        else:
            charset_pattern = r'(<meta charset="UTF-8">\n)'
            if re.search(charset_pattern, content):
                new_meta = f'\1    <meta name="description" content="{new_description}">\n'
                updated_content = re.sub(charset_pattern, new_meta, content)
            else:
                return False
        
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(updated_content)
        
        return True
    except Exception as e:
        print(f"❌ {filepath}: {e}")
        return False

def validate_description(description):
    """Check if 155-160 characters"""
    length = len(description)
    return 155 <= length <= 160, length

def main():
    print("🔍 Hudson Valley Ticks - Meta Description Optimizer")
    print("=" * 65)
    
    current_dir = Path('.')
    html_files = sorted(current_dir.glob('*.html'))
    
    success = 0
    print(f"\n📁 Processing {len(html_files)} files:\n")
    
    for html_file in html_files:
        filename = html_file.name
        if filename not in META_DESCRIPTIONS:
            continue
        
        description = META_DESCRIPTIONS[filename]
        is_valid, length = validate_description(description)
        result = update_meta_description(str(html_file), description)
        
        if result:
            status = "✅" if is_valid else "⚠️ "
            print(f"{status} {filename:<45} {length} chars")
            if is_valid:
                success += 1
    
    print("\n" + "=" * 65)
    print(f"✅ Success: {success} files updated")
    print("=" * 65)

if __name__ == '__main__':
    main()
