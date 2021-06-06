<?php
include('connection.php');
    if(isset($_POST['amount']))
        {
            $username = mysqli_real_escape_string($con,$_POST["user_name"]);
            $query = "SELECT * FROM login WHERE username = '".$username."'";
            $result = mysqli_query($con,$query);
            echo mysqli_num_rows($result);
        }
?>