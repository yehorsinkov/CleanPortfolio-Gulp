
var gulp 		  = require ('gulp')
	sass          = require ('gulp-sass')
	browserSync   = require('browser-sync'),
	concat		  = require('gulp-concat'),
	uglify 		  = require('gulp-uglifyjs'),
	uglifycss 	  = require('uglifycss'),
	git 		  = require('gulp-git'),
	watch 		  = require('gulp-watch'),
	cssnano 	  = require('gulp-cssnano'),
	rename 		  = require('gulp-rename'),
	imagemin  	  = require('gulp-imagemin'),
	pngquant 	  = require('imagemin-pngquant'),
	del 		  = require('del'),
	autoprefixer  = require('gulp-autoprefixer');


/*==============  GULP SASS   ==================================================================*/

gulp.task('sass', function(){ // Создаем таск Sass
	return gulp.src('app/css/sass/*.sass') // Берем источник
		.pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
		.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
		.pipe(gulp.dest('app/css')) // Выгружаем результата в папку app/css
		.pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});

/*============== GULP CONCAT SCRIPTS  ==================================================================*/

gulp.task('scripts',function(){
		return gulp.src([
			'app/libs/jquery/jquery-2.1.3.min.js',
			'app/libs/animate/animate-css.js',
			'app/libs/mixitup/mixitup.min.js',
			'app/libs/waypoints/waypoints.min.js',
			'app/libs/magnific-popup/jquery.magnific-popup.min.js',
			'app/libs/html5shiv/html5shiv.min.js',
			'app/libs/parallax/parallax.min.js',
			'app/libs/scroll2id/PageScroll2id.min.js',
			'app/libs/jqBootstrapValidation/jqBootstrapValidation.js',
		])
		.pipe(concat('libs.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('app/js/'));
	});


/*============== GULP CONCAT CSS MAIN  ==================================================================*/

gulp.task('css_main',  function(){
		return gulp.src([
			'app/css/main.css',
			'app/css/color.css',
			'app/css/media.css',
		])
		.pipe(cssnano())
		.pipe(concat('all.main.css'))
		// .pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('app/css'));
	});

/*============== GULP CONCAT CSS LIBS  ==================================================================*/

gulp.task('css',function(){
		return gulp.src([
			'app/bower_components/bootstrap/dist/css/bootstrap.css',
			'app/bower_components/magnific-popup/dist/magnific-popup.css',
			'app/bower_components/animate.css/animate.css',
			'app/bower_components/linea-io/linea.css',
			'app/bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.css',
		])
		.pipe(cssnano())
		.pipe(concat('all.libs.css'))
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('app'));
	});


/*================  GULP BROWSER SYNC  ================================================================*/

	gulp.task('browser-sync', function(){
		browserSync({
			server: {
				baseDir: 'app'
			},	
			notify: false
		});
	});

/*================  GULP IMGAGEMIN ================================================================*/

gulp.task('img', function(){
	return gulp.src('app/img/**/*')

	.pipe(imagemin({
		interlaced: true,
		progressive: true,
		svgoPlugins: [{ removeViewBox: false}],
		use: [pngquant()]
	}))
	.pipe(gulp.dest('gist/img'));
});

/*================  GULP CLEAN DIST ================================================================*/

gulp.task('clean', function(){
	return del.sync('dist/')

});

/*================  GULP TRANSFER FILES  ================================================================*/


gulp.task('transfer', ['clean'], function(){
	 var transferCSS = gulp.src(['app/css/*.css'])
	 	.pipe(gulp.dest('dist/css'));

	 var transferHTML = gulp.src(['app/*.html'])
	 	.pipe(gulp.dest('dist/'));

	 var transferJS = gulp.src(['app/js/*.js'])
	 	.pipe(gulp.dest('dist/js'));

	 var transferFONTS = gulp.src(['app/fonts/**/*'])
	 	.pipe(gulp.dest('dist/fonts'))

});

/*================  GULP WATCH  ================================================================*/

gulp.task('watch',['browser-sync', 'css', 'css_main', 'transfer', 'scripts'], function(){
	gulp.watch('app/css/sass/*.sass', ['sass']),
	gulp.watch('app/*.html', browserSync.reload ),
	gulp.watch('app/**/*.js', browserSync.reload );
});



