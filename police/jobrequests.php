<?php
  include 'connection.php';
  include 'adminheader.php';

  $sql = "select * from tb_jobs";
  $result = mysqli_query($conn,$sql);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">KSEB Temporary Jobs</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Job Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
					                        <th>Title</th>
                                            <th>Qualification</th>
                                            <th>Description</th>
                                            <th>Location</th>
                                            <th>Section</th>
                                            <th>Last Date</th>
                                            <th>Vacancy</th>
                                            <th>Feedback</th>
                                            <th>Approve / Reject</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Date</th>
					                        <th>Title</th>
                                            <th>Qualification</th>
                                            <th>Description</th>
                                            <th>Location</th>
                                            <th>Section</th>
                                            <th>Last Date</th>
                                            <th>Vacancy</th>
                                            <th>Feedback</th>
                                            <th>Approve / Reject</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                      <?php while ($row=mysqli_fetch_array($result))
                      {  ?>
                                        <tr>
					    <td><?php echo $row['jcurdate']; ?></td>
                                            <td><?php echo $row['jtitle']; ?></td>
                                            <td><?php echo $row['jqual']; ?></td>
                                            <td><?php echo $row['jdesc']; ?></td>
                                            <td><?php echo $row['jdistrict']; ?></td>
                                            <td><?php echo $row['jsection']; ?></td>
                                            <td><?php echo $row['jlastdate']; ?></td>
                                            <td><?php echo $row['jtotvacancy']; ?></td>
                                            <td><?php echo $row['jfeedback']; ?></td>
                                            <td><?php $status = $row['jstatus'];
                                            if($status==0)
                                            { ?>
                                               <a href="approvejob.php?t=<?php echo $row['jkey']; ?>"><button class="btn btn-primary">Approve</button></a>&nbsp;&nbsp;
                                                 <a href="rejectjob.php?t=<?php echo $row['jkey']; ?>"><button class="btn btn-danger">Reject</button></a>
                                                 &nbsp;&nbsp;
                                                 <a href="jobfeedback.php?t=<?php echo $row['jkey']; ?>"><button class="btn btn-info">Feedback</button></a>
                                                 
                                 <?php      }
                                            else if ($status==1)
                                            {   ?>
                                               <font color="green"><b>Approved</b></font>&nbsp;&nbsp;<a href="rejectjob.php?t=<?php echo $row['jkey']; ?>"><button class="btn btn-success">Reject</button></a>
                                               <a href="jobfeedback.php?t=<?php echo $row['jkey']; ?>"><button class="btn btn-info">Feedback</button></a>
                                 <?php      }    
                                            else
                                            {
                                 ?>
                                                 <font color="red"><b>Rejected</b></font>&nbsp;&nbsp;<a href="approvejob.php?t=<?php echo $row['jkey']; ?>"><button class="btn btn-success">Approve</button></a>
                                                 <a href="jobfeedback.php?t=<?php echo $row['jkey']; ?>"><button class="btn btn-info">Feedback</button></a>

                                <?php }?>
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

            <?php include 'adminfooter.php'; ?>
