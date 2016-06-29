var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  // 将/resources/assets/css/*.css和第三方库的css文件合并到public/assets/css/all.css
  mix.styles(
    [
      "main.css",
      "../bower/normalize-css/normalize.css"
    ],
    "public/assets/css"
  );
  // 将/resources/assets/js/*.js所有js文件合并到public/assets/js/all.js
  mix.scripts(
    [
      "index.js"
    ],
   "public/assets/js"
  );
  // 对all.js 和 all.css 产生hash版本
  mix.version([
    "assets/js/all.js",
    "assets/css/all.css"
  ]);

});
