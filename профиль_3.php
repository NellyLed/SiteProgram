<?php
$mysqli = new mysqli("localhost", "root", "", "new");
$mysqli->set_charset("utf8");
$resultArr = array();
$k=$_COOKIE['account_code'];
$executingFetchQuery = $mysqli->query("SELECT * FROM `client` WHERE `id_client`='$k'");
if($executingFetchQuery)
{
   while($row = $executingFetchQuery->fetch_array()){
        $us_name_1 = $row["name"];
}
}
$ex_2 = $mysqli->query("SELECT * FROM `zakaz` WHERE `id_client`='$k'");
if($ex_2)
{
   while($row = $ex_2->fetch_array()){
        $us_kurs_1 = $row["id_kurs"];
		$us_card_1 = $row["card"];
		$us_dat_end_1 = $row["data_end"];
}
}
$ex_3 = $mysqli->query("SELECT * FROM `kurs` WHERE `id_kurs`='$us_kurs_1'");
if($ex_3)
{
   while($row = $ex_3->fetch_array()){
        $us_kurs_name = $row["name"];
		$us_kurs_price = $row["price"];
}
}
$old_pric=rand($us_kurs_price,200000);
if($us_kurs_1==1){$file='python.jpg';}
else if ($us_kurs_1==2){$file='java_1.jpg';}
else if ($us_kurs_1==3){$file='веб_1.jpg';}
else if ($us_kurs_1==4){$file='тестировщик_1.jpg';}
else if ($us_kurs_1==5){$file='с++_2.jpg';}
else if ($us_kurs_1==6){$file='frontend_1.jpg';}
else if ($us_kurs_1==7){$file='data_1.jpg';}
else if ($us_kurs_1==8){$file='dev_1.jpg';}
else if ($us_kurs_1==9){$file='1c_1.png';}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Мои платежи</title>
		<link rel='stylesheet' href='проф_2.css'>
				<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
*{margin: 0;padding: 0;box-sizing: border-box;list-style: none;font-family: 'Montserrat', sans-serif}
.container{border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;background-color: #eee}
.navbar-brand{text-transform: uppercase;font-size: 14px;font-weight: 800}nav{border-top-left-radius: 25px;border-top-right-radius: 25px;background-color: white}
.order .card{position: relative;background: #fff;box-shadow: 0 0 15px rgba(0, 0, 0, .1)}

	html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}


.cart{line-height: 1}
.icon{background-color: #eee;width: 40px;height: 40px;display: flex;justify-content: center;align-items: center;border-radius: 50%}
.pic{width:20%;height: 15%;border-radius: 5px}td{vertical-align: middle}
.red{color: #fd1c1c;font-weight: 600}
.b-bottom{border-bottom: 2px dotted black;padding-bottom: 20px}
p{margin: 0px}


table input{width: 40px;border: 1px solid #eee}
input:focus{border: 1px solid #eee;outline: none}
/*.round{background-color: #eee;height: 40px;width: 40px;border-radius: 50%;display: flex;align-items: center;justify-content: center}*/
.payment-summary .unregistered{width: 100%;display: flex;align-items: center;justify-content: center;background-color: #eee;text-transform: uppercase;font-size: 14px}
.payment-summary input{width: 100%;margin-right: 20px}
.payment-summary .sale{width: 100%;background-color: #e9b3b3;text-transform: uppercase;font-size: 12px;display: flex;justify-content: center;align-items: center;padding: 5PX 0}
.red{color: #fd1c1c}

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700,500&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
.wrapper {
    box-shadow: 3px 3px 5px #1b1b1ba2;

}

.cc{
    background-color: #fadfad;
}

p {
    margin: 0px;
}

.h8 {
    font-size: 25px;
    font-weight: 600;
    color: white;
}

.card .atm {
    width: 90px;
    height: 90px;
    object-fit: cover;
}

.card .visa {
    width: 50px;
    height: 20px;
    object-fit: fill;
}

.card .master {
    width: 50px;
    height: 50px;
    object-fit: fill;
}

.debit-card {
    width: 100%;
    height: 180px;
    padding: 20px;
    background-color: #0093E9;
    background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
    position: relative;
    border-radius: 5px;
    box-shadow: 3px 3px 5px #0000001a;
    transition: all 0.3s ease-in;
    cursor: pointer;
}

.debit-card:hover {
    box-shadow: 5px 3px 5px #000000a2;
}

.card-2 {
    background-color: #21D4FD;
    background-image: linear-gradient(116deg, #21D4FD 0%, #B721FF 100%);
}

.text-muted {
    font-size: 0.8rem;
}

.text-white {
    font-size: 14px;
}

.input {
    position: absolute;
    top: 6px;
    right: 0;
}

input[type="radio"] {
    appearance: none;
    width: 20px;
    height: 20px;
    background-color: #eee;
    position: relative;
    border-radius: 3px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    outline: none;
}

input[type="radio"]:after {
    position: absolute;
    width: 100%;
    height: 100%;
    font-family: "Font Awesome 5 Free";
    font-weight: 600;
    content: "\f00c";
    color: #fff;
    font-size: 15px;
    display: none;
}

input[type="radio"]:checked,
input[type="radio"]:checked:hover {
    background-color: blue;
}

input[type="radio"]:checked::after {
    display: flex;
    align-items: center;
    justify-content: center;
}

input[type="radio"]:hover {
    background-color: #ddd;
}
.pic{vertical-align:left; margin-right:10px;}
#two_1{display:none;}
#one_1{background-color:#efa741;color:white;padding:7px; border: 2px solid #ffffff;}

		/*адаптивность*/
		@media (min-width: 1310px) and (max-width: 1900px)
		{
			.b{width: 90%;height: 90%;margin: 3% auto;
		}

		}
		@media (min-width: 1199px) and (max-width: 1310px)
		{
			.b{width: 95%;height: 90%;margin: 3% auto;}
			.panel{width:90%;}
			.cc{width:90%;}
			.card{width:70%;}
			.profile-nav .user-heading a img {width: 70px;height: 70px;}
			.profile-nav .user-heading h1 {font-size: 16px;}
			.profile-nav .user-heading p {font-size: 12px;}
			.bio-graph-heading {padding: 30px 20px;font-size: 14px;}
			.profile-nav ul > li > a > i{font-size: 14px;}
		}
		@media (min-width: 760px) and (max-width: 1199px)
		{
			.b{width: 95%;height: 90%;margin: 3% auto;}
			.panel{width:90%;}
			.cc{width:90%;}
			.card{width:35%;}
			.profile-nav .user-heading a img {width: 70px;height: 70px;}
			.profile-nav .user-heading h1 {font-size: 16px;}
			.profile-nav .user-heading p {font-size: 12px;}
			.bio-graph-heading {padding: 30px 20px;font-size: 14px;}
			.profile-nav ul > li > a > i{font-size: 14px;}
		}
		@media (min-width:560px) and (max-width: 760px)
		{
			.b{width: 98%;height: 60%;margin: 3% auto;}
			.panel{width:98%;}
			.cc{width:98%;}
			.card{width:35%;}
			.profile-nav .user-heading a img {width: 100px;height: 100px;}
			.profile-nav .user-heading h1 {font-size: 14px;}
			.profile-nav .user-heading p {font-size: 10px;}
			.bio-graph-heading {padding: 25px 15px;font-size: 12px;}
			.profile-nav ul > li > a > i{font-size: 12px;}
			table td{display:inline-block;}
		}
			@media (min-width:400px) and (max-width: 560px)
		{
			.b{width: 98%;height: 60%;margin: 3% auto;}
			.panel{width:98%;}
			.cc{width:98%;}
			.card{width:50%;}
			.profile-nav .user-heading a img {width: 100px;height: 100px;}
			.profile-nav .user-heading h1 {font-size: 14px;}
			.profile-nav .user-heading p {font-size: 10px;}
			.bio-graph-heading {padding: 25px 15px;font-size: 12px;}
			.profile-nav ul > li > a > i{font-size: 12px;}
			table td{display:inline-block;}
			
		}
		@media (min-width:250px) and (max-width: 400px)
		{
			.b{width: 100%;height: 60%;margin: 3% auto;}
			.panel{width:100%;}
			.cc{width:100%;}
			.card{width:65%;}
			.profile-nav .user-heading a img {width: 100px;height: 100px;}
			.profile-nav .user-heading h1 {font-size: 14px;}
			.profile-nav .user-heading p {font-size: 10px;}
			.bio-graph-heading {padding: 25px 15px;font-size: 12px;}
			.profile-nav ul > li > a > i{font-size: 12px;}
			table td{display:inline-block;}
			.pic{display:none;}
		}
</style>
		</head>
	<body style='background-color:#313440'>
<div class='b'>
   <div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="prof_1.png" alt="">
              </a>
              <h1><?php echo $us_name_1;?></h1>
              <p>Здравствуйте!</p>
          </div>

          <ul class="nav nav-pills nav-stacked">
              <li><a href="профиль.php"> <i class="fa fa-user"></i>Профиль<span class="label label-warning pull-right r-activity">4</span></a></li>
              <li><a href="профиль_2.php"><i class="fa fa-folder-open" aria-hidden="true"></i></i>Мои курсы</a></li>
              <li class="active"><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i>Платежи</a></li>
			  <li><a href="профиль_4.php"><i class="fa fa-calendar"></i>Каледарь развития</a></li>
			  <li><a href="профиль_5.php"><i class="fa fa-file" aria-hidden="true"></i>Новинки курсов</a></li>
			  <li><a href="index.html"><i class="fa fa-times" aria-hidden="true"></i>Выход</a></li>
          </ul>
      </div>
  </div>
	<div class="profile-info col-md-9">
      <div class="panel">
          <form>
              <textarea placeholder="Ваши мысли" rows="2" class="form-control input-lg p-text-area"></textarea>
          </form>
          <footer class="panel-footer">
              <button class="btn btn-warning pull-right">Сохранить</button><br><br>
          </footer>
      </div>
      <div class="panel">
          <div class="bio-graph-heading">
              Не волнуйтесь, если что-то не работает. Если бы всё работало, вас бы уволили.
          </div>
		 </div> 

            <p class="pb-2 fw-bold"><b><i>Оплаченные курсы</i></b></p>
            <div class="cc">

                <div>
                    <div class="table-responsive px-md-4 px-2 pt-3">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div> <img class="pic" src=<?php echo $file;?> alt=""> 
											<b><?php echo $us_kurs_name; ?></b></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <p class="pe-3"><span class="red"><?php echo $us_kurs_price;?></span></p>
                                            <p>Раньше - <?php echo $old_pric; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center"> Кол-во<span class="pe-3"> <input class="ps-2" type="number" value="1"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div> <img class="pic" src="https://www.melhoresdestinos.com.br/wp-content/uploads/2021/08/investimento-capa.jpg" alt=""><b>Анализ и оценка рынка</b></div> 
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <p class="pe-3"><span class="red">Бесплатно</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center"> Кол-во<span class="pe-3"> <input class="ps-2" type="number" value="1"></span>
                                        </div>
                                    </td>
                                </tr>
								<br>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
			<br>	
<p class="pb-2 fw-bold"><b><i>Банковские карты</i></b></p>
		<div class='row'>
			<div class="col-lg-4 delivery px-md-3 px-1">
		
        <div class="card px-4">
            <div class="debit-card mb-3">
            
                    <label class="d-block">
                        <div class="d-flex position-relative">
                            <div>
                                <img src="https://www.freepnglogos.com/uploads/visa-inc-logo-png-11.png" class="visa"
                                    alt="">
                                <p class="mt-2 mb-4 text-white fw-bold"><?php echo $us_name_1;?></p>
                            </div>
                            <div class="input">
                                <input type="radio" name="card" id="check">
                            </div>
                        </div>
                    </label>
                    <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                        <p><?php echo $us_card_1;?></p>
                        <p><?php echo $us_dat_end_1; ?></p>
                    </div>
           
            </div>
			<br>
			
            <button id='one_1'>
                Добавить (бонусную,скидочную) 
            </button>
			

		</div>

	  </div>
	  <div  id='two_1'>
	 <div class="col-lg-4 delivery px-md-3 px-1">

        <div class="card px-4">
	<div class="debit-card card-2 mb-4">
               
                    <label class="d-block">
                        <div class="d-flex position-relative">
                            <div>
                                <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-png-transparent-svg-vector-bie-supply-0.png"
                                    alt="master" class="master">
                                <p class="text-white fw-bold"><?php echo $us_name_1;?></p>
                            </div>
                            <div class="input">
                                <input type="radio" name="card" id="check">
                            </div>
                        </div>
                    </label>
                    <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                        <p class="m-0">5540 2345 3453 2343</p>
                        <p class="m-0">05/28</p>
                    </div>
            
            </div>
				</div>
	</div>
	<div class="col-lg-4 delivery px-md-3 px-1">
	<div class="card px-4">
            <div class="debit-card mb-3">
            
                    <label class="d-block">
                        <div class="d-flex position-relative">
                            <div>
                                <img src="https://www.freepnglogos.com/uploads/visa-inc-logo-png-11.png" class="visa"
                                    alt="">
                                <p class="mt-2 mb-4 text-white fw-bold"><?php echo $us_name_1;?></p>
                            </div>
                            <div class="input">
                                <input type="radio" name="card" id="check">
                            </div>
                        </div>
                    </label>
                    <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                        <p>4989 1237 1234 4532</p>
                        <p>01/28</p>
                    </div>
           
            </div>
    
		</div>
	</div>
	</div>
	</div>
<br>


</div>
</div>

</div>
</div>
<br>
<script type="text/javascript" src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){  //дожидаемся загрузки страницы
    $('#one_1').on("click", function(){  //вешаем событие на клик по кнопке id="btn1"
        $('#two_1').toggle(); //включает/выключает элемент id="text"
    });
});
</script>
</body>
</html>