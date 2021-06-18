<?php 
//http://chat-api.phphive.info/login/gui
    include 'mainheader.php'; ?>
    
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>Doctor Appointment Booking - WhatsApp Login</h3><br>
			</header>
<script type="text/javascript">
   function phoneUser() {
    var f5 = document.getElementById("f5");
    var inputPhone = document.getElementById('inputPhone').value;
    if(!/^[6-9]{1}[0-9]{9}$/.test(inputPhone))
       {
         f5.textContent = "**Invalid Phone # Format";
         document.getElementById("inputPhone").focus();
         return false;
       }
       else
       {
        f5.textContent = "";
        return true;
       }
  }

  function checkAll() {

    if(phoneUser())
       {
         return true;
       }
       else
       {
        return false;
       }
  }
</script>

					<form class="form-signin" action="whatslogin.php" method="post">
    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Verify OTP To Continue</h1><br><br><br>

    <input type="text" id="inputPhone" name="phone" class="form-control" placeholder="Enter your Phone Number" id="inputPhone"  onkeyup="phoneUser()">
                  <span style="color: red;font-size: 14px" id="f5"></span>
                  <br>
    <button class="btn btn-outline-success btn-block" type="submit" id="phonewhatsbtn" onclick="return checkAll()"><i class="fab fa-whatsapp"></i>&nbsp;Send OTP</button>
  
<!--     <button class="btn btn-outline-primary btn-block" type="button" id="verifyotp"><i class="fas fa-sign-in-alt"></i> VERIFY OTP</button> --><br><br><br><br>
</form><br>
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script>
<script defer src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

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