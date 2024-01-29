<?php 
 include ('config/app.php'); 
 include_once('controllers/AuthenticationController.php');
 include_once('controllers/changePasswordController.php');
 $authenticated=new AuthenticationController;
$data= $authenticated->authManagerDetail();

 include "include/header.php";

include "include/sidebar.php";
include "include/banner.php";


?>



 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manager Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>-->


<!-- Outer Row -->
           
<div class="row justify-content-center">
    
    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row" > 
                    <div class="col-lg-6 d-none d-lg-block " style="background-image: url(img/logo.png);background-repeat: repeat-y;"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2" ><h4 style="color:green ;">Resset Your Password?</h4></h1>
                                <p class="mb-4">We get it, stuff happens. Just enter your Current password below
                                    and to reset your password !!  <?php  include('include/message.php'); ?></p>
                            </div>
                            <form class="user" action="" method="POST">
                                <div class="form-group">
                               <input type="hidden" name="manager_id" value="<?=$data['id'];  ?> " >
                                    
                                    <input type="password" class="form-control form-control-user"
                                        id="password" aria-describedby="passwordHelp" name="currentPassword"
                                        placeholder="Enter Your Current Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="newPassword" aria-describedby="newPasswordHelp" name="newPassword"
                                        placeholder="Enter New Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="repeatPassword" aria-describedby="rePasswordHelp" name="rePassword"
                                        placeholder="Repeat Password" required>
                                </div>

                                <div class="form-group">
                            <button type="submit" class="btn btn-success btn-user btn-block"  id="resetPasswordId" name="resetPassword"
                                >Reset Password </button>
                        </div>
                              <!--  <a href="#" name="resetPassword" class="btn btn-primary btn-user btn-block">
                                    Reset Password
                                </a>-->
                            </form>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
     
<!-- Content Row -->
<div class="row">





</div>






</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  

          

          

<?php
            include "include/footer.php";


            ?>
