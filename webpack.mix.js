const mix = require('laravel-mix');
const exec = require('child_process').exec;
const path = require('path');
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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.combine([
    'resources/css/style.css',
], 'public/css/app.css')
mix.combine([
    'resources/css/style.css',
    'resources/css/style2.css',
], 'public/css/test.css')
