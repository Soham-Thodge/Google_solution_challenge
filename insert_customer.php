<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="col-6">
				<img src="Dabewallah_login.png" class="dablog">
			</div>
			<div class="col-3">

			</div>
		</div>
	</div>
	</div>
	<center>
		<?php

		//servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "dabewallah");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Email = $_REQUEST['Email'];
		$Name = $_REQUEST['Name'];
		$Password = $_REQUEST['Password'];
		$Address = $_REQUEST['Address'];
		$Phone_number = $_REQUEST['Phone_number'];
		
		// Performing insert query execution
		// here our table name is customer
		$sql = "INSERT INTO customer VALUES ('$Email',
			'$Name','$Password','$Address','$Phone_number')";
		
		if(mysqli_query($conn, $sql)){
		} 
        else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>


</body>

</html>