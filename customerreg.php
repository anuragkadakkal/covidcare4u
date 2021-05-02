<?php 
    include 'mainheader.php'; ?>
    
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>User Registration</h3><br>
			</header>
<script>
	function checkAll()
   {
     var fname = document.forms["myform"]["fname"].value;
     var lname = document.forms["myform"]["lname"].value;
     var email = document.forms["myform"]["email"].value;
     var address = document.forms["myform"]["address"].value;
     var phno = document.forms["myform"]["phno"].value;
     var district = document.forms["myform"]["district"].value;
     var pincode = document.forms["myform"]["pincode"].value;
	 var pass = document.forms["myform"]["pass"].value;
     var conpass = document.forms["myform"]["conpass"].value;
     
     if(!/^[A-Za-z ]{3,16}$/.test(fname))
     {
       alert('Enter Correct First Name [A-Z or a-z]');
       return false;
     } 
     
     if(!/^[A-Za-z ]{1,16}$/.test(lname))
     {
       alert('Enter Correct Last Name [A-Z or a-z]');
       return false;
     }  

	 if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)) 
     {
        alert("You have entered an invalid email address!")
        return false;
     }

     if(address=="")
     {
       alert('Enter Correct Address');
       return false;
     } 

     if(!/^[6-9]{1}[0-9]{9}$/.test(phno))
     {
       alert('Enter Correct Phone starting with 6 7 8 9 digits [10-characters]');
       return false;
     }

     if(district=="null") 
     {
       alert('Select any District');
       return false;
     }

     if(!/^[0-9]{6}$/.test(pincode))
     {
       alert('Enter Correct Pincode [1-9 6-characters]');
       return false;
     }

	 if(pass==conpass)
      {
        if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(pass))
        {
          alert("Password must have atleast 1 uppercase 1 lowercase 1 digit and 6 to 20 character length");
          return false;
        }
      }
      else
      {
        alert("Password Mismatch");
        return false
      }

   }
</script>
					<form role="form" method="POST" action="customerreg1.php" name="myform">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="fname" class="form-control input-sm" placeholder="First Name">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="lname"  class="form-control input-sm" placeholder="Last Name">
								</div>
							</div>
						</div>

						<div class="form-group">
							<input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" value="">
						</div>

						<div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="address" placeholder="Address"></textarea>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<div class="form-check"><label class="form-check-input" for="exampleRadios1" style="color: black;font-weight: bold;">Gender</label><br>
										<input class="form-check-input" type="radio" name="gender" value="Male" checked>
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
									<select class="form-control bfh-states" name="district" data-country="US" data-state="CA">
										<option value="null">Select District</option>
										<option value="Trivandrum">Trivandrum</option>
										<option value="Kollam">Kollam</option>
										<option value="Idukki">Idukki</option>
										<option value="Kottayam">Kottayam</option>
									</select>

								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="pass" class="form-control input-sm" placeholder="Password">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="conpass" class="form-control input-sm" placeholder="Confirm Password">
								</div>
							</div>
						</div><br>
						<input type="submit" value="Register" class="btn btn-info btn-block" > <!-- onclick="return checkAll()" -->
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