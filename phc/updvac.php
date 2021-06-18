<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 

    include 'connection.php';
    include 'phcheader.php';
     $phcid=$_COOKIE['lkey'];
      $result = mysqli_query($conn,$sql);
      $count=1;
?>
<script type="text/javascript">

  function specUserz() {

    var sp1z = document.getElementById("sp1z");
    var specz = document.getElementById('specz').value;

    if(!/^[1-9]{1}[0-9]{0,5}$/.test(specz))
       {
         sp1z.textContent = "**Select Vaccine Count";
         document.getElementById("specz").focus();
         return false;
       }
       else
       {
        sp1z.textContent = "";
        return true;
       }
  }

  function workUser() {

    var w1 = document.getElementById("w1");
    var work = document.getElementById('work').value;

    if(work=="")
       {
         w1.textContent = "**Select Work Experience";
         document.getElementById("work").focus();
         return false;
       }
       else
       {
        w1.textContent = "";
        return true;
       }
  }

  

  function fileCheck() {

    var z8 = document.getElementById("z8");
    var file = document.getElementById('file').value;
    if(!/^[#.a-zA-Z0-9\s,-]{3,50}$/.test(file))
    {
       z8.textContent = "**Enter any Vaccine Name";
         document.getElementById("file").focus();
         return false;
       }
       else
       {
        z8.textContent = "";
        return true;
       }
  }

  function checkAll() {
    if(fileCheck()&&specUserz()&&workUser())
       {
         return true;
       }
       else
       {
        return false;
       }
  }


</script>



<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>UPDATE VACCINE AVAILABILITY</b></center></h2><br>
        
        <form role="form" method="POST" action="updatevac.php" name="myform">
   <?php 
$sql="select * from tb_vaccine where vkey='".$_GET['t']."'"; //echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
     ?>       

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
           <input type="text" name="vname"  class="form-control input-sm" readonly value="<?php echo $row['vname']; ?>" onkeyup="fileCheck()">
              <span style="color: red;font-size: 14px" id="z8"></span>

                </div>
              </div>
              
                <div class="form-group">
                  <input type="text" name="vcount"  class="form-control input-sm" value="<?php echo $row['vtotal']; ?>" id="specz" onkeyup="specUserz()" placeholder="Vaccine Count">
                  <span style="color: red;font-size: 14px" id="sp1z"></span>
                </div>&nbsp;
                <div class="form-group">
                 <input type="text" name="vdate"  class="form-control input-sm" value="<?php echo $row['availdate']; ?>" id="work" onclick="workUser()" onfocus="(this.type='date')" placeholder="Vaccine Date">
                 <input type="hidden" name="vkey" value="<?php echo $row['vkey']; ?>">
                  <span style="color: red;font-size: 14px" id="w1"></span>
                </div>

            </div>
            <input type="submit" value="Update" class="btn btn-info btn-block" onclick="return checkAll()">
          </form>
        <?php } ?>




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