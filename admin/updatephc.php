<?php 
    session_start();
    $key= $_GET['t'];
    setcookie('adminlogined',1);
    if(isset($_COOKIE['adminlogined']) && $_COOKIE['adminlogined']==1)
    {include 'connection.php';
      include 'adminheader.php'; 
      
  ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">PHC Updation</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Updation Form</h6>
                        </div>
                        <div class="card-body" >
<script>
	
  function fnameUser() {
    var ff = document.getElementById("ff");
    var fname = document.getElementById('fname').value;

    if (!/^[#.0-9a-zA-Z\s,-]{5,50}$/.test(fname))
       {
         ff.textContent = "**Invalid PHC Name";
         document.getElementById("fname").focus();
         return false;
       }
       else
       {
        ff.textContent = "";
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

  function emailUser() {
    var zz = document.getElementById("zz");
    var emailusers = document.getElementById('emailusers').value;

    if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,8}$/.test(emailusers))
       {
         zz.textContent = "**Invalid Email Format";
         document.getElementById("emailusers").focus();
         return false;
       }
       else
       {
        zz.textContent = "";
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

  function checkAll() {

    if(fnameUser()&&addrUser()&&emailUser()&&distUser()&&distPin()&&phoneUser())
       {
         return true;
       }
       else
       {
        return false;
       }
  }
</script>

<?php 
$key=$_GET['t'];
 $sql = "select * from tb_phc where phckey='".$key."'";
  $result = mysqli_query($conn,$sql); ?>

                          <form role="form" action="updatephcreg.php" method="post" enctype="multipart/form-data" name="myform">
              			    
 <?php while ($row=mysqli_fetch_array($result))
                      {   ?>

                        <div class="form-group">
                                <input type="text" name="fname"  class="form-control input-sm" placeholder="PHC Name" value="<?php echo $row['fname']; ?>" id="fname" onkeyup="fnameUser()"></textarea>
              <span style="color: red;font-size: 14px" id="ff"></span>
                              </div>
										  <div class="form-group">
              			    				<textarea rows="2" name="address" class="form-control input-sm" placeholder="Address" id="address" onkeyup="addrUser()"><?php echo $row['address']; ?></textarea>
                                <span style="color: red;font-size: 14px" id="f4"></span>
              			    			</div>
              			    			<div class="form-group">
              			    				<input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" value="<?php echo $row['email']; ?>" id="emailusers" onkeyup="emailUser()">
                                <span style="color: red;font-size: 14px" id="zz"></span>
              			    			</div>
              			    			

              			    			
                <input type="hidden" name="key"  value="<?php echo $key; ?>">
                              <div class="row">
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
              			               				<select class="form-control bfh-states" data-country="US" data-state="CA" name="district" id="district" onclick="distUser()">
              			               					<option value="null">District</option>
                                <option value="Trivandrum" <?=$row['district'] == 'Trivandrum' ? ' selected="selected"' : '';?>>Trivandrum</option>
                                <option value="Kollam" <?=$row['district'] == 'Kollam' ? ' selected="selected"' : '';?>>Kollam</option>
                                <option value="Idukki" <?=$row['district'] == 'Idukki' ? ' selected="selected"' : '';?>>Idukki</option>
                                <option value="Kottayam" <?=$row['district'] == 'Kottayam' ? ' selected="selected"' : '';?>>Kottayam</option>
                                <option value="Wayanad" <?=$row['district'] == 'Wayanad' ? ' selected="selected"' : '';?>>Wayanad</option>
                                <option value="Ernakulam" <?=$row['district'] == 'Ernakulam' ? ' selected="selected"' : '';?>>Ernakulam</option>
                                <option value="Alappuzha" <?=$row['district'] == 'Alappuzha' ? ' selected="selected"' : '';?>>Alappuzha</option>
                                <option value="kozhikode" <?=$row['district'] == 'kozhikode' ? ' selected="selected"' : '';?>>kozhikode</option>
                                <option value="Thrissur" <?=$row['district'] == 'Thrissur' ? ' selected="selected"' : '';?>>Thrissur</option>
                                <option value="Palakkad" <?=$row['district'] == 'Palakkad' ? ' selected="selected"' : '';?>>Palakkad</option>
                                <option value="Kannur" <?=$row['district'] == 'Kannur' ? ' selected="selected"' : '';?>>Kannur</option>
                                <option value="Malappuram" <?=$row['district'] == 'Malappuram' ? ' selected="selected"' : '';?>>Malappuram</option>
                                <option value="Pathanamthitta" <?=$row['district'] == 'Pathanamthitta' ? ' selected="selected"' : '';?>>Pathanamthitta</option>
                                <option value="Kasargode" <?=$row['district'] == 'Kasargode' ? ' selected="selected"' : '';?>>Kasargode</option>
              			               				</select>
                                          <span style="color: red;font-size: 14px" id="f7"></span>

              			    					</div>
              			    				</div>
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
								  <div class="form-group">
								  <input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode" value="<?php echo $row['pincode']; ?>" id="pincode" onkeyup="distPin()">
                  <span style="color: red;font-size: 14px" id="f8"></span>
              			               				
              			    					</div>
              			    					</div>
              			    				</div>
              			    			</div>


                              <div class="form-group">
							  <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" value="<?php echo $row['phone']; ?>" id="phone" onkeyup="phoneUser()">
                  <span style="color: red;font-size: 14px" id="f5"></span>
                              </div> <br>
  			    			<input type="submit" value="Update" class="btn btn-info btn-block" onclick="return checkAll()">
<?php } ?>
              			    		</form>




                        </div>
                    </div>

                </div>
                <!-- /.container-fluid --><?php
				include 'adminfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>
