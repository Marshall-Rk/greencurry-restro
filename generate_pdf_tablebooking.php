<?php
require('fpdf/fpdf.php');

$conn = new mysqli('localhost', 'root', '', 'testingpixel');

if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$select = "SELECT * FROM `restro` ORDER BY id";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
while($row = $result->fetch_object()){

  $id = $row->id;
  $fullname = $row->fullname;
  $email = $row->email;
  $phone1 = $row->phone1;
  $date = $row->date;
  $time = $row->time;
  $person = $row->person;
  $Time_of_feedback = $row->Time_of_feedback;
  
  $pdf->Cell(5,10,$id,1);
  $pdf->Cell(25,10,$fullname,1);
  $pdf->Cell(50,10,$email,1);
  $pdf->multiCell(30,10,$phone1,1);
  $pdf->multiCell(50,10,$date,1);
  $pdf->multiCell(100,10,$time,1);
  $pdf->multiCell(50,10,$person,1);
  $pdf->multiCell(100,10,$Time_of_feedback,1);

  $pdf->Ln();
}
$pdf->Output();
?>