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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

//AdminLTE

mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/css/adminlte.min.css',
], 'public/assets/admin/css/admin.css');

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js',
], 'public/assets/admin/js/admin.js');

mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts');
mix.copyDirectory('resources/assets/admin/img', 'public/assets/admin/img');
mix.copy('resources/assets/admin/css/adminlte.css.map', 'public/assets/admin/css/adminlte.css.map');

//Aside

mix.styles([
    'resources/assets/user/css/style.css',
    'resources/assets/user/css/bootstrap.min.css',
    'resources/assets/user/css/open-iconic-bootstrap.min.css',
    'resources/assets/user/css/owl.carousel.min.css',
    'resources/assets/user/css/owl.theme.default.min.css',
    'resources/assets/user/css/animate.css',
    'resources/assets/user/css/icomoon.css',
], 'public/assets/user/css/aside.css');

mix.scripts([
    'resources/assets/user/js/jquery-3.2.1.slim.min.js',
    'resources/assets/user/js/popper.min.js',
    'resources/assets/user/js/bootstrap.min.js',
    'resources/assets/user/js/owl.carousel.min.js',
    'resources/assets/user/js/jquery.waypoints.min.js',
    'resources/assets/user/js/imagesloaded.pkgd.min.js',
    'resources/assets/user/js/main.js',
], 'public/assets/user/js/main.js');

mix.copyDirectory('resources/assets/user/plugins/fonts/icomoon', 'public/assets/user/fonts');
mix.copyDirectory('resources/assets/user/plugins/fonts/open-iconic', 'public/assets/user/fonts');