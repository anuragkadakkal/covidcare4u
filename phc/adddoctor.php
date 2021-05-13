<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 

    include 'connection.php';
    include 'phcheader.php';
?>
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

  function emailUser() {
    var f3 = document.getElementById("f3");
    var email = document.getElementById('email').value;

    if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email))
       {
         f3.textContent = "**Invalid Email Format";
         document.getElementById("email").focus();
         return false;
       }
       else
       {
        f3.textContent = "";
        return true;
       }
  }

  function addrUser() {
    var f4 = document.getElementById("f4");
    var address = document.getElementById('address').value;

    if (!/^[#.0-9a-zA-Z\s,-]{8,50}$/.test(address))
       {
         f4.textContent = "**Invalid Address Format";
         document.getElementById("address").focus();
         return false;
       }
       else
       {
        f4.textContent = "";
        return true;
       }
  }


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

  

  function distUser() {

    var f7 = document.getElementById("f7");
    var district = document.getElementById('district').value;

    if(district=="null")
       {
         f7.textContent = "**Select any District";
         document.getElementById("district").focus();
         return false;
       }
       else
       {
        f7.textContent = "";
        return true;
       }
  }

  function specUser() {

    var sp1 = document.getElementById("sp1");
    var spec = document.getElementById('spec').value;

    if(spec=="null")
       {
         sp1.textContent = "**Select any Specialization";
         document.getElementById("spec").focus();
         return false;
       }
       else
       {
        sp1.textContent = "";
        return true;
       }
  }

  function workUser() {

    var w1 = document.getElementById("w1");
    var work = document.getElementById('work').value;

    if(work=="null")
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

  function distPin() {

    var f8 = document.getElementById("f8");
    var pincode = document.getElementById('pincode').value;

    if(!/^[0-9]{6}$/.test(pincode))
       {
         f8.textContent = "**Enter Correct Pincode";
         document.getElementById("pincode").focus();
         return false;
       }
       else
       {
        f8.textContent = "";
        return true;
       }
  }

  function fileCheck() {

    var z8 = document.getElementById("z8");
    var file = document.getElementById('file').value;
    if(!/^[#.a-zA-Z\s,-]{3,50}$/.test(file))
    {
       z8.textContent = "**Enter Correct Qualifications Details [Seperated by Comma]";
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
    if(firstName()&&lastName()&&emailUser()&&addrUser()&&phoneUser()&&distUser()&&distPin()&&fileCheck()&&specUser()&&workUser())
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



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>ADD PHC DOCTOR</b></center></h2><br>
        
        <form role="form" method="POST" action="adddoctorreg.php" name="myform">
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

            <div class="form-group">
              <input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" value="" id="email" onkeyup="emailUser()">
              <span style="color: red;font-size: 14px" id="f3"></span>

            </div>
            <input type="hidden" name="phckey" value="<?php echo $_COOKIE['lkey']; ?>">
            <div class="form-group">
              <textarea rows="2" class="form-control input-sm" name="address" placeholder="Address" id="address" onkeyup="addrUser()"></textarea>
              <span style="color: red;font-size: 14px" id="f4"></span>

            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" id="phone" onkeyup="phoneUser()">
                  <span style="color: red;font-size: 14px" id="f5"></span>

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
                  <select class="form-control bfh-states" name="district" data-country="US" data-state="CA" id="district" onclick="distUser()">
                    <option value="null">Select District</option>
                    <option value="Trivandrum">Trivandrum</option>
                    <option value="Kollam">Kollam</option>
                    <option value="Idukki">Idukki</option>
                    <option value="Kottayam">Kottayam</option>
                  </select>
                  <span style="color: red;font-size: 14px" id="f7"></span>

                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode" id="pincode" onkeyup="distPin()">
                  <span style="color: red;font-size: 14px" id="f8"></span>

                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
            <input type="text" name="qual" class="form-control input-sm" placeholder="Qualifications [Seperated by commas]" 
            id="file" onkeyup="fileCheck()">
              <span style="color: red;font-size: 14px" id="z8"></span>

                </div>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                <div class="form-group">
                  <select class="form-control bfh-states" name="specs" data-country="US" data-state="CA" id="spec" onclick="specUser()">
                    <option value="null">Specialization Field</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Ayurveda">Ayurveda</option>
                    <option value="Physical Medicine">Physical Medicine</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="ENT">ENT</option>
                    <option value="Ophthalmology">Ophthalmology</option>
                  </select>
                  <span style="color: red;font-size: 14px" id="sp1"></span>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <select class="form-control bfh-states" name="exp" data-country="US" data-state="CA" id="work" onclick="workUser()">

                    <option value="null">Work Experience</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="5+">>5</option>
                  </select>
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