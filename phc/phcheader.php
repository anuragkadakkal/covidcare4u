<?php
// this MUST be called prior to any output including whitespaces and line breaks!

  include 'connection.php';

  $lkey = $_COOKIE['lkey'];
  $sql="select * from tb_phc where loginid='".$lkey."'";//echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
    $name=$row['fname'];
    $address=$row['address'];
  }
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>CovidCare4U - Public Health Centre</title>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
 <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="jquery.dataTables.min.css"> 
  <link rel="icon" href="../resources/images/covid-logo.png" type="image/icon type">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
	
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="phchome.php"><i class="fas fa-bars text-success"><span class=" font-weight-light text-success">&nbsp;&nbsp;<?php echo $name." : ".$address;?></span>
          </i></a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="phchome.php" class="brand-link">
      <span class="brand-text font-weight-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CovidCare4U <i class="nav-icon fas fa-home"></i></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info text-gray">
          <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Public Health Centre</i>
        </div>
      </div>

      <!-- Sidebar Menu -->
            <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		
				<li class="nav-item">
				<a  href="phchome.php" class="nav-link " >
				<i class="nav-icon fas fa-home"></i>
				<p>
				Dashboard
				</p>
				</a>
				</li>
        <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper text-red"></i>
              <p>
                Daily Reporting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="daily.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://dashboard.kerala.gov.in/dailyreporting-view-public-districtwise.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>    
            </ul>
            </li> 

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-viruses text-pink"></i>
              <p>
                Covid Testing
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="daily.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Antigen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dfd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RTPCR</p>
                </a>
              </li>    
            </ul>
            </li> -->

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
               <i class="nav-icon fa fa-syringe text-success "></i>
              <p>
                Vaccine
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewvaccinereg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="spotvaccinereg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Spot Reg</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="viewspotvaccinereg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Spot Reg View</p>
                </a>
              </li> 
            </ul>
            </li>  
				
           <div class="info text-gray">
          <i>Services</i>
        </div>
            		  		 <!-- <li class="nav-item">
            <a  href="onlinedr.html" class="nav-link ">
              <i class="nav-icon fa fa-plus text-danger " style="background:#FFF; border-radius:25px"></i>
              <p>
                Online Doctor Service
              </p>
            </a>
          </li> -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bed text-info"></i>
              <p>
                Quarantine
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewquar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>      
            </ul>
            </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ambulance text-yellow"></i>
              <p>
                Ambulance
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewambulancerequest.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>      
            </ul>
            </li>

		  		 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-plus text-danger"></i>
              <p>
                Doctors
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adddoctor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewdoctors.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewnotifications.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notifications</p>
                </a>
              </li>      
            </ul>
            </li>


           <div class="info text-gray">
          <i>General</i>
        </div>


		  		 <li class="nav-item">
            <a  href="phcupdate.php" class="nav-link ">
              <i class="nav-icon  fas fa-user text-orange"></i>
              <p>
                Update Profile
                
              </p>
            </a>
          </li>

		  		 <li class="nav-item">
            <a  href="passwordchange.php" class="nav-link ">
              <i class="nav-icon fas fa-key text-success"></i>
              <p>
                Password Change
                
              </p>
            </a>
          </li>

		  		 <li class="nav-item">
            <a  href="logout.php" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>

          

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Updated: 27-04-2021 6:33 pm</li>
            </ol>
          </div>
        </div>
      </div></.container-fluid 
    </section> -->
