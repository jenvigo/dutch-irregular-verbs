const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const browsersync = require('browser-sync').create();

// Sass Task
function scssTask(){
    return src('web/style.scss', { sourcemaps: true })
        .pipe(sass())
        .pipe(postcss([cssnano()]))
        .pipe(dest('web/', { sourcemaps: 'web/' }));
}
// JavaScript Task
/*todo: change dist for proper folder*/
function jsTask(){

    return src('web/js/script.js', { sourcemaps: true })
        .pipe(terser())
        .pipe(dest('dist', { sourcemaps: '.' }));
}

// Browsersync Tasks
function browsersyncServe(cb){
    browsersync.init({
        // server: {
        //     baseDir: './web'
        // }
        proxy: "localhost"
    });
    cb();
}

function browsersyncReload(cb){
    browsersync.reload();
    cb();
}

// Watch Task
function watchTask(){
    watch('web/**/*.html', browsersyncReload);
    watch('web/**/*.php', browsersyncReload);
    watch(['web/**/*.scss', 'web/js/**/*.js'], series(scssTask, jsTask, browsersyncReload));
}

// Default Gulp task
exports.default = series(
    scssTask,
    jsTask,
    browsersyncServe,
    watchTask
);
