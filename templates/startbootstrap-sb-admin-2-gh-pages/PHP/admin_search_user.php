<?php
include('connection.php');

    if(! isset($_GET['query']))
    die('Error No Query');
        

    $search = mysqli_real_escape_string($con, $_GET['query']);
    //print_r($_GET);
    //die();
    $sql = "SELECT * FROM member_registration where m_status = 'Active' and m_name like 
    '%$search%' || library_no like '%$search%' 
    || m_dept like '%$search%'";

    
    $query = mysqli_query($con,$sql) or die('Querry Errorrr');
    if(mysqli_num_rows($query) > 0 ){
       // die("Workinf");
       echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
        <thead>
            <tr>
                <th>Library No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Year of Join</th>
                <th>Action</th>
              
            </tr>
        </thead><tbody>";

        while($row = mysqli_fetch_array($query)){
            echo "
            <tr>
            
                <td> {$row['library_no']} </td>
               <td> {$row['m_name']} </td>
               <td> {$row['m_email']}  </td>
               <td> {$row ['gender']} </td>
               <td> {$row['m_dept'] } </td>
               <td>{$row['year_of_join']}</td>
               <td class = 'Text-center'> <a href='admin_edit_user.php?x=" .$row['l_id']. " ' class = 'btn btn-danger btn-sm'> EDIT</a>
               <a href = '../startbootstrap-sb-admin-2-gh-pages/PHP/admin_delete_user.php?y=" .$row['l_id']." ' class = 'btn btn-danger btn-sm'>Delete</a></td>";
            
                
           
        }
        
    }
    else {
        die("No User Found");
    }
    ?>
</tbody></table>

    