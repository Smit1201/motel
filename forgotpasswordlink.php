<?php
session_start();
ob_start();
?>
<?php

if(!isset($_GET["newpassword"])&&!isset($_GET["confirmpassword"]))
{
  
     $_GET['username'];
     $_SESSION['name'] = $_GET['username'];
}

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>change Password</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet">
        <link href="css/animation.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--Custom Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!--[if lt IE 9]> 	
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <style>
            .a{
                margin-right: 10px;
                margin-left: -10px;
            }

        </style>
        <script>
            function validateForm() {
                var x = document.forms["myform"]["txtid"].value;
                if (x == "") {
                    alert("Id must be filled out");
                    return false;
                }
            }
        </script>
    </head>
    <body><center><form  name="myform"  method="get" onsubmit="return validateForm()">
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span></button>
                            <h1><span>SUPER</span><span style="color:red">EIGHT</span></a></h1>
                    </div>
                </div>
                        </nav>


                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main a">
                            <div class="row">
                                <ol class="breadcrumb">
                                    <li><a href="LOGIN.php">
                                            <em class="fa fa-home"></em>
                                        </a></li>
                                        <span style="color:green">Forgot Password</span>
                                </ol>
                            </div><!--/.row-->
                            
                           
                            <table>
                                <br>
                                New Password:<input type="password" name="newpassword" class="form-control" required=""min="8">
                                <br>
                                Confirm password:<input type="password" name="confirmpassword" class="form-control" required="" min="8">
                                <br>

                                <input type="submit" class="btn btn-success" name="btn_change" value="change password">
                            
                        </div>
            
                            <?php
                           
                            if (isset($_GET['btn_change'])) {
                                
                                $newpass = $_GET['newpassword'];
                                $confirmpass = $_GET['confirmpassword'];
                                $npass=md5($newpass);


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
                                $name="";
                                if ($_GET["newpassword"] === $_GET["confirmpassword"]) {
                                    echo"success!";
                                    $sql = "UPDATE reg_guest SET pass='$npass' WHERE email='$name'";
                                    echo $name;
                                    if ($conn->query($sql) === TRUE) {
                                        echo "Password change successfully";
                                    } else {
                                        echo "Error updating record: " . $conn->error;
                                    }
                                } else
                                    echo "<script>alert('Password not match ');</script>";

                            


                                $conn->close();
                            }
                            ?>
        </form></center>
                            </body>
                            </html>
                            <?php
ob_end_flush();
?>