<?php
    session_start();
   
    include 'connection.php';
    include 'drheader.php';
    $lkey = $_COOKIE['lkey'];
  $sql="select * from tb_doctor inner join tb_login on tb_login.id=tb_doctor.loginid where loginid='".$lkey."'";

  $result = mysqli_query($conn,$sql);
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>UPDATE PROFILE</b></center></h2><br>
        <form role="form" method="POST" action="updatedrreg.php" name="myform">
            <?php while ($row=mysqli_fetch_array($result))
  {  ?>
                            <div class="form-group">
                                <input type="text" name="fname"  class="form-control input-sm" placeholder="PHC Name" value="<?php echo $row['fname']; ?>" readonly>
                              </div>
<input type="hidden" name="key" value="<?php echo $row['drkey']; ?>">
                                          <div class="form-group">
                                            <textarea rows="2" name="address" class="form-control input-sm" placeholder="Address" readonly=""><?php echo $row['address']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" value="<?php echo $row['username']; ?>">
                                        </div>
                                        

                                        

                              <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                                    <select class="form-control bfh-states" data-country="US" data-state="CA" name="district" readonly>
                                                        <option value="<?php echo $row['district'];  ?>"><?php echo $row['district'];?></option>
                                                        
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                  <div class="form-group">
                                  <input type="text" name="pincode" class="form-control input-sm" placeholder="Pincode" value="<?php echo $row['pincode']; ?>" readonly>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                        </div>


                              <div class="form-group">
                              <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" value="<?php echo $row['phno']; ?>">
                              </div> <br>
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
    include 'drfooter.php';
  
?>
