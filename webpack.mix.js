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
//#################//
//####FRONT END####//
//#################//
mix.js('resources/assets/frontend/js/app.js', 'public/frontend/js')
	.js('resources/assets/frontend/js/util.js', 'public/frontend/js')
	.js('resources/assets/frontend/js/main.js', 'public/frontend/js')
	.js('resources/assets/frontend/js/accordion.js', 'public/frontend/js')
	.sass('resources/assets/frontend/sass/main.scss', 'public/frontend/css')
	.sass('resources/assets/frontend/sass/noscript.scss', 'public/frontend/css');

mix.copy('resources/assets/frontend/js/min', 'public/frontend/js')
	.copy('resources/assets/frontend/fonts', 'public/frontend/fonts')
	.copy('resources/assets/frontend/images', 'public/frontend/images');



//######################//
//####SHOP FRONT END####//
//######################//
mix.js('resources/assets/shop_frontend/js/app.js', 'public/shop_frontend/js')
	.sass('resources/assets/shop_frontend/sass/app.scss', 'public/shop_frontend/css');

mix.copy('resources/assets/shop_frontend/js/min', 'public/shop_frontend/js')
	.copy('resources/assets/shop_frontend/css', 'public/shop_frontend/css')
	.copy('resources/assets/shop_frontend/fonts', 'public/shop_frontend/fonts')
	.copy('resources/assets/shop_frontend/images', 'public/shop_frontend/images');

