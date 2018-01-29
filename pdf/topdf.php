
<?php
require('fpdf/fpdf.php');
require('dbConnect.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,12,40);
    // Arial bold 15
    $this->Ln(30);
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(200,10,'GECK Time Table',1,0,'C');
    $this->Ln(30);
    $this->Cell(100,10,'CSE and ECE',1,0,'C');
    // Line break
    $this->Ln(30);
    $this->SetFont('Arial','B',11);
    $this->SetFillColor(180,180,255);
    $this->SetDrawColor(50,50,100);
    $this->Cell(38,10,'H1',1,0,'',true);
    $this->Cell(38,10,'H2',1,0,'',true);
    $this->Cell(38,10,'H3',1,0,'',true);
    $this->Cell(38,10,'BREAK',1,0,'',true);
    $this->Cell(38,10,'H4',1,0,'',true);
    $this->Cell(38,10,'H5',1,0,'',true);
    $this->Cell(38,10,'H6',1,0,'',true);
    $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF('p','mm','A3');
$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true,30);
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetDrawColor(50,50,100);
////////////////CS1//////////////////////////////////////
$query=mysqli_query($con,"select * from table1");
$pdf->Multicell(0,10,"First Year CSE ");
while ($data=mysqli_fetch_array($query)){
  $pdf->Cell(38,20,$data['h1'],1,0);
  $pdf->Cell(38,20,$data['h2'],1,0);
  $pdf->Cell(38,20,$data['h3'],1,0);
  $pdf->Cell(38,20,$data['break'],1,0);
  $pdf->Cell(38,20,$data['h4'],1,0);
  $pdf->Cell(38,20,$data['h5'],1,0);
  $pdf->Cell(38,20,$data['h6'],1,1);
}
//////////////////CS2/////////////////////////////////////////////
$pdf->Multicell(0,10,"\n\n\n\n\nSecond Year CSE");
$query=mysqli_query($con,"select * from table2");
while ($data=mysqli_fetch_array($query)){
  $pdf->Cell(38,20,$data['h1'],1,0);
  $pdf->Cell(38,20,$data['h2'],1,0);
  $pdf->Cell(38,20,$data['h3'],1,0);
  $pdf->Cell(38,20,$data['break'],1,0);
  $pdf->Cell(38,20,$data['h4'],1,0);
  $pdf->Cell(38,20,$data['h5'],1,0);
  $pdf->Cell(38,20,$data['h6'],1,1);
}
//////////////////CS3/////////////////////////////////////
$pdf->Multicell(0,10,"Third Year CSE ");
$query=mysqli_query($con,"select * from table3");
while ($data=mysqli_fetch_array($query)){
  $pdf->Cell(38,20,$data['h1'],1,0);
  $pdf->Cell(38,20,$data['h2'],1,0);
  $pdf->Cell(38,20,$data['h3'],1,0);
  $pdf->Cell(38,20,$data['break'],1,0);
  $pdf->Cell(38,20,$data['h4'],1,0);
  $pdf->Cell(38,20,$data['h5'],1,0);
  $pdf->Cell(38,20,$data['h6'],1,1);
}
///////////////////CS4//////////////////////////////////
$pdf->Multicell(0,10,"\n\n\n\n\nFourth Year CSE");
$query=mysqli_query($con,"select * from table4");
while ($data=mysqli_fetch_array($query)){
  $pdf->Cell(38,20,$data['h1'],1,0);
  $pdf->Cell(38,20,$data['h2'],1,0);
  $pdf->Cell(38,20,$data['h3'],1,0);
  $pdf->Cell(38,20,$data['break'],1,0);
  $pdf->Cell(38,20,$data['h4'],1,0);
  $pdf->Cell(38,20,$data['h5'],1,0);
  $pdf->Cell(38,20,$data['h6'],1,1);
}
////////////ECE1//////////////////////////////////
$pdf->Multicell(0,10,"FIrst Year ECE ");
$query=mysqli_query($con,"select * from table5");
while ($data=mysqli_fetch_array($query)){
  $pdf->Cell(38,20,$data['h1'],1,0);
  $pdf->Cell(38,20,$data['h2'],1,0);
  $pdf->Cell(38,20,$data['h3'],1,0);
  $pdf->Cell(38,20,$data['break'],1,0);
  $pdf->Cell(38,20,$data['h4'],1,0);
  $pdf->Cell(38,20,$data['h5'],1,0);
  $pdf->Cell(38,20,$data['h6'],1,1);
}

//////////////////ECE2///////////////////////////////////
$pdf->Multicell(0,10,"\n\n\n\n\nSecond Year ECE");
$query=mysqli_query($con,"select * from table6");
while ($data=mysqli_fetch_array($query)){
  $pdf->Cell(38,20,$data['h1'],1,0);
  $pdf->Cell(38,20,$data['h2'],1,0);
  $pdf->Cell(38,20,$data['h3'],1,0);
  $pdf->Cell(38,20,$data['break'],1,0);
  $pdf->Cell(38,20,$data['h4'],1,0);
  $pdf->Cell(38,20,$data['h5'],1,0);
  $pdf->Cell(38,20,$data['h6'],1,1);
}
///////////////ECE3////////////////////////////////////////////
$pdf->Multicell(0,10,"Third Year ECE ");
$query=mysqli_query($con,"select * from table7");
while ($data=mysqli_fetch_array($query)){
  $pdf->Cell(38,20,$data['h1'],1,0);
  $pdf->Cell(38,20,$data['h2'],1,0);
  $pdf->Cell(38,20,$data['h3'],1,0);
  $pdf->Cell(38,20,$data['break'],1,0);
  $pdf->Cell(38,20,$data['h4'],1,0);
  $pdf->Cell(38,20,$data['h5'],1,0);
  $pdf->Cell(38,20,$data['h6'],1,1);
}

//////////////ECE4///////////////////////////////////////////////

$pdf->Multicell(0,10,"\n\n\n\n\nFourth Year ECE");
$query=mysqli_query($con,"select * from table8");
while ($data=mysqli_fetch_array($query)){
  $pdf->Cell(38,20,$data['h1'],1,0);
  $pdf->Cell(38,20,$data['h2'],1,0);
  $pdf->Cell(38,20,$data['h3'],1,0);
  $pdf->Cell(38,20,$data['break'],1,0);
  $pdf->Cell(38,20,$data['h4'],1,0);
  $pdf->Cell(38,20,$data['h5'],1,0);
  $pdf->Cell(38,20,$data['h6'],1,1);
}

$pdf->Output();
?>
