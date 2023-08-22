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

                .loader{
                position:fixed;
                z-index:99;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:white;
                display:flex;
                justify-content:center;
                align-items:center;
                }
                .loader > img{
                width:20%;
                }
                .loader.hidden{
                animation:fadeout 1s;
                animation-fill-mode:forwards;			
                }
                @keyframes fadeout{
                100%{
                opacity:0;
                visibility:hidden;
                }
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
    body {
background-color:#eee;
}

                </style>
				<script type = "text/javascript" src="java.js">
         </script> 
</head>
<body>
    <div class="loader">
	         <img src="images/loading.gif" alt="Loading...." />
	</div>
	
	<script>
	   window.addEventListener("load",function(){
		   const loader = document.querySelector(".loader");
		   console.log(loader);
		   loader.className += " hidden";
	   });
	</script>
        
        
      <?php
        session_start();
        $name = $_SESSION["username"];
        ?>
   
<!-- header section starts  -->

<section class="header">

   <img src="images/Logo.png" class="logo">

   <nav class="navbar">
      
     <nav class="navbar">
           
			<a href="room1.html">Rooms</a> 
            <a href="event1.php">Meetings & Events</a>
            <div class="dropdown">
            <button class="dropbtn">Booking form <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
            <a href="room.html">Rooms Booking </a>
            <a href="bookings.php">Events Booking</a>
            </div>
            </div>
         <a href="appointment.php#room">Booking History</a>
         <a href="food1.php">Dining</a>
		 <a href="service1.php">Service</a>
		 <a href="about1.php">About Us</a>
		 <a href="contactus1.php">Contact Us</a>
      <a style=id="logout" href="logout.php" onclick="logout()"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;logout</a>
       <br> <p style=' float:right;
     color: #9240c2;
     
    
     font-size:18px;'><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $name;?></p>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- header section ends -->

<!-- home section starts  -->

</section>
<div class="main-content-header">
                <div class="slider">
                    <!--image slider start-->
                    <div class="slides">
                        <!--radio slider start-->
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                      
                        
                        <!--radio slider end-->
                        <!--slides images start-->
                        <div class="slide first">
                            <img src="images/z1.jpg" alt="" >
                        </div>
                        <div class="slide">
                            <img src="images/z2.jpg" alt="" >
                        </div>
                        <div class="slide">
                        <img src="images/z3.jpg" alt="" >
                     </div>
                     <div class="slide">
                         <img src="images/z4.jpg" alt="" >
                     </div>
                     
                        <!--slides images end-->
                        <!--automatic nav start-->
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                          
                        </div>
                        <!--automatic nav end-->
                    </div>
                </div>
        <!-- home section ends -->

        <!-- services section starts  -->
        <br><br>
        
        <section class="services">

            <h1 class="heading-title"> our services </h1>

            <div class="box-container">

                <div class="box">
                    <img src="images/icon-1.png" alt="">
                    <h3>Food</h3>
                </div>

                <div class="box">
                    <img src="images/icon-2.png" alt="">
                    <h3>Cabs</h3>
                </div>

                <div class="box">
                    <img src="images/icon-3.png" alt="">
                    <h3>City Guide</h3>
                </div>

                <div class="box">
                    <img src="images/icon-4.png" alt="">
                    <h3>24/7 Helpline</h3>
                </div>

                <div class="box">
                    <img src="images/icon-5.png" alt="">
                    <h3>Locker</h3>
                </div>

                <div class="box">
                    <img src="images/icon-6.png" alt="">
                    <h3>WiFi</h3>
                </div>

            </div>

        </section>

        <!-- services section ends -->

        <!-- home about section starts  -->
        


        <!-- home about section ends -->

        <!-- home packages section starts  -->

        <section class="home-packages">

            <h1 class="heading-title"> Our Family Rooms </h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="images/f1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Mini Family Rooms</h3>
                        <p>Spend time with the family or a group of friends in the Mini Family that has two bedrooms. Begin the day with stunning backdrops of the mountains, connect with free WiFi and watch entertaining shows with our LCD TV.</p>
                        <a href="room.html" class="btn">Details of Rooms</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/f2.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Joint Family Rooms</h3>
                        <p>Bond in the comfort and generous spacing of our Two Bedroom Family Suite. Secluded and serene, your stay at Loei Palace Hotel features a separate living area, flat screen TV, private balcony and free WiFi.</p>
                        <a href="room.html" class="btn">Details of Rooms</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                       <img src="images/premierroom.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Premium Family Rooms</h3>
                        <p>Our Premium Sky family rooms, located high up in our towers, enable you to enjoy a spectacular view of the city as you fall asleep and on waking in the morning. The entire family can relax in comfort in a double bed and a wide sofa bed, as well as enjoy a few added extras that you will no doubt come to appreciate during your stay.</p>
                        <a href="room.html" class="btn">Details of Rooms</a>
                    </div>
                </div>

            </div>

            <div class="load-more"> <a href="room.html" class="btn">load more</a> </div>

        </section>
		
		<!----------------------------------------------------------------------------------->
		<section class="home-packages">

            <h1 class="heading-title"> Our Luxury Rooms </h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="images/l1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Premium Rooms</h3>
                        <p>With warm undertones and elegant design elements, our Luxury Rooms feature carved wooden panels, and rich tapestry conveying Indian luxury. These are the perfect retreat, whether you’re travelling for leisure or for work.</p>
                        <a href="room.html" class="btn">Details of Rooms</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/l2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Superior Room</h3>
                        <p>With classic interiors that exemplify timelessness along with calming views of the city, the elegantly designed Superior Rooms are the perfect retreat, whether you’re travelling for leisure or for work.</p>
                       <a href="room.html" class="btn">Details of Rooms</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/l3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Royal Rooms</h3>
                        <p>With rich palettes of fabrics, the warm veneers and sophisticated interiors, the Taj Club Suites exemplify style and elegance. Exclusive benefits include access to the Taj Club lounge, round-the-clock butler service, one-way airport transfer, evening cocktail hours at the lounge and usage of meeting rooms.</p>
                        <a href="room.html" class="btn">Details of Rooms</a>
                    </div>
                </div>

            </div>

            <div class="load-more"> <a href="package.html" class="btn">load more</a> </div>

        </section>
        <section class="home-packages">

            <h1 class="heading-title"> Our Suite Rooms</h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="images/s22.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Tata Suite</h3>
                        <p>Created in the honor of our Founder, The Tata Suite is an extravagance of exotic artefacts, lush carpets, priceless paintings, authentic colonial furniture and fine architectural detailing. A salute to the spirit that created it! </p>
                        <a href="room.html" class="btn">Details of Rooms</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/s2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Sea View Suite</h3>
                        <p>The combination of richly carved wooden panels and marble, decadent silk furnishings and fine carpeting give the Luxury Suites a relaxed and sophisticated ambience. Paired with the benefits of Taj Club, these suites are ideal for the modern, business traveller.</p>
                        <a href="room.html" class="btn">Details of Rooms</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/s1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Presidential Suite</h3>
                        <p>The Presidential Suite has an expansive living room, plush dining room with a 12-seat table and well-equipped pantry, study, lavish master bedroom and grand en-suite bathroom. You experience world-class luxury and Indian hospitality</p>
                        <a href="room.html" class="btn">Details of Rooms</a>
                    </div>
                </div>

            </div>

            <div class="load-more"> <a href="room.html" class="btn">load more</a> </div>

        </section>



        <!-- home packages section ends -->



        <!------------------------------------------------------------------------------------------->
        <section class="about">
            <div class="about-title">
                <h1 class="heading-title"> Our Meeting and Celeration Halls</h1>


            </div>
<br>
<br>

            <div class="about-pages">
                <div class="section-1">
                    <h2 style="font-size:60px;">Our Meeting and Conference Hall </h2>


                    <div class="container">

                        <!-- Slideshow container -->
                        <div class="slideshow-container">
                            <div class="mySlides1">
                                <img src="images/m1.jpg" width="730" height="357">
                            </div>

                            <div class="mySlides1">
                                <img src="images/m2.png" width="730" height="357">
                            </div>

                            <div class="mySlides1">
                                <img src="images/m3.jpg" width="730" height="357">
                            </div>

                            <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>


                        </div>


                    </div>



                    <p>With a range of inspiring and flexible conference rooms in Taj Hotel, elegant accommodation, fine dining and high standards of service, we have what it takes to plan and execute memorable professional events.
                       A range of elegant meeting rooms in Goa, extraordinary attention to detail and the Trident dependable service,
                       
                   

                </div>
<br>
                <div class="section-2">
                    <h2 style="font-size:60px">Our Events and Celeration Halls</h2>
                    <div class="container">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">
                            <div class="mySlides2">
                                <img src="images/e1.jpg" width="730" height="357">
                            </div>

                            <div class="mySlides2">
                                <img src="images/e2.jfif" width="730" height="357">
                            </div>

                            <div class="mySlides2">
                                <img src="images/e3.jpeg" width="730" height="357">
                            </div>
                            <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
                        </div>

                    </div>

                    <p>With a capacity to accommodate 800 guests at a time, Celebrations Hotel & Resort has a wonderful banquet hall and a spacious outdoor lawn which can gather all your loved ones so that you can enjoy all your ceremonies without any discomfort. 
                       The venue also provides you with beautiful and lush green gardens that will set your mood just right.</p>
                    <br>
                    
                </div>


        </section>

        <!-- home offer section starts  -->
<section class="home-offer">
            <div class="content">
                <h3>Offers & Packages</h3>
                <p>We love packages here at Gothia Towers – whether it’s putting them together or giving them away. Putting together a hotel package or hotel offer in Gothenburg gives us the opportunity to combine everything that we have to offer in the best possible way, thereby providing you with a complete experience.

Whether you are planning a special celebration or looking for a hotel room at a great price, the most comfortable dinner, bed and breakfast accommodation around, a good show or a lively theatre production, we have something suitable for most occasions and much more besides. We vary our offers according to the season, so remember to check back regularly for up-to-date offers and to avoid missing the perfect opportunity for a break away.

We always sell parking and admission to Universeum science center subject to availability at the time of booking.</p>
            </div>
        </section>

        <section class="home-offer">
            <div class="content">
			    <h3>WE OFFERS BEST IN TOWN</h3><BR>
				<BR><BR>
                <h3>Get Upto 50% off </h3>
                <p>The Delight of Gifting Everlasting Memories Add a special touch to momentous occasions with the TAJ Hotels’ E-Gift Card - an exclusive gateway to authentic experiences distinguished by our quintessential warmth of service. With a selection of easy and instant redemption options across luxury stays, gourmet dining, rejuvenating spa services and more, ensure an unforgettable gift of timeless experiences.</p>
                 <BR><BR><h3>TO BOOK PLEASE LOGIN </h3><BR>
				<a href="login.html" class="btn">login</a>
            </div>
        </section>

        <!-- home offer section ends -->
 <!------------------------------------->
<section>

</section>
<!------------------------------------->






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
            var counter = 2;
            setInterval(function() {
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if (counter > 4) {
                    counter = 1;
                }
            }, 5000);
        </script>

        <script>
            var slideIndex = [1, 1];
            var slideId = ["mySlides1", "mySlides2"]
            showSlides(1, 0);
            showSlides(1, 1);



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

 <script type="text/javascript">
		function logout()
		{
		 var a=confirm("Do You want to logout");
		if(a){
			alert("thanks to visit");
			
		}else{
			alert("continue your booking")
		}
		
		
		
		}
       
	    </script>






        <!-- swiper js link  -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>

</body>

</html>