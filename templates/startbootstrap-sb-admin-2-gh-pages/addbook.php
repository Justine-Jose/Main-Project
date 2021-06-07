<?php
include('../startbootstrap-sb-admin-2-gh-pages/PHP/connection.php');

if(isset($_POST['add']));
{
    $bookname =$_POST['bookname'];
    $author = $_POST['author'];
    $second_author = $_POST['secondauthor'];
    $third_author = $_POST['thirdauthor'];
    $pages = $_POST['pagenumber'];
    $purchase = $_POST['purchasedate'];
    $publish = $_POST['publish_year'];
    $edition = $_POST['edition'];
    $isbn = $_POST['isbnno'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $cnt = $_POST['bookcount'];


    $sq = "INSERT INTO book_table (category_id,book_title,book_author,
            second_author,third_author,book_count,year_of_publish,edition,isbn_no,book_status) VALUES 
            ((SELECT category_id from book_category WHERE category_name = '$category'),'$bookname',' $author','$second_author','$third_author',$cnt,$publish,'$edition',$isbn,'Active')";

         
         $res=mysqli_query($con,$sq);
         
    
    $sql1 = "INSERT INTO book_details (book_id,book_price,number_of_page,date_of_purchase)
                VALUES ((SELECT book_id FROM book_table WHERE book_title = '$bookname'), $price ,$pages,' $purchase')";
         
         if(mysqli_query($con,$sql1))

            {
                ?>
                <script> alert ("Book Details Successfully Inserted");
                </script>
                <?php
                header("location:add_book.php");
            }
}

?>
