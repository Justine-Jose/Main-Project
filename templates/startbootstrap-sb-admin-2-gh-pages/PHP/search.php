<?php 
//print_r($_GET);
//die();
session_start();
$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");

    $output = " ";
    
    if (isset($_GET['query'])) 
        {
            
            $search = mysqli_real_escape_string($con, $_GET['query']);
            $sql = "SELECT * FROM book_table WHERE book_title LIKE '%$search%' || book_author LIKE '%$search%' || 
                    second_author LIKE '%$search%' || third_author LIKE '%$search%'";
	    }

    else
        {
            
            $sql = "SELECT * FROM book_table ";
        }

        $query = mysqli_query($con, $sql);
        if (mysqli_num_rows($query) > 0) {
            $output .= "<table class='table table-hover table-striped'>
            <thead>
                <tr>
                    
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Year of Publish</th>
                    <th>Edition</th>
                    <th>Book Count</th>
                </tr>
            </thead>";
            while ($row = mysqli_fetch_assoc($query)) {
                if($row['book_count'] != 0)
                {
                    $output .= "<tbody>
                <tr>
                    <td>{$row['book_title']}</td>
                    <td>{$row['book_author']} </br> {$row['second_author']} </br>  {$row['third_author']}</td>
                    <td>{$row['year_of_publish']}</td>
                    <td>{$row['edition']}</td>
                   <td>{$row['book_count']}</td>";
                }
            else {
                $output .= "<tbody>
                <tr>
                    <td>{$row['book_title']}</td>
                    <td>{$row['book_author']} </br> {$row['second_author']} </br>  {$row['third_author']}</td>
                    <td>{$row['year_of_publish']}</td>
                    <td>{$row['edition']}</td>
                   <td>Not Available </td>";
            }
            //$output .= "<tbody>
                /*<tr>
                    <td>{$row['book_title']}</td>
                    <td>{$row['book_author']} </br> {$row['second_author']} </br>  {$row['third_author']}</td>
                    <td>{$row['year_of_publish']}</td>
                    <td>{$row['edition']}</td>
                   <td>{$row['book_count']}</td>";
                  if($row['book_count'] != 0)
                    {
                        "<td>{$row['book_count']}</td>";
                       
                    }
                else {
                    echo "<td>No Book Available </td>";
                }*/
                    
                "</tr>
                </tbody>";
            }
        $output .="</table>";
            echo $output;
        }else{
            echo "<h5>No record found</h5>";
        }
?>