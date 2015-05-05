var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var gutil = require('gulp-util');
var cssmin = require('gulp-minify-css');
var less = require('gulp-less');
var sass = require('gulp-sass');
var cache = require('gulp-cache');
var imagemin = require('gulp-imagemin');
var fs = require('fs');
var del = require('del');

// Server Requirements not installed if you use npm install --no-optional
try {
    var php = require('gulp-connect-php');
    var browserSync = require('browser-sync');
    var modRewrite = require('connect-modrewrite');
} catch (e) {
    // define php / brwosersync / modrewrite as a dummy object
    var php = browserSync = modRewrite = {};
    gutil.log('use \'npm install\' to install dev server dependencies');
}

// list of non cdn js files from ./common/foot.php
var jsList = [
    //'bower_components/jquery/dist/jquery.min.js',
    //'bower_components/bootstrap/dist/js/bootstrap.min.js',
    //'bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',
    //'bower_components/parsleyjs/dist/parsley.min.js',
    //'bower_components/fancybox/source/jquery.fancybox.pack.js',

    // uncomment the following to include all js files from assets/js/libs
    //'assets/js/libs/**/*.js',
    'assets/js/script.js'
];

// list of non cdn css files from ./common/head.php
var cssList = [
    //'bower_components/bootstrap/dist/css/bootstrap.min.css',
    //'bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css',
    //'bower_components/fancybox/source/jquery.fancybox.css',

    // uncomment the following to include all css files from assets/plugins
    //'assets/plugins/**/*.css',
    'assets/css/style.css'
];


// Tasks

// the clean:git task removes files associated with the boilerplate repository
// so that the resulting directory will be ready to commit to a jurisdiction repository
// without bringing along its own git files
gulp.task('clean:git', function () {
    del([
        '.reviewboardrc',
        '.gitignore',
        '.git/'
    ], function (err, deletedFiles) {
        console.log('Files deleted:\n' + deletedFiles.join('\n'));
    });
});

// the images task runs site images through imagemin
gulp.task('images', function () {
    return gulp.src('./assets/images/**/*')
        .pipe(cache(imagemin({
            progressive: true,
            interlaced: true,
            // don't remove IDs from SVGs, they are often used
            // as hooks for embedding and styling
            svgoPlugins: [{cleanupIDs: false}]
        })))
        .pipe(gulp.dest('./assets/dist/images'));
});

// the jsmin task concatenates all files found in jsList and "uglifies" them
// removing whitespace and renaming objects and functions where appropriate
// to minimize the output file size
gulp.task('jsmin', function() {

    // pass array of files or glob and object specifying base directory to src
    return gulp.src(jsList, { base: 'assets/' })

        //concat params are name of the final file output
        // and the character to use as newline separator
        .pipe(concat('scripts.min.js', {'newline': ';'}))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/'))
        .on('error', gutil.log);
});

// pass thru task for browsersync autorelaoding after js minification
gulp.task('js-watch', ['jsmin'], browserSync.reload);


// the preprocess task searches for a style.less or style.scss file in
// assets/css directory and processes the filetype found using the pertinent
// preprocessor less / sass
gulp.task('preprocess', function() {

    var preProcessor = false;

    // findFile
    // looks for a file named style.{fileType}
    // in the assets/css directory and returns
    // the fileType or false
    var findFile = function(fileType) {
            try {
                var path = './assets/css/style.' + fileType;
                var file = fs.openSync(path, 'r');
                fs.close(file);
            } catch (e) {
                gutil.log('no ' + fileType + ' file found');
                fileType = false;
            }
            return fileType;
    }

    preProcessor = findFile('less');
    preProcessor = findFile('scss');

    return gulp.src(['assets/css/*.scss', 'assets/css/*.less'])
        .pipe(preProcessor === 'less'? less() : sass())
        .pipe(gulp.dest('./assets/css'))
        .on('error', gutil.log);
});

// the cssmin task concatenates the css files from cssList
// and removes all whitespace to minimize filesize
gulp.task('cssmin', ['preprocess'], function() {
    return gulp.src(cssList)
        .pipe(concat('styles.min.css', {'newline': '\n'}))
        .pipe(cssmin({'roundingPrecision': -1}))
        .pipe(gulp.dest('./assets'))
        .on('error', gutil.log);
});

// pass thru task for browsersync autorelaoding after css minification
gulp.task('css-watch', ['cssmin'], browserSync.reload);

// the phpserve task serves php files using gulp-connect-php
// which runs a php dev server with php version >= 5.4 installed
// in the same environment as node.
gulp.task('phpserve', function() {
  php.server({
      base: './',
      port: 8010,
      keepalive:true
  });
});

// the serve task minifies js / css and creates a
// browsersync server. this server is configured
// to use the connect-modrewrite middleware to proxy
// requests to the vagrant vm you (hopefully) have running
gulp.task('serve', ['jsmin', 'cssmin'], function() {
    browserSync({
        open: false,
        notify: false,
        middleware: function() {
            return [
                modRewrite([
                    '^/(.*)$ http://localhost:8000/$1 [P]'
                ])
            ];
        }
    });

    gulp.watch(['./*.php', './*.html'], browserSync.reload);
    gulp.watch('assets/js/*.js', ['js-watch']);
    gulp.watch(['assets/css/*.css', 'assets/css/*.scss', 'assets/css/*.less'], ['css-watch']);
});


gulp.task('default', ['jsmin', 'cssmin', 'images']);
