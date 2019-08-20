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
    </head>
    <body>
        <div class="content-wrapper">
            <section class="content-header">

                <h1>
                    Today's Report
                </h1>

            </section>

            <div class="row" style="margin-left:20px; margin-top:20px;">

                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <?php
                                $link = mysqli_connect("localhost", "root", "", "super8") or
                                        die("ERROR");

                                $date = "2018-04-18";
//                        $d1 = "select sum(price) from tbl_order_detail, tbl_order where tbl_order_detail.oid = tbl_order.oid and tbl_order.date = '$date'";
                                $d1 = "select * from  booking where  checkin = '$date'";
                                $r1 = mysqli_query($link, $d1);
                                echo '<table border="2"><tr><td>Name</td><td>EmailID</td><td>PhoneNo.</td><td>Country</td><td>Check-In</td><td>Check-Out</td><td>RoomNumber</td></tr><tr>';
                                while ($v = mysqli_fetch_row($r1)) {
                                    echo '<td>' . $v[1] . '</td>';
                                    echo '<td>' . $v[2] . '</td>';
                                    echo '<td>' . $v[3] . '</td>';
                                    echo '<td>' . $v[4] . '</td>';
                                    echo '<td>' . $v[5] . '</td>';
                                    echo '<td>' . $v[6] . '</td>';
                                    echo '<td>' . $v[12] . '</td></tr>';
                                    $i = $v[0];
                                } 
                                ?>
                            </div>
                        <div class="icon">
                            <i class="fa fa-rupee"></i>
                        </div>
                    </div>
                </div>


                <?php
                // put your code here
                ?>
                </body>
                </html>
