var gulp = require('gulp'),					// Подключаем Gulp
	browserSync = require('browser-sync');	// Подключаем Browser Sync



// Подключение и настройки для browserSync
var reload      = browserSync.reload;    	//Ф-ия перезагрузки выведена для удобства в переменную
var paths = {                              	//Переменная с путями к отслеживаемым файлам
	html:['SANDBOX/public/index.html']
};




// Выполняемые задачи (таски)
// -----------------------------


// Настройка самого browser-sync
gulp.task('browserSync', function() {
	browserSync({
		server: {
			baseDir: "SANDBOX/public"
		},
		browser: "C:\\Program Files\\Firefox Developer Edition\\firefox.exe",
		port: 8080,
		open: true,
		notify: false
	});
}); 
// ... и далее эта задача добавлена в watcher

// Задача (таск) browserSync для HTML файлов
gulp.task('html', function(){
	gulp.src(paths.html)
	.pipe(reload({stream:true}));
});

//Задача Наблюдатель (watcher)
gulp.task('watcher',function(){
	gulp.watch(paths.html, ['html']);
});

// Задачи, которые выполняются по умолчанию (на команду $ gulp)
gulp.task('default', ['watcher', 'browserSync']); 


// ==========================
// Пробная задача (проверка работоспособности gulp)
gulp.task('mytask', function() {
	console.log('Привет, я таск!');
});

