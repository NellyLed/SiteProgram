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
		$us_date_1 = $row["date_birthday"];
        $us_phone_1 = $row["phone"];
		$us_email_1 = $row["email"];
        $us_adress_1 = $row["adress"];
		
}
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Профиль</title>
		<link rel='stylesheet' href='проф.css'>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		</head>
	<body>

<aside class="profile-card">
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
              <li class="active"><a href="#"> <i class="fa fa-user"></i>Профиль<span class="label label-warning pull-right r-activity">4</span></a></li>
              <li><a href="профиль_2.php"><i class="fa fa-folder-open" aria-hidden="true"></i></i>Мои курсы</a></li>
              <li><a href="профиль_3.php"><i class="fa fa-credit-card" aria-hidden="true"></i>Платежи</a></li>
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
              <button class="btn btn-warning pull-right" style='color:#000000;'>Сохранить</button><br><br>
          </footer>
      </div>
      <div class="panel">
          <div class="bio-graph-heading">
              Не волнуйтесь, если что-то не работает. Если бы всё работало, вас бы уволили.
          </div>
          <div class="panel-body bio-graph-info">
			<form action="проф.php" method="post" enctype="multipart/form-data">
				<h1>Ваши данные</h1>
				<div class="row">
					<div class="bio-row">
						<p><span>ФИО</span>:<input type="text" name="fio" value=<?php echo $us_name_1; ?> id="fio"/></p>
					</div>
					<div class="bio-row">
						<p><span>Дата рождения</span>:<input type="text" name="date" value=<?php echo $us_date_1; ?> id="date"/></p>
					</div>
					<div class="bio-row">
						<p><span>Телефон</span>:<input type="text" name="phone" value=<?php echo $us_phone_1; ?> id="phone"/></p>
					</div>
					<div class="bio-row">
						<p><span>Почта </span>:<input type="email" name="email" value=<?php echo $us_email_1; ?> id="email"/></p>
					</div>
					<div class="bio-row">
						<p><span>Адрес</span>:<input type="text" name="adress" value=<?php echo $us_adress_1; ?> id="adress"/></p>
					</div>
				</div>
				<button type='submit' class="btn btn-warning pull-right" name='change' style='float:right'>Изменить</button>
			  </form>
          </div>
      </div>
	  <!--
      <div>
          <div class="row">
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="&#9733;" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="red"><u><b>Рекомендованные друзья</b></u></h4>
                              <p><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
                              <p>Количество: ?php echo $friens; ?></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" 
							  value="&#10022;" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="terques"><u><b>Возможные сообщества</b></u></h4>
                              <p><i class="fa fa-users" aria-hidden="true"></i></p>
                              <p>Количество: ?php echo $group; ?></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="&#9998;" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="green"><u><b>Сообщения</b></u></h4>
                              <p><i class="fa fa-comments" aria-hidden="true"></i></p>
                              <p>Количество: ?php echo $sms; ?></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" 
							  value="&#10004;" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="purple"><u><b>Новости</b></u></h4>
                              <p><i class="fa fa-file" aria-hidden="true"></i></p>
                              <p>Количество: ?php echo $news; ?></p>
                          </div>
                      </div>
                  </div>
              </div>
			  
          </div>
      </div>
	  -->
	  
  </div>
</div>
</div>


</aside>
</body>
</html>