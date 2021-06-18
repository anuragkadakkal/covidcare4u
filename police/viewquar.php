<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
  include 'connection.php';
  include 'policeheader.php';

  $phcid = $_COOKIE['lkey'];
      $sql="select * from tb_quarreg where pcid='".$phcid."'";//echo $sql;exit;
  $result = mysqli_query($conn,$sql);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Quarantine Report</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Personal Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
      <th>Address</th>
      <th>District</th>
      <th>Phone #</th>
      <th>Start - End Date</th>
      <th>ID #</th>
      <th>Feedback</th>
      <th>Document</th>
      <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Full Name</th>
      <th>Address</th>
      <th>District</th>
      <th>Phone #</th>
      <th>Start - End Date</th>
      <th>ID #</th>
      <th>Feedback</th>
      <th>Document</th>
      <th>Status</th>
                                        </tr>
                                    </tfoot>
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
      <td><a href="../Uploads/<?php echo $row['qkey']."/".$row['idcard']; ?>" download> <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
     
      <td><?php $status = $row['status'];
$end=$row['edate'];
$tday=date('Y-m-d');
$edate=getDate(strtotime($end));
$tdate=getDate(strtotime($tday));
if($edate['mon']<=$tdate['mon'])
{
  if($edate['mday']<=$tdate['mday'])
  {
    echo "<font color='green'><b>Non Quarantine</b></font>";
  }
  else
  {
    echo "<font color='red'><b>Quarantine</b></font>";
  }
}
else
{
  echo "<font color='red'><b>Quarantine</b></font>";
}



?>

</td> 
    </tr> 
  <?php } ?> 
  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

<?php 
$sql="select * from tb_quarreg where pcid='".$phcid."'"; //echo $sql;exit;

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
            <button type="submit" class="btn btn-primary">Send</button></form>
          </div>
        </div>
      </div>
    </div>

<?php } ?>     
                <!-- /.container-fluid -->

            <?php include 'policefooter.php'; 
        }

else
{
    Header("location:../index.php");
}
?>
