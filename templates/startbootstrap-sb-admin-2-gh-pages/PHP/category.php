<?php
session_start();
error_reporting(0);
include('connection.php');
//$p = $_SESSION['username'];

    
    $category = $_POST['category'];
    //$st = $_POST['status'];

    $sql = "INSERT into book_category (category_name,status) VALUES ('$category','Active')";

    if (mysqli_query($con, $sql)) 
    {
            $last_id = mysqli_insert_id($con);
            
    
       // 
        ?> <script> alert ("New record created successfully."); </script> <?php
    } 
      else 
      {
          
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
      
      mysqli_close($con);
    

?>