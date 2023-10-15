<?php
session_start();
$_SESSION['access'] = TRUE;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Введение-Python</title>
		<style>
					html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}
.b
{
	background: #ffdca3;
	width: 60%;
	height: 90%;
    box-shadow: 3px 3px 5px #1b1b1ba;
	border-radius:10px;
	margin: 3% auto;
}
.b p
{
	text-align: justify;
	font-size:20px;
	font-family:'Gill Sans', sans-serif;
	letter-spacing: 3px;
	color:#0a0a0a;
	padding:10px;
}
h1
{
	text-align: center;
	font-family:'Bookman', URW Bookman L, serif;
	font-weight:30px;
	color:#000000;
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
		</style>
	</head>
	<body>
		<div class='b'>
		<h1>Основы Python</h1><p>
Чтобы компьютер "понимал" и "воспринимал" наборы команд их переводят на язык машинных команд.Например,строка «Hello, world!» будет выглядеть так: BB 11 01 B9 0D 00 B4 0E 8A 07 43 CD 10 E2 F9 CD 20 48 65 6C 6C 6F 2C 20 77 6F 72 6C 64 21. У разных языков программирования есть свои достоинства и недостатки. Python считается простым языком.В 1991 году программист из Нидерландов Гвидо ван Россум разработал 1 версию python.Сейчас вышло более 8 версий.язык применяется во многих сферах, например, веб-разработка, анализ данных и машинное обучение и др.<br><br>
<i>Преимущества:</i><br>&#10003;простота синтаксиса и команд<br>&#10003;большое количество библиотек, которые содержат уже написанный программный код для решения задач<br>&#10003;широкий спектр применения (например,анализ большого количества данных,нахождение корреляции между ними и т.д.)<br><br>
<i>Есть 2 группы языков:</i> компилируемые и интерпретируемые. Компилируемые - это языки, программы которых преобразуются в машинный код, они исполняемые.Интерпретируемые - это языки,для запуска программ которых требуется специальная программа — интерпретатор.От операционной системы (ОС) зависит тип скачиваемого интерпретатора. <br><br><i>Рекомендации:</i><br>интерпретатор лучше установить в папку, в пути к которой будут только символы английского алфавита.Установка флажка «Add to PATH» позволит обращаться к интерпретатору и установщику библиотек из любой папки системы.<br>
Вы можете писать программы где угодно, но файл с программой должен сохраняться как текст,а у файла было расширение .py. После из командной строки можно запустить сам файл, прописав python "имя_файла". Лучше писать код в специальных интегрированных сред разработки.Например,Visual Studio Code или Pycharm. Чтобы их использовать нужно скачать или выбрать готовый дистрибутив для ОС с сайта. 
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href='python_баз.констр.php'>Следующий подраздел (второй)</a>
<a class="back" onclick="javascript:history.back(); return false;">Назад</a></div>

		</p></div>
	</body>
</html>