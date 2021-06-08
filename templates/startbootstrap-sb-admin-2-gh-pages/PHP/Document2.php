<?php
    
    include('connection.php');
    $name =$_POST["name"];
    $email=$_POST["email"];
    $department=$_POST["department"];
    $libraryno=$_POST["library_number"];
    $phoneno=$_POST["phoneno"];
    $dateofbirth=$_POST["dob"];
    $yearofjoin = $_POST['year_of_join'];
    $gender=$_POST['gender'];
    $username=$_POST["username"];
    $password=$_POST["passwrd"];
    $passwrd = MD5($password);
    $status=1;

    $r="select * from login where username='$username'";
    $result=mysqli_query($con,$r);
    $num=mysqli_num_rows($result);
    
        if($num==1)
            {
                ?>
                <script>alert("Username already exists");
                </script>
                <?php
                header("location:../add_user.php");
                die();
            }

        else
            {

                
                $sqli="insert into login(username,password,role,status) values ('$username','$passwrd','User',1)";
                $result1=mysqli_query($con,$sqli);
                /*die ($result);*/

                $n=mysqli_insert_id($con);
                $sq = "INSERT INTO member_registration (l_id, library_no, m_name, m_email,m_phno,gender,m_dateofbirth, m_dept,year_of_join,user_type,m_status)
                values($n, $libraryno,'$name','$email', '$phoneno', '$gender', '$dateofbirth', '$department', $yearofjoin,'User','Active')";
    
                
               

                if( mysqli_query($con,$sq))
                
                    {
                        
                        ?>
                        <script>alert("successful inserted");
                        location.href="../add_user.php";
                        exit;
                        </script>
                        <?php
                    }
            }


    mysqli_close($con);
?>