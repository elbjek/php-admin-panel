const scssInput = ['scss/style.scss'],
    scssOutput = 'app/css';

// Start everything up.
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
const plumber = require('gulp-plumber');


// Watch SASS.
gulp.task('sass', function() {
    return gulp
        .src(scssInput)
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(scssOutput))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: 'app'
        },
    });
});

gulp.task('watch', ['sass', 'browserSync'], function (){
    gulp.watch('scss/**/*.scss', ['sass', browserSync.reload]);
    gulp.watch('./index.php', browserSync.reload);
});