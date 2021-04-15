<?php
session_start();



if(!isset($_GET["sid"])) {
  die('invalid credentials');
}

  $sid= ($_GET["sid"]);
  $con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");
    $sql ="SELECT username FROM login WHERE l_id= $sid";

    $result = mysqli_query($con,$sql);

    if(! $result)
    {
      die('querry failed ' .$sql);


    }

    elseif (mysqli_num_rows($result) == 0) {
      die('invalid student id');
    }

    else{
      $row = mysqli_fetch_array($result);
      die($row['username']);
    }





?>
