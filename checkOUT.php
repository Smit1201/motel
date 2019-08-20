<?php ob_start(); ?>
<?php include 'roomtableform.php'; ?>
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
                $sql = "UPDATE booking SET status=4 WHERE Bid='$bid'";

                $r = mysqli_query($conn, $sql);
            }
            header("Location:indexs.php?bid=$bid");
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

                                                <a href="HOME_RES.php">Back to Home Page</a>
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

                                        $sql = "SELECT * FROM booking WHERE status=3";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {

                                            // output data of each row
                                            while ($row = mysqli_fetch_row($result)) {
                                                ?> 
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="modal-body">
                                                                <h3><?php echo "NAME :  " . "$row[1]"; ?></h3><br>
                                                                <h4><?php echo "Email-Id:  " . "$row[2]"; ?></h4><br>
                                                                <table class="table table-condensed" border="2" style="color:black;border-color: black;border-style: double;width:100%;"><tr><td><B><font style="color: black"><?php echo "Phone No:  " . "$row[3]"; ?></font></B></td>
                                                                        <td><B><font style="color: black"><?php echo " Country:  " . "$row[4] "; ?></font></B></td>
                                                                        <td><B><font style="color: black"><?php echo "Check-In:  " . "$row[5]"; ?></font></B></td>
                                                                        <td><B><font style="color: black"><?php echo "Check-Out:  " . "$row[6]"; ?></font></B></td></tr>
                                                                    <tr><td><B><font style="color: black"><?php echo "Room Type:  " . "$row[7]"; ?></font></B></td>
                                                                        <td><B><font style="color: black"><?php echo "Number of Room:  " . "$row[8]"; ?></font></B></td>
                                                                        <td><B><font style="color: black"><?php echo "Adults:  " . "$row[9]"; ?></font></B></td>
                                                                        <td><B><font style="color: black"><?php echo "Child:  " . "$row[10]"; ?></font></B></td>
                                                                        <td><B><font style="color: black"><?php
                                        echo "RoomNo:  " . "$row[12]";
                                        $GLOBALS['rno'] = $row[12];
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "super8";

                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                      
                                            $sqla = "UPDATE room SET status='A' WHERE room_no=$rno";

                                            $ra = mysqli_query($conn, $sqla);
                                        
                                                ?></font></B></td></tr></table><br>



                                                                <a href='checkOUT.php?bid=<?php echo $row[0]; ?>&status=2' class="btn btn-danger" >checkout</a>


                                                            </div></td>

                                                    </tr>
                                                </table>
                                                <?php
                                            }
                                        } else {
                                            echo "RECORED DOES NOT FOUND";
                                        }
                                        ?>

                                        <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "super8";
                                        if (isset($_POST['Email'])) {
                                            $email = $_POST['Email'];
// Create connection
                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            if (isset($_POST['Deny'])) {
                                                $sql = "UPDATE booking SET status=4 WHERE eid='$email'";
                                                $r = mysqli_query($conn, $sql);
                                            }
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