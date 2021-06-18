<?php
//session_start();

include('connection.php');

$p = $_SESSION['username']; 
//$id = $_SESSION['l_id'];

       $filename = $_FILES['myfile']['name'];
       
        $destination = '../uploads/' .$filename;
       
        $extension = pathinfo($filename,PATHINFO_EXTENSION);
       
        $file = $_FILES['myfile']['tmp_name'];

        $size = $_FILES['myfile']['size'];

        if(! in_array($extension,['pdf']))
        {
            echo "Your file must be in pdf format";
        }

        elseif($_FILES['myfile']['size'] > 1000000)
        {
                echo "File is too large";
        }

        else {
                if(move_uploaded_file($file,$destination))
                {
                    $sql = "INSERT INTO ebook_table (l_id,book_name, book_size,status) 
                    VALUES ((SELECT l_id from login where username = '$p'),'$filename','$size','0')";
                    //die ($sql);

                    if(mysqli_query($con,$sql))
                    {
                        echo "File upload successfully";
                    }
                    else {
                        echo "FAiled to upload";
                    }
                }
        }
        /*$licenseNo=$_POST['licenseno'];

        $filename=$_FILES['myfile']['name'];
        
        $fileloc="uploads/";
        
        move_uploaded_file($_FILES["myfile"]["tmp_name"],$fileloc.$filename);*/

    

?>
