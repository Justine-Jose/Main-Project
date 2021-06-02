<?php 

session_start();
$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");

$output = " ";

$output .= "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
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

$sql = "SELECT l_id, library_no,m_name,m_email,gender,m_dept,m_status  from member_registration where user_type = 'User' ";
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
                    <td><a href = 'user_edit.php?id =".$row['l_id']." 'class = 'btn btn-danger btn-sm' '>Edit</a></td>";
                
                    
               "</tr>
            </tbody>";
           
        }
    }
    
    $output .= "</table>";

    echo  $output;
        ?>