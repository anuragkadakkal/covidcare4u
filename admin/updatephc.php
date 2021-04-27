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

<?php 
$key=$_GET['t'];
 $sql = "select * from tb_phc where phckey='".$key."'";
  $result = mysqli_query($conn,$sql); ?>

                          <form role="form" action="updatephcreg.php" method="post" enctype="multipart/form-data" name="myform">
              			    
 <?php while ($row=mysqli_fetch_array($result))
                      {   ?>

                        <div class="form-group">
                                <input type="text" name="fname"  class="form-control input-sm" placeholder="PHC Name" value="<?php echo $row['fname']; ?>">
                              </div>
										  <div class="form-group">
              			    				<textarea rows="2" name="address" class="form-control input-sm" placeholder="Address"><?php echo $row['address']; ?></textarea>
              			    			</div>
              			    			<div class="form-group">
              			    				<input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" value="<?php echo $row['email']; ?>">
              			    			</div>
              			    			

              			    			
<input type="hidden" name="key"  value="<?php echo $key; ?>">
                              <div class="row">
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group"><?php $d=$row['district']; ?>
              			               				<select class="form-control bfh-states" data-country="US" data-state="CA" name="district">
              			               					<option value="null">District</option>
              			               					<option value="Idukki"<?php if($d=='Idukki'){echo "selected"; } ?>>Idukki</option>
              			               					<option value="Kottayam" <?php if($d=='Kottayam'){echo "selected"; } ?>>Kottayam</option>
              			               				</select>

              			    					</div>
              			    				</div>
              			    				<div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
								  <div class="form-group">
								  <input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode" value="<?php echo $row['pincode']; ?>">
              			               				
              			    					</div>
              			    					</div>
              			    				</div>
              			    			</div>


                              <div class="form-group">
							  <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" value="<?php echo $row['phone']; ?>">
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
