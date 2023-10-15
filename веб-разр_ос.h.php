
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Основы HTML, CSS, JS</title>

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
		<h1>Основы HTML, CSS, JS</h1>
		<!--1 часть-->
		<h4>Основы HTML</h4><p>
		HTML (Hypertext Markup Language) - это код, который используется для отображения веб-страницы и её контента. Контент может быть структурирован с использованием изображений и таблиц данных.<br><br>
<i>Что такое HTML на самом деле?</i><br>
HTML не является языком программирования; это язык разметки.Его сложность может быть разной.HTML состоит из ряда элементов, позволяющих отображать контент соответствующим образом.С помощью тэгов можно манипулировать шрифтом,размером и выделением текста, отображать ссылки и т.д.<br><br>
<i>Анатомия HTML элемента</i><br>
<i>Пример:</i>&lt;p&gt;Это месяц&lt;/p&gt;<br><br>
<i>Рассмотрим подробнее:</i><br>
1.<u>Открывающий тег.</u>Состоит из имени элемента (здесь, "p"), заключённого в открывающие и закрывающие угловые скобки. Указывает на то, где элемент начинается.<br>
2.<u>Закрывающий тег. </u>Состоит из имени элемента (здесь, "p"), заключённого в открывающие и закрывающие угловые скобки и включает в себя косую черту перед именем элемента. Он указывает, где элемент заканчивается.<br>
3.<u>Контент.</u> Это текст внутри тэга.<br>
4.<u>Элемент.</u>Совокупность открывающегося и закрывающегося тегов и контент.<br><br>
Элементы могут иметь атрибуты.<br><i>Пример</i>:
&lt;p class=’ed’&gt;Это луна&lt;/p&gt;<br><br>
Атрибуты содержат дополнительную информацию об элементе.class это имя атрибута, а ed- это значение атрибута. Класс содержит информацию о стилях.<br><br>Атрибут всегда должен иметь:<br>
1.Пробел между ним и именем элемента <br>
2.Имя атрибута, за которым следует знак равенства<br>
3.Значение атрибута, заключённое с двух сторон в кавычки<br><br>
<i>Вложенные элементы</i><br>
Вложением называется расположение одних элементов внутри других. Например, тег strong может сделать акцент на каком-либо слове.
&lt;p&gt;Этот месяц &lt;strong&gt;очень&lt;/strong&gt; яркий.&lt;/p&gt;<br><br>
<i>Пустые элементы</i><br>
Это элементы, которые не имеют контента.Например,&lt;img src='' alt=''&gt;.<br>Элемент изображения не оборачивает контент для влияния на него. То есть, изображение просто выводится, поэтому закрывающий тэг не нужен.<br><br>
<i>Анатомия HTML документа</i><br>
Вот так выглядит структура html документа:<br>
&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>
  &lt;head&gt;<br>
    &lt;meta charset="utf-8"&gt;<br>
    &lt;title&gt;Моя тестовая страница&lt;/title&gt;<br>
  &lt;/head&gt;<br>
  &lt;body&gt;<br>
    &lt;img src="images/firefox-icon.png" alt="Моё тестовое изображение"&gt;<br>
  &lt;/body&gt;&lt;/html&gt;<br><br>
<i>Разбор:</i><br>
1)&lt;!DOCTYPE html&gt; — доктайп.Раньше,он выступал в качестве ссылки на набор правил, чтобы страница им следовала.Сейчас  он нужен чтобы все работало правильно.<br>
2)&lt;html&gt;&lt;/html&gt; — элемент. Он оборачивает весь контент на всей странице. Часто называют корневым.<br>
3) &lt;head&gt; &lt;/head&gt; — элемент, выступающий в качестве контейнера для всего, что нужно включить на HTML страницу, не является контентом.Туда можно включить ключевые слова,CSS стили нашего контента, кодировка и т.д.<br>
4) &lt;body&gt;&lt;/body&gt; — элемент.Здесь есть весь контент, который показывается пользователям страницы.<br>
5)&lt;/meta charset="utf-8"&gt; — этот элемент устанавливает UTF-8 кодировку вашего документа,включающая в себя большинство известных символов. <br>
6)&lt;title&gt;&lt;/title&gt;— элемент, устанавливающий заголовок для вашей страницы.Это название, которое появляется на вкладке браузера загружаемой страницы.<br><br>
<i>Изображения</i><br>
&lt;img src="images/firefox-icon.png" alt="Mоё тестовое изображение"&gt;
Атрибут src содержит путь к нашему файлу изображения.Атрибут alt содержит поясняющий текст для пользователей, которые не могут увидеть изображение.<br><br>
<i>Заголовки</i><br>
HTML включает шесть уровней заголовков &lt;h1&gt;–&lt;h6&gt; от самого большого к самому маленькому.<br><br>
<i>Абзацы</i><br>
Эту задачу выполняет тэг p. Его используют регулярно при разметке текстового контента.<br><br>
<i>Списки</i><br>
Большая часть веб-контента является списками. Разметка списка всегда состоит по меньшей мере из двух элементов. Наиболее распространёнными типами списков являются нумерованные и ненумерованные списки:<br>
1)Ненумерованные списки - это списки, где порядок пунктов не имеет значения, как в списке покупок. Они оборачиваются в элемент &lt;ul&gt;<br>
2)Нумерованные списки - это списки, где порядок пунктов имеет значение.Они оборачиваются в элемент &lt;ol&gt;.<br>
Каждый пункт внутри списков располагается внутри элемента &lt;li&gt;<br><br><i>Пример:</i> если заключить фрагменты абзаца в список:<br>
&lt;p&gt;Mozilla, мы являемся мировым сообществом технологов, мыслителей и строителей, работающих вместе ... &lt;/p&gt;<br>То получится:<br>
&lt;p&gt;Mozilla, мы являемся мировым сообществом&lt;/p&gt;<br>
&lt;ul&gt;<br>
  &lt;li&gt;технологов&lt;/li&gt;<br>
  &lt;li&gt;мыслителей&lt;/li&gt;<br>
  &lt;li&gt;строителей&lt;/li&gt;&lt;/ul&gt;<br>
&lt;p&gt;работающих вместе ... &lt;/p&gt;<br><br>
<i>Ссылки</i><br>
Чтобы добавить ссылку, нам нужно использовать простой элемент -&lt;a&gt;.Внутри элемента нужно дописать адрес источника через href=’’, а внутри тэга а текст, который будет являться ссылкой. <br>
По <a href="https://www.wm-school.ru/editor/tryh1.html" target="_blank" style='color:#000000'>ссылке</a> вы сможете потренироваться на визуализаторе HTML<br><br>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b>
<form action="result_python.php" method="POST">
<div>
    <p style='text-align:center;'>Какого тега не существует?</p>
    <label><input name="w1" type="radio" value="a">&lt;adress&gt;</label>
    <label><input name="w1" type="radio" value="b">&lt;em&gt;</label>
    <label><input name="w1" type="radio" value="c">&lt;ol&gt;</label>
	<label><input name="w1" type="radio" value="d">&lt;pre&gt;</label><br>
</div><br>
<div>
    <p style='text-align:center;'>Какой из представленных вариантов НЕ является валидным по XHTML 1.1:</p>
    <label><input name="w2" type="radio" value="a">&lt;i&gt;Курсив&lt;/i&gt;</label> 
    <label><input name="w2" type="radio" value="b">&lt;u&gt;Подчёркнутый текст&lt;/u&gt;</label>
    <label><input name="w2" type="radio" value="c">&lt;p&gt;Текст&lt;/p&gt;</label>
	<label><input name="w2" type="radio" value="d">&lt;p style="font-size: 1000%;"&gt;Текст&lt;/p&gt;</label>
</div><br>
<div>
    <p style='text-align:center;'>На сайте внутри папки pages находится файл page.html. А внутри папки images находится файл foto.jpg. Причём папки images и pages лежат в корне сайта. Как правильно написать путь к foto.jpg из файла page.html:</p>
    <label><input name="w3" type="radio" value="a">../images/foto.jpg</label> 
    <label><input name="w3" type="radio" value="b">images/foto.jpg</label>//
    <label><input name="w3" type="radio" value="c">pages/images/foto.jpg</label>
	<label><input name="w3" type="radio" value="d">../images/pages/foto.jpg</label><br>
</div><br>
<button type="submit" name='w' class='back'>Результат</button>
</form>
</p><br>



<!--2 часть-->
<h4>Основы CSS</h4><p>
CSS (Cascading Style Sheets) — это код, использующийся для стилизации веб-страницы. Как и HTML, CSS  не является языком программирования, это язык таблицы стилей. То есть, он позволяет применять стили выборочно к элементам в документах HTML. Стили могут быть написаны как в самом html-документе, так и в файле с расширением css.Если вы хотите написать стили в самом html-документе, то это необходимо осуществлять внутри тэгов style и head. Если же в файле с расширением css, то внутри тэга head необходимо прописать &lt;link href="styles/style.css" rel="stylesheet" type="text/css"&gt;.Тут href обозначает путь до файла с расширением css. Примером изменения стиля может являться <pre>
p {
  color: red;
}
</pre></p><p>Через данное обозначение вы измените цвет шрифта на красный, который заключен внутри каждого тэга p.<br><br>
<i>Анатомия набора правил CSS</i><br>
Написанный выше пример можно трактовать как набор правил, которое состоит из частей:<br>
1)селектор - это имя HTML-элемента в начале набора правил. В данном случае, тэг p.<br>
2)объявление - единственное правило, указывающее как из свойств элемента стилизовать. В данном случае, это правило color: red.<br>
3)свойства - способы, которыми стилизуют определенный HTML-элемент.В данном случае, color является свойством для элементов тэга p.<br>
4)значение свойства - выбирает одно из множества возможных признаков для данного свойства. В данном случае, color имеет значение red.<br><br>
<i>Примечание:</i><br>
1)Каждый набор правил (кроме селектора) должен быть обёрнут в фигурные скобки ({}).<br>
2)В каждом объявлении нужно использовать двоеточие (:), чтобы отделить свойство от его значений.<br>
3)В каждом наборе правил  нужно использовать точку с запятой (;), чтобы отделить каждое объявление от следующего.<br><br>
<i>Выбор нескольких элементов</i><br>
Можно выбрать несколько элементов разного типа и применить единый набор правил для всех из них путем добавления селекторов.Например:<br><pre>
p,li,h1 {
  color: red;}
</pre></p><p>
<i>Шрифты и текст</i><br>
Можно добавлять другие коллекции шрифтов, отличные от стандартных, с помощью добавления в тэг head &lt;link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'&gt;.Достаточно поискать в браузере нужную коллекцию шрифтов, там будет необходимая ссылка.<br><br>
<i>Примечание:</i> Все в CSS документе между /* и */ является CSS комментарием, который браузер игнорирует при исполнении кода. Нужен для заметок.Дополнительно можно определять размер текста,его расположение относительно экрана, расстояние между строками,чтобы сделать его немного более удобным для чтения:<br><pre>
h1 {
  font-size: 60px;
  text-align: center;}
p, li {
  font-size: 16px;
  line-height: 2;
  letter-spacing: 1px;}
</pre></p><p>
<i>Блоки</i><br>
Большинство HTML-элементов на странице можно рассматривать как блоки, расположенные друг над другом,поскольку макет CSS основан, главным образом, на блочной модели (box model). Каждый из блоков может иметь несколько свойств:<br>
1)padding, пространство только вокруг контента<br>
2)border, сплошная линия, которая расположена рядом с padding<br>
3)margin, пространство вокруг внешней стороны элемента<br>
4)width-ширина элемента<br>
5)background-color - цвет позади контента и padding элементов<br>
6)color - цвет контента элемента <br>
7)text-shadow - устанавливает тень на тексте внутри элемента<br>
8)display: устанавливает режим отображения элемента<br><br>
<i>Центрирование</i><br>
Важно помнить, что тэг body является блочным, а img - строчным. Поэтому, нельзя к img применить такое же центрирование, как к body через margin: 0 auto. Однако, можно сделать img блочным, добавив display: block. Если же вы не хотите этого делать, можно добавить к изображению тэг center.<br>
По <a href="https://www.wm-school.ru/editor/tryh1.html" target="_blank" style='color:#000000'>ссылке</a> вы сможете потренироваться на визуализаторе HTML<br>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b><br>
<form action="result_python.php" method="POST">
<div>
    <p style='text-align:center;'>Какое свойство используется для задания полей у блока?</p>
    <label><input name="s1" type="radio" value="a">direction</label>
    <label><input name="s1" type="radio" value="b">margin</label>
    <label><input name="s1" type="radio" value="c">padding</label>
	<label><input name="s1" type="radio" value="d">position</label><br>
</div><br>
<div>
    <p style='text-align:center;'>Есть такой код: ul li:first-letter {font-size: 200%;}. Что он делает?</p>
    <center>
	<label><input name="s2" type="radio" value="a">Делает первую букву у первого элемента в ненумерованном списке размером 200%</label><br>
    <label><input name="s2" type="radio" value="b">Ничего не делает, так как псевдоэлемента first-letter вообще не существует.</label><br>
    <label><input name="s2" type="radio" value="c">Делает первую букву у каждого элемента ненумерованного списка размером 200%</label><br>
	<label><input name="s2" type="radio" value="d">Делает первую букву у первого элемента в нумерованном списке размером 200%</label><br>
	</center>
</div><br>
<div>
    <p style='text-align:center;'>Василий обнаружил, что границы его страницы не примыкают к краям окна браузера. Он решил, что надо добавить свойство margin: 0; Но вот куда?</p>
    <label><input name="s3" type="radio" value="a">body</label> 
    <label><input name="s3" type="radio" value="b">head</label>
    <label><input name="s3" type="radio" value="c">doctype</label>
	<label><input name="s3" type="radio" value="d">html</label><br>
</div><br>
<button type="submit" name='s' class='back'>Результат</button>
</form>
</p><br>	

<!--3 часть-->
<h4>Основы JS</h4><p>
JavaScript – это язык программирования, который добавляет интерактивность на  веб-сайт (анимация, отклик на нажатие и ввод данных и т.д.).Это динамический язык,который применяется к html-документу.Его разработал сооснователь проекта Mozilla Brendan Eich.Вы сможете создавать игры, анимированную 2D и 3D графику, полномасштабные приложения с базами данных и многое другое!<br><br>
<i>Дополнительные функции JavaScript:</i><br>
1)Программные интерфейсы приложения (API), встроенные в браузеры.Они обеспечивают динамическое создание HTML и установку CSS стилей,манипулируют видеопотоком, работают с веб-камерой и т.д.<br>
2)Сторонние API,позволяющие использовать стороннюю функциональность других разработчиков<br>
3)Сторонние библиотеки<br><br>
<i>Пример "hello world"</i><br>
Вы можете написать в html-файле свой скрипт между тэгами script, либо написать скрипт в файле с расширением js, написав в тегах body путь к нему. Например,&lt;script src="scripts/main.js"&gt;&lt;/script&gt;.<br>Утверждение<br><pre>
var myHeading = document.querySelector('h1');
myHeading.textContent = 'Hello world!';</pre></p><p>обозначает замену заголовка текста на "Hello world!" с помощью JavaScript. Это произошло с помощью вызова функции querySelector(). так, ссылка на заголовок сохранилась в переменной, названной myHeading. После этого значение переменной myHeading установилось в textContent свойство (контент заголовка) "Hello world!".<br><br>
<i>Переменные</i><br>
Переменные — это контейнеры, внутри которых вы можете хранить значения. Объявляется с помощью ключевого слова var или let, за которым следует любое имя, которым вы захотите её назвать.<br><br>
<i>Примечание:</i>Точка с запятой в конце строки указывает, где заканчивается оператор. Необходимо разделять операторы, находящиеся на одной строке.<br><br>
<i>Примечание:</i>Есть ограничения на имя переменной.Сюда относятся нижнее подчеркивание, начало имени с цифр и т.д.<br>
После объявления, переменной можно присвоить значение:<br><pre>
myVariable = 'Bob';
</pre></p><p>Значение переменной можно получить, если вызвать ее по имени:<br><pre>
myVariable;</pre></p><p>
После установки значения переменной можно также изменить ее:<br><pre>
var myVariable = 'Bob';
myVariable = 'Steve';</pre></p><p>

Типы переменных:<br>
1. string - последовательность символов (строка).Обозначается в кавычках(одинарные или двойные)<br>
2. number - числовые значения<br>
3. boolean-логические значения(true/false - правда/ложь)<br>
4. array - хранит в себе несколько значений, разделенных запятой. Каждое имеет свой индекс(номер). Отчет начинается с 0.Заключается в квадратные скобки.<br>
5. object - на него имеется ссылка, которую может хранить другой объект (если говорим о JS). <br><br>

<i>Комментарии</i><br>
Комментарии-это короткие фрагменты текста, игнорирующиеся браузером.Обозначаются внутри /**/.Если вы не используете перенос строк, то легче поставить две косые черты //.<br><br>
<i>Операторы</i><br>
Оператор — это математический символ, который производит результат, основанный на двух переменных.<br>Примеры операторов:<br>
1. конкатенация - сложение двух переменных с типом данных number.В случае типа данных string - склеивание(+).<br>
2. вычитание, умножение и деление - арифметические операции(-,*,/).<br>
3 присваивание - используется когда в переменную записываются значения(=).<br>
4. равенство - позволяет проверить равны ли значения между собой(===). Возвращает true/false.<br>
и т.д.<br>
<br>
<i>Условия</i><br>
Условия — это конструкции в коде, которые позволяют проверить истинность или ложность выражения и выполнить другой код в зависимости от результата.Самая распространённая форма условия — инструкция if ... else. Например:<br><pre>
var iceCream = 'chocolate';if (iceCream === 'chocolate') {
  alert('Yay, I love chocolate ice cream!');} else {
  alert('Awwww, but chocolate is my favorite...');}
</pre></p><p>
Выражение внутри if ( ... ) — это проверка, сравнивающая переменную iceCream со строкой chocolate для того, чтобы подтвердить или опровергнуть равенство. Если это сравнение возвращает true, выполнится первый блок кода. Если нет, этот код пропустится и выполнится второй блок кода, после инструкции else.<br><br>
<i>Функции</i><br>
Функции - способ визуализации функциональности.Полезный инструмент в случае необходимости повторения какого-либо программного кода.<pre>
var myVariable = document.querySelector('h1');
alert('hello!');
document.querySelector и alert уже встроены в браузер.</pre></p><p>
Функции содержат скобки, часто принимают аргументы — биты данных, которые им необходимы для выполнения своей работы. Они находятся в скобках, и разделяются запятыми, если присутствует более одного аргумента.<br>
Вы можете определять собственные функции. Например,функция принимает два числа в качестве аргументов и умножает их:<br><pre>
function multiply(num1,num2) {
  var result = num1 * num2;
  return result;}
</pre></p><p>
<i>Примечание:</i>Инструкция return сообщает браузеру, что нужно вернуть переменную result из функции.Это необходимо, т.к переменные, определенные внутри функций, доступны только внутри самих функций (область видимости переменных).<br><br>
<i>События</i><br>
Для создания действительной интерактивности на веб-сайте вам необходимы события. События — это структура, которая следит за тем, что происходит в браузере, а затем позволяет запустить код в ответ на это. Она создает действительную интерактивность на веб-сайте.Например,событие клика, на которое браузер отзывается:<br><pre>
document.querySelector('html').onclick = function() {
    alert('Ouch! Stop poking me!');}
</pre></p><p>
Здесь выбирается &lt;html&gt; элемент и ему устанавливается обработчик свойства.Она содержит код, который нужно запустить для события клика.<br>
С помощью JS можно добавлять приветственное сообщение, когда определенный пользователь входит на сайт, изменять изображение на другое и т.д.<br>
По <a href="https://www.wm-school.ru/editor/tryh1.html" target="_blank" style='color:#000000'>ссылке</a> вы сможете потренироваться на визуализаторе HTML<br><br>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b>
<form action="result_python.php" method="POST">
<div>
    <p style='text-align:center;'>Что делает функция printMessage("Text")?</p>
    <label><input name="g1" type="radio" value="a">Функция printMessage() вообще не существует.</label><br>
    <label><input name="g1" type="radio" value="b">Выводит окно с текстом "Text".</label><br>
    <label><input name="g1" type="radio" value="c">Выводит окно с текстом Text.</label><br>
	<label><input name="g1" type="radio" value="d">Ошибка, поскольку в функции printMessage() 2 параметра.</label><br>
</div><br>
<div>
    <p style='text-align:center;'>Какой из вариантов объявления функции правильный: var func = function() {}; или function func() {}</p>
    <label><input name="g2" type="radio" value="a">var func = function() {};</label> 
    <label><input name="g2" type="radio" value="b">Оба варианта правильные.</label>
    <label><input name="g2" type="radio" value="c">function func() {}</label>
	<label><input name="g2" type="radio" value="d">Оба варианта неправильные.</label>
</div><br>
<div>
    <p style='text-align:center;'>Константин написал следующий код:<pre>&lt;script type="text/javascript"&gt;
  var a = 1;
  function func() {
    a = 10;
  }
  func();
  alert(a);
&lt;/script&gt;</pre></p>
<p style='text-align:center'>Что выведет программа?</p>
    <label><input name="g3" type="radio" value="a">10</label><br>
    <label><input name="g3" type="radio" value="b">Ошибка, поскольку в коде идёт попытка 2 раза объявить переменную с одинаковым именем</label><br>
    <label><input name="g3" type="radio" value="c">0</label><br>
	<label><input name="g3" type="radio" value="d">1</label><br>
</div><br>
<button type="submit" name='g' class='back'>Результат</button>
</form>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href='пакет_услуг.php'>Записаться</a>
<a class="back" onclick="javascript:history.back(); return false;">Назад</a></div><br>