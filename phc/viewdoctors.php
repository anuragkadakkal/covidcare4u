<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
      include 'connection.php';
      include 'phcheader.php';
      $phcid = $_COOKIE['lkey'];
      $sql="select * from tb_doctor inner join tb_login on tb_login.id=tb_doctor.loginid where tb_doctor.phcid='".$phcid."'";//echo $sql;exit;
      $result = mysqli_query($conn,$sql);
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>PHC DOCTOR DETAILS</b></center></h2><br>
        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
    <tr style="text-align: center;">
      <th>Full Name</th>
      <th>Address</th>
      <th>Email</th>
      <th>Phone #</th>
      <th>Gender</th>
      <th>District</th>
      <th>Pincode</th>
      <th>Qualification</th>
      <th>Specialization</th>
      <th>Experience</th>
      <th>Notify / Update</th>
      <th>Active / Inactive</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo "Dr. ".$row['fname']." ".$row['lname']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['phno']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['district']; ?></td>
      <td><?php echo $row['pincode']; ?></td>
      <td><?php echo $row['qual']; ?></td>
      <td><?php echo $row['specs']; ?></td>
      <td><?php echo $row['exp']; ?></td>
      <td>
        <a href="updatephcdr.php?t=<?php echo $row['drkey']; ?>"><button class="btn btn-info">Update</button></a>
        <button class="btn btn-warning" data-toggle="modal" data-target="#example<?php echo $row['drkey']; ?>">Notify</button>
      </td>
      <td><?php $status = $row['status'];
                                            if($status==1)
                                            { ?>
                                               <font color="green"><b>Active</b></font>&nbsp;&nbsp;<a href="deactivatedr.php?t=<?php echo $row['drkey']; ?>"><button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a>
                                 <?php      }
                                            if($status==2)
                                            {   ?>
                                               <font color="red"><b>Inactive</b></font>&nbsp;&nbsp;<a href="activatedr.php?t=<?php echo $row['drkey']; ?>"><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button></a>
                                 <?php      }    ?>

</td> 
    </tr> 
  <?php } ?> 
  </tbody>
</table>

<?php 
$sql="select * from tb_doctor inner join tb_login on tb_login.id=tb_doctor.loginid where tb_doctor.phcid='".$phcid."'"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>
    <!-- Modal -->
    <div class="modal fade" id="example<?php echo $row['drkey']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
              <input type="text" name="drname"  class="form-control input-sm" value="<?php echo "Dr. ".$row['fname']." ".$row['lname']; ?>"><hr>
        <textarea rows="3" class="form-control input-sm" name="msg" placeholder="Message content goes here..." 
        required="" ></textarea>
 

            <input type="hidden" name="drid" value="<?php echo $row['id']; ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary"  >Send</button></form>
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