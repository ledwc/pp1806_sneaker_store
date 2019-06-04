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
   .js('resources/js/materialize.js', 'public/js')
   .js('resources/js/drop-down-menu.js', 'public/js')
   .js('resources/js/del-product.js', 'public/js')
   .js('resources/js/del-category.js', 'public/js')
   .js('resources/js/del-order.js', 'public/js')
   .js('resources/js/del-size.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles('resources/css/layout/footer.css', 'public/css/footer.css')
   .styles('resources/css/layout/header.css', 'public/css/header.css')
   .styles('resources/css/template/materialize.css', 'public/css/materialize.css')
   .styles('resources/css/product/product.css', 'public/css/product.css')
   .styles('resources/css/login/login.css', 'public/css/login.css');
