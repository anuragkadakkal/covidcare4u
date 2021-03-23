<?php
    session_start();
    setcookie('adminlogined',1);
    if(isset($_COOKIE['adminlogined']) && $_COOKIE['adminlogined']==1)
    {
  include 'connection.php';
  include 'policeheader.php';

  $sql = "select * from tb_vehiclepass  ";
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
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                            <th>Feedback</th>
                                            <th>Update / Delete</th>
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
                                            <th>Feedback</th>
                                            <th>Update / Delete</th>
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
                                            <td><?php echo $row['feedback']; ?></td>
                                            <td><?php 
                                                $status = $row['status']; 
                                                if($status==0)
                                                { ?>
<a href="approvepass.php?t=<?php echo $row['passkey']; ?>"><button class="btn btn-primary">Approve</button></a>&nbsp;&nbsp;
<a href="rejectpass.php?t=<?php echo $row['passkey']; ?>"><button class="btn btn-danger">Reject</button></a>

                                <?php  }   
else if($status==2) {   ?>

<font color='red'><b>Rejected</b></font>&nbsp;&nbsp;<a href="approvepass.php?t=<?php echo $row['passkey']; ?>"><button class="btn btn-primary">Approve</button></a>&nbsp;&nbsp;


<?php }    else if($status==1) { ?>

    <font color='green'><b>Approved</b></font>&nbsp;&nbsp;<a href="rejectpass.php?t=<?php echo $row['passkey']; ?>"><button class="btn btn-danger">Reject</button></a>&nbsp;&nbsp;

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
                <!-- /.container-fluid -->

            <?php include 'policefooter.php'; 
        }

else
{
    Header("location:../index.php");
}
?>
