<?php  
  session_start();
  include 'vaccineheader.php';
  include 'connection.php';
  $sql="select * from tb_vaccinereg where phone='".trim($_SESSION['email'])."'";//echo $sql;exit;
  $result = mysqli_query($conn,$sql);
  $flag=0;
  while ($row=mysqli_fetch_array($result))
  {
    $flag=1;
  }



?>
     <!-- Main content --><br><h2 style="font-family: 'Open Sans', sans-serif;"><center><b>VACCINE REGISTRATION DETAILS</b></center></h2><br>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
          
<?php if($flag==1) {
$sql="select * from tb_vaccinereg where phone='".trim($_SESSION['email'])."'";//echo $sql;exit;
  $result = mysqli_query($conn,$sql); 
while ($row=mysqli_fetch_array($result))
  {     ?>  
<div class="col-lg-4 col-12">
<!-- small box -->
  <div class="small-box bg-light" style="background:#e5f7e9!important; border: 1px solid #80c590;">
    <div class="inner pb-0 "><?php $g=$row['gender']; if($g=='Male'){$g="<i class='fas fa-male'></i>";}else{$g="<i class='fas fa-female'></i>";} ?>
      <h3 class="text-success"><?php echo $row['fname']." ".$g; ?></h3>
      <p><?php $v= $row['vaccinestatus']; 

if($v==0) //not scheduled
{
  echo "<font color='red'>Not Scheduled</font>";
}
else if($v==1) //scheduled
{
  echo "<font color='green'>Dose 1 Scheduled</font>";
}
else if($v==2) //dose 1 taken and dose 2 no schduled
{
  echo "<font color='violet'><b>Dose 1 Taken |</b></font><font color='red'>| Dose 2 Not Scheduled</font>";
}
else if($v==3) //dose 1 taken and dose 2 scheduled
{
  echo "<font color='violet'><b>Dose 1 Taken |</b></font><font color='green'>| Dose 2 Scheduled</font>";
}
else //dose 1 and 2 taken  ---status=4
{
  echo "<font color='violet'><b>Dose 1 & 2 Taken</b></font>";
}





      ?></p>
    </div>
  <div class="icon">
  <i class="fas fa-syringe text-success "></i>
</div>

<div class="row px-3">
  <div class="col-md-12 col-sm-6 col-12">
    <div class="">
      <div class="info-box-content">
        <br><br>
        <table class="table table-sm mb-2">
          <tr>
            <td>ID #</td>
            <td align="left"><?php echo $row['idcard']; ?></td>
          </tr>
          <tr>
            <td>Age</td>
            <td align="left"><?php echo date('Y')-$row['yob']." Years"; ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2"> 
<?php $v= $row['vaccinestatus']; 

if($v==0) //not scheduled
{ $_SESSION['vkey']=$row['vkey'];?>
<a href="schedule1.php?t=<?php echo $row['vkey']; ?>"><button class="btn btn-outline-danger">Schedule Now</button></a>
<a href="deleteuser.php?t=<?php echo $row['vkey']; ?>"><button class="btn btn-outline-dark">Delete User</button></a>
<?php
}
else if($v==1) //scheduled
{ 
?>
<a href="../fpdf/ack1.php?t=<?php echo $row['vkey']; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Acknowledgment</i></button></a>
<?php
}
else if($v==2) //dose 1 taken and dose 2 no schduled
{ ?>
  <a href="../fpdf/dose1.php?t=<?php echo $row['vkey']; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Dose 1</i></button></a>
 <a href="schedule2.php?t=<?php echo $row['vkey']; ?>&sch2=true"><button class="btn btn-outline-danger">Schedule Now</button></a> <?php
}
else if($v==3) //dose 1 taken and dose 2 scheduled
{
  ?>
  <a href="../fpdf/dose1.php?t=<?php echo $row['vkey']; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Dose 1</i></button></a>
 <a href="../fpdf/ack2.php?t=<?php echo $row['vkey']; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Acknowledgment</i></button></a><?php
}
else //dose 1 and 2 taken  ---status=4
{
   ?>
  <a href="../fpdf/dose1.php?t=<?php echo $row['vkey']; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Dose 1</i></button></a>
  <a href="../fpdf/dose2.php?t=<?php echo $row['vkey']; ?>" download><button class="btn btn-outline-success"><i class="fas fa-download">&nbsp;Dose 2</i></button></a> <?php
}





      ?>








            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php }}else{ ?>

<table class="table table-sm">
  <tr>
    <td align="center" colspan="5"><h4 style="color: red">No Registration Details Found</h4></td>
  </tr>
  <tr>
    <td align="center" colspan="5"><a href="addidcard.php"><button class="btn btn-outline-info "><b>Go To Registration</b></button></td>
  </tr>
</table>
<?php } ?>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->

            <div class="card-body" >
                          


                          <h3 style="color: grey;"><b><i class="fas fa-info">&nbsp;Note</i>
</b></h3>

<ul>
<li>Online registration and appointment is now open for 18 to 44 age group.</li>
<li>Walk-in registration and appointment facility is currently not available for 18-44 age group, only online appointment can be taken.</li>
<li>Appointment for Age 18 to 44 is based on slots made available by the private vaccinations centers as well as the respective state government.</li>
<li>The minimum age for each vaccination center is displayed with the name of the vaccination center. Appointment slots are available where the age displayed is 18+.</li>
<li>More Appointment slots will soon be offered. If slots are not currently available, please check again after sometime. We request your patience and understanding.</li>
<li>To add multiple individuals in a single Dose 2 appointment, the vaccine and Dose 1 date must be same.</li>
<li>The second dose of COVAXIN should be taken between 28 days to 42 days after the first dose. The second dose of COVISHIELD should be taken between 28 days to 56 days after the first dose.</li>
</ul>
<img src="footer.png" width="100%" height="57%">
                        </div>

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="position:relative; z-index:99; ">
   <small><center>Designed and developed by Anurag A | CovidCare4U 2020</center></small>
    
  </footer>


</div>
<!-- ./wrapper -->
<?php  include 'vaccinefooter.php'; ?>