<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>CovidCare4U - Public Health Centre</title>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
 <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="jquery.dataTables.min.css"> 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
	
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"><span class=" font-weight-light text-gray">&nbsp;&nbsp;CovidCare4U</span>
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
        <li class="nav-item has-treeview">
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
                <a href="https://dashboard.kerala.gov.in/dailyreporting-view-public-districtwise.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RTPCR</p>
                </a>
              </li>    
            </ul>
            </li>

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
                <a href="daily.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>First Dose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://dashboard.kerala.gov.in/dailyreporting-view-public-districtwise.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Second Dose</p>
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
                <a href="https://dashboard.kerala.gov.in/dailyreporting-view-public-districtwise.php" class="nav-link">
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
                <a href="https://dashboard.kerala.gov.in/dailyreporting-view-public-districtwise.php" class="nav-link">
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


           <div class="info text-gray">
          <i>General</i>
        </div>


		  		 <li class="nav-item">
            <a  href="government-orders.html" class="nav-link ">
              <i class="nav-icon  fas fa-user text-orange"></i>
              <p>
                Update Profile
                
              </p>
            </a>
          </li>

		  		 <li class="nav-item">
            <a  href="faqs.html" class="nav-link ">
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
    <section class="content-header">
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
      </div><!-- /.container-fluid -->
    </section>

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
            <div class="col-lg-8 col-12">
            <div class="row">
          
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                              <h3 class="my-0 my-lg-1">1460364<span class="d-block d-sm-none"></span></h3>

                <p class="my-0 my-lg-3">Total Confirmed</p>
              </div>
              <div class="icon">
                <i class="fa fa-hospital"></i>
              </div>
              <!-- <a href="daily.html" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
                    <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 class="my-0 my-lg-1">247181<span class="d-block d-sm-none"></span></h3>

                <p class="my-0 my-lg-3">Active Cases</p>
              </div>
              <div class="icon">
                <i class="fa fa-prescription"></i>
              </div>
              <!-- <a href="daily.html" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 class="my-0 my-lg-1">1207680 <span class="d-block d-sm-none"></span></h3>

                 <p class="my-0 my-lg-3">Recovered</p>
              </div>
              <div class="icon">
                <i class="fa fa-grin-hearts"></i>
              </div>
              <!-- <a href="daily.html" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 class="my-0 my-lg-1">5170<span class="d-block d-sm-none"></span></h3>

                <p class="my-0 my-lg-3">Deaths</p>
              </div>
              <div class="icon">
                <i class="fa fa-frown"></i>
              </div>
              <!-- <a href="deaths.html" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div>
        
        <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-light" style="background:#e5f7e9!important; border: 1px solid #80c590;">
              <div class="inner pb-0 ">
           
                <h3 class="text-success">58,85,342</h3>
				<p>People Vaccinated</p>

              </div>
              <div class="icon">
                <i class="fas fa-syringe text-success "></i>
              </div>
              
              <div class="row px-3">
          
          <div class="col-md-12 col-sm-6 col-12">
          <div class="">

              <div class="info-box-content">
<br><br>
                <table class="table table-sm mb-2">
                  
                  <tr>
                    <td>First dose</td>
                    <td align="left">58,85,342</td>
                    
                  </tr>
                  <tr>
                    <td>Second dose</td>
                    <td align="left">11,06,058</td>
                  </tr>
                  <tr>
                    <td><strong>Total</strong></td>
                    <td align="left"><strong>69,91,400 vaccinations</strong></td>
                  </tr>
                </table>
			<!-- 	<small>*2021 Projected population of Kerala is 3,65,69,000 as per report of National Commission on Population</small> -->
                
                
                
                
               
                
              </div>
              <!-- /.info-box-content -->
            </div>
            
            
              <!-- /.info-box-content -->
            </div>
            
            </div>
     

        
              <!-- <a href="vaccination.html" class="small-box-footer mt-2">More info <i class="fas fa-arrow-circle-right  text-success"></i></a> -->
            </div>
          </div>
          
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->

            <div class="card-body" >
                          <h3 style="color: grey;"><b>About</b></h3><h4>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
</h4>
<br>
  <h3 style="color: grey;"><b>Protect yourself and others from COVID-19</b></h3>
<h4>
If COVID-19 is spreading in your community, stay safe by taking some simple precautions, such as physical distancing, wearing a mask, keeping rooms well ventilated, avoiding crowds, cleaning your hands, and coughing into a bent elbow or tissue. </h4>

<br>
<h3 style="color: grey;"><b>Don’t forget the basics of good hygiene</b></h3>
<ul><h4>
<li>Clean and disinfect surfaces frequently especially those which are regularly touched, such as door handles, faucets and phone screens.</li> 
<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.</li>
<li>Avoid touching your eyes, nose and mouth. Hands touch many surfaces and can pick up viruses. </li>
<li>Cover your mouth and nose with your bent elbow or tissue when you cough or sneeze.</li>
</h4></ul>

                        </div>

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="position:relative; z-index:99; ">
   <small><center>Designed and developed by Anurag A | CovidCare4U 2020</center></small>
    
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="jquery.dataTables.min.js"></script>   



<script src="../cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="../cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>	


</body>
</html>
