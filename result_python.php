<?php
   $ot = 0;
   $not = 0;
   if(isset($_POST['q'])){
      if ($_POST['q1'] == 'a'){$ot++;} else {$not++;}
      if ($_POST['q2'] == 'b'){$ot++;} else {$not++;}
	  if ($_POST['q3'] == 'a'){$ot++;} else {$not++;}
   }
   if(isset($_POST['p'])){
	  if ($_POST['p1'] == 'c'){$ot++;} else {$not++;}
      if ($_POST['p2'] == 'a'){$ot++;} else {$not++;}
	  if ($_POST['p3'] == 'a'){$ot++;} else {$not++;}
   }
      if(isset($_POST['w'])){
	  if ($_POST['w1'] == 'a'){$ot++;} else {$not++;}
      if ($_POST['w2'] == 'b'){$ot++;} else {$not++;}
	  if ($_POST['w3'] == 'b'){$ot++;} else {$not++;}
   }
   if(isset($_POST['s'])){
	  if ($_POST['s1'] == 'c'){$ot++;} else {$not++;}
      if ($_POST['s2'] == 'c'){$ot++;} else {$not++;}
	  if ($_POST['s3'] == 'a'){$ot++;} else {$not++;}
   }
      if(isset($_POST['g'])){
	  if ($_POST['g1'] == 'a'){$ot++;} else {$not++;}
      if ($_POST['g2'] == 'b'){$ot++;} else {$not++;}
	  if ($_POST['g3'] == 'a'){$ot++;} else {$not++;}
   }
      if(isset($_POST['d'])){
	  if ($_POST['d1'] == 'c'){$ot++;} else {$not++;}
      if ($_POST['d2'] == 'b'){$ot++;} else {$not++;}
	  if ($_POST['d3'] == 'a'){$ot++;} else {$not++;}
   }
         if(isset($_POST['z'])){
	  if ($_POST['z1'] == 'a'){$ot++;} else {$not++;}
      if ($_POST['z2'] == 'a'){$ot++;} else {$not++;}
	  if ($_POST['z3'] == 'b'){$ot++;} else {$not++;}
   }      
   if(isset($_POST['m'])){
	  if ($_POST['m1'] == 'a'){$ot++;} else {$not++;}
      if ($_POST['m2'] == 'c'){$ot++;} else {$not++;}
	  if ($_POST['m3'] == 'b'){$ot++;} else {$not++;}
   }
      if(isset($_POST['e'])){
	  if ($_POST['e1'] == 'a'){$ot++;} else {$not++;}
      if ($_POST['e2'] == 'b'){$ot++;} else {$not++;}
	  if ($_POST['e3'] == 'b'){$ot++;} else {$not++;}
   }
?>

<!DOCTYPE HTML>
<html>
<head>
<style>
html{
  cursor: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='24px' height='24px' viewBox='0 0 512 512' style='enable-background:new 0 0 512.011 512.011;' xml:space='preserve'%3E %3Cpath fill='DeepSkyBlue' d='M434.215,344.467L92.881,3.134c-4.16-4.171-10.914-4.179-15.085-0.019  c-2.011,2.006-3.139,4.731-3.134,7.571v490.667c0.003,4.382,2.685,8.316,6.763,9.92c4.081,1.603,8.727,0.545,11.712-2.667  l135.509-145.92h198.016c5.891,0.011,10.675-4.757,10.686-10.648C437.353,349.198,436.226,346.473,434.215,344.467z'/%3E %3C/svg%3E"), pointer;
}
.b
{
	background: #ffdca3;
	width: 40%;
	height: 50%;
    box-shadow: 3px 3px 5px #1b1b1ba;
	border-radius:10px;
	margin: 20% auto;
	border:5px #2d2d2d double;
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
	margin-top:70px;
}
h4
{
	text-align: center;
	font-family:'American Typewriter', serif;
	margin-top:1%;
	margin-bottom:1%;
	font-size:20px;
	color:#000000;
	text-decoration:underline;
}
p
{
	padding-left:10px;
}
</style>
</head>
<body>
<div class='b'>
	<h4>Результаты</h4>
    <p><b>Правильных ответов:</b> <?php echo $ot; ?></p>
	<p><b>Неправильных ответов:</b> <?php echo $not; ?></p>
	<p>Вы можете вернуться назад по <a onclick="javascript:history.back(); return false;">ссылке</a></p>
	</div>
</body> 
</html>