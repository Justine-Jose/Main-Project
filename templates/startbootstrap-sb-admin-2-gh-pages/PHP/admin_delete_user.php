<?php
 include('connection.php');

        $a = intval($_GET['y']);
            $sql = "UPDATE login, member_registration
                        SET login.status = 2,
                        member_registration.m_status = 'Delete'
            where member_registration.l_id = $a and login.l_id = $a";

        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo '<script>alert("Record Successfully Deleted ")</script>';
            header("location: ../manage_user.php");
        }
        else {
            echo '<script>alert("Not Found !!! ")</script>';
            header("location: ../manage_user.php");
        }


?>