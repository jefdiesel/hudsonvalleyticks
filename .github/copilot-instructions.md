# Copilot instructions for HudsonValleyTicks

This repository is a small, static, accessibility-first website (plain HTML + CSS and a couple of helper scripts). The guidance below highlights the project's conventions, developer workflows, and patterns an AI assistant should follow when editing or adding files.

- Project type: single-site static HTML published at https://hudsonvalleyticks.com (no build system like webpack/Node). Edit files directly under project root.

- Key files and folders:
  - `index.html`, `*.html` — canonical page files. Use these as the authoritative source for content and page structure.
  - `TEMPLATE-hudsonvalleyticks.html` — canonical page template and inlined accessibility-first CSS examples. When adding pages, follow this template's structure (skip-link, header nav, main id="main-content", footer, WCAG-compatible semantics).
  - `css/accessibility-fixes.css` — shared CSS used by pages. Prefer adding small, focused rules here rather than inlining new styles in many files.
  - `css.sh` — utility script that applies automated contrast fixes to HTML files; it expects a directory argument (e.g. `./css.sh .`). Use it to batch-fix or test color changes and always check the generated backup folder.
  - `generate-sitemap.py` — simple script that writes `sitemap.xml`. Update it when adding or removing pages.
  - `robots.txt`, `sitemap.xml` — must reflect site structure and be kept in sync with pages.

- Content & accessibility rules to follow (project-specific):
  - All pages must include a skip link (`<a href="#main-content" class="skip-link">Skip to main content</a>` or similar). Maintain the `id="main-content"` on the main element.
  - Keep semantic elements (header, nav, main, footer, section, article) and visible focus outlines. Do not remove WCAG-related attributes (aria-labels, roles) unless replacing them with equivalent semantics.
  - Links that open in new tabs should use `target="_blank"` and be visually distinguished by CSS already in `css/accessibility-fixes.css`.

- Editing conventions and examples:
  - Add new content pages by copying `TEMPLATE-hudsonvalleyticks.html`, updating the title/meta description, and linking from `index.html` and/or `sitemap.xml`.
  - Example: to add `new-guide.html`, copy `TEMPLATE-hudsonvalleyticks.html` → `new-guide.html`, then append a `<url>` entry in `generate-sitemap.py` or edit `sitemap.xml` and re-run the script.
  - Prefer CSS variables and `css/accessibility-fixes.css` for color changes. Use the `css.sh` script to mass-apply conservative contrast updates and verify the backup folder it creates.

- Testing and developer workflow:
  - There is no JS build step. Test changes by opening the modified HTML files locally in a browser (file://) or with a simple static server (e.g. `python3 -m http.server 8000`).
  - Run `./css.sh .` to apply contrast fixes (script will create a timestamped backup directory). Inspect `css-fix-report.txt` created by the script.
  - After adding/removing pages, run `python3 generate-sitemap.py` to regenerate `sitemap.xml`.

- Patterns and anti-patterns:
  - Pattern: small, self-contained HTML pages that duplicate only necessary markup. Use the template for consistency rather than merging multiple frameworks.
  - Anti-pattern: introducing a Node/webpack toolchain or complex build without explicit repo owner instruction. Keep changes minimal and file-based.

- Integration and external dependencies:
  - The site is static and relies on external links (Amazon affiliate tag `hudsonvalleyt-20` appears in product links). Maintain the affiliate tag when editing product links unless asked otherwise.
  - Google verification meta tag exists in `index.html` — do not remove unless instructed.

- When proposing edits, always include:
  1. The exact files changed (path + brief reason).
 2. A short testing checklist (open locally, run `css.sh`, regenerate sitemap).

If anything above is unclear or you want the instructions to be stricter (lint rules, deploy steps), tell me what to include and I will revise.
