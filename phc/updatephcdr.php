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
        
        <form role="form" method="POST" action="updatedoctorreg.php" name="myform">
          <?php $drkey=$_GET['t']; 
  $sql="select * from tb_doctor inner join tb_login on tb_login.id=tb_doctor.loginid where drkey='".$drkey."'";//echo $sql;exit;
  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  { 
  ?> <input type="hidden" name="drkey" value="<?php echo $drkey; ?>">
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="fname" class="form-control input-sm" placeholder="First Name" value="<?php echo $row['fname']; ?>">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="lname"  class="form-control input-sm" placeholder="Last Name" value="<?php echo $row['lname']; ?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" value="<?php echo $row['username']; ?>">
            </div>
<input type="hidden" name="phckey" value="<?php echo $_COOKIE['lkey']; ?>">
            <div class="form-group">
              <textarea rows="2" class="form-control input-sm" name="address" placeholder="Address"><?php echo $row['address']; ?></textarea>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" value="<?php echo $row['phno']; ?>">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="form-check"><label class="form-check-input" for="exampleRadios1" style="color: black;font-weight: bold;margin-top: 0px;bottom: 17px;">Gender</label><br>
                    <input class="form-check-input" type="radio" name="gender" value="Male" <?php $gen=$row['gender']; if($gen=="Male"){ echo "checked";} ?>>
                    <label class="form-check-label" for="exampleRadios1" style="color: grey;">
                    Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>

                    <input class="form-check-input" type="radio" name="gender" value="Female" <?php $gen=$row['gender']; if($gen=="Female"){ echo "checked";} ?>>
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
                    <option value="Trivandrum" <?=$row['district'] == 'Trivandrum' ? ' selected="selected"' : '';?>>Trivandrum</option>
                          <option value="Kollam" <?=$row['district'] == 'Kollam' ? ' selected="selected"' : '';?>>Kollam</option>
                          <option value="Idukki" <?=$row['district'] == 'Idukki' ? ' selected="selected"' : '';?>>Idukki</option>
                          <option value="Kottayam" <?=$row['district'] == 'Kottayam' ? ' selected="selected"' : '';?>>Kottayam</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode" value="<?php echo $row['pincode']; ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="qual" class="form-control input-sm" placeholder="Qualifications [Seperated by commas]" value="<?php echo $row['qual']; ?>">
                </div>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                <div class="form-group">
                  <select class="form-control bfh-states" name="specs" data-country="US" data-state="CA">
                    <option value="null">Specialization Field</option>
                    <option value="Pediatrics" <?=$row['specs'] == 'Pediatrics' ? ' selected="selected"' : '';?>>Pediatrics</option>
                    <option value="Ayurveda" <?=$row['specs'] == 'Ayurveda' ? ' selected="selected"' : '';?>>Ayurveda</option>
                    <option value="Physical Medicine" <?=$row['specs'] == 'Physical Medicine' ? ' selected="selected"' : '';?>>Physical Medicine</option>
                    <option value="Dermatology" <?=$row['specs'] == 'Dermatology' ? ' selected="selected"' : '';?>>Dermatology</option>
                    <option value="Cardiology" <?=$row['specs'] == 'Cardiology' ? ' selected="selected"' : '';?>>Cardiology</option>
                    <option value="ENT" <?=$row['specs'] == 'ENT' ? ' selected="selected"' : '';?>>ENT</option>
                    <option value="Ophthalmology" <?=$row['specs'] == 'Ophthalmology' ? ' selected="selected"' : '';?>>Ophthalmology</option>
                  </select>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group">
                  <select class="form-control bfh-states" name="exp" data-country="US" data-state="CA">
                    <option value="null">Work Experience</option>
                    <option value="0" <?=$row['exp'] == '0' ? ' selected="selected"' : '';?>>0</option>
                    <option value="1" <?=$row['exp'] == '1' ? ' selected="selected"' : '';?>>1</option>
                    <option value="2" <?=$row['exp'] == '2' ? ' selected="selected"' : '';?>>2</option>
                    <option value="3" <?=$row['exp'] == '3' ? ' selected="selected"' : '';?>>3</option>
                    <option value="4" <?=$row['exp'] == '4' ? ' selected="selected"' : '';?>>4</option>
                    <option value="5" <?=$row['exp'] == '5' ? ' selected="selected"' : '';?>>5</option>
                    <option value="5+" <?=$row['exp'] == '5+' ? ' selected="selected"' : '';?>>>5</option>
                  </select>
                </div>

            </div><br>
            <input type="submit" value="Update" class="btn btn-info btn-block" ><!-- onclick="return checkAll()" -->
    <?php } ?>
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