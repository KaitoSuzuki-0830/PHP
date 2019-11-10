<?php
require_once('../includes/config.php');

/*$sql = "CREATE TABLE IF NOT EXISTS Employees(
		id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		address VARCHAR(50) NOT NULL,
		salary INT(10),
		reg_date TIMESTAMP)";

if($conn->query($sql) == TRUE)
	echo "Table Created Successfully<br>";
else
	echo "Error creating Table;".$conn->error;

$sql = "INSERT INTO Employees(name,address,salary)VALUES('John','JohnDoe,India',2000);";
$sql .= "INSERT INTO Employees(name,address,salary)VALUES('Michel','Gates,Japan',3000);";
$sql .= "INSERT INTO Employees(name,address,salary)VALUES('Sridhar','Murali,France',5000);";
$sql .= "INSERT INTO Employees(name,address,salary)VALUES('Bill','Clinton,Indonesia',3000);";
$sql .= "INSERT INTO Employees(name,address,salary)VALUES('Sundar','Pichai,India',4000);";

if($conn->multi_query($sql)){
	echo "New record created successfully";
}
else{
	echo "Error:".$sql."<br>".$conn->error;
} */
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
	<body>
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="pull-left text-center">Employee Details</h2>
							<a href="create.php" class="btn btn-success float-right mb-2">ADD NEW EMPLOYEE</a>

						</div>
						<?php
							//select query
							$sql = "SELECT * FROM Employees";
							if($result = mysqli_query($conn,$sql)){
								if(mysqli_num_rows($result) >0){
									echo "<table class='table table-bordered table-striped'>";
									echo "<thead>";
									echo "<tr>";
										echo "<th>#</th>";
										echo "<th>Name</th>";
										echo "<th>Address</th>";
										echo "<th>Salary</th>";
										echo "<th colsapan='3'></th>"; //アイコンの表示数を変更する場所
									echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
									while($row = mysqli_fetch_array($result)){
										echo "<tr>";
											echo "<td>".$row['id']."</td>";
											echo "<td>".$row['name']."</td>";
											echo "<td>".$row['address']."</td>";
											echo "<td>".$row['salary']."</td>";
											echo "<td><a href ='read.php?id=".$row['id']."'title='View Record'>
											<i class='far fa-eye'></i></a></td>";
											echo "<td><a href ='update.php?id=".$row['id']."'title='Update Record'>
											<i class='fas fa-edit'></i></a></td>";
											echo "<td><a href ='delete.php?id=".$row['id']."'title='Delete Record'>
											<i class='fas fa-trash-alt'></i></a></td>";
										echo "</tr>";
									}
									echo "</tbody>";
									echo "</table>";

									mysqli_free_result($result);
								}
								else
									echo "<p class='lead'><em>No records were found</em></p>";
							}
							else
								echo "ERROR: Could not able to execute $sql".mysqli_error($conn);
							mysqli_close($conn);
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>