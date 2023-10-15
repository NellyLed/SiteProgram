<?php
$mysqli = new mysqli("localhost", "root", "", "new");
$mysqli->set_charset("utf8");
$resultArr = array();
$k=$_COOKIE['account_code'];
$ex = $mysqli->query("SELECT * FROM `client` WHERE `id_client`='$k'");
if($ex)
{
   while($row = $ex->fetch_array()){
        $us_name = $row["name"];
}
}
$executingFetchQuery = $mysqli->query("SELECT * FROM `kurs` WHERE `id_kurs`=10");
if($executingFetchQuery)
{
   while($row = $executingFetchQuery->fetch_array()){
        $us_name_1 = $row["name"];
		$us_price_1 = $row["price"];
		$us_estimation_1 = $row["estimation"];
}
}
$executingFetchQuery_1 = $mysqli->query("SELECT * FROM `kurs` WHERE `id_kurs`=11");
if($executingFetchQuery_1)
{
   while($row = $executingFetchQuery_1->fetch_array()){
        $us_name_2 = $row["name"];
		$us_price_2 = $row["price"];
		$us_estimation_2 = $row["estimation"];
}
}
$executingFetchQuery_2 = $mysqli->query("SELECT * FROM `kurs` WHERE `id_kurs`=12");
if($executingFetchQuery_2)
{
   while($row = $executingFetchQuery_2->fetch_array()){
        $us_name_3 = $row["name"];
		$us_price_3 = $row["price"];
		$us_estimation_3 = $row["estimation"];
}
}
$old_pric_1=$us_price_1*1.2;
$old_pric_2=$us_price_2*1.2;
$old_pric_3=$us_price_3*1.2;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Спецпредложения</title>
		<link rel='stylesheet' href='проф_2.css'>
		<!--ррр-->
				<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		
		<style>
		
.card{

	background-color: #fff;
	border:none;
	border-radius: 10px;

	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.image-container{

	position: relative;
}
.thumbnail-image{
	border-radius: 10px !important;
}
.discount{

	background-color: red;
	padding-top: 1px;
	padding-bottom: 1px;
	padding-left: 4px;
	padding-right: 4px;
	font-size: 10px;
	border-radius: 6px;
	color: #fff;
}
.wishlist{

	height: 25px;
	width: 25px;
	background-color: #eee;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 50%;
	box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.first{

	position: absolute;
	width: 100%;
	    padding: 9px;
}
.dress-name{
	font-size: 13px;
	font-weight: bold;
	width: 75%;
}


.new-price{
	font-size: 13px;
	font-weight: bold;
	color: red;
	
}
.old-price{
	font-size: 8px;
	font-weight: bold;
	color: grey;
}
.voutchers{
	background-color: #fff;
	border:none;
	margin-top:10px;
	border-radius: 10px;
	width: 100%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	overflow: hidden;

}
.voutcher-divider{

	display: flex;

}
.voutcher-left{
	width: 70%
}
.voutcher-name{
	color: grey;
	font-size: 9px;
	font-weight: 500;
}
.voutcher-code{
	color: red;
	font-size: 11px;
	font-weight: bold;
}
.voutcher-right{
	width: 30%;	 
	background-color: purple;
	color: #fff;
}

.discount-percent{
	font-size: 12px;
	font-weight: bold;
	position: relative;
	top: 5px;
}
.off{
	font-size: 14px;
	position: relative;
	bottom: 5px;
}

/*адаптивность*/
@media (min-width: 1310px) and (max-width: 1900px)
{
	.b{width: 90%;height: 70%;margin: 3% auto;}
	.panel{width:98%;}
}
@media (min-width: 1000px) and (max-width: 1310px)
{
	.b{width: 95%;height: 70%;margin: 3% auto;}
	.panel{width:97%;}
	.profile-nav .user-heading a img { width: 100px;height: 100px;}
	.profile-nav .user-heading h1 {font-size: 16px;}
}
@media (min-width:500px) and (max-width: 1000px)
{
	.b{	width: 90%;height: 90%;margin: 3% auto;}
	.panel{width:100%;}
	.profile-nav .user-heading a img { width: 130px; height: 130px;}
	.profile-nav .user-heading h1 { font-size: 18px;}
		.card{width:50%;margin:0% 13% 0% 13%;}
	.mt-3{width:50%;margin:1% 18% 3% 18%;}
	.bio-graph-heading {padding: 25px 15px;font-size: 12px;}
}
@media (min-width:377px) and (max-width: 500px)
{
	.b{	width: 90%;height: 90%;margin: 3% auto;}
	.panel{width:100%;}
	.profile-nav .user-heading a img { width: 130px; height: 130px;}
	.profile-nav .user-heading h1 { font-size: 18px;}
		.card{width:50%;margin:0% 13% 0% 13%;}
	.mt-3{width:50%;margin:1% 18% 3% 18%;}
	.bio-graph-heading {padding: 30px 20px;font-size: 14px;}
}
@media (min-width:250px) and (max-width: 377px)
{
	.b{	width: 100%;height: 90%;}
	.panel{width:100%;}
	.profile-nav .user-heading a img { width: 130px; height: 130px;}
	.profile-nav .user-heading h1 { font-size: 18px;}
		.card{width:73%;}
	.mt-3{width:80%;margin:1% 8% 3% 8%;}
	.bio-graph-heading {padding: 30px 20px;font-size: 14px;}
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
              <h1><?php echo $us_name;?></h1>
              <p>Здравствуйте!</p>
          </div>

          <ul class="nav nav-pills nav-stacked">
              <li><a href="профиль.php"> <i class="fa fa-user"></i>Профиль<span class="label label-warning pull-right r-activity">4</span></a></li>
              <li><a href="профиль_2.php"><i class="fa fa-folder-open" aria-hidden="true"></i></i>Мои курсы</a></li>
              <li><a href="профиль_3.php"><i class="fa fa-credit-card" aria-hidden="true"></i>Платежи</a></li>
			  <li><a href="профиль_4.php"><i class="fa fa-calendar"></i>Каледарь развития</a></li>
			  <li class="active"><a href="#"><i class="fa fa-file" aria-hidden="true"></i>Новинки курсов</a></li>
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
<div class="container mt-5" style='width:130%;'>
    	<div class="row">
    		<div class="col-md-3">
    				<div class="card">
    					<div class="image-container">
    						<div class="first">					
    							<div class="d-flex justify-content-between align-items-center">

    							<span class="discount">-25%</span>
    							<span class="wishlist"><i class="fa fa-heart-o"></i></span>
    							

    						    </div>
    						</div>
    						<img src="fullstack_1.jpg" class="img-fluid rounded thumbnail-image" style='width:100%;height:50%;'>
    					</div>
    					<div class="product-detail-container p-2">
    							<div class="d-flex justify-content-between align-items-center">
    								<h5 class="dress-name"><?php echo $us_name_1;?></h5>
    								<div class="d-flex flex-column mb-2">
    									<span class="new-price"><?php echo $us_price_1;?></span>
    									<p>Старая цена - <?php echo $old_pric_1;?></p>
    								</div>
    							</div>
    							<div class="d-flex justify-content-between align-items-center pt-1">
    								<div>
    									<i class="fa fa-star-o rating-star"></i>
    									<span class="rating-number"><?php echo $us_estimation_1;?></span>
    								</div>
    							</div>
    					</div>		
    				</div>
					<div class="mt-3">
    					<div class="card voutchers">

    						<div class="voutcher-divider">

    							<div class="voutcher-left text-center">
    								<h5 class="voutcher-code">В 1-й день</h5>
    								
    							</div>
    							<div class="voutcher-right text-center border-left">
    								<h5 class="discount-percent">10%</h5>
    								<span class="off">Скидка</span>								
    							</div> 								
    						</div> 						
    					</div>
    				</div>					
    		</div>
<!--2 картинка-->
    		<div class="col-md-3">
    				<div class="card">
    					<div class="image-container">
    						<div class="first">			
    							<div class="d-flex justify-content-between align-items-center">
    							<span class="discount">-25%</span>
    							<span class="wishlist"><i class="fa fa-heart-o"></i></span>
    						    </div>
    						</div>
    						<img src="dataa_2.jpg" class="img-fluid rounded thumbnail-image" style='width:100%;height:50%;'>	
    					</div>
    					<div class="product-detail-container p-2">
    							<div class="d-flex justify-content-between align-items-center">
    								<h5 class="dress-name"><?php echo $us_name_2;?></h5>
    								<div class="d-flex flex-column mb-2">
    									<span class="new-price"><?php echo $us_price_2;?></span>
    									<p>Старая цена - <?php echo $old_pric_2;?></p>
    								</div>
    							</div>
    							<div class="d-flex justify-content-between align-items-center pt-1">
    								<div>
    									<i class="fa fa-star-o rating-star"></i>
    									<span class="rating-number"><?php echo $us_estimation_2;?></span>
    								</div>								
    							</div>
    					</div>		
    				</div>
    				<div class="mt-3">
    					<div class="card voutchers">
    						<div class="voutcher-divider">
    							<div class="voutcher-left text-center">
    								<h5 class="voutcher-code">В 1-й день</h5>				
    							</div>
    							<div class="voutcher-right text-center border-left">
    								<h5 class="discount-percent">10%</h5>
    								<span class="off">Скидка</span>			
								</div>				
    						</div>		
    					</div>	
    				</div>
    		</div>
<!--3 картинка-->
    		<div class="col-md-3">
    				<div class="card">
    					<div class="image-container">
    						<div class="first">				
    							<div class="d-flex justify-content-between align-items-center">
    							<span class="discount">-25%</span>
    							<span class="wishlist"><i class="fa fa-heart-o"></i></span>
    						    </div>
    						</div>
    						<img src="кк.jpg" class="img-fluid rounded thumbnail-image" style='width:100%;height:50%;'>
    					</div>
    					<div class="product-detail-container p-2">
    							<div class="d-flex justify-content-between ">
    								<h5 class="dress-name"><?php echo $us_name_3;?></h5>
    								<div class="d-flex flex-column mb-2">

    									<span class="new-price"><?php echo $us_price_3;?></span>
    									<p>Старая цена - <?php echo $old_pric_3;?></p>
    								</div>

    							</div>
    							<div class="d-flex justify-content-between align-items-center pt-1">
    								<div>
    									<i class="fa fa-star-o rating-star"></i>
    									<span class="rating-number"><?php echo $us_estimation_3;?></span>
    								</div>
    							</div>
    					</div>
    				</div>
    				<div class="mt-3">
    					<div class="card voutchers">
    						<div class="voutcher-divider">
    							<div class="voutcher-left text-center">
    								<h5 class="voutcher-code">в 1-й день</h5>		
    							</div>
    							<div class="voutcher-right text-center border-left">
    								<h5 class="discount-percent">10%</h5>
    								<span class="off">Скидка</span>			
    							</div>	
    						</div>	
    					</div>	
    				</div>
    		</div>

		
    </div>
	</div>
</div>

</div>
</div>
<br>
	</body>
	</html>