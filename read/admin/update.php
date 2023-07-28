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

$id=$_GET['updateid'];
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $password1=$_POST['password1'];

    $query="update 'register' set id=$id,name='$name',dob= $dob,email='$email',phone='$phone',password='$password',password1='$password1 where id=$id";
$result=mysqli_query($conn,$query);
if($result){ 
    echo "updated successfully";
    // header('location:dup-bookpage1.php');
}else{
    die(mysqli_error($conn));
}}
//     while($row =mysqli_fetch_assoc($result))
//        {
//         $id= $row['id'];
//         $name= $row['name'];
//         $dob=$row['dob'];
//         $email= $row['email'];
//         $phone= $row['phone'];
//         $password= $row['password'];

//         echo '<tr>
//         <th scope="row">'.$id.'</th>
//         <td>'.$name.'</td>
//         <td>'.$dob.'</td>
//         <td>'.$email.'</td>
//         <td>'.$phone.'</td>
//         <td>'.$password.'</td>
//         <td><a href="" class="btn btn-primary">Edit</a></td>
// <td><button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</a></button></td>
//         </tr>                         
//         ';
    //    }
    //  } 




?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../slogin.css">
<link href = "css/bootstrap.min.css" rel = "stylesheet">
<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

      
        <link href = "css/bootstrap.min.css" rel = "stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<title>operations</title>
</head>
<body>
    <div class="container my-5">
    <form class="forms_form"   method="post">
            <div class="form-group">
            <fieldset class="forms_fieldset">
                <br> <i class="fas fa-profile" style="padding-left: 1px;"></i> 
                 
                     <input style="margin: 5px;font-size: 20px;width: 420px;" type="text" name="name" placeholder="Full Name" id="username" class="forms_field-input"   title="Must contain  uppercase and lowercase letter" required />
                     <br>
                     <i class="fas fa-inventory" style="padding-left: 1px;"></i> 
                       <input style="margin: 5px;font-size: 20px;width: 420px;" type="date" name="dob" id="dob" class="forms_field-input" placeholder="D.O.B" required> 
                       <br>
                       <i class="fas fa-paper-plane" style="padding-left: 1px;"></i> 
                    <input style="margin: 5px;font-size: 20px;width: 420px;" type="email" placeholder="Email" class="forms_field-input" id ="email" name="email" required />
                    <br>
                    <i class="fas fa-phone" style="padding-left: 1px;"></i> 
                  <input  style="margin: 5px;font-size: 20px;width: 420px;" id="phone" placeholder="enter your phone" class="forms_field-input" name="phone"
                   maxlength = "10"  required >
                   <br>
                   
                   <i class="fas fa-key" style="padding-left: 1px;"></i>             
                     
                     <input style="margin: 5px;font-size: 20px;width: 420px;" type="password" id="password" name="password" placeholder="password" class="forms_field-input password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                     
                     <span class="eye" onclick="myFunction()">  

                     <i class="far fa-eye-slash" id="togglePassword"></i>        
                    </span>                     
                    <br>
                     

                  
                  <i class="fas fa-key" style="padding-left: 1px;"></i>               
                   
                   <input  style="margin: 5px;font-size: 20px;width: 420px;" type="password"  name="password1" id="password1"  placeholder="conform password"  class="forms_field-input password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      
                   <span class="eye" onclick="myFunction1()">  
                    <i class="far fa-eye-slash" id="togglePassword1"></i>        
                   </span> 
                </div> 
                       

                </fieldset>
<button type="submit" class="btn btn-primary" name="submit">Update</button>
                <!-- <div class="forms_buttons">
                  <input type="submit" value="submit" class="forms_buttons-action">
                 -->
        </form>
        </div>
    </div>



    
    <script src="func.js"></script>
<script>

function validate(){

if(!document.getElementById("password").value==document.getElementById("password").value)alert("Passwords do no match");
return document.getElementById("password").value==document.getElementById("password1").value;
return false;
}

    function myFunction(){
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        
        // toggle the icon
        this.classList.toggle("bi-eye");
    });}

    
    function myFunction1(){
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        
        // toggle the icon
        this.classList.toggle("bi-eye");
    });}
    
    


    function myFunction1(){
        const togglePassword = document.querySelector("#togglePassword1");
        const password = document.querySelector("#password2");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password2" ? "text" : "password2";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });}


</script>
</body>
</html>