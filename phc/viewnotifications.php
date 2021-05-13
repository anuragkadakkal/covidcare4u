<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 

    include 'connection.php';
    include 'phcheader.php';
?>
<script type="text/javascript">
  function startDate() {

    var s1 = document.getElementById("s1");
    var sdate = document.getElementById('sdate').value;

    if(sdate=="")
       {
         s1.textContent = "**Select Any Notification Date";
         document.getElementById("sdate").focus();
         return false;
       }
       else
       {
        s1.textContent = "";
        return true;
       }
  }

  function distUser() {

    var f7 = document.getElementById("f7");
    var district = document.getElementById('district').value;

    if(district=="null")
       {
         f7.textContent = "**Select any Doctor";
         document.getElementById("district").focus();
         return false;
       }
       else
       {
        f7.textContent = "";
        return true;
       }
  }

  function checkAll(){
    if(startDate()&&distUser())
    {
      return true;
    }
    else
    {
      return false;
    }
  }
</script>



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
                  <input type="text" name="tdate" class="form-control input-sm" placeholder="Notification Date" onfocus="(this.type='date')" id="sdate" onfocusout="startDate()">
                  <span style="color: red;font-size: 14px" id="s1"></span>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
            <div class="form-group">
              <select class="form-control bfh-states" name="drkey" data-country="US" data-state="CA" id="district" onclick="distUser()">
                  <option value="null">Doctor Name</option>
                <?php $sql= "select * from tb_doctor where phcid='".$_COOKIE['lkey']."'";
  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  { ?> 
                    
                    <option value="<?php echo $row['drkey']; ?>"><?php echo "Dr. ".$row['fname']." ".$row['lname']; ?></option>

<?php } ?>
                  </select>
                  <span style="color: red;font-size: 14px" id="f7"></span>
                </div>
              </div>
            </div>
            </div>
               <input type="submit" value="Search" class="btn btn-info btn-block" onclick="return checkAll()"> 
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
    include 'phcfooter.php';
   }

    else
    {
        Header("location:../index.php");
    }
?>