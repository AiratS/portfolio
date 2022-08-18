
let mix = require('laravel-mix');

mix.copyDirectory('resources/assets/fonts', './public/build/assets/fonts');

mix.js('resources/js/app.js', '/build/js/app.js').vue();
