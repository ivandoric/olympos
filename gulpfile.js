var gulp = require('gulp');
var livereload = require('gulp-livereload');
var uglify = require('gulp-uglifyjs');

gulp.task('uglify', function() {
  gulp.src('lib/*.js')
    .pipe(uglify('olympos.min.js'))
    .pipe(gulp.dest('js'))
});

gulp.task('watch', function(){
    livereload.listen();
    gulp.watch('lib/*.js', ['uglify']);
    gulp.watch(['style.css', '*.php', './js/*.js', './parts/*.php'], function (files){
        livereload.changed(files)
    });
});