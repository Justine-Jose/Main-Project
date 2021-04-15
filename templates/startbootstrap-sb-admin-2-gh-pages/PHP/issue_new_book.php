<?php
    
    $con =mysqli_connect("localhost","root","","library_management") or die("Can't connect");

    if (isset($_POST['update']))

    {
        $studentid = $_POST['sid'];
        $sname = $_POST['name'];
        $isbn = $_POST['isbno'];
        $bname = $_POST['bookname'];
        $date = date('Y-m-d H:i:s');
        
        $sql = "INSERT INTO book_issue(book_id,l_id,issue_date,return_date,status) VALUES ($isbn,$studentid,now(),DATE_ADD(now(), INTERVAL 10 DAY),'0')";
         if (mysqli_query($con,$sql))
         {
             ?>
             <script> alert ("Book Issued Successfully");
             </script>
             <?php
             header ("location:../admin_issue book.php");
         }

    }


?>
