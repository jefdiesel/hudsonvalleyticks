#!/usr/bin/env python3
"""Add accessibility link to footer of all HTML files"""

import re
from pathlib import Path

current_dir = Path('.')
html_files = sorted(current_dir.glob('*.html'))

skip_files = {'accessibility.html', 'test.html'}

print("🔗 Adding Accessibility Links to Footers")
print("=" * 60)

updated = 0

for html_file in html_files:
    if html_file.name in skip_files:
        continue
    
    try:
        with open(html_file, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Skip if already has accessibility link
        if 'accessibility.html' in content:
            print(f"⏭️  {html_file.name}")
            continue
        
        # Find closing footer tag and add link right before it
        new_link = '\n        <p style="margin-top: 2rem;"><a href="/accessibility.html" style="color: var(--primary-green); text-decoration: none; font-weight: 600;">Accessibility Statement</a></p>'
        
        if '</footer>' in content:
            content = content.replace('</footer>', new_link + '\n    </footer>')
            
            with open(html_file, 'w', encoding='utf-8') as f:
                f.write(content)
            print(f"✅ {html_file.name}")
            updated += 1
        else:
            print(f"⏭️  {html_file.name} (no footer found)")
    
    except Exception as e:
        print(f"❌ {html_file.name}: {e}")

print("=" * 60)
print(f"✅ Updated {updated} files")
