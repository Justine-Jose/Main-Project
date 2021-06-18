<?php

session_start();

include('/PHP/connection.php');

    $sql = "SELECT * FROM ebook_table";
    $result = mysqli_query($con, $sql);
    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>