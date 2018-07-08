var gulp = require('gulp');
var sass = require('gulp-sass');
var cleancss = require('gulp-clean-css');

var paths = {
    scss: "./scss/**/*.scss"
}

gulp.task('scss', function () {
    return gulp.src(paths.scss)
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest('./css'));
});

gulp.task('minify-css', function () {
    return gulp.src('./css/*.css')
	.pipe(cleancss({compatibility: 'ie8'}))
	.pipe(gulp.dest('./css'))
});

gulp.task('watch', function() {
    gulp.watch(paths.scss, ['scss', 'minify-css']);
});

gulp.task('build', ['scss']);

gulp.task('default', ['watch', 'scss']);
