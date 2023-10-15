
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Базовые конструкции-Python</title>
		<link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
		<!--для терминала
		 <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
  <script defer src="https://pyscript.net/alpha/pyscript.js"></script>-->
 
 <py-env>
    - matplotlib
    - numpy
  </py-env>
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
		<h1>Базовые конструкции Python</h1>
		<!--1 часть-->
		<h4>Ввод и вывод данных. Операции с числами, строками. Форматирование</h4><p>
	 В данном курсе программы будут принимать на вход данные от пользователя с клавиатуры, а выводить результат будут на экран. Всё взаимодействие с программой будет происходить в командной строке (консоль,терминал). В Python есть популярная команда:<br><br><pre>print("Привет, мир!"), т.е встроенная функция - print().</pre></p><p><br>К ней можно обратиться, она принимает данные и обрабатывает их. С ее помощью можно выводить несколько значений.Есть некоторые требования к строковым переменным. Строки должны быть заключены в кавычки. Можно использовать одинарные, двойные и тройные.Внутри кавычек одного вида можно использовать другой вид кавычек.<br><br>
Самый частый способ поступления данных - через клавиатуру (функция input()).Она возвращает в программу введённую пользователем строку. Сохранить данные помогают переменные. Переменным назначаются имена, в них записываются значения.<br><br>

<i>Примечание</i>:У функции input() можно задать параметр-строку перед вводом значения,чтобы указанный текст сопровождал приглашение к вводу данных:<br><br><pre>phrase = input("Введите строку: ")print(phrase)</pre></p><p><br>
Существуют определенные требования к оформлению кода и ввода переменных. Например,имена переменных должны содержать маленькие буквы английского алфавита и символ «подчёркивание» для разделения слов в имени. В имени не должно быть букв I и l(большая i и маленькая L из-за схожести между собой).
Форматирования строк можно достичь, используя  f-строки. Буква f ставится перед открывающей кавычкой строки. Далее f-строка записывается как единое целое и закрывается соответствующей кавычкой:<br><br>
<pre>name = "Пользователь"print(f"Добрый день, {name}.")</pre></p><br>
<p>Внутри f-строк можно обращаться к переменным, используя фигурные скобки, производить операции, выполнять функции и подставлять их результаты в данную строку. Существует и функция format(). Она производиться с помощью символа %. Однако данный способ форматирования является устаревшим.<br><br>
<i>Существует ряд управляющих символов, начинающихся со знака /:</i><br>
&#10003;\n — переход на новую строку<br>
&#10003;\t — табуляция<br>
&#10003;\r — возврат каретки в начало строки<br>
&#10003;\b — возврат каретки на один символ<br><br>
<i>Над строками можно производить следующие операции:</i><br>
&#10003;сложение (конкатенация строк)<br>
&#10003;умножение строки на целое число.<br><br>
Результатом сложения строк будет новая строка, представляющая собой записанные последовательно складываемые строки:<br><br><pre>
print("Сложно" + "подчинённый")
Сложноподчинённый</pre></p><p><br>
При умножении строки на целое число n получается новая строка, состоящая из n дублирований исходной строки. <br><br><pre>
print("-" * 10)</pre></p><p><br>
Для создания целочисленной переменной в программе достаточно назначить ей имя и присвоить целочисленное значение. Например:<br><br><pre>
n = 10</pre></p><p><br>
По аналогии создаются вещественные числовые переменные, только в качестве разделителя целой и дробной частей используется десятичный разделитель «точка».Например:<br><br><pre>
pi = 3.14</pre></p><p><br>
<i>Для преобразования строк в числа и наоборот используются следующие функции:</i><br>
&#10003;int() — преобразует строку (или вещественное число) в целое число. По умолчанию используется десятичная система. При конвертации вещественного числа в целое отбрасывается дробная часть<br>
&#10003;float() — преобразует строку (или целое число) в вещественное число<br>
&#10003;str() — преобразует значения (в общем случае не только числовые) в строки<br><br>
<i>Пример применения этих функций:</i><br><pre>n_1 = "1"
n_2 = "2"print(n_1 + n_2)
n_1 = int(n_1)
n_2 = int(n_2)print(n_1 + n_2)</pre></p><p>
В результате выполнения программы получим:<br><pre>
12
3</pre></p><p><br>
Первый результат — результат сложения (конкатенации) двух строк. Второй — результат сложения целых чисел, которые были преобразованы из строк функцией int().<br><br>
<i>Для работы с числовыми переменными доступны следующие математические операции:</i><br>
&#10003;сложение — x + y<br>
&#10003;вычитание — x - y<br>
&#10003;умножение — x * y<br>
&#10003;деление — x / y<br>
&#10003;возведение в степень x ** y<br><br>
<i>Примечание:</i>Если выполняется операция деления или хотя бы один из операндов является вещественным числом, то результат также будет вещественным.<br><br>
<i>Для целых чисел дополнительно доступны операции:</i>
&#10003;целочисленное деление — x // y<br>
&#10003;остаток от деления — x % y<br>
Эти операции можно использовать, например, для получения определённых цифр числа.<br>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b><br>

<h5>1-Осуществите произведение двух введенных чисел, расположенных в коде<h5>
<py-repl>
import matplotlib.pyplot as plt
import numpy as np 
a = int(input('Введите число: '))
b = int(input('Введите число: '))
print(a * b)
  </py-repl><br>
<h5>2-Осуществите приветствие пользователя по его имени<h5><br>
<py-repl>
import matplotlib.pyplot as plt
import numpy as np
#firstname = input('Введите свое имя: ') 
#lastname = input('Введите свою фамилию: ')
#print('Здравствуйте, ' + firstname + ' ' + lastname) 
</py-repl><br>
<h5>3-Осуществите получение остатка от деления<h5><br>
<py-repl>
import matplotlib.pyplot as plt
import numpy as np 
#по примеру 
#print(10 % 2)
</py-repl><br>
<h5>4-Осуществите получение целой части от деления<h5><br>
<py-repl>
import matplotlib.pyplot as plt
import numpy as np 
#по примеру 
#print(10 // 2)
</py-repl><br>
</p>


<!--2 часть-->
<h4>Условный оператор</h4>
<p>
Условный оператор нужен в тех случаях, когда нужно, чтобы код выполнялся при определенных условиях. Пример:вводится 2 целых числа:температура на улице вчера и сегодня, программа отвечает — сегодня теплее, холоднее или же температура не изменилась:
<br><br><pre>
yesterday_temp = int(input())
today_temp = int(input())if today_temp > yesterday_temp:
    print("Сегодня теплее, чем вчера.")elif today_temp 
	< yesterday_temp:
    print("Сегодня холоднее, чем вчера.")else:
    print("Сегодня такая же температура, как вчера.")
	</pre></p><p>
Оператор if-начало условной конструкции. Далее идёт условие, которое возвращает логическое значение True (истина) или False (ложь). Завершается условие символом «двоеточие». Затем — обязательный отступ в четыре пробела, он показывает, что строки объединяются в один блок.<br><br>
Тело условной конструкции может содержать одно или несколько выражений (строк). По завершении тела может идти условие, начинающееся с оператора elif.Оно проверяется только в случае, если предыдущее условие не было истинным.<br><br>
Последним идёт оператор else, который не содержит условия, а выполняется, только если ни одно из предыдущих условий в if и elif не выполнилось. Этот оператор не обязательный. <br><br>
<i>В качестве условия может выступать результат операции сравнения:</i><br>
&#10003;> (больше)<br>
&#10003;>= (больше или равно)<br>
&#10003;< (меньше)<br>
&#10003;<= (меньше или равно)<br>
&#10003;== (равно)<br>
&#10003;!= (не равно)<br><br>
<i>Для записи сложных условий можно применять логические операции:</i><br>
&#10003;and — логическое «И» для двух условий. Возвращает True, если оба условия истинны, иначе возвращает False<br>
&#10003;or — логическое «ИЛИ» для двух условий. Возвращает False, если оба условия ложны, иначе возвращает True<br>
&#10003;not — логическое «НЕ» для одного условия. Возвращает False для истинного условия, и наоборот<br><br>
Пример:<pre>if 0 <= x < 100:</pre></p><p><br>
Строки также можно сравнивать между собой с помощью операций >, < и т. д. В отличие от чисел, строки сравниваются посимвольно в соответствии с кодами символов в таблице кодировки (например, UTF-8).
Компьютер изначально работает только с двоичными числами.Для работы с символами им назначаются коды — числа, а сами таблицы соответствия символов и кодов называются таблицами кодировки. <br><br>
Чтобы получить символ по его коду, необходимо вызвать встроенную функцию chr() с соответствующим кодом:<br><pre>
print(chr(116), chr(119))</pre></p><p><br>
В результате увидим:
t w<br><br>
В таблице кодировки большие и маленькие буквы из разных диапазонов. Поэтому для корректного сравнения строки должны быть в одном регистре.<br>
Для проверки условия наличия подстроки в строке используется оператор in. Например, проверить, встречается ли во введённой строке  корень «добр»<br><pre><br>
text = input()if "добр" in text:
    print("Встретилось 'доброе' слово.")else:
    print("Добрых слов не найдено.")</pre></p><p><br>
В Python версии 3.10 появился оператор match. Он последовательно сравнивает значение выражения с заранее заданными в операторах case. Выполняет код в операторе case, значение в котором соответствует проверяемому. Надо написать программу, сравнивающая значение текущего сигнала светофора с одним из трёх вариантов (красный, жёлтый или зелёный).<br><pre><br>
color = input()
match color:
    case 'красный' | 'жёлтый':
        print('Стоп.')
    case 'зелёный':
        print('Можно ехать.')
    case _:
        print('Некорректное значение.')</pre></p><p><br>
<i>Примечание:</i>для проверки выполнения условия «ИЛИ» в операторе case не используется логическая операция or, т.к в перечислении строк она не нужна, а только в данных логического типа.<br>
Последний оператор case сработает в случае, если ни одно из предыдущих условий не сработало.<br><br>
<i>Есть еще полезные встроенные функции:</i><br>
&#10003;Для определения длины строки - функция len().<br>
&#10003;Для определения максимального и минимального из нескольких значений-функции max() и min() соответственно.<br>
&#10003;Функция abs() используется для определения модуля числа.<br><br>Пример:<pre>
print(max(12, 19, 25))
print(min(line_1, line_2, line_3))
print(len(str(2 ** 2022)))</pre></p><p>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b><br>
<form action="result_python.php" method="POST">
<div>
    <center><pre>
	if 10 > 2:
		print(1)
	else:
		0
	</pre>
	</center><br>
    <label><input name="q1" type="radio" value="a">1</label>
    <label><input name="q1" type="radio" value="b">0</label>
    <label><input name="q1" type="radio" value="c">ошибку</label>
	<label><input name="q1" type="radio" value="d">ничего</label><br>
</div>
<div>
    <center><pre>
	if 0:
		print(0)
	elif 1:
		print(1)
	else:
		print(2)
	</pre></center><br>
    <label><input name="q2" type="radio" value="a">2</label> 
    <label><input name="q2" type="radio" value="b">1</label>
    <label><input name="q2" type="radio" value="c">0</label>
	<label><input name="q2" type="radio" value="d">ошибку</label><br>
</div>
<div>
    <center><pre>
	if bool("False") == bool("True"):
		print(bool("False"))
	else:
		print(0)
	</pre></center><br>
    <label><input name="q3" type="radio" value="a">true</label> 
    <label><input name="q3" type="radio" value="b">false</label>
    <label><input name="q3" type="radio" value="c">0</label>
	<label><input name="q3" type="radio" value="d">ошибку</label><br>
</div><br>
<button type="submit" name='q' class='back'>Результат</button>
</form>
</p><br>
<!--3 часть-->
<h4>Циклы</h4>
<p>
	Чтобы выполнять одни и те же действия многократно используются циклы. Например, в слчае проверки пароля.<br><pre><br>
saved_pwd = "right_password"
pwd = input("Введите пароль для входа: ")
while pwd != saved_pwd:
    pwd = input("Введите пароль для входа: ")
	print("Пароль верный. Вход разрешён.")
</pre></p><p><br>
<i>Цикл while:</i><br>
Здесь используется условие для проверки продолжения цикла. Пока выполняется условие, цикл продолжает работать. Условие необходимо для того, чтобы цикл не был бесконечным. Тело цикла — это код, который будет выполняться многократно.По синтаксису языка Python тело цикла записывается с отступом в четыре пробела, без табуляции.<br>
Цикл while обычно применяется в тех случаях, когда заранее не известно, сколько итераций будет выполнено, но известно условие, при котором цикл продолжает работу.<br>
Каждый повтор, или шаг, цикла называется итерацией. Как только условие продолжения нарушено, цикл останавливается и программа продолжает работу со следующей за циклом строчки.<br><br>
<i>Пример:</i><br><pre><br>saved_pwd = "right_password
"while input("Введите пароль для входа: ") != 
saved_pwd: passprint("Пароль верный. Вход разрешён.")</pre></p><p><br>
<i>Моржовый оператор(:=):</i><br>
Позволяет одновременно вычислить выражение, присвоить результат переменной и вернуть это значение, например в условие.Пример (программа, которая будет здороваться со всеми людьми, чьи имена введёт пользователь. Сигнал для остановки — ввод строки «СТОП»):<br><pre><br>
while (name := input("Введите имя: ")) != "СТОП":
    print(f"Привет, {name}!")
	print("Программа завершена.")</pre></p><p><br>
<i>Цикл for</i>:<br>
Применяется совместно с итерируемой переменной и тогда, когда количество итераций известно. Значений переменной изменяется на каждой итерации в соответствии с диапазоном, заданным функцией range().
Функция range() может принимать от одного до трёх целочисленных аргументов:<br>
&#10003;range(n) — возвращает диапазон целых чисел от 0 до n - 1. Например, range(4) вернёт диапазон целых чисел: 0, 1, 2, 3<br>
&#10003;range(k, n) — возвращает диапазон целых чисел от k до n - 1. Например, range(1, 5) вернёт диапазон целых чисел: 1, 2, 3, 4<br>
&#10003;range(k, n, s) — возвращает диапазон целых чисел от k до n - 1 с шагом s. Например, range(1, 10, 2) вернёт диапазон целых чисел: 1, 3, 5, 7, 9<br>
<i>Пример:</i>вывод на экран целых чётных чисел в диапазоне от 0 до n:<br><pre><br>
n = int(input("Введите конец диапазона: "))
for i in range(0, n + 1, 2):
    print(i)</pre></p><p><br>
<i>Результат:</i><br>
Введите конец диапазона: 5<br>
0<br>
2<br>
4<br>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b><br>
<form action="result_python.php" method="POST">
<div>
    <p style='text-align:center;'>Что такое итерация?</p>
    <label><input name="p1" type="radio" value="a">Однократное выполнение какого либо действия.</label><br>
    <label><input name="p1" type="radio" value="b">Такого понятия не существует.</label><br>
    <label><input name="p1" type="radio" value="c">Организация обработки данных, при которой действия повторяются многократно.</label><br>
	<label><input name="p1" type="radio" value="d">Второе название переменной.</label><br>
</div><br>
<div>
    <p style='text-align:center;'>Какие операторы итерации существуют? (возможно несколько вариантов ответа)</p>
    <label><input name="p2" type="radio" value="a">for и while</label> 
    <label><input name="p2" type="radio" value="b">from</label>
    <label><input name="p2" type="radio" value="c">def</label>
</div><br>
<div>
    <p style='text-align:center;'>Выберите правильный синтаксис</p>
    <label><input name="p3" type="radio" value="a">for i in list:</label> 
    <label><input name="p3" type="radio" value="b">from i in list:</label>
    <label><input name="p3" type="radio" value="c">for i in list</label>
	<label><input name="p3" type="radio" value="d">i in for list:</label><br>
</div><br>
<button type="submit" name='p' class='back'>Результат</button>
</form>
</p><br>

<!--4 часть-->
<h4> Вложенные циклы</h4>
<p>
Есть такие задачи, в которых требуется использовать цикл внутри другого цикла. Такие циклы называют вложенными.Пример (генерация всех возможных комбинаций строчных букв английского алфавита длиной в 2 символа):<br><pre><br>
for i in range(26):
    for j in range(26):
        print(f"{chr(ord('a') + i)}{chr(ord('a') + j)}")</pre></p><p><br>
<i>Суть:</i>В начале программы запускается внешний цикл,он отвечает за генерацию первой букв, где i —  смещение в алфавите относительно начальной буквы.Внутренний цикл генерирует вторую букву и изменяет значение j - смещение 2 буквы.Процесс закончится тогда, когда завершится внешний цикл.  Функция ord() возвращает код начальной буквы алфавита («a»), к нему прибавляется текущее смещение от i и j. Для полученных кодов функция chr() возвращает буквы<br><br>
<i>Примечание</i>:Общее число итераций это произведение вложенных и внутренних циклов.<br>
Циклы for и while можно останавливать при наступлении определённого условия с помощью оператора break.Пример:<br><pre><br>password = "right_password"while True:
    if input("Введите пароль: ") == password:
        print("Пароль принимается")
        break</pre></p><p><br>
<i>Примечание:</i>Не стоит часто использовать оператор  break, т.к будет сложно сказать, где будет точка выхода из цикла для разных входных данных. <br>
При использовании оператора break во вложенных циклах он останавливает только тот цикл, в котором непосредственно вызывается. <br><br>
<i>Примечание:</i>во вложенных циклах может использоваться переменная-флаг flag логического (булева) типа. Она нужна для сигнала, что требуется остановить внешний цикл, так как break во внутреннем цикле остановит только внутренний цикл.Обычно флаг устанавливают в начальное значение False (флаг опущен), а при выполнении какого-то условия в программе флаг устанавливают в значение True (флаг поднят). <br><br>
В циклах for и while можно останавливать текущую итерацию и переходить к следующей через оператор continue. Он действует только на тот цикл, в котором находится.Пример:<br><pre><br>
for i in range(26):
    for j in range(26):
        if i == j:
            continue
        print(f"{chr(ord('a') + i)}
		{chr(ord('a') + j)}")</pre></p><p><br>
Оператор break влияет на поведение оператора else в циклах. Если в цикле сработал оператор break, то цикл сразу завершается, а код в операторе else выполняться не будет. Пример:<br><pre><br>
while (text := input("Введите строку (СТОП для остановки): "))
!= "СТОП":
    if text == "ignore_else":
        breakelse:
    print("Цикл завершён")</pre></p><p><br>
Если вводится «СТОП», цикл попадёт в блок else, и появляется строка «Цикл завершён». А при вводе "ignore_else" сработает оператор break, и цикл завершится, не выполняя код в else.<br>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b><br>
<h5>1-Допишите базовый пример вложенных циклов(2 строчки)<h5><br>

<py-repl>
import matplotlib.pyplot as plt
import numpy as np
x = [1, 2]
y = [4, 5]
for i in x:
  </py-repl><br>
 <h5>2-Допишите печать таблицы умножения с использованием вложенных циклов for(1 строчка)<h5><br>
 <py-repl>
for i in range(2, 4):
    for j in range(1, 11):
        print(i, "*", j, "=", i*j)
</py-repl>
</p>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href='пакет_услуг.php'>Записаться</a>
<a class="back" onclick="javascript:history.back(); return false;">Назад</a></div><br>

	
	
	</div>
	<script defer src="https://pyscript.net/alpha/pyscript.js"></script>
	</body>
</html>