

var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass');

    //configure Browsersync.

    gulp.task('browser-sync', function(){
        var files = [
            './style.css',
            './*.php'
        ];

        //Initialize broqsersync with PHP server.
        browserSync.init(files, {
            proxy: "localhost:8888/"
        });
    });

//configure Sass taskt to run when the specified .scss files change
//browsersync will aslo reload browsers
    gulp.task('sass', function() {
        return gulp.src('sass/*.scss')
            .pipe(sass({
                'outputStyle': 'compressed'
            }))
            .pipe(gulp.dest('./'))
            .pipe(browserSync.stream());
    });


    gulp.task('default', ['sass', 'browser-sync'], function() {
        gulp.watch("sass/**/*.scss", ['sass']);
    })