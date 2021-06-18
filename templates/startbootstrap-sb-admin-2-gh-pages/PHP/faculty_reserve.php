<?php


include('connection.php');
//session_start();
//print_r($_SESSION);
//if(isset($_POST['reserve']));

//{

    
    
    $p = $_SESSION['username'];
    //$id = $_SESSION['l_id'];
    //die($id);
        //$title = $_POST['book_title'];
    /*$sq = "SELECT b.book_id, b.book_title, b.book_author, b.second_author, b.year_of_publish, b.edition, 
            l.l_id, l.username from book_table b, login l where 'username' = '$p'";

    $res = mysqli_query($con,$sq);*/
    

        
/*$querry = "SELECT * From book_table";
$result=mysqli_query($con,$querry);
    $num=mysqli_num_rows($result);  */  
    
    
        
/*$sql = "INSERT INTO reserve_book(book_id,l_id,reservation_date)
        VALUES((SELECT book_id from book_table where `book_title` = b.book_title),(SELECT l_id from login where `username` =  $p),now())";*/

/*$sql = "INSERT INTO reserve_book(book_id, l_id, reservation_date) VALUES 
        ((SELECT b.book_id, b.book_title, c.book_id  from book_table b, book_issue c  ";

        if (mysqli_query($con,$sql))

        {
            ?>
            <script> alert ("Success !!!")</script>
            <?php
            header ("location:../reservation_details.php");
        }

    //}*/

    if(isset($_REQUEST['x']))
{
	$a=intval($_GET['x']);
	$sql="INSERT INTO reserve_book (book_id,l_id, reservation_date, reservation_status) 
            VALUES ($a, (SELECT l_id from login where username = '$p'), now(), '0')";
	//$sqli="update tbl_login set status='1' where login_id='$a'";
	
    if(mysqli_query($con,$sql))
    
    
        {
            ?>
            <script> alert ("Success !!!")</script>
            <?php
            header ("location:../faculty_reservation_details.php");
        }
	
}
?>