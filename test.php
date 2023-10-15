<!DOCTYPE html>
<html>
	<head>
		<meta content='width=device-width, initial-scale=1.0' name='viewport'>
		<meta charset='utf-8'>
		<title>Тест</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		  <style>
		  body
{
	background-image:url(фон_2.jpg);
	background-attachment:fixed; 
	background-size:cover;
	background-size: no-repeat;
    background-position: center;
	-webkit-font-smoothing:antialiased;
	-webkit-overflow-scrolling:touch;
	margin-top:70px;
}
html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}
h4
{
	font-size: 36px;
    color: #2d2d2d;
    text-align: center;
    font-weight: bold;
	font-family:'Raleway';
	margin-top:3%;
	margin-bottom:3%;
}
.contact-form{
    background:#ffcd75;
    margin-bottom: 5%;
    width: 70%;
	border-radius: 3rem;
	margin-top:4%;
	border: 3px double #2d2d2d;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;

	 
}
.contact-image img{
    border-radius: 6rem;
    width: 10%;
    margin-top: -3%;
    transform: rotate(29deg);
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
    padding: 1.5%;
    background: #2d2d2d;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
	 margin-top: 6%;
	 margin-bottom: -20%;
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
h5
{
	font-size: 32px;
    color: #2d2d2d;
    text-align: center;
    font-weight: bold;
	font-family:'Raleway';
	margin-top:3%;
	margin-bottom:3%;
}

#regForm {
    background-color: #ffb841;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    border-radius: 10px
}
h6
{
	font-size: 20px;
	margin-bottom:1%;
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
#register{

  color: #2d2d2d;
   font-size: 25px;
   font-weight:bold;
   font-family:'Raleway';
}

h1 {
    text-align: center
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #2d2d2d;
    border-radius: 10px;
    -webkit-appearance: none;
}

.tab input:focus{

  border:1px solid #2d2d2d !important;
  outline: none;
}

input.invalid {
 
    border:1px solid #e03a0666;
}

.tab {
    display: none;
	font-size: 17px;
}

button {
    background-color: #2d2d2d;
    color: #ffffff;
    border: none;
    border-radius: 50%;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}

button:hover {
    opacity: 0.8
}

button:focus{

  outline: none !important;
}

#prevBtn {
    background-color: #bbbbbb
}


.all-steps{
      text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center;
}

.step {
       height: 40px;
    width: 40px;
    margin: 0 2px;
    background-color: #e0f0ff;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    color: #140f0b;
    opacity: 0.5;
}

.step.active {
    opacity: 1
}


.step.finish {
   color: #fff;
   background: #140f0b;
   opacity: 1;

}
.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}

.thanks-message {
    display: none
}
#a11,#a21,#a31,#a91,#a41,#a61,#a51,#a71,#a81,#a101,#a111,#a121
{
	font-size: 18px;
    border: 2px solid #2d2d2d;
    text-align: center;
    color: #2d2d2d;
	padding:0.8%;
	font-weight:bold;
	background:transparent;
	margin-right:10px;
}
#a10,#a20,#a30,#a90,#a40,#a60,#a50,#a70,#a80,#a100,#a110,#a120
{
	font-size: 18px;
    border: 2px solid #2d2d2d;
    text-align: center;
    color: #2d2d2d;
	padding:0.8%;
	font-weight:bold;
	background:transparent;
	margin-right:10px;
}
#a11:hover,#a11:focus,#a11.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a10:hover,#a10:focus,#a10.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*2 кнопка*/
#a21:hover,#a21:focus,#a21.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a20:hover,#a20:focus,#a20.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*3 кнопка*/
#a31:hover,#a31:focus,#a31.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a30:hover,#a30:focus,#a30.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*4 кнопка*/
#a91:hover,#a91:focus,#a91.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a90:hover,#a90:focus,#a90.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*5 кнопка*/
#a41:hover,#a41:focus,#a41.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a40:hover,#a40:focus,#a40.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*6 кнопка*/
#a61:hover,#a61:focus,#a61.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a60:hover,#a60:focus,#a60.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*6 кнопка*/
#a51:hover,#a51:focus,#a51.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a50:hover,#a50:focus,#a50.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*7 кнопка*/
#a71:hover,#a71:focus,#a71.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a70:hover,#a70:focus,#a70.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*8 кнопка*/
#a81:hover,#a81:focus,#a81.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a80:hover,#a80:focus,#a80.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*9 кнопка*/
#a101:hover,#a101:focus,#a101.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a100:hover,#a100:focus,#a100.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*10 кнопка*/
#a111:hover,#a111:focus,#a111.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a110:hover,#a110:focus,#a110.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*11 кнопка*/
#a121:hover,#a121:focus,#a121.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
#a120:hover,#a120:focus,#a120.active{
    color: #ffa742;
    background-color:#2d2d2d;
	outline:none;
}
/*адаптивность*/
@media (min-width: 275px) and (max-width: 600px){
	h5
	{
		font-size: 20px;
		margin-bottom:0;
	}
	h4
	{
		font-size: 22px;
		margin-top:1%;
		margin-bottom:1%;
	}
	.back
	{
		font-size:16px;
		margin-top:1%;
	}
	.contact-form form{
    padding: 5%;
	width:95%;
	}
	.contact-form .btnContact {
		width:70%;
		font-size:12px; 
	}
	.contact-form .form-control{
		font-size:10px;
	}
	#register{
		font-size:22px;
	}
	#prevBtn {
    width:10%;
	}
	.contact-image img{
		width:30%;
		margin-top:0px;
		margin-bottom:50px;
	}
	.mt-5
	{
		margin-top:-10px;
	}
	.container h3
	{
		font-size:18px;
	}
	.container p{font-weight:bold; }
}


@media (min-width: 600px) and (max-width: 815px){
	h5
	{
		font-size: 24px;
	}
	.contact-form h3
	{
		font-size: 20px;
	}
	h4
	{
		font-size: 26px;
		margin-top:2%;
	}
	.back
	{
		font-size:18px;
	}
		.contact-image img{
		width:25%;
	}
}

@media (min-width: 815px) and (max-width: 1100px){
	h5
	{
		font-size: 28px;
	}
	.contact-form h3
	{
		font-size: 20px;
	}
	h4
	{
		font-size: 30px;
		margin-top:2%;
	}
	.back
	{
		font-size:20px;
	}
}
		  </style>
	</head>
	<body>
	<div class="container contact-form">
            <div class="contact-image">
            </div>
				<form method="post">
					<h3>Какой язык программирования выбрать для старта</h3>
					<center>
						<p style='font-weight:bold;'>Вы хотите много зарабатывать?</p>
						<button id = 'a11' onclick='an11()'>Да</button>
						<button id = 'a10' onclick='an10()'>Нет</button>
						<!-- второй вопрос -->
						<div id = 'q2'></div>
						<!-- третий вопрос -->
						<div id = 'q3'></div>
						<div id = 'q4'></div>
						<div id = 'q5'></div>
						<div id = 'q6'></div>
						<!-- результат -->
						<strong><div id = 'result'></div></strong>
					</center>
				</form>
	</div>
	<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a onclick="javascript:history.back(); return false;" class="back">Назад</a></div>
<script>
// получаем доступ к результатам теста
var result = document.getElementById('result');
var result_text = document.getElementById('result_text');

// получаем доступ ко всем элементам с вопросами
var q2 = document.getElementById('q2');
var q3 = document.getElementById('q3');
var q4 = document.getElementById('q4');
var q5 = document.getElementById('q5');
var q6 = document.getElementById('q6');

// и доступ к первым кнопкам в тесте
var a11 = document.getElementById('a11');
var a10 = document.getElementById('a10');

  
// ждём, пока документ полностью загрузится
document.addEventListener("DOMContentLoaded", function(event) {
  // находим раздел <head> и добавляем в него тег со стилем для этой страницы
  // в нём будет единственный стиль, который отвечает за внешний вид кнопок
  document.getElementsByTagName('head')[0].innerHTML +="<style type='text/css'>button {background: transparent; color: #222; border-color: #4676d7; padding: 10px;margin-bottom: 20px; margin-left: 10px;}"
});


// хочет много зарабатывать
function an11() {
  // запрещаем дальнейшие нажатия на кнопки
  a10.disabled=true;
  a11.disabled=true;
  a10.style.visibility='hidden';
  // показываем следующий вопрос
  q2.innerHTML ='<p>Вы часто совершаете ошибки или сомневаетесь в себе?</p><button id = \'a21\' onclick=\'an21()\'>Да</button><button id = \'a20\' onclick=\'an20()\'>Нет</button>'
}

// не хочет много зарабатывать
function an10() {
  // запрещаем дальнейшие нажатия на кнопки
  a10.disabled=true;
  a11.disabled=true;
  a11.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — Delphi</p>';
}

// Часто сомневается
function an21() {
  // получаем доступ к кнопкам
  var a20 = document.getElementById('a20');
  var a21 = document.getElementById('a21');
  // запрещаем дальнейшие нажатия на кнопки
  a20.disabled=true;
  a21.disabled=true;
  a20.style.visibility='hidden';
  // показываем следующий вопрос
  q3.innerHTML = '<p>Очень?</p> <button id = \'a31\' onclick=\'an31()\'>Да</button> <button id = \'a30\' onclick=\'an30()\'>Нет</button>';
}

// Не часто сомневается
function an20() {
  // получаем доступ к кнопкам
  var a21 = document.getElementById('a21');
  var a20 = document.getElementById('a20');
  // запрещаем дальнейшие нажатия на кнопки
  a20.disabled=true;
  a21.disabled=true;
  a21.style.visibility='hidden';
  // показываем следующий вопрос
  q3.innerHTML = '<p>Вы инженер или математик?</p> <button id = \'a91\' onclick=\'an91()\'>Да</button> <button id = \'a90\' onclick=\'an90()\'>Нет</button>';
}

// Есть друзья
function an31() {
  var a30 = document.getElementById('a30');
  var a31 = document.getElementById('a31');
  // запрещаем дальнейшие нажатия на кнопки
  a31.disabled=true;
  a30.disabled=true;
  a30.style.visibility='hidden';
  // показываем следующий вопрос
  q4.innerHTML = '<p>У вас есть друзья?</p> <button id = \'a41\' onclick=\'an41()\'>Да</button> <button id = \'a40\' onclick=\'an40()\'>Нет</button>';
}

// Не часто сомневается
function an30() {
  var a30 = document.getElementById('a30');
  var a31 = document.getElementById('a31');
  // запрещаем дальнейшие нажатия на кнопки
  a30.disabled=true;
  a31.disabled=true;
  a31.style.visibility='hidden';
  // показываем следующий вопрос
  q4.innerHTML = '<p>Вы читаете каждую статью в «Коде»?</p> <button id = \'a61\' onclick=\'an61()\'>Да</button> <button id = \'a60\' onclick=\'an60()\'>Нет</button>';
}

// Друзья тоже тупят
function an41() {
  var a41 = document.getElementById('a41');
  var a40 = document.getElementById('a40');
  // запрещаем дальнейшие нажатия на кнопки
  a41.disabled=true;
  a40.disabled=true;
  a40.style.visibility='hidden';
  // показываем следующий вопрос
  q5.innerHTML = '<p>Они тоже часто совершают ошибки или сомневаются в себе?</p> <button id = \'a51\' onclick=\'an51()\'>Да</button> <button id = \'a50\' onclick=\'an50()\'>Нет</button>';
}

// Друзей нет
function an40() {
  var a41 = document.getElementById('a41');
  var a40 = document.getElementById('a40');
  // запрещаем дальнейшие нажатия на кнопки
  a41.disabled=true;
  a40.disabled=true;
  a41.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — PHP</p>';
}

// Друзья тоже тупят
function an51() {
  var a51 = document.getElementById('a51');
  var a50 = document.getElementById('a50');
  // запрещаем дальнейшие нажатия на кнопки
  a51.disabled=true;
  a50.disabled=true;
  a50.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — JavaScript</p>';
}

// Друзья не тупят
function an50() {
  var a51 = document.getElementById('a51');
  var a50 = document.getElementById('a50');
  // запрещаем дальнейшие нажатия на кнопки
  a51.disabled=true;
  a50.disabled=true;
  a51.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — Ruby</p>';
}

// Читает каждую статью в Коде
function an61() {
  var a61 = document.getElementById('a61');
  var a60 = document.getElementById('a60');
  // запрещаем дальнейшие нажатия на кнопки
  a60.disabled=true;
  a61.disabled=true;
  a60.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — Python</p>';
}

// Не читает каждую статью в Коде
function an60() {
  var a61 = document.getElementById('a61');
  var a60 = document.getElementById('a60');
  // запрещаем дальнейшие нажатия на кнопки
  a61.disabled=true;
  a60.disabled=true;
  a61.style.visibility='hidden';
  // показываем следующий вопрос
  q5.innerHTML = '<p>Вам нравится Windows?</p> <button id = \'a71\' onclick=\'an71()\'>Да</button> <button id = \'a70\' onclick=\'an70()\'>Нет</button>';
}

// Нравится Windows
function an71() {
  var a71 = document.getElementById('a71');
  var a70 = document.getElementById('a70');
  // запрещаем дальнейшие нажатия на кнопки
  a71.disabled=true;
  a70.disabled=true;
  a70.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — C#</p>';
}

// Не нравится Windows
function an70() {
  var a71 = document.getElementById('a71');
  var a70 = document.getElementById('a70');
  // запрещаем дальнейшие нажатия на кнопки
  a71.disabled=true;
  a70.disabled=true;
  a71.style.visibility='hidden';
  // показываем следующий вопрос
  q6.innerHTML = '<p>Любите хвататься своим умом?</p> <button id = \'a81\' onclick=\'an81()\'>Да</button> <button id = \'a80\' onclick=\'an80()\'>Нет</button>';
}

// Нравится Windows
function an81() {
  var a81 = document.getElementById('a81');
  var a80 = document.getElementById('a80');
  // запрещаем дальнейшие нажатия на кнопки
  a81.disabled=true;
  a80.disabled=true;
  a80.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — Swift</p>';
}

// Не нравится Windows
function an80() {
  var a81 = document.getElementById('a81');
  var a80 = document.getElementById('a80');
  // запрещаем дальнейшие нажатия на кнопки
  a81.disabled=true;
  a80.disabled=true;
  a81.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — Perl</p>';
}

// Инженер
function an91() {
  var a91 = document.getElementById('a91');
  var a90 = document.getElementById('a90');
  // запрещаем дальнейшие нажатия на кнопки
  a91.disabled=true;
  a90.disabled=true;
  a90.style.visibility='hidden';
  // показываем следующий вопрос
  q4.innerHTML = '<p>Любите старину?</p> <button id = \'a101\' onclick=\'an101()\'>Да</button> <button id = \'a100\' onclick=\'an100()\'>Нет</button>';
}

// Не инженер
function an90() {
  var a91 = document.getElementById('a91');
  var a90 = document.getElementById('a90');
  // запрещаем дальнейшие нажатия на кнопки
  a91.disabled=true;
  a90.disabled=true;
  a91.style.visibility='hidden';
  // показываем следующий вопрос
  q4.innerHTML = '<p>Вы интроверт?</p> <button id = \'a111\' onclick=\'an111()\'>Да</button> <button id = \'a110\' onclick=\'an110()\'>Нет</button>';
}

// Любит старину
function an101() {
  var a101 = document.getElementById('a101');
  var a100 = document.getElementById('a100');
  // запрещаем дальнейшие нажатия на кнопки
  a101.disabled=true;
  a100.disabled=true;
  a100.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — Pascal</p>';
}

// Не любит старину
function an100() {
  var a101 = document.getElementById('a101');
  var a100 = document.getElementById('a100');
  // запрещаем дальнейшие нажатия на кнопки
  a101.disabled=true;
  a100.disabled=true;
  a101.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — Scala</p>';
}

// Интроверт
function an111() {
  var a111 = document.getElementById('a111');
  var a110 = document.getElementById('a110');
  // запрещаем дальнейшие нажатия на кнопки
  a111.disabled=true;
  a110.disabled=true;
  a110.style.visibility='hidden';
  // показываем следующий вопрос
  q5.innerHTML = '<p>А хотите славы и внимания?</p> <button id = \'a121\' onclick=\'an121()\'>Да</button> <button id = \'a120\' onclick=\'an120()\'>Нет</button>';
}

// Не интроверт
function an110() {
  var a111 = document.getElementById('a111');
  var a110 = document.getElementById('a110');
  // запрещаем дальнейшие нажатия на кнопки
  a111.disabled=true;
  a110.disabled=true;
  a11.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — С</p>';
}

// Хочет славы
function an121() {
  var a121 = document.getElementById('a121');
  var a120 = document.getElementById('a120');
  // запрещаем дальнейшие нажатия на кнопки
  a121.disabled=true;
  a120.disabled=true;
  a120.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — Java</p>';
}

// Не хочет славы
function an120() {
  var a121 = document.getElementById('a121');
  var a120 = document.getElementById('a120');
  // запрещаем дальнейшие нажатия на кнопки
  a121.disabled=true;
  a120.disabled=true;
  a121.style.visibility='hidden';
  // выводим результат
  result.innerHTML = '<p>Ваш выбор — С++</p>';
}
</script>
</body>
</html>