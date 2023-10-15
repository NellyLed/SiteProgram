<?php
$mysqli = new mysqli("localhost", "root", "", "new");
$mysqli->set_charset("utf8");
$resultArr = array();
$k=$_COOKIE['account_code'];
$sms=rand(5,15);
$friens=rand(3,13);
$group=rand(2,8);
$news=rand(2,10);
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
}
}
$ex_3 = $mysqli->query("SELECT * FROM `kurs` WHERE `id_kurs`='$us_kurs_1'");
if($ex_3)
{
   while($row = $ex_3->fetch_array()){
        $us_kurs_name = $row["name"];
		$us_kurs_format = $row["id_format"];
		$us_kurs_teacher = $row["id_teacher"];
}
}
$ex_4 = $mysqli->query("SELECT * FROM `format` WHERE `id_format`='$us_kurs_format'");
if($ex_4)
{
   while($row = $ex_4->fetch_array()){
        $us_kurs_format_name = $row["name"];
}
}
$ex_5 = $mysqli->query("SELECT * FROM `teacher` WHERE `id_teacher`='$us_kurs_teacher'");
if($ex_5)
{
   while($row = $ex_5->fetch_array()){
        $us_kurs_teacher_name = $row["name"];
}
}
if($us_kurs_1==1){$name_file='python.php';}
else if ($us_kurs_1==2){$name_file='java_введ.php';}
else if ($us_kurs_1==3){$name_file='веб-раз.php';}
else if ($us_kurs_1==4){$name_file='тестировщ.php';}
else if ($us_kurs_1==5){$name_file='c++_p.php';}
else if ($us_kurs_1==6){$name_file='front.php';}
else if ($us_kurs_1==7){$name_file='спец_data_s.php';}
else if ($us_kurs_1==8){$name_file='dev.php';}
else if ($us_kurs_1==9){$name_file='1c_plan.php';}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Мои курсы</title>
		<link rel='stylesheet' href='проф_2.css'>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<style>
	html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}
        #star {
            margin-left: -5px !important;
            vertical-align: bottom !important;
            opacity: 0.5;
        }


        .more {
            opacity: 0.5 !important;
        }

        .btn:hover {
            color: black !important;
        }

        .vl {
            margin: 8px !important;
            width: 2px;
            border-right: 1px solid #aaaaaa;
            height: 25px;
        }


        #plus {
            opacity: 0.8;
        }


        .card {
            border-radius: 10px !important;
			margin:5% 10%;
		
        }

        a:hover {
            background-color: #ccc !important;
        }



        .btn-outlined:active {
            color: #FFF;
            border-color: #fff !important;
        }


        img {

            cursor: pointer;
            overflow: visible;
        }

        .btn:focus,
        .btn:active {
            outline: none !important;
            box-shadow: none !important;
        }
		/*адаптивность*/
		@media (min-width: 1310px) and (max-width: 1900px){
		.b
{
	width: 90%;
	height: 90%;
	margin: 3% auto;
}

		}
		@media (min-width: 1000px) and (max-width: 1310px){
		.b
{
	width: 95%;
	height: 90%;
	margin: 3% auto;
}
.panel{width:90%;}
		}
		@media (min-width:776px) and (max-width: 1000px){
					.b
{
	width: 90%;
	height: 90%;
	margin: 3% auto;
}
.panel{width:90%;}
		}
		@media (min-width: 500px) and (max-width: 776px){
								.b
{
	width: 95%;
	height: 90%;
	margin: 3% auto;
}
.panel{width:95%;}
.profile-nav .user-heading a img {
    width: 90px;
    height: 90px;
}

.profile-nav .user-heading h1 {
    font-size: 18px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}
.bio-graph-heading {
    padding: 30px 20px;
    font-size: 14px;
}
.profile-nav ul > li > a > i{
    font-size: 14px;
}
		}
		@media (min-width: 250px) and (max-width: 500px){
		.b
{
	width: 100%;
	height: 90%;
	margin: 3% auto;
}
.panel{width:100%;}
.profile-nav .user-heading a img {
    width: 70px;
    height: 70px;
}

.profile-nav .user-heading h1 {
    font-size: 16px;
}

.profile-nav .user-heading p {
    font-size: 10px;
}
.bio-graph-heading {
    padding: 25px 10px;
    font-size: 12px;
}
.profile-nav ul > li > a > i{
    font-size: 12px;
}
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
              <li class="active"><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i></i>Мои курсы</a></li>
              <li><a href="профиль_3.php"><i class="fa fa-credit-card" aria-hidden="true"></i>Платежи</a></li>
			  <li><a href="профиль_4.php"><i class="fa fa-calendar"></i>Каледарь развития</a></li>
			  <li><a href="профиль_5.php"><i class="fa fa-file" aria-hidden="true"></i>Новинки курсов</a></li>
			  <li><a href="index.html"><i class="fa fa-times" aria-hidden="true"></i>Выход</a></li>
          </ul>
      </div>
  </div>
	<div class="profile-info col-md-9">
      <div class="panel" >
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
		<div class="card mt-5 border-5 pt-2 active pb-0 px-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 ">
                        <h4 class="card-title "><b><?php echo $us_kurs_name;?></b></h4>
                    </div>
                    <div class="col">
                        <h6 class="card-subtitle mb-2 text-muted">
                            <p class="card-text text-muted small ">
                                 <span class="vl mr-2 ml-0"></span>
									 <i class="fa fa-users text-muted "></i> Быстро и доступно <span class="vl ml-1 mr-2 "></span>
                        </h6>
                    </div>
                </div>

            </div>

            <div class="card-footer bg-white px-0 ">
                <div class="row">
					
                    <div class=" col-md-auto ">

                        <i class="mdi mdi-settings-outline"></i>
                        <a href='#' class="
                         btn-outlined btn-black text-muted" data-bs-toggle="tooltip" data-bs-placement="bottom" title="на странице курса">
                            <small>Программа</small> </a><span class="vl ml-3"></span>

						<a href='#' class="
                         btn-outlined btn-black text-muted" ><i class="fa fa-home" aria-hidden="true"></i>
                            <small>Формат:<?php echo $us_kurs_format_name;?></small> </a><span class="vl ml-3"></span>
							
						<a href='#' class="
                         btn-outlined btn-black text-muted"><i class="fa fa-user-plus" aria-hidden="true"></i>
                            <small>Преподаватель:<?php echo $us_kurs_teacher_name;?></small> </a><span class="vl ml-3"></span>
							
                        <a href="#" class="btn btn-outlined btn-black text-muted " data-bs-toggle="tooltip" data-bs-placement="bottom" title="узнать можно у преподавателя"><i class="fa fa-cogs" aria-hidden="true"></i><small> Больше</small></a>
                        <span class="vl ml-3"></span>
						
						<a href=<?php echo $name_file;?> class="btn btn-outlined btn-black text-muted ">&#8658;<small> Перейти</small></a>
                        
                    </div>

                    <div class="col-md-auto ">
                        <ul class="list-inline">
                            <li class="list-inline-item"> <img
                                    src="us_1.png"
                                    alt="DP" class="  rounded-circle img-fluid " width="35" height="35">
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>

        </div>
		<!--2 курс-->
        <div class="card mt-5 border-5 pt-2 active pb-0 px-3">
            <div class="card-body ">
                <div class="row">
                    <div class="col-12 ">
                        <h4 class="card-title "><b>Бесплатный курс "Анализ и основы рынка"</b></h4>

                    </div>
                    <div class="col">
                        <h6 class="card-subtitle mb-2 text-muted">
                            <p class="card-text text-muted small ">
                                
                                 <span class="vl mr-2 ml-0"></span>

                                <i class="fa fa-users text-muted "></i> Быстро и доступно <span class="vl ml-1 mr-2 "></span>

                                <span></span><span class="font-weight-bold"> Время просмотра:1 час</span>
                            </p>
                        </h6>
                    </div>
                </div>

            </div>
            <div class="card-footer bg-white px-0 ">
                <div class="row">

                        <a href="#" class="
                         btn-outlined btn-black text-muted" data-bs-toggle="tooltip" data-bs-placement="bottom" title="на странице курса">
                            <small>Программа</small> </a><span class="vl ml-3"></span>
						
						<a href='#' class="
                         btn-outlined btn-black text-muted"><i class="fa fa-home" aria-hidden="true"></i>
                            <small>Формат:онлайн</small> </a><span class="vl ml-3"></span>

                        <a href="бесплатно.php" class="btn btn-outlined btn-black text-muted ">&#8658;<small> Перейти</small></a>
                        
                    </div>

                    <div class="col-md-auto ">
                        <ul class="list-inline">
                            <li class="list-inline-item"> <img
                                    src="us_1.png"
                                    alt="DP" class="  rounded-circle img-fluid " width="35" height="35">
                                <img src="us_1.png"
                                    alt="DP" class="  rounded-circle img-fluid " width="35" height="35">
                                <img src="us_1.png"
                                    alt="DP" class="  rounded-circle img-fluid " width="35" height="35">
                                <img src="us_1.png"
                                    alt="DP" class="  rounded-circle img-fluid " width="35" height="35">
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
        
</div>

         </div>
</div>
</body>
</html>
