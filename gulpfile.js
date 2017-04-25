var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
var elixir = require('laravel-elixir');
var path = require('path');

elixir(function(mix) {
    // mix.phpUnit([] , path.normalize('vendor/bin/phpunit') + ' --verbose');
    mix.less('app.less');
});
