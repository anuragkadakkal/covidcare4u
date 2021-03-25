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
				<h3>Inter-District Travel Pass</h3><br>
			</header>
			<script>

	function checkDet()
   {
     var tdate = document.forms["myform"]["tdate"].value;
     var rdate = document.forms["myform"]["rdate"].value;
     var from = document.forms["myform"]["from"].value;
     var to = document.forms["myform"]["to"].value;
     var vehno = document.forms["myform"]["vehno"].value;
     var count = document.forms["myform"]["count"].value;
     var email = document.forms["myform"]["email"].value;
	 var namelist = document.forms["myform"]["namelist"].value;
     var purpose = document.forms["myform"]["purpose"].value;
     
     if(tdate=="")
     {
       alert('Select any Journey date');
       return false;
     } 
     
     if(rdate=="")
     {
       alert('Select any Return Journey date');
       return false;
     } 

	 if(!/^[A-Za-z ]{1,16}$/.test(from))
     {
       alert('Enter Correct From Place Name');
       return false;
     } 
     
     if(!/^[A-Za-z ]{1,16}$/.test(to))
     {
       alert('Enter Correct To Place Name');
       return false;
     }  

	 if(vehno=="") 
     {
        alert("You Have Entered Invalid Vehicle Number")
        return false;
     }

	 if(!/^[0-9]{1}$/.test(count))
     {
       alert('Enter Correct Passenger Count');
       return false;
     }

	 if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)) 
     {
        alert("You have entered an invalid email address!")
        return false;
     }

	 if(!/^[A-Za-z, ]{3,100}$/.test(namelist))
     {
       alert('Enter Names Seperated by Comma');
       return false;
     } 

	 if(!/^[A-Za-z ]{3,30}$/.test(purpose))
     {
       alert('Enter Any Purpose');
       return false;
     } 

   }
</script>
					<form role="form" method="POST" action="applypass.php" name="myform">
						<?php
	$sql= "select district from tb_customer where loginid='".$lkey."'";
	$result = mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($result))
	{
		$district=$row['district'];
	} 
?>
						<div class="form-group">
							<select class="form-control bfh-states" name="pkey" data-country="US" data-state="CA">
									<option value="null">Select Police Station</option>
								<?php $sql= "select * from tb_policestation where district='".$district."'";
	$result = mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($result))
	{ ?> 
										
										<option value="<?php echo $row['policekey']; ?>"><?php echo $row['address']; ?></option>
<?php } ?>
									</select>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="tdate" class="form-control input-sm" placeholder="Travel Date" onfocus="(this.type='date')">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="rdate"  class="form-control input-sm" placeholder="Return Date" onfocus="(this.type='date')">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="from"  class="form-control input-sm" placeholder="From Place">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="to"  class="form-control input-sm" placeholder="To Place">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="vehno"  class="form-control input-sm" placeholder="Vehicle Registration Number">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="count"  class="form-control input-sm" placeholder="Total Travellers">
								</div>
							</div>
						</div>

						<div class="form-group">
							<input type="email" name="email"  class="form-control input-sm" placeholder="Email">
						</div>

						<div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="namelist" placeholder="Traveller(s) Name"></textarea>
						</div>

						<div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="purpose" placeholder="Description of Purpose"></textarea>
						</div>
<br>
						<input type="submit" value="Apply" class="btn btn-info btn-block"  onclick="return checkDet()">
					</form>

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