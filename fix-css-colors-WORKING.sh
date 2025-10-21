#!/bin/bash

################################################################################
# Hudson Valley Ticks - CSS Color Contrast Fixes (Phase 2 - WORKING VERSION)
# Fixes remaining color contrast issues in CSS variables and classes
################################################################################

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
BLUE='\033[0;34m'
NC='\033[0m'

echo -e "${BLUE}╔════════════════════════════════════════════════════════════╗${NC}"
echo -e "${BLUE}║  CSS Color Contrast Fix (Phase 2)                        ║${NC}"
echo -e "${BLUE}╚════════════════════════════════════════════════════════════╝${NC}"
echo ""

# Check parameters
if [ -z "$1" ]; then
    echo -e "${RED}❌ Usage: bash fix-css-colors-WORKING.sh /path/to/html/files${NC}"
    echo "   Or:    bash fix-css-colors-WORKING.sh ."
    exit 1
fi

HTML_DIR="$1"

# Verify directory exists
if [ ! -d "$HTML_DIR" ]; then
    echo -e "${RED}❌ Error: Directory does not exist: $HTML_DIR${NC}"
    exit 1
fi

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
    
    # Backup original
    cp "$file" "$BACKUP_DIR/$filename"
    
    # FIX 1: Update CSS variables for better contrast - accent-green darker
    if grep -q "accent-green" "$file"; then
        sed -i.bak 's/#4a8b4d/#2d5a2d/g' "$file"
        echo "  ✓ Fixed accent-green (#4a8b4d → #2d5a2d)"
        ((FIXES++))
    fi
    
    # FIX 2: Brighten light-green for better contrast on dark backgrounds
    if grep -q "light-green" "$file"; then
        sed -i.bak 's/#97bc62/#b8e986/g' "$file"
        echo "  ✓ Fixed light-green (#97bc62 → #b8e986)"
        ((FIXES++))
    fi
    
    # FIX 3: Darken product rating orange
    if grep -q "product-rating" "$file"; then
        sed -i.bak 's/#ffa500/#c77700/g' "$file"
        echo "  ✓ Fixed product-rating (#ffa500 → #c77700)"
        ((FIXES++))
    fi
    
    # FIX 4: Make nav links darker
    if grep -q "nav-menu" "$file"; then
        sed -i.bak 's/var(--text-dark)/#1a1a1a/g' "$file"
        echo "  ✓ Fixed nav-menu links to #1a1a1a"
        ((FIXES++))
    fi
    
    # FIX 5: Ensure footer links have underline
    if grep -q "footer a" "$file"; then
        # Add text-decoration if not present
        if ! grep -q "footer a.*text-decoration" "$file"; then
            sed -i.bak 's/footer a {/footer a { text-decoration: underline;/g' "$file"
            echo "  ✓ Added underline to footer links"
            ((FIXES++))
        fi
    fi
    
    # FIX 6: Ensure back-link is dark enough
    if grep -q "back-link" "$file"; then
        sed -i.bak 's/color: var(--accent-green)/color: #2d5a2d/g' "$file"
        echo "  ✓ Fixed back-link color to #2d5a2d"
        ((FIXES++))
    fi
    
    # Clean up sed backup files
    rm -f "${file}.bak"
    
    ((FILES++))
    echo ""
done

echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo -e "${GREEN}✓ COMPLETED${NC}"
echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo ""
echo -e "📊 Files processed: $FILES"
echo -e "🔧 CSS fixes applied: $FIXES"
echo -e "💾 Backups saved to: $BACKUP_DIR"
echo ""
echo -e "${GREEN}✓ All color contrast issues should now be fixed!${NC}"
echo ""

# Create summary report
cat > "${HTML_DIR}/css-fix-report-$(date +%Y%m%d-%H%M%S).txt" << EOF
CSS Color Contrast Fix Report
Generated: $(date)

========================================
SUMMARY
========================================
Files Processed: $FILES
Fixes Applied: $FIXES
Backup Location: $BACKUP_DIR

========================================
COLOR CHANGES
========================================
✓ --accent-green: #4a8b4d → #2d5a2d (darker green)
✓ --light-green: #97bc62 → #b8e986 (brighter for contrast)
✓ .product-rating: #ffa500 → #c77700 (darker orange)
✓ .back-link: Now uses #2d5a2d (dark green)
✓ .nav-menu: Now uses #1a1a1a (near black)
✓ footer a: Added text-decoration: underline

========================================
NEXT STEPS
========================================
1. Review pages in browser to verify changes
2. Run WAVE accessibility checker at wave.webaim.org
3. Run axe DevTools browser extension
4. Test with screen reader (NVDA/JAWS)
5. If issues remain, check backup files in: $BACKUP_DIR

========================================
WCAG COMPLIANCE
========================================
These changes address:
- WCAG AA 4.5:1 contrast ratio for normal text (success criterion 1.4.3)
- WCAG AA 3:1 contrast ratio for large text and UI components
- Distinguish links not just by color (success criterion 1.4.1)

========================================
TO REVERT CHANGES
========================================
If needed, restore from backup:
  cp $BACKUP_DIR/*.html ./

EOF

echo "Report saved to: ${HTML_DIR}/css-fix-report-$(date +%Y%m%d-%H%M%S).txt"
