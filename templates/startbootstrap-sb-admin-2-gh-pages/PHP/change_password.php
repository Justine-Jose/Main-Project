<?php
include('connection.php');
            $oldpass=($_POST['oldpassword']);
            $oldpassword = md5($oldpass);
            $uname=$_SESSION['username'];
            $newpassword=($_POST['newpassword']);
            $newpass = md5($newpassword);
            $sql=mysqli_query($con,"SELECT password FROM login where password='$oldpassword' && username ='$uname'");
            $num=mysqli_fetch_array($sql);
            if($num>0)
            {
            $con=mysqli_query($con,"update login set password= '$newpass' where username='$uname'");



            ?>
            <script>alert("Password changed successfully");  
            location.href="../change_password.php";</script>
            <?php

            }
            else
            {

            ?>
            <script>alert("Failed to update");  
            location.href="../change_password.php";</script>
            <?php
            }

?>