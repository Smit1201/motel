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
        <form method="post">
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
                                            echo '<h1>' . "Report of Manager and Receptionist" . '</h1>';
                                            $link = mysqli_connect("localhost", "root", "", "super8") or
                                                    die("ERROR");

//                        $d1 = "select sum(price) from tbl_order_detail, tbl_order where tbl_order_detail.oid = tbl_order.oid and tbl_order.date = '$date'";
                                            $d1 = "select * from  reg_manager where  status = 1";
                                            $d2 = "select * from  reg_res where  status = 1";

                                            $r1 = mysqli_query($link, $d1);
                                            $r2 = mysqli_query($link, $d2);
                                            echo '<table border="5"><tr><td>Name</td><td>PhoneNo.</td><td>Gender</td><td>City</td><td>EmailID</td><td>ID proof</td><td>Post</td></tr><tr>';
                                            while ($v = mysqli_fetch_row($r1)) {
                                               while ($v1 = mysqli_fetch_row($r2)) {
                                             
                                                echo '<td>' . $v[1] . '</td>';
                                                echo '<td>' . $v[2] . '</td>';
                                                echo '<td>' . $v[3] . '</td>';
                                                echo '<td>' . $v[4] . '</td>';
                                                echo '<td>' . $v[5] . '</td>';
                                                echo '<td>' . $v[6] . '</td>';
                                                echo '<td>Manager</td></tr>';
                                                echo '<td>' . $v1[1] . '</td>';
                                                echo '<td>' . $v1[2] . '</td>';
                                                echo '<td>' . $v1[3] . '</td>';
                                                echo '<td>' . $v1[4] . '</td>';
                                                echo '<td>' . $v1[5] . '</td>';
                                                echo '<td>' . $v1[6] . '</td>';
                                                echo '<td>Receptionist</td></tr>';
                                            }}
                                            ?> 
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane text-style" id="tab2">

                                </div>
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
                                <li id="menu-academico-avaliacoes" ><a href="report.php">Guest</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="staffr.php">Staff</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="rmreport.php">Receptionist & Manager</a></li>
                                

                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-user-plus"></i>  <span>Manage Manager</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-boletim" ><a href="REGISTRATION_Manager.php">Enroll Manager</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="DMANAGER_A.php">Disable Manager</a></li>
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
        </form>
    </body>
</html>


<?php ob_end_flush(); ?>