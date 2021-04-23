<?php
session_start();

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
				<h3>Order Foods - Community Kitchen</h3><br>
			</header>
			<script>
	function checkAll()
   {
     var fname = document.forms["myform"]["fname"].value;     
     var address = document.forms["myform"]["address"].value;
	 var items = document.forms["myform"]["items"].value;
     var phno = document.forms["myform"]["phno"].value;
     var district = document.forms["myform"]["district"].value;
     var pincode = document.forms["myform"]["pincode"].value;
	 
     
     if(!/^[A-Za-z ]{3,16}$/.test(fname))
     {
       alert('Enter Correct Full Name [A-Z or a-z]');
       return false;
     } 

	 if(address=="")
     {
       alert('Enter Correct Address');
       return false;
     } 
     
     if(items=="")
     {
       alert('Enter any Food Details');
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

   }
</script>
					<form role="form" method="POST" action="foodbuy.php" name="myform"> <!-- orderfoodreg.php -->
<?php
	$sql= "select district from tb_customer where loginid='".$lkey."'";
	$result = mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($result))
	{
		$district=$row['district'];
	} 
?>

						<div class="form-group">
							<select class="form-control bfh-states" name="kitkey" data-country="US" data-state="CA">
									<option value="null">Select Communtiy Kitchen</option>
								<?php $sql= "select * from tb_communitykitchen where cmdistrict='".$district."'";
	$result = mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($result))
	{ ?> 
										
										<option value="<?php echo $row['loginid']; ?>"><?php echo $row['cmname']; ?></option>
<?php } ?>
									</select>
						</div>

                        <div class="form-group">
							<input type="name" name="fname"  class="form-control input-sm" placeholder="Full Name">
						</div>

                        <div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="address" placeholder="Address"></textarea>
						</div>

                     <!--    <div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="items" placeholder="Food Items Needed and Quantity"></textarea>
						</div> -->

                        <div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number">
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

						
						<input type="submit" value="Select Food(s)" class="btn btn-info btn-block" ><!-- onclick="return checkAll()" -->
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