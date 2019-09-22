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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/test.scss', 'public/css')
   .sass('resources/assets/sass/upload.scss', 'public/css')
   .sass('resources/assets/sass/omikuji.scss', 'public/css')
   .sass('resources/assets/sass/typing.scss', 'public/css')
   .sass('resources/assets/sass/toppage.scss', 'public/css')
   .sass('resources/assets/sass/button.scss', 'public/css')
   .sass('resources/assets/sass/form.scss', 'public/css')
   .sass('resources/assets/sass/tweet_form.scss', 'public/css');
