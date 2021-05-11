<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 

    include 'connection.php';
    include 'phcheader.php';
?>




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
                  <input type="text" name="fname" class="form-control input-sm" placeholder="First Name">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="lname"  class="form-control input-sm" placeholder="Last Name">
                </div>
              </div>
            </div>

            <div class="form-group">
              <input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" value="">
            </div>
<input type="hidden" name="phckey" value="<?php echo $_COOKIE['lkey']; ?>">
            <div class="form-group">
              <textarea rows="2" class="form-control input-sm" name="address" placeholder="Address"></textarea>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number">
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
                  <select class="form-control bfh-states" name="district" data-country="US" data-state="CA">
                    <option value="null">Select District</option>
                    <option value="Trivandrum">Trivandrum</option>
                    <option value="Kollam">Kollam</option>
                    <option value="Idukki">Idukki</option>
                    <option value="Kottayam">Kottayam</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="qual" class="form-control input-sm" placeholder="Qualifications [Seperated by commas]">
                </div>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                <div class="form-group">
                  <select class="form-control bfh-states" name="specs" data-country="US" data-state="CA">
                    <option value="null">Specialization Field</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Ayurveda">Ayurveda</option>
                    <option value="Physical Medicine">Physical Medicine</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="ENT">ENT</option>
                    <option value="Ophthalmology">Ophthalmology</option>
                  </select>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <select class="form-control bfh-states" name="exp" data-country="US" data-state="CA">
                    <option value="null">Work Experience</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="5+">>5</option>
                  </select>
                </div>

            </div><br>
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