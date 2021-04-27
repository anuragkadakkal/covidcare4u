<?php
    session_start();
    setcookie('adminlogined',1);
    if(isset($_COOKIE['adminlogined']) && $_COOKIE['adminlogined']==1)
    {
  include 'connection.php';
  include 'policeheader.php';

  $sql = "select * from tb_vehiclepass where pkey = '".$_COOKIE['lkey']."'";//echo $sql;exit;
  $result = mysqli_query($conn,$sql);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Applied Travel Pass</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pass Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <thead>
                                        <tr>
                                            <th>Travel Date</th>
					                        <th>Return Date</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Car Reg #</th>
                                            <th>Passengers</th>
                                            <th>Name(s)</th>
                                            <th>Purpose</th>
                                            <th>Id Card</th>
                                            <th>Feedback</th>
                                            <th>Approve / Reject</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Travel Date</th>
					                        <th>Return Date</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Car Reg #</th>
                                            <th>Passengers</th>
                                            <th>Name(s)</th>
                                            <th>Purpose</th>
                                            <th>Id Card</th>
                                            <th>Feedback</th>
                                            <th>Approve / Reject</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                      <?php while ($row=mysqli_fetch_array($result))
                      {  ?>
                                        <tr>
					                        <td><?php echo $row['traveldate']; ?></td>
                                            <td><?php echo $row['returndate']; ?></td>
                                            <td><?php echo $row['fromplace']; ?></td>
                                            <td><?php echo $row['toplace']; ?></td>
                                            <td><?php echo $row['carregno']; ?></td>
                                            <td><?php echo $row['personcount']; ?></td>
                                            <td><?php echo $row['namelist']; ?></td>
                                            <td><?php echo $row['purpose']; ?></td>
                                            <td><a href="../uploads/<?php echo $row['passkey']."/".$row['filename']; ?>" download> <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i></button></a></td>
                                            <td><?php echo $row['feedback']; ?></td>
                                            <td><?php 
                                                $status = $row['status']; 
                                                if($status==0)
                                                { ?>
<a href="approvepass.php?t=<?php echo $row['passkey']; ?>"><button class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></button></a>&nbsp;&nbsp;
<button class="btn btn-danger" data-toggle="modal" data-target="#example<?php echo $row['passkey']; ?>"><i class="fa fa-times" aria-hidden="true"></i></button>

                                <?php  }   
else if($status==2) {   ?>

<font color='red'><b>Rejected</b></font>&nbsp;&nbsp;<a href="approvepass.php?t=<?php echo $row['passkey']; ?>"><button class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></button></a>&nbsp;&nbsp;


<?php }    else if($status==1) { ?>

    <font color='green'><b>Approved</b></font>&nbsp;&nbsp;<button class="btn btn-danger" data-toggle="modal" data-target="#example<?php echo $row['passkey']; ?>"><i class="fa fa-times" aria-hidden="true"></i></button></a>&nbsp;&nbsp;

<?php }
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
$sql="select * from tb_vehiclepass where pkey = '".$_COOKIE['lkey']."'"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>

    <!-- Modal -->
    <div class="modal fade" id="example<?php echo $row['passkey']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Feedback - Pass Rejected</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="rejectpass.php" method="post" enctype="multipart/form-data">             
              <input type="text" name="feedback"  class="form-control input-sm" >
              <input type="hidden" name="filekey" value="<?php echo $row['passkey']; ?>">
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
