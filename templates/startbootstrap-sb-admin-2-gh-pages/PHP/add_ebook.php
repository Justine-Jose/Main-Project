<?php
session_start();

include('connection.php');


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
                    $sql = "INSERT INTO ebook_table (book_name, book_size) VALUES ('$filename','$size')";

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
