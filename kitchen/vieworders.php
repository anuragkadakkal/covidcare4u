<?php
  include 'connection.php';
  include 'kitchenheader.php';

  $lkey=$_COOKIE['lkey'];
  $sql = "select * from tb_foodbill inner join tb_food on tb_food.filekey=tb_foodbill.fborderkey where kitkey='".$lkey."' and status!='2' ORDER by fid desc";
  //echo $sql;exit;
  $result = mysqli_query($conn,$sql);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Community Kitchen - Food Orders</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Order Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                         <tr>
                                          <th>TxnID</th>
                                          <th>Date</th>
                                          <th>Name - Address</th>
                                          <th>Items</th>
                                          <th>Price</th>
                                          <th>Available/Not</th>
                                          <th>Payment</th>
                                          <th>Reciept</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>TxnID</th>
                                          <th>Date</th>
                                          <th>Name - Address</th>
                                          <th>Items</th>
                                          <th>Price</th>
                                          <th>Available/Not</th>
                                          <th>Payment</th>
                                          <th>Reciept</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                      <?php while ($row=mysqli_fetch_array($result))
                      {  ?>
                                        <tr>
                                          <td><?php echo $row['filekey']; ?></td>
                                          <td><?php echo $row['curdate']; ?></td>
                                            <td><?php echo $row['fname']." - ".$row['address'].", ".$row['district'].", <br>Pin : ".$row['pincode'].", <br>Ph : ".$row['phno'];?></td>
                                            <td><?php echo $row['items']; ?></td>
                                            <td><?php echo $row['fbamount']; ?> INR</td>
                                            <td><?php $status = $row['status']; 
if($status==0)
{   ?>

<a href="available.php?t=<?php echo $row['filekey']; ?>"><button class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></button></a>
<a href="notavailable.php?t=<?php echo $row['filekey']; ?>"><button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a>

<?php
}
if($status==1)
{   ?>

<font color="green"><b>Available</b></font>&nbsp;&nbsp;
<a href="notavailable.php?t=<?php echo $row['filekey']; ?>"><button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a>

<?php

}
if($status==3)
{   ?>

<font color="red"><b>Not Available</b></font>&nbsp;&nbsp;
<a href="available.php?t=<?php echo $row['filekey']; ?>"><button class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></button></a>

<?php
}
 ?>
                                            
                                            </td>
                                            <td><?php $status = $row['status']; 
  if($status==4) { ?> <font color="green"><b>Paid Online</b></font></td> <?php } 
  if($status==5) { ?> <font color="green"><b>COD [Paid]</b></font></td> <?php } 
  if($status==0 || $status==1  ||  $status==2  ||  $status==3 ) { ?> <font color="red"><b>Not Paid</b></font>
 <?php if($status!=4) { ?> <a href="codpayment.php?t=<?php echo $row['filekey']; ?>"><button class="btn btn-info">COD</button></a></td> <?php } ?>
</td> <?php } 
   ?>
 </td>
 <td>
<?php $status = $row['status']; 
  if($status==4 || $status==5) { ?>
<a href="../fpdf/foodbillpaid.php?t=<?php echo $row['filekey']; ?>" download> <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Reciept</button></a>
<?php } else {?>

<a href="../fpdf/foodbill.php?t=<?php echo $row['filekey']; ?>" download> <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Reciept</button></a>
<?php } ?>

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

            <?php include 'kitchenfooter.php'; ?>
