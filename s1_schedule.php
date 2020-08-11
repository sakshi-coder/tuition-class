<?php
//include"connection.php";

require('fpdf/fpdf.php');
class PDF extends FPDF
{
	
function BasicTable($header,$data)
{

$this->SetTextColor(255,0,0);
$this->SetDrawColor(0,0,0);//table border color
$this->SetLineWidth(.4);
//$this->SetFont('','B');
foreach($header as $col)
$this->Cell(25,10,$col,1);
$this->Ln();
$cnt=0;
foreach($data as $col)
{
if($cnt!=6)
{
$this->SetTextColor(0,0,255);
$this->Cell(25,10,$col,1);
$cnt++;
}
if($cnt==6)
{
$cnt=0;
$this->Ln();
}
}
}
}

$pdf=new PDF();
//$pdf->Cell(40,10,'Time Table',1,4,'C)

$header=array('mon','tue','wed','thu','fri','sat');
$data=array('english','science','his/geo','hindi','math','marathi');
$pdf->AddPage();

$pdf->SetFont('Arial','B','16');
//$pdf->Cell(80);
$pdf->Cell(150,20,'TIME TABLE',0,4,'C');

$pdf->SetFont('Arial','','18');
$pdf->BasicTable($header,$data);
$pdf->SetFont('Arial','','16');
$pdf->SetTextColor(0,150,255);
$pdf->cell(150,20,'please note that the following time table should be followed with its respecting subjects ',0,4);
$pdf->output();
?>
