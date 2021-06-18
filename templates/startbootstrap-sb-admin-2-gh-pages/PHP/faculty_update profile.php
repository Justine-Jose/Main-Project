<?php
include('connection.php');



    
        $username =$_SESSION['username'];
        $name = $_POST['fullanme'];
        $mob = $_POST['mob'];
        //die($mob);


        $sql = "UPDATE member_registration set m_name = '$name', m_phno = '$mob' where l_id = (select l_id from login where username = '$username')";

        //die($sql);
        $res = mysqli_query($con,$sql);
        if ($res){
            echo '<script>alert("Your profile has been updated")</script>';
            header('location: ../faculty_profile.php');
        } else {
            echo 'ERROR OCCURED<br>'.$sql;
            //die();
            // echo '<script>alert("Error occurewd")</script>';
        }
        
        
    

?>