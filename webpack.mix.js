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
    .js('resources/access-admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js', 'public/js')
    .js('resources/access-admin/admin-lte/js/adminlte.min.js', 'public/js')
    .js('resources/access-admin/admin-lte/js/custome.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'public/js/app.js',
    'public/js/jquery.overlayScrollbars.min.js',
    'public/js/adminlte.min.js',
    'public/js/custome.js',
], 'public/js/all-custom.js');
