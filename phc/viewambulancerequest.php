<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
      include 'connection.php';
      include 'phcheader.php';
      $phcid = $_COOKIE['lkey'];
      $sql="select * from tb_ambulance inner join tb_login on tb_login.id=tb_ambulance.loginid where tb_ambulance.phcid='".$phcid."'";//echo $sql;exit;
      $result = mysqli_query($conn,$sql);
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>REGISTERED AMBULANCE DETAILS</b></center></h2><br>
        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
    <tr style="text-align: center;">
      <th>Full Name</th>
      <th>Address</th>
      <th>Email</th>
      <th>Phone #</th>
      <th>District</th>
      <th>Pincode</th>
      <th>Brand</th>
      <th>Model</th>
      <th>RC & DL</th>
<!--       <th>Feedback</th> -->
      <th>Active / Inactive</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $row['fname']." ".$row['lname']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['phno']; ?></td>
      <td><?php echo $row['district']; ?></td>
      <td><?php echo $row['pincode']; ?></td>
      <td><?php echo $row['brand']; ?></td>
      <td><?php echo $row['model']; ?></td>
      <td>
        <a href="../Uploads/<?php echo $row['ambkey']."/".$row['rcbook']; ?>" download> <button class="btn btn-warning"><i class="fas fa-download">&nbsp;</i>RC</button></a>
        <a href="../Uploads/<?php echo $row['ambkey']."/".$row['drlicence']; ?>" download> <button class="btn btn-warning"><i class="fas fa-download">&nbsp;</i>DL</button></a>
      </td>
      <!-- <td><button class="btn btn-secondary" data-toggle="modal" data-target="#example<?php //echo $row['ambkey']; ?>">Notify</button></td> -->
      <td><?php $status = $row['status'];
      if($status==0)
        { ?>
           <a href="approveamb.php?t=<?php echo $row['ambkey']; ?>"><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button></a>
           <a href="rejectamb.php?t=<?php echo $row['ambkey']; ?>"><button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a>
  <?php      }
        if($status==1)
        { ?>
           <font color="green"><b>Approved</b></font>
  <?php      }
        if($status==2)
        {   ?>
           <font color="red"><b>Rejected</b></font>
  <?php      }    ?>

  </td> 
    </tr> 
  <?php } ?> 
  </tbody>
</table>

<?php 
$sql="select * from tb_ambulance inner join tb_login on tb_login.id=tb_ambulance.loginid where tb_ambulance.phcid='".$phcid."'"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>
    <!-- Modal -->
    <div class="modal fade" id="example<?php echo $row['ambkey']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Send Feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="ambulancenotify.php" method="post" enctype="multipart/form-data">             
              <input type="text" name="drname"  class="form-control input-sm" value="<?php echo $row['fname']." ".$row['lname']; ?>"><hr>
              <textarea rows="3" class="form-control input-sm" name="msg" placeholder="Message content goes here..."></textarea>
              <input type="hidden" name="drid" value="<?php echo $row['ambkey']; ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Send</button></form>
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
    include 'phcfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>