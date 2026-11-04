# Implementation Plan Audit

## Current architecture

- WordPress 7.1.4 core is present; core files were not modified.
- The custom theme is classic PHP at `wp-content/themes/canadian-homeshield/`.
- Foundation files are present: `style.css`, `functions.php`, `header.php`, `footer.php`, `index.php`, `front-page.php`, and `template-parts/hero.php`.
- Theme supports title tags, custom logo, post thumbnails, HTML5 markup, native primary navigation, and `wp_body_open()`.
- ACF Free 6.8.11 is present. Hero field definitions are versioned in `acf-json/group_canadian_homeshield_home_hero.json`; no ACF Pro-only features are used.
- Reusable section structure begins in `template-parts/`; additional sections should follow the same vertical-slice pattern.
- Tailwind CSS 4.3.3 is configured in the theme-local `package.json`. `npm run build` compiles `src/input.css` to `dist/tailwind.css`. `node_modules/` is ignored.

## Existing implementation

- Header: custom-logo fallback to site title, desktop primary navigation, mobile `<details>` navigation, skip link, and focus styles.
- Hero: fixed ACF Free fields for eyebrow, title, description, CTA label/URL, and image; safe fallbacks when ACF or content is unavailable; responsive two-column-to-stacked layout.
- Footer: minimal site-name footer for the scaffold.
- No additional homepage sections were implemented during this audit.

## LocalWP compatibility

- The repository path and `../.envrc` indicate a LocalWP-managed site with Local PHP 8.2.29 and MySQL 8.4.0 paths.
- Verified site URL: `http://canadian-homeshield.local`.
- Verified active stylesheet/template: `canadian-homeshield`.
- Verified active plugin: Advanced Custom Fields 6.8.11.
- Verified ACF Local JSON group: `group_canadian_homeshield_home_hero`, with fields `hero_eyebrow`, `hero_title`, `hero_description`, `hero_cta_label`, `hero_cta_url`, and `hero_image`.
- The ACF group is loaded from Local JSON; no stored `acf-field-group` post was returned, so sync/import status in wp-admin remains to be confirmed.
- Do not replace LocalWP with Docker, `wp-env`, MAMP, XAMPP, or another WordPress install.

## Verification workflow

1. Start the LocalWP site and confirm the actual site URL and database connection.
2. Activate the custom theme and sync the ACF Local JSON field group.
3. Build Tailwind with `npm run build` in the theme directory.
4. Run `npm run test:visual`; Playwright is configured for 1440px desktop and 390px mobile and currently passes both captures.
5. Compare actual rendered screenshots against the supplied reference, correct meaningful layout/imagery/typography/spacing differences, then re-run checks.
6. Verify navigation, keyboard focus, mobile menu state, horizontal overflow, image loading, and console/network failures.

## Architectural problems and blockers

- Project identity mismatch: current repository/theme is Canadian HomeShield, while the request says Trofo. Confirm the approved name and reference before renaming or adding assets.
- The supplied reference uses a branded navy/yellow palette, condensed display typography, a centered brand header, phone/CTA controls, a split hero with technician imagery and lead form, and a service icon strip. The current scaffold does not implement those elements yet.
- The hero ACF fields are empty on the current homepage, so the screenshot renders the page title `Hello world!` and an image placeholder.
- Exact color values and font family are not changed yet because no verified token/font files were supplied; the current scaffold tokens remain provisional.

## Recommended next phase

Resolve the project-name/reference mismatch, populate/sync the verified hero content, and refine only the existing header/hero against `hero-reference.jpg` at matched viewports. Do not implement Benefits until that comparison passes review.
