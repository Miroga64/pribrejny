let gulp = require('gulp'),
    concat = require('gulp-concat'),
    // uglyfly = require('gulp-uglyfly'),
    include = require('gulp-include'),
    sass = require('gulp-sass'),
    sassGlob = require('gulp-sass-glob');
autoprefixer = require('gulp-autoprefixer');

sass.compiler = require('node-sass');

let template_path = './';

let paths = {
    js: {
        watch: template_path + 'dev/js/**/*.js',
        src: template_path + 'dev/js/*.js',
        dest: template_path
    },
    sass: {
        src: template_path + 'dev/scss/**/*.scss',
        dest: template_path + 'dist/'
    },
    autopref: {
        src: template_path + 'dist/styles.css',
        dest: template_path
    }

};

function autopref() {
    return gulp.src(paths.autopref.src)
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest(paths.autopref.dest));
};

function js() {
    return gulp.src(paths.js.src)
        // .pipe(concat("scripts.js"))
        // .pipe(uglyfly())
        .pipe(include())
        .pipe(gulp.dest(paths.js.dest));
}

function scss() {
    return gulp.src(paths.sass.src)
        .pipe(sassGlob())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest(paths.sass.dest));
}

function watch() {
    gulp.watch(paths.js.watch, js);
    gulp.watch(paths.sass.src, scss);
    gulp.watch(paths.sass.src, autopref);
}

// let build = gulp.series(gulp.parallel(scss, js));

exports.watch = watch;
// exports.default = build;
