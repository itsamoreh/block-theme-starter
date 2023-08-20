# Block Theme Starter

![Theme screenshot](screenshot.png)

## WIP

This is a work in progress. In it's current state, it's great for building a simple block theme.

Coming soon:

* Editor and frontend js build/watch with wp-scripts

## What is this?

This is a barebones WordPress block theme starter. Use it to build your next block theme!

## Local Environment

This theme includes a `.wp-env.json`. To spin up a WordPress environment with `wp-env` first make sure docker desktop is installed.
Then run the following command to start the environment:

```bash
npm run start
```

You can stop the environment with the stop command:

```bash
npm run stop
```

See the [wp-env documentation](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/#installation) for more details.

## Building and Watching CSS

To build the CSS using PostCSS, run the following command in your terminal:

```bash
npm run build:css
```

This will take the assets/main.css file, run it and all imports through PostCSS, and output the result to style.css.
To watch for changes to your CSS and automatically rebuild, run the following command in your terminal:

```bash
npm run watch:css
```

This will start PostCSS in watch mode, which will watch for changes to your assets/main.css file.
Whenever you save a change to the CSS, PostCSS will automatically rebuild and output the result to style.css.

## Building and Watching Custom Blocks

```bash
npm run watch:blocks
```

This will use wp-scripts to watch for changes to your blocks inside `blocks/` and automatically rebuild them when necessary.
The blocks are output to the `blocks-built/` directory. Make sure to enqueue the built blocks in the theme.

## Theme Documentation

The `docs` directory is where you can place documentation for your theme.

Markdown files in `docs/editors` and `docs/developers`  will be parsed and displayed in the
admin panel. This is a great place to explain how to use your theme, what
features it has, and any other information that might be useful to your
WordPress users. Place images in `docs/editors/img` or `docs/developers/img` directory 
and link to them in your markdown files. Use relative links.

_Note_: You need to keep the table of contents in `developers/_index.md` and
`editors/_index.md` up to date manually.
