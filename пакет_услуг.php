<?php
$mysqli = new mysqli("localhost", "root", "", "new");
$mysqli->set_charset("utf8");
$resultArr = array();
$ex_1= $mysqli->query("SELECT * FROM `packet` WHERE `id_packet`=1");
if($ex_1){
    while($row = $ex_1->fetch_array()){
        $us_name_1 = $row["name"];
        $us_des_1 = $row["description"];
        $us_price_1 = $row["price"];
    }
}
$ex_2 = $mysqli->query("SELECT * FROM `packet` WHERE `id_packet`=2");
if($ex_2){
    while($row = $ex_2->fetch_array()){
        $us_name_2 = $row["name"];
        $us_des_2 = $row["description"];
        $us_price_2 = $row["price"];
    }
}
$ex_3 = $mysqli->query("SELECT * FROM `packet` WHERE `id_packet`=3");
if($ex_3){
    while($row = $ex_3->fetch_array()){
        $us_name_3 = $row["name"];
        $us_des_3 = $row["description"];
        $us_price_3 = $row["price"];
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пакет услуг</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<link rel='stylesheet' href='пакет.css'>
  </head>
  <body>
<!--галочки-->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>
<!--пакеты-->
<div class="container py-3">
  <header>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
     <h1>Наши специальные предложения</h1>
	 <p class="fs-5 text-muted" style='color:#000000;'>Ниже вы сможете выбрать пакет услуг, дающий дополнительные возможности в обучении, практике с известнейшими преподавателями.</p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><?php echo $us_name_1;?></h4>
          </div>
          <div class="card-body">
		  <form action="res_пакет.php" method="post" enctype="multipart/form-data">
            <h1 class="card-title pricing-card-title" style='color:#2d2d2d;'><?php echo $us_price_1;?><small class="text-muted fw-light">% скидка.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $us_des_1;?></li>
            </ul>
            <!--<button type="button" class="w-100 btn btn-lg btn-primary" style='background-color:#ffa742;color:#2d2d2d;font-weight:bold;'>Попробовать </button>-->
			<input type="submit" name="button1" value="Попробовать" class="w-100 btn btn-lg btn-primary" style='background-color:#ffa742;color:#2d2d2d;font-weight:bold;'/>
			</form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><?php echo $us_name_2;?></h4>
          </div>
          <div class="card-body">
		  <form action="res_пакет.php" method="post" enctype="multipart/form-data">
            <h1 class="card-title pricing-card-title" style='color:#2d2d2d;'><?php echo $us_price_2;?><small class="text-muted fw-light">% скидка.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $us_des_2;?></li>
            </ul>
			<input type="submit" name="button2" value="Попробовать" class="w-100 btn btn-lg btn-primary" style='background-color:#ffa742;color:#2d2d2d;font-weight:bold;'/>
			</form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" >
          <div class="card-header py-3" >
            <h4 class="my-0 fw-normal" ><?php echo $us_name_3;?></h4>
          </div>
          <div class="card-body">
		  <form action="res_пакет.php" method="post" enctype="multipart/form-data">
            <h1 class="card-title pricing-card-title" style='color:#2d2d2d;'><?php echo $us_price_3;?><small class="text-muted fw-light">% скидка.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $us_des_3;?></li>
            </ul>
			<input type="submit" name="button3" value="Попробовать" class="w-100 btn btn-lg btn-primary" style='background-color:#ffa742;color:#2d2d2d;font-weight:bold;'/>
			</form>
          </div>
        </div>
      </div>

    </div>

    <h2 class="display-6 text-center mb-4" style='font-size:27px;color: #2d2d2d;font-weight:bold;'>Сравнение пакетов услуг</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;"><?php echo $us_name_1;?></th>
            <th style="width: 22%;"><?php echo $us_name_2;?></th>
            <th style="width: 22%;"><?php echo $us_name_3;?></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Открытый</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Частный</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Резрешения</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Разделено по темам</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Неограниченное число участников</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Супер безопасность</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
  	<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" onclick="javascript:history.back(); return false;">Назад</a>
</div>


	
  </body>
</html>
