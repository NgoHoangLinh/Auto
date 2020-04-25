<!doctype>
<html>
	<head>
		<title> Form result
		</title>
	<link href= "Style.css" rel="stylesheet">
	</head>
	<body>
		<div class="content" style="padding: 150px;">
		Model : <?php echo $_REQUEST['Model']; 		?> <br/>
		Release time : <?php echo $_REQUEST['Release_time']; 		?> <br/>
		<span style=" color:<?php echo $_REQUEST['Colour']; ?>  "> Colour</span>  <?php echo $_REQUEST['Colour']; 		?> <br/>
		Type of car : <?php echo $_REQUEST['Active']; 		?>
					<?php echo $_REQUEST['Elegance']; 		?><br/>
		Type of tire : <?php echo $_REQUEST['TypeOfTire']; 		?> <br/>
		
		Additional information :<?php echo $_REQUEST['comment']; 		?>   <br/>
		Numbers in additional information :
		
		<?php $textic = $_REQUEST['comment'];
		
		  /* -------- РЕГУЛЯРОЧКИ ЗДЕСЬ. Выделяют в тексте номера зеленым цветом. А те, что с +, подчеркивают ------------------------------------------- */
		
			$a =  preg_replace_callback(
				'/(\s375)|(\s84)|(\s7)|(\s1)|(\s53)|(\+)|(\d\s)/', 
				function ($matches) {
					$back="";
					if ($matches[7]){
						return $matches[0]."</font></u> ";
					} else{
						if ($matches[6]){
							return "<u><font color=\"green\"> ".$matches[0];
						} else {
								return " <font color=\"green\">".$matches[0];
				}}},
					$textic);
			
			echo $a;
			echo "</font>";
			
			/* ------------------------------------------------------------------------------------------- */
		    /* ----------------------  НИЖЕ ПРОШЛЫЙ КОД, ПУСТЬ ОСТАНЕТСЯ ДЛЯ ФЛАГОВ  ---------------------- */
			  /* ------------------------------------------------------------------------------------------- */
			?>  			
			<br/>
		№ VIP card :<span style = "color: #f99;"> <?php echo $_REQUEST['VIP_card']; 		?></span> <br/>
	
		
		Number : <?php 
			$num=$_REQUEST['Tel'];

            $num=preg_replace('/[^0-9|"+"]/', '', $num);
	
				styler($num);
				
				echo $num;
				
				echo "</font>, ";
				$num="";
				

			function styler($num){
				$codes=["+375",  "+84",  "+7", "+1", "+53"];
				for($k=0;$k<count($codes);$k++){
				
					if(substr_count($num,$codes[$k])>0){
						$code=$codes[$k];
					}
				
				}
				switch($code){
							case "+375":
								echo "<font color=\"#5CFD4A\"><img width=\"20px\" src=\"images/Belarus.png\"/> ";
								break;
							case "+84":
								echo "<font color=\"#F03A43\"><img width=\"20px\" src=\"images/Vietnam.png\"/> ";
								break;
							case  "+7":
								echo "<font color=\"#3C96EA\"><img width=\"20px\" src=\"images/Russia.png\"/> ";
								break;
							case "+1":
								echo "<font color=\"#FFF\"><img width=\"20px\" src=\"images/USA.png\"/> ";
								break;
							case "+53":
								echo "<font color=\"#51F9D5\"><img width=\"20px\" src=\"images/Cuba.png\"/> ";
								break;
							default:
								echo "<font color=\"#aaa\"><img width=\"20px\" src=\"images/flagByDefault.png\"/> ";
								break;
				}
			}
			?>  	
		<br/>
		<div>
	</body>
</html>	