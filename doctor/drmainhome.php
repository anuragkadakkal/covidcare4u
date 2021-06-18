
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><h6 style="font-family: 'Inconsolata', monospace;text-align: center;">Covid-19 KERALA - Statistics<br>as on : 
                  <?php
                  $str=$arr[0];
                  $date=date_create($str);
                  echo date_format($date,"D d M Y").", "; 
                  echo $arr[1].$arr[2]; 
                  ?> IST
               <b><br>[Source : <a href="https://dashboard.kerala.gov.in/" target="_blank" class="text-info">GoK Dashboard]</a></b></h6></li>
            </ol>
          </div>
        </div>
      </div>
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
                              <h3 class="my-0 my-lg-1"><?php $pos=array_search("Statistics",$arr); echo $arr[$pos+1]; ?><span class="d-block d-sm-none"></span></h3>

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
                <h3 class="my-0 my-lg-1"><?php $pos=array_search("Active",$arr); echo $arr[$pos-1]; ?><span class="d-block d-sm-none"></span></h3>

                <p class="my-0 my-lg-3">Active Cases <?php echo $arr[$pos+2]; ?></p>
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
                <h3 class="my-0 my-lg-1"><?php $pos=array_search("Recovered",$arr); echo $arr[$pos-2].$arr[$pos-1]; ?> <span class="d-block d-sm-none"></span></h3>

                 <p class="my-0 my-lg-3">Recovered <?php echo $arr[$pos+1]; ?></p>
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
                <h3 class="my-0 my-lg-1"><?php $pos=array_search("Deaths",$arr);echo $arr[$pos-2].$arr[$pos-1]; ?>
<span class="d-block d-sm-none"></span></h3>

                <p class="my-0 my-lg-3">Deaths <?php echo $arr[$pos+1]; ?></p>
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
           
                <h3 class="text-success"><?php $pos=array_search("≈",$arr);
                  $pos=array_search("People",$arr);
                  echo $arr[$pos-1]; $pos=array_search("≈",$arr);
                  ?></h3>
        <p>People Vaccinated <?php echo " (".$arr[$pos+1].")"; ?></p>

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
                    <td align="left"><?php $pos=array_search("First",$arr);
                  echo $arr[$pos+2]."<br>"; ?></td>
                    
                  </tr>
                  <tr>
                    <td>Second dose</td>
                    <td align="left"><?php $pos=array_search("Second",$arr);
                  echo $arr[$pos+2]; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Total</strong></td>
                    <td align="left"><strong><?php $stringneeded = string_between_two_string($response, 'Second', 'Cumulative Summary of Kerala');
                  $arr=preg_split("/\s+/", trim($stringneeded));
                  $pos=array_search("Total",$arr);
                  echo $arr[$pos+1]." Vaccinations"; ?></strong></td>
                  </tr>
                </table>
      <!--  <small>*2021 Projected population of Kerala is 3,65,69,000 as per report of National Commission on Population</small> -->
                
                
                
                
               
                
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