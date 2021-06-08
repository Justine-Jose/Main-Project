<?php 

session_start();
include('connection.php');

$output = " ";

$output .= "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
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
</thead>";

$sql = "SELECT l_id, library_no,m_name,m_email,gender,m_dept,year_of_join,m_status  from member_registration where user_type = 'Faculty' and m_status = 'Active'";
$result =mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if ($num > 0) 
    {
        while($row = mysqli_fetch_array($result)) 
        {
    


           
$output .= "<tbody>
                <tr>
                
                    <td> {$row['library_no']} </td>
                   <td> {$row['m_name']} </td>
                   <td> {$row['m_email']}  </td>
                   <td> {$row ['gender']} </td>
                   <td> {$row['m_dept'] } </td>
                   <td>{$row['year_of_join']}</td>
                
                   <td class = 'Text-center'> <a href='admin_edit_user.php?x=" .$row['l_id']. " ' class = 'btn btn-danger btn-sm'> EDIT</a>
                   <a href = '../startbootstrap-sb-admin-2-gh-pages/PHP/admin_delete_user.php?y=" .$row['l_id']." ' class = 'btn btn-danger btn-sm'>Delete</a></td>";
                
                    
               "</tr>
            </tbody>";
           
        }
    }
    
    $output .= "</table>";

    echo  $output;
        ?>