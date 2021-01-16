'use strict';
// Load plugins
const autoprefixer = require('autoprefixer');
const browsersync = require('browser-sync').create();
const concat = require('gulp-concat');
const cssnano = require('cssnano');
const order = require('gulp-order');
const eslint = require('gulp-eslint');
const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const newer = require('gulp-newer');
const plumber = require('gulp-plumber');
const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const stripdebug = require('gulp-strip-debug');
const uglify = require('gulp-uglify');
const babel = require('gulp-babel');

// BrowserSync
function browserSync(done) {
  browsersync.init({
    //proxy: 'localhost:8888',
    host: 'localhost:8888',
    open: 'external',
    notify: false
  });
  done();
}

// BrowserSync Reload
function browserSyncReload(done) {
  browsersync.reload();
  done();
}

// CSS task
function css() {
  return gulp
    .src('wp-content/themes/v1/style.scss')
    .pipe(plumber())
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(gulp.dest('wp-content/themes/v1/'))
    .pipe(rename({ basename: 'style' }))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(gulp.dest('wp-content/themes/v1/'))
}

// Lint
// function scriptsLint() {
//   return gulp
//     .src(['./js/dev/global.js'])
//     .pipe(plumber())
//     .pipe(eslint({
//       'rules':{
//         'semi': [1, 'always'],
//       }
//     }))
//     .pipe(eslint.format())
//     .pipe(eslint.failAfterError());
// }

// JS task
function js() {
  return gulp
    .src(['wp-content/themes/v1/assets/js/src/**/*'])
    .pipe(plumber())
    .pipe(order([
      // 'jquery/*.js',
      'vendor/**/*.js',
      // 'global.js',
    ]))
    .pipe(babel({
        presets: ['@babel/env']
    }))
    .pipe(concat('dev.js'))
    .pipe(gulp.dest('wp-content/themes/v1/assets/js/'))
    .pipe(rename({ basename: 'build' }))
    .pipe(uglify())
    .pipe(gulp.dest('wp-content/themes/v1/assets/js/'))
}

// Watch files
function watch() {
  gulp.watch('./**/*.scss', gulp.series(css, browserSyncReload));
  gulp.watch('wp-content/themes/v1/assets/js/src/**/*.js', gulp.series(js, browserSyncReload));
  gulp.watch('./**/*.php', browserSyncReload);
}

// define complex tasks
const build = gulp.parallel(css);

// export tasks
exports.css = css;
exports.js = js;
exports.build = build;
exports.watch = watch;
exports.default = gulp.series(browserSync, build, watch);
