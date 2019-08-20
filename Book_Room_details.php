<?php
if (isset($_POST['Accept'])) {
    header('location:index.php');
} else {
    echo '';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SUPER 8|Room</title>
        <style>
            body{
                padding-right: 0px;
            }
        </style><!-- custom-theme -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Mug house Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    </head>
    <body style="padding-right: 0px">
        <form method="post">
            <!-- banner -->
            <div class="banner-1">
                <div class="header-bottom">
                    <!-- header -->
                    <div class="header">
                        <div class="container">
                            <div class="w3_agile_logo">
                                <h1><a href="HOME_RES.php"><span style="color: yellow">Super</span>Eight</a></h1>
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
                                                    <a href="HOME_RES.php"><span>Home</span></a></li>
                                                <li><a href="gallery_RES.php"><span>Gallery</span></a></li>
                                                <li><a href="REGISTRATION_EMP.php"><span>Enroll Staff</span></a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Check...</span> <b class="caret"></b></a>
                                                    <ul class="dropdown-menu agile_short_dropdown">
                                                        <li><a href="icons.php">Check-In</a></li>
                                                        <li><a href="typography.php">Check-Out</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Manage">Manage Details</span> <b class="caret"></b></a>
                                                    <ul class="dropdown-menu agile_short_dropdown">
                                                        <li><a href="Book_Room.php">Book Room</a></li>
                                                        <li><a href="Modify_romm.php">Modify Room</a></li>
                                                        <li><a href="Cancle_Room.php">Cancle Room</a></li>
                                                        <li><a href="Cancle_Room.php">View Guest Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact_RES.php"><span>Contact</span></a></li>
                                                <li><a href="about_RES.php"><span>About Us</span></a></li>
                                                <select>
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
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

            $sql = "SELECT * FROM booking";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                // output data of each row
                while ($row = mysqli_fetch_row($result)) {
                    ?> 
                    <table >
                        <tr>
                            <td> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_<?php echo $row[0]; ?>" style="width: 1000px; height: 50px"><?php echo "From " . "$row[4] " . "$row[1]" . " Want to Book " . "$row[7]"; ?></button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal_<?php echo $row[0]; ?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><?php echo "$row[1]"; ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo "Email-Id:  " . "$row[2]"; ?></p>
                                                <p><?php echo "Phone No:  " . "$row[3]"; ?></p>
                                                <p><?php echo "Country:  " . "$row[4]"; ?></p>
                                                <p><?php echo "Check-In:  " . "$row[5]"; ?></p>
                                                <p><?php echo "Check-Out:  " . "$row[6]"; ?></p>
                                                <p><?php echo "Room Type:  " . "$row[7]"; ?></p>
                                                <p><?php echo "Number of Room:  " . "$row[8]"; ?></p>
                                                <p><?php echo "Adults:  " . "$row[9]"; ?></p>
                                                <p><?php echo "Child:  " . "$row[10]"; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="Accept"class="btn btn-info" >Accept</button>
                                                <button type="submit" name="Deny" class="btn btn-danger" data-dismiss="modal">Deny</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <?php
                }
            } else {
                
            }
            ?>

            <!--    //about 
                footer -->
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
                                    <li><a href="about_RES.php">About</a></li>
                                    <li><a href="gallery_RES.php">Gallery</a></li>
                                    <li><a href="icons.php">Icons</a></li>
                                    <li><a href="typography.php">Typography</a></li>
                                    <li><a href="contact_RES.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
            </div>
            <!--//footer -->
            <!--start-smooth-scrolling -->
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
            <!--start-smooth-scrolling 
            for bootstrap working -->
            <script src="js/bootstrap.js"></script>
            <!--//for bootstrap working -->
            <!--here stars scrolling icon -->
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
            <!--//here ends scrolling icon -->
            <!--stats -->
            <script src="js/jquery.waypoints.min.js"></script>
            <script src="js/jquery.countup.js"></script>
            <script>
                $('.counter').countUp();
            </script>
        </form>
        <!--//stats-->
    </body>
</html>
