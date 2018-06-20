let mix = require('laravel-mix');
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.js('assets/js/main.js', 'dist/js/')
    .sass('assets/sass/main.scss', 'dist/css/')
    .tailwind()
    .purgeCss({
        folders: ['assets', 'views']
    })
    .copy('views/*.html', 'dist/')
    .copy('assets/images/**', 'dist/images/')
    .browserSync({
        server: 'dist',
        files: "dist/**",
        proxy: false
    });

if(mix.inProduction()) {
    mix.copyDirectory('dist', '../build');
}