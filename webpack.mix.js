const mix = require('laravel-mix');
const config = require('./webpack.config');

mix.webpackConfig(config)
    .copy([
        'resources/js/app.js',
        'resources/js/functions.js',
        'resources/js/popup.js'
    ], 'public/js')

    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
    ])

    .copy('resources/css/style.css', 'public/css');
