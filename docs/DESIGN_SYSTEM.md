# Design System Audit

## Reference status

- The repository's current theme is Canadian HomeShield under `wp-content/themes/canadian-homeshield/`.
- Supplied references are present in `references/`, including `hero-reference.jpg` and the full-page `candian-homeshield-desktop.jpg`.
- Supplied logo, team, testimonial, and icon assets are present in `assets/images/` and `assets/icons/`.
- No approved font files, formal design-token file, copy deck, or image license records were found in the repository.

## Confirmed implementation conventions

- Theme architecture: classic PHP templates with `header.php`, `footer.php`, `front-page.php`, `index.php`, and `template-parts/`.
- Styling: Tailwind CSS 4.3.3 CLI. Source is `src/input.css`; compiled output is `dist/tailwind.css`; the compiled file is enqueued through `wp_enqueue_style()` with a file modification version.
- The reference visibly establishes a deep navy/purple, bright yellow, warm off-white, rounded card, and condensed display-typography direction.
- `src/input.css` now contains estimated reference-derived tokens: navy `#24186b`, yellow `#ffd200`, cream `#f8f7f3`, and line `#d7d5d2`. These are estimates from the supplied screenshots, not a formal brand-token source.
- No supplied font file exists, so the display face uses an `Arial Narrow`/system fallback stack and remains an approximation.

## Fidelity rules

- Preserve the mockup's composition, section order, hierarchy, proportions, imagery, and responsive behavior when the reference is supplied.
- Do not invent a logo, font, image, copy, token, or exact pixel measurement to fill a missing reference detail.
- Record uncertain measurements and resolve the largest visual differences first: structure, imagery/crop, typography, spacing, and details.

## Accessibility and SEO baseline

- Use one meaningful page H1, logical heading order, semantic landmarks, descriptive link text, visible focus, keyboard-operable controls, and adequate tap targets.
- Use WordPress title-tag support, native navigation, contextual escaping, attachment-based responsive images, and meaningful media-library alt text.
- Check contrast, focus visibility, horizontal overflow, mobile navigation, and reduced-motion behavior during visual QA. Automated checks do not establish full WCAG conformance.
