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
		$this->RotatedText(35,220,'Community Kitchen - Order Bill Details',45);

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

$sql="select * from tb_foodbill inner join tb_food on tb_foodbill.fborderkey=tb_food.filekey where fborderkey='".$key."'";

$flag="";

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
   		   $billdate = $row['fbdate'];
		   $billamt = $row['fbamount'];
		   $billname = $row['fname'];
		   $billaddress = $row['address'];
		   $billitems = $row['items'];
		   $phno = $row['phno'];
		   $status = $row['status'];
		   $fbkey= $row['fbkey'];
  }

$pdf=new PDF();
$pdf->AddPage();


$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Image('food.png',43,3,123);


$pdf->SetXY(70,-240);
$pdf->SetFont('Arial','B',23);
$pdf->Write (5, "Order Bill Details");


//Travel Date
$pdf->SetXY(20,-210);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Bill Date : ");

$pdf->SetXY(45,-210);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $billdate);

//Return Date
$pdf->SetXY(20,-200);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Customer Name : ");

$pdf->SetXY(60,-200);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $billname);

//Vehicle No
$pdf->SetXY(20,-190);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Customer Address : ");

$pdf->SetXY(65,-190);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $billaddress);

//From
$pdf->SetXY(20,-180);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Phone # : ");

$pdf->SetXY(45,-180);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $phno);

//Passenger Names
$pdf->SetXY(20,-170);
$pdf->SetFont('Arial','B',12);
$pdf->Write (5, "Food Item(s) : ");

$pdf->SetXY(55,-170);
$pdf->SetFont('Arial','',12);
$pdf->Write (5, $billitems);


//Pass Key
$pdf->SetXY(20,-130);
$pdf->SetFont('Arial','B',18);
$pdf->SetTextColor(0,102,51);
$pdf->Write (5, "Order Key : ");

$pdf->SetXY(60,-130);
$pdf->SetFont('Arial','B',18);
$pdf->Write (5, $fbkey);

$pdf->SetXY(20,-120);
$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(0,102,51);
$pdf->Write (5, "Total Amount : ");

$pdf->SetXY(73,-120);
$pdf->SetFont('Arial','B',20);
$pdf->Write (5, $billamt."INR");

$pdf->SetXY(73,-60);
$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(0,200,0);
$pdf->Write (5, "B I L L");

$pdf->SetXY(127.5,-60);
$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(0,200,0);
$pdf->Write (5, "P A I D");

$pdf->SetXY(25,-32);
$pdf->SetFont('Arial','B',25);
$pdf->SetTextColor(0,0,0);
$pdf->Write (5, "______________________________________");

$pdf->SetXY(25,-240);
$pdf->SetFont('Arial','B',25);
$pdf->SetTextColor(0,0,0);
$pdf->Write (5, "______________________________________");

/*Status
$pdf->SetXY(20,-110);
$pdf->SetFont('Arial','B',19	);
$pdf->Write (5, "Status : ");


$pdf->SetXY(44,-110);
$pdf->SetFont('Arial','B',19);
if($status==1)
{
	$flag="Approved";
}
$pdf->Write (5, $flag); */

$pdf->Image('success.png',95,223,33);



$pdf->Output('I',$fbkey.'FoodBill.pdf');

?>
        
