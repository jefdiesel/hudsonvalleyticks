#!/usr/bin/env python3
"""Add accessibility link to all HTML files"""

import re
from pathlib import Path

current_dir = Path('.')
html_files = sorted(current_dir.glob('*.html'))

skip_files = {'accessibility.html', 'test.html'}

print("🔗 Adding Accessibility Links to All Footers")
print("=" * 60)

updated = 0

for html_file in html_files:
    if html_file.name in skip_files:
        continue
    
    try:
        with open(html_file, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Skip if already has accessibility link
        if '/accessibility.html' in content:
            print(f"⏭️  {html_file.name} (already has link)")
            continue
        
        # Replace Amazon Affiliate line with accessibility + Amazon line
        original_content = content
        
        # Pattern 1: "Amazon Affiliate: hudsonvalleyt-20 | Purchases support..."
        content = re.sub(
            r'Amazon Affiliate: hudsonvalleyt-20 \| Purchases support this site at no extra cost to you',
            '<a href="/accessibility.html">Accessibility</a> | Amazon Affiliate: hudsonvalleyt-20 | Purchases support this site at no extra cost to you',
            content
        )
        
        # Pattern 2: Just "Amazon Affiliate: hudsonvalleyt-20"
        if content == original_content:
            content = re.sub(
                r'Amazon Affiliate: hudsonvalleyt-20',
                '<a href="/accessibility.html">Accessibility</a> | Amazon Affiliate: hudsonvalleyt-20',
                content
            )
        
        # Only write if something changed
        if content != original_content:
            with open(html_file, 'w', encoding='utf-8') as f:
                f.write(content)
            print(f"✅ {html_file.name}")
            updated += 1
        else:
            print(f"⏭️  {html_file.name} (no Amazon line found)")
    
    except Exception as e:
        print(f"❌ {html_file.name}: {e}")

print("=" * 60)
print(f"✅ Updated {updated} files")
