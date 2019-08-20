<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SUPER 8|Offers_MANAGER</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Mug house Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <script type="application/x-javascript">
            addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
            window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta Tags -->
        <!-- Font-Awesome-CSS -->
        <link href="css/font-awesome_1.css" rel="stylesheet">
        <!--// Font-Awesome-CSS -->
        <!-- Required Css -->
        <link href="css/style_1.css" rel='stylesheet' type='text/css' />
        <!--// Required Css -->
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

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
    </head>
    <body><div class="banner">
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
                                                <a href="HOME_MANAGER.php"><span>Home</span></a></li>
                                            <li><a href="gallery_MANAGER.php"><span>Gallery</span></a></li>
                                            <li><a href="REGISTRATION_RES.php"><span>Enroll Receptionist</span></a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Manage Details</span> <b class="caret"></b></a>
                                                <ul class="dropdown-menu agile_short_dropdown">
                                                    <li><a href="icons.php">Taxes</a></li>
                                                    <li><a href="offers.php">Offers</a></li>
                                                    <li><a href="R_offers.php">Remove Offers</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Manage">View</span> <b class="caret"></b></a>
                                                <ul class="dropdown-menu agile_short_dropdown">
                                                    <li><a href="offers.php">Offers</a></li>  
                                                    <li><a href="offers.php">Guest Details</a></li>
                                                    <li><a href="offers.php">Staff Details</a></li>
                                                    <li><a href="offers.php">Receptionist Details</a></li>
                                                    <li><a href="Book_Room.php">Booked Room Details</a></li>
                                                    <li><a href="Cancle_Room.php"> Canceled Room Details </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about_MANAGER.php"><span>About Us</span></a></li>

                                        </ul>	
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!-- header -->

            </div>
        </div>
        <!-- //banner -->
        <!-- about -->
        <!-- courses -->
        <div class="courses">
            <div class="container"> 
                <div class="w3ls-heading">
                    <h2>Offers</h2>
                </div>
            </div>
        </div>
        <!-- Main-Content -->
        <div class="main-w3layouts-form">
            <h2></h2>
            <!-- main-w3layouts-form -->
            <form action="#" method="post">
                <div class="fields-w3-agileits">
                    <span class="fa fa-dollar" aria-hidden="true"></span>
                    <?php
                    // put your code here
                    $c = mysqli_connect("localhost", "root", "", "super8") or die("ERROR");
                    $q = "select * from offers";
                    $r = mysqli_query($c, $q);
                    echo '<select name="discount" style="width: 400px; background-color: rgba(0, 0, 0, 0.45); color: white; font-family: Montserrat;font-size:14px">';
                    while ($k = mysqli_fetch_row($r)) {
                        echo "<option>" . "$k[0]" . "</option>";
                    }
                    echo '</select>';
                    ?>

                </div><br>

                <input type="submit" name="del" value="REMOVE" />

                <?php
                if (isset($_POST['del'])) {
                    $offer = $_POST['discount'];
                    $con = mysqli_connect("localhost", "root", "", "super8") or
                            die("ERROR");
                    $do = "delete from offers where offername='$offer'";
                    $ro = mysqli_query($con, $do) or die("ERROR in query");
                    if ($ro) {
                        echo 'Deleted';
                    }
                }
                    ?>
            </form>
        </div>
        <!--// Main-Content-->

        <!-- //courses -->
        <!-- //about -->
        <!-- footer -->
        <div class="w3-agile-footer">
            <div class="container">
                <div class="footer-grids">
                    <div class="col-md-3 footer-grid">
                        <div class="footer-grid-heading">
                            <h4>Address</h4>
                        </div>
                        <div class="footer-grid-info">
                            <p>Eiusmod Tempor inc
                                <span>St Dolore Place,Kingsport 56777.</span>
                            </p>
                            <p class="phone">Phone : +1 123 456 789
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
                                <li><a href="about_MANAGER.php">About</a></li>
                                <li><a href="gallery_MANAGER.php">Gallery</a></li>
                                <li><a href="icons.php">Icons</a></li>
                                <li><a href="typography.php">Typography</a></li>
                            </ul>
                        </div>
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
            <!-- stats -->
            <script src="js/jquery.waypoints.min.js"></script>
            <script src="js/jquery.countup.js"></script>
            <script>
                $('.counter').countUp();
            </script>
            <!-- //stats -->
    </body>

</html>