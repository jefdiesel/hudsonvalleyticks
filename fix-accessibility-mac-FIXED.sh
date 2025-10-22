#!/bin/bash

################################################################################
# Hudson Valley Ticks - WCAG Accessibility Fixer (macOS - FIXED VERSION)
# NOW: Backs up ORIGINALS, then modifies files in place (not backups)
################################################################################

set -euo pipefail

RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

TARGET_DIR="${1:-.}"
TIMESTAMP=$(date +%Y%m%d-%H%M%S)
BACKUP_DIR="${TARGET_DIR}/wcag-backup-${TIMESTAMP}"

echo -e "${BLUE}╔════════════════════════════════════════════════════════════════╗${NC}"
echo -e "${BLUE}║  Hudson Valley Ticks - WCAG Fixer FIXED (macOS)               ║${NC}"
echo -e "${BLUE}║  Now actually modifying files, not backups                    ║${NC}"
echo -e "${BLUE}╚════════════════════════════════════════════════════════════════╝${NC}"
echo ""

mkdir -p "$BACKUP_DIR"
mkdir -p "${TARGET_DIR}/css"

echo -e "${GREEN}✓${NC} Created backup directory: $BACKUP_DIR"

# Create CSS file
cat > "${TARGET_DIR}/css/accessibility-fixes.css" << 'EOFCSS'
/******************************************************************************
 * WCAG ACCESSIBILITY FIXES
 ******************************************************************************/

.product-rating {
    color: #1a1a1a !important;
    font-weight: 600;
}

.badge.bestseller {
    background-color: #ff6b35 !important;
    color: #ffffff !important;
    font-weight: 700;
}

a {
    text-decoration: underline;
    text-decoration-thickness: 2px;
    text-underline-offset: 3px;
    font-weight: 500;
    color: #0066cc;
}

a:visited { color: #6600cc; }
a:hover { color: #004499; }
a[target="_blank"] { color: #0066cc !important; }

*:focus {
    outline: 3px solid #ffb81c !important;
    outline-offset: 2px !important;
}

main, header, footer, nav, section, article, aside {
    display: block;
}

.skip-link {
    position: absolute;
    top: -9999px;
    left: -9999px;
    z-index: 999;
    padding: 1em;
    background-color: #000;
    color: #fff;
}

.skip-link:focus {
    top: 0;
    left: 0;
}

label { font-weight: 600; display: block; margin-bottom: 0.5em; }
input, textarea, select { min-height: 44px; padding: 8px 12px; font-size: 16px; }
button, .btn { min-height: 44px; padding: 10px 16px; font-size: 16px; font-weight: 600; cursor: pointer; }

body { color: #1a1a1a; background-color: #ffffff; }
h1, h2, h3, h4, h5, h6 { color: #1a1a1a; font-weight: 700; }
EOFCSS

echo -e "${GREEN}✓${NC} Created CSS file"

HTML_FILES=(
    "accessibility.html"
    "index.html"
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

echo ""
echo -e "${BLUE}Processing HTML files...${NC}"

FIXED_COUNT=0

for html_file in "${HTML_FILES[@]}"; do
    file_path="${TARGET_DIR}/${html_file}"
    
    if [ -f "$file_path" ]; then
        echo -ne "  $html_file ... "
        
        # STEP 1: Backup ORIGINAL (before any changes)
        cp "$file_path" "${BACKUP_DIR}/${html_file}"
        
        # STEP 2: Modify file IN PLACE (not the backup)
        
        # Add CSS link
        if ! grep -q "accessibility-fixes.css" "$file_path"; then
            sed -E -i '' 's|</head>|  <link rel="stylesheet" href="css/accessibility-fixes.css">\n</head>|' "$file_path"
        fi
        
        # Add skip link
        if ! grep -q "skip-link" "$file_path"; then
            sed -E -i '' 's|<body>|<body>\n    <a href="#main-content" class="skip-link">Skip to main content</a>|' "$file_path"
        fi
        
        # Wrap in main landmark
        if grep -q "<section" "$file_path" && ! grep -q "<main id=" "$file_path"; then
            sed -E -i '' 's|(<body[^>]*>)|&\n    <main id="main-content">|' "$file_path"
            sed -E -i '' 's|(</body>)|\n    </main>\n\1|' "$file_path"
        fi
        
        # Remove hamburger
        sed -E -i '' 's|[☰≡]||g' "$file_path"
        
        # Fix colors
        sed -i '' 's/color: #[89a-fA-F][0-9a-fA-F]\{5\}/color: #1a1a1a/g' "$file_path"
        sed -i '' 's/<span class="badge bestseller">/<span class="badge bestseller" style="background-color: #ff6b35; color: #ffffff; font-weight: 700;">/g' "$file_path"
        
        echo -e "${GREEN}✓${NC}"
        FIXED_COUNT=$((FIXED_COUNT + 1))
    fi
done

echo ""
echo -e "${GREEN}✓${NC} Modified $FIXED_COUNT files"
echo ""
echo -e "${GREEN}╔════════════════════════════════════════════════════════════════╗${NC}"
echo -e "${GREEN}║                    FIXES APPLIED!                            ║${NC}"
echo -e "${GREEN}╚════════════════════════════════════════════════════════════════╝${NC}"
echo ""
echo "Originals backed up to: $BACKUP_DIR"
echo "Files modified: $FIXED_COUNT"
echo ""
echo "Next steps:"
echo "  git add ."
echo "  git commit -m 'Apply accessibility fixes'"
echo "  git push"
echo ""

exit 0
