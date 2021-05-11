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
					<form role="form" method="POST" action="sosdrreg.php" name="myform" enctype="multipart/form-data">

						<div class="form-group">
                        	<input type="text" name="phone"  class="form-control input-sm" placeholder="Phone Number" value="<?php echo $phone; ?>" readonly>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="fname"  class="form-control input-sm" placeholder="First Name">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group" >
									<input type="text" name="lname"  class="form-control input-sm" placeholder="Last Name">
								</div>
							</div>
						</div>

						<div class="form-group">
                        	<input type="email" name="emailid"  class="form-control input-sm" placeholder="Email ID">
						</div>

						
						<div class="form-group">
                        	<select class="form-control bfh-states country" name="district" data-country="US" data-state="CA">
								<option value="null">Select District</option>
								<option value="Trivandrum">Trivandrum</option>
								<option value="Kollam">Kollam</option>
								<option value="Idukki">Idukki</option>
								<option value="Kottayam">Kottayam</option>
							</select>
						</div>

						<div class="form-group">
                        	<div class="form-group" id="response">
									<select class="form-control bfh-states" name="phcid" readonly>
					                    <option>Nearest Doctors</option>
                					</select>
								</div>
						</div>

						<div class="form-group">
							<textarea class="form-control" name="address" placeholder="Enter your address here..."></textarea>
						</div>

						<div class="form-group">
							<textarea class="form-control" name="purpose" placeholder="Enter your purpose here..."></textarea>
						</div>

<br>
						<input type="submit" value="Book Appointment" class="btn btn-outline-danger btn-block" > <!-- onclick="return checkAll()" -->
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