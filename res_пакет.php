<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Пакет услуг</title>

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
	$mysqli = new mysqli("localhost", "root", "", "new");
	$mysqli->set_charset("utf8");
	$resultArr = array();
	$link = mysqli_connect("localhost", "root", "", "new"); 
	session_start();
	//проверка регистрации
	$ex_1= $mysqli->query("SELECT * FROM `packet` WHERE `id_packet`=1");
	if($ex_1){
		while($row = $ex_1->fetch_array()){
			$us_name_1 = $row["name"];
			$id_1 = $row["id_packet"];
		}
		$_SESSION['number_packet']=$id_1;
	}
	$ex_2 = $mysqli->query("SELECT * FROM `packet` WHERE `id_packet`=2");
	if($ex_2){
		while($row = $ex_2->fetch_array()){
			$us_name_2 = $row["name"];
			$id_2 = $row["id_packet"];
		}
		$_SESSION['number_packet']=$id_2;
	}
	$ex_3 = $mysqli->query("SELECT * FROM `packet` WHERE `id_packet`=3");
	if($ex_3){
		while($row = $ex_3->fetch_array()){
			$us_name_3 = $row["name"];
			$id_3 = $row["id_packet"];
		}
		$_SESSION['number_packet']=$id_3;
	}
	if(isset($_POST['button1']))
		{
			if(isset($_COOKIE['account_code']))
			{
				$k=$_COOKIE['account_code'];
				$query="SELECT `id_client` FROM `client` WHERE `id_client`= '$k'";
				$result=$mysqli->query($query);
				if($result)
				{
					if(mysqli_num_rows($result)>0)
					{		
					$_SESSION['packet']=$us_name_1;
					echo "<div id='ram'><h3>Ваш пакет услуг ".$us_name_1." добавлен.<br>Чтобы продолжить запись на курс, перейдите по <a style='text-decoration: underline;color:#ffbb29;' href='sale.php'>ссылке</h3></div>";
					}
				}
			}
			else
			{
				echo "<div id='ram'><h3>Войдите в личный кабинет, чтобы продолжить, перейдя по <a style='text-decoration: underline;color:#ffbb29;' href='польз.html'>ссылке </h3></div>";
			}
		}
	if(isset($_POST['button2']))
		{
			if(isset($_COOKIE['account_code']))
			{
				$k=$_COOKIE['account_code'];
				$query="SELECT `id_client` FROM `client` WHERE `id_client`='$k'";
				$result=$mysqli->query($query);
				if($result)
				{
					if(mysqli_num_rows($result)>0)
					{		
					$_SESSION['packet']=$us_name_2;
					echo "<div id='ram'><h3>Ваш пакет услуг ".$us_name_2." добавлен.<br>Чтобы продолжить запись на курс, перейдите по <a style='text-decoration: underline;color:#ffbb29;' href='sale.php'>ссылке</h3></div>";
					}
				}
			}
			else
			{
				echo "<div id='ram'><h3>Войдите в личный кабинет, чтобы продолжить, перейдя по <a style='text-decoration: underline;color:#ffbb29;' href='польз.html'>ссылке </h3></div>";
			}
		}
	if(isset($_POST['button3']))
		{
			if(isset($_COOKIE['account_code']))
			{
				$k=$_COOKIE['account_code'];
				$query="SELECT `id_client` FROM `client` WHERE `id_client`='$k'";
				$result=$mysqli->query($query);
				if($result)
				{
					if(mysqli_num_rows($result)>0)
					{		
					$_SESSION['packet']=$us_name_3;
					echo "<div id='ram'><h3>Ваш пакет услуг ".$us_name_3." добавлен.<br>Чтобы продолжить запись на курс, перейдите по <a style='text-decoration: underline;color:#ffbb29;' href='sale.php'>ссылке</h3></div>";
					}
				}
			}
			else
			{
				echo "<div id='ram'><h3>Войдите в личный кабинет, чтобы продолжить, перейдя по <a style='text-decoration: underline;color:#ffbb29;' href='польз.html'>ссылке </h3></div>";
			}
		}
	?>
	</body>
	</html>