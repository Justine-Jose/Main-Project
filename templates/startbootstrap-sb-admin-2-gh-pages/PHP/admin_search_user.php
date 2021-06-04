<?php
include('connection.php');

    $output = " ";
    if(isset($_GET['query']))
        {
            $search = mysqli_real_escape_string($con, $_GET['query']);
            $sql = "SELECT * FROM member_registration where m_name like 
            '%search%' || library_no like '%search%' 
            || m_dept like '%search%'";

        }
    else {
            $sql = "SELECT * FROM member_registration";
    }

    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0 ){
        $output .=  "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
        <thead>
            <tr>
                <th>Library No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Action</th>
              
            </tr>
        </thead>";

        while($row = mysqli_fetch_array($query)){
            $output .= "<tbody>
            <tr>
            
                <td> {$row['library_no']} </td>
               <td> {$row['m_name']} </td>
               <td> {$row['m_email']}  </td>
               <td> {$row ['gender']} </td>
               <td> {$row['m_dept'] } </td>
                <td><a href = 'user_edit.php?id =".$row['l_id']." 'class = 'btn btn-danger btn-sm' '>Edit</a></td>";
            
                
           "</tr>
        </tbody>";
        }
        
    }
    $output .= "</table>";

    echo $output;
?>