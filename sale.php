<?php
$mysqli = new mysqli("localhost", "root", "", "new");
$mysqli->set_charset("utf8");
$resultArr = array();
	session_start();
$ex_1= $mysqli->query("SELECT * FROM `sale` WHERE `id_sale`=1");
if($ex_1){
    while($row = $ex_1->fetch_array()){
        $sale_name_1 = $row["name"];
        $sale_price_1 = $row["price"];
    }
}
$ex_2= $mysqli->query("SELECT * FROM `sale` WHERE `id_sale`=2");
if($ex_2){
    while($row = $ex_2->fetch_array()){
        $sale_name_2 = $row["name"];
        $sale_price_2 = $row["price"];
    }
}
$ex_3= $mysqli->query("SELECT * FROM `sale` WHERE `id_sale`=3");
if($ex_3){
    while($row = $ex_3->fetch_array()){
        $sale_name_3 = $row["name"];
        $sale_price_3 = $row["price"];
    }
}
$ex_4= $mysqli->query("SELECT * FROM `sale` WHERE `id_sale`=4");
if($ex_4){
    while($row = $ex_4->fetch_array()){
        $sale_name_4 = $row["name"];
        $sale_price_4 = $row["price"];
    }
}
$ex_5= $mysqli->query("SELECT * FROM `sale` WHERE `id_sale`=5");
if($ex_5){
    while($row = $ex_5->fetch_array()){
        $sale_name_5 = $row["name"];
        $sale_price_5 = $row["price"];
    }
}
$ex_6= $mysqli->query("SELECT * FROM `sale` WHERE `id_sale`=6");
if($ex_6){
    while($row = $ex_6->fetch_array()){
        $sale_name_6 = $row["name"];
        $sale_price_6 = $row["price"];
    }
}
//подсчет скидки
$registration=$sale_price_1;
$k=$_COOKIE['account_code'];
if($k==100){$sot=$sale_price_2;} else{$sot=0;}
$today=date("Y-m-d");
if($today=='2023-04-04'){$hpk=$sale_price_3;}else{$hpk=0;}
$executingFetchQuery = $mysqli->query("SELECT * FROM `client` WHERE `id_client`='$k'");
if($executingFetchQuery)
{
   while($row = $executingFetchQuery->fetch_array()){
        $us_birthday = $row["date_birthday"];
}
}
if($today==$us_birthday){$d_b=$sale_price_4;}else{$d_b=0;}
if($_SESSION['number_packet']==3){$pak=$sale_price_5;} else{$pak=0;}
$ku=$_COOKIE['id_kurs'];
$k_p=$mysqli->query("SELECT * FROM `kurs` WHERE `id_kurs`='$ku'");
if($k_p){
    while($row = $k_p->fetch_array()){
        $price = $row["price"];
    }
}
if($price>99000.00){$yea=$sale_price_6;} else{$yea=0;}
$sale_ever=$registration+$sot+$hpk+$d_b+$pak+$yea;
setcookie('$sale_ever',$sale_ever);
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">
<meta name='viewport' content='width=device-width,initial-scale=1.0'>
    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />

		<title>Акции,скидки,предложения</title>
	
    <link rel="canonical" href="https://codepen.io/creativemanner/pen/NWrNWrd" />
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  
<style>
html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}
h5{text-align:justify;}
body
{
	background-image:url(фон_2.jpg);
	background-attachment:fixed; 
	background-size:cover;
	background-size: no-repeat;
    background-position: center;
	-webkit-font-smoothing:antialiased;
	-webkit-overflow-scrolling:touch;
}

.wrapper {
  margin: 10vh;
}

.card {
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  overflow: hidden;
  border-radius: 20px;
  min-height: 450px;
  box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
}
@media (max-width: 768px) {
  .card {
    min-height: 350px;
  }
    h1{font-size:25px; }
  h5{font-size:20px;}
   h4{font-size:20px;}
}
@media (max-width: 420px) {
  .card {
    min-height: 300px;
  }
  h1{font-size:20px; }
  h4{font-size:18px;}
  h5{font-size:18px;}
}
.card.card-has-bg {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  background-size: 120%;
  background-repeat: no-repeat;
  background-position: center center;
}
.card.card-has-bg:before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: inherit;
  -webkit-filter: grayscale(1);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
  filter: grayscale(100%);
}
.card.card-has-bg:hover {
  transform: scale(0.98);
  box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
  background-size: 130%;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card.card-has-bg:hover .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background: #ffb833;
  background: linear-gradient(0deg, #000000 0%, #ff9900 100%);
}

.card .card-body {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  margin-top: 50%;
}
.card:hover {
  cursor: pointer;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card:hover .card-body {
  margin-top: 30px;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background: #ffb02e;
  background: linear-gradient(#ffffff, #000000 0%, #ffc966 100%);
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
	@media (min-width: 260px) and (max-width: 340px)
		{
		.text-white{font-size:22px;}
		.u{font-size:20px;}
		.card{width:100%;text-align:center;}
		.wrapper {width:100%;margin:3% 0%;}
		h1{font-size:34px; }
		h4{font-size:25px;}
		.card .card-body { margin-top: 20%;}
		.card:hover .card-body {margin-top: 10px;}
		.back{font-size: 22px;}
		h5{font-size:23px;}
		}
		
	@media (min-width: 340px) and (max-width: 776px)
		{
		.text-white{font-size:22px;}
		.u{font-size:20px;}
		.card{width:100%;text-align:center;}
		.wrapper {width:100%;margin:3% 0%;}
		h1{font-size:36px; }
		h4{font-size:27px;}
		.card .card-body { margin-top: 20%;}
		.card:hover .card-body {margin-top: 10px;}
		.back{font-size: 22px;}
		h5{font-size:24px;}
		}	
	
	@media (min-width: 776px) and (max-width: 1000px)
		{
						.text-white{font-size:22px;}
		.u{font-size:20px;}
		.card{width:100%;}
		.wrapper {width:100%;margin:3% 2%;}
		}
		
	@media (min-width: 1000px) and (max-width: 1300px)
		{
			.text-white{font-size:22px;}
		.u{font-size:18px;}
		.card{width:100%;}
		.wrapper {width:100%;margin:3% 2%;}
		}
	}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-5">
         <h1 style='font-family:"Bookman", URW Bookman L, serif;font-weight: bold;margin-bottom:10px;' >Скидки, акции, предложения</h1>
  <h5>Ниже вы сможете выбрать наиболее подходящие для вас предложения, а также ознакомиться с теми скидками, которыми обладаете на данный момент.</h5>
      </div>
    </div>
  <div class="row">
  <!--1 часть -->
 <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" >
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <center><h4 class="card-title mt-0 "><a class="text-white" herf="#"><?php echo $sale_name_1;?></a></h4>
           <small><i class="fa fa-chain-broken" aria-hidden="true"></i> <p class='u'>Скидка:</u><?php echo $sale_price_1;?>%</small></center>
          </div>
        </div>
      </div></div>
	    <!--2 часть-->
     <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" >
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
             <center><h4 class="card-title mt-0 "><a class="text-white" herf="#"><?php echo $sale_name_2;?></a></h4>
           <small><i class="fa fa-chain-broken" aria-hidden="true"></i> <p class='u'>Скидка:</u><?php echo $sale_price_2;?>%</small></center>
          </div>
        </div>
      </div></div>
	    <!--3 часть-->
	 <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <center><h4 class="card-title mt-0 "><a class="text-white" herf="#"><?php echo $sale_name_3;?></a></h4>
           <small><i class="fa fa-chain-broken" aria-hidden="true"></i> <p class='u'>Скидка:</u><?php echo $sale_price_3;?>%</small></center>
          </div>
        </div>
      </div></div>
     <!--4 часть-->
    <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <center><h4 class="card-title mt-0 "><a class="text-white" herf="#"><?php echo $sale_name_4;?></a></h4>
           <small><i class="fa fa-chain-broken" aria-hidden="true"></i> <p class='u'>Скидка:</u><?php echo $sale_price_4;?>%</small></center>
          </div>
        </div>
      </div></div>
	    <!--5 часть-->
     <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <center><h4 class="card-title mt-0 "><a class="text-white" herf="#"><?php echo $sale_name_5;?></a></h4>
           <small><i class="far fa-clock"></i> <p class='u'>Скидка:</u><?php echo $sale_price_5;?>%</small></center>
          </div>
        </div>
      </div></div>
	  	<!--6 часть-->
     <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <center><h4 class="card-title mt-0 "><a class="text-white" herf="#"><?php echo $sale_name_6;?></a></h4>
           <small><i class="far fa-clock"></i> <p class='u'>Скидка:</u><?php echo $sale_price_6;?>%</small></center>
          </div>
        </div>
      </div></div>
</div>
  
</div>
    	<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" onclick="javascript:history.back(); return false;">Назад</a><a class="back" href='запись.php'>Дальше</a></div>
</section>

  
  
  
</body>

</html>
