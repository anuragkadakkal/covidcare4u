<?php
  if(isset($_COOKIE['logined']) && $_COOKIE['logined']==1)
  {
  $lkey = $_COOKIE['lkey'];
  include 'custheader.php';
  include 'connection.php';


  $flag=0;
  $loginid = $_COOKIE['lkey'];
  $sql="select * from tb_medicine where loginid='".$loginid."' order by m_id desc";

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
        <h3>Ordered Food Status</h3><br>
      </header>

 
<?php if($flag==0 || $flag==1){ ?>
<table
  id="table"
  data-toggle="table"
  data-height="460"
  data-pagination="true"
  data-search="true">
  <thead>
    <tr style="text-align: center;">
      <th>Date</th>
      <th>Full Name</th>
      <th>Address</th>
      <th>Items Ordered</th>
      <th>Phone #</th>
      <th>Quarantine</th>
      <th>District</th>
      <th>Pincode</th>
      <th>Status</th>
      <th>Links</th>
    </tr>
  </thead> <?php } ?>

  <?php
if($flag==0)
{

  //echo "No Data Found";

}

?>

  <tbody>
  <?php
        $result = mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_array($result))
              {  $status = $row['status'];?>
    <tr style="text-align: center;">
      <td><?php echo $row['curdate']; ?></td>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['items']; ?></td>
      <td><?php echo $row['phno']; ?></td>
      <td><?php echo $row['qstatus']; ?></td>
      <td><?php echo $row['district']; ?></td>
      <td><?php echo $row['pincode']; ?></td>
      <td> <?php  if($status==0) { ?> <font color="grey"><b>Not [Available/Viewed] </b></font></td> <?php } ?>
           <?php  if($status==1) { ?> <font color="green"><b>Available</b></font><a href="fpdf/medbill.php?t=<?php echo $row['filekey']; ?>" download> <button class="btn btn-success">Reciept</button></a></td> <?php } ?>
           <?php  if($status==2) { ?> <font color="red"><b>Order Cancelled By User</b></font></td> <?php } ?>
           <?php  if($status==3) { ?> <font color="red"><b>Not Available</b></font></td> <?php } ?>
           <?php  if($status==4) { ?> <font color="blue"><b>Paid Online</b></font></td> <?php } ?>
           <?php  if($status==5) { ?> <font color="blue"><b>COD [Paid]</b></font></td> <?php } ?>
           <?php  if($status==6) { ?> <font color="grey"><b>Dr. Prescription Needed </b></font></td> <?php } ?>




      <td><?php  if($status==0)
      { ?>
        <a href="medicinecancel.php?t=<?php echo $row['filekey']; ?>"><button class="btn btn-danger">Cancel</button></a>
   
   <?php   } 
   if ($status==1)
   { ?>
      <a href="mbilpay/index.php?t=<?php echo $row['filekey']; ?>"><button class="btn btn-primary">Payment</button></a>
   <?php }
    if($status==2 )
     { ?>
        <font color="red"><b><?php echo "Not Available";?></b></font>

    <?php }
    if($status==3)
     { ?>
        <font color="red"><b><?php echo "Not Available";?></b></font>

    <?php }
    if($status==4 || $status==5)
     { ?>
        <font color="blue"><a href="fpdf/medbillpaid.php?t=<?php echo $row['filekey']; ?>" download> <button class="btn btn-success">Reciept</button></a></font>

    <?php }

    if($status==6)
    { ?>
<button class="btn btn-success" data-toggle="modal" data-target="#example<?php echo $row['filekey']; ?>">Upload Prescription</button>
    <?php }
      
      
      
      
      ?></td>
    </tr>  <?php } ?>
  </tbody>
</table>

<?php  ?>
<br><br><br><br><br><br><br>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
<?php 
$sql="select * from tb_medicine where loginid='".$loginid."' order by m_id desc"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>

    <!-- Modal -->
    <div class="modal fade" id="example<?php echo $row['filekey']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Upload Doctor Prescription</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="ordermedicinereg.php" method="post" enctype="multipart/form-data">             
              <input type="file" name="aadharfile"  class="form-control input-sm" >
              <input type="hidden" name="filekey" value="<?php echo $row['filekey']; ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Upload</button></form>
          </div>
        </div>
      </div>
    </div>

<?php } ?>
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
      <!--    <a href="https://itmission.kerala.gov.in/" target="_blank" rel="noopener noreferrer"><img src="resources/images/itmission.png" alt="IT Mission Logo" style="width: 100px; height: 70px;" class="mt-3"></a>
      --> </div>

        <div class="col-lg-3 col-md-6 footer-contact">

          <h4 style="margin-top: 20px;">Contact Us</h4>
          <i class="fa fa-envelope mr-1 text-white mb-2"></i>directoratehealthcare@kerala.gov.in<br> <a href='resources/downloads/helpline.pdf' class="text-white view"><i class="fa fa-phone mr-1 text-white"></i>Helpline</a>

          <!--   -->
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
