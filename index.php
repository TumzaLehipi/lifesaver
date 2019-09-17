
<!DOCTYPE html>
<html>
<head>
	<title>Life Saver - Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main class="container">

	<div class="well well-lg" style="text-align: center; background-color: grey; padding: 20px; margin-top: 5px;"><h1>Welcome To Life Saver</h1></div>

	<div class="main">
		<form action='results.php' method='post'>
			<div class='form-group'>
				<label>House Code: </label>
				<input type='text' name='house_code' placeholder='Enter The House Code Here' class="form-control">
			</div>

			<div class='form-group'>
				<label>Emergency Type: </label>
				<select name='emergency_type' class="form-control">
					<option value='Fire'>Fire Department</option>
					<option value='Ambulance'>Ambulance</option>
					<option value='SAPS'>SAPS</option>
				</select>
			</div>
			<div>
				<input type='submit' name='submit' class='btn btn-primary'>
				<a href="add.php" class="btn btn-default">New Resident</a>
			</div>
		</form>
	</div>

	<div class="well well-lg" style="text-align: center; background-color: grey; padding: 20px; margin-top: 5px;"><h1>Copyright &copy; Life Saver 2017. All Rights Reserved</h1></div>
	</main>
</body>
</html>