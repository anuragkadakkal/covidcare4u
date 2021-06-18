<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
      include 'connection.php';
      include 'phcheader.php';
      $phcid = $_COOKIE['lkey'];
      $sql="select * from tb_vaccine where loginid='".$phcid."' and vtotal!='0'";//echo $sql;exit;
      $result = mysqli_query($conn,$sql);
      $count=1;
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>VACCINE AVAILABILITY DETAILS</b></center></h2><br>
        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
    <tr style="text-align: center;">
      <th>#</th>
      <th>Name</th>
      <th>Count</th>
      <th>Date</th>
      <th>Links</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $count++; ?></td>
      <td><?php echo $row['vname']; ?></td>
      <td><?php echo $row['vtotal']; ?></td>
      <td><?php echo $row['availdate']; ?></td>
      <td>
        <a href="updvac.php?t=<?php echo $row['vkey']; ?>"><button class="btn btn-warning">Update</button></a>
        <a href="vacdel.php?t=<?php echo $row['vkey']; ?>"><button class="btn btn-danger" ><i class="fa fa-times" aria-hidden="true"></i></button></a>
      </td>
    </tr> 

  <?php } ?> 
  </tbody>
</table>

             

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