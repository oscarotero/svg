"use strict";

const gulp    = require('gulp'),
      fs      = require('fs'),
      svgmin  = require('gulp-svgmin'),
      replace = require('gulp-replace');

gulp.task('svg', function () {
    gulp.src('src/svg/*.svg')
        .pipe(replace(/id="is-(\w+)"/g, 'class="is-$1"'))
        .pipe(svgmin())
        .pipe(gulp.dest('./dist'));
});

gulp.task('sample', function () {
    let images = fs.readdirSync('dist')
        .filter(file => file.endsWith('.svg'))
        .map(file => `<img src="dist/${file}">`)
        .join(' ');

    fs.writeFileSync('index.html', `
        <!DOCTYPE html>
        <html>
            <head>
                <title>Svg Sample</title>
                <style>img {margin: 1em}</style>
            </head>
            <body>
            ${images}
            </body>
        </html>
    `);
});

gulp.task('default', ['svg', 'sample']);
