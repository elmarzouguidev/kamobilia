const mix = require("laravel-mix");

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

//mix.js('resources/js/app.js', 'public/js')
//.sass('resources/sass/app.scss', 'public/css');

mix.styles(
    [
        "public/css/bootstrap.min.css",
        "public/css/animate.min.css",
        "public/css/font-awesome.min.css",
        "public/css/furniture-icons.css",
        "public/css/linear-icons.min.css",
        "public/css/magnific-popup.min.css",
        "public/css/owl.carousel.min.css",
        "public/css/ion-range-slider.min.css",
        "public/css/theme.min.css"
    ],
    "public/css/app.css"
)
.scripts(
    [
        "public/js/jquery.min.js",
        "public/js/jquery.bootstrap.min.js",
        "public/js/jquery.magnific-popup.min.js",
        "public/js/jquery.owl.carousel.min.js",
        "public/js/jquery.ion.rangeSlider.min.js",
        "public/js/jquery.isotope.pkgd.js",
        "public/js/main.js"
     
    ],
    "public/js/app.js"
);
