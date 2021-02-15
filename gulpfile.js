const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('sass', function(){
  return gulp.src("./scss/style.scss")
  .pipe(sass({outputStyle:'compressed'}))
  .on('error', sass.logError)
  .pipe(sass().on("error", sass.logError))
  .pipe(gulp.dest("./"));
});

gulp.task("watch", function(){
  gulp.watch("scss/**/*.scss", gulp.series("sass"));
 });