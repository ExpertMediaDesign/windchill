let mix = require('laravel-mix');
let path = require('path');

mix.setResourceRoot('../');
mix.setPublicPath(path.resolve('./'));

mix.webpackConfig({
    watchOptions: { ignored: [
        path.posix.resolve(__dirname, './node_modules'),
        path.posix.resolve(__dirname, './build/css'),
        path.posix.resolve(__dirname, './build/js')
    ] }
});

mix.js('js/app.js', '/build/js');

mix.postCss("css/app.css", "/build/css");

mix.postCss("css/editor-styles.css", "/build/css");

// mix.browserSync({
//     proxy: 'http://tailpress.test',
//     host: 'tailpress.test',
//     open: 'external',
//     port: 8000
// });

if (mix.inProduction()) {
    mix.version();
} else {
    mix.options({ manifest: false });
}
