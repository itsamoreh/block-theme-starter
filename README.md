# Block Theme Starter

![Theme screenshot](screenshot.png)

## What is this?

This is a barebones WordPress block theme starter. Use it to build your next block theme!

## Quick Start

1. Make sure you're on node version `18.12.1` or later.
1. Run `npm install` from this directory to install dependencies.
1. Run `npm run watch` to watch [CSS](#css), [JavaScript](#editor-and-frontend-javascript),
   and [Custom Blocks](#custom-blocks).
1. Optionally follow the [local environment](#optional-local-environment) 
   instructions below to spin up a wp-env environment.

## CSS

This theme uses PostCSS to process CSS. The main CSS entrypoint is
`assets/main.css`. All CSS with be compiled to `style.css` which is enqueued in
`functions.php` **for both the editor and the frontend**.

To build the CSS, run the following command in your terminal:

```bash
npm run build:css
```

This will take the `assets/main.css` file, run it and all imports through
PostCSS, and output the result to style.css. To watch for changes to your CSS
and automatically rebuild, run the following command in your terminal:

```bash
npm run watch:css
```

## Editor and Frontend JavaScript

This theme uses wp-scripts to build editor and frontend JS. The main editor
entry is at `assets/js/editor/index.js` and the main frontend entry is at
`assets/js/frontend/index.js`.

To build the JS, run the following command in your terminal:

```bash
npm run build:js
```

This will take the entry files, build them and all imports with wp-scripts, and
output the files to `build/editor.js` and `build/frontend.js`. To watch for
changes to your JS and automatically rebuild, run the following command in your
terminal:

```bash
npm run watch:js
```

## Custom Blocks

This theme uses wp-scripts to build custom Gutenberg blocks. Add your custom
blocks in the `blocks/` directory. Each block should have its own directory.

To build the blocks, run the following command in your terminal:

```bash
npm run build:blocks
```

This will take all of your blocks inside `blocks/`, build them with wp-scripts
and output them to `build/blocks/` directory. Make sure to enqueue the built
blocks in the theme like this:

```php
// functions.php
include get_template_directory() . '/build/blocks/block-name/index.php';
```

To watch for changes to your blocks and automatically rebuild, run the following
command in your terminal:

```bash
npm run watch:blocks
```

## Optional Local Environment

This theme includes a `.wp-env.json`. To spin up a WordPress environment with
`wp-env` first make sure
[Docker](https://www.docker.com/products/docker-desktop/) is installed.
Then run the following command to start the environment:

```bash
npm run env:start
```

You can stop the environment with Docker Desktop or the stop command:

```bash
npm run env:stop
```

See the
[wp-env documentation](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/#installation)
for more details.
