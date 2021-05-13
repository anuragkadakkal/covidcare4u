<?php //session_start();
	include 'mainheader.php';
	$phone=$_SESSION["email"];
	$phone=substr($phone,2,12); //echo $phone;exit;
	if($_SESSION['key']!=$_POST['otp'])
	{
		echo "<SCRIPT type='text/javascript'>alert('OTP Verification Failed.');
       window.location.replace(\"whatsapplogin.php\");
       </SCRIPT>";
	}
?>
    
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>Appointment Booking [OTP Verified]</h3><br>
			</header>

			<script type="text/javascript">
	function firstName() {
		var f1 = document.getElementById("f1");
		var fname = document.getElementById('fname').value;

		if(!/^[A-Za-z ]{5,16}$/.test(fname))
	     {
	       f1.textContent = "**Invalid First Name";
	       var x = document.getElementById("fname");
	       x.focus();
	       return false;
	     }
	     else
	     {
	     	f1.textContent = "";
	     	return true;
	     }
	}

	function lastName() {
		var f2 = document.getElementById("f2");
		var lname = document.getElementById('lname').value;

		if(!/^[A-Za-z ]{1,16}$/.test(lname))
	     {
	       f2.textContent = "**Invalid Last Name";
	       document.getElementById("lname").focus();
	       return false;
	     }
	     else
	     {
	     	f2.textContent = "";
	     	return true;
	     }
	}

	function emailUser() {
		var f4 = document.getElementById("f4");
		var email = document.getElementById('email').value;

		if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email))
	     {
	       f4.textContent = "**Invalid Email Format";
	       document.getElementById("email").focus();
	       return false;
	     }
	     else
	     {
	     	f4.textContent = "";
	     	return true;
	     }
	}

	
	function distUser() {

		var f6 = document.getElementById("f6");
		var district = document.getElementById('district').value;

		if(district=="null")
	     {
	       f6.textContent = "**Select any District";
	       document.getElementById("district").focus();
	       return false;
	     }
	     else
	     {
	     	f6.textContent = "";
	     	return true;
	     }
	}

	function addrUser() {
		var f3 = document.getElementById("f3");
		var address = document.getElementById('address').value;

		if (!/^[#.0-9a-zA-Z\s,-]{8,50}$/.test(address))
	     {
	       f3.textContent = "**Invalid Address Format";
	       document.getElementById("address").focus();
	       return false;
	     }
	     else
	     {
	     	f3.textContent = "";
	     	return true;
	     }
	}

	function purpUser() {
		var f20 = document.getElementById("f20");
		var purpose = document.getElementById('purpose').value;

		if (!/^[#.0-9a-zA-Z\s,-]{3,50}$/.test(purpose))
	     {
	       f20.textContent = "**Invalid Purpose";
	       document.getElementById("purpose").focus();
	       return false;
	     }
	     else
	     {
	     	f20.textContent = "";
	     	return true;
	     }
	}

	function checkAll() {

		if(firstName()&&lastName()&&emailUser()&&distUser()&&addrUser()&&purpUser())
	     {
	       return true;
	     }
	     else
	     {
	     	return false;
	     }
	}

</script>
					<form role="form" method="POST" action="sosdrreg.php" name="myform" enctype="multipart/form-data">

						<div class="form-group">
                        	<input type="text" name="phone"  class="form-control input-sm" placeholder="Phone Number" value="<?php echo $phone; ?>" readonly>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="fname"  class="form-control input-sm" placeholder="First Name" id="fname" onkeyup="firstName()">
									<span style="color: red;font-size: 14px" id="f1"></span>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group" >
									<input type="text" name="lname"  class="form-control input-sm" placeholder="Last Name" id="lname" onkeyup="lastName()">
									<span style="color: red;font-size: 14px" id="f2"></span>
								</div>
							</div>
						</div>

						<div class="form-group">
                        	<input type="email" name="emailid"  class="form-control input-sm" placeholder="Email ID"   id="email" onkeyup="emailUser()">
									<span style="color: red;font-size: 14px" id="f4"></span>
						</div>

						
						<div class="form-group">
                        	<select class="form-control bfh-states country" name="district" data-country="US" data-state="CA" id="district" onclick="distUser()">
										<option value="null">Select District</option>
										<option value="Trivandrum">Trivandrum</option>
										<option value="Kollam">Kollam</option>
										<option value="Idukki">Idukki</option>
										<option value="Kottayam">Kottayam</option>
									</select>
									<span style="color: red;font-size: 14px" id="f6"></span>
						</div>

						<div class="form-group">
                        	<div class="form-group" id="response">
									<select class="form-control bfh-states" name="phcid" readonly>
					                    <option>Nearest Doctors</option>
                					</select>
								</div>
						</div>

						<div class="form-group">
							<textarea class="form-control" name="address" placeholder="Enter your address here..." id="address" onkeyup="addrUser()"></textarea>
							<span style="color: red;font-size: 14px" id="f3"></span>
						</div>

						<div class="form-group">
							<textarea class="form-control" name="purpose" placeholder="Enter your purpose here..." id="purpose" onkeyup="purpUser()"></textarea>
							<span style="color: red;font-size: 14px" id="f20"></span>
						</div>

<br>
						<input type="submit" value="Book Appointment" class="btn btn-outline-danger btn-block" onclick="return checkAll()">
					</form>
<br><br>
			</div>

		</div>
	</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "districtdr.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
    });
});

</script>
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