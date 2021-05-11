<?php
    session_start();
    if(isset($_SESSION['adminlogined']) && $_SESSION['adminlogined']==1)
    {include 'adminheader.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Police Station </h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registration Form</h6>
                        </div>
                        <div class="card-body" >
						<script>
	function checkAll()
   {
     var address = document.forms["myform"]["address"].value;
	 var email = document.forms["myform"]["email"].value;
	 var district = document.forms["myform"]["district"].value;
	 var pincode = document.forms["myform"]["pincode"].value;
     var phno = document.forms["myform"]["phno"].value;

     if(address=="")
     {
       alert('Enter Correct Address');
       return false;
     } 

	 if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)) 
     {
        alert("You have entered an invalid email address!")
        return false;
     }

	 if(district=="null") 
     {
       alert('Select any District');
       return false;
     }


     if(!/^[0-9]{6}$/.test(pincode))
     {
       alert('Enter Correct Pincode [1-9 6-characters]');
       return false;
     }
     

     if(!/^[6-9]{1}[0-9]{9}$/.test(phno))
     {
       alert('Enter Correct Phone starting with 6 7 8 9 digits [10-characters]');
       return false;
     }


   }
</script>

                          <form role="form" action="addpolicestationreg.php" method="post" enctype="multipart/form-data" name="myform">
              			    

										  <div class="form-group">
              			    				<textarea rows="2" name="address" class="form-control input-sm" placeholder="Address"></textarea>
              			    			</div>
              			    			<div class="form-group">
              			    				<input type="email" name="email"  class="form-control input-sm" placeholder="Email Address">
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
								  <div class="form-group">
								  <input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode">
              			               				
              			    					</div>
              			    					</div>
              			    				</div>
              			    			</div>


                              <div class="form-group">
							  <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number">
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
