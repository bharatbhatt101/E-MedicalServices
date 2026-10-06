<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="ind1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        

  


                   
                  

        
</head>

<body>



       <?php
         
          session_start();

          if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
              header("location: log.php");
               exit;
          }
          


      ?>

    <div class="super">


        <div class="div1">
            <p><img src="img/hospital1.jpeg" alt="" id="logo">
              E Medical Help & Services</p>

              
              <div class="custom">
    <a href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Search Doctors</a>
    <a href="medicine.php"><i class="fa-solid fa-tablets"></i> Medicine Search</a>
    <a href="contact.php"><i class="fa-solid fa-phone"></i> Contact Us</a>
    <a onClick="logout()"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
        </div>
          

              <div class="bar" >
                  <i class="fa-solid fa-bars" id="op" onclick="openNav()"></i>
                </div>
                <div class="cmob" id="mySidenav">
                    <i class="fa-solid fa-xmark" id="cl" onclick="clNav()" style="display:none;" ></i>
                    
                    <a href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Search Doctors</a>
                    <a href="medicine.php"><i class="fa-solid fa-tablets"></i> Medicine Search</a>
                    <a onClick="logout()" style="margin-bottom:1.5rem ;"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                    
                    <a href="contact.php"  id="contact" >Contact Us</a>  
                </div>
            

        </div>
          
       
         

      <?php
         
         echo "<h1> Welcome - ".($_SESSION['username'])."</h1>";

   ?>
        <hr>
        <div class="box1">
        <div>
            <b>(Your Health - Our Duty)</b>
            <h2>Our Services</h2>
        </div>
        <div class="btn">

            <a href="our_doctorLi.php"><button><i class="fa-solid fa-user-doctor"></i><br> Our Doctors</button></a>
            <a href="book_appoint.php"><button><i class="fa-solid fa-book"></i><br>Book Appointment</button></a>
        <a href="health_consult.php"><button><i class="fa-solid fa-comment-medical"></i><br>Health Consultant</button></a>
        <a href="order_medi.php"><button><i class="fa-solid fa-tablets"></i><br>Order Medicine</button></a>
        <a href="e_services.php"><button><i class="fa-solid fa-truck-medical"></i><br>Emergency Services</button></a>
    </div>


        
    </div>

      

        <hr style="margin-top:15px;">
        <div class="div2">
            
            <div class="box2">
            <div>

                <a><i class="fa-solid fa-magnifying-glass"></i> Search Help</a>
            </div>    
                <hr>
                <div>

                    <b>Doctor|Medical Shop|Hospital Help Services</b>
                </div>
              <div>

                  <img src="img/doctor1.jpeg" alt="">
                </div>
                <div>

                    <a href="search.php"><button>View</button></a>
                </div>
            </div>
            <div class="box3"><a><i class="fa-solid fa-envelope"></i> My Inbox </a>
                <hr>
                <b>Medicine Order|Appointment Confirmation</b><br>

                <img src="img/myinbox.jpeg" alt=""><br><br>
                <a href="myinbox.php"><button>View</button></a>
                
                 
            </div>
            <div class="box4"><a><i class="fa-solid fa-user"></i> My Profile</a>
                <hr>
                <b>Update Profile Information| Get More Visible</b><br>

                <img src="img/myprofile.jpeg" alt=""><br><br>
                <a href="myprofile.php"><button>View</button></a>
                
                
            </div>
            <div class="box5"><a><i class="fa-solid fa-tablets"></i> Medicine Search</a>
                <hr>
                <b>Search Medical Shops having medicine Help</b><br>

                <img src="img/medi.jpeg" alt=""><br><br>
                <a href="medicine.php"><button>View</button></a>
                
                
            </div>


        </div>

        
    </div>
    
    


    <footer>
        <p> @2024 all copyright || reserved</p>
    </footer>

  

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


function openNav() {
    
    op.style.display = "none";
    cl.style.display = "block";
    mySidenav.style.display = "flex";
    
}

function clNav() {
    
    op.style.display = "block";
  
    cl.style.display = "none";
    mySidenav.style.display = "none";
    
}

</script>
</body>
</html>