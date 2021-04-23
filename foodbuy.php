<?php
session_start();

  if(isset($_COOKIE['logined']) && $_COOKIE['logined']==1)
  {
  $lkey = $_COOKIE['lkey'];
  include 'custheader.php';

?>
    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>Order Foods - Community Kitchen</h3><br>
			</header>
			
					<form role="form" method="POST" action="orderfoodreg.php" name="myform"> <!-- orderfoodreg.php -->
<input type="hidden" name="kitkey" value="<?php echo $_POST['kitkey']; ?>">
<input type="hidden" name="fname" value="<?php echo $_POST['fname']; ?>">
<input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
<input type="hidden" name="phno" value="<?php echo $_POST['phno']; ?>">
<input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
<input type="hidden" name="district" value="<?php echo $_POST['district']; ?>">
<input type="hidden" name="pincode" value="<?php echo $_POST['pincode']; ?>">
						<div class="form-group">

						</div>

						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  
  data-toggle="table"
  data-height="460"
  data-pagination="true"
  data-search="true">
                                    <thead>
                                         <tr>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Price</th>
                                          <th>Quanity Available</th>
                                    </thead>
                                   <!--  <tfoot>
                                        <tr>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Price</th>
                                          <th>Quanity Available</th>
                                          <th>Quanity</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
<?php

$curdate = date("l jS \of F Y");
$sql="SELECT * FROM `tb_foodreg` where loginid='".$_POST['kitkey']."' and ftime='".$curdate."'";//echo $sql;exit;
$result = mysqli_query($conn,$sql);$flag=0;
while($row = mysqli_fetch_assoc($result)){ $flag=1;?>
<tr>
	<td><?php echo $row['fname']; ?></td>
	<td><?php echo $row['fdesc']; ?></td>
	<td><?php echo $row['fprice']; ?> INR </td>
	<td><?php echo $row['fqty']; ?></td>
</tr>

<?php

      }
?>




                                    </tbody>
                                </table>
<div class="form-group">
	<textarea rows="2" class="form-control input-sm" name="foodneeded" placeholder="<?php if($flag==0){ echo "Not Available"; }else{echo "Food Name - Quantity Needed"; } ?>"<?php if($flag==0){ echo "readonly"; } ?>></textarea>
</div>


						
						<button  value="Go To Cart" class="btn btn-info btn-block" >
							Place Order
						</button><!-- onclick="return checkAll()" -->




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