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
        <form method="post">
            <?php
                $con = mysqli_connect("localhost", "root", "", "super8");

                if (!$con) {
                    echo 'no connection ';
                }

                if (mysqli_select_db($con, 'booking')) {
                    echo 'database is not selected';
                }

                $sql = "select * from booking";
                $records = mysqli_query($con, $sql);
                require('fpdf181/fpdf.php');

                $pdf = new FPDF();
                $pdf->AddPage();
                $pdf->SetFont('Arial', 'B', 7);

                $pdf->cell(20, 10, "NAME", 1, 0, 'C');
                $pdf->cell(21, 10, "EMAIL-ID", 1, 0, 'C');
                $pdf->cell(20, 10, "CONTACT", 1, 0, 'C');
                $pdf->cell(20, 10, "COUNTRY", 1, 0, 'C');
                $pdf->cell(20, 10, "CH-IN", 1, 0, 'C');
                $pdf->cell(20, 10, "CH-OUT", 1, 0, 'C');
                $pdf->cell(20, 10, "TYPE", 1, 0, 'C');
                $pdf->cell(20, 10, "ROOM", 1, 0, 'C');
                $pdf->cell(20, 10, "ADULT", 1, 0, 'C');
                $pdf->cell(20, 10, "CHILD", 1, 1, 'C');

                $pdf->SetFont('Arial', '', 5);
                while ($row = mysqli_fetch_array($records)) {
                    $pdf->cell(20, 10, $row['name'], 1, 0, 'C');
                    $pdf->cell(21, 10, $row['eid'], 1, 0, 'C');
                    $pdf->cell(20, 10, $row['pno'], 1, 0, 'C');
                    $pdf->cell(20, 10, $row['contry'], 1, 0, 'C');
                    $pdf->cell(20, 10, $row['checkin'], 1, 0, 'C');
                    $pdf->cell(20, 10, $row['checkout'], 1, 0, 'C');
                    $pdf->cell(20, 10, $row['room_type'], 1, 0, 'C');
                    $pdf->cell(20, 10, $row['numroom'], 1, 0, 'C');
                    $pdf->cell(20, 10, $row['adult'], 1, 0, 'C');
                    $pdf->cell(20, 10, $row['child'], 1, 1, 'C');
                }
                $pdf->Output();
           
            ?>

            </body>
            </html>
