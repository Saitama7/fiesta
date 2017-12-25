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

// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.css', 'public/css');

mix.js('node_modules/jquery/dist/jquery.slim.js', '../js/jquery.slim.js')

mix.js('resources/assets/js/app.js', '../js/app.js')
    .sass('resources/assets/sass/app.scss', '../css/app.css');
