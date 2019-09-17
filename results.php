<?php
	if(isset($_POST['submit'])){

		$con = mysqli_connect("localhost","root","","resident_details");
		$houseCode = mysqli_real_escape_string($con,$_POST['house_code']);
		$emergency_type = $_POST['emergency_type'];
		$feedback = "";

		

		$house_code = "";
		$location = "";
		$household_name = "";
		

		// Check connection

		if (mysqli_connect_errno())
		{
		 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{

			$query = "SELECT * FROM details where house_code='$houseCode'";
			$result = mysqli_query($con, $query);

			
			if($result){

				$results = mysqli_fetch_assoc($result);
				$house_code = $results['house_code'];
				$location = $results['location'];
				$household_name = $results['household_name'];

				if(strlen($house_code) >= 1)
				{
					$feedback = "true";
				}else if(strlen($house_code) < 1){
					$feedback = "empty";
				}
				
			}else{
				$feedback = "false";
			}
		}


	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Life Saver - Results</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main class="container">
	<div class="well well-lg" style="text-align: center; background-color: grey; padding: 20px; margin-top: 5px;"><h1>Search Results</h1></div>
	<div class="main">	
	<?php
		if($feedback == "true"){
			echo "<p><strong>Emergency Type:</strong> $emergency_type</p>
		<p><strong>House Code:</strong> $house_code</p>
		<p><strong>Location:</strong> $location</p>
		<p><strong>Household Name:</strong> $household_name</p>";
		}else if($feedback == "false"){
			echo "<div class='alert alert-danger'>Record Not Found</div>";
		}else if($feedback == "empty"){
			echo "<div class='alert alert-danger'>Please Enter A Valid House Code</div>";
		}

	?>
		
	<a href="index.php" class="btn btn-primary">Go Back</a>
	</div>	
	<div class="well well-lg" style="text-align: center; background-color: grey; padding: 20px; margin-top: 5px;"><h1>Copyright &copy; Life Saver 2017. All Rights Reserved</h1></div>
	</main>
</body>
</html>