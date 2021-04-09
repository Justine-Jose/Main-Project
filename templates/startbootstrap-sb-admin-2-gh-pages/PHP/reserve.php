<?php


$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");
session_start();
print_r($_SESSION);
//if(isset($_POST['reserve']));

//{



        $title = $_POST['book_title'];
        $p = $_SESSION['username'];
        
$sql = "INSERT INTO reserve_book(book_id,l_id,reservation_date)
        VALUES((SELECT book_id from book_table where `book_title` = $title),(SELECT l_id from login where `username` =  $p),now())";

        if (mysqli_query($con,$sql))

        {
            ?>
            <script> alert ("Success !!!")</script>
            <?php
            header ("location:../reservation_details.php");
        }

    //}
?>