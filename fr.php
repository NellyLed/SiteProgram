
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Бесплатная вводная часть</title>
		<style>
					html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}
py-repl
{
	background:white;
}
h5
{
	text-align: center;
	font-family:'American Typewriter', serif;


	font-size:21px;
	color:#000000;
}
.b
{
	background: #ffdca3;
	width: 60%;
	height: 90%;
    box-shadow: 3px 3px 5px #1b1b1ba;
	border-radius:10px;
	margin: 2% auto;
}
p
{
	text-align: justify;
	font-size:20px;
	font-family:'Gill Sans', sans-serif;
	letter-spacing: 3px;
	color:#0a0a0a;
	padding-left:20px;
	padding-right:20px;
}
pre
{
	text-align: justify;
	font-size:20px;
	font-family:'Gill Sans', sans-serif;
	color:#0a0a0a;
	padding-left:20px;
	padding-right:20px;
}
h1
{
	text-align: center;
	font-family:'Bookman', URW Bookman L, serif;
	font-size:30px;
	color:#000000;
	font-weight:bold;
}
h4
{
	text-align: center;
	font-family:'American Typewriter', serif;
	margin-top:1%;
	margin-bottom:1%;
	font-size:23px;
	color:#000000;
	text-decoration:underline;
}
label
{
	text-align: justify;
	font-size:20px;
	font-family:'Gill Sans', sans-serif;
	color:#0a0a0a;
}
.b img
{
	width:60%;
	margin-top:1%;
	margin-bottom:1%;
}






/*фон*/
@-webkit-keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@-moz-keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@-o-keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@-webkit-keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
@-moz-keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
@-o-keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
@keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
/* Main styles */
body {
  margin-top: 6rem;
  color: #999;
  font: 400 16px/1.5 exo, ubuntu, "segoe ui", helvetica, arial, sans-serif;
  text-align: center;
  /* img size is 50x50 */
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
  -webkit-animation: bg-scrolling-reverse 0.92s infinite;
  /* Safari 4+ */
  -moz-animation: bg-scrolling-reverse 0.92s infinite;
  /* Fx 5+ */
  -o-animation: bg-scrolling-reverse 0.92s infinite;
  /* Opera 12+ */
  animation: bg-scrolling-reverse 0.92s infinite;
  /* IE 10+ */
  -webkit-animation-timing-function: linear;
  -moz-animation-timing-function: linear;
  -o-animation-timing-function: linear;
  animation-timing-function: linear;
}



/*кнопки*/
.back
{
	font-size: 18px;
    border: 2px solid #2d2d2d;
    text-align: center;
    color: #2d2d2d;
	padding:0.8%;
	font-weight:bold;
	background:transparent;
	margin:0 auto;
}
.back:hover,
.back:focus,
.back.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}



/*изменение экрана*/
@media (min-width: 767px) and (max-width: 991px){
	.b
{
	width: 85%;
	height: 90%;
	margin: 2% auto;
}
p{font-size:18px;}
h1{font-size:28px;}
h4{font-size:20px;}
h5{font-size:18px;}
pre{font-size:17px;}
label{font-size:18px;}
.back{font-size:18px;}
py-repl{font-size:18px;}
}
@media (min-width: 575px) and (max-width: 767px){
		.b
{
	width: 90%;
	height: 90%;
	margin: 2% auto;
}
p{font-size:16px;}
h1{font-size:24px;}
h4{font-size:18px;}
pre{font-size:15px;}
label{font-size:16px;}
.back{font-size:16px;}
py-repl{font-size:16px;}
h5{font-size:16px;}
}
@media (min-width: 275px) and (max-width: 575px){
		.b
{
	width: 95%;
	height: 100%;
	margin: 2% auto;
}
p{font-size:14px;}
h1{font-size:20px;}
h4{font-size:16px;}
pre{font-size:13px;}
label{font-size:14px;}
.back{font-size:14px;}
py-repl{font-size:14px;}
h5{font-size:16px;}
}

		</style>
	</head>
	<body>
		<div class='b'>
		<h1>Бесплатная вводная часть</h1>
		<h4>Три составляющих фронтенда</h4><p>
HTML (содержание и разметка), JavaScript (логика) и CSS (внешний вид, позиционирование). HTML описывает содержание страницы, CSS описывает стили и выглядит вот так: table { background: #ccc; }. JavaScript — язык программирования, описывает логику приложения, а также обращается к элементам HTML, изменяя структуру и содержание страницы.<br><br>
Если вам придётся как-нибудь вручную использовать эти средства, чтобы сделать более-менее сложный проект, то вам предстоит разобраться в этом.<br><br>
<i>jQuery</i><br>
Писать на чистом JavaScript достаточео проблематично, поэтому часто используют jQuery.Он позволяет обращаться к элементам страницы и выполнять с ними какие-то действия. Появлялись различные плагины, готовые решения, стало проще и интереснее.<br><br>
<i>MVC</i><br>
 MVC - архитектурный шаблон с серверной части. Этот шаблон «говорит» что есть модель, которая описывает данные. Например, модель пользователя, модель фильма, модель отзыва. Есть контроллер, который обрабатывает запросы, например «показать по такому-то адресу страницу со списком фильмов». И есть представление, которое отвечает за отображение данных в HTML, в которое контроллер передаёт готовые данные, полученные из базы данных/API.Шаблон MVC на фронтенде был хорош, прекрасно работал, но было излишне сложно.<br><br>
<i>Процессоры и сборщики</i><br>
Поскольку в веб-программировании важна скорость получения обратной связи, то нельзя перенаправлять слишком большие файлы, они будут долго доставляться.Все ресурсы сжимаются с помощью разных минификаторов. В CSS удаляются пробелы и могут ещё объединяться некоторые свойства. И всё это собирается в один или несколько файлов вместо 10-20.<br><br>
<i>CSS</i><br>
Произошло появление в CSS новой продукции - препроцессоров, позволяющих добавлять вложенные блоки, переменные, циклы. Использование препроцессоров позволяет избежать повторного использования кода. Они обрабатывают «сырой» CSS.<br><br>
Также имеются и постпроцессоры. Они обрабатывают уже готовый CSS, добавляя дополнительные свойства к уже существующим, или изменяя названия классов по необходимости. Их чаще всего используют для поддержки кроссбраузерности.<br><br>
<i>JavaScript</i><br>
Версия этого языка ES5 работает во всех браузерах.Сейчас более актуален ES6.Способ написания «нормального» кода сводится к следующему:сначала пишется код на «естественном» языке, а после транслируется в JavaScript. Примеры таких языков:<br>
&#10003;TypeScript — добавляет к JavaScript классы, интерфейсы, модули,упорядочивает типы переменных. Однако, больше подходит для описания строгих логических модулей.<br>
&#10003;CoffeeScript — делает код намного более удобным, понятным, человечным;<br><br>

<i>HTML</i><br>
Для упрощения написания HTML используют препроцессоры.Например, вместо <br>&lt;a href="#"&gt;Ссылка&lt;/a&gt; писать a(href="#") Ссылка.<br><br>
Чтобы удобно вставлять динамические данные в HTML, отделяя данные от разметки ввели шаблонизаторы. Например, в качестве шаблона указывается какое-либо слово,устанавливается в значении и  это значение подставляется в нудное место. Теги отдельно, контент отдельно. Можно удобно вставлять динамический контент с помощью циклов и условий — например, передавать массивы объектов и выводить их в таблице.<br><br>
CSS-фреймворки, адаптивность
Ранне чтобы создать сетку страницы, её каркас верстальщики использовали таблицы. Потом начали использовать блоки, или контейнеры, появилась контейнерная вёрстка. Положение блоков устанавливалось с помощью свойства позиционирования float: right/left.Сейчас почти все браузеры поддерживают Flexbox и CSS Grid .Они позволяют проще располагать границы сеток, передвигать контейнеры и верстать в целом.<br><br>
Адаптивность — изменение контента сайта под размеры различных устройств: ноутбук, планшет или мобильный телефон.Можно добиться с помощью flexbox-контейнеров, или блоков условий.<br><br>
Поскольку всех веб-приложения в основном состоят из одних и тех же элементов: строк, колонок, таблиц, кнопок часто используют CSS-фреймворки, где вся разметка уже продумана — достаточно применить нужный класс. Они содержат в себе множество готовых UI-элементов. Самый популярный — Bootstrap.Однако, есть и Bulma.<br><br>
<i>Кроссбраузерность</i><br>
Это способность сайта отображаться одинаково в разных браузерах. Чтобы этого достичь,нужно обнулить все свойства стандартных элементов (списки, таблицы и др), которые браузеры отображают по-разному. Поскольку браузеры развивались по-разному, некоторые CSS-свойства нужно прописывать специально для каждого браузера.Это можно сделать через префиксы — -webkit, -moz. <br>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b>
<form action="result_python.php" method="POST">
<div>
    <p style='text-align:center;'>	&lt;div class="row"&gt;&lt;/div&gt; — из какого это CSS-фреймворка?</p>
    <label><input name="e1" type="radio" value="a">Bootstrap</label>
    <label><input name="e1" type="radio" value="b">Bulma</label>
	<label><input name="e1" type="radio" value="c">Ant.Design</label><br>
</div><br>
<div>
    <p style='text-align:center;'>Null и undefined в JavaScript — это одно и то же?</p>
    <label><input name="e2" type="radio" value="a">да</label> 
    <label><input name="e2" type="radio" value="b">нет</label>
</div><br>
<div>
    <p style='text-align:center;'>Говорят, что в CSS Grid отсутствуют баги. Это правда?</p>
    <label><input name="e3" type="radio" value="a">Да, сетки через CSS Grid никогда не приводят к ошибкам</label><br>
    <label><input name="e3" type="radio" value="b">Нет, сетки CSS Grid могут приводить к ошибкам. </label><br>
</div><br>
<button type="submit" name='e' class='back'>Результат</button>
</form>
</p>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href='пакет_услуг.php'>Записаться</a>
<a class="back" onclick="javascript:history.back(); return false;">Назад</a></div><br>

  </body>
  </html>