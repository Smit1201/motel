<?php ob_start(); ?>
<?php
if (isset($_POST['submit'])) {
    $offername = $_POST['offername'];
    $offerper = $_POST['discount'];
    $c = mysqli_connect("localhost", "root", "", "super8") or
            die("ERROR");
    //------Insert into table-------
    $q = "insert into offers values('$offername','$offerper')";
    $r = mysqli_query($c, $q) or die("ERROR in query");
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title> Super8 | Cortez </title>
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




        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="mother-grid-inner">
                    <!--header start here-->
                    <!--heder end here-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Inbox</li>
                    </ol>
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
                                        <div class="main-w3layouts-form">
                                            <h2></h2>
                                            <!-- main-w3layouts-form -->
                                            <form action="#" method="post">
                                                <div class="fields-w3-agileits">
                                                    <span class="fa fa-user" aria-hidden="true"></span>
                                                    &nbsp;&nbsp;<input type="text" style="width: 201px" name="offername" required="" placeholder="Offer Name" />
                                                </div>
                                                <div class="fields-w3-agileits"><br>
                                                    <span class="fa fa-dollar" aria-hidden="true"></span>
                                                    &nbsp;&nbsp;&nbsp;<select name="discount" style="width: 200px">
                                                        <option>10%</option>
                                                        <option>20%</option>
                                                        <option>30%</option>
                                                        <option>40%</option>
                                                        <option>50%</option>        
                                                        <option>60%</option>
                                                        <option>70%</option>
                                                        <option>80%</option>
                                                        <option>90%</option>
                                                    </select>
                                                </div><br>

                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-dark" style="width: 100px" name="submit" value="ADD" />
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane text-style" id="tab2">
                                <div class="inbox-right">

                                </div>
                                <div class="tab-pane text-style" id="tab3">
                                    <div class="inbox-right">

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane text-style" id="tab4">
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
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane text-style" id="tab5">
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
                                    </div>
                                </div>
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
                        <li><a href="ManagerPanel.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
                        <li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span><div class="clearfix"></div></a></li>
                        <li id="menu-academico" ><a href="Mtax.php"><i class="fa fa-bar-chart"></i><span>Tax</span><div class="clearfix"></div></a></li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Offers  </span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="M_addOffer.php">Add Offer</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="RM_offer.php">Remove Offer</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="RM_viewoffer.php">View Offer</a></li>
                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-user-plus"></i>  <span>Manage Receptionist</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-boletim" ><a href="REGISTRATION_RES.php">Enroll Receptionist</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="DRES.php">Disable Receptionist</a></li>
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