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
    <link rel="stylesheet" type="text/css" href="attr.css">
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
				
				/* CSS for Categories */
.categories{
    padding: 4% 0;
}

.box-3{
    width: 28%;
    float: left;
    margin: 2%;
}


/* CSS for Food Menu */
.food-menu{
    
    padding: 4% 0;
}
.food-menu-box{
    width: 43%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
	border: 3px solid black;
}

.food-menu-img{
    width: 20%;
    float: left;
}

.food-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
}

.food-price{
    font-size: 1.2rem;
    margin: 2% 0;
}
.food-detail{
    font-size: 1rem;
    color: #747d8c;
}


/* CSS for Social */
.social ul{
    list-style-type: none;
}
.social ul li{
    display: inline;
    padding: 1%;
}

/* for Order Section */
.order{
    width: 50%;
    margin: 0 auto;
}
.input-responsive{
    width: 96%;
    padding: 1%;
    margin-bottom: 3%;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
}
.order-label{
    margin-bottom: 1%; 
    font-weight: bold;
}



/* CSS for Mobile Size or Smaller Screen */

@media only screen and (max-width:768px){
    .logo{
        width: 80%;
        float: none;
        margin: 1% auto;
    }

    .menu ul{
        text-align: center;
    }

    .food-search input[type="search"]{
        width: 90%;
        padding: 2%;
        margin-bottom: 3%;
    }

    .btn{
        width: 91%;
        padding: 2%;
    }

    .food-search{
        padding: 10% 0;
    }

    .categories{
        padding: 20% 0;
    }
    h2{
        margin-bottom: 10%;
    }
    .box-3{
        width: 100%;
        margin: 4% auto;
    }

    .food-menu{
        padding: 20% 0;
    }

    .food-menu-box{
        width: 100%;
        padding: 5%;
        margin-bottom: 5%;
    }
    .social{
        padding: 5% 0;
    }
    .order{
        width: 100%;
    }
}
/* CSS for Food SEarch Section */

.food-search{
    background-image: url(../images/bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 7% 0;
}

.food-search input[type="search"]{
    width: 50%;
    padding: 1%;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
}
*{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.img-responsive{
    width: 140%;
}
.img-curve{
    border-radius: 15px;
}

.text-right{
    text-align: right;
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}
.text-white{
    color: white;
}

.clearfix{
    clear: both;
    float: none;
}

a{
    color: #ff6b81;
    text-decoration: none;
}
a:hover{
    color: #ff4757;
}

.btn{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn-primary{
    background-color: #ff6b81;
    color: white;
    cursor: pointer;
}
.btn-primary:hover{
    color: white;
    background-color: #ff4757;
}
h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h3{
    font-size: 1.5rem;
}
.float-container{
    position: relative;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}
fieldset{
    border: 1px solid white;
    margin: 5%;
    padding: 3%;
    border-radius: 5px;
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
         <a href="appointment.php#room">Booking History</a>
         
		 <a href="service1.php">Service</a>
		 <a href="about1.php">About Us</a>
		 <a href="contactus1.php">Contact Us</a>
      <a style id="logout" href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;logout</a>
       <br> <p style=' float:right;
     color: #9240c2;
     
    
     font-size:18px;'><i class="fa fa-user-circle" aria-hidden="true"></i> </p>
	    </nav>
      

    </section>
	
	
<div class="heading" style="background:url(images/z3.jpg) no-repeat">
   <h1>DINING AT TAJ </h1>
</div>    
<br>
<br>
<br>

<section class="home-packages">

            <h1 class="heading-title">Where would you like to Dine?</h1>
<br>
<br>
<br>
<br>
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="images/dine1.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3> DAAWAT-E-NAWAB</h3>
                        <p>Taj hotels meeting rooms are the perfect combination of space and ideal ambiance with state of the art amenities and audio visual equipments</p>
                     
                        
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/dine2.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>INFINI – THE SKY LOUNGE </h3>
                        <p>Taj Hotel have Ten distinct dining destinations featuring Indian & international cuisine along with some of the world's most well appreciated and prized beverages.Designed to meet different majestic venues, Asia's largest Hall - the 'Rajendra' houses three distinct pre-function areas.</p>
                 
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/dine3.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>LIQUID LOUNGE</h3>
                        <p>Dream up a traditional Indian wedding and turn it into an event extraordinaire. Encapsulate the most memorable moments and weave dreams into reality.</p>
                       
                    </div>
					 </div>
					
					<div class="box">
                    <div class="image">
                        <img src="images/dine8.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3> Memories Of China</h3>
                        <p>Taj hotels meeting rooms are the perfect combination of space and ideal ambiance with state of the art amenities and audio visual equipments</p>
                     
                        
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/h1.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Emperor Lounge </h3>
                        <p>Taj Hotel have Ten distinct dining destinations featuring Indian & international cuisine along with some of the world's most well appreciated and prized beverages.Designed to meet different majestic venues, Asia's largest Hall - the 'Rajendra' houses three distinct pre-function areas.</p>
                 
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/h2.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Southern Spice</h3>
                        <p>Dream up a traditional Indian wedding and turn it into an event extraordinaire. Encapsulate the most memorable moments and weave dreams into reality.</p>
                       
                    </div>
                </div>

            </div>
   </section>   
   
    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
             <h1 class="heading-title"> ALL KINDS OF FOODS AVAILABLE</h1>
     
	 
	        <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/33.jpg"  class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4 style="font-size:30px;">Indian Dishes</h4>
                    
                    <p class="food-detail" style="font-size:17px;">
                        All types of Indian food is avilable
                    </p>
                    <br>

                   
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/11.jpg"  class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4 style="font-size:30px;">Mexican Dishes</h4>
                    
                    <p class="food-detail" style="font-size:17px;">
                        All type of mexican food is available
                    </p>
                    <br>

                   
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/22.jpg" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4 style="font-size:30px;">Italian Dishes</h4>
                   
                    <p class="food-detail" style="font-size:17px;">
                        All type of Italian food is available
                    </p>
                    <br>

                   
                </div>
            </div>

          
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/55.jpg" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4 style="font-size:30px;">Spanish Dishes</h4>
                    
                    <p class="food-detail" style="font-size:17px;">
                        All types Spanish Food is avilable
                    </p>
                    <br>

                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/66.jpg"  class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4 style="font-size:30px;">Chinese Dishes</h4>
                   
                    <p class="food-detail" style="font-size:17px;" >
                         All types of chinese food is avilable
                    </p>
                    <br>

            
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/77.jpg"  class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4 style="font-size:30px;">Continental Dishes</h4>
                    
                    <p class="food-detail" style="font-size:17px;">
                       All types of continental  food is avilable
                    </p>
                    <br>

                   
                </div>
            </div>


            <div class="clearfix"></div>

            

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

            <div class="credit"> created by Anushree Wankhede and Ayush Ghutke </div>

        </section>

        <!-- footer section ends -->


   
</body>
</html>