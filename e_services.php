<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="e_s.css">
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


        <div class="div4">
            <p><i class="fa-solid fa-tablets"></i>
              Emergency Services</p>

              
              <div class="custom">
                  
              <a href="index1.php" id="home" style="padding:5px; margin-top:-40px; margin-left:75%; font-size:20px;"><i class="fa-solid fa-home"></i></a>

                
                
            </div>
        </div>


        
        
        <div class="div5">
           
                            
          
            <div class="boxun">
              <center>

                  <table border="1">
                      <tr>
                    <th>
                        Logo
                    </th>
                    <th>
                        Emergency Service
                    </th>
                    
                    <th>
                        Contact
                    </th>

                    <th>
                        Sites
                    </th>

                </tr>

                 <tr>
                    <td>
                        <img src="img/amb.jpeg" alt="">
                    </td>
                    <td>
                        Ambulance Services
                    </td>

                    <td>
                        <a href="tel: 108">108</a> (24/7 Available)/
                        <a href="tel: 102">102</a> (for women & child only)
                        </td>

                        <td>
                        <a href="https://medulance.com/">Book Online</a>
                        </td>
                    
                </tr>

                 <tr>
                    <td>
                        <img src="img/dochelp.jpeg" alt="">
                    </td>
                    <td>
                        Doctors Helpline
                    </td>
                    
                    
                    <td>
                        <a href="tel: 9556 2188">9556 2188</a> (24/7 Available)
                    </td>
                    
                    <td>
                        <a href="https://www.practo.com/consult">Visit Site</a>
                        </td>
                </tr>

                <tr>
                    <td>
                        <img src="img/docnearu.jpeg" alt="">
                    </td>
                    <td>
                         Find Doctors Near You
                    </td>
                    
                    <td>
                        <a href="tel: 6284385648">6284385648</a>
                         <a href="tel: 7814621687">7814621687</a>
                          (You can contact us for more help)
                    </td>

                    <td>
                        <a href="https://www.medindia.net/patients/doctor_search/Doctor_list.asp">Visit Site</a>
                        </td>

                </tr>

                    
            </table>
        </center>
            
                
                    
            </div>
        
    </div>
    

    
</body>

</html>