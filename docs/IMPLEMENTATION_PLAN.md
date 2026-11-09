# Implementation Plan Audit

## Current architecture

- WordPress 7.1.4 core is present; core files were not modified.
- The custom theme is classic PHP at `wp-content/themes/canadian-homeshield/`.
- Foundation files are present: `style.css`, lightweight `functions.php`, `header.php`, `footer.php`, `index.php`, `front-page.php`, modular `inc/`, and `template-parts/sections/`.
- Theme supports title tags, custom logo, post thumbnails, HTML5 markup, native primary navigation, and `wp_body_open()`.
- ACF Free 6.8.11 is present. Hero field definitions are versioned in `acf-json/group_canadian_homeshield_home_hero.json`; no ACF Pro-only features are used.
- Reusable section structure uses `template-parts/sections/`; reusable presentation components belong in `template-parts/components/`.
- Tailwind CSS 4.3.3 is configured in the theme-local `package.json`. `npm run build` compiles `src/input.css` to `dist/tailwind.css`. `node_modules/` is ignored.

## Existing implementation

- Header: custom-logo fallback to site title, desktop primary navigation, mobile `<details>` navigation, skip link, and focus styles.
- Hero: fixed ACF Free fields for title, emphasis word, rating, form labels, CTA, and optional image; safe fallbacks when ACF or content is unavailable; responsive two-column-to-stacked layout in `template-parts/sections/hero.php`.
- Header + Hero now use supplied logo/icon/image assets, estimated reference-derived tokens, and the visible estimate-form composition. About now follows in the same fluid container with fixed ACF Free fields.
- Footer: minimal site-name footer for the scaffold.
- PHP architecture: `inc/setup.php`, `inc/enqueue.php`, `inc/navigation.php`, and `inc/acf-helpers.php` load through `functions.php`.
- About: responsive image-and-value-list section implemented in `template-parts/about.php`; supplied image remains an approved-asset approximation because exact reference photography was not supplied.
- Services: responsive navy service-card carousel implemented in `template-parts/sections/services.php` using supplied service icons; the reference refrigerator photo is not available as a standalone approved asset.
- Service Areas: responsive map-and-neighborhood section implemented in `template-parts/sections/service-areas.php` with a clean lazy-loaded Google Maps embed and fixed ACF Free fields.
- Testimonials: responsive three-card review carousel implemented in `template-parts/sections/testimonials.php` with supplied avatars, smooth arrow navigation, disabled edge states, and progress feedback.
- Team: responsive four-image team carousel implemented in `template-parts/sections/team.php` with supplied team imagery and smooth arrow controls.

## LocalWP compatibility

- The repository path and `../.envrc` indicate a LocalWP-managed site with Local PHP 8.2.29 and MySQL 8.4.0 paths.
- Verified site URL: `http://canadian-homeshield.local`.
- Verified active stylesheet/template: `canadian-homeshield`.
- Verified active plugin: Advanced Custom Fields 6.8.11.
- Verified ACF Local JSON groups: `group_canadian_homeshield_home_hero`, `group_canadian_homeshield_home_about`, `group_canadian_homeshield_home_services`, `group_canadian_homeshield_home_service_areas`, `group_canadian_homeshield_home_testimonials`, and `group_canadian_homeshield_home_team`, with fixed header, hero, form, about, services, service area, testimonial, and team fields.
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

- The supplied reference uses a branded navy/yellow palette, condensed display typography, a centered brand header, phone/CTA controls, a split hero with technician imagery and lead form, an about section with an image and expandable value list, a navy services carousel, a map-based service area section, customer testimonial cards, and a four-image team section. Header, Hero, About, Services, Service Areas, Testimonials, and Team are implemented.
- The right-side reference image is not supplied as a standalone asset; `team_04.png` is used as the closest supplied HVAC image fallback and remains a documented visual approximation.
- The supplied reference's exact display font is not available as a file; the system fallback stack is an approximation.
- The estimate form is presentational in this phase and is not connected to lead processing.

## Recommended next phase

Populate/sync approved content in the ACF groups and review remaining image/font approximations against supplied references. Next section: Partners.
