# Canadian HomeShield — WordPress Theme Rules

## Goal
Build the approved Canadian HomeShield roofing design as a maintainable, editable WordPress theme. Preserve existing project decisions and implement one verified section at a time.

## Project identity
- The current repository and theme directory are named Canadian HomeShield.
- The current request refers to a Trofo mockup. Treat that as an unresolved project-identity/reference mismatch; do not rename the theme or replace assets until the approved project name and mockup are confirmed.

## Verified stack
- WordPress core files are present; detected version: 7.1.4.
- Environment: macOS + LocalWP; verified site URL is `http://canadian-homeshield.local`.
- Theme type: classic PHP in `wp-content/themes/canadian-homeshield/`.
- Editor/content approach: ACF Free 6.8.11 for fixed structured fields; native WordPress menus, logo, and media APIs.
- Styling: Tailwind CSS 4.3.3 CLI with the theme-local npm workflow.
- Browser QA: Playwright with Chromium is configured in the theme and desktop/mobile captures pass.

## Invariants
- Never modify WordPress core, commit secrets, or add unrequested plugins/frameworks.
- Preserve existing user changes, including the currently deleted Twenty Twenty-Four files.
- Use supplied assets and content; document missing or uncertain design inputs.
- Use the supplied mockup as the visual source of truth once it is present; do not invent missing design specifications.
- Use WordPress APIs, contextual escaping, semantic HTML, keyboard-operable interactions, and visible focus states.
- Preserve SEO fundamentals: title-tag support, semantic heading order, descriptive link text, meaningful image alt text, and crawlable native WordPress markup.
- Work on one vertical section at a time, test the real WordPress rendering, and report unverified checks honestly.

## Required workflow
- Keep the theme classic PHP with ACF Free only, Tailwind CSS v4, native WordPress menus/media, and reusable PHP template parts.
- Do not use ACF Pro features, Elementor, another page builder, Docker, `wp-env`, or a second WordPress installation.
- For visual QA, compare actual LocalWP-rendered screenshots with the supplied reference using Playwright when available. Test desktop and mobile widths, overflow, keyboard navigation, focus, and menu interaction.

## Working agreement
- Audit once; extend this file only when requirements or architecture change.
- Confirm the active theme, LocalWP URL, design references, and approved assets before visual implementation.
- Keep theme presentation separate from portable site functionality.
