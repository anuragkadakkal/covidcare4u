<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
    include 'connection.php';
    include 'vaccineheader.php';
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">

<script type="text/javascript">
  function firstName() {
    var f1 = document.getElementById("f1");
    var fname = document.getElementById('fname').value;

    if(!/^[A-Za-z ]{3,16}$/.test(fname))
       {
         f1.textContent = "**Invalid First Name";
         var x = document.getElementById("fname");
         x.focus();
         return false;
       }
       else
       {
        f1.textContent = "";
        return true;
       }
  }

  function lastName() {
    var f2 = document.getElementById("f2");
    var lname = document.getElementById('lname').value;

    if(!/^[A-Za-z ]{1,16}$/.test(lname))
       {
         f2.textContent = "**Invalid Last Name";
         document.getElementById("lname").focus();
         return false;
       }
       else
       {
        f2.textContent = "";
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

  function yearBirth() {
    var f22 = document.getElementById("f22");
    var yob = document.getElementById('yob').value;

    if(!/^[0-9]{4}$/.test(yob))
       {
         f22.textContent = "**Invalid Year Of Birth";
         var x = document.getElementById("yob");
         x.focus();
         return false;
       }
       else
       {
        f22.textContent = "";
        return true;
       }
  }

  function checkAll() {

    if(firstName()&&lastName()&&userIdno()&&yearBirth())
       {
         return true;
       }
       else
       {
        return false;
       }
  }

</script>

        <!-- Small boxes (Stat box) --><br><br><br><br><br><br><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>VACCINE REGISTRATION DETAILS</b></center></h2><br>
        
        <form role="form" method="POST" action="addidcardreg.php" name="myform">
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="fname" class="form-control input-sm" placeholder="First Name" id="fname" onkeyup="firstName()">
                  <span style="color: red;font-size: 14px" id="f1"></span>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="lname"  class="form-control input-sm" placeholder="Last Name" id="lname" onkeyup="lastName()">
                  <span style="color: red;font-size: 14px" id="f2"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" value="<?php echo $lkey; ?>" readonly>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="form-check"><label class="form-check-input" for="exampleRadios1" style="color: black;font-weight: bold;margin-top: 0px;bottom: 17px;">Gender</label><br>
                    <input class="form-check-input" type="radio" name="gender" value="Male" checked>
                    <label class="form-check-label" for="exampleRadios1" style="color: grey;">
                    Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>

                    <input class="form-check-input" type="radio" name="gender" value="Female">
                    <label class="form-check-label" for="exampleRadios2" style="color: grey;">
                    Female
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="idcard" class="form-control input-sm" placeholder="ID Card #" id="idno" onkeyup="userIdno()">
                  <span style="color: red;font-size: 14px" id="f17"></span>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="age" class="form-control input-sm" placeholder="Year of Birth" id="yob" onkeyup="yearBirth()">
                  <span style="color: red;font-size: 14px" id="f22"></span>
                </div>
              </div>
            </div>


            </div><br>
            <div class="form-group">
              <input type="submit" value="Register" class="btn btn-info btn-block" onclick="return checkAll()">
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
    include 'vaccinefooter.php';
    }
    else
    {
        Header("location:../index.php");
    }
?>