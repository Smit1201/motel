<?php ob_start(); ?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Inbox :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="css/style_4.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/morris.css" type="text/css"/>
        <!-- Graph CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- //jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->
    </head> 
    <body>

        <?php
        if (!empty($_GET)) {
            $mid = $_GET['mid'];
            $status = $_GET['status'];


            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "super8";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($status == 1) {
                $sql = "UPDATE reg_manager SET status=0 WHERE mid='$mid'";
                $r = mysqli_query($conn, $sql);
            }
            header("Location:DMANAGER_A.php");
        }
        ?>



        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="mother-grid-inner">
                    <!--header start here-->
                    <!--heder end here-->
                    <div class="inbox-mail">
                        <div class="col-md-4 compose w3layouts">

                        </div>
                        <!-- tab content -->
                        <div class="tab-content tab-content-in w3">
                            <div class="tab-pane text-style active" id="tab1">
                                <div class="inbox-right">

                                    <div class="mailbox-content">
                                        <div class="mail-toolbar clearfix">
                                            <div class="float-left">
                                                <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                                </div>


                                            </div>
                                            <div class="float-right">



                                            </div>

                                        </div>
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

                                        $sql = "SELECT * FROM reg_manager WHERE status=1";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {

                                            // output data of each row
                                            while ($row = mysqli_fetch_row($result)) {
                                                ?> 

                                                <div class="modal-body">
                                                    <h3><?php echo "NAME :  " . "$row[1]"; ?></h3><br>
                                                    <font style="color: black"><?php echo "Email-Id:  " . "$row[5]"; ?></font>
                                                    <br><font style="color: black"><?php echo "Phone No:  " . "$row[2]"; ?></font>
                                                    <br> <br><a href='DMANAGER_A.php?mid=<?php echo $row[0]; ?>&status=1' class="btn btn-info">Disable</a>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            echo "RECORED DOES NOT FOUND";
                                        }
                                        ?>



                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane text-style" id="tab4">
                                <div class="tab-pane text-style" id="tab5">

                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!-- script-for sticky-nav -->
                        <script>
                            $(document).ready(function () {
                                var navoffeset = $(".header-main").offset().top;
                                $(window).scroll(function () {
                                    var scrollpos = $(window).scrollTop();
                                    if (scrollpos >= navoffeset) {
                                        $(".header-main").addClass("fixed");
                                    } else {
                                        $(".header-main").removeClass("fixed");
                                    }
                                });

                            });
                        </script>
                        <!-- /script-for sticky-nav -->
                        <!--inner block start here-->
                        <div class="inner-block">

                        </div>
                        <!--inner block end here-->
                    </div>
                </div>
                <!--//content-inner-->
                <!--/sidebar-menu-->
                <div class="sidebar-menu">
                    <header class="logo1">
                        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
                    </header>
                    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                    <div class="menu">
                        <ul id="menu" >
                            <li><a href="AdminPanel.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
                            <li><a href="Galllary.php"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span><div class="clearfix"></div></a></li>
                            <li id="menu-academico" ><a href="inbox.php"><i class="fa fa-bar-chart"></i><span>Tax</span><div class="clearfix"></div></a></li>
                            <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Offers  </span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                <ul id="menu-academico-sub" >
                                    <li id="menu-academico-avaliacoes" ><a href="admin_offer.php">Add Offer</a></li>
                                    <li id="menu-academico-avaliacoes" ><a href="RA_offer.php">Remove Offer</a></li>
                                    <li id="menu-academico-avaliacoes" ><a href="RA_viewoffer.php">View Offer</a></li>
                                </ul>
                            </li>
                            <li id="menu-academico" ><a href="#"><i class="fa fa-book" aria-hidden="true"></i><span> Reports</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                <ul id="menu-academico-sub" >
                                    <li id="menu-academico-avaliacoes" ><a href="fpdf_pdfconverter.php">Guest</a></li>
                                    <li id="menu-academico-avaliacoes" ><a href="button.html">Staff</a></li>
                                    <li id="menu-academico-avaliacoes" ><a href="grid.html">Receptionist</a></li>
                                    <li id="menu-academico-avaliacoes" ><a href="grid.html">Manager</a></li>

                                </ul>
                            </li>
                            <li id="menu-academico" ><a href="#"><i class="fa fa-user-plus"></i>  <span>Manage Manager</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                                <ul id="menu-academico-sub" >
                                    <li id="menu-academico-boletim" ><a href="REGISTRATION_Manager.php">Enroll Manager</a></li>
                                    <li id="menu-academico-avaliacoes" ><a href="signin.html">Disable Manager</a></li>
                                </ul>
                            </li>

                            <li><a href="LOGIN.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  <span>LogOut</span><div class="clearfix"></div></a></li>

                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>		
            </div>
            <script>
                var toggle = true;

                $(".sidebar-icon").click(function () {
                    if (toggle)
                    {
                        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                        $("#menu span").css({"position": "absolute"});
                    } else
                    {
                        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                        setTimeout(function () {
                            $("#menu span").css({"position": "relative"});
                        }, 400);
                    }

                    toggle = !toggle;
                });
            </script>
            <!--js -->
            <script src="js/jquery.nicescroll.js"></script>
            <script src="js/scripts.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            <!-- /Bootstrap Core JavaScript -->	   

    </body>
</html>


<?php ob_end_flush(); ?>