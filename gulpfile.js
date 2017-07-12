/**
 * Created by VadimChek on 11.07.2017.
 */
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

gulp.task('sass', function(){ // Создаем таск Sass
  return gulp.src('style/*.sass') // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
    .pipe(gulp.dest('style')) // Выгружаем результата в папку app/css
    .pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});

gulp.task('browser-sync', function() { // Создаем таск browser-sync
  browserSync({ // Выполняем browserSync
    server: { // Определяем параметры сервера
      baseDir: '' // Директория для сервера - app
    },
    notify: false // Отключаем уведомления
  });
});


gulp.task('watch', ['browser-sync'], function() {
  gulp.watch('style/*.sass', ['sass']); // Наблюдение за sass файлами в папке sass
});


gulp.task('build', ['sass'], function() {

  var buildCss = gulp.src([ // Переносим библиотеки в продакшен
    'style/main.css'
  ])
    .pipe(gulp.dest('style'))


});

gulp.task('clear', function (callback) {
  return cache.clearAll();
})

gulp.task('default', ['watch']);