
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Основы тестирования</title>

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
		<h1>Основы тестирования</h1>
		<!--1 часть-->
		<h4>Цель тестирования</h4><p>
		<i>Тестирование программного обеспечения</i> — проверка соответствия реальных и ожидаемых результатов в поведении программы, проводимая с помощью выбранных наборов тестов.<br>
		<i>Цель тестирования</i> — проверка соответствия ПО предъявляемым требованиям, обеспечение уверенности в качестве ПО, поиск очевидных ошибок в программном обеспечении до их обнаружения пользователями.<br><br>
</p>
<!--2 часть-->
<h4>Принципы тестирования</h4><p>
1)<i>Тестирование позволяет выявить дефекты.</i>Тестирование снижает вероятность наличия дефектов, но не гарантирует их отсутствия.<br>
2)<i>Исчерпывающее тестирование невозможно.</i>Полное тестирование с использованием всех входных комбинаций данных, результатов и предусловий физически невыполнимо.<br>
3)<i>Раннее тестирование</i>.Следует начинать тестирование на ранних стадиях жизненного цикла, чтобы в последствии разбираться с меньшим количеством ошибок.<br>
4)<i>Скопление дефектов</i>.Большая часть дефектов ограничены модулями.<br>

5)<i>Парадокс пестицида</i>. С каждым новым повтором одного и того же сценария сокращается способность «находить» новые дефекты.<br>
6)<i>Тестирование зависит от контекста.</i>Например, программное обеспечение с большим уклоном к сохранению безопасности тестируется иначе, чем новостной портал.<br>
7)<i>Заблуждение об отсутствии ошибок.</i>Отсутствие найденных дефектов при тестировании не гарантирует готовность продукта к релизу. <br> <br>
</p>

<!--3 часть-->
<h4>Этапы тестирования</h4><p>
1)Анализ продукта <br>
2)Работа с требованиями <br>
3)Разработка стратегии тестирования и планирование процедур контроля качества <br>
4)Создание тестовой документации <br>
5)Тестирование прототипа <br>
6)Основное тестирование <br>
7)Стабилизация <br>
8)Эксплуатация <br>

<i>Стадии разработки ПО </i>— этапы, которые проходят команды разработчиков ПО, прежде чем программа станет доступной пользователям.<br>

<i>Стадии программного продукта:</i> <br>
1)анализ требований к проекту <br>
2)проектирование <br>
3)реализация <br>
4)тестирование продукта <br>
5)внедрение и поддержка <br> <br>
</p>
<!--4 часть-->
<h4>Обязанности тестировщика</h4><p>
1)контроль качества разрабатываемых продуктов<br>
2)выявление и анализ ошибок, возникающих при работе с ПО<br>
3)разработка тестов, тест-кейсов<br>
4)тестирование<br>
5)анализ результатов тестирования<br>
6)классификация ошибок<br>
7)сопровождение процесса ликвидации найденной ошибки<br>
8)документирование всего процесса<br><br>		
</p>

<!--5 часть-->
<h4>Тестовые среды</h4><p>
1)<i>Среда разработки</i>.За нее отвечают разработчики.Здесьпишут код, проводят отладку, исправляют ошибки.<br>
2)<i>Среда тестирования </i>.Здесь разработчики проверяют функционал, проводят smoke и регрессионные тесты, воспроизводят.<br>
3)<i>Интеграционная среда </i>.Здесь проводят тестирование взаимодействующих друг с другом модулей, систем, продуктов.<br>
4)<i>Предпрод </i>. Здесь проводится заключительное тестирование функционала.<br>
5)<i>Продакшн среда</i>.Здесь работают пользователи.<br><br>
</p>

<!--6 часть-->
<h4>Основные виды тестирования ПО</h4><p>
<i>Вид тестирования</i> — меры, направленные на тестирование заданных характеристик системы или её части.Их больше 10, ниже будут приведены самые популярные.<br>
<i>Классификация по запуску кода на исполнение:</i><br>
1)Статическое тестирование — процесс тестирования, необходимый для верификации программного кода компонент, требований, системных и функциональных спецификаций и т.д.<br>
2)Динамическое тестирование — тестирование,которое не может быть осуществлено без запуска программного кода приложения.<br><br>

<i>Классификация по доступу к коду и архитектуре:</i><br>
1)Тестирование белого ящика — метод тестирования ПО с полным доступом к коду проекта.<br>
2)Тестирование серого ящика — метод тестирования ПО с частичным доступом к коду проекта.<br>
3)Тестирование чёрного ящика — метод тестирования ПО без доступа к системе. Основывается на работе исключительно с внешним интерфейсом тестируемой системы.<br><br>

<i>Классификация по уровню детализации приложения:</i><br>
1)Модульное тестирование — проводится для тестирования какого-либо одного логически выделенного и изолированного элемента (модуля) системы в коде.<br>
2)Интеграционное тестирование — тестирование, направленное на проверку корректности взаимодействия нескольких модулей, объединенных в единое целое.<br>
3)Системное тестирование — процесс тестирования системы, на котором проводится не только функциональное тестирование, но проверка ее устойчивости, надежности, безопасности и производительности.<br>
4)Приёмочное тестирование — проверяет соответствие системы потребностям, требованиям и бизнес-процессам пользователя.<br><br>

<i>Классификация по степени автоматизации:</i><br>
1)Ручное тестирование.<br>
2)Автоматизированное тестирование<br><br></p>
<!--7 часть-->
<h4>Методы тестирования</h4><p>
<i>Тестирование белого ящика</i> — метод тестирования ПО, который предполагает, что внутренняя структура/устройство/реализация системы известны тестировщику.<br>
<i>Тестирование серого ящика</i> — метод тестирования ПО,в котором внутреннее устройство программы нам известно лишь частично.<br>
<i>Тестирование чёрного ящика</i> — техника тестирования, основанная на работе исключительно с внешними интерфейсами тестируемой системы.<br><br>
</p>

<!--8 часть-->
<h4>Тестовая документация</h4><p>
<i>Тест план<i> — это документ, который описывает весь объем работ по тестированию, начиная с описания объекта, стратегии, расписания, критериев начала и окончания тестировани.<br><br>
<i>Основные пункты тест плана(более 15):</i><br>
1.Идентификатор тест плана<br>
2.Введение<br>
3.Объект тестирования<br>
4.Функции, которые будут протестированы<br>
5.Функции, которые не будут протестированы<br><br>
<i>Чек-лист</i> — это документ, который описывает что должно быть протестировано. 
Чаще всего чек-лист содержит только действия, без ожидаемого результата. <br>
<i>Тестовый сценарий</i>  — это артефакт, описывающий совокупность шагов, конкретных условий и параметров, необходимых для проверки реализации тестируемой функции или её части.<br><br>
<h4><b>Теперь, вы можете проверить свои знания:</h4></b>
<form action="result_python.php" method="POST">
<div>
    <p style='text-align:center;'>Как называется вид тестов, при котором в последний момент нужно выполнить все позитивные тесты из-за нового внедрения?</p>
    <label><input name="d1" type="radio" value="a">мануальное</label>
    <label><input name="d1" type="radio" value="b">автотестирование</label>
    <label><input name="d1" type="radio" value="c">регрессионное</label>
	<label><input name="d1" type="radio" value="d">дымовой тест</label><br>
</div><br>
<div>
    <p style='text-align:center;'>Есть ли разница между тестированием и QA?</p>
    <label><input name="d2" type="radio" value="a">Это одно и то же</label> 
    <label><input name="d2" type="radio" value="b">Нет, есть разница</label>
</div><br>
<div>
    <p style='text-align:center;'>Вам нужно позитивно протестировать форму входа на сайт. Что нужно делать?</p>
    <label><input name="d3" type="radio" value="a">Попробую все возможные типы символов в обоих полях</label> <br>
    <label><input name="d3" type="radio" value="b">Попробую «сломать» вход, используя редкие символы и знаки.</label><br>
</div><br>
<button type="submit" name='d' class='back'>Результат</button>
</form>
</p>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href='пакет_услуг.php'>Записаться</a>
<a class="back" onclick="javascript:history.back(); return false;">Назад</a></div><br>
