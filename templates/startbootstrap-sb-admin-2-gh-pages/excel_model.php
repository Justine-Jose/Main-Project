<?php
session_start();


$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");

header('Content-type: application/vnd-ms-excel');
$filename = "user_data.xls";
header("Content-Disposition:attachment;filename=\"$filename\"");

?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Library Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Department</th>
            <th>Usertype</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
    </thead>
</table>