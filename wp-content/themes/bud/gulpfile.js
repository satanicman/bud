'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    rimraf = require('rimraf'),
    browserSync = require("browser-sync"),
    reload = browserSync.reload,
    spritesmith = require('gulp.spritesmith'),
    notify = require("gulp-notify"),
    merge = require('merge-stream'),
    buffer = require('vinyl-buffer'),
    rename = require('gulp-rename'),
    ignore = require('gulp-ignore'),
    changed = require('gulp-changed'),
    ftp = require('gulp-ftp');

var ftpConnect = {
    host: '185.69.154.100',
    user: 'bud',
    pass: 'NqK18usU'
};

var path = {
    build: {
        html: './',
        js: './js/',
        css: './css/',
        img: './img/'
    },
    src: {
        html: 'src/*.html',
        js: 'src/js/*.js',
        style: ['src/style/*.scss', '!src/style/style.scss'],
        img: ['src/img/**/*.*', '!src/img/icons/*.*', '!src/img/form/*.*'],
        sprite: 'src/img/icons/**/*.*',
        spriteForm: 'src/img/form/**/*.*',
    },
    watch: {
        html: 'src/**/*.html',
        js: 'src/js/**/*.js',
        style: ['src/style/*.scss', '!src/style/style.scss'],
        img: ['src/img/**/*.*', '!src/img/icons/*.*', '!src/img/form/*.*'],
        sprite: 'src/img/icons/**/*.*',
        spriteForm: 'src/img/form/**/*.*'
    },
    clean: './build'
};

var config = {
    server: {
        baseDir: "./build"
    },
    tunnel: false,
    host: 'localhost',
    port: 9000,
    logPrefix: "bud"
};

gulp.task('html:build', function () {
    gulp.src(path.src.html)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.html))
        .pipe(reload({stream: true}))
        .pipe(notify("html"));
});

gulp.task('js:build', function () {
	ftpConnect.remotePath = '/wp-content/themes/bud/js';
    return gulp.src(path.src.js)
        .pipe(changed(path.build.js,{ extension: '.js' }))
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(ftp(ftpConnect))
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({stream: true}))
        .pipe(notify("js"));
});

gulp.task('style:build', function () {
	ftpConnect.remotePath = '/wp-content/themes/bud/css';
    return gulp.src(path.src.style)
        .pipe(changed(path.build.css,{ extension: '.css' }))
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(prefixer())
        .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(ftp(ftpConnect))
        .pipe(gulp.dest(path.build.css))
        .pipe(browserSync.reload({stream:true}))
        .pipe(notify("style"));
});

gulp.task('image:build', function () {
    ftpConnect.remotePath = '/wp-content/themes/bud/img';
    gulp.src(path.src.img)
        .pipe(changed(path.build.img))
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
    }))
    .pipe(ftp(ftpConnect))
    .pipe(gulp.dest(path.build.img))
    .pipe(reload({stream: true}));
});

gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('mainStyle:build', function() {
	ftpConnect.remotePath = '/wp-content/themes/bud';
    return gulp.src('src/style/style.scss')
        .pipe(changed(path.build.html,{ extension: '.css' }))
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(prefixer())
        .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(ftp(ftpConnect))
        .pipe(gulp.dest(path.build.html))
        .pipe(browserSync.reload({stream:true}))
        .pipe(notify("mainStyle"));
});

gulp.task('sprite:build', function() {
    var spriteData =
        gulp.src(path.src.sprite)
            .pipe(spritesmith({
                imgName: 'sprite.png',
                cssName: '_sprite.scss',
                algorithm: 'binary-tree',
                imgPath : 'img/sprite.png',
                padding: 5,
            }));

    var imgStream = spriteData.img
        .pipe(buffer())
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest('src/img/')); // путь, куда сохраняем картинку
    var cssStream = spriteData.css.pipe(gulp.dest('src/style/partials/')); // путь, куда сохраняем стили

    return merge(imgStream, cssStream).pipe(notify("Sprite Done!"));
});



gulp.task('spriteForm:build', function() {
    var spriteData =
        gulp.src(path.src.spriteForm) // путь, откуда берем картинки для спрайта
            .pipe(spritesmith({
                imgName: 'spriteForm.png',
                cssName: '_spriteForm.scss',
                algorithm: 'binary-tree',
                imgPath : '../img/spriteForm.png',
                padding: 5
            }));

    var imgStream = spriteData.img
        .pipe(buffer())
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest('src/img/')); // путь, куда сохраняем картинку
    var cssStream = spriteData.css.pipe(gulp.dest('src/style/partials/')); // путь, куда сохраняем стили

    return merge(imgStream, cssStream).pipe(notify("Sprite Done!"));
});

gulp.task('webserver', function () {
    browserSync(config);
});

gulp.task('clean', function (cb) {
    rimraf(path.build.css, function(){});
    rimraf(path.build.html + 'style.css', function(){});
    rimraf(path.build.js, function(){});
    rimraf(path.build.img, function(){});
});

gulp.task('build', [
    'sprite:build',
    'js:build',
    'style:build',
    'mainStyle:build',
    'image:build'
]);

gulp.task('watch', function(){
    watch(path.watch.style, function(event, cb) {
        gulp.start('style:build');
    });
    watch(['src/style/style.scss'], function(event, cb) {
        gulp.start('mainStyle:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch(path.watch.img, function(event, cb) {
        gulp.start('image:build');
    });
    watch([path.watch.sprite], function(event, cb) {
        gulp.start('sprite:build');
    });
});

gulp.task('default', ['build', 'watch']);