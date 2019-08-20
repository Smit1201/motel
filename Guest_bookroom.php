<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $eid = $_POST['eid'];
    $pno = $_POST['pno'];
    $country = $_POST['country'];
    $datepicker = $_POST['datepicker'];
    $datepicker1 = $_POST['datepicker1'];
    $room = $_POST['room'];
    $roomNum = $_POST['roomNum'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $cnum = $_POST['cnum'];
    $exd = $_POST['exd'];



    $c = mysqli_connect("localhost", "root", "", "super8") or
            die("ERROR");
    //------Insert into table-------
    $q = "insert into booking values(NULL,'$name','$eid','$pno','$country','$datepicker','$datepicker1','$room','$roomNum','$adult','$child',0,0,'$cnum','$exd')";
    $r = mysqli_query($c, $q) or die("ERROR in query");
    if ($r) {
        header('location:HOME_GUEST.php');
    } else {
        echo 'error';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book a Room Flat Responsive Widget Template :: w3layouts</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <link href="css/style_2.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    </head>
    <body class="bg agileinfo">
        &nbsp;&nbsp;<h3><a href="HOME_GUEST.php" style="color:white">Back to Home Page</a></h3>
        <h1 class="agile-head text-center">Book a Room</h1>
        <div class="container-w3">
            <div class="content-1-w3layouts">
                <img src="images/92913296(6).jpg" alt="room" style="width: 620px;height: 250px"/>
            </div>
            <div class="form_w3layouts">
                <form action="#" method="post" class="agile_form">
                    <div class="agileits-left">
                        <input type="text" name="name" class="username" placeholder="Name" required="">
                    </div>
                    <div class="agileits-right">
                        <input type="email" name="eid" class="email" placeholder="example@email.com" required="">
                    </div>
                    <div class="agileits-left">
                        <input type="text" name="cnum" class="username" placeholder="CardNumber" required="">
                    </div>
                    <div class="agileits-right">
                        <input type="text" name="exd" class="number" placeholder="00/00" required="">
                    </div>
                    <div class="clear"></div>
                    <div class="agileits-left">
                        <input type="text" name="pno" class="username" placeholder="phone number" required="">
                    </div>
                    <div class="agileits-right country">
                        <?php
                        $c = mysqli_connect("localhost", "root", "", "super8") or die("ERROR");
                        $q = "select * from country";
                        $r = mysqli_query($c, $q);
                        echo '<select name="country">';
                        while ($k = mysqli_fetch_row($r)) {
                            echo "<option>" . "$k[0]" . "</option>";
                        }
                        echo '</select>';
                        ?>
                    </div>
                    <div class="clear"></div>
                    <div class="checkin agileits-left" style="color: white;font-style: oblique">
                        Check in<input placeholder="Check in" class="date" name="datepicker" id="datepicker" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = '';
                                }" required=""/>
                    </div>
                    <div class="checkin agileits-right" style="color: white; font-style: oblique">
                        Check out<input placeholder="Check out" class="date" name="datepicker1" id="datepicker1" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = '';
                                }" required=""/>
                    </div>
                    <div class="clear"></div>
                    <div class="section_class_agileits">
                        <select required name="room">
                            <option value="King Room">King Room</option>
                            <option value="Twin Room">Twin Room</option>
                        </select>
                    </div>	
                    <div class="section_class_agileits">
                        <input type="number" name="roomNum" placeholder="Number of Rooms" min="1" style="height: 34px">
                    </div>
                    <div class="section_class_agileits">
                        <input type="number" name="adult" placeholder="Adults" min="1" style="height: 34px">				</div> 
                    <div class="section_class_agileits">
                        <input type="number" name="child" placeholder="Children" min="0" style="height: 34px">
                    </div>

                    <div class="clear"></div>
                    <div class="submit">
                        <input type="submit" name="submit" value="Book Now!">
                    </div> 
                </form>
            </div>			
        </div>
        <div class="agileits-w3layouts-copyright text-center">
        </div>	
        <!--start-date-piker-->
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <script src="js/jquery-ui.js"></script>
        <script>
                            $(function () {
                                $("#datepicker,#datepicker1").datepicker();
                            });
        </script>
        <!-- /End-date-piker -->
    </body>
</html>

