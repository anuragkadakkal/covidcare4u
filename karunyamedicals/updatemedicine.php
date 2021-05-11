<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { include 'medicalheader.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Karunya Medicals -  Medicines</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Medicine Details</h6>
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
  include 'connection.php';

  $lkey=$_GET['t'];
  $sql = "select * from tb_medicinereg where fkey ='".$lkey."'";//echo $sql;exit;
  $result = mysqli_query($conn,$sql);
?>
                          <form role="form" action="updatemedicinereg.php?t=<?php echo $lkey; ?>" method="post" enctype="multipart/form-data" name="myform">                       
<?php while ($row=mysqli_fetch_array($result))
                      {  $mfgcom=$row['mfgcompany']; ?>


                              <div class="form-group">
              <select class="form-control bfh-states" name="company" data-country="US" data-state="CA">
                  <option value="null">Manufacture Company</option>
                    
                    <option value="Cipla"<?php echo $status = ($mfgcom=='Cipla') ? "Selected" : ""; ?>>Cipla</option>
                    <option value="Dr. Reddy" <?php ($mfgcom=='Dr. Reddy') ? "selected":"";?>>Dr. Reddy</option>
                    <option value="Lupin" <?php ($mfgcom=='Lupin')? "selected":"";?>>Lupin</option>
                    <option value="Cadila" <?php ($mfgcom=='Cadila')? "selected":"";?>>Cadila</option>
                    <option value="Wockhardt" <?php ($mfgcom=='Wockhardt')? "selected":"";?>>Wockhardt</option>
                    <option value="Torrent Pharma" <?php ($mfgcom=='Torrent Pharma')? "selected":"";?>>Torrent Pharma</option>
                    <option value="Aurobinda" <?php ($mfgcom=='Aurobinda')? "selected":"";?>>Aurobinda</option>
                    <option value="Ranbaxy Laborataries Ltd." <?php ($mfgcom=='Ranbaxy Laborataries Ltd.')? "selected":"";?>>Ranbaxy Laborataries Ltd.</option>


                  </select>
            </div>

                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                        <input type="text" name="fname" class="form-control input-sm" placeholder="Food Name" value="<?php echo $row['fname']; ?>">

                                  </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                  <div class="form-group">
                  
<select class="form-control bfh-states" data-country="US" data-state="CA" name="qty">
                                              <option value="null">Quantity Available</option>
<?php
$qty=$row['fqty'];
for ($x = 0; $x <= 100; $x++) { ?>

<option value="<?php   echo $x; ?>" <?php  if($qty==$x){ echo "selected"; } ?> >
  <?php   echo $x; ?>

</option>
<?php }
?>

                         </select>                                      
                                  </div>
                                  </div>
                                </div>
                              </div>


                              <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="tdate" class="form-control input-sm" placeholder="Mfg Date" value="<?php echo $row['mfgdate']; ?>" onfocus="(this.type='date')">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="rdate"  class="form-control input-sm" placeholder="Exp Date" value="<?php echo $row['expdate']; ?>" onfocus="(this.type='date')">
                </div>
              </div>
            </div>

                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                       <input type="text" name="price" class="form-control input-sm" placeholder="Price" value="<?php echo $row['fprice']; ?>">
                                  </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                  <div class="form-group">
                                            <input type="text" name="desc" class="form-control input-sm" placeholder="Description" value="<?php echo $row['fdesc']; ?>">
                                  </div>
                                  </div>
                                </div>
                              </div>

<?php } ?>
                              <div class="form-group">
                
                              </div> 
                  <input type="submit" value="Update" class="btn btn-info btn-block" ><!-- onclick="return checkAll()" -->

                            </form>



                        </div>
                    </div>

                </div>
                <!-- /.container-fluid --><?php
        include 'medicalfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>
