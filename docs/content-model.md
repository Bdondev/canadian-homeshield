# Canadian HomeShield Content Model

## Current decision

The first implemented slice is the homepage header and hero. The active theme and LocalWP homepage are verified; later sections remain intentionally unimplemented.

## Current direction

- Header: native WordPress custom logo fallback, primary menu integration, and fixed ACF Free phone/CTA fields.
- Hero: fixed ACF Free fields in `acf-json/group_canadian_homeshield_home_hero.json`.
- Hero fields: title, emphasis word, rating score/count, description, CTA label/URL, form heading/CTA, and optional image attachment ID.
- The visible estimate form is a composition-only GET form; lead processing and validation are not part of this phase.
- Do not use ACF Pro repeaters, flexible content, options pages, or ACF blocks.
- Keep reusable CPTs/taxonomies in a companion plugin when they are genuinely required.
