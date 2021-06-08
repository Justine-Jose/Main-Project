<?php
    
    include('connection.php');

    if (isset($_POST['update']))

    {
        $studentid = $_POST['sid'];
        $sname = $_POST['name'];
        $isbn = $_POST['isbno'];
        $bname = $_POST['bookname'];
        $date = date('Y-m-d H:i:s');
        $pn = $_POST['penality'];

        $sql = "INSERT INTO book_return(book_id,member_id,return_date,penality) VALUES ($isbn,$studentid,now(),$pn)";
         if (mysqli_query($con,$sql))
         {
             ?>
             <script> alert ("Book Issued Successfully");
             </script>
             <?php
             header ("location:../admin_return book.php");
         }

    }


?>
