
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('test.scss');
});

var gulp = require('gulp')
    sass = require('gulp-ruby-sass');

gulp.task('default', function(){
    console.log("Hello World");
});

gulp.task('styles', function(){
});

