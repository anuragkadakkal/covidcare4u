<?php
  include 'connection.php';
  include 'adminheader.php';

  $sql = "select * from tb_phc inner join tb_login on tb_login.id=tb_phc.loginid";
  $result = mysqli_query($conn,$sql);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">PHC Details</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Personal Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" width="100%" cellspacing="0" id="table"  data-toggle="table"  data-height="460" data-pagination="true"
  data-search="true">
                                    <thead>
                                        <tr>
                                          <th>Name</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>District</th>
                                            <th>Pincode</th>
                                            <th>Phone #</th>
                                            <th>Update</th>
                                            <th>Update / Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Name</th>
                                          <th>Address</th>
                                          <th>Email</th>
                                          <th>District</th>
                                          <th>Pincode</th>
                                          <th>Phone #</th>
                                          <th>Update</th>
                                          <th>Update  / Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                      <?php while ($row=mysqli_fetch_array($result))
                      {  ?>
                                        <tr>
                                          <td><?php echo $row['fname']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['district']; ?></td>
                                            <td><?php echo $row['pincode']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><a href="updatephc.php?t=<?php echo $row['phckey']; ?>"><button class="btn btn-info">Update</button></a></td>
                                            <td><?php $status = $row['status'];
                                            if($status==1)
                                            { ?>
                                               <font color="green"><b>Active</b></font>&nbsp;&nbsp;<a href="deactivatephc.php?t=<?php echo $row['phckey']; ?>"><button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a>
                                 <?php      }
                                            if($status==2)
                                            {   ?>
                                               <font color="red"><b>Inactive</b></font>&nbsp;&nbsp;<a href="activatephc.php?t=<?php echo $row['phckey']; ?>"><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button></a>
                                 <?php      }    ?>


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
