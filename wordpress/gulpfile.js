'use strict';

let gulp = require('gulp');
let cssmin = require('gulp-cssmin');
let prefix = require('gulp-autoprefixer');
let uglify = require('gulp-uglify');
let concat = require('gulp-concat');
let imagemin = require('gulp-imagemin');
let sync = require('browser-sync').create();
let sugarss = require('sugarss');
let pixrem  = require('pixrem');
let postcss = require('gulp-postcss');
let cssimport = require('postcss-import');
let cssnext = require('postcss-cssnext');
let rename = require('gulp-rename');
let nested = require('postcss-nested');

// Static Server + watching scss/html files
gulp.task('serve', ['html', 'sss', 'js'], function() {

    sync.init({
        server: './wp-content/themes/uetd/dist/'
    });

    gulp.watch('wp-content/themes/uetd/app/html/*.php', ['html']);
    gulp.watch('wp-content/themes/uetd/app/sss/**/*.sss', ['sss']);
    gulp.watch('wp-content/themes/uetd/app/js/**/*.js', ['js']);
});

// Configure HTML tasks.
gulp.task('html', function () {
  return gulp.src([
        'wp-content/themes/uetd/app/html/home-header.php',
        'wp-content/themes/uetd/app/html/home-landing.php',
        'wp-content/themes/uetd/app/html/home-modal.php',
        'wp-content/themes/uetd/app/html/home-about.php',
        'wp-content/themes/uetd/app/html/home-expertise.php',
        'wp-content/themes/uetd/app/html/home-counters.php',
        'wp-content/themes/uetd/app/html/home-partners.php',
        'wp-content/themes/uetd/app/html/home-contact.php',
        'wp-content/themes/uetd/app/html/home-footer.php',
        'wp-content/themes/uetd/app/html/home-legals.php'
    ])
    .pipe(concat('index'))
    .pipe(rename({ extname: '.php' }))
    .pipe(gulp.dest('wp-content/themes/uetd/dist'))
    .pipe(sync.stream());
});

// Configure CSS tasks.
gulp.task('sss', function () {
  return gulp.src('wp-content/themes/uetd/app/sss/**/*.sss')
    .pipe(postcss(
        [
            cssimport,
            cssnext({
                browsers: ['last 2 version'],
                compress: true
            }),
            pixrem,
            nested
        ],
        { parser: sugarss }
    ))
    .pipe(concat('style'))
    .pipe(rename({ extname: '.css' }))
    .pipe(gulp.dest('wp-content/themes/uetd'))
    .pipe(sync.stream());
});

// Configure JS.
gulp.task('js', function() {
  return gulp.src('wp-content/themes/uetd/app/js/**/*.js')
    .pipe(uglify())
    .pipe(concat('app.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('wp-content/themes/uetd/dist/js'))
    .pipe(sync.stream());
});

// Configure image stuff.
gulp.task('images', function () {
  return gulp.src('wp-content/themes/uetd/app/img/**/*.+(png|jpg|gif|svg)')
    .pipe(imagemin())
    .pipe(gulp.dest('wp-content/themes/uetd/dist/img'));
});

gulp.task('watch', function () {
    gulp.watch('wp-content/themes/uetd/app/html/*.php', ['html']);
    gulp.watch('wp-content/themes/uetd/app/sss/**/*.sss', ['sss']);
    gulp.watch('wp-content/themes/uetd/app/js/**/*.js', ['js']);
});

gulp.task('default', ['html', 'sss', 'js', 'images', 'serve']);
