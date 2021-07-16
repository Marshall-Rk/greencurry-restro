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

 
  $content = $row->content;
  $UserWhocreated = $row->UserWhocreated;

  
  
  $pdf->Cell(65,5,$content,1);
  $pdf->Cell(75,10,$UserWhocreated,1);


  $pdf->Ln();
}
$pdf->Output();
?>