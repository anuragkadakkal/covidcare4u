<?php
include 'mainheader.php';
//session_start();
$phone=$_SESSION["email"];
$phone=substr($phone,3,12);//exit;
     ?>
    
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>Quarantine Registration [OTP Verified]</h3><br>
			</header>
					<form role="form" method="POST" action="quarbalancereg.php" name="myform" enctype="multipart/form-data">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="fname" class="form-control input-sm" placeholder="First Name" value="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="lname"  class="form-control input-sm" placeholder="Last Name">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="address" placeholder="Address"></textarea>
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


						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group" id="response1">
									<select class="form-control bfh-states" name="pcid" readonly>
					                    <option>Nearest Police Station</option>
                					</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group" id="response">
									<select class="form-control bfh-states" name="phcid" readonly>
					                    <option>Nearest PHC</option>
                					</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="sdate" class="form-control input-sm" placeholder="Start Date" onfocus="(this.type='date')">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="edate"  class="form-control input-sm" placeholder="End Date" onfocus="(this.type='date')">
								</div>
							</div>
						</div>


						<div class="form-group">
							<input type="text" name="idno"  class="form-control input-sm" placeholder="Identity Card #">
						</div>
						<input type="hidden" name="phone"  class="form-control input-sm" value="<?php echo $phone; ?>">
						<div class="form-group">
                        <label class="form-check-input" for="exampleRadios1" style="color: black;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Identity Card</label>&nbsp;<br>
							<input type="file" name="aadharfile"  class="form-control input-sm" >
						</div>
<br>
						<input type="submit" value="Register" class="btn btn-info btn-block" > <!-- onclick="return checkAll()" -->
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
            url: "districtphcpolice.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
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