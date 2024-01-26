/**
 * External dependencies
 */
const { join } = require('path');

module.exports = {
	defaultValues: {
		slug: 'new-block',
		title: 'New Block',
		description: 'A bootstrapped block. Build something beautiful!',
		category: 'text',
		dashicon: 'heart',
		namespace: 'bp',
		textDomain: 'bp',
		supports: {
			html: false,
			align: true,
		},
		attributes: {
			title: {
				type: 'string',
				default: 'Hello from the newly scaffolded block!',
			},
		},
		wpScripts: false,
		editorScript: 'file:./index.js',
		style: 'file:./style-index.css',
		viewScript: 'file:./view.js',
		render: 'file:./view.php',
	},
	blockTemplatesPath: join(__dirname, 'block'),
};
