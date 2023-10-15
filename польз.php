
<?php
$login = trim($_GET['login']); 
$pass = trim($_GET['password']);
//проверка объема полей
if(mb_strlen($login) < 5 || mb_strlen($login) > 15){
	echo "<div id='ram'><h3>Недопустимая длина логина.</h3></div><br>";
	exit();
}
else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 15){
	echo "<div id='ram'><h3>Недопустимая длина пароля.</h3></div><br>";
	exit();
} 
//проверка на пустые поля
if(empty($login) or empty($pass))
	{
		echo "<div id='ram'><h3>Не все поля заполнены<br><a href='вход.html'>Назад к заполнению</a></h3></div><br>";
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
//зарегистрироваться
if(isset($_POST['button2']))
{
	$sql ="SELECT * FROM `client` WHERE `login` = '$login'";
	if($result = $link->query($sql)){
    while($row = $result->fetch_array()){
        $userarc= $row["id_client"];
        $userlogin = $row["login"];
        $userpass = $row["pass"];
    }
}
	//если уже существует
	if(!empty($userlogin)){
	echo "<div id='ram'><h3>Данный логин уже используется!<br>Вы можете попробовать снова, перейдя по <a style='text-decoration: underline;' href='польз.php'>ссылке</a></h3></div>";
	exit();} 
	else{
	//если логин новый
	$sql = mysqli_query($link,"INSERT INTO `client` (`login`, `pass`) VALUES('{$_POST['login']}', '{$_POST['password']}')");
	if ($sql) {
		echo "<div id='ram'><h3>Ваше имя,логин и пароль записаны!<br>В личном кабинете вы сможете дополнить свои данные (телефон, почту, адрес) по <a style='text-decoration: underline;' href='профиль.php'>ссылке</h3></div>";
		} else {
		  echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
		}
	 }
	 $sql1 ="SELECT * FROM `client` WHERE `login` = '$login'";
	if($result1 = $link->query($sql1)){
    while($row1 = $result1->fetch_array()){
        $userarc_1= $row1["id_client"];
        $userlogin_1 = $row1["login"];
        $userpass_1 = $row1["pass"];
    }
		 //запоминаем id авториз.пользователя
	 echo $userarc_1;
	setcookie('account_code',$userarc_1);
}
}
//авторизоваться
if(isset($_POST['button1'])){
	$sql ="SELECT * FROM `client` WHERE `login` = '$login'";
	if($result = $link->query($sql)){
    while($row = $result->fetch_array()){
        $userarc= $row["id_client"];
        $userlogin = $row["login"];
        $userpass = $row["pass"];
    }
}
	//если новый
	if(empty($userlogin)){
		echo "<div id='ram'><h3>Данный логин новый!<br>Нажмите на кнопку 'Войти', перейдя по <a style='text-decoration: underline;' href='польз.php'>ссылке</a></h3></div>";
	}
	else
	{
		echo "<div id='ram'><h3>Вы авторизовались!<br>Чтобы перейти в свой личный кабинет перейдите по <a style='text-decoration: underline;' href='профиль.php'>ссылке</h3></div>";
	}
	//запоминаем id авториз.пользователя
	setcookie('account_code',$userarc);
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Авторизация/Регистрация</title>
		<!--штучка возле названия страницы-->
		<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
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
h4 {
  font-weight: 600;
}
h6 span{
  padding: 0 20px;
  text-transform: uppercase;
  font-weight: 700;
}
.section{
  position: relative;
  width: 100%;
  display: block;
}
.full-height{
  min-height: 100vh;
}
[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
  position: absolute;
  left: -9999px;
}
.checkbox:checked + label,
.checkbox:not(:checked) + label{
  position: relative;
  display: block;
  text-align: center;
  width: 60px;
  height: 16px;
  border-radius: 8px;
  padding: 0;
  margin: 10px auto;
  cursor: pointer;
  background-color: #f7d263;
}
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before{
  position: absolute;
  display: block;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  color: #ffeba7;
  background-color: #2d2d2d;
  font-family: 'unicons';
  content: '\eb4f';
  z-index: 20;
  top: -10px;
  left: -10px;
  line-height: 36px;
  text-align: center;
  font-size: 24px;
  transition: all 0.5s ease;
}
.checkbox:checked + label:before {
  transform: translateX(44px) rotate(-270deg);
}


.card-3d-wrap {
  position: relative;
  width: 440px;
  max-width: 100%;
  height: 400px;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  perspective: 800px;
  margin-top: 60px;
}
.card-3d-wrapper {
  width: 100%;
  height: 100%;
  position:absolute;    
  top: 0;
  left: 0;  
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  transition: all 600ms ease-out; 
}
.card-front, .card-back {
  width: 100%;
  height: 100%;
  background-color: #2d2d2d;
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
  background-position: bottom center;
  background-repeat: no-repeat;
  background-size: 300%;
  position: absolute;
  border-radius: 6px;
  left: 0;
  top: 0;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
}
.card-back {
  transform: rotateY(180deg);
}
.checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
  transform: rotateY(180deg);
}
.center-wrap{
  position: absolute;
  width: 100%;
  padding: 0 35px;
  top: 50%;
  left: 0;
  transform: translate3d(0, -50%, 35px) perspective(100px);
  z-index: 20;
  display: block;
}


.form-group{ 
  position: relative;
  display: block;
    margin: 0;
    padding: 0;
	width:67%;
}
.form-style {
  padding: 13px 20px;
  padding-left: 55px;
  height: 48px;
  width: 100%;
  font-weight: 500;
  border-radius: 4px;
  font-size: 14px;
  line-height: 22px;
  letter-spacing: 0.5px;
  outline: none;
  color: #c4c3ca;
  background-color: #1c1c1c;
  border: none;
  -webkit-transition: all 200ms linear;
  transition: all 200ms linear;
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}
.form-style:focus,
.form-style:active {
  border: none;
  outline: none;
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}
.input-icon {
  position: absolute;
  top: 0;
  left: 18px;
  height: 48px;
  font-size: 24px;
  line-height: 48px;
  text-align: left;
  color: #ffeba7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input:-ms-input-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input::-moz-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:-moz-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input::-webkit-input-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus:-ms-input-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus::-moz-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus:-moz-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus::-webkit-input-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.btn{  
  border-radius: 4px;
  height: 44px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  -webkit-transition : all 200ms linear;
  transition: all 200ms linear;
  padding: 0 30px;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
  border: none;
  background-color:#f7d263;
  color: #2d2d2d;
  box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
  margin-top:5%;
}
.btn:active,
.btn:focus{  
  background-color: #ffa742;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}
.btn:hover{  
  background-color:  #ffa742;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
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
	<div class="section" >
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log" style='margin:3% auto;'></label>				
						<div class="card-3d-wrap mx-auto" style='margin:3% auto;'>
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
									
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Авторизоваться</h4>
											<div class="form-group">
												<input type="email" name="login" class="form-style" placeholder="Ваш логин" id="login" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Ваш пароль" id="password" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<!--<a href="#" class="btn mt-4">Войти</a>-->
											<input type="submit" name="button1" value="Войти" class="btn mt-4"/>
                            				<p class="mb-0 mt-4 text-center"><a href="заб_пар.php" class="link">Забыли пароль?</a></p>
											<!--<p class="mb-0 mt-4 text-center"><input type="submit" name="button3" value="Забыли пароль?"  class="link" style='color:#000000'/></p>-->
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Регистрация</h4>
											<!--имя-->
											<div class="form-group">
												<input type="text" name="f" class="form-style" placeholder="Ваше имя" id="f" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<!--
											<!--телефон
											<div class="form-group mt-2">
												<input type="text" name="number" class="form-style" placeholder="Ваш телефон" id="number" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>
											<!--почта
											<div class="form-group mt-2">
												<input type="email" name="email" class="form-style" placeholder="Ваша почта" id="email" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>
											<!--адрес
											<div class="form-group mt-2"> 
											<input type="email" name="adress" class="form-style" placeholder="Ваш адрес" id="adress" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	-->
											<!--логин-->
											<div class="form-group mt-2">
												<input type="email" name="login" class="form-style" placeholder="Ваш логин" id="login" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<!--пароль-->
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Ваш пароль" id="password" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input type="submit" name="button2" value="Зарегистрироваться" class="btn mt-4"/>
											<!--<a href="#" class="btn mt-4">Зарегистрироваться</a>-->
				      					</div>
			      					</div>
			      				</div>
								
			      			</div>
							
			      		</div>
							<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href='index.html'>Вернуться на главную</a></div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
	</body>
</html>

