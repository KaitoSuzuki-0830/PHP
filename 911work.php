<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<h1 class="text-center">LOOPING CONSTRUCT</h1>
		<?php
			#for loop - Initialization; test-condition; increment/decrement
			for ($x=1; $x  <10 ; $x++) { 
				echo "The number is $x <br>";

			}
			echo "<hr>";
			for ($count = 1; $count <=12; ++$count){
				echo "$count times 12 is".$count*12;
				echo "<br>";
			}
			echo "<hr>";

			#while loop
			$x = 1;

			while($x <= 5){
				echo "The number is $x <br>";
				$x++; //increment/decrement
			}
			echo "<hr>";

			$fuel = 10;
			while ($fuel > 0) {
				//keep driving
				echo "There's enough fuel<br>";
				$fuel--;
			}
			echo "<hr>";

			#do-while -exit-controlled loop
			$x = 1; //initialization
			do{
				echo "The number is $x<br>";
				$x++;
			}while ($x <= 5); //test-condition

			echo "<hr>";

				$X = 6;
			do{
				echo "The number is $x <br>";
				$x++;
			}while($x <= 5);

			echo "<hr>";

			#Array - Indexed Array / Associative Array
			//simple Indexed Array
			$cars = array("Volvo","Benz","BMW");
			echo "I like ".$cars[0].",".$cars[1]." and ".$cars[2];
			echo "<hr>";

			$cars =["Volvo","Benz","BMW","Jaquar","Audi"];
			for ($x=0;$x < count($cars);$x++) { 
				echo "I like ".$cars[$x];
				echo "<br>";
				# code...
			}

			print_r($cars);

			#foreach
			$x = 0;
			foreach($cars as $car){
				echo $cars[$x];
				echo "<br>";
				$x++;
			}
			echo "<hr>";

			foreach($cars as $car){
				echo $car."<br>";
			}


			echo "<hr>";

			$colors = ["red","green","blue"];
			foreach($colors as $color){
				echo $color."<br>";
			}

			echo "<hr>";
			#Associative Array
			$age = ['peter'=>32,'Ben'=>37,'Joe'=>43,'Rei'=>28];
			echo "Peter is ".$age['peter']."years old.";
			echo "<br>";
			echo "Joe is ".$age['Joe']."years old.";


			foreach($age as $name => $age){
				echo "Name:".$name.".Age:".$age;
				echo "<br>";
			}	

			$paper = array(
				"copier" =>"Copier & Multipurpose",
				"Inkjet" =>"Inkjet Printer",
				"Laser" => "Laser Printer",
				"photo" => "photographic Paper"
			);

				//print inkjet
			echo "Print Inkjet:".$paper['Inkjet']."<hr>";

				//foreach loop	
			foreach($paper as $item => $desc){
				echo "Item".$item."Description:</b>".$desc;
				echo "<br>";
			}

			#Lopp Control statements: break
			$i = 0;
			while(++$i){
				switch ($i){
					case 5:
						echo "At 5<br>";
						break 1; //exit from switch
					case 10:
						echo "At 10";
						break 2; //exit form while loop
					default:
						break;
					}
				}
			echo "<hr>";
			#Loop control statement: continue
			$j = 5;
			while($j > -1){
				$j--;
				echo $j."<br>";
				if($j == 0){
					continue;
					echo (10/$j)."<br>";
				}
			}
			echo "<hr>";
			//Multidimensional Array
			$cars = array(
					array("Volvo",22,18),
					array("BMW",15,13),
					array("Saab",50,20),
					array("Audi",17,15),
			);
			echo $cars[0][0].":<b>In stock:</b>".$cars[0][1]."<b>.Sold Out:</b>".$cars[0][2]."<br>";
			echo $cars[1][0].":<b>In stock:</b>".$cars[1][1]."<b>.Sold Out:</b>".$cars[1][2]."<br>";
			echo $cars[2][0].":<b>In stock:</b>".$cars[2][1]."<b>.Sold Out:</b>".$cars[2][2]."<br>";
			echo $cars[3][0].":<b>In stock:</b>".$cars[3][1]."<b>.Sold Out:</b>".$cars[3][2]."<br>";

			echo "<hr>";

			//Nested for loop
			for($row=0; $row<4; $row++){
				echo "<b>Row Number: $row</b>";
				echo "<ul>";
				for($col=0;$col < 3; $col++){
					echo "<li>".$cars[$row][$col]."</li>";
				}
				echo "</ul>";
			}


			echo "<hr>";
			$colors = array(
				['Red',15],
				['Green',10],
				['Blue',20],
			);

			for($row=0; $row < 3; $row++){
				for($col=0; $col < 2; $col++){
					echo $colors[$row][$col]." ";
				}
				echo "<br>";
			}

			?>
	</body>
</html>