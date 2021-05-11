<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
      include 'connection.php';
      include 'phcheader.php';
      $msgdate=$_POST['tdate'];
      $drkey=$_POST['drkey'];
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>VIEW PHC DOCTOR'S NOTIFICATIONS</b></center></h2><br>
        
          <!--  -->

            <form role="form" method="POST" action="viewnotifications.php" name="myform">
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="tdate" class="form-control input-sm"  onfocus="(this.type='date')" value="<?php echo $msgdate; ?>" readonly>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
            <div class="form-group"><?php $tdate=$_POST['tdate'];
            $sql= "select * from tb_doctor where drkey='".$drkey."'";
  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  { $drid=$row['loginid']; 
?> 
               <input type="text" name="drname" class="form-control input-sm"  value="<?php echo "Dr. ".$row['fname']." ".$row['lname']; ?>" readonly>
  <?php } ?>
                </div>
              </div>
            </div>
            </div><br><hr>
<h4 style="font-family: 'Open Sans', sans-serif;"><center><b>NOTIFICATION HISTORY</b></center></h4><br>
            <table class="table table-bordered" id="table"  data-toggle="table" data-height="460" >
              
           
    <tr style="text-align: center;">
      <th>Time</th>
      <th>Message</th>
      <th>Status</th>
      <th>Response</th>
    </tr>

  <tbody>
  <?php $sql= "select * from tb_drnotify where drid='".$drid."' and drnormaldate='".$tdate."'";
  $result = mysqli_query($conn,$sql);$flag=0;
  while ($row=mysqli_fetch_array($result))
  { $flag=1;?> 
    <tr style="text-align: center;">
      <td><?php echo $row['curtime']; ?></td>
      <td><?php echo $row['drnotmsg']; ?></td>
      <td><?php $s=$row['notstatus']; ?>
<?php
if($s==0)
{ ?>
<b style="color: grey">Not Viewed</b>
<?php 
}
if($s==1)
{ ?>
<b style="color: green">Viewed</b>
<?php
}if($s==2)
{ ?>
<b style="color: blue">Responded</b>
<?php
}
?>

  <?php    ?></td>
<td><?php if($row['notfeedback']==NULL){ echo "<b>NA</b>";  } else {?>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['drnotkey']; ?>"> <i class="fas fa-envelope"></i></button><?php } ?>
</td>
    </tr>
<?php } ?>
  </tbody><?php if($flag==0) { ?> <tr><td colspan="4" align="center"><p style="color: grey">NO DATA FOUND </p></td></tr> <?php } ?>
            </table>

            <button type="submit" class="btn btn-info btn-block"><i class="fas fa-hand-point-left">&nbsp;&nbsp;Back</i></button>
<!-- Button trigger modal -->

<?php $sql= "select * from tb_drnotify where drid='".$drid."'";
  $result = mysqli_query($conn,$sql);$flag=0;
  while ($row=mysqli_fetch_array($result))
  { ?> 
<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['drnotkey']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Response</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo $row['notfeedback']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> <?php } ?>
          </form>




        </div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
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
    include 'phcfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>
