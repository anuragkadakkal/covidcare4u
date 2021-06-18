<?php
// this MUST be called prior to any output including whitespaces and line breaks!

  include 'connection.php';

  $lkey = $_COOKIE['lkey'];
  $sql="select * from tb_customer where loginid='".$lkey."'";

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
    $fname=$row['fname'];
    $lname=$row['lname'];
    $district=$row['district'];
    $pincode=$row['pincode'];
    $name=$fname." ".$lname;
  }


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
	$_SESSION["username"] =@$_POST["username"];
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
    <link rel="icon" href="logo.png" type="image/icon type">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
<script src="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"></script>

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

<link href="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css" rel="stylesheet">

<script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js"></script>

</head>
<body>
	
	
<style>.main-nav a{font-weight:bolder}</style>
<header id="header" class="fixed-top">
	<div class="container">

		<div class="logo float-left">

			<a href="customerhome.php" class="scrollto titl" style="font-family: 'Trade Winds', cursive; font-size: 25px">
				<img src="resources/images/covid-logo.png" alt=""  style="width: 350px; height: 80px; margin-bottom: 20px;"></a>



		</div>

		<nav class="main-nav float-right d-none d-lg-block ">
			<ul>
				<li><a href="customerhome.php" class="nav-link">
                <font color="#ff9a8c">Welcome <?php echo $name; ?></font> 
              </a></li>
				<!-- <li><a href="index.php">Home</a></li> -->
				
				<li class="drop-down"><a href="#">Services</a>
					<ul>
						<li><a href="travelpass.php">
								Inter-District Travel Pass</a></li>
						<li><a href="travelpassstatus.php">
								District Travel Pass Status</a></li>
					    <li><a href="orderfood.php">
								Order Food</a></li>
                        <li><a href="orderfoodstatus.php">
                                Order Food Status</a></li>
                        <li><a href="ordermedicine.php">
								Order Medicine</a></li>
                        <li><a href="ordermedicinestatus.php">
								Order Medicine Status</a></li>
					</ul>
				</li>
				<li class="drop-down"><a href="#">Profile</a>
					<ul>
						<li><a href="updateprofile.php">
								Update</a></li>
						<li><a href="updatepassword.php">
								Change Password</a></li>
					</ul>
				</li>

			<!-- 	<li><a href=""> 
						Statistics
				</a></li> -->
				
				<li><a href="logout.php" id="myModal" class="" >Logout</a></li>
			</ul>
		</nav>
		<!-- .main-nav -->

	</div>
</header>
