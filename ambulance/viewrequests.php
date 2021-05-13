<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
      include 'connection.php';
      include 'ambulanceheader.php';
      $ambid = $_COOKIE['lkey'];
      $sql="select * from tb_ambulance where loginid='".$ambid."'";//echo $sql;exit;
      $result = mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_array($result))
      {
        $ambid=$row['ambid'];
      }
      $sql="select tb_sosambreg.*, tb_ambulance.fname as ambfname,tb_ambulance.lname as amblname,tb_ambulance.phno from tb_sosambreg inner join tb_ambulance on tb_ambulance.ambid=tb_sosambreg.ambid where tb_sosambreg.ambid='".$ambid."' order by sosid desc";
      //echo $sql;exit;
      $result = mysqli_query($conn,$sql);
      $flag=0;
      while ($row=mysqli_fetch_array($result))
    { $flag=1;
    }
?>


  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>SOS REQUESTS DETAILS</b></center></h2><br>
        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
    <tr style="text-align: center;">
      <th>Date - Time</th>
      <th>Name</th>
      <th>Address</th>
      <th>Contacts</th>
      <th>Purpose</th>
      <th>District</th>
      <th>Status</th>
      <th>Notify / Update</th>  
    </tr>
  </thead>
 <?php if($flag==1) {?> 
  <tbody>
  <?php $sql="select tb_sosambreg.*, tb_ambulance.fname as ambfname,tb_ambulance.lname as amblname,tb_ambulance.phno from tb_sosambreg inner join tb_ambulance on tb_ambulance.ambid=tb_sosambreg.ambid where tb_sosambreg.ambid='".$ambid."' order by sosid desc";
      //echo $sql;exit;
      $result = mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $row['curdate']; ?></td>
      <td><?php echo $row['fname']." ".$row['lname']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo "Ph : +91 ".$row['phone']."<br>Email : ".$row['email']; ?></td>
      <td><?php echo $row['purpose']; ?></td>
      <td><?php echo $row['district']; ?></td>
      <td><font color="red"><b><?php echo $row['feedback']; ?></b></font></td>
      <td>
        <button class="btn btn-warning" data-toggle="modal" data-target="#example<?php echo $row['soskey']; ?>">Notify</button>
      </td>
    </tr> 
  <?php } }else{ ?><tbody><tr style="text-align: center;">
      <td colspan="8" rowspan="2"><h4 style="color: red">No Data Available</h4></td></tr> </tbody><?php } ?> 
</table>
<script type="text/javascript">
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

  function checkAll() {

    if(purpUser())
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
$sql="select tb_sosambreg.*, tb_ambulance.fname as ambfname,tb_ambulance.lname as amblname,tb_ambulance.phno from tb_sosambreg inner join tb_ambulance on tb_ambulance.ambid=tb_sosambreg.ambid where tb_sosambreg.ambid='".$ambid."' order by sosid desc"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>
    <!-- Modal -->
    <div class="modal fade" id="example<?php echo $row['soskey']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Send Notification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="drnotify.php" method="post" enctype="multipart/form-data">             
              <input type="text" name="drname"  class="form-control input-sm" value="<?php echo $row['fname']." ".$row['lname']." - ".$row['address']." - ".$row['email']; ?>"><hr>
              <textarea rows="3" class="form-control input-sm" name="msg" placeholder="Message content goes here..." id="purpose" onkeyup="purpUser()"></textarea>
              <span style="color: red;font-size: 14px" id="f20"></span>
              <input type="hidden" name="soskey" value="<?php echo $row['soskey']; ?>">
              <input type="hidden" name="drvname" value="<?php echo $row['ambfname']." ".$row['amblname']; ?>">
              <input type="hidden" name="phones" value="<?php echo $row['phno']; ?>">
              <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary" onclick="return checkAll()">Send</button></form>
          </div>
        </div>
      </div>
    </div>

<?php } ?>              

</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="position:relative; z-index:99; ">
   <small><center>Designed and developed by Anurag A | CovidCare4U 2020</center></small>
    
  </footer>


</div>
<!-- ./wrapper -->






<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->




<?php 
    include 'ambulancefooter.php';
 }
    else
    {
        Header("location:../index.php");
    }
?>
