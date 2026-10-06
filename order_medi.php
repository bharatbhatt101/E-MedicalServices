<html>
    
    <head>
    <title>Medicine Order</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="ordmed.css">
    
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

<body class="ody">

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
              Order Medicine</p>
              
              <div class="custom">
                  
               <a href="index1.php" id="home" style="padding:4px; margin-top:-60px; margin-left:75%; font-size:20px;"><i class="fa-solid fa-home"></i></a>
                               
                
            </div>
        </div>
        <?php
   
   $showAlert=false;
   $showError=false;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
        include 'rsub.php';
        $mediname=$_POST["mediname"];
        $mediqty=$_POST["mediqty"];
        $delivery=$_POST["delivery_address"];
        $username=  $_SESSION['username'];

       
        
        $sql="INSERT INTO `orders` (`username`,`mediname`, `mediqty`,`delivery`, `dt`) VALUES ('$username','$mediname', '$mediqty','$delivery', current_timestamp())";
               $result=mysqli_query($conn,$sql);
               if(empty($mediname)|| empty($mediqty) || empty($delivery))
                {

                    $showError= "Please fill in all the fields.";
                    
                }
                else{
                    
                    echo
                
                '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                    <strong>Success!</strong> Your medicine ('.$mediname.') ordered successfully.Check <a href="myinbox.php">Inbox</a>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                 }
                 
                }
                ?>

        <div class="div5">
                    
                  <form action="order_medi.php" id="paymentForm" method="post" name="medi">
                        <h2>You Can Order from here <i class="fa-solid fa-arrow-down"></i> </h2>
                        <input type="text" placeholder="Medicine" pattern="[A-Za-z\s0-9]+" title="Ex:abc/abc 5mg" class="medi1" minlenght=5 maxlenght="50" name="mediname" required>
                        <input type="number" placeholder="Quantity" class="medi1" name="mediqty" min="1" required>
                        
                        <input type="text" id="delivery_address" class="medi1" pattern="[0-9\sA-Za-z\sA-Za-z]+" title="Ex:123 abc place"   placeholder="Delivery Address" name="delivery_address" rows="5" cols="20" required><br>

                     <input type="checkbox"  name="chkbox" required ><small style="color:red;"> Payment method (Cash on Delivery) only.</small><br><br>
                        
       
                        <input type="submit" value="Order" class="order"><br>                        
                        <input type="reset" value="Refresh" class="ref">
                    </form>
            
                    
            
        
    </div>

    


</body>

</html>