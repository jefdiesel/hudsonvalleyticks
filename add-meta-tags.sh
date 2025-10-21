#!/bin/bash

# List of all blog files
files=(
  "blog.html"
  "diy-permethrin-spray-treat-clothes.html"
  "early-signs-of-lyme-disease.html"
  "how-to-safely-remove-a-tick.html"
  "insect-shield-pants-permethrin-hiking.html"
  "insect-shield-white-socks-tick-prevention.html"
  "natural-yard-treatment-tick-control.html"
  "permethrin-treated-clothing-guide.html"
  "picaridin-vs-deet-bug-repellent.html"
  "protecting-your-yard-tick-control.html"
  "tick-types-hudson-valley-identification.html"
)

for file in "${files[@]}"; do
  if [ -f "$file" ]; then
    # Extract filename without extension for og:url
    filename=$(basename "$file")
    
    # Create meta tags
    meta_tags="    <!-- Robots meta tag -->
    <meta name=\"robots\" content=\"index, follow\">
    <!-- Open Graph for social sharing -->
    <meta property=\"og:title\" content=\"Hudson Valley Ticks Blog\">
    <meta property=\"og:description\" content=\"Evidence-based tick prevention guide\">
    <meta property=\"og:url\" content=\"https://hudsonvalleyticks.com/$filename\">
    <!-- Canonical tag (prevents duplicate content) -->
    <link rel=\"canonical\" href=\"https://hudsonvalleyticks.com/$filename\">"
    
    # Find the line with </head> and insert meta tags before it
    # Create temp file
    temp_file="${file}.tmp"
    
    # Insert meta tags before </head>
    sed "/<\/head>/i\\
$meta_tags
" "$file" > "$temp_file"
    
    # Replace original file
    mv "$temp_file" "$file"
    echo "✓ Updated $file"
  fi
done

echo "Done! All meta tags added."
