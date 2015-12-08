var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var plumber = require('gulp-plumber');
var clean = require('gulp-clean');
var fs = require('fs');


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
	gulp.watch('./basic/vendor/bower-asset/**/*', ['bower-copy']);
});

// Copies bower-asset into bower folder
gulp.task('bower-copy', function(){
	gulp.src('./basic/vendor/bower-asset/**/*')
		.pipe(gulp.dest('basic/vendor/bower/'));
});

// Deletes old bower-asset folder
// gulp.task('bower-del', function () {
// 	return gulp.src('./basic/vendor/bower-asset/', {read: false})
// 		.pipe(plumber())
// 		.pipe(clean());
// });

//Create assets folder task
gulp.task('assets-folder', function(){
	fs.stat('assets',function(err,stats){
		if(err) fs.mkdir('assets');
	})
});

gulp.task('default', ['sass', 'bower-copy', 'assets-folder', 'watch']);