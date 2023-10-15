<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>План курса "Веб-разработка"</title>

		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<style>

html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}
details{
  display:block;
  width:50%;
  box-shadow: 0 10px 15px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  border-radius: 8px;
  overflow:hidden;
  margin:2% auto;
  text-align: center;
  background: #faebd7;
}
summary::-webkit-details-marker{display:none;}
summary::-moz-list-bullet{list-style-type:none;}
summary::marker{display:none;} 
summary {
   display:block;
   padding: .3em 1em .3em .9em;
   border-bottom: 1px solid #e2e8f0;
   font-size:1.4em;
   cursor: pointer;
   position: relative;
}
summary:before {  
  top: .4em;
  right: .3em;
  color: transparent;
  background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTYuNTkgOC41OUwxMiAxMy4xNyA3LjQxIDguNTkgNiAxMGw2IDYgNi02eiIvPjxwYXRoIGQ9Ik0wIDBoMjR2MjRIMHoiIGZpbGw9Im5vbmUiLz48L3N2Zz4=") no-repeat 50% 50% / 1em 1em;
  width: 1em;
  height: 1em;  
  content: "";
  position: absolute;
  transition: transform .5s;
}
details[open] > summary:before {
  transform: scale(1,-1);
}
summary ~ * {
   padding: 0 1em 10px 1.4em;
}
details[open] summary ~ *{ 
  animation: sweep .5s ease-in-out;
}
@keyframes sweep {
  0%    {opacity: 0;}
  100%  {opacity: 1;}
}
summary:focus {
  outline:0;
  box-shadow: inset 0 0 1px rgba(0,0,0,0.3), inset 0 0 2px rgba(0,0,0,0.3);
}
  h1
  {
	  font-size: 36px;
    color: #2d2d2d;
    text-align: center;
    font-weight: bold;
	font-family:'Raleway';
	margin-bottom:3%;

  }
    h2
  {
	  font-size: 30px;
    color: #2d2d2d;
    text-align: center;
    font-weight: bold;
	font-family:'Raleway';


  }
  .po
  {
	      text-align: center;
    font-weight: bold;
	  font-size: 20px;
  }
  .contact-form{
   background:#ffcd75;
	margin: 5% auto;
    width: 50%;
	border-radius: 3rem;

	
}
.contact-form .form-control{
    border-radius:1rem;
}

.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -15%;
    text-align: center;
    color: #2d2d2d;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 2%;
    background: #2d2d2d;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
	 margin-top: 3%;
	
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #0a0909;
    background-color:#f5770a;
    border: none;
    cursor: pointer;
}
.form-group
{
	margin-bottom:1.5%;

}
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
p
{
	text-align: center;
	font-size:20px;
	font-family:'Gill Sans', sans-serif;
	letter-spacing: 3px;
}

/*фон*/
@keyframes scrollBg {
  from {
    transform: translateY(0px);
  }
  to {
    transform: translateY(-330px);
  }
}

body{
	margin-top:50px;
  height: 100%;
  width: 100%;
  position: fixed;
  padding-bottom: 330px;
  background-image: url('https://catherineasquithgallery.com/uploads/posts/2023-02/1676620851_catherineasquithgallery-com-p-tsifri-na-zelenom-fone-225.jpg');
  background-size: cover;

  animation: scrollBg 100s linear forwards;
}
@media (min-width: 275px) and (max-width: 400px){
p
{
	text-align: center;
	font-size:14px;
	font-family:'Gill Sans', sans-serif;
	letter-spacing: 3px;
}
summary {
   font-size:16px;
}
}
		</style>
</head>
<body>

<h1 style='text-align:center;font-weight: bold;font-family:"Raleway";font-size: 30px;color:white;'>Этапы программы</h1>
<!--1 глава-->
<details>
    <summary><b><a href='веб-разр_ос.h.php' style='color:#000;'>1)Основы HTML, CSS, JS</a></b></summary>
    <p>
		1 Основы HTML<br>
		2 Основы CSS<br>
		3 Основы JS<br>
	</p>
</details>

<!--2 глава-->
<details>
    <summary>2)Расширенные возможности HTML и CSS</summary>
    <p>
		<b><a data-toggle="modal" data-target="#exampleModal" >1 Плавная прокрутка</a></b><br>
		1.1 CSS-свойство scroll-behavior<br>
		1.2 Поддержка свойства<br>
		<b><a data-toggle="modal" data-target="#exampleModal" >2 Закрепление элементов</a></b><br>
		2.1 CSS-свойство position: sticky<br>
		2.2 Контейнер закрепляемого элемента<br>
		<b><a data-toggle="modal" data-target="#exampleModal" >3 Обрезка текста</a></b><br>
		3.1 Свойство text-overflow<br>
		3.2 Свойство line-clamp<br>
		<b><a data-toggle="modal" data-target="#exampleModal" >4 Пользовательские CSS-свойства: CSS-переменные</a></b><br>
		4.1 Модули math и numpy<br>
		4.2 Модуль pandas<br>
		4.3 Модуль requests<br>
		<b><a data-toggle="modal" data-target="#exampleModal" >5 Обеспечение поддержки тёмной темы</a></b><br>
		5.1 Медиа-функция prefers-color-scheme<br>
		5.2 Динамическая настройка светлого и тёмного режимов<br>
		<b><a data-toggle="modal" data-target="#exampleModal" >6 Директива supports</a></b><br>
		6.1 Свойство элемента -webkit-line-clamp<br>	
	</p>
</details>
<!--3 глава-->
<details>
    <summary>3)Работа с макетом, построение сложных сеток, адаптивная вёрстка</summary>
    <p><b><a data-toggle="modal" data-target="#exampleModal" >1 Создание адаптивного журнального макета с использованием CSS Grid</a></b><br>
		1.1 Создание адаптивной сетки<br>
		1.2 Создание спанов с помощью “autoflow: dense”<br>
		1.3 Использование :nth-child() для повторяющейся динамической ширины<br>
		1.4 Настольное и мобильное представление<br>
	</p>
</details>
<!--4 глава-->
<details>
    <summary>4)Базовый JavaScript и работа с браузером</summary>
	<p><b><a data-toggle="modal" data-target="#exampleModal" >1 Базовые конструкции</a></b><br>
	1.1 первая программа, особенности языка, стандарты
	1.2 стиль кода и структура программ
	1.3 переменные, типы данных, выражения, объекты
	1.4 функции
	1.5 массивы и циклы
	1.6 исключения, точка с запятой, шаблонные литералы
	1.7 строгий режим, ключевое слово this, события, модули, математические вычисления
	1.8 обзор возможностей стандарта ES6
	1.9 обзор возможностей стандартов ES7, ES8 и ES9
	</p>
</details>
<!--5 глава-->
<details>
    <summary>5)JavaScript — непростые концепции</summary>
	<p><b><a data-toggle="modal" data-target="#exampleModal" >1 Непростые концепции</a></b><br>
	1.1 Замыкания<br>
	1.2 Деструктурирующее присваивание<br>
	1.3 Оператор spread<br>
	1.4 Оператор rest<br>
	1.5 Методы массивов<br>
	1.6 Генераторы<br>
	1.7 Операторы проверки равенства (==) и строгого равенства (===) значений<br>
	1.8 Сравнение объектов<br>
	1.9 Функции обратного вызова<br>
	1.10 Промисы<br>
	1.11 Конструкция async/await<br>
	</p>
</details>
<!--6 глава-->
<details>
    <summary>6)Создание интерфейсов на React</summary>
	<p><b><a data-toggle="modal" data-target="#exampleModal" >1 Руководство React</a></b><br>
	1.1 Преимущество React<br>
	1.2 Практическая разработка на React<br>
	1.3 Рекомендации<br>
	</p>
</details>
<!--7 глава-->
<details>
    <summary>7)Основы бэкенд-разработки</summary>
	<p><b><a data-toggle="modal" data-target="#exampleModal" >1 Практическое руководство по разработке бэкенд-сервиса</a></b>
	1.1 Плн разработки<br>
	1.2 Приложение<br>
	1.3 Тестирование<br>
	</p>
</details>
<!--8 глава-->
<details>
    <summary>8)Дипломный проект</summary>
	<p><b>С письменного соглашения преподавателя</b></p>
</details>

<!-- Уведомление -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Уведомление</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style='text-align:justify;'>
        Сначала, вам необходимо пройти 1 ознакомительный раздел!<br>Как только вы его пройдете вы можете оплатить курс, если он вам понравился<br>
		Пройти данный раздел вы сможете как только с вами свяжется менеджер и назначит преподавателя.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style='background-color:#2d2d2d;color:#ffffff' >Закрыть</button>
      </div>
    </div>
  </div>
</div>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" onclick="javascript:history.back(); return false;">Назад</a></div>

<script>
var details = document.querySelectorAll("details");
for(i=0;i<details.length;i++) {
  details[i].addEventListener("toggle", accordion);
}
function accordion(event) {
  if (!event.target.open) return;
  var details = event.target.parentNode.children;
  for(i=0;i<details.length;i++) {
    if (details[i].tagName != "DETAILS" || !details[i].hasAttribute('open') || event.target == details[i]) continue;
    details[i].removeAttribute("open");
  }
}
</script>
</body>
</html>