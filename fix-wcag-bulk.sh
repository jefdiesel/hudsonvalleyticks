#!/bin/bash

################################################################################
# Hudson Valley Ticks - Bulk WCAG Fixes (macOS Compatible - Robust Version)
# This script automatically fixes common accessibility issues across all pages
################################################################################

# DON'T exit on error - continue processing all files
# set -e  # REMOVED

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Counters
FILES_PROCESSED=0
FIXES_APPLIED=0
ERRORS=0

echo -e "${BLUE}╔════════════════════════════════════════════════════════════╗${NC}"
echo -e "${BLUE}║  Hudson Valley Ticks - WCAG Bulk Fix Script (macOS v2)   ║${NC}"
echo -e "${BLUE}╚════════════════════════════════════════════════════════════╝${NC}"
echo ""

# Check if directory argument provided
if [ -z "$1" ]; then
    echo -e "${RED}Error: Please provide the directory containing your HTML files${NC}"
    echo "Usage: ./fix-wcag-mac-v2.sh /path/to/html/files"
    echo "Or:    ./fix-wcag-mac-v2.sh .   (for current directory)"
    exit 1
fi

HTML_DIR="$1"

if [ ! -d "$HTML_DIR" ]; then
    echo -e "${RED}Error: Directory $HTML_DIR does not exist${NC}"
    exit 1
fi

# Create backup directory
BACKUP_DIR="${HTML_DIR}/wcag-backup-$(date +%Y%m%d-%H%M%S)"
echo -e "${YELLOW}📁 Creating backup at: $BACKUP_DIR${NC}"
mkdir -p "$BACKUP_DIR"

# Find all HTML files (exclude backups and temp files)
HTML_FILES=$(find "$HTML_DIR" -maxdepth 1 -name "*.html" -type f ! -name "*.backup" ! -name "*.backup.html" ! -name "*.wcagtmp" ! -name "*.tmp")

if [ -z "$HTML_FILES" ]; then
    echo -e "${RED}No HTML files found in $HTML_DIR${NC}"
    exit 1
fi

FILE_COUNT=$(echo "$HTML_FILES" | wc -l | tr -d ' ')
echo -e "${GREEN}Found $FILE_COUNT HTML files to process${NC}"
echo ""

################################################################################
# Function: Fix a single HTML file
################################################################################
fix_html_file() {
    local file="$1"
    local filename=$(basename "$file")
    local fixes_count=0
    
    echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
    echo -e "${YELLOW}Processing: $filename${NC}"
    
    # Backup original
    if ! cp "$file" "$BACKUP_DIR/$filename" 2>/dev/null; then
        echo -e "  ${RED}✗${NC} Failed to backup file"
        ((ERRORS++))
        return 1
    fi
    
    # Create temp file
    TEMP_FILE="${file}.wcagtmp.$$"
    if ! cp "$file" "$TEMP_FILE" 2>/dev/null; then
        echo -e "  ${RED}✗${NC} Failed to create temp file"
        ((ERRORS++))
        return 1
    fi
    
    # ═══════════════════════════════════════════════════════════════════
    # FIX 1: Add <main> landmark if missing
    # ═══════════════════════════════════════════════════════════════════
    if ! grep -q "<main>" "$TEMP_FILE" 2>/dev/null; then
        echo -e "  ${GREEN}✓${NC} Adding <main> landmark"
        
        # Add opening <main> tag after </header>
        if sed -i '' 's|</header>|</header>\
\
        <main>|g' "$TEMP_FILE" 2>/dev/null; then
            ((fixes_count++))
        else
            echo -e "  ${RED}✗${NC} Failed to add opening <main> tag"
        fi
        
        # Add closing </main> tag before <footer>
        if sed -i '' 's|        <footer>|        </main>\
\
        <footer>|g' "$TEMP_FILE" 2>/dev/null; then
            : # Success, no output needed
        else
            echo -e "  ${RED}✗${NC} Failed to add closing </main> tag"
        fi
    else
        echo -e "  ${BLUE}○${NC} <main> landmark already exists"
    fi
    
    # ═══════════════════════════════════════════════════════════════════
    # FIX 2: Update navigation link colors for contrast
    # ═══════════════════════════════════════════════════════════════════
    if grep -q "\.nav-menu a {" "$TEMP_FILE" 2>/dev/null; then
        if grep -q "color: #1a1a1a;" "$TEMP_FILE" 2>/dev/null; then
            echo -e "  ${GREEN}✓${NC} Fixing nav-menu link contrast"
            if sed -i '' 's|color: #1a1a1a;|color: #0d5016;|g' "$TEMP_FILE" 2>/dev/null; then
                ((fixes_count++))
            fi
        fi
    fi
    
    # ═══════════════════════════════════════════════════════════════════
    # FIX 3: Update quick-nav link colors
    # ═══════════════════════════════════════════════════════════════════
    if grep -q "\.quick-nav a {" "$TEMP_FILE" 2>/dev/null; then
        if grep -q "color: #1a3a1a;" "$TEMP_FILE" 2>/dev/null; then
            echo -e "  ${GREEN}✓${NC} Fixing quick-nav link contrast"
            if sed -i '' 's|color: #1a3a1a;|color: #0d5016;|g' "$TEMP_FILE" 2>/dev/null; then
                ((fixes_count++))
            fi
        fi
    fi
    
    # ═══════════════════════════════════════════════════════════════════
    # FIX 4: Update footer link colors
    # ═══════════════════════════════════════════════════════════════════
    if grep -q "footer a {" "$TEMP_FILE" 2>/dev/null; then
        if grep -q "color: #ffffff;" "$TEMP_FILE" 2>/dev/null; then
            echo -e "  ${GREEN}✓${NC} Fixing footer link contrast"
            if sed -i '' 's|color: #ffffff;|color: #7fd87f;|g' "$TEMP_FILE" 2>/dev/null; then
                ((fixes_count++))
            fi
        fi
        
        # Fix footer hover states
        if grep -q "color: #e0e0e0;" "$TEMP_FILE" 2>/dev/null; then
            sed -i '' 's|color: #e0e0e0;|color: #a3e9a3;|g' "$TEMP_FILE" 2>/dev/null
        fi
    fi
    
    # ═══════════════════════════════════════════════════════════════════
    # FIX 5: Convert info-box divs to sections
    # ═══════════════════════════════════════════════════════════════════
    if grep -q '<div class="info-box">' "$TEMP_FILE" 2>/dev/null; then
        echo -e "  ${GREEN}✓${NC} Converting info-box divs to sections"
        if sed -i '' 's|<div class="info-box">|<section class="info-box">|g' "$TEMP_FILE" 2>/dev/null; then
            ((fixes_count++))
        fi
    fi
    
    # ═══════════════════════════════════════════════════════════════════
    # FIX 6: Add aria-label to quick-nav if missing
    # ═══════════════════════════════════════════════════════════════════
    if grep -q '<nav class="quick-nav">' "$TEMP_FILE" 2>/dev/null || grep -q '<div class="quick-nav">' "$TEMP_FILE" 2>/dev/null; then
        if ! grep -q 'quick-nav.*aria-label' "$TEMP_FILE" 2>/dev/null; then
            echo -e "  ${GREEN}✓${NC} Adding aria-label to quick-nav"
            sed -i '' 's|<nav class="quick-nav">|<nav class="quick-nav" aria-label="Page sections">|g' "$TEMP_FILE" 2>/dev/null
            sed -i '' 's|<div class="quick-nav">|<nav class="quick-nav" aria-label="Page sections">|g' "$TEMP_FILE" 2>/dev/null
            ((fixes_count++))
        fi
    fi
    
    # ═══════════════════════════════════════════════════════════════════
    # FIX 7: Add aria-labelledby to sections with IDs
    # ═══════════════════════════════════════════════════════════════════
    if grep -q '<section.*id=' "$TEMP_FILE" 2>/dev/null; then
        if grep '<section.*id=' "$TEMP_FILE" | grep -qv 'aria-labelledby' 2>/dev/null; then
            echo -e "  ${GREEN}✓${NC} Adding aria-labelledby to sections"
            
            # Simple approach: add aria-labelledby to sections that have id but not aria-labelledby
            sed -i '' 's|<section\([^>]*\)id="\([^"]*\)"\([^>]*\)>|<section\1id="\2"\3 aria-labelledby="\2-heading">|g' "$TEMP_FILE" 2>/dev/null
            
            # Clean up if we accidentally duplicated aria-labelledby
            sed -i '' 's|aria-labelledby="[^"]*" aria-labelledby="\([^"]*\)"|aria-labelledby="\1"|g' "$TEMP_FILE" 2>/dev/null
            
            ((fixes_count++))
        fi
    fi
    
    # ═══════════════════════════════════════════════════════════════════
    # FIX 8: Add IDs to h2 headings right after sections with aria-labelledby
    # ═══════════════════════════════════════════════════════════════════
    if grep -q 'aria-labelledby=' "$TEMP_FILE" 2>/dev/null; then
        echo -e "  ${GREEN}✓${NC} Adding IDs to section headings"
        
        # For each section with aria-labelledby, add id to following h2 if missing
        perl -i -pe 'if (/aria-labelledby="([^"]+)"/) { $id=$1; $in_section=1 } elsif ($in_section && /<h2[^>]*>/ && !/<h2[^>]*id=/) { s/<h2/<h2 id="$id"/; $in_section=0 } elsif (/<\/section>/) { $in_section=0 }' "$TEMP_FILE" 2>/dev/null
        
        ((fixes_count++))
    fi
    
    # ═══════════════════════════════════════════════════════════════════
    # FIX 9: Fix kit-section h3 to h2
    # ═══════════════════════════════════════════════════════════════════
    if grep -q 'class="kit-section"' "$TEMP_FILE" 2>/dev/null; then
        echo -e "  ${GREEN}✓${NC} Fixing kit-section heading hierarchy"
        
        # Change h3 to h2 within kit-section tags
        perl -i -pe 'if (/class="kit-section"/) { $in_kit=1 } if ($in_kit && /<h3>/) { s/<h3>/<h2>/g; s|</h3>|</h2>|g } if (/<\/section>/ && $in_kit) { $in_kit=0 }' "$TEMP_FILE" 2>/dev/null
        
        ((fixes_count++))
    fi
    
    # Move temp file to original
    if mv "$TEMP_FILE" "$file" 2>/dev/null; then
        echo -e "  ${GREEN}✓${NC} Applied $fixes_count fixes to $filename"
        ((FIXES_APPLIED+=fixes_count))
        ((FILES_PROCESSED++))
    else
        echo -e "  ${RED}✗${NC} Failed to save changes to $filename"
        rm -f "$TEMP_FILE" 2>/dev/null
        ((ERRORS++))
    fi
    
    echo ""
}

################################################################################
# Process all HTML files
################################################################################
for file in $HTML_FILES; do
    fix_html_file "$file" || true  # Continue even if one file fails
done

################################################################################
# Summary
################################################################################
echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo -e "${GREEN}✓ COMPLETED${NC}"
echo -e "${BLUE}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo ""
echo -e "📊 ${GREEN}Files processed:${NC} $FILES_PROCESSED of $FILE_COUNT"
echo -e "🔧 ${GREEN}Total fixes applied:${NC} $FIXES_APPLIED"
echo -e "💾 ${YELLOW}Backups saved to:${NC} $BACKUP_DIR"

if [ $ERRORS -gt 0 ]; then
    echo -e "⚠️  ${YELLOW}Errors encountered:${NC} $ERRORS"
fi

echo ""
echo -e "${YELLOW}⚠️  MANUAL REVIEW NEEDED:${NC}"
echo "   1. Verify closing </section> tags for converted info-boxes"
echo "   2. Check that heading IDs match aria-labelledby attributes"
echo "   3. Test all pages with WAVE or axe DevTools"
echo ""
echo -e "${GREEN}✓ Testing recommended:${NC}"
echo "   diff $BACKUP_DIR/index.html index.html"
echo ""

################################################################################
# Create a summary report
################################################################################
REPORT_FILE="${HTML_DIR}/wcag-fix-report-$(date +%Y%m%d-%H%M%S).txt"
{
    echo "════════════════════════════════════════════════════════════"
    echo "  WCAG Bulk Fix Report"
    echo "  Generated: $(date)"
    echo "════════════════════════════════════════════════════════════"
    echo ""
    echo "Files Found: $FILE_COUNT"
    echo "Files Processed: $FILES_PROCESSED"
    echo "Total Fixes Applied: $FIXES_APPLIED"
    echo "Errors: $ERRORS"
    echo "Backup Location: $BACKUP_DIR"
    echo ""
    echo "Fixes Applied:"
    echo "  ✓ Added <main> landmarks"
    echo "  ✓ Fixed navigation link contrast"
    echo "  ✓ Fixed quick-nav link contrast"
    echo "  ✓ Fixed footer link contrast"
    echo "  ✓ Converted info-box divs to sections"
    echo "  ✓ Added aria-labels to quick-nav"
    echo "  ✓ Added aria-labelledby to sections"
    echo "  ✓ Added IDs to section headings"
    echo "  ✓ Fixed kit-section heading hierarchy"
    echo ""
    echo "Manual Review Required:"
    echo "  - Verify closing tags for info-box sections"
    echo "  - Confirm heading IDs match aria-labelledby"
    echo "  - Test with WAVE or axe DevTools"
    echo ""
} > "$REPORT_FILE"

echo -e "📄 ${GREEN}Report saved:${NC} $REPORT_FILE"
echo ""
