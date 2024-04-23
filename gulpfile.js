const { src, dest, watch, series } = require('gulp');  
const sass = require('gulp-sass')(require('sass'));

function buildStyles() {
  return src('app/scss/polykit-v0-2.scss')
    .pipe(sass(sass))
    .pipe(dest('app/css'));
}

function watchTask() {
  watch(['app/scss/polykit-v0-2.scss'], buildStyles);
}

exports.default = series(buildStyles, watchTask);