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
	.sass('src/styles/style.scss', 'build/themes/_replace_this')
	.js('src/scripts/app.js', 'build/themes/_replace_this')
	.copyDirectory('src/assets', 'build/themes/_replace_this')
	.copyDirectory('src/themes','build/themes/_replace_this')
	.copyDirectory('src/themes','webfolder/wp-content/themes')
	.copyDirectory('src/plugins', 'build/plugins/_replace_this')
	.copyDirectory('build/plugins', 'webfolder/wp-content/plugins');
