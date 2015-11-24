var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var plumber = require('gulp-plumber');
var watch = require('gulp-watch');

// Compile sass
gulp.task('sass', function () {
	gulp.src('./sass/style.sass')
		.pipe(plumber())
		.pipe(sass().on('error', sass.logError))
		.pipe(minifyCss({compatibility: 'ie8'}))
		.pipe(gulp.dest('./css'));
});

// Watch css and images for changes
gulp.task('watch', function () {
	gulp.watch('./sass/style.sass', ['sass']);
});

gulp.task('default', ['sass', 'watch']);