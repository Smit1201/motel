<?php
if($_REQUEST['id'])
{
    $bid=$_REQUEST['id'];
    $status=$_REQUEST['status'];
    $rno=$_REQUEST['val'];
    $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "super8";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($status == 1) {
                    $sql = "UPDATE booking SET status=3,roomno=$rno WHERE Bid='$bid'";
                    $sqlc="UPDATE room SET status='B' WHERE room_no=$rno";
                    $r = mysqli_query($conn, $sql);
                    $r1=mysqli_query($conn, $sqlc);
                }
}
?>