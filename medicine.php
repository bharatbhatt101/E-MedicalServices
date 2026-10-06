<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="medi.css">

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
              Medicine Suggestion</p>
              <!-- <i class="fa-solid fa-bars" id="nav"></i> -->
              
              <div class="custom">
                  
                  <a href="index1.php" id="home" style="padding:10px;"><i class="fa-solid fa-house"></i> Home</a>
                  <a href="search.php" style="padding:10px;"><i class="fa-solid fa-magnifying-glass"></i> Search Doctor</a>
                  <a href="contact.php" style="padding:10px;"><i class="fa-solid fa-address-book"></i> Contact Us</a>
                  <!-- <a href="#">Take Covid Test</a> -->
                 
                
                
            </div>

            <div class="bar" >
            <i class="fa-solid fa-bars" id="op" onclick="openNav()"></i>
        </div>
              <div class="cmob" id="mySidenav">
            <i class="fa-solid fa-xmark" id="cl" onclick="clNav()" style="display:none;" ></i>
                
            <a href="index1.php"><i class="fa-solid fa-home"></i>Home</a>
                  <a href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Search Doctors</a>
                  <a href="health_consult.php"><i class="fa-solid fa-robot"></i> Ai Health Assistance</a>
        </div>
        </div>
        <div class="div6" id="_mydiv">

            <input type="search" name="me" id="find" placeholder="Search..." class="inpscr" onKeyUp="search()" >
            <button class="search" onClick="search()"><i class="fa-solid fa-magnifying-glass"></i></button>
            
        </div>
        <!-- <h1 id="we">Contact Us</h1> -->

        
        
        <div class="div5">
           
                            
            <div class="box6"><img src="img/m1.jpg" alt=""  id="bharat"><br><a href=""></a>
                <h2>Paracetamol</h2>
    
                <h3>For:Paracetamol is used to relieve pain and reduce fever.</h3>

                
                <!-- <a href=""><button>Buy</button></a> -->
                    
                            

        </div>
            <div class="box6"><img src="img/m2.jpg" alt="" id="paras"><br><a href=""></a>
            <h2>Ibuprofen</h2>
    
            <h3>For:Ibuprofen is used to relieve pain, reduce inflammation, and lower fever.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m3.jpg" alt="" id="paras"><br><a href=""></a>
            <h2>Antihistamine</h2>
    
            <h3>For:Antihistamines are used to relieve allergy symptoms such as itching, sneezing.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m4.jpg" alt="" id="paras"><br><a href=""></a>
            <h2>Lansoprazole</h2>
    
            <h3>For:Lansoprazole is used to treat conditions related to excessive stomach acid production.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m5.jpg" alt="" id="paras"><br><a href=""></a>
            <h2>Esomeprazole</h2>
    
            <h3>For:Esomeprazole is used to treat GERD, ulcers, and Zollinger-Ellison syndrome.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m6.jpg" alt="" id="paras"><br><a href=""></a>
            <h2>Trimethoprim</h2>
    
            <h3>For:Trimethoprim is used to treat urinary tract infections, respiratory tract infections.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m7.jpg" alt="" id="paras"><br><a href=""></a>
            <h2>Naproxen</h2>
    
            <h3>For:Naproxen is used to relieve pain and stiffness caused by conditions such as arthritis.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m8.jpg" alt="" id="paras"><br><a href=""></a>
            <h2>Lymecycline</h2>
    
            <h3>For:Lymecycline is used to treat bacterial infections.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m9.png" alt="" id="paras"><br><a href=""></a>
            <h2>Amoxicillin</h2>
    
            <h3>For:Amoxicillin is used to treat bacterial infections.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m10.jpg" alt="" id="paras"><br><a href=""></a>
            <h2>Baclofen</h2>
    
    <h3>For:Baclofen is used to alleviate muscle spasms associated with certain neurological conditions.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m11.jpg" alt="" id="paras"><br><a href=""></a>
            <h2>Codeine</h2>
    
            <h3>For:Codeine is used as a pain reliever and cough suppressant.</h3>

    
    <!-- <a href=""><button>Buy</button></a> -->

            </div>

            <div class="box6"><img src="img/m12.png" alt="" id="paras"><br><a href=""></a>
            <h2>Dapsone</h2>
    
            <h3>For:Dapsone is used to treat leprosy and dermatitis herpetiformis.</h3>

    
    
            </div>
        
    </div>

    <footer>
        <p> @2024 all copyright || reserved</p>
    </footer>
    
<script>
    function search()
         {
             let filter= document.getElementById('find').value.toUpperCase();

             let item= document.querySelectorAll('.box6 ');

             let l=document.getElementsByTagName('h2');

             for(var i=0; i<=l.length;i++ )
             {
                let a=item[i].getElementsByTagName('h2')[0];

                let value=a.innerHTML || a.innerText || a.textContent;

                if(value.toUpperCase().indexOf(filter)> -1)
                {
                    item[i].style.display="";
                }
                else
                {
                    item[i].style.display="none";

                }
             }
         }
       function openNav() {
    
    op.style.display = "none";
    cl.style.display = "block";
    mySidenav.style.display = "flex";
    _mydiv.style.display="none";
}

function clNav() {
    
    _mydiv.style.display="block";
    op.style.display = "block";
    cl.style.display = "none";
    mySidenav.style.display = "none";
}    

    </script>
    
</body>

</html>