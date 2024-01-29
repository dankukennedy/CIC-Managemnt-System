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
<?php // include('include/message.php'); ?>
<!-- Content Row -->
<div class="row">

  <div class="col-md-12">
 <h5 > <i style="color:seagreen; font:200"><?php  include('include/ad_message.php'); ?></i></h5>
    <div class="card">
     <div class="card-header" style="background-color: #3b5998 ;">
      <h5 style="color:white ;">Add CIC Pictures and Description</h5>
     </div>
       <div class="card-body">
       <form action="codes/ad_cicinfo_code.php" enctype="multipart/form-data" method="POST">

       
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <!--<label for="">CIC Name</label>-->
          <input type="hidden" name="cicName" value="<?=$data['cicName'];  ?> "  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
            <!-- <label for=""> Region</label>-->
          <input type="hidden" name="region"  value="<?=$data['region'];  ?> " class="form-control"  />
        </div>
        </div>

        
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">          
          <label for="">Upload CIC Pictures</label>
          <input type="file" name="file" class="form-control"  />
        </div>
        


        <div class="col-sm-6 mb-3 mb-sm-0">  
        <textarea  class="form-control"  name="description" rows="2" cols="2" required> Write Description Here
                                        
         </textarea>
        </div>
        </div>

        

        <div class="mb-3">          
          <button type="submit" name="save_cicInfo" class="btn btn-outline-info">Save CIC Information</button>
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
            include "include/ad_footer.php";


            ?>
3