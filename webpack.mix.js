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
mix.styles([
    'resources/css/animate.css',
    'resources/css/font-awesome.min.css',
    'resources/css/prettyPhoto.css',
    'resources/css/price-range.css',
    'resources/css/main.css',
    'resources/css/responsive.css',
], 'resources/sass/all.css');



mix.combine([
    'resources/front/jquery.scrollUp.min.js',
    'resources/front/price-range.js',
    'resources/front/jquery.prettyPhoto.js',
    'resources/front/price-range.css',
    'resources/front/main.js',
], 'resources/js/all.js');