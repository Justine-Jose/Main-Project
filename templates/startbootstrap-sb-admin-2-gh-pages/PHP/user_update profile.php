<?php
session_start();
//print_r($_SESSION);
$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");



    
        $username =$_SESSION['username'];
        $name = $_POST['fullanme'];
        $mob = $_POST['mob'];
        //die($mob);


        $sql = "UPDATE member_registration set m_name = '$name', m_phno = '$mob' where l_id = (select l_id from login where username = '$username')";

        //die($sql);
        $res = mysqli_query($con,$sql);
        if ($res){
            echo '<script>alert("Your profile has been updated")</script>';
            header('location: ../user_profile.php');
        } else {
            echo 'ERROR OCCURED<br>'.$sql;
            //die();
            // echo '<script>alert("Error occurewd")</script>';
        }
        
        
    

?>