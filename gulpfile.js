var gulp     = require('gulp'),
    svgmin   = require('gulp-svgmin');

gulp.task('svg', function () {
    gulp.src('src/svg/*.svg')
        .pipe(svgmin())
        .pipe(gulp.dest('./dist'));
});

gulp.task('default', ['svg']);
