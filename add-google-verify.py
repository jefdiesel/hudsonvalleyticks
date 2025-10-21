#!/usr/bin/env python3

verify_meta = '<meta name="google-site-verification" content="EdTiTb32BQdG10T38Ag4P7LuN-MymFb4k1G71GaUad0" />'

files = [
  "index.html",
  "blog.html",
  "diy-permethrin-spray-treat-clothes.html",
  "early-signs-of-lyme-disease.html",
  "how-to-safely-remove-a-tick.html",
  "insect-shield-pants-permethrin-hiking.html",
  "insect-shield-white-socks-tick-prevention.html",
  "natural-yard-treatment-tick-control.html",
  "permethrin-treated-clothing-guide.html",
  "picaridin-vs-deet-bug-repellent.html",
  "protecting-your-yard-tick-control.html",
  "tick-prevention-gear.html",
  "tick-types-hudson-valley-identification.html"
]

for file in files:
    try:
        with open(file, 'r') as f:
            content = f.read()
        
        # Add verify meta before </head>
        content = content.replace('</head>', verify_meta + '\n    </head>')
        
        with open(file, 'w') as f:
            f.write(content)
        
        print(f"✓ Updated {file}")
    except Exception as e:
        print(f"✗ Error with {file}: {e}")

print("Done!")
