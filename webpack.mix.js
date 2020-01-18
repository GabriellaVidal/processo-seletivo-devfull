let mix = require('laravel-mix');

// Add near top of file
let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;
let CopyWebpackPlugin = require( 'copy-webpack-plugin' ).default;

mix.webpackConfig( {
    plugins: [
    	new CopyWebpackPlugin([{
	      	from: 'resources/assets/images/',
	      	to: 'images'
	    }]),
        new ImageminPlugin( {
            pngquant: {
                quality: '15-20',
            },
            test: /\.(jpe?g|png|gif|svg)$/i,
        } ),
        new CopyWebpackPlugin([{
            from: 'resources/assets/fonts/',
            to: 'fonts/external-fonts'
        }]),
    ],
} )

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
	.sass('resources/assets/scss/app.scss', 'public/css');
