# Design System Audit

## Reference status

- The repository's current theme is Canadian HomeShield under `wp-content/themes/canadian-homeshield/`.
- This audit request names a Trofo mockup, but no Trofo mockup or approved reference image is present in the repository. Confirm whether the existing Canadian HomeShield theme should be evaluated against that mockup before further visual work.
- Supplied references are present in `references/`, including `hero-reference.jpg` and the full-page `candian-homeshield-desktop.jpg`.
- Supplied logo, team, testimonial, and icon assets are present in `assets/images/` and `assets/icons/`.
- No approved font files, formal design-token file, copy deck, or image license records were found in the repository.

## Confirmed implementation conventions

- Theme architecture: classic PHP templates with `header.php`, `footer.php`, `front-page.php`, `index.php`, and `template-parts/`.
- Styling: Tailwind CSS 4.3.3 CLI. Source is `src/input.css`; compiled output is `dist/tailwind.css`; the compiled file is enqueued through `wp_enqueue_style()` with a file modification version.
- The reference visibly establishes a deep navy/purple, bright yellow, warm off-white, rounded card, and condensed display-typography direction. Exact color values and font family are not promoted to code tokens yet because they were not provided as verified specifications.
- The current CSS still contains provisional neutral scaffold styles. It has not been replaced during verification because doing so without measured tokens would invent design specifications.

## Fidelity rules

- Preserve the mockup's composition, section order, hierarchy, proportions, imagery, and responsive behavior when the reference is supplied.
- Do not invent a logo, font, image, copy, token, or exact pixel measurement to fill a missing reference detail.
- Record uncertain measurements and resolve the largest visual differences first: structure, imagery/crop, typography, spacing, and details.

## Accessibility and SEO baseline

- Use one meaningful page H1, logical heading order, semantic landmarks, descriptive link text, visible focus, keyboard-operable controls, and adequate tap targets.
- Use WordPress title-tag support, native navigation, contextual escaping, attachment-based responsive images, and meaningful media-library alt text.
- Check contrast, focus visibility, horizontal overflow, mobile navigation, and reduced-motion behavior during visual QA. Automated checks do not establish full WCAG conformance.
