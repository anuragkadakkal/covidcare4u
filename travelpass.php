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
<script type="text/javascript">
	function distUser() {

		var f7 = document.getElementById("f7");
		var district = document.getElementById('district').value;

		if(district=="null")
	     {
	       f7.textContent = "**Select any Police Station";
	       document.getElementById("district").focus();
	       return false;
	     }
	     else
	     {
	     	f7.textContent = "";
	     	return true;
	     }
	}

	function startDate() {

		var s1 = document.getElementById("s1");
		var sdate = document.getElementById('sdate').value;

		if(sdate=="")
	     {
	       s1.textContent = "**Select Any Travel Date";
	       document.getElementById("sdate").focus();
	       return false;
	     }
	     else
	     {
	     	s1.textContent = "";
	     	return true;
	     }
	}

	function endDate() {

		var e1 = document.getElementById("e1");
		var edate = document.getElementById('edate').value;

		if(edate=="")
	     {
	       e1.textContent = "**Select Any Return Date";
	       document.getElementById("edate").focus();
	       return false;
	     }
	     else
	     {
	     	e1.textContent = "";
	     	return true;
	     }
	}
	function firstNames() {
		var f1s = document.getElementById("f1s");
		var fname = document.getElementById('fnames').value;

		if(!/^[A-Za-z ]{5,16}$/.test(fname))
	     {
	       f1s.textContent = "**Invalid From Place";
	       var x = document.getElementById("fnames");
	       x.focus();
	       return false;
	     }
	     else
	     {
	     	f1s.textContent = "";
	     	return true;
	     }
	}

	function lastNames() {
		var top = document.getElementById("top");
		var ln = document.getElementById('ln').value;

		if(!/^[A-Za-z ]{5,16}$/.test(ln))
	     {
	       top.textContent = "**Invalid From Place";
	       var x = document.getElementById("ln");
	       x.focus();
	       return false;
	     }
	     else
	     {
	     	top.textContent = "";
	     	return true;
	     }
	}

	function vehNames() {
		var top1 = document.getElementById("top1");
		var vn = document.getElementById('vn').value;
		vn.toUpperCase();

		if(!/^[klKL]{2}[-]{1}[0-9]{1,2}[-]{1}[a-zA-z]{1,2}[-]{1}[0-9]{1,4}$/.test(vn))
	     {
	       top1.textContent = "**Invalid Correct Vehicle Number [KL-XX-XX-XXXX]";
	       var x = document.getElementById("vn");
	       x.focus();
	       return false;
	     }
	     else
	     {
	     	top1.textContent = "";
	     	return true;
	     }
	}

	function totTravel() {

		var top2 = document.getElementById("top2");
		var tot = document.getElementById('tot').value;

		if(!/^[0-9]{1}$/.test(tot))
	     {
	       top2.textContent = "**Enter Correct Passenger(s) Count";
	       document.getElementById("tot").focus();
	       return false;
	     }
	     else
	     {
	     	top2.textContent = "";
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

	function travelNames() {
		var f1s = document.getElementById("tna");
		var fname = document.getElementById('tnames').value;

		if(!/^[A-Za-z ,_-]{5,56}$/.test(fname))
	     {
	       f1s.textContent = "**Invalid Traveler(s) Name";
	       var x = document.getElementById("tnames");
	       x.focus();
	       return false;
	     }
	     else
	     {
	     	f1s.textContent = "";
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

	function cardUser() {
		var cno = document.getElementById("cno");
		var cardno = document.getElementById('cardno').value;

		if (!/^[0-9]{1,3}[/]{1}[0-9]{4}[/]{1}[0-9]{4}$/.test(cardno))
	    {
	    	//24/4688/2016
	    	cno.textContent = "**Invalid Driving License Number Format";
	    	document.getElementById("cardno").focus();
	    	return false;
	    }
	    else
	    {
	    	cno.textContent = "";
	     	return true;
	    }
	}

	function fileCheck() {

		var f8 = document.getElementById("f8");
		var file = document.getElementById('file').value;

		var file=file.split('.').pop();
		/*if(file!="jpg")
		{
		  f8.textContent = "**Select .jpg/.jpeg File";
			document.getElementById("file").focus();
			return false;
		}*/
		if(file=="jpeg" || file=='jpg')
		{
		  f8.textContent = "";
			return true;
		}
		else
		{
			f8.textContent = "**Select .jpg/.jpeg File";
			document.getElementById("file").focus();
			return false;
		}
	}

	function checkAlls(){
		if(distUser()&&startDate()&&endDate()&&firstNames()&&lastNames()
			&&vehNames()&&totTravel()&&emailUser()&&travelNames()&&purpUser()&&fileCheck())
	     {
	       return true;
	     }
	     else
	     {
	     	return false;
	     }
	}


</script>
					<form role="form" method="POST" action="applypass.php" name="myform" enctype="multipart/form-data">
						<?php
	$sql= "select district from tb_customer where loginid='".$lkey."'";
	$result = mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($result))
	{
		$district=$row['district'];
	} 
?>
						<div class="form-group">
							<select class="form-control bfh-states" name="pkey" data-country="US" data-state="CA" id="district" onclick="distUser()">
									<option value="null">Select Police Station</option>
								<?php $sql= "select * from tb_policestation where district='".$district."'";
	$result = mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($result))
	{ ?> 
										
										<option value="<?php echo $row['loginid']; ?>"><?php echo $row['address']; ?></option>
<?php } ?>
									</select>
									<span style="color: red;font-size: 14px" id="f7"></span>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="tdate" class="form-control input-sm" placeholder="Travel Date" onfocus="(this.type='date')" id="sdate" onfocusout="startDate()">
									<span style="color: red;font-size: 14px" id="s1"></span>

								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="rdate"  class="form-control input-sm" placeholder="Return Date" onfocus="(this.type='date')" id="edate" onfocusout="endDate()">
									<span style="color: red;font-size: 14px" id="e1"></span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="from"  class="form-control input-sm" placeholder="From Place" id="fnames" onkeyup="firstNames()">
									<span style="color: red;font-size: 14px" id="f1s"></span>

								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="to"  class="form-control input-sm" placeholder="To Place" 
									id="ln" onkeyup="lastNames()">
									<span style="color: red;font-size: 14px" id="top"></span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="vehno"  class="form-control input-sm" placeholder="Vehicle Registration Number" id="vn" onkeyup="vehNames()"  oninput="this.value = this.value.toUpperCase()">
									<span style="color: red;font-size: 14px" id="top1"></span>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="number" name="count"  class="form-control input-sm" placeholder="Total Travellers" id='tot' onkeyup="totTravel()">
									<span style="color: red;font-size: 14px" id="top2"></span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<input type="email" name="email"  class="form-control input-sm" placeholder="Email" id="email" onkeyup="emailUser()">
							<span style="color: red;font-size: 14px" id="f3"></span>
						</div>

						<div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="namelist" placeholder="Traveller(s) Name" id="tnames" onkeyup="travelNames()"></textarea>
							<span style="color: red;font-size: 14px" id="tna"></span>
						</div>

						<div class="form-group">
							<textarea rows="2" class="form-control input-sm" name="purpose" placeholder="Description of Purpose" id="purpose" onkeyup="purpUser()"></textarea>
							<span style="color: red;font-size: 14px" id="f20"></span>
						</div>

						<div class="form-group">
							<input type="text" name="cardno"  class="form-control input-sm" placeholder="ID Card #" id="cardno" onkeyup="cardUser()">
							<span style="color: red;font-size: 14px" id="cno"></span>
						</div>

						<div class="form-group">
							<span><b>Driving Licence</b></span>
							<input type="file" name="aadharfile"  class="form-control input-sm" id="file" onchange="fileCheck()">
							<span style="color: red;font-size: 14px" id="f8"></span>
						</div>
						<input type="submit" value="Apply" class="btn btn-info btn-block"  onclick="return checkAlls()">
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