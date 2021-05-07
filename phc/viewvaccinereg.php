<?php
    session_start();
    setcookie('phclogined',1);
    if(isset($_COOKIE['phclogined']) && $_COOKIE['phclogined']==1)
    {
      include 'connection.php';
      include 'phcheader.php';
      $phcid = $_COOKIE['lkey'];
      $sql="select * from tb_vaccinereg inner join tb_vaccinebookhistory on tb_vaccinereg.vkey=tb_vaccinebookhistory.uid where phcid='".$phcid."' order by tb_vaccinereg.vid desc";//echo $sql;exit;
      $result = mysqli_query($conn,$sql);
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>VACCINE REGISTRATION DETAILS</b></center></h2><br>
        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
    <tr style="text-align: center;">
      <th>Date</th>
      <th>Full Name</th>
      <th>Gender</th>
      <th>Phone #</th>
      <th>ID #</th>
      <th>YOB - Age</th>
      <th>Dose 1, Dose 2</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $row['bkdate']; ?></td>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['idcard']; ?></td>
      <td><?php echo $row['yob']." - ".date('Y')-$row['yob']." Yrs"?></td>
      <td><?php echo $row['vacdate']." - ".$row['vacdtaffname']."<br>".$row['vacdate2']." - ".$row['vacstaff2']; ?></td>
      <td><?php $vs=$row['vaccinestatus']; 

if($vs==1|| $vs==3)
{
?><button class="btn btn-warning" data-toggle="modal" data-target="#example<?php echo $row['vkey']; ?>">Update</button><?php
}
if($vs==2)
{
  echo "<font color='green'><b>Partially Vaccinated[1]</b></font>";
}
if($vs==4)
{
  echo "<font color='violet'><b>Fully Vaccinated[1,2]</b></font>";
}
?>
      </td>
    </tr> 
  <?php } ?> 
  </tbody>
</table>

<?php 
$sql="select * from tb_vaccinereg inner join tb_vaccinebookhistory on tb_vaccinereg.vkey=tb_vaccinebookhistory.uid where phcid='".$phcid."' order by tb_vaccinereg.vid desc"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>
    <!-- Modal -->
    <div class="modal fade" id="example<?php echo $row['vkey']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update Status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="vacstatus.php" method="post" enctype="multipart/form-data">             
              <input type="text" name="drname"  class="form-control input-sm" value="<?php echo $row['fname']; ?>" readonly><hr>
              <input type="text" name="srname"  class="form-control input-sm" value="" placeholder="Vaccinated By"><hr>
              <input type="hidden" name="uid" value="<?php echo $row['uid']; ?>">
              <input type="hidden" name="vkey" value="<?php echo $row['vkey']; ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Send</button></form>
          </div>
        </div>
      </div>
    </div>

<?php } ?>              

</div>
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
