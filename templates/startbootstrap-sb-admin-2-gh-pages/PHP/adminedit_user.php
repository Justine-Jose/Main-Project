<?php
    include('connection.php');


        $id = $_POST['bid'];
        $name = $_POST['uname'];
        $email = $_POST['mail'];
        $libraryno = $_POST['lno'];
        $dateofbirth = $_POST['dob'];
        $department = $_POST['dept'];
        $yearofjoin = $_POST['join'];
                

                //die($id);

               

                            $sql = "UPDATE member_registration set library_no  = $libraryno, m_name = '$name', m_email = '$email', m_dateofbirth = '$dateofbirth', m_dept = '$department',
                                    year_of_join = '$yearofjoin' where l_id = $id";
                             //die($sql);

                            $res = mysqli_query($con,$sql);
                           

                            if ($res)
                                {
                                    echo '<script> alert("Updated Successfully")</script>';
                                    header('location: ../manage_user.php');
                                }
                            else{

                                echo '<script> alert("ERRORRR !!!")</script>';
                                    header('location: ../manage_user.php');
                            }
                
    


?>