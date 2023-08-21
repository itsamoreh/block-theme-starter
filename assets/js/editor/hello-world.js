/**
 * Logs hello world to demo editor.js.
 *
 * This script utilizes the @wordpress/dom-ready function to ensure the DOM
 * has loaded before running the code.
 *
 * @author Amor Kumar <amor.kumar@webdevstudios.com>
 */
import domReady from '@wordpress/dom-ready';

domReady(() => {
	console.log('Hello from editor.js!');
});
