<?php
    
    include('connection.php');

    if(isset($_REQUEST['x']))
    {
        $a=intval($_GET['x']);
       /* $sql="SELECT a.book_id, a.book_title, a.book_count, b.issue_id , b.book_id, b.issue_date, b.return_date, b.l_id, l.l_id, l.username FROM book_table a, book_issue b, login l
                 WHERE a.book_id = b.book_id and b.l_id = l.l_id ";


        $result = mysqli_query($con, $sql);*/

        //$sqli="update tbl_login set status='1' where login_id='$a'";
        
        //while($row = mysqli_fetch_assoc($result))
        //{
           
            $querry = "UPDATE book_issue set status = 'Returned' WHERE issue_id = $a";
            //$querry = "UPDATE book_issue set book_count = book_count + 1 WHERE issue_id = $a";
            $res = mysqli_query($con,$querry);
            $querry = "UPDATE book_table set book_count = book_count+1 where 
                book_id = (SELECT book_id from book_issue where issue_id = $a)";
                //die($querry);
             $res = mysqli_query($con,$querry);
           
    
        //}

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
