
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Системы контроля версий и автоматизация сборки приложений</title>

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
		<h1>Системы контроля версий и автоматизация сборки приложений</h1>
		<!--1 часть-->
		<h4>Системы контроля версий</h4><p>
		В случае, когда нужно  разработать технологически сложное решение в команде специалистов, часто используют систему контроля версий.Программисты, менеджеры, копирайтеры могут работать каждый над своим кусочком, не мешая друг другу и не нанося ущерба, который невозможно было бы исправить.<br><br>
В системе контроля не надо самостоятельно отслеживать ветви кода и изучать примечания к ним. Вместо этого используется центральный репозиторий, где всё упорядочено, структурировано. Здесь удобно обновлять файлы, добавлять комментарии и даже проводить слияние веток проекта.<br><br>
Главное отличие между системами контроля версий состоит в том, какие они:клиент-серверные или децентрализованные (p2p).Есть ли у них центральный репозиторий (сервер),откуда код берется и куда возвращается с внесенными изменениями. Или это копия в локальном хранилище, обновляемая посредством пиров:более децентрализованная сеть,используемая для синхронизации,обмена патчами (наборами изменений) и для поддержки текущего кода.Стоит также учесть быстродействие, функциональность и порог вхождения/освоения конкретной системы контроля. <br><br>
<i>Система одновременных версий (CVS)</i><br>
CVS появилась в 1980-х и до сих пор популярнау многих.Она распространяется на условиях Открытого лицензионного соглашения GNU и позволяет получать с сервера нужную версию проекта,пересылать обратно на сервер с изменениями.<br><br>
Чтобы избежать конфликта версий всем участникам давали самую последнюю версию кода.
Изначально CVS была создана, чтобы избежать конфликта версий. Всем участникам для работы предоставлялась только самая последняя версия кода. Это была первая система контроля версий. Пользователю нужно было быстро фиксировать изменения в репозитории, пока другие не опередили его.
Сейчас CVS имеет поддержку работы над проектами с ветками кода. Получается несколько вариантов продукта с разными характеристиками, которые можно будет объединить позднее.Сервера CVS обычно работают под управлением Unix, но CVS-клиенты доступны и в других популярных операционных системах. <br><br>
<i>Стоит помнить, что:</i><br>
&#10003; переименование или перемещение файлов не отражается в истории<br>
&#10003;есть риски безопасности,связанные с символическими ссылками на файлы<br>
&#10003;нет поддержки атомарных операций, что может привести к повреждению кода<br>
&#10003;операции с ветками программного кода дорогостоящие<br><br>
<i>Apache Subversion (SVN)</i><br>
Чтобы исправить недостатки CVS была разработана альтернатива SVN.Как и CVS, SVN это бесплатная система контроля версий с открытым исходным кодом. Но она распространяется под лицензией Apache, а не под Открытым лицензионным соглашением GNU.<br><br>
Чтобы сохранить целостность базы данных используются атомарные операции.То есть, если появляется новая версия, то к финальному продукту применяются либо все исправления, либо ни одно из них.Она создана для более крупных проектов с ветвлением кода и многими направлениями разработки.<br><br>
В качестве недостатков SVN упоминаются сравнительно низкая скорость и нехватка распределенного управления версиями. Распределенный контроль версий использует пиринговую модель, а не  централизованный сервер для хранения обновлений программного кода.  Недостаток серверного подхода в том, что когда сервер падает, то у клиентов нет доступа к коду.<br><br>
<i>Git</i><br>
Она была создана для управления разработкой ядра Linux. Заложенные в нее концепции создают более быструю распределенную систему контроля версий. Так как Git разрабатывалась главным образом под Linux, то именно в этой ОС она работает быстрее всего.<br><br>
Git также работает на Unix-подобных системах (как MacOS), а для работы на платформе Windows используется пакет mSysGit.<br><br>
Программный код может быть недоступен, когда используется компьютер без репозитория. В Git есть множество инструментов для навигации по истории изменений. Каждая рабочая копия исходного кода содержит всю историю разработки.<br><br>
Стоит помнить, что система имеет высокий порог вхождения (обучения) для тех, кто ранее использовал SVN и ограниченную поддержку Windows (по сравнению с Linux)<br><br>

		<!--2 часть-->
		<h4>Автоматизация сборки приложений</h4><p>
		<i>Инструменты автоматизации сборки</i> - это программы, которые ускоряют весь процесс разработки программного обеспечения для предприятий. Например,компилируют исходный код и упаковывают двоичные данные.Так разработчики могут быстрее добраться до финального исполняемого файла и собрать файлы.Инструменты автоматизации в значительной степени различаются в зависимости от требований и методологий разработки.<br><br>
<i>GNU Make</i><br>
 Утилита make позволяет разработчикам автоматически создавать двоичные файлы и библиотеки, читая инструкции из текстового файла Makefile. Несмотря на то, что марка была разработана более четырех десятилетий назад, она до сих пор широко используется.<br><br>
<i>Преимущества:</i><br>
1)Конечный пользователь может компилировать и устанавливать программы без понимания логики компиляции.<br>
2)Утилита make понимает, какие части программы были изменены, и поэтому не компилирует всю программу после модификации.<br>
3)make не ограничивается каким-либо конкретным языком программирования<br>
4)Make-файлы состоят из правил, определяющих, как создать целевое приложение с использованием нескольких исходных файлов и библиотек<br><br>
 <i>Apache Ant</i><br>
Apache Ant - один из лучших инструментов автоматизации сборки с открытым исходным кодом для Java. Он выступает как замена утилите make для Unix. Он очень похож на дизайн и использование. Однако Ant предназначен для приложений Java и требует среды выполнения Java. Он также использует XML-документ для определения рабочего процесса создания программы вместо Make-файлов с открытым текстом.<br><br>
<i>Преимущества:</i><br>
1) большое количество встроенных функций, которые значительно упрощают написание переносимых сценариев автоматизации.<br>
2)Инструкции по сборке XML легко написать, поскольку они иерархичны, упорядочены и перекрестно связаны.<br>
3)доступен для всех основных дистрибутивов Linux и очень хорошо поддерживает документацию.<br>
4)разработчики могут изменять исходный текст без проблем.<br><br>
<i>Дженкинс</i><br>
Jenkins - один из лучших инструментов автоматизации сборки для предприятий благодаря богатому набору функций и базе кода с открытым исходным кодом. Это сервер автоматизации, который упрощает создание, тестирование и развертывание современных программных решений. <br><br>
<i>Преимущества:</i><br>
1)предоставляет двоичные установщики для Windows, Linux и Mac OS<br>
2)Разработчики могут легко расширить функциональность Jenkins<br>
3)Jenkins позволяет командам разработчиков распределять рабочую нагрузку по нескольким машинам и сокращать время сборки.<br>
4)Интуитивно понятный веб-интерфейс этого инструмента автоматизации помогает настраивать сервер <br>
5)У Jenkins есть сплоченное сообщество разработчиков, которые без проблем работают над предоставлением более интересных функций.<br>
</p>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href='пакет_услуг.php'>Записаться</a>
<a class="back" onclick="javascript:history.back(); return false;">Назад</a></div><br>

  </body>
  </html>