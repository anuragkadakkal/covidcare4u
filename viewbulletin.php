<?php 
	include 'connection.php';
	include 'mainheader.php';
	$key=date_create($_POST['tdate']);

	$y=date_format($key,"Y");
	$m=date_format($key,"M");
	$M=date_format($key,"m");
	$d=date_format($key,"d");
	$key=date_format($key,'Y-m-d');
	$d1 = strtotime($key);
	$d2 = strtotime(date('Y-m-d'));

	if($d1>$d2||$y<2020||$d1==$d2)
	{
		echo "<SCRIPT type='text/javascript'>alert('No Data Found..!!');
       window.location.replace(\"index.php\");
       </SCRIPT>";
	}

    ?>
    
    
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">
<br><br><br><br><br><br><br>
			<header class="section-header">
				<h3>Download DHS Kerala Daily Bulletin Report</h3><br>
			</header>
			<div class="row">
					<table class="table tbl-bordered" style="text-align: center;">
						<tr>
							<th>Date</th>
							<th>FileName</th>
							<th>Language</th>
							<th>Download</th>
						</tr>
						<tr>
							<td><?php echo $_POST['tdate'];  ?></td>
							<td>Bulletin-HFWD-English-<?php echo $m."-".$d.".pdf";?></td>
							<td>English</td>
							<td><a href="https://dhs.kerala.gov.in/wp-content/uploads/<?php echo $y; ?>/<?php echo $M; ?>/Bulletin-HFWD-English-<?php echo $m; ?>-<?php echo $d; ?>.pdf" download target="_blank"><button class="btn btn-outline-success"><i class="fas fa-download"></i></button></a></td>
						</tr>
						<tr>
							<td><?php echo $_POST['tdate']; ?></td>
							<td>Bulletin-HFWD-Malayalam-<?php echo $m."-".$d.".pdf";?></td>
							<td>Malayalam</td>
							<td><a href="https://dhs.kerala.gov.in/wp-content/uploads/<?php echo $y; ?>/<?php echo $M; ?>/Bulletin-HFWD-Malayalam-<?php echo $m; ?>-<?php echo $d; ?>.pdf" download target="_blank"><button class="btn btn-outline-success"><i class="fas fa-download"></i></button></a></td>
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
?>