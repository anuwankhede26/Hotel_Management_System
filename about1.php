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
            
           	<a href="home1.php">Homes</a> 
			<a href="room1.html">Rooms</a> 
            <a href="event1.php">Meetings & Events</a>
            <div class="dropdown">
            <button class="dropbtn">Booking form <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
            <a href="room.html">Rooms Booking </a>
            <a href="booking.html">Events Booking</a>
            </div>
            </div>
         <a href="appointment.php#room">Booking History</a>
         <a href="food1.php">Dining</a>
		  <a href="service1.php">Service</a>
		 <a href="contactus1.php">Contact Us</a>
      <a style id="logout" href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;logout</a>
       <br> <p style=' float:right;
     color: #9240c2;
     
    
     font-size:18px;'><i class="fa fa-user-circle" aria-hidden="true"></i> </p>
        </nav>


    </section>
	 <!-- header section ends -->

<div class="heading" style="background:url(images/bg5.jpg) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/ab2.jpg" alt="">
   </div>

   <div class="content">
      <h3>About Taj Hotels Goa</h3>
                <p>
                    Situated in Panaji, right on the tranquil Vanguinim Beach Dona Paula in North Goa, Taj Resort & Convention Centre Goa features luxurious rooms offering suitable choices to guests. With only 28 km and 45 mins drive from the Dabolim airport the hotel is located in the heart of Goa. The vast elevated deck at the rooftop with infinity pool along the Arabian sea offers panoramic views and sun bathing opportunity to the guests and a second swimming pool at the lower deck. Access a host of water sports, sunset cruise and other activities at the beach, rejuvenate at the Jiva Spa, enjoy e-biking, kids activity zone, a state of the art fitness facility or just relax to soak the sun by the Arabian Sea. Taj Resort & Convention Centre Goa boasts an all day dining restaurant BLD located off the main lobby with a beautifully landscaped garden on the north and a vast deck garden on the sea side.
                </P>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->











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

            <div class="credit"> created by Anushree Wankhede and Ayush Ghutke </div>

        </section>










<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>