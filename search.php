<html>

   
<?php
         
         session_start();

         if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
             header("location: log.php");
              exit;
         }
         


     ?>

<head>
    <title>Search - Doctors,Medical Shops, Hospitals</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="search.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        
    </head>


<body>

    
    
    <div class="super">


        <div class="div1" id="doctor">
            <p><i class="fa-solid fa-hospital"></i>
              Doctors, Hospitals & Medical Shops</p>
              <!-- <i class="fa-solid fa-bars"></i> -->
              
              <div class="custom">
                  
                  <a href="index1.php" id="home" style="padding:5px; padding-top:9px;"><i class="fa-solid fa-house"></i> Home</a>
                  <a href="medicine.php" style="padding:5px; padding-top:9px;"><i class="fa-solid fa-tablets"></i> Medicine Search</a>
                  <a href="contact.php" style="padding:5px; padding-top:9px;"><i class="fa-solid fa-address-book"></i> Contact Us</a>
                 
                
                
            </div>

           <div class="bar" >
            <i class="fa-solid fa-bars" id="op" onclick="openNav()"></i>
        </div>
              <div class="cmob" id="mySidenav">
            <i class="fa-solid fa-xmark" id="cl" onclick="clNav()" style="display:none;" ></i>
                
                  <a href="index1.php"><i class="fa-solid fa-home"></i> Home</a>
                  <a href="medicine.php"><i class="fa-solid fa-tablets"></i> Medicine Search</a>
                  <a href="health_consult.php"><i class="fa-solid fa-robot"></i> Ai Health Assistance</a>
        </div>
          

        </div>
   

            <div class="div6" id="_search">
                
                
        <input type="search" name="me" id="find" placeholder="Search..." class="inpscr" onKeyUp="search()" >
        <button class="search" onClick="search()"><i class="fa-solid fa-magnifying-glass"></i></button>
           
          
    </div>
    <div class="button" id="mydiv">
        
        <button id="b1"class="btn active" onclick="changeColor('b1'); filterSelection('all')">Show All </button>
        <button id="b2"class="btn" onclick="changeColor('b2'); filterSelection('box8')">Doctors 20</button>
        <button id="b3" class="btn" onclick="changeColor('b3'); filterSelection('box9')">Shops 20</button>
        <button id="b4"class="btn" onclick="changeColor('b4'); filterSelection('box10')">Hospitals 33</button>
    </div><br>

         
         <div class="host" >


             <div class="box8 num">
                <div class="d8">
                
                   
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Aseem Goyal</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Bone, Joint & Spine</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: Sco 10, Sector 27 D, Chandigarh, 160019</p>
             <hr>
            </div>
            
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Titiksha Goyal</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Spine, Joint & Pain Specialist</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: Sco 10, Apollo clinic, Sector 8 C, Chandigarh, 160008</p>
             <hr>
            </div>
            
        </div>
        
        <div class="host">

            <div class="box8 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
                </div>
                <hr>
                <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Geetika Garg</p>
                <hr>
                <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
                <hr>
                <p><i class="fa-solid fa-layer-group"></i> Category: Medicine Physician & Diabetologist</p>
                <hr>
                <p><i class="fa-solid fa-location-dot"></i> Location: Location: Sco 10, Sector 27 D, Chandigarh, 160019</p>
                <hr>
            </div>
            
            <div class="box8 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
                </div>
                <hr>
                <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Pradeep Sharma</p>
                <hr>
                <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
                <hr>
                <p><i class="fa-solid fa-layer-group"></i> Category: General Surgeon & Physician</p>
                <hr>
                <p><i class="fa-solid fa-location-dot"></i> Location: #1333, Sector 37 B, Chandigarh, 160036</p>
                <hr>
            </div>
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Harjeet Kaur</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: General Doctor / General Physician</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: #472, Sector 38 A, Chandigarh, 160036</p>
             <hr>
            </div>
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Sonu Kumar Singla</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Medicine / Physician</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: 4th Floor, Department of General Medicine, Sector 32 B, Chandigarh, 160030</p>
             <hr>
            </div>
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Alok Sharma</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Consultant Physician & Chest Specialist</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: Sco 816, Sector 22 A, Chandigarh, 160022</p>
             <hr>
            </div>

            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Mithun Hastir</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: General Physician</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: #4, Sector 15 A, Chandigarh, 160015</p>
             <hr>
            </div>
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Gunasekaran</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mopile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: General Physician / Diabetes Doctor / Thyroid, Asthma, Vertigo Specialist</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: Sco 10, Apollo Clinic, Sector 8 C, Chandigarh, 160009</p>
             <hr>
            </div>
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Vaani Mehta</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Fertility Physician</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: Sco 138-139-140, Level 2, Sector 43, Chandigarh, 160044</p>
             <hr>
            </div>
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Jasjit Singh</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890 </p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Physician</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: #156, Jeet Medical Center, Sector 27 A, Chandigarh, 160019</p>
             <hr>
            </div>
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Parminder Kaur</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890 </p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Fertility Physician</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: Sco 138-139-140, adjoining amara hotel, Sector 43 B, Chandigarh, 160044</p>
             <hr>
            </div>

        </div>
        
     <div class="host">
     <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Aastha Likhyani</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Surgeon</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: #1599, Sector 22 B, Chandigarh, 160036</p>
             <hr>
            </div>
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Harinder Batth</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Orthopedic Surgeon</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: #6, Batth Orthopedic Clinic, Army Flats, Sector 44 A, Chandigarh, 160034</p>
             <hr>
            </div>

            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Atul Malhotra</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Orthopedic Surgeon</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: #2125, Sector 21 C, Chandigarh, 160022</p>
             <hr>
            </div>
            <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Vivek Singla</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: Laparoscopic Surgeon</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: Dolphin lvf & Laparoscopy Centre Landmark Hospital, Sector 33, Chandigarh, 160034</p>
             <hr>
            </div>
     </div>
     
        <div class="host">
        <div class="box8 num">
                <div class="d8">
                
                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-user-doctor"></i> Name:Dr. Rajesh Dhir</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: ENT Specialist</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: #2040, Sector 15 C, Chandigarh, 160015</p>
             <hr>
            </div>
            <div class="box8 num">
                <div class="d8">

                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px; "><i class="fa-solid fa-user-doctor"></i> Name: P.S Handa</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: ENT specialist</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: Bay Shop Number 20, Sector 20 C, Chandigarh, 160020</p>
             <hr>
             
            </div>
            <div class="box8 num">
                <div class="d8">

                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px; "><i class="fa-solid fa-user-doctor"></i> Name:Dr Anup Kumar Roy</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: ENT specialist</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: Sco 52-53, Sector 17 C, Chandigarh, 160017</p>
             <hr>
             
            </div>
            <div class="box8 num">
                <div class="d8">

                <a href="search.php"><img src="img/doctor1.jpeg" alt=""> Doctor</a>
             </div>
             <hr>
             <p style="margin-top:15px; "><i class="fa-solid fa-user-doctor"></i> Name:Dr. Mittal</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Mobile:+91 1234567890</p>
             <hr>
             <p><i class="fa-solid fa-layer-group"></i> Category: ENT specialist</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Location: #1222, Sector 21 B, Chandigarh, 160022</p>
             <hr>
             
            </div>
        </div>
       
            <div class="host">

                <div class="box9 num">
                    <div class="d8">
                        
                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Bharat Medical Stores</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Scf No. 32, Sector 16 D, Chandigarh,160015</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                    <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Anand Medical Stores</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 16, Sector 19 C, Chandigarh, 160019</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Royal Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Booth No 4, Sector 19 D, Chandigarh, 160019</p>
             <hr>
        </div>
        
            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Navyug Medical & General Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Shop No 15, Sector 14, Chandigarh, 160014</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">
                    
                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Chandigarh Medical Hall</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Scf no 27, Sector 8 B, Chandigarh, 160019</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Rajinder Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Booth No 354 - D, Sector 32 D, Chandigarh, 160030</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Chandigarh Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Dhanas Main Rd, Chandigarh, 160014</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                    <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
                </div>
                <hr>
                <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Sahib Medical Store</p>
                <hr>
                <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
                <hr>
                <p><i class="fa-solid fa-location-dot"></i> Address: Shop No 25-26, Sector 38 C, Chandigarh, 160036</p>
                <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                    <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
                </div>
                <hr>
                <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Gupta Medical Store</p>
                <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Booth No 5, Sector 18 - C, Chandigarh, 160018</p>
             <hr>
            </div>
            
            <div class="box9 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Capital Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco - 9, Sector 19 C, Chandigarh, 160019</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Raman Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Scf 6-D, Azaadi Rte, Sector 9, Chandigarh, 160009</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Nirmal Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Shop No 64, Sector 22 D, Chandigarh, 160022</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">
                    
                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
            </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Gautam Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Shop No 46, Buterla, Sector 41 B, Chandigarh, 160036</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
            </div>
            <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: National Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Scf-11, 8 B,Sector 18, Chandigarh, 160018</p>
             <hr>
        </div>
        
            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Sony Medicals</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Booth No 114-115, Sector 7 C, Chandigarh, 160019</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Chandigarh Medical and Departmental Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Scf 12, Inner Market,9 - D, Sector 9, Chandigarh, 160009</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Hanspal Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Booth No 86, Phase 2, Ram Darbar, Chandigarh, 160002</p>
             <hr>
            </div>
            
            <div class="box9 num">
                <div class="d8">
                    
                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
            </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Singla Medical</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 49-50-51, Bridge Market, Sector 17 C, Chandigarh, 160017</p>
             <hr>
            </div>

            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Apollo Pharmacy</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 16-17, Sector 34 A, Chandigarh, 160022</p>
             <hr>
            </div>
            
            <div class="box9 num">
                <div class="d8">

                <a href="search.php"><img src="img/medical1.jpeg" alt=""> Medical Shop</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-square-plus"></i> Medical Shop Name: Hira Medical Store</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 0123456789</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Shop No 7, Sector 19 D, Chandigarh, 160019</p>
             <hr>
            </div>

            
    </div>
    
        <div class="host">

            
            
            
            <div class="box10 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: PGI</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01722756565</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: PGIMER, Sector 12, Chandigarh, 160012</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">
                    
                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: GMCH 32</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01722663301</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sector 32 B, Chandigarh, 160047</p>
             <hr>
        </div>
        
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: GMSH 16</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01722752042</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Madhya Marg, Sector 16 A, Chandigarh, 160015</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
                </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Healing Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.: 01725088883</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: 16-22, Piccadily Rd, Sub.City Center, Sector 34 A, Chandigarh, 160022</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">
                    
                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Santokh Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 8558866846</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: #846, Dakshin Marg, Sector 38 A, Chandigarh, 160014</p>
             <hr>
            
        </div>
        
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Landmark Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01724027000</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Site No 1,2, Sector 33 Market, opp.Terrace Garden, Sector 33 C,Chandigarh, 160020</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Dharam Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 9501371164</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: #2040, Sector 15 C, Chandigarh, 160015</p>
             <hr>
        </div>
        
        <div class="box10 num">
                <div class="d8">

                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
                </div>
                <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Cloudnine Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 9972899728</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Plot No 48, 2, Industrial Area Phase 2, Chandigarh, 160002</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">

                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
                </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Mukat Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 9023884444</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 47,49, Dakshin Marg, Sector 34 B, Chandigarh, 160022</p>
             <hr>
        </div>
        
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Eden Critical Care Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01724123400</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: 116, Phase 2, Chandigarh,160002</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Motherhood Chaitanya Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01725088088</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Hospital Site 1 and 2, Soravar Path,44 C, Sector 50, Chandigarh, 160047</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">

                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Ayu Health Hospitals </p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 7314855513</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sector 33 A, Chandigarh, 160020</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
                </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Guru Nanak Multispeciality Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01722601023</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Dr P.N Chhuttani Memorial IMA Complex, Sector 35 B, Chandigarh, 160022</p>
             <hr>
            </div>
            
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Abhilasha Hospital </p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 7719684083</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: 201, behind flowers market, Sector 35 A, Chandigarh, 160022</p>
             <hr>
        </div>
        
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Bedi Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 8045776776</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: 182, Sector 33 A, Chandigarh, 160020</p>
             <hr>
            </div>
            
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
            </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Omni Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01722645777</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 343-345, Sector 34 A, Chandigarh, 160022</p>
             <hr>
        </div>
        
        <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
            </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: ESIC Model Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01722650292</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Industrial area, Phase 2, Ram Darbar, Chandigarh, 160002</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Tera Hi Tera Mission Hospital </p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 9888700113</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 138, Opposite E Sampark Center, Sector 45 C, Chandigarh</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">

                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Nins Brain & Spine Hospital </p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01725000567</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 341-342, Sector 34 A, Chandigarh, 160022</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Kapoor's Kidney & Urostone Center</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01722634811</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Site No 2, Sukhna Path, Near Gurudwara, Sector 46 D, Chandigarh, 160047</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Pandhi Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 7355541508</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: 1151, Jan Marg, Near Park, Sector 36 C, Chandigarh, 160036</p>
             <hr>
        </div>
        
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: CHD City Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 7508008117</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 10,11, Madhya Marg, Sector 8 C,Chandigarh, 160009</p>
             <hr>
        </div>

            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Healing Hospital and Institute of Paramedical Sciences</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 9464343434</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sector 34 A, Chandigarh, 160022</p>
             <hr>
        </div>
        
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Kaushal Hospital </p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 9855726464</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 49, Sector 42 C, Chandigarh, 160036</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">

                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
                </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: ARV Orthopaedic Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 8427452125</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: 2125, Sector 21 C, Chandigarh, 160021</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
            </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Chhuttani Medical Centre</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01722702543</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 52-53-54, Bridge Market, Sector 17 C, Chandigarh, 160017</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Happy Family Hospital </p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 9417008765</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: #54-55, Old Ropar Rd, Manimajra, Chandigarh, 160101</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">
                    
                    <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
                </div>
                <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Guru Ka Langar Eye Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 9592064040</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: 536, Madhya Marg, Sector 18 B, Chandigarh, 160018</p>
             <hr>
            </div>
            
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Grewal Eye Institute</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01725056969</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: 168-169, Madhya Marg, Sector 9 C, Chandigarh, 160009</p>
             <hr>
            </div>
            
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
            </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Neeraj Eye Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01725078320</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 226 Ground Floor, Sector 36 D, Chandigarh, 160036</p>
             <hr>
        </div>
        
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Virdi Eye Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 01725077101</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 226-227, Sector 34 A, Chandigarh, 160022</p>
             <hr>
        </div>
        
            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Cancer Healer Center</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 8427555336</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Sco 312, Sector 40 D, Chandigarh, 160036</p>
             <hr>
            </div>

            <div class="box10 num">
                <div class="d8">

                <a href="search.php"><img src="img/hospital1.jpeg" alt=""> Hospital</a>
             </div>
             <hr>
             <p style="margin-top:15px;"><i class="fa-solid fa-hospital"></i> Hospital Name: Amcare Hospital</p>
             <hr>
             <p><i class="fa-solid fa-phone"></i> Contact no.:+91 7087113922</p>
             <hr>
             <p><i class="fa-solid fa-location-dot"></i> Address: Vip Road, Zirakpur, Near Chandigarh City Center, 140603</p>
             <hr>
            </div>
            
        


            
</div>
</div>
      
<footer>
        <center ><div style="display:flex;"><p> Note:</p><marquee style="color:white;">There is a dummy record of Doctors & Medical shops.It's important to respect their privacy and seek their consent before sharing their information publicly.</marquee></div></center>
    </footer>
    

    <script>
         function search()
         {
             let filter= document.getElementById('find').value.toUpperCase();

             let item= document.querySelectorAll('.num');

             let l=document.getElementsByTagName('p');
             
             for(var i=0; i<=l.length;i++ )
             {
                let a=item[i].getElementsByTagName('p')[0];

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
            
    </script>
     
     <script>
         
         function filterSelection(category) {
            // Apna filtering logic yahan implement karein
            
            // Example: Sabhi items ko hide karein
            var items = document.getElementsByClassName('num');
            for (var i = 0; i < items.length; i++) {
                items[i].style.display = 'none';
            }

            // Category ke hisab se specific items ko display karein
            if (category === 'all') {
                var allItems = document.getElementsByClassName('num');
                for (var j = 0; j < allItems.length; j++) {
                    allItems[j].style.display = 'block';
                }
            } else {
                var selectedItems = document.getElementsByClassName(category);
                for (var k = 0; k < selectedItems.length; k++) {
                    selectedItems[k].style.display = 'block';
                }
            }
        }

        window.onload = function() {
    changeColor('b1'); 
}
        
        function changeColor(clickedButtonId) {
        var buttons = document.getElementsByClassName('btn'); 
        for (var i = 0; i < buttons.length; i++) {
            if (buttons[i].id === clickedButtonId) { 
                buttons[i].style.backgroundColor = 'green';
                buttons[i].style.color = 'white'; 
            } else {
                buttons[i].style.backgroundColor = 'white'; 
                buttons[i].style.color = 'black';

            }
        }
    }

    function openNav() {
    
    op.style.display = "none";
    cl.style.display = "block";
    mySidenav.style.display = "flex";
    mydiv.style.display = "none";
    _search.style.display = "none";
}

function clNav() {
    
    mydiv.style.display = "block";
    _search.style.display = "block";
    op.style.display = "block";
    cl.style.display = "none";
    mySidenav.style.display = "none";
}
        
        </script>
                 
</body>

</html>