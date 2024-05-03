=== Abisko ===
Contributors: Anlino
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=anders%40andersnoren%2ese&lc=US&item_name=Free%20WordPress%20Themes%20from%20Anders%20Noren&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Requires at least: 6.3
Requires PHP: 7.4
Tested up to: 6.5
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


== Installation ==

1. Make sure you're running WordPress 6.3 or later.
2. Upload the theme.
3. Activate the theme.


== Licenses ==

Abisko is derived from the Davis Blocks theme, Copyright (c) 2022 Anders Norén.
Davis Blocks is distributed under the terms of the GNU GPL version 2.0.

Abisko bundles the following third-party resources:

Plus Jakarta Sans font
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://fonts.google.com/specimen/Figtree/

Icons in /assets/images/ from Phosphor Icons
License: MIT, https://opensource.org/license/mit/
Source: https://phosphoricons.com

=== Images in screenshot.jpg ===

Mountain photo in boat
License: CC0 1.0 Universal https://creativecommons.org/publicdomain/zero/1.0/
Source: https://commons.wikimedia.org/wiki/File:Lago_di_Braies_on_boat.jpg

Korean Bibimbap with dumpling
License: CC0 1.0 Universal https://creativecommons.org/publicdomain/zero/1.0/
Source: https://www.rawpixel.com/image/447990/bibimbap-bowl

Lady Bird Johnson Grove in Northern California
License: CC0 1.0 Universal https://creativecommons.org/publicdomain/zero/1.0/
Source: https://www.rawpixel.com/image/422019/lady-bird-johnson-grove

A girl wearing brown hat walking through forest
License: CC0 1.0 Universal https://creativecommons.org/publicdomain/zero/1.0/
Source: https://www.rawpixel.com/image/3282668/free-photo-image-travel-girl-forest

Fushimi inari Trail, Kyōto-shi, Japan
License: CC0 1.0 Universal https://creativecommons.org/publicdomain/zero/1.0/
Source: https://www.rawpixel.com/image/3282202/free-photo-image-japan-japanese-architecture

People walk quickly around the Theater District of Times Square in New York City at night
License: CC0 1.0 Universal https://creativecommons.org/publicdomain/zero/1.0/
Source: https://www.rawpixel.com/image/3336839/free-photo-image-city-publicity-billboard

A man standing on jagged rocks in a fast-flowing river in the wilderness
License: CC0 1.0 Universal https://creativecommons.org/publicdomain/zero/1.0/
Source: https://www.rawpixel.com/image/3282300/free-photo-image-nature-california-river

Cherry blossom image
License: CC0 1.0 Universal https://creativecommons.org/publicdomain/zero/1.0/
Source: https://www.rawpixel.com/image/5925234/photo-image-background-flower-public-domain


== Changelog ==

Version 1.0.6 (2024-05-03)
-------------------------
- Updated stylesheet enqueue to make sure the parent theme stylesheet is loaded even when a child theme is active.

Version 1.0.5 (2024-02-02)
-------------------------
- Set headings and heading sized text to auto hyphenate, improving the appearance of word breaks on small screens.
- Modified the layout of the "Header Large" template part to enable hyphens.
- Bumped theme.json schema and "Tested up to" to 6.4.

Version 1.0.4 (2023-10-21)
-------------------------
- Moved the pagination typography styles from the block markup to the block settings in theme.json (thanks, @superlisa).
- Removed "theme": "abisko" from <!-- wp:template-part /-->.
- Bumped theme.json schema and "Requires at least" to 6.3.

Version 1.0.3 (2023-08-21)
-------------------------
- Removed opt-in of the opinionated wp-block-styles, since it causes issues with pull quote styles in 6.3.
- Updated styles to account for removal of wp-block-styles.

Version 1.0.2 (2023-04-08)
-------------------------
- Set button elements to `-webkit-appearance: none;` to improve the styling of buttons on iOS.

Version 1.0.1 (2023-04-04)
-------------------------
- Patterns: Updated the content of some patterns to be more consistent.
- Comment respond: Disabled rotated title when responding to a comment with hard reload, preventing overflow.

Version 1.0 (2023-03-26)
-------------------------