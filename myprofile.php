<html>


<?php
         
         session_start();

         if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
             header("location: log.php");
              exit;
         }
         


     ?>



<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="mypro.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>



    <div class="super">


        <div class="div10">
            <p><i class="fa-solid fa-stethoscope"></i>
              Profile</p>
              <div class="custom">
                  
                 
              <a href="index1.php" id="home" style="padding:5px; margin-top:-40px; margin-left:75%; font-size:20px;"><i class="fa-solid fa-home"></i></a>
                
                
            </div>

        </div>

        <hr>
        <div class="div5">
        <div class="box8 num">
                <div class="d8">
                
                <a href="myprofile.php"> My Profile</a>
             </div>
                <center>


                    
<?php



include 'rsub.php';



$username = $_SESSION['username'];


$sql = "SELECT pp FROM users WHERE username='$username'";
$result=mysqli_query($conn,$sql);



if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    $profilePicture = $row['pp'];
    $default='uploads/default.png';



    if (!empty($profilePicture)) {
        echo "<img src='$profilePicture' alt='Profile Picture'>";
        
    }
    
} else {
    echo "<img src='$default' alt='Default Profile Picture'>";
}


?>


                </center>
                    
                  <?php
         
                      echo "<h1 align='center' style='color:black;'> ".($_SESSION['username'])."</h1>";
       
                   ?>

             <hr>
                  
                <div class="d9">
                <a href="edit.php" style="curser:pointer;"><button class="edit" style="curser:pointer;">Set Profile</button></a> 
                <a  style="curser:pointer;"><button class="logout" style="curser:pointer;" onclick="logout()">Logout</button></a>  
                            
                </div>
            </div>

        
    </div>
    

    <script>
function logout() {
  // Show confirmation dialog box
  var confirmLogout = confirm("Are you sure you want to logout?");
  
  // If user confirms logout, redirect to logout page
  if (confirmLogout) {
    window.location.href = "logout.php"; // Replace "logout.php" with your logout page URL
  }
  else {
    // Do nothing if user cancels
    return false;
  }
}
</script>
    
</body>

</html>