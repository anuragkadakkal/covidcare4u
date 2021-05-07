<?php 
	include 'connection.php';
	$key=$_POST['refkey'];
	$sql="select * from tb_vaccinebookhistory where vkey='".$key."' ";

	$result = mysqli_query($conn,$sql);
	$flag=0;
	while ($row=mysqli_fetch_array($result))
	{
		$flag=1;
		$uid=$row['uid'];
	}
	if($flag==0)
	{
		echo "<SCRIPT type='text/javascript'>alert('No Data Found..!!');
       window.location.replace(\"index.php\");
       </SCRIPT>";
	}
	else
	{
    	include 'mainheader.php'; 
    	$sql="select * from tb_vaccinereg inner join tb_vaccinebookhistory on tb_vaccinereg.vkey=tb_vaccinebookhistory.uid where tb_vaccinebookhistory.vkey='".$key."'";
    	$result = mysqli_query($conn,$sql);
    	//echo $sql;exit;

    ?>
    
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">
<br><br><br><br><br><br><br>
			<header class="section-header">
				<h3>Download Your Vaccination Certificate</h3><br>
			</header>
			<div class="row">
					<table class="table tbl-bordered" style="text-align: center;">
						<tr>
							<th>Name</th>
							<th>Gender</th>
							<th>ID #</th>
							<th>YOB - Age</th>
							<th>DOSE 1 - DOSE 2</th>
							<th>Status</th>
						</tr>
						<tr><?php while ($row=mysqli_fetch_array($result))
	{?>
							<td><?php echo $row['fname']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td><?php echo $row['idcard']; ?></td>
							<td><?php echo $row['yob']." - ".date('Y')-$row['yob']." Yrs"?></td>
						    <td><?php echo $row['vacdate']." - ".$row['vacdtaffname']."<br>".$row['vacdate2']." - ".$row['vacstaff2']; ?></td>
						    <td><?php $s=$row['vaccinestatus'];
if($s==0 || $s==1)
{
	echo "<font color='red'><b>Vaccination Not Taken</b></font>";
}
if($s==2)
{
	?>  <a href="fpdf/dose1.php?t=<?php echo $uid; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Dose 1</i></button></a> <?php
}
if($s==3)
{
	?>  <a href="fpdf/dose1.php?t=<?php echo $uid; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Dose 1</i></button></a> &nbsp;<?php echo "<font color='red'><b>Dose 2 Not Taken</b></font>";
}
if($s==4)
{
	?>  <a href="fpdf/dose1.php?t=<?php echo $uid; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Dose 1</i></button></a> | 
  <a href="fpdf/dose2.php?t=<?php echo $uid; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Dose 2</i></button></a>  <?php
}








						    ?></td> <?php } ?>
						</tr>
					</table>		
			</div>				
		</div><br><br><br><br><br><br><br>
	</section>

	
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6 footer-info">
					<br><h4>Disclaimer</h4>
					<p class="text-justify">Conceptualized and designed by Anurag A engaging Master Of Computer Application in Amal Jyothi College Of Engineering, Kanjirampally, Kottayam.
						</p>

					
				</div>

				<div class="col-lg-4 col-md-6 footer-links">
					<br><h4>Useful Links</h4>
					<ul>
						
						<li><a href="http://dhs.kerala.gov.in/" target="_blank" rel="noopener noreferrer">Directorate of Health Services</a></li>
						<li><a href="https://play.google.com/store/apps/details?id=com.qkopy.prdkerala&amp;hl=en_IN" target="_blank" rel="noopener noreferrer">GoK - Direct Kerala
								app</a></li>
						<li><a href="https://play.google.com/store/apps/details/?id=in.nic.kerala.nicscanner" target="_blank" rel="noopener noreferrer">NIC QR Scanner</a></li>
					<li>	
					</ul>
			<!--		<a href="https://itmission.kerala.gov.in/" target="_blank" rel="noopener noreferrer"><img src="resources/images/itmission.png" alt="IT Mission Logo" style="width: 100px; height: 70px;" class="mt-3"></a>
			-->	</div>

				<div class="col-lg-3 col-md-6 footer-contact">

					<h4 style="margin-top: 20px;">Contact Us</h4>
					<i class="fa fa-envelope mr-1 text-white mb-2"></i>directoratehealthcare@kerala.gov.in<br> <a href='resources/downloads/helpline.pdf' class="text-white view"><i class="fa fa-phone mr-1 text-white"></i>Helpline</a>

					<!-- 	 -->
					<h4 class="mt-5">Hit Count:&emsp;1</h4>
				</div>

			</div>
		</div>
	</div>

<?php    include 'mainfooter.php';
}
?>