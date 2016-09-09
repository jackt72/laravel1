<<<<<<< HEAD
var elixir = require('laravel-elixir');
=======
const elixir = require('laravel-elixir');

require('laravel-elixir-vue');
>>>>>>> 42e9e963183f1e23f378849f909f89e3ace7720d

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
<<<<<<< HEAD
 | for your Laravel application. By default, we are compiling the Less
=======
 | for your Laravel application. By default, we are compiling the Sass
>>>>>>> 42e9e963183f1e23f378849f909f89e3ace7720d
 | file for our application, as well as publishing vendor resources.
 |
 */

<<<<<<< HEAD
elixir(function(mix) {
    mix.less('app.less');
=======
elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
>>>>>>> 42e9e963183f1e23f378849f909f89e3ace7720d
});
