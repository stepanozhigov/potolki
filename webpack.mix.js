let mix = require('laravel-mix');
let mqpacker = require("css-mqpacker");

require('laravel-mix-criticalcss');
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
   .criticalCss({
      enabled: mix.inProduction(),
      paths: {
          base: 'https://potolki-ts.ru/',
          templates: './css_test/',
          suffix: '_critical.min'
      },
      urls: [
          { url: 'moskva', template: 'moskva' },
      ],
      options: {
          minify: true,
      },
  });

  //  .options({
  //     postCss: [
  //       mqpacker({
  //           sort: true
  //         })
  //     ]
  // });
