let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/frontend/js/app.js', 'public/frontend/js')
	.js('resources/assets/frontend/js/util.js', 'public/frontend/js')
	.js('resources/assets/frontend/js/main.js', 'public/frontend/js')
	.js('resources/assets/frontend/js/accordion.js', 'public/frontend/js')
	.sass('resources/assets/frontend/sass/main.scss', 'public/frontend/css')
	.sass('resources/assets/frontend/sass/noscript.scss', 'public/frontend/css');

mix.copy('resources/assets/frontend/js/min', 'public/frontend/js')
	.copy('resources/assets/frontend/fonts', 'public/frontend/fonts')
	.copy('resources/assets/frontend/images', 'public/frontend/images');