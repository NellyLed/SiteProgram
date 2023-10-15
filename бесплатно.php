
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Анализ и основы рынка</title>
		<!--штучка возле названия страницы-->
		<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
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
		<h1>Анализ и основы рынка</h1><p>
		<i>Что такое анализ рынка</i><br>
Рынок –  своеобразная площадка для ведения непрерывного, экономического взаимодейсивия между производителями товаров и потребителями. Анализ рынка позволяет оценить насколько сильно это взаимодействие и что следует улучшить.  Анализ рынка основан на сборе, обработке и применении этой информации в работе компании.<br><br>
<i>Как анализировать рынок?</i><br>
Анализировать рынок можно посредством изучения поведения потребителей, оценки слабых и сильных сторон конкурентов,выявлении более конкурентноспособных продавцов,поиске оригинальных и быстрых способов доставки товаров на рынок,изучении переспектив развития и подготовки детального плана по продвижению товаров.<br><br>
<i>Анализ рынка потребителей</i><br>
Осуществляется исходя из психологических, демографических и географических факторов. Первый обозначает образ жизни и положение в обществе, второе - пол, возраст,образование, профессия и т.д., третье - место жительства, уровень развития местности и т.д.<br><br>
<i>Способы сбора информации для анализа целевой аудитории</i><br>
1)Интервью – прямой опрос целевых респондентов.<br>
2)Наблюдение – изучение поведения потребителей в жизни.<br>
3)Фокус-группа – сбор информации от 3–5 потребителей, которые отвечают на вопросы о продукте.<br>
4)Опросы – использование анкет для каждой категории целевой аудитории.<br><br>

<i>Анализ конкурентов на рынке</i><br>
Конкурентов делят на 3 группы:<br>
1)Прямые конкуренты.Они продают такой же товар, работают с целевой аудиторией в вашем регионе.<br>
2)Косвенные конкуренты.Они продают аналогичные товары, но целевая аудитория немного иная.<br>
3)Потенциальные конкуренты.Они продают аналогичные товары в соседних регионах, но с перспективой развития бизнеса в вашем регионе.<br>
Учитывается уровень цен, ассортимент и качество товаров и услуг, продвижение,поставщики и рабочий персонал.<br><br>
<i>Анализ рынка с позиции возможностей и рисков</i><br>
Без анализа рисков составлять рыночный отчет нельзя.Существуют несколько инструментов для анализа.<br>
1)SWOT-анализ – это четыре стороны работы компании на рынке(сильные, слабые, потенциал и угрозы).Так можно выбрать стратегию поведения на рынке.<br>
2)PEST-анализ. Рассматривает внешнюю среду, показывая какие политические, экономические, социальные, технологические факторы влияют на работу компании. <br>
3)Пять сил Портера. Изучает такие угозы, как:появление продуктов-заменителей, конкурентов,объем конкуренции, степень влияния клиентов и поставщиков.<br><br>


<i>Рентабельность продаж и ABC-анализ</i><br>
Рентабельность продаж – это результат деления чистой прибыли компании на выручку, умноженный на 100%. Она показывает эффективность бизнеса и пересмотреть расстановку цен. Если показатель падает, компания работает менее эффективно и теряет часть прибыли.<br><br>
методика ABC-анализа позволяет рассчитать рентабельность для отдельной группы товаров. Так формируется рейтинг товаров от наиболее ценных до наименее ценных. Необходимо достаточно сведений по чистой прибыли и выручке, иначе рассчитать показатели не получится.<br><br>
<i>Показатель конверсии</i><br>
Конверсия – это количество покупателей, которые купили товар. Для его расчета устанавливается счетчик посетителей. Тех, кто купил товар,нужно поделить на общее число посетителей и умножается на 100%. Если конверсия падает, значит покупатель не находит желаемый товар или до него сложно добраться.<br><br>
<i>Средний чек</i><br>
Средний чек – это результат деления покупок клиентов на общий объем выручки компании. Чем больше показатель среднего чека, тем эффективней работает компания.Показание среднего чека зависит от разнообразности товаров, правильной выкладки товаров, акций и скидок.<br><br>
<i>Покупательская корзина</i><br>
Покупательская корзина показывает потребности клиента, что позволяет выявить, какие товары более популярны,на какие товары следует разместить акции и скидки,как следует разместить товары, чтобы повысить прибыль
<i>Посещаемость</i><br>
Высокий показатель этого значения означает популярность магазина и высокую проходимость, что может увеличить частоту покупки товаров.Чтобы повысить значение этого показателя следует разместить большее число сотрудников в дневное и вечернее время,добавить количество задач сотрудникам (например, ведерие документооборота и выкладка товаров)<br><br>
<i>Зарплатоемкость</i><br>
Зарплатоемкость вычисляются делением фонда зарплаты на выручку, умноженную на 100%. Фонд зарплаты включает зарплату сотрудникам, налоги и платежи во внебюджетные фонды. Средний показатель составляет 10%. Если этот показатель выше, значит, бизнес переживает кризис.Если показатель слишком низкий, то это говорит о низкой заработной плате по сравнению с уровнем продаж компании.<br><br>
<i>Факторный анализ</i><br>
При проведении анализа продаж можно увидеть отклонения. Чтобы ликвидировать эти отклонения нужен факторный анализ.Он вычисляет два параметра – отклонение объема и отклонение цены. Отклонение объема показывает насколько из-за изменения объема поменялась прибыль.Отклонение цены показывает насколько из-за изменения цены на товар поменялась прибыль.<br><br>
<i>Выгрузка из CRM и Excel</i><br>
В CRM хранят сведения о продажах компании.Здесь можно сформировать отчеты по отделам компании. Результаты анализа рынка сводят в Excel ввиду его удобного пользования.<br><br>
<i>Ошибки, возникающие в результате некорректного проведения анализа рынка</i><br>
&#10004;не изучили потребности клиентов<br>
&#10004;не поняли желаний потребителей в продукте<br>
&#10004;не изучили конкурентов<br>
&#10004;неправильно взаимодействуют с поставщиками, инвесторами, дилерами<br>
&#10004;работают неквалифицированные сотрудники<br>
&#10004;не меняют устаревшую техническую базу<br></p>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" onclick="javascript:history.back(); return false;">Назад</a></div>
<br></div>