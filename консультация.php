<?php 
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
$mysqli->set_charset("utf8");

$resultArr = array();
$ex = $mysqli->query("SELECT * FROM `questions`");
if($ex){
    while($arr = $ex->fetch_assoc()){
         $resultArr[] = $arr['name'];
		 $id[]=$arr['id_questions'];
    }
}
setcookie('index_1',$id[0]);
setcookie('index_2',$id[1]);
setcookie('index_3',$id[2]);
setcookie('index_4',$id[3]);
setcookie('index_5',$id[4]);
setcookie('index_6',$id[5]);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Консультация</title>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel='stylesheet' href='конс.css'>
		<!--штучка возле названия страницы-->
		<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
	</head>
	<body>
		<h4>Здесь, вы можете задать вопросы</h4>
		<!--1 форма-->
		<div class="container contact-form">
            <div class="contact-image">
               
            </div>
				<form action="консульт_res.php" method="post" enctype="multipart/form-data">
					<h3>Форма обратной связи</h3>
				    <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="txtName" class="form-control" placeholder="Ваше имя *" value="" />
							</div>
							<div class="form-group">
								<input type="text" name="txtEmail" class="form-control" placeholder="Ваш e-mail *" value="" />
							</div>
							<div class="form-group">
								<input type="text" name="txtPhone" class="form-control" placeholder="Ваш номер телефона *" value="" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea name="txtMsg" class="form-control" placeholder="Ваше сообщение *" style="width: 100%; height: 150px;"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="submit" name="btnSubmit" class="btnContact" value="Отправить" />
							</div>
						</div>
					</div>
				</form>
		</div>
		<!--2 форма-->
		<h5>Помогите нам стать лучше, ответив на вопросы ниже</h5>
		<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
		
            <form action="консульт_res_2.php" method="post" id="regForm" enctype="multipart/form-data">
                <h1 id="register">Форма опроса</h1>
                <div class="all-steps" id="all-steps"> 
                  <span class="step"><b>1</b></span> 
                  <span class="step"><b>2</b></span>
                  <span class="step"><b>3</b></span>
                  <span class="step"><b>4</b></span>
                  <span class="step"><b>5</b></span>
                  <span class="step"><b>6</b></span>
                </div>

                <div class="tab">
                  <h6><i><?php echo $resultArr[0];?></i></h6>
                    <p>
                      <input placeholder="..." oninput="this.className = ''" name="fname"></p>
                    
                </div>
                <div class="tab">
                  <h6><i><?php echo $resultArr[1];?></i></h6>
                    <p><input placeholder="..." oninput="this.className = ''" name="dd"></p>
                    
                </div>
                <div class="tab">
                    <h6><i><?php echo $resultArr[2];?></i></h6>
                    <p><input placeholder="..." oninput="this.className = ''" name="email"></p>
                 
                </div>
                <div class="tab">
                    <h6><i><?php echo $resultArr[3];?></i></h6>
                    <p><input placeholder="..." oninput="this.className = ''" name="uname"></p>
                </div>

                <div class="tab">
                    <h6><i><?php echo $resultArr[4];?></i></h6>
                    <p><input placeholder="..." oninput="this.className = ''" name="pt"></p>
                </div>
				
                <div class="tab">
                    <h6><i><?php echo $resultArr[5];?></i></h6>
                    <p><input placeholder="..." oninput="this.className = ''" name="friend"></p>
                </div>
                <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                    <h3>Спасибо за честный отзыв!</h3> <span>Будем рады видеть вас снова!</span><br><br><button type='submit' name='n' >Посмотреть результаты</button>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                      <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" onclick="javascript:history.back(); return false;">Назад</a></div>
		<script>
		var currentTab = 0;
              document.addEventListener("DOMContentLoaded", function(event) {


              showTab(currentTab);

              });

              function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              } else {
              document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              } else {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              }
              fixStepIndicator(n)
              }

              function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {
            
              document.getElementById("nextprevious").style.display = "none";
              document.getElementById("all-steps").style.display = "none";
              document.getElementById("register").style.display = "none";
              document.getElementById("text-message").style.display = "block";




              }
              showTab(currentTab);
              }

              function validateForm() {
                   var x, y, i, valid = true;
                   x = document.getElementsByClassName("tab");
                   y = x[currentTab].getElementsByTagName("input");
                   for (i = 0; i < y.length; i++) {
                       if (y[i].value == "") {
                           y[i].className += " invalid";
                           valid = false;
                       }


                   }
                   if (valid) {
                       document.getElementsByClassName("step")[currentTab].className += " finish";
                   }
                   return valid;
               }

               function fixStepIndicator(n) {
                   var i, x = document.getElementsByClassName("step");
                   for (i = 0; i < x.length; i++) {
                       x[i].className = x[i].className.replace(" active", "");
                   }
                   x[n].className += " active";
               }
			   </script>
	</body>
</html>