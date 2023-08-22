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
            <a href="home.html">Home</a>
			<a href="room.html">Rooms</a> 
            <a href="event.php">Meetings & Events</a>
            <div class="dropdown">
            <button class="dropbtn">Booking form <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
            <a href="room.html">Rooms Booking </a>
            <a href="booking.html">Events Booking</a>
            </div>
            </div>
            <a href="login.html">Login</a>
            <a href="sign-up.html">Sign Up</a>
            <a href="food.html">Dining</a>
			<a href="service.html">Service</a>
            <a href="about.html">About Us</a>
            <a href="contactus.html">Contact Us</a>
        </nav>


    </section>


    <!-- header section ends -->

        <div class="heading" style="background:url(images/bg2.png) no-repeat">
   <h1>Events and Meeting </h1>
</div>    
         
           
       
 <section class="about">
            
<br>
<br>

            <div class="about-pages">
                <div class="section-1">
                    <h2 style="font-size:60px;">Our Meeting and Conference Hall </h2>


                    <div class="container">

                        <!-- Slideshow container -->
                        <div class="slideshow-container">
                           <div class="mySlides1">
                                <img src="images/m1.jpg" width="730" height="330">
                            </div>

                            <div class="mySlides1">
                                <img src="images/m2.png" width="730" height="330">
                            </div>

                            <div class="mySlides1">
                                <img src="images/m3.jpg" width="730" height="330">
                            </div>


                            <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>


                        </div>


                    </div>



                     <p>With a range of inspiring and flexible conference rooms in Taj Hotel, elegant accommodation, fine dining and high standards of service, we have what it takes to plan and execute memorable professional events.
                       A range of elegant meeting rooms in Goa, 
                   
                    

                </div>
<br>
                <div class="section-2">
                    <h2 style="font-size:60px"> Event and Celebration Hall</h2>
                    <div class="container">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">
                            <div class="mySlides2">
                                <img src="images/e1.jpg" width="730" height="330">
                            </div>

                            <div class="mySlides2">
                                <img src="images/e2.jfif" width="730" height="330">
                            </div>

                            <div class="mySlides2">
                                <img src="images/e3.jpeg" width="730" height="330">
                            </div>
                            <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
                        </div>


                    </div>
<p>With a capacity to accommodate 800 guests at a time, Celebrations Hotel & Resort has a wonderful banquet hall and a spacious outdoor lawn which can gather all your loved ones so that you can enjoy all your ceremonies without any discomfort. 
    The venue also provides you with beautiful and lush green gardens that will set your mood just right.</p>
                 
                    
                </div>
				<br>
                

        </section>
<br>
<br>
<br>
<br>		
		
		 <!-- -------------------------------------------------------------- -->
  <section class="home-packages">

            <h1 class="heading-title"> Book Ours Halls</h1>
<br>
<br>
<br>
<br>
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="https://sc01.alicdn.com/kf/HTB1SY1ja4PI8KJjSspoq6x6MFXa4/221491537/HTB1SY1ja4PI8KJjSspoq6x6MFXa4.jpg_.webp" alt="">
                    </div>
                    <div class="content">
                        <h3> MEETINGS </h3>
                        <p>Taj hotels meeting rooms are the perfect combination of space and ideal ambiance with state of the art amenities and audio visual equipments</p>
                     
                         <a href="booking.html" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR__NCJUeiQCx-d42_b5qqFnWFRb5Sr7pr1PBqUqWV1mnFjau-aLKwF9DkFDOLpb2Xtwds&usqp=CAU" alt="">
                    </div>
                    <div class="content">
                        <h3>CONFERENCE</h3>
                        <p>Taj Hotel have Ten distinct dining destinations featuring Indian & international cuisine along with some of the world's most well appreciated and prized beverages.Designed to meet different majestic venues, Asia's largest Hall - the 'Rajendra' houses three distinct pre-function areas.</p>
                        <a href="booking.html" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="https://www.labanquets.com/blog/wp-content/uploads/2016/02/Banquet-Halls-in-North-Hollywood-600x293.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>WEDDING</h3>
                        <p>Dream up a traditional Indian wedding and turn it into an event extraordinaire. Encapsulate the most memorable moments and weave dreams into reality.</p>
                        <a href="booking.html" class="btn">book now</a>
                    </div>
                </div>

            </div>
   </section>   
    <!------------------------------------------------------------------------------------------------------->
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

        <!-- footer section ends -->
        <script>
            var slideIndex = [1, 1, 1];
            var slideId = ["mySlides1", "mySlides2", "mySlides3"]
            showSlides(1, 0);
            showSlides(1, 1);
            showSlides(1, 2);


            function plusSlides(n, no) {
                showSlides(slideIndex[no] += n, no);
            }

            function showSlides(n, no) {
                var i;
                var x = document.getElementsByClassName(slideId[no]);
                if (n > x.length) {
                    slideIndex[no] = 1
                }
                if (n < 1) {
                    slideIndex[no] = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex[no] - 1].style.display = "block";
            }
        </script>








        <!-- swiper js link  -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>

</body>

</html>