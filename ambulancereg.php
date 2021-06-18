<?php 
    include 'mainheader.php';
    include 'connection.php';  ?>
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>Ambulance Registration</h3><br>
			</header>
<script>
	function firstName() {
		var f1 = document.getElementById("f1");
		var fname = document.getElementById('fname').value;

		if(!/^[A-Za-z ]{5,16}$/.test(fname))
	     {
	       f1.textContent = "**Invalid Owner First Name";
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
	       f2.textContent = "**Invalid Owner Last Name";
	       document.getElementById("lname").focus();
	       return false;
	     }
	     else
	     {
	     	f2.textContent = "";
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

	function emailUser() {
		var f4 = document.getElementById("f4");
		var email = document.getElementById('email').value;

		if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,8}$/.test(email))
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

		var f6 = document.getElementById("f6");
		var dist = document.getElementById('dist').value;

		if(dist=="null")
	     {
	       f6.textContent = "**Select any District";
	       document.getElementById("dist").focus();
	       return false;
	     }
	     else
	     {
	     	f6.textContent = "";
	     	return true;
	     }
	}

	function phcUser() {

		var f11 = document.getElementById("f11");
		var phc = document.getElementById('phc').value;

		if(phc=="null")
	     {
	       f11.textContent = "**Select any PHC";
	       document.getElementById("phc").focus();
	       return false;
	     }
	     else
	     {
	     	f11.textContent = "";
	     	return true;
	     }
	}

	function distPinz() {

		var f7z = document.getElementById("f7z");
		var pincodez = document.getElementById('pincodez').value;

		if(!/^[0-9]{6}$/.test(pincodez))
	     {
	       f7z.textContent = "**Enter Correct Pincode";
	       document.getElementById("pincodez").focus();
	       return false;
	     }
	     else
	     {
	     	f7z.textContent = "";
	     	return true;
	     }
	}

	function fileCheck() {

		var f13 = document.getElementById("f13");
		var file = document.getElementById('file').value;

		var file=file.split('.').pop();
		if(file!="pdf")
	     {
	        f13.textContent = "**Select PDF File";
	      	document.getElementById("file").focus();
	     	return false;
	     }
	     else
	     {
	     	f13.textContent = "";
	     	return true;
	     }
	}

	function fileCheck1() {

		var f14 = document.getElementById("f14");
		var file1 = document.getElementById('file1').value;

		var file1=file1.split('.').pop();
		if(file1!="pdf")
	     {
	        f14.textContent = "**Select PDF File";
	      	document.getElementById("file1").focus();
	     	return false;
	     }
	     else
	     {
	     	f14.textContent = "";
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

	function brandUser() {
		var f12 = document.getElementById("f12");
		var district = document.getElementById('district').value;

		if(district=="null")
	     {
	       f12.textContent = "**Select any Brand";
	       document.getElementById("district").focus();
	       return false;
	     }
	     else
	     {
	     	f12.textContent = "";
	     	return true;
	     }
	}

function checkAll() {

		if(firstName()&&lastName()&&addrUser()&&emailUser()&&phoneUser()&&distUser()&&distPinz()&&phcUser()&&brandUser()&&fileCheck()&&fileCheck1()&&passUser()&&conpassUser())
	     {
	       return true;
	     }
	     else
	     {
	     	return false;
	     }
	}
</script>
					<form role="form" method="POST" action="ambulancereg1.php" name="myform" enctype="multipart/form-data">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="fname" class="form-control input-sm" placeholder="First Name" id="fname" onkeyup="firstName()">
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
							<textarea rows="2" class="form-control input-sm" name="address" placeholder="Address" id="address" onkeyup="addrUser()"></textarea>
							<span style="color: red;font-size: 14px" id="f3"></span>
						</div>


						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" id="email" onkeyup="emailUser()">
									<span style="color: red;font-size: 14px" id="f4"></span>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" id="phone" onkeyup="phoneUser()">
									<span style="color: red;font-size: 14px" id="f5"></span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<select class="form-control bfh-states countryz" name="district" data-country="US" data-state="CA" id="dist" onclick="distUser()">
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
									<span style="color: red;font-size: 14px" id="f6"></span>

								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode"  id="pincodez" onkeyup="distPinz()">
									<span style="color: red;font-size: 14px" id="f7z"></span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-group" id="response2">
									<select class="form-control bfh-states" name="phcid" readonly>
					                    <option>Nearest PHC</option>
                					</select>
								</div>
							<span style="color: red;font-size: 14px" id="f11"></span>
						</div>

						

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<select class="form-control bfh-states country" name="brand" id="district" onclick="brandUser()">
										<option value="null">Vehicle Brand</option>
					                    <option value="Maruti Suzuki">Maruti Suzuki</option>
					                    <option value="Tata">Tata</option>
					                    <option value="Mahindra">Mahindra</option>
					                    <option value="Force">Force</option>
					                    <option value="MG">MG</option>
					                    <option value="Toyoto">Toyoto</option>
                					</select>
                					<span style="color: red;font-size: 14px" id="f12"></span>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group" id="response">
									<select class="form-control bfh-states" name="model" readonly>
					                    <option>Vehicle Models</option>
                					</select>
								</div>
							</div>
						</div>

						<div class="form-group">
                        <label class="form-check-input" for="exampleRadios1" style="color: black;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vehicle RC Book</label>&nbsp;<br>
							<input type="file" name="aadharfile"  class="form-control input-sm" id="file" onchange="fileCheck()">
							<span style="color: red;font-size: 14px" id="f13"></span>
						</div>

						<div class="form-group">
                        <label class="form-check-input" for="exampleRadios1" style="color: black;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Driving Licence</label>&nbsp;<br>
							<input type="file" name="aadharfile1"  class="form-control input-sm" id="file1" onchange="fileCheck1()">
							<span style="color: red;font-size: 14px" id="f14"></span>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "carmodelselect.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
    });
});

$(document).ready(function(){
    $("select.countryz").change(function(){
        var selectedCountry = $(".countryz option:selected").val();
        $.ajax({
            type: "POST",
            url: "districtphcpolice.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response2").html(data);
        });
    });
});
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "districtpolice.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response1").html(data);
        });
    });
});
</script>
<?php    include 'mainfooter.php';
?>