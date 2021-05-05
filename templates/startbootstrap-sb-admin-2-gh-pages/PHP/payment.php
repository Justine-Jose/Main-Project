<?php 
//print_r($_GET);
//die();
session_start();
$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");


    $name = $_POST["cardname"];
    $no = $_POST["cardno"];
    $month = $_POST["expmonth"];
    $cvno = $_POST["cvv"];
    $expyear = $_POST["year"];

    $sql = "SELECT * FROM tble_payment where status = 'Active'";
    $res = mysqli_query($con, $sql);
    if ((!empty($_POST["carename"])) || (!empty ($_POST["expmonth"])) || (!empty ($_POST["cardno"])) || (!empty($_POST["cvv"])) || (!empty($_POST["year"])))
        {
            /*if(Amount == 0)
                {
                    header('locatio: ../user_payment.php');
                    echo '<script>("You didint have enough amount")</script>';
                }

            else*/

           // {
                $querry = "UPDATE tble_payment set Amount = Amount-50 ";
                $result = mysqli_query($con,$querry);

                header('locatio: ../user_payment.php');
                    echo '<script>("Success!!!")</script>';
            //}
          
        }
    else{
        ?>
        <script>
        alert("Fiels is empty");
        </script>
        <?php
    }



?>