var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir(function(mix) {
    mix.sass('app.scss');

    mix.scripts([
    	"bower_components/jquery/dist/jquery.js",
    	
    	"app.js"
    ]);

    mix.livereload();

});
