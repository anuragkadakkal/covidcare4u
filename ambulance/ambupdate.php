<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
    include 'connection.php';
    include 'ambulanceheader.php';
    $lkey = $_COOKIE['lkey'];
  $sql="select * from tb_ambulance inner join tb_login on tb_login.id=tb_ambulance.loginid where loginid='".$lkey."'";
//echo $sql;exit;
  $result = mysqli_query($conn,$sql);
?>

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">

<script type="text/javascript">
  function checkEmail(){
    var e1 = document.getElementById("e1");
    var emailaddress = document.getElementById('emailaddress').value;

    if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,8}$/.test(emailaddress))
       {
         e1.textContent = "**Invalid Email Format";
         document.getElementById("emailaddress").focus();
         return false;
       }
       else
       {
        e1.textContent = "";
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

    if(checkEmail()&&phoneUser())
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
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>UPDATE PROFILE</b></center></h2><br>
        <form role="form" method="POST" action="updateambreg.php" name="myform">
            <?php while ($row=mysqli_fetch_array($result))
  {  ?>
                            <div class="form-group">
                                <input type="text" name="fname"  class="form-control input-sm" placeholder="PHC Name" value="<?php echo $row['fname']; ?>" readonly>
                              </div>
<input type="hidden" name="key" value="<?php echo $row['ambkey']; ?>">
                                          <div class="form-group">
                                            <textarea rows="2" name="address" class="form-control input-sm" placeholder="Address" readonly=""><?php echo $row['address']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" value="<?php echo $row['username']; ?>" id="emailaddress" onkeyup="checkEmail()">
                                            <span style="color: red;font-size: 14px" id="e1"></span>
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
                              <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" value="<?php echo $row['phno']; ?>" id="phone" onkeyup="phoneUser()">
                  <span style="color: red;font-size: 14px" id="f5"></span>
                              </div> <br>
                            <input type="submit" value="Update" class="btn btn-info btn-block" onclick="return checkAll()">

                
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
    include 'ambulancefooter.php';
 }
    else
    {
        Header("location:../index.php");
    }
?>
