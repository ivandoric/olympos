var gulp = require('gulp');
var livereload = require('gulp-livereload');

gulp.task('liver', function() { 
    return gulp.src(['style.css', '*.php', './js/*.js']).pipe(livereload());
});

gulp.task('watch', function(){
    livereload.listen();
    gulp.watch(['style.css', '*.php', './js/*.js'], ['liver']);
});