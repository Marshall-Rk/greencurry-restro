<?php
require('fpdf/fpdf.php');

$conn = new mysqli('localhost', 'root', '', 'email_list');

if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$select = "SELECT * FROM `email_list` ORDER BY id";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
while($row = $result->fetch_object()){

  $id = $row->id;
  $email = $row->email;
  $createdByWhom = $row->createdByWhom;
 
  
  $pdf->Cell(5,10,$id,1);
  $pdf->Cell(55,10,$email,1);
  $pdf->Cell(50,10,$createdByWhom,1);


  $pdf->Ln();
}
$pdf->Output();
?>