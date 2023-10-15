
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Базовые понятия программирования</title>

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
		<h1>Базовые понятия программирования</h1>
		<!--1 часть-->
		<h4>Набор инструментов для программирования с нуля:</h4><p>
&#10003;компьютер<br>
&#10003;интернет<br>
&#10003;редактор кода<br>
&#10003;компилятор или интерпретатор<br>
&#10003;наушники<br><br>
<i>Переменные</i><br>
Переменные — именованные области памяти для хранения данных. Есть две основные причины, по которым следует именовать данные:<br>
&#10003;не известно, что будет скрываться под переменной<br>
&#10003; сложно вспомнить, что значит та или иная переменная<br>
<i>Примечание:</i> В названиях переменных нельзя использовать апострофы.<br><br>
Чтобы переменная существовала, её нужно объявить и присвоить значение. <br>
<pre>int the_number_of_days_in_december = 31</pre></p><p>
Переменной также можно объявить целую строку или фрагмент текста:<br>
<pre>string great_song_lyrics = ‘pasito a pasito, suave suavecito’</pre></p><p>
<i>Массивы</i><br>
Массивы — списки похожих фрагментов данных. <br>
<pre>int a[16] = { 5, -12, -12, 9, 10, 0, -9, -12, -1, 23, 65, 64, 11, 43, 39, -15 };</pre></p><p>
Для массивов принято использовать [квадратные скобки]. Счёт массивов начинается с нуля, а не с единицы.<br>
Если вы хотите обратиться к какому-то отдельному элементу, то можно сделать следующее:<br>
<pre>a[0]
a[1]
a[2]</pre></p><p>
Внутри квадратных скобок-индекс элемента, к которому хотим обратиться.Каждое из приведённых выше выражений — переменная.<br>
<pre>b[2] = 'I regret literally everything I have ever said'</pre></p><p>
Массивы могут содержать текст, числа, даты, объекты и даже другие массивы. Массивы также могут быть свойствами объектов.<br><br>
<i>Функции</i><br>
Функция — это фрагмент кода, который что-то выполняет и имеет имя. Функции можно легко объявлять:
	int Sum(int a, int b) { 
	return a + b;
	}

Объявление функции начинается с типа данных,затем ей даётся имя. return заставляет значение «выпрыгивать» из функции. Затем функция завершается.Она может возвращать число, дату, строку, объект, массив, другую функцию, массив функций и т. д.<br><br>
Часть данных, которую мы добавляем в функции, называется аргументом. Объявление функции, которая может ожидать аргументы, выглядит так:<br><pre>
void f(int x, int y) {
}
int main() {
	int a, b;
	// какая-то инициализация a и b
	
	f(a, b);
	}
	
</pre></p><p>
<i>Циклы</i><br>
Иногда при работе с массивом может понадобиться выполнить какой-то блок кода несколько раз подряд. В таких случаях следует использовать циклы.Выделяют циклы for,while,do while.Например:<br>
<pre>
int i; 
int sum = 0;
for (i = 1; i <= 1000; i++) 
 { sum = sum + i; }
</pre></p><p>
<i>Комментирование кода</i><br>
Не всегда бывает понятно, что выполняет тот или иной код. Поэтому всегда следует комментировать его. В C++ комментарии начинаются с //:<pre>
int age = 21{
// переменная равна 21.
// Если она не равна 21, пожалуйста, измените на 21.
// Что сделать: добавить больше переменных.
}
</pre></p><p>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href='пакет_услуг.php'>Записаться</a>
<a class="back" onclick="javascript:history.back(); return false;">Назад</a></div><br>

  </body>
  </html>