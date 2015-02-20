var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var concat = require("gulp-concat");
var livereload = require('gulp-livereload');
var minifyCSS = require('gulp-minify-css');

var paths = {
    css: 'public/css',
    sass: 'resources/assets/sass/**/*.scss',
    blade: 'resources/views/**/*.blade.php',
    js_source: 'resources/assets/js/*.js',
    js: 'public/js',
    img_source: 'resources/assets/img/*.{png,gif,jpg}',
    img: 'public/img',
}

/* Sass Styles */
gulp.task('styles', function () {
    gulp.src(paths.sass)
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: [
                'public/components/bootstrap-sass-official/assets/stylesheets',
                'resources/assets/sass'
            ]
        }))
        //.pipe(sourcemaps.write())
        .pipe(minifyCSS())
        .pipe(gulp.dest(paths.css))
        .pipe(livereload());
});

/* Task scripts */
gulp.task('scripts', function () {
    gulp.src(paths.js_source)
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.js))
        .pipe(livereload());
});

/* Blade Templates */
gulp.task('blade', function () {
    gulp.src(paths.blade)
        .pipe(livereload());
});

/* Images */
gulp.task('images', function () {
    gulp.src(paths.img_source)
        .pipe(gulp.dest(paths.img))
        .pipe(livereload());
});

gulp.task('watch', function () {
    livereload.listen();
    gulp.watch(paths.sass, ['styles']);
    gulp.watch(paths.js_source, ['scripts']);
    gulp.watch(paths.img_source, ['images']);
    gulp.watch(paths.blade, ['blade']);
});

gulp.task('default', ['styles', 'scripts', 'images']);