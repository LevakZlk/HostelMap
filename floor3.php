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
					
			Комната 29

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='29' AND floor='3') ";
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
					
			Комната 30

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='30' AND floor='3') ";
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
					
			Комната 31

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='31' AND floor='3') ";
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
					
			Комната 32

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='32' AND floor='3') ";
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
					
			Комната 33

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='33' AND floor='3') ";
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
					
			Комната 34

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='34' AND floor='3') ";
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
					
			Комната 35

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='35' AND floor='3') ";
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
					
			Комната 36

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='36' AND floor='3') ";
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
					
			Комната 37

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='37' AND floor='3') ";
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
					
			Комната 38

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='38' AND floor='3') ";
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
					
			Комната 39

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='39' AND floor='3') ";
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
					
			Комната 40

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='40' AND floor='3') ";
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
					
			Комната 41

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='41' AND floor='3') ";
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
					
			Комната 42

			<br>
			<!--	----------------------------------------------------------		-->
		<?php
		
			$sql="SELECT * FROM student WHERE (room='42' AND floor='3') ";
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
				<a href="floor2.php">Этаж 2</a>
				<a href="floor3.php">Этаж 3</a>
				<a href="floor4.php">Этаж 4</a>
				<a href="floor5.php">Этаж 5</a>
				</div>
				
			

				<div align='center'>
				<img src="floorup.jpg" alt="flowers_foto" width="1224" height="557" usemap="#flowers">
				<map name="flowers">
				<area shape="rect1" coords="280,38,386,215" class="real-show-hint" data-hint="#real-hint-1" alt="room1"  title="Комната 29" target="_self" >

				<area shape="rect2" coords="405,40,508,215" class="real-show-hint" data-hint="#real-hint-2" alt="room2"   title="Комната 30" target="_self" >

				<area shape="rect3" coords="527,40,626,215" class="real-show-hint" data-hint="#real-hint-3" alt="room3"   title="Комната 31" target="_self" >

				<area shape="rect4" coords="653,40,755,215" class="real-show-hint" data-hint="#real-hint-4" alt="room4"   title="Комната 32" target="_self" >

				<area shape="rect5" coords="777,40,881,215" class="real-show-hint" data-hint="#real-hint-5" alt="room5"   title="Комната 33" target="_self" >

				<area shape="rect6" coords="900,40,1010,215" class="real-show-hint" data-hint="#real-hint-6" alt="room6"   title="Комната 34" target="_self" >

				<area shape="rect7" coords="1025,40,1130,215" class="real-show-hint" data-hint="#real-hint-7" alt="room7"   title="Комната 35" target="_self" >

				<area shape="rect8" coords="124,306,260,483" class="real-show-hint" data-hint="#real-hint-8" alt="room8"   title="Комната 36" target="_self" >

				<area shape="rect9" coords="278,306,385,483" class="real-show-hint" data-hint="#real-hint-9" alt="room9"   title="Комната 37" target="_self" >

				<area shape="rect10" coords="402,306,509,483" class="real-show-hint" data-hint="#real-hint-10" alt="room10"   title="Комната 38" target="_self" >

				<area shape="rect11" coords="527,306,632,483" class="real-show-hint" data-hint="#real-hint-11" alt="room11"   title="Комната 39" target="_self" >

				<area shape="rect12" coords="652,306,766,483" class="real-show-hint" data-hint="#real-hint-12" alt="room12"   title="Комната 40" target="_self" >

				<area shape="rect13" coords="780,306,883,483" class="real-show-hint" data-hint="#real-hint-13" alt="room13"   title="Комната 41" target="_self" >

				<area shape="rect14" coords="901,306,1022,483" class="real-show-hint" data-hint="#real-hint-14" alt="room14"   title="Комната 42" target="_self" >
				
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