// Подключение модулей Node.js в проект
var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');

// Запуск коннектора Gulp-BrowserSync -> PHP7 встроенный сервер
gulp.task('connect-sync', function() {
    connect.server({base: 'SANDBOX/public'}, function() {
        browserSync({
            proxy: '127.0.0.1:8000',
            browser: "C:\\Program Files\\Firefox Developer Edition\\firefox.exe"
        });
    });

    gulp.watch('**/*.php').on('change', function() {
        browserSync.reload();
    });
});


// Задачи, которые выполняются по умолчанию (на команду $ gulp)
gulp.task('default', ['connect-sync']);



// // Подключение и настройки для browserSync
// var reload      = browserSync.reload;        //Ф-ия перезагрузки выведена для удобства в переменную
// var paths = {                                //Переменная с путями к отслеживаемым файлам
//  html:['SANDBOX/public/index.html']
// };






// Выполняемые задачи (таски)
// -----------------------------


// // Настройка самого browser-sync
// gulp.task('browserSync', function() {
//  browserSync({
//      server: {
//          baseDir: "SANDBOX/public"
//      },
//      browser: "C:\\Program Files\\Firefox Developer Edition\\firefox.exe",
//      port: 8000,
//      open: true,
//      notify: false
//  });
// }); 
// // ... и далее эта задача добавлена в watcher

// // Задача (таск) browserSync для HTML файлов
// gulp.task('html', function(){
//  gulp.src(paths.html)
//  .pipe(reload({stream:true}));
// });

// //Задача Наблюдатель (watcher)
// gulp.task('watcher',function(){
//  gulp.watch(paths.html, ['html']);
// });

// // Задачи, которые выполняются по умолчанию (на команду $ gulp)
// gulp.task('default', ['watcher', 'browserSync']); 


// // ==========================
// // Пробная задача (проверка работоспособности gulp)
// gulp.task('mytask', function() {
//  console.log('Привет, я таск!');
// });