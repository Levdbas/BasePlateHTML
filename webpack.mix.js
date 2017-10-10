const mix = require('laravel-mix');
/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel application. By default, we are compiling the Sass
| file for your application, as well as bundling up your JS files.
|
*/

mix.setResourceRoot(path.normalize('dist'));
mix.setPublicPath(path.normalize('dist'));


mix.autoload({
  'jquery/dist/jquery.slim.js': ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"],
  'popper.js/dist/umd/popper.js': ['Popper']
});


mix.browserSync({
  proxy: 'yoursite.dev',
  files: [
    `*.html`,
    `dist/**/*.js`,
    `dist/**/*.css`
  ]
});


mix.sass(`assets/styles/app.scss`, `dist/styles`, {
  includePaths: ['node_modules'],
}).options({
  processCssUrls: false
}).js(`assets/scripts/app.js`, `dist/scripts`, {
  includePaths: ['node_modules']
});


mix.copyDirectory('assets/images', 'dist/images', false);
mix.copyDirectory('assets/fonts', 'dist/fonts');


Config.sourcemaps;
Config.notifications; // true


if (mix.inProduction()) {
    mix.version();
}
