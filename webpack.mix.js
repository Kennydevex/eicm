let mix = require('laravel-mix');


mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
<<<<<<< HEAD
   .copy('node_modules/normalize.css/normalize.css', 'public/css/normalize.css').version();
=======
   .sass('resources/assets/sass/custom.scss', 'public/css')
   .copy('resources/assets/css/styles.css', 'public/css')
   .copy('node_modules/normalize.css/normalize.css', 'public/css/normalize.css');
>>>>>>> master

/*if (mix.inProduction()) {
    mix.version();
}*/
