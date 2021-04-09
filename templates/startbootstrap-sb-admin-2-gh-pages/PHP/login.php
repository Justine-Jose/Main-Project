<?php
session_start();
/*print_r($_POST);
die();*/

$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");
$role= " ";
	$uname = $_POST["username"];
	$pwrd = $_POST["passwrd"];
	$pass = MD5($pwrd);

	$_SESSION["username"]=$uname;
	$sql="select username, password,l_id from login where username='$uname' and password ='$pass'";
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
				else
				{
					$_SESSION["user"] = $row["username"];
					$_SESSION["role"] = $row["role"];
					header("location:../user.php");

				}
			} 
			else {
				header('location: ../login.html');
			}

?>