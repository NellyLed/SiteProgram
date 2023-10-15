<?php 
$mysqli = new mysqli("localhost", "root", "", "new");
$mysqli->set_charset("utf8");
$resultArr = array();
$executingFetchQuery = $mysqli->query("SELECT `name` FROM `teacher`");
if($executingFetchQuery)
{
   while($arr = $executingFetchQuery->fetch_assoc())
   {
        $res[] = $arr['name'];//storing values into an array
   }
}
$exe=$mysqli->query("SELECT `subject` FROM `teacher`");
if($exe)
{
   while($arr = $exe->fetch_assoc())
   {
        $res_2[] = $arr['subject'];//storing values into an array
   }
}
$exe_1=$mysqli->query("SELECT * FROM `employee`");
if($exe_1)
{
   while($arr = $exe_1->fetch_assoc())
   {
        $res_3[] = $arr['name'];
		$res_4[] = $arr['position'];
   }
}
$exe_2=$mysqli->query("SELECT * FROM `reviews`");
if($exe_2)
{
   while($arr = $exe_2->fetch_assoc())
   {
		$res_5[] = $arr['login'];
		$res_6[] = $arr['data_reviews'];
		$res_7[] = $arr['description'];
   }
}
$today_1=date("Y-m-d");
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>Сотрудники</title>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link href="//netdna.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel='stylesheet' href='сотр.css'>
		<!--штучка возле названия страницы-->
		<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
		
<!--<link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	</head>
	<body>
	    <h4>Наши преподаватели</h4>
		<div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            </div>
          </div>
        </div>
		<!--1 ряд-->
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <div class="advisor_thumb" ><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res[0]; ?></h6>
                <p class="designation"><?php echo $res_2[0]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.5</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>90</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>50</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>
          
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res[1]; ?></h6>
                <p class="designation"><?php echo $res_2[1]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.8</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>70</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>30</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>
          
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res[2]; ?></h6>
                <p class="designation"><?php echo $res_2[2]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.6</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>85</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>43</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>
          
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res[3]; ?></h6>
                <p class="designation"><?php echo $res_2[3]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.2</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>60</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>35</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>
        </div>
		
		<!--2 ряд-->
		<div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res[4]; ?></h6>
                <p class="designation"><?php echo $res_2[4]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.1</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>98</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>56</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>
		  
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res[5]; ?></h6>
                <p class="designation"><?php echo $res_2[5]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.4</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>43</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>55</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res[6]; ?></h6>
                <p class="designation"><?php echo $res_2[6]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.0</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>82</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>67</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res[7]; ?></h6>
                <p class="designation"><?php echo $res_2[7]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.9</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>68</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>89</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>
        </div>
		<!--3 ряд-->
		<div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res[8]; ?></h6>
                <p class="designation"><?php echo $res_2[8]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.5</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>98</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>23</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>
 
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res_3[0]; ?></h6>
                <p class="designation"><?php echo $res_4[0]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.9</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>22</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>28</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res_3[1]; ?></h6>
                <p class="designation"><?php echo $res_4[1]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.1</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>82</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>67</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <div class="advisor_thumb"><img src="people_1.jpg" alt="">
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <div class="single_advisor_details_info">
                <h6><?php echo $res_3[2]; ?></h6>
                <p class="designation"><?php echo $res_4[2]; ?></p>
				<div class='row'>
					<div class="col-4">
						<div class="mt-3">
							<h6>Рейтинг</h6>
							<p class="mb-0 text-muted"><i class="fa fa-star" aria-hidden="true"></i>4.2</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Отзыв</h6>
							<p class="mb-0 text-muted"><i class="fa fa-comment" aria-hidden="true"></i>>97</p>
						</div>
					</div>
					<div class="col-4">
						<div class="mt-3">
							<h6>Проект</h6>
							<p class="mb-0 text-muted"><i class="fa fa-suitcase" aria-hidden="true"></i>>78</p>
						</div>
					</div>
                </div> 
              </div>
            </div>
          </div>
        </div>
		<h3>Отзывы</h3>
		
		<section class="container">
		<div class="row">

		<div class="col-md-12">
<div class="panel" style='background-color:#fffaf0;border-radius:5px;'>
 <div class="panel-body">
 <!-- Содержание Новостей -->
	 <div class="media-block">
	 <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="profile_1.png"></a>
		 <div class="media-body">
			 <div class="mar-btm">
			 <a href="#" class="btn-link text-semibold media-heading box-inline" style='color:#000000;'><b><?php echo $res_5[0];?></b></a>
			 <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg" style='color:#000000;'></i> - <?php echo $res_6[0];?></p>
			 </div>
			 <p><?php echo $res_7[0];?></p>
			 <div class="pad-ver">
			 <div class="btn-group">
			 <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i> Нравится</a>
			 <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i> Не нравится</a>
			 </div>
			 <!--<a class="btn btn-sm btn-default btn-hover-primary" href="#">Ответить</a>-->
			 </div>
			 <hr>
		 </div>
	 </div>
	 
	 <div class="media-block">
	 <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="profile_1.png"></a>
		 <div class="media-body">
			 <div class="mar-btm">
			 <a href="#" class="btn-link text-semibold media-heading box-inline" style='color:#000000;'><b><?php echo $res_5[1];?></b></a>
			 <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg" style='color:#000000;'></i> - <?php echo $res_6[1];?></p>
			 </div>
			 <p><?php echo $res_7[1];?></p>
			 <div class="pad-ver">
			 <div class="btn-group">
			 <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i> Нравится</a>
			 <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i> Не нравится</a>
			 </div>
			 <!--<a class="btn btn-sm btn-default btn-hover-primary" href="#">Ответить</a>-->
			 </div>
			 <hr>
		 </div>
	 </div>
	 
	 <div class="media-block">
	 <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="profile_1.png"></a>
		 <div class="media-body">
			 <div class="mar-btm">
			 <a href="#" class="btn-link text-semibold media-heading box-inline" style='color:#000000;'><b><?php echo $res_5[2];?></b></a>
			 <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg" style='color:#000000;'></i> - <?php echo $res_6[2];?></p>
			 </div>
			 <p><?php echo $res_7[2];?></p>
			 <div class="pad-ver">
			 <div class="btn-group">
			 <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i> Нравится</a>
			 <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i> Не нравится</a>
			 </div>
			 <!--<a class="btn btn-sm btn-default btn-hover-primary" href="#">Ответить</a>-->
			 </div>
			 <hr>
		 </div>
	 </div>

	 <div class="media-block pad-all">
		 <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="profile_1.png"></a>
		 <div class="media-body">
			 <div class="mar-btm">
			 <a href="#" class="btn-link text-semibold media-heading box-inline" style='color:#000000;'><b><?php echo $res_5[3];?></b></a>
			 <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg" style='color:#000000;'></i> - <?php echo $res_6[3];?></p>
			 </div>
			 <p><?php echo $res_7[3];?></p>
			 <div class="pad-ver">
				 <div class="btn-group">
					 <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i> Нравится</a>
					 <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i> Не нравится</a>
				 </div>
			 </div>
			 <hr>

		 </div>
	 </div>
	 
	 <div class="media-block pad-all">
		 <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="profile_1.png"></a>
		 <div class="media-body">
			 <div class="mar-btm">
			 <a href="#" class="btn-link text-semibold media-heading box-inline" style='color:#000000;'><b><?php echo $res_5[4];?></b></a>
			 <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg" style='color:#000000;'></i> - <?php echo $res_6[4];?></p>
			 </div>
			 <p><?php echo $res_7[4];?></p>
			 <div class="pad-ver">
				 <div class="btn-group">
					 <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i> Нравится</a>
					 <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i> Не нравится</a>
				 </div>
			 </div>
			 <hr>
		 </div>
	 </div>
	 
	 <div class="media-block pad-all">
		 <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="profile_1.png"></a>
		 <div class="media-body">
			 <div class="mar-btm">
			 <a href="#" class="btn-link text-semibold media-heading box-inline" style='color:#000000;'><b><?php echo $res_5[5];?></b></a>
			 <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg" style='color:#000000;'></i> - <?php echo $res_6[5];?></p>
			 </div>
			 <p><?php echo $res_7[5];?></p>
			 <div class="pad-ver">
				 <div class="btn-group">
					 <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i> Нравится</a>
					 <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i> Не нравится</a>
				 </div>
			 </div>
			 <hr>
		 </div>
	 </div>
	 
	 <div class="media-block pad-all">
		 <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="profile_1.png"></a>
		 <div class="media-body">
			 <div class="mar-btm">
			 <a href="#" class="btn-link text-semibold media-heading box-inline" style='color:#000000;'><b><?php echo $res_5[6];?></b></a>
			 <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg" style='color:#000000;'></i> - <?php echo $res_6[6];?></p>
			 </div>
			 <p><?php echo $res_7[6];?></p>
			 <div class="pad-ver">
				 <div class="btn-group">
					 <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i> Нравится</a>
					 <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i> Не нравится</a>
				 </div>
			 </div>
			 <hr>
		 </div>
	 </div>
	 
	 <div class="media-block pad-all">
		 <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="profile_1.png"></a>
		 <div class="media-body">
			 <div class="mar-btm">
			 <a href="#" class="btn-link text-semibold media-heading box-inline" style='color:#000000;'><b><?php echo $res_5[7];?></b></a>
			 <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg" style='color:#000000;'></i> - <?php echo $res_6[7];?></p>
			 </div>
			 <p><?php echo $res_7[7];?></p>
			 <div class="pad-ver">
				 <div class="btn-group">
					 <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i> Нравится</a>
					 <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i> Не нравится</a>
				 </div>
			 </div>
			 <hr>
		 </div>
	 </div>
	 
	 <div class="media-block pad-all">
		 <a class="media-left" href="#"><img class="img-circle img-sm" alt="Профиль пользователя" src="profile_1.png"></a>
		 <div class="media-body">
			 <div class="mar-btm">
			 <a href="#" class="btn-link text-semibold media-heading box-inline" style='color:#000000;'><b><?php echo $res_5[8];?></b></a>
			 <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg" style='color:#000000;'></i> - <?php echo $res_6[8];?></p>
			 </div>
			 <p><?php echo $res_7[8];?></p>
			 <div class="pad-ver">
				 <div class="btn-group">
					 <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i> Нравится</a>
					 <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i> Не нравится</a>
				 </div>
			 </div>
			 <hr>
		 </div>
	 </div>
 </div>
</div>
</div>

</div><!-- /.row -->
</section><!-- /.container -->
		<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" onclick="javascript:history.back(); return false;">Назад</a></div>
      </div>	
	</body>
</html>