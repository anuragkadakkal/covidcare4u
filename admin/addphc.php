<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {include 'adminheader.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Public Health Centre</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registration Form</h6>
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
    var f3 = document.getElementById("f3");
    var email = document.getElementById('email').value;

    if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,8}$/.test(email))
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

                          <form role="form" action="phcreg.php" method="post" enctype="multipart/form-data" name="myform">
              			    <div class="form-group">
                                <input type="text" name="fname"  class="form-control input-sm" placeholder="PHC Name" id="fname" onkeyup="fnameUser()"></textarea>
              <span style="color: red;font-size: 14px" id="ff"></span>
                              </div>

										  <div class="form-group">
              			    				<textarea rows="2" name="address" class="form-control input-sm" placeholder="Address" id="address" onkeyup="addrUser()"></textarea>
              <span style="color: red;font-size: 14px" id="f4"></span>
              			    			</div>
              			    			<div class="form-group">
              			    				<input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" id="email" onkeyup="emailUser()">
              <span style="color: red;font-size: 14px" id="f3"></span>
              			    			</div>
              			    			

              			    			

                              <div class="row">
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
              			               				<select class="form-control bfh-states" data-country="US" data-state="CA" name="district" id="district" onclick="distUser()">
                    <option value="null">Select District</option>
                                    <option value="Trivandrum">Trivandrum</option>
                                    <option value="Kollam">Kollam</option>
                                    <option value="Idukki">Idukki</option>
                                    <option value="Kottayam">Kottayam</option>
                                    <option value="Wayanad">Wayanad</option>
                                    <option value="Ernakulam">Ernakulam</option>
                                    <option value="Alappuzha">Alappuzha</option>
                                    <option value="kozhikode">Kozhikode</option>
                                    <option value="Thrissur">Thrissur</option>
                                    <option value="Palakkad">Palakkad</option>
                                    <option value="Kannur">Kannur</option>
                                    <option value="Malappuram">Malappuram</option>
                                    <option value="Pathanamthitta">Pathanamthitta</option>
                                    <option value="Kasargode">Kasargode</option>
                  </select>
                  <span style="color: red;font-size: 14px" id="f7"></span>

              			    					</div>
              			    				</div>
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
								  <div class="form-group">
								  <input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode" id="pincode" onkeyup="distPin()">
                  <span style="color: red;font-size: 14px" id="f8"></span>
              			               				
              			    					</div>
              			    					</div>
              			    				</div>
              			    			</div>


                              <div class="form-group">
							  <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" id="phone" onkeyup="phoneUser()">
                  <span style="color: red;font-size: 14px" id="f5"></span>
                              </div> <br>
  			    			<input type="submit" value="Register" class="btn btn-info btn-block" onclick="return checkAll()">

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
