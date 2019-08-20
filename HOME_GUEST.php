<?php
if (isset($_POST['submit'])) {
    $c = mysqli_connect("localhost", "root", "", "super8") or
            die("ERROR");
    $emailid = $_POST['email'];
    $des = $_POST['des'];
//------Insert into table-------
    $q = "insert into feedback values(NULL,'$emailid','$des')";
    $r = mysqli_query($c, $q) or die("ERROR in query");
}
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Super8 Motel | Home </title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Mug house Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script src="js/main.js"></script>
        <!-- //js -->
        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- tabs -->
        <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
        <!-- //tabs -->
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <style>
            body {
                font-family: 'Lato', sans-serif;
            }

            .overlay {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0, 0.9);
                overflow-x: hidden;
                transition: 0.5s;
            }

            .overlay-content {
                position: relative;
                top: 25%;
                width: 100%;
                text-align: center;
                margin-top: 30px;
            }

            .overlay a {
                padding: 8px;
                text-decoration: none;
                font-size: 36px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .overlay a:hover, .overlay a:focus {
                color: #f1f1f1;
            }

            .overlay .closebtn {
                position: absolute;
                top: 20px;
                right: 45px;
                font-size: 60px;
            }

            @media screen and (max-height: 450px) {
                .overlay a {font-size: 20px}
                .overlay .closebtn {
                    font-size: 40px;
                    top: 15px;
                    right: 35px;
                }
            }
        </style>

        <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* Full-width input fields */
            input[type=text], input[type=password], input[type=email] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: red;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
                from {transform: scale(0)} 
                to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
        <style>
            .fa {
                padding: 15px;
                font-size: 20px;
                width: 50px;
                text-align: center;
                text-decoration: none;
                margin: 2px 2px;
                border-radius: 50%;
                opacity: 0.4;
            }

            .fa:hover {
                opacity: 1;
            }

            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            .fa-google-plus {
                background: #dd4b39;
                color: white;
            }

        </style>
    </head>
    <body>
        <!-- banner -->
        <div class="banner">
            <div class="header-bottom">
                <div class="header">
                    <div class="container">
                        <div class="w3_agile_logo">
                            <h1><a href="index.php"><span style="color: yellow">SUPER</span>EIGHT</a></h1>
                        </div>
                        <div class="header-nav">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header navbar-left">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                    <nav class="link-effect-12">
                                        <ul class="nav navbar-nav w3_agile_nav">
                                            <li class="active">
                                                <a href="HOME_GUEST.php"><span>Home</span></a></li>
                                            <li><a href="Guest_bookroom.php">Book Room</a></li>
                                            <li><a href="Gallary_guest.php"><span>Gallery</span></a></li>
                                            <li><a href="about_guest.php"><span>About Us</span></a></li>
                                            <li><a href="Contact_guest.php"><span>Contact</span></a></li>
                                            <li><a href="LOGIN.php"><span>LogOUT</span></a></li>

                                        </ul>	
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!-- header -->
                <!-- w3-banner -->
                <button onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;">Feedback</button>

                <div id="id01" class="modal">

                    <form class="modal-content animate" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>

                        </div>

                        <div class="container">
                            <label for="uname"><b>Username</b></label>
                            <input type="email" style="width: 950px" placeholder="Enter Email-ID" name="email" required>
                            <br>
                            <label for="psw"><b>Feedback</b></label>
                            <input type="text" style="width: 950px" placeholder="Enter your Feedback" name="des" required>

                            <button type="submit" style="width: 1050px" name="submit">Submit</button>
                        </div>

                        <div class="container" style="background-color:#f1f1f1;width: 950px">
                            <button type="submit"  onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Cancel</button>

                        </div>
                        
                        
                    </form>
                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById('id01');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function (event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
                <div class="w3-banner">
                    <div id="typer" style="font-family: Castellar;color: peru;"></div>
                    <div class="agileits-social-grids">
                        <ul>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                </div>

                <!-- //w3-banner -->
            </div>
        </div>
        <!-- //banner -->
        <!-- welcome -->
        <div class="about">
            <div class="container">
                <div class="w3ls-heading">
                    <h2>welcome</h2>
                </div>
                <div class="w3-about-grids">
                    <div class="col-md-6 w3-about-left">
                        <div class="about-img-grids">
                            <div class="col-md-7 about-img">
                                <img src="images/road.jpg" alt=" " style="width: 600px" />
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3-about-right">
                    <div class="about-img-grids">
                        <div class="col-md-7 about-img">
                            <img src="images/4.jpg" alt=" " />
                        </div>
                        <div class="col-md-5 about-img about-img1">
                            <img src="images/86383967(14).jpg" alt=" " style="height:205px;width: 100%" />
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="about-img-grids">
                        <div class="col-md-5 about-img about-img1">
                            <img src="images/5950849(17).jpg" alt=" " />
                        </div>
                        <div class="col-md-7 about-img">
                            <img src="images/45567766(15).jpg" alt=" " />
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- modal -->
    <div class="modal about-modal fade" id="myModal" taahbabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    <h4 class="modal-title">Super8</h4>
                </div> 
                <div class="modal-body">
                    <div class="agileits-w3layouts-info">
                        <img src="images/13.jpg" class="img-responsive" alt="" />
                        <p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal -->
    <!-- popular -->
    <div class="popular-section-wthree">
        <div class="container">	
            <div class="w3ls-heading">
                <h3>Popular Services</h3>
            </div>
            <div class="popular-agileinfo">
                <div class="col-md-3 popular-grid">
                    <i class="fa fa-cat" aria-hidden="true"></i>
                    <h4></h4>
                    <p></p>
                </div>
                <div class="col-md-3 popular-grid">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                    <h4> Services</h4>
                    <p>Daily maid service<br>
                        Vending machine (snacks)<br>
                        Vending machine (drinks)<br>
                        Fax/photocopying<br>
                        Business centre<br>
                        24-hour front desk</p>
                </div>

                <div class="col-md-3 popular-grid popular-grid-bottom">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h4> General</h4>
                    <p>Air conditioning<br>
                        Heating<br>
                        Family rooms<br>
                        Facilities for disabled guests<br>
                        Non-smoking rooms</p>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //popular -->
    <!-- choose-us -->
    <div class="why-choose-agile">
        <div class="container">
            <div class="w3ls-heading">
                <h3>Why Choose Us</h3>
            </div>
            <div class="why-choose-agile-grids-top">
                <div class="col-md-4 agileits-w3layouts-grid">
                    <div class="wthree_agile_us">
                        <div class="col-xs-9 agile-why-text">
                            <h4>Free WiFi</h4>
                            <p>Free! WiFi is available in all areas and is free of charge.</p>
                        </div>
                        <div class="col-xs-3 agile-why-text">
                            <div class="wthree_features_grid hvr-rectangle-out">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="wthree_agile_us">
                        <div class="col-xs-9 agile-why-text">
                            <h4>Business centre</h4>
                            <p>We provide bussiness rooms for meeting.</p>
                        </div>
                        <div class="col-xs-3 agile-why-text">
                            <div class="wthree_features_grid hvr-rectangle-out">
                                <i class="fa fa-building-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="wthree_agile_us">
                        <div class="col-xs-9 agile-why-text">
                            <h4>24-hour front desk</h4>
                            <p> We have 24 hours Front Desk service for our Guests.</p>
                        </div>
                        <div class="col-xs-3 agile-why-text">
                            <div class="wthree_features_grid hvr-rectangle-out">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 agileits-w3layouts-grid img">
                    <img src="images/night.jpg" alt=" " class="img-responsive" style="width: 500px; height: 400px" />
                </div>
                <div class="col-md-4 agileits-w3layouts-grid">
                    <div class="wthree_agile_us">
                        <div class="col-xs-3 agile-why-text agile-icon-left">
                            <div class="wthree_features_grid hvr-rectangle-out">
                                <i class="fa fa-openid" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xs-9 agile-why-text two">
                            <h4>Pets allowed</h4>
                            <p>Pets are allowed on request. Charges may be applicable.</p>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="wthree_agile_us">
                        <div class="col-xs-3 agile-why-text agile-icon-left">
                            <div class="wthree_features_grid hvr-rectangle-out">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xs-9 agile-why-text two">
                            <h4>Foods</h4>
                            <p>Vending machine (snacks)<br>
                                Vending machine (drinks)</p>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="wthree_agile_us">
                        <div class="col-xs-3 agile-why-text agile-icon-left">
                            <div class="wthree_features_grid hvr-rectangle-out">
                                <i class="fa fa-dollar" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xs-9 agile-why-text two">
                            <h4>No pre-payment needed</h4>
                            <p>You can pay at the time of check-out</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //choose-us -->
    <!-- footer -->
    <div class="w3-agile-footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid">
                    <div class="footer-grid-heading">
                        <h4>Address</h4>
                    </div>
                    <div class="footer-grid-info">
                        <li><p>505 East Main Street,<br>
                                    Cortez,CO 81321,<br>
                                    United States of America</p>
                            </li>
                        <p class="phone">Phone : (+1 123 456 789)
                            <span>Email : <a href="mailto:example@email.com">mail@example.com</a></span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 footer-grid">
                    <div class="footer-grid-heading">
                        <h4>Navigation</h4>
                    </div>
                    <div class="footer-grid-info">
                        <ul>
                            <li><a href="HOME_GUEST.php">Home</a></li>
                            <li><a href="about_guest.php">About</a></li>
                            <li><a href="Gallary_guest.php">Gallery</a></li>
                        </ul>
                    </div>
                </div>

                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "super8";

// Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM feedback";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {

                            // output data of each row
                            while ($row = mysqli_fetch_row($result)) {
                                ?> 
                                <table>
                                    <tr>
                                        <td>
                                            <div class="modal-body">
                                                <h4 style="color:white"><?php echo "Email-Id:  " . "$row[1]"; ?></h4><br>
                                                <table class="table table-condensed" border="2" style="color:white;border-color: white;border-style: double;width:100%;"><tr><td><B><font style="color: black"></font></B></td>
                                                        <td><B><font style="color: white"><?php echo " Feedback:  " . "$row[2] "; ?></font></B></td>
                                                        </tr></table><br>
                                            </div></td>

                                    </tr>
                                </table>
                                <?php
                            }
                        } else {
                            echo "RECORED DOES NOT FOUND";
                        }
                        ?>
                    </div>
                </div>

                <h2 style="color:white">Click here to show feedback</h2>
                <span style="font-size:30px;cursor:pointer;color: white" onclick="openNav()">&#9776; open</span>

                <script>
                    function openNav() {
                        document.getElementById("myNav").style.width = "100%";
                    }

                    function closeNav() {
                        document.getElementById("myNav").style.width = "0%";
                    }
                </script>

                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!-- //footer -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        $(".scroll").click(function (event) {
                            event.preventDefault();
                            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                        });
                    });
    </script>
    <!-- start-smooth-scrolling -->
    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
                    $(document).ready(function () {
                        /*
                         var defaults = {
                         containerID: 'toTop', // fading element id
                         containerHoverID: 'toTopHover', // fading element hover id
                         scrollSpeed: 1200,
                         easingType: 'linear' 
                         };
                         */

                        $().UItoTop({easingType: 'easeOutQuart'});

                    });
    </script>
    <!-- //here ends scrolling icon -->
    <script src='js/jquery.typer.js'></script>
    <script>
                    var win = $(window),
                            foo = $('#typer');

                    foo.typer(['SUPER8', 'Motel ']);

// unneeded...
                    win.resize(function () {
                        var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

                        foo.css({
                            fontSize: fontSize * .8 + 'px'
                        });
                    }).resize();
    </script>
    <!--tabs-->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
                    $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true, // 100% fit in a container
                            closed: 'accordion', // Start closed if in accordion view
                            activate: function (event) { // Callback function if tab is switched
                                var $tab = $(this);
                                var $info = $('#tabInfo');
                                var $name = $('span', $info);
                                $name.text($tab.text());
                                $info.show();
                            }
                        });
                        $('#verticalTab').easyResponsiveTabs({
                            type: 'vertical',
                            width: 'auto',
                            fit: true
                        });
                    });
    </script>
    <!--//tabs-->
</body>
</html>

