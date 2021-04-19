<?php
    
    $con =mysqli_connect("localhost","root","","library_management") or die("Can't connect");
    session_start();

    if(isset($_REQUEST['x']))
    {
        $a=intval($_GET['x']);
        $sql="SELECT a.book_id, a.book_title, b.issue_id , b.book_id, b.issue_date, b.return_date, b.l_id, l.l_id, l.username FROM book_table a, book_issue b, login l
                 WHERE a.book_id = b.book_id and b.l_id = l.l_id ";


        $result = mysqli_query($con, $sql);

        //$sqli="update tbl_login set status='1' where login_id='$a'";
        
        while($row = mysqli_fetch_assoc($result))
        {
           
            $querry = "UPDATE book_issue set status = 'Returned' WHERE issue_id = $a";
            $res = mysqli_query($con,$querry);
           
    
        }

        if($res)

    {
      
     // header("location:../admin_approve_ebook.php");
      echo'<script>alert("Returned ")</script>';
  }

    else{
        echo 'ERRORR!!!!';
   }

        
    
        
    }


?>
