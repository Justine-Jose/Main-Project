<?php
session_start();
require_once '../FPDF/fpdf.php';

$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");


$name = $_SESSION['username'];

$sql = "SELECT username FROM login where username = '$name'";
$result = mysqli_query($con,$sql);

//$querry = "SELECT * FROM ebook_table";
//$data = mysqli_query($con,$data);
    //if (isset($_POST['generate']))
    //{
        
        $pdf = new FPDF('p', 'mm','a4');
        $pdf->SetFont('Arial','B',12);
        $pdf->AddPage();
        //$pdf->Cell(10,10,'Student Activity Report','0','0','c');
        $pdf->Cell(40,10,'Name','0','0','c');
        $pdf->Cell(40,10, $name,'0','0','c');
        $pdf->Ln(15);

        

        $pdf->Cell(20,10,'No','1','0','c');
        $pdf->Cell(60,10,'Book Title','1','0','c');
        $pdf->Cell(40,10,'Status','1','1','c');
        
        $querry = "SELECT e.l_id, e.book_name, e.status, l.l_id, l.username 
        FROM ebook_table e, login l where username = '$name' and status = 'Approved'";
        $data = mysqli_query($con,$querry);
        
        $no = 0;
        while ($row = mysqli_fetch_assoc($data))

        {
            $pdf->Cell(20,10, $no++,'1','0','c');
            $pdf->Cell(60,10, $row['book_name'],'1','0','c');
            $pdf->Cell(40,10, $row['status'],'1','1','c');
            

        }


        $pdf->Ln(15);
        $pdf->Cell(20,10,'No','2','0','c');
        $pdf->Cell(60,10,'Book Title','2','0','c');
        $pdf->Cell(40,10,'Issue Date','2','0','c');
        $pdf->Cell(40,10,'Return Date','2','1','c');
        //$pdf->Cell(40,10,'Status','2','1','c');

        $sql = "SELECT a.book_title, a.book_id, b.book_id, b.l_id, b.issue_date, b.return_date, b.status, l.l_id, l.username 
                        from book_table a, book_issue b, login l where b.l_id = l.l_id 
                        and b.book_id = a.book_id and l.username = '$name'";

        $data = mysqli_query($con,$sql);
        $count = 0;

        while ($row = mysqli_fetch_assoc($data))
        {
            $pdf->Cell(20,10, $count++,'2','0','c');
            $pdf->Cell(60,10, $row['book_title'],'2','0','c');
            $pdf->Cell(40,10, $row['issue_date'],'2','0','c');
            $pdf->Cell(40,10, $row['return_date'],'2','1','c');
            //$pdf->Cell(40,10, $row['status'],'2','1','c');
        }

        //$pdf->Cell(40,10,'Return Date','1','1','c');
     // $pdf->Cell(40,10,'Name','1','1','c');

        
        $pdf->Output();
    //}

?>