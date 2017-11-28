<!doctype html>
<?php
        $db = mysql_connect ("localhost","root","");
        mysql_select_db ("map",$db);
        ?> 
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="stylewindow.css"> 
	<link rel="stylesheet" href="mainstyle.css"> 
	<script src="/js/jquery.min.js"></script>
 	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  	<script src="http://code.jquery.com/jquery-latest.js"></script>
  	<script src="jquery.tooltip.min.js"></script>
	<script src="js/modernizr.js"></script>

		<script type="text/javascript">
		  $(function () {
			$('.real-show-hint').on("click", function(e){ 
			  e = e || window.event; 
			  e.preventDefault();
			  var ypos = $(this).offset().top+24;
			  var xpos = $(this).offset().left;
			  var RealHint =  $(this).data('hint');
			  $(RealHint).css('top',ypos);
			  $(RealHint).css('left',xpos);
			  $(RealHint).toggle('slow'); 
			  return; 
			  });
		
			$('.prm-cross').on('click', function(){ 
			  $(this).parent().hide('slow'); 
			  return false; 
			});
		
			
		  });
		</script>
		<style type="text/css">
	
		  </style>
	<title>Интерактивная карта</title>
</head>
<body>
	
	<main class="cd-main">
		<section class="cd-section projects visible">
			

			<div class="cd-content" id="projects-content">

				<div id="real-hint-1" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 1

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='1' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->
			
			<div id="real-hint-2" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 2

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='2' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->


			<div id="real-hint-3" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 3

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='3' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->
			<div id="real-hint-4" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 4

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='4' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-5" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 5

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='5' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-6" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 6

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='6' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-7" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 7

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='7' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-8" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 8

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='8' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-9" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 9

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='9' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-10" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 10

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='10' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-11" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 11

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='11' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-12" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 12

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='12' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-13" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 13

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='13' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->

			<div id="real-hint-14" class="real-hint">
					<div class="prm-cross"></div>
					<span class="hint-caption">Информация</span><br/>
					
			Комната 14

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='14' AND floor='1') ";
        	$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); 
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
				echo "Проживающий: ",$line["surname"], " ",$line["name"]," ",$line["patronymic"];
		?>  
			<br> 
		<?		echo "Факультет: ",$line["faculty"];
		?>
			<br> 
		<?
				echo "Контактный телефон: ",$line["phone"];
		?>
			<br> 
		<?
			}
		?>	



				</div>
			<!--	----------------------------------------------------------		-->
				<div align='center'>
				<a href="index.php">Этаж 1</a>
				<a href="">Этаж 2</a>
				<a href="">Этаж 3</a>
				<a href="">Этаж 4</a>
				<a href="">Этаж 5</a>
				</div>
				
			

				<div align='center'>
				<img src="floor.jpg" alt="flowers_foto" width="1224" height="557" usemap="#flowers">
				<map name="flowers">
				<area shape="rect1" coords="280,38,386,215" class="real-show-hint" data-hint="#real-hint-1" alt="room1"  title="Комната 1" target="_self" >

				<area shape="rect2" coords="405,40,508,215" class="real-show-hint" data-hint="#real-hint-2" alt="room2"   title="Комната 2" target="_self" >

				<area shape="rect3" coords="527,40,626,215" class="real-show-hint" data-hint="#real-hint-3" alt="room3"   title="Комната 3" target="_self" >

				<area shape="rect4" coords="653,40,755,215" class="real-show-hint" data-hint="#real-hint-4" alt="room4"   title="Комната 4" target="_self" >

				<area shape="rect5" coords="777,40,881,215" class="real-show-hint" data-hint="#real-hint-5" alt="room5"   title="Комната 5" target="_self" >

				<area shape="rect6" coords="900,40,1010,215" class="real-show-hint" data-hint="#real-hint-6" alt="room6"   title="Комната 6" target="_self" >

				<area shape="rect7" coords="1025,40,1130,215" class="real-show-hint" data-hint="#real-hint-7" alt="room7"   title="Комната 7" target="_self" >

				<area shape="rect8" coords="124,306,260,483" class="real-show-hint" data-hint="#real-hint-8" alt="room8"   title="Комната 8" target="_self" >

				<area shape="rect9" coords="278,306,385,483" class="real-show-hint" data-hint="#real-hint-9" alt="room9"   title="Комната 9" target="_self" >

				<area shape="rect10" coords="402,306,509,483" class="real-show-hint" data-hint="#real-hint-10" alt="room10"   title="Комната 10" target="_self" >

				<area shape="rect11" coords="527,306,632,483" class="real-show-hint" data-hint="#real-hint-11" alt="room11"   title="Комната 11" target="_self" >

				<area shape="rect12" coords="652,306,766,483" class="real-show-hint" data-hint="#real-hint-12" alt="room12"   title="Комната 12" target="_self" >

				<area shape="rect13" coords="780,306,883,483" class="real-show-hint" data-hint="#real-hint-13" alt="room13"   title="Комната 13" target="_self" >

				<area shape="rect14" coords="901,306,1022,483" class="real-show-hint" data-hint="#real-hint-14" alt="room14"   title="Комната 14" target="_self" >
				
				</map>
				</div>
			
				  
			</div> <!-- .cd-content -->
		</section> <!-- .cd-section -->
	</main> <!-- .cd-main -->

	<div id="cd-loading-bar" data-scale="1" class="projects"></div> <!-- lateral loading bar -->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/velocity.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>