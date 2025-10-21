#!/usr/bin/env python3

mobile_css = '''
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary-green);
        }
        
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }
            
            .nav-menu {
                position: absolute;
                top: 60px;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                gap: 0;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s;
            }
            
            .nav-menu.active {
                max-height: 300px;
            }
            
            .nav-menu li {
                padding: 1rem 2rem;
                border-bottom: 1px solid #eee;
            }
        }
'''

files = [
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
        
        # Add mobile CSS before closing </style>
        content = content.replace('</style>', mobile_css + '\n    </style>')
        
        with open(file, 'w') as f:
            f.write(content)
        
        print(f"✓ Updated {file}")
    except Exception as e:
        print(f"✗ Error with {file}: {e}")

print("Done!")
