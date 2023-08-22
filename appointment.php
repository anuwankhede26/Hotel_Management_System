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

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:  #282C35;
  color: white;
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
				</head>
<body>

<?php
        session_start();
        $name = $_SESSION["username"];
        ?>
    
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


   
   <br>
   <br
   <br>
   <br>
<!-- header section ends -->
       
	   <div id='room'>
         <center> <h2 style="color:purple; font-size:30px;" >BOOKING HISTORY OF ROOMS</h2></center>
         
    
    <table id="customers">
  <tr>
    <th>S.no</th>
    <th>Name</th>
    <th>Type</th>
    <th>Checkin</th>
    <th>Checkout</th>
  
  </tr>
    
  
    
    
    
    
    <?php
$count=0;
$con=mysqli_connect('localhost','root','','hotelmanagement');
$query="select SNo,ID,Name,Username,Checkin,Checkout,Type,Checkout,Status from room ";
$num=mysqli_query($con,$query);
                    
if(isset($_POST['room'])){
    $name=$_POST['name'];
   
    $sql=" SELECT * FROM room WHERE  Name like '%".$name."%' OR Type like '%".$name."%'";
    $num=mysqli_query($con,$sql);
}
else{
     $sql="select * from room  where username='$name'";
    $num=mysqli_query($con,$sql);
}
if(mysqli_num_rows($num)>0)
{  

    
  while($row=mysqli_fetch_assoc($num))
{
    $count = $count+1;
?>   
 
  <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Type'];?></td>
    <td><?php echo $row['Checkin'];?></td>
    <td><?php echo $row['Checkout'];?></td>

  </tr>
    <?php
}
}

{
?>
  
    <?php
   }
?>
   </table>
        
        
        </div>
        
   
   <br>
   <br>
   <br>
   <br>
        <div id ='event'> 
        <center> <h2 style="color:purple; font-size:30px;">BOOKING HISTORY OF EVENTS</h2></center>
         
    
    
    <table id="customers">
  <tr>
    <th>S.no</th>
    <th>Name</th>
    <th>Type</th>
    <th>Time-In</th>
    <th>Time-Out</th>
    <th>Date</th>


  </tr>
    
  
    
    
    
    
    <?php
$count=0;
$con=mysqli_connect('localhost','root','','hotelmanagement');
                              
if(isset($_POST['event'])){
    $name=$_POST['name'];
   
     $sql=" SELECT * FROM events WHERE Name like '%".$name."%' OR Type like '%".$name."%'";
    $num=mysqli_query($con,$sql);
}
else{
     $sql="select SNo,ID,Name,InTime,OutTime,username,Checkin,Type,Status,Total from events where username='$name'";
    $num=mysqli_query($con,$sql);
}
if(mysqli_num_rows($num)>0)
{  

    
  while($row=mysqli_fetch_assoc($num))
{
    $count = $count+1;
?>   
 
  <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Type'];?></td>
    <td><?php echo $row['InTime'];?></td>
    <td><?php echo $row['OutTime'];?></td>
    <td><?php echo $row['Checkin'];?></td>
    
  
                            
                            
  </tr>
    <?php
}
}

?>
  
   </table>
   
   
        </div>
		
   
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
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

            <div class="credit"> Anushree Wankhede </div>

        </section>
		
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




<!-- footer section ends -->
        
        </body>
    
</html>