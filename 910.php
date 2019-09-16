<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP BASICS</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width,initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<h1 class="text-center">OPERATORS</h1>
		<?php
			$x=10;
			$y=6;

			#Arithmetic operators
			echo "Addition:",$x+$y."<br>";
			echo "Subtraction:",$x-$y."<br>";
			echo "Multiplication:".$x*$y."<br>";
			echo "Division:".$x/$y."<br>";
			echo "Modulus:".$x %$y."<br>";
			echo "Exponentation:".$x**$y."<br>";//exponentation (10 to the power of 6)

			#Assignment Operator
			$x=12;
			echo $x."<br>";

			$x += 10;	//$x= $x+10
			echo $x."<br>";

			$x -= 10;	//$x= $x-10
			echo $x."<br>";

			$x *= 10;	//$x= $x*10
			echo $x."<br>";

			$x /= 10;	//$x= $x/10
			echo $x."<br>";

			$x %= 10;	//$x= $x %10
			echo $x."<br>";

			#comparision operators
			$x =	100;
			$y =	"100";

			var_dump($x == $y); //returns true because values are equal
			echo "<br>";

			var_dump($x === $y); //returns false because datatypes are not equal
			echo "<br>";

			var_dump($x != $y); //returns false because values are equal
			echo "<br>";

			var_dump($x !== $y); //returns true because datatypes are not equal
			echo "<br>";

			var_dump($x > $y);	//returns false because values are equal
			echo "<br>";

			var_dump($x < $y);	//returns false because values are equal
			echo "<br>";

			var_dump($x >= $y); //returns true because values are equal
			echo "<br>";

			var_dump($x <= $y);	//returns true because values are equal
			echo "<br>";

			#increment and decrement operator
			$x = 10;

			echo ++$x."<br>";	//$x = $x +1; $x=11

			echo $x++."<br>";	//$x = 11 $x = $x + 1	$x=12

			echo --$x."<br>";	//12-1 = 11 ; $X = 11
			//post-decrement
			echo $x--."<br>"; //$x = 11; $x - 1 = 10

			$y = 100;
			echo $y++."<br>"; //$y=100; $y = 100+1
			echo --$y."<br>"; //$y=101 -1=100
			echo ++$y."<br>";
			echo $y--."<br>";

			#Logical Operator
			$x = 100;
			$y = 50;

			var_dump($x == 100 && $y ==50); 
			//returns true because both are equal

			var_dump($x == 100 || $y == 60);
			 //returns true because either od one condition is true

			var_dump($x != 90); //returns true because condition is true

			var_dump($x == 100 and $y ==50); //returns true because both are equal

			var_dump($x ==101 or $y ==50); 
			//returns true because eigher of one condition is true

			var_dump($x == 100 or $y==50); //returns false because both are equal

			var_dump($x == 100 xor $y == 50); 
			//returns true because either of one condition id false
			echo "<br>";

			#string operator
			$txt1 = "Hello";
			$txt2 ="PHP!";
			//concatenation operator
			echo $txt1.$txt2."<br>";
			$txt1.=$txt2; //$txt1 = $txt1.$txt2;
			echo $txt1."<br>";

			#Ternary operator
			$fuel = 1;
			echo $fuel <=1 ? "Fill tank now":"There's enough fuel";
			echo "<br>";
			echo $fuel <1 ? "Fill tank now":"There's enough fuel";
	 	?>

	 	<h1> Conditional Construct</h1>
	 	<?php
	 		$a = 10;
	 		$b =5;

	 		if($a > $b)
	 			echo "a is greater than b<br>";

            //swapping
	 		if($a > $b){
	 			echo $a."is greater than".$b."<br>";
	 			$c = $a;	//$c =10
	 			$a = $b;	//$a =5
	 			$b = $c;	//$b =10

	 			echo 'a='.$a.',b='.$b;
	 		}
	 		echo "<br>";

	 	 	$t = date("H"); //07 24-hours format
	 	 	echo $t."<br>";

	 	 	echo date("G")."<br>"; //7
	 	 	echo date("F")."<br>"; //september
	 	 	echo date("M")."<br>"; //sep
	 	 	echo date("Y")."<br>"; //2019
	 	 	echo date("D")."<br>"; //Tue
	 	 	echo date("j")."<br>"; //10	

	 	 	#if statement
	 	 	if($t<20)
	 	 		echo "Have a good day!<br>";
	 	 	
	 	 	
	 	 	#if-else statement
	 	 	if($t < "2")
	 	 		echo "Have a good day!";
	 	 	else
	 	 		echo "Have a good night!";

	 	 	echo "<br>";

	 	 	#if-else-if statement
	 	 	if($t > "10")
	 	 		echo "Have a good morning";
	 	 	elseif ($t < "20")
	 	 		echo "Have a good day!";
	 	 	else
	 	 		echo "Have a good night!";
	 	 	echo "<br>";

	 	 	if ($a > $b):
	 	 		echo $a." is greater than ".$b;
	 	 	elseif ($a == $b):
	 	 		echo $a."equals".$b;
	 	 	else:
	 	 	   	echo $a." is neither greater than or equal to ".$b;
	 	 	endif; /// {}で囲むか　endifを使って書く
	 	 	echo "<br>";

	 	 	#switch conditional construct
	 	 	$page = "Abc";
	 	 	switch($page)
	 	 	{
	 	 		case"Home":
	 	 			echo "You selected Home";
	 	 			break;
	 	 		case "About":
	 	 			echo "You selected About";
	 	 		 	break;
	 	 		case "News":
	 	 			echo "You selected News";
	 	 			break;
	 	 		case "Login":
	 	 			echo "You selected Login";
	 	 			break;
	 	 		default:
	 	 			echo "No matches found";
	 	 	}
	 	 	echo "<br>";

	 	 	$day = "2";
	 	 	switch($day)
	 	 	{
	 	 		case 0:
	 	 		echo "Monday";
	 	 		break;

	 	 		case 1:
	 	 		echo "Tueday";
	 	 		break;

	 	 		case 2:
	 	 		echo "Wednesday";
	 	 		break;

	 	 		case 3:
	 	 		echo "Thrsday";
	 	 		break;

	 	 		default:
	 	 		echo "No matches found";
	 	 	}





	 	?>
	</body>
</html>