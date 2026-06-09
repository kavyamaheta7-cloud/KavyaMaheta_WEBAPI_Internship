<?php

require('fpdf19/fpdf.php');

$conn = mysqli_connect("localhost","root","","pdf_demo");

$pdf = new FPDF('P','mm','A3'); //$pdf = new FPDF('L','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Internship Student Report',0,1,'C');

$pdf->Ln(5);

$pdf->SetFont('Arial','B',12);

$pdf->Cell(20,10,'rno',1);
$pdf->Cell(22,10,'rdate',1);
$pdf->Cell(35,10,'stud_id',1);
$pdf->Cell(55,10,'stud_nm',1);
$pdf->Cell(20,10,'ccode',1);
$pdf->Cell(60,10,'cname',1);
$pdf->Cell(20,10,'amt',1);
$pdf->Cell(40,10,'pay_method',1);
$pdf->Ln();

$sql = "SELECT * FROM receipt order by amt desc";
$result = mysqli_query($conn,$sql);

$pdf->SetFont('Arial','',11);

while($row = mysqli_fetch_assoc($result))
{
    
    $pdf->Cell(20,10,$row['rno'],1);
    $pdf->Cell(22,10,$row['rdate'],1);
    $pdf->Cell(35,10,$row['stud_id'],1);
    $pdf->Cell(55,10,$row['stud_nm'],1);
    $pdf->Cell(20,10,$row['ccode'],1);
    $pdf->Cell(60,10,$row['cname'],1);
    $pdf->Cell(20,10,$row['amt'],1);
    $pdf->Cell(40,10,$row['pay_method'],1);
    $pdf->Ln();
}

$pdf->Output();

?>