# Blocks

Add your theme specific custom blocks here. Each block should be in it's own
directory. Dynamic blocks are recommended but you could also add static blocks.

## Custom Block Assets

All block assets should be declared in the block's `block.json` file.

## CSS

The block's CSS should be in a `style.css` file. The build will append `-index`
so file should be added to `block.json` like this:
`"style": "file:./style-index.css"`. This css will be inlined only on pages
where the block is present.

If you need to write editor specific CSS do so in `editor.css`. This file will
need to be imported in your `edit.js` file like this: `import './editor.css';`.
You'll also need to add this file to `block.json`. The build process will call
this file `index.css` so it should be added to `block.json` like this:
`"editorStyle": "file:./index.css",`.

## JS

If you need JavaScript for the frontend of your dynamic block, add a `view.js`
file. You'll need to add this file to `block.json` like this:
`"viewScript": "file:./view.js"`.
