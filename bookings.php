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
            <style>.loader {
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .loader>img {
            width: 20%;
        }
        
        .loader.hidden {
            animation: fadeout 1s;
            animation-fill-mode: forwards;
        }
        
        @keyframes fadeout {
            100% {
                opacity: 0;
                visibility: hidden;
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
            background: #f9f9f9;
            overflow: hidden;
            color: white;
            color: #953fba;
            text-align: center;
            padding: 0 20px 4px 20px;
            text-decoration: none;
            font-size: 18px;
            border: none;
        }
        
        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: #ddd;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.5);
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
        
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }
        
        ol,
        ul {
            list-style: none;
            margin: 0px;
            padding: 0px;
        }
        
        blockquote,
        q {
            quotes: none;
        }
        
        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }
        
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
        /*--start editing from here--*/
        
        a {
            text-decoration: none;
        }
        
        .txt-rt {
            text-align: right;
        }
        /* text align right */
        
        .txt-lt {
            text-align: left;
        }
        /* text align left */
        
        .txt-center {
            text-align: center;
        }
        /* text align center */
        
        .float-rt {
            float: right;
        }
        /* float right */
        
        .float-lt {
            float: left;
        }
        /* float left */
        
        .clear {
            clear: both;
        }
        /* clear float */
        
        .pos-relative {
            position: relative;
        }
        /* Position Relative */
        
        .pos-absolute {
            position: absolute;
        }
        /* Position Absolute */
        
        .vertical-base {
            vertical-align: baseline;
        }
        /* vertical align baseline */
        
        .vertical-top {
            vertical-align: top;
        }
        /* vertical align top */
        
        nav.vertical ul li {
            display: block;
        }
        /* vertical menu */
        
        nav.horizontal ul li {
            display: inline-block;
        }
        /* horizontal menu */
        
        img {
            max-width: 100%;
        }
        /*--end reset--*/
        
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 100%;
            background: url(images/background1.jpg)no-repeat center top;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-attachment: fixed;
        }
        
        .bg-agile {
            width: 50%;
            margin: 0 auto;
            position: relative;
            padding: 3em 3em 3em;
            background: rgba(0, 0, 0, 0.51);
        }
        
        h1 {
            font-size: 54px;
            font-weight: 100!important;
            text-transform: capitalize;
            color: #fff;
            word-spacing: 11px;
            letter-spacing: 5px;
            margin: 2.5em 0 1.5em;
            text-align: center;
        }
        
        h1 span {
            color: #ea2e3e!important;
            border: 7px solid rgba(1, 60, 166, 0.86);
            padding: 0 7px 0 12px;
        }
        
        .book-appointment h2 {
            text-align: center;
            font-size: 30px;
            color: #fff;
            text-transform: capitalize;
            margin-bottom: 1em;
            font-weight: 500;
            letter-spacing: 7px;
        }
        /*-- reservation --*/
        
        .book-form input[type="text"],
        .book-form input[type="email"],
        select#country,
        select#country1,
        input#datepicker {
            width: 86.8%!important;
            color: #fff;
            font-size: 0.9em;
            letter-spacing: 2px;
            padding: 10px 10px 10px 50px;
            outline: none;
            background: rgba(255, 255, 255, 0);
            border: none;
            border: 1px solid rgba(255, 255, 255, 0.47);
            font-family: 'Flamenco', cursive;
        }
        
        .phone_email,
        .span1_of_1 {
            margin-bottom: 1.5em;
            width: 49%;
            float: left;
        }
        
        .phone_email1 {
            float: right;
        }
        
        select#country,
        select#country1 {
            width: 100%!important;
        }
        
        select#country option,
        select#country1 option {
            background: #000;
        }
        
        .book-form .form-text,
        .book_date,
        .section_room {
            position: relative;
        }
        
        .book-form i {
            position: absolute;
            color: #f5eeee;
            font-size: 14px;
            top: 7px;
            left: 0px;
            width: 34px;
            line-height: 25px;
            text-align: center;
            border-right: 1px solid rgba(255, 255, 255, 0.47);
        }
        
        .book-form input[type="submit"] {
            text-transform: capitalize;
            background: rgba(16, 67, 163, 0.13);
            color: #ffffff;
            padding: 0.7em 0em;
            border: none;
            border: 2px solid #ea2e3e;
            font-weight: bold;
            font-size: 1.1em;
            margin-top: 1.5em;
            width: 27%;
            float: right;
            outline: none;
            letter-spacing: 8px;
            -webkit-transition: .5s all;
            -moz-transition: .5s all;
            transition: .5s all;
            cursor: pointer;
        }
        
        .book-form input[type="submit"]:hover {
            background: #ea2e3e;
            border-color: #ea2e3e;
            color: #fff;
        }
        
        .book-form input[type="reset"] {
            text-transform: capitalize;
            background: rgba(16, 67, 163, 0.13);
            color: #ffffff;
            padding: 0.7em 0em;
            border: none;
            border: 2px solid #ea2e3e;
            font-weight: bold;
            font-size: 1.1em;
            margin-top: 1.5em;
            width: 27%;
            float: left;
            outline: none;
            letter-spacing: 8px;
            -webkit-transition: .5s all;
            -moz-transition: .5s all;
            transition: .5s all;
            cursor: pointer;
        }
        
        .book-form input[type="reset"]:hover {
            background: #ea2e3e;
            border-color: #ea2e3e;
            color: #fff;
        }
        
        .book-form ::-webkit-input-placeholder {
            color: #fff !important;
        }
        
        .book-form :-moz-placeholder {
            /* Firefox 18- */
            color: #fff !important;
        }
        
        .book-form ::-moz-placeholder {
            /* Firefox 19+ */
            color: #fff !important;
        }
        
        .book-form :-ms-input-placeholder {
            color: #fff !important;
        }
        
        .agile-reservation-grid {
            background: #f4f4f4;
            padding: 2em;
        }
        
        .book-form {
            margin: 0em 0;
            width: 100%
        }
        /*-- //reservation --*/
        
        .row {
            max-width: 1180px;
            margin: 0 auto 1px;
        }
        
        .logo {
            height: 80px;
            width: auto;
            /* float: left; */
            margin-top: 15px;
        }
        
        .main-nav {
            float: right;
            margin-top: 50px;
        }
        
        .main-nav li {
            display: inline-block;
            list-style: none;
            margin-left: 40px;
        }
        
        .main-nav li a {
            padding: 5px 0;
            color: #000;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 200px;
            font-size: 90%;
        }
        
        .main-nav li a:hover {
            border-bottom: 5px solid #bf55ec;
        }
        
        .input-field {
            font-size: 18px;
            padding: 10px 10px;
            margin: 25px 20px;
            width: 70%;
            background: lightgray;
            outline: none;
            border-radius: 10px;
        }
        
        .input-label {
            font-size: 22px;
            padding: 40px 10px;
            margin: 10px 15px;
            width: 40%;
            color: white;
        }
    </style>
</head>

<body>

<!-- header section starts  -->

<section class="header">

   <img src="images/Logo.png" class="logo">

   <nav class="navbar">
      
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
         <a href="food1.php">Dining</a>
		
		 <a href="about1.php">About Us</a>
		 <a href="contactus1.php">Contact Us</a>
      <a style id="logout" href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;logout</a>
       <br> <p style=' float:right;
     color: #9240c2;
     
    
     font-size:18px;'><i class="fa fa-user-circle" aria-hidden="true"></i> </p>
   </nav>

</section>

    <!-- header section ends -->
    <h1 style="color:purple;"> Events Booking Form</h1>
    <div class="bg-agile">
        <div class="book-appointment">
            <h2>Book Now</h2>
            <div class="book-form agileits-login">
                <form   method="post" action='booking.php'>
                    <div class="agileits_reservation_grid">
                        <div class="phone_email">
                            <div class="form-text">
                                <label class='input-label'>Select the Event</label>
                                <select id='type' class='input-field' name='Type' required>
                        <option disabled hidden selected>--Select--</option>
                        <option value="Conference-Hall">Conference-Hall</option>
                        <option value="Event">Event</option>
                        <option value="Meeting">Meeting</option>
                        </select>
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <label class='input-label'>Range of guest</label>
                                <select class='input-field' for='noguest' name='NoGuest'>
                            
                            <option value='200'> 100-200</option>
                            <option value='300'> 200-300</option>
                            <option value='400'> 300-400</option>
                            <option value='500'> 400-500</option>
                            </select>
                            </div>
                        </div>

                        <div class="phone_email">
                            <div class="form-text">
                                <label class='input-label'>Duration Time</label>

                                <select id='amt' class='input-field' for='noguest' name='amount' onchange="select()" required>
                            
                            <option value='1'> 1-3 hours</option>
                            <option value='2'> 3-5 hours</option>
                            <option value='3'> 5-10 hours</option>
                            <option value='4'> Per day</option>
                            </select>
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <label class='input-label'>Total-Amount</label>
                                <input id='total' class='input-field' type="text" name="Total" readonly><br>
                            </div>
                        </div>
                     <div class="span1_of_1 phone_email1">
                            <div class="book_date">
                                <label class='input-label' for="checkin">Date of CheckOut</label>
                                <input class='input-field' type="date" id="checkin" name="Checkin" onchange="CompareDate(event);" required><br>


                            </div>
                        </div>

                        <div class="span1_of_1 phone_email1">
                            <div class="book_date">
                                <label class='input-label' for="checkin">Date of CheckIn</label>
                                <input class='input-field' type="date" id="checkin" name="Checkin" onchange="CompareDate(event);" required><br>

                            </div>
                        </div>
                        
                        <div class="span1_of_1">
                            <!-- start_section_room -->
                            <div class="section_room">
                                <label class='input-label' for="start">Time-In</label>
                                <input class='input-field' type="time" name="InTime">
                            </div>
                        </div>
                        <div class="span1_of_1 phone_email1">
                            <!-- start_section_room -->
                            <div class="section_room">

                                <label class='input-label' for="start">Time-Out</label>
                                <input class='input-field' type="time" name="OutTime">
                            </div>
                        </div>
                        <h2>Contact-Details</h2>
                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="Name" placeholder="Name" required="" autocomplete="off">
                            </div>
                        </div>

                        <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="Phone number" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <div class="form-text">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Email" required="" autocomplete="off">
                            </div>
                        </div>
						
                         <div class="phone_email">
                            <div class="form-text">
                                <i class="fa fa-map" aria-hidden="true"></i>
                                <input type="text" name="Phone no" placeholder="City Name" required="" autocomplete="off">
                            </div>
                        </div>
                        </div>

                        <button type='submit' class='btn' onclick="return confirm('Are you sure ,do you want to book this Event?')">Book</button>
                </form>
                </div>

            </div>
        </div>
    </div>


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
        function select() {
            //        console.log("hi");
            var d = document.getElementById('amt');
            var display = d.options[d.selectedIndex].value;
            var text = d.options[d.selectedIndex].text;
            //        document.getElementById('amt').value = display;

            switch (display) {
                case '1':
                    document.getElementById('total').value = 'Rs 1000/-';
                    break;
                case '2':
                    document.getElementById('total').value = 'Rs 3000/-';
                    break;
                case '3':
                    document.getElementById('total').value = 'Rs 5000/-';
                    break;
                case '4':
                    document.getElementById('total').value = 'Rs 7000/-';
                    break;
            }

        }
        var amt = document.getElementById('amt').value;




        function CompareDate(e) {
            today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //As January is 0.
            var yy = today.getFullYear();
            var dateformat = e.target.value.split('-');
            var cin = dateformat[2];
            var cinmonth = dateformat[1];
            var cinyear = dateformat[0];

            if (yy == cinyear && mm == cinmonth && dd <= cin) {

                return true;

            } else if (mm < cinmonth) {
                return true;
            } else if (yy < cinyear) {
                return true;
            } else {
                alert("Please select valid checkin date from today");
                e.target.value = '';
            }
        }
    </script>


</body>

</html>