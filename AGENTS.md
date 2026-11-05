# Canadian HomeShield Theme Rules

This repository contains only the Canadian HomeShield custom WordPress theme. These instructions apply to the entire repository.

- Keep this a classic PHP WordPress theme.
- Use ACF Free only; do not use repeaters, Flexible Content, Options Pages, ACF Blocks, Elementor, or another page builder.
- Use native WordPress menus, custom logo, media, and template APIs.
- Use Tailwind CSS v4 through the theme-local npm scripts; do not commit `node_modules/`.
- Implement and verify one section at a time. Preserve completed sections.
- Use the approved mockup and assets as the source of truth. Do not invent missing design specifications, copy, fonts, imagery, or tokens.
- Test the actual LocalWP-rendered page with Playwright when available, including responsive layout, keyboard navigation, focus states, overflow, and mobile menu behavior.
- Never modify WordPress core files.
