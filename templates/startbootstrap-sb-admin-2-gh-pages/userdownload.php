<?php

session_start();

$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");

    $sql = "SELECT * FROM ebook_table";
    $result = mysqli_query($con, $sql);
    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>