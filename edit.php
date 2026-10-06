<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="edt.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Your Health- Our Duty</title>

   
    
</head>

    

<body class="body">




<?php
    
    session_start();
    
    include 'rsub.php';
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_FILES["profile_picture"]) && $_FILES["profile_picture"]["error"] == 0) {

            $uploadDir = 'uploads/';

            $fileName = basename($_FILES["profile_picture"]["name"]);
            $targetFilePath = $uploadDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            

            $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
            if (in_array($fileType, $allowedTypes)) {

                if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFilePath)) {

                    $username = $_SESSION['username'];
                    $sql = "UPDATE users SET pp='$targetFilePath' WHERE username='$username'";
                    if (mysqli_query($conn, $sql)) {
                        echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                        <strong>Success!</strong> Profile picture uploaded successfully. <a href="myprofile.php">Profile</a>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                        <strong>Error!</strong> Error updating profile picture:'. mysqli_error($conn).'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                    }
                } else {
                    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                    <strong>Error!</strong> There was an error uploading your file.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                }
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>Error!</strong> Only JPG, JPEG, PNG, and GIF files are allowed.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            }
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
            Please select a file to upload.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    }
?>






        
            
                
                <div class="div3" id="dvi">
                <center>

                <h2 class="my-0" style="padding-top:10px;">Upload Profile Picture </h2>

        
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="reg" enctype="multipart/form-data">
            

             <input type="file" name="profile_picture" id="file" accept="image/*" required><i class="fa-solid fa-image" id="rcp"></i><br>
 
            
            <input type="submit" value="Upload" name="upload" class="sign col-sm-6"><br>
            <input type="reset" value="Refresh" class="reset col-sm-6"><br>
            
            
        </form>
        
    </center>
    </div>

    
       
        <script>
             function uppercase()
             {
                const x= document.getElementById("user");

                x.value= x.value.toUpperCase();
             }
        </script> 
    </body>
</html>