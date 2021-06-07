<?php
include('connection.php');

    if(! isset($_GET['query']))
    die('Error No Query');
        

    $search = mysqli_real_escape_string($con, $_GET['query']);
    //print_r($_GET);
    //die();
    $sql = "SELECT * FROM book_table where book_status = 'Active' and book_title like 
    '%$search%' || book_author like '%$search%' 
    || second_author like '%$search%' || third_author like '%$search%'";

    
    $query = mysqli_query($con,$sql) or die('Querry Errorrr');
    if(mysqli_num_rows($query) > 0 ){
       // die("Workinf");
       echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
        <thead>
            <tr>
                
                <th>Book Title</th>
                <th>Author</th>
                <th>Year of Publish</th>
                <th>Edition</th>
                <th>Book Count</th>
                <th>Action</th>
              
            </tr>
        </thead><tbody>";

        while($row = mysqli_fetch_array($query)){
            echo "
            <tr>
            
                <td> {$row['book_title']} </td>
               <td> {$row['book_author']} {$row['second_author']} {$row['third_author']} </td>
               
               <td> {$row ['year_of_publish']} </td>
               <td> {$row['edition'] } </td>
               <td>{$row['book_count']}</td>
               <td class = 'Text-center'> <a href='admin_edit_book.php?x=" .$row['book_id ']. " ' class = 'btn btn-danger btn-sm'> EDIT</a>
               <a href = '../startbootstrap-sb-admin-2-gh-pages/PHP/admin_delete_user.php?y=" .$row['book_id']." ' class = 'btn btn-danger btn-sm'>Delete</a></td>";
            
                
           
        }
        
    }
    else {
        die("No User Found");
    }
    ?>
</tbody></table>

    