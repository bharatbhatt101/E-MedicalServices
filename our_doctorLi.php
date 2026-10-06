<html>

   
<?php
         
         session_start();

         if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
             header("location: log.php");
              exit;
         }
         


     ?>

<head>
    <title>Our Services- Doctors</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="ordocli.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>



    <div class="super">


        <div class="div1" id="doctor">
            <p><i class="fa-solid fa-hospital"></i>
              Doctors List</p>

              
              <div class="custom">
                  
              <a href="index1.php" id="home" style="padding:5px; margin-top:-25px; margin-left:75%; font-size:20px;"><i class="fa-solid fa-home"></i></a>

                
                
            </div>
          

        </div>
    

        
         
         <div class="host">

             <div class="box8 num">
                <div class="d8">
                
                   
                <a href="our_doctorLi.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Robin Bohat</p>
             <hr>
            <p><i class="fa-solid fa-layer-group"></i> Category: Orthopedic</p>
             <hr>
             <p><i class="fa-solid fa-user-graduate"></i> Qualification: MBBS, MS</p>
             <hr>
             <p><i class="fa-solid fa-clock"></i> Experience: 12 Years</p>
             <div class="d9">
             <a href="tel:6284385648"><button>Call Us</button></a> 
                 
                </div>
            </div>

            <div class="box8 num">
                <div class="d8">
                
                   
                <a href="our_doctorLi.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Navdeep Kaur</p>
             <hr>
            <p><i class="fa-solid fa-layer-group"></i> Category: Gynaecologist</p>
             <hr>
             <p><i class="fa-solid fa-user-graduate"></i> Qualification: MBBS, MD</p>
             <hr>
             <p><i class="fa-solid fa-clock"></i> Experience: 10 Years</p>
             <div class="d9">
                 
             <a href="tel:6284385648"><button>Call Us</button></a> 

                 
                </div>
            </div>

            <div class="box8 num">
                <div class="d8">
                
                   
                <a href="our_doctorLi.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. GL Mahajan</p>
             <hr>
            <p><i class="fa-solid fa-layer-group"></i> Category: General Doctor</p>
             <hr>
             <p><i class="fa-solid fa-user-graduate"></i> Qualification: BAMS</p>
             <hr>
             <p><i class="fa-solid fa-clock"></i> Experience: 15 Years</p>
             <div class="d9">
            
             <a href="tel:7814621687"><button>Call Us</button></a> 

                 
                </div>
            </div>


            
         




            
</div>
</div>
    

    
</body>

</html>