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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/base.css', 'public/css')
    .postCss('resources/css/index_main.css', 'public/css')
    .postCss('resources/css/register.css', 'public/css')
    .postCss('resources/css/login.css', 'public/css')
    .postCss('resources/css/coupons.css', 'public/css')
    .postCss('resources/css/coupon.css', 'public/css')
    .postCss('resources/css/smart_form.css', 'public/css')
    .postCss('resources/css/smart_form_edit.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css');
