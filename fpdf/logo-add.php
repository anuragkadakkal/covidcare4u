<?php
require('fpdf.php');

class PDF extends FPDF
{
	/* Page header */
	function Header()
	{
		/* Logo */
		$this->Image('logo.png',10,6,30);

	}
}

/* Instanciation of inherited class */
$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Output();
?>