<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
    include 'connection.php';
    include 'drheader.php';
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">
<script type="text/javascript">
  function curpassUser() {
    var cur = document.getElementById("cur");
    var curpass = document.getElementById('curpass').value;

    if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,30}$/.test(curpass))
       {
         cur.textContent = "**Password Must Have 1(Uppercase,Lowercase,Digit) & 6 to 20 Character Length";
         document.getElementById("curpass").focus();
         return false;
       }
       else
       {
        cur.textContent = "";
        return true;
       }
  }

  function passUser() {
    var f9 = document.getElementById("f9");
    var pass = document.getElementById('pass').value;

    if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,30}$/.test(pass))
       {
         f9.textContent = "**Password Must Have 1(Uppercase,Lowercase,Digit) & 6 to 20 Character Length";
         document.getElementById("pass").focus();
         return false;
       }
       else
       {
        f9.textContent = "";
        return true;
       }
  }

  function conpassUser() {
    var f10 = document.getElementById("f10");
    var conpass = document.getElementById('conpass').value;
    var pass = document.getElementById('pass').value;

    if(conpass!=pass)
       {
         f10.textContent = "**Password Doesn't Match";
         document.getElementById("conpass").focus();
         return false;
       }
       else
       {
        f10.textContent = "";
        return true;
       }
  }

  function checkAll() {

    if(curpassUser()&&passUser()&&conpassUser())
       {
         return true;
       }
       else
       {
        return false;
       }
  }

</script>


        <!-- Small boxes (Stat box) --><br><br><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>UPDATE PASSWORD</b></center></h2><br>
        <form role="form" method="POST" action="passwordupdate.php" name="myform">
          
                            <div class="form-group">
                                <input type="Password" name="curpass"  class="form-control input-sm" placeholder="Current Password" id="curpass" onkeyup="curpassUser()">
                  <span style="color: red;font-size: 14px" id="cur"></span>
                              </div>
                                         
                                        <div class="form-group">
                                            <input type="Password" name="pass"  class="form-control input-sm" placeholder="New Password" id="pass" onkeyup="passUser()">
                  <span style="color: red;font-size: 14px" id="f9"></span>
                                        </div>
                              <div class="form-group">
                              <input type="Password" name="conpass" class="form-control input-sm" placeholder="Confirm Password"  id="conpass" onkeyup="conpassUser()">
                  <span style="color: red;font-size: 14px" id="f10"></span>
                              </div> <br>
                            <input type="submit" value="Update" class="btn btn-info btn-block" onclick="return checkAll()">

                
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
    include 'drfooter.php';
   
 }

    else
    {
        Header("location:../index.php");
    }
?>
