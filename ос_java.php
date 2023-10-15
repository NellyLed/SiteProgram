
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
		<h1>Основы Java</h1><p>
		<i>История языка и предпосылки к лидерству</i><br>
Языку более 25 лет. Было написано множество приложений и библиотек, сформировано много комьюнити программистов.Данный язык весьма надежный, если вы допустите ошибку в строчке, то ее можно сразу заметить. Также имеются более удобные механизмы работы с многопоточностью, статическая типизация,развитая система исключений, увеличивающая надежность кода.<br>
 Компилятор создает на основе исходного кода байт-код, который с помощью  приложения – JAVA машины исполнялся на компьютере. Так программист мог запустить один и тот же код под разными операционными системами.<br>
Каждая новая версия Java позволяет оптимизировать код быстрее.Недавно java перешла на новый релизный цикл – каждая новая версия выходит через полгода. Это позволяет практически полностью сократить отставание языка от других языков.<br><br>
<i>Объекты и методы в java</i><br>
В java все является объектом-некоторой сущностью, в которой описано ее состояние  поведение с помощью переменных и функций соответственно. В объектно-ориентированном программировании есть подход, называемой абстракцией.Это когда мы используем пару параметров из большинства возможных.Пример кода в файле Car.java:<br> <pre> public class Car {
   int speed;
   int maxSpeed;
  
   void start(){}
   void stop(){}
}
</pre></p><p>
В данном классе имеются 2 переменные состояния  speed и maxSpeed и две функции, которые описывают поведение объекта. Для запуска кода нужно в консоли прописать: <br><pre>
   javac Car.java
java Car
    </pre></p><p>Чтобы что-то вывелось нужно прописать логику в код:<br><pre>
        public static void main(String[] args) {
   System.out.println("Hello");
}
    </pre></p><p>
Ключевое слово public – модификатор доступа. Оно определяет уровень доступности этого класса/метода/переменной из других частей программы.<br><br>
<i>Примечание:</i>Имя файла должно совпадать с именем класса, включая регистр, и иметь расширение .java. Ключевое слово static, говорит компилятору о том, что данный метод/переменная принадлежит  классу, а не конкретному объекту.<br><br>
<i>Пакеты в java</i><br>
Часто классы называют одинаково,поэтому проще их раскидывать по папкам во избежания конфликта имен.Стоит отметить, что часто в программах классы называют одинаково, поэтому была предложена идея их раскладывать по папкам, чтобы не было конфликта имен. Папка, в которой находится класс указывается в самом верху файла.Например:<pre>package ru.proglib;</pre></p><p>
Через пакеты можно импортировать классы в свой код:<br><pre>
Import.java
        package ru.proglib;
import java.util.Random;  // импортируем описание класса из пакета java.util.public class Import {
   public static void main(String[] args) {
       var random = new Random();
       System.out.println(random.nextInt());  // выводим на экран случайное число
   }
 }
   </pre></p><p> 
Используется слово import, чтобы ввести определение класса Random. Через ключевое слово new создаем на основе класса объект random.У объекта вызываем метод nextInt, в котором объект возвращает из метода натуральное число, которое произвольно каким-то образом у себя генерирует. В результате вызова этого метода мы получим какое-то целое число типа int. В объектно ориентированном программировании этот прием называется инкапсуляцией – когда объект внутри себя, основываясь на своем состоянии генерирует некий результат, при этом пользователь данного метода не знает как это работает.<br><br>
<i>Создание объектов</i><br>
<pre>Random random = new Random();</pre></p><p>
    
Здесь мы с помощью ключевого слова new создаем новый объект. Теперь имя random используется для обращения к этому объекту. <br><br>
<i>Примитивные типы в java</i><br>
1. boolean - принимает логическое значение(true/false)<br>
2. byte - число, занимающее 8 бит<br>
3. int - целое число, занимающее 32 бита<br>
4. float - число с плавающей запятой (128 бит)<br>
5. double - число с 2 знаками после запятой<br>
6. char - обозначает символ, занимающее 16 бит<br>
</p><p>
<i>Конструкторы объектов</i><br>
Чтобы поведение щависело от внутреннего состояния объекта, его нужно задать.<br><pre>
Car.java
        public class Car {
   int speed;
   int maxSpeed;

   public Car(int speed, int maxSpeed) {
       this.speed = speed;
       this.maxSpeed = maxSpeed;
       System.out.println("Объект готов");

   }

   void start() {
       System.out.println("Я начал ехать");
       System.out.println(speed);
   }

   void stop() {
       System.out.println("Я остановился");
       System.out.println(maxSpeed);
   }

   public static void main(String[] args) {
       var myCar = new Car(100, 500);
       myCar.start();
       myCar.stop();
   }
}
    </pre></p><p>Здесь был добавлен консруктор. Он инициализирует объект перед началом его пользования.<br><br>
<i>Условные выражения</i>
Перед наложением ограничений на переменную нужно провести проверку, используя условное выражение if:<br><pre>
       void setSpeed(int speed) {
   if (speed < maxSpeed) {
       this.speed = speed;
   }
   else {
       System.out.println("Вы передали слишком большую скорость");
   }
}
    </pre></p><p>
В круглых скобках помещено само условие, которое должно вернуть либо true либо false, а в фигурных  тот код, который будет выполнен если условие правдиво.Так же, если условие вернуло false, то с помощью ключевого слова else можно добавить блок кода.<br><br>

<i>Циклы</i><br>
Если необходимо повторить некоторую часть кода множество раз используются циклы.<br><pre>
        public static void main(String[] args) {
   var myCar = new Car(100, 500);
   var i = 0;
   while (i < 10){
       myCar.start();
       i++;
   }
}
    </pre></p><p>
Здесь создается переменная  i, изначально равная 0. В цикле у нас есть условие того, что она меньше 10, если это не так, то код в фигурных скобках выполняться не будет. Значение i увеличивается на единицу, чтобы цикл не выполнялся вечно. Запустите программу и посмотрите, что будет выведено на экран и сколько раз.<br>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b>
<form action="result_python.php" method="POST">
<div>
    <p style='text-align:center;'>Что такое ООП?</p>
    <label><input name="m1" type="radio" value="a">Объектно-ориентированное программирование — методология программирования, основанная на представлении программы в виде совокупности объектов, каждый из которых является экземпляром определенного класса, а классы образуют иерархию наследования.</label><br>
    <label><input name="m1" type="radio" value="b">Объектно-ориентированное программирование — так называют любой тип программирования, в котором используются понятия высокого уровня и, в отличие от Assembler, в котором не работают напрямую с ячейками памяти ПК.</label><br>
    <label><input name="m1" type="radio" value="c">Объектно-ориентированное программирование — просто красивое понятие. Если вдуматься, оно не несет дополнительной смысловой нагрузки, просто программисты любят аббревиатуры, так области их знаний выглядят сложнее.</label><br>
</div><br>
<div>
    <p style='text-align:center;'>Для чего используется оператор NEW?</p>
    <label><input name="m2" type="radio" value="a">Для создания новой переменной.</label> <br>
    <label><input name="m2" type="radio" value="b">Для объявления нового класса.</label><br>
    <label><input name="m2" type="radio" value="c">Для создания экземпляра класса.</label><br>
	<label><input name="m2" type="radio" value="d">Это антагонист оператора OLD.</label><br>
</div><br>
<div>
    <p style='text-align:center;'>Что такое класс в Java?</p>
    <label><input name="m3" type="radio" value="a">Уровень сложности программы. Все операторы делятся на классы в зависимости от сложности их использования.</label> <br>
    <label><input name="m3" type="radio" value="b">Базовый элемент объектно-ориентированного программирования в языке Java.</label><br>
    <label><input name="m3" type="radio" value="c">Просто одно из возможных названий переменной.</label><br>
	<label><input name="m3" type="radio" value="d">Такое понятие есть только в C++, в Java такого понятия нет.</label><br>
</div><br>
<button type="submit" name='m' class='back'>Результат</button>
</form>
</p>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href='пакет_услуг.php'>Записаться</a>
<a class="back" onclick="javascript:history.back(); return false;">Назад</a></div><br>