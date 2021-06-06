<?php
    include('connection.php');
    if(isset($_REQUEST['x']))
    {

        $a = intval($_GET['x']);
        $sql = "SELECT m.l_id, m.m_status, l.l_id, l.status FROM member_registration m, login l WHERE m.l_id = l.l_id and l.status = 0 ";
        $result = mysqli_query($con,$sql);
        //die($result);

        while($row = mysqli_fetch_assoc($result))
        {
            $query = "UPDATE member_registration, login set member_registration.m_status = 'Active', login.status = 1 WHERE login.l_id = $a";
           //$query = "UPDATE member_registration, login set member_registration.m_status = 'Active' WHERE login.l_id = $a and set  login.status = 1 WHERE login.l_id = $a";
    
            $res = mysqli_query($con,$query);


        }
        if($res)
        {
            echo '<script>alert("Updated")</script>';
            //header('location: ../register_request.php');
        }
        else{
            echo '<script>alert("Error!!!")</script>';
            header('location: ../register_request.php');
        }
    }

   
?>