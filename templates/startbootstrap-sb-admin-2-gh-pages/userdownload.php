<?php

session_start();

include('../startbootstrap-sb-admin-2-gh-pages/PHP/connection.php');

    $sql = "SELECT * FROM ebook_table";
    $result = mysqli_query($con, $sql);
    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>