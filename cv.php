<?php

if(isset($_POST['submit']))
{
	$f_name=$_POST['prenom'];
	$l_name=$_POST['nom'];
	$email=$_POST['email'];


	require('FPDF\fpdf.php');


$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont("Arial", "B", 16);

$pdf -> Cell(0,10,"Welcome ($f_name)",1,1,'C');

$pdf -> Cell(50,10,"Nom de famille: ",1,0);
$pdf -> Cell(65,10,$l_name,1,1);

$pdf -> Cell(50,10,"Prénom: ",1,0);
$pdf -> Cell(65,10,$f_name,1,1);

$pdf -> Cell(50,10,"Email: ",1,0);
$pdf -> Cell(65,10,$email,1,1);

$pdf->Cell(40,10,'Hello World !',1);

$pdf -> Output();
}
