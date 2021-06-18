<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
    include 'connection.php';
    include 'vaccineheader.php';
    $userkey=$_GET['t'];
?>




<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">


<script type="text/javascript">
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

  function checkAll() {

    if(distUser())
       {
         return true;
       }
       else
       {
        return false;
       }
  }
</script>
        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>SELECT PHC - VACCINATION CENTRE</b></center></h2><br>
        
            <form role="form" method="POST" action="viewsearchresultnotify.php" name="myform">
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <select class="form-control bfh-states country" name="district" data-country="US" data-state="CA" id="district" onclick="distUser()">
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
              <input type="hidden" name="userkey" value="<?php echo $userkey; ?>">
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
               <input type="submit" value="Search" class="btn btn-info btn-block"  onclick="return checkAll()"> 
          </form>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "../districtphcpolice.php",
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