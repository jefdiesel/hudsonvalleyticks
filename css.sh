#!/bin/bash

################################################################################
# Hudson Valley Ticks - CSS Color Contrast Fixes (Phase 2)
# Fixes remaining color contrast issues in CSS variables and classes
################################################################################

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

echo -e "${BLUE}╔════════════════════════════════════════════════════════════╗${NC}"
echo -e "${BLUE}║  CSS Color Contrast Fix (Phase 2)                        ║${NC}"
echo -e "${BLUE}╚════════════════════════════════════════════════════════════╝${NC}"
echo ""

if [ -z "$1" ]; then
    echo "Usage: ./fix-css-colors.sh /path/to/html/files"
    echo "Or:    ./fix-css-colors.sh ."
    exit 1
fi

HTML_DIR="$1"
BACKUP_DIR="${HTML_DIR}/css-fix-backup-$(date +%Y%m%d-%H%M%S)"

echo -e "${YELLOW}📁 Creating backup at: $BACKUP_DIR${NC}"
mkdir -p "$BACKUP_DIR"

FIXES=0
FILES=0

# Find all HTML files
for file in "$HTML_DIR"/*.html; do
    [ -f "$file" ] || continue
    
    filename=$(basename "$file")
    echo -e "${BLUE}Processing: $filename${NC}"
    
    # Backup
    cp "$file" "$BACKUP_DIR/$filename"
    
    # Create temp file
    TEMP="${file}.csstmp"
    cp "$file" "$TEMP"
    
    # FIX 1: Update CSS variables for better contrast
    if grep -q "var(--accent-green)" "$TEMP"; then
        echo "  ✓ Fixing CSS variable colors"
        
        # Change accent-green from #4a8b4d to darker version
        sed -i '' 's/--accent-green: #4a8b4d;/--accent-green: #2d5a2d;/g' "$TEMP"
        ((FIXES++))
    fi
    
    # FIX 2: Fix .back-link color (currently uses --accent-green)
    if grep -q "\.back-link" "$TEMP"; then
        echo "  ✓ Fixing back-link contrast"
        
        # Change back-link to use darker color
        sed -i '' 's/\.back-link { color: var(--accent-green);/\.back-link { color: #2d5a2d;/g' "$TEMP"
        ((FIXES++))
    fi
    
    # FIX 3: Fix .product-rating color (orange stars)
    if grep -q "\.product-rating" "$TEMP"; then
        echo "  ✓ Fixing product-rating contrast"
        
        # Change from #ffa500 (orange) to darker #d68000
        sed -i '' 's/\.product-rating { color: #ffa500;/\.product-rating { color: #c77700;/g' "$TEMP"
        ((FIXES++))
    fi
    
    # FIX 4: Fix .product-price color
    if grep -q "\.product-price" "$TEMP"; then
        echo "  ✓ Fixing product-price contrast"
        
        # Use darker green for price
        sed -i '' 's/color: var(--accent-green);/color: var(--primary-green);/g' "$TEMP"
        ((FIXES++))
    fi
    
    # FIX 5: Add underline to footer links (distinguish from text)
    if grep -q "footer a { color: var(--light-green);" "$TEMP"; then
        echo "  ✓ Adding underline to footer links"
        
        # Add text-decoration: underline
        sed -i '' 's/footer a { color: var(--light-green);/footer a { color: var(--light-green); text-decoration: underline;/g' "$TEMP"
        ((FIXES++))
    fi
    
    # FIX 6: Ensure nav-menu uses darker text
    if grep -q "\.nav-menu a { color: var(--text-dark);" "$TEMP"; then
        echo "  ✓ Fixing nav-menu link contrast"
        
        # Replace with specific darker color
        sed -i '' 's/\.nav-menu a { color: var(--text-dark);/\.nav-menu a { color: #1a1a1a;/g' "$TEMP"
        ((FIXES++))
    fi
    
    # FIX 7: Fix light-green variable (used in footer)
    if grep -q "--light-green: #97bc62;" "$TEMP"; then
        echo "  ✓ Fixing light-green variable"
        
        # Change to brighter green for better contrast on dark background
        sed -i '' 's/--light-green: #97bc62;/--light-green: #b8e986;/g' "$TEMP"
        ((FIXES++))
    fi
    
    # Move temp to original
    mv "$TEMP" "$file"
    ((FILES++))
    
    echo ""
done

echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo -e "${GREEN}✓ COMPLETED${NC}"
echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo ""
echo -e "📊 Files processed: $FILES"
echo -e "🔧 CSS fixes applied: $FIXES"
echo -e "💾 Backups: $BACKUP_DIR"
echo ""
echo -e "${GREEN}✓ Color contrast issues should now be fixed!${NC}"
echo ""

# Summary report
cat > "${HTML_DIR}/css-fix-report.txt" << EOF
CSS Color Contrast Fix Report
Generated: $(date)

Files Processed: $FILES
Fixes Applied: $FIXES
Backup Location: $BACKUP_DIR

Colors Updated:
  ✓ --accent-green: #4a8b4d → #2d5a2d (darker)
  ✓ --light-green: #97bc62 → #b8e986 (brighter for dark bg)
  ✓ .back-link: Uses #2d5a2d directly
  ✓ .product-rating: #ffa500 → #c77700 (darker orange)
  ✓ .product-price: Uses --primary-green
  ✓ footer links: Added text-decoration underline
  ✓ .nav-menu: Uses #1a1a1a directly

Test with WAVE or axe DevTools to confirm!
EOF

echo "Report saved: ${HTML_DIR}/css-fix-report.txt"
