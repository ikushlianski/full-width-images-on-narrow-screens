var gulp       = require('gulp'), // Подключаем Gulp
	sass         = require('gulp-sass'), //Подключаем Sass пакет,
	browserSync  = require('browser-sync'), // Подключаем Browser Sync
	concat       = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
	uglify       = require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
	cssnano      = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
	rename       = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
	del          = require('del'), // Подключаем библиотеку для удаления файлов и папок
	imagemin     = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
	pngquant     = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
	cache        = require('gulp-cache'), // Подключаем библиотеку кеширования
	autoprefixer = require('gulp-autoprefixer');// Подключаем библиотеку для автоматического добавления префиксов
	const gulpbabel = require('gulp-babel');
	var babel = require("babel-core");


gulp.task('sass', function(){ // Создаем таск Sass
	return gulp.src('./sass/style.scss') // Берем источник
		.pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
		.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
		.pipe(gulp.dest('./')) // Выгружаем результат в папку css
		.on('error', function(errorInfo) {
			console.log(errorInfo.toString());
			this.emit('end');
		})
		.pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});

gulp.task('browser-sync', function() { // Создаем таск browser-sync
	browserSync({ // Выполняем browserSync
		proxy: "ilyaonline",
		notify: false // Отключаем уведомления
	});
});

gulp.task('scripts', function() {
	return gulp.src('./js/**/*')
		.pipe(concat('ilyaonline.min.js'))
		.pipe(gulpbabel({
            presets: ['env']
        }))
		.pipe(uglify())
		.pipe(gulp.dest('./__dist/js'))
		.pipe(browserSync.reload({stream: true})) // Обновляем на странице при изменении
});

// gulp.task('css-libs', ['sass'], function() {
// 	return gulp.src('./css/libs.css') // Выбираем файл для минификации
// 		.pipe(cssnano()) // Сжимаем
// 		.pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
// 		.pipe(gulp.dest('./css')); // Выгружаем в папку app/css
// });

gulp.task('watch', ['browser-sync', 'img',/*'css-libs',*/ 'scripts'], function() {
	gulp.watch('./sass/**/*.scss', ['sass']); // Наблюдение за sass файлами в папке sass
	gulp.watch('./**/*.html', browserSync.reload); // Наблюдение за HTML файлами в корне проекта
	gulp.watch('./**/*.php', browserSync.reload); // Наблюдение за PHP файлами в корне проекта
	gulp.watch('./js/*.js', ['scripts']);   // Наблюдение за JS файлами в папке js
});

// gulp.task('clean', function() {
// 	return del.sync('dist'); // Удаляем папку dist перед сборкой
// });

gulp.task('img', function() {
	return gulp.src('./assets/img/**/*') // Берем все изображения из app
		.pipe(cache(imagemin({  // Сжимаем их с наилучшими настройками с учетом кеширования
			interlaced: true,
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [pngquant()]
		})))
		.pipe(gulp.dest('__dist/img')); // Выгружаем на продакшен
});


gulp.task('build', [/*'clean', 'img',*/ 'sass' /*, 'scripts'*/], function() {

	var buildCss = gulp.src( // Переносим библиотеки в продакшен
		'./style.css')
	.pipe(cssnano()) // Сжимаем
	.pipe(gulp.dest('__dist/css'))

	// var buildFonts = gulp.src('./fonts/**/*') // Переносим шрифты в продакшен
	// .pipe(gulp.dest('__dist/fonts'))

	// var buildJs = gulp.src('./js/**/*') // Переносим скрипты в продакшен
	// .pipe(gulp.dest('../js'))
	//
	// var buildHtml = gulp.src('./*.html') // Переносим HTML в продакшен
	// .pipe(gulp.dest('../dist'));
	//
	// var buildPhp = gulp.src('./*.php') // Переносим php в продакшен
	// .pipe(gulp.dest('../dist'));

});

// gulp.task('clear', function (callback) {
// 	return cache.clearAll();
// })
