<?php
session_start();

include('connection.php');

$uploadfile=$_FILES['myfile']['tmp_name'];

require 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet)
{
	$highestrow=$worksheet->getHighestRow();

	for($row=1;$row<=$highestrow;$row++)
	{
		$library_no=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$name=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
		$email=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
		$phone=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
		$gender=$worksheet->getCellByColumnAndRow(4,$row)->getValue();
		$dob=$worksheet->getCellByColumnAndRow(5,$row)->getValue();
		$dept=$worksheet->getCellByColumnAndRow(6,$row)->getValue();
		$usertype=$worksheet->getCellByColumnAndRow(7,$row)->getValue();
		$username=$worksheet->getCellByColumnAndRow(8,$row)->getValue();
		$password=$worksheet->getCellByColumnAndRow(9,$row)->getValue();
		$password = MD5($password);
		$role=$worksheet->getCellByColumnAndRow(10,$row)->getValue();
		
		
		if($username!='')
		{
			$sqli="INSERT INTO login(username,password,role) VALUES ('$username', '$password','$role')";
                $result1=mysqli_query($con,$sqli);

				$n=mysqli_insert_id($con);


				$sq = "INSERT INTO member_registration (l_id,library_no, m_name, m_email,m_phno,gender,m_dateofbirth, m_dept,user_type,m_status)
                values($n,$library_no,'$name','$email', '$phone','$gender', '$dob', '$dept','$usertype','Active')";

			//$insertqry="INSERT INTO `user`( `username`, `email`) VALUES ('$name','$email')";
			$insertres=mysqli_query($con,$sq);
			echo '<script>alert("Successfully INSERTED")</script>';
			header("location:../admin_excel_upload.php");
		}
		else {
			echo '<script>alert("Error Occured")</script>';
			header("location:../admin_excel_upload.php");
		}
	}
}
header('Location: ../Dashbord.php');
?>