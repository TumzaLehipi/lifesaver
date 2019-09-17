<?php

	$message = "";
	if(isset($_POST['submit'])){
		$con = mysqli_connect("localhost","root","","resident_details");
		

		if($_POST['location'] == "" || $_POST['house_code'] == "" || $_POST['household_name'] == ""){
			$message = "error";
		}else{
			$location = mysqli_real_escape_string($con, $_POST['location']);
			$house_code = mysqli_real_escape_string($con, $_POST['house_code']);
			$household_name = mysqli_real_escape_string($con, $_POST['household_name']);
			
			$query = "INSERT INTO details (house_code, location, household_name) VALUES ('$house_code', '$location', '$household_name')";
		

			if (mysqli_connect_errno())
			{
			 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}else{
				$result = mysqli_query($con, $query);

				if($result){
					$message = "success";
				}
			}
		}

		

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Life Saver - Add</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main class="container">
	<div class="well well-lg" style="text-align: center; background-color: grey; padding: 20px; margin-top: 5px;"><h1>Add New Resident</h1></div>
	<div class="main">
		<?php if($message == "error") : ?>
			<div class="alert alert-danger">All Fields Are Required</div>
		<?php elseif($message == "success") :?>
			<div class="alert alert-success">Record Added Successfully</div>
		<?php endif;?>

		<form action="add.php" method="post">
			<div class="form-group">
			    <label for="house_code">House Code:</label>
			    <input type="text" class="form-control" id="house_code" name="house_code">
			</div>

			<div class="form-group">
			    <label for="location">Location:</label>
			    <input type="text" class="form-control" id="location" name="location">
			</div>

			<div class="form-group">
			    <label for="house_name">House Name:</label>
			    <input type="text" class="form-control" id="house_name" name="household_name">
			</div>
			<input type="submit" name="submit" class="btn btn-primary" value="Submit"> 
			<a href="index.php" class="btn">Cancel</a>
			
		</form>
	</div>
	<div class="well well-lg" style="text-align: center; background-color: grey; padding: 20px; margin-top: 5px;"><h1>Copyright &copy; Life Saver 2017. All Rights Reserved</h1></div>
	</main>
</body>
</html>