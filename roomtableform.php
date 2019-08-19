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
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button1 {
                background-color: white; 
                color: black; 
                border: 2px solid #4CAF50;
            }
            .button1:hover {
                background-color: #4CAF50;
                color: white;
            }
            .button3 {
                background-color: white; 
                color: black; 
                border: 2px solid #f44336;
            }

            .button3:hover {
                background-color: #f44336;
                color: white;
            }

            .button4 {
                background-color: white;
                color: black;
                border: 2px solid #e7e7e7;
            }

            .button4:hover {background-color: #e7e7e7;}

        </style>
        <?php
        $sql = "SELECT * FROM room";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            while ($row = $result->fetch_row()) {
                if ($row[1] == "A") {
                    echo "<button class=button1>$row[0]</button>";
                }
                if ($row[1] == "B") {
                    echo "<button class=button3>$row[0]</button>";
                }
                if ($row[1] == "O") {
                    echo "<button class=button4>$row[0]</button>";
                }
            }
        }
        echo "</table>";
        ?>
        <style>.a{background-color: #F44336}</style>
    </head>
    <body>

        <form method="post">

            <?php
// put your code here
            ?></form>
    </body>
</html>
