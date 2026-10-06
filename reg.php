<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Signup</title>

   
    
</head>

    

<body class="body">


<?php
   
   $showAlert=false;
   $showError=false;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
        include 'rsub.php';
        $username=$_POST["username"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];
        $existSql="SELECT * FROM `users` WHERE username='$username'";
        $result= mysqli_query($conn,$existSql);
        $numExistRows= mysqli_num_rows($result);
        if($numExistRows>0)
        {
            $showError=" Username Already Exists.";
        }
        
        else
        {
           

        if(($password==$cpassword))
        {
               $hash=password_hash($password, PASSWORD_DEFAULT);
               $sql="INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
               $result=mysqli_query($conn,$sql);
               if($result)
               {
                  $showAlert=true;
               }
        }
        else
        {
            $showError=" Passwords do not match.";
        }

    }

    }

    ?>

<?php
     if($showAlert){

 
echo

'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success!</strong> Your account is created and you can <a href="log.php">login</a>.
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
        
            
                
                <div class="div3" id="dvi">
                <center>

                <h2 class="my-0" style="padding-top:10px;">Signup to Our Wesite </h2>
        
                    <form action="reg.php" method="post" class="reg" >
            
             <input type="text" required class="inp" name="username" pattern="[A-Za-z]+" title="Enter alphabets only" id="user" placeholder="username" onKeypress="uppercase()" minlength="3" maxlength="11"><i class="fa-solid fa-user" id="rn"></i><br>
            
             
             <input type="password" required class="inp" name="password" pattern="[0-9]+" title="Password should be a number" id="user"  placeholder="Password" minlength="8" maxlength="8"><i class="fa-solid fa-lock" id="rp"></i><br>
            
             <input type="password" required  id="inp" name="cpassword" pattern="[0-9]+" title="Password should be a number" placeholder="Confirm Password" minlength="8" maxlength="8"><i class="fa-solid fa-lock" id="rcp"></i><br>
             <small style="margin-left:-35%;">Password must be same.</small><br>
              
   
            
            <input type="submit" value="Sign Up" class="sign col-sm-6"><br>
            <input type="reset" value="Refresh" class="reset col-sm-6"><br>
            
            Already signup?<a href="log.php">Login</a>
            
        </form>
        
    </center>
    </div>

    
        <script src="index.js"></script>
        <script>
             function uppercase()
             {
                const x= document.getElementById("user");

                x.value= x.value.toUpperCase();
             }
        </script> 
    </body>
</html>