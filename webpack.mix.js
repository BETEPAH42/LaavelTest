const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.styles ([
    "resources/assets/css/adminlte.css",
    "resources/assets/plugins/fontawesome-free/css/all.css"
],"public/assets/admin/css/admin.css");
mix.js([
    "resources/assets/plugins/jquery/jquery.js",
    "resources/assets/js/demo.js",
      ],"public/assets/admin/js/admin.js");

mix.copyDirectory("resources/assets/img","public/assets/admin/img");
mix.copy("resources/assets/css/adminlte.css.map","public/assets/admin/css/adminlte.css.map");
mix.copyDirectory("resources/assets/plugins/fontawesome-free/webfonts","public/assets/admin/webfonts");
mix.copy("resources/assets/plugins/bootstrap/js/bootstrap.bundle.js","public/assets/admin/js/bootstrap.bundle.js");
mix.copy("resources/assets/js/adminlte.min.js","public/assets/admin/js/adminlte.min.js");

