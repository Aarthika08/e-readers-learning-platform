<html>
    <h1>Registration successful</h1>
<h2>Thankyou</h2>
<body background="pink" text="black" text-align="center">

<p style="font-size:30px">
<?php
$link=mysqli_connect("localhost","root","","fproject");
if($link==false)
{
die("could not able to  connect".mysqli_error());
}
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$sql="insert into fproj (name,email,phone,dob,gender,password,password1) values('$name','$email','$phone','$dob','$gender','$password','$password1')";
if(mysqli_query($link,$sql))
{
echo " record is inserted";

}
else
{
echo ' record not inserted';
}}
//header("refresh:2;url=form.php");
?>
</p>
</body>
</html>