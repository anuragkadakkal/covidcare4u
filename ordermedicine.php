<?php
session_start();
unset($_SESSION["cart_item"]);
  if(isset($_COOKIE['logined']) && $_COOKIE['logined']==1)
  {
  $lkey = $_COOKIE['lkey'];
  include 'custheader.php';
  include 'connection.php';
?>
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>Order Medicine</h3><br>
			</header>
<script type="text/javascript">
	
	function distUser() {

		var f7 = document.getElementById("f7");
		var district = document.getElementById('district').value;

		if(district=="null")
	     {
	       f7.textContent = "**Select any Karunya Medicals";
	       document.getElementById("district").focus();
	       return false;
	     }
	     else
	     {
	     	f7.textContent = "";
	     	return true;
	     }
	}

	function purpUser() {
		var f20 = document.getElementById("f20");
		var purpose = document.getElementById('purpose').value;

		if (!/^[#.0-9a-zA-Z\s,-]{3,50}$/.test(purpose))
	     {
	       f20.textContent = "**Invalid Address";
	       document.getElementById("purpose").focus();
	       return false;
	     }
	     else
	     {
	     	f20.textContent = "";
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

	function checkAll() {

		if(distUser()&&purpUser()&&phoneUser())
	     {
	       return true;
	     }
	     else
	     {
	     	return false;
	     }
	}

</script>
<?php
	$sql= "select district from tb_customer where loginid='".$lkey."'";
	$result = mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($result))
	{
		$district=$row['district'];
	} 
?>

					<form role="form" method="POST" action="medbuys.php" name="myform" enctype="multipart/form-data">

						<div class="form-group">
							<select class="form-control bfh-states" name="medkey" data-country="US" data-state="CA" id="district" onclick="distUser()">
									<option value="null">Select Karunya Medicals</option>
								<?php $sql= "select * from tb_karunyamedicals where kmdistrict='".$district."'";
	$result = mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($result))
	{ ?> 
										
										<option value="<?php echo $row['loginid']; ?>"><?php echo $row['kmname']; ?></option>
<?php } ?>
									</select>
									<span style="color: red;font-size: 14px" id="f7"></span>
						</div>

                        <div class="form-group">
							<input type="name" name="fname" value="<?php echo $name; ?>" class="form-control input-sm" placeholder="Full Name" readonly>
						</div>

                        <div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="address" placeholder="Address" id="purpose" onkeyup="purpUser()"></textarea>
							<span style="color: red;font-size: 14px" id="f20"></span>
						</div>

                        <div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number"  id="phone" onkeyup="phoneUser()">
									<span style="color: red;font-size: 14px" id="f5"></span>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<div class="form-check"><label class="form-check-input" for="exampleRadios1" style="color: black;font-weight: bold;">Quarantine Status</label><br>
										<input class="form-check-input" type="radio" name="gender" value="Yes" checked>
										<label class="form-check-label" for="exampleRadios1" style="color: grey;">
										Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</label>

										<input class="form-check-input" type="radio" name="gender" value="No">
										<label class="form-check-label" for="exampleRadios2" style="color: grey;">
										No
										</label>
									</div>
								</div>
							</div>
						</div>

                        <!-- <div class="form-group">
                        <label class="form-check-input" for="exampleRadios1" style="color: black;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor Prescription</label>&nbsp;<br>
							<input type="file" name="aadharfile"  class="form-control input-sm" >
						</div> -->
					
						
									<input type="hidden" name="district" class="form-control input-sm" value="<?php echo $district; ?>">
									<input type="hidden" name="pincode" class="form-control input-sm" value="<?php echo $pincode; ?>">
						
						<input type="submit" value="Order Medicine" class="btn btn-info btn-block" onclick="return checkAll()">
					</form><br><br><br>

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
<?php
	include 'mainfooter.php';
}

	else
	{
		Header("location:index.php");
	}
?>