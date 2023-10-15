<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>План курса "Программирование на Java"</title>
		
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
    <summary><b><a href='ос_java.php' style='color:#000;'>1)Основы Java</a></b></summary>
    <p>
		1 История языка и предпосылки к лидерству<br>
		2 Объекты и методы в java<br>
		3 Пакеты в java<br>
		4 Создание объектов<br>
		5 Примитивные типы в java<br>
		6 Конструкторы объектов<br>
		7 Условные выражения<br>
		8 Циклы<br>
	</p>
</details>

<!--2 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >2)Java Core введение</a></summary>
    <p>
		1 Вступление. Краткая история и особенности языка<br>
		2 Установка программного обеспечения - JDK<br>
	</p>
</details>
<!--3 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >3)Каникулы</a></summary>
</details>
<!--4 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >4)Java Core продолжение</a></summary>
	<p>3 Установка IDE<br>
		4 Первая программа<br>
	</p>
</details>
<!--5 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >5)Каникулы</a></summary>
</details>
<!--6 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >6)Spring Boot и работа с базами данных</a></summary>
	<p>1 Создание и заполнение таблицы<br>
	2 Добавляем зависимость JDBC API<br>
	3 Параметры подключения<br>
	</p>
</details>
<!--7 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >7)Каникулы</a></summary>
	<p>По согласованию с преподавателем</p>
</details>
<!--8 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >8)Spring, ORM и работа на сервере</a></summary>
	<p>	1 Слой взаимодействия с БД<br>
	2 Маппинг результатов выборки из БД<br>
	3 Новый сервисный слой<br></p>
</details>
<!--9 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >9)Подготовка к собеседованию и дипломный проект</a></summary>
	<p>По согласованию с преподавателем</p>
</details>
<!--10 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >10)Трудоустройство</a></summary>
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