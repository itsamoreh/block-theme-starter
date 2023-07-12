# Blocks

Add your theme specific custom blocks here. Each block should be in it's own
directory. Dynamic blocks are recommended but you could also add static blocks.

## Custom Block Assets

### CSS

Add CSS for your blocks in `/assets/css/blocks/custom/block-name.css`. Because
these theme specific blocks are so intertwined with the theme, it's recommended
to use the theme's main stylesheet for block styles.

Build the theme styles with `npm run build:css` or `npm run watch:css`. See the
main README for more details.

### JS

Alpine.js is included in the theme and is recommended for dynamic block
JavaScript functionality. Write your Alpine directives in the dynamic block's
render callback.

See https://alpinejs.dev/start-here for more on Alpine.js.
