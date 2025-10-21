#!/bin/bash

nav='    <nav>
        <div class="nav-container">
            <a href="/" class="logo">🌿 Hudson Valley Ticks</a>
            <button class="mobile-menu-toggle" onclick="document.querySelector('"'"'.nav-menu'"'"').classList.toggle('"'"'active'"'"')">☰</button>
            <ul class="nav-menu">
                <li><a href="/" class="active">Tick Bite Info</a></li>
                <li><a href="/tick-prevention-gear.html" >Tick Prevention Gear</a></li>
                <li><a href="/blog.html" >HV Tick Blog</a></li>
            </ul>
        </div>
    </nav>'

files=(
  "index.html"
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
  "tick-prevention-gear.html"
  "tick-types-hudson-valley-identification.html"
)

for file in "${files[@]}"; do
  if [ -f "$file" ]; then
    # Insert nav after <body> tag
    sed -i '' '/<body>/a\
'"$nav"'
' "$file"
    echo "✓ Updated $file"
  fi
done

echo "Done! All files updated with nav."
