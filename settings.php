<?php 
 include ('config/app.php'); 
include_once('controllers/AuthenticationController.php');
$data=$authenticated-> authManagerDetail();


include "include/header.php";

include "include/sidebar.php";
include "include/banner.php";


?>
 
 <div class="container-fluid">

<!-- Page Heading -->
<!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>-->
<?php  include('include/message.php'); ?>
<!-- Content Row -->
<div class="row">

  <!-- Computer Basics Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> 
                       My Profile </a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('ad_profile.php')?>"style="text-decoration:blink;color:#2f4f4f;">Profile Details</a></div>
                  </div>
                  <div class="col-auto">
                  <a  href="<?= base_url('profile.php')?>" style="text-decoration:blink;color:#2f4f4f;"><i class="fas fa-user fa-2x text-yellow-300"> </a></i>
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
                          My Security</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><a  href="<?= base_url('changePassword.php');?>?id=<?=$data['id'];?>"style="text-decoration:blink;color:#2f4f4f;">Change Password</a></div>
                    </div>
                    <div class="col-auto">
                    <a  href="<?= base_url('changePassword.php');?>?id=<?=$data['id'];?>" style="text-decoration:blink;color:#2f4f4f;">  <i class="fas fa-key fa-2x text-green-300"></a></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!--   Inventory (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                         Update Profile Picture</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">  <a  href="<?= base_url('updateProPic.php')?>" style="text-decoration:blink;color:#2f4f4f;">Edit Profile</a></div>
                    </div>
                    <div class="col-auto">
                    <a  href="<?= base_url('updateProPic.php')?>" style="text-decoration:blink;color:#2f4f4f;">  <i class="fas fa-image fa-2x text-blue-300"></i></a>
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
            include "include/footer.php";


            ?>
