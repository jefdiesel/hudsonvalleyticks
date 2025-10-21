#!/bin/bash

# Hudson Valley Ticks - Footer Update Script
# Updates footer text and adds underline to Accessibility link

echo "╔════════════════════════════════════════════════════════════╗"
echo "║  Hudson Valley Ticks - Footer Updater                     ║"
echo "╚════════════════════════════════════════════════════════════╝"
echo ""

# Count HTML files
HTML_COUNT=$(find . -maxdepth 1 -name "*.html" -type f | wc -l)
echo "Found $HTML_COUNT HTML files"
echo ""

# Create backup directory
BACKUP_DIR="footer-backup-$(date +%Y%m%d-%H%M%S)"
mkdir -p "$BACKUP_DIR"
echo "📁 Creating backup at: $BACKUP_DIR"
echo ""

# Process each HTML file
UPDATED=0
for file in *.html; do
    if [ -f "$file" ]; then
        # Skip test files
        if [[ "$file" == "test.html" ]]; then
            continue
        fi
        
        # Create backup
        cp "$file" "$BACKUP_DIR/$file"
        
        # Check if file has footer section with old format
        if grep -q "Accessibility | Amazon Affiliate" "$file"; then
            # Replace the old footer pattern with new one
            # Old: <p><a href="/accessibility.html">Accessibility</a> | Amazon Affiliate: hudsonvalleyt-20</p>
            # New: <p>Amazon Affiliate: hudsonvalleyt-20 | Purchases support this site at no extra cost to you</p>
            #      <p><a href="/accessibility.html" style="text-decoration: underline;">Accessibility</a></p>
            
            perl -i -0pe 's|<p><a href="/accessibility\.html">Accessibility</a> \| Amazon Affiliate: hudsonvalleyt-20 \| Purchases support this site at no extra cost to you</p>|<p>Amazon Affiliate: hudsonvalleyt-20 \| Purchases support this site at no extra cost to you</p>\n        <p><a href="/accessibility.html" style="text-decoration: underline;">Accessibility</a></p>|g' "$file"
            
            echo "✓ Updated: $file"
            ((UPDATED++))
        else
            echo "ℹ No changes needed: $file"
        fi
    fi
done

echo ""
echo "══════════════════════════════════════════════════════════════"
echo "Completed!"
echo "Updated $UPDATED files"
echo ""
echo "Backups saved to: $BACKUP_DIR"
echo "To revert: cp $BACKUP_DIR/*.html ."
