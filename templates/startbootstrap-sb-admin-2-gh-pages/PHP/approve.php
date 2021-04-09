<?php
session_start();


$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");
 
 //$sql = "UPDATE ebook_table set status = 'Approved' WHERE 
 //(SELECT l.l_id, e.l_id from login l, ebook_table e WHERE e.l_id = l.l_id))";
 
 
 
 
 $sql = "SELECT b.l_id, b.book_name, b.status, l.l_id, l.username 
            from ebook_table b,
            login l WHERE b.l_id = l.l_id ";
    $result = mysqli_query($con,$sql);
   //die($result);

    while($row = mysqli_fetch_assoc($result))
    {
       $a = $row['l_id'];
        $querry = "UPDATE ebook_table set status = 'Approved' WHERE l_id = '$a'";
        $res = mysqli_query($con,$querry);
       

    }
    

    //die($row);
 //$res = mysqli_query($con,$sql);
if($res)

    {
      
     // header("location:../admin_approve_ebook.php");
      echo'<script>alert("Approved ")</script>';
  }

    else{
        echo 'ERRORR!!!!';
   }

?>