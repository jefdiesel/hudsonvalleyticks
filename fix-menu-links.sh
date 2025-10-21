#!/bin/bash

# Hudson Valley Ticks - Navigation Menu Standardizer
# Updates all HTML files to use consistent navigation menu items
# Menu: Tick Bite Info | Tick Prevention Gear | HV Tick Blog

DOMAIN_PATH="${1:-.}"
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m'

echo -e "${YELLOW}Hudson Valley Ticks - Navigation Menu Standardizer${NC}"
echo "=================================================="
echo "Domain path: $DOMAIN_PATH"
echo ""

if [ ! -d "$DOMAIN_PATH" ]; then
    echo -e "${RED}Error: Domain path not found: $DOMAIN_PATH${NC}"
    exit 1
fi

FILE_COUNT=$(find "$DOMAIN_PATH" -name "*.html" -type f | wc -l)
echo "Found $FILE_COUNT HTML files"
echo ""

UPDATED_COUNT=0

for file in $(find "$DOMAIN_PATH" -name "*.html" -type f); do
    echo "Processing: $file"
    
    # Create backup
    cp "$file" "$file.backup"
    
    # Use a temp file for the replacement
    temp_file=$(mktemp)
    
    # Read file and process with awk
    awk '
    BEGIN { in_nav = 0; skip_until_end_nav = 0 }
    /<nav[^>]*>/ {
        if (!skip_until_end_nav) {
            skip_until_end_nav = 1
            in_nav = 1
        }
    }
    skip_until_end_nav && /<\/nav>/ {
        if (in_nav) {
            print "    <nav aria-label=\"Main navigation\">"
            print "        <div class=\"nav-container\">"
            print "            <a href=\"/\" class=\"logo\">🌿 Hudson Valley Ticks</a>"
            print "            <button class=\"mobile-menu-toggle\" "
            print "                    aria-label=\"Toggle navigation menu\" "
            print "                    aria-expanded=\"false\" "
            print "                    aria-controls=\"nav-menu\" "
            print "                    onclick=\"toggleMenu()\">☰</button>"
            print "            <ul class=\"nav-menu\" id=\"nav-menu\">"
            print "                <li><a href=\"/\">Tick Bite Info</a></li>"
            print "                <li><a href=\"/tick-prevention-gear.html\">Tick Prevention Gear</a></li>"
            print "                <li><a href=\"/blog.html\">HV Tick Blog</a></li>"
            print "            </ul>"
            print "        </div>"
            print "    </nav>"
            skip_until_end_nav = 0
            in_nav = 0
            next
        }
    }
    skip_until_end_nav { next }
    { print }
    ' "$file" > "$temp_file"
    
    # Replace original with processed version
    mv "$temp_file" "$file"
    
    # Check if file was modified
    if ! cmp -s "$file" "$file.backup"; then
        echo -e "${GREEN}✓ Updated${NC}"
        UPDATED_COUNT=$((UPDATED_COUNT + 1))
    else
        echo -e "${YELLOW}ℹ No changes${NC}"
        rm "$file.backup"
    fi
done

echo ""
echo "=================================================="
echo -e "${GREEN}Completed!${NC}"
echo "Updated $UPDATED_COUNT files"
echo ""
echo "Menu standardized to:"
echo "  • Tick Bite Info (/)"
echo "  • Tick Prevention Gear (/tick-prevention-gear.html)"
echo "  • HV Tick Blog (/blog.html)"
echo ""
echo "Backups: *.html.backup files"
echo "To revert: cp filename.html.backup filename.html"
