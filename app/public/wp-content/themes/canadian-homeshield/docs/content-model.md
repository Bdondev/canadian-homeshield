# Canadian HomeShield Content Model

## Current decision

The first approved slice is the homepage header and hero. The active theme, homepage object, navigation, and remaining sections still need confirmation in the running LocalWP site.

## Current direction

- Header: native WordPress custom logo and primary menu.
- Hero: fixed ACF Free fields in `acf-json/group_canadian_homeshield_home_hero.json`.
- Hero fields: eyebrow, title, description, CTA label, CTA URL, and image attachment ID.
- Do not use ACF Pro repeaters, flexible content, options pages, or ACF blocks.
- Keep reusable CPTs/taxonomies in a companion plugin when they are genuinely required.
