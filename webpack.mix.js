const mix = require('laravel-mix');

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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.styles([
    'resources/admin/css/font-awesome.min.css',
    'resources/admin/css/simple-line-icons.min.css',
    'resources/admin/dist/style.css',
    'resources/admin/dist/style-custom.css',
], 'public/css/all-admin.css')
    .scripts([
        'resources/admin/js/libs/jquery.min.js',
        'resources/admin/js/libs/bootstrap.min.js',
        'resources/admin/js/libs/pace.min.js',
        'resources/admin/js/libs/Chart.min.js',
        'resources/admin/js/app.js',
        'public/ckeditor/ckeditor.js',
        'resources/admin/js/views/main.js',
    ], 'public/js/all-admin.js')

mix.styles(['resources/admin/css/dropzone.min.css'], 'public/css/dropzone.css')
    .scripts(['resources/admin/js/dropzone.min.js'], 'public/js/dropzone.js')

mix.styles([
    'resources/frontend/css/blog-post.css',
    'public/css/blog-post.css',
    'public/css/all-admin.css',
    'public/css/all.css',

    'resources/frontend/vendor/bootstrap/css/bootstrap.min.css',
], 'public/css/all.css')
    .scripts([
        'resource/frontend/vendor/jquery/jquery.min.js',
        'resource/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js',
    ], 'public/js/all.js')
