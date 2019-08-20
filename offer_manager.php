<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Super8 Motel | icones </title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
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
            td, th {

                text-align: left;
                color: red;
                padding: 8px;
            }
        </style>
        <style>
            img:hover {
                -webkit-transform: scaleX(-1);
                transform: scaleX(-1);
            }
        </style>

    </head>
    <body>

        <div class="banner">
            <div class="header-bottom">
                <div class="header">
                    <div class="container">
                        <div class="w3_agile_logo">
                            <h1><a href="HOME_MANAGER.php"><span style="color: yellow">SUPER</span>EIGHT</a></h1>
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
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Manage">View</span> <b class="caret"></b></a>
                                                <ul class="dropdown-menu agile_short_dropdown">
                                                    <li><a href="offer_manager.php">Offers</a></li>  
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
                <!-- header -->    </div>
            <h1 style="color: red"></h1>
        </div>
        <!-- //banner -->
        <div style="background-image: url('images/w2.gif')">

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

            $sql = "SELECT * FROM offers where offrerpre=10";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?><tr><td> <img src="images/10.jpg" alt="" style="width: 250px;height: 250px; border-radius:500px ; box-shadow: 2px 2px 40px yellowgreen"/> </td><?php
                    echo "<td><h1>" . strtoupper($row["offername"]) . "</h1></td></tr>";
                }
                echo "</table>";
            } else {
                
            }
            ?>

            <br><?php
            $sql = "SELECT * FROM offers where offrerpre=20";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?><tr><td> <img src="images/20.jpg" alt="" style="width: 250px;height: 250px; border-radius:500px ; box-shadow: 2px 2px 40px yellowgreen"/> </td><?php
                    echo "<td><h1>" . strtoupper($row["offername"]) . "</h1></td></tr>";
                }
                echo "</table>";
            } else {
                
            }
            ?>

                <?php
                $sql = "SELECT * FROM offers where offrerpre=30";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?><tr><td> <img src="images/30.jpg" alt="" style="width: 250px;height: 250px; border-radius:500px ; box-shadow: 2px 2px 40px yellowgreen"/> </td><?php
                        echo "<td><h1>" . strtoupper($row["offername"]) . "</h1></td></tr>";
                    }
                    echo "</table>";
                } else {
                    
                }
                ?>
                <?php
                $sql = "SELECT * FROM offers where offrerpre=40";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?><tr><td> <img src="images/40.jpg" alt="" style="width: 250px;height: 250px; border-radius:500px ; box-shadow: 2px 2px 40px yellowgreen"/> </td><?php
                            echo "<td><h1>" . strtoupper($row["offername"]) . "</h1></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        
                    }
                    ?>
                    <?php
                    $sql = "SELECT * FROM offers where offrerpre=50";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table>";
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?><tr><td> <img src="images/50.jpg" alt="" style="width: 250px;height: 250px; border-radius:500px ; box-shadow: 2px 2px 40px yellowgreen"/> </td><?php
                            echo "<td><h1>" . strtoupper($row["offername"]) . "</h1></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        
                    }
                    ?>
                    <?php
                    $sql = "SELECT * FROM offers where offrerpre=60";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table>";
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?><tr><td> <img src="images/60.jpg" alt="" style="width: 250px;height: 250px; border-radius:500px ; box-shadow: 2px 2px 40px yellowgreen"/> </td><?php
                            echo "<td><h1>" . strtoupper($row["offername"]) . "</h1></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        
                    }
                    ?>
                    <?php
                    $sql = "SELECT * FROM offers where offrerpre=70";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table>";
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?><tr><td> <img src="images/70.jpg" alt="" style="width: 250px;height: 250px; border-radius:500px ; box-shadow: 2px 2px 40px yellowgreen"/> </td><?php
                            echo "<td><h1>" . strtoupper($row["offername"]) . "</h1></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        
                    }
                    ?>
                    <?php
                    $sql = "SELECT * FROM offers where offrerpre=80";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table>";
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?><tr><td> <img src="images/80.jpg" alt="" style="width: 250px;height: 250px; border-radius:500px ; box-shadow: 2px 2px 40px yellowgreen"/> </td><?php
                            echo "<td><h1>" . strtoupper($row["offername"]) . "</h1></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        
                    }
                    $conn->close();
                    ?>



        </div>
        <!-- //icons -->
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
                                <li><a href="about.php">About</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="icons.php">Icons</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="contact.php">Contact</a></li>
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
            <script src='js/jquery.typer.js'></script>
            <script>
                var win = $(window),
                        foo = $('#typer');

                foo.typer(['Luxury Hotels', 'Hotels & Resorts', 'Luxury Resorts']);

                // unneeded...
                win.resize(function () {
                    var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

                    foo.css({
                        fontSize: fontSize * .8 + 'px'
                    });
                }).resize();
            </script><!--tabs-->
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

