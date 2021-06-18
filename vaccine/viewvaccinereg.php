<?php
    session_start();
    setcookie('phclogined',1);
    if(isset($_COOKIE['phclogined']) && $_COOKIE['phclogined']==1)
    {
      include 'connection.php';
      include 'phcheader.php';
      $phcid = $_COOKIE['lkey'];
      $sql="select * from tb_quarreg where phcid='".$phcid."'";//echo $sql;exit;
      $result = mysqli_query($conn,$sql);
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>VACCINE REGISTRATION DETAILS</b></center></h2><br>
        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
    <tr style="text-align: center;">
      <th>Full Name</th>
      <th>Address</th>
      <th>District</th>
      <th>Phone #</th>
      <th>Start - End Date</th>
      <th>ID #</th>
      <th>Feedback</th>
      <th>Document</th>
      <th>Notify / Update</th>
      <th>Active / Inactive</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $row['fname']." ".$row['lname']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['district']; ?></td>
      <td><?php echo $row['phno']; ?></td>
      <td><?php echo $row['sdate']."----".$row['edate']; ?></td>
      <td><?php echo $row['idno']; ?></td>
      <td><?php $status = $row['qfeedback'];
                                            if($status==NULL)
                                            { ?>
                                               <font color="red"><b>NA</b></font>
                                 <?php      }
                                            if($status!=NULL)
                                            {   ?>
                                               <font color="green"><?php echo $status; ?></font>
                                 <?php      }    ?></td>
      <td><a href="../uploads/<?php echo $row['qkey']."/".$row['idcard']; ?>" download> <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
      <td>
        <button class="btn btn-warning" data-toggle="modal" data-target="#example<?php echo $row['qkey']; ?>">Notify</button>
      </td>
      <td><?php $status = $row['status'];
                                            if($status==0)
                                            { ?>
                                               <font color="green"><b>Quarantine</b></font>
                                 <?php      }
                                            if($status==1)
                                            {   ?>
                                               <font color="red"><b>Non - Quarantine</b></font>
                                 <?php      }    ?>

</td> 
    </tr> 
  <?php } ?> 
  </tbody>
</table>

<?php 
$sql="select * from tb_quarreg where phcid='".$phcid."'"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>
    <!-- Modal -->
    <div class="modal fade" id="example<?php echo $row['qkey']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Send Feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="quarnotify.php" method="post" enctype="multipart/form-data">             
              <input type="text" name="drname"  class="form-control input-sm" value="<?php echo $row['fname']." ".$row['lname']; ?>"><hr>
              <textarea rows="3" class="form-control input-sm" name="msg" placeholder="Message content goes here..."><?php echo $row['qfeedback']; ?></textarea>
              <input type="hidden" name="qkey" value="<?php echo $row['qkey']; ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Update</button></form>
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
