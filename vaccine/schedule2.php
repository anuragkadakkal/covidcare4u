<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 

    include 'connection.php';
    include 'vaccineheader.php';
    $userkey=$_GET['t'];
    $sch=$_GET['sch2']; //echo $sch;exit;
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>VIEW PHC DOCTOR'S NOTIFICATIONS</b></center></h2><br>
        
            <form role="form" method="POST" action="viewsearchresultnotify.php" name="myform">
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <select class="form-control bfh-states country" name="district" data-country="US" data-state="CA">
                <option value="null">Select District</option>
                <option value="Trivandrum">Trivandrum</option>
                <option value="Kollam">Kollam</option>
                <option value="Idukki">Idukki</option>
                <option value="Kottayam">Kottayam</option>
              </select>
              <input type="hidden" name="userkey" value="<?php echo $userkey; ?>">
              <?php 
                if(isset($sch))
                { ?>
                    <input type="hidden" name="sch2" value="<?php echo $sch; ?>">
       <?php    }

              ?>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
            <div class="form-group" id="response">

              <select class="form-control bfh-states" name="drkey" data-country="US" data-state="CA" readonly>
                              <option>Nearest PHC</option>
                          </select>
                </div>
              </div>
            </div>
            </div>
               <input type="submit" value="Search" class="btn btn-info btn-block" > 
          </form>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "districtphcpolice.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
    });
});
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "districtpolice.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response1").html(data);
        });
    });
});
</script>


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
    include 'vaccinefooter.php';
   }
    else
    {
        Header("location:../index.php");
    }
?>