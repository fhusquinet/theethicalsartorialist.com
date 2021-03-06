let mix = require('laravel-mix');

let tailwindcss       = require('tailwindcss');
let purgecss          = require('laravel-mix-purgecss');
let glob              = require('glob-all');
let CompressionPlugin = require('compression-webpack-plugin');

mix.webpackConfig({
    plugins: [
        new CompressionPlugin({
            asset: "[path].gz[query]",
            algorithm: "gzip",
            test: /\.js$|\.css$|\.html$|\.svg$/,
            threshold: 0,
            minRatio: 0.6
        }),
        // new BundleAnalyzerPlugin()
    ],
    resolve: {
        modules: [
            path.resolve('./resources/assets/js'),
            path.resolve('./node_modules')
        ]
    }
});

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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/admin.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/admin.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.js') ],
        uglify: {
            uglifyOptions: {
                compress: {
                    drop_console: true
                }
            }
        }
    })
    .browserSync({
        proxy: process.env.APP_URL
    })
    .purgeCss({
        whitelistPatterns: [/js.*/, /trigger.*/, /.*--open/, /baguetteBox.*/, /visible/, /square/, /img-cover/, /.*w-.*/],
        whitelistPatternsChildren: [/baguetteBox.*/]
    })
    .version();