<br><br><br><br>

<!-- // require_once('proj1/r');
// include 'db.php';
// $query="select * from registers";
// $result=mysqli_query($conn,$query); -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "feedback";



// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$query="select * from tbl_contact";
$result=mysqli_query($conn,$query);
?>

<html><head><title></title>
    <link rel="stylesheet" href="bookpagestyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.37.2/apexcharts.min.js" /> -->
    
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    
    .dropdown-container {
        display: none;
        /* background-color: #262626; */
        background-color: transparent;
    
        padding-left: 8px;
      }
      
      /* Optional: Style the caret down icon */
      .fa-caret-down {
        float: right;
        padding-right: 8px;
      }
    </style>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <i class='fa-book-open'></i> <span class="nav_logo-name">BOOKRACK</span> </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">DashBoard</span> </a> 
                    <a href="./bookpage1.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Feedback</span> </a> 
                    <a href="./dup-bookpage1.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">User</span> </a>
                             
    
                     </div>
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>
    <br><br><br>
            <h2>DASHBOARD</h2></div>
 <div class="bg-dark">
    <div class="row mt-5">

        <div class="col">
            <div class="card mt-5" style="background-color: #dbdee6;">
                <div class="card-header">
                    <h2>User FeedBack</h2>

                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td>Name</td>
                            <!-- <td>DOB</td> -->
                            <td>Email</td>
                            <td>Phone</td>
                            <td>message</td>
                            <!-- <td>Delete</td> -->
                        </tr>
                        <tr>
                           <?php
                        //    $queryrun=mysqli_query($conn,$query);
                           while($row =mysqli_fetch_assoc($result))
                           {
                           ?> 
                           <!-- <th scope="row">'.$id.'</th> -->
                           <td><?php echo $row['fldName'];?></td>
                           <td><?php echo $row['fldEmail'];?></td>
                          <td><?php echo $row['fldPhone'];?></td>
                          <td><?php echo $row['fldMessage'];?></td>
                            
                           <!-- <td><a href="" class="btn btn-primary">Edit</a></td>
                           <td><a href="" class="btn btn-danger">Delete</a></td>
<td><button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</a></button></td> -->
                        </tr>
                        <?php
                    
                    }?>
                    </table>


                </div>

            </div>
        </div>
    </div>

 </div>
       
          
           
        <script src="bookpage.js"></script>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.37.2/apexcharts.min.js"> </script>
        </body></html>

        <!-- https://youtu.be/72U5Af8KUpA -->