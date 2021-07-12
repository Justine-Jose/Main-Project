<?php
//session_start();


include('connection.php');
//$id=$_GET['id'];

 
 //$sql = "UPDATE ebook_table set status = 'Approved' WHERE 
 //(SELECT l.l_id, e.l_id from login l, ebook_table e WHERE e.l_id = l.l_id))";
 
 if(isset($_REQUEST['x']))
{
	$a=intval($_GET['x']);
 
 
 $sql = "SELECT reserve.reserve_id, reserve.book_id, reserve.l_id, reserve.reservation_date, reserve.reservation_status,
        l.l_id, l.username, l.status, book.book_id, book.book_title from reserve_book reserve, login l, book_table book 
        where reserve.l_id = l.l_id and reserve.book_id = book.book_id and  reserve.reservation_status = '0'";
    $result = mysqli_query($con,$sql);
   //die($result);

    while($row = mysqli_fetch_assoc($result))
    {
       
        $querry = "UPDATE reserve_book set reservation_status = '1' WHERE reserve_id = $a";
        $res = mysqli_query($con,$querry);
       

    }
    

    //die($row);
 //$res = mysqli_query($con,$sql);
if($res)

    {
        ?>
      
     // header("location:../admin_approve_ebook.php");
      <script>alert("Approved ");
      window.location.href = '../admin_view_reservation.php';
    </script>
    <?php
  }

    else{
        echo 'ERRORR!!!!';
   }

}





?>