<?php
ob_start();
session_start();
if (isset($_POST['submit'])) {
    $uname = $_POST['Username'];
    $pass = $_POST['Password'];
    if($uname=='admin'){
        if($pass=='admin')
        {
            header("Location: AdminPanel.php");
        }
    }
   
}

if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        extract($_POST);
        $c = mysqli_connect("localhost", "root", "", "super8") or
                die("ERROR");
        $rs = mysqli_query($c, "select * from reg_guest where email='" . $Username . "' and pas='" . $Password . "' ");
        if ($rs != false) {
            $result = mysqli_fetch_assoc($rs);
            if ($result != null) {
                echo "Welcome User " . $result["fname"];
                $_SESSION["username"] = $Username;
                if (isset($_POST["rem"])) {
                    setcookie("User", $Username, time() + 60 * 60 * 5);
                    setcookie("pass", $Password, time() + 60 * 60 * 5);
                    echo "reset successfull";
                }
                header("Location: HOME_GUEST.php");
            }
        }
        $user = "";
        $pass = "";
        if (isset($_COOKIE["User"])) {
            $user = $_COOKIE["User"];
            $pass = $_COOKIE["pass"];
        }

        $rs = mysqli_query($c, "select * from reg_manager where email='" . $Username . "' and pas='" . $Password . "' ");
        if ($rs != false) {
            $result = mysqli_fetch_assoc($rs);
            if ($result != null) {
                echo "Welcome User " . $result["fname"];
                $_SESSION["Musername"] = $Username;
                if (isset($_POST["rem"])) {
                    setcookie("User", $Username, time() + 60 * 60 * 5);
                    setcookie("pass", $Password, time() + 60 * 60 * 5);
                }
                header("Location: ManagerPanel.php");
            }
        }
        $user = "";
        $pass = "";
        if (isset($_COOKIE["User"])) {
            $user = $_COOKIE["User"];
            $pass = $_COOKIE["pass"];
        }
        $rs = mysqli_query($c, "select * from reg_res where email='" . $Username . "' and pas='" . $Password . "' ");
        if ($rs != false) {
            $result = mysqli_fetch_assoc($rs);
            if ($result != null) {
                echo "Welcome User " . $result["fname"];
                $_SESSION["Rusername"] = $Username;
                if (isset($_POST["rem"])) {
                    setcookie("User", $Username, time() + 60 * 60 * 5);
                    setcookie("pass", $Password, time() + 60 * 60 * 5);
                }
                header("Location: HOME_RES.php");
            }
        }
    }

    $user = "";
    $pass = "";
    if (isset($_COOKIE["User"])) {
        $user = $_COOKIE["User"];

        $pass = $_COOKIE["pass"];
    } else {
        echo 'Enter valid username or password';
    }
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
        <title>Login Form</title>
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
        <link href="css/font-awesome_1.css" rel="stylesheet">
        <!--// Font-Awesome-CSS -->
        <!-- Required Css -->
        <link href="css/style_1.css" rel='stylesheet' type='text/css' />
        <!--// Required Css -->
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
        <!--//fonts-->
    </head>

    <body>
        <!--background-->

        <!-- Main-Content -->
        <div class="main-w3layouts-form">
            <form method="Post" action="index.php">
                <P style="color: white" ><span class="fa fa-hand-o-left" aria-hidden="true"></span>
                    <input type="submit" name="bsub" value="Back to home"></P></form><br>
            <h2>Login to your account</h2>
            <!-- main-w3layouts-form -->
            <form action="#" method="post">


                <div class="fields-w3-agileits">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <input type="text" name="Username" value="<?php echo isset($user) ? $user : ""; ?>" required="" placeholder="Username" />
                </div>
                <div class="fields-w3-agileits">
                    <span class="fa fa-key" aria-hidden="true"></span>
                    <input type="password" name="Password" value="<?php echo isset($pass) ? $pass : ""; ?>" required="" placeholder="Password" />
                </div>
                <div class="remember-section-wthree">
                    <ul>
                        <li>
                            <label class="anim">
                                <input type="checkbox" name="rem" class="checkbox">
                                <span> Remember me ?</span> 
                            </label>
                        </li>
                        <li> <a href="forgotpassword.php">Forgot password?</a> </li>
                    </ul>
                    <ul><br><p style="color: white;">No Member Yet?</p>
                        <p style="color: white;"><span class="fa fa-hand-o-down" aria-hidden="true"></span></p>
                        <li> <a href="REGISTRATION_GUEST.php"><p>click here</p></a> </li></ul>
                    <div class="clear"> </div>
                </div>
                <input type="submit" name="submit" value="Login" />
            </form>
        </div>
        <!--// Main-Content-->
        <!-- copyright -->

        <!--// copyright -->
        <!--//background-->
    </body>

</html>