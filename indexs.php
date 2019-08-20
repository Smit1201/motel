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
            .table
            {
                border-color: brown;
                padding-left: 700px;
                padding-right: 600px;
            }
        </style>
    </head>

    <body>
        <form action="form.php" method="POST">
            <center><table border="5" class="table"><tr><td><h1><span style="color: red">SUPER</span>EIGHT</h1></td></tr></table></center>
            <a href="checkOUT.php">Back to menu</a>
            <table>
                <tr>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "super8";
                    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM tax";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_row($result);
                    }
                    $sql = "SELECT * FROM booking where Bid=" . $_GET['bid'];
                    $result1 = $conn->query($sql);
                    if ($result1->num_rows > 0) {


                        // output data of each row
                        while ($row2 = $result1->fetch_assoc()) {
                            ?><tr><?php
                                $GLOBALS['type'] = $row2['room_type'];
                                if ($GLOBALS['type'] == 'King Room') {
                                    $a = 5000;
                                } else {
                                    $a = 2000;
                                }
                                 $sql = "SELECT * FROM tax";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {

                            // output data of each row
                            while ($row = mysqli_fetch_row($result)) {

                                $tot = $a + ($row[1] * 100 / $a) + ($row[2] * 100 / $a) + ($row[3] * 100 / $a) + ($row[4] * 100 / $a) + ($row[5] * 100 / $a);
                            }
                       
                                echo '<td><h3>Name:</td><td>' . $row2['name'] . '</h3></td></tr>';
                                echo '<td><h3>Email:</h3></td><td>' . $row2['eid'] . '</td></tr>';
                                echo "<tr><td><h3>Contact Number : </td><td>" . $row2['name'] . "</td></tr>";
                                echo "<tr><td><h3>Country : </td><td>" . $row2['contry'] . "</td></tr>";
                                echo "<tr><td><h3>Check IN Date : </td><td>" . $row2['checkin'] . "</td></tr>";
                                echo "<tr><td><h3>Check OUT Date : </td><td>" . $row2['checkout'] . "</td></tr>";
                                echo "<tr><td><h3>Room Type : </td><td>" . $row2['room_type'] . "</td></tr>";
                                echo "<tr><td><h3>Room Price : </td><td>" . $a . "$" . "</td></tr>";
//                                echo "<tr><td><h3>Tax-1 : </td><td>" . $row[1] . "%" . "</h3></td></tr>";
//                                echo "<tr><td><h3>Tax-2 : </td><td>" . $row[2] . "%" . "</h3></td></tr>";
//                                echo "<tr><td><h3>Tax-3 : </td><td>" . $row[3] . "%" . "</h3></td></tr>";
//                                echo "<tr><td><h3>Tax-4 : </td><td>" . $row[4] . "%" . "</h3></td></tr>";
//                                echo "<tr><td><h3>Tax-5 : </td><td>" . $row[5] . "%" . "</h3></td></tr>";
                                echo "<tr><td><h2>Total Amount : </td><td>" . $tot . "$" . "</h2></td></tr>";
                                ?><?php
                            }
                        }
                        ?>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "super8";
                        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        }
                        ?>


                </tr>
            </table>

        </form>

    </body>
</html>
