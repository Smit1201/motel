<?php ob_start(); ?>
<?php
require 'mailerClass/PHPMailerAutoload.php';
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
            $bid = $_GET['bid'];
            $status = $_GET['status'];


            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "super8";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($status == 2) {
                $sql = "DELETE FROM booking WHERE Bid='$bid'";
                $r = mysqli_query($conn, $sql);
                
                 $mail = new PHPMailer();
                $mail->IsSmtp();
                $mail->SMTPDebug = 0;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';

                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $user = "srvaidya2468@gmail.com";
                //$mail ->Host = "tls.gmail.com";
                $mail->Host = 'smtp.gmail.com';
                //$mail->Host = 'tls://smtp.gmail.com';
                $mail->Port = 587; // or 587
                $mail->IsHTML(true);
                $mail->Username = "srvaidya2468@gmail.com"; // This is Sender Email 
                $mail->Password = "riya1998IT";  // On Less Secure app on Email id 
                $mail->SetFrom("srvaidya2468@gmail.com");
                $mail->Subject = "Cancalation of Booking";
                $mail->Body =$user." We want to sincerely apologize for cancalation of your booking..."?><img src="images/6.jpg" alt=""/>;<?php
                $mail->AddAddress($user); // This is Target Address
                echo $user;
                if (!$mail->Send()) {
                    echo "<h3>Mail Not Sent";
                    echo "$mail->ErrorInfo</h3>";
                } else {
                    echo "<h2>Mail Sent</h2>";
                }
            
            } else if ($status == 1) {
                $sql = "UPDATE booking SET status=1 WHERE Bid='$bid'";
                $r = mysqli_query($conn, $sql);
                
                $mail = new PHPMailer();
                $mail->IsSmtp();
                $mail->SMTPDebug = 0;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';

                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $user = "srvaidya2468@gmail.com";
                //$mail ->Host = "tls.gmail.com";
                $mail->Host = 'smtp.gmail.com';
                //$mail->Host = 'tls://smtp.gmail.com';
                $mail->Port = 587; // or 587
                $mail->IsHTML(true);
                $mail->Username = "srvaidya2468@gmail.com"; // This is Sender Email 
                $mail->Password = "riya1998IT";  // On Less Secure app on Email id 
                $mail->SetFrom("srvaidya2468@gmail.com");
                $mail->Subject = "Confiremation of Booking";
                $mail->Body =$user."Thank You for giving us the opportunity to stay at our Motel. We will do our best to be sure you ... Thank you for making your reservation with us at the Super8, Our location is 505 East Main Street, Cortez, CO 81321,United States of America";
                $mail->AddAddress($user); // This is Target Address
                echo $user;
                if (!$mail->Send()) {
                    echo "<h3>Mail Not Sent";
                    echo "$mail->ErrorInfo</h3>";
                } else {
                    echo "<h2>Mail Sent</h2>";
                }
            }
            header("Location:AdminPanel.php");
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
                                                <h4 style="color:black"><?php echo "Email-Id:  " . "$row[1]"; ?></h4><br>
                                                <table class="table table-condensed" border="2" style="color:black;border-color: black;border-style: double;width:100%;"><tr><td><B><font style="color: black"></font></B></td>
                                                        <td><B><font style="color: black"><?php echo " Feedback:  " . "$row[2] "; ?></font></B></td>
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