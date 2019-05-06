var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('scss', function() {
gulp.src('resources/sass/scss/*.scss')
.pipe(sass().on('error', sass.logError))
.pipe(gulp.dest('public/css/'))
});

gulp.task('watch', function(){
gulp.watch('resources/sass/scss/*.scss', ['scss']);
});

gulp.task('default', ['watch']);

// browserSync.init({
//   proxy: 'localhost:8000'
// });
function defaultTask(cb) {
  // place code for your default task here
  cb();
}

exports.default = defaultTask
