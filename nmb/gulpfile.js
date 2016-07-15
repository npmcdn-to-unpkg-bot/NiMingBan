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
      "../bower/normalize-css/normalize.css",
      "../bower/uikit/css/uikit.almost-flat.min.css",
      "layouts/side-menu.css",
      "main.css"
    ],
    "public/assets/css"
  );
  mix.styles(
    [
      "post.css"
    ],
    "public/assets/css/post.css"
  );
  // 将/resources/assets/js/*.js所有js文件合并到public/assets/js/all.js
  mix.scripts(
    [
      "../bower/jquery/dist/jquery.min.js",
      "../bower/uikit/js/uikit.min.js",
      "../bower/uikit/js/components/pagination.js",
      "menu.js",
      "base.js"
    ],
    "public/assets/js/base.js"
  );
  mix.scripts(
    [
      "../bower/vue/dist/vue.js"
    ],
    "public/assets/js/vue.min.js"
  );
  mix.scripts(
    [
      "../bower/vue-resource/dist/vue-resource.js"
    ],
    "public/assets/js/vue-resource.min.js"
  );
  mix.scripts(
    [
      "post.js"
    ],
    "public/assets/js/post.js"
  );
  // 产生hash版本
  mix.version([
    "assets/js/vue.min.js",
    "assets/js/vue-resource.min.js",
    "assets/js/base.js",
    "assets/js/post.js",
    "assets/css/all.css",
    "assets/css/post.css"

  ]);

  // copy uikit 字体文件
  mix.copy('resources/assets/bower/uikit/fonts', 'public/build/assets/fonts');

});
