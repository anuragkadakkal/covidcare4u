<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
      include 'connection.php';
      include 'drheader.php';
      $drid = $_COOKIE['lkey'];
      $sql="select * from tb_drnotify inner join tb_phc on tb_drnotify.phcid=tb_phc.loginid where tb_drnotify.drid='".$drid."' order by drnotid desc";//echo $sql;exit;
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
      <th>#</th>
      <th>Time</th>
      <th>Notification</th>
      <th>Feedback</th>
      <th>Reply</th>
    </tr>
  </thead>
  <tbody>
  <?php $count=1; while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $count++; ?></td>
      <td><?php echo $row['drnotdate']; ?><br><?php echo $row['curtime']; ?></td>
      <td><?php echo $row['drnotmsg']; ?></td>
      <td><?php $f=$row['notfeedback']; 
if($f==NULL)
{
  echo "<font color='red'><b>NA</b></font>";
}
else
{
   echo "<font color='green'><b>".$f."</b></font>";
}/*<font color="green"><b>Active</b></font>&nbsp;&nbsp;*/
      ?></td>
      <td><?php $status = $row['notstatus'];
            if($status==0)
            { ?>
               <a href="deactivatedr.php?t=<?php echo $row['drnotkey']; ?>"><button class="btn btn-primary">Mark Viewed</button></a>
               &nbsp;
      <button class="btn btn-info" data-toggle="modal" data-target="#example<?php echo $row['drnotkey']; ?>">Reply</button>
 <?php      }
            if($status==1)
            {   ?>
               <font color="green"><b>Viewed</b></font>&nbsp;&nbsp;<button class="btn btn-info" data-toggle="modal" data-target="#example<?php echo $row['drnotkey']; ?>">Reply</button>
 <?php      }    
            if($status==2)
            { ?>
               <font color="Blue"><b>Response Given</b></font>
  <?php          } ?>

</td> 
    </tr> 
  <?php } ?> 
  </tbody>
</table>

<?php 
$sql="select * from tb_drnotify inner join tb_phc on tb_drnotify.phcid=tb_phc.loginid where tb_drnotify.drid='".$drid."' order by drnotid desc"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>
    <!-- Modal -->
    <div class="modal fade" id="example<?php echo $row['drnotkey']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Send Notification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="drreply.php" method="post" enctype="multipart/form-data">             
              <input type="text" name="drname"  class="form-control input-sm" value="<?php echo $row['fname']." ".$row['address']; ?>"><hr>
        <textarea rows="3" class="form-control input-sm" name="msg" placeholder="Message content goes here..." 
        required="" required=""></textarea>
 

            <input type="hidden" name="notkey" value="<?php echo $row['drnotkey']; ?>">
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
    include 'drfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>