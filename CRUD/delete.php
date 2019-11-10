<?php
	//check of id parameter from the delete.php form
    if(isset($_POST["id"]) && !empty($_POST["id"])){
        require_once("../includes/config.php");
            //prepare the select statement
            $sql = "DELETE FROM Employees WHERE id = ?";
            if($stmt = mysqli_prepare($conn,$sql)){
                //bind the variables to the prepared statement as parameter
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                //set parameters
                $param_id = trim($_POST["id"]);
                //Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    header("location: index.php");
                    exit();
                }
                else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }else{
            //check existance of id parameter from url
            echo "Error";
    }
  }
?>




<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-sxale-1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="pull-left text-center">Delete Employee</h2>
						</div>

						<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
							<div class="alert alert-danger">
								<input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
								<p>Are you sure want to delete this record?</p><br>
								<p>
									<input type="submit" class="btn btn-danger" value="yes">
									<a href="index.php" class="btn btn-default">No</a>
								</p>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>