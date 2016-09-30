var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');


//task para o sass
gulp.task('sass', function(){
    return gulp.src('sass/**/*.sass')
       .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
       .pipe(gulp.dest('css'))
});

//task para o watch
gulp.task('watch', function(){
    gulp.watch('sass/**/*.sass', ['sass'])
});

//task gulp default
/*gulp.task('default', function(){
    console.log('Ola...');
});*/

/*Obs: caso eu queira digitar somente gulp no meu terminal 
do Node para rodar todas as tasks de uma só vez, devo utilizar 
a task default do gulp com um array como parâmetro contendo as
chamadas das task/plugins utilizados. 

Exemplo:
*/
//task gulp Geral
gulp.task('default', ['sass', 'watch']); //Essa task chama as funções do sass e do watch conjuntamente
  

