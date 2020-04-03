let mix = require('laravel-mix');
// let mqpacker = require("css-mqpacker");

// require('laravel-mix-criticalcss');
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

mix
<<<<<<< HEAD
.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
=======
.js('resources/assets/js/app.js', 'public/js');
//    .sass('resources/assets/sass/app.scss', 'public/css');
>>>>>>> 528cdf1c35a20f80cd75543efeac80ac23f3f5b4



// const mqpacker = require("css-mqpacker");
// const sortCSSmq = require('sort-css-media-queries');

// mix
   
//    .js('resources/assets/js/quiz/quiz.js', 'public/js')
//    .sass('resources/assets/sass/quiz/quiz.scss', 'public/css')
//    .options({
//        postCss: [
//          mqpacker({
//                sort: sortCSSmq
//            })
//        ]
//    });