<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Запись на курс</title>

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
		</style>
		</head>
	<body>
<?php 
//оплата
if(isset($_POST['button1']))
{
$name = trim($_POST["name"]); 
$number = trim($_POST['number']);
$email = trim($_POST['email']);  
$number_card = trim($_POST['number_card']); 
$expdate = trim($_POST['expdate']);
$kurs=trim($_POST['kurs']);

//проверка объема полей
if(mb_strlen($name) < 3 || mb_strlen($name) > 15){
	echo "<div id='ram'><h3>Недопустимая длина имени.<br><a href='запись.php'>Назад к заполнению</a></h3></div><br>";
	exit();
}
else if(mb_strlen($number) < 6 || mb_strlen($number) > 16){
	echo "<div id='ram'><h3>Недопустимая длина номера телефона.<br><a href='запись.php'>Назад к заполнению</a></h3></div><br>";
	exit();
} 
else if(mb_strlen($email) < 3|| mb_strlen($email) > 12){
	echo "<div id='ram'><h3>Недопустимая длина почты.<br><a href='запись.php'>Назад к заполнению</a></h3></div><br>";
	exit();
} 
else if(mb_strlen($number_card) < 10 || mb_strlen($number_card) > 33){
	echo "<div id='ram'><h3>Недопустимая длина номера карты.<br><a href='запись.php'>Назад к заполнению</a></h3></div><br>";
	exit();
} 
else if(mb_strlen($expdate) < 3 || mb_strlen($expdate) > 5){
	echo "<div id='ram'><h3>Недопустимая длина конечной даты.<br><a href='запись.php'>Назад к заполнению</a></h3></div><br>";
	exit();
} 
//проверка на пустые поля
if(empty($name) or empty($number) or empty($email) or empty($number_card) or empty($expdate))
	{
		echo "<div id='ram'><h3>Не все поля заполнены<br><a href='запись.php'>Назад к заполнению</a></h3></div><br>";
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
  session_start();
$packet=$_SESSION['packet'];
$sq="SELECT * FROM `packet` WHERE `name` = '$packet'";
	if($res = $link->query($sq)){
    while($row = $res->fetch_array()){
        $packet_id = $row["id_packet"];}}
$pr=$_COOKIE['price_itog'];

	$sql ="SELECT * FROM `client` WHERE `name` = '$name'";
	if($result = $link->query($sql)){
    while($row = $result->fetch_array()){
        $user_id = $row["id_client"];}}
		
		//если не найден id
		if(empty($user_id))
		{echo "<div id='ram'><h3>Вы не зарегестрировались!<br>Чтобы записаться на курс, необходимо зарегестрироваться по <a style='text-decoration: underline;color:#ffbb29;' href='польз.html'>ссылке</h3></div>";
		} 
		else {
		  $sql_1 ="SELECT * FROM `client` WHERE `id_client` = '$user_id'";
		  if($result_1 = $link->query($sql_1)){
		    while($row = $result_1->fetch_array()){
			$user_phone = $row["phone"];
			$user_email = $row["email"];}}
		  if(empty($user_phone) and empty($user_email))
		  {
			  echo "<div id='ram'><h3>Данные о телефоне и электронной почте не соответствуют имеющимся в базе данных.<br>Пожалуйста, проверьте корректность введенных данных или измените их в личном кабинете, авторизовавшись по <a style='text-decoration: underline;color:#ffbb29;' href='польз.html'>ссылке</h3></div>";
		  }
		  else
		  {
			$sql_2 ="SELECT * FROM `kurs` WHERE `name` = '$kurs'";
			if($result_2 = $link->query($sql_2)){
		    while($row = $result_2->fetch_array()){
			$kurs_id = $row["id_kurs"];}}
			
			$sql_3 = mysqli_query($link,"INSERT INTO `zakaz` (`price`,`card`,`data_end`,`id_client`,`id_packet`,`id_kurs`) VALUES('$pr','$number_card', '$expdate','$user_id','$packet_id','$kurs_id')");
	if ($sql_3) {
		echo "<div id='ram'><h3>Вы записаны на курс!<br>Скоро с вами свяжется менеджер.<br> Вы сможете посмотреть свой курс в профиле по <a style='text-decoration: underline;color:#ffbb29;' href='профиль.php'>ссылке </h3></div>";
		} else {
		  echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
		}
	 }
		  }
}
?> 
</body>
</html>