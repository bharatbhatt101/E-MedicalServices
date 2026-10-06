<html>

   
<?php
         
         session_start();

         if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
             header("location: log.php");
              exit;
         }
         


     ?>

<head>
    <title>Appionment Booking</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="book.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

       
</head>



<body class="_bd">






    <div class="super">


        <div class="div1" id="doctor">
            <p><i class="fa-solid fa-hospital"></i>
             Online Appointment Booking</p>
              <!-- <i class="fa-solid fa-bars"></i> -->
              
              <div class="custom">
                  
              <a href="index1.php" id="appoint"  style="padding:5px; margin-top:-50px; margin-left:75%; font-size:20px;"><i class="fa-solid fa-home"></i></a>

                 
                
                
            </div>
          
            
        </div>
             
        
    <?php
   
   $showAlert=false;
   $showError=false;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
        include 'rsub.php';
        $patientname=$_POST["pName"];
        $patientage=$_POST["pAge"];
        $patientemail=$_POST["pEmail"];
        $patientmobile=$_POST["pNumber"];
        $appointdt=$_POST["appdt"];
        $appointtime=$_POST["apptime"];
        $message=$_POST["message"];

        
    $_SESSION['patientage'] = $patientage;
    $_SESSION['patientemail'] = $patientemail;
    $_SESSION['patientmobile'] = $patientmobile;

    // $today = date("Y-m-d");
    // $sql = "DELETE FROM appointments WHERE appointmentdt < '$today'";
    
    

        $sql = "SELECT * FROM `appointments` WHERE `patientname`='$patientname' AND `appointmentdt`='$appointdt'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) { 
            
            $showError = " Appointment already booked for <u>$patientname</u> on <u>$appointdt</u>";
            
        }
        elseif ($patientname==$_SESSION['username'])
        {
            $sql="INSERT INTO `appointments` (`patientname`, `patientage`,`patientemail`,`patientmobile`,`appointmentdt`,`appointmenttime`,`message`, `dt`) VALUES ('$patientname', '$patientage','$patientemail','$patientmobile','$appointdt','$appointtime','$message', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if($result)
               {
                   $showAlert=true;
               }
            }
            
        else
        {
            $showError=" Patient with ($patientname) not Exist.";
            
        }

    }


        $prevPatientAge = isset($_SESSION['patientage']) ? $_SESSION['patientage'] : '';
        $prevPatientEmail = isset($_SESSION['patientemail']) ? $_SESSION['patientemail'] : '';
        $prevPatientMobile = isset($_SESSION['patientmobile']) ? $_SESSION['patientmobile'] : '';

    

    ?>

<?php
     if($showAlert){

 
echo

'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success!</strong> Your appiontment booked successfully. Check <a href="myinbox.php">Inbox</a>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
 }


 if($showError){

 
    echo
    
    '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
        <strong>Error!</strong>'.$showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
     }
?>
         <div class="host">
             
             <div class="box8 num">
                 <center>
                 <h3>Book Your Appointment Here! </h3>
                 <hr>
                 

                    
                    <form action="book_appoint.php" method="post" onsubmit="return validateForm()" id="appointmentForm">
                     <input type="text" placeholder="Patient Name" pattern="[A-Za-z]+" title="Enter alphabets only" id="pname" onKeypress="uppercase()" name="pName" class="inpba" required>
                     <input type="number" placeholder="Patient Age" value="<?php echo $prevPatientAge; ?>" id="pAge" name="pAge" class="inpba" required min="1" max="100"><br>
                     <input type="email" placeholder="Email ID" value="<?php echo $prevPatientEmail; ?>" id="pEmail" name="pEmail" class="inpba" required>
                     <input type="number" placeholder="Mobile Number" value="<?php echo $prevPatientMobile; ?>" id="pmNumber" name="pNumber" class="inpba" required min="1" minlength="10" maxlength="10"><br>
                     <input type="date" name="appdt" class="inpba"  min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+3 months')); ?>" required>
                     <select   id="select" name="apptime" required>
                         <option value="Select time">Select time</option>
                         <option value="Morning">Morning</option>
                         <option value="Evening">Evening</option>
                     </select><br>
                     <textarea  id="select1" name="message" pattern="[A-Za-z]+" title="Enter alphabets only" placeholder="Appointment booking for..." required></textarea><br>
                     
                     <input type="checkbox"  name="chbox" required ><small style="color:red;"> We assume that all information you enterd is correct.  </small><br>
                 
                     <input type="submit"  id="bookapp" value="Book Appointment"><br>
                     <input type="reset"  id="bookref" value="Refersh">
                    </form>

                    
                    
                </center>
               
                            
                
            </div>

            

            
</div>
</div>
    
    
    <script>
         function uppercase()
             {
                const x= document.getElementById("pname");

                x.value= x.value.toUpperCase();
             }
    </script>

<script>
function validateForm() {
  var mobileNumber = document.getElementById("pmNumber").value;
  
  if (mobileNumber.length !== 10) {
    alert("Please enter a valid 10-digit mobile number.");
    return false; // Prevent form submission
  }
  
  return true;
}
</script>

   

</body>

</html>