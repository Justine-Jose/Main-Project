<?php
session_start();

$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");


        //die("MSG");

    

                $title = $_POST['title'];
                $auth = $_POST['author'];
                $auth1 = $_POST['sauthor'];
                $auth2 = $_POST['tauthor'];
                $year = $_POST['publish'];
                $edition = $_POST['edition'];
                $no = $_POST['isbn'];
                //$x = $_GET['y'];
                $id = $_POST['bid'];

                //die($id);

               

                            $sql = "UPDATE book_table set book_title = '$title', book_author = '$auth', second_author = '$auth1', third_author = '$auth2', year_of_publish = '$year',
                                    edition = '$edition' where book_id = $id";
                             //die($sql);

                            $res = mysqli_query($con,$sql);
                           

                            if ($res)
                                {
                                    echo '<script> alert("Updated Successfully")</script>';
                                    header('location: ../admin_edit_book.php');
                                }
                            else{

                                echo '<script> alert("ERRORRR !!!")</script>';
                                    header('location: ../admin_edit_book.php');
                            }
                
    



?>