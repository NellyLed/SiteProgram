<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Авторизация/Регистрация</title>

		<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}
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
		font-family: 'Poppins', sans-serif;
	font-weight: 300;
	font-size: 15px;
	line-height: 1.7;
	color: #c4c3ca;
	overflow-x: hidden;
}
a {
	cursor: pointer;
  transition: all 200ms linear;
}
a:hover {
	text-decoration: none;
}
.link {
  color: #c4c3ca;
}
.link:hover {
  color: #ffa742;
}
p {
  font-weight: 500;
  font-size: 14px;
  line-height: 1.7;
}

#ram
{
text-align:center;
	background-color:#2d2d2d;
	float:left;
	border-radius:10px;
	margin:15% 35%;
	width:30%;
	padding:10px;

}
h3
{
	font-family: 'Brush Script MT';
	font-style:italic;
	text-align:center;
	padding:8px;
	color: white;
	font-weight:bold;
	text-shadow: white 0px 0px 2px;
}
@media (min-width: 275px) and (max-width: 575px){
	#ram{width:100%;margin:50% 0;}
	p {font-size:12px;}
}
@media (min-width: 575px) and (max-width: 815px){
	#ram{width:70%;margin:50% 15%;}
}
@media (min-width: 815px) and (max-width: 1100px){
	#ram{width:50%;	margin:50% 25%;}
}
		</style>
		</head>
	<body>
<?php
$p_1 = trim($_POST['pass_1']); // Удаляет все лишнее и записываем значение в переменную //$login
$p_2 = trim($_POST['pass_2']);
if(mb_strlen($p_1) < 5 || mb_strlen($p_1) > 15){
	echo "<div id='ram'><h3>Недопустимая длина пароля.<br><a href='польз.html'>Назад к заполнению</a></h3></div><br>";
	exit();
} 
if(mb_strlen($p_2) < 5 || mb_strlen($p_2) > 15){
	echo "<div id='ram'><h3>Недопустимая длина пароля.<br><a href='польз.html'>Назад к заполнению</a></h3></div><br>";
	exit();
}
//проверка на пустые поля
if(empty($p_1) or empty($p_2))
	{
		echo "<div id='ram'><h3>Не все поля заполнены<br><a href='польз.html'>Назад к заполнению</a></h3></div><br>";
	}
//подключение к бд
$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='new';
$link = mysqli_connect($mysql_host, $mysql_login, $mysql_pass, $mysql_db); // Соединяемся с базой
   // Соединение установить не удалось
    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }
$mysqli = new mysqli($mysql_host, $mysql_login, $mysql_pass, $mysql_db);
//забыли пароль
if(isset($_POST['button3']))
{
	$sql ="SELECT `id_client` FROM `client` WHERE `pass` = '$p_1'";
	if($result = $link->query($sql)){
    while($row = $result->fetch_array()){
        $userarc= $row["id_client"];
    }
}
}
//если есть совпадение
if(!empty($userarc))
{
	$sql_1="UPDATE `client` SET `pass` = '$p_2' WHERE `id_client` = '$userarc'";
	echo "<div id='ram'><h3>Ваш пароль изменен!<br>Чтобы перейти в окно авторизации/регистрации перейдите по <a style='text-decoration: underline;color:#ffbb29;' href='польз.html'>ссылке</h3></div>";
}
else
{
	echo "<div id='ram'><h3>Старый пароль неверен!<br>Повторите снова по <a style='text-decoration: underline;color:#ffbb29;' href='заб_пар.html'>ссылке</h3></div>";
}
?>
</body>
</html>