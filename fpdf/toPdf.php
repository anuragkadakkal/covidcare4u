<?php


/*call the FPDF library*/
require('rotation.php');
class PDF extends PDF_Rotate
{
	function Header()
	{
		/* Put the watermark */
		$this->SetFont('Arial','B',30);
		$this->SetTextColor(224,224,224);
		$this->RotatedText(35,220,'Kerala Police - Travel Pass - Approved',45);

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

$sql="select * from tb_vehiclepass where passkey='".$key."'";
$flag="";

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
   		   $trdate = $row['traveldate'];
		   $rtdate = $row['returndate'];
		   $from = $row['fromplace'];
		   $to = $row['toplace'];
		   $carno = $row['carregno'];

		   $percount = $row['personcount'];
		   $passkey = $row['passkey'];
		   $namelist = $row['namelist'];
		   $purpose = $row['purpose'];
		   $status = $row['status'];
  }

$pdf=new PDF();
$pdf->AddPage();


$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Image('logo.png',92,13,33);


$pdf->SetFont('Arial','B',24);
$pdf->Cell(120,60,'Kerala Police',0,0,'C');
$pdf->SetFont('Arial','B',18);

$pdf->SetXY(69,-240);
$pdf->SetFont('Arial','B',18);
$pdf->Write (5, "Inter- District Travel Pass");

//Date
$pdf->SetXY(20,-220);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Date : ");

$pdf->SetXY(40,-220);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, date('d-m-yy'));


//Travel Date
$pdf->SetXY(20,-210);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Travel Date : ");

$pdf->SetXY(50,-210);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $trdate);

//Return Date
$pdf->SetXY(20,-200);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Return Date : ");

$pdf->SetXY(50,-200);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $rtdate);

//Vehicle No
$pdf->SetXY(20,-190);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Vehicle # : ");

$pdf->SetXY(45,-190);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $carno);

//From
$pdf->SetXY(20,-180);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "From Place - To Place :");

$pdf->SetXY(72,-180);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $from." To ".$to);

//Passenger Names
$pdf->SetXY(20,-170);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Passenger(s) Name(s) : ");

$pdf->SetXY(72,-170);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $namelist);

//Purpose
$pdf->SetXY(20,-160);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Purpose : ");

$pdf->SetXY(44,-160);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $purpose);

//Pass Key
$pdf->SetXY(20,-100);
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,102,51);
$pdf->Write (5, "Pass Key : ");

$pdf->SetXY(44,-100);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $passkey);

//Status
$pdf->SetXY(20,-110);
$pdf->SetFont('Arial','B',19	);
$pdf->Write (5, "Status : ");

$pdf->SetXY(44,-110);
$pdf->SetFont('Arial','B',19);
if($status==1)
{
	$flag="Approved";
}
$pdf->Write (5, $flag);

$pdf->Image('logo1.png',100,173,53);

$pdf->SetXY(25,-32);
$pdf->SetFont('Arial','B',25);
$pdf->SetTextColor(0,0,0);
$pdf->Write (5, "______________________________________");

$pdf->SetXY(25,-240);
$pdf->SetFont('Arial','B',25);
$pdf->SetTextColor(0,0,0);
$pdf->Write (5, "______________________________________");



$pdf->Output('I',$passkey.'TravelPAss.pdf');

?>
        
