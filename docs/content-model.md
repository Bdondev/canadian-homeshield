# Canadian HomeShield Content Model

## Current decision

Header, hero, and about sections are implemented homepage slices. The active theme and LocalWP homepage are verified; later sections remain intentionally unimplemented.

## Current direction

- Header: native WordPress custom logo fallback, primary menu integration, and fixed ACF Free phone/CTA fields.
- Hero: fixed ACF Free fields in `acf-json/group_canadian_homeshield_home_hero.json`.
- Hero fields: title, emphasis word, rating score/count, description, CTA label/URL, form heading/CTA, and optional image attachment ID.
- About fields: eyebrow, heading, CTA label/URL, optional image, and fixed title/description fields for four value items.
- Services fields: eyebrow, heading, CTA label/URL, and fixed title/description fields for three service cards. Service icons remain theme assets.
- Service area fields: eyebrow, heading, intro, Google Maps embed URL, and five fixed neighborhood names.
- Testimonial fields: eyebrow, heading, rating, and fixed quote/name/role fields for three customer cards. Avatar images remain theme assets.
- Team fields: eyebrow, heading, and fixed alt text fields for four supplied team images. Team imagery remains theme assets.
- The visible estimate form is a composition-only GET form; lead processing and validation are not part of this phase.
- Do not use ACF Pro repeaters, flexible content, options pages, or ACF blocks.
- Keep reusable CPTs/taxonomies in a companion plugin when they are genuinely required.
