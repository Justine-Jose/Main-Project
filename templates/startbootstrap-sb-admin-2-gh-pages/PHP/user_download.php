<?php

    // Make sure an ID was passed
    if(isset($_GET['file_id'])) {
    // Get the ID
        $id = intval($_GET['file_id']);
     
        // Make sure the ID is in fact a valid ID
        if($id <= 0) {
            die('The ID is invalid!');
        }
        else {
            // Connect to the database
            $con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");
     
            // Fetch the file information
            $query = "SELECT * FROM ebook_table WHERE ebook_id  = $id and status = 'Approved'";
            $result=mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            
             if($result) {
                // Make sure the result is valid
                if($result->num_rows == 1) {
                // Get the row
                    $row = mysqli_fetch_assoc($result);
                    
                    $type=$row['filetype'];
                    $size=$row['filesize'];
                    $filename=$row['book_name'];
                   // $data=$row['filecontent'];

                    
// Print headers

header("Content-Type: $type");
header("Content-Length: $size");
header('Content-Disposition: attachment; filename=\\"$filename\\"');
 
                    // Print data
                    echo $content;
                }
                else {
                    echo 'Error! No image exists with that ID.';
                }
     
                // Free the mysqli resources
                mysql_free_result($result);
            }
            else {
                echo "Error! Query failed";
            }
                }
    }
    else {
        echo 'Error! No ID was passed.';
    }
 

    ?> 