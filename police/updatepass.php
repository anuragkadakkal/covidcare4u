<?php
    session_start();
    setcookie('adminlogined',1);
    if(isset($_COOKIE['adminlogined']) && $_COOKIE['adminlogined']==1)
    {
    include 'connection.php';
    include 'policeheader.php'; 
    $lkey = $_COOKIE['lkey'];
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

           

            <!-- DataTales Example -->
            <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Password Update</h6>
            </div>
            <div class="card-body" >
                <form role="form" action="passupdatepolice.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
			    				<input type="Password" name="curpass"  class="form-control input-sm" placeholder="Current Password">
			    			</div>

			    			<div class="form-group">
			    				<input type="Password" name="pass"  class="form-control input-sm" placeholder="New Password">
			    			</div>

			    			<div class="form-group">
			    				<input type="Password" name="conpass"  class="form-control input-sm" placeholder="Confirm Password">
			    			</div>
			    			<br>
            <input type="submit" value="Update Password" class="btn btn-info btn-block">

            </form>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->
<?php include 'policefooter.php'; 
}

else
{
    Header("location:../index.php");
}
?>
