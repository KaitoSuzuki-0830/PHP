<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet"  href="">
</head>
<body>
	<h1 class="text-center">ARRAY-SORTING/SEARCHING/INSERT/DELETE</h1>
	<?php
	 #Sorting Array - Indexed
	$fruits = ["Apple","Mango","Banana","Grapes"];
	$numbers = [7,6,4,8,2];

	//re-arranging the array element in ascending order[A-Z]
	sort($fruits);
	foreach($fruits as $fruit){
		echo $fruit." ";
	}

	echo "<hr>";
	//re-arranging the array element in acscending order[1-10]
	sort($numbers);
	foreach ($numbers as $number) {
		echo $number." ";
	}
	
	echo "<hr>";
	//re-arranging the array element in descending order[Z-A]
	rsort($fruits);
	foreach ($fruits as $fruit) {
		echo $fruit." ";
	}

	echo "<hr>";
	//re-arranging the array element in descending order [10-1]
	rsort($numbers);
	foreach ($numbers as $number) {
		echo $number." ";
	}

	#Sorting - Associative Array
	$age = ['peter'=>40,'Ben'=>37,'Joe'=>29];

	asort($age);
	echo "<pre>";
	print_r($age);
	echo "</pre>";

	echo "<hr>";

	arsort($age);
	echo "<pre>";
	print_r($age);
	echo "</pre>";

	echo "<hr>";

	ksort($age);
	echo "<pre>";
	print_r($age);
	echo "</pre>";

	echo "<hr>";

	krsort($age);
	echo "<pre>";
	print_r($age);
	echo "</pre>";
	echo "<hr>";

	#Searching array
	$a = array("a"=>"red","b"=>"green","c"=>"blue");
	echo array_search(5, $a,true);
	echo "<hr>";

	#inserting elements to the array
	$fruits = ['banana','apple','mango','orange'];
	// add new element to the end of the array based on in
	$fruits[4] = 'grapes';
	echo "<pre>";
	print_r($fruits);
	echo "</pre>";

	echo "<hr>";


	//insert element to array by using array_push()
	$colors = array('red','green');
	array_push($colors,'blue','yellow','white');
	echo "<pre>";
	print_r($colors);
	echo "</pre>";

	//delete element to array by using array_pop()
	$color = array('red','green','blue');
	array_pop($color);
	echo "<pre>";
	print_r($color);
	echo "</pre>";
	echo "<hr>";
	?>

	<h1 class="text-center">Object Oriented Programming</h1>
	<h3>Class</h3>
	<h3>Object</h3>
	<h3>Inhertiance</h3>
	<h3>Polymorphism</h3>
	<h3>Encapsulation</h3>
	<h3>Abstraction</h3>

	<?php
		//class Definition 
		/**
		 * 
		 */
		class Books{
			//properties
			var $title;
			protected $price;
			private $diary;

			//constructor
			public function __construct($title,$price){
				echo "Initializing Object.....<br>";
				$this ->title = $title;
				$this ->price = $price;
			}
			
			//Member functions
			//getters and setters
			public function getPrice(){
				echo $this ->price."<br>";
			}

			public function getTitle(){
				echo $this ->title."<br>";
			}

			/*public function setPrice($price){
				$this ->price = $price;
			}

			public function setTitle($title){
				$this ->title =$title;
			} */

			

			//polymorphism - overloading/overriding
			public function add($x){
				$x = $x + 1;
				echo $x;
			}

			}

			//creating objects -constructor is called //invoked
			$physics = new Books("physics for High School",100);
			$chemistry = new Books("Molecular chemistry",150);
			$maths = new Books("Algebra",200);

			//can't access private/protected property outsite the books class
			//$physics->price = 150;

			/* $physics->setTitle("physics for High School");
			$physics->setPrice(100);

			$chemistry ->setTitle("Molecular chemistry");
			$chemistry ->setPrice(150);

			$maths ->setTitle("Algebra");
			$maths ->setPrice(200); */

			$physics ->getTitle();
			$physics ->getPrice();

			$chemistry ->getTitle();
			$chemistry ->getPrice();

			$maths ->getTitle();
			$maths ->getPrice();


			class Comicbook extends Books{
				var $booktype;

				function setType($type){
					$this->booktype = $type;
				}

				function getType(){
					//chikd class can access the protected property price of the parent class
					echo $this ->price." ".$this ->booktype;
				}

				//polymorphism - overriding
				public function add($x){
					$x = $x +2;
					echo $x;
				}
				//polymorphism - overloading is not supported in php
				public function area($x,$y){
					$x = $x *$y;
					echo $x;
				}

				/*public function area($x,$y,$z){
					echo $x * $y * $z;
				}*/

			}

			$comic =new ComicBook("Will Eisner",100);

			/*$comic->setTitle("Will Eisner");
			$comic->setPrice(100);*/
			$comic->setType("Comic Book");

			$comic->getTitle();
			$comic->getPrice();
			$comic->getType();

			//child class cannot access the private property of the parent class
			echo $comic->diary;
			echo $comic->title;

			//Function add is overridden in the child class - polymorphism
			$comic ->add(5);


	?>

</body>
</html>