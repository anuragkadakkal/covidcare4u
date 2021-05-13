<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CovidCare4U</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="all,follow">
<link rel="icon" href="resources/images/covid-logo.png" type="image/icon type">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

<link href="resources/core/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="resources/core/css/font-awesome.min.css">

<link rel="stylesheet" href="resources/core/css/animate.min.css">

<link rel="stylesheet" href="resources/core/css/ionicons.min.css">


<link rel="stylesheet" href="resources/core/css/owl.carousel.min.css">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="resources/core/css/lightbox.min.css">


<link href="resources/core/css/style.css" rel="stylesheet">

<link href="resources/core/css/chosen.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Source+Serif+Pro|Trade+Winds|Zilla+Slab&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="resources/core/css/datatables.css">
<link rel="stylesheet" href="resources/core/css/datepicker.css">

<link rel="stylesheet" href="resources/core/css/jquery.datetimepicker.css">

<link rel="stylesheet" href="resources/core/css/spinner.css">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="resources/core/css/Chart.css">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--marquee smiley-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LckNsgaAAAAAHWodSJ046Ua9yPTV8qxmxffB-i5"></script>
</head>
<body>
	
	
<style>.main-nav a{font-weight:bolder}</style>
<header id="header" class="fixed-top">
	<div class="container">

		<div class="logo float-left">

			<a href="index.php" class="scrollto titl" style="font-family: 'Trade Winds', cursive; font-size: 25px">
				<img src="resources/images/covid-logo.png" alt=""  style="width: 350px; height: 80px; margin-bottom: 20px;"></a>



		</div>

		<nav class="main-nav float-right d-none d-lg-block ">
			<ul>
				<li><a href="index.php">Home</a></li><!--
				<li class="drop-down"><a href="#">Public Services</a>
					<ul>
						<li><a href="home/addMedicalEmergencyPass.html">Emergency
								Entry Registration</a></li>
						<li><a href="home/addTrackYourApplication.html">Track
								your Application</a></li>
						<li><a href="home/addComplaints.html">Complaints/Requests</a></li>

						<!-- <li><a href="home/addVolunteer.html">Volunteer
								Registration</a></li> 
						<li><a href="home/addSelfRegistration.html">Self
								Registration For Quarentine People</a></li>
					</ul></li>
				<li class="drop-down"><a href="#">Ambulance</a>
					<ul>
						<li><a href="home/addAmbulance.html">
								Ambulance Owner Registration</a></li>
					</ul>
				</li> -->
				<li class="drop-down"><a href="#">Registration</a>
					<ul>
						<li><a href="customerreg.php">
								Public User</a></li> 
						<li><a href="medicalstorereg.php">
								Karunya Medicals</a></li>
						<li><a href="communitykitchenreg.php">
								Community Kitchen</a></li>
						<li><a href="ambulancereg.php">
								Ambulance</a></li>
					</ul>
				</li>

				<li class="drop-down"><a href="#">Self Services</a>
					<ul>
						<li class="drop-down"><a href="#">Quarantine</a>
							<ul>
								<li><a  href="quarantinereg.php">Register</a></li>
								<li><a  href="quarantinestatus.php">Status</a></li>
							</ul>
						</li>


						<li class="drop-down"><a href="#">Vaccination</a>
							<ul>
								<li><a  href="vaccinereg.php">Register / Sign In</a></li>
								<!-- <li><a  href="vaccinestatus.php">Status</a></li> -->
							</ul>
						</li>

						<li class="drop-down"><a href="#">Verify</a>
							<ul>
								<li><a data-toggle="modal" data-target="#exampleModal">Vaccine Certificate</a></li>
							</ul>
						</li>
					</ul>
				</li>

				
				<li><a href="sosdoctor.php"><button class="btn btn-outline-danger rounded ">&nbsp;<i class="fas fa-user-md">&nbsp;Doctor Booking&nbsp;</i></button></a></li>

				<li><a href="sosambulance.php"><button class="btn btn-outline-warning rounded ">&nbsp;<i class="fa fa-ambulance mr-1">&nbsp;SOS Ambulance</i></button></a></li>
				
				<li><a href="" id="myModal" class="" data-toggle="modal" data-target="#exampleModalCenter">Login</a></li>
			</ul>
		</nav>
		<!-- .main-nav -->

	</div>
</header>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 130px;">Login - CovidCare4U</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  
<form action="logincheck.php" method="POST" id="contact_form">
<input type="hidden" name="do" value="contact" />
      <div class="modal-body">
		<div class="input-group input-group-lg">
			<input type="email" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Username" required="">
		</div>
<br>
		<div class="input-group input-group-lg">
			<input type="password" name="pass" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Password" required="">
		</div>

		<div class="input-group input-group-lg">

<!-- Captcha Start 
			<table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
				<tr>
					<th align="right" valign="top">Captcha</th>
					<td><?php //require_once 'securimage.php'; echo Securimage::getCaptchaHtml(array('input_name' => 'ct_captcha')); ?><br>
				</tr>
			</table>
Captcha End -->


		</div>

	   </div>
       <div class="modal-footer">
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a style="text-decoration: none; cursor:pointer;">
		Forgot Password
		</a>
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button name="post" type="submit"  value="Submit" class="btn btn-primary" style="cursor:pointer">Log In</button>
	  </div>
	  <input type="hidden" id="token" name="token">
	</form>  

    </div>
  </div>
</div>
<script type="text/javascript">
	function distPin() {

		var f7 = document.getElementById("f7");
		var key = document.getElementById('key').value;

		if(!/^[0-9a-zA-Z]{8}$/.test(key))
	     {
	       f7.textContent = "**Enter Correct Key - 8 Character Long";
	       document.getElementById("key").focus();
	       return false;
	     }
	     else
	     {
	     	f7.textContent = "";
	     	return true;
	     }
	}

	function checkAll() {

		if(distPin())
	     {
	       return true;
	     }
	     else
	     {
	     	return false;
	     }
	}
</script>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verify and Download Vaccination Certificate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" action="viecertificate.php">
        	<input type="name" name="refkey" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Reference Key" id="key" onkeyup="distPin()">
									<span style="color: red;font-size: 14px" id="f7"></span>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;
        <button type="submit" class="btn btn-primary" onclick="return checkAll()">Search</button></form>
      </div>
    </div>
  </div>
</div>
