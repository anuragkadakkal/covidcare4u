<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 

  include 'connection.php';
  include 'kitchenheader.php';

  $lkey=$_COOKIE['lkey'];
  $curdate = date("l jS \of F Y");
  $sql = "select * from tb_foodreg where loginid ='".$lkey."' and delstatus='0' and ftime='".$curdate."'";//echo $sql;exit;
  $result = mysqli_query($conn,$sql);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Community Kitchen - Food</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Food Details</h6>
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
                                            <td><?php echo $row['fdesc']; ?></td>
                                            <td><?php echo $row['fprice']; ?></td>
                                            <td><?php echo $row['fqty']; ?></td>
                                            <td><a href="updatefood.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-primary">Update</button></a></td>
                                            <td><?php $status = $row['fstatus'];
                                            if($status==1)
                                            { ?>
                                                <font color="green"><b>Visible</b></font>&nbsp;&nbsp;
                                                <a href="hidefood.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-warning">Hide</button></a>
                                                <a href="deletefood.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-danger">Delete</button></a>
                                 <?php      }
                                           if($status==0)
                                            {   ?>
                                               <font color="red"><b>Hidden</b></font>&nbsp;&nbsp;
                                               <a href="showfood.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-success">Show</button></a>
                                               <a href="deletefood.php?t=<?php echo $row['fkey']; ?>"><button class="btn btn-danger">Delete</button></a>
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

            <?php include 'kitchenfooter.php';}

    else
    {
        Header("location:../index.php");
    }
?>