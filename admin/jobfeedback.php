<?php 
    include 'connection.php';
    include 'adminheader.php'; 
    $jobkey = $_GET['t'];
    $sql = "select * from tb_jobs where jkey = '".$jobkey."'";
    $result = mysqli_query($conn,$sql);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <?php
                while ($row=mysqli_fetch_array($result))
                {
                    ?>
            <h1 class="h3 mb-2 text-gray-800">Job 
                <font color="green"> ~
                        <?php echo $row['jtitle']; ?>&nbsp;
                        <?php echo $row['jdistrict']; ?>&nbsp;
                        <?php echo $row['jsection']; ?>
                ~</font> Feedback</h1>
            <p class="mb-4"></p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Feedback Query</h6>
            </div>
            <div class="card-body" >
                <form role="form" action="jobfeed.php?t=<?php echo $row['jkey']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <textarea rows="10" name="feedback" class="form-control input-sm" placeholder="Enter your feedback here."></textarea>

            
            <?php        
                }
            ?>





                   
                </div>
            <input type="submit" value="Post Feedback" class="btn btn-info btn-block">

            </form>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->
<?php include 'adminfooter.php'; ?>
