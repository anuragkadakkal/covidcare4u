<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 

    include 'connection.php';
    include 'phcheader.php';
?>

<script type="text/javascript">
  function phoneUser() {
    var f5 = document.getElementById("f5");
    var phone = document.getElementById('phone').value;

    if(!/^[6-9]{1}[0-9]{9}$/.test(phone))
       {
         f5.textContent = "**Invalid Phone # Format";
         document.getElementById("phone").focus();
         return false;
       }
       else
       {
        f5.textContent = "";
        return true;
       }
  }

  function userIdno() {

    var f17 = document.getElementById("f17");
    var idno = document.getElementById('idno').value;

    if(!/^[0-9/-]{11,18}$/.test(idno))
       {
         f17.textContent = "**Enter Correct ID Card #";
         document.getElementById("idno").focus();
         return false;
       }
       else
       {
        f17.textContent = "";
        return true;
       }
  }

  function checkAll() {

    if(phoneUser()&&userIdno())
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
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br><br><br><br><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>DOSE 2 - SPOT REGISTRATION DETAILS</b></center></h2><br>
        
        <form role="form" method="POST" action="viewspotvaccinereg.php" name="myform">
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" id="phone" onkeyup="phoneUser()">
                  <span style="color: red;font-size: 14px" id="f5"></span>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="idno"  class="form-control input-sm" placeholder="ID Card #" id="idno" onkeyup="userIdno()">
                  <span style="color: red;font-size: 14px" id="f17"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" value="Search" class="btn btn-info btn-block" onclick="return checkAll()">
            </div>
            
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