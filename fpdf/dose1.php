<?php
/*call the FPDF library*/
require('rotation1.php');
class PDF extends PDF_Rotate
{
	function Header()
	{
		/* Put the watermark */
		$this->SetFont('Arial','B',25);
		$this->SetTextColor(224,224,224);
		$this->RotatedText(55,170,'COVID-19 DOSE-1 CERTIFICATE',45);

	}

	function RotatedText($x, $y, $txt, $angle)
	{
		/* Text rotated around its origin */
		$this->Rotate($angle,$x,$y);
		$this->Text($x,$y,$txt);
		$this->Rotate(0);
	}
}
	
include '../connection.php';
$key=$_GET['t'];

$sql="select tb_vaccinereg.*,tb_phc.fname as pname,tb_phc.address as padrs,tb_vaccine.*,tb_vaccinereg.vacdate,tb_vaccinereg.vacdtaffname,tb_vaccinebookhistory.vkey as bkkey from tb_vaccinebookhistory inner join tb_vaccinereg on tb_vaccinereg.vkey=tb_vaccinebookhistory.uid inner join tb_phc on tb_phc.loginid=tb_vaccinebookhistory.phcid inner join tb_vaccine on tb_vaccine.vid=tb_vaccinebookhistory.vid where tb_vaccinereg.vkey='".$key."'";
   //echo $sql;exit;
  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
   		 

$pdf=new PDF();
$pdf->AddPage();


$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Image('header.png',0,0,225);


//Travel Date
$pdf->SetXY(20,-220);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Beneficiary Details");

$pdf->SetXY(20,-219);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "________________");

$pdf->SetXY(20,-210);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,"Full Name");

$pdf->SetXY(20,-200);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,"Age");

$pdf->SetXY(20,-190);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,"Gender");

$pdf->SetXY(20,-180);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,"ID #");

$pdf->SetXY(20,-170);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,"Reference #");

//-------------------------------------------------------------

$pdf->SetXY(120,-210);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,$row['fname']);

$pdf->SetXY(120,-200);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,date("Y")-$row['yob']." Yrs");

$pdf->SetXY(120,-190);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,$row['gender']);

$pdf->SetXY(120,-180);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,$row['idcard']);

$pdf->SetXY(120,-170);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,$row['bkkey']);

//---------------------------------------------------------------

$pdf->SetXY(20,-160);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Vaccination Details");

$pdf->SetXY(20,-159);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "________________");

$pdf->SetXY(20,-150);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,"Vaccine Name");

$pdf->SetXY(20,-141);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,"Date of Dose");

$pdf->SetXY(20,-132);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,"Vaccinated by");

$pdf->SetXY(20,-123);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,"Vaccinated at");


//----------------------------------------------------------------

$pdf->SetXY(120,-150);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,$row['vname']);

$pdf->SetXY(120,-141);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,$row['vacdate']);

$pdf->SetXY(120,-132);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,$row['vacdtaffname']);

$pdf->SetXY(120,-123);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,$row['pname']." ,");

$pdf->SetXY(120,-113);
$pdf->SetFont('Arial','',12);
$pdf->Write (5,$row['padrs']);

//----------------------------------------------------------------

$pdf->Image('footer.png',0,198,209.7);

}

$pdf->Output('I','dose1Certificate.pdf');//$fbkey.

?>
        
