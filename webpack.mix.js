const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');


mix.combine([
   'node_modules/jquery/dist/jquery.min.js',
   'node_modules/foundation-sites/dist/js/foundation.js',
   'node_modules/what-input/dist/what-input.js',
   'node_modules/pickadate/lib/picker.js',
   'node_modules/pickadate/lib/picker.date.js',
   'resources/js/app-chateau.js'
], 'public/js/app-chateau.js');

mix.sass('resources/sass/app-chateau.scss', 'public/css');
