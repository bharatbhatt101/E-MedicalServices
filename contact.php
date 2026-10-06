<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="cont.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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


        <div class="div10" id="div10">
            <p><i class="fa-solid fa-stethoscope"></i>
              WE ARE AVAILABLE 24/7</p>

              
              <div class="custom">
                  
                  <a href="index1.php" id="home"><i class="fa-solid fa-house"></i> Home</a>
                  <a href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Search Doctors</a>
                  <a href="medicine.php"><i class="fa-solid fa-tablets"></i> Medicine Search</a>
                
                
            </div>
          

        </div>
        <h1 id="we">Contact Us</h1>

        <hr>
        <div class="div5">
            <div class="box7"><img src="img/bharat.jpg" alt="Bharat"  id="bharat"><br><a href="">BHARAT BHATT</a>
                <hr>
                <b><i class="fa-solid fa-id-badge"></i> Mobile no.:<a href="tel:7814621687" style="font-size:14px; text-decoration:underline;">7814621687</a></b><br>
                <hr>
                <b><i class="fa-brands fa-whatsapp"></i> WhatsApp:<a href="https://wa.me/7814621687" style="font-size:14px; text-decoration:underline;">7814621687</a></b><br>
                <hr> 
                <b><i class="fa-brands fa-github"></i> Github:<a href="https://github.com/bharatbhatt101" style="font-size:14px; text-decoration:underline;">bharatbhatt101</a></b><br>
                <!-- <hr> 
                <b><i class="fa-brands fa-facebook"></i> Facebook:<a href="https://www.facebook.com/bharat.bhatt.94651774/" style="font-size:14px; text-decoration:underline;">Bharat Bhatt</a></b><br>
            --><hr> 
            <b><i class="fa-solid fa-envelope"></i> E-mail:<a href="mailto:bk101w@gmail.com" style="font-size:14px; text-decoration:underline;">bK101w@gmail.com</a></b><br>
            <hr>
                <a href="tel:7814621687"><button><i class="fa-solid fa-phone"></i> Call Now</button></a>

            

        </div>
            <div class="box6"><img src="img/paras1.jpg" alt="Paras" id="paras"><br><a href="">PARAS SIJALI MAGAR</a>
                <hr>
                <b><i class="fa-solid fa-id-badge"></i> Mobile no.:<a href="tel:6284385648" style="font-size:14px; text-decoration:underline;">6284385648</a></b><br>
                <hr>
                <b><i class="fa-brands fa-whatsapp"></i> WhatsApp:<a href="https://wa.me/6284385648" style="font-size:14px; text-decoration:underline;">6284385648</a></b><br>
                <hr> 
                <b><i class="fa-brands fa-github"></i> Github:<a href="https://github.com/paras003" style="font-size:14px; text-decoration:underline;">paras7003</a></b><br>
                <!-- <hr>
                <b><i class="fa-brands fa-facebook"></i> Facebook:<a href="" style="font-size:14px; text-decoration:underline;">Paras SIJALI</a></b><br> 
            --><hr> 
            <b><i class="fa-solid fa-envelope"></i> E-mail:<a href="mailto:ps007c@gmail.com" style="font-size:14px; text-decoration:underline;">ps007c@gmail.com</a></b><br> 
                <hr>
                <a href="tel:6284385648"><button><i class="fa-solid fa-phone"></i> Call Now</button></a>


            </div>

        
    </div>
    

    <footer>
        <p> @2024 all copyright || reserved</p>
    </footer>

    
</body>

</html>