# Block Theme Starter

![Theme screenshot](screenshot.png)

## What is this?

This is a barebones WordPress block theme starter. Use it to build your next
block theme!

This theme is targeted toward agencies or developers building tightly controlled
themes for clients. To help with control, the following WordPress core features
have been removed:

-   Core block patterns
-   Core block styles
-   Block directory
-   Openverse integration

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

## Workflow

This project provides a minimal starting point for building out WordPress themes
from finished mockups.

The workflow for building a new theme with this starter might look something
like this:

1. Build up `theme.json`

    Using the styleguide from the mockups you're working with, add colors, font
    families, font styles, etc... to `theme.json`. Check out the
    [Global Settings & Styles](https://developer.wordpress.org/block-editor/how-to-guides/themes/global-settings-and-styles/)
    section of the Block Editor Handbook to learn about everything that's
    possible with `theme.json`.

2. Add css mixins

    Create mixins for things like text styles where you need to set multiple
    properties at the same time. See the
    [abstracts README](./assets/css/abstracts/README.md) for details.

3. Add core block styles and block variations

    Add styles and/or variations for core blocks like the button block so that
    the options available in editor match the design. For more information check
    out the [Block Styles README](./assets/js/editor/block-styles/README.md) and
    the
    [Block Variations README](./assets/js/editor/block-variations/README.md).
    This theme removes all core block styles and variations so you're starting
    from scratch.

4. Build out block patterns

    Previous steps set the foundation for the theme. Now you can create custom
    block patterns for the more simple components in the design. Use the
    [Create Block Theme plugin](https://wordpress.org/plugins/create-block-theme/)
    to copy the patterns you create in editor to the `/patterns` directory.

    If you need to create custom styles for your patterns, give them class names
    and add styles to a CSS file in `/assets/css/patterns/`. See the
    [Block Pattern CSS README](./assets/css/patterns/README.md) for details.

5. Build out custom blocks

    For more complex components in the design, create custom blocks. See the
    [Custom Blocks README](./blocks/README.md) for more information.

6. Build out page templates

    Once you're done building all components in the design, create your page
    templates. Use the
    [Create Block Theme plugin](https://wordpress.org/plugins/create-block-theme/)
    to copy the templates you create in editor to the `/templates` directory.

7. You're done!

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

### Create Block

This theme includes a custom block template to make it quick to scaffold custom
blocks and keep everything consistent. To use it run the follwing command:

```bash
npm run create:block
```

This will run
[@wordpress/create-block](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/)
using the template in `/blocks/_template`. Follow the prompts to set up your
block.

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
