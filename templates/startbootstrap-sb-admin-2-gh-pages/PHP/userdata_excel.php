<?php
include('connection.php');

header('Content-type: application/vnd-ms-excel');
$filename = "users.xls";
header("Content-Disposition:attachment;filename=\"$filename\"");

?>

<table class="table table-bordered">
    <thead>
        <th style = "border:3px solid black">No</th>
        <th style = "border:3px solid black">Library No</th>
        <th style = "border:3px solid black">Name</th>
       <th style = "border:3px solid black">Email</th>
       <th style = "border:3px solid black">Gender</th>
       <th style = "border:3px solid black">Department</th>
        </tr>
    </thead>

        <?php
        $count = 1;

                $sql = "SELECT * FROM member_registration";
                $res = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($res))
                {
                    ?>
                    <tbody>
                        <tr>
                            <?php
                                echo "<td>" .$count++ ."</td>";
                                echo "<td>" .$row['library_no'] ."</td>" ;
                                echo "<td>" .$row['m_name'] ."</td>";
                                echo "<td>" .$row['m_email']  ."</td>";
                                echo  "<td>" .$row ['gender'] ."</td>";
                                 echo "<td>" .$row['m_dept'] ."</td>";


                }

        ?>