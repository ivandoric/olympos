var gulp = require('gulp');
var livereload = require('gulp-livereload');

gulp.task('watch', function(){
    livereload.listen();
    gulp.watch(['style.css', '*.php', './js/*.js', './parts/*.php'], function (files){
        livereload.changed(files)
    });
});