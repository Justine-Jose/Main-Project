<?php
session_start();


include('connection.php');
//$id=$_GET['id'];

 
 //$sql = "UPDATE ebook_table set status = 'Approved' WHERE 
 //(SELECT l.l_id, e.l_id from login l, ebook_table e WHERE e.l_id = l.l_id))";
 
 if(isset($_REQUEST['y']))
{
	$a=intval($_GET['y']);
 
 
 $sql = "SELECT b.ebook_id,  b.l_id, b.book_name, b.status, l.l_id, l.username 
            from ebook_table b,
            login l WHERE b.l_id = l.l_id ";
    $result = mysqli_query($con,$sql);
   //die($result);

    while($row = mysqli_fetch_assoc($result))
    {
       
        $querry = "UPDATE ebook_table set status = '1' WHERE ebook_id = $a";
        $res = mysqli_query($con,$querry);
       

    }
    

    //die($row);
 //$res = mysqli_query($con,$sql);
if($res)

    {
      
     header("location:../admin_approve_ebook.php");
      //echo"<div id ='out'>Reject</div>";
  }

    else{
        echo 'ERRORR!!!!';
   }

}





?>