<?php
session_start();
/*print_r($_POST);
die();*/

include('connection.php');
$role= " ";
	$uname = $_POST["username"];
	$pwrd = $_POST["passwrd"];
	$pass = MD5($pwrd);

	$_SESSION["username"]=$uname;
	$sql="select username, password, l_id, status from login where username='$uname' and password ='$pass' and status = 1";
	// die($sql);	
	$result =mysqli_query($con,$sql);
	/*die ("Helll");*/
	if(mysqli_num_rows($result)>0)
	{
		
				$_SESSION["username"]=$uname;
				

				$inn="select role from login where username='$uname' and password='$pass'";
				$result1=mysqli_query($con,$inn);
				$r=mysqli_fetch_array($result1);	
				
				$rl=$r['role'];
				//die($rl);
				//$_SESSION['username'] = $row["username"];
				//$_SESSION["role"] = $row["role"];
				/*die($rl);*/
		
		
				/*$s=mysqli_num_rows($result);*/

				
				if($rl == "Admin")
				{
					$_SESSION['username'] = $row["username"];
					$_SESSION["role"] = $row["role"];

					header("location:../Dashbord.php");

				}
				elseif($rl == "User")
				{
					$_SESSION["user"] = $row["username"];
					$_SESSION["role"] = $row["role"];
					header("location:../user.php");

				}

				else
				{
					$_SESSION["user"] = $row["username"];
					$_SESSION["role"] = $row["role"];
					header("location: ../faculty_dashbord.php");
				}
			} 
			else {
				header('location: ../login.php');
			}

?>