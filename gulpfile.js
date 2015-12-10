var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var plumber = require('gulp-plumber');
var clean = require('gulp-clean');
var fs = require('fs');
var composer = require('gulp-composer');

// Renames bower-asset into bower
gulp.task('rename', function(){
	fs.rename('./basic/vendor/bower-asset', './basic/vendor/bower', function(){
		console.log('Bower folder is renamed.');
	});
});

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

// Copies bower-asset into bower folder
gulp.task('bower-copy', function(){
	gulp.src('./basic/vendor/bower-asset/**/*')
		.pipe(gulp.dest('basic/vendor/bower/'));
});

//Create assets folder task
gulp.task('assets-folder', function(){
	fs.stat('assets',function(err,stats){
		if(err) fs.mkdir('assets');
	})
});

gulp.task('composer', function(){
	composer({ cwd: './basic', bin: 'php ./basic/composer.phar' });
})

gulp.task('default', ['sass', 'rename', 'assets-folder', 'watch']);
