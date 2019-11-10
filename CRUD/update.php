<?php 
		require_once('../includes/confing.php');

		$name = $address = $salary = "";
		$name_err = $address_err = $salary_err = "";

		if(isset($_POST["id"]) && !empty($_POST["id"])){
			$id = $_POST["id"];

		//validate name 
		$input_name = $_POST["name"];
		if(empty($input_name)){
			$name_err = "Please enter your name";
		}
		else{
			$name = $input_name;
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
	
		// Check input error before nserting in database
	if(empty($name_err)&& empty($address_err)&& empty($salary_err)){

		//prepare an update query
		$sql = "UPDATE Employees SET name=?, address=?,salary=? WHERE id = ?;";
		if($stmt = mysqli_prepare($conn,$sql)){

			mysqli_stmt_bind_param($stmt,"ssii",$param_name,$param_address,$param_salary,$param_id);

			//set parameters
			$param_name = $name;
			$param_address = $address;
			$param_salary = $salary;
			$param_id = $id;

			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				// Records updated successfully then redirect to index.php
				// echo "success";
				header("location: index.php");
				exit();
			}
			else{
				echo "Something went wrong. Please try again later";
			}
		}

		// close statement
		mysqli_stmt_close($stmt);
	}
	// close connection
	mysqli_close($conn);
} 
else{
		if(isset($_GET["id"])&& !empty($_GET["id"])){
			// Get id from the URL
			$id = $_GET["id"];

		// prepare an select query
 		$sql = "SELECT * FROM Employees WHERE id = ?;";

 		if($stmt = mysqli_prepare($conn,$sql)){

 			mysqli_stmt_bind_param($stmt,"i",$param_id);

 			// set parameters
 			$param_id = $id;

 		//  Attempt to execute the prepared statement
 		if(mysqli_stmt_execute($stmt)){

 			$result = mysqli_stmt_get_result($stmt);

 			if(mysqli_num_rows($result) == 1){
 				// Fetch result row as an associative array.
 				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 				// Retrive individual field value
 				$name = $row["name"]; 
 				$address = $row["address"];
 				$salary = $row["salary"];
 			}
 			else{
 				//URL doesn't contain valid id. Redirect to error page
 				header("location: error.php");
 				exit();
 			}
 		} 
 			else{
 			echo "Something went wrong. Please try again later.";
 		}
 	}
 		// close statement
 	 	mysqli_stmt_close($stmt);

 	 	// close connection
 	 	mysqli_close($conn);
 	}else{
 	header("location: error.php");
 	exit();
 	}
}
?>
<?php
	/*	$sql = "INSERT INTO Employees(name,address,salary) VALUES(?,?,?)";

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

		// Method 2
	/*$stmt = $conn->prepare("UPDATE Employees SET name = ?,address = ?,salary = ? WHERE id = ?;");
	$stmt->bind_param("ssii",$param_name,$param_address,$param_salary,$param_id);

	//set parameter and execute
	$param_name = $name;
	$param_address = $address;
	$param_salary = $salary;
	$param_id = $id;

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
	else{
		if(isset($_GET["id"])&& !empty($_GET["id"])){
		
 		$sql = "SELECT * FROM Employees WHERE id = ?;";

 		if($stmt = mysqli_prepare($conn,$sql)){

 			mysqli_stmt_bind_param($stmt,"i",$param_id);

 			$param_id = $_GET["id"];

 		if(mysqli_stmt_execute($stmt)){

 			$result = mysqli_stmt_get_result($stmt);

 			if(mysqli_num_rows($result) == 1){
 				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 				$name = $row["name"]; 
 				$address = $row["address"];
 				$salary = $row["salary"];
 			}
 			else{
 				header("location: error.php");
 				exit();
 			}
 		} else{
 			echo "Something went wrong. Please try again later.";
 		}
 	}
 	 	mysqli_stmt_close($stmt);
 	 	mysqli_close($conn);
 	}
 else{
 	header("location: error.php");
 	exit();
 	}
}

*/
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
					<div class="page-header text-center"><h2>UPDATE Record</h2></div>
						<form action="update.php" method="post">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name" value="<?php echo $name ?>">
								<span class="error">*<?php echo $name_err;?></span>
							</div>
							<div class="form-group">
								<label for="address">Address</label>
								<textarea name="address" cols="10" rows="5" class="form-control"><?php echo $address; ?></textarea>
								<span class="error">*<?php echo $address_err; ?></span>
							</div>
							<div class="form-group">
								<label for="name">Salary</label>
								<input type="text" class="form-control" name="salary" value="<?php echo $salary ?>">
								<span class="error">*<?php echo $salary_err;?></span>
							</div>
							<div class="form-group">
								<input type="hidden" name="id" value="<?php echo $id;?>">
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