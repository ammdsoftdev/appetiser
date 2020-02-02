var gulp = require('gulp');

gulp.task('default', function() {
  // place code for your default task here
});
var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

elixir(function(mix) {
    mix.browserify('app.js');
});
