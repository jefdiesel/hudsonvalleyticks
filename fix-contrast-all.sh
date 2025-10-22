#!/bin/bash

################################################################################
# Fix ALL contrast issues - white text on dark green, Amazon buttons
################################################################################

set -euo pipefail

GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

TARGET_DIR="${1:-.}"
TIMESTAMP=$(date +%Y%m%d-%H%M%S)
BACKUP_DIR="${TARGET_DIR}/wcag-backup-contrast-${TIMESTAMP}"

echo -e "${BLUE}Fixing ALL contrast issues...${NC}"
echo ""

mkdir -p "$BACKUP_DIR"

HTML_FILES=(
    "index.html"
    "accessibility.html"
    "insect-shield-pants-permethrin-hiking.html"
    "insect-shield-white-socks-tick-prevention.html"
    "insectguard-complete-tick-protection-kit.html"
    "leg-gaiters-tick-prevention.html"
    "bens-30-deet-tick-repellent.html"
    "blog.html"
    "deet-wipes-portable-tick-protection.html"
    "diy-permethrin-spray-treat-clothes.html"
    "early-signs-of-lyme-disease.html"
    "how-to-safely-remove-a-tick.html"
    "natural-yard-treatment-tick-control.html"
    "permethrin-treated-clothing-guide.html"
    "picaridin-vs-deet-bug-repellent.html"
    "protecting-your-yard-tick-control.html"
    "sawyer-permethrin-24oz-bulk-treatment.html"
    "tick-prevention-gear.html"
    "tick-types-hudson-valley-identification.html"
)

for html_file in "${HTML_FILES[@]}"; do
    file_path="${TARGET_DIR}/${html_file}"
    
    if [ -f "$file_path" ]; then
        echo -ne "  $html_file ... "
        
        # Backup
        cp "$file_path" "${BACKUP_DIR}/${html_file}"
        
        # Fix hero/header white text
        sed -i '' 's/<h1>Hudson Valley Tick Bite Information<\/h1>/<h1 style="color: #ffffff;">Hudson Valley Tick Bite Information<\/h1>/g' "$file_path"
        sed -i '' 's/<p>Evidence-based/<p style="color: #ffffff;">Evidence-based/g' "$file_path"
        
        # Fix Amazon links - change color from light to dark
        sed -i '' 's/style="color: #0066cc;" www\.amazon\.com/href="https:\/\/www.amazon.com/g' "$file_path"
        sed -i '' 's|href="https://" style="color: #0066cc;" www|href="https://www|g' "$file_path"
        sed -i '' 's|href="https://" www|href="https://www|g' "$file_path"
        
        # Fix any light gray text (product ratings) to dark
        sed -i '' 's/color: #[89a-fA-F][0-9a-fA-F]\{5\}/color: #1a1a1a/g' "$file_path"
        
        # Fix strong tags to have proper contrast
        sed -i '' 's/<strong>/<strong style="color: #2c5f2d;">/g' "$file_path"
        
        echo -e "${GREEN}✓${NC}"
    fi
done

echo ""
echo -e "${GREEN}All contrast issues fixed!${NC}"
echo ""
echo "Backup: $BACKUP_DIR"
echo ""
echo "Next:"
echo "  git add ."
echo "  git commit -m 'Fix all contrast issues - white on dark green, Amazon links'"
echo "  git push"
echo ""
