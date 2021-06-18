<?php 
    include 'mainheader.php'; ?>
    
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>User Registration</h3><br>
			</header>

<script type="text/javascript">

	function firstName() {
		var f1 = document.getElementById("f1");
		var fname = document.getElementById('fname').value;

		if(!/^[A-Za-z ]{3,16}$/.test(fname))
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
		var f3 = document.getElementById("f3");
		var email = document.getElementById('email').value;

		if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,8}$/.test(email))
	     {
	       f3.textContent = "**Invalid Email Format";
	       document.getElementById("email").focus();
	       return false;
	     }
	     else
	     {
	     	f3.textContent = "";
	     	return true;
	     }
	}

	function addrUser() {
		var f4 = document.getElementById("f4");
		var address = document.getElementById('address').value;

		if (!/^[#.0-9a-zA-Z\s,-]{8,50}$/.test(address))
	     {
	       f4.textContent = "**Invalid Address Format";
	       document.getElementById("address").focus();
	       return false;
	     }
	     else
	     {
	     	f4.textContent = "";
	     	return true;
	     }
	}

	function phoneUser() {
		var f5 = document.getElementById("f5");
		var phone = document.getElementById('phone').value;

		if(!/^[6-9]{1}[0-9]{9}$/.test(phone))
	     {
	       f5.textContent = "**Invalid Phone # Format";
	       document.getElementById("phone").focus();
	       return false;
	     }
	     else
	     {
	     	f5.textContent = "";
	     	return true;
	     }
	}

	

	function distUser() {

		var f7 = document.getElementById("f7");
		var district = document.getElementById('district').value;

		if(district=="null")
	     {
	       f7.textContent = "**Select any District";
	       document.getElementById("district").focus();
	       return false;
	     }
	     else
	     {
	     	f7.textContent = "";
	     	return true;
	     }
	}

	function distPin() {

		var f8 = document.getElementById("f8");
		var pincode = document.getElementById('pincode').value;

		if(!/^[0-9]{6}$/.test(pincode))
	     {
	       f8.textContent = "**Enter Correct Pincode";
	       document.getElementById("pincode").focus();
	       return false;
	     }
	     else
	     {
	     	f8.textContent = "";
	     	return true;
	     }
	}

	function passUser() {
		var f9 = document.getElementById("f9");
		var pass = document.getElementById('pass').value;

		if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(pass))
	     {
	       f9.textContent = "**Password Must Have 1(Uppercase,Lowercase,Digit) & 6 to 20 Character Length";
	       document.getElementById("pass").focus();
	       return false;
	     }
	     else
	     {
	     	f9.textContent = "";
	     	return true;
	     }
	}

	function conpassUser() {
		var f10 = document.getElementById("f10");
		var conpass = document.getElementById('conpass').value;
		var pass = document.getElementById('pass').value;

		if(conpass!=pass)
	     {
	       f10.textContent = "**Password Doesn't Match";
	       document.getElementById("conpass").focus();
	       return false;
	     }
	     else
	     {
	     	f10.textContent = "";
	     	return true;
	     }
	}

	function checkAll() {

		if(firstName()&&lastName()&&emailUser()&&addrUser()&&phoneUser()&&distUser()&&distPin()&&passUser()&&conpassUser())
	     {
	       return true;
	     }
	     else
	     {
	     	return false;
	     }
	}


</script>

					<form role="form" method="POST" action="customerreg1.php" name="myform">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="fname"  class="form-control input-sm" placeholder="First Name" id="fname" onkeyup="firstName()">
									<span style="color: red;font-size: 14px" id="f1"></span>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="lname"  class="form-control input-sm" placeholder="Last Name" id="lname" onkeyup="lastName()">
									<span style="color: red;font-size: 14px" id="f2"></span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" value="" id="email" onkeyup="emailUser()">
							<span style="color: red;font-size: 14px" id="f3"></span>
						</div>

						<div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="address" placeholder="Address" id="address" onkeyup="addrUser()"></textarea>
							<span style="color: red;font-size: 14px" id="f4"></span>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" id="phone" onkeyup="phoneUser()">
									<span style="color: red;font-size: 14px" id="f5"></span>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<div class="form-check"><label class="form-check-input" for="exampleRadios1" style="color: black;font-weight: bold;">Gender</label><br>
										<input class="form-check-input" type="radio" name="gender" value="Male" checked="">
										<label class="form-check-label" for="exampleRadios1" style="color: grey;">
										Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</label>

										<input class="form-check-input" type="radio" name="gender" value="Female">
										<label class="form-check-label" for="exampleRadios2" style="color: grey;">
										Female
										</label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<select class="form-control bfh-states" name="district" data-country="US" data-state="CA" id="district" onclick="distUser()">
										  <option value="null">Select District</option>
			                              <option value="Trivandrum">Trivandrum</option>
			                              <option value="Kollam">Kollam</option>
			                              <option value="Idukki">Idukki</option>
			                              <option value="Kottayam">Kottayam</option>
			                              <option value="Wayanad">Wayanad</option>
			                              <option value="Ernakulam">Ernakulam</option>
			                              <option value="Alappuzha">Alappuzha</option>
			                              <option value="kozhikode">Kozhikode</option>
			                              <option value="Thrissur">Thrissur</option>
			                              <option value="Palakkad">Palakkad</option>
			                              <option value="Kannur">Kannur</option>
			                              <option value="Malappuram">Malappuram</option>
			                              <option value="Pathanamthitta">Pathanamthitta</option>
			                              <option value="Kasargode">Kasargode</option>
									</select>
									<span style="color: red;font-size: 14px" id="f7"></span>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode" id="pincode" onkeyup="distPin()">
									<span style="color: red;font-size: 14px" id="f8"></span>
								</div>
								
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="pass" class="form-control input-sm" placeholder="Password" id="pass" onkeyup="passUser()">
									<span style="color: red;font-size: 14px" id="f9"></span>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="conpass" class="form-control input-sm" placeholder="Confirm Password" id="conpass" onkeyup="conpassUser()">
									<span style="color: red;font-size: 14px" id="f10"></span>
								</div>
							</div>
						</div><br>
						<input type="submit" value="Register" class="btn btn-info btn-block" onclick="return checkAll()"> 
					</form>
<br>
			</div>

		</div>
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