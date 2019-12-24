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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
//    .criticalCss({
//       enabled: mix.inProduction(),
//       paths: {
//           base: 'https://potolki-ts.ru/',
//           inline: true,
//           templates: './public/css/',
//           suffix: '_critical'
//       },
//       urls: [
//           { url: 'moskva', template: 'index' },
//       ]
//   })
//   .copy('public/css/index_critical.css', 'resources/views/common/criticalCss.blade.php');

  //  .options({
  //     postCss: [
  //       mqpacker({
  //           sort: true
  //         })
  //     ]
  // });
