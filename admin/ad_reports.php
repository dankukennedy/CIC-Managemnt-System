<?php 
 include ('config/app.php'); 
include_once('controllers/ad_AuthenticationController.php');
$data=$authenticated-> authZonalDetail();


include "include/ad_header.php";

include "include/ad_sidebar.php";
include "include/ad_banner.php";


?>
 
 <div class="container-fluid">

<!-- Page Heading -->
<!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>-->
<?php  include('include/ad_message.php'); ?>
<!-- Content Row -->
<div class="row">

  <!-- Computer Basics Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"> 
                       New  Reports </a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_addReport.php')?>"style="text-decoration:blink;color:#2f4f4f;"> Add New Report</a></div>
                  </div>
                  <div class="col-auto">
                  <a  href="<?= base_url('ad_addReport.php')?>" style="text-decoration:blink;color:#2f4f4f;"><i class="fas fa-book fa-2x text-yellow-300"> </a></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <!--   Reports (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                          Reports At Your Center</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><a  href="<?= base_url('ad_viewReport.php');?>"style="text-decoration:blink;color:#2f4f4f;">View all Your Report</a></div>
                    </div>
                    <div class="col-auto">
                    <a  href="<?= base_url('ad_viewreport.php');?>" style="text-decoration:blink;color:#2f4f4f;">  <i class="fas fa-book fa-2x text-green-300"></a></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Reports (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                          Report in Your Region</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><a  href="<?= base_url('ad_allReport.php');?>"style="text-decoration:blink;color:#2f4f4f;">View all Reports</a></div>
                    </div>
                    <div class="col-auto">
                    <a  href="<?= base_url('ad_allReport.php');?>" style="text-decoration:blink;color:#2f4f4f;">  <i class="fas fa-book fa-2x text-green-300"></a></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    




</div>








</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
            include "include/ad_footer.php";


            ?>

  
   





</div>







