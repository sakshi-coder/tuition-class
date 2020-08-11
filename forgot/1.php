<?php
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
$header=array('mon','tue','wed','thu','fri','sat');
$data=array('oose','php','cn','cc','java','os','java','php','cc','cn','os','oose','php','oose','cn','os','cc','java');
$pdf->AddPage();
$pdf->SetFont('Arial','','18');
$pdf->BasicTable($header,$data);
$pdf->output();
?>
