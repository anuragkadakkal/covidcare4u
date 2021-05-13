<?php
  if(isset($_COOKIE['logined']) && $_COOKIE['logined']==1)
  {
  include 'custheader.php'; 
  include 'connection.php';

  $lkey = $_COOKIE['lkey'];
  $sql="select * from tb_customer inner join tb_login on tb_login.id=tb_customer.loginid where loginid='".$lkey."'";

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
    
?>
<script type="text/javascript">
  function curpassUser() {
    var cur = document.getElementById("cur");
    var curpass = document.getElementById('curpass').value;

    if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(curpass))
       {
         cur.textContent = "**Password Must Have 1(Uppercase,Lowercase,Digit) & 6 to 20 Character Length";
         document.getElementById("curpass").focus();
         return false;
       }
       else
       {
        cur.textContent = "";
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

    if(curpassUser()&&passUser()&&conpassUser())
       {
         return true;
       }
       else
       {
        return false;
       }
  }

</script>

    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>Update Password</h3><br>
			</header>

					<form role="form" method="POST" action="passwordupdate.php" name="myform">
			    			<div class="form-group">
			    				<input type="Password" name="curpass"  class="form-control input-sm" placeholder="Current Password" id="curpass" onkeyup="curpassUser()">
                  <span style="color: red;font-size: 14px" id="cur"></span>

			    			</div>

			    			<div class="form-group">
			    				<input type="Password" name="pass"  class="form-control input-sm" placeholder="New Password" id="pass" onkeyup="passUser()">
                  <span style="color: red;font-size: 14px" id="f9"></span>

			    			</div>

			    			<div class="form-group">
			    				<input type="Password" name="conpass"  class="form-control input-sm" placeholder="Confirm Password" id="conpass" onkeyup="conpassUser()">
                  <span style="color: red;font-size: 14px" id="f10"></span>
			    			</div>
			    			<br>
			    			
			    			<input type="submit" value="Update" class="btn btn-info btn-block" onclick="return checkAll()">
			    		
			    		</form>
						<br><br><br><br><br><br><br><br><br>
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
}
    include 'mainfooter.php';
}
	else
	{
		Header("location:index.php");
	}
?>