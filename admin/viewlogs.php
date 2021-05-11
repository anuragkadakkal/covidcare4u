<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
  include 'connection.php';
  include 'adminheader.php';
  
  $sql = "select * from tb_logginglogin where loginusername!='admin@gmail.com' order by logid desc ";
  $result = mysqli_query($conn,$sql);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User Login Logs</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Log Details&nbsp;&nbsp;<button class="btn btn-outline-success btn-sm"><i class="fas fa-download"></i></button></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" width="100%" cellspacing="0" id="table"  data-toggle="table"  data-height="460" data-pagination="true"
                                data-search="true">
                                    <thead>
                                        <tr>
                                          <th>#</th>
                                            <th>Time</th>
                                          <th>Username</th>
                                            <th>Token</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>#</th>
                                            <th>Time</th>
                                          <th>Username</th>
                                            <th>Token</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                      <?php $count=1; while ($row=mysqli_fetch_array($result))
                      {  ?>
                                        <tr>
                                          <td><?php echo $count++; ?></td>
                                            <td><?php echo $row['curdate']; ?></td>
                                            <td><?php echo $row['loginusername']; ?></td>
                                            <td><?php echo $row['logtoken']; ?></td>
                                        </tr>
                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

          <?php
        include 'adminfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>

