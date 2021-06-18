<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
    //setcookie('phclogined',1);
    //if(isset($_COOKIE['phclogined']) && $_COOKIE['phclogined']==1)
   // {
      include 'connection.php';
      include 'vaccineheader.php';
      $district=$_POST['district'];
      $phcid=$_POST['phcid'];
      $userkey=$_POST['userkey'];
      if(isset($_POST['sch2']))
      {
        $sch=$_POST['sch2'];
      }
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>PHC VACCINE AVAILABILITY </b></center></h2><br>
        
          <!--  -->

            
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="tdate" class="form-control input-sm"  onfocus="(this.type='date')" value="<?php echo $district; ?>" readonly>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
            <div class="form-group"><?php 
            $sql= "select * from tb_phc where loginid='".$phcid."'";
  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  { 
?> 
               <input type="text" name="drname" class="form-control input-sm"  value="<?php echo $row['address']; ?>" readonly>
  <?php } ?>
                </div>
              </div>
            </div>
            </div><br><hr>
<h4 style="font-family: 'Open Sans', sans-serif;"><center><b>Book Your Slot</b></center></h4><br>
            <table class="table table-bordered" id="table"  data-toggle="table" data-height="460" >
              
           
    <tr style="text-align: center;">
      <th>Name</th>
      <th>Total</th>
      <th>Date</th>
      <th>Book</th>
    </tr>

  <tbody>
  <?php $sql= "select * from tb_vaccine where loginid='".$phcid."' and vtotal!=0";
  $result = mysqli_query($conn,$sql);$flag=0;
  while ($row=mysqli_fetch_array($result))
  { $flag=1;?> 
    <tr style="text-align: center;">
      <td><?php echo $row['vname']; ?></td>
      <td><?php echo $row['vtotal']; ?></td>
      <td><?php echo $row['availdate']; $total=trim($row['vtotal']); ?></td>
<td><?php if($total<=0){ echo "<b>NA</b>";  } else {?>
  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['vkey']; ?>"> <i class="fas fa-check"></i></button><?php } ?>
</td>
    </tr>
<?php } ?>
  </tbody><?php if($flag==0) { ?> <tr><td colspan="4" align="center"><p style="color: grey">NO DATA FOUND </p></td></tr> <?php } ?>
            </table>

            <a href="viewidcard.php"><button class="btn btn-info btn-block"><i class="fas fa-hand-point-left">&nbsp;&nbsp;Go Home</i></button></a>
<!-- Button trigger modal -->

<?php $sql= "select * from tb_vaccine where loginid='".$phcid."'";
  $result = mysqli_query($conn,$sql);$flag=0;
  while ($row=mysqli_fetch_array($result))
  { ?> 
<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['vkey']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center class='text-success'><b><?php echo $row['vname']; ?></b></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
        <form action="vaccinebook.php" method="post">
          <input type="hidden" name="vid" value="<?php echo $row['vid']; ?>">
          <input type="hidden" name="phcid" value="<?php echo $phcid;?>">
          <input type="hidden" name="vcount" value="<?php echo $row['vtotal']?>">
          <input type="hidden" name="userkey" value="<?php echo $userkey; ?>">
          <input type="hidden" name="vacdate" value="<?php echo $row['availdate']; ?>">

          <?php 
                if(isset($sch))
                { ?>
                    <input type="hidden" name="sch2" value="<?php echo $sch; ?>">
       <?php    }

              ?>
         
          <button type="submit" class="btn btn-outline-success">Confirm</button>
        </form>
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
    include 'vaccinefooter.php';
   }
    else
    {
        Header("location:../index.php");
    }
?>