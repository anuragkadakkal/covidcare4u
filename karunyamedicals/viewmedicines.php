<?php
  include 'connection.php';
  include 'medicalheader.php';

  $lkey=$_COOKIE['lkey'];
  $sql = "select * from tb_medicinereg where loginid ='".$lkey."' and delstatus='0'";//echo $sql;exit;
  $result = mysqli_query($conn,$sql);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Karunya Medicals - Medicines</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Medicine Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                         <tr>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Price</th>
                                          <th>Quanity Available</th>
                                          <th>Update</th>
                                          <th>Show  / Hide</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Price</th>
                                          <th>Quanity Available</th>
                                          <th>Update</th>
                                          <th>Show  / Hide</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                      <?php while ($row=mysqli_fetch_array($result))
                      {  ?>
                                        <tr>
                                            <td><?php echo $row['fname']; ?></td>
                                            <td><b>Manufactured By : </b><?php echo $row['mfgcompany']; ?><br>
                                                <b>Mfg Date : </b><?php echo $row['mfgdate']; ?><br>
                                                <b>Exp Date : </b><?php echo $row['expdate']; ?><br><hr>
                                                <b>Description : </b><?php echo $row['fdesc']; ?>



                                            
                                              

                                            </td>
                                            <td><?php echo $row['fprice']; ?></td>
                                            <td><?php echo $row['fqty']; ?></td>
                                            <td><a href="updatemedicine.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-primary">Update</button></a></td>
                                            <td><?php $status = $row['fstatus'];
                                            if($status==1)
                                            { ?>
                                                <font color="green"><b>Visible</b></font>&nbsp;&nbsp;
                                                <a href="hidemedicine.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-warning">Hide</button></a>
                                                <a href="deletemedicine.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-danger">Delete</button></a>
                                 <?php      }
                                           if($status==0)
                                            {   ?>
                                               <font color="red"><b>Hidden</b></font>&nbsp;&nbsp;
                                               <a href="showmedicine.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-success">Show</button></a>
                                               <a href="deletemedicine.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-danger">Delete</button></a>
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

            <?php include 'medicalfooter.php'; ?>
