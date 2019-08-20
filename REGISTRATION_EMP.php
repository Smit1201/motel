<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fullname'];
    $conum = $_POST['ContactNum'];
    $gen = $_POST['Gender'];
    $address = $_POST['Address'];
    $email = $_POST['email'];
    $idp = $_POST['idproof'];
    $c = mysqli_connect("localhost", "root", "", "super8") or
            die("ERROR");
    //------Insert into table-------
        $q = "insert into reg_emp values(NULL,'$fname','$conum','$gen','$address','$email','$idp')";
        $r = mysqli_query($c, $q) or die("ERROR in query");
   
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!DOCTYPE HTML>
<html>

    <head>
        <title>Registration Form</title>
        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Groovy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
              />
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
        <link href="css/font-awesome.css" rel="stylesheet">
        <!--// Font-Awesome-CSS -->
        <!-- Required Css -->
        <link href="css/style_3.css" rel='stylesheet' type='text/css' />
        <!--// Required Css -->
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
        <!--//fonts-->
    </head>

    <body>

        <!--background-->
        <h1></h1>
        <!-- Main-Content -->
        <div class="main-w3layouts-form">
            <h2></h2><a href="HOME_RES.php">Back to Home Page</a>
            <!-- main-w3layouts-form -->
            <form action="#" method="post"><br>
                
                <div class="fields-w3-agileits">
                    <span class="fa fa-name" aria-hidden="true"></span>
                    <input type="text" name="fullname" required="" placeholder="FullName" />
                </div>
                <div class="fields-w3-agileits">
                    <span class="fa fa-phone" aria-hidden="true"></span>
                    <input type="text" name="ContactNum" required="" placeholder="Contact Number" />
                </div>

                <div class="fields-w3-agileits" style='color: white'>
                    <span class="fa fa-male" aria-hidden="true"></span>
                    Male<input type="radio" name="Gender" value="Male" checked="checked" />
                    <span class="fa fa-female" aria-hidden="true"></span>
                    Female<input type="radio" name="Gender" value="Female" />
                </div>
                <div class="fields-w3-agileits">
                    <span class="fa address" aria-hidden="true"></span>
                    <input type="text" name="Address" required="" placeholder="Address" />
                </div>
                <div class="fields-w3-agileits">
                    <span class="fa fa-mail-forward " aria-hidden="true"></span>
                    <input type="text" name="email" required="" placeholder="Email" />
                </div>
                <div class="fields-w3-agileits">
                    <span class="fa fa-info-circle " aria-hidden="true"></span>
                    <input type="text" name="idproof" required="" placeholder="Identity Proof" />
                </div>

                <div class="remember-section-wthree">
                    <div class="clear"> </div>
                </div>
                <input type="submit" name="submit" value="Register" />
            </form>
        </div>
    </body>


</html>