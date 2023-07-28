<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "signup";



// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from register where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "deleted";
        header('location:dup-bookpage1.php');

    }
    else{
      echo "not deleted";
    
    }
}

?>