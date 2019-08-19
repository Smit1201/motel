 
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mug house  a Hotel Category Flat Bootstrap Responsive Website Template | Typography :: w3layouts</title>
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
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 24px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button1 {
                background-color: white; 
                color: black; 
                border: 2px solid #4CAF50;
                
            }
            .button1:hover {
                background-color: #4CAF50;
                color: white;
            }
            .button3 {
                background-color: white; 
                color: black; 
                border: 2px solid #f44336;
            }

            .button3:hover {
                background-color: #f44336;
                color: white;
            }

            .button4 {
                background-color: white;
                color: black;
                border: 2px solid #e7e7e7;
            }

            .button4:hover {background-color: #e7e7e7;}

        </style>

    </head>
    <body>
        <!-- banner -->
        <div class="banner-1">
            <div class="header-bottom">
                <div class="header">
                    <div class="container">
                        <div class="w3_agile_logo">
                            <h1><a href="index.php"><span>Mug</span>house</a></h1>
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
                                            <li><a href="index.php"><span>Home</span></a></li>
                                            <li><a href="gallery.php"><span>Gallery</span></a></li>
                                            <li><a href="about.php"><span>About Us</span></a></li>
                                            <li><a href="LOGIN.php"><span>Sign in</span></a></li>
                                            <li><a href="contact.php"><span>Contact</span></a></li>
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
        <!-- typography -->
       
        <div>
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
        ?>
 
       <?php
        $sql = "SELECT * FROM room";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            while ($row = $result->fetch_row()) {
                if ($row[1] == "A") {
                    echo "<button class=button1>$row[0]</button>";
                }
                if ($row[1] == "B") {
                    echo "<button class=button3>$row[0]</button>";
                }
                if ($row[1] == "O") {
                    echo "<button class=button4>$row[0]</button>";
                }
            }
        }
        echo "</table>";
        ?>
        <style>.a{background-color: #F44336}</style>


        </div>
        <!-- //typography -->
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
                    <div class="col-md-3 footer-grid">
                        <div class="footer-grid-heading">
                            <h4>Latest Posts</h4>
                        </div>
                        <div class="w3agile_footer_grid_list">
                            <ul>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i> Vestibulum ante ipsum</li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i> Phasellus at eros</li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i> Mauris eleifend aliquet</li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i> Aliquam vitae tristique</li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i> Pellentesque lobortis</li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i> Class aptent taciti</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <div class="footer-grid-heading">
                            <h4>Twitter Posts</h4>
                        </div>
                        <div class="w3agile_footer_grid_list w3agile-post">
                            <ul>
                                <li>Ut aut reiciendis voluptatibus <a href="#">http://example.com</a> alias, ut aut.
                                    <span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
                                <li>Itaque earum rerum hic tenetur a sapiente <a href="#">http://example.com</a> ut aut.
                                    <span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="agileits-w3layouts-copyright">
                    <p>© 2017 Mug house . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
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

