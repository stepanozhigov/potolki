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
const mqpacker = require("css-mqpacker");
const sortCSSmq = require('sort-css-media-queries');

mix
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/quiz/quiz.scss', 'public/css')
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/quiz/quiz.js', 'public/js')
    .js('resources/assets/js/lead/lead.js', 'public/js')
    .options({
        postCss: [
            mqpacker({
                sort: sortCSSmq
            })
        ]
    });

mix.version();
