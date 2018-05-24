<style>
@page {
  margin: 0.7cm;
}

</style>
<script>
window.print();
</script>
  
  <link href="../css/style1.css" rel="stylesheet">
  <?php 
  session_start();
  if($_SESSION['login']!=true) header("Location: index.php");
	$temps=$_POST['name'];
	$type=$_POST['type'];
 
   ?>
  <? class find_room {
		
		  public function &sqlroom($arg = '',$type = '')
		  {
				if ($type==1) {
												if($arg==1) $y='SELECT * FROM student WHERE (room=1 AND floor=1)';
												else if($arg==2) $y='SELECT * FROM student WHERE (room=2 AND floor=1)';
												else if($arg==3) $y='SELECT * FROM student WHERE (room=3 AND floor=1)';
			 								  else if($arg==4) $y='SELECT * FROM student WHERE (room=4 AND floor=1)';
												else if($arg==5) $y='SELECT * FROM student WHERE (room=5 AND floor=1)';
				  							else if($arg==6) $y='SELECT * FROM student WHERE (room=6 AND floor=1)';
												else if($arg==7) $y='SELECT * FROM student WHERE (room=7 AND floor=1)';
					 						  else if($arg==8) $y='SELECT * FROM student WHERE (room=8 AND floor=1)';
												else if($arg==9) $y='SELECT * FROM student WHERE (room=9 AND floor=1)';
						  					else if($arg==10) $y='SELECT * FROM student WHERE (room=10 AND floor=1)'; 
												else if($arg==11) $y='SELECT * FROM student WHERE (room=11 AND floor=1)';
							 					else if($arg==12) $y='SELECT * FROM student WHERE (room=12 AND floor=1)';
												else if($arg==13) $y='SELECT * FROM student WHERE (room=13 AND floor=1)';
								  			else if($arg==14) $y='SELECT * FROM student WHERE (room=14 AND floor=1)';
			 									return $y;
												}
				else if ($type==2) {
														if($arg==1) $y='SELECT * FROM student WHERE (room=15 AND floor=2)'; 
														else if($arg==2) $y='SELECT * FROM student WHERE (room=16 AND floor=2)';
														else if($arg==3) $y='SELECT * FROM student WHERE (room=17 AND floor=2)';
														else if($arg==4) $y='SELECT * FROM student WHERE (room=18 AND floor=2)';
														else if($arg==5) $y='SELECT * FROM student WHERE (room=19 AND floor=2)';
														else if($arg==6) $y='SELECT * FROM student WHERE (room=20 AND floor=2)';
														else if($arg==7) $y='SELECT * FROM student WHERE (room=21 AND floor=2)';
														else if($arg==8) $y='SELECT * FROM student WHERE (room=22 AND floor=2)';
														else if($arg==9) $y='SELECT * FROM student WHERE (room=23 AND floor=2)';
														else if($arg==10) $y='SELECT * FROM student WHERE (room=24 AND floor=2)'; 
														else if($arg==11) $y='SELECT * FROM student WHERE (room=25 AND floor=2)';
														else if($arg==12) $y='SELECT * FROM student WHERE (room=26 AND floor=2)';
														else if($arg==13) $y='SELECT * FROM student WHERE (room=27 AND floor=2)';
														else if($arg==14) $y='SELECT * FROM student WHERE (room=28 AND floor=2)';
														return $y;
													 }
				else if ($type==3) {
														if($arg==1) $y='SELECT * FROM student WHERE (room=29 AND floor=3)'; 
														else if($arg==2) $y='SELECT * FROM student WHERE (room=30 AND floor=3)';
														else if($arg==3) $y='SELECT * FROM student WHERE (room=31 AND floor=3)';
														else if($arg==4) $y='SELECT * FROM student WHERE (room=32 AND floor=3)';
														else if($arg==5) $y='SELECT * FROM student WHERE (room=33 AND floor=3)';
														else if($arg==6) $y='SELECT * FROM student WHERE (room=34 AND floor=3)';
														else if($arg==7) $y='SELECT * FROM student WHERE (room=35 AND floor=3)';
														else if($arg==8) $y='SELECT * FROM student WHERE (room=36 AND floor=3)';
														else if($arg==9) $y='SELECT * FROM student WHERE (room=37 AND floor=3)';
														else if($arg==10) $y='SELECT * FROM student WHERE (room=38 AND floor=3)'; 
														else if($arg==11) $y='SELECT * FROM student WHERE (room=39 AND floor=3)';
														else if($arg==12) $y='SELECT * FROM student WHERE (room=40 AND floor=3)';
														else if($arg==13) $y='SELECT * FROM student WHERE (room=41 AND floor=3)';
														else if($arg==14) $y='SELECT * FROM student WHERE (room=42 AND floor=3)';
					 									return $y;
														}
														
				else if ($type==4) {
														if($arg==1) $y='SELECT * FROM student WHERE (room=43 AND floor=4)'; 
														else if($arg==2) $y='SELECT * FROM student WHERE (room=44 AND floor=4)';
														else if($arg==3) $y='SELECT * FROM student WHERE (room=45 AND floor=4)';
														else if($arg==4) $y='SELECT * FROM student WHERE (room=46 AND floor=4)';
														else if($arg==5) $y='SELECT * FROM student WHERE (room=47 AND floor=4)';
														else if($arg==6) $y='SELECT * FROM student WHERE (room=48 AND floor=4)';
														else if($arg==7) $y='SELECT * FROM student WHERE (room=49 AND floor=4)';
														else if($arg==8) $y='SELECT * FROM student WHERE (room=50 AND floor=4)';
														else if($arg==9) $y='SELECT * FROM student WHERE (room=51 AND floor=4)';
														else if($arg==10) $y='SELECT * FROM student WHERE (room=52 AND floor=4)'; 
														else if($arg==11) $y='SELECT * FROM student WHERE (room=53 AND floor=4)';
														else if($arg==12) $y='SELECT * FROM student WHERE (room=54 AND floor=4)';
														else if($arg==13) $y='SELECT * FROM student WHERE (room=55 AND floor=4)';
														else if($arg==14) $y='SELECT * FROM student WHERE (room=56 AND floor=4)';
														return $y;
														}
				else if ($type==5) {
														if($arg==1) $y='SELECT * FROM student WHERE (room=57 AND floor=5)'; 
														else if($arg==2) $y='SELECT * FROM student WHERE (room=58 AND floor=5)';
														else if($arg==3) $y='SELECT * FROM student WHERE (room=59 AND floor=5)';
														else if($arg==4) $y='SELECT * FROM student WHERE (room=60 AND floor=5)';
														else if($arg==5) $y='SELECT * FROM student WHERE (room=61 AND floor=5)';
														else if($arg==6) $y='SELECT * FROM student WHERE (room=62 AND floor=5)';
														else if($arg==7) $y='SELECT * FROM student WHERE (room=63 AND floor=5)';
														else if($arg==8) $y='SELECT * FROM student WHERE (room=64 AND floor=5)';
														else if($arg==9) $y='SELECT * FROM student WHERE (room=65 AND floor=5)';
														else if($arg==10) $y='SELECT * FROM student WHERE (room=66 AND floor=5)'; 
														else if($arg==11) $y='SELECT * FROM student WHERE (room=67 AND floor=5)';
														else if($arg==12) $y='SELECT * FROM student WHERE (room=68 AND floor=5)';
														else if($arg==13) $y='SELECT * FROM student WHERE (room=69 AND floor=5)';
														else if($arg==14) $y='SELECT * FROM student WHERE (room=70 AND floor=5)';
					 									return $y;
														}
		}
	}
        ?> 
   
<p align="center" class="dline"> МИНОБРНАУКИ РОССИИ  </p> 
<p align="center" class="dline">Федеральное государственное бюджетное образовательное учреждение </p> 
<p align="center" class="dline">высшего образования</p> 
<p align="center"class="dline"></p> <br>
<p align="center"> Справка № ____ <?php echo $semestr; ?> </p> <br>
<p align="center"> Предосталяется для подтверждения проживания </p>
<p align="center"> в определенной комнате общежития с указанием соседей</p>
<p align="center"> Комната № <? if ($type==1) echo $temps; 
 																else if ($type==2) {$room=14+$temps; echo $room;}
																 else if ($type==3){$room=28+$temps; echo $room;}
																 else if ($type==4){$room=42+$temps; echo $room;}
																 else if ($type==4){$room=56+$temps; echo $room;}?></p> <br>
<style>
   table {
    width: 100%; /* Ширина таблицы в процентах */
   }
</style>

<br>
<?  $db = mysql_connect ("localhost","root","");
	   mysql_select_db ("map",$db);  
        $foo = new find_room();
			$funcname = "sqlroom";
			
			$temp=&$foo->$funcname($temps,$type);
			//echo $temp;
			$sql=$temp;
			//$sql="SELECT * FROM student WHERE (room=1 AND floor=1)";
			$result = mysql_query($sql) or die('Запрос не удался: ' . mysql_error()); ?>
            	<table border="1" align="center">
            <? while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {//var_dump($line);
            ?>
				
					<tr>
						<td>Проживающий</td>
						<td><?php echo $line["surname"], " ",$line["name"]," ",$line["patronymic"]; ?></td>
					</tr>
					<tr>
						<td>Факультет</td>
						<td><?php echo $line["faculty"]; ?></td>
					</tr>
					<tr>
					<!--	<td>Контактный телефон</td> -->
					<!--	<td><?php echo $line["phone"];?></td>-->
					</tr>
				
			<? } ?>
			</table>
<br> <br>
<p align="center"> Зав. общежития  _____________________________________ (подпись,ФИО) </p><br><br>

<p align="center" > Дата <?php $date_today = date("d.m.y"); echo $date_today;?> г. </p>
<p align="center"> МП</p>