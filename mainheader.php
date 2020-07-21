<?php
session_start(); // this MUST be called prior to any output including whitespaces and line breaks!
$GLOBALS['ct_recipient']   = 'YOU@EXAMPLE.COM'; // Change to your email address!
$GLOBALS['ct_msg_subject'] = 'Securimage Test Contact Form';

$GLOBALS['DEBUG_MODE'] = 1;
// CHANGE TO 0 TO TURN OFF DEBUG MODE
// IN DEBUG MODE, ONLY THE CAPTCHA CODE IS VALIDATED, AND NO EMAIL IS SENT


// Process the form, if it was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
    // if the form has been submitted

    foreach($_POST as $key => $value) {
        if (!is_array($key)) {
            // sanitize the input data
            if ($key != 'ct_message') $value = strip_tags($value);
            $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
        }
    }

   
    $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code
	$_SESSION["username"] =@$_POST['username'];
	$_SESSION["pass"] =@$_POST["pass"];

    $errors = array();  // initialize empty error array

    // Only try to validate the captcha if the form has no errors
    // This is especially important for ajax calls
    if (sizeof($errors) == 0) {
        require_once dirname(__FILE__) . '/securimage.php';
        $securimage = new Securimage();

        if ($securimage->check($captcha) == false) {
            $errors['captcha_error'] = 'Incorrect security code entered';
        }
    }

    if (sizeof($errors) == 0) {
        // no errors, send the form
		header("Location: http://localhost/covidcare4u/logincheck.php"); 
        echo "<script type='text/javascript'>alert('Correct security code')</script>";
        
    } else {
        $errmsg = '';
        foreach($errors as $key => $error) {
            // set up error messages to display with each field
            $errmsg .= " - {$error}\n";
        }

        echo "<script type='text/javascript'>alert('Incorrect security code')</script>";
        
    }
} // POST

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
</head>
<body>
	
	
<style>.main-nav a{font-weight:bolder}</style>
<header id="header" class="fixed-top">
	<div class="container">

		<div class="logo float-left">

			<a href="home/index.html" class="scrollto titl" style="font-family: 'Trade Winds', cursive; font-size: 25px">
				<img src="resources/images/covid-logo.png" alt=""  style="width: 350px; height: 80px; margin-bottom: 20px;"></a>



		</div>

		<nav class="main-nav float-right d-none d-lg-block ">
			<ul>
				<li><a href="home/index.html">Home</a></li>
				<li class="drop-down"><a href="#">Public Services</a>
					<ul>

						<li><a href="home/addDomestic.html">Domestic
								Returnees Registration</a></li>
						<li><a href="home/pravasiEntry.html">International
								Returnees</a></li>
						<li><a href="home/addMedicalEmergencyPass.html">Emergency
								Entry Registration</a></li>
						<li><a href="home/shortVisit.html">Short/Regular
								Visit Registration</a></li>
						<li><a href="home/addTrackYourApplication.html">Track
								your Application</a></li>
						<li><a href="home/addOffence.html"> Report
								Offence </a></li>
						<li><a href="home/addComplaints.html">Complaints/Requests</a></li>
						<li><a href="home/addpermission.html">Self
								Declaration</a></li>

						<li><a href="home/addVolunteer.html">Volunteer
								Registration</a></li>
						<li><a href="https://athidhi.kerala.nic.in/" target="_blank" rel="noopener noreferrer">Athidhi Portal (for volunteer)</a></li>
						<li><a href="home/addUpdateVolunteer.html">Update
								Volunteer Details</a></li>
						
						<li><a href="home/addSelfRegistration.html">Self
								Registration For Quarentine People</a></li>
					</ul></li>
				<li class="drop-down"><a href="#">Ambulance</a>
					<ul>
						<li><a href="home/addAmbulance.html">
								Ambulance Owner Registration</a></li>
					</ul></li>

				<li class="drop-down"><a href="#">Goods &amp; Services</a>
					<ul>
						<li><a href="home/addEssentialservices.html">Vehicle
								Permit</a></li>

						<li><a href="home/addShopPermit.html">Operation
								Permit</a></li>
						<li><a href="home/renewVehiclePermit.html">Renew
								Vehicle Permit</a></li>

					</ul></li>
				<li class="drop-down"><a href="#">Info</a>
					<ul>
						<li><a class="view" href="resources/downloads/user%20manual.pdf">User
								Manual</a></li>

						<li><a class="view" href="resources/downloads/Covid19%20Jagratha%20Health%20Component.pdf">Health
								component</a></li>
						<li><a class="view" href="resources/downloads/Family%20-%20Hospital%20Health%20Care%20Management%20Module.pdf">Family-Hospital
								Care</a></li>
						<li><a class="view" href="resources/downloads/imp_feature.pdf">Important
								Features</a></li>
						<li class="drop-down "><a href="#">Help Line</a>
							<ul>
								<li><a class="view" href="resources/downloads/helpline.pdf">Help
										line</a></li>
							</ul></li>

						<li class="drop-down"><a href="#">GO's</a>
							<ul>
								<li class="drop-down"><a href="#">GOK</a>
									<ul>
										<li><a class="view" href="resources/downloads/GO.pdf">GO
												15-04-2020</a></li>
										<li><a class="view" href="resources/downloads/GO2.pdf">GO
												17-04-2020</a></li>
										<li><a class="view" href="resources/downloads/other.pdf">GO
										</a></li>
										<li><a class="view" href="resources/downloads/GO%20Rt.pdf">GO
												Rt 1690 COVID 19 transit instructions. </a></li>
									</ul></li>
								<li class="drop-down"><a href="#">Other States/UTs</a>
									<ul>
										<li><a class="view" href="resources/downloads/dadra.pdf">Dadra
												Nager Haveli</a></li>
										<li><a class="view" href="resources/downloads/goa.pdf">Goa</a></li>
										<li><a class="view" href="resources/downloads/GO%20SOP%20ASSAM.pdf">Assam
										</a></li>
										<li><a class="view" href="resources/downloads/GO%20SOP%20Bihar.pdf">Bihar
										</a></li>
										<li><a class="view" href="resources/downloads/maharastra.pdf">Maharastra</a></li>
									</ul></li>

								<li><a class="view" href="resources/downloads/mha.pdf">MHA
								</a></li>
							</ul></li>
						<li class="drop-down"><a href="#">Guide lines</a>
							<ul>
								<li><a class="view" href="resources/downloads/guildline.pdf">Guide
										line 1</a></li>
								<li><a class="view" href="resources/downloads/guildline1.pdf">Guide
										line 2</a></li>

							</ul></li>

						<li class="drop-down"><a href="#">SOP For Stranded People</a>
							<ul>
								<li><a class="view" href="resources/downloads/Andhra%20Telangana.pdf">Andhra
										Telangana</a></li>
								<li><a class="view" href="resources/downloads/SOP-arunachal.pdf">Arunachal
										Pradesh</a></li>
								<li><a class="view" href="resources/downloads/Assam.pdf">Assam</a></li>

								<li><a class="view" href="resources/downloads/Bihar.pdf">Bihar</a></li>
								<li><a class="view" href="resources/downloads/%20Chhattisgarh.html">
										Chhattisgarh </a></li>
								<li><a class="view" href="resources/downloads/Dadra%20NagerHaveli.pdf">Dadra
										Nager Haveli</a></li>
								<li><a class="view" href="resources/downloads/goa.pdf">Goa</a></li>
								<li><a class="view" href="resources/downloads/Gujarat.pdf">Gujarat</a></li>
								<li><a class="view" href="resources/downloads/madhya%20pradesh.pdf">Madhya
										Pradesh</a></li>
								<li><a class="view" href="resources/downloads/maharastra.pdf">Maharastra</a></li>
								<li><a class="view" href="resources/downloads/Uttarakhand.pdf">Uttarakhand</a></li>
								<li><a class="view" href="resources/downloads/Tamilnadu.pdf">Tamilnadu</a></li>
							</ul></li>

						<li><a href="home/addCCCList.html">Covid
								Care Center List</a></li>
					</ul></li>
				

				<li><a href="home/jagrathaAnalytics.html"> <!-- Jagratha -->
						Analytics
				</a></li>
				
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
	  
<form action="" method="POST" id="contact_form">
<input type="hidden" name="do" value="contact" />
      <div class="modal-body">
		<div class="input-group input-group-lg">
			<input type="email" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Username">
		</div>
<br>
		<div class="input-group input-group-lg">
			<input type="password" name="pass" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Password">
		</div>

		<div class="input-group input-group-lg">

<!-- Captcha Start -->	
			<table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
				<tr>
					<th align="right" valign="top">Captcha</th>
					<td><?php require_once 'securimage.php'; echo Securimage::getCaptchaHtml(array('input_name' => 'ct_captcha')); ?><br>
				</tr>
			</table>
<!-- Captcha End -->


		</div>

	   </div>
       <div class="modal-footer">
		<a style="text-decoration: none; cursor:pointer;">
		Not a user ?</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a style="text-decoration: none; cursor:pointer;">
		Forgot Password
		</a>
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button name="Submit" type="submit"  value="Submit" class="btn btn-primary" style="cursor:pointer">Log In</button>
	  </div>
	  
	</form>  

    </div>
  </div>
</div>
