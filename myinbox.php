<html>

<head>
    <title>My Inbox</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="mynb.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bod">

<?php
         
         session_start();
        

         if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
             header("location: log.php");
              exit;
         }
         


     ?>

    <div class="super">

        <div class="div10">
            <p><i class="fa-solid fa-inbox"></i>
              Inbox</p>
            
              
              <div class="custom">
                  
                  <a href="index1.php" id="home"><i class="fa-solid fa-house"></i> Home</a>
                  <a href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Search Doctors</a>
                  <a href="medicine.php"><i class="fa-solid fa-tablets"></i> Medicine Search</a>
                  
                 
                
                
            </div>
          

        </div>

        <hr>

        <div class="div5">
       <center>

           
           <div class="box7"><a href="">Appointment Booking Record</a>
                <hr>
            
                <?php

include 'rsub.php'; 


$sql = "SELECT * FROM `appointments` WHERE `patientname` = '{$_SESSION['username']}'";
$result = mysqli_query($conn, $sql);


  if (mysqli_num_rows($result) > 0) {

    echo '<table border="1">
    <tr>
        <th>Patient Name</th>
        
        <th>Appointment Date</th>
        <th>Appointment Time</th>
        <th>Check Up</th>
    </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['patientname'] . "</td>";
        // echo "<td>" . $row['patientage'] . "</td>";
        // echo "<td>" . $row['patientemail'] . "</td>";
        // echo "<td>" . $row['patientmobile'] . "</td>";
        echo "<td>" . $row['appointmentdt'] . "</td>";
        echo "<td>" . $row['appointmenttime'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        // echo "<td><button onclick='deleteRecord(" . $row['patientname'] . ")'>Delete</button></td>";
        echo "</tr>";
    }
   echo '</table>';
  }
  else
  {
    echo "<p>No records found....</p>";
  }
    ?>
    
      </div>
        <div class="box6"><a href="">Medicine Order Record</a>
                <hr>
                
                <?php
             
                $username = $_SESSION['username'];
                 
                
                $sql = "SELECT * FROM `orders` WHERE `username`='$username' ";
                $result = mysqli_query($conn, $sql);

            
                if (mysqli_num_rows($result) > 0) {

       echo '<table border="1">
            <tr>
                <th>Medicine Name</th>
                <th>Medicine Quantity</th>
                <th>Patient Address</th>
            

            </tr>';
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['mediname'] . "</td>";
                echo "<td>" . $row['mediqty'] . "</td>";
                echo "<td>" . $row['delivery'] . "</td>";
        
                
                echo "</tr>";
            }
       echo '</table>';
        }
        else
        {
               echo "<p>No records found....</p>";

        }
            ?>
            </div>
            
        </center>
            
        </div>
      
    
</body>

</html>