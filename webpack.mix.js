const mix = require('laravel-mix');

mix.browserSync('localhost:8000');

mix//.js('resources/js/app.js', 'public/js')
    .stylus('resources/stylus/app.styl', 'public/css');
