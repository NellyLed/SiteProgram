<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>План курса "Специалист по Data Science"</title>
		
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
    <summary><b><a href='ос_анализ.php' style='color:#000;'>1)Основы Python и анализа данных</a></b></summary>
    <p>
		1 Основы Python<br>
		2 Основы анализа данных<br>
	</p>
</details>

<!--2 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >2)Базовый Python</a></summary>
    <p>
		1 Типы данных<br>
		2 Операции с числами<br>
		3 Операции над строками<br>
		4 Ветвление<br>
		5 Вложенные условные инструкции<br>
		6 Операторы сравнения<br>	
		7 Тип данных bool<br>
		8 Каскадные условные инструкции<br>
		9 Цикл while<br>
		10 Цикл for<br>
	</p>
</details>
<!--3 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >3)Предобработка данных</a></summary>
    <p>1 Пропуски в категориальных признаках<br>
		2 Пропуски в численных признаках<br>
		3 Выбросы<br>
		4 Нормализация<br>
		5 One-hot encoding<br>
	</p>
</details>
<!--4 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >4)Исследовательский анализ данных(EDA)</a></summary>
	<p>1 Общее описание EDA<br>
	2 Пропущенные значения и дублированные записи<br>
	3 Категориальные данные EDA<br>
	4 Числовые данные EDA<br>
	5 Временной ряд ЭДА<br>
	</p>
</details>
<!--5 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >5)Статистический анализ данных</a></summary>
	<p>1 Статистическое наблюдение<br>
	2 Сводка и группировка материалов статистического наблюдения<br>
	3 Абсолютные и относительные статистические величины<br>
	4 Вариационные ряды<br>
	5 Выборка<br>
	6 Корреляционный и регрессионный анализ<br>
	7 Ряды динамики<br>
	</p>
</details>
<!--6 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >6)Введение в машинное обучение</a></summary>
	<p>1 Введение<br>
	2 Типы задач машинного обучения<br>
	3 Основные виды машинного обучения<br>
	4 Основные алгоритмы моделей машинного обучения<br>
	5 Применение в реальной жизни<br>
	</p>
</details>
<!--7 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >7)Обучение с учителем</a></summary>
	<p>По согласованию с преподавателем</p>
</details>
<!--8 глава-->
<details>
    <summary>8)Линейная алгебра</summary>
	<p><b><a data-toggle="modal" data-target="#exampleModal" >1 Базовые термины</a></b><br>
	1.1 Скаляр<br>
	1.2 Вектор<br>
	1.3 Матрица<br>
	<b><a data-toggle="modal" data-target="#exampleModal" >2 Операции</a></b><br>
	2.1 Транспонирование матрицы<br>
	2.2 Умножение единичной матрицы на вектор<br>
	2.3 Умножение на обратную матрицу<br>
	2.4 Преобразование матрицы в скаляр<br>
	<b><a data-toggle="modal" data-target="#exampleModal" >3 Нормы</a></b><br></p>
	
</details>
<!--9 глава-->
<details>
    <summary>9)Численные методы</summary>
	<p><b><a data-toggle="modal" data-target="#exampleModal" >1 Численные методы в программировании</a></b><br>
	1.1. Элементарные функции и их свойства<br>
	1.2. Матрицы<br>
	1.3. Алгебраические уравнения<br>
	1.4. Ряды<br>
	1.5. Системы уравнений<br>
	1.6. Дифференциальные уравнения<br>
	1.7. Аппроксимация<br>
	1.8. Интерполяция и экстраполяция<br>
	1.9. Численное интегрирование<br>
	1.10. Математическая статистика<br>
	1.11. Линейное программирование<br>
	1.12 Реализация численных методов<br>
	</p>
</details>
<!--10 глава-->
<details>
    <summary>10)Временные ряды</summary>
	<p><b><a data-toggle="modal" data-target="#exampleModal" >1 Временные ряды в программировании</a></b><br>
	1.1 Понятие временного ряда<br>
	1.2 Датасеты<br>
	1.3 Анализ временных рядов<br>
	1.3.1 Импорт данных и работа в библиотеках<br>
	1.3.2 Изменение шага временного ряда, сдвиг и скользящее среднее<br>
	1.3.3 Построение графиков<br>
	1.3.4 Разложение временного ряда на компоненты<br>
	1.3.5 Стационарность<br>
	1.3.6 Автокорреляция<br>
	1.4 Моделирование и построение прогноза<br>
	1.4.1 Экспоненциальное сглаживание<br>
	</p>
</details>
<!--11 глава-->
<details>
    <summary>11)Машинное обучение для текстов</summary>
	<p><b><a data-toggle="modal" data-target="#exampleModal" >1 Специфика машинного обучения</a></b><br>
	1.1 Машинно-обучаемые модели<br>
	1.2 Нейронная сеть<br>
	1.2.1 Обучение нейронной сети<br>
	1.3 Управление данными и работа с ними в нейронной сети<br>
	1.4 Запуск модели<br></p>
</details>
<!--12 глава-->
<details>
    <summary>12)Базовый SQL</summary>
	<p><b><a data-toggle="modal" data-target="#exampleModal" >1 SQL в программировании</a></b><br>
	1.1 Понятие SQL<br>
	1.2 Синтаксис SQL<br>
	1.3 Типы данных<br>
	1.4 Операторы<br>
	1.5 Выражения<br>
	<b><a data-toggle="modal" data-target="#exampleModal" >2 БД</a></b><br>
	2.1 Создание БД<br>
	2.2 Удаление БД<br>
	2.3 Выбор БД<br>
	<b><a data-toggle="modal" data-target="#exampleModal" >3 Таблица</a></b><br>
	3.1 Обновление таблицы<br>
	3.2 Очистка таблицы<br>
	3.3 Временные таблицы<br>
	3.4 Клонирование таблицы<br>
	<b><a data-toggle="modal" data-target="#exampleModal" >4 Команды SQL</a></b><br>
	4.1 Индексы<br>
	4.2 Подзапросы<br>
	4.3 Последовательности<br>
	4.4 Целостность данных<br>
	4.5 Ограничения<br>
	</p>
</details>
<!--13 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >13)Компьютерное зрение</a></summary>
	1 Понятие компьютерного зрения<br>
	2 Причины популярности<br>
	3 Главные проблемы<br>
	4 Главные тренды<br>
	<b><a data-toggle="modal" data-target="#exampleModal" >5 Где применяется?</a></b><br>
	5.1 3D-сцены<br>
	5.2 Поиск плагиата<br>
	5.3 Умные весы<br>
	5.4 В промышленности<br>
	5.5 В финансах<br>
	5.6 В сельском хозяйстве<br>
	5.7 В медицине<br>
	5.8 В транспорте<br>
	5.9 В образовании<br>
	5.10 В хозяйстве<br>
	</p>
</details>
<!--14 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >14)Обучение без учителя</a></summary>
	<p><b>С письменного соглашения преподавателя</b></p>
</details>
<!--15 глава-->
<details>
    <summary><a data-toggle="modal" data-target="#exampleModal" >15)Выпускной проект</a></summary>
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