var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('sync', function () {
    //php
     browserSync.init({
         proxy :"intern"
     });
     gulp.watch(["./css/*.css", "./js/*.js", "./*.php"]).on('change', browserSync.reload);

    //html
    //browserSync.init({
    //    server: {
    //        baseDir: "./"
    //    }
    //});
    gulp.watch(["./*.html", "./css/*.css", "./js/*.js", "./*.php"]).on('change', browserSync.reload);
})