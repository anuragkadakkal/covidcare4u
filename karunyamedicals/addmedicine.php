<?php
    session_start();
    setcookie('adminlogined',1);
    if(isset($_COOKIE['adminlogined']) && $_COOKIE['adminlogined']==1)
    {include 'medicalheader.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Karunya Meedicals -  Medicines</h1>
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

                          <form role="form" action="addmedicinereg.php" method="post" enctype="multipart/form-data" name="myform">                       

            <div class="form-group">
              <select class="form-control bfh-states" name="company" data-country="US" data-state="CA">
                  <option value="null">Manufacture Company</option>
                    
                    <option value="Cipla">Cipla</option>
                    <option value="Dr. Reddy">Dr. Reddy</option>
                    <option value="Lupin">Lupin</option>
                    <option value="Cadila">Cadila</option>
                    <option value="Wockhardt">Wockhardt</option>
                    <option value="Torrent Pharma">Torrent Pharma</option>
                    <option value="Aurobinda">Aurobinda</option>
                    <option value="Ranbaxy Laborataries Ltd.">Ranbaxy Laborataries Ltd.</option>


                  </select>
            </div>
                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                        <input type="text" name="fname" class="form-control input-sm" placeholder="Medicine Name">

                                  </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                  <div class="form-group">
                  
<select class="form-control bfh-states" data-country="US" data-state="CA" name="qty">
                                              <option value="null">Quantity Available</option>
<?php
for ($x = 0; $x <= 100; $x++) { ?>
<option value="<?php   echo $x; ?>"><?php   echo $x; ?></option>
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
                  <input type="text" name="tdate" class="form-control input-sm" placeholder="Mfg Date" onfocus="(this.type='date')">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="rdate"  class="form-control input-sm" placeholder="Exp Date" onfocus="(this.type='date')">
                </div>
              </div>
            </div>

                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                       <input type="text" name="price" class="form-control input-sm" placeholder="Price">
                                  </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                  <div class="form-group">
                                            <input type="text" name="desc" class="form-control input-sm" placeholder="Description">
                                  </div>
                                  </div>
                                </div>
                              </div>


                              <div class="form-group">
                
                              </div> 
                  <input type="submit" value="Add" class="btn btn-info btn-block" ><!-- onclick="return checkAll()" -->

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
