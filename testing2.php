<!-- //this is for login -->
<?php
$email=$_POST['email']; 
$password=$_POST['password'];
    $conn = mysqli_connect("localhost", "root", "", "signup");


if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
else{
$stmt=$conn->prepare("select * from register where email=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_result=$stmt->get_result();
if($stmt_result->num_rows>0){
$data=$stmt_result->fetch_assoc();
if($data['password']===$password)
{
echo "<h2>login success</h2>";
//header("location:index.html");
}
else
{
echo "<h2>login unsuccess</h2>";
}
}else{
echo "<h2>login uniiiisuccess</h2>";
}
}



?>