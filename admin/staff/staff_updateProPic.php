<?php 
include ('config/app.php');
include "include/staff_header.php";

include "include/staff_sidebar.php";
include "include/staff_banner.php";


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
                        <?php  include('include/staff_message.php'); ?>
                            <form class="user">
                            <div class="profile-img">
                        
                        <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>-->
                         <img src="">
                         <div class="file btn btn-lg btn-primary">
                             Change Photo
                             <input type="file" name="file"/>
                            
                           </div>
                             <div>
                             <hr>
                              <button type="submit" class="btn btn-success btn-user btn-block"  id="profilePic" name="updateProfilePic">Update Picture</button>
                             </div>
                           </div>

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
