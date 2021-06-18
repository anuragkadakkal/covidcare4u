<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 

    include 'connection.php';
    include 'phcheader.php';
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
         w1.textContent = "**Select Any Date";
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
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>ADD VACCINE AVAILABILITY</b></center></h2><br>
        
        <form role="form" method="POST" action="addvacreg.php" name="myform">
          

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
            <input type="text" name="vname" class="form-control input-sm" placeholder="Vaccine Name" 
            id="file" onkeyup="fileCheck()">
              <span style="color: red;font-size: 14px" id="z8"></span>

                </div>
              </div>
              
                <div class="form-group">
                  <input type='number' class="form-control bfh-states" name="vcount" data-country="US" data-state="CA" id="specz" onkeyup="specUserz()" placeholder="Vaccine Count">
                  <span style="color: red;font-size: 14px" id="sp1z"></span>
                </div>&nbsp;
                <div class="form-group">
                  <input type="text" class="form-control bfh-states" name="vdate" data-country="US" data-state="CA" id="work" onclick="workUser()" onfocus="(this.type='date')" placeholder="Vaccine Date">
                  <span style="color: red;font-size: 14px" id="w1"></span>
                </div>

            </div>
            <input type="submit" value="Register" class="btn btn-info btn-block" onclick="return checkAll()">
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