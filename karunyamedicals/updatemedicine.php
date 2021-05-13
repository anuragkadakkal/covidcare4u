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
            <script type="text/javascript">
  
  function firstName() {
    var f1 = document.getElementById("f1");
    var fname = document.getElementById('fname').value;

    if(!/^[A-Za-z0-9.,-_ ]{6,26}$/.test(fname))
       {
         f1.textContent = "**Invalid Medicine Name";
         var x = document.getElementById("fname");
         x.focus();
         return false;
       }
       else
       {
        f1.textContent = "";
        return true;
       }
  }
function distUser() {

    var f7 = document.getElementById("f7");
    var district = document.getElementById('district').value;

    if(district=="null")
       {
         f7.textContent = "**Select any Manufacture Company";
         document.getElementById("district").focus();
         return false;
       }
       else
       {
        f7.textContent = "";
        return true;
       }
  }

  function qtyUser() {

    var fq = document.getElementById("fq");
    var qty = document.getElementById('qty').value;

    if(qty=="null")
       {
         fq.textContent = "**Select any Valid Quantity";
         document.getElementById("qty").focus();
         return false;
       }
       else
       {
        fq.textContent = "";
        return true;
       }
  }

  function startDate() {

    var s1 = document.getElementById("s1");
    var sdate = document.getElementById('sdate').value;

    if(sdate=="")
       {
         s1.textContent = "**Select Any Manf. Date";
         document.getElementById("sdate").focus();
         return false;
       }
       else
       {
        s1.textContent = "";
        return true;
       }
  }

  function endDate() {

    var e1 = document.getElementById("e1");
    var edate = document.getElementById('edate').value;

    if(edate=="")
       {
         e1.textContent = "**Select Any Expiry Date";
         document.getElementById("edate").focus();
         return false;
       }
       else
       {
        e1.textContent = "";
        return true;
       }
  }

  function descUser() {
    var f4 = document.getElementById("f4");
    var address = document.getElementById('address').value;

    if (!/^[#.0-9a-zA-Z\s,-,(,)]{8,5000}$/.test(address))
       {
         f4.textContent = "**Invalid Medicine Description Format";
         document.getElementById("address").focus();
         return false;
       }
       else
       {
        f4.textContent = "";
        return true;
       }
  }

  function phoneUser() {
    var f5 = document.getElementById("f5");
    var phone = document.getElementById('phone').value;

    if(!/^[0-9.]{1,15}$/.test(phone))
       {
         f5.textContent = "**Invalid Price Format";
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

    if(distUser()&&firstName()&&qtyUser()&&startDate()&&endDate()&&phoneUser()&&descUser())
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
  include 'connection.php';

  $lkey=$_GET['t'];
  $sql = "select * from tb_medicinereg where fkey ='".$lkey."'";//echo $sql;exit;
  $result = mysqli_query($conn,$sql);
?>
                          <form role="form" action="updatemedicinereg.php?t=<?php echo $lkey; ?>" method="post" enctype="multipart/form-data" name="myform">                       
<?php while ($row=mysqli_fetch_array($result))
                      {  $mfgcom=$row['mfgcompany']; ?>


                              <div class="form-group">
              <select class="form-control bfh-states" name="company" data-country="US" data-state="CA" id="district" onclick="distUser()">
                  <option value="null">Manufacture Company</option>
                    
                    <option value="Cipla"<?php echo $status = ($mfgcom=='Cipla') ? "Selected" : ""; ?>>Cipla</option>
                    <option value="Dr. Reddy"<?php echo $status=($mfgcom=='Dr. Reddy') ?"selected":"";?>>Dr. Reddy</option>
                    <option value="Lupin" <?php echo $status= ($mfgcom=='Lupin')? "selected":"";?>>Lupin</option>
                    <option value="Cadila" <?php echo $status= ($mfgcom=='Cadila')? "selected":"";?>>Cadila</option>
                    <option value="Wockhardt" <?php echo $status= ($mfgcom=='Wockhardt')? "selected":"";?>>Wockhardt</option>
                    <option value="Torrent Pharma" <?php echo $status= ($mfgcom=='Torrent Pharma')? "selected":"";?>>Torrent Pharma</option>
                    <option value="Aurobinda" <?php echo $status= ($mfgcom=='Aurobinda')? "selected":"";?>>Aurobinda</option>
                    <option value="Ranbaxy Laborataries Ltd." <?php echo $status= ($mfgcom=='Ranbaxy Laborataries Ltd.')? "selected":"";?>>Ranbaxy Laborataries Ltd.</option>


                  </select>

<span style="color: red;font-size: 14px" id="f7"></span>

            </div>

                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                        <input type="text" name="fname" class="form-control input-sm" placeholder="Medicine Name" value="<?php echo $row['fname']; ?>" id="fname" onkeyup="firstName()">
                  <span style="color: red;font-size: 14px" id="f1"></span>


                                  </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                  <div class="form-group">
                  
<select class="form-control bfh-states" data-country="US" data-state="CA" name="qty" id="qty" onclick="qtyUser()">
 

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
                         <span style="color: red;font-size: 14px" id="fq"></span>                                     
                                  </div>
                                  </div>
                                </div>
                              </div>


                              <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="tdate" class="form-control input-sm" placeholder="Mfg Date" value="<?php echo $row['mfgdate']; ?>" onfocus="(this.type='date')" id="sdate" onfocusout="startDate()">
                  <span style="color: red;font-size: 14px" id="s1"></span>

                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="rdate"  class="form-control input-sm" placeholder="Exp Date" value="<?php echo $row['expdate']; ?>" onfocus="(this.type='date')" id="edate" onfocusout="endDate()">
                  <span style="color: red;font-size: 14px" id="e1"></span>

                </div>
              </div>
            </div>

                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                       <input type="text" name="price" class="form-control input-sm" placeholder="Price" value="<?php echo $row['fprice']; ?>" id="phone" onkeyup="phoneUser()">
                  <span style="color: red;font-size: 14px" id="f5"></span>

                                  </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                  <div class="form-group">
                                            <input type="text" name="desc" class="form-control input-sm" placeholder="Description" value="<?php echo $row['fdesc']; ?>" id="address" onkeyup="descUser()">
              <span style="color: red;font-size: 14px" id="f4"></span>

                                  </div>
                                  </div>
                                </div>
                              </div>

<?php } ?>
                              <div class="form-group">
                
                              </div> 
                  <input type="submit" value="Update" class="btn btn-info btn-block" onclick="return checkAll()">

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
