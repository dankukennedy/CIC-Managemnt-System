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
<?php // include('include/message.php'); ?>
<!-- Content Row -->
<div class="row">

  <div class="col-md-12">
 <h5 > <i style="color:green; font:200"><?php  include('include/message.php'); ?></i></h5>
    <div class="card">
     <div class="card-header" style="background-color:green ;">
      <h5 style="color:white ;">Add Activities</h5>
     </div>
       <div class="card-body">
       <form action="codes/activity_code.php" method="POST">

       
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
         <!-- <label for="">CIC Name</label>-->
          <input type="hidden" name="cicName" value="<?=$data['cicName'];  ?> "  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">          
         <!-- <label for="">Region</label>-->
          <input type="hidden" name="region"  value="<?=$data['region'];  ?> " class="form-control"  />
        </div>
        </div>

        
        <div class="form-group row">
        <textarea  class="form-control"  name="description" rows="5" cols="10" required> Write Activities Here
                                        
         </textarea>
        </div>

        

        <div class="mb-3">          
          <button type="submit" name="save_activity" class="btn btn-success">Save Activity</button>
        </div>

       </form>

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
3