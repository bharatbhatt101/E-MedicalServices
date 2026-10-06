<html>
<?php
         
         session_start();

         if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
             header("location: log.php");
              exit;
         }
         


     ?>
  <head>
    <meta charset="utf-8">
    <title>Health Consultant</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hc.css">
    <link rel="stylesheet" href="styles.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="script.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
          


  </head>
  <body>
  <div class="div1" id="doctor">
            <p><i class="fa-solid fa-hospital"></i>
              Health Consultant</p>

              
              <div class="custom">
                  
       
                  <a href="index1.php" id="home" style="padding:5px; margin-top:-10px; margin-left:75%; font-size:20px;"><i class="fa-solid fa-home"></i></a>
              
                
                
            </div>
          

        </div>
    
      <div class="mymain">


        <h1 style="margin-top:20px; margin-bottom:15px; ">This is Ai health consultant </h1>
       
    <button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
      

        <div class="chatbot">
          <header>
            <h2>Health Consultant</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi there 👋<br>How can I help you today?</p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" autocomplete="off" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>
    
    </div>
   
      
  </body>
</html>