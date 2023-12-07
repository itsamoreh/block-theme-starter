# Block Theme Starter

![Theme screenshot](screenshot.png)

## What is this?

This is a barebones WordPress block theme starter. Use it to build your next
block theme!

This theme is targeted toward agencies or developers building tightly controlled
themes for clients. To help with control, the following WordPress core features
have been removed:

- Core block patterns
- Core block styles
- Block directory
- Openverse integration

If you need custom blocks, build them into the theme. See
[Custom Blocks](#custom-blocks) for details.

## Quick Start

1. Make sure you're on node version `18.12.1` or later.
1. Run `npm install` from this directory to install dependencies.
1. Run `npm run watch` to watch
   [CSS and JavaScript assets](#editor-and-frontend-assets), and
   [Custom Blocks](#custom-blocks).
1. Optionally follow the [local environment](#optional-local-environment)
   instructions below to spin up a wp-env environment.

## Editor and Frontend Assets

This theme uses wp-scripts to build editor and frontend assets. The main editor
entry is at `assets/js/editor/index.js` and the main frontend entry is at
`assets/js/frontend/index.js`.

To build the assets, run the following command in your terminal:

```bash
npm run build:assets
```

This will take the entry files, build them and all imports with wp-scripts, and
output the files to `build/assets`. To watch for changes to your assets and
automatically rebuild, run the following command in your terminal:

```bash
npm run watch:assets
```

## Custom Blocks

This theme uses wp-scripts to build custom Gutenberg blocks. Add your custom
blocks in the `blocks/` directory. Each block should have its own directory.

To build the blocks, run the following command in your terminal:

```bash
npm run build:blocks
```

This will take all of your blocks inside `blocks/`, build them with wp-scripts
and output them to `build/blocks/` directory. Blocks will be automatically
enqueued in `inc/register-custom-blocks.php`

To watch for changes to your blocks and automatically rebuild, run the following
command in your terminal:

```bash
npm run watch:blocks
```

Custom blocks in the theme should be tied to the design or functionality of the
site. See [10up's reasoning over here](https://arc.net/l/quote/bzaojyph) for
more information.

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
