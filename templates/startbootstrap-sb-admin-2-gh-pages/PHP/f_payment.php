<?php 
//print_r($_GET);
//die();
include('connection.php');


    $name = $_POST["cardname"];
    $no = $_POST["cardno"];
    $month = $_POST["expmonth"];
    $cvno = $_POST["cvv"];
    $expyear = $_POST["year"];
    $pay = $_POST["amount"];

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

            while($row = mysqli_fetch_assoc($res))
            {
                if($row['Amount'] != 0)
                {
                    $querry = "UPDATE tble_payment set Amount = Amount-$pay ";
                    $result = mysqli_query($con,$querry);

                    //header('location: ../user_payment.php');
                    echo '<script>("Success!!!")</script>';
                }
                else{
                    echo '<script>alert("Insufficient Balance")</script>';
                    //header('location: ../user_payment.php');
                }
            }
                
            $temp = $_SESSION['username'];
            $query = "INSERT INTO tbl_penality (l_id,amount,payed_date, status)
                        values((SELECT l_id from login where username = '$temp'),$pay, now(),'0')";

                        $res = mysqli_query($con, $query);
                        header('location: ../faculty_payment.php');
          
        }
    else{
        ?>
        <script>
        alert("Fiels is empty");
        </script>
        <?php
    }



?>