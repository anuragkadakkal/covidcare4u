<?php

  //$lkey = $_COOKIE['lkey'];
  include 'mainheader.php';
  include 'connection.php';

  $key=$_POST['trid'];
  $ph=$_POST['phno'];
  $flag=0;
  $sql="select * from tb_quarreg where phno='".$ph."' and qkey='".$key."'";//echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
    $flag=1;
  }
?>

    <br><br>
	<section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
		<div class="container ">

			<header class="section-header">
				<h3>Quarantine Status & Feedback</h3><br>
			</header>

					<?php if($flag==1){ ?>
<table class="table table-bordered table-sm" style="color: white;width: 100%;color: black;text-align: center;">

              <thead>
                <tr>
                  <th scope="col">Full Name</th>
                  <th scope="col">Address</th>
                   <th scope="col">Contacts</th>
                  <th scope="col">ID #</th>
                  <th scope="col">Feedback</th>
                </tr>
              </thead>
        <?php
        $result = mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_array($result))
              { ?>
              <tbody>
                <tr>
                  <td><?php echo $row['fname']." ".$row['lname']; ?></td>
                  <td><?php echo $row['address']."<br>District : ".$row['district']; ?></td>
                  <td><?php echo $row['phno']."<br>".$row['email']; ?></td>
                  <td><?php echo $row['idno']; ?></td> 
                  <td><?php $q=$row['qfeedback']; 
if($q==NULL)
{
  echo "<font color='red'><b>NA</b></font>";
}
else
{
  echo "<font color='green'><b>".$q."</b></font>";
}


                  ?></td>             
                </tr>
              </tbody>
       <?php       } ?>
            </table> <?php }
else {    echo "<SCRIPT type='text/javascript'>alert('No data found...');
       window.location.replace(\"index.php\");
       </SCRIPT>";     }?>


<br><br><br><br><br><br><br><br><br><br><br><br><br>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
<br><br>
    </section>
   <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: green;">Inter-District Travel Pass Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?php
        $result = mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_array($result))
              { ?>
        <b>Date :</b> <?php echo $row['curdate']; ?> <br>
        <b>Travel Date :</b> <?php echo $row['traveldate']; ?> <br>
        <b>Return Date :</b> <?php echo $row['returndate']; ?> <br>
        <b>From Place :</b> <?php echo $row['fromplace']; ?> <br>
        <b>To Place :</b> <?php echo $row['toplace']; ?> <br>
        <b>Vehicle Number :</b> <?php echo $row['carregno']; ?> <br>
        <b>Total Passengers :</b> <?php echo $row['personcount']; ?> <br>
        <b>Passenger(s) Name(s) :</b> <?php echo $row['namelist']; ?> <br>
        <b>Purpose :</b> <?php echo $row['purpose']; ?> <br>
        <h5>Feedback : <?php echo $row['feedback']; ?></h5>
        <p style="color: red;">NB : Take a screenshot of this report while travelling.</p>

      </div>
      <div class="modal-footer">
      <p style="padding-right: 170px;padding-top: 20px;">	<b>Status :</b> <?php if($row['status']=='0')
                  {
                    echo "<font color='grey'><b>Not Viewed</b></font>";
                  }
                  else if ($row['status']=='1')
                  {
                    echo "<font color='green'><b>Approved &nbsp;</b></font><img src='suc.png' height='40px' width='40px'>";
                  }
                  else
                  {
                  	echo "<font color='red'><b>Rejected &nbsp;</b></font><img src='fail.png' height='50px' width='50px'>";
                  } ?> <br>

      <?php } ?></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      </div>
    </div>
  </div>
</div>  
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

?>
