<?php


include('connection.php');
session_start();

$p = $_SESSION['username'];

if(isset($_REQUEST['x']))
{
	$a=intval($_GET['x']);

    $sql = "INSERT INTO table_recommendation (l_id, book_id,date, status)
        VALUES((SELECT l_id from login where username = '$p'),$a, now(), '0')";

            if(mysqli_query($con,$sql))
                
                
            {
                header ("location:../faculty_recommend.php");
                ?>
                <script> alert ("Success !!!")</script>
                <?php
                
            }

}

?>