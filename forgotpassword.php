<?php
require 'mailerClass/PHPMailerAutoload.php';
?>
<html>
    <head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMS | Password Recovery</title>	
        <!-- core CSS -->
        <link href="http://home.xeroneit.net/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://home.xeroneit.net/bootstrap/css/datepicker.css" rel="stylesheet">
        <link href="http://home.xeroneit.net/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://home.xeroneit.net/assets/css/animate.min.css" rel="stylesheet">
        <link href="http://home.xeroneit.net/assets/css/main.css" rel="stylesheet">
        <link href="http://home.xeroneit.net/assets/css/custom.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="http://home.xeroneit.net/assets/js/html5shiv.js"></script>
        <script src="http://home.xeroneit.net/assets/js/respond.min.js"></script>
        <![endif]-->     

        <!-- for RTL support -->

        <script type="text/javascript" src="http://home.xeroneit.net/assets/js/jquery.js"></script>
        <!-- end of for modal effect -->
        <script type="text/javascript" src="http://home.xeroneit.net/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://home.xeroneit.net/bootstrap/js/bootstrap-datepicker.js"></script>


        <script src="http://home.xeroneit.net/plugins/xregexp/xregexp.js" type="text/javascript"></script>



        <link rel="shortcut icon" href="img/logo1.png">    
    </head>
    <body class="app_body" style="">
        <div class="col-xs-12">             
            <h1><span>SUPER</span><span style="color:red">EIGHT</span></h1> 
        </div> 

        <div class="container-fluid sticky_top no_margin">
            <div class="row">
                <div class="col-xs-12 background_white" style="height:80px">

                </div>
            </div>
        </div>

        <div class="container-fluid front_content">
            <!-- page content -->
            <br>
            <style>#recovery_form{text-align:center;}</style>
            <style>#wait{padding-top:20px;padding-left:10px;}</style>

            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 border_gray grid_content padded background_white">

                    <div class="account-wall" id="recovery_form"> 
                        <div class="form-group">
                            <div id="msg"></div>
                            <form method="post">
                                <label class="col-xs-12" style="margin-left:0;padding-left:0;">Enter Your Email</label>
                                <input type="email" name="email"  placeholder="example@example.com">
                                </div>
                                <div class="form-group">
                                    <input type="submit" style="margin-top:20px" value="Send Recovery Data"class="btn btn-warning btn_lg"  name="btn_send">
                                    <span id="wait"></span>  
                            </form>
                        </div>  

                    </div>      
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer id="footer" class="sticky_bottom">
            <div class="container-fluid text-center">
                <div class="row">

                </div>
            </div>
        </footer>
        <!-- footer --> 

        <?php
        if (isset($_POST['btn_send'])) {

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
            $user = $_POST['email'];
            //$mail ->Host = "tls.gmail.com";
            $mail->Host = 'smtp.gmail.com';
            //$mail->Host = 'tls://smtp.gmail.com';
            $mail->Port = 587; // or 587
            $mail->IsHTML(true);
            $mail->Username = "srvaidya2468@gmail.com"; // This is Sender Email 
            $mail->Password = "riya1998IT";  // On Less Secure app on Email id 
            $mail->SetFrom("srvaidya2468@gmail.com");
            $mail->Subject = "Forgetpassword";
            $mail->Body = "http://localhost/home/forgotpasswordlink.php?username=" . $user;
            $mail->AddAddress($user); // This is Target Address
            echo $user;
            if (!$mail->Send()) {
                echo "<h3>Mail Not Sent";
                echo "$mail->ErrorInfo</h3>";
            } else {
                echo "<h2>Mail Sent</h2>";
            }
        }
        ?>

    </body>

</html>