<?php
include('connection.php');

$sub = $_POST['firs_category'];
$val = $_POST['category'];
//$id = $_POST['category_id'];

$sql = "INSERT INTO sub_category (category_id,sub_category_name,status) VALUES ($val,'$sub','1')";
if (mysqli_query($con,$sql))
    {
        $last_id = mysqli_insert_id($con);
        header("Location: ../add_category.php");
         echo "<script> Alert('Sub category Created')</script>";
    }
else{
    echo "<script>alert('Error Occuresd')</script>";
}
?>