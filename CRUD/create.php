
<?php 
		$name = $address = $salary = "";
		$name_err = $address_err = $salary_err = "";

		if($_SERVER["REQUEST_METHOD"]== "POST"){

		//validate name 
		$input_name = $_POST["name"];
		if(empty($_POST["name"])){
			$name_err = "Please enter your name";
		}
		else{
			$name = $_POST["name"];
			if(!preg_match("/^[a-zA-Z ]*$/",$name)){
				$name_err = "Only letters and white space allowed";
			}
		}
	
		//validate address
		$input_address = $_POST["address"];
		if(empty($input_address)){
			$address_err = "Please enter your address";
		}
		else{
			$address = $input_address;
		}

		//validate salary
		$input_salary = $_POST["salary"];
		if(empty($input_salary)){
			$salary_err = "Please enter your salary";
		}
		else{
			$salary = $input_salary;
		}
	

	if(empty($name_err)&& empty($address_err)&& empty($salary_err)){

		require_once('../includes/confing.php');

		/*$sql = "INSERT INTO Employees(name,address,salary) VALUES(?,?,?)";

		if($stmt = mysqli_prepare($conn,$sql)){
			mysqli_stmt_bind_param($stmt,"ssi",$param_name,$param_address,$param_salary);

			$param_name = $name;
			$param_address = $address;
			$param_salary = $salary;

			if(mysqli_stmt_execute($stmt)){
				header("location: index.php");
				exit();
			}
		else{
			echo "Something went wrong.please try again later.";
		}
	}
		mysqli_stmt_close($stmt);
	}
	mysqli_close($conn); */


	$stmt = $conn->prepare("INSERT INTO Employees(name,address,salary) VALUES(?,?,?);");
	$stmt->bind_param("ssi",$param_name,$param_address,$param_salary);

	//set parameter and execute
	$param_name = $name;
	$param_address = $address;
	$param_salary = $salary;

	if($stmt->execute()){
		header("Location: index.php");
		exit();
	}
	else{
		echo "Something went wrong. Please try again later.";
	}

	$stmt->close();
	$conn->close();
}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-sxale-1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<style>
			.error{ color:red;}
		</style>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col_md-8">
					<div class="page-header text-center"><h2>NEW EMPLOEE</h2></div>
						<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name" value="<?php echo $name ?>"placeholder="enter your username">
								<span class="error">*<?php echo $name_err;?></span>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea name="address" cols="10" rows="5" class="form-control"><?php echo $address ?></textarea>
								<span class="error">*<?php echo $address_err; ?></span>
							</div>
							<div class="form-group">
								<label>Salary</label>
								<input type="text" class="form-control" name="salary" value="<?php echo $salary ?>"placeholder="typein your salary">
								<span class="error">*<?php echo $salary_err;?></span>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" name="submit" value="Submit">
								<a href="index.php" class="btn btn-default">Cansel</a>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</body>
</html>