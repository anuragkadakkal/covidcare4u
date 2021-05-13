<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
      include 'connection.php';
      include 'drheader.php';
      $drid = $_COOKIE['lkey'];
      $sql="select * from tb_drbooking inner join tb_doctor on tb_doctor.loginid=tb_drbooking.dbdrid where dbdrid='".$drid."' order by dbid desc";
      //echo $sql;exit;
      $result = mysqli_query($conn,$sql);
      $flag=0;
      while ($row=mysqli_fetch_array($result))
    { $flag=1;
    }
    $result = mysqli_query($conn,$sql);
?>


  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>APPOINTMENT DETAILS</b></center></h2><br>
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
  <?php while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $row['dbtime']; ?></td>
      <td><?php echo $row['dbname']; ?></td>
      <td><?php echo $row['dbaddress']; ?></td>
      <td><?php echo "Ph : +91 ".$row['dbphone']."<br>Email : ".$row['dbemail']; ?></td>
      <td><?php echo $row['dbpurpose']; ?></td>
      <td><?php echo $row['dbdistrict']; ?></td>
      <td><font color="red"><b><?php echo $row['dbfeedback']; ?></b></font></td>
      <td><?php $s=$row['dbstatus'];
if($s==0)
{ ?>
<button class="btn btn-success" data-toggle="modal" data-target="#example<?php echo $row['dbkey']; ?>">Approve</button>
<a href="rejectappointment.php?t=<?php echo $row['dbkey']?>"><button class="btn btn-danger">Reject</button></a>
<?php }
if($s==1)
{ ?>
  <font color="green"><b>Approved</b></font> <?php
}
if($s==2)
{ ?>
  <font color="red"><b>Rejected</b></font> <?php
}
       ?>
      </td>
    </tr> 
  <?php } }else{ ?><tbody><tr style="text-align: center;">
      <td colspan="8" rowspan="2"><h4 style="color: red">No Data Available</h4></td></tr> </tbody><?php } ?> 
</table>
<script type="text/javascript">
  function addrUser() {
    var f4 = document.getElementById("f4");
    var address = document.getElementById('address').value;

    if (!/^[#.0-9a-zA-Z\s,-]{8,50}$/.test(address))
       {
         f4.textContent = "**Invalid Message Format";
         document.getElementById("address").focus();
         return false;
       }
       else
       {
        f4.textContent = "";
        return true;
       }
  }

  function startDate() {

    var s1 = document.getElementById("s1");
    var sdate = document.getElementById('sdate').value;

    if(sdate=="")
       {
         s1.textContent = "**Select Any Date";
         document.getElementById("sdate").focus();
         return false;
       }
       else
       {
        s1.textContent = "";
        return true;
       }
    }

  function distUser() {

    var f6 = document.getElementById("f6");
    var district = document.getElementById('district').value;

    if(district=="null")
       {
         f6.textContent = "**Select any District";
         document.getElementById("district").focus();
         return false;
       }
       else
       {
        f6.textContent = "";
        return true;
       }
  }
function checkAll() {

    if(addrUser()&&startDate()&&distUser())
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
$sql="select * from tb_drbooking inner join tb_doctor on tb_doctor.loginid=tb_drbooking.dbdrid where dbdrid='".$drid."' order by dbid desc"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>
    <!-- Modal -->
    <div class="modal fade" id="example<?php echo $row['dbkey']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
              <input type="text" name="drname"  class="form-control input-sm" value="<?php echo $row['dbname']." - ".$row['dbaddress']." - ".$row['dbemail']; ?>" readonly><hr>
              <textarea rows="3" class="form-control input-sm" name="msg" placeholder="Message content goes here..." id="address" onkeyup="addrUser()"></textarea>
              <span style="color: red;font-size: 14px" id="f4"></span><hr>
              <input type="text" name="apdate" class="form-control input-sm" placeholder="Appointment Date" onfocus="(this.type='date')" id="sdate" onfocusout="startDate()">
                  <span style="color: red;font-size: 14px" id="s1"></span><hr>
              <select class="form-control" name="slot" id="district" onclick="distUser()">
                <option value="null">Select Time Slot</option>
                <option value="9am-10am"> 9am-10am </option>
                <option value="10am-11am"> 10am-11am </option>
                <option value="11am-12pm"> 11am-12pm </option>
                <option value="12.30pm-1.30pm"> 12.30pm-1.30pm </option>
                <option value="1.30pm-2.30pm"> 1.30pm-2.30pm </option>
                <option value="2.30pm-3.30pm"> 2.30pm-3.30pm </option>
                <option value="4.30pm-5.30pm"> 4.30pm-5.30pm </option>
              </select>
              <span style="color: red;font-size: 14px" id="f6"></span>
              <input type="hidden" name="dbkey" value="<?php echo $row['dbkey']; ?>">
              <input type="hidden" name="dbemail" value="<?php echo $row['dbemail']; ?>">
              <input type="hidden" name="drphno" value="<?php echo $row['phno']; ?>">
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
    include 'drfooter.php';
 }

    else
    {
        Header("location:../index.php");
    }
?>
