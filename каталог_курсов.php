<?php
$mysqli = new mysqli("localhost", "root", "", "new");
$mysqli->set_charset("utf8");
$resultArr = array();
$executingFetchQuery = $mysqli->query("SELECT `name` FROM `kurs`");
if($executingFetchQuery)
{
   while($arr = $executingFetchQuery->fetch_assoc())
   {
        $resultArr[] = $arr['name'];
   }
}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Курсы</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel='stylesheet' href='каталог.css'>

	</head>
	<body>
		<section class="portfolio" id="portfolio">
		<div class="container-fluid">
		<div class="row">
			<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1 class="gallery-title">Наши курсы</h1>
			</div>
			<div align="center">
				<button class="filter-button" data-filter="all">Все программы</button>
				<button class="filter-button" data-filter="category1">Бэкенд-разработка</button>
				<button class="filter-button" data-filter="category2">Веб-разработка</button>
				<button class="filter-button" data-filter="category3">IT-инфраструктура</button>
				<button class="filter-button" data-filter="category4">Анализ данных</button>
			</div>
			<br/>
			<!--1 блок-->
            <div class="gallery_product col-sm-4 col-xs-4 filter category1">
                <a href="к_1.php">
                    <img class="img-responsive" alt="" src="python.jpg" />
                    <div class='img-info'>
                        <h4><?php echo $resultArr[0];  ?></h4>
						<p>Длительность:9 месяцев</p>
                    </div>
                </a>
            </div>

            <div class="gallery_product col-sm-4 col-xs-4 filter category2">
                <a href="k_3.php">
                    <img class="img-responsive" alt="" src="веб_1.jpg" />
                    <div class='img-info'>
                        <h4><?php echo $resultArr[2];  ?></h4>
						<p>Длительность:10 месяцев</p>
                    </div>
                </a>
            </div>

            <div class="gallery_product col-sm-4 col-xs-4 filter category3">
                 <a href="к_4.php">
                    <img class="img-responsive" alt="" src="тестировщик_1.jpg"/>
                    <div class='img-info'>
                        <h4><?php echo $resultArr[3];  ?></h4>
						<p>Длительность:4 месяца</p>
                    </div>
                </a>
            </div>

			<div class="gallery_product col-sm-4 col-xs-4 filter category4">
                 <a href="к_7.php">
                    <img class="img-responsive" alt="" src="dataa_2.jpg" />
                    <div class='img-info'>
                        <h4><?php echo $resultArr[6];  ?></h4>
						<p>Длительность:7 месяцев</p>
                    </div>
                </a>
            </div>
			<!--2 блок-->
            <div class="gallery_product col-sm-4 col-xs-4 filter category1">
                <a href="к_2.php">
                    <img class="img-responsive" alt="" src="java_1.jpg" />
                    <div class='img-info'>
                        <h4><?php echo $resultArr[1];  ?></h4>
						<p>Длительность:10 месяцев</p>
                    </div>
                </a>
            </div>

            <div class="gallery_product col-sm-4 col-xs-4 filter category2">
                <a href="#">
                    <img class="img-responsive" alt="" src="fullstack_1.jpg" />
                    <div class='img-info'>
                        <h4>Fullstack-разработчик</h4>
						<p>Скоро</p>
                    </div>
                </a>
            </div>

            <div class="gallery_product col-sm-4 col-xs-4 filter category3">
                <a href="к_8.php">
                    <img class="img-responsive" alt="" src="ddev.jpg" />
                    <div class='img-info'>
                        <h4><?php echo $resultArr[7];  ?></h4>
						<p>Длительность:5 месяцев</p>
                    </div>
                </a>
            </div>

			<div class="gallery_product col-sm-4 col-xs-4 filter category4">
                <a href="#">
                    <img class="img-responsive" alt="" src="dt.jpg" />
                    <div class='img-info'>
                        <h4>Data Analys</h4>
						<p>Скоро</p>
                    </div>
                </a>
            </div>
			<!--3 блок-->
			
            <div class="gallery_product col-sm-4 col-xs-4 filter category1">
                <a href="к_5.php">
                    <img class="img-responsive" alt="" src="с++_2.jpg" />
                    <div class='img-info'>
                        <h4><?php echo $resultArr[4]; ?></h4>
						<p>Длительность:4 месяца</p>
                    </div>
                </a>
            </div>
		</div>
			<div class="row">
			<div class="gallery_product col-sm-4 col-xs-4 filter category2">
                <a href="к_6.php">
                    <img class="img-responsive" alt="" src="front_1.jpg" />
                    <div class='img-info'>
                        <h4><?php echo $resultArr[5]; ?></h4>
						<p>Длительность:3 месяца</p>
                    </div>
                </a>
            </div>
			
			   <div class="gallery_product col-sm-4 col-xs-4 filter category3">
                <a href="#">
                    <img class="img-responsive" alt="" src="кк.jpg" />
                    <div class='img-info'>
                        <h4>Специалист по кибербезопасности</h4>
						<p>Скоро</p>
                    </div>
                </a>
            </div>

                       <div class="gallery_product col-sm-4 col-xs-4 filter category4">
                <a href="к_9.php">
                    <img class="img-responsive" alt="" src="1c.jpg" />
                    <div class='img-info'>
                        <h4><?php echo $resultArr[8]; ?></h4>
						<p>Длительность:2 месяца</p>
                    </div>
                </a>
            </div>

         

 
		</div>
	</div>
</section>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" href="index.html">Назад</a></div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
	<script src="js_каталог.js"></script>
</body>
</html>