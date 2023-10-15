<?php 

$page=$_SERVER['HTTP_REFERER'];//предыдущая страница
if($page='http://ind/python_%D0%B1%D0%B0%D0%B7.%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80.php'){$id_k='1';}
else if($page='http://ind/%D0%BE%D1%81_java.php'){$id_k='2';}
else if($page='http://ind/%D0%B2%D0%B5%D0%B1-%D1%80%D0%B0%D0%B7%D1%80_%D0%BE%D1%81.h.php'){$id_k='3';}
else if($page='http://ind/%D0%BE%D1%81_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80.php'){$id_k='4';}
else if($page='http://ind/c++_plan.php'){$id_k='5';}
else if($page='http://ind/fr.php'){$id_k='6';}
else if($page='http://ind/%D0%BE%D1%81_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7.php'){$id_k='7';}
else if($page='http://ind/dev_o.php'){$id_k='8';}
else if($page='http://ind/1c_c.php'){$id_k='9';}
//подключение к бд
$mysqli = new mysqli("localhost", "root", "", "new");
$mysqli->set_charset("utf8");
$executingFetchQuery = $mysqli->query("SELECT * FROM `kurs` WHERE `id_kurs`='$id_k'");
if($executingFetchQuery)
{
   while($row = $executingFetchQuery->fetch_array()){
        $name_kurs = $row["name"];
		$price_kurs = $row["price"];
}
}
session_start();
$packet=$_SESSION['packet'];
$number_sale=$_COOKIE['$sale_ever'];
$price_itog=$price_kurs-($price_kurs*$number_sale/100);
setcookie('price_itog',$price_itog);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Запись</title>
			<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


		<style>
			html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}
.b
{
	background: #2d2d2d;
	width: 60%;
  height: 90%;
    box-shadow: 3px 3px 5px #1b1b1ba;
	border-radius:10px;
	margin: 3% auto;
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
	margin:3% auto;
}

.card{
	background: #ffcd75;
	color: #000;
	width: 30%;
	border-radius:10px;
}
.mrow{
	margin-top: 30px;
	margin-bottom:30px; 
}
img{
	margin-right: 10px;
}
.main span:hover{
	text-decoration: underline;
	cursor: pointer;
	
}
.mrow img:hover{
	border-bottom: 1px solid #000;
	cursor: pointer;
}
.btn-primary{
	border: none;
	border-radius: 30px;
	background:#f7943c;
}
.btn-primary:hover{background:#ff890a;}
h5{
	padding-top: 8px;
}

.form-group{
	position: relative;
	margin-bottom: 2rem;
}
.form-control-placeholder{
	position: absolute;
	top: 6px;
	padding: 7px 0 0 10px;
	transition: all 200ms;
	opacity: 0.5;
	color: #000!important;
	font-size: 75%;
}
.form-control:focus+.form-control-placeholder,
.form-control:valid+.form-control-placeholder{
	font-size: 75%;
	transform: translate3d(0,-100%,0);
	opacity: 1;
	top: 10px;
}
.form-control{
	background: transparent;
	border: none;
	border-bottom: 1px solid #fff!important;
	border-radius: 0;
	outline: 0;
}
.form-control:focus,
.form-control:after{
	outline-width: 0;
	border-bottom: 1px solid #fff!important;
	background: transparent;
	box-shadow: none;
	border-radius: 0;
	color: #000;
	letter-spacing: 1px;
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
	@media (min-width:260px) and (max-width: 320px){
			.card{
		width: 90%;}
		h3{font-size:18px;}
		h5{font-size:16px;}
	}
	@media (min-width:320px) and (max-width: 420px){
			.card{
		width: 80%;}
		h3{font-size:20px;}
		h5{font-size:18px;}
	}
	@media (min-width: 420px) and (max-width: 570px){
			.card{
		width: 70%;}
		h3{font-size:20px;}
		h5{font-size:18px;}
	}
	@media (min-width: 570px) and (max-width: 700px){
			.card{
		width: 60%;}
		h3{font-size:22px;}
		h5{font-size:20px;}
	}
	@media (min-width: 700px) and (max-width: 1000px){
				.card{
		width: 50%;}
		h3{font-size:24px;}
	}
	@media (min-width: 1000px) and (max-width: 1500px){
		.card{
		width: 40%;}
		h3{font-size:26px;}
	}
		</style>
	</head>
	<body >
	
			<div class="container-fluid" >
	<div class="row justify-content-center">

			<div class="card my-4 p-3">
			<form action="res_запись.php" method="post" enctype="multipart/form-data">
				<div class="row main">
					<div class="col-12">Пожалуйста, введите ваши данные</div>
				</div>
				<div class="row">
						<div class="col-12">
							<div class="form-group">
    						<input type="text" class="form-control p-0" name="name" required><label class="form-control-placeholder p-0" for="name">Имя</label>
 						</div>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
							<div class="form-group">
    						<input type="text" class="form-control p-0" name="number" required><label class="form-control-placeholder p-0" for="number">Телефон</label>
 						</div>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
							<div class="form-group">
    						<input type="email" class="form-control p-0" name="email" required><label class="form-control-placeholder p-0" for="email">Почта</label>
 						</div>
						</div>
				</div>
				<div class="row main">
					<div class="col-12">Пожалуйста,оплатите курс</div>
				</div>
					<div class="row justify-content-center mrow">
					</div>
					<form class="form-card">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
    						<input type="text" class="form-control p-0" name='kurs' value=<?php echo $name_kurs;?> required><label class="form-control-placeholder p-0" >Курс</label>
 						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
    						<input type="text" class="form-control p-0" name="packet" value=<?php echo $packet;?> required><label class="form-control-placeholder p-0" for="packet">Пакет услуг</label>
 						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
    						<input type="text" class="form-control p-0" name="sale" value=<?php echo $number_sale;?> required><label class="form-control-placeholder p-0" for="sale">Размер скидки</label>
 						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
    						<input type="text" class="form-control p-0" name="number_card" required><label class="form-control-placeholder p-0" for="number_card">Имя карты</label>
 						</div>
						</div>
					</div>
					<div class="col-sm-4 col-12">
						<div class="form-group">
    						<input type="text" class="form-control p-0" name="expdate" required><label class="form-control-placeholder p-0" for="expdate">Конечная дата</label>
 						</div>
					</div>
					<div class="col-sm-4 col-12">
						<div class="form-group">
    						<input type="password" class="form-control p-0" name="passw" required><label class="form-control-placeholder p-0" for="passw">CVV</label>
						</div>
					</div>
					
					<div class="row lrow mt-4 mb-3">
						<div class="col-sm-8 col-12"><h3>Стоимость:</h3></div>
						<div class="col-sm-4 col-12"><h5><?php echo $price_itog;?> &#8381; </h5></div>
					</div>
					<div class="row mb-2">
						<div class="col-sm-12">
							<!--<a type="button" class="btn btn-primary btn-block" href='python.php'>Оплатить</a>-->
							<input type="submit" name="button1" value="Оплатить" class="btn btn-primary btn-block"/>
						</div>
					</div>
					</div>
				</form>
		</form>
			</div>
		</div>
</div>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" onclick="javascript:history.back(); return false;">Назад</a></div>

	</body>
</html>