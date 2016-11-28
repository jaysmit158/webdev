// include gulp
var gulp = require('gulp'); 

// include plug-ins
var jshint = require('gulp-jshint');
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');

// JS hint task
gulp.task('jshint', function() {
  gulp.src('*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

