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
        <?php
        // put your code here
        
        $con= mysqli_connect("localhost","root","");
        
        if(!$con)
        {
            echo 'no connection ';
        }
        
        if(mysqli_select_db($con, 'tutorial'))
        {
            echo 'database is not selected';
        }
        
        $sql="select * from user";
        $records=mysqli_query($con,$sql);
        
        require 'library/fpdf.php';
        $pdf=new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        $pdf->cell(40,10,"NAME",1,0,'C');
        $pdf->Output();
        ?>
    </body>
</html>