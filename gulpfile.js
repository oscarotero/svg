var gulp     = require('gulp'),
    concat   = require('gulp-concat'),
    svgmin   = require('gulp-svgmin'),
    stylecow = require('gulp-stylecow');

gulp.task('css', function () {
    gulp.src('src/*/styles.css')
        .pipe(stylecow({
            "support": {
                "explorer": 9,
                "edge": 12,
                "firefox": 39,
                "chrome": 43,
                "safari": 8,
                "opera": 25,
                "android": 4.1,
                "ios": 8.1
            },
            "plugins": [
                "color",
                "extend",
                "fixes",
                "flex",
                "import",
                "matches",
                "nested-rules",
                "prefixes",
                "rem",
                "variables",
            ],
            "code": "minify"
        }))
        .pipe(gulp.dest('./dist'))
        .pipe(concat('all.css'))
        .pipe(gulp.dest('./dist'));
});

gulp.task('svg', function () {
    gulp.src('src/*/*.svg')
        .pipe(svgmin())
        .pipe(gulp.dest('./dist'));
});

gulp.task('default', ['css', 'svg']);
