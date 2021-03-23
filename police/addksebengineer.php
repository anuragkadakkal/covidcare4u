<?php include 'adminheader.php'; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add KSEB Engineer</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registration Form</h6>
                        </div>
                        <div class="card-body" >


                          <form role="form" action="engineerreg.php" method="post" enctype="multipart/form-data" name="myform">
              			    			<div class="row">
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
              			    					<div class="form-group">
              			               				<input type="text" name="fname" class="form-control input-sm" placeholder="First Name">
              			    					</div>
              			    				</div>
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
              			    					<div class="form-group">
              			    						<input type="text" name="lname" class="form-control input-sm" placeholder="Last Name">
              			    					</div>
              			    				</div>
              			    			</div>

              			    			<div class="form-group">
              			    				<input type="email" name="email"  class="form-control input-sm" placeholder="Email Address">
              			    			</div>
              			    			<div class="form-group">
              			    				<textarea rows="2" name="address" class="form-control input-sm" placeholder="Address"></textarea>
              			    			</div>

              			    			<div class="row">
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
              			    					<div class="form-group">
              			               				<input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number">
              			    					</div>
              			    				</div>
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
              			    					<div class="form-group">
              			    						<div class="form-check"><label class="form-check-input" for="exampleRadios1" style="color: Gender;font-weight: bold;">Gender</label><br>
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
              			               				<select class="form-control bfh-states" data-country="US" data-state="CA" name="district">
              			               					<option value="null">District</option>
              			               					<option value="Idukki">Idukki</option>
              			               					<option value="Kottayam">Kottayam</option>
              			               				</select>

              			    					</div>
              			    				</div>
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                    <select class="form-control bfh-states" data-country="US" data-state="CA" name="section">
                                      <option value="null">Section Code</option>
                                      <option value="Mundakayam [5302]">Mundakayam [5302]</option>
                                      <option value="Kuttikanam [5303]">Kuttikanam [5303]</option>
                                    </select>
              			    					</div>
              			    				</div>
              			    			</div>


                              <div class="form-group">
                                <input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode">
                              </div>
  			    			<input type="submit" value="Add Engineer" class="btn btn-info btn-block" onclick="return checkEng()">

              			    		</form>




                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<?php include 'adminfooter.php'; ?>
