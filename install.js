/**
 * Installation script.
 *
 * Initialize the environment based on the configuration.
 */

// Converts value to lowercase
function toLower(v) {
	return v.toLowerCase();
}

const app = require('commander');
const { prompt } = require('inquirer');

const questions = [
	{
		type: 'input',
		name: 'thtitle',
		message: 'Enter the theme\'s title ...'
	},
	{
		type: 'input',
		name: 'thslug',
		message: 'Enter the theme\'s slug ...'
	}
]

app
	.version('1.0.0')
	.description('Installation script for wp-dev-environment');

app.parse(process.argv);

