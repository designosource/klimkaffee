const gulp          = require('gulp');
const sass          = require('gulp-sass');
const gutil         = require('gulp-util');
const watch         = require('gulp-watch');
const imagemin      = require('gulp-imagemin');
const minify        = require('gulp-minify');
const plumber       = require('gulp-plumber');
const autoprefixer  = require('gulp-autoprefixer');

/* WATCH */ /* wanneer alle voorgaande taken van de default zijn gebeurd, watch dan opnieuw */
gulp.task( 'watch', function ()
{
    gutil.log(gutil.colors.red('Watching...'));
    gulp.watch( 'gulp-resources/sass/*.scss', ['sass']);
    gulp.watch( 'gulp-resources/sass/components/*.scss', ['sass']);
    gulp.watch( 'gulp-resources/img/*.*', ['images']);
    gulp.watch( 'gulp-resources/js/*.js', ['js']);
});

gulp.task( 'information', function ()
{
    gutil.log(gutil.colors.red('KLIMKAFFEE'));
    gutil.log(gutil.colors.blue('Sass -> images -> js'));
});

/* SASS */
gulp.task('sass', function () {
    
    return gulp.src('gulp-resources/sass/*.scss')
        .pipe(plumber())
        .pipe(sass(/*{outputStyle: 'compressed'}*/).on('error', sass.logError))
        .pipe(plumber.stop())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('css/'))
});

/* IMAGE COMPRESS */ /* niet perse nodig in boulderhal */
gulp.task('images', ['imagesDefault',], function(){
    gutil.log(gutil.colors.red('Compressing images'));
});

gulp.task('imagesDefault', () =>
    gulp.src('gulp-resources/img/*')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(plumber.stop())
        .pipe(gulp.dest('img/'))
);

/* COMPRESS JS */
gulp.task('js', function() {
  gulp.src('gulp-resources/js/*.js')
    .pipe(plumber())
    .pipe(minify())
    .pipe(gulp.dest('js/'))
});

/* DEFAULT: GULP */
gulp.task('default', ['information', 'sass', 'images', 'js', 'watch']);