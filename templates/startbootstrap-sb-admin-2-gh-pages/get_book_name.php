<?php
session_start();



if(!isset($_GET["sid"])) {
  die('invalid credentials');
}

  $isbno= ($_GET["sid"]);
  $con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");
    $sql ="SELECT *  FROM  book_table WHERE book_id = $isbno";

    $result = mysqli_query($con,$sql);
  if(! $result)
  {
    die('Enter a Valid ISBN');
  }
  elseif(mysqli_num_rows($result) == 0)
  {
    die('Invalid ISBN');
  }
    else{
      $row = mysqli_fetch_array($result);
      die($row['book_title']);
    }
   /* ($row=mysqli_fetch_array($result))
    echo $row['book_title'];
    else
    echo "Book not Found!!";*/





?>
