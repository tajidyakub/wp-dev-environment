let mix = require('laravel-mix');

mix.options({
	processCssUrls: false,
	//uglify: {},
	//purifyCss: false,
	//purifyCss: {},
	postCss: [require('autoprefixer')],
	clearConsole: true
});

mix
	.disableNotifications()
	.sass('src/styles/style.scss', 'build/themes/_themes-slug')
	.js('src/scripts/app.js', 'build/themes/_themes-slug')
	.copyDirectory('src/assets', 'build/themes/_themes-slug')
	.copyDirectory('src/themes','build/themes/_themes-slug')
	.copyDirectory('src/themes','webfolder/wp-content/themes');
