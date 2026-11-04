# Asset Map Audit

## Theme assets

- Approved/provided raster images and brand logos are now organized under `assets/images/`.
- UI, service, contact, and social icons are now organized under `assets/icons/`.
- `assets/fonts/` is present but currently contains no supplied font files.
- The theme uses the native WordPress custom-logo and media APIs; it does not copy bundled default-theme assets into the custom theme.
- WordPress default-theme assets under `twentytwentythree/` and `twentytwentyfive/` are not approved Canadian HomeShield/Trofo design assets and must not be reused without confirmation.

## Reference assets

- Desktop/page references:
  - `references/candian-homeshield-desktop.jpg` — full-page reference, 1363 × 6197.
  - `references/hero-reference.jpg` — header, hero, and service-strip reference, 1435 × 1133.
  - `references/about-section.jpg` — about section reference, 1284 × 772.
  - `references/services-section.jpg` — services section reference, 1273 × 700.
  - `references/service-area-section.jpg` — service-area section reference, 1261 × 543.

## Image filenames

- Logos: `amazon_logo.png`, `american_home_shield_logo.png`, `ascii_logo.png`, `bassett_logo.png`, `caixa_logo.png`, `delta_logo.png`, `garrett_logo.png`.
- Team imagery: `team_01.png`, `team_02.png`, `team_03.png`, `team_04.png`.
- Testimonial avatars: `testimonial_avatar_01.png`, `testimonial_avatar_02.png`, `testimonial_avatar_03.png`.

## Icon filenames

- Navigation: `arrow_left_circle_icon.png`, `arrow_right_circle_icon.png`, `chevron_left_icon.png`, `chevron_right_icon.png`.
- Services: `cooling_icon.png`, `flame_icon.png`, `gas_furnace_icon.png`, `heater_installation_icon.png`, `heating_icon.png`, `installation_icon.png`, `maintenance_icon.png`, `refrigeration_icon.png`, `renovation_icon.png`, `snowflake_icon.png`.
- Contact/social: `email_icon.png`, `facebook_icon.png`, `instagram_icon.png`, `linkedin_icon.png`, `location_icon.png`, `phone_icon.png`, `twitter_icon.png`.
- The ACF hero image field expects an attachment ID and renders through `wp_get_attachment_image()` for responsive `srcset`/`sizes` behavior.

## Required asset records

For each asset, record source path, intended section, focal point/crop, intrinsic dimensions, alt text, and license/provenance. Do not invent replacements for missing assets.
