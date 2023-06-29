<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "signup");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$uname = $_REQUEST['name'];
		$sdob = $_REQUEST['dob'];
		$semail = $_REQUEST['email'];
		$sp = $_REQUEST['phone'];
		$pass = $_REQUEST['password'];
		$passw = $_REQUEST['password2'];

		$sql = "INSERT INTO register(name,dob,email,phone,password,password2) VALUES ('$uname',
			'$sdob','$semail','$sp','$pass','$passw')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$uname\n $sdob\n "
				. "$semail\n $sp \n $pass \n $passw");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
