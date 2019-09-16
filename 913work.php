<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Types of Functions </h1>
<?php
	
	//without argument/parameter  and return type
	function greeting(){
		echo "Hello PHP Function<br>";
	}
	greeting();
	echo"<br>";

	//with arguments and without return type
	function sayHello($name){
		echo "Hello $name<br>";
	}

	sayHello("Sonu");
	sayHello("Vimal");
	sayHello("John");
	echo "<br>";

	//without argument and with return type
	function square(){
		$x = 5;
		return $x*$x;
	}

	echo "Square of 5 is :".square();
	echo "<br>";

	//with arguments and with return type
	function cube ($x){
		return $x*$x*$x;
	}
	echo "cube of 3 is:".cube(3);
	echo "<br>";

	//default argument function
	function sayHai($name = "Sonu"){
		echo "Hai $name<br>";
	}

	sayHai("Rajesh");
	sayHai();
	sayHai("John");
	echo "<br>";

	//recursive function
	function recursive1($a){
		if($a < 20){
			echo "$a<br>";
			recursive1($a + 2);
		}
	}
	recursive1(10);
	echo "<br>";

	//passing array to function 
	$input = [1,2,3,4,5];
	function input_array($input){
		echo "$input[0]+ $input[3] =",$input[0]+$input[3];
	}
	input_array($input);
	echo "<br>";
?>
<h1>Super Globals</h1>
<?php
	//Super Global variable - $_SERVER
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['SERVER_PORT'];
	echo "<br>";
	echo $_SERVER['SERVER_SOFTWARE'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>";
	echo $_SERVER['REMOTE_ADDR'];
	echo "<br>";
	echo $_SERVER['GATEWAY_INTERFACE'];
	echo "<br>";
	echo $_SERVER['REQUEST_TIME'];
	echo "<br>";
	echo $_SERVER['SCRIPT_FILENAME'];
	echo "<br>";

	//super global - $GLOBALS
	$x = 75;
	$y = 25;

	function addition(){
		$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
	}
	addition();
	echo $z;
	echo"<br>";
?>

<a href="913work.php?subject=PHP&web=phpnet.com">Test $GET</a>
<?php
	//SUPER GLOBALS - $_GET
	echo "Study ".$_GET['subject']." at ".$_GET['web'];
	echo "<br>";
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	Name: <input type="text" name="username">
	<input type="submit">
</form>

<?php
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		//super globals - $_POST
		$name = $_POST['username'];
		if (empty($name)) {
			echo "Name is empty";	
		}else{
			echo "Hello $name";
		}
	}
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
	<label for="fole">FileName</label>
	<input type="file" name="file" id="file">
	<br>
	<input type="submit">
</form>

<?php
	//super Globals - $_FILES
	if($_FILES["file"]>0){
		echo "You have selected a file to upload<br>";
	}else{
		echo "Please upload some file<br>";
	}
	//super globals - $_SESSSION
	session_start();
	$_SESSION['W3schools'] = 'The Largest online tutorial';
	echo $_SESSION['W3schools'];

	//super globasl - $_ENV
	echo "<pre>";
	print_r($_ENV);
	echo "<pre>";

	echo getenv('USER');
?>




</body>
</html>