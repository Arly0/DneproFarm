// Install
// ---------------------------
// If doesn't has package.json:
// npm init
// npm i --save-dev gulp gulp-load-plugins browser-sync @babel/core @babel/preset-env gulp-babel gulp-sass gulp-sass-glob gulp-autoprefixer gulp-concat gulp-csso gulp-sourcemaps gulp-svg-sprite gulp-svgmin gulp-uglify gulp-rename gulp-imagemin
// ---------------------------
// If has package.json:
// npm install

// Modules
var gulp        = require('gulp'),
    plugins     = require('gulp-load-plugins')(),
    browserSync = require('browser-sync').create();
    imgCompress = require('gulp-imagemin');
// HTML
gulp.task('html', function() {
    return gulp.src('src/template/*.php')
        .pipe(gulp.dest('dist'))
        .pipe(gulp.dest('wp-content/themes/default'))
        .pipe(browserSync.stream())
});

// SASS
gulp.task('sass', function() {
     return gulp.src('src/sass/styles.sass')
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.sassGlob())
        .pipe(plugins.sass().on('error', plugins.sass.logError))
        .pipe(plugins.autoprefixer({
            browsers: ['last 15 versions'],
            cascade: false
        }))
        .pipe(plugins.csso())
        .pipe(plugins.rename({extname: '.css', basename : 'style'}))
        .pipe(plugins.sourcemaps.write('.'))
        .pipe(gulp.dest('dist/css'))
        .pipe(gulp.dest('wp-content/themes/default'))
        .pipe(browserSync.stream())
});

// Javascripts
gulp.task('javascripts', function() {
    return gulp.src('src/js/**/*.js')
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.babel({
            presets: ['@babel/env']
        }))
        .pipe(plugins.uglify())
        .pipe(plugins.rename({suffix: '.min', prefix : ''}))
        .pipe(plugins.sourcemaps.write('.'))
        .pipe(gulp.dest('dist/js'))
        .pipe(gulp.dest('wp-content/themes/default/js'))
        .pipe(browserSync.stream())
});

// Libraries javascript
gulp.task('libsJS', function() {
    return gulp.src([
            'src/libs/**/*.js'
        ])
        .pipe(plugins.concat('libs.min.js'))
        .pipe(plugins.uglify())
        .pipe(gulp.dest('dist/js'))
        .pipe(gulp.dest('wp-content/themes/default/js'))
        .pipe(browserSync.stream())
});

// Libraries CSS
gulp.task('libsCSS', function() {
    return gulp.src('src/libs/**/*.css')
        .pipe(plugins.concat('libs.min.css'))
        .pipe(plugins.csso())
        .pipe(gulp.dest('dist/css'))
        .pipe(gulp.dest('wp-content/themes/default/css'))
        .pipe(browserSync.stream())
});

// images
gulp.task('imgmin', function() {
    return gulp.src('src/images/*')
    .pipe(imgCompress())
    .pipe(gulp.dest('wp-content/themes/default/images'))
  });

// SVG
gulp.task('svg', function() {
    return gulp.src('src/svg/*.svg')
        .pipe(plugins.svgmin({ js2svg: { indent: 2, pretty: false } }))
        .pipe(plugins.svgSprite({
            mode: {
                symbol: {
                    sprite: "../bundle.svg"
                }
            }
        }))
        .pipe(gulp.dest('src/svg'))
});

// Reload server
gulp.task('server', function() {
    browserSync.init({
        server: {
            baseDir: "dist"
        }
    })
})

// Watching
gulp.task('watch', function() {
    gulp.watch(['src/template/*.php'], gulp.series('html'));
    gulp.watch(['src/sass/*.sass'], gulp.series('sass'));
    gulp.watch(['src/js/*.js'], gulp.series('javascripts'));
    gulp.watch(['src/libs/**/*.js'], gulp.series('libsJS'));
    gulp.watch(['src/libs/**/*.css'], gulp.series('libsCSS'));
    // gulp.watch(['src/svg/**/*.svg'], gulp.series('svg'));
});

// Default run
gulp.task('default', gulp.series(
        gulp.parallel('html', 'sass','javascripts', 'libsJS', 'libsCSS', 'imgmin'/*, 'svg',*/),
        gulp.parallel('watch', 'server')
    ));

// Default run without server
gulp.task('no-server', gulp.series(
        gulp.parallel('html', 'sass','javascripts', 'libsJS', 'libsCSS', 'imgmin'/* 'svg',*/),
        gulp.parallel('watch')
    ));