<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

<style>
            .readmore {
    
     
           text-align: center;
            color: white;
            background-color:dodgerblue ;
            padding :10px 10px;
            text-decoration: none;
                border: none;
           width:100px;
            margin-left: 115px;
                outline: none;
}

         .hotel-image{
                padding:12px;
                margin:1px;
                }
                .hotel-image-detail{
                width:350px;
                height:500px;
                margin:30px 45px;              
                box-shadow: 3px 3px 5px 6px #ccc;
                transition: 0.2s;

                }
            .hotel-image-detail:hover{
               transform: scale(1.09);
            
            }
                .three
                {
                display: flex;
                margin:10px 0px;
                
                }
            a{
                text-decoration: none;
                color:black;
                
            }

        .black-container{
            background-color: black;
            display: flex;
           
            padding:10px 10px;
            
        }
        
        .in{
             padding:40px 70px;
            
        }
        .black-container a{
            text-decoration: none;
             color:gainsboro;
        }
            .des {
                font-style: italic;
                font-size:20px;
                color:dodgerblue;
                text-align: center;
                text-decoration: none;
                justify-content: center;
                padding:0 20px;
            }
			
			#navbar {
                overflow: hidden;
                }

                .dropdown {
                float: right;
                margin-top: 0;
                overflow: hidden;
                }

                .dropdown .dropbtn {
                background-color: inherit;
                font-family: inherit;
                margin: 0;
                background:#f9f9f9;
                overflow:hidden;
                color: white;
               
                color:  #953fba;
                text-align: center;
                padding: 0 20px 4px 20px;
                text-decoration: none ;
                font-size:18px;
                border:none;
                }
                .navbar a:hover, .dropdown:hover .dropbtn {
                background-color: #ddd;
                }

                .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
                z-index: 1;
                }

                .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
                }

                .dropdown-content a:hover {
                background-color: #ddd;
                }

                .dropdown:hover .dropdown-content {
                display: block;
                }
				
				.logo{
                  height: 80px;
                  width: auto;
                 /* float: left; */
                  margin-top: 15px;
                  }
    
        </style>
</head>
<body>

   
<!-- header section starts  -->

  <section class="header">

        <img src="images/Logo.png" class="logo">

        <nav class="navbar">
            <a href="home1.php">Home</a>
            <a href="room1.html">Rooms</a> 
            <a href="event1.php">Meetings & Events</a>
            <div class="dropdown">
            <button class="dropbtn">Booking form <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
            <a href="room.html">Rooms Booking </a>
            <a href="bookings.php">Events Booking</a>
            </div>
            </div>
          <a href="food.html">Dining</a>
         <a href="appointment.php#room">Booking History</a>
           <a href="about1.php">About Us</a>
		  <a href="contactus1.php">Contact Us</a>
		  <a style id="logout" href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;logout</a>
       <br> <p style=' float:right;
     color: #9240c2;
     
    
     font-size:18px;'><i class="fa fa-user-circle" aria-hidden="true"></i> </p>
        </nav>


    </section>



<!-- header section ends -->
        
     
   
        <div class="heading" style="background:url(images/bg4.jpg) no-repeat">
   <h1>TAJ SERVICES</h1>
</div>

<section class="packages">
 <!-- ---------------------------------------------------------------->
   <h1 class="heading-title">Health And Well-Being</h1>
       <br>
	   <br>
	   <br>
	   <br>
      <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/spa.png" alt="">
			<form method='POST' action="rbooking.php" >
         </div>
         <div class="content">
            <h3>Spa</h3>
            <p>Awesome Spa Products which makes you swoon</p>
			
         </div>
      </div>
	  <div class="box">
         <div class="image">
            <img src="images/fitness-centre.png" alt="">
			<form method='POST' action="rbooking.php" >
         </div>
         <div class="content">
            <h3>Fitness Centre</h3>
            <p>A gym that raises the bar when it comes to a guest’s fitness goals. The full complement of equipment and personal trainers are on hand.</p>

         </div>
      </div>
	  <div class="box">
         <div class="image">
            <img src="images/salon.png" alt="">
		
         </div>
         <div class="content">
            <h3>Salon</h3>
            <p>A beauty salon that specializes in hair and skin treatments and offers full make-up and hair-dressing services.</p>
			
            
			
         </div>
      </div>
	  </div>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	   <!-- -------------------------------------------------------------- -->
	  <h1 class="heading-title">SERVICES at TAJ</h1>
	   <br>
	   <br>
	   <br>
	   <br>
	  <div class="box-container">
	  <div class="box">
         <div class="image">
            <img src="https://www.archi-living.com/wp-content/uploads/grand-park-hotel-rovinj-maistra-hospitality-group-Archi-living-N.jpg" alt="">
			<form method='POST' action="rbooking.php" >
         </div>
         <div class="content">
            <h3>Cabs/Taxi</h3>
            <p>Hot shower services for hot water services</p>
			
         </div>
      </div>
	  <div class="box">
         <div class="image">
            <img src="https://www.hospitalitynet.org/picture/xxl_153084829.jpg?t=20171207124558" alt="">
			<form method='POST' action="rbooking.php" >
         </div>
         <div class="content">
            <h3>Laundry</h3>
            <p>We provide best laundry services to reduce customer work</p>

         </div>
      </div>
	  <div class="box">
         <div class="image">
            <img src="https://i.pinimg.com/originals/b3/68/a7/b368a777cbb464aa48c164f18e25e419.jpg" alt="">
			<form method='POST' action="rbooking.php" >
         </div>
         <div class="content">
            <h3>Locker</h3>
            <p>Laguage storages for customer vacations</p>
			
         </div>
      </div>
	  
	   </div>
	   <br>
	   
	   <!-- -------------------------------------------------------------- -->
	  <h1 class="heading-title"></h1>
	   <br>
	   <br>
	   <br>
	   <br>
	  <div class="box-container">
	  <div class="box">
         <div class="image">
            <img src="https://i.pinimg.com/originals/ef/49/7b/ef497b7bbcd220cf62959bf3d97f6fd4.jpg" alt="">
			<form method='POST' action="rbooking.php" >
         </div>
         <div class="content">
            <h3>Breakfast & Tea</h3>
            <p>The hotel restaurant with both indoor and outdoor seating offers an open-buffet breakfast.</p>
			
            
			
         </div>
      </div>
	  <div class="box">
         <div class="image">
            <img src="https://www.wilkinslinen.com/website/wp-content/uploads/2018/09/outsourced-linen-services.jpg" alt="">
			<form method='POST' action="rbooking.php" >
         </div>
         <div class="content">
            <h3>Ironing</h3>
            <p>After washing cloths your dresses are packed by ironing.</p>
			
			
            
			
         </div>
      </div><div class="box">
         <div class="image">
            <img src="https://i0.wp.com/amberlair.com/wp-content/uploads/2016/02/amberlair-crowdsourced-crowdfunded-boutique-hotel-Blue-Karma-resort-wifi.jpg?resize=768%2C511&ssl=1" alt="">
			<form method='POST' action="rbooking.php" >
         </div>
         <div class="content">
            <h3>Free Wifi</h3>
            <p>We offers free Internet access. High-speed wireless Internet connection is complimentary both in the rooms and public areas</p>
			
            
			
         </div>
      </div>
	  </div>
      </section>
	  
	  
	  
	  
	  
	  
	  
	  
	  

        <!-- footer section starts  -->

        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
                    <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
                    <a href="room.html"> <i class="fas fa-angle-right"></i> rooms</a>
                    <a href="event.php"> <i class="fas fa-angle-right"></i> events</a>
                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                    <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> Tajhotel@gmail.com </a>
                    <a href="#"> <i class="fas fa-map"></i> Goa, india - 400104 </a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>

            </div>

            <div class="credit">  Anushree Wankhede </div>

        </section>

        <!-- footer section ends -->








<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>